<?php

    require 'config.php';

    session_start();

   
    
?>

<!DOCTYPE html>
<html>
<head>
    <title> Assingment 02 </title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"> </script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>

    <style>

        body{
            background: linear-gradient(to left, #5499c7, #2471a3);
        }

        h3{
            color:white;
            border-bottom:1px solid red;
            padding-bottom:3px;
        }

        h4{
            padding:6px;
            border-radius:6px;
        }

        .fbdet{
            border-right: 2px solid black;
            padding-right: 7px;
        }

        .well{
            background: linear-gradient(to left,#d4e6f1,#e8daef );
        }

        .btns{
            padding-top:7px;
        }

        .bg-info{
            padding:4px;
            border-radius:8px;
        }

        .msg_head{
            border-bottom:1px solid white;
            color: #e5e7e9;
        }

        .form-group{
            padding: 6px;
            background: #884ea0;
            color:white;
        }

    </style>

<script>

        function open()
        {
            alert("Save?");
        }

</script>

</head>
<body onbeforeunload="return open()">
<div class="container-fluid">

  <div class="row">

     <!-- Right side tab -->

    <div class="col-md"> 
    <div class="fbdet">
        <div class="row">
            <div class="col-md-12">
                <h3> Facebook - OAuth 2.0 </span> </h3> <br/>
                <div class="well well-sm"> <?php user(); ?> <p> <img src="<?php echo userBasics()->picture->data->url;?>" width="60" height="60" />  </p>
                                            <p> Name : <?php echo user()->name; ?> </p> 
                                            <p> E-Mail : <?php echo userBasics()->email; ?> </p>
                </div>
                

            </div>
        </div>
     <!-- End of right side first block -->

            <div class="row">
                <div class="col-md-12">
                    <div class="well well-sm"> Logout <a href="http://localhost/OAuth-2.0/login.php" target="_self">Save Cookies </a> Now </div>
                </div>
            </div>

    </div>
    </div>
    
    <!-- Body -->

 </div> 
  <div class="footer">
    <p><?php echo foo(); ?></p>
  </div>

</div>

<?php 

    //php intraction functions
    
    //set user ID to session variable. this function should be called first
    function user()
    {
        $result=get_user_id($_COOKIE['access_token']);
        $jason = json_decode($result);
        $_SESSION['id'] = $jason->id;
        
        return $jason;
    } 
    
        function userBasics()
        {
            if(isset($_SESSION['id']))
            {
            $rsult = get_user_basics($_COOKIE['access_token'],$_SESSION['id']);
            $jason = json_decode($rsult);
            //echo $rsult;
            return $jason;
            }
            else
            {
                echo "Session ID Not Detected";
            }
        }  
        
    if(isset($_POST['sbmt']))
    {
        $msg = $_POST['comment'];
       echo post_fb($_COOKIE['access_token'], $msg, $_SESSION['id']);
       
    } 

?>

<script>

window.onbeforeunload = function() {
  var dialogText = 'Keep Calm & Enjoy Coding';
  alert(dialogText);
};

</script>



</body>
</html>