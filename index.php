<!--
  ~ Copyright (c) 2022.
  ~ Giacchini Valerio - 5AIN
  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <?php
    require 'Connection.php';
    $conn = new Connection('Students');
    $query = "INSERT INTO students.student(name, surname, birth) VALUES (?,'Marco','2000-06-03');";
    $table = $conn->execute($query, ['Vlad']);
    $query = "SELECT * FROM students.student;";
    $table = $conn->execute($query);
    echo Connection::generate_table($table, ['id', 'name', 'surname', 'birth']);
    ?>
</body>
</html>