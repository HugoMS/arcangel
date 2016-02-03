@extends('layouts.admin')

@section('content')


    <ul class="timeline">
        @foreach( $data as $viajes)

        @foreach( $viajes as $viaje)
                <!-- timeline time label -->
        <li class="time-label">
        <span class="bg-red">
            10 Feb. 2014
        </span>
        </li>
        <!-- /.timeline-label -->

        <!-- timeline item -->
        <li>
            <!-- timeline icon -->
            <i class="glyphicon glyphicon-globe bg-blue"></i>
            <div class="timeline-item">
                <div class="timeline-body">
                    <div class="row">
                    <div class="col-md-4">
                        <a class="travel-a" href="{{ URL::to('travels/'.$viaje->paquete->cod) }}">
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-widget widget-user travel ">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-black cover-viaje">
                                    <h3 class="widget-user-username">{{$viaje->paquete->titulo}}</h3>
                                    <h5 class="widget-user-desc">{{$viaje->paquete->fecha}}</h5>
                                </div>
                             </div>
                        </a>
                        <!-- /.widget-user -->
                    </div>
                    </div>
                </div>


            </div>
        </li>
        @endforeach
        @endforeach
                <!-- END timeline item -->
        <li>
            <i class="fa fa-clock-o bg-gray"></i>
        </li>

    </ul>

@endsection