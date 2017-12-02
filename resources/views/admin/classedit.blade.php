@extends('layouts.memberi')
@section('title','新增類別')
@section('content')
@include('layouts.partials.validation')

<div class="rowclass">
        <form action="/backstage/classfi/{{$classfis->id}}" method = "POST" role="form">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            
            <div class="form-group">
                <label>類別：</label>
                <input name="class" class="form-control" value={{$classfis->class}}>
            </div>
            
            <div class="text-right">
                <button type="submit" class="btnc btn-su">新增</button>
            </div>
        </form>
</div>
@endsection