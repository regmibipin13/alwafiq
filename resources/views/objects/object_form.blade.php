<div class="form-group">
    <label for="object_id">Object Id</label>
    <input type="text" class="form-control" name="object_id"
        value="{{ isset($object) ? $object->object_id : old('object_id') }}">
    @if ($errors->has('object_id'))
        <p class="text-danger">
            {{ $errors->first('object_id') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="contract_transaction">Contract Transaction</label>
    <input type="text" class="form-control" name="contract_transaction"
        value="{{ isset($object) ? $object->contract_transaction : old('contract_transaction') }}">
    @if ($errors->has('contract_transaction'))
        <p class="text-danger">
            {{ $errors->first('contract_transaction') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="customer">Customer</label>
    <input type="text" class="form-control" name="customer"
        value="{{ isset($object) ? $object->customer : old('customer') }}">
    @if ($errors->has('customer'))
        <p class="text-danger">
            {{ $errors->first('customer') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="invoice_type">Inovice Type</label>
    <select name="invoice_type" id="invoice_type" class="form-control">
        <option value="" selected>Select Invoice Type</option>
        @foreach ($invoiceTypes as $type)
            <option value="{{ $type->name }}"
                {{ isset($object) && $object->invoice_type == $type->name ? 'selected' : '' }}>
                {{ $type->name }}</option>
        @endforeach
    </select>
    @if ($errors->has('invoice_type'))
        <p class="text-danger">
            {{ $errors->first('invoice_type') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="frequency">Frequency</label>
    <select name="frequency" id="frequency" class="form-control">
        <option value="" selected>Select A Frequency</option>
        <option value="Daily" {{ isset($object) && $object->frequency == 'Daily' ? 'selected' : '' }}>Daily</option>
        <option value="Weekly" {{ isset($object) && $object->frequency == 'Weekly' ? 'selected' : '' }}>Weekly</option>
        <option value="Monthly" {{ isset($object) && $object->frequency == 'Monthly' ? 'selected' : '' }}>Monthly
        </option>
        <option value="Yearly" {{ isset($object) && $object->frequency == 'Yearly' ? 'selected' : '' }}>Yearly</option>
    </select>
    @if ($errors->has('frequency'))
        <p class="text-danger">
            {{ $errors->first('frequency') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="emirates">Emirates</label>
    <select name="emirates" id="emirates" class="form-control">
        <option value="" selected>Select A Emirates</option>
        <option value="Abu Dhabi" {{ isset($object) && $object->emirates == 'Abu Dhabi' ? 'selected' : '' }}>Abu Dhabi
        </option>
        <option value="Dubai" {{ isset($object) && $object->emirates == 'Dubai' ? 'selected' : '' }}>Dubai</option>
        <option value="Sharjah" {{ isset($object) && $object->emirates == 'Sharjah' ? 'selected' : '' }}>Sharjah
        </option>
        <option value="Ajman" {{ isset($object) && $object->emirates == 'Ajman' ? 'selected' : '' }}>Ajman</option>
        <option value="Umm Al-Quwain" {{ isset($object) && $object->emirates == 'Umm Al-Quwain' ? 'selected' : '' }}>
            Umm Al-Quwain</option>
        <option value="Fujairah" {{ isset($object) && $object->emirates == 'Fujairah' ? 'selected' : '' }}>Fujairah
        </option>
        <option value="Ras Al Khaimah" {{ isset($object) && $object->emirates == 'Ras Al Khaimah' ? 'selected' : '' }}>
            Ras Al Khaimah</option>

    </select>
    @if ($errors->has('emirates'))
        <p class="text-danger">
            {{ $errors->first('emirates') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="city">City</label>
    <select name="city" id="city" class="form-control">
        <option value="" selected>Select a City</option>
        <option value="AUH" {{ isset($object) && $object->city == 'AUH' ? 'selected' : '' }}>Abu Dhabi</option>
        <option value="DXB" {{ isset($object) && $object->city == 'DXB' ? 'selected' : '' }}>Dubai</option>
        <option value="SHJ" {{ isset($object) && $object->city == 'SHJ' ? 'selected' : '' }}>Sharjah</option>
        <option value="AJM" {{ isset($object) && $object->city == 'AJM' ? 'selected' : '' }}>Ajman</option>
        <option value="UAQ" {{ isset($object) && $object->city == 'UAQ' ? 'selected' : '' }}>Umm Al-Quwain</option>
        <option value="FUJ" {{ isset($object) && $object->city == 'FUJ' ? 'selected' : '' }}>Fujairah</option>
        <option value="RAK" {{ isset($object) && $object->city == 'RAK' ? 'selected' : '' }}>Ras Al Khaimah</option>
    </select>
    @if ($errors->has('city'))
        <p class="text-danger">
            {{ $errors->first('city') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="rider">Rider</label>
    <select name="rider_id" id="rider" class="form-control">
        <option value="" selected>Select A Driver/Rider</option>
        @foreach ($riders as $rider)
            <option value="{{ $rider->id }}"
                {{ isset($object) ? ($rider->id == $object->rider_id ? 'selected' : '') : (old('rider_id') == $rider->id ? 'selected' : '') }}>
                {{ $rider->user->name }}</option>
        @endforeach
    </select>
    @if ($errors->has('rider'))
        <p class="text-danger">
            {{ $errors->first('rider') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="area">Area</label>
    <select name="area" id="area" class="form-control">
        <option value="">Select Area</option>
        @foreach ($areas as $area)
            <option value="{{ $area->name }}"
                {{ isset($object) && $object->area == $area->name ? 'selected' : '' }}>
                {{ $area->name }}</option>
        @endforeach
    </select>
    @if ($errors->has('area'))
        <p class="text-danger">
            {{ $errors->first('area') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="visiting_address">Visiting Address</label>
    <input type="text" class="form-control" name="visiting_address"
        value="{{ isset($object) ? $object->visiting_address : old('visiting_address') }}">
    @if ($errors->has('visiting_address'))
        <p class="text-danger">
            {{ $errors->first('visiting_address') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="google_address">Google Address</label>
    <input type="text" class="form-control" name="google_address"
        value="{{ isset($object) ? $object->google_address : old('google_address') }}">
    @if ($errors->has('google_address'))
        <p class="text-danger">
            {{ $errors->first('google_address') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="contact_name">Contact Name</label>
    <input type="text" class="form-control" name="contact_name"
        value="{{ isset($object) ? $object->contact_name : old('contact_name') }}">
    @if ($errors->has('contact_name'))
        <p class="text-danger">
            {{ $errors->first('contact_name') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone"
        value="{{ isset($object) ? $object->phone : old('phone') }}">
    @if ($errors->has('phone'))
        <p class="text-danger">
            {{ $errors->first('phone') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email"
        value="{{ isset($object) ? $object->email : old('email') }}">
    @if ($errors->has('email'))
        <p class="text-danger">
            {{ $errors->first('email') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="remarks">Remarks</label>
    <input type="text" class="form-control" name="remarks"
        value="{{ isset($object) ? $object->remarks : old('remarks') }}">
    @if ($errors->has('remarks'))
        <p class="text-danger">
            {{ $errors->first('remarks') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="month_wise_remarks">Month Wise Remarks</label>
    <input type="text" class="form-control" name="month_wise_remarks"
        value="{{ isset($object) ? $object->month_wise_remarks : old('month_wise_remarks') }}">
    @if ($errors->has('month_wise_remarks'))
        <p class="text-danger">
            {{ $errors->first('month_wise_remarks') }}
        </p>
    @endif
</div>
<div class="form-group">
    <label for="batch">Batch</label>
    <input type="text" class="form-control" name="batch"
        value="{{ isset($object) ? $object->batch : old('batch') }}">
    @if ($errors->has('batch'))
        <p class="text-danger">
            {{ $errors->first('batch') }}
        </p>
    @endif
</div>
