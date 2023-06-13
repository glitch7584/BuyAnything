<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <!-- my-css -->
    <link rel="stylesheet" href="../styles.css">
    <!-- ../ is used to access any elemrnt outside this folder -->
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .admin_image {
            width: 100px;
            object-fit: contain;
        }

        .bg-buttoncol {
            background-color: brown;
        }
        .footer{
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>
    <!-- arkadipta 12/6 -->
    <div class="container-fluid p-0 m-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-custom">
            <div class="container-fluid">
                <img src="../imgs/sb.png" alt="Logo" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h2 class="text-center p-2">
                manage details
            </h2>
        </div>
        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secendary p-1 d-flex align-items-center">
                <div class="p-5">
                    <a href="#"><img src="../imgs/apple.jpg" class="admin_image">
                        <p class="text-light text-center p-0"> Admin name</p>
                    </a>
                </div>
                <div class="">
                    <div class="button text-center m-1">
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">view Products</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Insert Catagories</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Catagories</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer p-3 text-center footer">
        <p>footer</p>
    </div>
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>