<?php include("includes/header.php"); ?>

<?php $fake_session = true; if ($fake_session == false) : //!$session->is_signed_in() == false ?>
    
    <?php redirect("login.php"); ?>

<?php else : ?>

    <!-- Main Top Nav -->
    <?php include("includes/top-navigation.php"); ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">

            <!-- Sidebar Nav -->
            <?php include("includes/sidebar-navigation.php"); ?>
            
        </div>

        <div id="layoutSidenav_content">

            <!-- Admin Content -->
            <?php include("includes/admin-content.php") ?>

        </div>
    </div>

<?php endif; ?>


<?php include("includes/footer.php"); ?>
