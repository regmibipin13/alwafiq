@extends('dispatch.layout')
@push('dispatch-css')
    <style>

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
                    @if ($object->rider)
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
                    @endif
                </div>
            </div>
            <div class="card my-4">
                <a href="{{ route('objects.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>

    </main>
@endsection
