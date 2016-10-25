<?php
if (isset($_POST['submit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $_SESSION['emptyLoginMsg'] = "Username or Password is empty.";
  }
  else
    {
      // Define $username and $password
      $username=$_POST['username'];
      $password=$_POST['password'];

      $sql="SELECT `password` FROM `login` WHERE `username` = ? LIMIT 1";

      try {
      $results = $db->prepare($sql);
      $results->bindParam(1,$username, PDO::PARAM_STR);
      $results->execute();
      } catch(Exception $e){
        echo "Error!: " . $e->getMessage() . "<br>";
       return false;
      }
        $DataPassword = $results->fetch(PDO::FETCH_ASSOC);
        var_dump($DataPassword);
        echo $DataPassword['password'];
    }//else
  }
//if empty

?>
