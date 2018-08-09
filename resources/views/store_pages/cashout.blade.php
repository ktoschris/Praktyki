@extends('partials.mainmaster')


@section('content')

    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Cashout</h1>
                <p>This is the acessories page.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">

            <?php
            require '../resources/views/store_pages/finalcart.php';



            ?>
                <script>
                    console.log(parsedProductList);

            </script>

        </div> <!-- /container -->

    </main>


@endsection