@extends('layouts.memberi')
@section('title','編輯類別')
@section('content')
@include('layouts.partials.validation')

<div class="rowclass">
        <form action="{{route('classfi.update',$classfis->id)}}" method = "POST" role="form">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            
            <div class="form-group">
                <label>類別：</label>
                <input name="class" class="form-control" value={{$classfis->class}}>
            </div>
            
            <div class="text-right">
                <button type="submit" class="btnc btn-su">送出</button>
            </div>
        </form>
</div>
@endsection