<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>


    <?php 
   $jsonData= json_decode('
   [
   {
   "name" : "John Garg",
   "age"  : "15",
   "school" : "Ahlcon Public school"
   },
   {
   "name" : "Smith Soy",
   "age"  : "16",
   "school" : "St. Marie school"
   },
   {
   "name" : "Charle Rena",
   "age"  : "16",
   "school" : "St. Columba school"
   }
]');
foreach($jsonData as $item){
     foreach($item as $data){
         print_r($data."<br>");
     }
}





?>
   
</body>
</html>