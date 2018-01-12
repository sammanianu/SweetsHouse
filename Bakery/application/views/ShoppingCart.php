<?php include 'Templates/Header1.php' ?>

<br><br><br>
<div class="topic">
    <h2>-----------------------------Shopping Cart------------------------------</h2>

    <body>

    <div class="container">
        <br><br>



        <div class="col-lg-6 col-md-6">
            <div id="cart_details">
                <h3 align="center">Cart Empty</h3>
            </div>
        </div>



    </div>
    </body>
    </html>

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

            $(document).on('click','.remove_inventory',function () {

                var row_id = $(this).attr("id");
                if (confirm("Are you sure you want remove this?")){
                    $.ajax({
                        url:"<?php echo base_url();?>index.php/ShoppingCart/remove",
                        method:"POST",
                        data:{row_id:row_id},
                        success:function (data) {
                            alert("Product remove from cart");
                            $('#cart_details').html(data);
                        }
                    })
                }
                else {
                    return false;
                }
            });

            $(document).on('click','#clear_cart',function () {

                if (confirm("Are you sure you want remove cart?")){
                    $.ajax({
                        url:"<?php echo base_url();?>index.php/ShoppingCart/clear",
                        success:function (data) {
                            alert("Your cart has been clear");
                            $('#cart_details').html(data);
                        }
                    })
                }
                else {
                    return false;
                }
            });
        });
    </script>
</div>

<html>

