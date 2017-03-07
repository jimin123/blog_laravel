@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Đây là trang chủ (Blog page).</div>

                <div class="panel-body">
                    <a href="{{url('/MyBlog/blog1')}}">Blog 1 ...</a><br />
                    <a href="{{url('/MyBlog/blog2')}}">Blog 2 ...</a><br />
                    <a href="{{url('/MyBlog/blog3')}}">Blog 3 ...</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
