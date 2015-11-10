<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
         <div class="container">
			<header>
                <h1>YOUTH BASKETBALL CONFERENCE 
				
            </header>
            <br>
			<br>
            <section>				
                <div id="container_demo" >
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="<?php $_PHP_SELF ?>" autocomplete="on" method="POST"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Login" /> 
								</p>
                                
                            </form>
                        </div>
                       				
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
<?php
	if(isset($_POST['login']))
	{ 
	 
	 //set database access information as constants
	DEFINE ('DB_USER', 'z1726956');
	DEFINE ('DB_PASSWORD', '19901227');
	DEFINE ('DB_HOST','students');
	DEFINE ('DB_NAME','z1726956');
	//Next you need to actually make the connection and set the encoding
	//make connection
	$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	or die ('Could not connect to MySql:' .mysqli_connect_error() );
	//or 
	//$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    //Lets search the databse for the user name and password 
    //Choose some sort of password encryption, I choose sha256 
    //Password function (Not In all versions of MySQL). 
	mysqli_set_charset($dbc, 'utf8');
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM Admin WHERE Login = '$username' AND Password = '$password'";
	$result=mysqli_query($dbc,$sql);
	
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)

	{
		echo "AdminLoginPage.html";
	}
	else
	{
		echo "<script>alert('Invalid login credentials')</script>";
	}

    } 

?>