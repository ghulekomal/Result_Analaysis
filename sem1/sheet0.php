


<table class="table table-bordered table-condensed table-striped">
    
    <tr>
        <td>Seat No</td>
        <td>Enrollment No</td>
        <td>Candidate Name</td>
        <td>ENG TH</td>
        <td>ENG TW</td>
        <td>BSC TH</td>
        <td>BSC PR</td>
        <td>BMS TH</td>
        <td>EGG PR</td>
        <td>EGG TW</td>
        <td>CMF PR</td>
        <td>CMF TW</td>
        <td>WPI TW</td>
        <td>SW</td>
        <td>sum</td>
        <td>avg</td>
       
</tr>
<?php
$sql=mysql_query("select *from fy");
while ($row= mysql_fetch_array($sql)) 
{

        echo "<tr>";
    echo "<td>".$row["seat_no"]."</td><td>".$row["enrollment_no"]."</td><td>".$row["candidate_name"]."</td><td>".$row["eng_th"]."</td><td>".$row["eng_tw"]."</td><td>".$row["bsc_th"]."</td><td>".$row["bsc_pr"]."</td><td>".$row["bms_th"]."</td><td>".$row["egg_pr"]."</td><td>".$row["egg_tw"]."</td><td>".$row["cmf_pr"]."</td><td>".$row["cmf_tw"]."</td><td>".$row["wpi_tw"]."</td><td>".$row["sw"]."</td><td>".$row["sum"]."</td><td>";
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