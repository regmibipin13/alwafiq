<?php

namespace App\Http\Controllers\Web\DeliveryDispatcher;

use App\Base\Filters\Admin\RequestFilter;
use App\Base\Libraries\QueryFilter\QueryFilterContract;
use App\Http\Controllers\Web\BaseController;
use App\Models\Request\Request as RequestRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class DeliveryDispatcherController extends BaseController
{
    public function index()
    {
        $main_menu = 'dispatch_request';

        $sub_menu = null;

        $page = 'Dispatch Requests';

        return view('admin.dispatcher.requests', compact(['main_menu', 'sub_menu', 'page']));
    }

    // New Tasks Management

    public function tasks()
    {
        return view('dispatch-delivery.tasks.index');
    }




    public function dispatchView()
    {
        $main_menu = 'dispatch_request';

        $sub_menu = null;

        $page = 'Dispatch Requests';

        $default_lat = env('DEFAULT_LAT');
        $default_lng = env('DEFAULT_LNG');
        return view('admin.dispatcher.dispatch', compact(['main_menu', 'sub_menu', 'page', 'default_lat', 'default_lng']));
    }

    public function bookNow()
    {
        $main_menu = 'dispatch_request';

        $sub_menu = null;
        $default_lat = env('DEFAULT_LAT');
        $default_lng = env('DEFAULT_LNG');

        return view('dispatch-delivery.book-now')->with(compact('main_menu', 'sub_menu', 'default_lat', 'default_lng'));
    }

    /**
     *
     * create new request
     */
    public function createRequest(Request $request)
    {
        dd($request->all());
    }

    public function loginView()
    {
        return view('admin.dispatch-delivery-login');
    }

    public function dashboard()
    {

        return view('dispatch-delivery.home');
    }

    public function fetchBookingScreen($modal)
    {

        return view("dispatch-delivery.$modal");
    }

    public function fetchRequestLists(QueryFilterContract $queryFilter)
    {

        $query = RequestRequest::where('transport_type', 'delivery');

        // dd($query);

        $results = $queryFilter->builder($query)->customFilter(new RequestFilter)->paginate();

        return view('dispatch-delivery.request-list', compact('results'));
    }

    public function tasksList()
    {
        $results = Task::orderBy('id', 'desc')->paginate(20);
        return view('dispatch-delivery.tasks.task-list', compact('results'));
    }

    public function storeTask(Request $request)
    {
        $sanitized = $request->validate([
            'customer_id' => ['required'],
            'customer_name' => ['required'],
            'object_id' => ['required'],
            'emirates' => ['required'],
            'area' => ['required'],
            'address' => ['required'],
            'address_latitude' => ['required'],
            'address_longitude' => ['required'],
            'driver_id' => ['required'],
        ]);

        Task::create($sanitized);
        return redirect()->back();
    }

    public function profile()
    {
        return view('dispatch-delivery.profile');
    }

    public function fetchSingleRequest(RequestRequest $requestmodel)
    {
        return $requestmodel;
    }

    public function requestDetailedView(RequestRequest $requestmodel)
    {
        $item = $requestmodel;

        return view('dispatch-delivery.request_detail', compact('item'));
    }
}
