<?php include 'Templates/Header1.php' ?>

<br><br><br>
<div class="topic">
    <h2>------------------------------ABOUT US--------------------------------</h2>
</div>
<div>
    <!--<div class="col-lg-6 col-md-6">-->
        <div class="table-responsive">
            <h1 align="center">SHOPPING CART</h1><br>

            <?php
            foreach ($product as $row){

                echo '
                <div class="col-md-4">
                <div class="col-sm-5 col-md-offset-1 col-md-12" style="padding: 16px;
                background-color: #f1f1f1; border: 1px solid #ccc;
                margin-bottom: 16px; height: 500px" align="center">
                
                <img src="'.base_url().'css/images/'.$row->product_image.'" class="img-thumbnail" ><br>
                <h4>'.$row->product_name.'</h4>
                <h3 class="wy-text-danger">'.$row->product_price.'</h3>
                
                <input type="text" name="quantity" class="quantity" id="'.$row->product_id.'"><h4></h3>

                <button type="button" name="add_cart" class="btn btn-success add_cart" data-productname="'.$row->product_name.'"
                        data-price="'.$row->product_price.'" data-productid="'.$row->product_id.'">Add to Cart</button>
                        
            </div>
            </div>
                ';
            }

            ?>

        </div>
    <!--</div>-->

    <script>

        $(document).ready(function () {

            $('.add_cart').click(function () {
                var product_id = $(this).data("productid");
                var product_name = $(this).data("productname");
                var product_price = $(this).data("price");
                var quantity = $('#'+product_id).val();

                if (quantity !='' && quantity>0){

                    $.ajax({
                        url:"<?php echo base_url();?>index.php/ShoppingCart/add",
                        method:"POST",
                        data:{product_id:product_id,product_name:product_name,product_price:product_price,quantity:quantity},
                        success:function (data) {
                            alert("Product added into cart");
                            $('#cart_details').html(data);
                            $('#'+product_id).val('');
                        }
                    });
                }
                else {
                    alert("Please enter quantity");
                }
            });
            $('#cart_details').load("<?php echo base_url();?>index.php/ShoppingCart/load");

        });
    </script>
</div>



<br>