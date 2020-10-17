<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Money</title>
	<link rel="stylesheet" type="text/css" href="trans.css">
</head>
<header> Add Money</header>
<body>
<p></p>



	<form   method= "POST">
	<label>User id:</label>
	<input type="text" id="userid" name="user" ><br><br>

	<label for="fname">Amount To Be Added:</label>
    
    <input type="text" id="ams" name="am" ><br><br>
    
     <button type="submit" class="button" name="button">Start Transaction</button>

     </form>

     <p></p>
      <form action="viewc.php">
    <button type="submit" name="button1">Back</button>
    </form>

    
 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "company";
       // Create connection
       $conn = new mysqli($servername, $username, $password, $dbname);
       if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
                 }
                 $index=0;
                 
                  
                           function Add(){
                           	$amt = isset($_POST['am']);
                             $uid = isset($_POST['user']);
                        
                              
                        	
                          $sql ="UPDATE MyGuests SET 'Amount'=(Amount+ $amt)  WHERE id= $uid ;";
                          echo"Money Added Successfully";
                          
                        }


               if(array_key_exists('button', $_POST)){

                Add();
	                  
                   }
                                                     mysqli_close($conn);






                                             

?>
</body>
</html>