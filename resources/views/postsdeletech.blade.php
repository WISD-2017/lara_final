@extends('layouts.vmi')
@section('title', $post->title)

@section('content')
<!-- /.row -->
<div class="container">
    <div class="panel-heading,bold" style="font-weight:bold"></div> 

<div class="row">
    <div class="col-lg-12">

            
            <form action="{{ route('posts.delete', $post->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
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
            <div class="fontlarge">
                確定要刪除嗎?
            
            <button class="btncla btn-su">
                    刪除
                   </button>
                   <a href="{{route('posts.view',$post->id)}}" align="right" class="btncla btn-su">取消</a>
            </div>
            </form>
    </div>
</div>
<!-- /.row -->
@endsection