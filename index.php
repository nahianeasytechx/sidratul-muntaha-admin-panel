<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Dashboard'; // Set the page title
?>
<?php require './components/header.php'; ?>

<!--------------------------->
<!-- START MAIN AREA -->
<!--------------------------->
<div class="content-wrapper">
  <div class="dashboard">
    <!-- Statistics Cards -->
    <div class="stats-container">
      <div class="stat-card">
        <div class="stat-card-content">
          <div class="stat-icon donate">
            <i class="fa-solid fa-hand-holding-dollar"></i>
          </div>
          <div>
            <p class="stat-card-label">Donations</p>
            <h3 class="stat-card-value">2</h3>
          </div>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-card-content">
          <div class="stat-icon media-files">
            <i class="fa-solid fa-photo-film"></i>
          </div>
          <div>
            <p class="stat-card-label">Media Files</p>
            <h3 class="stat-card-value">150</h3>
          </div>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-card-content">
          <div class="stat-icon notice">
            <i class="fa-solid fa-flag"></i>
          </div>
          <div>
            <p class="stat-card-label">Active Notices</p>
            <h3 class="stat-card-value">12</h3>
          </div>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-card-content">
          <div class="stat-icon activities">
            <i class="fa-solid fa-calendar-days"></i>
          </div>
          <div>
            <p class="stat-card-label">Activities</p>
            <h3 class="stat-card-value">12</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Quick Actions -->
    <h2 class="quick-actions-title">Quick Actions</h2>
    <div class="quick-actions-container">
      <!-- New Notice -->
      <button class="quick-action-card" onclick="window.location.href='add-notice.php'">
        <a href="add-notice.php">
          <div class="quick-action-icon new-notice">
            <i class="fa-solid fa-plus"></i>
          </div>
          <p class="quick-action-title">New Notice</p>
        </a>
      </button>

      <!-- Upload Media -->
      <button class="quick-action-card" onclick="window.location.href='upload-media.php'">
        <a href="gallery.php">
          <div class="quick-action-icon upload-media">
            <i class="fa-solid fa-upload"></i>
          </div>
          <p class="quick-action-title">Upload Media</p>
        </a>
      </button>

      <!-- Add Activity -->
      <button class="quick-action-card" onclick="window.location.href='add-activity.php'">
        <div class="quick-action-icon add-activity">
          <i class="fa-solid fa-calendar-plus"></i>
        </div>
        <p class="quick-action-title">Add Activity</p>
      </button>


    </div>
  </div>
</div>
<!--------------------------->
<!-- END MAIN AREA -->
<!--------------------------->

<?php require './components/footer.php'; ?>