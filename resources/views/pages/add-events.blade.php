@extends('layouts.master')
@section('title','اضافة حدث');
@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('add_building')}}" method="get">


                    <div class="card-body">

                        <div class="col-md-7">
                            <input id="point_latitude" name="point_latitude" type="hidden" class="form-control" placeholder="">
                        </div>

                        <div class="col-md-7">
                            <input id="point_longitude" name="point_longitude" type="hidden" class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="building_no" class="form-label">Building no</label>
                            <input type="text" class="form-control" name="building_no" id="building_no" placeholder="132A">
                        </div>
                        <div class="form-group" >
                            <label for="street_no" class="form-label">Street</label>
                            <input type="text" class="form-control" name="street_no" id="street_no" placeholder="Street">
                        </div>

                        <div class="form-group">
                            <label for="citizen_name" class="form-label">citizen_name</label>
                            <input type="text" class="form-control" name="citizen_name" id="citizen_name" placeholder="Citizen Name">
                        </div>

                        <div class="form-group">
                            <label for="event_name" class="form-label">Event Name</label>
                            <input type="text" class="form-control" name="event_name" id="event_name" placeholder="Event Name">
                        </div>

                        <div class="form-group">
                            <label for="citizen_id" class="form-label">Citizen Id</label>
                            <input type="text" class="form-control" name="citizen_id" id="citizen_id" placeholder="1234567">
                        </div>


                        <div class="form-group">
                            <label for="event_count" class="form-label">event_count</label>
                            <input id="event_count" name="event_count"  type="text" class="form-control" placeholder="3000">
                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label  for="floors_count" class="form-label" >Floors Count</label>
                                    <select id="floors_count"  name="floors_count" class="form-control" aria-label="Default select example">
                                        <option value="1">1 Floors</option>
                                        <option value="2">2 Floors</option>
                                        <option value="3">3 Floors</option>
                                        <option value="4">4 Floors</option>
                                        <option value="5">5 Floors</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label  for="event_category" class="form-label" >event category</label>
                                    <select id="event_category" name="event_category" class="form-control" aria-label="Default select example">
                                        <option value="Health">Health</option>
                                        <option value="Education">Education</option>
                                        <option value="Enter">Entertainment</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </div>

        <div class="col-md-6 ">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div id="map" style="height: 443px;"></div>
            </div>
        </div>

    </div>


@endsection;




@push('javascript')

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>

    <script>

        const map =L.map('map',
            {
                center:[31.3547,34.3088],
                zoom:10
            })
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        map.on('click',addMarker);

        function addMarker(e){


            // حذف العناصر الأخرى ذات الصلة
            $(".leaflet-marker-icon").remove();
            $(".leaflet-shadow-pane").remove();
            $(".leaflet-popup").remove();
            $(".leaflet-tooltip").remove();

            console.log('You have added a new marker in the map ');

            newMarker=new L.marker(e.latlng).addTo(map);

            console.log(' latitude = '+newMarker.getLatLng().lat);
            console.log(' longitude = '+newMarker.getLatLng().lat);


            document.getElementById('point_latitude').value = newMarker.getLatLng().lat;
            document.getElementById('point_longitude').value = newMarker.getLatLng().lng;



        }

    </script>


@endpush





