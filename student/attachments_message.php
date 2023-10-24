<!doctype html>
<?php
session_start();
if(!isset($_SESSION['id_user']))  
     header("Location:../index.php");  
if($_SESSION['type']=="admin") 
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
	    <link rel="stylesheet" href="assets/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable();
} );
$(document).ready(function() {
    $('#dataTables-example2').DataTable();
} );
</script>
	<script>

function ConfirmDelete()
{
  var x = confirm("هل انت متاكد من الحذف");
  if (x)
      return true;
  else
    return false;
}
function ConfirmDelete1()
{
  var x = confirm("هل انت متاكد من الحذف");
  if (x)
      return true;
  else
    return false;
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
                                    <?php include_once('menu.php');?>

        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
         <div class="nav-left-sidebar sidebar-dark">
                                         <?php include_once('header.php');?>

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
                                <h1 class="pageheader-title" style="text-align:center;font-size:35px;background-color: #f8d7da;border: 5px solid transparent;border-radius: .25rem;color: MediumSeaGreen;font-family: 'Circular Std Book';line-height: 40px;;font-weight: bold;" >صفحة المرفقات متعلقه بموضوع لباحث معين </h1>
                               
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
                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                     
		

 
					 
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
		<?php 
			include_once("dbconec.php");
			$order_id = $_GET['eid'];

			$sql = "SELECT *  FROM check_form where id='$order_id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$name=$row["name"];
$message_title=$row["message_title"];
$reserach_type=$row["reserach_type"];	
			?>
		         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                        
                          <div class="card" dir=rtl>
                           <h2 class="card-header" style="text-align:center;color:red;font-style: normal;font-family: 'Circular Std Book';font-weight: bold;">المرفقات للباحث <?php echo $name;?></h2>
 <h2 class="card-header" style="text-align:center;color:red;font-style: normal;font-family: 'Circular Std Book';font-weight: bold;">  الموضوع  <?php echo $message_title;?></h2>
 <h2 class="card-header" class="text-right"  style="text-align:center;color:red;font-style: normal;font-family: 'Circular Std Book';font-weight: bold;">درجة الرسالة :  <?php echo $reserach_type;?></h3>


							  <div class="table-responsive" dir=rtl>       
                                <table id="dataTables-example3" class="table table-striped table-bordered table-hover"  dir=rtl>
                                    <thead style="background-color: DodgerBlue;font-size:20px; ">
                                        <tr>
											<th style="text-align: center;">وصف المرفق</th>
										
                                            <th style="text-align: center;">تحميل</th>
											 		
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
									include_once("phpcode/dbconec.php");
			$sql = "SELECT *  FROM message_attachments where message_id='$order_id'";
$result = mysqli_query($conn,$sql);
if($result){



										while($row = mysqli_fetch_array($result))
										{
										$id=$row["id"];
										$description=$row['description'];
											$file_path=$row['file_path'];
											
											if($id % 2 ==0 )
											{
												echo"<tr class='gradeC'>
												<td style='text-align: center;'>".$description."</td>
													
		<td style='text-align: center;'><a href='downloadattach.php?file_id=".$id ."&file_name=".$file_path."'><i class='fa fa-download' style='font-size:25px;color:red'></a></td>


												
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td style='text-align: center;'>".$description."</td>
													
		<td style='text-align: center;'><a href='downloadattach.php?file_id=".$id ."&file_name=".$file_path."'><i class='fa fa-download' style='font-size:25px;color:red'></a></td>


												
												</tr>";
											}
										}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                            
                            </div>
                    </div>
					
					
					
					
					
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;text-align: right;" dir=rtl>
رفع مرفق جديد
</button>
					<br><br><br>

<!-- Modal -->
	

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="text-align: right;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" dir=rtl style="text-align">
        <h3 class="modal-title"  id="exampleModalCenterTitle"  style="text-align: right;font-size:22px;">صفحة رفع مرفق لباحث</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
  
 
 
       <div class="modal-body">
                                <form enctype="multipart/form-data" method="post" action="phpcode/adddmessageattachments.php" autocomplete="off">
          <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">أسم الباحث</label>
            <input type="text" class="form-control"  name="name"  value="<?php echo $name;?>"/>
          </div>
		  <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">وصف المرفق</label>
<select class="form-control form-control-sm"  name="description" required>
 <option value="استمارة فحص">استمارة فحص
</option>
                                                    <option value="الرد علي فحص موضوع">الرد علي فحص موضوع</option>
													 <option value="إقرار بأستلام الرساله">إقرار بأستلام الرساله</option>
													  <option value=" إقرار بتحرير إستمارة الفحص"> إقرار بتحرير إستمارة الفحص</option>
													
													 		 <option value="تعهد بتسليم مخطط الرساله قيد الدراسه">تعهد بتسليم مخطط الرساله قيد الدراسه</option>
													  <option value="ملخص الرسالة-قيد الدراسة">ملخص الرسالة-قيد الدراسة</option>
												<option value="الرسالة-مجازاة بعد المناقشة">الرسالة-مجازاة بعد المناقشة</option>
												<option value="خطاب موجد للدراسات العليا بتسليم الطالب  نسخه من رساله مجازاه">خطاب موجد للدراسات العليا بتسليم الطالب  نسخه من رساله مجازاه</option>
												<option value="ايصال أستلام رسالة">ايصال أستلام رسالة</option>
																								<option value="ايصال منح الدرجة">ايصال منح الدرجة</option>
																										<option value="إستمارة منح الدرجة">إستمارة منح الدرجة</option>


													
													</select>
													          </div>
          
		   
		   
		  
															 
		   
		  
		  
		  <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">المرفق
</label>
<input type="file" class="form-control"  name="file_name"/>

													          </div>
		  
 <input type="hidden" name="message_id" value="<?php echo $order_id;?>"/>
 
      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" style="text-align: right;font-size:22px;">Upload</button>
		  </form>
      </div>
    </div>
  </div>
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

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/jquery-3.5.1.js"></script>
</body>
 
</html>