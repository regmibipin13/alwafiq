@extends('dispatch.layout')

@push('dispatch-css')
    <style>
        #legend {
            font-family: Arial, sans-serif;
            background: #fff;
            /*transparent;*/
            padding: 5px;
            margin: 5px;
            border: 3px solid #000;
            width: 10%;
            font-size: 8px;
        }

        #legend div {
            display: flex;
            align-items: center;
        }

        #legend h5 {
            margin-top: 0;
            font-size: 15px;
        }

        #legend img {
            vertical-align: middle;
            width: 35px;
            height: 35px;
            margin: 0 10px;
            padding-top: 3px;
            vertical-align: sub;
        }

        #legend .text {
            font-weight: bold;
            font-size: 10px;
            font-style: italic;
        }

        .etarow {
            padding: 5px;
            background: aliceblue;
            margin: 3px;
        }

        .etarow div {
            font-size: larger;
            font-weight: bolder;
        }

        .detail-popup {
            display: none;
            width: 100%;
            max-width: 100%;
            height: 100%;
        }

        .detail-overflow {
            height: 89vh;
            overflow-y: scroll;
            overflow-x: hidden;
            margin-right: 25px;
        }

        .btn-type {
            width: 32%;
            border-radius: 0;
        }

        .detail-overflow::-webkit-scrollbar {
            width: 3px;
        }

        .detail-overflow::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .detail-overflow::-webkit-scrollbar-thumb {
            background: #888;
        }

        .detail-overflow::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .f-12 {
            font-size: 12px;
        }

        #map {
            height: calc(100vh - 120px);
            width: 100%;
            padding: 10px;
        }

        .modal-content {
            height: 90vh;
        }

        #book-now-map,
        #book-later-map,
        #box-content {
            width: 100%;
            height: calc(80vh - 100px);
            padding: 10px;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        #box-content::-webkit-scrollbar {
            width: 3px;
        }

        #box-content::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        #box-content::-webkit-scrollbar-thumb {
            background: #888;
        }

        #box-content::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        a.notification:hover,
        a.notification:focus {
            background-color: aquamarine;
        }

        .packages .fs--1 {
            font-size: .83333rem !important;
        }

        .body-type li {
            list-style: none;
            padding: 5px;
            background: bisque;
            border-radius: 5px;
            text-align: center;
            margin: 3px;
            cursor: pointer;
        }

        .notification-avatar {
            margin-left: auto;
            margin-top: auto;
            margin-bottom: auto;
        }

        .truck-types img {
            width: 55px;
        }

        .truck-types {
            padding: 0px 30px;
            height: 70px;
            margin: 0 0 25px 10px;
            cursor: pointer;
            width: auto;
            text-align: center;
            border: 5px solid #dddddd;
            border-radius: 5px;
        }

        .truck-types:hover,
        .truck-types:focus {
            border: 5px solid #ff9933;
        }

        .pac-container {
            z-index: 10000 !important;
        }

        .iti {
            width: 100%;
        }

        .iti__flag {
            background-image: {{ asset('assets/build/img/flags.png') }};
        }

        @media (-webkit-min-device-pixel-ratio: 2),
        (min-resolution: 192dpi) {
            .iti__flag {
                background-image: {{ asset('assets/build/img/flags@2x.png') }};
            }
        }

        .swiper-slide p {
            margin-top: 15px;
        }

        .swiper-slide.active {
            border: 5px solid #ff9933;
            color: #000;
            background: transparent;
        }

        .sidebar-contact.left.active {
            background: transparent;
        }

        .active {
            background: #ff9933;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
        }

        .toggle.l.pulse.active {
            background: #000000;
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

                        <button type="button" class="btn btn-primary btn-sm turned-button mx-4 booking_screen"
                            data-bs-toggle="modal" data-bs-target="#create-task">
                            New Task
                        </button>
                        <div class="modal fade" id="create-task" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Assign Task To Driver</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('store/tasks') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="customer_id">Customer Id</label>
                                                    <input type="text" class="form-control" id="customer_id"
                                                        name="customer_id">
                                                    @if ($errors->has('customer_id'))
                                                        <p class="text-danger">
                                                            {{ $errors->first('customer_id') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="customer_name">Customer Name</label>
                                                    <input type="text" class="form-control" id="customer_name"
                                                        name="customer_name">
                                                    @if ($errors->has('customer_name'))
                                                        <p class="text-danger">
                                                            {{ $errors->first('customer_name') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="form-group col-md-6">
                                                    <label for="object_id">Object Id</label>
                                                    <input type="text" class="form-control" id="object_id"
                                                        name="object_id">
                                                    @if ($errors->has('object_id'))
                                                        <p class="text-danger">
                                                            {{ $errors->first('object_id') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="emirates">Emirates</label>
                                                    <select id="emirates" name="emirates" class="form-control">
                                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                                        <option value="Dubai">Dubai</option>
                                                        <option value="Sharjah">Sharjah</option>
                                                        <option value="Ajman">Ajman</option>
                                                        <option value="Umm Al Quwain">Umm Al Quwain</option>
                                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                        <option value="Fujairah">Fujairah</option>
                                                    </select>
                                                    @if ($errors->has('emirates'))
                                                        <p class="text-danger">
                                                            {{ $errors->first('emirates') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="form-group col-md-6">
                                                    <label for="area">Area</label>
                                                    <input type="text" class="form-control" name="area"
                                                        id="area">
                                                    @if ($errors->has('area'))
                                                        <p class="text-danger">
                                                            {{ $errors->first('area') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" id="address"
                                                        name="address">

                                                    <input type="hidden" name="address_latitude" id="address_lat">
                                                    <input type="hidden" name="address_longitude" id="address_lng">
                                                    @if ($errors->has('address'))
                                                        <p class="text-danger">
                                                            {{ $errors->first('address') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="driver_id">Driver</label>
                                                <select class="form-control" id="driver_id" name="driver_id">

                                                </select>
                                                @if ($errors->has('driver_id'))
                                                    <p class="text-danger">
                                                        {{ $errors->first('driver_id') }}
                                                    </p>
                                                @endif
                                            </div>
                                            <button type="submit" class="mt-3 btn btn-success">Assign Task</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- <button type="button" class="btn btn-primary btn-sm turned-button mx-4 booking_screen"
                            data-bs-toggle="modal" data-id="book-later">
                            Import From Excel
                        </button> --}}
                    </nav>
                </div>
            </div>


            <div class="row g-0">
                <div class="col ps-md-2 mb-2" style="padding-right: 0 !important;">
                    <div class="card h-lg-100 overflow-hidden">
                        <div class="card-body d-flex align-items-center p-2" style="height: calc(100vh - 100px);">

                            <div id="map"></div>

                            <div id="legend">
                                <h5>Tasks List</h5>
                            </div>

                            {{-- List requests --}}
                            <div class="sidebar-contact left active">
                                <div class="toggle l pulse">
                                    <i class="fas fa-align-justify"></i>
                                </div>
                                <div id="request-lists-target">
                                    <include-fragment src="{{ url('fetch/tasks') }}">
                                        <span style="text-align: center;font-weight: bold;">@lang('view_pages.loading')</span>
                                    </include-fragment>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection

@push('dispatch-js')
    <script src="{{ asset('assets/js/fetchdata.min.js') }}"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">


    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ get_settings('google_map_key') }}&libraries=places"></script>

    <script>
        var lat = parseFloat(
            "{{ auth()->user()->admin->serviceLocationDetail->zones()->pluck('lat')->first() ?? 11.015956 }}");
        var lng = parseFloat(
            "{{ auth()->user()->admin->serviceLocationDetail->zones()->pluck('lng')->first() ?? 76.968985 }}");

        function fetchRequestList(column = null, value = null) {
            let query = '';
            if (column && value)
                query = column + '=' + value

            $(function() {
                var url = '{{ url('fetch/dispatch-delivery-request_lists') }}?' + query;
                fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.querySelector('#request-lists-target').innerHTML = html;
                    });
            });
        }

        $('body').on('click', '.pagination a', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');
            $.get(url, $('#search').serialize(), function(data) {
                $('#request-lists-target').html(data);
            });
        });

        $(document).on('click', '.tripStatusFilter', function() {
            var col = $(this).attr('data-tripstatus');
            var val = $(this).attr('data-val');

            if (col == 'all')
                fetchRequestList();
            else
                fetchRequestList(col, val);
        })
    </script>

    @stack('booking-scripts')

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-database.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-analytics.js"></script>

    <script type="text/javascript">
        var heatmapData = [];
        var pickLat = [];
        var pickLng = [];
        var default_lat = lat;
        var default_lng = lng;
        var driverLat, driverLng, bearing, type;
        var marker = [];
        var onTrip, available;
        onTrip = available = true;

        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "{{ get_settings('firebase-api-key') }}",
            authDomain: "{{ get_settings('firebase-auth-domain') }}",
            databaseURL: "{{ get_settings('firebase-db-url') }}",
            projectId: "{{ get_settings('firebase-project-id') }}",
            storageBucket: "{{ get_settings('firebase-storage-bucket') }}",
            messagingSenderId: "{{ get_settings('firebase-messaging-sender-id') }}",
            appId: "{{ get_settings('firebase-app-id') }}",
            measurementId: "{{ get_settings('firebase-measurement-id') }}"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();

        var tripRef = firebase.database().ref('drivers');

        var requestRef = firebase.database().ref('requests');

        tripRef.on('value', async function(snapshot) {
            var data = snapshot.val();
            var drivers = data.filter(driver => {
                return driver !== null && driver.hasOwnProperty('name');
            });
            var driver = $('#driver_id');
            drivers.forEach(d => {
                var option = `<option value='${d.id}'>${d.name}</option>`
                driver.append(option);
            })


            await loadDriverIcons(data);
        });

        requestRef.on('value', async function(snapshot) {
            var tripData = snapshot.val();
            Object.entries(tripData).forEach(([key, val]) => {
                if (typeof val.request_id != 'undefined') {
                    var status = $('#' + key);
                    var statusTxt =
                        `<span class="badge badge rounded-capsule badge-soft-<<color>>"><<status>><<loader>></span>`
                    if (val.is_completed == true) {
                        statusTxt = statusTxt.replace('<<color>>', 'success')
                        statusTxt = statusTxt.replace('<<status>>', 'Completed')
                        statusTxt = statusTxt.replace('<<loader>>', '')
                    } else if (val.is_cancelled == true) {
                        statusTxt = statusTxt.replace('<<color>>', 'danger')
                        statusTxt = statusTxt.replace('<<status>>', 'Cancelled')
                        statusTxt = statusTxt.replace('<<loader>>', '')
                    } else if (val.trip_start == 1) {
                        statusTxt = statusTxt.replace('<<color>>', 'success')
                        statusTxt = statusTxt.replace('<<status>>', 'Trip Started')
                        statusTxt = statusTxt.replace('<<loader>>', '')
                    } else if (val.trip_arrived == 1) {
                        statusTxt = statusTxt.replace('<<color>>', 'warning')
                        statusTxt = statusTxt.replace('<<status>>', 'Driver Arrived')
                        statusTxt = statusTxt.replace('<<loader>>', '')
                    } else {
                        statusTxt = statusTxt.replace('<<color>>', 'dark')
                        statusTxt = statusTxt.replace('<<status>>', 'In Progress')
                        statusTxt = statusTxt.replace('<<loader>>',
                            `<div class="spinner-border text-dark"
style="width: 1rem;height: 1rem;" role="status">
<span class="sr-only">@lang('view_pages.loading')</span>
</div>`
                        )

                    }
                    status.html(statusTxt);
                }
            });
        });

        // var address = document.getElementById('address');
        // var location = new google.maps.places.Autocomplete(address);
        // console.log(location);

        var map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng(default_lat, default_lng),
            zoom: 7,
            mapTypeId: 'roadmap',
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                position: google.maps.ControlPosition.TOP_CENTER,
            },
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.RIGHT_BOTTOM,
            },
            scaleControl: true,
            streetViewControl: false,
            fullscreenControl: true,

        });

        var iconBase = '{{ asset('map/icon/') }}';
        var icons = {
            available: {
                name: 'Available',
                icon: iconBase + '/truck1.png'
            },
            ontrip: {
                name: 'OnTrip',
                icon: iconBase + '/truck2.png'
            }
        };

        var legend = document.getElementById('legend');

        for (var key in icons) {
            var type = icons[key];
            var name = type.name;
            var icon = type.icon;
            var div = document.createElement('div');
            div.innerHTML = `<input type="checkbox" data-status="${key}" class="status" checked>` +
                '<img src="' + icon + '"> ' +
                `<span class="text">${name}</span>`;
            legend.appendChild(div);
        }

        map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(legend);

        // Load all driver icons by availability and set info window
        function loadDriverIcons(data) {
            deleteAllMarkers();

            Object.entries(data).forEach(([key, val]) => {
                if (typeof val.l != 'undefined') {
                    var contentString = `<div class="p-2">
<h6><i class="fa fa-id-badge"></i> : ${val.name ?? '-' } </h6>
<h6><i class="fa fa-phone-square"></i> : ${val.mobile ?? '-'} </h6>
<h6><i class="fa fa-id-card"></i> : ${val.vehicle_number ?? '-'} </h6>
<h6><i class="fa fa-truck"></i> : ${val.vehicle_type_name ?? '-'} </h6>
</div>`;

                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    var iconImg = '';

                    if (val.is_available == true && val.is_active == true && available) {
                        iconImg = icons['available'].icon;
                    } else if (val.is_available == false && onTrip) {
                        iconImg = icons['ontrip'].icon;
                    }

                    var carIcon = new google.maps.Marker({
                        position: new google.maps.LatLng(val.l[0], val.l[1]),
                        // animation: google.maps.Animation.DROP,
                        icon: {
                            url: iconImg,
                            scaledSize: new google.maps.Size(35, 35)
                        },
                        map: map
                    });


                    carIcon.addListener('click', function() {
                        infowindow.open(map, carIcon);
                    });


                    marker.push(carIcon);
                    carIcon.setMap(map);





                    // rotateMarker(iconImg, bearing);
                }
            });
        }



        // To rotate truck based on driver bearing
        function rotateMarker(carimage, bearing) {
            var bearing = Math.floor((Math.random() * 180) + 0);
            document.querySelectorAll(`img[src='${carimage}']`).style.transform = 'rotate(' + bearing + 'deg)';
        }

        // Filter available and ontrip drivers
        $(document).on('click', '.status', function() {
            var checked = $(this).prop('checked');
            var tripStatus = $(this).attr('data-status');

            if (checked) {
                if (tripStatus == 'available') {
                    available = true;
                } else {
                    onTrip = true;
                }
            } else {
                if (tripStatus == 'available') {
                    available = false;
                } else {
                    onTrip = false;
                }
            }

            tripRef.on('value', async function(snapshot) {
                var data = snapshot.val();

                await loadDriverIcons(data);
            });
        });

        // Delete truck icons once map reloads
        function deleteAllMarkers() {
            for (var i = 0; i < marker.length; i++) {
                marker[i].setMap(null);
            }
        }

        // To error alert
        function closeFancyBox() {
            $.fancybox.close();
        }
    </script>


    {{-- New Map Code  --}}
    <script type="text/javascript">
        ['DOMContentLoaded'].forEach(function(eve) {
            // On load document
            window.addEventListener(eve, function() {



                var map;
                var pickUpLocation;
                var pickUpLat, pickUpLng;

                function initialize() {
                    var centerLat = parseFloat(
                        "{{ auth()->user()->admin->serviceLocationDetail->zones()->pluck('lat')->first() ?? get_settings('default_latitude') }}"
                    );
                    var centerLng = parseFloat(
                        "{{ auth()->user()->admin->serviceLocationDetail->zones()->pluck('lng')->first() ?? get_settings('default_longitude') }}"
                    );
                    var pickup = document.getElementById('address');


                    var latlng = new google.maps.LatLng(centerLat, centerLng);



                    var geocoder = new google.maps.Geocoder();

                    var pickup_location = new google.maps.places.Autocomplete(pickup);




                    pickup_location.addListener('place_changed', function() {

                        // pickUpMarker.setVisible(false);

                        var place = pickup_location.getPlace();
                        // console.log(place);

                        if (!place.geometry) {
                            // window.alert("Autocomplete's returned place contains no geometry");
                            return;
                        }

                        pickUpLat = place.geometry.location.lat();
                        pickUpLng = place.geometry.location.lng();
                        pickUpLocation = new google.maps.LatLng(pickUpLat, pickUpLng);


                        // google.maps.event.addListener(pickUpMarker, 'dragend', function() {
                        //     geocodePosition(pickUpMarker.getPosition());
                        // });

                        // google.maps.event.trigger(pickUpMarker, 'click')
                        // if (dropLocation)
                        //     calcRoute(pickUpLocation, dropLocation)

                        bindDataToForm(place.formatted_address, pickUpLat, pickUpLng, 'address');

                    });




                    function geocodePosition(pos) {
                        geocoder.geocode({
                            latLng: pos
                        }, function(responses) {
                            if (responses && responses.length > 0) {
                                $("#pickup").val(responses[0].formatted_address);
                            }

                        });
                    }

                }

                google.maps.event.addDomListener(window, 'load', initialize);



                // Add pick and drop address,Lat and Lng
                function bindDataToForm(address, lat, lng, loc) {
                    document.getElementById(loc).value = address;
                    document.getElementById(loc + '_lat').value = lat;
                    document.getElementById(loc + '_lng').value = lng;
                }

            });
        });
    </script>
    {{-- New Code Map Ends  --}}

    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#create-task').modal('show');
            })
        </script>
    @endif
@endpush
