<!doctype html>
<?php
session_start();

include_once("phpcode/dbconec.php");

      if(!isset($_SESSION['id_user'])) 
      header("Location:../index.php");  
$id=$_SESSION["id_user"];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 
 $sql1 = "SELECT * FROM registeration WHERE user_id='$id'";
$result1 = mysqli_query($conn,$sql1);
 $row1 = mysqli_fetch_array($result1);
 
 $id_r=$row1["id"];
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
    <title></title>
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
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-22" aria-controls="submenu-22"><i class="fa fa-fw fa-rocket"></i>استماره القيد</a>
                                <div id="submenu-22" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
									<li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="register.php">تحميل استماره القيد<span class="badge badge-secondary">New</span></a>
									</li>                                    </ul></div> </li>

<li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-44" aria-controls="submenu-44"><i class="fa fa-fw fa-rocket"></i>درجات المواد</a>
                                <div id="submenu-44" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
									<li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="examdegree.php">درجات المواد<span class="badge badge-secondary">New</span></a>
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
                                <h2 class="pageheader-title" style="text-align:center;background-color: #f8d7da;border: 5px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 40px;" >صفحه عرض درجات لطالب</h2>
                               
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
                            <h3 class="card-header" style="text-align:center;color:red;font-style: normal;font-family: 'Circular Std Book'">صفحه عرض درجات لطالب</h2>
                             
					
												<div class="" dir=rtl>
												<?php
		
		
$sql = "SELECT * FROM subjectstudens where id_reg='$id_r'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){
	?>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" dir=rtl>
                                  
<thead style="text-align:center;background-color:yollow;font-style: normal;font-family: Circular Std Book">
                                        <tr>
																				<th style="text-align: center;">اسم المقرر</th>

										<th style="text-align: center;">كود المقرر</th>
										

											<th style="text-align: center;">التيرم</th>
                                           	<th style="text-align: center;">دور</th>
											
											<th style="text-align: center;">العام الدراسي</th>
												<th style="text-align: center;">الدرجه</th>
													<th style="text-align: center;">الرمز</th>
													<th style="text-align: center;">النقاط</th>
																										<th style="text-align: center;">التقدير</th>

										<th style="text-align: center;">الحاله</th>

												 
										
											   
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
         <?php
										while($row = mysqli_fetch_array($result))
										{
										$id=$row["id"];
											$code=$row["code"];
											$term=$row["term"];
											$academicyear=$row["year"];
											$door=$row["door"];
											$degree=$row["degree"];
											$sucess=$row["sucess"];
											if($sucess==0)
											$sucess="لم ينجح";
											else if($sucess==1)
											$sucess="ناجح";
											if($door==1)
											$door="فبراير";
											else
											$door="يونيو";
											if($term==1)
											$term="الاول";
											else if($term==2)
											$term="الثاني";
											else
											$term="الثالث";
											if($academicyear==0)
													$academicyear="2019-2020";
													else if($academicyear==1)
												$academicyear="2020-2021";
												else if($academicyear==2)
												$academicyear="2021-2022";
													else if($academicyear==3)
												$academicyear="2022-2023";
													else if($academicyear==4)
												$academicyear="2023-2024";
												else if($academicyear==5)
												$academicyear="2024-2025";
												else if($academicyear==6)
												$academicyear="2025-2026";
												else if($academicyear==7)
												$academicyear="2026-2027";
												else if($academicyear==8)
												$academicyear="2027-2028";
												else if($academicyear==9)
												$academicyear="2028-2029";
												else if($academicyear==10)
												$academicyear="2029-2030";
												else if($academicyear==11)
												$academicyear="2030-2031";
												else if($academicyear==12)
												$academicyear="2031-2032";
												else if($academicyear==13)
												$academicyear="2032-2033";
												else if($academicyear==14)
												$academicyear="2033-2034";
												else if($academicyear==15)
												$academicyear="2034-2035";
												$symbol=$row["symbol"];
												$points=$row["points"];
												$gpa=$row["gpa"];
											$sql1 = "SELECT * FROM subject where code='$code'";
$result1 = mysqli_query($conn,$sql1);
										$row1 = mysqli_fetch_array($result1);
											$name=$row1["name"];
											$hours=$row1["hours"];
											
											if($id % 2 ==0 )
											{
												echo"<tr class='gradeC'>
												<td style='text-align: right;'>".$name."</td>
													<td style='text-align: right;'>".$code."</td>
													
													

<td style='text-align: right;'>".$term."</td>
<td style='text-align: right;'>".$door."</td>

<td style='text-align: right;'>".$academicyear."</td>

<td style='text-align: right;'>".$degree."</td>
<td style='text-align: right;'>".$symbol."</td>
<td style='text-align: right;'>".$points."</td>
<td style='text-align: right;'>".$gpa."</td>

<td style='text-align: right;'>".$sucess."</td>
												
												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													
													<td style='text-align: right;'>".$name."</td>
													<td style='text-align: right;'>".$code."</td>
													
													

<td style='text-align: right;'>".$term."</td>
<td style='text-align: right;'>".$door."</td>

<td style='text-align: right;'>".$academicyear."</td>

<td style='text-align: right;'>".$degree."</td>
<td style='text-align: right;'>".$symbol."</td>
<td style='text-align: right;'>".$points."</td>
<td style='text-align: right;'>".$gpa."</td>

<td style='text-align: right;'>".$sucess."</td>
														
												</tr>";
											}
										
										}


echo "</tbody> </table>";
}
else
echo '<h3 class="card-header" style="text-align:center;color:red;font-style: normal">لا يوجد بيانات لعرضها</h2>';


?>
                                        
                                    
                               
                            </div>  
                            </div>
							</div>
		
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