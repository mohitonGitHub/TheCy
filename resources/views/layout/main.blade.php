<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- fontawesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>


    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        nav {
            font-weight: 500;
            font-size: 20px;
            background: white;
        }

        nav .navbar-brand {
            font-weight: 700;
            font-size: 25px;
        }

        #navbar {
            color: aliceblue;
        }

        footer {
            padding: 2rem 0rem 0.5rem 0rem;
            background-color: rgb(228, 228, 228)
        }

        footer h2 {
            color: black;
            font-weight: 500;
        }

        footer .links ul li,
        footer .links ul li a {
            text-decoration: none;
            list-style: none;
            color: black;
            font-size: 1.3rem;
            font-weight: 500;
        }

        footer .links ul {
            padding: 0%;
        }

        footer p {
            font-size: 16px;
        }

        footer ul li a {
            text-decoration: none;
            font-size: 1.7rem;
            color: black;
            transition: 0.3s ease-in-out;
        }

        footer ul li a:hover {
            color: rgb(178, 21, 21);
        }

        footer .social {
            display: flex;
            justify-content: center;
        }

        .populer a:after {
            content: "|";
            color: #525964;
            padding-right: 1px;
            padding-left: 3px;
            top: 50%;
            transform: translateY(-50%);
        }

        .populer a {
            text-decoration: none;
            color: #212529;
            font-size: 1rem;
        }

        footer h5 {
            font-weight: 600;
        }

        .copyright {
            background-color: #808080 !important;
            color: black;
            padding: 3px 0px !important;
        }

        .copyright p {
            color: rgb(255, 255, 255) !important;
        }

        @media (max-width: 768px) {
            footer p {
                text-align: center;
            }

            footer h2 {
                text-align: center;
            }

            footer h5 {
                margin: auto;
            }
        }
    </style>
    @yield('style')

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Navbar</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/') }}" aria-current="page">Home <span
                                    class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Item</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="{{ url('/all-items') }}">All Items</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact us</a>
                        </li>
                    </ul>
                    {{-- <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer style="margin-top: 6rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 mb-4">
                    <h2><strong>Customization & You</strong></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, quia a dignissimos voluptates
                        dicta maxime eum enim, optio veritatis laboriosam dolorum alias voluptas, reiciendis cum
                        doloremque voluptatum porro minima quo ab! Labore voluptatem quasi sapiente, totam vel officiis
                        minima cumque, necessitatibus, sit pariatur aspernatur aut assumenda atque in! Asperiores
                        consequuntur nobis reprehenderit nemo. Consequuntur cupiditate praesentium natus hic quasi autem
                        recusandae nulla sapiente id quae deserunt accusantium, temporibus maiores dicta sed, magni
                    </p>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    {{-- inner row --}}
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-6 text-center">
                            <h3>Pages Links</h2>
                                <div class="links">
                                    <ul>
                                        <li><a href="">Home</a></li>
                                        <li><a href="">About</a></li>
                                        <li><a href="">Services</a></li>
                                        <li><a href="">Contact</a></li>
                                    </ul>
                                </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 text-center">
                            <h3> Links</h2>
                                <div class="links">
                                    <ul>
                                        <li><a href="">Home</a></li>
                                        <li><a href="">About</a></li>
                                        <li><a href="">Services</a></li>
                                        <li><a href="">Contact</a></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                    {{-- inner row end --}}
                </div>
            </div>

            <div class="row  mt-5">
                <div class="col-6">
                    <h5>POPULAR SEARCHES</h5>
                    <div class="d-flex">
                        <div class="populer">
                            <a href="#" class=""><span>Customized T-shirts</span></a>
                            <a href="#" class=""><span>Customized Gifts</span></a>
                            <a href="#" class=""><span>Customized Services</span></a>
                            <a href="#" class=""><span>Printed T-shirt</span></a>
                            <a href="#" class=""><span>Printed Mugs</span></a>
                            <a href="#" class=""><span>Printed bottles</span></a>
                            <a href="#" class=""><span>Printed Business Cards</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="display: grid; justify-content: end;">
                    <h5>Social Media Links</h5>
                    <ul class="list-inline social">
                        <li class="list-inline-item">
                            <a href="#!"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="fa-brands fa-whatsapp"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </footer>
    <div class="comtainer-fluid copyright m-0 p-0">
        <p class="text-muted text-center small mt-4">&copy; Your Website 2023. All Rights Reserved.</p>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
@yield('script')
<script>
    $(document).ready(function() {
        var screenWidth = $(window).width();
        if (screenWidth <= 475) {
            $(".footerlinks").css("justify-content", "center");
            $("#footerLast").css("justify-content", "center");
            $("#footerFirst").css("justify-content", "center");
        }
    });
</script>

</html>
