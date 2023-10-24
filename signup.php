<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>مركز الخدمات العامة للرسائل العلمية والبحوث</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/bootstrap.min.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>

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
	<script>
	 $(document).ready(function(){
      document.getElementById("formSubmit").on("submit",function(e){
        e.preventDefault();
        var pwd = document.getElementById("p1").val();
        var email = document.getElementById("email").val();
      if (pwd !=="" && email !== "") {
            $.ajax({
              url : "checkUsername.php",
              type : "POST",
              cache:false,
              data : {pwd:pwd,email:email},
              success:function(result){
                if (result == 1) {
                  document.getElementById("message").text('Sorry... username or Email is already exists');
                }else{
                 document.getElementById("message").text('');
                }
              }
            });
        }else{
          document.getElementById("message").text('الرجاء مل كل القيم');
        }
      });
  });
	function validateform() {
	
  var d1=document.getElementById("p1");
    var d2=document.getElementById("p2");
    var cr=document.getElementById("cr");

	
	if(d1.value&&d2.value){
	if(d1.value!=d2.value)
	{
			
		alert("خطا يجب تطابق الارقام السريه");	
d1.focus();
	return false;
	}
	}
	
	
	
	return true;
	}
	
	</script>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
       <!-- ============================================================== -->
      
        
    <form class="splash-container" action="phpcode/signup.php" method="post"  enctype="multipart/form-data" onsubmit="return validateform();">
        <div class="card">
		 <div class="card-header">
		                 <h3 class="mb-1" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 20px;    font-family: 'Circular Std Book';text-align: center;color:red">مركز الخدمات العامة للرسائل العلمية والبحوث </h3>
		                 <h3 class="mb-1" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 20px;    font-family: 'Circular Std Book';text-align: center;color:red">جامعة أسيوط</h3>

                                     <img style="margin-left:50px;"   width="200" height="150" src='logo1.jpg'  />
  
			</div>
            <div class="card-header">
                <h3 class="mb-1" style="background-color: #cce5ff;border-color: #b8daff;border: 5px solid transparent;border-radius: .25rem;color:black;font-size: 30px;line-height: 20px;    font-family: 'Circular Std Book';text-align: center;color:red">صفحة إنشاء حساب جديد</h3>
				                              <h3 style="color:green;text-align:right;" dir=rtl><?php  if(isset($msg)){ echo $msg;}?></h3>
           
		   </div>
            <div class="card-body"  dir=rtl>
			
                <div class="form-group" style="text-align: right;">

				                                                <label style="text-align: right;" for="inputText3" class="col-form-label">الاسم بالكامل رباعي</label>

                    <input class="form-control form-control-lg"  value="" name="fullname"   autocomplete="off" style="text-align: right;" required>
                </div>
                <div class="form-group" style="text-align: right;">
								                                                <label style="text-align: right;" for="inputText3" class="col-form-label">الرقم القومي أو رقم الباسبور</label>

                    <input class="form-control form-control-lg" id="cr" type="text" name="national_number"  maxlength="14"  autocomplete="off" style="text-align: right;" required>
                </div>
                
                <div class="form-group" style="text-align: right;">
	 <label style="text-align: right;" for="inputText3" class="col-form-label">البريد الالكتروني-يجب استخدام ايميل مفعل وصحيح</label>

                    <input class="form-control form-control-lg" id="email" name="email" type="email" required autocomplete="off"  style="text-align: right;" required>

				</div>
                <div class="form-group" style="text-align: right;">
					 <label style="text-align: right;" for="inputText3" class="col-form-label">الرقم السري</label>
                    <input class="form-control form-control-lg"  id="p1" name="password" type="password"  autocomplete="off"  style="text-align: right;"   required>
                </div>
                <div class="form-group" style="text-align: right;">
									 <label style="text-align: right;" for="inputText3" class="col-form-label">تاكيد الرقم السري</label>

                    <input class="form-control form-control-lg"  id="p2" type="password"  autocomplete="off"  style="text-align: right;" required>
                </div>
                <div class="form-group" style="text-align: right;">
				
				 <h1 id="id1" style="color:red;font-style:bold;"><?php  if(isset($_GET["first_name"])) echo $_GET["first_name"];?></h1>
				 
				 

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
                <p style="text-align: right;">تمتلك حساب   <a href="login.php" class="text-secondary" style="text-align: right;">تسجيل الدخول من هنا</a></p>
            </div>
        </div>
   
</body>

 
</html>