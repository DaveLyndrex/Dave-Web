<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
<div class="col-sm-4 content-center">
<form method="post">
<input class="form-control"type="number" placeholder="Enter number" required name="inputedNumber">
<button class="btn btn-primary" name="btn"type="submit">submit</button>
</form> 
</div>
<?php
    if (isset($_POST['btn'])){
        $numsStr=(string)$_POST['inputedNumber'];
        $number=(string)$_POST['inputedNumber'];
        $number=strrev($number);
        $number=(int)$number;
        $total=0;
       for($counter=0;$counter<strlen($numsStr);$counter++){
            $remainder=$number%10;
            $number=$number/10;
            switch($remainder){
                case 0:
                    echo "zero ";
                break;
                case 1:
                    echo "one ";
                break;
                case 2:
                    echo "two ";
                break;
                case 3:
                    echo "three ";
                break;
                case 4:
                    echo "four ";
                break;
                case 5:
                    echo "five ";
                break;
                case 6:
                    echo "six ";
                break;
                case 7:
                    echo "seven ";
                break;
                case 8:
                    echo "eight ";
                break;
                case 9:
                    echo "nine ";
                break;
               
            }
        }
    }   
?>
</body>
</html>