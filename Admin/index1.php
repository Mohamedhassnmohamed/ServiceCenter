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
    $('#dataTables-example3').DataTable();
} );
$(document).ready(function() {
    $('#dataTables-example4').DataTable();
} );
$(document).ready(function() {
    $('#dataTables-example5').DataTable();
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
                                <h1 class="pageheader-title" style="text-align:center;font-size:35px;background-color: #f8d7da;border: 5px solid transparent;border-radius: .25rem;color: MediumSeaGreen;font-family: 'Circular Std Book';line-height: 40px;;font-weight: bold;" >صفحة الأعضاء</h1>
                               
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
                        
                          <div class="card" dir=rtl>
                           <h1 class="card-header" style="text-align:center;color:red;font-style: normal;font-family: 'Circular Std Book';font-weight: bold;">بيانات كافة الأعضاء</h2>
                              <div class="table-responsive" dir=rtl>       
                                <table id="dataTables-example3" class="table table-striped table-bordered table-hover"  dir=rtl>
                                    <thead style="background-color: DodgerBlue;font-size:20px; ">
                                        <tr>
											<th style="text-align: center;">الأسم</th>
										
                                            <th style="text-align: center;">الرقم القومي أو رقم الباسبور</th>
										<th style="text-align: center;">الإيميل</th>
											 		<th style="text-align: center;">الرقم السري</th>	
											  <th style="text-align: center;">نوع الحساب</th>
										
											<th style="text-align: center;">تعديل</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
									include_once("phpcode/dbconec.php");
$sql = "SELECT * FROM user order by type";
$result = mysqli_query($conn,$sql);
if($result){



										while($row = mysqli_fetch_array($result))
										{
										$id=$row["id"];
										$name=$row['full_name'];
											$national_number = $row['national_number'];
											$email = $row['email'];
$password = $row['password'];
$type = $row['type'];

												if($type=="admin")
												$type="Admin";
												else if($type=="student")
												$type="student";
											
											if($id % 2 ==0 )
											{
												echo"<tr class='gradeC'>
												<td style='text-align: center;'>".$name."</td>
													<td style='text-align: center;'>".$national_number."</td>
													<td 'text-align: center;'> ".$email ."</td>
													<td 'text-align: center;'> ".$password ."</td>
<td 'text-align: center;'> ".$type."</td><td style='text-align: center;'><a href=editmember.php?eid=".$id ." <button class='btn btn-primary' > <i class='fa fa-edit' ></i> تعديل</button></td>";


												
													echo "</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td style='text-align: center;'>".$name."</td>
													<td style='text-align: center;'>".$national_number."</td>
													<td 'text-align: center;'> ".$email ."</td>
													<td 'text-align: center;'> ".$password ."</td>
<td 'text-align: center;'> ".$type."</td><td style='text-align: center;'><a href=editmember.php?eid=".$id ." <button class='btn btn-primary' > <i class='fa fa-edit' ></i> تعديل</button></td>";


												
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
أضافه عضو جديد
</button>
					<br><br><br>

<!-- Modal -->
	

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="text-align: right;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" dir=rtl style="text-align">
        <h3 class="modal-title"  id="exampleModalCenterTitle"  style="text-align: right;font-size:22px;">صفحة إضافة حساب جدبد </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
  
 
 
       <div class="modal-body">
                                <form enctype="multipart/form-data" method="post" action="phpcode/adddmember.php" autocomplete="off">
          <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الأسم</label>
            <input type="text" class="form-control"  name="name"  />
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الرقم القومي أو رقم الباسبور</label>
            <input type="text" class="form-control"  name="national_number"  />
          </div>
		  
		   <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">نوع الحساب</label>
<select class="form-control form-control-sm"  name="type" required>
 <option value="student">طالب
</option>
                                                    <option value="admin">أدمن</option>
													
													</select>
													          </div>
		   
		  
															 
		   
		  <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الإيميل
</label>
<input type="text" class="form-control"  name="email"  required />

													          </div>
		  
		  <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الرقم السري


</label>
            <input type="text" class="form-control"  name="password"  />
          </div>
		  
		   
		  
		  
 
 
      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" style="text-align: right;font-size:22px;">اضافه</button>
		  </form>
      </div>
    </div>
  </div>
</div>
    
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
	
	
	 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                        
                          <div class="card" dir=rtl>
                           <h1 class="card-header" style="text-align:center;color:red;font-style: normal;font-family: 'Circular Std Book';font-weight: bold;">بيانات كل الكليات</h2>
                              <div class="table-responsive" dir=rtl>       
                                <table id="dataTables-example4" class="table table-striped table-bordered table-hover"  dir=rtl>
                                    <thead style="background-color: DodgerBlue;font-size:20px; ">
                                        <tr>
											<th style="text-align: center;">أسم الكلية</th>
										<th style="text-align: center;">حذف</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
									include_once("phpcode/dbconec.php");
$sql = "SELECT * FROM faculty order by id";
$result = mysqli_query($conn,$sql);
if($result){



										while($row = mysqli_fetch_array($result))
										{
										$id=$row["id"];
										$name=$row['name'];
											
											
											if($id % 2 ==0 )
											{
												echo"<tr class='gradeC'>
												<td style='text-align: center;'>".$name."</td>
													
<td style='text-align: center;'><a href=phpcode/deletefaculty.php?eid=".$id ." <button class='btn btn-danger' > <i class='fa fa-delete' ></i> حذف</button></td>";


												
													echo "</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td style='text-align: center;'>".$name."</td>
													
<td style='text-align: center;'><a href=phpcode/deletefaculty.php?eid=".$id ." <button class='btn btn-danger' > <i class='fa fa-delete' ></i> حذف</button></td>";


												
													echo "</tr>";
											}
										}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                            
                            </div>
                    </div>
					
					
					
					
					
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;text-align: right;" dir=rtl>
إضافة كلية جديدة
</button>
					<br><br><br>

<!-- Modal -->
	

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="text-align: right;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" dir=rtl style="text-align">
        <h3 class="modal-title"  id="exampleModalCenterTitle"  style="text-align: right;font-size:22px;">صفحة إضافة كلية </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
  
 
 
       <div class="modal-body">
                                <form enctype="multipart/form-data" method="post" action="phpcode/adddfaculty.php" autocomplete="off">
          <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الأسم</label>
            <input type="text" class="form-control"  name="name"  required />
          </div>
          
		  
		  
		   
		  
															 
		   
		 
		  
		 
		   
		  
		  
 
 
      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" style="text-align: right;font-size:22px;">اضافه</button>
		  </form>
      </div>
    </div>
  </div>
</div>
    
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
	
	
	
	 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                        
                          <div class="card" dir=rtl>
                           <h1 class="card-header" style="text-align:center;color:red;font-style: normal;font-family: 'Circular Std Book';font-weight: bold;">بيانات كل الكليات</h2>
                              <div class="table-responsive" dir=rtl>       
                                <table id="dataTables-example5" class="table table-striped table-bordered table-hover"  dir=rtl>
                                    <thead style="background-color: DodgerBlue;font-size:20px; ">
                                        <tr>
											<th style="text-align: center;">أسم الخدمة</th>
											<th style="text-align: center;">سعر الصفحة</th>
										<th style="text-align: center;">تعديل السعر</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
									include_once("phpcode/dbconec.php");
$sql = "SELECT * FROM `servsalary`";
$result = mysqli_query($conn,$sql);
if($result){



										while($row = mysqli_fetch_array($result))
										{
										$id=$row["id"];
										$desc_ser=$row['desc_ser'];
												$salary=$row['salary'];
											
											if($id % 2 ==0 )
											{
												echo"<tr class='gradeC'>
												<td style='text-align: center;'>".$desc_ser."</td>
													<td style='text-align: center;'>".$salary."</td>
<td style='text-align: center;'><a href=editsalary.php?eid=".$id ." <button class='btn btn-danger' > <i class='fa fa-delete' ></i> تعديل السعر</button></td>";


												
													echo "</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td style='text-align: center;'>".$desc_ser."</td>
													<td style='text-align: center;'>".$salary."</td>
<td style='text-align: center;'><a href=editsalary.php?eid=".$id ." <button class='btn btn-danger' > <i class='fa fa-delete' ></i> تعديل السعر</button></td>";


												
													echo "</tr>";
											}
										}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                            
                            </div>
                    </div>
					
					
					
					
					
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;text-align: right;" dir=rtl>
اضافة سعر خدمة بالجنيه
</button>
					<br><br><br>

<!-- Modal -->
	

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="text-align: right;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" dir=rtl style="text-align">
        <h3 class="modal-title"  id="exampleModalCenterTitle"  style="text-align: right;font-size:22px;">صفحة إضافة سعر خدمة بالجنيه</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
  
 
 
       <div class="modal-body">
                                <form enctype="multipart/form-data" method="post" action="phpcode/adddsalary.php" autocomplete="off">
          <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">الخدمة المطلوبة</label>
            <input type="text" class="form-control"  name="	desc_ser"  required />
          </div>
          
		  <div class="form-group">
            <label for="message-text" class="col-form-label" style="text-align: right;font-size:22px;">سعر الصفحة</label>
            <input type="text" class="form-control"  name="salary"  required />
          </div>
		  
		   
		  
															 
		   
		 
		  
		 
		   
		  
		  
 
 
      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" style="text-align: right;font-size:22px;">اضافه</button>
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