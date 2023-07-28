<?php
$pageTitle = 'Boucle ForEach';
$mainTitle = 'Boucle ForEach';
require './header.php';
require '../data/users.php';
foreach ($users as $k => $user) {    ?>
    <hr>
    <h3> <?php echo "Utilisateur n°" . $k + 1; ?> </h3>
    <br>
    <?php echo "Name " . $user['name']; ?>
    <p> <?php echo "Email " . $user['email']; ?> </p>
    <p> <?php echo "Age  " . $user['age']; ?> </p>
<?php
};
