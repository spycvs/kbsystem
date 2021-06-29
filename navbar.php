<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("Location: ../index.php");
  exit();

}
  include "db_conn.php"
?>
<nav>
    <!-- time -->
    <?php include('../nav-time-date.php'); ?>

    <div class="dashboard-logo">
        <img src="../img/kbnav-logo.png" alt="" />
    </div>
    <div class="links">
       
        <a href="../n_residents/residents.php" class="link">
            <img src="../img/icons/residents-60.png" alt="" />
            <h3>Residents</h3>
        </a>
       
        <a href="../n_reports/reports.php" class="link">
            <img src="../img/icons/reports-60.png" alt="" />
            <h3>Reports</h3>
        </a>

        <a href="../logout.php" class="link">
             <img src="../img/icons/exit-60.png" alt="" />
             <h3>Logout</h3>
        </a>
    </div>
</nav>