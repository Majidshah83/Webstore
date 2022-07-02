<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('public/frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Lightbox-->
    <link rel="stylesheet" href="{{ asset('public/frontend/vendor/lightbox2/css/lightbox.min.css')}}">
    <!-- Range slider-->
    <link rel="stylesheet" href="{{ asset('public/frontend/vendor/nouislider/nouislider.min.css')}}">
    <!-- Bootstrap select-->
    <link rel="stylesheet" href="{{ asset('public/frontend/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="{{ asset('public/frontend/vendor/owl.carousel2/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/frontend/vendor/owl.carousel2/assets/owl.theme.default.css')}}">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="public/frontend/img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page-holder">
      <!-- navbar-->
      <header class="header bg-white">
        <div class="container px-0 px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span class="font-weight-bold text-uppercase text-dark">Boutique</span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="{{url('shop')}}">Shop</a>
                </li>

                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                  <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="{{url('/')}}">Homepage</a><a class="dropdown-item border-0 transition-link" href="{{url('shop')}}">Category</a><a class="dropdown-item border-0 transition-link" href="{{url('cart')}}">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="{{url('checkout')}}">Checkout</a></div>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('cart')}}"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>Cart<small class="text-gray">({{ count((array) session('cart')) }})</small></a></li>
                <li class="nav-item"><a class="nav-link" href="#"> <i class="far fa-heart mr-1"></i><small class="text-gray"> (0)</small></a></li>
                <li class="nav-item"><a class="nav-link" href="#"> <i class="fas fa-user-alt mr-1 text-gray"></i>Login</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <!--  Modal -->
      <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url(public/frontend/img/product-5.jpg)" href="public/frontend/img/product-5.jpg" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="public/frontend/img/product-5-alt-1.jpg" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="public/frontend/img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
                <div class="col-lg-6">
                  <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="p-5 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h2 class="h4">Red digital smartwatch</h2>
                    <p class="text-muted">$250</p>
                    <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class="row align-items-stretch mb-4">
                      <div class="col-sm-7 pr-sm-0">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.html">Add to cart</a></div>
                    </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- HERO SECTION-->

  <div class="container">
        <!-- HERO SECTION-->

        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Checkout</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('cart')}}">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

        </section>
         @if(session('cart'))
        <section class="py-5">
          <!-- BILLING ADDRESS-->

          <h2 class="h5 text-uppercase mb-4">Billing details</h2>
          <div class="row">
            <div class="col-lg-8">

              <form action="{{route('place_Order')}}" method="POST">
                <div class="row">
                 @csrf
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase">First name</label>
                    <input class="form-control form-control-lg"  name="first_name" type="text" placeholder="Enter your first name" required>
                  </div>
                  <input type="hidden" class="form-control form-control-lg"  name="user_id" value="{{Auth::user()->id}}">
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" >Last name</label>
                    <input class="form-control form-control-lg"  name="last_name" type="text" placeholder="Enter your last name" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" >Email address</label>
                    <input class="form-control form-control-lg" name="email" type="email" placeholder="e.g. Jason@example.com" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase">Phone number</label>
                    <input class="form-control form-control-lg"  name="phone_number" type="tel" placeholder="e.g. +02 245354745" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase">Company name (optional)</label>
                    <input class="form-control form-control-lg" name="company_name" type="text" placeholder="Your company name">
                  </div>
                   <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" >Country</label>
                    <input class="form-control form-control-lg" name="country" type="text" placeholder="your country name" required>
                  </div>
                  <div class="col-lg-12 form-group">
                    <label class="text-small text-uppercase" >Address line 1</label>
                    <input class="form-control form-control-lg"  name="address_line1" type="text" placeholder="House number and street name" required>
                  </div>
                  <div class="col-lg-12 form-group">
                    <label class="text-small text-uppercase">Address line 2</label>
                    <input class="form-control form-control-lg" id="addressalt" name="address_line2" type="text" placeholder="House number and street name (optional)">
                  </div>
                  <div class="col-lg-4 form-group">
                    <label class="text-small text-uppercase" >District</label>
                    <input class="form-control form-control-lg"  name="district" type="text" placeholder="district" required>
                  </div>
                     <div class="col-lg-4 form-group">
                    <label class="text-small text-uppercase" >City</label>
                    <input class="form-control form-control-lg"  name="city" placeholder="city" type="text" required>
                  </div>

                    {{-- <input type="hidden" class="form-control form-control-lg"  name="user_id" value="{{Auth::user()->id}}"> --}}
                 <div class="col-lg-4 form-group">
                    <label class="text-small text-uppercase">ZipCode</label>
                    <input class="form-control form-control-lg"  name="zipCode" placeholder="zipCode" type="text" required>
                  </div>

                  <div class="col-lg-12 form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="alternateAddressCheckbox" type="checkbox">
                      <label class="custom-control-label text-small" for="alternateAddressCheckbox">Alternate billing address</label>
                    </div>
                  </div>

                  <div class="col-lg-12 form-group">
                    <button class="btn btn-success">Place order</button>

                  </div>
                </div>
                 </form>
            </div>
            <!-- ORDER SUMMARY-->


            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Your order</h5>
                  <ul class="list-unstyled mb-0">
                    @php $total=0  @endphp
                    @if(session('cart'))
                    @foreach(session('cart') as $id=>$details)
                     @php $total += $details['price'] * $details['quantity'] @endphp
                    <li class="d-flex align-items-center justify-content-between"><strong class="small font-weight-bold">{{$details['name']}}</strong><span class="text-muted small">{{$details['price']}}</span></li>
                    <li class="border-bottom my-2"></li>

                     @endforeach
                    @endif
                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Total</strong><span>{{$total}}</span></li>

                  </ul>
                </div>
              </div>

            </div>
          </div>
           @else

     <div class="container" style="margin-top: 25px;width: 40%;">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <center>
                    <h4 class="text-danger text-uppercase">You Can not checkout because there is no item in Cart</h4>



                </center>
                  <a href="{{url('/')}}" class="btn btn-warning" style=" margin-top: 6%;margin-left: 27%; margin-bottom: 5%;"> Continue Shopping</a>
            </div>
        </div>
    </div>
