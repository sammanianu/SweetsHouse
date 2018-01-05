<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/css/home.css">

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
                <li><a href='<?php echo base_url();?>index.php/Welcome/Home'>Home<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>index.php/Welcome/Cakes">Cakes</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Welcome/CupCakes">Cup Cakes</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Welcome/Pastries">Pastries</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Welcome/Breads">Breads</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Occasions<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>index.php/Welcome/Wedding">Wedding</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Welcome/Birthday">Birthday</a></li>
                    </ul>
                </li>                <li><a href='<?php echo base_url();?>index.php/Welcome/AboutUs'>About Us</a></li>
                <li><a href="<?php echo base_url();?>index.php/Welcome/Instructions">Instructions</a></li>
            </ul>
