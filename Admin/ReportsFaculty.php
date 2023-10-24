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
                               <h1 class="pageheader-title" style="text-align:center;font-size:35px;background-color: #f8d7da;border: 5px solid transparent;border-radius: .25rem;color: MediumSeaGreen;font-family: 'Circular Std Book';line-height: 40px;;font-weight: bold;" >صفحة تقارير كلية معينة</h2>
                               
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
$sql = "SELECT count(*) as c FROM reports where id_user='$id_user'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$count=$row["c"];
			?>
        </div>
		
		         <div class="col-xl-24 col-lg-24 col-md-24 col-sm-24 col-24" dir=rtl>
                        
                          <div class="card" dir=rtl>
                            <h1 class="card-header" style="text-align:center;color:red;font-style: normal;font-family: 'Circular Std Book';font-weight: bold;">تقارير كلية <?php echo $faculty1;?> العدد الاجمالي :<?php echo $count;?></h2>
                              <div class="table-responsive" dir=rtl>       
                                    <table id="dataTables-example" class="table table-striped table-bordered table-hover"  dir=rtl>
                                   <thead style="background-color: DodgerBlue;font-size:15px; ">
                                        <tr>
											<th style="text-align: center;">الكلية</th>
										<th style="text-align: center;">أسم السيد وكيل الكلية
</th>
<th style="text-align: center;">رقم التليفون للتواصل
</th>
                                            <th style="text-align: center;">تاريخ الارسال</th>
											  <th style="text-align: center;">لجنة السلامة والصحة المهنية</th>
<th style="text-align: center;">لجنة ترشيد الطاقة</th>

<th style="text-align: center;">لجنة ترشيد المياة</th>
<th style="text-align: center;">لجنة منع التدخين</th>
<th style="text-align: center;">لجنة أعمال الصيانة</th>
<th style="text-align: center;">لجنة متابعة الكافتريا</th>
<th style="text-align: center;">لجنة التخلص من النفايات</th>
<th style="text-align: center;">لجنة الاجراءات الاحترازية</th>
<th style="text-align: center;">لجان أخرى</th>







                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
									
$sql = "SELECT reports.`id` as rid,reports.`id_user`,reports.member_name,reports.`date`,reports.`phone`,reports.`Health_Committee`,reports.`Power_Committee`,reports.Water_Committee,reports.Measures_Committee,reports.Others_Committee,reports.Smoking_Committee,reports.Reparing_Committee,reports.Cafatiria_Committee,reports.Waste_Committee,user.faculty FROM reports,user where user.id=reports.id_user and reports.id_user='$id_user' order by reports.id desc";
$result = mysqli_query($conn,$sql);
if($result){



										while($row = mysqli_fetch_array($result))
										{
										$id=$row["rid"];
										
											$faculty = $row['faculty'];
										$date = $row['date'];
										$member_name = $row['member_name'];
										$phone = $row['phone'];
										$Health_Committee = $row['Health_Committee'];
										$Power_Committee = $row['Power_Committee'];
										$Water_Committee = $row['Water_Committee'];
										$Smoking_Committee = $row['Smoking_Committee'];
										$Reparing_Committee = $row['Reparing_Committee'];
										$Cafatiria_Committee = $row['Cafatiria_Committee'];
										$Waste_Committee = $row['Waste_Committee'];
										$Measures_Committee = $row['Measures_Committee'];
										$Others_Committee = $row['Others_Committee'];
											
											if($id % 2 ==0 )
											{
												echo"<tr class='gradeC'>
												<td style='text-align: center;'>".$faculty."</td>
												<td style='text-align: right;'>".$member_name."</td>
													<td style='text-align: right;'>".$phone."</td>
													<td style='text-align: right;'>".$date."</td>";
													if($Health_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Health_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";
													if($Power_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Power_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";	
                                                    if($Water_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Water_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";
                                                     if($Smoking_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Smoking_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";
                                                     if($Reparing_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Reparing_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";
                                                     if($Cafatiria_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Cafatiria_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";														  
                                                       if($Waste_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Waste_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";
                                                       if($Measures_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Measures_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";														  
                                                      if($Others_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Others_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";														  

													
													echo "</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td style='text-align: center;'>".$faculty."</td>
												<td style='text-align: right;'>".$member_name."</td>
													<td style='text-align: right;'>".$phone."</td>
													<td style='text-align: right;'>".$date."</td>";
													if($Health_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Health_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";
													if($Power_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Power_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";	
                                                    if($Water_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Water_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";
                                                     if($Smoking_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Smoking_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";
                                                     if($Reparing_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Reparing_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";
                                                     if($Cafatiria_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Cafatiria_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";														  
                                                       if($Waste_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Waste_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";
                                                       if($Measures_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Measures_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";														  
                                                      if($Others_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='download.php?file_id=".$id ."&file_name=".$Others_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";														  

													echo "</tr>";
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