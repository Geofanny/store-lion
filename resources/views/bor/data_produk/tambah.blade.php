<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<link rel="icon" href="{{asset('images')}}/q.png" type="icon/x-image">
	<title>Dashboard Admin</title>
	<link href="{{asset('cs')}}/styles.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body style="background-color:  lightgrey" class="sb-nav-fixed">
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
			<!-- {{-- <div class="sb-sidenav-footer">
				<div class="small">Logged in as:</div>
				Start Bootstrap
			</div> --}} -->
		</nav>
	</div>
	<div id="layoutSidenav_content">
		<main>
			<div class="container-fluid px-4">
				<h1 class="mt-4"><i class="fa-solid fa-cart-plus"></i> 
				Tambah Produk</h1>
				<hr style="border: 3px solid black; margin-bottom: 40px;">
				<div class="card mb-4 p-3 bg-light text-black">
					<div class="card-body">
						<form method="POST" enctype="multipart/form-data" 
						action="{{ route('produk.store') }}">
						<div class="form-group mb-3">
							<label for="name" style="margin-bottom: 1vh">
								Nama Produk :
							</label>
							<input type="text" class="form-control" 
							name="nama_produk">
						</div>
						<div class="form-grou mb-3">
							<label for="gambar" style="margin-bottom: 1vh">
								Produk
							</label>
							<br>
							<img src="#" id="blah" width="20vh"
							style="width: 20vh; border: 2px solid black; margin-bottom: 2vh; margin-top: 1vh">
							<input type="file" class="form-control" 
							id="gambar" name="gambar">
						</div>
						<div class="form-group mb-3">
							<label for="kategori" style="margin-bottom: 1vh">
								Kategori
							</label>
							<br>
							<select class="form-control" aria-label="Default select example" style="width: " name="kategori">
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
						<div class="form-group mb-3">
							<label for="salary" style="margin-bottom: 1vh">
								Harga :
							</label>
							<input type="number" class="form-control" 
							name="harga">

						</div>
						<div class="form-group">
							@csrf
							<input type="submit" name="update" class="btn btn-primary" style="float:right;"
							value="Simpan">
							<a href="/produk" class="btn btn-danger" style="float:left;">
								<span>Kembali</span>
							</a>
						</div>
					</form>
				</div>
			</div>
				<!-- {{-- <div style="height: 100vh"></div>
				<div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
			</div> --}} -->
		</main>
		<!-- {{-- <footer class="py-4 bg-light mt-auto">
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
		</footer> --}} -->
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js1')}}/scripts.js"></script>
<script>
	gambar.onchange = evt => {
		const [file] = gambar.files
		if (file) {
			blah.src = URL.createObjectURL(file)
		}
	}
</script>
</body>
</html>
