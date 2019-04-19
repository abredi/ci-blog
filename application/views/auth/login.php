<div class="row">
  <div class="col-sm-8 mx-auto">
    <?php 
$attributes = array('class' => 'form form-signin');
echo form_open(site_url('auth/login'));
?>
<div class="img mx-auto">
<img class="login-logo" src="<?php echo base_url('assets/img/logo.jpg')?>" alt="" width="72" height="72">
</div>
  
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox"  value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>
  </div>
</div>

