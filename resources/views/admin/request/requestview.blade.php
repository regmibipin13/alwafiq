@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')

<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<style>
#map {
    height: 300px;
    width: 100%;
    padding: 10px;
}

th {
    text-align: center;
}

td {
    text-align: center;
}

.highlight {
    color: red;
    font-weight: 800;
    font-size: large;
}

   .time-line li {
        list-style-type: none;
    }

    .time-line li svg {
        position: absolute;
        left: 25px;
        background: #fff;
    }

    .time-line li:before {
        content: "";
        position: absolute;
        width: 2px;
        height: 65px;
        background-color: #748194;
        left: 32px;
    }

    .time-line li:nth-child(1) svg {
        color: orange;
    }

    .time-line li:nth-child(1)::before {
        background-color: orange;
    }

    .time-line li:nth-child(2) svg {
        color: Indigo;
    }

    .time-line li:nth-child(2)::before {
        background-color: Indigo;
    }

    .time-line li:nth-child(3) svg {
        color: blue;
    }

    .time-line li:nth-child(3)::before {
        background-color: blue;
    }

    .time-line li:nth-child(4) svg {
        color: green;
    }

    .time-line li:nth-child(4)::before {
        background-color: green;
    }

    .time-line li:nth-child(5) svg {
        color: red;
    }

    .time-line li:nth-child(5)::before {
        background-color: red;
    }
    .utilitybuttons{
        padding:10px;
    }
     .utilitybuttons a{
        padding-left:10px;
    }

     .utilitybuttons1{
        padding:10px;
        float:right;
    }
    .utilitybuttons1 a{
        padding-left:10px;

    }

