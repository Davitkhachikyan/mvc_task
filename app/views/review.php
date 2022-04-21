<!doctype html>
<html lang="en">
<head>
    <style>
        .wrapper {
            display: flex;
            justify-content: center;
        }
        .wrapper * {
            float: right;

        }
        .inp {
            display: none;
        }
        label {
            font-size: 30px;
        }

        .inp:checked ~ label {
            color: orange;
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="display: flex;justify-content: center">

    <div style="width: 300px;height: 200px;border: solid 2px black">
    </div>

</div>

<form method="post" style="display: flex;justify-content: center" action="../review/create">
    <div class="wrapper" style="flex-wrap: wrap;width: 200px;" >
    <div>
        <div>
            <input type="radio" id="r1" class="inp" name="star" value="5">
            <label for="r1">&#10038;</label>
            <input type="radio" id="r2" class="inp" name="star" value="4">
            <label for="r2">&#10038;</label>
            <input type="radio" id="r3" name="star" class="inp" value="3">
            <label for="r3">&#10038;</label>
            <input type="radio" id="r4" name="star" class="inp" value="2">
            <label for="r4">&#10038;</label>
            <input type="radio" id="r5" name="star" class="inp" value="1">
            <label for="r5">&#10038;</label>

        </div><br/>
        <div>

            <input type="text" placeholder="okk" name="comment_text" class="comment" style="display: block;width: 200px;min-height: 80px">
            <input type="submit" class="comment" style="display: block;margin-top: 20px">
<!--            <input type="hidden" value="" name="product_name">-->
        </div>
    </div>
    </div>
</form>

</body>
</html>
