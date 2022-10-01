@extends('layouts.master')

@section('content')

<div class="container">
<h1>Edit Data</h1>
<form action="/warga/{{$warga->id}}"method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->fname}}">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text" name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->lname}}">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->username}}">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <textarea class="form-control" name="address" rows="10">{{$warga->address}}</textarea><br>
    </div>
    <input type="submit" name="submit" class="btn btn-info" value="Update">

</form>
</div>
@endsection