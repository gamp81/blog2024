@extends('layouts.backend')

@section('title', '文章分类修改')

@section('header')
    <h1>
        文章分类修改
    </h1>
@endsection

@section('content')
    <div class="row">
        @include('backend.alert.warning')
        <div class="col-xs-12">
            <div class="box box-solid">
                <form role="form" method="post" action="{{ route('backend.category.update', ['id' => $category->id]) }}" id="category-form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' value="{{ $category->name }}" class='form-control' name="name" id='name' placeholder='请输入分类名称'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="C">Clasificación superior</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    @inject('categoryPresenter', 'App\Presenters\CategoryPresenter')
                                    {!! $categoryPresenter->getSelect($category->parent_id, 'categorías principales') !!}
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