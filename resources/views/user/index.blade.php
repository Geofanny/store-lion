@extends('layouts.app')

@section('content')
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{asset('images')}}/loading.gif" alt="#" /></div>
</div>

<div class="wrapper">

    <!-- end loader -->


    <div class="sidebar">
        <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">

                <li>
                    <div class="atas sb-sidenav-menu-heading" 
                    style="padding-top: 2px;margin-top: -1px;">
                    <img src="{{asset('images')}}/user.png" class="user">
                    <span class="nama">{{ Auth::user()->name }}</span>
                </div>
            </li>
            <li>
                <a class="btnSidebar" href="#utama">
                    <i class="fas fa-home mr-2 fa-sm"></i>Home
                </a>
            </li>
            <li>
                {{--  @foreach($products as $product) --}}
                <a class="btnSidebar" href="/cart">
                    <i class="bi bi-cart4 mr-2 fa-lg"></i>Shopping Trolley
                </a>
                {{--  @endforeach --}}
            </li>
            <li>
                <a class="btnSidebar" href="#brand">
                    <i class="fas fa-tshirt mr-2 fa-sm"></i>Clothing
                </a>
            </li>
            <li>
                <a class="btnSidebar" href="#Electronics">
                    <i class="fas fa-tv mr-2 fa-sm"></i>Electronics
                </a>
            </li>
            <li>
                <a class="btnSidebar" href="#Shoes">
                    <i class="fa-brands fa-buysellads mr-2 fa-sm"></i>Shoes
                </a>
            </li>
            <li>
                <a class="btnSidebar" href="#Watches">
                    <i class="bi bi-watch mr-1 fa-sm"></i> Watches
                </a>
            </li>
            <li>
                <a class="btnSidebar" href="#jewellery">
                    <i class="fa-solid fa-gem mr-2 fa-sm"></i>Jewellery
                </a>
            </li>
            <li>
                <a class="btnSidebar" href="#Health and Beauty">
                    <i class="fa-solid fa-paintbrush mr-2 fa-sm"></i>Health and Beauty
                </a>
            </li> 
            <li>
                <a class="btnSidebar" href="#kids">
                    <i class="fa-solid fa-socks mr-2 fa-sm"></i>Kids and Babies
                </a>
            </li>
            <li>
                <a class="btnSidebar" href="#Sports">
                    <i class="fa-regular fa-futbol mr-2 fa-sm"></i>Sports
                </a>
            </li>
            <li>
                <a href="#Home and Garden">
                    <i class="fa-solid fa-piggy-bank mr-2 fa-sm"></i>Home and Garden
                </a>
            </li>
            <li>
                <a href="/logout" onclick="return confirm('Are you sure to logout?');">
                    <i class="fas fa-sign-out-alt fa-sm"></i> Logout
                </a>
            </li>

        </ul>

    </nav>
</div>

<div id="content">
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head_top" id="utama">
            <div class="header">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-3 logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <div>
                                            <span class="navbar-brand" id="judul">
                                                <i class="fas fa-store mr-2 ml-2"> </i> 
                                                Shopping Shop
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="right_header_info">
                                <ul>
                                    {{-- <li class="menu_iconb">
                                        <img style="margin-right: 15px;" src="{{ asset('img/produk') }}/1.png" alt="#" >+62 87456741236
                                    </li> --}}
                                    <li class="menu_iconb">
                                        <input type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-warning" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </li>

                                    <li class="tytyu">
                                       {{--   @foreach($products as $product) --}}
                                       <a href="/data_history" title="Cart History">
                                        {{--  @endforeach  --}}
                                        {{-- <img style="margin-right: 15px;" 
                                        src="{{ asset('img/produk') }}/2.png" 
                                        alt="#" > --}}
                                        <i class="bi bi-calendar2-check fa-2xl"></i>
                                    </a>
                                </li>

                                <li class="tytyu">
                                   {{--   @foreach($products as $product) --}}
                                   <a href="/cart" title="Shooping Trolley">
                                    {{--  @endforeach  --}}
                                        {{-- <img style="margin-right: 15px;" 
                                        src="{{ asset('img/produk') }}/2.png" 
                                        alt="#" > --}}
                                        <i class="bi bi-cart4 fa-2xl"></i>
                                    </a>
                                </li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="{{asset('images')}}/menu_icon.png" alt="#" />
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end header inner -->

        <!-- end header -->
        <section class="slider_section">
            <div class="banner_main">
                <div class="container-fluid padding3">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mapimg">
                            <div class="text-bg">
                                <h1>All <br>
                                    In<br>
                                    One <br>
                                Shop</h1>
                                <span>" Want to improve your appearance ? shop in our shop "</span>
                                <a href="#Categories">Buy now</a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="container">
                                            <div class="carousel-caption text">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="img_bg">
                                                            <figure><img src="{{asset('img/produk')}}/jas.png" style="width:66vh;">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="container">
                                            <div class="carousel-caption text">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="img_bg">
                                                            <figure>
                                                                <img src="{{asset('img/produk')}}/vans.png" style="width: 66vh;">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="container">
                                            <div class="carousel-caption text">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="img_bg">
                                                            <figure><img src="{{asset('img/produk')}}/xc.png" style="width: 66vh;">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</header>

<!-- Categories -->
<div class="Categories" >
    <div class="container">
        <div class="row">
            <div class="col-md-12"id="Categories">
                <div class="title">
                    <h2> Categories</h2>
                    <ul class="categiri">
                        <li class="active"><a href="#Categories">All</a></li>
                        <li>
                            <a href="#brand">
                                <i class="fas fa-tshirt mr-2"></i>Clothing
                            </a>
                        </li>
                        <li>
                            <a href="#Electronics">
                                <i class="fas fa-tv mr-2"></i>Electronics
                            </a>
                        </li>
                        <li>
                            <a href="#Shoes">
                             <i class="fa-brands fa-buysellads mr-2 fa-xl"></i>Shoes
                         </a>
                     </li>
                     <li>
                        <a href="#Watches">
                            <i class="bi bi-watch mr-2 fa-xl"></i>Watches
                        </a>
                    </li>
                    <li>
                        <a href="#jewellery">
                           <i class="fa-solid fa-gem mr-2 fa-xl"></i>Jewellery
                       </a>
                   </li>
                   <li>
                    <a href="#Health and Beauty">
                        <i class="fa-solid fa-paintbrush mr-2 fa-xl"></i>Health and Beauty
                    </a>
                </li>
                <li>
                    <a href="#kids">
                        <i class="fa-solid fa-socks mr-2 fa-xl"></i>Kids and Babies
                    </a>
                </li>
                <li style="margin-top: 10px; margin-left: 30px">
                    <a href="#Sports">
                        <i class="fa-regular fa-futbol mr-2 fa-xl"></i>Sports
                    </a>
                </li>
                <li>
                    <a href="#Home and Garden">
                        <i class="fa-solid fa-piggy-bank mr-2
                        fa-xl"></i>Home and Garden
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- news brand -->
<div id="brand"  class="brand-bg">
    <h3><i class="fas fa-tshirt mr-2 fa-xl"></i>Clothing</h3>
    <div class="row">
        @foreach($products as $product)
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
            <div class="brand-box">
                <h5>Sale</h5>
                <i><img src="{{ asset('img/produk/'.$product->gambar) }}" width="150">
                </i>
                <h4>
                    {{ $product->nama_produk }}
                </h4>
                <br>
                <span class="nolmal" style="color: red">
                    Rp.{{ number_format($product->harga, 0, '', '.') }}
                </span>
            </div>
            <a class="buynow" href="{{url('/cart/tambah/'.$product->id)}}">Buy now</a>
        </div>
        @endforeach
        <a class="seemore" href="/more-products/{{ $products[0]->id_kategori }}">See more</a>
    </div>
</div>
</div>
<!-- end news brand -->


<!-- Nrws Electronics  -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="Electronics" class="Jewellery-bg">
                <h3><i class="fas fa-tv mr-2 fa-xl"></i>Electronics</h3>
                <div class="row">
                    @foreach($elektronik as $elek)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                        <div class="Jewellery-box">
                            <h5>Sale</h5>
                            <i><img src="{{ asset('img/produk/'.$elek->gambar) }}"/>
                            </i>
                            <h4>
                                {{ $elek->nama_produk }}
                            </h4>
                            <br>
                            <span class="nolmal" style="color: red">Rp.{{ number_format($elek->harga, 0, '', '.') }}</span>
                        </div>
                        <a class="buynow" 
                        href="{{url('/cart/tambah/'.$elek->id)}}">
                        Buy now
                    </a>
                </div>
                @endforeach
            </div>
            <a class="seemore" href="/more-products/{{ $elektronik[0]->id_kategori }}">See more</a>
        </div>

    </div>
</div>
</div>
<!-- end news Electronic -->


<!-- Nrws Shoes  -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="Shoes" class="Jewellery-bg">
                <h3>{{-- <img src="{{asset('images')}}/shoes.png" width="50"> --}}
                    <i class="fa-brands fa-buysellads mr-2 fa-xl"></i>
                Shoes</h3>
                <div class="row">
                    @foreach($shoes as $sepatu)
                    <div class="col-xl-3 col-lg-3 
                    col-md-6 col-sm-12 margintop">
                    <div class="Jewellery-box">
                        <h5>Sale</h5>
                        <i><img src="
                            {{ asset('img/produk/'.$sepatu->gambar) }}">
                        </i>
                        <h4>
                            {{ $sepatu->nama_produk }} 
                        </h4>
                        <br>
                        <span class="nolmal" style="color: red">
                            Rp.{{ number_format($sepatu->harga, 0, '', '.') }}
                        </span>
                    </div>
                    <a class="buynow" 
                    href="{{url('/cart/tambah/'.$sepatu->id)}}">
                    Buy now
                </a>
            </div>
            @endforeach
        </div>
        <a class="seemore" href="/more-products/{{ $shoes[0]->id_kategori }}">See more</a>
    </div>

</div>
</div>
</div>
</div>
<!-- end news Shoes -->

<!-- Nrws Watches  -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="Watches" class="Jewellery-bg">
                <h3>{{-- <img src="{{asset('images')}}/jam.png" width="50">  --}}
                    <i class="bi bi-watch mr-2 fa-xl"></i>Watches
                </h3>
                <div class="row">
                    @foreach($watches as $jam)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                        <div class="Jewellery-box">
                            <h5>Sale</h5>
                            <i><img src="
                                {{ asset('img/produk/'.$jam->gambar) }}" width="180">
                            </i>
                            <h4>
                             {{ $jam->nama_produk }}  
                         </h4>
                         <br>
                         <span class="nolmal" style="color: red">
                            Rp.{{ number_format($jam->harga, 0, '', '.') }}
                        </span>
                    </div>
                    <a class="buynow" 
                    href="{{url('/cart/tambah/'.$jam->id)}}">
                    Buy now
                </a>
            </div>
            @endforeach
        </div> 
        <a class="seemore" href="/more-products/{{ $watches[0]->id_kategori }}">See more</a>  
    </div>

</div>    
</div>
</div>
</div>
<!-- end news Watches -->

<!--  save -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="save">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="save_box">
                                <h3>save up to 50%</h3>
                                <a href="#">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end save -->
</section>

<!-- news Jewellery -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="jewellery" class="Jewellery-bg">
                <h3>{{-- <img src="{{asset('images')}}/cincin.png" width="50">  --}}
                    <i class="fa-solid fa-gem mr-2 fa-xl"></i>Jewellery</h3>
                    <div class="row">
                        @foreach($jewellery as $cin)
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="Jewellery-box">
                                <h5>Sale</h5>
                                <i>
                                    <img src="
                                    {{ asset('img/produk/'.$cin->gambar) }}">
                                </i>
                                <h4>
                                    {{ $cin->nama_produk }}
                                </h4>
                                <br>
                                <span class="nolmal" style="color: red">
                                    Rp.{{ number_format($cin->harga, 0, '', '.') }}
                                </span>
                            </div>
                            <a class="buynow" 
                            href="{{url('/cart/tambah/'.$cin->id)}}">
                            Buy now
                        </a>
                    </div>
                    @endforeach
                </div>
                <a class="seemore" href="/more-products/{{ $jewellery[0]->id_kategori }}">See more</a>
            </div>

        </div>      
    </div>
</div>
</div>

<!-- Nrws Health and Beauty -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
         <div id="Health and Beauty" class="Jewellery-bg">
            <h3>{{-- <img src="{{asset('images')}}/makeup.png" width="50"> --}} <i class="fa-solid fa-paintbrush mr-2 fa-xl"></i>Health and Beauty</h3>
            <div class="row">
                @foreach($makeup as $make_up)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                    <div class="Jewellery-box">
                        <h5>Sale</h5>
                        <i><img src="{{ asset('img/produk/'.$make_up->gambar) }}">
                        </i>
                        <h4>
                            {{ $make_up->nama_produk }}
                        </h4>
                        <br>
                        <span class="nolmal" style="color: red">
                            Rp.{{ number_format($make_up->harga, 0, '', '.') }}
                        </span>
                    </div>
                    <a class="buynow" 
                    href="{{url('/cart/tambah/'.$make_up->id)}}">
                    Buy now
                </a>
            </div>
            @endforeach
        </div>
        <a class="seemore" href="/more-products/{{ $makeup[0]->id_kategori }}">See more</a>
    </div>
</div>
</div>
</div>
</div>
<!-- end news Health and Beauty-->