</style>
<!-- Start Page content -->
<section class="content">
    <div class="row">

        <div class="col-12">

              <div class="row utilitybuttons">
                    <a href="{{ url('requests') }}">
                        <button class="btn btn-danger btn-sm pull-right mb-3" type="submit">
                            <i class="mdi mdi-keyboard-backspace mr-2"></i>
                            @lang('view_pages.back')
                        </button>
                    </a>

                    <a href="">
                        <button onclick="ExportToExcel('xlsx')" class="btn btn-danger btn-sm pull-right mb-3" type="submit">
                            <i class="mdi mdi-download mr-2"></i>
                           Download Data
                        </button>
                    </a>

                    <a href="">
                        <button class="btn btn-danger btn-sm pull-right mb-3" onclick="displayAndSendData()" type="submit">
                            <i class="mdi mdi-whatsapp mr-2"></i>
                            Share On Whatsapp
                        </button>
                    </a>


                    
                    <a href="{{url('requests/trip-edit-view',$item->id)}}">
                        <button class="btn btn-danger btn-sm pull-right mb-3" onclick="" type="submit">
                            <i class="mdi mdi-pencil mr-2"></i>
                            Edit Details
                        </button>
                    </a>
                </div>


        
            
            
            <div class="box">

                <div class="box-header bb-2 ">
                   <h5 class="off mt-3" style="font-weight: 900;color:#5499C7;">
                        @lang('view_pages.order_id') : {{ $item->request_number }} : Completed
                    </h5>
                </div>

                <div class="box-header bb-2 border-primary">
                    <h3 class="box-title">@lang('view_pages.map_views')</h3>
                
           
            
                </div>

                <div class="box-body">
                    <div id="map"></div>
                </div>
            </div>



            <div class="box">

                <div class="box-header bb-2 border-primary">
                    <h3 class="box-title">@lang('view_pages.trip_location') : End Points</h3>
                </div>

                <div class="box-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>@lang('view_pages.pick_location') : Start</th>
                                <th>@lang('view_pages.drop_location') : End</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <textarea type="textarea" readonly style="width:100%;border:none;text-align:center" id="address" name="address">{{ $item->requestPlace->pick_address }}</textarea>
                                </td>

                                
                                <td> 
                                    <textarea type="textarea" readonly style="width:100%;border:none;text-align:center" id="address2" name="address2">{{ $item->requestPlace->drop_address }}</textarea>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-danger btn-sm mb-3" onclick="findLocation()">View On Map</button>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm mb-3" onclick="findLocation2()">View On Map</button>
                                </td>

                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box">
                <div class="box-header bb-2 border-primary">
                    <h3 class="box-title">Requested Routes</h3>
                </div>

                <div class="box-body">

                        <ul class="time-line">
                                                    
                            <li>
                                <p>
                                    <b>First Pickup Location</b> <br>
                                    <small>{{ $item->requestPlace->pick_address }}</small>
                                </p>
                            </li>
                             <li>
                                <p>
                                    <b>Second Pickup Location</b> <br>
                                    <small>{{ $item->second_pickup_address }}</small>
                                </p>
                            </li>
                             <li>
                                <p>
                                    <b>Third Pickup Location</b> <br>
                                    <small>{{ $item->third_pickup_address }}</small>
                                </p>
                            </li>
                             <li>
                                <p>
                                    <b>Drop Location</b> <br>
                                    <small>{{ $item->requestPlace->drop_address }}</small>
                                </p>
                            </li>
                                                   
                        </ul>
                 
                </div>
            </div>

            <div class="box">
                <div class="box-header bb-2 border-primary">
                    <h3 class="box-title">Request In Detail</h3>
                </div>

                <div class="box-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>@lang('view_pages.zone')</th>
                                <th>@lang('view_pages.transport_type')</th>
                                <th>@lang('view_pages.vehicle_type')</th>
                                <th>@lang('view_pages.trip_time')</th>
                                <th>Trip Status</th>
                                @if($item->goodsTypeDetail)
                                <th>@lang('view_pages.goods_type_and_quantity')</th>
                                @endif
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item->zoneType->zone->name }}</td>
                                <td>{{ $item->zoneType->vehicleType->is_taxi }}</td>
                                <td>{{ $item->zoneType->vehicleType->name }}</td>
                                <td>{{ $item->trip_start_time }}</td>
                                
                                @if($item->is_completed == 1)
                                    <td>Completed</td>
                                @else
                                    <td>Not Started</td>
                                @endif

                                @if($item->goodsTypeDetail)
                                <td>{{ $item->goodsTypeDetail->goods_type_name }} - {{$item->goods_type_quantity }}</td>
                                @endif
                               
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="box">
                <div class="box-header bb-2 border-primary">
                    <h3 class="box-title">Dispatcher Details</h3>
                </div>

                <div class="box-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>@lang('view_pages.name')</th>
                                <!-- <th>@lang('view_pages.email')</th> -->
                                <th>@lang('view_pages.mobile')</th>
                                <!-- <th>@lang('view_pages.rating')</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if($item->userDetail()->exists())
                                <td>{{ $item->userDetail->name }}</td>
                                <!-- <td>{{ $item->userDetail->email }}</td> -->
                                <td>{{ $item->userDetail->mobile }}</td>
                                <!-- <td>{{ $item->requestRating()->where('user_rating',1)->pluck('rating')->first() }}</td> -->
                                @else
                                <td>{{ $item->adHocuserDetail->name }}</td>
                                <!-- <td>{{ $item->adHocuserDetail->email }}</td> -->
                                <td>{{ $item->adHocuserDetail->mobile }}</td>
                                <!-- <td>{{ $item->requestRating()->where('user_rating',1)->pluck('rating')->first() }}</td> -->
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

               <div class="box">
                <div class="box-header bb-2 border-primary">
                    <h3 class="box-title">Customer Details</h3>
                </div>

                <div class="box-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>@lang('view_pages.name')</th>
                                <th>@lang('view_pages.mobile')</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              
                                <td>{{ $item->drop_poc_name }}</td>
                                <td>{{ $item->drop_poc_mobile }}</td>
                               
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

              <div class="box">
                <div class="box-header bb-2 border-primary">
                    <h3 class="box-title">Vehicle Details :</h3>
                </div>

                <div class="box-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                               
                                <th>Vehicle Type</th>
                                
                               
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td>{{ $item->zoneType->vehicleType->name }}</td>
                               
                               
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="box">
                <div class="box-header bb-2 border-primary">
                    <h3 class="box-title">@lang('view_pages.driver_details')</h3>
                </div>

                <div class="box-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>@lang('view_pages.name')</th>
                                <th>@lang('view_pages.email')</th>
                                <th>@lang('view_pages.mobile')</th>
                                <th>@lang('view_pages.rating')</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item->driverDetail->name }}</td>
                                <td>{{ $item->driverDetail->email }}</td>
                                <td>{{ $item->driverDetail->mobile }}</td>
                                <td>{{ $item->requestRating()->where('driver_rating',1)->pluck('rating')->first() }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="box">
                <div class="box-header bb-2 border-primary">
                    <h3 class="box-title">Payment Details :</h3>
                </div>

                <div class="box-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Invoice Number</th>
                                <th>Invoice Amount</th>
                                <th>Invoice Uploaded</th>
                                <th>Payment Type</th>
                                <th>Paid By</th>
                                <th>Cash To Collect</th>
                                <th>View Uploaded Invoice</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item->invoice_number }}</td>
                                <td>{{ $item->invoice_amount}}</td>
                                 <td>{{ $item->invoice_document ? 'Yes' : 'No'}}</td>
                                <td>{{ $item->payment_opt == 1 ? 'Cash' : 'Card' }}</td>
                                <td>{{ $item->paid_by == 1 ? 'Sender' : 'Reciever' }}</td>
                                <td>{{ $item->cash_to_be_collected}}</td>
                                <td>{{ $item->invoice_document}}</td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>



            @if ($item->requestBill)
            <div class="box" >
                <div class="box-header bb-2 border-primary ">
                     <h3 class="box-title">@lang('view_pages.bill_details')</h3>
                <div class="row utilitybuttons1">
                   

                 <a href="">
                    <button onclick="BillExportToExcel('xlsx')" class="btn btn-danger btn-sm pull-right mb-3" type="submit">
                        <i class="mdi mdi-download mr-2"></i>
                       Download Bill Details
                    </button>
                </a>

               <!--   <a href="">
                    <button onclick="shareBillData()" class="btn btn-danger btn-sm pull-right mb-3" type="submit">
                        <i class="mdi mdi-whatsapp mr-2"></i>
                       Share On Whatsapp
                    </button>
                </a> -->
                </div>
                </div>

                <div class="box-body">
                    <table id="tripviewBillDetailsTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>@lang('view_pages.col_title')</th>
                                <th>@lang('view_pages.description')</th>
                                <th>@lang('view_pages.price')</th>
                            </tr>
                        </thead>

                        @php
                        $requestBill = collect($item->requestBill->toArray());
                        $bill =
                        $requestBill->only(['base_price','distance_price','time_price','waiting_charge','cancellation_fee','service_tax','promo_discount','total_amount','admin_commision','driver_commision']);
                        $bill->all();

                        $bill = $bill->toArray();
                        @endphp

                        <tbody>
                            @foreach ($bill as $key => $value)
                            <tr class="{{ $key == 'total_amount' ? 'highlight' : '' }}">
                                <td>{{ __('view_pages.'.$key) }}</td>

                                <td>
                                    @if ($key == 'distance_price')
                                    {{ $item->total_distance .' '. $item->request_unit  }} *
                                    {{ $item->currency .' '. $item->requestBill->price_per_distance.' / '.$item->request_unit }}
                                    @elseif ($key == 'time_price')
                                    {{ $item->total_time.' Mins' }} *
                                    {{ $item->currency .' '. $item->requestBill->price_per_time.' / Mins' }}
                                    @elseif ($key == 'base_price')
                                    {{  'For first ' . $item->requestBill->base_distance .' '. $item->request_unit }}
                                    @else
                                    -
                                    @endif
                                </td>

                                <td>{{ $value }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
            @endif


    <div class="box">
                <div class="box-header bb-2 border-primary">
                    <h3 class="box-title">Activity Timeline :</h3>
                </div>

                <div class="box-body">

                        <ul class="time-line">
                                                     @if ($item->converted_created_at)
                                                    <li>
                                                        <p>
                                                            <b>@lang('view_pages.request_made_at') :</b> <br>
                                                            <small>{{ $item->converted_created_at }}</small>
                                                        </p>
                                                    </li>
                                                    @endif
                                                     @if ($item->converted_accepted_at)
                                                    <li>
                                                        <p>
                                                            <b>@lang('view_pages.accepted_at') :</b> <br>
                                                            <small>{{ $item->converted_accepted_at }}</small>
                                                        </p>
                                                    </li>
                                                    @endif
                                                    @if ($item->converted_arrived_at)
                                                    <li>
                                                        <p>
                                                            <b>@lang('view_pages.arrived_at') :</b> <br>
                                                            <small>{{ $item->converted_arrived_at }}</small>
                                                        </p>
                                                    </li>
                                                    @endif
                                                    @if ($item->converted_trip_start_time)
                                                    <li>
                                                        <p>
                                                            <b>@lang('view_pages.trip_started_at')
                                                                :</b> <br>
                                                            <small>{{ $item->converted_trip_start_time }}</small>
                                                        </p>
                                                    </li>
                                                     @endif
                                                      @if ($item->converted_completed_at)
                                                    <li>
                                                        <p>
                                                            <b>@lang('view_pages.reached_to_drop_location_at')
                                                                :</b> <br>
                                                            <small>{{ $item->converted_completed_at }}</small>
                                                        </p>
                                                    </li>
                                                    @endif
                                                </ul>
                 
                </div>
            </div>

            <div class="box" style="display:none">
              <div class="box-header bb-2 border-primary">
                    <h3 class="box-title">Master Table</h3>
               
                </div>
               

                <div class="box-body" style="overflow: auto">
                    <table id="tripviewTable" class="table table-hover" >
                        <thead>
                                        <tr>
                                            <th>@lang('view_pages.order_id')</th>

                                            <th>First Pickup Location</th>
                                            <th>Second Pickup Location</th>
                                            <th>Third Pickup Location</th>
                                            <th>@lang('view_pages.drop_location')</th>
                                            
                                            <th>@lang('view_pages.zone')</th>
                                            <th>@lang('view_pages.transport_type')</th>
                                            <th>@lang('view_pages.vehicle_type')</th>
                                            <th>@lang('view_pages.trip_time')</th>
                                            <th>Trip Status</th>
                                            
                                            @if($item->goodsTypeDetail)
                                            <th>@lang('view_pages.goods_type_and_quantity')</th>
                                            @endif
                                            
                                          
                                              
                                            <th>Dispatcher Name</th>
                                            <th>Dispatcher Mobile</th>
                                         

                                            <th>Customer Name</th>
                                            <th>Customer Mobile</th>
                                            
                                            <th>Driver Name</th>
                                            <th>Driver Email</th>
                                            <th>Driver Mobile</th>
                                            <th>Driver Rating</th>

                                            <th>Invoice Uploaded(Y/N)</th>
                                            <th>Invoice Number</th>
                                            <th>Invoice Amount</th>
                                            <th>Payment Type</th>
                                            <th>Paid By</th>
                                            <th>Cash To Collect</th>
                                            
                                            <th>Request Made At</th>
                                            <th>Arrived At</th>
                                            <th>Started Time</th>
                                            <th>End Time</th>

                                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item->request_number }}  </td>
                                
                                <td id="address">{{ $item->requestPlace->pick_address }}  </td>
                                <td id="">{{ $item->second_pickup_address }}  </td>
                                <td id="">{{ $item->third_pickup_address }}  </td>
                                <td id="address2">{{ $item->requestPlace->drop_address }} </td>

                                <td>{{ $item->zoneType->zone->name }}</td>
                                <td>{{ $item->zoneType->vehicleType->is_taxi }}</td>
                                <td>{{ $item->zoneType->vehicleType->name }}</td>
                                <td>{{ $item->trip_start_time }}</td>
                                <td>Completed</td>
                               

                                @if($item->goodsTypeDetail)
                                <td>{{ $item->goodsTypeDetail->goods_type_name }} - {{$item->goods_type_quantity }}</td>
                                @endif
                                
                            
                                
                                @if($item->userDetail()->exists())
                                <td>{{ $item->userDetail->name }}</td>
                                <td>{{ $item->userDetail->mobile }}</td>
                               
                                @else
                                <td>{{ $item->adHocuserDetail->name }}</td>
                                <td>{{ $item->adHocuserDetail->mobile }}</td>
                                @endif

                                <td>{{ $item->drop_poc_name }}</td>
                                <td>{{ $item->drop_poc_mobile }}</td>

                                <td>{{ $item->driverDetail->name }}</td>
                                <td>{{ $item->driverDetail->email }}</td>
                                <td>{{ $item->driverDetail->mobile }}</td>
                                <td>{{ $item->requestRating()->where('driver_rating',1)->pluck('rating')->first() }}</td>
                                
                                <td>{{ $item->invoice_document ? 'Yes' : 'No'}}</td>
                                <td>{{ $item->invoice_number }}</td>
                                <td>{{ $item->invoice_amount}}</td>
                                <td>{{ $item->payment_opt == 1 ? 'Cash' : 'Card' }}</td>
                                <td>{{ $item->paid_by == 1 ? 'Sender' : 'Reciever' }}</td>
                                <td>{{ $item->cash_to_be_collected}}</td>
                                
                                

                                @if ($item->converted_created_at)
                                <td>{{  $item->converted_created_at }}</td>
                                @endif
                                
                                @if ($item->converted_accepted_at)
                                <td>{{  $item->converted_accepted_at }}</td>
                                @endif
                               
                                @if ($item->converted_trip_start_time)
                                <td>{{  $item->converted_trip_start_time }}</td>
                                @endif
                               
                                @if ($item->converted_completed_at)
                                <td>{{  $item->converted_created_at }}</td>
                                @endif
                            
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>

