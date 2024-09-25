@extends('layouts.backend')

@section('title', '文章修改')

@section('header')
    <h1>
        文章修改
    </h1>
@endsection

@section('content')
        <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            @include('backend.alert.warning')
            <div class="box box-solid">
                <form role="form" method="post" action="{{ route('backend.article.update', ['id' => $article->id]) }}" id="article-form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' value="{{ $article->title }}" class='form-control' name="title" id='title' placeholder='标题'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keyword">Keywords</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' value = "{{ $article->keyword }}" class='form-control' name="keyword" id='keyword' placeholder='请输入关键字，以英文逗号分割，利于搜索引擎收录'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <div class="row">
                                <div class='col-md-10'>
                                    <input type='text' value="{{ $article->desc }}" class='form-control' name="desc" id='desc' placeholder='请输入文章描述'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <div class="row markdown-editor">
                                <textarea  id="markdown-editor" name="markdown_content">{!! $article->content !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cate_id">Category</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    @inject('category', 'App\Presenters\CategoryPresenter')
                                    {!! $category->getSelect($article->cate_id, '请选择', '') !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    @inject('tag', 'App\Presenters\TagPresenter')
                                    <input type='text' value="{{ $tag->tagNameList($article) }}" class='form-control' id='tags' name="tags" placeholder='多个标签以; 分割'>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}


                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                        <button type="button" id="reset-btn" class="btn btn-warning">Reset</button>
                    </div>
                </form>

            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        markdownEditorInit();
    </script>
@endsection