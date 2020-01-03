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
        <td>EVS TH</td>
        <td>EVS TW</td>
        <td>CHM TH</td>
        <td>CHM PR</td>
        <td>CHM TH</td>
        <td>DCN TH</td>
        <td>DCN PR</td>
        <td>DCN TW</td>
        <td>MAP TH</td>
        <td>MAP PR</td>
        <td>MAP TW</td>
        <td>OOP TH</td>
        <td>OOP PR</td>
        <td>OOP TW</td>
        <td>AMT PR</td>
        <td>AMT TW</td>
        <td>SW</td>
        <td>pp</td>
        <td>sum</td>
        <td>avg</td>
       
</tr>
<?php
$sql=mysql_query("select * from sy1");
while ($row= mysql_fetch_array($sql)) 
{

        echo "<tr>";
    echo "<td>".$row["seat_no"]."</td><td>".$row["enrollment_no"]."</td><td>".$row["candidate_name"]."</td><td>".$row["evs_th"]."</td><td>".$row["evs_tw"]."</td><td>".$row["chm_th"]."</td><td>".$row["chm_pr"]."</td><td>".$row["chm_tw"]."</td><td>".$row["dcn_th"]."</td><td>".$row["dcn_pr"]."</td><td>".$row["dcn_tw"]."</td><td>".$row["map_th"]."</td><td>".$row["man_pr"]."</td><td>".$row["man_tw"]."</td><td>".$row["oop_th"]."</td><td>".$row["oop_pr"]."</td><td>".$row["oop_tw"]."</td><td>".$row["amt_pr"]."</td><td>".$row["amt_tw"]."</td><td>".$row["sw"]."</td><td>".$row["pp"]."</td><td>".$row["sum"]."</td><td>";
    if($row["count"]<3 and $row["count"]!=0 )
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
