@extends('admin.layouts.app')

@section('content')


    <!-- Start Page content -->
    <!-- <section class="content">
        <h1>Hai Testing Request Edit</h1>
    </section> -->



    <!-- Start Page content -->
<div class="content">
<div class="container-fluid">
    

<div class="row">
<div class="col-sm-12">
<div class="box">
        <div class="box-header with-border">
            <a href="{{url('requests')}}">
                <button class="btn btn-danger btn-sm pull-right" type="submit">
                    <i class="mdi mdi-keyboard-backspace mr-2"></i>
                    @lang('view_pages.back')
                </button>
            </a>
        </div>
        <div class="box-header with-border">
             <h3>Request Number : {{ $item->request_number }}</h3>
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
            <input class="form-control" type="text" readonly id="first_name" name="first_name" 
            value="{{ $item->requestPlace->pick_address }}" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Drop Location<span class="text-danger">*</span></label>
            <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->requestPlace->drop_address }}" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>

<div class="row">
        <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Zone<span class="text-danger">*</span></label>
            <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->zoneType->zone->name }}" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Transport Type<span class="text-danger">*</span></label>
            <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->zoneType->vehicleType->is_taxi }}" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>

<div class="row">
        <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Vehicle Type<span class="text-danger">*</span></label>
            <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->zoneType->vehicleType->name }}" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Trip Time<span class="text-danger">*</span></label>
            <input class="form-control" type="text" readonly id="first_name" name="first_name" value="00 : 00" required="" placeholder="">
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
                    
                    
                    <option value="Not Started">Not Started</option>
                    <option value="Cancelled">Cancelled</option>
                   
                </select>
                </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Goods Type and Quantity<span class="text-danger">*</span></label>
             @if($item->goodsTypeDetail)
                          
                               
            <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->goodsTypeDetail->goods_type_name }} - {{$item->goods_type_quantity }}" required="" placeholder="">
            <span class="text-danger"></span>
             @endif
            </div>
        </div>

</div>

<div class="row">
            <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Dispatcher Name<span class="text-danger">*</span></label>
            @if($item->userDetail()->exists())
            <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->userDetail->name }}" required="" placeholder="">
            <span class="text-danger"></span>
            @else
             <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->adHocuserDetail->name }}" required="" placeholder="">
            <span class="text-danger"></span>
            </div>
             @endif
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Dispatcher Mobile<span class="text-danger">*</span></label>
            @if($item->userDetail()->exists())
            <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->userDetail->mobile }}" required="" placeholder="">
            <span class="text-danger"></span>
            @else
             <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->adHocuserDetail->mobile }}" required="" placeholder="">
            <span class="text-danger"></span>
            </div>
             @endif
        </div>

       

</div>

<div class="row">
           <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Customer Name<span class="text-danger">*</span></label>
            <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->drop_poc_name }}" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>
   <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Customer Mobile<span class="text-danger">*</span></label>
            <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->drop_poc_mobile }}" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>
      

</div>


<div class="row">
            <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Invoice Number<span class="text-danger">*</span></label>
            <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->invoice_number }}" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Invoice Amount<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="{{ $item->invoice_amount}}" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>

</div>
<div class="row">
           <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Payment Type<span class="text-danger">*</span></label>

              <select name="service_location_id" id="service_location_id" class="form-control">
                <option value="{{ $item->payment_opt == 1 ? 'Cash' : 'Card' }}" selected>{{ $item->payment_opt == 1 ? 'Cash' : 'Card' }}</option>
                
                <option value="{{ $item->payment_opt == 1 ? 'Card' : 'Cash' }}">{{ $item->payment_opt == 1 ? 'Card' : 'Cash' }}</option>
                </select>
           

            </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Paid By<span class="text-danger">*</span></label>
             <select name="service_location_id" id="service_location_id" class="form-control">
        <option value="{{ $item->paid_by == 1 ? 'Sender' : 'Reciever' }}" selected>{{ $item->paid_by == 1 ? 'Sender' : 'Reciever' }}</option>
        
        <option value="{{ $item->paid_by == 1 ? 'Sender' : 'Reciever' }}">{{ $item->paid_by == 1 ? 'Reciever' : 'Sender' }}</option>
           
        </select>
            </div>
        </div>

</div>
<div class="row">
           <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Cash To Collect:<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="{{ $item->cash_to_be_collected}}" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>
 @if ($item->converted_created_at)
          <div class="col-sm-6">
            <div class="form-group">
            <label for="first_name">Request Made At:<span class="text-danger">*</span></label>
            <input class="form-control" type="text" readonly id="first_name" name="first_name" value="{{ $item->converted_created_at }}" required="" placeholder="">
            <span class="text-danger"></span>

            </div>
        </div>
        @endif

</div>
<div class="row">
    <div class="form-group">
        <div class="col-12">
            <button class="btn btn-primary btn-sm pull-right m-5" type="submit">
                @lang('view_pages.update')
            </button>
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



@endsection