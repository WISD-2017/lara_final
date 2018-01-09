@extends('layouts.memberi')
@section('title','刪除文章')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">文章
                     
                </div>
                    
                    
                    <div class="fontbig">{{$post->id }} / {{$post->title}}
                    <form action="{{ route('adminpost.destroy', $post->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                     <button class="btncla btn-su">
                     刪除
                    </button>
                    <a href="{{route('admin.posts')}}" align="right" class="btncla btn-su">取消</a>
                     </form>
                        
                    </div>
                  
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection