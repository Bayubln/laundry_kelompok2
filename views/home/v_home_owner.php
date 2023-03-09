<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Website Laundry </title>

    <!-- Bootstrap -->
    <link href="../../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../../assets/build/css/custom.min.css" rel="stylesheet">
</head>

<?php 
include_once '../template/header.php';
include_once '../template/topbar.php';
include_once '../template/sidebar.php' ;?>

<div class="right_col" role="main" style="min-height: 976.6px;">
    <div class="">

        <div class="clearfix"></div>

        <!-- start form  -->
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <!-- page content -->
<div id="about" class="layout_padding about_section">
		<div class="container">
			<div class="row">
		        <div class="col-md-6">
		        	<div><img src="../../assets/images/qwe.png" style="max-width: 500%;"></div>
		        </div>
		        <div class="col-md-6">
		        	<h1 class="about_text"><strong>About laundry Ajul</strong></h1>
		        	<p class="about_taital">LaundryAjul memanfaatkan kemajuan teknologi digital dengan menyediakan layanan delivery berbasis aplikasi.

						Layanan tersebut sesuai dengan tagline mereka, yaitu “Im ready to go to your wardrobe!”.
						
						Bisnis ini menjadi solusi terbaru dari banyak orang yang bingung mencari tempat laundry terdekat.</p>
		        </div>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->
            </div>
        </div>
    </div>
</div>



<!-- jQuery -->
<script src="../../assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../assets/build/js/custom.min.js"></script>

</body>

</html>
<?php include_once '../template/footer.php'; ?>