<!doctype html>
<?php
session_start();
if(!isset($_SESSION['id_user']))  
     header("Location:../index.php");  
if($_SESSION['type']=="user") 
     header("Location:../index.php");

  
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
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
       <?php include 'header.php';?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
                      <?php include 'menu.php';?> 

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
                                <h2 class="text-center" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 40px;    font-family: 'Circular Std Book'">صفحة الخدمات والجوابات لباحث</h2>
                                
                            </div>
                        </div>
                    </div>
					<hr/>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
<?php

 
include_once("phpcode/dbconec.php");
$order_id = $_GET['eid'];
	$sql = "SELECT * from check_form where id='$order_id'";

if($result=mysqli_query($conn,$sql)){



										$row = mysqli_fetch_array($result);
										
										$name=$row["name"];
$job=$row["job"];
$job_place=$row["job_place"];
$phone=$row["phone"];
$faculty=$row["faculty"];
$quesm=$row["quesm"];
$shoaba=$row["shoaba"];
$specilisation=$row["specilisation"];
$email=$row["email"];
$academic_year=$row["academic_year"];
$supervisor=$row["supervisor"];
$Co_supervisor=$row["Co_supervisor"];
$message_title=$row["message_title"];
$Broad_topic=$row["Broad_topic"];
$keyWords=$row["keyWords"];
$date=$row["date"];
	$reserach_type=$row["reserach_type"];							}
  
?>
                       
                        <div class="row">
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                <form enctype="multipart/form-data" method="post" action="phpcode/DownlodPapers.php" autocomplete=false;>
                                <div class="card" dir=rtl>
                                    <div class="card-body" style="text-align: right;">
                                                                                                                    
																													
<h3 class="card-header" class="text-right" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;;font-weight: bold;">صفحة الجوابات والخدمات للباحث   <?php echo $name;?></h3>
<h3 class="card-header" class="text-right" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;;font-weight: bold;">درجة الرسالة :  <?php echo $reserach_type;?></h3>


                                         
											 <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">نوع الجواب</label>
<select class="form-control form-control-sm"  name="papertype" required>
<option  value="1" selected>جواب تسليم</option>
<option  value="2" >نتيجة البحث</option>
<option  value="5" >إقرار بتحرير إستمارة الفحص</option>
<option  value="3" >تعهد بتسليم  مخطط الرساله قيد الدراسه</option>
<option  value="4" >اقرار بتسليم الرسالة</option>
<option  value="6" >إيصال أستلام رسالة مجازاة</option>

													</select>

													          </div>
											
		 
												
												 <input type="hidden" name="mid" value="<?php echo $order_id ;?>"/>
                                              
                                            
							 <button type="submit" class="btn btn-space btn-primary" style="height:53px; width:140px;margin-top:20px;margin-right:500px;">تحميل</button>
							</form>
							
							
							
							
							
							
                            <!-- ============================================================== -->
                            <!-- end alignment  -->
                            <!-- ============================================================== -->
                           
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
	
	  </div>
	 </div>
	  </div>
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