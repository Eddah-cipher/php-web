<!doctype html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
      <?php
         $FirstName = $SurName = $Email = $College = $Comment = $Gender = "";
         if (isset($_POST["submit"]))
        {
            if ((!isset($_POST["FirstName"])) || (!isset($_POST["SurName"])) || (!isset($_POST["Email"])) || (!isset($_POST["College"])) || (!isset($_POST["Comment"])) || (!isset($_POST["Gender"])))
          {
            $error = "*" . "please fill all the required fields";
          }else
         {
           $FirstName = $_POST["FirstName"];
           $SurName = $_POST["SurName"];
           $Email = $_POST["Email"];
           $College =$_POST["College"];
           $Comment = $_POST["Comment"];
           $Gender = $_POST["Gender"];
         }
        }
         
           echo "<h1>Input received</h1>";
           echo "<br>";
           echo "My firstname is: $FirstName", "Eddah";
           echo "<br>";
           echo "My surname is :$SurName", "Chero";
           echo "<br>";
           echo " My Email is : $Email","my@gmail,com";
           echo "<br>";
           echo " College name is:$College", "Kisii";
           echo "<br>";
           echo " My comment is: $Comment","Its great";
           echo "<br>";
           echo " My gender is: $Gender","Female";

      ?>
    </body>
</html>