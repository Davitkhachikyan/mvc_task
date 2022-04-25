<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="display: flex">
<img src="../../public/<?= $data['image'] ?>" style="height: 500px;width: 500px;">
    <div style="margin-left: 50px;width: 100%;">

        <?php foreach ( $data['comments'] as $value) { ?>

        <div style="width: 80%;height: auto;border: solid black 1px;margin-top: 10px">
            <span>User email:<?php echo $value['user_name'] ?></span>    <span>| Stars: <?php echo $value['stars'] ?> </span>
            <p>Comment:  <?php echo $value['comment_text'] ?></p>


        </div>
        <?php } ?>
    </div>

</div>

</body>
</html>