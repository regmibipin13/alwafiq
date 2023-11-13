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
                <form action="{{ route('invoice_types.update', $invoiceType->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    @include('invoice_types.form')

                    <button type="submit" class="btn btn-success my-2">Save</button>
                </form>
            </div>
        </div>
        </div>
    </main>
@endsection
