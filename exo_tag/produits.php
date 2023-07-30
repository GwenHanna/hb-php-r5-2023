<?php require __DIR__ . '/data/products.php';

foreach ($products as $key => $value) { ?>
    <h4> <?php echo $value['name']; ?> </h4>
    <span> <?php echo $value['price']; ?> </span>
    <img src="<?php echo $value['img']; ?>" alt="<?php $value['name']; ?>">
    <?php foreach ($value['tags'] as $keytag => $tag) { ?>
        <?php foreach ($tags as $k => $t) {
            if ($k === $tag) { ?>
                <p> <?php echo 'Mot Clé :  ' . $t['name'] ?> </p>

<?php }
        }
    }
};
