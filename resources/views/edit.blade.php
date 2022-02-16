@extends('layout')

@section('content')
<div class="col-sm-6">
    <h1>EDIT Restaurant</h1>
<form method="post" action="/edit">
@csrf
  <div class="form-group">
      <input type="hidden" name="id" value="{{$data->id}}">
    <label >Name </label>
    <input type="text" name="name" class="form-control" value="{{$data->Name}}" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label >Address </label>
    <input type="text" name="address" class="form-control" value="{{$data->Address}}"  placeholder="Enter address">
  </div>
  <div class="form-group">
    <label >Contact </label>
    <input type="text" name="contact" class="form-control" value="{{$data->Contact}}"  placeholder="Enter contact">
  </div>
  <div class="form-group">
    <label >gender </label>
    <input type="text" name="gender" class="form-control"  value="{{$data->gender}}" placeholder="Enter Gender">
  </div>
  <div class="form-group">
    <label >DOB </label>
    <input type="text" name="dob" class="form-control" value="{{$data->DOB}}" placeholder="Enter DOB">
  </div>
  <div class="form-group">
    <label >Email </label>
    <input type="email" name="email" class="form-control" value="{{$data->Email}}" placeholder="Enter email">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop