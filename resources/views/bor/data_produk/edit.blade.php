{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<title>Shooping Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="icon" type="image/x-icon" href="{{asset('images')}}/q.png">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body style="background: grey">
	<!-- <div class="card text-center" style="padding:15px;">
		<h4>PHP MySql OOP CRUD Example Tutorial</h4>
	</div><br> -->
	<div class="container" style="margin-top: 20vh">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card">
					<div class="card-header" style="background-color: orange">
						<h4 class="text-white text-center">Edit Produk</h4>
					</div>
					<div class="card-body bg-light">
						<form action="" method="POST">
							@csrf
							<div class="form-group">
								<label for="name">Name :</label>
								<input type="text" class="form-control" name="uname">
							</div>
							<div class="form-group">
								<label for="gambar">Produk</label>
								<input type="file" class="form-control-file" 
								id="gambar">
							</div>
							<div class="form-group">
								<label for="kategori">Kategori</label>
								<br>
								<select class="form-control" aria-label="Default select example" style="width: 20vh">
									<option selected>---</option>
									<option value="1">Clothing</option>
									<option value="2">Elektronik</option>
									<option value="3">Shoes</option>
									<option value="4">Watches</option>
									<option value="5">Jewellery</option>
									<option value="6">Health And Beauty</option>
									<option value="7">Kids And Babies</option>
									<option value="8">Sports</option>
									<option value="9">Home And Garden</option>
								</select>
							</div>
							<div class="form-group">
								<label for="salary">Harga :</label>
								<input type="number" class="form-control" name="usalary">

							</div>
							<div class="form-group">
								<input type="submit" name="update" class="btn btn-primary" style="float:right;"
								value="Simpan">
								<a href="/produk" class="btn btn-danger" style="float:left;">
									<span>Kembali</span>
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Dashboard Admin</title>
	<link href="{{asset('cs')}}/styles.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body style="background-color:  darkgrey" class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<!-- Navbar Brand-->
		<span class="navbar-brand ps-3"><i class="fas fa-store"></i> Shooping Shop</span>
		<!-- Sidebar Toggle-->
		<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
		<!-- Navbar Search-->
		<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
			<div class="input-group">
				<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
				<button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
			</div>
		</form>
		<!-- Navbar-->
		<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
				<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#!">Settings</a></li>
					<li><a class="dropdown-item" href="#!">Activity Log</a></li>
					<li><hr class="dropdown-divider" /></li>
					<li><a class="dropdown-item" href="/logout">Logout</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<div class="atas sb-sidenav-menu-heading" 
						style="padding-top: 9px;margin-top: -1px;">
						<img src="{{asset('images')}}/user.png" class="user">
						<span class="nama">{{ Auth::user()->name }}</span>
					</div>
					<div class="sb-sidenav-menu-heading">Core</div>
					<a class="nav-link" href="/bor">
						<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
						Dashboard
					</a>
					<div class="sb-sidenav-menu-heading">Interface</div>
					<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
						Order List
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="/order">Order Masuk</a>
							<a class="nav-link" href="/his">History</a>
						</nav>
					</div>
					<a class="nav-link collapsed" href="/produk">
						<div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
						Product
					</a>
					<div class="sb-sidenav-menu-heading">Addons</div>
					<a class="nav-link" href="/user">
						<div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
						User
					</a>
					<a class="nav-link" href="/lapor">
						<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
						Pages
					</a>
				</div>
			</div>
                {{-- <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div> --}}
            </nav>
        </div>
        <div id="layoutSidenav_content">
        	<main>
        		<div class="container-fluid px-4">
        			<h1 class="mt-4"><i class="fa-solid fa-pen-to-square"></i> 
        			Edit Produk</h1>
        			<hr style="border: 3px solid black; margin-bottom: 40px;">
        			<div class="card mb-4 p-3 bg-light">
        				<div class="card-body">
        					
        					<form method="POST" action="{{ route('produk.update', $produk->id) }}" enctype="multipart/form-data" >
        						@method('patch')
        						@csrf	
        						<div class="form-group mb-3">
        							<label for="name" style="margin-bottom: 1vh">
        								Nama Produk :
        							</label>
        							<input type="text" class="form-control" 
        							name="nama" value="{{$produk->nama_produk}}">
        						</div>
        						<div class="form-grou mb-3">
        							<label for="gambar" style="margin-bottom: 1vh">
        								Produk
        							</label>
        							<br>
        							<img src="{{asset('img/produk/'
        							.$produk->gambar)}}" style="width: 20vh; border: 2px solid black; margin-bottom: 2vh; margin-top: 1vh">
        							<input type="file" class="form-control" 
        							id="gambar" name="gambar">
        						</div>
        						<div class="form-group mb-3">
        							<label for="kategori" style="margin-bottom: 1vh">
        								Kategori
        							</label>
        							<br>
        							<select class="form-control" aria-label="Default select example" style="width: " name="kategori"
        							required="required">
        							<option value="1" {{ $produk->id_kategori == '1' ? 'selected' : '' }}>
        								Clothing
        							</option>
        							<option value="2" {{ $produk->id_kategori == '2' ? 'selected' : '' }}>
        								Elektronik
        							</option>
        							<option value="3" {{ $produk->id_kategori == '3' ? 'selected' : '' }}>
        								Shoes
        							</option>
        							<option value="4" {{ $produk->id_kategori == '4' ? 'selected' : '' }}>
        								Watches
        							</option>
        							<option value="5" {{ $produk->id_kategori == '5' ? 'selected' : '' }}>
        								Jewellery
        							</option>
        							<option value="6" {{ $produk->id_kategori == '6' ? 'selected' : '' }}>
        								Health And Beauty
        							</option>
        							<option value="7" {{ $produk->id_kategori == '7' ? 'selected' : '' }}>
        								Kids And Babies
        							</option>
        							<option value="8" {{ $produk->id_kategori == '8' ? 'selected' : '' }}>
        								Sports
        							</option>
        							<option value="9" {{ $produk->id_kategori == '9' ? 'selected' : '' }}>
        								Home And Garden
        							</option>
        						</select>
        					</div>
        					<div class="form-group mb-3">
        						<label for="salary" style="margin-bottom: 1vh">
        							Harga :
        						</label>
        						<input type="number" class="form-control" name="harga"
        						value="{{$produk->harga}}">

        					</div>
        					<div class="form-group">
        						<input type="submit" name="update" class="btn btn-primary" style="float:right;"
        						value="Simpan">
        						<a href="/produk" class="btn btn-danger" style="float:left;">
        							<span>Kembali</span>
        						</a>
        					</div>
        				</form>
        			</div>
        		</div>
        			{{-- <div style="height: 100vh"></div>
        			<div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
        		</div> --}}
        	</main>
        	{{-- <footer class="py-4 bg-light mt-auto">
        		<div class="container-fluid px-4">
        			<div class="d-flex align-items-center justify-content-between small">
        				<div class="text-muted">Copyright &copy; Your Website 2021</div>
        				<div>
        					<a href="#">Privacy Policy</a>
        					&middot;
        					<a href="#">Terms &amp; Conditions</a>
        				</div>
        			</div>
        		</div>
        	</footer> --}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('js1')}}/scripts.js"></script>
</body>
</html>
