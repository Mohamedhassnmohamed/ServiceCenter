
<div class="dashboard-header" dir=rtl>
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index1.php">مركز الخدمات العامة للرسائل العلمية والبحوث-جامعة أسيوط</a>
				
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    
                        
                       <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

	<img src='assets/images/avatar-2.jpg' class='user-avatar-md rounded-circle' /></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info" style="text-align: right;">
                                    <h5 style="text-align: right;" class="mb-0 text-white nav-user-name"><?php echo $_SESSION["name"];?></h5>
                                     <h5 style="text-align: right;" class="mb-0 text-white nav-user-name"><?php echo $_SESSION["type"];?></h5>
                                </div>
                                <a style="text-align: right;" class="dropdown-item" href="editcaacount.php"><i class="fas fa-user mr-2"></i>تعديل بيانات الحساب</a>
                            
                                <a style="text-align: right;"class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>تسجيل الخروج</a>
                            </div>
                    </ul>
                </div>
				
            </nav>
        </div>