@extends('layouts.vmi')

@section('title', '最新文章')

@section('content')

<!-- /.row -->
<div class="container">
    <div class="panel-heading" style="text-align:left">最新文章</div> 

<div class="row">
    <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
               
               @foreach($posts as $post)
                    <div>
                    <hr width=95% size=10 color=#33ffcc>
                    <a href="{{ route('posts.view', $post->id) }}">
                        <div style="padding:8px">
                        <div style="text-align:left">{{$post -> owner }}</div>
                        <div class="fontlarge">{{$post -> title}}</div>
                        <div>{{$post ->updated_at}}</div>
                        </div>
                        </a>
                    </div>
                @endforeach
                </tbody>
            </table>
        </div> 
    <div> 
</div>
</div>
<!-- /.row -->
@endsection