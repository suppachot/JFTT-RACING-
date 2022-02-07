   <!-- Start Main Top -->
   <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/band.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item "><a class="nav-link" href="index.php">หน้าแรก</a></li>
                        <li class="nav-item "><a class="nav-link" href="shop.php">สินค้า</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="gallery.php">สาขา</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">ติดต่อทีมงาน</a></li>

                        <?php if( $_SESSION["user_id"] == "" ) { ?>
                        <li class="nav-item"><a class="nav-link" href="form_login.php">เข้าสู่ระบบ</a></li>
                        <?php } else{ ?>
                        <li class="dropdown">
                            <a  class="nav-link dropdown-toggle" data-toggle="dropdown">สวัสดีคุณ <?php echo $_SESSION["m_name"]; ?></a>
                            <ul class="dropdown-menu">

                            <?php if( $_SESSION["m_level"] == 1 ) { ?>
                                <li><a href="backed/index.php">จัดการ</a></li>
                                <?php }  ?>

                                <li> <a href='cart.php?p_id=$row_pro[p_id]&act=add' >ตะกร้าสินค้า</a>       </li>
								<li><a href="logout.php">ออกจากระบบ</a></li>
								
                            </ul>
                        </li>
                        
                        <?php } ?>        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->               
            </div>           
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->