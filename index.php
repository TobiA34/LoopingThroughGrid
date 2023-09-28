<?php

$names = array('Tom', 'ben', 'Jerry', 'sal');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-xl" style="width:75%;">

        <div class="row mt-5">

            <?php foreach ($names as $name) : ?>

                <div class="col-3  w-100">
                    <div class="card w-100">
                        <div class="card-body">
                            <img src="https://tipsmake.com/data1/thumbs/how-to-extract-img-files-in-windows-10-thumb-bzxI4IDgg.jpg" class="w-100">
                            <h5><?php echo $name ?></h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aliquam eveniet rerum velit veritatis qui quidem delectus id! Eligendi laborum, architecto minus porro sequi perspiciatis expedita fugiat explicabo delectus consectetur blanditiis ad pariatur eveniet maxime commodi adipisci, dicta vitae velit consequuntur eius eaque, error quia?</p>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>

        </div>
    </div>


</body>

</html>