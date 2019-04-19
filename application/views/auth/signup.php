<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-center">
  <h2 style="color: cornsilk;">
    <?php echo $page; ?>
  </h2>
</nav>
<div class="row">
  <?php if ($this->session->flashdata('alert') !== NULL) { ?>
    <div class="col-12">
      <div class="d-flex justify-content-center alert alert-<?php echo $_SESSION['alert']['type']; ?>" role="alert">
        <?php echo $_SESSION['alert']['msg']; ?>
      </div>
    </div>
  <?php } ?>
</div>
<div class="row">
  <div class="col-10 col-sm-8 mx-auto py-2">
    <div class="card">
      <div class="card-body pb-0">
        <div class="text-danger">
          <?php echo validation_errors(); ?>
        </div>
        <?php
        $attributes = array('class' => 'form form-signin');
        echo form_open(site_url('auth/signup'));
        ?>
        <label for="title">Email</label>
        <input type="input" name="inputEmail" value="" class="form-control" required autofocus /><br />
        <label for="text">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-<?php echo date('Y'); ?></p>
        </form>
      </div>
    </div>
  </div>
</div>