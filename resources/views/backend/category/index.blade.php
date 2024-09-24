@extends('layouts.backend')

@section('title', 'Categoria')

@section('header')
    <h1>
        Categoria
    </h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @include('backend.alert.success')
            <div class="box box-solid">
                <!-- /.box-header -->
                <div class="box-header">
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('backend.category.create') }}" class="btn btn-white tooltips"
                               data-toggle="tooltip" data-original-title="Added"><i
                                        class="glyphicon glyphicon-plus"></i></a>
                        </div>
                    </div><!-- pull-right -->
                </div>
                <div class="box-body table-responsive no-padding ">
                    <table class="table table-hover">
                        <tr>
                        <th>Id</th>
                        <th>Category name</th>
                        <th>Operation</th>
                        </tr>
                        @if ($category)
                            <?php $line = 1  ?>
                            @foreach($category as $id => $cate_name)
                                <tr>
                                    <td>{{ $line }}</td>
                                    <td>{!! $cate_name  !!} </td>
                                    <td>
                                        <a href='{{ route("backend.category.edit", ["id" => $id]) }}' class='btn btn-info btn-xs'>
                                            <i class="fa fa-pencil"></i> Edit</a>
                                        <a href='{{ route("backend.category.set-nav", ["id" => $id]) }}' class='btn btn-info btn-xs'>
                                        Set as navigation
                                        </a>
                                        <a data-href='{{ route("backend.category.destroy", ["id" => $id]) }}'
                                           class='btn btn-danger btn-xs category-delete'><i class="fa fa-trash-o"></i> Delete</a>
                                    </td>
                                </tr>
                                <?php $line++ ?>
                            @endforeach
                        @endif
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(function() {
            $(".category-delete").click(function(){
                var url = $(this).attr('data-href');
                Moell.ajax.delete(url);
            });
        });
    </script>
@endsection