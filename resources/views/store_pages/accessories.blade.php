@extends('partials.mainmaster')


@section('content')

    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">ACESSORIES</h1>
                <p>This is the acessories page.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <?php
                    $_SESSION['type'] = 'accessories';
                    require '../resources/views/store_pages/showproducts.php';
                ?>
            </div>
            <center>
                <?php
                require '../resources/views/store_pages/cart.php';
                ?>
            </center>

            <hr>

        </div> <!-- /container -->

    </main>


@endsection