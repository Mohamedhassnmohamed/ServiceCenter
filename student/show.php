<html>
	<head>
		<meta charset="utf-8">
		<title>بيانات طالب متقدم للدراسات العليا</title>
		
		<style>
		/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: 15px;;
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

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 15px; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 2px; padding: 0.5em; position: relative; text-align: right; }
th, td { border-radius: 0.25em; border-style: solid; }
td { border-color: #DDD; }

/* page */

html { font: 16px; 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 19in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
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

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 100%; }
table.meta td { width: 100%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

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
	font-size: .90rem;
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
	ob_start();	
    

include_once("phpcode/dbconec.php");
	
	$id = $_GET['eid'];
	
	$sql ="select * from registeration where id = '$id' ";
	$re = mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($re);
	$user_id=$row["user_id"];
	
		$id = $row['id'];
		$national_number =  $row['national_number'];
		$full_a = $row['full_a'];
		$full_e = $row['full_e'];
				$datebirth = $row['datebirth'];
$gpa=$row["gpa"];
		$type=$row["type"];
		$miliraty_status = $row['miliraty_status'];
		if($miliraty_status=="out")
		$miliraty_status="اعفاء";
		else if($miliraty_status=="delay")
		$miliraty_status="تاجيل";
		else if($miliraty_status=="perform")
		$miliraty_status="ادي الخدمه";
		$position=$row["position"];
		if($position=="yes")
	{
		$position="نعم";
	}
	else{
		$position="لا";
	
	}
		if($type=="male"){
		$type="ذكر";
		}
		else if($type=="female"){
		$type="انثي";
		$miliraty_status="";	
		}
		$charasitic_type=$row["charasitic_type"];
		$charasitic_number=$row["charasitic_number"];
		$job_status = $row['job_status'];
		$job_title=$row["job_title"];
		$job_address = $row['job_address'];
		$nationality = $row['nationality'];
		
		$contact_value = $row['contact_value'];
		$regulation = $row['regulation'];
		$academicyear=$row["academicyear"];
		$degree_university = $row['degree_university'];
		//$Noof_room = $row['Nroom'];
		$degree_faculty = $row['degree_faculty'];
		$qualified_type = $row['qualified_type'];
		$qualified=$row["qualified"];
		$speciality = $row['speciality'];
		$degree_year = $row['degree_year'];
		$study_type = $row['study_type'];
		$gpa = $row['gpa'];
		$academicyear=$row["academicyear"];
		if($academicyear==0)
												$academicyear="2019-2020";
		else if($academicyear==1)
												$academicyear="2020-2021";
												else if($academicyear==2)
												$academicyear="2021-2022";
													else if($academicyear==3)
												$academicyear="2022-2023";
													else if($academicyear==4)
												$academicyear="2023-2024";
												else if($academicyear==5)
												$academicyear="2024-2025";
												else if($academicyear==6)
												$academicyear="2025-2026";
												else if($academicyear==7)
												$academicyear="2026-2027";
												else if($academicyear==8)
												$academicyear="2027-2028";
												else if($academicyear==9)
												$academicyear="2028-2029";
												else if($academicyear==10)
												$academicyear="2029-2030";
												
												else if($academicyear==11)
												$academicyear="2030-2031";
												else if($academicyear==12)
												$academicyear="2031-2032";
												else if($academicyear==13)
												$academicyear="2032-2033";
												else if($academicyear==14)
												$academicyear="2033-2034";
												else if($academicyear==15)
												$academicyear="2034-2035";
		$percentage = $row['percentage'];
		$nomination = $row['nomination'];
		if($nomination==1)
		$nomination="لا";
		else if($nomination==2)
		$nomination="نعم من  داخل المدينه";
		else
	$nomination="نعم من خارج المدينه";
$external=$row["external"];
		if($external==1)
	{
		$external="وافد";
			$miliraty_status="";
	}
	else{
	$external="لا";
	
	}
		$phone=$row["contact_value"];
$mohafza=$row["mohafza"]; 
		$diploma_type = $row['diploma_type'];
		if($diploma_type=="1")
		$diploma_type="دبلومه";
		else if($diploma_type=="2")
		$diploma_type="ماجستير";
		if($diploma_type=="3")
		$diploma_type="دكتوراه";
		$diploma_department = $row['diploma_department'];
		
						
		$diploma_department_type= $row['diploma_department_type'];
		if($diploma_department_type=="1.1.1")
						$diploma_department_type="الدبلوم المهني في التمريض الباطني";
						else if($diploma_department_type=="1.1.2")
						$diploma_department_type="الدبلوم المهني في التمريض الجراحي";
						else if($diploma_department_type=="1.1.3")
						$diploma_department_type="الدبلوم المهني قي تمريض الاورام";
						else if($diploma_department_type=="1.1.1")
						$diploma_department_type="الدبلوم المهني في تمريض الصحه النفسيه والعقليه";
						else if($diploma_department_type=="1.2.1")
						$diploma_department_type="الدبلوم المهني في تمريض الادمان";
						else if($diploma_department_type=="1.2.2")
						$diploma_department_type="الدبلوم المهني في تمريض التوليد";
						else if($diploma_department_type=="1.3.1")
						$diploma_department_type="البلوم المهني في تمريض التوليد";
							else if($diploma_department_type=="1.3.2")
						$diploma_department_type="الدبلوم المهني في تمريض امراض النساء وتنظيم الاسره";
						else if($diploma_department_type=="1.4.1")
						$diploma_department_type="الدبلوم المهني في تمريض الأطفال حديثي الولادة";
						else if($diploma_department_type=="1.4.2")
						$diploma_department_type="الدبلوم المهني في تمريض باطني الاطفال";
						else if($diploma_department_type=="1.4.3")
						$diploma_department_type="الدبلوم المهني في تمريض جراحة الأطفال";
						else if($diploma_department_type=="1.5.1")
						$diploma_department_type="الدبلوم المهني في تمريض صحة الأسرة";
						else if($diploma_department_type=="1.5.2")
						$diploma_department_type="الدبلوم المهني في تمريض الصحة المدرسية";
						else if($diploma_department_type=="1.5.3")
						$diploma_department_type="الدبلوم المهني في تمريض الصحة المهنية";
						else if($diploma_department_type=="1.6.1")
						$diploma_department_type="الدبلوم المهني في التمريض الباطني للمسنين";
						else if($diploma_department_type=="1.7.1")
						$diploma_department_type="الدبلوم المنهى في تمريض العناية المركزة";
						else if($diploma_department_type=="1.8.1")
						$diploma_department_type="الدبلوم المهني في إدارة التمريض";
						else if($diploma_department_type=="1.8.2")
						$diploma_department_type="الدبلوم المهني في إدارة الجودة";
						else if($diploma_department_type=="2.1.1")
						$diploma_department_type="الماجستير في التمريض الباطني والجراحي";
						else if($diploma_department_type=="2.2.1")
						$diploma_department_type="الماجستير في تمريض الصحه النفسيه والعقليه";
						else if($diploma_department_type=="2.3.1")
						$diploma_department_type="الماجستير في تمريض صحة الأم وحديثي الولادة";
						else if($diploma_department_type=="2.4.1")
						$diploma_department_type="الماجستير في تمريض الأطفال";
						else if($diploma_department_type=="2.5.1")
						$diploma_department_type="الماجستير في تمريض صحة الأسرة و المجتمع";
						else if($diploma_department_type=="2.6.1")
						$diploma_department_type="الماجستير في تمريض المسنين";
						else if($diploma_department_type=="2.7.1")
						$diploma_department_type="الماجستير في تمريض العناية الحرجة و الطوارئ";
						else if($diploma_department_type=="2.8.1")
						$diploma_department_type="الماجستير في قسم إدارة التمريض";
						else if($diploma_department_type=="3.1.1")
						$diploma_department_type="الدكتوراه في التمريض الباطني والجراحي";
						else if($diploma_department_type=="3.2.1")
						$diploma_department_type="الدكتوراه  في تمريض الصحه النفسيه والعقليه";
						else if($diploma_department_type=="3.3.1")
						$diploma_department_type="الدكتوراه في تمريض صحة الأم وحديثي الولادة";
						else if($diploma_department_type=="3.4.1")
						$diploma_department_type="الدكتوراه في تمريض الأطفال";
						else if($diploma_department_type=="3.5.1")
						$diploma_department_type="الدكتوراه في تمريض صحة الأسرة و المجتمع";
						else if($diploma_department_type=="3.6.1")
						$diploma_department_type="الدكتوراه في تمريض المسنين";
						else if($diploma_department_type=="3.7.1")
						$diploma_department_type="الدكتوراه في تمريض العناية الحرجة و الطوارئ";
						else if($diploma_department_type=="3.8.1")
						$diploma_department_type="الدكتوراه في قسم إدارة التمريض";
	
	
	
	
	if($gpa=='0')
		$gpa="";
			$sql ="select * from messageregisteration where id_r = '$id' ";
	$re = mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($re);
if($row["messagearabic"])
$messagearabic=$row["messagearabic"];
else
$messagearabic="";
if($row["messageenglish"])
$messageenglish=$row["messageenglish"];
else
$messageenglish="";
$name="";
$sql ="select * from subjectstudens where id_reg = '$id' ";
	$re = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($re))
{
$id_sub=$row["id_subject"];	
if($id_sub){	
	$sql1 ="select * from subject where id = '$id_sub' ";
	$re1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($re1);
$name.=$row1["name"]."<br>";
}
}
if($name=="")
$name="";

$namesup="";
$sql ="select * from messageregisteration where id_r = '$id' ";
	$re = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($re);

$idsup1=$row["idsup1"];	
$idsup2=$row["idsup2"];
$idsup3=$row["idsup3"];
$idsup4=$row["idsup4"];	



if($idsup1!=0){
	$sql1 ="select * from staff where id = '$idsup1' ";
	$re1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($re1);
$namesup.=$row1["fullname"]."<br>";
}
if($idsup2!=0){
$sql1 ="select * from staff where id = '$idsup2' ";
	$re1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($re1);
$namesup.=$row1["fullname"]."<br>";
}
if($idsup3!=0){
$sql1 ="select * from staff where id = '$idsup3' ";
	$re1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($re1);
$namesup.=$row1["fullname"]."<br>";
}
if($idsup4!=0){
$sql1 ="select * from staff where id = '$idsup4' ";
	$re1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($re1);
$namesup.=$row1["fullname"]."<br>";

}


	?>
		<header>
			<h1>بيانات طالب متقدم للدراسات العليا</h1>
			<address dir=rtl style="text-align: right;">
				<p style="text-align: right;font-size:25px;">كليه التمريض</p>
				<p style="text-align: right;font-size:25px;">جامعه أسيوط</p>
				
			</address>
<span><img style="float: right;" src='assets/images/Nursing_a.png' class='d-block' width=180px; height=90px;  />
</span>		</header>
		<article>
			<h1></h1>
			<address >
				
				<p><br></p>
			
			</address>
			<table  dir=rtl >
			<tr>
					<th style="text-align: right;"><span >الرقم القومي</span></th>
					<td style="text-align: right;"><span ><?php echo $national_number; ?></span></td>
				</tr>
			<tr>
					<th style="text-align: right;"><span >اسم الطالب بالعربي</span></th>
					<td style="text-align: right;"><span ><?php echo $full_a; ?></span></td>
				</tr>
				<tr>
					<th style="text-align: right;"><span >العام الدراسي</span></th>
					<td style="text-align: right;"><span ><?php echo $academicyear; ?></span></td>
				</tr>
				
				<tr>
					<th style="text-align: right;"><span >اسم الطالب بالانجليزي</span></th>
					<td style="text-align: right;"><span ><?php echo 	$full_e; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right;"><span >الوظيفه</span></th>
					<td style="text-align: right;"><span ><?php echo $job_title; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right;"><span >هل من الهيئه المعاونه</span></th>
					<td style="text-align: right;"><span ><?php echo $position; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right;"><span >عنوان العمل</span></th>
					<td style="text-align: right;"><span ><?php echo $job_address; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right;"><span >الجنسيه</span></th>
					<td style="text-align: right;"><span ><?php echo $nationality; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right;"><span >النوع</span></th>
					<td style="text-align: right;"><span ><?php echo $type; ?> </span></td>
				</tr>
				
				<tr>
					<th style="text-align: right;"><span >رقم التليفون</span></th>
					<td style="text-align: right;"><span ><?php echo $phone ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right;"><span >تاريخ الميلاد</th>
                                                					<td style="text-align: right;"><span ><?php echo $datebirth; ?></span></td>
</tr>
				

<tr>
					<th style="text-align: right;"><span >المحافظه</th>
                                                					<td style="text-align: right;"><span ><?php echo $mohafza; ?></span></td>
</tr>
											
											
				
				<tr>
					<th style="text-align: right;"><span >الموقف من التجنيد</span></th>
					<td style="text-align: right;"><span ><?php  echo $miliraty_status; ?> </span></td>
				</tr>
				
				
				
				<tr>
					<th style="text-align: right;"><span >جامعه التخرج</span></th>
					<td style="text-align: right;"><span ><?php echo $degree_university;  ?> </span></td>
				</tr>
				
				<tr>
					<th style="text-align: right;"><span >كليه</span></th>
					<td style="text-align: right;"><span ><?php echo $degree_faculty; ?> </span></td>
				</tr>
				
				
				
				
				
				<tr>
					<th style="text-align: right;"><span >التخصص</span></th>
					<td style="text-align: right;"><span ><?php echo $speciality; ?> </span></td>
				</tr>
				
				<tr>
					<th style="text-align: right;"><span >سنه التخصص</span></th>
					<td style="text-align: right;"><span ><?php echo $degree_year;?> </span></td>
				</tr>
				
				
				<tr>
					<th style="text-align: right;"><span >التقدير</span></th>
					<td style="text-align: right;"><span ><?php echo $gpa; ?> </span></td>
				</tr><tr>
					<th style="text-align: right;"><span >النسبه</span></th>
					<td style="text-align: right;"><span ><?php echo $percentage; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right;"><span >الدرجه العلميه المتقدم لها الطالب</span></th>
					<td style="text-align: right;"><span ><?php echo$diploma_type;?> </span></td>
				</tr>
				
				<tr>
					<th style="text-align: right;"><span >ترشيح وزاري</span></th>
					<td style="text-align: right;"><span ><?php echo $nomination; ?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right;"><span >الدرجه العلميه المتقدم لها الطالب</span></th>
					<td style="text-align: right;"><span ><?php echo $diploma_department_type;?> </span></td>
				</tr>
				<tr>
					<th style="text-align: right;"><span >وافد</span></th>
					<td style="text-align: right;"><span ><?php echo $external; ?> </span></td>
				</tr>
				
			</table>
			
				<br>
				<br>
			
			
			
		</article>
		
	</body>
</html>

<?php 

ob_end_flush();

?>