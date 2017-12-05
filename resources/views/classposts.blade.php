@extends('layouts.vmi')

@section('title', '')

@section('content')
<!-- /.row -->
<div class="container">
   
    <div class="panel-heading" style="text-align:left">最新文章
    @guest
        <p clss="fontsmall">登入後才可發文</p>
    @else
        <a href="{{ route('posts.create') }}" align="right" class="btn btn-su">發文</a>   
    @endguest                              
    </div>
</div> 

<hr  size=10 color=#888888>
<div class="row">
    <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
               
               @foreach($posts as $post)
                    <div>
                    <hr  size=10 color=#888888>
                    <a href="{{ route('posts.view', $post->id) }}">
                        <div style="padding:8px">
                        <div style="text-align:left">{{$post->user_name}}</div>
                        <div class="fontlarge">{{$post -> title}}</div>
                        <div>{{$post ->updated_at}}</div>
                        </div>
                        </a>
                    
                    </div><hr size=8 color=#888888>
                @endforeach
                </tbody>
            </table>
        </div> 
    <div> 
</div>
</div>
<!-- /.row -->
@endsection