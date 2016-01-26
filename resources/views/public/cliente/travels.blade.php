@extends('layouts.admin')

@section('content')
    <div class="row">
        @foreach( $data as $viajes)
        @foreach( $viajes as $viaje)

        <div class="col-md-4">

            <!-- Widget: user widget style 1 -->
            <input type="hidden" name="travel_id" id="travel_cod" value="{{$viaje->cod}}">
            <div class="box box-widget widget-user travel travel-a">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black cover-viaje">
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-8 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{$viaje->titulo}}</h5>
                            </div>
                            <!-- /.description-block -->
                        </div>

                        <!-- /.col -->
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">{{$viaje->fecha}}</h5>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>

            <!-- /.widget-user -->
        </div>
        @endforeach
        @endforeach
    </div>
@endsection