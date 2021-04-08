@extends('homepage.base')
@section('title')
This is | Registration Page
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto mt-2">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h3 class="text-success text-center lead">Register here..</h3>
                    <hr>
                    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="" class="text-danger">Name</label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="" class="text-danger">Mobile</label>
                                <input type="text" class="form-control" name="mobile" value="{{old('mobile')}}">
                                @error('mobile')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="" class="text-danger">Email Id</label>
                                <input type="text" class="form-control" name="email" value="{{old('email')}}">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="" class="text-danger">Upload Image</label>
                                <input type="file" class="form-control" name="image">
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="" class="text-danger">Date of Birth</label>
                                <input type="date" class="form-control" name="dob" value="{{old('dob')}}">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="" class=" ms-2 text-danger">Password</label>
                                <input type="password" class="ms-2 form-control" name="password" value="{{old('password')}}">
                                @error('passwoed')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="" class="text-danger">Confirm Password</label>
                                <input type="password" class="form-control" name="cpassword" value="{{old('cpassword')}}">
                                @error('cpassword')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mt-3 mb-3">
                                <input type="submit" class=" ms-4 py-2 rounded-0 btn btn-success form-control" value="Inroll Now" name="password">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
