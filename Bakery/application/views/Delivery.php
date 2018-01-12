<?php include 'Templates/Header1.php' ?>

<div class="container">


    <?php echo form_open('Delivery/DeliveryUser'); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-7" style="background-color: #78C2C3">
                <h2>Delivery Details</h2>

                <hr>

                <div >
                    <?php if ($this->session->flashdata('msg')){
                        echo "<h3 style='color: #0074E4'>".$this->session->flashdata('msg')."</h3>";} ?>
                    <?php echo "<h5 style='color: red'>".validation_errors()."</h5>"; ?>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" name="firstName">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="birthDate">Delivery Date</label>
                        <input type="date" id="birthDate" class="form-control" name="date">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name" name="lastName">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Contact Number" name="contactNumber">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" name="address">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Comment</label>
                            <textarea class="form-control" name="comment" rows="5" cols="30"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="radio">
                            <label class="radio-inline">
                                <input type="radio" name="type" id="inlineRadio1" value="Customer"><b>Home Delivery</b><br>
                                <input type="radio" name="type" id="inlineRadio1" value="StorePickup"><b>Store Pickup</b>
                            </label>
                        </div>
                    </div>
                </div>



                <div class="col-sm-offset-5 col-sm-2">
                    <button type="submit" class="btn btn-default"><b>Submit</b></button>
                    <br><br>
                </div>
                <br>
                <?php echo  form_close(); ?>

            </div>
        </div>
    </div>
</div>


