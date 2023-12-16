<?php

require_once "./connection/control.php";
$alphabets = $proverbs->alphabet();

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
                <h3 class="text-start ms-3 text-white">မြန်မာစကားပုံအက္ခရာစဥ်ဇယား</h3>
            </div>

        </div>
        <div class="row  mt-4">
            <div class="col mt-4">
                <h3 class="text-center text-white">မိမိကြည့်ရှုလိုသော သက်ဆိုင်ရာ အက္ခရာကိုနှိပ်၍ ရှာဖွေဖတ်ရှုနိုင်ပါသည်။</h3>
                <hr class="text-white">

            </div>
        </div>

        <div class="row col-12  justify-content-center">
            <?php foreach ($alphabets as $alphabet) : ?>
                <div class="card col-1 m-3">
                    <a href="show.php?id=<?php echo $alphabet['TitleId'] ?>" class="text-decoration-none text-dark">
                        <h5 class="text-center "><?php echo $alphabet['TitleName'] ?></h5>
                    </a>
                </div>

            <?php endforeach; ?>
        </div>

    </div>

</body>

</html>