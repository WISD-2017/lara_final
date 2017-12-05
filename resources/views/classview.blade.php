@extends('layouts.memberi')
@section('title','文章分類')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">所有類別</div>

                <div class="panel-body">
                    @foreach($classfis as $class)
                        <div>
                            <a href="{{route('class.post',$class->id)}}">
                            <div style="padding:8px">
                            <div style="text-align:left">{{$class->class }}</div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
