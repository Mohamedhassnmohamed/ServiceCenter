
<!doctype html>
<?php
session_start();

      if(!isset($_SESSION['id_user'])) 
      header("Location:../index.php");  
include_once("phpcode/dbconec.php");

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
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-22" aria-controls="submenu-22"><i class="fa fa-fw fa-rocket"></i>استماره القيد-استماره تسجيل المواد</a>
                                <div id="submenu-22" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
									<li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="register.php">تحميل</a>
									</li> </ul></div> </li>
									
							<li class="nav-item">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-44" aria-controls="submenu-44"><i class="fa fa-fw fa-rocket"></i>درجات المواد</a>
                                <div id="submenu-44" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
									<li class="nav-item"  style="text-align: right;">
                                            <a class="nav-link" href="examdegree.php">درجات المواد<span class="badge badge-secondary">New</span></a>
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
                                <h2 class="text-center" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 40px;    font-family: 'Circular Std Book'">صفحه تعديل بيانات طالب</h2>
                                
                            </div>
                        </div>
                    </div>
					<hr/>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                       
                        <div class="row">
 <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" dir=rtl>
                                <form action="phpcode/register.php" method="post" enctype="multipart/form-data">
                                <div class="card" dir=rtl>
                                    <h5 class="card-header" class="text-right" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">اسم الطالب باللغه الانجليزيه</h5>
                                    <div class="card-body" style="text-align: right;">
                                        
                                            <div class="form-group" dir=rtl style="text-align: right;">
                                                <label for="inputText3" class="col-form-label"> اسم الطالب(*)</label>
                                                <input id="inputText3" type="text" name="ne" value="<?php echo $row['ne'];?>" class="form-control" >
                                            </div>
											<div class="form-group" >
                                                <label for="inputText3" class="col-form-label" >اسم الاب(*)</label>
                                                <input id="inputText3" type="text" name="pe" value="<?php echo $row['pe'];?>" class="form-control" >
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label" >اسم الجد(*)</label>
                                                <input id="inputText3" type="text"  name="ge" value="<?php echo $row['ge'];?>"class="form-control" >
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label" >اللقب(*)</label>
                                                <input id="inputText3" type="text" name="te" value="<?php echo $row['te'];?>" class="form-control" >
                                            </div>
											
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">الاسم بالكامل(*)</label>
                                                <input id="inputText3" type="text" name="full_e" value="<?php echo $row['full_e'];?>" class="form-control" >
                                            </div>
                                            
                                            
                                       
                                    </div>
                                    
                                </div>
								</div>
								 <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" dir=rtl>
								 <div class="card" style="text-align: right;">
                                    <h5 class="card-header" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">اسم الطالب باللغه العربيه</h5>
                                    <div class="card-body">
                                        
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">اسم الطالب(*)</label>
                                                <input id="inputText3" type="text"   name="na" value="<?php echo $row['na'];?>" class="form-control" >
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">اسم الاب(*)</label>
                                                <input id="inputText3" type="text" name="pa" value="<?php echo $row['pa'];?>"  class="form-control" >
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">اسم الجد(*)</label>
                                                <input id="inputText3" type="text"  name="ga" value="<?php echo $row['ga'];?>" class="form-control" >
                                            </div>
											
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">اللقب(*)</label>
                                                <input id="inputText3" type="text" name="ta" class="form-control" value="<?php echo $row['ta'];?>"  >
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">اسم الام</label>
                                                <input id="inputText3" type="text" name="ma" value="<?php echo $row['ma'];?>"  class="form-control" >
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">(*)الاسم بالكامل</label>
                                                <input id="inputText3" type="text" name="full_a" class="form-control" value="<?php echo $row['full_a'];?>" >
                                            </div>
                                            
                                       
                                    </div>
                                    
                                </div>
								</div>
						 <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" >
								 <div class="card" style="text-align: right;">
								 									 <h5 class="card-header" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">بيانات شخصيه</h5>

                                     <div class="card-body">
                                        <div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">وافد
												</label>
