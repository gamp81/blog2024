@extends('layouts.backend')

@section('title', 'Modificaciones de navegación')

@section('header')
    <h1>
    Modificaciones de navegación
    </h1>
@endsection

@section('content')
    <div class="row">
        @include('backend.alert.warning')
        <div class="col-xs-12">
            <div class="box box-solid">
                <form role="form" method="post" action="{{ route('backend.navigation.update', ['id' => $navigation->id]) }}" id="navigation-form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' value="{{ $navigation->name }}" class='form-control' name="name" id='name' placeholder='Por favor ingrese el nombre de la categoría'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' value="{{ $navigation->url }}" class='form-control' name="url" id='url' placeholder='Por favor ingrese una dirección de enlace legal'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sequence">Orden de visualización</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' value="{{ $navigation->sequence }}" class='form-control' name="sequence" id='sequence' placeholder='Por favor ingrese  el valor entero'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="state">Estado</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <select name="state" id="state" class="form-control">
                                        <option value="0" {{ $navigation->state == 0 ? 'selected' : '' }}>Mostrar</option>
                                        <option value="1" {{ $navigation->state == 1 ? 'selected' : '' }}>Ocultar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                        <button type="button" class="btn btn-warning" id="reset-btn">Reset</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection