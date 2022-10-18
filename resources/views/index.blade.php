@extends('layout')
@section('title','Users')


@section('content')
    <a class="btn btn-primary" role="button" href="{{Route('users.create')}}">New user</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Mail</th>
            <th scope="col">Created</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td><a href="{{route('users.show',$user)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                    <a type="button" class="btn btn-outline-success" href="{{route('users.edit',$user)}}">edit</a>
                </td>
                <td>
                    <form method="POST" action="{{route('users.destroy',$user)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
