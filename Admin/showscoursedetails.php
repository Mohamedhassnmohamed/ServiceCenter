<?php
session_start();
if(!isset($_SESSION['email'])&&!isset($_SESSION['password']))  
     header("Location:../index.php");  
if($_SESSION['type']=="user") 
     header("Location:../index.php");
	

?> 
<html>
	<head>
		<meta charset="utf-8">
		<title>صفحة بيانات دورة تدريبية</title>
		
		<style>
		/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 2em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif;  text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 100%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 1px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: right; }
th, td { border-radius: 0.21em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 13in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 15in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 1 1 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 12%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 4%; }
table.inventory td:nth-child(4) { text-align: right; width: 6%; }
table.inventory td:nth-child(5) { text-align: right; width: 6%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
		</style>
		
	</head>
	<body>
	
	
	
	
	<?php
	include_once("dbconec.php");
	
	$courses_id = $_GET['eid'];
	$sql = "SELECT * FROM courses,user where user.id=courses.id_user and courses.id='$courses_id'";

if($result=mysqli_query($conn,$sql)){



										$row = mysqli_fetch_array($result);
										
										$faculty=$row["faculty"];
											$title = $row['title'];
										$lectureres = $row['lectureres'];
										$Target_group = $row['Target_group'];
										
										$seminar_Place = $row['seminar_Place'];
										$date = $row['date'];
										$number_participates = $row['number_participates'];
										$participating_party = $row['participating_party'];
										$seminar_objectives = $row['seminar_objectives'];
										$connection_with = $row['connection_with'];
								}

									
	?>
		<header>
			<h1 style="text-align:center;font-size:30px;">صفحة بيانات دورة تدريبية بعنوان <?php echo $title;?></h1>
			<address style="float:right" >
		<span style="float:left"><img width="170px;" alt="" src="logo-aun.png"></span>


			</address>
			<span style="float:left"><img width="200px;" alt="" src="logo.jpeg"></span>
		</header>
		<article>
			<h1></h1>
			
			<table class="inventory" style="float:right;direction:rtl">
				<tr>
					<th style="text-align: right:width:30%;font-size:20px;"><span >الكلية</span></th>
					<td style="text-align: center:width:70%;;font-size:20px;"><span ><?php echo $faculty; ?></span></td>
				</tr>
			<tr>
					<th style="text-align: right:width:30%;;font-size:20px;"><span >عنوان الدورة
</span></th>
					<td style="text-align: center:width:70%;;font-size:20px;"><span ><?php echo $title; ?></span></td>
				</tr>
				
				<tr>
					<th style="text-align: right:width:30%;;font-size:20px;"><span >القائم بالتدريب
</span></th>
					<td style="text-align: center:width:70%;;font-size:20px;"><span ><?php echo $lectureres; ?> </span></td>
				</tr>
				
				<tr>
					<th style="text-align: right:width:30%;;font-size:20px;"><span >الفئة المستهدفة

</span></th>
					<td style="text-align: center:width:70%;;font-size:20px;"><span ><?php echo $Target_group; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right:width:30%;;font-size:20px;"><span >مكان الانعقاد

</span></th>
					<td style="text-align: center:width:70%;;font-size:20px;"><span ><?php  echo $seminar_Place; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right:width:30%;;font-size:20px;"><span >التاريخ

</span></th>
					<td style="text-align: center:width:70%;;font-size:20px;"><span ><?php   echo $date; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right:width:30%;font-size:20px;"><span >اعداد المشاركين</span></th>
					<td style="text-align: center:width:70%;font-size:20px;"><span ><?php   echo $number_participates	; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right:width:30%;font-size:20px;"><span >الجهة المشاركة</span></th>
					<td style="text-align: center:width:70%;;font-size:20px;"><span ><?php echo $participating_party; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right:width:30%;font-size:20px;"><span >الأهداف

</span></th>
					<td style="text-align: center:width:70%;font-size:20px;"><span ><?php echo $seminar_objectives; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right:width:30%;font-size:20px;"><span >ارتباطها بأهداف التنمية المستدامة

</span></th>
					<td style="text-align: center:width:70%;font-size:20px;"><span ><?php echo $connection_with; ?> </span></td>
				</tr>
				
				

					
				</tbody>
			</table>
			
			
		</article>
		<aside>
			<h1><span style="font-size:18px;">تصميم وتنفيذ</span></h1>
			<div >
				<p align="center" style="font-size:18px;">م/أحمد عبدالرحمن أحمد</p><br>
				<p align="center" style="font-size:18px;">  مدرس مساعد بكلية الحاسبات والمعلومات جامعة أسيوط</p><br>

				


			</div>
		</aside>
	</body>
</html>

<?php 

ob_end_flush();

?>