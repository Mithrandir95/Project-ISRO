<html>
<body>
<?php
    $con = mysql_connect("localhost","root","mithrandir5123") or die(mysql_error());


    mysql_select_db("cse") or die(mysql_error());


    $result = mysql_query("SELECT * FROM persons1 where name= '$_POST[name]'");            
    if(!$result)
    {    echo "There is no record";
    }
    
    echo "<table border='1'><tr><th>Name</th>
                           <th>Addresss1</th>
                            <th>Addresss2</th>
                            <th>Email</th>
            </tr>";
    while($row = mysql_fetch_array($result))
    {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['address1'] . "</td>";
            echo "<td>" . $row['address2'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
    }
            echo "</table>";
            mysql_close($con);
?> 
</body>
</html> 

