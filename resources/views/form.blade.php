@extends('layout')
@section('title', isset($user) ? 'Update user '.$user->name : 'Adding a new user')


@section('content')
    <form method="POST"
          @if(isset($user))
              action="{{route('users.update',$user)}}">
        @else
            action="{{route('users.store')}}">
        @endif
        @if(isset($user))
            @method('PUT')
        @endif

        @csrf
        <div class="form-floating mb-3">
            <input name="name"
                   value="{{isset($user) ? $user->name : null}}"
                   class="form-control" id="nameInput"
                   placeholder="name@example.com">
            <label for="nameInput">User's name</label>
        </div>

        <div class="form-floating mb-3">
            <input name="email"
                   value="{{isset($user) ? $user->email : null}}"
                   type="email" class="form-control"
                   id="emailInput"
                   placeholder="name@example.com">
            <label for="emailInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password"
                   value="{{isset($user) ? $user->password : null}}"
                   type="password" class="form-control" id="inputPassword" placeholder="Password">
            <label for="inputPassword">Password</label>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">{{ isset($user) ? 'Update' : 'Create' }}</button>
                <a type="button" href={{ route('users.index') }} class="btn btn-secondary">Back</a>
            </div>
        </div>

    </form>

@endsection
