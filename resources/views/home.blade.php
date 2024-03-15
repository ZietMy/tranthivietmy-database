<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeTech</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style type="text/css">
        @yield('css');
    </style>
</head>
<body>
    <div class="container">
        <div class="tast-list d-flex justify-content-between align-items-center alert alert-secondary">
            <div>Task List</div>
            <span class="border">
                <i class="fa fa-bars"></i>
            </span>
            </div>
        <div class="m-3  new-task  border">
            <div class=" alert alert-secondary">New Task</div>
            <div class="p-3">
                <div class="mb-3">
                    <label for=""class='col'><b>Task</b></label>
                </div>
                <div class="input-group mb-3">
                    {{-- <span class="input-group-text" id="basic-addon1">@</span> --}}
                    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                <div class="mb-2">
                    <button class="btn btn-outline-danger"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
                        </svg>    Add Task</button>
                </div>
            </div>
           
        </div>
        <div class="m-3  Current-task  border">
            <div class=" alert alert-secondary">Current Task</div>
            <div class="p-3">
                <div class="mb-3">
                    <label for=""class='col'><b>Task</b></label>
                </div>
                <table class="table ">
                    <tbody>
                      <tr>
                        <td >First</td>
                        <td> 
                            <button class="btn btn-danger"> 
                                <i class="fa fa-trash"></i> Delete</button>
                        </td>  
                      </tr>
                      <tr>
                        <td >Second</td>
                        <td> 
                            <button class="btn btn-danger"> 
                                <i class="fa fa-trash"></i> Delete</button>
                        </td>  
                      </tr>
                     
                    </tbody>
                  </table>
            </div>
           
        </div>
    </div>


    <script src="{{ asset('assets/clients/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/custom.js') }}"></script>
    @stack('scripts');
</body>
</html>