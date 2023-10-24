<!doctype html>
<?php
session_start();

include_once("phpcode/dbconec.php");

      if(!isset($_SESSION['id_user'])) 
      header("Location:../index.php");  
$id=$_SESSION["id_user"];

 

  
?>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>مركز الخدمات العامة للرسائل العلمية والبحوث </title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php include_once('menu.php');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
       <?php include_once('header.php');?>
		</div>
			</div>
				</div>
					</div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title" style="text-align:center;background-color: #f8d7da;border: 5px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 40px;" >الصفحه الرئيسيه صفحه الاعلانات</h2>
                               
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                       
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="text-align:center;color:red;font-style: normal;font-family: 'Circular Std Book'">اخر الاخبار</h3>
                            <div class="card-body">
                                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <?php
										include_once("phpcode/dbconec.php");

								
 $count = 0;
$sql = "SELECT * FROM adverstiment";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
  echo'
   <li data-target="#carouselExampleIndicators1" data-slide-to="'.$count.'" class="active"></li>';
  }
  else
  {
   echo'
   <li data-target="#carouselExampleIndicators1" data-slide-to="'.$count.'"></li>';
  }
  $count = $count + 1;
										
 }						
										?>
                                    </ol>
                                    <div class="carousel-inner">
                                        
                                     <?php
									include_once("phpcode/dbconec.php");

 $count = 0;
$sql1 = "SELECT * FROM adverstiment";
$result1 = mysqli_query($conn,$sql1);
while($row1 = mysqli_fetch_array($result1))
 {
	 $id=$row1["id"];
  if($count == 0)
  {
  echo'<div class="carousel-item active">';
  }
  else
  {
   echo'<div class="carousel-item">';
  }
  if(isset($row1["image"])){
 echo"
  
<a href='adverstimentdetails.php?eid=".$id ."'><img src='data:image/jpeg;base64,".$row1["image"]."'  class='d-block w-100' height=300px; /></a>";
  }
  else{
  echo "<a href='adverstimentdetails.php?eid=".$id ."'><img src='assets/images/Nursing_a.png'   class='d-block w-100' height=300px; /></a>";}

echo "<div class='carousel-caption d-none d-md-block'>
<h2>".$row1["header"]."</h2>
<p>".$row1["content"]."</p>	  

   </div>
 
	
  </div>";
  $count = $count + 1;
 }
									
									
									?>      
                                       
                                        
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                       <span class="sr-only">Previous</span>  </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>  </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
<!-- Modal -->


					 
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            	 
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>