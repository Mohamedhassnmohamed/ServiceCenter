<!doctype html>
<html lang="en">
 <title>مركز الخدمات العامة للرسائل العلمية والبحوث </title>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">
<h3 class="mb-1" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 20px;    font-family: 'Circular Std Book';text-align: center;">مركز الخدمات العامة للرسائل العلمية والبحوث </h3>
		                 <h3 class="mb-1" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 20px;    font-family: 'Circular Std Book';text-align: center;">جامعة أسيوط</h3>
 <img src="logo1.jpg" width="200" height="200">
                 <h3 class="mb-1" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 20px;    font-family: 'Circular Std Book';text-align: center;color:red">صفحة تسجيل الدخول</h3>

            <div class="card-body">
                <form method="post" action="phpcode/checklogin.php">
                    <div class="form-group">
                        <input style="text-align: right;" name="email" class="form-control form-control-lg" id="username" type="text" placeholder="الايميل" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input style="text-align: right;" name="password" class="form-control form-control-lg" id="password" type="password" placeholder="الرقم السري" autocomplete="off" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">تسجيل الدخول</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  " dir=rtl>
                <div class="card-footer-item card-footer-item-bordered"  dir=rtl>
                    <a href="signup.php" class="footer-link" style="font-size: 20px;text-align: right;color:red;" >اضغط لأنشاء حساب جديد</a></div>
                
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>