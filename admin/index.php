<?php
include("../database/connection.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart || Admin Panel</title>
    <link rel="stylesheet" href="../style.css">
    <!-- bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="main">
        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="inputbox my-4">
                <label for="formFile" class="form-label">Template Thumbnail</label>
                <input name="pic" class="form-control" type="file" id="formFile">
                <div id="passwordHelpBlock" class="form-text">
                    Enter Template name or title
            </div>
        </div>
        <div class="inputbox my-4">
            <label for="inputPassword5" class="form-label">Template Name</label>
            <input name="name" class="form-control" type="text" placeholder="Default input" aria-label="default input example">
            <div id="passwordHelpBlock" class="form-text">
                Enter Template name/title
            </div>
        </div>
        <div class="inputbox my-4">
            <label for="inputPassword5" class="form-label">Template Info</label>
            <textarea name="about" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <div id="passwordHelpBlock" class="form-text">
                Enter Template about/info
            </div>
        </div>
        <button type="submit" class="btn btn-primary px-4">Upload</button>
    </form>
    </div>
</body>
<!-- bootstrap 5 javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>