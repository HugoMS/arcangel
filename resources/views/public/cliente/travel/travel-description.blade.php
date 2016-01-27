@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#info" data-toggle="tab" aria-expanded="true">Informacion del Viaje</a></li>
                    <li class=""><a href="#crono" data-toggle="tab" aria-expanded="false">Cronograma</a></li>
                </ul>
                <div class="tab-content">
                    <!-- Font Awesome Icons -->
                    <div class="tab-pane active" id="info">
                       <pre>
                              ARCÁNGEL Excursionismo y Adrenalina en Semana Santa 2016 para La Gran Sabana.
                           ¿Tu sueño es conocer La Gran Sabana?
                           ¿Quieres conocer nuevos lugares, nuevos paisajes, nuevas culturas y personas?
                           Vente con nosotros en Semana Santa del sábado 19 al domingo 27 de Marzo
                           Donde todo tiene alma...
                           Donde todos y cada uno de tus días serán únicos y llenos de buena vibras.
                           Con opción de alojamiento en Posada o en Carpa según tu preferencia, en conjunto con más de 12 Saltos y el destino único de El Aponwao.
                           ¿A dónde Vamos?
                           LA GRAN SABANA
                           Región situada al sudeste del Estado Bolívar, en Venezuela, al sur del río Orinoco; está ocupada totalmente por el macizo Guayanes, constituido por las formaciones rocosas más antiguas del planeta.Área aprox.: 18.000 Km2
                           Proclamada por la UNESCO como patrimonio de la Humanidad en 1994.Es una superficie cortada por numerosos afluentes del río Caroní, que formó colinas redondeadas y mesas escarpadas, rodeadas por superficies tabulares que reciben el nombre de ‘tepuyes’. Al oeste de la Gran Sabana se alinean tres altiplanos. El clima es tropical húmedo con vegetación herbácea y bosques frondosos. Forma parte del Parque Nac. Canaima. Se encuentra a unos 1300 km de la Capital de Venezuela "Caracas". Específicamente al sur del Estado Bolívar y hace frontera con Brasil.
                           VIDEO sobre como son nuestras Excursiones: http://vimeo.com/43179958
                       </pre>

                    </div>
                    <!-- /#fa-icons -->

                    <!-- glyphicons-->
                    <div class="tab-pane" id="crono">
                    <pre>
                        Día 1 SAB.:
                Caracas - Ciudad. Bolívar.

                Día 2 DOM.:
                Pto. Ordáz - Upata - Guasipati - El Callao - Tumeremo
                - El Dorado - Las Claritas - km 88 (almuerzo)
                - Parada en la Piedra de la Virgen
                -Visita Salto Kama
                -Llegada a Santa Elena de Uairen al Campamento Instalación de Carpas y reparto de Habitaciones.
                -Casco de Santa Elena de Uairen (Catedral-Casa de los Cristales)

                Día 3 LUN.:
                - Excursión a Salto de Agua Fría.
                - Excursión a las Puertas del Cielo
                -Visita San Francisco de Yuruani
                -Excursión Cortinas de Yuruani
                -Vista desde el Mirador Presidencial
                -Excursión La Playita

                Día 4 MAR.:
                -Visita a la Línea Brasil
                -Excursión Quebrada de Jaspe
                -Excursión Quebrada de Pacheco

                Día 5 MIER.:
                -Excursión a Velo de Novia
                -Excursión al Oasis
                -Visita San Francisco de Yuruani
                -Excursión Aguas Calientes

                Día 6 JUE.:
                - Full Day al Salto el Aponwao (El más alto del sector de La Gran Sabana, 108 mts de altura) Trayecto de 20 minutos en curiara.

                Día 7 VIE.:
                - Excursión Salto de Manakachi
                -Excursión Golondrina
                -Excursión Salto Guacharo

                Día 8 SAB.:
                - Salida a Caracas.

                Día 9 DOM.:
                -Llegada a Caracas.
                    </pre>
                    </div>
                    <!-- /#ion-icons -->

                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>


    <div class="box box-info">
        <div class="box-header">
            <i class="fa fa-paperclip"></i>
            <h3 class="box-title">Pagos Realizados</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Banco</th>
                    <th>Referencia</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Cantidad</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Banco Mercantil</td>
                    <td> 2550099887766</td>
                    <td>12 de febrero del 2015</td>
                    <td><span class="badge bg-red">Cancelado</span></td>
                    <td>6.600,00 Bs</td>
                </tr>

                <tr>
                    <td colspan="5" style="text-align: right">Total</td>
                    <td>6.600,00 Bs</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>






@endsection