<table class="table table-bordered table-condensed table-striped">
	
	<tr>
        <td>Seat No</td>
        <td>Enrollment No</td>
        <td>candidate_name</td>
        <td>ams_th</td>
        <td>dsu_th</td>
        <td>dsu_pr</td>
        <td>dsu_tw</td>
        <td>ete_th</td>
        <td>ete_tw</td>
        <td>rdb_th</td>
        <td>rdb_tw</td>
        <td>dte_th</td>
        <td>dte_tw</td>
        <td>gui_pr</td>
        <td>pp1</td>
        <td>sw</td>
        <td>sum</td>
        <td>avg</td>
       
</tr>
<?php
$sql=mysql_query("select *from sy");
while ($row= mysql_fetch_array($sql)) 
{

        echo "<tr>";
    echo "<td>".$row["seat_no"]."</td><td>".$row["enrollment_no"]."</td><td>".$row["candidate_name"]."</td><td>".$row["ams_th"]."</td><td>".$row["dsu_th"]."</td><td>".$row["dsu_pr"]."</td><td>".$row["dsu_tw"]."</td><td>".$row["ete_th"]."</td><td>".$row["ete_tw"]."</td><td>".$row["rdb_th"]."</td><td>".$row["rdb_tw"]."</td><td>".$row["dte_th"]."</td><td>".$row["dte_tw"]."</td><td>".$row["gui_pr"]."</td><td>".$row["pp"]."</td><td>".$row["sw"]."</td><td>".$row["sum"]."</td><td>";
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