@extends('layouts.memberi')
@section('title','新增類別')
@section('content')
@include('layouts.partials.validation')

<div class="rowclass">
        <form action="{{route('classfi.store')}}" method = "POST" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label>類別：</label>
                <input name="class" class="form-control" placeholder="請輸入類別名稱">
            </div>
            <div class="text-right">
                <button type="submit" class="btnc btn-su">新增</button>
            </div>
        </form>
</div>
@endsection