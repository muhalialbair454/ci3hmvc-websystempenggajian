<?php if ($this->session->flashdata("success")) { ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata("success"); ?>
    </div>
<?php } ?>

<?php if ($this->session->flashdata("error")) { ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata("error"); ?>
    </div>
<?php } ?>

<form action="<?php echo site_url("login/dologin") ?>" method="POST" name="formlogin" id="formlogin" class="user">
    <div class="form-group">
        <div class="form-error">
            <input type="text" name="txtusername" id="txtusername" class="form-control form-control-user" placeholder="Masukan Username..." value="">
            <?php echo form_error("txtusername"); ?>
        </div>
    </div>
    <div class="form-group">
        <input type="password" name="ppassword" id="ppassword" class="form-control form-control-user" placeholder="Masukan Password..." value="">
        <div class="form-error">
            <?php echo form_error("ppassword"); ?>
        </div>
    </div>
    <button type="submit" name="btnlogin" id="btnlogin" class="btn btn-primary btn-user btn-block">Login</button>
</form>
<hr>