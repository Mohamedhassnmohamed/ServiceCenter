 <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">الدرجات</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav" >
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider" dir=rtl>
                           القائمه الرئيسيه
                            </li>
                           
                           
 
 
							    
                           <li class="nav-item">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>إستمارة فحص</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
									
                                         <li class="">
                                            <a class="nav-link" href="registertopic.php">تقديم طلب فحص موضوع</a>
                                       </li>
									   
									   
                                        
									
                                    </ul>
                                </div>
                            </li>

                          



							
<?php  include_once("phpcode/dbconec.php");
$id_user=$_SESSION["id_user"];
$sql = "SELECT * from check_form  where id_user='$id_user'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
       
		
      if($count>=1)
	  {  ?>
 <li class="nav-item">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-rocket"></i>طلب الحصول علي خدمة</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
									
                                          <li class="">
                                            <a class="nav-link" href="Services.php">طلب الحصول علي خدمة</a>
                                       </li>							

							
                                    </ul>
                                </div>
                            </li>

                          
							
	  <?php }?>				
							
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>