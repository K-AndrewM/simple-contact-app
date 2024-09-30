<?php include('dbcon.php') ?>
<!doctype html>
<html lang="en">
    <head>
        <title>Contact Form</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
           <div class="container-fluid bg-dark text-light text-center py-3">
            <h1>View Messages</h1>
           </div>
        </header>
        <div class="container py-5 w-50">
            <table class="table table-hover striped">
                <thead>
                    <trow>
                        <th>Sender Name:</th>
                        <th>Sender Email:</th>
                        <th>Sender Message:</th>
                    </trow>
                </thead>
                <tbody>
                        <?php 
                        
                            $query = "SELECT * FROM `messages`";
                            $statement = mysqli_query($connect, $query);
                        
                            if (!$statement) {
                                die("Query failed". mysqli_error($connect));
                            }

                            else {
                                while ($row = mysqli_fetch_assoc($statement)) {
                                    ?>
                                <tr>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['message'];?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                </tbody>
            </table>
        </div>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>