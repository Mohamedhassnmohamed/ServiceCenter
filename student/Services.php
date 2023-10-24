<!doctype html>

<?php
session_start();

include_once("phpcode/dbconec.php");

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
                                <h2 class="text-center" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 40px;    font-family: 'Circular Std Book'">مركز الخدمات العامة للرسائل العلمية</h2>
                                
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
                                <form action="phpcode/registeServices.php" method="post" enctype="multipart/form-data" autocomplete="off" >
                                <div class="card" dir=rtl>
								 <div class="form-group" dir=rtl style="text-align: right;">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">عنوان الرسالة</label>
<select class="form-control form-control-sm"  name="id_message" required>

<?php  include_once("phpcode/dbconec.php");
$id_user=$_SESSION["id_user"];
$sql = "SELECT * from check_form  where id_user='$id_user'";
$result = mysqli_query($conn,$sql);
if($result){
while($row = mysqli_fetch_array($result))
										{
										$id=$row["id"];
										$name=$row['message_title'];   

                                                    echo '<option value="'.$id .'">'.$name .'</option>';
													}
													
													?>
													</select>

													          </div>
                                    <div class="card-body" style="text-align: right;">
                                        
                                            
										<div class="form-group" >
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الخدمات المطلوب تقديمها :</label>
            <br>
            <input type="checkbox" id="myCheckbox" name="Services[]" value="1" >
            <label for="myCheckbox">البحث عن المصادر</label>
            <br>
            <input type="checkbox" id="write" name="Services[]" value="2" >
            <label for="write">الكتابة والتنسيق</label>
            <br>
            <input type="checkbox" id="graphic" name="Services[]" value="3" >
            <label for="graphic">الجرافيك</label>
            <br>
            <input type="checkbox" id="analysis" name="Services[]" value="4">
            <label for="analysis">التحليل الاحصائي</label>
            <br>
            <input type="checkbox" id="cover" name="Services[]" value="5" >
            <label for="cover">التجليد</label>
            <br>
            <input type="checkbox" id="print" name="Services[]" value="6" >
            <label for="print">الطباعه والنسخ</label>
            <br>
            <input type="checkbox" id="language" name="Services[]" value="7" >
            <label > التصحيح والمراجعة اللغوية </label>
            <br>
            <input type="checkbox" id="revesion"name="Services[]" value="8" >
            <label for="revesion">المراجعة علي القواعد</label>
            <br>

													          </div>	
											
											
											
															  
															  
															  
											
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">خدمات إضافية تذكر</label>
                                                <input id="inputText3" type="text" name="extra" class="form-control" >
                                            </div>
											
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">تليفون المشرف</label>
                                                <input id="inputText3" type="text"  maxlength="11" name="SUP_Phone" class="form-control" >
                                            </div>
											<div class="form-group"dir=rtl style="text-align: right;font-size:24px;">
						                                <h2 class="" style="text-align:right;background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 40px;    font-family: 'Circular Std Book'">تعليمات هامه</h2>

<label for="message-text" class="col-form-label" style="text-align: right;font-size:20px;">1-المبلغ المحصل من الباحث مقابل الخدمه هو تقدير مبدئى وليس نهائى .</label>

<label for="message-text" class="col-form-label" style="text-align: right;font-size:20px;">2-يعاد تقدير الرسوم ويتم سداد قيمتها طبقا لأمر دفع نقديه صادر من المركز.</label>

<label for="message-text" class="col-form-label" style="text-align: right;font-size:20px;">3-وفى حاله طلب خدمات إضافيه يتم إستيفاء طلب اخر للخدمات المطلوبه وتقدر رسوم جديده لها.</label>											

<label for="message-text" class="col-form-label" style="text-align: right;font-size:20px;">4-فى حاله تحليل إحصائى يتم تسليم عينات لا تقل عن 30 لضمان سلامه التحليل الاحصائي.</label>                                        
											
    
					</div>
											
                                       
                                    </div>
                                    
                                </div>
								</div>
								 
						  
 

                                     
								</div>	
								</div>
									
<?php 
}
													
													else
													{
													           echo ' <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">لأ يحق لك طلب خدمة طالما لم تقم بتسجيل الرسالة علي الموقع</label>';
	
													}
													?>
													
				<div class="col-sm-6 pl-0">
                                                <p class="text-right">
        <input  style="text-align: right;" name="id_user" type="hidden" class="form-control" value="<?php echo $id_user; ?>">

                                                    <button class="btn btn-space btn-secondary" style="height:50px; width:100px">الغاء</button>
													 <button type="submit" class="btn btn-space btn-primary" style="height:50px; width:100px">تسجيل الطلب</button>
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