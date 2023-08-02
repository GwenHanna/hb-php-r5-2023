<?php
require __DIR__ . '/data/products.php';

require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/layout/side-bar.php'; ?>

<div class="container">
    <?php foreach ($products as $key => $value) { ?>
        <div class="card">
            <h4> <?php echo $value['name']; ?> </h4>
            <span> <?php echo 'Prix HT ' . $value['price']; ?> </span>
            <span> <?php echo 'Prix TTC ' . priceTTC($value['price']); ?> </span>
            <img src="<?php echo $value['img']; ?>" alt="<?php $value['name']; ?>">
            <?php foreach ($value['tags'] as $keytag => $tag) { ?>
                <?php foreach ($tags as $k => $t) {
                    if ($k === $tag) { ?>
                        <p> <?php echo 'Mot Clé :  ' . $t['name'] ?> </p>

            <?php }
                }
            } ?>
        </div>
    <?php }; ?>
</div>

<?php
require_once __DIR__ . '/layout/footer.php';
