@extends('layouts.master')

@section('content')
    <div class="container">
    <h1>Create Warga</h1>
    <form action="/warga/store"method="POST">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text" name="lname"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <textarea class="form-control"name="address" rows="10"></textarea><br>
    <input type="submit" name="submit" class="btn btn-primary" value="Save">

</form>
    </div>
@endsection