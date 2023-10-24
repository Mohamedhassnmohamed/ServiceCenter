<!doctype html>
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
    <title> كليه التمريض جامعه اسيوط</title>
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
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"  ></i>لوائح الدرجات </a>
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
                                            <a class="nav-link" href="register.php">تحميل<span class="badge badge-secondary">New</span></a>
									</li> </ul></div> </li>
									
                            <li class="nav-item">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-44" aria-controls="submenu-44"><i class="fa fa-fw fa-rocket"></i>درجات المواد</a>
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
                                <h2 class="text-center" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 40px;    font-family: 'Circular Std Book'">درجه الدبلوم المهني</h2>
                                
                            </div>
                        </div>
                    </div>
					<hr/>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                       
                        <div class="row">
 <div class="page-section" id="overview">
                                <div class="row" dir=rtl>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                        <h2 class="text-right" style="background-color: #f8d7da;border: 3px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 30px;">قسم التمريض الباطني والجراحي</h2>
                                       <ul class="" >
                                            <li class="text-right">الدبلوم المهني في التمريض الباطني 
</li>
                                                <li class="text-right" >الدبلوم المهني في التمريض الجراحي</li>
                                                <li class="text-right" >الدبلوم المهني قي تمريض الاورام</li>
                                        </ul>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                        <h2 class="text-right" style="background-color: #f8d7da;border: 3px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 30px;">قسم تمريض الصحه النفسيه والعقليه</h2>
                                        <ul class="">
</li>
                                                <li class="text-right">الدبلوم المهني في تمريض الصحه النفسيه والعقليه</li>
                                                <li class="text-right">الدبلوم المهني في تمريض الادمان</li>
                                                
                                        </ul>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                        <h2 class="text-right" style="background-color: #f8d7da;border: 3px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 30px;">قسم تمريض صحة الأم وحديثي الولادة</h2>
                                        <ul class="">
                                            <li class="text-right">البلوم المهني في تمريض التوليد
</li>
                                                <li class="text-right">الدبلوم المهني في تمريض امراض النساء  وتنظيم الاسره</li>
                                                
                                        </ul>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                        <h2 class="text-right" style="background-color: #f8d7da;border: 3px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 30px;">قسم تمريض الأطفال</h2>
                                      <ul class="">
                                            <li class="text-right">الدبلوم المهني في تمريض الأطفال حديثي الولادة
</li>
                                                <li class="text-right">الدبلوم المهني في تمريض باطني أطفال</li>
                                                <li class="text-right">الدبلوم المهني في تمريض جراحة الأطفال </li>
                                                
                                        </ul>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                        <h2 class="text-right" style="background-color: #f8d7da;border: 3px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 30px;">قسم تمريض صحة الأسرة و المجتمع </h2>
                                       <ul class="">
                                            <li class="text-right">الدبلوم المهني في تمريض صحة الأسرة 
</li>
                                                <li class="text-right">الدبلوم المهني في تمريض الصحة المدرسية</li>
                                                <li class="text-right">الدبلوم المهني في تمريض الصحة المهنية </li>
                                                
                                        </ul>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                        <h2 class="text-right" style="background-color: #f8d7da;border: 3px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 30px;">قسم تمريض المسنين  </h2>
                                        <ul class="">
                                            <li class="text-right">الدبلوم  المهني في التمريض الباطني للمسنين
</li>
                                                
                                        </ul>
                                    </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                        <h2 class="text-right" style="background-color: #f8d7da;border: 3px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 30px;">قسم تمريض العناية الحرجة و الطوارئ </h2>
                                       <ul class="">
                                            <li class="text-right">الدبلوم المنهى في تمريض العناية المركزة  
</li>
                                                
                                        </ul>
                                    </div>
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                        <h2 class="text-right" style="background-color: #f8d7da;border: 3px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 30px;"> قسم إدارة التمريض</h2>
                                       <ul class="">
                                            <li class="text-right">الدبلوم المهني في إدارة التمريض  
