<!--Temporary page for redirect results-->
<?php

    require 'config.php';

    session_start();

    echo "Fetching data, Keep Calm for a Suprise";

?>


<?php

  

  if(isset($_GET['code']))
  {
    //get Access token and store it inside $result variable
    $result = get_auth_code("518084122554413", "https://localhost/OAuth-2.0/redirect.php", $_GET['code'], "NTE4MDg0MTIyNTU0NDEzOjBhNTg4ZThkNDRmZWM4YzgzZDdiNDg1MjJmNmVhMzFl");
    
    //jason array to fetch token
    $token_json = json_decode($result);
    

    //set cookie including access token
    if(!isset($_COOKIE['access_token']))
    {
      echo "cookie setting! Please Wait!";
      setcookie("access_token",$token_json->access_token,time()+3600,"/","localhost");
      echo '<script> window.location.assign("https://localhost/OAuth-2.0/server.php") </script>';
    }

    echo '<script> window.location.assign("https://localhost/OAuth-2.0/server.php") </script>';
    
  }



?>