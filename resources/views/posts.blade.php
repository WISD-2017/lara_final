@extends('layouts.vmi')

@section('title', '最新文章')

@section('content')
<!-- /.row -->
<div class="container">
    <div class="panel-heading,bold" style="font-weight:bold">最新文章</div> 

<div class="row">
    <div class="col-lg-12">

            
            <div class="fontlarge" >
                {{$post->user_name}}
                
            </div>
            
            <span>{{$post->updated_at}}</span>
                
             
             
            <div class="fontlarge" >
               {{$post->title}}
            </div>
            
            <div class="fontbig">
                {{$post->content}}
            </div>
            <div>&nbsp;</div>
            <div class="text-left">
                <button href="{{route('index')}}" type="button" class="btn btn-default">留言</button>
            </div>
            
            @foreach ($post->comments as $comment) 
                <div>
                        <hr  size=10 color=#888888>
                            <div style="padding:8px">
                            <div style="text-align:left">{{$comment -> owner }}</div>
                            <div>B{{$comment->id}} | {{$comment ->updated_at}}</div>
                            <div class="fontlarge">{{$comment -> title}}</div>
                            <div class="fontlarge">{{$comment->content}}</div>
                            </div>
                        </div>
                        <hr  size=10 color=#888888>
            @endforeach
    </div>
</div>
<!-- /.row -->
@endsection