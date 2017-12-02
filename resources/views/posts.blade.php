@extends('layouts.vmi')

@section('title', '最新文章')

@section('content')
<!-- /.row -->
<div class="container">
    <div class="panel-heading,bold" style="font-weight:bold">最新文章</div> 

<div class="row">
    <div class="col-lg-12">

            @if($post != null)
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
                <a href="{{ route('posts.comment',$post->id) }}" align="right" class="btn btn-su">留言</a> 
            </div>
            
            @foreach ($post->comments as $comment) 
                <div>
                        <hr  size=10 color=#888888 width=800px align=left>
                            <div style="padding:8px">
                            <div style="text-align:left">{{$comment -> owner }}</div>
                            
                            <div> {{$comment ->updated_at}}</div>
                            <div class="fontlarge">{{$comment -> title}}</div>
                            <div class="fontlarge">{{$comment->content}}</div>
                            </div>
                        </div>
                        <hr  size=10 color=#888888>
            @endforeach
            
            @else
            </p>
                找不到這篇文章喔
            </p>
            @endif
    </div>
</div>
<!-- /.row -->
@endsection