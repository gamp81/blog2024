@extends('layouts.backend')

@section('title', '用户列表')

@section('header')
    <h1>
    User List
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
                            <a href="{{ route('backend.user.create') }}" class="btn btn-white tooltips"
                               data-toggle="tooltip" data-original-title="Add"><i
                                        class="glyphicon glyphicon-plus"></i></a>
                        </div>
                    </div><!-- pull-right -->
                </div>
                <div class="box-body table-responsive no-padding ">
                    <table class="table table-hover">
                        <tr>
                        <th>Id</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Operation</th>
                        </tr>
                        @if ($users)
                            <?php $line = 1  ?>
                            @foreach($users as $u)
                                <tr>
                                    <td>{{ $line }}</td>
                                    <td>
                                        <img src="{{Storage::url($u['user_pic'])}}" class="img-circle" style="width:30px;height:auto;">
                                    </td>
                                    <td>{{ $u['name'] }}</td>
                                    <td>{{ $u['email'] }}</td>
                                    <td>
                                        <a href='{{ route("backend.user.edit", ["id" => $u['id']]) }}' class='btn btn-info btn-xs'>
                                            <i class="fa fa-pencil"></i> Edit</a>
                                        <a data-href='{{ route("backend.user.destroy", ["id" => $u['id']]) }}'
                                           class='btn btn-danger btn-xs user-delete'><i class="fa fa-trash-o"></i> Delete</a>
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
            $(".user-delete").click(function(){
                var url = $(this).attr('data-href');
                Moell.ajax.delete(url);
            });
        });
    </script>
@endsection