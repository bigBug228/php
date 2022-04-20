<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page title</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "<h3>Thank you for registering to the class:</h3>";
    echo "<h4>Student Number:</h4>".$_POST['student_number']; echo "<h4>First Name:</h4>".$_POST['first_name']; echo "<h4>Surname Name:</h4>".$_POST['surname_name']; echo "<h4>Module:</h4>".$_POST['module'];echo "<h4>Lecture Time:</h4>".$_POST['lecture_time'];echo "<h4>Lab Time:</h4>".$_POST['lab_time'];
    echo "<h4>Group:</h4>".$_POST['group'];
    } else {
    echo "<h4>Please <a href='index.html'>Please
    return </a> and enter contact details!</h4>"; }
 ?>   
    
 
</body>
</html>