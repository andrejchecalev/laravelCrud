@extends('layout')
@section('title','User '.$user->name.' info')


@section('content')
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID: {{$user->id}}</li>
            <li class="list-group-item">Name: {{$user->name}}</li>
            <li class="list-group-item">E-mail: {{$user->email}}</li>
            <li class="list-group-item">Created at: {{$user->created_at->format('d.m.Y H:i:s')}}</li>
            <li class="list-group-item">Updated at: {{$user->updated_at->format('d.m.Y H:i:s')}}</li>
        </ul>
        <div class="card-body">
            {{--<a href="#" class="card-link">Card link</a>--}}
            <table>
<td>                 <a type="button" class="btn btn-primary" href="{{route('users.edit',$user)}}">Edit</a> </td>
                <td>  <a type="button" href={{ route('users.index') }} class="btn btn-secondary">Back</a> </td>
                <td>
                <form method="POST" action="{{route('users.destroy',$user)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </table>
        </div>
    </div>
@endsection
