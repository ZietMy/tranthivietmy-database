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
                            <img src="{{asset('assets/clients/images/logo.png')}}" alt="SafeTech">
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
                    <div class="row col-3 d-flex align-items-center justify-content-end icon ">
                        
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
                    <div class="content p-0">
                        <div class="row row-cols-2 m-2">
                            <div class="col p-0">
                                <div class="col m-2 alert alert-primary">
                                    <h5>Total Income</h5>
                                    <h3>$579,000</h3>
                                    <span>Save 25%</span>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="col m-2 alert alert-success">
                                <h5>Total Income</h5>
                                <h3>$579,000</h3>
                                <span>Save 25%</span>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="col m-2 alert alert-danger">
                                    <h5>Total Income</h5>
                                    <h3>$579,000</h3>
                                    <span>Save 25%</span>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="col m-2 alert alert-warning">
                                <h5>Total Income</h5>
                                <h3>$579,000</h3>
                                <span>Save 25%</span>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-4 m-2">
                            <div class="col-6 p-0">
                                <div class="col m-2">
                                    <img src="{{ asset('assets/clients/images/charts.png') }}" alt="" style="width:450px">
                                </div>
                            </div>
                            <div class="col">
                                <img src="{{ asset('assets/clients/images/chart.png') }}" alt="" style="width:200px">
                            </div>
                            <div class="col">
                                <img src="{{ asset('assets/clients/images/chart.png') }}" alt="" style="width:200px">
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <script>
        
        
        var charts = new CanvasJS.Chart("chartContainer1", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Top Oil Reserves"
            },
            axisY: {
                title: "Reserves(MMbbl)"
            },
            data: [{        
                type: "column",  
                showInLegend: true, 
                legendMarkerColor: "grey",
                legendText: "MMbbl = one million barrels",
                dataPoints: [      
                    { y: 300878, label: "Venezuela" },
                    { y: 266455,  label: "Saudi" },
                    { y: 169709,  label: "Canada" },
                    { y: 158400,  label: "Iran" },
                    { y: 142503,  label: "Iraq" },
                    { y: 101500, label: "Kuwait" },
                    { y: 97800,  label: "UAE" },
                    { y: 80000,  label: "Russia" }
                ]
            }]
        });
        charts.render();
    </script>
    <script src="{{ asset('assets/clients/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>