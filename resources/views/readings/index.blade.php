@extends('dispatch.layout')
@push('dispatch-css')
    <style>
        .form-group {
            margin-right: 20px;
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

            <div class="card">
                <div class="card-header">
                    <a href="{{ route('objects.edit', $object->id) }}" class="btn btn-success my-2">Edit this object</a>
                    <div>
                        Object Id: {{ $object->object_id }} <br />
                        Total Readings Count: {{ $readings->count() }} <br />
                        Total Readings (Sum) : {{ $readings->sum('reading_value') }}<br />
                        Last Reading Visit : {{ $readings->first()->visit_date }}
                    </div>
                    <div>
                        <form action="{{ route('objects.readings.index', $object->id) }}" method="GET"
                            class="d-flex align-items-end">
                            <div class="form-group">
                                <label for="reading_identifier">Reading</label>
                                <select name="reading_type" id="reading_identifier" class="form-control">
                                    <option value="" selected>Select Reading Identifier</option>
                                    @foreach (App\Models\ReadingType::all() as $r)
                                        <option
                                            value="{{ $r->id }}"{{ request()->reading_type == $r->id ? 'selected' : '' }}>
                                            {{ $r->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" name="date"
                                    value="{{ request()->date ?? '' }}">
                            </div>

                            <button class="btn btn-primary">Filter</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Reading Identifier</th>
                            <th>Visit Date</th>
                            <th>Reading Value</th>
                            <th>Remarks</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($readings as $reading)
                            <tr>
                                <td>{{ $reading->reading_type->name }}</td>
                                <td>{{ $reading->visit_date }}</td>
                                <td>{{ $reading->reading_value }}</td>
                                <td>{{ $reading->remarks }}</td>
                                <td>{{ $reading->image }}</td>
                                <td class="d-flex align-items-center">
                                    <form action="{{ route('objects.readings.destroy', [$object->id, $reading->id]) }}"
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
                    </table>
                </div>
                <div class="card-footer">
                    {{ $readings->links() }}
                </div>
            </div>

            <div class="card my-2 p-4">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Object Id</th>
                            <td>{{ $object->object_id }}</td>
                        </tr>
                        <tr>
                            <th>Contract Transaction</th>
                            <td>{{ $object->contract_transaction }}</td>
                        </tr>
                        <tr>
                            <th>Customer</th>
                            <td>{{ $object->customer }}</td>
                        </tr>
                        <tr>
                            <th>Invoice Type</th>
                            <td>{{ $object->invoice_type }}</td>
                        </tr>
                        <tr>
                            <th>Frequency</th>
                            <td>{{ $object->frequency }}</td>
                        </tr>
                        <tr>
                            <th>Emirates</th>
                            <td>{{ $object->emirates }}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>{{ $object->city }}</td>
                        </tr>

                        <tr>
                            <th>Area</th>
                            <td>{{ $object->area }}</td>
                        </tr>
                        <tr>
                            <th>Visiting Address</th>
                            <td>{{ $object->visiting_address }}</td>
                        </tr>
                        <tr>
                            <th>Google Address</th>
                            <td>{{ $object->google_address }}</td>
                        </tr>
                        <tr>
                            <th>Contact Name</th>
                            <td>{{ $object->contact_name }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $object->phone }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $object->email }}</td>
                        </tr>
                        <tr>
                            <th>Remarks</th>
                            <td>{{ $object->remarks }}</td>
                        </tr>
                        <tr>
                            <th>Batch</th>
                            <td>{{ $object->batch }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card my-2">
                <div class="card-header">
                    Rider Details
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>

                            <tr>
                                <th>Rider</th>
                                <td>{{ $object->rider->user->name }}</td>
                            </tr>

                            <tr>
                                <th>Visiting Address</th>
                                <td>{{ $object->visiting_address }}</td>
                            </tr>
                            <tr>
                                <th>Google Address</th>
                                <td>{{ $object->google_address }}</td>
                            </tr>

                            <tr>
                                <th>Month Wise Remarks</th>
                                <td>{{ $object->month_wise_remarks }}</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
@endsection
