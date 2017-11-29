@extends('layouts.vmi')

@section('title', '最新文章')

@section('content')


   
        
   

<!-- /.row -->
<div class="container">
    <div class="panel-heading" style="text-align:left">最新文章</div> 

<div class="row">
    <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
               
               @foreach($posts as $post)
                    <div>
                        <div style="padding:8px">
                        <div style="text-align:left">{{$post -> owner }}</div>
                        <div>{{$post -> title}}</div>
                        <div>{{$post ->updated_at}}</div>
                        </div>
                    </div>
                @endforeach
                </tbody>
            </table>
        </div> 
    <div> 
</div>
</div>
<!-- /.row -->
@endsection