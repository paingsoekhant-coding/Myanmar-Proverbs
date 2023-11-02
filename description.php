<?php

require_once "./connection/control.php";

$desp = $proverbs->description();

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myanmar-proverbs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-dark">
    <div class="container mt-5">
        <div class="row ">
            <div class="col-6 d-flex">
                <a href="index.php"><i class="fa-solid fa-book mt-2 fs-4 text-white m-2"></i></a>
                <?php foreach ($desp as $d) : ?>
                    <?php if ($d['ProverbId'] == $id && ($d['TitleId'] == $_GET['TitleId'])) :  ?>

                        <h4 class="text-white m-1"><?php echo $d['ProverbName'] ?></h4>

                    <?php endif; ?>

                <?php endforeach; ?>

            </div>
        </div>

        <div class="row  justify-content-center m-5">
            <div class="col-8">
                <h4 class="text-white">(စကားပုံ)</h4>
                <hr class="text-white">
                <?php foreach ($desp as $d) : ?>
                    <?php if ($d['ProverbId'] == $id && ($d['TitleId'] == $_GET['TitleId'])) :  ?>

                        <p class="text-white m-1"><?php echo $d['ProverbDesp'] ?></p>

                    <?php endif; ?>

                <?php endforeach; ?>



            </div>


        </div>

    </div>

</body>

</html>