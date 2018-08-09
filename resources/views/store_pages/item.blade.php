@extends('partials.mainmaster')


@section('content')

    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Show Product</h1>
                <p>This is the product page.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->

            <div class="row">

                <?php
                require '../resources/views/store_pages/showitem.php';
                ?>
                <?php
                require '../resources/views/store_pages/cart.php';
                ?>
            </div>



            <hr>
        </div> <!-- /container -->

    </main>




    {{--<h2>Price: <span data-bind='text: Price'> </span>!</h2>--}}

   {{-- <script type="text/javascript" src="../../../public/js/cart.js"></script>--}}



@endsection