<script type="text/javascript"
    src="https://maps.google.com/maps/api/js?key={{get_settings('google_map_key')}}&sensor=false&libraries=places"></script>

<script type="text/javascript">
var area1, area2, icon1, icon2;

area1 = "{{ $item->pick_address }}";
area2 = "{{ $item->drop_address }}";
icon1 = "{{ url('map/start_pin_flag.png') }}";
icon2 = "{{ url('map/end_pin_flag.png') }}";

var locations = [
    [area1, "{{ $item->pick_lat }}", "{{ $item->pick_lng }}", icon1],
    [area2, "{{ $item->drop_lat == null ? $item->pick_lat : $item->drop_lat }}",
        "{{ $item->drop_lng == null ? $item->pick_lng : $item->drop_lng }}", icon2
    ],
];

var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: new google.maps.LatLng(locations[1][1], locations[1][2]),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

@if($item->request_path != null)
var flightPlanCoordinates = [ < ? php echo $item - > request_path ? > ];

flightPlanCoordinates = flightPlanCoordinates[0];

var flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    geodesic: true,
    strokeColor: '#FF0000',
    strokeOpacity: 4.0,
    strokeWeight: 5
});

flightPath.setMap(map);
@endif

// map new
var infowindow = new google.maps.InfoWindow();
var marker, i;
var markers = new Array();
for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        icon: locations[i][3],
        map: map
    });
    markers.push(marker);
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
        }
    })(marker, i));
}
</script>

