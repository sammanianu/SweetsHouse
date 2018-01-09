<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/css/test.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

<div class="container" >
    <div class="row">
        <div class="col-md-offset-1 col-md-10">

            <h1 style="color: #F03861">Sweets House</h1>

            <!--Nav Bar-->
            <ul class="nav navbar-nav" >
                <li><a href="#">Home<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Cakes</a></li>
                        <li><a href="#">Cup Cakes</a></li>
                        <li><a href="#">Pastries</a></li>
                        <li><a href="#">Breads</a></li>
                    </ul>
                </li>
                <li><a href="#">Occasions</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Instructions</a></li>
            </ul>

            <!--Slide Show-->
            <div class="w3-content w3-section" style="max-width:800px;max-height: 400px">
                <img class="mySlides" src="<?php echo base_url().'css/images/pastry.jpg';?>" style="width:118%;height: 90%">
                <img class="mySlides" src="<?php echo base_url().'css/images/cupCake.jpg';?>" style="width:118%;height: 90%">
                <img class="mySlides" src="<?php echo base_url().'css/images/cake.jpg';?>" style="width:118%;height: 90%">
            </div>

            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}
                    x[myIndex-1].style.display = "block";
                    setTimeout(carousel, 2000); // Change image every 2 seconds
                }
            </script>

            <br>

            <div class="topic">
                <h2>-------------------------------New Arrivals-----------------------------</h2>
            </div>

            <br>
            <div class="row2">
                <div class="col-md-4">
                    <div class="col-sm-5 col-md-offset-1 col-md-11">

                    <h3>Cakes</h3>
                        <div class="w3-content w3-section" style="max-width:200px;max-height: 200px">
                            <div class="mySlides2">
                                <img src="<?php echo base_url().'css/images/OrioCheese.jpg';?>" alt="Chicago"style="width:118%;height: 90%">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="mySlides2">
                                <img src="<?php echo base_url().'css/images/SaltedCaramel.jpg';?>" alt="Chicago" style="width:118%;height: 90%">
                                <div class="carousel-caption">
                                    <h3>Salted Caramel</h3>
                                </div>
                            </div>
                            <div class="mySlides2">
                                <img src="<?php echo base_url().'css/images/FreshStrawberry.jpg';?>" alt="Chicago" style="width:118%;height: 90%">
                                <div class="carousel-caption">
                                    <h3>Fresh Strawberry</h3>
                                </div>
                            </div>
                           <!-- <img class="mySlides2" src="<?php /*echo base_url().'css/images/a.jpg';*/?>" style="width:118%;height: 90%">
                            <img class="mySlides2" src="<?php /*echo base_url().'css/images/b.jpg';*/?>" style="width:118%;height: 90%">
                            <img class="mySlides2" src="<?php /*echo base_url().'css/images/a.jpg';*/?>" style="width:118%;height: 90%">-->
                        </div>

                        <script>
                            var myIndex2 = 0;
                            carousel2();

                            function carousel2() {
                                var i;
                                var x = document.getElementsByClassName("mySlides2");
                                for (i = 0; i < x.length; i++) {
                                    x[i].style.display = "none";
                                }
                                myIndex2++;
                                if (myIndex2 > x.length) {myIndex2 = 1}
                                x[myIndex2-1].style.display = "block";
                                setTimeout(carousel2, 2000); // Change image every 2 seconds
                            }
                        </script>
                        <br>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="col-sm-5 col-md-offset-1 col-md-11">
                        <h3>Cup Cakes</h3>
                        <div class="w3-content w3-section" style="max-width:200px;max-height: 200px">
                            <div class="mySlides3">
                                <img src="<?php echo base_url().'css/images/HoliCoffee.png';?>" alt="Chicago"style="width:118%;height: 90%">
                                <div class="carousel-caption">
                                    <h3>Holi Coffee</h3>
                                </div>
                            </div>
                            <div class="mySlides3">
                                <img src="<?php echo base_url().'css/images/PeanutButter.jpg';?>" alt="Chicago" style="width:118%;height: 90%">
                                <div class="carousel-caption">
                                    <h3>Peanut Butter</h3>
                                </div>
                            </div>
                            <div class="mySlides3">
                                <img src="<?php echo base_url().'css/images/BananaSplit.jpg';?>" alt="Chicago" style="width:118%;height: 90%">
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </div>

                        <script>
                            var myIndex3 = 0;
                            carousel3();

                            function carousel3() {
                                var i;
                                var x = document.getElementsByClassName("mySlides3");
                                for (i = 0; i < x.length; i++) {
                                    x[i].style.display = "none";
                                }
                                myIndex3++;
                                if (myIndex3 > x.length) {myIndex3 = 1}
                                x[myIndex3-1].style.display = "block";
                                setTimeout(carousel3, 2000); // Change image every 2 seconds
                            }
                        </script>
                        <br>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="col-sm-5 col-md-offset-1 col-md-11">
                        <h3>Pastries</h3>
                        <div class="w3-content w3-section" style="max-width:200px;max-height: 200px">
                            <div class="mySlides4">
                                <img src="<?php echo base_url().'css/images/CheeseDanish.jpg';?>" alt="Chicago"style="width:118%;height: 90%">
                                <div class="carousel-caption">
                                    <h3>Cheese Danish</h3>
                                </div>
                            </div>
                            <div class="mySlides4">
                                <img src="<?php echo base_url().'css/images/Comer.jpg';?>" alt="Chicago" style="width:118%;height: 90%">
                                <div class="carousel-caption">
                                    <h3>Comer</h3>
                                </div>
                            </div>
                            <div class="mySlides4">
                                <img src="<?php echo base_url().'css/images/DanishPastry.jpg';?>" alt="Chicago" style="width:118%;height: 90%">
                                <div class="carousel-caption">
                                    <h3>DanishPastry</h3>
                                </div>
                            </div>
                        </div>

                        <script>
                            var myIndex4 = 0;
                            carousel4();

                            function carousel4() {
                                var i;
                                var x = document.getElementsByClassName("mySlides4");
                                for (i = 0; i < x.length; i++) {
                                    x[i].style.display = "none";
                                }
                                myIndex4++;
                                if (myIndex4 > x.length) {myIndex4 = 1}
                                x[myIndex4-1].style.display = "block";
                                setTimeout(carousel4, 2000); // Change image every 2 seconds
                            }
                        </script>
                        <br>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <br><br>
                    <div class="col-md-offset-1 col-md-10" style="background-color: #F5D97E">
                        <h2>Location</h2>
                        <h3>
                            No:89,<br>
                            Galle Road,<br>
                            Matara.<br>
                        </h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <br><br>
                    <div class="col-md-offset-1 col-md-10" style="background-color: #F5D97E">
                        <h2>Hours</h2>
                        <h3>
                            Week Days:9.00-6.00<br>
                            Saturday:9.00-8.00<br>
                            Sunday:Closed<br>
                        </h3>
                    </div>
                </div>
                <br>
            </div>

            <div class="topic">
                <h2>----------------------------------Offers-------------------------------</h2>
            </div>

            <div class="row">
                <div class="col-sm-5 col-md-offset-2 col-md-7">
                    <img src="<?php echo base_url().'css/images/offer.jpg';?>" alt="Chicago" style="width:118%;height: 90%">
                    <div class="carousel-caption">
                        <h3 style="color: #F03861">Buy any four cup cakes &</h3>
                        <h2 style="color: #F03861">GET ANOTHER</h2>
                        <h3 style="color: #F03861">CupCake</h3>
                        <h1 style="color: #F03861">FREE</h1><br>
                        <h3 style="color: #43DDE6">Offer Valied on the</h3>
                        <h3 style="color: #43DDE6">Wednesday & Friday January 2018</h3><br><br>

                    </div>
                </div>
            </div>

            <br><br><br><br><br><br><br><br><br>

        </div>
    </div>
</div>


<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
-->
</body>

</html>