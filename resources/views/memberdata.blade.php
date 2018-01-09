@extends('layouts.memberi')
@section('title','個人資料')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
  <form action="{{route('member.edit')}}">
                <div class="panel-body">
                    @foreach($member as $member)
                     <div>使用者名稱  &nbsp; &nbsp; {{$member ->name}}
                       
                            <button type="submit" class="btn btn-primary" >
                                    編輯
                            </button>
                       
                     </div>
                     <div>E-Mail &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$member->email}}</div> </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection