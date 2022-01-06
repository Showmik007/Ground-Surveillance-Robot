<html>
  <head>
    <title>Remote</title>

    <link href="style.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/remote.js"></script>
  </head>

  <body id="whole">
    <div class="login-box">
      <h2>Admin</h2>
      <form>
        <div class="user-box">
          <input id="name" type="text" name="" required="" />
          <label>Username</label>
        </div>
        <div class="user-box">
          <input id="password" type="password" name="" required="" />
          <label>Password</label>
        </div>
        <a type="submit" onclick="login()" href="#">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <input  type="hidden" >Submit </input>
        </a>
            <p class="warn" id="warn"></p>
           
         
      </form>
      
    </div>
    <script>
      var x =5 ;
      function  login(){
        var name = document.getElementById("name").value;
        var pass = document.getElementById("password").value;
        
        if( name=="admin" && pass=="123"){
          window.location = ('http://localhost/controler/admin.php'); 

        }
        else {
         
          console. log("wrong pass");
          document.getElementById("whole").classList.add('wrong');
          document.getElementById("warn").classList.add('war');
         
          x=x-1;
          var warn="Wrong Username or Password <br> Warning: "+x+" times left"; 
          document.getElementById("warn").innerHTML = warn;
        }
      }

      window.onload = function(){
      

    document.getElementById("output").innerHTML = x;
};
    </script>
  </body>
</html>
