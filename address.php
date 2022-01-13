<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerakin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3 my-lg-0 my-md-1">
                <div id="sidebar" class="bg-purple">
                    <div class="h4 text-white">Profile</div>
                    <ul>
                        <li> <a href="orders.php" class="text-decoration-none d-flex align-items-start">
                                <div class="fas fa-box-open pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">My Orders</div>
                                    <div class="link-desc">View & Manage orders and returns</div>
                                </div>
                            </a> </li>
                        <li class="active"> <a href=" #" class="text-decoration-none d-flex align-items-start">
                                <div class="far fa-address-book pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">Address Book</div>
                                    <div class="link-desc">View & Manage Addresses</div>
                                </div>
                            </a>
                        </li>
                        <li> <a href="profile.php" class="text-decoration-none d-flex align-items-start">
                                <div class="far fa-user pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">My Profile</div>
                                    <div class="link-desc">Change your profile details & password</div>
                                </div>
                            </a> </li>
                        <li> <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="fas fa-headset pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">Cek Resi</div>
                                    <div class="link-desc">Melihat Pengiriman</div>
                                </div>
                            </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 my-lg-0 my-1">
                <div id="main-content" class="bg-white border">
                    <div class="col-lg-12">
                        <div class="d-sm-flex align-items-sm-start justify-content-sm-between">
                            <div class="h5">Daftar Alamat</div>
                            <div class="btn btn-outline-success text-uppercase">Tambah Alamat</div>
                        </div>
                        <br>
                        <div class="text-uppercase">Alamat Pengiriman</div>
                        <div class="order my-3 bg-light">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column justify-content-between order-summary">
                                        <div class="fs-8">Rumah</div>
                                        <div class="fs-8"><b>Laksamana Bimo Wahyualdi</b></div>
                                        <div class="fs-8">087785157089</div>
                                        <div class="fs-8">Pondok Mitra Lestari C5/1</div>
                                        <div class="rating d-flex align-items-center pt-1"> <img src="https://www.freepnglogos.com/uploads/lokasi-logo-png/lokasi-logo-red-map-location-icon-map-png-0.png" alt=""><span class=" px-2">Sudah Di PinPoint</span> </div>
                                        <br>
                                        <div class="btn btn-primary text-uppercase">Ubah Alamat</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order my-3 bg-light">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column justify-content-between order-summary">

                                        <div class="fs-8">Rumah</div>
                                        <div class="fs-8"><b>Laksamana Bimo Wahyualdi</b></div>
                                        <div class="fs-8">087785157089</div>
                                        <div class="fs-8">Pondok Mitra Lestari C5/1</div>
                                        <div class="rating d-flex align-items-center pt-1"> <img src="https://www.freepnglogos.com/uploads/lokasi-logo-png/lokasi-logo-red-map-location-icon-map-png-0.png" alt=""><span class=" px-2">Sudah Di PinPoint</span> </div>
                                        <br>
                                        <div class="btn btn-primary text-uppercase">Ubah Alamat</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="btn btn-outline-dark text-uppercase">Pilih Alamat</div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>


    <?php
    include 'footer.php';
    ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;900&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif
        }


        #sidebar {
            padding: 15px 0px 15px 0px;
            border-radius: 10px
        }

        #sidebar .h4 {
            font-weight: 500;
            padding-left: 15px
        }

        #sidebar ul {
            list-style: none;
            margin: 0;
            padding-left: 0rem
        }

        #sidebar ul li {
            padding: 10px 0;
            display: block;
            padding-left: 1rem;
            padding-right: 1rem;
            border-left: 5px solid transparent
        }

        #sidebar ul li.active {
            border-left: 5px solid #ff5252;
            background-color: #876445
        }

        #sidebar ul li a {
            display: block
        }

        #sidebar ul li a .fas,
        #sidebar ul li a .far {
            color: #ddd
        }

        #sidebar ul li a .link {
            color: #060606;
            font-weight: 500;
            margin-left: 10px;
        }

        #sidebar ul li a .link-desc {
            font-size: 0.8rem;
            color: #0c0c0c;
            margin-left: 10px;
        }

        #main-content {
            padding: 30px;
            border-radius: 15px
        }

        #main-content .h5,
        #main-content .text-uppercase {
            font-weight: 600;
            margin-bottom: 0
        }

        #main-content .h5+div {
            font-size: 0.9rem
        }

        #main-content .box {
            padding: 10px;
            border-radius: 6px;
            width: 170px;
            height: 90px;
            margin-right: 30px;
        }

        #main-content .box img {
            width: 40px;
            height: 40px;
            object-fit: contain
        }

        #main-content .box .tag {
            font-size: 0.9rem;
            color: #000;
            font-weight: 500
        }

        #main-content .box .number {
            font-size: 1.5rem;
            font-weight: 600;
            margin-left: 20px;
        }

        .order {
            padding: 10px 30px;
            min-height: 150px
        }

        .order .order-summary {
            height: 100%
        }

        .order .blue-label {
            background-color: #aeaeeb;
            color: #0046dd;
            font-size: 0.9rem;
            padding: 0px 3px
        }

        .order .green-label {
            background-color: #a8e9d0;
            color: #008357;
            font-size: 0.9rem;
            padding: 0px 3px
        }

        .order .fs-8 {
            font-size: 0.85rem
        }

        .order .rating img {
            width: 20px;
            height: 20px;
            object-fit: contain
        }

        .order .rating .fas,
        .order .rating .far {
            font-size: 0.9rem
        }

        .order .rating .fas {
            color: #daa520
        }

        .order .status {
            font-weight: 600
        }

        .order .btn.btn-primary {
            background-color: #fff;
            color: #4e2296;
            border: 1px solid #4e2296
        }

        .order .btn.btn-primary:hover {
            background-color: #4e2296;
            color: #fff
        }

        .order .progressbar-track {
            margin-top: 20px;
            margin-bottom: 20px;
            position: relative
        }

        .order .progressbar-track .progressbar {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left: 0rem
        }

        .order .progressbar-track .progressbar li {
            font-size: 1.5rem;
            border: 1px solid #333;
            padding: 5px 10px;
            border-radius: 50%;
            background-color: #dddddd;
            z-index: 100;
            position: relative
        }

        .order .progressbar-track .progressbar li.green {
            border: 1px solid #007965;
            background-color: #d5e6e2
        }

        .order .progressbar-track .progressbar li::after {
            position: absolute;
            font-size: 0.9rem;
            top: 50px;
            left: 0px
        }

        #tracker {
            position: absolute;
            border-top: 1px solid #bbb;
            width: 100%;
            top: 25px
        }

        #step-1::after {
            content: 'Placed'
        }

        #step-2::after {
            content: 'Accepted';
            left: -10px
        }

        #step-3::after {
            content: 'Packed'
        }

        #step-4::after {
            content: 'Shipped'
        }

        #step-5::after {
            content: 'Delivered';
            left: -10px
        }

        .bg-purple {
            background-color: #BB8760
        }

        .bg-light {
            background-color: #f0ecec !important
        }

        .green {
            color: #007965 !important
        }

        @media(max-width: 1199.5px) {
            nav ul li {
                padding: 0 10px
            }
        }

        @media(max-width: 500px) {
            .order .progressbar-track .progressbar li {
                font-size: 1rem
            }

            .order .progressbar-track .progressbar li::after {
                font-size: 0.8rem;
                top: 35px
            }

            #tracker {
                top: 20px
            }
        }

        @media(max-width: 440px) {
            #main-content {
                padding: 20px
            }

            .order {
                padding: 20px
            }

            #step-4::after {
                left: -5px
            }
        }

        @media(max-width: 395px) {
            .order .progressbar-track .progressbar li {
                font-size: 0.8rem
            }

            .order .progressbar-track .progressbar li::after {
                font-size: 0.7rem;
                top: 35px
            }

            #tracker {
                top: 15px
            }

            .order .btn.btn-primary {
                font-size: 0.85rem
            }
        }

        @media(max-width: 355px) {
            #main-content {
                padding: 15px
            }

            .order {
                padding: 10px
            }
        }
    </style>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>