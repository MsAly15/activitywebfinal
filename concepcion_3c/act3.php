<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>third</title>
</head>
<body>
    <?php
    require_once "pdo.php";
    echo "<pre>\n";
    $stmt = $pdo->query("SELECT * FROM user");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($rows);
    echo "</pre>\n";
    ?>
</body>
</html>