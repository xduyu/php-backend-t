<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers's form</title>
</head>
<body>
    <form action="./process.php" method="POST">
        <input type="text" placeholder="ФИО" name="fio"> <br>
        <input type="text" placeholder="Должность" name="position"> <br>
        <input type="number" placeholder="Phone" name="phone"> <br>
        <input type="number" placeholder="salary" name="salary"> <br>
        <button>save data</button>
    </form>
    <?php
    session_start();
    ?>
</body>
</html>