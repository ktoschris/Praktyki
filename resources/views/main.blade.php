@extends('partials.mainmaster')

@section('content')

    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">{{ setting('site.title') }}</h1>
                <p>{{ setting('site.greeting') }}</p>
                <p><a class="btn btn-primary btn-lg" href="/main" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Parts</h2>
                    <p>New and used car parts.</p>
                    <p><a class="btn btn-secondary" href="/parts" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Accessories</h2>
                    <p>Interior and exterior car acessories.</p>
                    <p><a class="btn btn-secondary" href="/accessories" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Detailing</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-secondary" href="/detailing" role="button">View details &raquo;</a></p>
                </div>
            </div>

            <hr>

        </div> <!-- /container -->

        <center>
            <?php
            require '../resources/views/functions/cart.php';
            ?>
        </center>





    </main>


@endsection