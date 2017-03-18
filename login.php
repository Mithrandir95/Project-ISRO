<html>
<body>
<?php
    $con = mysql_connect("localhost","root","mithrandir5123") or die(mysql_error());


    mysql_select_db("Isro") or die(mysql_error());


    $result = mysql_query("SELECT * FROM users where username= '$_POST[user]'");            
    if(!$result)
    {    echo "There is no record";
    }
    mysql_close($con);
    
    $row = mysql_fetch_array($result);
    
         if($row['role']==0)  {
           
            header('Location: admindisp.php');}
            
    
          
            
?> 
</body>
</html>
