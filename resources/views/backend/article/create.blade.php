@extends('layouts.backend')

@section('title', 'Publish Article')

@section('header')
    <h1>
    Publish Article
    </h1>
@endsection

@section('content')
        <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            @include('backend.alert.warning')
            <div class="box box-solid">
                <form role="form" method="post" action="{{ url('backend/article') }}" id="article-form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' class='form-control' name="title" id='title1' placeholder='title'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keyword">Keywords</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' class='form-control' name="keyword" id='keyword' placeholder='Please enter keywords, separated by commas, to facilitate search engine inclusion'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <div class="row">
                                <div class='col-md-10'>
                                    <input type='text' class='form-control' name="desc" id='desc' placeholder='Please enter an article description'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content">Article Content</label>
                            <div class="row markdown-editor">
                                <textarea  id="markdown-editor" name="markdown_content"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cate_id">category</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    @inject('category', 'App\Presenters\CategoryPresenter')
                                    {!! $category->getSelect(0, 'select please', '') !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' class='form-control' id='tags' name="tags" placeholder='Multiple tags are separated by ;'>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{ csrf_field() }}


                    <div class="box-footer">
                        <button type="submit" id="submit-article" class="btn btn-primary">Aceptar</button>
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