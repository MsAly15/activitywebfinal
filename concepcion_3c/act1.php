<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>activity 12-05</title>
</head>
<body>
    <?php
    echo "<pre>\n";
    $pdo=new PDO('mysql:host=localhost;port=3306;dbname=misc', 'root', '');
    $stmt = $pdo->query("SELECT * FROM user");
    $rows = $stmt->fetchAll (PDO::FETCH_ASSOC);
    print_r($rows);
    echo "<pre\n";
    ?>
</body>
</html>