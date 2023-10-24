
<!doctype html>
<?php
session_start();

      if(!isset($_SESSION['id_user'])) 
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
	<script>
	
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
        <div class="dashboard-header" dir=rtl>
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index1.php"> كليه التمريض جامعه اسيوط</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    
                        
                       <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php
if($row["img"])
	echo"<img src='data:image/jpeg;base64,".$row['img']."'  class='user-avatar-md rounded-circle'/>";
								else
	echo"<img src='assets/images/avatar-2.jpg' class='user-avatar-md rounded-circle' />";?></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info" style="text-align: right;">
                                    <h5 style="text-align: right;" class="mb-0 text-white nav-user-name"><?php echo $row["full_name"];?></h5>
                                  
                                </div>
                                <a style="text-align: right;" class="dropdown-item" href="editcaacount.php"><i class="fas fa-user mr-2"></i>تعديل بيانات الحساب</a>
                            
                                <a style="text-align: right;"class="dropdown-item" href="../logout.php"><i class="fas fa-power-off mr-2"></i>تسجيل الخروج</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">الدرجات</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav" >
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider" dir=rtl>
                           القائمه الرئيسيه
                            </li>
                            <li class="nav-item " >
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"  ></i>لوائح الدرجات </a>
                                <div id="submenu-1" class="collapse submenu" style=""  >
                                    <ul class="nav flex-column">
                                        
                                         <li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="diploma.php">الدبلوم المهني</a>
                                        </li>
                                        <li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="master.php">الماجستير</a>
                                        </li>
										<li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="doctor.php">الدكتوراه </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
							<?php
							include_once("phpcode/dbconec.php");

$id=$_SESSION["id_user"];
$sql = "SELECT * FROM priviliges WHERE type=1";
$result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 $statusdiploma=$row["status"];
 $sql = "SELECT * FROM priviliges WHERE type=2";
$result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 $statusm=$row["status"];
 $sql = "SELECT * FROM priviliges WHERE type=3";
$result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 $statusdo=$row["status"];
 $id=$_SESSION["id_user"];
$sql = "SELECT * FROM registeration WHERE user_id='$id'";
$result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 $finalaccept=$row["finalaccept"];
?>
 
 
							    
                           <li class="nav-item">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>تسجيل جديد</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
									<?php if($statusdiploma==1){
                                        echo '<li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="regdiploma.php">الدبلوم المهني <span class="badge badge-secondary">New</span></a>
									</li>';}?>
                                        <?php if($statusm==1){
                                        echo '<li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="regimaster.php">الماجستير</a>
                                        </li>';}?>
                                        <?php if( $statusdo==1){
                                        echo '<li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="regisdoctor.php">الدكتوراه</a>
                                       </li>';}?>
                                        
									
                                    </ul>
                                </div>
                            </li>

							  <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-22" aria-controls="submenu-22"><i class="fa fa-fw fa-rocket"></i>استماره القيد-استماره تسجيل المواد</a>
                                <div id="submenu-22" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
									<li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="register.php">تحميل<span class="badge badge-secondary">New</span></a>
									</li> </ul></div> </li>
							
                            <li class="nav-item">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-25" aria-controls="submenu-25"><i class="fa fa-fw fa-rocket"></i>درجات المواد</a>
                                <div id="submenu-25" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
									<li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="examdegree.php">درجات المواد<<span class="badge badge-secondary">New</span></a>
									</li>                                    </ul></div> </li>
									 <li class="nav-item">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-55" aria-controls="submenu-55"><i class="fa fa-fw fa-rocket"></i>حاله الطلب</a>
                                <div id="submenu-55" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
									<li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="status.php">حاله الطلب<span class="badge badge-secondary">New</span></a>
									</li>                                    </ul></div> </li>


                        </ul>
                    </div>
                </nav>
            </div>
        </div>
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
                                <h2 class="text-center" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 40px;    font-family: 'Circular Std Book'">صفحه تحميل استماره القيد وتسجيل الموادوتسجيل موضوع الرساله </h2>
                                
                            </div>
                        </div>
                    </div>
					<hr/>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                       
                        <div class="row">
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                <form action="download.php" method="post" enctype="multipart/form-data">
                                <div class="card" dir=rtl>
                                    <h5 class="card-header" class="text-right" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;"> تحميل استماره القيد</h5>
                                    <div class="card-body" style="text-align: right;">
                                        <div class="form-group" dir=rtl style="text-align: right;">
													 <button type="submit" class="btn btn-space btn-primary" style="height:50px; width:100px">تحميل</button>
                                            </div>
											
                                            
                                       </form>     
                                       
                                    </div>
                                    
                                </div>
								</div>
								
						 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                <form action="download1.php" method="post" enctype="multipart/form-data">
                                <div class="card" dir=rtl>
                                    <h5 class="card-header" class="text-right" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">تحميل  استماره تسجيل المواد-يرجي طباعه الاستماره ورقه واحد وش وظهر</h5>
                                    <div class="card-body" style="text-align: right;">
                                        <div class="form-group" dir=rtl style="text-align: right;">
													 <button type="submit" class="btn btn-space btn-primary" style="height:50px; width:100px">تحميل</button>
													 </form>
                                            </div>
											
                                            
                                            
                                       
                                    </div>
                                    
                                </div>
								</div>
								 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                <form action="download2.php" method="post" enctype="multipart/form-data">
                                <div class="card" dir=rtl>
                                    <h5 class="card-header" class="text-right" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">تحميل استماره تسجيل موضوع البحث</h5>
                                    <div class="card-body" style="text-align: right;">
                                        <div class="form-group" dir=rtl style="text-align: right;">
													 <button type="submit" class="btn btn-space btn-primary" style="height:50px; width:100px">تحميل</button>
                                            </div>
											
                                            
                                            
                                       
                                    </div>
                                    
                                </div>
								</div>
								
						 
 	
								</div>
									
  
					 
					<div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                   
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