</li>
                                                <li class="text-right">الدبلوم المهني في إدارة الجودة </li>
                                                
                                        </ul>
                                    </div>
									<hr/>
									<br><br><br>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                        <h2 class="text-right" style="background-color: #f8d7da;border: 3px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 30px;"> شروط القيد	
</h2>
                                       <ul class="">
                                            <li class="text-right"> أن يكون الطالب حاصل على البكالوريوس في التمريض من إحدى جامعات جمهورية مصر العربية أو على درجة معادلة لها من كلية أو معهد علمي معترف به من المجلس الأعلى للجامعات  بتقدير عام "مقبول"على الأقل وتقدير "مقبول " في مادة التخصص								
								
 
</li>
                                                <li class="text-right"> أن يكون قد أمضي السنة التدريبية (الامتياز)</li>
												                                                <li class="text-right"> أن يكون قد أمضى سنة في ممارسة مهنة التمريض في إحدى المستشفيات العامة أو المراكز العلاجية (في التخصص الذي يسجل به ) </li>

                                                <li class="text-right"> أن يستوفى الطالب شروط القسم العلمي وأن يحصل على موافقة مجلس القسم المختص ومجلس الكلية</li>

                                                <li class="text-right">موافقة جهة العمل على التفرغ أثناء مدة الدراسة التمهيدية في حالة الطلبة المقيدون من خارج الكلية </li>
												                                                <li class="text-right">يتم القيد للدبلوم في شهر يوليو وتبدأ الدراسة في بداية الأسبوع الثالث من شهر أكتوبر ومدة الدراسة فصلين دارسين </li>

                                                

                                                
                                        </ul>
                                    </div>
									<hr/>
									<br><br><br>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                        <h2 class="text-right" style="background-color: #f8d7da;border: 3px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 30px;"> الأوراق المطلوبة للقيد	

</h2>
                                       <ul class="">
                                            <li class="text-right"> استمارة القيد وبيان حالة "توجد بإدارة الدراسات العليا"

 
</li>
                                                <li class="text-right"> شهادة البكالوريوس
</li>
												                                                <li class="text-right">  شهادة التقديرات للأربع سنوات
</li>

                                                <li class="text-right">شهادة الامتياز
</li>

                                                <li class="text-right">شهادة عدم توقيع أي جزاء تأديبي طوال فترة الدارسة                           
</li>
												                                                <li class="text-right">شهادة ميلاد                         
</li>

                                                												                                                <li class="text-right">شهادةICDL  (في حالة عدم دراسة مادة الحاسب الآلي في مرحلة البكالوريوس )                    
 </li>
												                                                <li class="text-right">شهادة مستوى في اللغة الإنجليزية من قسم اللغة الإنجليزية بكلية الأداب جامعة أسيوط                 
 </li>
												                                                <li class="text-right">شهادة إنهاء الخدمة العسكرية أو الإعفاء منها                   
 </li>
												                                                <li class="text-right">موافقة قسم التخصص بالكلية          
 </li>
												                                                <li class="text-right">عدد (4) صور شخصية                  
</li>
												                                                <li class="text-right">طابع الدراسات العليا100ج      
 </li>
												                                                <li class="text-right">صورة بطاقة الرقم القومي بتاريخ جديد معتمدة من جهة العمل
</li>
												                                                <li class="text-right">موافقة جهة العمل مختومة
 </li>
  <li class="text-right">شهادة خبرة (سنة في ممارسة مهنة التمريض في إحدى المستشفيات العامة أو المراكز العلاجية في التخصص المسجل به )

 </li>
  <li class="text-right">التفرغ للدراسة بالكلية لمدة عام على الأقل

 </li>


                                                
                                        </ul>
                                    </div>
									
                                </div>
                            </div>                         
					
					 
							    
					 
							
							
							
							
							
							
							
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