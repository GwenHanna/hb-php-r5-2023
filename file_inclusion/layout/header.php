<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/file_inclusion/assets/style.css">
    <title> <?php echo isset($pageTitle) ? $pageTitle : "Exo PHP" ?> </title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/file_inclusion/layout/test.php">Test</a></li>
                <li><a href="/file_inclusion/loop_for.php">Boucle For</a></li>
                <li><a href="/file_inclusion/layout/loop_while.php">Boucle While</a></li>
                <li><a href="/file_inclusion/layout/loop_foreach.php">Boucle ForEach</a></li>
            </ul>
        </nav>
        <h1> <?php echo isset($mainTitle) ? $mainTitle : ''; ?> </h1>
    </header>