<script>

  function ExportToExcel(type, fn, dl) {
        var elt = document.getElementById('tripviewTable');
        var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
        return dl ?
        XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
        XLSX.writeFile(wb, fn || ('AlWafiqTripDetails.' + (type || 'xlsx')));
    }

</script>

<script>

  function BillExportToExcel(type, fn, dl) {
        var elt = document.getElementById('tripviewBillDetailsTable');
        var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
        return dl ?
        XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
        XLSX.writeFile(wb, fn || ('AlWafiqTripDetails_BillDetails.' + (type || 'xlsx')));
    }

</script>


<script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{get_settings('google_map_key')}}&libraries=places"></script>


<script>
  function findLocation() {
  // Get the address field value from HTML
  const address = document.getElementById("address").value;

  // Initialize the geocoder object
  const geocoder = new google.maps.Geocoder();

  // Use geocoder to find the location based on the address
  geocoder.geocode({ address }, (results, status) => {
    if (status === "OK") {
      // If the geocoder was successful, show the location on a map
      const map = new google.maps.Map(document.getElementById("map"), {
        center: results[0].geometry.location,
        zoom: 15,
      });
      const marker = new google.maps.Marker({
        map,
        position: results[0].geometry.location,
      });
    } else {
      // If the geocoder was not successful, display an error message
      alert("Geocode was not successful for the following reason: " + status);
    }
  });
}


