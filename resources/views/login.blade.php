@extends('template')
@section('body')
    <h2>Welcome to Notes..es</h2>

    <form id="loginForm" onsubmit="return loginForm_submit()">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <div style="height: 200px !important;">&nbsp;</div>

@endsection
