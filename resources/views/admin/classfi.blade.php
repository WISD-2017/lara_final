@extends('layouts.memberi')
@section('title','類別管理')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">文章類別
                     <a href="{{route('classfi.add')}}" align="right" class="btnadd btn-su">新增</a>  
                </div>
                    
                    @foreach($classfis as $classfi)
                    <div class="fontbig">{{$classfi->id }} / {{$classfi->class}}
                        <a href="{{route('classfi.edit',$classfi->id )}}" align="right" class="btncla btn-su">編輯</a>  
                        <a href="{{route('classfi.destroych',$classfi->id )}}" align="right" class="btncla btn-su">刪除</a>  
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection