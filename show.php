<?php

require_once "./connection/control.php";

$alphabets = $proverbs->alphabet();

$proverbs = $proverbs->proverb();

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
                <a href="index.php"><i class="fa-solid fa-book mt-2 fs-4 text-white"></i></a>
                <?php foreach ($alphabets as $alphabet) : ?>
                    <?php if ($alphabet['TitleId'] == $id) : ?>
                        <h3 class="text-start ms-3 text-white"><?php echo $alphabet['TitleName'] ?> (စကားပုံ)</h3>

                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <hr class="text-white mt-2">

        </div>

        <form action="" method="post">
            <div class="row col-12  justify-content-center">
                <?php foreach ($proverbs as $proverb) : ?>
                    <?php if ($proverb['TitleId'] == $id) : ?>
                        <div class=" mb-2 ms-5">
                            <a href="description.php?id=<?php echo $proverb['ProverbId'] ?>&TitleId=<?php echo $proverb['TitleId'] ?>" class="text-decoration-none d-flex">
                                <i class="fa-regular fa-star text-white m-2"></i>
                                <p class="text-white m-1"><?php echo $proverb['ProverbName'] ?></p>
                            </a>
                        </div>
                    <?php endif; ?>

                <?php endforeach; ?>
            </div>
        </form>
    </div>

</body>

</html>