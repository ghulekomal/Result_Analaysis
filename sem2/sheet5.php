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
        <td>CMS TH</td>
        <td>CMS OR</td>
        <td>CMS TW</td>
        <td>APS TH</td>
        <td>APS PR</td>
        <td>PIC TH</td>
        <td>PIC PR</td>
        <td>PIC TW</td>
        <td>EEG TH</td>
        <td>EEG TW</td>
        <td>EMS_TH</td>
        <td>DLS OR</td>
        <td>WPD PR</td>
        <td>SW</td>
        <td>sum</td>
        <td>avg</td>
       
</tr>
<?php
$sql=mysql_query("select *from fy1");
while ($row= mysql_fetch_array($sql)) 
{

        echo "<tr>";
    echo "<td>".$row["seat_no"]."</td><td>".$row["enrollment_no"]."</td><td>".$row["candidate_name"]."</td><td>".$row["cms_th"]."</td><td>".$row["cms_or"]."</td><td>".$row["cms_tw"]."</td><td>".$row["aps_th"]."</td><td>".$row["aps_pr"]."</td><td>".$row["pic_th"]."</td><td>".$row["pic_pr"]."</td><td>".$row["pic_tw"]."</td><td>".$row["eeg_th"]."</td><td>".$row["eeg_tw"]."</td><td>".$row["ems_th"]."</td><td>".$row["dls_or"]."</td><td>".$row["wpd_pr"]."</td><td>".$row["sw"]."</td><td>".$row["sum"]."</td><td>";
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
