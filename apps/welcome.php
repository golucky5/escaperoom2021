<?php

$stmt = false;

if( isset($_REQUEST['catid']) )
{

   if(!isset($_REQUEST['catid']) )
   {
       die("Invalid category selected !");
   }

   $catid = $_REQUEST['catid'];
   //echo "catid is " . $catid . "\n";


   $query ="select products.name as item, category.category_name as category , products.description as description from products inner join category where products.catid = category.catid  AND category.catid = " . $catid;

   $host = "localhost";
   $db ="appdb";
   $user ="appuser";
   $pass="appsecret123";
   $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];

    $pdo = null;

    try
    {
       $pdo = new PDO($dsn, $user, $pass, $opt);
       $stmt = $pdo->query($query);
    }
    catch(PDOException $e)
    {
       echo $e->getMessage();
    }


}

header('Content-Type: text/html; charset=UTF-8');

?>



<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<title>TWC Virtual Escape Room 2021</title>
</head>
<body>

  <nav class="navbar navbar-dark navbar-expand-sm bg-dark">
      <div>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="welcome.php">Home</a>
          </li>
		  
          <li class="nav-item">
            <a class="nav-link" href="Challenge1.html">Challenge 1</a>
			
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="Challenge2.html">Challenge 2</a>
			
          </li> 
		  		            <li class="nav-item">
            <a class="nav-link" href="Challenge3.html">Challenge 3</a>
			
          </li>
		  		            <li class="nav-item">
            <a class="nav-link" href="Challenge4.html">Challenge 4</a>
			
          </li>
		  

		  <li class="nav-item">
            <a class="nav-link" href="menu.php">Big Challenge</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Final Challenge</a>
          </li>
		  		  <li class="nav-item">
            <a class="nav-link" href="about.html">Afterwards</a>
			
          </li>
         </ul>
      </div>
    </nav>



  <div class="container-fluid">
        <h1>TWC Virtual Escape Room 2021</h1>
        <p class="h5">This is an instructional website only</p>
        <br>
        <p class="lead">Welcome.  
This is TWC's 2021 Virtual Escape Room. We are hoping that you learn a little more about exploits, vulnerabilities, passwords, and a little about databases.  This is a timed event.  You have 20 minutes to complete a series of challenges.  
</p> 
<p class="lead">
Start with challenge 1, and complete them sequentially.   Each challenge will give you a clue to complete the big challenge, and then to the final challenge. </p> 
<p class="lead"> Come up with a team name.  When you are ready, we will start the timer. 

        </p>
        <p>
        - The incident response team. 
        </p>
  </div>
  <br>




</body>
</html>
