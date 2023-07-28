<?php
$pageTitle = 'Boucle While';
$mainTitle = 'Boucle While';
require './header.php';
require '../data/users.php';
$i = 0;
while ($i < count($users)) { ?>

    <h3>Utilisateurs n° <?php echo $i ?> </h3>
    <h5>Name: <?php echo $users[$i]['name'] ?> </h5>
    <h5>Email: <?php echo $users[$i]['email'] ?> </h5>
    <h5>Age: <?php echo $users[$i]['age'] ?> </h5>
<?php
    $i++;
}
