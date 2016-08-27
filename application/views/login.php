<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="<?=site_url()?>home/loginpro" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="user_name" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  <div class="form-group has-feedback">
            <select name="role" class="form-control">
			
			  <option>Login as</option>
			  <option value="member">Member</option>
			  <option value="user">user</option>
			</select>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
		  <div class="form-group has-feedback">
            <select name="branch" class="form-control">
			
			  <option>Select Branch</option>
			  <?php foreach ($data['branch'] as $branch ) : ?>
			  <option value="<?= $branch->b_id; ?>"><?= $branch->b_name; ?></option>
			  <?php endforeach; ?>
			</select>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="row">
            
            <div class="col-xs-4">
              <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        
        <a href="register.html" class="text-center">Register a new membership</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->