<select class="form-control form-control-sm" name="external" onchange="show44(this)" required>
	<option value="0" selected>لا</option>

                                                    <option value="1">نعم </option>
												
													
                                                </select>                                               </div>
										 
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">(*)النوع</label>
<select class="form-control form-control-sm" name="type" onchange="show1(this)" required>
        <option value="" disabled 
		>----------------اختر قيمه---------------</option>

                                                    <option value="male">ذكر</option>
													<option value="female">انثي</option>
                                                </select>                                            </div>
											
											<div class="form-group">
                                                <label for="inputText3" name="charasitic_type" class="col-form-label">(*)انوع تحقق الشخصيه</label>
<select class="form-control form-control-sm" name="charasitic_type" required>
        <option value="" disabled >----------------اختر قيمه---------------</option>

                                                   <option value="national">رقم قومي</option>
													<option value="passport">جواز سفر</option>
												
                                                </select>                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label" id="l1">(*)رقم تحقق الشخصيه</label>
                                                <input id="inputText3" name="charasitic_number"  type="text" class="form-control" required>
                                            </div>
											
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">(*)تاريخ الاصدار</label>
                                                <input id="inputText3" name="charasitic_date" type="date" class="form-control" required>
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">جهه الاصدار</label>
                                                <input id="inputText3" name="charasitic_region" type="text" class="form-control" >
                                            </div>
                                            <div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">(*)الحاله الاجتماعيه</label>
<select class="form-control form-control-sm" style="text-align: right;" name="status" required>
        <option value="" disabled >----------------اختر قيمه---------------</option>

                                                  <option style="text-align: right;" value="single"> اعزب</option>
													<option style="text-align: right;" value="married">متزوج</option>
                                                </select>                                               </div>
                                            <div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">حاله العمل</label>
<select class="form-control form-control-sm"  name="job_status" style="text-align: right;" onchange="show3(this)">
        <option value="" disabled selected>----------------اختر قيمه---------------</option>

                                                    <option value="work">يعمل</option>
													<option value="notwork">لا يعمل</option>
                                                </select>                                               </div>
												<div class="form-group" id="joba">
                                                <label for="inputText3" class="col-form-label">الوظيفه بالكامل</label>
                                                <input id="inputText3" name="job_title" type="text" class="form-control" >
                                            </div>
												
											<div class="form-group" id="joba">
                                                <label for="inputText3" class="col-form-label">عنوان جهه العمل بالكامل</label>
                                                <input id="inputText3" name="job_address" type="text" class="form-control" required>
                                            </div>
											
											 <div class="form-group">
                                                <label for="inputText3" class="col-form-label" required>(*)الجنسيه</label>
												<input id="inputText3" name="nationality" type="text" class="form-control" >
                                          </div>
												<div class="form-group">
                                                <label for="inputText3" class="col-form-label">(*)تاريخ الميلاد</label>
                                                <input id="inputText3" name="datebirth" type="date" class="form-control" required>
                                            </div>
											 <div class="form-group" style="text-align: right;" id="div1">
                                                <label for="inputText3" class="col-form-label">الموقف من التجنيد الذكور
												</label>
