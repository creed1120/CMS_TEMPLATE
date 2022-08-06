<?php 
    include("includes/header.php");

    $color = $_GET["color"];

    echo "The variable called \"color\" displays " . $color;
?>

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1>Page Two</h1>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
        
            <?php include("includes/sidebar.php"); ?>

        </div>
    </div>
    <!-- /.row -->

<?php include("includes/footer.php"); ?>
