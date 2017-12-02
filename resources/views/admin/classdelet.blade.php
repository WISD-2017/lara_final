@extends('layouts.memberi')
@section('title','刪除類別')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">文章類別
                     
                </div>
                    
                    
                    <div class="fontbig">{{$classfis->id }} / {{$classfis->class}}
                    <form action="{{ route('classfi.destroy', $classfis->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                     <button class="btncla btn-su">
                     刪除
                    </button>
                    <a href="{{route('classfi.index')}}" align="right" class="btncla btn-su">取消</a>
                     </form>
                        
                    </div>
                  
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection