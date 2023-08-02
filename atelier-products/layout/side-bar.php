<?php require __DIR__ . '/../data/products.php'; ?>
<nav class="side-bar">
    <?php foreach ($products as $product) { ?>
        <li><a href=" /exo_tag/produits.php?id=<?php echo $product['id']; ?> "><?php echo $product['name'] ?></a></li>
    <?php }; ?>
</nav>