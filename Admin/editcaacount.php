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
	<script>
	function back()
	{
		
		window.history.back();
	}
	</script>
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
                                <h2 class="text-center" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 40px;    font-family: 'Circular Std Book';font-weight: bold;">صفحة تعديل بيانات الحساب</h2>
                                
                            </div>
                        </div>
                    </div>
					<hr/>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

  <?php  
$id_user=$_SESSION["id_user"];
$sql = "SELECT * FROM user WHERE id='$id_user'";
$result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
?>
                        <div class="row">
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                  <form enctype="multipart/form-data" method="post" action="phpcode/editaccount.php">
                                <div class="card" dir=rtl>
                                    <h5 class="card-header" class="text-right" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">عدل علي البيانات الاتيه</h5>
                                    <div class="card-body" style="text-align: right;">
                                        
                                            <div class="form-group" dir=rtl style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">الاسم بالكامل</label>
									 <input id="inputText3" style="text-align: right;" name="fullname" value="<?php echo $row["full_name"] ?>" type="text" class="form-control"  >

                                            </div>
											<div class="form-group" >
                                                <label for="inputText3" class="col-form-label" >الرقم القومي أو رقم الباسبور</label>
                                                <input id="inputText3" style="text-align: right;" name="national_number" value="<?php echo $row["national_number"] ?>" type="text" class="form-control"  >
                                            </div>
											
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label" >البريد الالكتروني</label>
                                                <input id="inputText3" style="text-align: right;" name="email" type="text" class="form-control" value="<?php echo $row["email"] ?>">
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label" >كلمه المرور</label>
                                                <input id="inputText3" style="text-align: right;" name="password" type="text" class="form-control" value="<?php echo $row["password"] ?>">
                                            </div>
											
                                            
                                       
                                    </div>
                                    
                                </div>
								</div>
								


								
								
 
					
					
							    
					 <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                                                                   <input  style="text-align: right;" name="id_user" type="hidden" class="form-control" value="<?php echo $id_user; ?>">

                                                    <button class="btn btn-space btn-secondary" style="height:50px; width:100px">الغاء</button>
													 <button type="submit" class="btn btn-space btn-primary" style="height:50px; width:100px">تعديل</button>
                                                </p>
                                            </div>
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