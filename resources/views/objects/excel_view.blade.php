@php
    $rtypes = [];
@endphp
<table class="table">
    <thead>
        <tr>
            <th>Month</th>
            <th>Object ID</th>
            <th>Contract Transaction</th>
            <th>Customer</th>
            <th>EM</th>
            <th>Billing Period</th>
            <th>Object Type</th>
            <th>Visiting Address</th>
            <th>Contact Name</th>
            <th>Phone No</th>
            <th>Email</th>
            <th>Emirates</th>
            <th>Area</th>
            <th>Cluster</th>
            <th>Google Address</th>
            <th>Customer Timming</th>
            <th>POC Number Collection</th>
            <th>Appointment, Gate Pass or Military Area</th>
            <th>Batch No</th>

            @foreach ($types as $type)
                @php
                    $rtypes[] = $type;
                @endphp
                <th>{{ $type }}</th>
            @endforeach
            <th>Total Count</th>
            <th>Rider Assigned</th>
            <th>Visit Date</th>
            <th>Remarks By AWDS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($objects as $object)
            <tr>
                <td>{{ $object->created_at->format('d/M') }}</td>
                <td>{{ $object->object_id }}</td>
                <td>{{ $object->contract_transaction }}</td>
                <td>{{ $object->customer }}</td>
                <td>N/A</td>
                <td>{{ $object->frequency }}</td>
                <td>{{ $object->object_type }}</td>
                <td>{{ $object->visiting_address }}</td>
                <td>{{ $object->contact_name }}</td>
                <td>{{ $object->phone }}</td>
                <td>{{ $object->email }}</td>
                <td>{{ $object->emirates }}</td>
                <td>{{ $object->area }}</td>
                <td>-</td>
                <td>{{ $object->visiting_address }}</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>{{ $object->batch }}</td>
                @foreach ($rtypes as $t)
                    @php
                        $id = App\Models\ReadingType::where('name', $t)->first()->id;
                        $reading = App\Models\Reading::where('reading_type_id', $id)
                            ->where('object_id', $object->id)
                            ->first();

                    @endphp
                    @if ($t !== 'Remarks')
                        <td>
                            {{ $reading ? $reading->reading_value : '' }}
                        </td>
                    @else
                        <td> {{ $reading ? $reading->remarks : '' }}</td>
                    @endif
                @endforeach
                <td>{{ App\Models\Reading::where('object_id', $object->id)->sum('reading_value') }}</td>
                <td>{{ $object->rider ? $object->rider->user->name : '-' }}</td>
                <td>{{ $object->last_visited_date }}</td>
                <td>{{ $object->remarks }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
