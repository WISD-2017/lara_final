@extends('layouts.vmi')

@section('title', '新增文章')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增文章 
        </h1>
    </div>
</div>

<!-- /.row -->
@include('layouts.partials.validation')

<!-- /.row -->

<div class="row">
        <form action="/posts" method = "POST" role="form">
            {{csrf_field()}}
            <div style="display:none">
            <input name="user_id" value={{Auth::user()->id}}>
            <input name="user_name" value="{{Auth::user()->name}}">
            
            </div>
            
            <div class="">
                <label>看板</label> 
                <select name="classfi_id" class="form-control">
                    @foreach($classfis as$classfi)
                        <option value="{{$classfi->id}}">{{$classfi->class}}</option>
                    @endforeach
                   
                </select>     
            </div>
            
            <div class="form-group">
                <label>標題：</label>
                <input name="title" class="form-control" placeholder="請輸入文章標題">
            </div>

            <div  class="form-group">
                <label>內容：</label>
                <textarea name="content" class="form-control" rows="10"></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btnc btn-su">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </form>
</div>
<!-- /.row -->
@endsection
