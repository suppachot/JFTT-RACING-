<?php require_once('backed/condb.php');

    $query_product = "SELECT * FROM tbl_product as p INNER JOIN tbl_type as t 
    ON  p.type_id = t.type_id
    ORDER BY p.p_id ASC";
    $result_pro = mysqli_query($con, $query_product) or die("Error in query: $query_product " . mysqli_error());
    //echo($query_product);
    //exit()
?>

<div class="row">
   
    <?php foreach ($result_pro as  $row_pro){ ?>

        
        <div class="card" style="width: 18rem;" margin-top : 10px;>
        <img class="card-img-top" src="backed/p_img/<?php echo $row_pro['p_img']?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row_pro['p_name']?></h5>
            <p class="card-text">
                ยี่ห้อ <?php echo $row_pro['type_name']?>
            </p>
            <p class="card-text">
                ราคา <?php echo number_format($row_pro['p_price'])?> บาท
            </p>
            <p class="card-text">
                รายละเอียดสินค้า :   <?php echo $row_pro['p_detail']?> 

            </p>
            <a href='cart.php?p_id=$row_pro[p_id]&act=add' class="btn btn-primary">เพิ่มลงตะกร้าสินค้า</a>
        </div>
    </div> 
   <?php } ?>

   

    
</div>