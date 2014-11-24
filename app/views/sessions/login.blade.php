@extends('layouts.default')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ URL::to('login') }}" method="post">
        <fieldset>
            <legend>Login</legend>

            <label>邮箱
                <input type="text" name="email" placeholder="lynn@example.com" value="{{ Input::old('email') }}" />
            </label>

            <label>密码
                <input type="password" name="password" placeholder="password"/>
            </label>

            <button type="submit" class="button expand">Submit</button>
        </fieldset>
    </form>

@endsection