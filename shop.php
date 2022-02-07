<?php session_start(); ?>
<?php include('h.php'); ?>
<?php error_reporting(0) ?>
<body>

    <?php include('nav_member.php'); ?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
        <div class="col-md-12 ">
                <div class="product-categori">                            
                        <div class="search-product">
                            <form action="shop.php" method="GET">
                                <input class="form-control" placeholder="Search here..." type="text" name="q">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                                
                            </form> 
                            
                                                                  
                        </div>        
                        
                                                                                   
                </div>  
                        
        </div>                            
               
                    <div class="right-product-box">                                            
                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">  
                                    <?php 
                                    $q=(isset($_GET['q'])? $_GET['q']:'');
                                    if($q!=''){
                                        include('show_product_q.php'); 
                                    }else{
                                         include('show_product.php'); 
                                    }                                                                                            
                                     ?>   

                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
               
        </div>
        
    </div
    >

    <!-- End Shop Page -->

    
    <!-- Start copyright  -->
    <div class="footer-copyright">
        
    </div>
    <!-- End copyright  -->

   

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>