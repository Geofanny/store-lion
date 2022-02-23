<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Admin</title>
    <link href="cs/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed" style="background-color:  darkgrey">
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
                    <h1 class="mt-4">
                        <i class="far fa-calendar-alt"></i> History
                        <hr style="border: 3px solid black; margin-bottom: 40px;">
                    </h1>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                             <table class="table text-center table-striped table-succes table-hover table-bordered table-succees table-sm">
                                <thead class="thead-warning">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama User</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Pembayaran</th>
                                        <th scope="col">Jasa Kirim</th>
                                        <th scope="col">Total Harga</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <th>1</th>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                      <td>Cod (Cash On Delivery)</td>
                                      <td>JNE EXPRESS</td>
                                      <td>Rp.57.000</td>
                                      <td>22-02-2022</td>
                                      <td>
                                        <button class="btn btn-danger btn-sm "type="submit">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                  <th>2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                  <td>Cod (Cash On Delivery)</td>
                                  <td>J&T EXPRESS</td>
                                  <td>Rp.57.000</td>
                                  <td>22-02-2022</td>
                                  <td>
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              <th>3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                              <td>Cod (Cash On Delivery)</td>
                              <td>J&T EXPRESS</td>
                              <td>Rp.57.000</td>
                              <td>22-02-2022</td>
                              <td>
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Cod (Cash On Delivery)</td>
                            <td>J&T EXPRESS</td>
                            <td>Rp.57.000</td>
                            <td>22-02-2022</td>
                            <td>
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                          <th>5</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>Cod (Cash On Delivery)</td>
                          <td>J&T EXPRESS</td>
                          <td>Rp.57.000</td>
                          <td>22-02-2022</td>
                          <td>
                            <button class="btn btn-danger btn-sm" type="submit">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                      <th>6</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                      <td>Cod (Cash On Delivery)</td>
                      <td>J&T EXPRESS</td>
                      <td>Rp.57.000</td>
                      <td>22-02-2022</td>
                      <td>
                        <button class="btn btn-danger btn-sm" type="submit">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
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
<script src="js1/scripts.js"></script>
</body>
</html>
