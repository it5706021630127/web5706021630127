<html>
  <head>
    <meta charset="utf-8">
    <title> summation </title>
  </head>
  <body>
    <?php
    $name=$_POST['name'];
    $nic=$_POST['nic'];
    $age=$_POST['age'];
    $day=$_POST['day'];
    //$province=$_POST['province'];
    $sex=$_POST['sex'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $univ=$_POST['univ'];
    $loc=$_POST['loc'];
    $hob=$_POST['hob'];

    echo "<p>";
    echo "<b> USER DATA </b><br/>";
    echo "Name :: <i> $name </i><i> ($nic) </i><br/>";

    if($age>="1"&&$age<="100") echo "Age :: <i> $age </i><br/>";
    else echo " Age :: ERROR!!!! </i><br/>";
    echo "Brithday :: <i> $day </i><br/>";
    //echo "Brithday :: <i> $day </i><i> $province </i><br/>";
    if($sex ==  "1") echo("Sex :: ชาย <br/>");
    if($sex ==  "0") echo("Sex :: หญิง <br/>");
    echo "Number Phone :: <i> $phone </i><br/>";
    echo "Email :: <i> $email </i><br/>";
    echo "University :: <i> $univ </i><br/>";
    echo "Location :: <i> $loc </i><br/>";
    echo "Hobby :: <i> $hob </i><br/>";
    echo "Result !! :";
     ?>
  </body>
</html>
