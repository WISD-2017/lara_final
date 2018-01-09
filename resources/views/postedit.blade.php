@extends('layouts.vmi')

@section('title', '編輯文章')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯文章 
        </h1>
    </div>
</div>

<!-- /.row -->
@include('layouts.partials.validation')

<!-- /.row -->

<div class="row">
    @foreach($post as $post)
        <form action="{{route('posts.update',$post->id)}}" method = "POST" role="form">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div style="display:none">
            <input name="user_id" value={{Auth::user()->id}}>
            </div>
            
            <div class="">
                <label>看板</label> 
                <select name="classfi_id" class="form-control">
                    @foreach($classfis as$classfi)
                        <option value="{{$classfi->id}}">{{$classfi->class}}</option>
                    @endforeach 
                </select>     
            </div>
            
            <div class="form-group">
                <label>標題：</label>
                <input name="title" class="form-control" value="{{$post->title}}">
            </div>

            <div  class="form-group">
                <label>內容：</label>
                <textarea name="content" class="form-control" rows="10" >{{$post->content}}</textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btnc btn-su">送出</button>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </form>
        @endforeach
</div>
<!-- /.row -->
@endsection
