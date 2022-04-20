<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page title</title>
</head>
<body>
    <p> This is standart HTML </p>
 <?php
$name = 'Laura';
echo($name);
echo "";
echo 'This was generated using php!';
print nl2br ("Hello World \n\r");
print nl2br ("This is print! \n");
print nl2br ("This is print again! \n");
$value = print nl2br ("This is a print return value example! \n\r");
print nl2br ("This is 
a multiple
line print\n\r");
print nl2br ("Hello World\nThis is print!\nThis is print again!");
$str = 'The quick brown jumps';
$replacement = ' fox';
echo substr_replace($str,$replacement,15,0 );
$fruit = array('orange', 'apple', 'mango', 'banana');
 sort($fruit);
echo ucfirst($fruit[0]) . "<br/> " .ucfirst($fruit[1]) .  ucfirst($fruit[2]) . ucfirst($fruit[3]) ;
 echo "<br />";
$time  = '230037';


 $fruit = array ('orange', 'apple', 'mango', 'banana');
 sort ($fruit);
 $j =0;

 foreach ($fruit  as $type){
  $fruit[$j] = ucfirst($type);
  $j++;
 }
 foreach ($fruit  as $type)
 echo $type . "<br/>";
 
 ?>   
</body>
</html>