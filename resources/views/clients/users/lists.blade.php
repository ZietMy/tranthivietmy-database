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
    <h1 class="text-center">{{$title}}</h1>
    <a href="{{route('users.add')}}"class="btn btn-success">Create user</a>
    <hr>
    <table class="table">
        <thead>
            <tr class="table-success">
                <th  scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Create_at</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($usersList))
                @foreach ($usersList as $key=> $item )
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$item->fullname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->create_at}}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">Không có người dùng</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
    