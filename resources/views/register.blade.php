@extends('partials.signinmaster')

@section('content')
    <body>
    <br>
    <br>
    <div class="container">
        <form class="" action="/registerme" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="Login">
            </div>

            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <input type="password" name="confirmed-password" id="confirmed-password" class="form-control" placeholder="Confirm Password">
            </div>

            <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname">
            </div>

            <div class="form-group">
                <input type="text" name="adress" id="adress" class="form-control" placeholder="Adress">
            </div>

            <div class="form-group">
                <input type="number" name="phone_nr" id="phone_nr" class="form-control" placeholder="Phone Number">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
    </div>
    </body>

@endsection