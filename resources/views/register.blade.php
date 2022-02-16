@extends('layout')
@section('content')

<h1>Register Page</h1>
<div class="col-sm-8">
<form method="post" action="register">
@csrf
  <div class="form-group">
    <label >Name </label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label >Address </label>
    <input type="text" name="address" class="form-control"  placeholder="Enter address">
  </div>
  <div class="form-group">
    <label >Contact </label>
    <input type="text" name="contact" class="form-control"  placeholder="Enter contact">
  </div>
  <div class="form-group">
    <label >gender </label>
    <input type="text" name="gender" class="form-control"  placeholder="Enter Gender">
  </div>
  <div class="form-group">
    <label >DOB </label>
    <input type="text" name="dob" class="form-control"  placeholder="Enter DOB">
  </div>
  <div class="form-group">
    <label >Email </label>
    <input type="email" name="email" class="form-control"  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label >password </label>
    <input type="password" name="password" class="form-control"  placeholder="Enter password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop