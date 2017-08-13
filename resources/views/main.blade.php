<!DOCTYPE html>
<html lang="en">
@include('_head')
<body>
    @include('_nav')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>LRV-BLOG!</h1>
                    <p>nouslynous@gmail.com</p>
                    <p><a class="btn btn-primary btn-lg">Explore!</a></p>
                </div>
            </div>
        </div> <!-- .row -->

        <div class="row">
           @yield('content')
        </div> <!-- .row -->

        <hr>

        @include('_footer')

    </div> <!-- .container -->

    @include('_javascript')
</body>
</html>