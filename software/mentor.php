<?php
    $site_title = 'IEEE Software Saturdays';
    $site_index = '/software/';
    include '../header.php';
?>
<style>
    #centerside{
        width: 100%;
    }
</style>
<!-- Content Row -->
<div class="well card-1">
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="index.php" class="list-group-item">Software Saturdays</a>
                <a href="attendee.php" class="list-group-item">Join as an Attendee</a>
                <a href="mentor.php" class="list-group-item">Join as a Mentor</a>
                <a href="android.php" class="list-group-item">Join for Android</a>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-9 text-dark">
            <h2 class="text-center">Join as a Mentor</h2>
            <div class="col-md-12 text-dark">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdIuq0jDKHSXarWcxJ9siWDb_Tyn63yew4spm8HI5FG_BHhow/viewform?usp=sf_link" width="100%" height="700" frameborder="0">Loading...</iframe>
            </div>
        </div>
    </div>
</div>

<?php include './staff.php';?>

<?php include '../footer.php';?>
