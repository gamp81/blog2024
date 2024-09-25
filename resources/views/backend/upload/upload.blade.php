@extends('layouts.backend')

@section('title', 'Carga de recursos de archivos')

@section('header')
    <h1>
    Carga de recursos de archivos
    </h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @include('backend.alert.warning')
            @include('backend.alert.success')
            <div class="box box-solid">
                <form role="form" method="post" enctype="multipart/form-data" action="{{ route('backend.upload.file-store') }}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="file">Guardar ruta</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    {{ $dir }}
                                    <input type="hidden" name="dir" value="{{ $dir }}" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file">Documento</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type="file" name="file" id="file" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre del archivo</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' class='form-control' name="name" id='name' placeholder='请输入文件名称'>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{ csrf_field() }}


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