<select class="form-control form-control-sm" name="miliraty_status" >
        <option value="0" selected >----------------اختر قيمه---------------</option> 
		

                                                    <option value="out">اعفاء </option>
													<option value="delay">تاجيل</option>
													<option value="perform">ادي الخدمه</option>
                                                </select>        
												</div>
                                       
                                    </div>
                                </div>
                            </div>   
 <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" dir=rtl>
								 <div class="card" style="text-align: right;">
                       <h5 class="card-header" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">العنوان الدائم</h5>

                                    <div class="card-body">
                                        
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">(*)رقم المنزل</label>
                                                <input id="inputText3" name="house_number" type="text" class="form-control" required>
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">(*)الشارع</label>
                                                <input id="inputText3" type="text" name="street" class="form-control" required>
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">(*)المحافظه</label>
                                                <input id="inputText3" type="text" name="mohafza"  class="form-control" required>
                                            </div>
											
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">القسم - الحي -القريه</label>
                                                <input id="inputText3" type="text" name="quesm" class="form-control" >
                                            </div>
											
											

                                   
                                    
                                </div>

                                    <div class="card-body">
                                        
                                            
											<h5 class="card-header" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">وسيله الاتصال</h5>
											 <div class="form-group" dir=rtl>
                                                <label for="inputText3" class="col-form-label" class="text-right">وسيله الاتصال(*)</label>
												<select class="form-control form-control-sm" name="contact_type" required>
												        <option value="" disabled selected>----------------اختر قيمه---------------</option>

                                                     <option value="phone" selected>رقم تليفون</option>
												
                                                </select>             
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label" class="text-right">رقم التليفون</label>
                                                <input id="inputText3" type="text" class="form-control" name="contact_value" required>
                                            </div>
											
											

                                   
                                    
                                </div>
								</div>	
								</div>
									
   <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" >
                                <div class="card" style="text-align: right;">

                                  
                                   
									 <h5 class="card-header" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">الدرجه العلميه المراد التسجيل بها</h5>
                                    <div class="card-body" style="text-align: right;">
                                        
                                           
											<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">(*)كليه
												</label>
<select class="form-control form-control-sm" name="faculty">
                                                    <option value="التمريض" selected> التمريض</option>
													
                                                </select>                                               </div>
												<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">(*)اللائحه
												</label>
<select class="form-control form-control-sm" name="regulation">

                                                                                                       <option value="2019" selected>2019</option>

                                                </select>                                               </div>
												<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">(*)الدرجات العلميه
												</label>
<select class="form-control form-control-sm" name="diploma_type">
                                                    <option value="2">ماجستير</option>
													
                                                </select>                                               </div>
												<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">(*)القسم -الشعبه
												</label>
<select class="form-control form-control-sm"  name="diploma_department"onchange="show2(this)" required>
        <option value="" disabled selected>----------------اختر قيمه---------------</option>
 
                                                    <option value="2.1">قسم التمريض الباطني والجراحه</option>
													<option value="2.2">قسم تمريض الصحه النفسيه و العقليه</option>
													<option value="2.3">قسم تمريض صحه الام والولاده</option>
													<option value="2.4">قسم تمريض الاطفال</option>
													<option value="2.5">قسم تمريض صحه الاسره والمجتمع</option>
													<option value="2.6">قسم تمريض المسنين</option>
													<option value="2.7">قسم تمريض العنايه الحرجه  والطواري</option>
														
															<option value="2.8">قسم اداره التمريض</option>
                                                </select>                                               </div>
												<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">(*)الشهادات الممنوحه للاقسام والشعب
												</label>
<select class="form-control form-control-sm" id="s1" name="diploma_department_type" required>
        <option value="" disabled selected>----------------اختر قيمه---------------</option>

                                               
												
                                                </select>                                               </div>
												
												
											<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">(*)العام الدراسي
												</label>
<select class="form-control form-control-sm" name="academicyear">
        <option value="" disabled selected>----------------اختر قيمه---------------</option>

                                                   
                                                    <option value="1">2020-2021</option>
													<option value="2">2021-2022</option>
													<option value="3">2022-2023</option>
													<option value="4">2023-2024</option>
													<option value="5">2024-2025</option>
													<option value="6">2025-2026</option>
													<option value="7">2026-2027</option>
															<option value="8">2027-2028</option>
																<option value="9">2028-2029</option>
																	<option value="10">2029-2030</option>
																	<option value="11">2030-2031</option>
													<option value="12">2031-2032</option>
															<option value="13">2032-2033</option>
																<option value="14">2033-2034</option>
																	<option value="15">2034-2035</option>
                                                </select>                                               </div>
												
												


			 <h4 style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">الرجاء تحميل شهاده المؤهل</h4>

										 <input type="file" id="myFile"  name="qualified_degree" required>
