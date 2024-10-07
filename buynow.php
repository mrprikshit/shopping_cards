<?php
$name = $_GET['na'];
$about = $_GET['ab'];
$image = $_GET['img'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy a template</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div style="background: url('admin/images/<?php echo $image;?>'); background-position: center; background-size: cover;" class="cont">
        <div class="items">
            <div class="item">
                <h1 class="text-white"><?php echo $name;?></h1>
                <p class="text-white">
                   <?php echo $about; ?>
                </p>
                <button class="btn btn-light z-in-100">Buy now</button>
            </div>
        </div>
    </div>
</body>

</html>