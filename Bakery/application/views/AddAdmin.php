<?php include 'Templates/Header1.php' ?>

<link rel="stylesheet" href="<?php echo base_url();?>/css/css/register.css">

<br><br><br>
<?php echo form_open('AddAdmin/addNewAdmin'); ?>

<div class="container col-md-offset-2 col-md-8 form-horizontal">

    <h2 align="center">Add New Admin</h2><br>

    <div >
        <?php if ($this->session->flashdata('msg')){
            echo "<h3 style='color: #17B978' align='center'>".$this->session->flashdata('msg')."</h3>";} ?>
        <?php echo "<h5 align='center' style='color: red'>".validation_errors()."</h5>"; ?>
    </div>

    <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-9">
            <input type="email" id="email" placeholder="Enter the email of new admin " class="form-control" name="email">
        </div>
    </div>

    <div class="form-group">
        <label for="lastName" class="col-sm-3 control-label">User Type</label>
        <div class="col-sm-9">
            <input type="text"  class="form-control" name="userType" value="Admin" readonly>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-9 col-sm-offset-3">
            <button type="submit" class="btn btn-primary btn-block">Add</button>
        </div>
    </div>

</div>
<?php echo  form_close(); ?>
