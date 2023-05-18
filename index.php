<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<?php
include_once __DIR__.'/DataBase/db.php';
?>

<section class="container">
    <div>
        <?php function printProduct($products) {?>
            <div class="row">
                <?php foreach ($products->sottocategorie as $product) {?>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="cont-img">
                                <img class="product-image" src="<?php echo $product->immagine ?>" alt="bo">
                            </div>
                            <span><i class="<?php echo $products->getIcon() ?>"></i></span>
                            <h4><?php echo $product->nome ?></h4>
                            <p><?php echo $product->descrizione ?></p>
                            <p><?php echo $product->prezzo ?></p>
                            <?php if (!isset($product->productType)) {?>
                                <p><?php echo $product->getSize() ?></p>
                            <?php } else {?>
                                <p><?php echo $product->productType ?></p>
                            <?php }?>
                        </div>
                    </div>
                <?php }?>
            </div>
        <?php }?>
    </div>
    
</section>
</body>
</html>