<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nike</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-sm-10">
                <h3 class="text-center">VOUS AIMEREZ PEUT-ÊTRE AUSSI</h3>
                <br>
                <div class="row">
                    <?php foreach($souliers as $soulier): ?>
                        <div class="col-sm-3">
                            <img src="<?php echo $soulier->image_url; ?>" class="img-fluid">
                            <br>
                            <small><strong><?php echo $soulier->qty_coloris; ?> coloris</strong></small>
                            <hr>
                            <small><strong><?php echo $soulier->title; ?></strong></small>
                            <p class="text-secondary font-weight-light">
                                <small>
                                    <?php echo $soulier->description; ?>
                                    <br>
                                    CAD <?php echo $soulier->price; ?>
                                </small>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>