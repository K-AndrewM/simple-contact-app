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
            <h1>Contact Form</h1>
           </div>
        </header>
        <div class="container py-5 w-50">
            <form action="submit-message.php" class="form-group" method="post">
                <label for="">Name:</label>
                <input type="text" name="fname" class="form-control mb-2" placeholder="Insert name" Required>  
                <label for="">Email:</label>
                <input type="email" name="femail" class="form-control mb-2" placeholder="Samplemail@email.com" Required>
                <label for="">Message: </label>
                <textarea name="fmessage" id="" class="form-control mb-2" placeholder="Your message..." Required></textarea>
                <input type="submit" name="message-submit" value="SUBMIT" class="btn btn-success w-100 my-2 py-2 fw-bold fs-3">
            </form>
                <?php 
                
                    if(isset($_GET['msg-sent'])){
                        echo "<h4 class='text-center'>".$_GET['msg-sent']."</h4>";
                    }
                
                ?>
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
