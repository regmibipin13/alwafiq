@extends('admin.layouts.app')

@section('content')


    <!-- Start Page content -->
    <!-- <section class="content">
        <h1>Hai Testing Request Edit</h1>
    </section> -->


@foreach ($request_data as $data)
    <!-- Start Page content -->
<div class="content">
<div class="container-fluid">
    

<div class="row">
<div class="col-sm-12">
<div class="box">
    <div class="box-header with-border">
            <h3>Request Number : {{$data->request_number}}</h3>
        </div>
</div>
<div class="box">
        <div class="box-header with-border">
            <a href="{{url('requests')}}">
                <button class="btn btn-danger btn-sm pull-right" type="submit">
                    <i class="mdi mdi-keyboard-backspace mr-2"></i>
                    @lang('view_pages.back')
                </button>
            </a>
        </div>

<div class="col-sm-12">

<form  method="post" class="form-horizontal" action="" enctype="multipart/form-data">
{{csrf_field()}}

<div class="row">
    

    <div class="col-6" id="serviceLocation" style="display:none">
    <div class="form-group">
    <label for="admin_id">
        <span class="text-danger">*</span>
    </label>
    <select name="service_location_id" id="service_location_id" class="form-control">
        <option value="" selected disabled></option>
        
        <option value=""></option>
        
    </select>
    </div>
</div>
</div>

<div class="row">
        <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Pickup Location<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" 
            value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Drop Location<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>

<div class="row">
        <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Zone<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Transport Type<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>

<div class="row">
        <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Vehicle Type<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Trip Time<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>

<div class="row">
        <div class="col-6">
                <div class="form-group">
                <label for="role">Trip Status
                    <span class="text-danger">*</span>
                </label>
                <select name="role" id="role" class="form-control" onchange="" required>
                    <option value="" selected disabled></option>
                    
                    <option value="" </option>
                   
                </select>
                </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Goods Type and Quantity<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>

<div class="row">
        <div class="col-6">
                <div class="form-group">
                <label for="role">Dispatcher Name
                    <span class="text-danger">*</span>
                </label>
                <select name="role" id="role" class="form-control" onchange="" required>
                    <option value="" selected disabled></option>
                    
                    <option value="" </option>
                   
                </select>
                </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Dispatcher Email<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>
<div class="row">
        <div class="col-6">
                <div class="form-group">
                <label for="role">Dispatcher Mobile
                    <span class="text-danger">*</span>
                </label>
                <select name="role" id="role" class="form-control" onchange="" required>
                    <option value="" selected disabled></option>
                    
                    <option value="" </option>
                   
                </select>
                </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Dispatcher Rating<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>
<div class="row">
        <div class="col-6">
                <div class="form-group">
                <label for="role">Customer Name
                    <span class="text-danger">*</span>
                </label>
                <select name="role" id="role" class="form-control" onchange="" required>
                    <option value="" selected disabled></option>
                    
                    <option value="" </option>
                   
                </select>
                </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Customer Email<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>
<div class="row">
        <div class="col-6">
                <div class="form-group">
                <label for="role">Customer Mobile
                    <span class="text-danger">*</span>
                </label>
                <select name="role" id="role" class="form-control" onchange="" required>
                    <option value="" selected disabled></option>
                    
                    <option value="" </option>
                   
                </select>
                </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Customer Rating<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>

<div class="row">
        <div class="col-6">
                <div class="form-group">
                <label for="role">Invoice Number
                    <span class="text-danger">*</span>
                </label>
                <select name="role" id="role" class="form-control" onchange="" required>
                    <option value="" selected disabled></option>
                    
                    <option value="" </option>
                   
                </select>
                </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Invoice Amount<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>
<div class="row">
        <div class="col-6">
                <div class="form-group">
                <label for="role">Payment Type
                    <span class="text-danger">*</span>
                </label>
                <select name="role" id="role" class="form-control" onchange="" required>
                    <option value="" selected disabled></option>
                    
                    <option value="" </option>
                   
                </select>
                </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Paid By<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>
<div class="row">
        <div class="col-6">
                <div class="form-group">
                <label for="role">Cash To Collect
                    <span class="text-danger">*</span>
                </label>
                <select name="role" id="role" class="form-control" onchange="" required>
                    <option value="" selected disabled></option>
                    
                    <option value="" </option>
                   
                </select>
                </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Request Made At:<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>


</form>

            </div>
        </div>
    </div>
</div>
</div>

</div>
<!-- container -->

</div>
<!-- content -->
@endforeach


@endsection