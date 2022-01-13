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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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
                        <li> <a href="address.php" class="text-decoration-none d-flex align-items-start">
                                <div class="far fa-address-book pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">Address Book</div>
                                    <div class="link-desc">View & Manage Addresses</div>
                                </div>
                            </a>
                        </li>
                        <li class="active"> <a href="profile.php" class="text-decoration-none d-flex align-items-start" onclick="">
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
                    <h4 class="pb-4 border-bottom">Account settings</h4>
                    <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
                        <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                            <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
                        </div>
                    </div>
                    <div class="py-2">
                        <div class="row py-2">
                            <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" class="bg-light form-control" placeholder="Steve"> </div>
                            <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" class="bg-light form-control" placeholder="Smith"> </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" class="bg-light form-control" placeholder="steve_@email.com"> </div>
                            <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel" class="bg-light form-control" placeholder="+1 213-548-6015"> </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6"> <label for="country">Country</label> <select name="country" id="country" class="bg-light">
                                    <option value="india" selected>India</option>
                                    <option value="usa">USA</option>
                                    <option value="uk">UK</option>
                                    <option value="uae">UAE</option>
                                </select> </div>
                            <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="language">Language</label>
                                <div class="arrow"> <select name="language" id="language" class="bg-light">
                                        <option value="english" selected>English</option>
                                        <option value="english_us">English (United States)</option>
                                        <option value="enguk">English UK</option>
                                        <option value="arab">Arabic</option>
                                    </select> </div>
                            </div>
                        </div>
                        <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button">Cancel</button> </div>
                        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                            <div> <b>Deactivate your account</b>
                                <p>Details about your company account and password</p>
                            </div>
                            <div class="ml-auto"> <button class="btn danger">Deactivate</button> </div>
                        </div>
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

        .img {
            width: 70px;
            height: 70px;
            border-radius: 6px;
            object-fit: cover
        }

        #img-section p,
        #deactivate p {
            font-size: 12px;
            color: #777;
            margin-bottom: 10px;
            text-align: justify
        }

        #img-section b,
        #img-section button,
        #deactivate b {
            font-size: 14px
        }

        label {
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 500;
            color: #777;
            padding-left: 3px
        }

        .form-control {
            border-radius: 10px
        }

        input[placeholder] {
            font-weight: 500
        }

        .form-control:focus {
            box-shadow: none;
            border: 1.5px solid #0779e4
        }

        select {
            display: block;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 10px;
            height: 40px;
            padding: 5px 10px
        }

        select:focus {
            outline: none
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