<?php
include('database_connection.php');
include('config.php');
$s1=$_REQUEST["n"];
//$select_query="select * from data where name like '%".$s1."%'";

$s1 = htmlspecialchars($s1); 
//$s1 = mysql_real_escape_string($s1);
$query="SELECT * FROM login WHERE (`name` LIKE '".$s1."%') OR (`curr_loc` LIKE '".$s1."%') GROUP BY `name`";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$s="";
$x="";
$pos=40;
if($result > 0)
{
    $s=$s."<div style=\" position:absolute; width:100%\">";
    foreach($result as $row)
	{
        $x=$row['name'];
        $x.='&emsp;,&emsp;'.$row['curr_loc'];
        $s=$s."
    
      <form action=\"search_profile.php\" method=\"post\">
      
            <font size=\"8\" face=\"Varela Round\"><input type=\"submit\" name=\"a\" value=".$x.">
            <input type=\"hidden\" name=\"a\" value=".$row['username']." /></font>
       
       </form>
      
        "   ;
        $pos=$pos+40;
    }
    $s=$s."</div>";

}
else{
    echo "No results";
}
echo $s;
?>