<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("lastproject",$con) or die ("DB NOT CONNECTED");
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<table class="table table-bordered table-condensed table-striped">
	
	<tr>
        <td>Seat No</td>
        <td>Enrollment No</td>
        <td>Candidate Name</td>
        <td>OSY TH</td>
        <td>OSY TW</td>
        <td>SEN TH</td>
        <td>IFS TH</td>
        <td>IFS TW</td>
        <td>JPR TH</td>
        <td>JPR PR</td>
        <td>JPR TW</td>
        <td>CTE TH</td>
        <td>CTE PR</td>
        <td>CTE TW</td>
        <td>BSC OR</td>
        <td>BSC TW</td>
        <td>NMA PR</td>
        <td>NMA TW</td>
        <td>PP</td>
        <td>SW</td>
        <td>sum</td>
        <td>avg</td>
       
</tr>
<?php
$sql=mysql_query("select *from ty");
while ($row= mysql_fetch_array($sql)) 
{

        echo "<tr>";
    echo "<td>".$row["seat_no"]."</td><td>".$row["enrollment_no"]."</td><td>".$row["candidate_name"]."</td><td>".$row["osy_th"]."</td><td>".$row["osy_tw"]."</td><td>".$row["sen_th"]."</td><td>".$row["ifs_th"]."</td><td>".$row["ifs_tw"]."</td><td>".$row["jpr_th"]."</td><td>".$row["jpr_pr"]."</td><td>".$row["jpr_tw"]."</td><td>".$row["cte_th"]."</td><td>".$row["cte_pr"]."</td><td>".$row["cte_tw"]."</td><td>".$row["bsc_or"]."</td><td>".$row["bsc_tw"]."</td><td>".$row["nma_pr"]."</td><td>".$row["nma_tw"]."</td><td>".$row["pp"]."</td><td>".$row["sw"]."</td><td>".$row["sum"]."</td><td>";
    if($row["count"]<=2 and $row["count"]!=0 )
    	echo "ATKT";
    if($row["count"]==0)
    	echo round($row["avg"],2);
 if($row["count"]==3 || $row["count"]>3)
  	echo "Fail";
       echo "</td></tr>";
}   
?>
</table>
</body>
</html>
