<!DOCTYPE html>
<html>
    <head>
    
    <!-- Load js files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b125711156.js"></script>


    <!-- Responsive design for mobile navigation -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: Arial;
        }
    </style>

    <!-- Assign UTF-8 -->
    <meta charset="utf-8" />

    <title>
        Index
    </title>
    </head>
    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" 
        style="position: sticky; z-index: 1071; top: 0;">
            <div class="d-flex justify-content-end">
            <a class="navbar-brand" href="/"  style="color: #fff;">
                Sistema PYP (eada)
               </a>
            <div class="nav navbar-nav navbar-right">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/" style="margin-right: 1rem; color: #fff;">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" style="margin-right: 1rem;">
                            <a class="nav-link" href="/admin/contacts" style="color: #fff;">Clientes</a>
                        <li class="nav-item" style="margin-right: 1rem;">
                            <a class="nav-link" href="/admin/stock" style="color: #fff;">Stock</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                    </span>
                </div>
            </div>
        </nav>
        <!-- End of Navbar -->

        <!-- Content -->

        <div class="container-fluid" style="margin-top: 3rem;">
            <div class="row flex-xl-nowrap">

                <!-- Left Sidebar -->

                <div class="col-12 col-md-3 col-xl-2 bd-sidebar"> 
                </div>

                <!-- Main body -->

                <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
                    <div class="container-fluid">
                        @yield('main')
                    </div>
                </main>

            </div>
        </div>

    </body>
</html>

