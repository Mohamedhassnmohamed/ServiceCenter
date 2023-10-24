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
                                <h1 class="pageheader-title" style="text-align:center;font-size:35px;background-color: #f8d7da;border: 5px solid transparent;border-radius: .25rem;color: MediumSeaGreen;font-family: 'Circular Std Book';line-height: 40px;;font-weight: bold;" >صفحة عرض الخدمات- الطباعه والنسخ</h1>
                               
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
		
		         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                        
                          <div class="card" dir=rtl>
     <h1 class="card-header" style="text-align:center;color:red;font-style: normal;font-family: 'Circular Std Book';font-weight: bold;">كافة الخدمات - الطباعه والنسخ</h1>
                              <div class="table-responsive" dir=rtl>       
                                <table id="dataTables-example" class="table table-striped table-bordered table-hover"  dir=rtl>
                                    <thead style="background-color: DodgerBlue;font-size:17px; ">
                                        <tr>
											<th style="text-align: center;">الأسم</th>
										<th style="text-align: center;">الكلية
</th>

<th style="text-align: center;">تاريخ الطلب</th>

                                            <th style="text-align: center;">تفاصيل الموضوع</th>
											<th style="text-align: center;">تحميل أستمارة طلب الحصول علي خدمة</th>

<th style="text-align: center;">المرفقات</th>
<th style="text-align: center;">تم تنفيذ الخدمة</th>







                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
								
									include_once("dbconec.php");
$sql = "SELECT check_form.name,check_form.faculty,services.dateservices,services.id,services.id as idSer,check_form.id as id_message from check_form,services where check_form.id=services.id_message and services.is_finished=0 and services.description=6;
";																																							
 
$result = mysqli_query($conn,$sql);
if($result){



										while($row = mysqli_fetch_array($result))
										{
										$id_message=$row["id_message"];
											$id_serveces=$row["idSer"];
										$name=$row["name"];
											$faculty=$row["faculty"];
											$dateservices=$row["dateservices"];
											if($id_serveces % 2 ==0 )
											{
												echo"<tr class='gradeC'>
												<td style='text-align: center;'>".$name."</td>
												<td style='text-align: center;'>".$faculty."</td>
													<td style='text-align: center;'>".$dateservices."</td>
													";
													 														  
													echo "<td style='text-align: center;'><a href=showdetails2.php?eid=".$id_serveces ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> التفاصيل</button></td>
													<td style='text-align: center;'><a href=downloadWord.php?eid=".$id_serveces ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> تحميل</button></td>
													<td style='text-align: center;'><a href=attachments_message.php?eid=".$id_message ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> المرفقات</button></td>
													<td style='text-align: center;'><a href=phpcode/updateserveces.php?eid=".$id_serveces." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> تم تنفيذ الطلب</button></td>

													</tr>";	
											}
											else
											{
												echo"<tr class='gradeC'>
												<td style='text-align: center;'>".$name."</td>
												<td style='text-align: center;'>".$faculty."</td>
													<td style='text-align: center;'>".$dateservices."</td>
												
													
													";
													 														  
													echo "<td style='text-align: center;'><a href=showdetails2.php?eid=".$id_serveces ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> التفاصيل</button></td>
													<td style='text-align: center;'><a href=downloadWord.php?eid=".$id_serveces ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> تحميل</button></td>
													<td style='text-align: center;'><a href=attachments_message.php?eid=".$id_message ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> المرفقات</button></td>
													<td style='text-align: center;'><a href=phpcode/updateserveces.php?eid=".$id_serveces ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> تم تنفيذ الطلب</button></td>

													</tr>";	
														
											}
										}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                            
                            </div>
                    </div>
					
					
					
					
					
		<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1" style="text-align: right;" dir=rtl>
إضافة تقرير جديد
</button>-->
					<br><br><br>

<!-- Modal -->
	

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="text-align: right;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" dir=rtl style="text-align">
        <h3 class="modal-title"  id="exampleModalCenterTitle"  style="text-align: right;color:red;font-weight: bold;">صفحة لإضافة التقارير</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
  </div>
</div>
   </div>
    


<!-- Modal -->
	

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="text-align: right;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" dir=rtl style="text-align">
        <h3 class="modal-title"  id="exampleModalCenterTitle"  style="text-align: right;color:red;font-weight: bold;">اضافه قسم جديد
</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                                <form enctype="multipart/form-data" method="post" action="phpcode/adddepartment.php" id="myfrom2" autocomplete="off">
          <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;color:red">أسم القسم</label>
            <input type="text" class="form-control"  name="name"  />
          </div>
         
		   
		  
      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" style="height:40px; width:90px">اضافه</button>
		  </form>
      </div>
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