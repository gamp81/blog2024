@extends('layouts.backend')

@section('title', 'Add articles by category')

@section('header')
    <h1>
    Add articles by category
    </h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @include('backend.alert.warning')
            <div class="box box-solid">
                <form role="form" method="post" action="{{ url('backend/category') }}" id="category-form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' class='form-control' name="name" id='name' placeholder='Please enter a category name'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cate_id">Parent Category</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    @inject('category', 'App\Presenters\CategoryPresenter')
                                    {!! $category->getSelect(0, 'Top Classification') !!}
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