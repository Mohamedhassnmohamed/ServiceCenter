<!doctype html>
<?php
session_start();
if(!isset($_SESSION['email'])&&!isset($_SESSION['password']))  
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
                                <h1 class="pageheader-title" style="text-align:center;font-size:35px;background-color: #f8d7da;border: 5px solid transparent;border-radius: .25rem;color: MediumSeaGreen;font-family: 'Circular Std Book';line-height: 40px;;font-weight: bold;" >صفحة الندوات</h1>
                               
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
            
<?php 
			include_once("dbconec.php");
			$id_user=$_SESSION["id_user"];
			$sql = "SELECT * FROM user where id='$id_user'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$faculty1=$row["faculty"];
$name1=$row["name"];
			?>
        </div>
		
		         <div class="col-xl-24 col-lg-24 col-md-24 col-sm-24 col-24" dir=rtl>
                        
                          <div class="card" dir=rtl>
                            <h1 class="card-header" style="text-align:center;color:red;font-style: normal;font-family: 'Circular Std Book';font-weight: bold;">ندوات كلية <?php echo $faculty1;?></h1>
                              <div class="table-responsive" dir=rtl>       
                                <table id="dataTables-example" class="table table-striped table-bordered table-hover"  dir=rtl>
                                    <thead style="background-color: DodgerBlue;font-size:17px; ">
                                        <tr>
											<th style="text-align: center;">الكلية</th>
										<th style="text-align: center;">عنوان الندوة
</th>
<th style="text-align: center;">مكان الانعقاد</th>
<th style="text-align: center;">التاريخ</th>
                                            <th style="text-align: center;">المحاضرين</th>
											  <th style="text-align: center;">الضيوف</th>
<th style="text-align: center;">الفئة المستهدفة</th>

<th style="text-align: center;">اعداد المشاركين</th>
<th style="text-align: center;">الجهة المشاركة</th>
<th style="text-align: center;">الأهداف</th>
<th style="text-align: center;">ارتباطها بأهداف التنمية المستدامة</th>
<th style="text-align: center;">التوصيات</th>
<th style="text-align: center;">صور التوثيق</th>
<th style="text-align: center;">حذف</th>







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
												<td style='text-align: right;'>".$title."</td>
												<td style='text-align: right;'>".$seminar_Place."</td>
													<td style='text-align: right;'>".$date."</td>
													<td style='text-align: right;'>".$lectureres."</td>
													<td style='text-align: right;'>".$guests."</td>
													<td style='text-align: right;'>".$Target_group."</td>
													
													<td style='text-align: right;'>".$number_participates."</td>
													<td style='text-align: right;'>".$participating_party."</td>
													<td style='text-align: right;'>".$seminar_objectives."</td>
													<td style='text-align: right;'>".$connection_with."</td>
													<td style='text-align: right;'>".$recommedation."</td>
													";
													  if($Images_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='downloadSeminar.php?file_id=".$id ."&file_name=".$Images_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";														  

													echo "<td style='text-align: center;'><a href=deleteSeminar.php?eid=".$id ." <button class='btn btn-danger' onclick='return ConfirmDelete()'> <i class='fa fa-edit' ></i> حذف</button></td>";
													echo "</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td style='text-align: center;'>".$faculty."</td>
												<td style='text-align: right;'>".$title."</td>
												<td style='text-align: right;'>".$seminar_Place."</td>
													<td style='text-align: right;'>".$date."</td>
													<td style='text-align: right;'>".$lectureres."</td>
													<td style='text-align: right;'>".$guests."</td>
													<td style='text-align: right;'>".$Target_group."</td>
													
													<td style='text-align: right;'>".$number_participates."</td>
													<td style='text-align: right;'>".$participating_party."</td>
													<td style='text-align: right;'>".$seminar_objectives."</td>
													<td style='text-align: right;'>".$connection_with."</td>
													<td style='text-align: right;'>".$recommedation."</td>
													";
													  if($Images_Committee!=-1)
													      echo "<td style='text-align: center;'><a href='downloadSeminar.php?file_id=".$id ."&file_name=".$Images_Committee."'>تحميل</a></td>";
														  else
														  echo "<td style='text-align: center;color:red;'>'لأ يوجد'</td>";														  

													echo "<td style='text-align: center;'><a href=deleteSeminar.php?eid=".$id ." <button class='btn btn-danger' onclick='return ConfirmDelete()'> <i class='fa fa-edit' ></i> حذف</button></td>";
																							echo "</tr>";
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
إضافة ندوة جديده
</button>
					<br><br><br>

<!-- Modal -->
	

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="text-align: right;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" dir=rtl style="text-align">
        <h3 class="modal-title"  id="exampleModalCenterTitle"  style="text-align: right;color:red;font-size:20px;font-weight: bold;">صفحة لإضافة الندوات لكلية <?php echo $faculty1;?></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
  
 
 
       <div class="modal-body" >
                                   <form enctype="multipart/form-data" method="post" action="phpcode/adddSeminar.php" autocomplete="off">
          
          <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الكلية</label>
            <input type="text" class="form-control"  name="faculty"  value="<?php echo $faculty1;?>" readonly>
          </div>
		  <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">عنوان الندوة</label>
            <input type="text" class="form-control"  name="title"   required />
          </div>
		  <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">المحاضرين</label>
            <textarea type="text" class="form-control"  name="lectureres"  rows="2" cols="3" required /></textarea>
          </div>
		   <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الضيوف (إن وجد)</label>
            <input type="text" class="form-control"  name="guests"  required />
          </div>
		   
		   
		  
															 
		   
		  <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الفئة المستهدفة
</label>
<input type="text" class="form-control"  name="Target_group"   />

													          </div>
		  
		   <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">مكان الانعقاد
</label>
<input type="text" class="form-control"  name="seminar_Place" />

													          </div>
		  
		   <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">التاريخ
</label>
<input type="date" class="form-control"  name="date" />

													          </div>
		  
		   <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">اعداد المشاركين
</label>
<input type="text" class="form-control"  name="number_participates"   />

													          </div>
		  
		   <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الجهة المشاركة
</label>
<input type="text" class="form-control"  name="participating_party"/>

													          </div>
		  
		   <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الأهداف
</label>
            <textarea type="text" class="form-control"  name="seminar_objectives"  rows="2" cols="3" required /></textarea>

													          </div>
		  
		   <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">ارتباطها بأهداف التنمية المستدامة
</label>
<input type="text" class="form-control"  name="connection_with"/>

													          </div>
		  
		   <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">التوصيات
</label>

            <textarea type="text" class="form-control"  name="recommedation"  rows="2" cols="3" required /></textarea>

													          </div>
		  
		   <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">صور التوثيق
</label>
<input type="file" class="form-control"  name="Images_Committee"/>

	
      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" style="text-align: center;font-size:25px;">اضافه</button>
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