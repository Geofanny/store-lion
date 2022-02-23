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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: darkgrey" class="sb-nav-fixed">

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
                <h1 class="mt-4"><i class="fas fa-calendar-alt"></i> Data Produk</h1>
                <hr style="border: 3px solid black; margin-bottom: 40px;">
                <div class="mb-4">
                    <div class="card-body bg-light">
                        <div class="table-responsive">
                           {{--  <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    DataTable Example
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama Barang</th>
                                                <th class="text-center">Harga</th>
                                                <th colspan="3" class="text-center">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($produk as $data_produk)
                                            <tr class="text-center">
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$data_produk->nama_produk}}</td>
                                                <td>{{$data_produk->harga}}</td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm" type="submit" data-bs-toggle="modal" data-bs-target="#editModal">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" data-id="{{ $data_produk->id }}" class="btn btn-danger btn-sm" id="btn-delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary 
                                                    btn-sm" type="submit">
                                                    <i class="fas fa-paper-plane"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                <div style="float: right;">
                                    {{$produk->links()}}
                                </div>
                    </div>
                </div> --}}
                <table class="table text-center table-striped table-hover table-bordered table-white table-sm">
                    <div style="margin-bottom: 3vh; margin-top: 1vh">
                        
                        <form action="/cari" method="GET">
                            <a href="{{route('produk.create')}}" class="btn btn-success mb-3">
                                <i class="fa-solid fa-cart-plus"></i>
                                <span>Tambah Produk</span>
                            </a><br>
                            <button class="btn btn-warning " type="submit"
                            style="width: 70px; float: right;" value="CARI">
                            Search
                        </button>
                        <input class="form-control mb-4" type="search" placeholder="Search" aria-label="Search"
                        style="width: 250px; float: right;" name="cari"
                        value="{{ old('cari') }}">
                    </form>
                </div>
                <thead class="thead-warning bg-dark" style="color:lightgrey">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col" colspan="2">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produk as $data_produk)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$data_produk->nama_produk}}</td>
                        <td>{{$data_produk->nama_kategori}}</td>
                        <td>{{$data_produk->harga}}</td>
                        <td>
                            <button class="btn btn-primary btn-sm" {{-- id="btn-edit" --}}{{-- data-id="{{ $data_produk->id }}" --}}>
                                <a href="{{route('produk.edit', $data_produk->id)}}" class="text-white">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </button>
                        </td>
                        <td>
                            <a href="javascript:void(0)" data-id="{{ $data_produk->id }}" class="btn btn-danger btn-sm" id="btn-delete">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                       {{--  <td>
                            <button class="btn btn-primary 
                            btn-sm" type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="float: right;">
            {{$produk->links()}}
        </div>
    </div>
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
@include('sweetalert::alert')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js1/scripts.js"></script>
<script src="js1/datatables-simple-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).on("click", "#btn-delete", function() {
        var id = $(this).data("id")
            // alert(id)
            Swal.fire({
                title: 'Hapus Produk ?',
                text: "Yakin Menghapus Produk Ini",
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {
                // Swal.fire(
                //   'Deleted!',
                //   'Your file has been deleted.',
                //   'success'
                //   )
                var url = "{{ route('produk.destroy', ':id') }}"
                url = url.replace(':id', id);

                $.ajax({
                    url: url,
                    method: 'DELETE',
                    data: {
                        '_method': 'DELETE',
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        document.location.href = '';
                    },
                })
            }
        })
        })

    // $(document).on("click", "#btn-edit", function() {
    //     var id = $(this).data('id')
    //     var url = "{{ route('produk.edit', ':id') }}"
    //     url = url.replace(':id', id);

    //     $.ajax({
    //         url: url,
    //         method: 'GET',
    //         success: function(response) {
    //             $("#editModal").modal("show")
    //             $("#nama_produk").val(response.data.nama_produk)
    //             $("#gambar").attr('src', SITEURL +'public/images'+data.gambar)
    //             // $("#harga").val(response.data.harga)
    //         },
    //     })
    // })
</script>
</body>
</html>
