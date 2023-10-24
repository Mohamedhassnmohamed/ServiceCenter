<!doctype html>

<?php
session_start();

include_once("phpcode/dbconec.php");

      if(!isset($_SESSION['id_user'])) 
      header("Location:../index.php");  
$id_user=$_SESSION["id_user"];
	  
        

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
                                <h2 class="text-center" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 40px;    font-family: 'Circular Std Book'">إستمارة فحص موضوع</h2>
                                
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
                                <form action="phpcode/registertopic.php" method="post" enctype="multipart/form-data" autocomplete="off" >
                                <div class="card" dir=rtl>
                                    <div class="card-body" style="text-align: right;">
                                        
                                            <div class="form-group" dir=rtl style="text-align: right;">
                                                <label for="inputText3" class="col-form-label"> الأسم(*)</label>
                                                <input id="inputText3" type="text" name="name" class="form-control" required>
                                            </div>
											 <div class="form-group" dir=rtl style="text-align: right;">
                                                <label for="inputText3" class="col-form-label"> الرقم القومي</label>
                                                <input id="inputText3" type="text" name="nationalid" maxlength="14" class="form-control" required >
                                            </div>
											<div class="form-group" >
                                                <label for="inputText3" class="col-form-label" >الوظيفة</label>
                                                <input id="inputText3" type="text" name="job" class="form-control" required>
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label" >محل العمل</label>
                                                <input id="inputText3" type="text"  name="job_place"class="form-control">
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label" >الموبايل</label>
                                                <input id="inputText3" type="text" name="phone" maxlength="11" class="form-control" required>
                                            </div>
											 <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الكلية(*)</label>
<select class="form-control form-control-sm"  name="faculty" required>
<?php  include_once("phpcode/dbconec.php");
									$sql = "SELECT * FROM faculty order by id";
$result = mysqli_query($conn,$sql);
if($result){
while($row = mysqli_fetch_array($result))
										{
										
										$name=$row['name'];   

                                                    echo '<option value="'.$name .'">'.$name .'</option>';
													}}
													?>
													</select>

													          </div>
															  
															  
													<div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">نوع الدرجة</label>
<select class="form-control form-control-sm"  name="research_type" required>
<option value="ماجستير">ماجستير</option>
<option value="دكتوراه">دكتوراه</option>
													</select>

													          </div>		  
											
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">القسم</label>
                                                <input id="inputText3" type="text" name="quesm" class="form-control" required>
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">الشعبة</label>
                                                <input id="inputText3" type="text" name="shoaba" class="form-control" >
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">التخصص</label>
                                                <input id="inputText3" type="text" name="specilisation" class="form-control" >
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">البريد الالكتروني</label>
                                                <input id="inputText3" type="email" name="email" class="form-control" >
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">العام الدراسي</label>
                                                <input id="inputText3" type="text" name="year" class="form-control" >
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">المشرف</label>
                                                <input id="inputText3" type="text" name="supervisor" class="form-control" >
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">المشرف المشارك</label>
                                                <input id="inputText3" type="text" name="Co_supervisor" class="form-control" >
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">عنوان المخطط</label>
                                                <textarea id="inputText3" type="text" name="message_title" class="form-control" required></textarea>
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">الموضوع العريض للمخطط</label>
                                                <textarea id="inputText3"  name="Broad_topic" class="form-control" ></textarea>
                                            </div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">الموضوعات الدقيقة(الكلمات المفتاحية)</label>
                                                 <textarea id="inputText3"  name="keyWords" class="form-control" ></textarea>
                                            </div>
                                            
                                       
                                    </div>
                                    
                                </div>
								</div>
								 
						  
 

                                     
								</div>	
								</div>
									

						
					
				<div class="col-sm-6 pl-0">
                                                <p class="text-right">
        <input  style="text-align: right;" name="id_user" type="hidden" class="form-control" value="<?php echo $id_user; ?>">

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