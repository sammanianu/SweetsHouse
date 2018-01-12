<?php include 'Templates/Header1.php' ?>

<link rel="stylesheet" href="<?php echo base_url();?>/css/css/register.css">

<br><br><br>
<?php echo form_open('Login/LoginUser'); ?>

<div class="container col-md-offset-2 col-md-8 form-horizontal">

    <h2 align="center">Login</h2><br>

    <?php if ($this->session->flashdata('errmsg')){
        echo "<h4 style='color:red;'>".$this->session->flashdata('errmsg')."</h4>";
    }
    ?>

    <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-9">
            <input type="email" id="email" placeholder="Email" class="form-control" name="email">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-3 control-label">Password</label>
        <div class="col-sm-9">
            <input type="password" id="password" placeholder="Password" class="form-control" name="password">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-9 col-sm-offset-3">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </div>

</div>
<?php echo  form_close(); ?>
