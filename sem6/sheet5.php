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
        <td>MAN TH</td>
        <td>MCO TH</td>
        <td>MCO PR</td>
        <td>MCO TW</td>
        <td>AJP TH</td>
        <td>AJP PR</td>
        <td>AJP TW</td>
        <td>OOM TH</td>
        <td>OOM TW</td>
        <td>STE PR</td>
        <td>STE TW</td>
        <td>JPR OR</td>
        <td>JPR TW</td>
        <td>EDE TW</td>
        <td>SW</td>
        <td>sum</td>
        <td>avg</td>
       
</tr>
<?php
$sql=mysql_query("select *from ty1");
while ($row= mysql_fetch_array($sql)) 
{

        echo "<tr>";
    echo "<td>".$row["seat_no"]."</td><td>".$row["enrollment_no"]."</td><td>".$row["candidate_name"]."</td><td>".$row["man_th"]."</td><td>".$row["mco_th"]."</td><td>".$row["mco_pr"]."</td><td>".$row["mco_tw"]."</td><td>".$row["ajp_th"]."</td><td>".$row["ajp_pr"]."</td><td>".$row["ajp_tw"]."</td><td>".$row["oom_th"]."</td><td>".$row["oom_tw"]."</td><td>".$row["ste_pr"]."</td><td>".$row["ste_tw"]."</td><td>".$row["jpr_or"]."</td><td>".$row["jpr_tw"]."</td><td>".$row["ede_tw"]."</td><td>".$row["sw"]."</td><td>".$row["sum"]."</td><td>";
    if($row["count"]<3 and $row["count"]!=0 )
    	echo "fail";
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
