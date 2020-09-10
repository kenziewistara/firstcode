<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <title>FirstCode</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/fav.ico'); ?>">
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>

<body>
    <header class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
            <div class="container">
                <a class="navbar-brand text-lg poppins active" href="<?= base_url('/'); ?>">First<span class="font-weight-light text-primary">Code</span></a>

                <ul class="navbar-nav align-items-center ml-auto">
                    <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                        <a class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="menu"></i></a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                            <a class="dropdown-item" href="<?= base_url('/'); ?>">
                                <div class="dropdown-item-icon"><i data-feather="home"></i></div>
                                Home
                            </a>
                            <a class="dropdown-item" href="<?= base_url('admin'); ?>">
                                <div class="dropdown-item-icon"><i data-feather="slack"></i></div>
                                Admin
                            </a>
                        </div>
                    </li>
                    <li class="nav-item mr-3 d-none d-md-inline">
                        <a class="nav-link" href="<?= base_url('/'); ?>">
                            <div class="d-none d-md-inline font-weight-500">HOME</div>
                        </a>
                    </li>
                    <li class="nav-item mr-3 d-none d-md-inline">
                        <a class="nav-link" href="<?= base_url('admin'); ?>">
                            <div class="d-none d-md-inline font-weight-500">ADMIN</div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>