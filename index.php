<?php
include("database/connection.php");
$query = mysqli_query($connect, "SELECT * FROM cart_details");
// $res = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <header>
        <div class="bg-dark collapse" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-white">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li class="link_li"><a href="#" class="text-white"><i class="bi bi-instagram"></i> Follow us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>WCS</strong>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Bootstrap Templates</h1>
                    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">Main call to action</a>
                        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <!-- cart card -->
                     <?php
                     $id = "hello";
                     while($res = mysqli_fetch_assoc($query)) {
                     
                     ?>
                    <div class="col" title="<?php echo $res["product_name"]?>">
                        <?php $s_name = $res["product_name"]; $s_about = $res["about_product"]; $s_image = $res["image"];?>
                        <div class="card shadow-sm">
                            <img class="rounded-2" src="admin/images/<?php echo $res['image'];?>">
                            <div class="card-body">
                                <p class="card-text"><?php echo $res['about_product'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href='buynow.php?na=<?php echo $s_name;?>&ab=<?php echo $s_about;?>&img=<?php echo $s_image;?>'><button type="button" class="btn btn-sm btn-primary mx-2 px-2 py-2"><i class="bi bi-cart-fill"></i> Buy Now</button></a>
                                        <a href="#"><button type="button" class="btn btn-sm btn-outline-success px-2 py-2"><i class="bi bi-window-fullscreen"></i> Live Preview</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- card end -->
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#"><i class="bi bi-caret-up-square-fill text-primary fs-5"></i></a>
            </p>
            <p class="mb-1">Album example is © Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>
    <iframe id="DuhcXRov" frameborder="0" src="chrome-extension://ekhagklcjbdpajgpjgmbionohlpdbjgc/translateSandbox/translateSandbox.html" style="width: 0px; height: 0px; display: none;"></iframe>
</body>
<!-- bootstrap 5 javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>



<!-- <div class="col">
    <div class="card shadow-sm">
        <img class="rounded-2" src="images/img1.jpg" alt="">
        <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim natus nisi, voluptate error ipsam placeat atque facere. Iusto, incidunt omnis. Numquam, soluta tenetur assumenda error laboriosam corrupti dolor beatae quisquam necessitatibus. Quidem, eius quasi. Aspernatur sint iusto architecto iste. Non repellendus nobis excepturi quibusdam doloribus, optio dolore? Esse, magni quia?</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-sm btn-primary mx-2 px-2 py-2"><i class="bi bi-cart-fill"></i> Buy Now</button></a>
                    <a href="#"><button type="button" class="btn btn-sm btn-outline-success px-2 py-2"><i class="bi bi-window-fullscreen"></i> Live Preview</button></a>
                </div>
            </div>
        </div>
    </div>
</div> -->

