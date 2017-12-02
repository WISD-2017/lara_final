@extends('layouts.vmi')

@section('title', '留言')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增留言 
        </h1>
    </div>
</div>

<!-- /.row -->
@include('layouts.partials.validation')

<!-- /.row -->

<div class="row">
        <form action="/posts/{{$post->id}}" method = "POST" role="form">
            {{csrf_field()}}
            <div style="display:none">
            <input name="owner" value="{{Auth::user()->name}}">
            <input name="post_id" value="{{$post->id}}">    
            </div>
            <div  class="form-group">
                <label>內容：</label>
                <textarea name="content" class="form-control" rows="10"></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btnc btn-su">送出</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </form>
</div>
<!-- /.row -->
@endsection