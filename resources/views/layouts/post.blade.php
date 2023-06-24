<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('blogy/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('blogy/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('blogy/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('blogy/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('blogy/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blogy/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('blogy/css/flatpickr.min.css') }}">

    <title>Byte.Globe Blog</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center d-flex justify-content-evenly">
                        <div class="col-2">
                            <a href="index.html" class="logo m-0 float-start">Byte.Globe<span
                                    class="text-primary">.</span></a>
                        </div>
                        <div class="col-4 text-center">
                            <form action="#" class="search-form d-inline-block d-lg-none">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bi-search"></span>
                            </form>

                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="/">Home</a></li>
                                @if (Auth::check())    
                                    @if (Auth::user()->role == 'user')
                                    <li><a href="/dashboard/user">Dashboard</a></li>
                                    @else
                                    <li><a href="/dashboard/admin">Dashboard</a></li>
                                    @endif
                                @else
                                <li><a href="/dashboard/user">Dashboard</a></li>
                                @endif
                                <li class="has-children">
                                    <a href="">Category</a>
                                    <ul class="dropdown">
                                        @foreach ($category as $item)
                                        <li><a href="{{ url('/category/'.$item->id) }}">{{ $item->category }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 text-end">
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span>
                            </a>
                            <form action="{{ url('/search') }}" method="POST" class="search-form d-none d-lg-inline-block">
                                @csrf
                                <input name="keyword" type="text" class="form-control" placeholder="Search...">
                                <span class="bi-search"></span>
                            </form>
                        </div>
                        <div class="col-3">
                            @if (Auth::check())    
                            <div>
                                <a href="/logout" class="btn btn-sm btn-primary p-2">Logout</a>
                            </div>
                            @else    
                            <div>
                                <a href="/login" class="btn btn-sm btn-primary p-2">Login</a>
                                <a href="/register" class="btn btn-sm btn-primary p-2">Register</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('{{ $image }}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    @yield('top')
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row blog-entries element-animate">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="pt-5">
                        <p>Category: <a href="#">{{ $post->category['category'] }}</a></p>
                    </div>

                    <div class="post-content-body">
                        @yield('body')
                    </div>
                </div>
                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box">
                        @yield('author')
                    </div>

                    <div class="sidebar-box">
						<h3 class="heading">Categories</h3>
						<ul class="categories">
							@foreach ($category as $item)
							<li><a href="{{ url('/category/'.$item->id) }}">{{ $item->category }}</span></a></li>
                            @endforeach
						</ul>
					</div>
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3 class="mb-4">About</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div> <!-- /.widget -->
                    <div class="widget">
                        <h3>Social</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-4 -->
                <div class="col-lg-4 ps-lg-5">
                    <div class="widget">
                        <h3 class="mb-4">Company</h3>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Vision</a></li>
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Creative</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-4 -->
            </div> <!-- /.row -->

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>Copyright &copy; All Rights Reserved.</p>
                </div>
            </div>
        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


    <script src="{{ asset('blogy/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('blogy/js/tiny-slider.js') }}"></script>

    <script src="{{ asset('blogy/js/flatpickr.min.js') }}"></script>


    <script src="{{ asset('blogy/js/aos.js') }}"></script>
    <script src="{{ asset('blogy/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('blogy/js/navbar.js') }}"></script>
    <script src="{{ asset('blogy/js/counter.js') }}"></script>
    <script src="{{ asset('blogy/js/custom.js') }}"></script>


</body>

</html>
