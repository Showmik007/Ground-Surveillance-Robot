<!DOCTYPE HTML>  
<html>
<head>
<title>Admin</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style> 
input[type=submit]{
 background-color: #03e9f4;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4,
    0 0 100px #03e9f4;
}


.neonText {
    color: #fff;
    text-shadow:
      0 0 7px #fff,
      0 0 10px #fff,
      0 0 21px #fff,
      0 0 42px #f09,
      0 0 82px #f09,
      0 0 92px #f09,
      0 0 102px #f09,
      0 0 151px #f09;
  }


/* Additional styling */
  
body {
  font-size: 2px;
  font-family: "Vibur", sans-serif;
  background-color: #010a01;
}  

h1, h2 {
 
  font-weight: 40;
  line-height: 1;
}
  
h1 {
    font-size: 2rem;
    animation: pulsate 0.11s ease-in-out infinite alternate;     
}
  
h2 {
    font-size: 1.8rem;
}



@keyframes pulsate {
    
  100% {

      text-shadow:
      0 0 4px #fff,
      0 0 11px #fff,
      0 0 19px #fff,
      0 0 40px #f09,
      0 0 80px #f09,
      0 0 90px #f09,
      0 0 100px #f09,
      0 0 150px #f09;
  
  }
  
  0% {

    text-shadow:
    0 0 4px #fff,
    0 0 10px #fff,
    0 0 18px #fff,
    0 0 38px #f09,
    0 0 73px #f09,
    0 0 80px #f09,
    0 0 94px #f09,
    0 0 140px #f09;

}
}



</style>
</head>
<body>  
<?php  include("file.php"); ?>

<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
}
  

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="login-box">


<div class="container">
      <h1 class="neonText">
           MAP_ID
      </h1>
  
   </div>';
  



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div class="user-box">
<h2> MAP_ID</h2>
 <input type="text" name="name"  onfocus="this.value=''" value="Click here to clear"?>
</div>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

$myfile = fopen("pass.txt", "w") or die("Unable to open file!");
                      $txt = $name;
                      fwrite($myfile, $txt);
                      fclose($myfile);

                    


?>






</br></br>
<h2>GO TO LAST LOCATION</h2>
  <div>





  <input style="
 background-color:green ;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4,
    0 0 100px #03e9f4; "float="left" type="submit" onclick="yes()" value="MAP"> 
  
</div>

  </div>


        <script>
      
      function  yes(){
        window.location =("http://localhost/controler/map.php");

         

         }
            
     

         
         </script>
    

</body>
</html>