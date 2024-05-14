<!doctype html>
<html lang="en">

<?= $this->include('layouts/header'); ?>

<body>

  <!-- Loading wrapper start -->
  <?php
  $currentUrl = current_url();
  if (strpos($currentUrl, 'dashboard') !== false) {
    echo $this->include('layouts/loading-wrapper');
  }
  ?>
  <!-- Loading wrapper end -->

  <!-- Page wrapper start -->
  <div class="page-wrapper">

    <!-- Sidebar wrapper start -->
    <nav class="sidebar-wrapper">

      <!-- Sidebar brand starts -->
      <?= $this->include('layouts/sidebar-brand'); ?>
      <!-- Sidebar brand starts -->

      <!-- Sidebar menu starts -->
      <?= $this->include('layouts/sidebar-menu'); ?>
      <!-- Sidebar menu ends -->

    </nav>
    <!-- Sidebar wrapper end -->

    <!-- *************
				************ Main container start *************
			************* -->
    <div class="main-container">

      <!-- Page header starts -->
      <?= $this->include('layouts/page-header'); ?>
      <!-- Page header ends -->

      <!-- Content wrapper scroll start -->
      <?= $this->renderSection('content-wrapper'); ?>
      <!-- Content wrapper scroll end -->

    </div>
    <!-- *************
				************ Main container end *************
			************* -->
  </div>
  <!-- Page wrapper end -->

  <!-- *************
			************ Required JavaScript Files *************
		************* -->
  <?= $this->include('layouts/footer'); ?>

  <?php
  $currentUrl = current_url();
  if (strpos($currentUrl, 'analytics') !== false) {
    echo $this->include('layouts/apex-chart');
  }
  ?>

</body>

</html>