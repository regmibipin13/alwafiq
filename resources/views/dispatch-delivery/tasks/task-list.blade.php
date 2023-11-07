<style>
    .timeline li {
        list-style: none;
    }

    .timeline li::before {
        content: "" !important;
        position: absolute !important;
        height: 64px !important;
        width: 3px !important;
        background: #748194;
        top: unset !important;
        left: unset !important;
        right: unset !important;
        margin-top: 10px;
        margin-left: -40px;
    }

    .timeline li::after {
        content: "" !important;
        position: absolute !important;
        height: 22px !important;
        width: 22px !important;
        border-radius: 50% !important;
        background-color: #748194;
        margin-left: -26px !important;
        margin-top: -15px !important;
    }

    .timeline li p::before {
        content: "";
        position: absolute;
        background: #fff;
        height: 10px;
        width: 10px;
        left: -20px;
        z-index: 9;
        top: 4px;
        border-radius: 10px;
    }

    .timeline li:nth-child(1)::before,
    .timeline li:nth-child(1)::after {
        background-color: #FF0000 !important;
    }

    .timeline li:nth-child(2)::before,
    .timeline li:nth-child(2)::after {
        background-color: #0000FF !important;
    }

    .timeline li:nth-child(3)::before,
    .timeline li:nth-child(3)::after {
        background-color: #FF7F00 !important;
    }

    .timeline li:nth-child(4)::before,
    .timeline li:nth-child(4)::after {
        background-color: #FFFF00 !important;
    }

    .timeline li:nth-child(5)::before,
    .timeline li:nth-child(5)::after {
        background-color: #00FF00 !important;
    }
</style>

<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between">
            <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                <h5 class="text-danger">Tasks List</h5>
            </div>
            {{-- <div class="col-8 col-sm-auto text-right pl-2">
                <div class="d-none" id="customers-actions">
                    <div class="input-group input-group-sm"><select class="custom-select cus" aria-label="Bulk actions">
                            <option selected="">@lang('view_pages.bulk_actions')</option>
                            <option value="Delete">@lang('view_pages.delete')</option>
                            <option value="Archive">@lang('view_pages.archive')</option>
                        </select><button class="btn btn-falcon-default btn-sm ml-2"
                            type="button">@lang('view_pages.apply')</button>
                    </div>
                </div>
                <div id="customer-table-actions">
                    <button class="btn btn-falcon-default btn-sm tripStatusFilter" data-tripstatus="all" data-val="1"
                        type="button">
                        <span class="d-none d-sm-inline-block ml-1">
                            @lang('view_pages.all')
                        </span>
                    </button>
                    <button class="btn btn-falcon-default btn-sm tripStatusFilter" data-tripstatus="is_assigned"
                        data-val="1" type="button">
                        <span class="d-none d-sm-inline-block ml-1">
                            @lang('view_pages.assigned')
                        </span>
                    </button>
                    <button class="btn btn-falcon-default btn-sm tripStatusFilter" data-tripstatus="is_trip_start"
                        data-val="0" type="button">
                        <span class="d-none d-sm-inline-block ml-1">
                            @lang('view_pages.unassigned')
                        </span>
                    </button>
                    <button class="btn btn-falcon-default btn-sm tripStatusFilter" data-tripstatus="is_completed"
                        data-val="1" type="button">
                        <span class="d-none d-sm-inline-block ml-1">
                            @lang('view_pages.completed')
                        </span>
                    </button>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="card-body p-0" style="height: calc(100vh - 170px)">
        <div class="falcon-data-table">
            <div style="overflow-y: scroll;max-height: calc(100vh - 164px);">
                <table
                    class="table table-sm mb-0 table-striped table-dashboard fs--1 data-table border-bottom border-200">
                    <thead class="bg-200 text-900">
                        <tr>
                            <th class="align-middle sort">Task Id</th>
                            <th class="align-middle sort">Rider</th>
                            <th class="align-middle sort">Address</th>
                            <th class="align-middle sort">Object Id</th>
                            <th class="align-middle sort">Status</th>
                        </tr>
                    </thead>
                    <tbody id="customers">
                        @forelse ($results as $item)
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#task-detail-{{ $item->id }}" data-id="{{ $item->id }}">
                                        {{ $item->id }}
                                    </a>

                                    <div class="modal fade" id="task-detail-{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Task Detail (#
                                                        {{ $item->id }})</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th>Customer Id</th>
                                                                <td>{{ $item->customer_id }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Customer Name</th>
                                                                <td>{{ $item->customer_name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Object Id</th>
                                                                <td>{{ $item->object_id }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Emirates</th>
                                                                <td>{{ $item->emirates }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Area</th>
                                                                <td>{{ $item->area }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Address</th>
                                                                <td>{{ $item->address }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Rider / Driver</th>
                                                                <td>{{ $item->driver->name ?? 'Name Not Available' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Status</th>
                                                                <td>{{ $item->status ?? 'pending' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Submission Date</th>
                                                                <td>{{ $item->submission_date ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Remarks By Wafiq delivery services</th>
                                                                <td>{{ $item->remarks ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Updated Remarks</th>
                                                                <td>{{ $item->updated_remarks ?? '' }}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <td class="py-2 align-middle">
                                    {{ $item->driver->name }}
                                </td>
                                <td class="py-2 align-middle pl-5">
                                    {{ $item->address }}
                                </td>
                                <td class="align-middle fs-0" id="{{ $item->id }}">
                                    {{ $item->object_id }}
                                </td>
                                <td class="align-middle fs-0" id="{{ $item->id }}">
                                    {{ $item->status ?? 'pending' }}
                                </td>

                            </tr>



                        @empty
                            <tr>
                                <td class="py-2 align-middle pl-5 text-center text-danger" colspan="4">
                                    @lang('view_pages.no_results')
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $results->links() }}
            </div>
        </div>
    </div>
</div>
