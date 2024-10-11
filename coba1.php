<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- tag pembuka -->
    <form action="form_action.php" method="post">
        <label for="">username</label>
        <input type="text" name="username" placeholder="Username">

        <button type="submit">kirm</button>
    </form>
    <!-- tag penutup -->

    <?php
    //menampung value/nilai yang di inputkan oleh user
    // $username = $_POST[ 'username'];
    //menampung value/nilai yang di inputkan oleh user
    //echo "username adalah " . $username;
    ?>
</body>

</html>