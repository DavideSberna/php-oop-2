<?php
include_once __DIR__.'/../Models/Product.php';


$categoriaCani = new Category('Cani', 'fa-solid fa-dog');
$categoriaGatti = new Category('Gatti', 'fa-solid fa-dog');

$ciboPerCani = new Food('Cibo per Cani', 'Cibo nutriente per cani', 'https://www.my-personaltrainer.it/2021/04/13/dieta-del-cane-crocchette-e-alimentazione-industriale_900x760.jpeg', 10.99, $categoriaCani, 'Marca1');
$ciboPerGatti = new Food('Cibo per Gatti', 'Cibo gustoso per gatti', 'https://croci.net/wp-content/uploads/2020/09/Cibo_umido_gatto_gelatina.jpg', 8.99, $categoriaCani, 'Marca2');

$giocoPerCani = new Games('Pallina per Cani', 'Gioco interattivo per cani', 'https://m.media-amazon.com/images/I/61AcO-1PTIL._AC_SX425_.jpg', 5.99, $categoriaCani ,'Plastica');
$giocoPerGatti = new Games('Topo di Peluche per Gatti', 'Gioco morbido per gatti', 'https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dw608b0213/images_dmail/large/389837l_2.jpg', 3.99,$categoriaCani, 'Tessuto');

$cucciaPerCani = new Sitter('Cuccia per Cani', 'Cuccia comoda per cani', 'https://www.rioparty.it/32496-large_default/cuccia-per-cane-in-peluche-cuscino-morbido.jpg', 49.99, $categoriaCani);
$cucciaPerGatti = new Sitter('Cuccia per Gatti', 'Cuccia accogliente per gatti', 'https://ss-pics.s3.eu-west-1.amazonaws.com/files/2067961/large-s-l1600_20-_202021-11-29T174506.818.jpg?1638204597', 39.99,$categoriaCani);


try{   
    $cucciaPerCani->setSize('medio');
    $cucciaPerGatti->setSize('grande');
} catch(Exception $e){
    echo 'eccezione ' . $e->getMessage();

}

var_dump($cucciaPerCani);
var_dump($cucciaPerGatti);

$categoriaCani->subCategory($ciboPerCani);
$categoriaCani->subCategory($giocoPerCani);
$categoriaCani->subCategory($cucciaPerCani);

$categoriaGatti->subCategory($ciboPerGatti);
$categoriaGatti->subCategory($giocoPerGatti);
$categoriaGatti->subCategory($cucciaPerGatti);

printProduct($categoriaCani);
printProduct($categoriaGatti); 

// var_dump($categoriaCani);
// var_dump($categoriaGatti);

 
 


