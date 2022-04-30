@extends('layouts.app')

@include('layouts.nav')

@section('content')
<style>
  .message{
    font-size: 3ch !important;
    color: #ffffff;
    margin-left: 200px !important;
  }
</style>
<div class="card card-warning">
    <div class="card-header" style="background-color:black">
      <h3 class="card-title" style="color: white">Create Post</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body" style="background-color:rgb(12, 9, 9) ">
      <form method="POST">
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label class="text-white">Title</label>
              <input type="text" class="form-control" name="title"  placeholder="Enter ...">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- textarea -->
            <div class="form-group">
              <label class="text-white">Blog</label>
              <textarea class="form-control" name="body" rows="3"  placeholder="Enter ..."></textarea>
            </div>
            <button class="bg-green rounded">Post</button>
          </div>
        </form>
        @if(session()->has('status'))
    <div class="message">{{session('status')}} </div>
        @endif
    </div>
</div>
@endsection
