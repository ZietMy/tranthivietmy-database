<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeTech</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/admin.css') }}">
    <style type="text/css">
        @yield('css');
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="sidebar">
                    <div class="logo d-flex justify-content-evenly align-items-center">
                            <img src="{{ asset('assets/clients/images/logo.png') }}" alt="SafeTech">
                            <span class="name-group">SAFETECH</span>
                    </div>
                    <div class="list">
                        <ul class="list-group list-group-flush">
                            <li class=" row list-group-item d-flex justify-content-evenly align-items-center">
                                <i class="fa fa-home col-2" aria-hidden="true"></i>
                                <span class="col-8">Dashboard</span>
                                <i class="fa fa-angle-down col-1" aria-hidden="true"></i>
                            </li>
                            <li class=" row list-group-item d-flex justify-content-evenly align-items-center">
                                <i class="fa fa-file-text col-2" aria-hidden="true"></i>
                                <span class="col-8">Pages</span>
                                <i class="fa fa-angle-down col-1" aria-hidden="true"></i>
                            </li>
                            <li class=" row list-group-item d-flex justify-content-evenly align-items-center">
                                <i class="fa fa-mobile col-2" aria-hidden="true"></i>
                                <span class="col-8">Applications</span>
                                <i class="fa fa-angle-down col-1" aria-hidden="true"></i>
                            </li>
                            <li class=" row list-group-item d-flex justify-content-evenly align-items-center">
                                <i class="fa fa-paint-brush col-2" aria-hidden="true"></i>
                                <span class="col-8">UI Component</span>
                                <i class="fa fa-angle-down col-1" aria-hidden="true"></i>
                            </li>
                            <li class=" row list-group-item d-flex justify-content-evenly align-items-center">
                                <i class="fa fa-paint-brush col-2" aria-hidden="true"></i>
                                <span class="col-8">Widgets</span>
                                <i class="fa fa-angle-down col-1" aria-hidden="true"></i>
                            </li>
                            <li class=" row list-group-item d-flex justify-content-evenly align-items-center">
                                <i class="fa fa-file-text-o col-2" aria-hidden="true"></i>
                                <span class="col-8">Forms</span>
                                <i class="fa fa-angle-down col-1" aria-hidden="true"></i>
                            </li>
                            <li class=" row list-group-item d-flex justify-content-evenly align-items-center">
                                <i class="fa fa-bar-chart col-2" aria-hidden="true"></i>
                                <span class="col-8">Charts</span>
                                <i class="fa fa-angle-down col-1" aria-hidden="true"></i>
                            </li>
                           
                          </ul>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="header row d-flex justify-content-between align-items-center">
                    <div class="search-bar row col-9">
                        <input type="text" placeholder="Seach here" class="input-search-bar col">
                        <i class="fa fa-search search-icon" aria-hidden="true"></i>
                    </div>
                    <div class="row col-3 d-flex align-items-center icon ">
                        <i class="fa fa-bell-o col-3" aria-hidden="true"></i>
                        <i class="fa fa-comment-o col-3" aria-hidden="true"></i>
                        <div class="dropdown col-4">
                            <img src="{{ asset('assets/clients/images/avt1.png') }}" alt=""class="avt-admin dropdown-toggle"data-bs-toggle="dropdown" aria-expanded="false">
                            {{-- <button class="btn btn-secondary " type="button" >
                                Dropdown button
                            </button> --}}
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="content row row-cols-2">
                        <div class="col">Column</div>
                        <div class="col">Column</div>
                        <div class="col">Column</div>
                        <div class="col">Column</div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/clients/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>