<!-- Nrws Sports -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="Sports" class="Jewellery-bg">
                <h3>{{-- <img src="{{asset('images')}}/sport.png" width="50">  --}}<i class="fa-regular fa-futbol mr-2 fa-xl">
                </i>
            Sports</h3>
            <div class="row">
                @foreach($sports as $sport)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                    <div class="Jewellery-box">
                        <h5>Sale</h5>
                        <i>
                            <img src="{{ asset('img/produk/'.$sport->gambar) }}" width="200">
                        </i>
                        <h4>
                            {{ $sport->nama_produk }}
                        </h4>
                        <br>
                        <span class="nolmal" style="color: red">
                            Rp.{{ number_format($sport->harga, 0, '', '.') }}
                        </span>
                    </div>
                    <a class="buynow" 
                    href="{{url('/cart/tambah/'.$sport->id)}}">
                    Buy now
                </a>
            </div>
            @endforeach
        </div>
        <a class="seemore" href="/more-products/{{ $sports[0]->id_kategori }}">See more</a>
    </div>
</div>
</div>
</div>
</div>
<!-- end news Health and Beauty-->

<!-- Nrws Home and Garden -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="Home and Garden" class="Jewellery-bg">
                <h3>{{-- <img src="{{asset('images')}}/garden.png" width="50"> --}}<i class="fa-solid fa-piggy-bank mr-2 fa-xl"></i> 
                Home and Garden</h3>
                <div class="row">
                    @foreach($home as $garden)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                        <div class="Jewellery-box">
                            <h5>Sale</h5>
                            <i>
                                <img src="{{ asset('img/produk/'.$garden->gambar) }}">
                            </i>
                            <h4>
                                {{ $garden->nama_produk }}
                            </h4>
                            <br>
                            <span class="nolmal" style="color: red">
                                Rp.{{ number_format($garden->harga, 0, '', '.') }}
                            </span>
                        </div>
                        <a class="buynow" 
                        href="{{url('/cart/tambah/'.$garden->id)}}">
                        Buy now
                    </a>
                </div>
                @endforeach
            </div>
            <a class="seemore" href="/more-products/{{ $home[0]->id_kategori }}">See more</a>
        </div>
    </div>
</div>
</div>
</div>
<!-- end news Health and Beauty-->

<!-- news Kids -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="kids" class="Jewellery-bg">
                <h3>{{-- <img src="{{asset('images')}}/bby.png" width="60"> --}} <i class="fa-solid fa-socks mr-2 fa-xl"></i>Kids and Babies</h3>
                <div class="row">
                    @foreach($kids as $anak)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                        <div class="Jewellery-box">
                            <h5>Sale</h5>
                            <i>
                                <img src="{{ asset('img/produk/'.$anak->gambar) }}">
                            </i>
                            <h4>
                                {{ $anak->nama_produk }}
                            </h4>
                            <br>
                            <span class="nolmal" style="color: red">
                                Rp.{{ number_format($anak->harga, 0, '', '.') }}
                            </span>
                        </div>
                        <a class="buynow" 
                        href="{{url('/cart/tambah/'.$anak->id)}}">
                        Buy now
                    </a>
                </div>
                @endforeach
            </div>
            <a class="seemore" href="/more-products/{{ $kids[0]->id_kategori }}">See more</a>
        </div>
    </div>
</div>
</div>
</div>
<!-- end news Kids -->

<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer_top">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <span class="navbar-brand" id="judul">
                                    <i class="fas fa-store mr-2 ml-2"></i> Shopping Shop
                                </span>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <ul class="sociel">
                                    <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                            <div class="address">
                                <h3>Contact us </h3>
                                <ul class="loca">
                                    <li>
                                        <a href="#"><img src="{{ asset('img/produk') }}/loc.png" alt="#" /></a>062 Indonesian
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('img/produk') }}/call.png" alt="#" /></a>+62 87456741236 </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('img/produk') }}/email.png" alt="#" /></a>Shooping@gmail.com </li>

                                        </ul>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="address">
                                        <h3>customer service</h3>
                                        <ul class="Menu_footer">
                                            <li class="active"> <a href="#">My account</a> </li>
                                            <li><a href="#">Wishlist</a> </li>
                                            <li><a href="#">My Cart</a> </li>
                                            <li><a href="#">Checkout</a> </li>
                                            <li><a href="#">Login</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="address">
                                        <h3>corporation</h3>
                                        <ul class="Links_footer">
                                            <li class="active"><a href="#">My account</a> </li>
                                            <li><a href="#">Wishlist</a> </li>
                                            <li><a href="#">My Cart</a> </li>
                                            <li><a href="#"> Checkout</a> </li>
                                            <li><a href="#">Login</a> </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 ">
                                    <div class="address">
                                        <h3>why choose us</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                                        <form class="newtetter">
                                            <input class="tetter" placeholder="Your email" type="text" name="Your email">
                                            <button class="submit">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyright"style="background-color: #ec3e0f;"> 
                    <div class="container">
                        <p style="color: white">Shooping Shop #shopping@gmail.com
                        </p>
                    </div>
                </div>
            </div>

        </footer>
        <!-- end footer -->


    </div>

    <div class="overlay"></div>
    @endsection