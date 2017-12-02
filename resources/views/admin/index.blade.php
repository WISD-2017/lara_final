@extends('layouts.memberi')
@section('title','後臺管理')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">後臺管理</div>
                <a href="{{route('classfi.index')}}" ><div class="panel-heading">文章類別</div></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection