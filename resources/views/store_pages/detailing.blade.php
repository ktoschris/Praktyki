@extends('partials.mainmaster')


@section('content')

    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">DETAILING</h1>
                <p>This is the detailing page.</p>
                <p><a class="btn btn-primary btn-lg" href="detailing" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <?php
                    $_SESSION['type'] = 'detailing';
                    require '../resources/views/functions/showproducts.php';
                ?>
            </div>
            <center>
                <?php
                require '../resources/views/functions/cart.php';
                ?>
            </center>

            <hr>

        </div> <!-- /container -->

    </main>


@endsection