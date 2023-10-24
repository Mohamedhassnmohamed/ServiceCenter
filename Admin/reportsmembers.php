<!doctype html>
<?php
session_start();
if(!isset($_SESSION['job_number'])) 
     header("Location:../index.php");  
if($_SESSION['type']=="user") 
     header("Location:../index.php");
include_once("phpcode/dbconec.php");
$job_number=$_SESSION["job_number"];
$sql = "SELECT * FROM user WHERE job_number='$job_number'";
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
    <title>كلية العلوم والآداب بالقريات-جامعة الجوف</title>
	<script>
	function back()
	{
		
		window.history.back();
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
                                <h2 class="text-center" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 40px;    font-family: 'Circular Std Book';font-weight: bold;">صفحة تقارير الأعضاء</h2>
                                
                            </div>
                        </div>
                    </div>
					<hr/>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                       <?php

$sql = "SELECT * FROM user WHERE job_number='$job_number'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
	 
        

?>
                        <div class="row">
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                <form enctype="multipart/form-data" method="post" action="allinfodep.php">
                                <div class="card" dir=rtl>
                                    <h5 class="card-header" class="text-right" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;;font-weight: bold;">بيان باعضاء هيئه التدريس من حيث الجنس  والرتبه العلميه</h5>
                                    <div class="card-body" style="text-align: right;">
                                        
                                            <div class="form-group" dir=rtl style="text-align: right;">
                                                <label for="inputText3" class="col-form-label" style="font-size:25px;color:red;">أختر العام</label>
<select class="form-control form-control-sm" name="year"  required>
<option value="1420">1420</option>
<option value="1421">1421</option>
<option value="1422">1422</option>
<option value="1423">1423</option>
<option value="1424">1424</option>
<option value="1425">1425</option>
<option value="1426">1426</option>
<option value="1427">1427</option>
<option value="1428">1428</option>
<option value="1429">1429</option>
<option value="1430">1430</option>
<option value="1431">1431</option>
<option value="1432">1432</option><option value="1433">1433</option>
<option value="1434">1434</option>
<option value="1435">1435</option>
<option value="1436">1436</option>
<option value="1437">1437</option>
<option value="1438">1438</option>
<option value="1439">1439</option>
<option value="1440">1440
</option>
	<option value="1441">1441</option>
	<option value="1442">1442</option>
	<option value="1443">1443</option>
</option>

</option><option value="1444">1444</option>
</option><option value="1445">1445</option>
</option><option value="1446">1446</option>
</option><option value="1447">1447</option>
</option><option value="1448">1448</option>
</option><option value="1449">1449</option>
</option><option value="1450">1450</option>
<option value="1451">1451</option>
<option value="1452">1452</option>
<option value="1453">1453</option>
<option value="1454">1454</option>
<option value="1455">1455</option>
<option value="1456">1456</option>
<option value="1457">1457</option>
<option value="1458">1458</option>
<option value="1459">1459</option>
<option value="1460">1460</option>
<option value="1461">1461</option><option value="1462">1462</option><option value="1463">1463</option><option value="1464">1464</option><option value="1465">1465</option><option value="1466">1466</option><option value="1467">1467</option><option value="1468">1468</option>
</option><option value="1469">1469</option><option value="1470">1470</option>
</option>

</select>           
                                            </div>
											
											
											
											
                                       
                                    </div>
                                    <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                   
                                                    
													 <button type="submit" class="btn btn-space btn-primary" style="height:55px; width:150px;margin-right:500px;">تنزيل</button>
                                                </p>
                                            </div>
                                </div>
								
							</form>
							
								</div>
								
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                <form enctype="multipart/form-data" method="post" action="allinfodepprograme.php">
                                <div class="card" dir=rtl>
                                    <h5 class="card-header" class="text-right" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;;font-weight: bold;">بيان باعضاء هيئه التدريس من حيث الجنس  والرتبه العلميه لكافة البرامج
</h5>
                                    <div class="card-body" style="text-align: right;">
                                        
                                            <div class="form-group" dir=rtl style="text-align: right;">
                                                <label for="inputText3" class="col-form-label" style="font-size:25px;color:red;">أختر العام</label>
<select class="form-control form-control-sm" name="year"  required>
<option value="1420">1420</option>
<option value="1421">1421</option>
<option value="1422">1422</option>
<option value="1423">1423</option>
<option value="1424">1424</option>
<option value="1425">1425</option>
<option value="1426">1426</option>
<option value="1427">1427</option>
<option value="1428">1428</option>
<option value="1429">1429</option>
<option value="1430">1430</option>
<option value="1431">1431</option>
<option value="1432">1432</option><option value="1433">1433</option>
<option value="1434">1434</option>
<option value="1435">1435</option>
<option value="1436">1436</option>
<option value="1437">1437</option>
<option value="1438">1438</option>
<option value="1439">1439</option>
<option value="1440">1440
</option>
	<option value="1441">1441</option>
	<option value="1442">1442</option>
	<option value="1443">1443</option>
</option>

</option><option value="1444">1444</option>
</option><option value="1445">1445</option>
</option><option value="1446">1446</option>
</option><option value="1447">1447</option>
</option><option value="1448">1448</option>
</option><option value="1449">1449</option>
</option><option value="1450">1450</option>
<option value="1451">1451</option>
<option value="1452">1452</option>
<option value="1453">1453</option>
<option value="1454">1454</option>
<option value="1455">1455</option>
<option value="1456">1456</option>
<option value="1457">1457</option>
<option value="1458">1458</option>
<option value="1459">1459</option>
<option value="1460">1460</option>
<option value="1461">1461</option><option value="1462">1462</option><option value="1463">1463</option><option value="1464">1464</option><option value="1465">1465</option><option value="1466">1466</option><option value="1467">1467</option><option value="1468">1468</option>
</option><option value="1469">1469</option><option value="1470">1470</option>
</option>

</select>           
                                            </div>
											
											
											
											
                                       
                                    </div>
                                    <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                   
                                                    
													 <button type="submit" class="btn btn-space btn-primary" style="height:55px; width:150px;margin-right:500px;">تنزيل</button>
                                                </p>
                                            </div>
                                </div>
								
							</form>
							
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" dir=rtl>
                                <form enctype="multipart/form-data" method="post" action="doctorassign.php">
                                <div class="card" dir=rtl>
                                    <h5 class="card-header" class="text-right" style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;;font-weight: bold;">بيان باعضاء هيئه التدريس  الحاصلين علي درجة  الدكتوراة بالبرامج</h5>
                                    <div class="card-body" style="text-align: right;">
                                        
                                            <div class="form-group" dir=rtl style="text-align: right;">
                                                <label for="inputText3" class="col-form-label" style="font-size:25px;color:red;">أختر العام</label>
<select class="form-control form-control-sm" name="year"  required>
<option value="1420">1420</option>
<option value="1421">1421</option>
<option value="1422">1422</option>
<option value="1423">1423</option>
<option value="1424">1424</option>
<option value="1425">1425</option>
<option value="1426">1426</option>
<option value="1427">1427</option>
<option value="1428">1428</option>
<option value="1429">1429</option>
<option value="1430">1430</option>
<option value="1431">1431</option>
<option value="1432">1432</option><option value="1433">1433</option>
<option value="1434">1434</option>
<option value="1435">1435</option>
<option value="1436">1436</option>
<option value="1437">1437</option>
<option value="1438">1438</option>
<option value="1439">1439</option>
<option value="1440">1440
</option>
	<option value="1441">1441</option>
	<option value="1442">1442</option>
	<option value="1443">1443</option>
</option>

</option><option value="1444">1444</option>
</option><option value="1445">1445</option>
</option><option value="1446">1446</option>
</option><option value="1447">1447</option>
</option><option value="1448">1448</option>
</option><option value="1449">1449</option>
</option><option value="1450">1450</option>
<option value="1451">1451</option>
<option value="1452">1452</option>
<option value="1453">1453</option>
<option value="1454">1454</option>
<option value="1455">1455</option>
<option value="1456">1456</option>
<option value="1457">1457</option>
<option value="1458">1458</option>
<option value="1459">1459</option>
<option value="1460">1460</option>
<option value="1461">1461</option><option value="1462">1462</option><option value="1463">1463</option><option value="1464">1464</option><option value="1465">1465</option><option value="1466">1466</option><option value="1467">1467</option><option value="1468">1468</option>
</option><option value="1469">1469</option><option value="1470">1470</option>
</option>

</select>           
                                            </div>
											
											
											
											
                                       
                                    </div>
                                    <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                   
                                                    
													 <button type="submit" class="btn btn-space btn-primary" style="height:55px; width:150px;margin-right:500px;">تنزيل</button>
                                                </p>
                                            </div>
                                </div>
								
							</form>
							
								</div>
								


								
								
 
					
					
							    
					 
							
							
							
							
							
                            <!-- ============================================================== -->
                            <!-- end alignment  -->
                            <!-- ============================================================== -->
                           
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
	
	  </div>
	 </div>
	  </div>
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