<?php require __DIR__ . '/../data/products.php';
foreach ($_GET as $data) { ?>
    <div class="card">
        <h4> <?php echo $products[$data]['name']; ?> </h4>
        <span> <?php echo 'Prix HT ' . $products[$data]['price']; ?> </span>
        <span> <?php echo 'Prix TTC ' . priceTTC($products[$data]['price']); ?> </span>
        <img src="<?php echo $products[$data]['img']; ?>" alt="<?php $products[$data]['img']; ?>">
    </div>
<?php };