<h4 style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">الرجاء تحميل شهاده التقديرات</h4>

										 <input type="file" id="myFile"  name="certificate_degree" required>


</h4>
                                          <h4  id="p1" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">شهادة الخبرة (سنة في التخصص المسجل به في إحدى المستشفيات العامة أو المراكز العلاجية)</h4>

										 <input type="file" id="d1" name="experience_certificate" required >


                                            
                                       
                                    </div>
                                    
                                </div>
								</div>
					
					 <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" >
                                <div class="card" style="text-align: right;">

                                  
                                   
									 <h5 class="card-header" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">بيانات المؤهل (المؤهل المتقدم به)</h5>
                                      <div class="card-body" style="text-align: right;">
                                        
                                           
											<div class="form-group" style="text-align: right;">
                                                <label for="inputText3"  class="col-form-label">(*)الدوله
												</label>
                                                <input id="inputText3" type="text"  name="degree_country" class="form-control" required>

                                               </div>
												<div class="form-group" style="text-align: right;">
                                                <label for="inputText3"  class="col-form-label">(*)جامعه
												</label>
                                                <input id="inputText3" type="text" name="degree_university" class="form-control" required>

                                         </div>
												<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" name="degree_university"  class="col-form-label">(*)كليه
												</label>
                                                <input id="inputText3" type="text" name="degree_faculty" class="form-control" required>

                                              </div>
												<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">(*)نوع المؤهل
												</label>
												<select class="form-control form-control-sm" name="qualified_type" onchange="show44(this)" required>
	<option value="بكالوريوس" selected>بكالوريوس</option>

                                                  
												
													
                                                </select>  
                                               

                                               </div>
												<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">(*)المؤهل
												</label>
                                                <input id="inputText3" name="qualified" type="text" class="form-control" required>

                                              </div>
												<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">(*)التخصص
												</label>
												 <input id="inputText3" name="speciality" type="text" class="form-control" required>
                                           </div>
												<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">(*)سنه المؤهل
												</label>
						 <input id="inputText3" name="degree_year" type="text" class="form-control" required>

                                               </div>
												<div class="form-group">
                                                <label for="inputText3" class="col-form-label" class="text-right">(*)تاريخ الحصول عليه</label>
                                                <input id="inputText3" name="degree_date" type="date" class="form-control" required>
                                            </div>
											<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">نوع الدراسه
												</label>
<select class="form-control form-control-sm" name="study_type">
        <option value="" disabled selected>----------------اختر قيمه---------------</option>

                                                    <option value="years">سنوات دراسيه</option>
													<option value="credit">ساعات معتمده</option>
                                                </select>                                               </div>
												<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">التقدير
												</label>
<select class="form-control form-control-sm" name="gpa">
        <option value="0"  selected>----------------اختر قيمه---------------</option>

                                                    <option value="مقبول">مقبول</option>
													<option value="جيد">جيد</option>
													<option value="جيد جدا">جيد جدا</option>
													<option value="امتياز">امتياز</option>
                                                </select>                                               </div>
												<div class="form-group">
                                                <label for="inputText3" class="col-form-label" class="text-right">النسبه المئويه-المعدل التراكمي</label>
                                                <input id="inputText3" name="percentage" type="text" class="form-control" >
                                            </div>
											<div class="form-group" style="text-align: right;">
                                                <label for="inputText3" class="col-form-label">ترشيح من وزاره الصحه
												</label>
<select class="form-control form-control-sm" name="nomination">

<option value="1">لا</option>
                                                    <option value="2">نعم من الداخل </option>
													<option value="3">نعم من الخارج</option>
													
                                                </select>                                               </div>
												
                                            
                                            
                                       
                                    </div>
                                    
                                </div>
								</div>	
					
							    
					<div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                   
                                                    <button class="btn btn-space btn-secondary" style="height:50px; width:100px">الغاء</button>
													 <button type="submit" class="btn btn-space btn-primary" style="height:50px; width:100px">تسجيل</button>
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