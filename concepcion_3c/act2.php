<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $pdo=new PDO('mysql:host=localhost;port=3306;dbname=misc', 'root', '');
    $stmt = $pdo->query("SELECT name, email, password FROM user");
    $rows = $stmt->fetchAll (PDO::FETCH_ASSOC);
    
    echo '<table border="1">'."\n";
    foreach ($rows as $row) {
        echo"<tr><td>";
        echo ($row['name']);
        echo("</td><td>");
        echo ($row['email']);
        echo("</td><td>");
        echo ($row['password']);
        echo("</td></tr>");

    }
    echo "</table>\n";
    ?>
</body>
</html>