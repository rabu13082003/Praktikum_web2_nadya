@extends('layouts.app') 
@section('content') 
<div class="card"> 
    <div class="card-header"> 
        Register User 
    </div> 
    <div class="card-body"> 
    <form action="{{route('registerstore')}}" method="post"> 
        @csrf 
    <div class="form-group"> 
        <label for="">name</label> 
        <input type="text" name="nama" class="form-control"> 
    </div> 
    <div class="form-group"> 
        <label for="">username</label> 
        <input type="text" name="username" class="form-control"> 
    </div> 
    <div class="form-group"> 
        <label for="">password</label> 
        <input type="password" name="password" class="form-control"> 
    </div> 
    <button type="submit" class="btn btn-primary">register</button></form> <br> 
    <a href="{{route('register')}}" class="nav-link nt-2">kembali kehalaman login</a> 
</form> 
</div> 
</div> 
@endsection