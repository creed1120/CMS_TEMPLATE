<?php

    // $class_methods = get_class_methods('user');

    // foreach ($class_methods as $method_name) {
    //     echo "$method_name </br>";
    // }

    // $dump_value = User::find_all_users();
    // $the_rows = $dump_value->num_rows;
    // echo $the_rows;
    // var_dump($dump_value);

    // echo "</br>";

    // while ($results = mysqli_fetch_assoc($dump_value)) {
    //     echo "<pre>";
    //     print_r($results);
    //     echo "</pre>";
    // }

    // foreach($dump_value as $results) {
    //     echo "<p>" . $results["username"] . "</p>";
    // }

?>

<style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
</style>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Users</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="/admin/">Dashboard</a> > Users</li>
        </ol>

        <?php
            /**
             * Manually Instantiate User Class
             */
            // $user = new User();

            /**
             * Automatially Instantiated by "static" function in User class
             */
            $users = User::find_all_users();
            $found_user = User::find_user_by_id(9);

            // $result_set_id = User::find_user_by_id(7);

            // $users = new User();

            // $users->id = $users["id"];
            // $users->first_name = $users["first_name"];
            // $users->last_name = $users["last_name"];
            // $users->username = $users["username"];

        ?>

        <?php if ($users == false) : ?>

            <p>No Records Found.</p>

        <?php else : ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>

                <?php foreach($users as $user) : ?>

                    <tr>
                        <td><?php echo $user->id; ?></td>
                        <td><?php echo $user->first_name; ?></td>
                        <td><?php echo $user->last_name; ?></td>
                        <td><?php echo $user->username; ?></td>
                    </tr>

                <?php endforeach; ?>
            </table>

        <?php endif; ?>
        
    </div>
</main>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2022</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>