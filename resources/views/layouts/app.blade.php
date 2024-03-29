<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DEWAN BLOG </title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/frontened/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('public/frontened/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('public/frontened/css/clean-blog.min.css')}}" rel="stylesheet">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css' rel='stylesheet' type='text/css'>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">DEWAN BLOG</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('about')}}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('blog_post')}}">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('category_post')}}">Category</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('public/frontened/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                   @yield('header')
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    @yield('contain')
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('public/frontened/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/frontened/vendor/jquery/jquery.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('public/frontened/vendor/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/3.0.0/toaster.min.js"></script>

{{--<script>--}}
{{--    @if(Session::has('messege'))--}}

{{--        var type ="{{Session::get('alert-type','info')}}"--}}
{{--        switch(type){--}}
{{--            case 'info' :--}}
{{--                toastr.info("{{Session::get('messege')}}");--}}
{{--                break;--}}
{{--            case 'success' :--}}
{{--                toastr.success("{{Session::get('messege')}}");--}}
{{--                break;--}}
{{--            case 'warning' :--}}
{{--                toastr.warning("{{Session::get('messege')}}");--}}
{{--                break;--}}
{{--            case 'error' :--}}
{{--                toastr.error("{{Session::get('messege')}}");--}}
{{--                break;--}}

{{--        }--}}
{{--        @endif--}}
{{--</script>--}}
{{--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}
{{--<script>--}}
{{--    $(document).on("click","#delete", function (e) {--}}
{{--    e.preventDefault();--}}
{{--    var link = $(this).attr("href");--}}
{{--        Swal.fire({--}}
{{--            title: 'Are you sure?',--}}
{{--            text: "You won't be able to revert this!",--}}
{{--            icon: "warning",--}}
{{--            buttons: true,--}}
{{--            dangerMode: true,--}}

{{--        }).then((willDelete) => {--}}
{{--            if (willDelete) {--}}
{{--                window.location.href = link;--}}
{{--            } else{--}}
{{--                Swal.fire("Not Deleted!");--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}

{{--</script>--}}
</body>

</html>
