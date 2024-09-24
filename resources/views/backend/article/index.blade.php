@extends('layouts.backend')

@section('title', 'Article Management')

@section('header')
    <h1>
    Article Management
    </h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @include('backend.alert.success')
            <div class="box box-solid">
                <div class="box-header">
                    <form class="form-inline" action="" method="get">
                        <div class="form-group">
                            <label for="title">Title</label>&nbsp;
                            <input name='title' type="text" class="form-control" id="title" placeholder="Please enter the article title">&nbsp;
                        </div>
                        <div class="form-group">
                            <label for="cate_id">Category</label>&nbsp;
                            @inject('categoryPresenter', 'App\Presenters\CategoryPresenter')
                            {!! $categoryPresenter->getSelect(0, 'Please select', '') !!}
                        </div>
                        <button type="submit" class="btn btn-info">Search</button>
                        <div class="pull-right">
                            <a href='{{ route("backend.article.create") }}' class='btn btn-success btn-xs'>
                                <i class="fa fa-plus"></i>Publish Article</a>
                        </div>
                    </form>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding ">
                    <table class="table table-hover">
                        <tr>
                        <th>Id</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Reads</th>
                        <th>Comments</th>
                        <th>Category</th>
                        <th>Time</th>
                        <th>Operation</th>
                        </tr>
                        @if ($articles)
                            @inject('articlePresenter', 'App\Presenters\ArticlePresenter')

                            <?php $line = 1 ?>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{ $line }}</td>
                                    <td>
                                        @if($article->user)
                                            {{ $article->user->name }}
                                        @endif
                                    </td>
                                    <td>{{ $articlePresenter->formatTitle($article->title) }}</td>
                                    <td>{{ $article->read_count }}</td>
                                    <td>{{ $article->comment_count }}</td>
                                    <td>
                                        @if($article->category)
                                            {{ $article->category->name }}
                                        @endif
                                    </td>
                                    <td>{{ $article->created_at }}</td>
                                    <td>
                                        <a href='{{ route("backend.article.edit", ["id" => $article->id]) }}' class='btn btn-info btn-xs'>
                                            <i class="fa fa-pencil"></i> Edit</a>
                                        <a data-href='{{ route("backend.article.destroy", ["id" => $article->id]) }}'
                                           class='btn btn-danger btn-xs article-delete'><i class="fa fa-trash-o"></i> Delete</a>
                                    </td>
                                </tr>
                                <?php $line++ ?>
                            @endforeach
                        @endif
                    </table>
                </div>
                <!-- /.box-body -->

                <div class="box-footer clearfix">
                    {!! $articles->links() !!}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(function() {
            $(".article-delete").click(function(){
                var url = $(this).attr('data-href');
                Moell.ajax.delete(url);
            });
        });
    </script>
@endsection