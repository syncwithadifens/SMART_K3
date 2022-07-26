<section>

  <div class="box">

    <div class="square" style="--i:0;"></div>
    <div class="square" style="--i:1;"></div>
    <div class="square" style="--i:2;"></div>
    <div class="square" style="--i:3;"></div>
    <div class="square" style="--i:4;"></div>
    <div class="square" style="--i:5;"></div>

    <div class="container">
      <div class="form">
        <h2>Sign Up</h2>
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('auth/registration') ?>" method="POST">
          <div class="inputBx">
            <input type="text" id="fullname" name="fullname" value="<?= set_value('fullname'); ?>" required="required">
            <span>Fullname</span>
            <i class="fas fa-user-circle"></i>
            <div class="input-group">
              <?= form_error('fullname', '<small class="text-danger">', '</small>') ?>
            </div>
          </div>
          <div class="inputBx">
            <input type="text" id="username" name="username" value="<?= set_value('username'); ?>" required="required">
            <span>Username</span>
            <i class="fas fa-user-circle"></i>
            <div class="input-group">
              <?= form_error('username', '<small class="text-danger">', '</small>') ?>
            </div>
          </div>

          <div class="inputBx password">
            <input id="password-input" type="password" id="password" name="password1" required="required">
            <span>Password</span>
            <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
            <i class="fas fa-key"></i>
            <div class="input-group">
              <?= form_error('password', '<small class="text-danger">', '</small>') ?>
            </div>
            <br>
            <div class="inputBx password">
              <input id="password-input" type="password" id="password" name="password2" required="required">
              <span>Retype password</span>
              <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
              <i class="fas fa-key"></i>
              <div class="input-group">
                <?= form_error('password', '<small class="text-danger">', '</small>') ?>
              </div>
            </div>
            <div class="inputBx">
              <input type="submit" value="Sign Up">
            </div>
        </form>
        <p>Already have an account <a href="<?= base_url('auth/'); ?>">Log In</a></p>
      </div>
    </div>

  </div>
</section>
<script>
  function show_hide_password(target) {
    var input = document.getElementById('password-input');
    if (input.getAttribute('type') == 'password') {
      target.classList.add('view');
      input.setAttribute('type', 'text');
    } else {
      target.classList.remove('view');
      input.setAttribute('type', 'password');
    }
    return false;
  }
</script>