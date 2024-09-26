@extends('layouts.backend')

@section('title', 'Navegación agregada')

@section('header')
    <h1>
    Navegación agregada
    </h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @include('backend.alert.warning')
            <div class="box box-solid">
                <form role="form" method="post" action="{{ url('backend/navigation') }}" id="navigation-form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nombre de categoría</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' class='form-control' name="name" id='name' placeholder='Por favor ingrese el nombre de la categoría'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' class='form-control' name="url" id='url' placeholder='Por favor ingresa una dirección de enlace legal'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sequence">Orden de visualización</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' value="0" class='form-control' name="sequence" id='sequence' placeholder='Por favor ingrese el valor entero'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="state">Estado</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <select name="state" id="state" class="form-control">
                                        <option value="0">Mostrar</option>
                                        <option value="1">Esconder</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{ csrf_field() }}


                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                        <button type="button" class="btn btn-warning" id="reset-btn">reset</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection