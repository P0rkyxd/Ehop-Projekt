<?php

include "../logika.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.tiny.cloud/1/kbcdv71ji48bkm1izmvyozftmzbctbipc8hm5t9r2qctbhel/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'autolink lists media  table ',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
    <link rel="stylesheet" href="../../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/forms.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tabulka_kategorie.css">
    <link rel = "icon" href ="../../images/web_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="../../css/blog_edit.css">
    <style>
        .nav-link{
            text-align: center;
        }
    </style>
    <title>WIP</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-purple" style="background-image: radial-gradient(100% 1000% at 100% 0, #5adaff 0, #5468ff 100%);">

    <div class="mx-auto order-1 w-75">
        <a class="navbar-brand mx-lg-5" href="../main.php">CBD Eshop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse  order-2  dual-collapse2">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link active" href='blog_admin.php'>Domů</a>

            </li>

            <li class='nav-item'>
                <a class='nav-link active' style="width:9rem;" href='blog_edit.php'>Úprava Příspěvků</a>

            </li>

            <li class='nav-item'>
                <a class='nav-link active ' style="width:8.5rem;" href='blog_uprava_kategorii.php'>Úprava kategorií</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active'  href='#'>WIP</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link active'  href='#'>WIP</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link active'  href='#'>WIP</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link active'  href='#'>WIP</a>
            </li>

        </ul>
    </div>
    <div class="navbar-collapse collapse w-75  order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class='nav-link' href='../logout.php'><i class='fa fa-reply-all'></i> Logout</a>
            </li>
        </ul>

    </div>
</nav>

<?php foreach ($query as $q){?>
    <div class="clanek">
        <h1 class="nazev-clanku"><?php echo $q['title'];?></h1>

        <div class="d-flex mt-2 justify-content-center align-items-center">
            <a href="../edit.php?id=<?php echo $q['id']?>" class="btn btn-light btn-sm" name="edit">Edit</a>
            <form method="POST">
                <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
            </form>
        </div>

<div class="obsah">
    <p><?php echo $q['content'];?></p>
</div>
<?php } ?>
    </div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>