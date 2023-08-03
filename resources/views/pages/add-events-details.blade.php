@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('add_new_citizen')}}" method="get">


                    <div class="card-body">

                        <div class="form-group">
                            <label for="resident_name" class="form-label">resident Name</label>
                            <input id="resident_name" name="resident_name" type="text" class="form-control" placeholder="name">
                        </div>

                        <div class="form-group" >
                            <label for="building_id" class="form-label" >Building Id</label>
                            <input id="building_id" name="building_id" type="text" class="form-control" placeholder="Street">
                        </div>

                        <div class="form-group">
                            <label for="citizen_status" class="form-label" >Citizen Status</label>
                            <input id="citizen_status" name="citizen_status" type="text" class="form-control" placeholder="Citizen Name">
                        </div>



                        <div class="row">

                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label  for="floor" class="form-label" >Floors Count</label>
                                    <select id="floor" name="floor" class="form-control" aria-label="Default select example">
                                        <option value="1">1 Floors</option>
                                        <option value="2">2 Floors</option>
                                        <option value="3">3 Floors</option>
                                        <option value="4">4 Floors</option>
                                        <option value="5">5 Floors</option>
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

        <div class="col-md-7 ">
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

@endsection

@section('page_scripts')
    <script>


        const map =L.map('map',
            {
                center:[31.3547,34.3088],
                zoom:10
            })
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);





    </script>
@endsection

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


        var buildings = @json ($buildings_query);
        console.log('buidlings: '+buildings);
        buildings.forEach(element=> {
            console.log('row: '+element.id);
            console.log('row: '+element.citizen_name );
            console.log('row: '+element.latitude);
            console.log('row: '+element.longitude);

            L.marker([element.latitude,element.longitude])
                .addTo(map)
                .bindPopup('Name buildings ('+element.citizen_name+') - Id buildings  ('+element.id+')')
                .openPopup()   ;
        });

    </script>



@endpush



{{--<div class="col-md-2">--}}
{{--    <div class="card">--}}
{{--        <div class="card-header">Building Table</div>--}}
{{--        <div class="card-body">--}}
{{--            <table class="table table-bordered table-striped table-hover text-nowrap">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th  scope="col">Id</th>--}}
{{--                    <th  scope="col">Citizen Name</th>--}}
{{--                    <th  scope="col">Floors</th>--}}
{{--                    <th  scope="col">Event Name</th>--}}
{{--                    <th  scope="col">Event Category</th>--}}



{{--                    <th  scope="col">latitude</th>--}}
{{--                    <th  scope="col">longitude</th>--}}
{{--                    <th  scope="col">Actions</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($buildings_query as $buildings)--}}
{{--                    <tr>--}}
{{--                        <td>{{$buildings->id}}</td>--}}
{{--                        <td>{{$buildings->citizen_name}}</td>--}}
{{--                        <td>{{$buildings->floors_count}}</td>--}}

{{--                        <td>{{$buildings->	event_name}}</td>--}}
{{--                        <td>{{$buildings->event_category}}</td>--}}

{{--                        <td>{{$buildings->latitude}}</td>--}}
{{--                        <td>{{$buildings->longitude}}</td>--}}
{{--                        <td>--}}
{{--                            <button type="button" class="btn btn-info" onclick="edit_building('{{$buildings->id}}')">Edit</button>--}}
{{--                            <button type="button" class="btn btn-danger" onclick="delete_building('{{$buildings->id}}')">Delete</button>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}




{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}
