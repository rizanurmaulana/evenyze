<div class="page-header">

  <div class="toggle-sidebar me-3" id="toggle-sidebar"><i class="bi bi-list"></i></div>

  <!-- Welcome start -->
  <div class="welcome-note">
    Welcome, <span><?= session('name'); ?></span>
  </div>
  <!-- Welcome end -->

  <!-- Header actions ccontainer start -->
  <div class="header-actions-container">
    <!-- Header actions start -->
    <ul class="header-actions">
      <li class="dropdown">
        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
          <span class="d-none d-md-block me-3"><?= session('role'); ?></span>
          <span class="avatar">
            <img src="<?= base_url(); ?>/assets/images/user-default.jpg" alt="Admin Templates">
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
          <div class="header-profile-actions">
            <a href="profile">Profile</a>
            <a href="account-setting">Account Setting</a>
            <a href="logout">Logout</a>
          </div>
        </div>
      </li>
    </ul>
    <!-- Header actions end -->
  </div>
  <!-- Header actions container end -->
</div>