@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')
 <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <style>
        .demo-radio-button label {
            min-width: 100px;
            margin: 0 0 5px 50px;
        }

        .modal-header {
            border-bottom: 2px solid #1e88e5;
        }

        .modal-title {
            color: #9c9cdc;
            font-weight: 700;
        }

        .request-status h4 {
            background: blue;
            padding: 5px 5px 5px 5px;
            border-radius: 5px;
            width: 35%;
            color: white;
            font-weight: 600;
        }
       


.TableNew{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.TableNew td, .TableNew th {

  padding: 10px;
}

.TableNew tr:nth-child(even){background-color: #f2f2f2;}

.TableNew tr:hover {background-color: #ddd;}

.TableNew th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2471A3;
  color: white;
}
select {
    padding:6px 10px 6px 10px;
    border:1px solid #ddd;
}



    </style>

<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3>Rides</h3>
                </div>

                 <div class="box-header with-border">
                        <div class="row text-right">

                            <div class="col-8 col-md-3">
                                <div class="form-group">
                                    <input type="text" id="myInput" onkeyup="myFunction()" name="search" class="form-control"
                                        placeholder="@lang('view_pages.enter_keyword')">
                                </div>
                            </div>

                            <div class="col-2 col-md-1 text-left">
                                <button id="search" class="btn btn-success btn-outline btn-sm py-2" type="submit">
                                    @lang('view_pages.search')
                                </button>
                            </div>
                            <!-- DOWNLOAD RIDES AND DETAILS -->
                            <div class="col-2 col-md-1 text-left">
                                <!-- <button class="btn btn-primary btn-success btn-sm py-2 submit" onclick="ExportToExcel('xlsx')" type="button" >
                                    Download                                
                                </button> -->

                                
                            </div>

                           
                            
                            <div class="col-md-7 text-center text-md-right">
                                <button class="btn btn-outline btn-sm btn-danger py-2" type="button" data-toggle="modal"
                                    data-target="#request-modal">
                                   @lang('view_pages.filter_requests')
                                </button>
                            </div>
                           

                        </div>
                       

                        <!-- Modal -->
                        <div class="modal fade" id="request-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">@lang('view_pages.filter_request')</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body text-left">
                                        <div class="request-status">
                                            <h4>@lang('view_pages.trip_status')</h4>
                                            <div class="demo-radio-button">
                                                <input name="trip_status" type="radio" id="is_completed" data-val="1"
                                                    class="with-gap radio-col-green">
                                                <label for="is_completed">@lang('view_pages.completed')</label>
                                                <input name="trip_status" type="radio" id="is_cancelled" data-val="1"
                                                    class="with-gap radio-col-red">
                                                <label for="is_cancelled">@lang('view_pages.cancelled')</label>
                                                <input name="trip_status" type="radio" id="is_trip_start" data-val="0"
                                                    class="with-gap radio-col-yellow">
                                                <label for="is_trip_start">@lang('view_pages.not_yet_started')</label>
                                            </div>
                                            <h4>@lang('view_pages.paid_status')</h4>
                                            <div class="demo-radio-button">
                                                <input name="is_paid" type="radio" id="paid" data-val="1"
                                                    class="with-gap radio-col-green">
                                                <label for="paid">@lang('view_pages.paid')</label>
                                                <input name="is_paid" type="radio" id="unpaid" data-val="0"
                                                    class="with-gap radio-col-red">
                                                <label for="unpaid">@lang('view_pages.unpaid')</label>
                                            </div>
                                            <h4>@lang('view_pages.payment_option')</h4>
                                            <div class="demo-radio-button">
                                                <input name="payment_opt" type="radio" id="card" data-val="0"
                                                    class="with-gap radio-col-red">
                                                <label for="card">@lang('view_pages.card')</label>
                                                <input name="payment_opt" type="radio" id="cash" data-val="1"
                                                    class="with-gap radio-col-blue">
                                                <label for="cash">@lang('view_pages.cash')</label>
                                                <input name="payment_opt" type="radio" id="wallet" data-val="2"
                                                    class="with-gap radio-col-yellow">
                                                <label for="wallet">@lang('view_pages.wallet')</label>
                                                <input name="payment_opt" type="radio" id="wallet_cash" data-val="3"
                                                    class="with-gap radio-col-deep-purple">
                                                <label for="wallet_cash">@lang('view_pages.cash_wallet')</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal"
                                            class="btn btn-success btn-sm float-right filter">@lang('view_pages.apply_filters')</button>

                                        <button type="button" data-dismiss="modal"
                                            class="btn btn-danger btn-sm resetfilter float-right mr-2">@lang('view_pages.reset_filters')</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->

                    </div>


                <div id="js-request-partial-target" class="table-responsive">
                        <include-fragment src="requests/fetch">
                            <span style="text-align: center;font-weight: bold;">@lang('view_pages.loading')</span>
                        </include-fragment>
                </div>
         

            </div>



        <div class="box">
             <?php
                                    $req_numbers = array();
                                    $sender = array();
                                    $request_dates = array();
                                    $invoice_number = array();
                                   
                                    foreach($results as $data) {
                                        $req_numbers[] = $data->request_number;
                                        $sender[] = $data->driverDetail ? $data->driverDetail->name : '-';
                                        $request_dates[] = $data->created_at;
                                        $invoice_number[] = $data->invoice_number;
                                        
                                        
                                        
                                    }
                                    $u_req_numbers = array_unique($req_numbers);
                                    $u_sender = array_unique($sender);
                                    $u_request_dates = array_unique($request_dates);
                                    $u_invoice_number = array_unique($invoice_number);
                                 

                                   
                                                
                                ?>
                <div class="box-header with-border">
                     <div class="row text-right">

                            <div class="col-8 col-md-3">
                               <h3>Rides (Master Table)</h3>
                            </div>

                            <div class="col-2 col-md-1 text-left">
                              
                            </div>
                           
                            <div class="col-2 col-md-1 text-left">
                             

                                
                            </div>

                           
                            
                            <div class="col-md-7 text-center text-md-right">
                                <button class="btn btn-primary  btn-sm py-2 submit" onclick="ExportToExcel('xlsx')" type="button">
                             Download as Excel                              
                            </button>
                            </div>
                           

                        </div>
                   
                </div>

                <div class="box-body">

                    <div class="row">
                    <div class="col-2 col-md-2">
                         

                            <select class="TitleSelect select-table-filter" name="filterRequestNumber" id="filterRequestNumber">
                                    <option value="">Request Number</option>
                               
                               @foreach ($u_req_numbers as $value)
                                    <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>      
                    </div> 
                  <!--    <div class="col-2 col-md-2">
                          <select class="TitleSelect select-table-filter" name="filterDispatcher" id="filterDispatcher">
                                    <option value="">Sender</option>
                               
                               @foreach ($u_sender as $value)
                                    <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>      
                    </div> 
                     <div class="col-2 col-md-2">
                           <select class="TitleSelect select-table-filter" name="filterRequestDate" id="filterRequestDate">
                                    <option value="">Request Date</option>
                               
                               @foreach ($u_request_dates as $value)
                                    <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>      
                    </div>  -->
                     <div class="col-2 col-md-2">
                          <select class="TitleSelect select-table-filter" name="filterPaymentStatus" id="filterPaymentStatus">
                                    <option value="">Payment Status</option>
                               
                               
                                    <option value="Paid">Paid</option>
                                    <option value="Not Paid">Not Paid</option>
                                
                            </select>      
                    </div> 
                   <!--   <div class="col-2 col-md-2">
                            <select class="TitleSelect select-table-filter" name="filterInvoiceNumber" id="filterInvoiceNumber">
                                    <option value="">Invoice Number</option>
                               
                               @foreach ($u_invoice_number as $value)
                                    <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>      
                    </div>  -->
                     <div class="col-2 col-md-2">
                          <select class="TitleSelect select-table-filter" name="filterRideStatus" id="filterRideStatus">
                                    <option value="">Ride Status</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="Not Started">Not Started</option>
                                
                            </select>      
                    </div> 

                           

                    </div>
                   

                    <div class="row" style="overflow: auto">
                     <table id="ridesTable" class="table table-hover order-table">
                                    <tr class="header">
                                    <th>Delivery Request Number</th>
                                    <th>Ride Type</th>
                                    <th>Book Later ?</th>
                                    
                                    <th>Goods Type</th>
                                    <th>Zone</th>

                                    <th>First Pickup Address</th>
                                    <th>Second Pickup Address</th>  
                                    <th>Third Pickup Address</th>
                                    <th>Drop Address</th>
                                    
                                    <th>Building / Apartment Number</th>

                                    <th>Sender Name</th>
                                    <th>Sender Mobile</th>
                                    <th>Customer Name</th>
                                    <th>Customer Mobile</th>
                                   
                                    
                                    <th>Driver Name</th> 
                                    <th>Delivery Start Time</th>
                                    <th>Delivery End Time</th>
                                    

                                    <th>Surcharge Applied</th>
                                    <th>Payment Status</th>
                                    <!-- <th>Amount</th> -->
                                    <th>Invoice Uploaded ?</th> 
                                    <th>Invoice Number</th>
                                    <th>Invoice Amount</th>
                                    <th>Cash To Collect</th>
                                    <th>Payment Option</th>
                                    
                                   
                                    
                                    <th>Delivery Request Date</th> 
                                    <th>Delivery Request Updated Date</th> 
                                    
                                    <th>Ride Status</th> 
                                    
                                       
                                    </tr>
                                    @foreach ($results as $data)
                                    <tr>
                                        <td>{{ $data->request_number }}</td>
                                        
                                        @if($data->is_later == 1)    
                                        <td>Scheduled Ride</td>
                                        @else
                                        <td>Express Delivery</td>
                                        @endif

                                        @if($data->is_later == 1)    
                                        <td>Yes</td>
                                        @else
                                        <td>No</td>
                                        @endif
                                        
                                        <td>{{ $data->goodsTypeDetail->goods_type_name }}</td>
                                        <td>{{ $data->zoneType->zone->name }}</td>
                                        
                                        <td>{{ $data->pick_address}}</td>
                                        <td>{{ $data->second_pickup_address ? $data->second_pickup_address : 'Empty Data / No Second Pickup'}}</td>
                                        <td>{{ $data->third_pickup_address ? $data->third_pickup_address : 'Empty Data / No Third Pickup'}}</td>
                                        <td>{{ $data->drop_address}}</td>
                                      
                                        
                                        <td>{{ $data->building_number }}</td> 

                                        <td>{{ $data->pickup_poc_name}}</td>
                                        <td>{{ $data->pickup_poc_mobile}}</td>
                                        <td>{{ $data->drop_poc_name}}</td>
                                        <td>{{ $data->drop_poc_mobile}}</td>  
                                           
                                            
                                        <td>{{$data->driverDetail ? $data->driverDetail->name : 'Empty, Because Trip Not Started'}}</td>
                                        <td>{{ $data->trip_start_time ? $data->trip_start_time  : 'Empty, Because Trip Not Started'}}</td> 
                                        <td>{{ $data->arrived_at }}</td> 
                                        
                                        @if($data->is_surge_applied == 1)    
                                        <td>Yes</td>
                                        @else
                                        <td>No</td>
                                        @endif

                                        @if($data->is_paid == 1)    
                                        <td>Paid</td>
                                        @else
                                        <td>Not Paid</td>
                                        @endif
                                        

                                        <!-- <td>{{ $data->request_eta_amount}}</td> -->
                                        
                                        @if($data->invoice_document)
                                        <td>Yes</td>
                                        @else
                                        <td>No</td>
                                        @endif
                                        
                                        <td>{{ $data->invoice_number}}</td>
                                        <td>{{ $data->invoice_amount}}</td>
                                        <td>{{ $data->cash_to_be_collected}}</td>

                                        @if ($data->payment_opt == 0)
                                        <td>Card</td>
                                        @elseif($data->payment_opt == 1)
                                        <td>Cash</td>
                                        @elseif($data->payment_opt == 2)
                                        <td>Wallet</td>
                                        @else
                                        <td>Cash / Wallet</td>
                                        @endif
                                            
                                        
                                            
                                        <td>{{ $data->created_at}}</td>
                                        <td>{{ $data->updated_at}}</td> 
                        

                                        @if($data->is_cancelled == 1)
                                        <td>Cancelled</td>
                                        @elseif($data->is_completed == 1)
                                        <td>Completed</td>
                                        @elseif($data->is_trip_start == 0 && $data->is_cancelled == 0)
                                        <td>Not Started</td>
                                        @else
                                        <td>-</td>
                                        @endif

                                        
                                    </tr>
                                     @endforeach
                                </table>
                            </div>
                  

                </div>


         

            </div>
        </div>
       
    </div>

</section>







        <script src="{{ asset('assets/js/fetchdata.min.js') }}"></script>
        <script>
            var query = '';
            var search_keyword = '';

            $(function() {
                $('body').on('click', '.pagination a', function(e) {
                    e.preventDefault();
                    var url = $(this).attr('href');
                    $.get(url, $('#search').serialize(), function(data) {
                        $('#js-request-partial-target').html(data);
                    });
                });

                $('#search').on('click', function(e) {
                    e.preventDefault();
                    search_keyword = $('#search_keyword').val();
                    console.log(search_keyword);
                    fetch('requests/fetch?search=' + search_keyword)
                        .then(response => response.text())
                        .then(html => {
                            document.querySelector('#js-request-partial-target').innerHTML = html
                        });
                });


                $('.filter,.resetfilter').on('click', function() {
                    let filterColumn = ['trip_status', 'is_paid', 'payment_opt'];
                    let className = $(this);

                    $.each(filterColumn, function(index, value) {
                        if (className.hasClass('resetfilter')) {
                            $('input[name="' + value + '"]').prop('checked', false);
                            query = '';
                        } else if ($('input[name="' + value + '"]:checked').attr('id') !=
                            undefined) {
                            var activeVal = $('input[name="' + value + '"]:checked').attr(
                                'data-val');

                            if (value == 'trip_status') {
                                value = $('input[name="' + value + '"]:checked').attr('id');
                            }

                            query += value + '=' + activeVal + '&';
                        }
                    });

                    fetch('requests/fetch?' + query)
                        .then(response => response.text())
                        .then(html => {
                            document.querySelector('#js-request-partial-target').innerHTML = html
                        });
                });

            });
        </script>



<script src="{{ asset('assets/js/fetchdata.min.js') }}"></script>
<script>
            var query = '';
            var search_keyword = '';

            $(function() {
                $('body').on('click', '.pagination a', function(e) {
                    e.preventDefault();
                    var url = $(this).attr('href');
                    $.get(url, $('#search').serialize(), function(data) {
                        $('#js-request-partial-target').html(data);
                    });
                });

                $('#search').on('click', function(e) {
                    e.preventDefault();
                    search_keyword = $('#search_keyword').val();
                    console.log(search_keyword);
                    fetch('requests/fetch?search=' + search_keyword)
                        .then(response => response.text())
                        .then(html => {
                            document.querySelector('#js-request-partial-target').innerHTML = html
                        });
                });


            });
</script>



<script>

  function ExportToExcel(type, fn, dl) {
        var elt = document.getElementById('ridesTable');
        var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
        return dl ?
        XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
        XLSX.writeFile(wb, fn || ('Al Wafiq Riders.' + (type || 'xlsx')));
    }

</script>




@endsection