</div>
            @endif(session('cart'))
        </section>

      </div>
      </div>
      <footer class="bg-dark text-white">
        <div class="container py-4">
          <div class="row py-5">
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Customer services</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#">Help &amp; Contact Us</a></li>
                <li><a class="footer-link" href="#">Returns &amp; Refunds</a></li>
                <li><a class="footer-link" href="#">Online Stores</a></li>
                <li><a class="footer-link" href="#">Terms &amp; Conditions</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Company</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#">What We Do</a></li>
                <li><a class="footer-link" href="#">Available Services</a></li>
                <li><a class="footer-link" href="#">Latest Posts</a></li>
                <li><a class="footer-link" href="#">FAQs</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h6 class="text-uppercase mb-3">Social media</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#">Twitter</a></li>
                <li><a class="footer-link" href="#">Instagram</a></li>
                <li><a class="footer-link" href="#">Tumblr</a></li>
                <li><a class="footer-link" href="#">Pinterest</a></li>
              </ul>
            </div>
          </div>
          <div class="border-top pt-4" style="border-color: #1d1d1d !important">
            <div class="row">
              <div class="col-lg-6">
                <p class="small text-muted mb-0">&copy; 2020 All rights reserved.</p>
              </div>
              <div class="col-lg-6 text-lg-right">
                <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstraptemple.com/p/bootstrap-ecommerce">Bootstrap Temple</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- JavaScript files-->
      <script src="{{ asset('public/frontend/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{ asset('public/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('public/frontend/vendor/lightbox2/js/lightbox.min.js')}}"></script>
      <script src="{{ asset('public/frontend/vendor/nouislider/nouislider.min.js')}}"></script>
      <script src="{{ asset('public/frontend/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
      <script src="{{ asset('public/frontend/vendor/owl.carousel2/owl.carousel.min.js')}}"></script>
      <script src="{{ asset('public/frontend/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
      <script src="{{ asset('public/frontend/js/front.js')}}"></script>
      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite -
        //   see more here
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');

      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
  </body>
</html>
