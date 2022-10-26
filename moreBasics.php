<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php

$languages = array("english", "hindi", "marathi", "gujarati");
// echo $languages[0];
// echo "<br>";
// echo count($languages);


$a = 0;

while($a<count($languages)){
    echo $languages[$a];
    echo "<br>";
    $a++;
}


function printt($a){
    echo "your number is $a";
}
printt(10);
?>
</body>
</html>