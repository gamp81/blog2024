@extends('layouts.backend')

@section('title', 'Blog User Modification')

@section('header')
    <h1>
    Blog User Modification
    </h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @include('backend.alert.warning')
            <div class="box box-solid">
                <form role="form" method="post" enctype="multipart/form-data" action="{{ route('backend.user.update', ['id' => $user->id]) }}" id="edit-user-form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="user_pic">Avatar</label>
                            <div class="row">
                                <div class='col-md-3'>
                                    <input type="file" name="user_pic" id="user_pic" accept="image/png,image/gif,image/jpeg" >
                                </div>
                                <div class='col-md-6'>
                                    <img src="{{Storage::url($user->user_pic)  }}" class="img-circle" style="width:80px;height:auto;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' value="{{ $user->name }}" class='form-control' name="name" id='name' placeholder='Please enter your name'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type="text" value="{{ $user->email }}" class='form-control' name="email" id="email" placeholder="Please enter your email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type="password" class='form-control' name="password" id="password" placeholder="Please enter your password">
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