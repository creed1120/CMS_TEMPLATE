<?php 
    include("includes/header.php");

    // $color = "Blue";
    // echo "The variable called \"color\" displays $color ";
?>

<style>
    form label {
        display: block;
    }

    @media (min-width:320px) {
        form input:not(input[type=submit]) {
            margin: 0 0 10px;
            max-width: 100%;
            width: 100%;
            height: 40px;
            padding: 0 10px;
        }
    }
    @media (min-width:801px) {
        form input:not(input[type=submit]) {
            margin: 0 0 10px;
            max-width: 100%;
            width: 50%;
            height: 40px;
            padding: 0 10px;
        }
    }

    form input[type=submit] {
        display: block;
        margin-top: 1em;
    }
</style>

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <!-- <h4><a href="index2.php?color=<//?php echo $color ?>">Go to page 2 &rsaquo;</a></h4>
            
            <form action="pass_params.php" method="get">

                <label for="name">Number</label>
                <input type="number" name="number">

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email">

                <label for="phone">Phone</label>
                <input type="phone" name="phone" placeholder="Phone">

                <input type="submit" value="Submit">

            </form> -->

            <h1 class="text-color-purplish">This should be purplish text</h1>
            <button type="button" class="btn btn-purplish text-white">Primary</button>
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
        
            <?php include("includes/sidebar.php"); ?>
        
    </div>
    <!-- /.row -->

<?php include("includes/footer.php"); ?>
