<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="/app/views/css/home.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
</head>
    <body>

<div>

<div>
    <div class="header-dark">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="">Evistep</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                     id="navcol-1">
                    <ul class="nav navbar-nav">
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
<!--                        <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>-->
                    </form><span class="navbar-text"><a href="home/logout" class="login">Log out</a></span>
            </div>
        </nav>
    </div>
</div>
</div>

<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Avarage review</th>
        <th>Image</th>
        <th>edit</th>
        <th>review</th>
        <th>delete</th>
    </tr>
    </thead>

    <tbody>

       <?php foreach ($data as $d){?>
    <tr>
        <td><?= $d['name'] ?></td>
        <td><?= $d['description'] ?></td>
        <td><?= $d['avg_review'] ?></td>
        <td><?= $d['image'] ?></td>
        <td><a href="update?id=<?= $d['id']?>" >update</a></td>
        <td><a href="review/?id=<?= $d['id']?>" >review</a></td>
        <td><a href="product/delete?id=<?= $d['id']?>" >delete</a></td>
    </tr>
    <?php } ?>

    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

<a href="upload"> <button>Add</button> </a>
</body>
</html>

