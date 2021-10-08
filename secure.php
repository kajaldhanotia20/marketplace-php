
<!doctype html>
<html>
<!-- This website is built modifying styles and themes originally created by bootstrapmade-->

    <head>
    
        <?php require_once('lock.php'); ?>
        <title>Greenscape-Secure Page</title>
    </head>
    <body>
        Hello, <?php echo $_SESSION["user"]?>
        <br/>
        The current website Users are:
        <br/>
        <?php
        
            $userfile = fopen("text/credentials.txt", "r");
            while(($line=fgets($userfile))!==false){
                    $user = explode(",", $line);
                    echo $user[0];
                    echo "<br/>";
                }
            fclose($userfile);    
        ?>
        
        <a class="link animated fadeInUp delay-1s servicelink" href="includes/logout.php">Logout</a>
        
</body>
</html>
