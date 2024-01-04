@extends('dispatch.layout')
@push('dispatch-css')
    <style>
        .tab-pane {
            padding: 10px;

        }

        .filters .form-control {
            width: 30%;
        }
    </style>
@endpush
@section('dispatch-content')
    <main class="main">
        <div class="container-fluid">
            <div class="card my-2">
                <div class="card-body  py-0 position-relative">
                    <nav class="navbar navbar-light navbar-top navbar-expand-xl">
                        <a class="navbar-brand me-1 me-sm-3" href="#">
                            <div class="d-flex align-items-center"><img class="me-2"
                                    src="{{ app_logo() ?? asset('images/email/logo.svg') }}"
                                    style="width: 26px;padding-right: 5px;" alt="" />
                                <span>
                                    {{ app_name() ?? 'Tagxi' }}
                                </span>

                            </div>
                        </a>

                        <a href="{{ url('/dispatch/dashboard') }}" class="btn btn-danger">Back To Home</a>
                    </nav>
                </div>
            </div>

            <div class="card py-2 px-2">
                @if ($errors->any())
                    <div class="card-header">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif
                <div class="card-body">
                    <div class="modal fade" id="excel-import" tabindex="-1" role="dialog" aria-labelledby="excel-import"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('objects.import') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="excel">Excel File</label>
                                            <input type="file" class="form-control" name="file"
                                                accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2">Upload</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div>
                            <button class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#excel-import">Import</button>

                        </div>
                        &nbsp;&nbsp;
                        <form action="{{ route('objects.export') }}" method="POST">
                            @csrf
                            <button class="btn btn-primary" type="submit">Export</button>
                        </form>
                        &nbsp;&nbsp;
                        <form action="{{ route('objects.delete') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete All</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card my-2">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                            type="button" role="tab" aria-controls="nav-home" aria-selected="true">Objects</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Reading
                            Types</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                            type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Invoice
                            Type</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-areas"
                            type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Areas</button>
                        <button class="nav-link" id="nav-remarks-tab" data-bs-toggle="tab" data-bs-target="#nav-remarks"
                            type="button" role="tab" aria-controls="nav-contact"
                            aria-selected="false">Remarks</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="my-2">
                            <a href="{{ route('objects.create') }}" class="btn btn-success mb-2">Add New</a>
                            <form action="" class="d-flex align-items-center justify-content-between filters">
                                <input type="text" name="object_id" class="form-control"
                                    value="{{ request('object_id') }}" placeholder="Object Id">
                                <button type="submit" class="btn btn-primary">Apply Filters</button>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-2">
                                <thead>
                                    <tr>
                                        <th>Object Id</th>
                                        <th>Contract Transaction</th>
                                        <th>Customer</th>
                                        <th>Invoice Type</th>
                                        <th>Frequency</th>
                                        <th>Emirates</th>
                                        <th>Rider</th>
                                        <th>Area</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($objects as $object)
                                        <tr>
                                            <td><a
                                                    href="{{ route('objects.readings.index', $object->id) }}">{{ $object->object_id }}</a>
                                            </td>
                                            <td>{{ $object->contract_transaction }}</td>
                                            <td>{{ $object->customer }}</td>
                                            <td>{{ $object->invoice_type }}</td>
                                            <td>{{ $object->frequency }}</td>
                                            <td>{{ $object->emirates }}</td>
                                            <td>{{ $object->rider ? $object->rider->user->name : '' }}</td>
                                            <td>{{ $object->area }}</td>

                                            <td class="d-flex align-items-center">
                                                <a href="{{ route('objects.show', $object->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                &nbsp;
                                                <a href="{{ route('objects.edit', $object->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                &nbsp;
                                                <form action="{{ route('objects.destroy', $object->id) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this item?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                        {{ $objects->links() }}

                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="my-2">
                            <a href="{{ route('reading_types.create') }}" class="btn btn-success mb-2">Add New</a>

                        </div>

                        <table class="table table-bordered mb-2 table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($readingTypes as $readingType)
                                    <tr>
                                        <td>{{ $readingType->id }}</td>
                                        <td>{{ $readingType->name }}</td>
                                        <td class="d-flex align-items-center">

                                            <a href="{{ route('reading_types.edit', $readingType->id) }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            &nbsp;
                                            <form action="{{ route('reading_types.destroy', $readingType->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this item?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $readingTypes->links() }}
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="my-2">
                            <a href="{{ route('invoice_types.create') }}" class="btn btn-success mb-2">Add New</a>

                        </div>

                        <table class="table table-bordered mb-2 table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoiceTypes as $readingType)
                                    <tr>
                                        <td>{{ $readingType->id }}</td>
                                        <td>{{ $readingType->name }}</td>
                                        <td class="d-flex align-items-center">

                                            <a href="{{ route('invoice_types.edit', $readingType->id) }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            &nbsp;
                                            <form action="{{ route('invoice_types.destroy', $readingType->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this item?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-areas" role="tabpanel" aria-labelledby="nav-areas-tab">
                        <div class="my-2">
                            <a href="{{ route('areas.create') }}" class="btn btn-success mb-2">Add New</a>

                        </div>

                        <table class="table table-bordered mb-2 table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($areas as $readingType)
                                    <tr>
                                        <td>{{ $readingType->id }}</td>
                                        <td>{{ $readingType->name }}</td>
                                        <td class="d-flex align-items-center">

                                            <a href="{{ route('areas.edit', $readingType->id) }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            &nbsp;
                                            <form action="{{ route('areas.destroy', $readingType->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this item?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-remarks" role="tabpanel" aria-labelledby="nav-remarks-tab">
                        <div class="my-2">
                            <a href="{{ route('remarks.create') }}" class="btn btn-success mb-2">Add New</a>

                        </div>

                        <table class="table table-bordered mb-2 table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($remarks as $readingType)
                                    <tr>
                                        <td>{{ $readingType->id }}</td>
                                        <td>{{ $readingType->name }}</td>
                                        <td class="d-flex align-items-center">

                                            <a href="{{ route('remarks.edit', $readingType->id) }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            &nbsp;
                                            <form action="{{ route('remarks.destroy', $readingType->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this item?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
