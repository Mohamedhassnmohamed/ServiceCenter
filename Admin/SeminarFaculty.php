<!doctype html>
<?php
session_start();
if(!isset($_SESSION['email'])&&!isset($_SESSION['password']))  
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
                                <h2 class="pageheader-title" style="text-align:center;background-color: #f8d7da;border: 5px solid transparent;border-radius: .25rem;color: #721c24;    font-family: 'Circular Std Book';line-height: 40px;;font-weight: bold;" >صفحة تقارير كلية معينة</h2>
                               
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
			<?php 
			include_once("dbconec.php");
			$id_user=$_GET["id_user"];
			$sql = "SELECT * FROM user where id='$id_user'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$faculty1=$row["faculty"];


$sql = "SELECT count(*) as c FROM seminars where id_user='$id_user'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$count=$row["c"];


			?>
        </div>
		
		         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                        
                          <div class="card" dir=rtl>
                            <h3 class="card-header" style="text-align:center;color:red;font-style: normal;font-family: 'Circular Std Book';font-weight: bold;">ندوات كلية <?php echo $faculty1;?> العدد الاجمالي :<?php echo $count;?></h2>
                              <div class="table-responsive" dir=rtl>       
                                    <table id="dataTables-example" class="table table-striped table-bordered table-hover"  dir=rtl>
                                    <thead style="background-color: DodgerBlue;font-size:17px; ">
                                        <tr>
											<th style="text-align: center;">الكلية</th>
										<th style="text-align: center;">عنوان الندوة
</th>
<th style="text-align: center;">مكان الانعقاد</th>
<th style="text-align: center;">التاريخ</th>
<th style="text-align: center;">صور التوثيق</th>
                                            <th style="text-align: center;">التفاصيل</th>
											  








                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
									$faculty=$_SESSION['faculty'];
									include_once("phpcode/dbconec.php");
$sql = "SELECT seminars.`id` as sid,seminars.`id_user`,seminars.title,seminars.lectureres,seminars.`guests`,seminars.`Target_group`,seminars.`seminar_Place`,seminars.date,seminars.number_participates,seminars.participating_party,seminars.seminar_objectives,seminars.connection_with,seminars.recommedation,seminars.Images_Committee,user.faculty FROM seminars,user where user.id=seminars.id_user and seminars.id_user='$id_user' order by seminars.id desc";
$result = mysqli_query($conn,$sql);
if($result){



										while($row = mysqli_fetch_array($result))
										{
										$id=$row["sid"];
										$faculty=$row["faculty"];
											$title = $row['title'];
										$lectureres = $row['lectureres'];
										$guests = $row['guests'];
										$Target_group = $row['Target_group'];
										
										$seminar_Place = $row['seminar_Place'];
										$date = $row['date'];
										$number_participates = $row['number_participates'];
										$participating_party = $row['participating_party'];
										$seminar_objectives = $row['seminar_objectives'];
										$connection_with = $row['connection_with'];
										$recommedation = $row['recommedation'];
										$Images_Committee = $row['Images_Committee'];
											
											if($id % 2 ==0 )
											{
												echo"<tr class='gradeC'>
												<td style='text-align: center;'>".$faculty."</td>
												<td style='text-align: center;'>".$title."</td>
												<td style='text-align: center;'>".$seminar_Place."</td>
													<td style='text-align: center;'>".$date."</td>
													
													";
													  if($Images_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='downloadSeminar.php?file_id=".$id ."&file_name=".$Images_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";														  
													echo "<td style='text-align: center;'><a href=showseminardetails.php?eid=".$id ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> التفاصيل</button></td>

													</tr>";	
											}
											else
											{
												echo"<tr class='gradeU'>
													<td style='text-align: center;'>".$faculty."</td>
												<td style='text-align: center;'>".$title."</td>
												<td style='text-align: center;'>".$seminar_Place."</td>
													<td style='text-align: center;'>".$date."</td>
													
													";
													  if($Images_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='downloadSeminar.php?file_id=".$id ."&file_name=".$Images_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";														  
													echo "<td style='text-align: center;'><a href=showseminardetails.php?eid=".$id ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> التفاصيل</button></td>

													
													</tr>";	
											}
										}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                    </div>
					
					
					
					
					
		
	

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
      
  
 
 
       <div class="modal-body">
                                   <form enctype="multipart/form-data" method="post" action="phpcode/adddReports.php" autocomplete="off">
          
          <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right">الكلية</label>
            <input type="text" class="form-control"  name="faculty"  value=<?php echo $_SESSION["faculty"];?> readonly>
          </div>
		   <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-style:Bold;">تاريخ الارسال</label>
            <input type="date" class="form-control"  name="date"  required />
          </div>
		   
		   
		  
															 
		   
		  <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right">لجنة السلامة والصحة المهنية
</label>
<input type="file" class="form-control"  name="HealthCommittee"   />

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