</script>

<script>
  function findLocation2() {
  // Get the address field value from HTML
  const address = document.getElementById("address2").value;

  // Initialize the geocoder object
  const geocoder = new google.maps.Geocoder();

  // Use geocoder to find the location based on the address
  geocoder.geocode({ address }, (results, status) => {
    if (status === "OK") {
      // If the geocoder was successful, show the location on a map
      const map = new google.maps.Map(document.getElementById("map"), {
        center: results[0].geometry.location,
        zoom: 15,
      });
      const marker = new google.maps.Marker({
        map,
        position: results[0].geometry.location,
      });
    } else {
      // If the geocoder was not successful, display an error message
      alert("Geocode was not successful for the following reason: " + status);
    }
  });
}


</script>

<script>
function displayAndSendData() {
  // Get the table element
  var table = document.getElementById("tripviewTable");

  // Get the table rows except the first row
  var rows = Array.from(table.rows).slice(1);

  // Create an array to store the data
  var data = [];

  // Loop through the rows and columns to get the data
  for (var i = 0; i < rows.length; i++) {
    var row = rows[i];
    var rowData = [];
    for (var j = 0; j < row.cells.length; j++) {
      var header = table.rows[0].cells[j].innerHTML;
      var cellData = row.cells[j].innerHTML;
      rowData.push(header + ": " + cellData);
    }
    data.push(rowData.join("\n"));
  }

  // Send the data to WhatsApp
  var whatsappUrl = "https://wa.me/?text=" + encodeURIComponent(data.join("\n\n"));
  window.open(whatsappUrl);
}
</script>


<script>
function shareBillData() {
  // Get the table element
  var table = document.getElementById("tripviewBillDetailsTable");

  // Get the table rows except the first row
  var rows = Array.from(table.rows).slice(1);

  // Create an array to store the data
  var data = [];

  // Loop through the rows and columns to get the data
  for (var i = 0; i < rows.length; i++) {
    var row = rows[i];
    var rowData = [];
    for (var j = 0; j < row.cells.length; j++) {
      var header = table.rows[0].cells[j].innerHTML;
      var cellData = row.cells[j].innerHTML;
      rowData.push(header + ": " + cellData);
    }
    data.push(rowData.join("\n"));
  }

  // Send the data to WhatsApp
  var whatsappUrl = "https://wa.me/?text=" + encodeURIComponent(data.join("\n\n"));
  window.open(whatsappUrl);
}
</script>
@endsection
