<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>كليه التمريض جامعه اسيوط-ادراه الدراسات العليا</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" action="phpcode/register.php" method="post" enctype="multipart/form-data">
        <div class="card">
		 <div class="card-header">
                <h3 class="mb-1" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 20px;line-height: 30px;    font-family: 'Circular Std Book';text-align: right;color:red">كليه التمريض -جامعه اسيوط-اداره الدراسات العليا</h3>
            </div>
            <div class="card-header">
                <h3 class="mb-1" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 20px;    font-family: 'Circular Std Book';text-align: right;color:red">تسجيل حساب جديد</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg"  value="" name="fullname"  placeholder="الاسم بالكامل" autocomplete="off" style="text-align: right;" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" value="" type="text" name="national_number"   placeholder="الرقم القومي" autocomplete="off" style="text-align: right;" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg"  value="" type="text"  name="job"  placeholder="الوظيفه" style="text-align: right;" required>
                </div>
				<div class="form-group">
                    <input class="form-control form-control-lg" value="" name="email" type="email" required="" placeholder="البريد الالكتروني" style="text-align: right;" required>
                </div>
				 <div class="form-group">
                    <input class="form-control form-control-lg" value="" id="p1" name="password" type="password"  placeholder="الرقم السري" style="text-align: right;" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" value="" id="p2" type="password" placeholder="تاكيد الرقم السري" style="text-align: right;" required>
                </div>
				
				
				<div class="form-group">
				<h4 style="text-align: right;color: #004085; font-family: 'Circular Std Book';italics; border: 1px solid transparent;;background-color: #f8d7da;;border-color:#f5c6cb;;border-radius: .25rem;">تحميل صوره</h4>

										 <input type="file" id="myFile" name="image">
										 </div>
																
				<div class="form-group pt-2">
<p id="t1" style="color:red"></p>
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" onsubmit="return checkpassword();">تسجيل</button>
                </div>
				 </form>
               
              
            </div>
            <div class="card-footer bg-white">
                <p style="text-align: right;">تمتلك حساب   <a href="login.html" class="text-secondary" style="text-align: right;">تسجيل الدخول من هنا</a></p>
            </div>
        </div>
   
</body>

 
</html>