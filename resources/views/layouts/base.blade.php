<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>House Repair Service - Online Service Provider for your House Needs</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/chblue.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/theme-responsive.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/dtb/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" media="screen">
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.1.10.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr.js') }}"></script>

    <style>
        .whatsapp-chat{
            bottom: 10px;
            left: 10px;
            position: fixed;
            z-index: 99;
        }
    </style>
    @livewireStyles
</head>
<body>
    <div id="layout">
        <div class="info-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-left">
                            <li><a href="tel:+96176901868"><i class="fa fa-phone"></i> +961-123456</a></li>
                            <li><a href="mailto:ashehade9.as@gmail.com"><i class="fa fa-envelope"></i>
                                    info@houserepairservice.com.lb</a></li>
                        </ul>
                        <ul class="visible-xs visible-sm">
                            <li class="text-left"><a href="tel:+911234567890"><i class="fa fa-phone"></i>
                                +961-123456</a></li>
                            <li class="text-right"><a href="index.php/changelocation.html"><i
                                        class="fa fa-map-marker"></i> Beirut, Lebanon</a></li>
                        </ul>
                    </div>
                   @livewire('location-component')
                </div>
            </div>
        </div>
        <header id="header" class="header-v3">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <li class="title">
                        <a href="/"><img src="{{ asset('images/logo.jpg') }}" height="60" title="Home"></a>
                    </li>

                    <li> <a href="{{ route('home.service_categories') }}">Service Categories</a></li>



                 <li> <a href="#appliance">Appliances</a>

                {{--         <ul class="drop-down one-column hover-fade">
                            <li><a href="#">Computer Repair</a></li>
                            <li><a href="servicesbycategory/12.html">TV</a></li>
                            <li><a href="servicesbycategory/1.html">AC</a></li>
                            <li><a href="servicesbycategory/14.html">Geyser</a></li>
                            <li><a href="servicesbycategory/21.html">Washing Machine</a></li>
                            <li><a href="servicesbycategory/22.html">Microwave Oven</a></li>
                            <li><a href="servicesbycategory/9.html">Chimney and Hob</a></li>
                            <li><a href="servicesbycategory/10.html">Water Purifier</a></li>
                            <li><a href="servicesbycategory/13.html">Refrigerator</a></li>

                        </ul> --}}


                    </li>
                    <li> <a href="#choices">Services Choices</a>
                      {{--   <ul class="drop-down one-column hover-fade">
                            <li><a href="servicesbycategory/19.html">Laundry</a></li>
                            <li><a href="servicesbycategory/4.html">Electrical</a></li>
                            <li><a href="servicesbycategory/8.html">Pest Control</a></li>
                            <li><a href="servicesbycategory/7.html">Carpentry</a></li>
                            <li><a href="servicesbycategory/3.html">Plumbing </a></li>
                            <li><a href="servicesbycategory/20.html">Painting</a></li>
                            <li><a href="servicesbycategory/17.html">Movers &amp; Packers</a></li>
                            <li><a href="servicesbycategory/5.html">Shower Filters </a></li>
                        </ul> --}}
                    </li>
                 {{--    <li> <a href="#">Home Cleaning</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="service-details/bedroom-deep-cleaning.html">Bedroom Deep Cleaning</a></li>
                            <li><a href="service-details/overhead-water-storage.html">Overhead Water Storage </a></li>
                            <li><a href="/service-details/tank-cleaning">Tank Cleaning</a></li>
                            <li><a href="service-details/underground-sump-cleaning.html">Underground Sump Cleaning</a>
                            </li>
                            <li><a href="service-details/dining-chair-shampooing.html">Dining Chair Shampooing </a></li>
                            <li><a href="service-details/office-chair-shampooing.html">Office Chair Shampooing</a></li>
                            <li><a href="service-details/home-deep-cleaning.html">Home Deep Cleaning </a></li>
                            <li><a href="service-details/carpet-shampooing.html">Carpet Shampooing </a></li>
                            <li><a href="service-details/fabric-sofa-shampooing.html">Fabric Sofa Shampooing</a></li>
                            <li><a href="service-details/bathroom-deep-cleaning.html">Bathroom Deep Cleaning</a></li>
                            <li><a href="service-details/floor-scrubbing-polishing.html">Floor Scrubbing &amp; Polishing
                                </a></li>
                            <li><a href="service-details/mattress-shampooing.html">Mattress Shampooing </a></li>
                            <li><a href="service-details/kitchen-deep-cleaning.html">Kitchen Deep Cleaning </a></li>
                        </ul>
                    </li> --}}
                    <li> <a href="#special-service">Special Services</a>
                    {{--     <ul class="drop-down one-column hover-fade">
                            <li><a href="servicesbycategory/16.html">Document Services</a></li>
                            <li><a href="servicesbycategory/15.html">Cars &amp; Bikes</a></li>
                            <li><a href="servicesbycategory/17.html">Movers &amp; Packers </a></li>
                            <li><a href="servicesbycategory/18.html">Home Automation</a></li>
                        </ul> --}}
                    </li>
                    @if (Route::has('login'))

                    @auth

                    @if (Auth::user()->utype === 'ADM') {{-- Admin --}}
                    <li class="login-form"> <a href="#" title="Register">My Account (Admin)</a>

                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('admin.service_categories') }}">Service Categories</a></li>
                            <li><a href="{{ route('admin.all_services') }}">All Services</a></li>
                            <li><a href="{{ route('admin.slider') }}">Manage Slider</a></li>
                            <li><a href="{{ route('admin.contacts') }}">All Contacts</a></li>
                            <li><a href="{{ route('admin.service_providers') }}">All Service Providers</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                        </ul>
                    </li>
                        @elseif (Auth::user()->utype === 'SVP') {{-- Service provider --}}
                        <li class="login-form"> <a href="#" title="Register">My Account (Service Provider)</a>

                            <ul class="drop-down one-column hover-fade">
                                <li><a href="{{ route('sprovider.dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('sprovider.profile') }}">Profile</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                        </li>

                        @else
                        <li class="login-form"> <a href="#" title="Register">My Account (Customer)</a>

                            <ul class="drop-down one-column hover-fade">
                                <li><a href="{{ route('customer.dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                        </li>
                        @endif
                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                        @csrf


                        </form>
                        @else
                        <li class="login-form"> <a href="{{ route('register') }}" title="Register">Register</a></li>
                        <li class="login-form"> <a href="{{ route('login') }}" title="Login">Login</a></li>

                    @endif

                    @endif

                    <li class="search-bar">
                    </li>
                </ul>
            </nav>
        </header>
       {{ $slot }}
        <footer id="footer" class="footer-v1">
            <div class="container">
                <div class="row visible-md visible-lg">
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>APPLIANCE SERVICES </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/12.html">TV</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/14.html">Geyser</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/13.html">Refrigerator</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/21.html">Washing Machine</a>
                            </li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/22.html">Microwave Oven</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/10.html">Water Purifier</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>AC SERVICES </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a
                                    href="service-details/ac-installation.html">Installation</a></li>
                            <li><i class="fa fa-check"></i> <a
                                    href="service-details/ac-uninstallation.html">Uninstallation</a></li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-repair.html">AC Repair</a></li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-gas-refill.html">Gas Refill</a>
                            </li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-wet-servicing.html">Wet
                                    Servicing</a></li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-dry-servicing.html">Dry
                                    Servicing </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>HOME NEEDS </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/19.html">Laundry </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/4.html">Electrical</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/8.html">Pest Control </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/7.html">Carpentry </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/3.html">Plumbing </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/20.html">Painting </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>CONTACT US</h3>
                        <ul class="contact_footer">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> Beirut, Downtown, Lebanon</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:contact@surfsidemedia.in">info@houserepairservice.com.lb</a>
                            </li>
                            <li>
                                <i class="fa fa-headphones"></i> <a href="tel:+911234567890">+961-123456</a>
                            </li>
                        </ul>
                        <h3 style="margin-top: 10px">FOLLOW US</h3>
                        <ul class="social">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row visible-sm visible-xs">
                    <div class="col-md-6">
                        <h3 class="mlist-h">CONTACT US</h3>
                        <ul class="contact_footer mlist">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> Beirut, Downtown, Lebanon</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:contact@surfsidemedia.in">info@houserepairservice.com.lb</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> <a href="tel:+911234567890">+961-123456</a>
                            </li>
                        </ul>
                        <ul class="social mlist-h">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="whatsapp-chat" >
                            <a href="https://wa.me/+96176901868?text=I'm%20interested%20in%20your%20services%20you%20provide" target="_blank">
                                <img src="{{ asset('assets/img/wa.png') }}" alt="whatsapp-chat"
                                height="70px" width="70px">
                            </a>
                        </div>



                        <div class="col-md-6">
                            <ul class="nav-footer">
                                <li><a href="{{ route('home.about') }}" title="About Us">About Us</a> </li>
                                @if (Route::has('login'))

                                @auth
                                @if (Auth::user()->utype === 'ADM') {{-- Admin --}}
                                <li style="display: none"><a href="{{ route('home.contact') }}" hidden title="Contact Us">Contact Us</a></li>

                                @else
                                <li><a href="{{ route('home.contact') }}" title="Contact Us">Contact Us</a></li>
                                @endif
                                @endauth

                                @endif

                                <li><a href="{{  route('home.faq') }}" title="FAQ">FAQ</a></li>
                                <li><a href="{{ route('home.terms_of_use') }}" title="Terms of Use">Terms of Use</a></li>
                                <li><a href="{{ route('home.privacy') }}" title="Privacy">Privacy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="text-xs-center crtext">&copy; 2023 House-Repair-Service. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
              <!--Start of Tawk.to Script-->
           <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/63d39393c2f1ac1e202fdf87/1gnp7gu5m';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
            <!--End of Tawk.to Script-->

    <script type="text/javascript" src="{{ asset('assets/js/totop/jquery.ui.totop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/nav/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/accordion/accordion.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/maps/gmap3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/carousel/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/filters/jquery.isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/twitter/jquery') }}.tweet.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flickr/jflickrfeed.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/theme-options/theme-options.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/theme-options/jquery.cookies.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtb/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtb/jquery.table2excel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtb/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/validation-rule.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap3-typeahead.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 5000,
                startwidth: 1170,
                startheight: 480,
                minHeight: 250,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview1"
            });
        });

        $(document).ready(function() {
  // Add smooth scrolling to all inner links
  $("a[href^='#']").on('click', function(event) {
    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});

    </script>
    @stack('scripts')
    @livewireScripts
</body>
</html>
