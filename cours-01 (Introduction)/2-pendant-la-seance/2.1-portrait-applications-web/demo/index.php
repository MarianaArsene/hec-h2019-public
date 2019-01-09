<?php 

$cours = "DAW";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        p {
            color: blue;
        }
    </style>
</head>
<body>
    <p id="test">Bonjour</p>
    <div>
        <p>allo <?php echo $cours; ?></p>
    </div>
    
    <script type="text/javascript">
        setTimeout(function() {
            document.getElementById('test').innerHTML = 'Bonne soirée!';
            document.getElementById('test').style = 'color: red;';
        }, 3000);
        
    </script>
</body>
</html>