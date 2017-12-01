@extends('layouts.memberi')
@section('title','個人頁面')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">過去的文章</div>

                <div class="panel-body">
                @if($posts !=null)
                    @foreach($posts as $post)
                    <div>
                    <hr  size=10 color=#888888>
                    <a href="{{ route('posts.view', $post->id) }}">
                        <div style="padding:8px">
                        <div class="fontlarge"style="text-align:left">{{$post -> title}}</div>
                        <div>{{$post ->updated_at}}</div>
                        </div>
                        </a>
                    
                    </div><hr size=8 color=#888888>
                @endforeach
                @else
                    <p>你還沒有發過文喔</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
