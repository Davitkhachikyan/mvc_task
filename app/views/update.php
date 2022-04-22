<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
UPDATE
<form action="product/update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id']?>">
    <input type="file" name="file" id="fileToUpload" value="<?= $data['image']?>"><br><br>
    <input type="text" name="name" value="<?= $data['name']?>">name<br><br>
    <input type="text" name="description" value="<?= $data['description']?>">description <br><br>
    <input type="submit" value="Update" name="submit"> <br><br>
</form>

</body>
</html>