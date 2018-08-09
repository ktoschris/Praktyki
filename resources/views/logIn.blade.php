@extends('partials.signinmaster')

@section('content')
<body>
<br>
<br>
<div class="container">
    <form class="" action="/logmein" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="username" id="username" class="form-control" placeholder="User Name">
        </div>

        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>


    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

</div>
</body>

@endsection