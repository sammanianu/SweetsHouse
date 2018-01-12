<?php include 'Templates/Header1.php' ?>

<link rel="stylesheet" href="<?php echo base_url();?>/css/css/register.css">

<br><br><br>
<?php echo form_open('AddProduct/addProducts'); ?>

<div class="container col-md-offset-2 col-md-8 form-horizontal">

    <h2 align="center">Add New Product</h2><br>


    <div >
        <?php if ($this->session->flashdata('msg')){
            echo "<h3 style='color: #17B978' align='center'>".$this->session->flashdata('msg')."</h3>";} ?>
        <?php echo "<h5 align='center' style='color: red'>".validation_errors()."</h5>"; ?>
    </div>

    <div class="form-group">
        <label for="lastName" class="col-sm-3 control-label">Product Name</label>
        <div class="col-sm-9">
            <input type="text"  placeholder="Product Name" class="form-control" autofocus name="productName">
        </div>
    </div>

    <div class="form-group">
        <label for="firstName" class="col-sm-3 control-label">Category ID</label>
        <div class="col-sm-9">
            <select name="categoryID">
                <option value="Cakes">Cakes</option>
                <option value="CupCakes">CupCakes</option>
                <option value="Pastries">Pastries</option>
                <option value="Breads">Breads</option>
                <option value="WCakes">WCakes</option>
                <option value="BCakes">BCakes</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="lastName" class="col-sm-3 control-label">Product Price</label>
        <div class="col-sm-9">
            <input type="text"  placeholder="Product Price" class="form-control" autofocus name="productPrice">
        </div>
    </div>

    <div class="form-group">
        <label for="lastName" class="col-sm-3 control-label">Product Image</label>
        <div class="col-sm-9">
            <input type="text"  placeholder="Product Image (Eg: a.jpg)" class="form-control" autofocus name="productImage">
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-9 col-sm-offset-3">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </div>
<br><br><br><br><br>
</div>
<?php echo  form_close(); ?>
