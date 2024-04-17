@extends('layout')

@section('title', 'Contact')

@section('content')

<!-- top navbar -->
<div class="top-navbar">
    <p></p>
    <div class="icons" id="loginDiv">

    </div>
</div>
<!-- top navbar -->

<!-- navbar -->
<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.html" id="logo"><span id="span1">E</span>Lectronic <span>Shop</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./public/images/menu.png" alt="" width="30px"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./products.html">Product</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(67 0 86);">
                        <li><a class="dropdown-item" href="category.html">Smart Phone</a></li>
                        <li><a class="dropdown-item" href="category.html">Houseware</a></li>
                        <li><a class="dropdown-item" href="category.html">Smart Watch</a></li>
                        <li><a class="dropdown-item" href="category.html">Headphone</a></li>
                        <li><a class="dropdown-item" href="category.html">Laptop</a></li>
                        <li><a class="dropdown-item" href="category.html">PC Moniter</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="d-flex" id="search" action="search.html">
                <input name="key" class="form-control me-2" type="search" placeholder="Search ....." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<!-- navbar -->


<div class="container" id="contact">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-phone"> Phone</i>
                <h6>+0000000000</h6>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-envelope"> Email</i>
                <h6>example@gmail.com</h6>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-location-dot"> Address</i>
                <h6>70_Nguyen Hue_TTHue</h6>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-4 py-3 py-md-0">
            <input type="text" class="form-control form-control" placeholder="Name">
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <input type="text" class="form-control form-control" placeholder="Email">
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <input type="text" class="form-control form-control" placeholder="Phone">
        </div>
        <div class="form-group" style="margin-top: 30px;">
            <textarea class="form-control" id="" rows="5" placeholder="Message"></textarea>
        </div>
        <div class="messagebtn text-center"><button>Message</button></div>
    </div>
</div>

<!-- newslater -->
<div class="container" id="newslater">
    <h3 class="text-center">Subscribe To The Electronic Shop For Latest upload.</h3>
    <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button id="subscribe">SUBSCRIBE</button>
    </div>
</div>
<!-- newslater -->

<!-- footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Electronic Shop</h3>

                    <strong>Phone:</strong> +0000000000 <br>
                    <strong>Email:</strong> electronicshop@.com <br>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Usefull Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policey</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>

                    <ul>
                        <li><a href="#">PS 5</a></li>
                        <li><a href="#">Computer</a></li>
                        <li><a href="#">Gaming Laptop</a></li>
                        <li><a href="#">Mobile Phone</a></li>
                        <li><a href="#">Gaming Gadget</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>

                    <div class="socail-links mt-3">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-skype"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <hr>

</footer>
<!-- footer -->

@endsection