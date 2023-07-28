<?php
$pageTitle = 'Boucle For';
$mainTitle = 'Boucle For';
require './layout/header.php';
require './data/users.php';
?>

<div class="container"> <?php
                        for ($i = 0; $i < count($users); $i++) {
                        ?>
        <div class="card">
            <h3> <?php echo "Utilisateur n°: " . $i + 1; ?> </h3>
            <h5> <?php echo "Name: " . $users[$i]['name']; ?> </h5>
            <p> <?php echo "Email: " . $users[$i]['email']; ?> </p>
            <p> <?php echo "age: " . $users[$i]['age']; ?> </p>
        </div>
    <?php
                        };
    ?>
</div>
<?php
require './layout/footer.php';
