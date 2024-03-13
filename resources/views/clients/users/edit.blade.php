@extends('layouts.client')
@section ('title')
    {{$title}}
@endsection

@section('content')
    @if (session ('msg'))
        <div class= "alert alert-success">
            {{session('msg')}}
        </div>
    @endif
@if ($errors->any())
    <div class="alert alert-danger ">
    dữ liệu không hợp lệ. vui lòng kiểm tra lại
    </div>
@endif
    <h1 class="text-center">{{$title}}</h1>
    <form action="{{route('users.post-edit')}}" method="post">
        <div class="mb-3">
            <label for="">Full name</label>
            <input type="text" class="form-control" name="fullname" placeholder="fullname" value="{{old('fullname')?? $userDetail->fullname}}">
            @error('fullname')
                <span style="color:red;">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')?? $userDetail->email}}" >
            @error('email')
                <span style="color:red;">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Updates</button>
        <a href="{{route('users.index')}}" class="btn btn-warning">Back</a>
        @csrf
    </form>
@endsection
    