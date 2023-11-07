 {{-- Changes From Bipin with Additional Fields Data --}}
 <div class="card p-3 mb-3 book additional-data">
     <div class="row">
         <div class="col-md-12">
             <h6 class="box-title">Additional Data</h6>
         </div>
         <div class="col-md-12">
             <div class="input-group mb-3">
                 <label for="">Customer Id</label>
                 <input class="form-control w-100 required_for_valid" type="text" placeholder="Customer Id"
                     name="customer_id" id="customer_id" aria-label="Customer Id" aria-describedby="basic-addon1">
                 <span class="text-danger" id="error-customer-id">{{ $errors->first('customer_id') }}</span>
             </div>
             <div class="input-group mb-3">
                 <label for="">Customer Name</label>
                 <input class="form-control w-100 required_for_valid" type="text" placeholder="Customer Name"
                     name="customer_name" id="customer_name" aria-label="Customer Name" aria-describedby="basic-addon1">
                 <span class="text-danger" id="error-customer-name">{{ $errors->first('customer_name') }}</span>
             </div>
             <div class="input-group mb-3">
                 <label for="">Object Id</label>
                 <input class="form-control w-100 required_for_valid" type="text" placeholder="Object Id"
                     name="object_id" id="object_id" aria-label="Object Id" aria-describedby="basic-addon1">
                 <span class="text-danger" id="error-object-id">{{ $errors->first('object_id') }}</span>
             </div>
             <div class="input-group mb-3">
                 <label for="">Emirates</label>
                 <select class="form-control w-100 required_for_valid" placeholder="Emirates" name="emirates"
                     id="emirates" aria-label="Emirates" aria-describedby="basic-addon1">
                     <option value="">Dubai</option>
                     <option value="">Abu Dhabi</option>
                     <option value="">Sharjah</option>
                 </select>
                 <span class="text-danger" id="error-emirates">{{ $errors->first('emirates') }}</span>
             </div>
             <div class="input-group mb-3">
                 <label for="">Area</label>
                 <select class="form-control w-100 required_for_valid" placeholder="Area" name="area" id="area"
                     aria-label="Area" aria-describedby="basic-addon1">
                     <option value="">Al Mizhar 1</option>
                     <option value="">Sharjah</option>
                     <option value="">Shiekh zayede road</option>
                 </select>
                 <span class="text-danger" id="error-area">{{ $errors->first('area') }}</span>
             </div>
             <div class="input-group mb-3">
                 <label for="">Address</label>
                 <input class="form-control w-100 required_for_valid" type="text" placeholder="Address"
                     name="address" id="address" aria-label="Address" aria-describedby="basic-addon1">
                 <span class="text-danger" id="error-address">{{ $errors->first('address') }}</span>
             </div>
             <div class="input-group mb-3">
                 <label for="">Driver</label>
                 <select class="form-control w-100 required_for_valid" placeholder="Rider" name="driver_id"
                     id="driver_id" aria-label="Rider" aria-describedby="basic-addon1">
                     <option value="">Driver 1</option>
                     <option value="">Driver 1</option>
                     <option value="">Driver 1</option>
                     <option value="">Driver 1</option>

                 </select>
                 <span class="text-danger" id="error-driver-id">{{ $errors->first('driver_id') }}</span>
             </div>
         </div>
     </div>

 </div>
 {{-- Additional Changes Ends Here  --}}
