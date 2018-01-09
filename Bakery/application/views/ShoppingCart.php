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

