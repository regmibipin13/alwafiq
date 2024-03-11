<?php

namespace App\Http\Controllers;

use App\Exports\AssetObjectExport;
use App\Imports\AssetObjectImport;
use App\Models\Admin\Driver;
use App\Models\Area;
use App\Models\AssetObject;
use App\Models\InvoiceType;
use App\Models\Reading;
use App\Models\ReadingType;
use App\Models\Remark;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ObjectsController extends Controller
{

    public function export()
    {
        return Excel::download(new AssetObjectExport, 'reports.xlsx');
    }

    public function import(Request $request)
    {
        Excel::import(new AssetObjectImport, $request->file('file'));
        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $objects = AssetObject::filters($request);
        $readingTypes = ReadingType::orderBy('id', 'desc')->paginate(20);
        $invoiceTypes = InvoiceType::orderBy('id', 'desc')->paginate(20);
        $areas = Area::orderBy('id', 'desc')->paginate(20);
        $remarks = Remark::orderBy('id', 'desc')->paginate(20);
        $data = [];
        $data['total_objects'] = $objects->count();
        $data['total_tasks'] = Task::whereIn('object_id', collect($objects->get())->map->id->toArray())->whereDate('date', $request->visit_date ?? '')->count();
        $data['total_readings'] = Reading::whereIn('object_id', collect($objects->get())->map->id->toArray())->count();
        $objects = $objects->paginate(20);
        return view('objects.index', compact('objects', 'readingTypes', 'invoiceTypes', 'areas', 'remarks', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $riders = Driver::all();
        $invoiceTypes = InvoiceType::all();
        $areas = Area::all();
        return view('objects.create', compact('riders', 'invoiceTypes', 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sanitized = $request->validate([
            'object_id' => 'required|string|unique:objects',
            'contract_transaction' => 'required',
            'customer' => 'required',
            'invoice_type' => 'required',
            'frequency' => 'required',
            'emirates' => 'required',
            'city' => 'required',
            'rider_id' => 'required',
            'area' => 'required',
            'visiting_address' => 'required',
            'google_address' => 'required',
            'contact_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'remarks' => 'required',
            'month_wise_remarks' => 'required',
            'batch' => 'required',
        ]);
        AssetObject::create($sanitized);
        return redirect()->route('objects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $object = AssetObject::find($id);
        return view('objects.show', compact('object'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $object = AssetObject::find($id);
        $riders = Driver::all();
        $invoiceTypes = InvoiceType::all();
        $areas = Area::all();
        return view('objects.edit', compact('object', 'riders', 'invoiceTypes', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sanitized = $request->validate([
            'object_id' => 'required|string|unique:objects,object_id,' . $id,
            'contract_transaction' => 'required',
            'customer' => 'required',
            'invoice_type' => 'required',
            'frequency' => 'required',
            'emirates' => 'required',
            'city' => 'required',
            'rider_id' => 'required',
            'area' => 'required',
            'visiting_address' => 'required',
            'google_address' => 'required',
            'contact_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'remarks' => 'required',
            'month_wise_remarks' => 'required',
            'batch' => 'required',
        ]);

        $object = AssetObject::findOrFail($id);
        $object->update($sanitized);

        return redirect()->route('objects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $object = AssetObject::findOrFail($id);
        $object->delete();
        return redirect()->back();
    }

    public function deleteAll()
    {
        AssetObject::where('id', '>', 0)->delete();
        return redirect()->back();
    }

    public function readingsIndex($id, Request $request)
    {
        $object = AssetObject::findOrFail($id);
        $readings = (new Reading)->newQuery();
        if ($request->has('reading_type') && $request->reading_type !== null) {
            $readings->where('reading_type_id', $request->reading_type);
        }
        if ($request->has('date') && $request->date !== null) {
            $readings->where('visit_date', $request->date);
        }
        $readings = $readings->orderBy('visit_date', 'desc')->paginate(20);
        $tasks = Task::where('object_id', $object->id)->orderBy('date', 'desc')->paginate(20);
        return view('readings.index', compact('object', 'readings', 'tasks'));
    }

    public function readingsDelete($objectId, $readingId)
    {
        $reading = Reading::find($readingId);
        $reading->delete();
        return redirect()->back();
    }
}
