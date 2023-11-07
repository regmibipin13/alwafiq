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
                <h5 class="text-danger">Objects List</h5>
            </div>
        </div>
    </div>
    <div class="card-body p-0" style="height: calc(100vh - 170px)">
        <div class="falcon-data-table">
            <div style="overflow-y: scroll;max-height: calc(100vh - 164px);">
                <table
                    class="table table-sm mb-0 table-striped table-dashboard fs--1 data-table border-bottom border-200">
                    <thead class="bg-200 text-900">
                        <tr>
                            <th class="align-middle sort">Object Id</th>
                            <th class="align-middle sort">Location</th>
                            <th class="align-middle sort">Action</th>
                        </tr>
                    </thead>
                    <tbody id="customers">
                        @forelse ($results as $item)
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle">
                                    {{ $item->object_id }}
                                </th>
                                <td class="py-2 align-middle">
                                    {{ $item->location }}
                                </td>

                                <td class="align-middle fs-0">
                                    <form action="{{ url('delete/objects/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
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
