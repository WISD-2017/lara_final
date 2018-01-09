@extends('layouts.memberi')
@section('title','文章管理')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">文章</div>
                    
                    @foreach($post as $post)
                    <div class="fontbig">{{$post->title}}/{{$post->user_name}}
                        <div> 
                        <a href="{{route('adminpost.destroych',$post->id)}}" align="right" class="btncla btn-su">刪除</a>
                    </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection