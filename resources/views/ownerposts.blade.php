@extends('layouts.vmi')
@section('title', $post->title)

@section('content')
<!-- /.row -->
<div class="container">
    <div class="panel-heading,bold" style="font-weight:bold"></div> 

<div class="row">
    <div class="col-lg-12">

            
           
            <div class="fontlarge" >
                    {{DB::table('users')->where('id','=',$post->user_id)->pluck('name')}} Talk:
            </div>
            
            <span>{{$post->updated_at}}</span>
                
            
            <div class="fontlarge" >
               標題 : {{$post->title}} 
            
            </div>
            
            <div class="fontbig">
                {{$post->content}}
            </div>
            <div>&nbsp;</div>
            <div class="text-left">
               
                <a href="{{ route('posts.comment',$post->id) }}" align="right" class="btn btn-su">留言</a>
                <a href="{{route('posts.edit',$post->id)}}" align="right" class="btn btn-su">編輯</a>
                <a href="{{route('posts.deletech',$post->id)}}" align="right" class="btn btn-su">刪除</a>  
            </div>
          
            @foreach ($post->comments as $comment) 
                <div>
                        <hr  size=10 color=#888888 width=800px align=left>
                            <div style="padding:8px">
                            <div style="text-align:left">{{$comment -> owner }}Talk:</div>
                            
                            <div> {{$comment ->updated_at}}</div>
                            <div class="fontlarge">{{$comment->content}}</div>
                            </div>
                        </div>
                        <hr  size=10 color=#888888>
            @endforeach
    </div>
</div>
<!-- /.row -->
@endsection