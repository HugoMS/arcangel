@extends('layouts.admin')

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Cargar Pago</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{url('travels/pay')}}" method="post"  enctype="multipart/form-data">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Banco Origen</label>
                            <select class="form-control" name="bancos" id="bancos">
                                <option value="">Seleccione un Banco</option>
                                @foreach($listabancos as $key =>$banco)

                                    <option value="{{ $key }}">{{ $banco}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Número de referencia</label>
                            <input type="text" class="form-control" id="numReferencia" name="numReferencia"
                                   placeholder="Número de referencia">
                        </div>
                        <div class="form-group">
                            <label>Fecha de Pago</label>
                            <input type="text" class="form-control" id="fechapago" name="fechapago" placeholder="Fecha">
                        </div>
                        <div class="form-group">
                            <label>Monto</label>
                            <input type="text" class="form-control" id="montopago" name="montopago" placeholder="Monto">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Seleccionar Archivo</label>
                            <input id="" name="pay-adj" type="file">
                        </div>

                        @if($errors->any())
                            <div>
                                <ul class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
            <input type="hidden" name="codtravel" value="{{$data}}">
        </form>
    </div>
@stop