@extends('layouts.admin')

@section('content')
    <div class="row">
        @foreach( $data as $viajes)
        @foreach( $viajes as $viaje)

        <div class="col-md-4">
    <a class="travel-a" href="{{ URL::to('travels/'.$viaje->cod) }}">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user travel ">
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
    </a>

            <!-- /.widget-user -->
        </div>
        @endforeach
        @endforeach
    </div>
@endsection