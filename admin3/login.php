<br />
<center><?php 
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
    $name = preg_replace("/'\/<>/", "", $_POST['name']); 
    $pass = preg_replace("/'\/<>/", "", $_POST['pass']); 
    if (empty($name) || empty($pass)) 
    die("Please fill out the whole form."); 
     
    if ($name == "andaman" && $pass == "taxis") 
    { 
        $_SESSION['admin'] = 'yes'; 
        die("Succesfully Logged In<br />Click <a href='index.php'>here</a> to go back."); 
    } 
    else 
        die("Incorrect Username/Password"); 
} 
else 
{ 
    echo '<html><head><title>Login</title></head> 
    <body> 
    <form action="" method="POST"> 
    Username: <input type="text" name="name"><br /> 
    Password: <input type="password" name="pass"><br /><br /> 
    <input type="submit" value="Login"> 
    </form> 
    </body> 
    </html>'; 
} 
?> </center>
