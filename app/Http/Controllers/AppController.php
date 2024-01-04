<?php

namespace App\Http\Controllers;

use App\Base\Services\ImageUploader\ImageUploaderContract;
use App\Models\Admin\Driver;
use App\Models\AssetObject;
use App\Models\Reading;
use App\Models\ReadingType;
use App\Models\Remark;
use App\Models\Task;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function analytics(Request $request)
    {
        $sanitized = $request->validate(['user_id' => 'required']);
        $data = [];
        $user = User::find($sanitized['user_id']);
        $objects = AssetObject::where('rider_id', $user->driver->id);
        $data['total_objects'] = $objects->count();
        $data['total_tasks_today'] = Task::whereIn('object_id', collect($objects->get())->map->id->toArray())->whereDate('date', Carbon::now())->count();
        $data['total_readings_submitted_today'] = Reading::whereIn('object_id', collect($objects->get())->map->id->toArray())->whereDate('created_at', Carbon::now())->count();

        return response()->json($data);
    }
    public function login(Request $request)
    {
        $sanitized = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $sanitized['email'])->first();
        if ($user) {
            $token = $user->createToken('Alwafiq')->accessToken;
            return response()->json(['token' => $token, 'data' => $user], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function objects(Request $request)
    {
        $sanitized = $request->validate(['user_id' => 'required']);
        $user = User::find($sanitized['user_id']);
        $objects = (new AssetObject)->newQuery();
        if ($request->has('object_id') && $request->object_id !== null) {
            $objects->where('object_id', $request->object_id);
        }
        if ($request->has('date') && $request->date !== null) {
            $request->whereDate('last_visit_date', Carbon::parse($request->date));
        }
        $objects = $objects->where('rider_id', $user->driver->id)->orderBy('id', 'desc')->paginate(20);
        return response()->json(['data' => $objects], 200);
    }

    public function objectShow(Request $request)
    {
        $sanitized = $request->validate(['object_id' => 'required']);
        $object = AssetObject::find($sanitized['object_id']);
        return response()->json(['data' => $object], 200);
    }

    public function objectReadings(Request $request)
    {
        $sanitized = $request->validate(['object_id' => 'required']);
        $readings = (new Reading)->newQuery();
        if ($request->has('date') && $request->date !== null) {
            $readings->where('visit_date', $request->date);
        }
        if ($request->has('reading_type_id') && $request->reading_type_id !== null) {
            $readings->where('reading_type_id', $request->reading_type_id);
        }
        $readings = $readings->where('object_id', $sanitized['object_id'])->orderBy('id', 'desc')->paginate(20);
        return response()->json(['data' => $readings], 200);
    }

    public function addReading(Request $request)
    {
        $sanitized = $request->validate([
            'object_id' => 'required',
            'reading_type_id' => 'required',
            'reading_value' => 'required',
            'visit_date' => 'required',
            'remarks' => 'required',
            'image' => 'nullable',
        ]);
        $reading = Reading::create($sanitized);

        if ($request->has('image') && $request->image !== null) {
            $reading->addMedia($request->image)->toMediaCollection();
        }

        if ($reading) {
            return response()->json(['status' => 'success', 'data' => $reading], 200);
        } else {
            return response()->json(['status' => 'error'], 400);
        }
    }

    public function readingTypes()
    {
        $readingTypes = ReadingType::all();
        return response()->json(['data' => $readingTypes]);
    }

    public function getRemarks()
    {
        $remarks = Remark::all();
        return response()->json(['data' => $remarks]);
    }
}
