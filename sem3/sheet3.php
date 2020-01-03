<div id="div3">
<?php

include("/table.php");
$i=0;
$sql11=mysql_query("SELECT * from sy where avg< 100 order by avg desc limit 2 ");
while($res1=mysql_fetch_array($sql11))
{
$name1[$i]=$res1["candidate_name"];
$sum1[$i]=$res1["sum"];
$avg1[$i]=$res1["avg"];
$i=$i+1;
}

$j=0;
$sqle1=mysql_query("SELECT * from sy1 where avg< 100 order by avg desc limit 2 ");
while($rese1=mysql_fetch_array($sqle1))
{
$sum2[$j]=$rese1["sum"];
$avg2[$j]=$rese1["avg"];
$j=$j+1;
}
$tot_avg1=($avg1[0]+$avg2[0])/2;

$tot_avg2=($avg1[1]+$avg2[1])/2;

$tot_sum1=($sum1[0]+$sum2[0]);

$tot_sum2=($sum1[1]+$sum2[1]);


?>

<h3 align="center"> Class Topper</h3>
<table border="1" align="center">
<tr>
	<td>Examination</td>
	<td>Rank</td>
	<td>Name Of Student</td>
	<td>Marks Obtained /Out Of 900</td>
	<td>% marks</td>
</tr>
<tr>
	<td>winter :</td>
	<td>I</td>
	<td><?php echo $name1[0]; ?></td>
	<td><?php echo $sum1[0];?></td>
	<td><?php echo round($avg1[0],2); ?></td>
</tr>
<tr>
	<td></td>
	<td>II</td>
	<td><?php echo $name1[1]; ?></td>
	<td><?php echo $sum1[1];?></td>
	<td><?php echo round($avg1[1],2); ?></td>
</tr>
</table>

<h3 align="center"> Aggrigate Topper</h3>
<table border="1" align="center">
<tr>
	<td>Examination</td>
	<td>Rank</td>
	<td>Name Of Student</td>
	<td>Marks Obtained /Out Of 900</td>
	<td>% marks</td>
</tr>
<tr>
	<td>winter :</td>
	<td>I</td>
	<td> </td>
	<td></td>
	<td></td>
	
</tr>
<tr>
	<td></td>
	<td>II</td>
	<td></td>
	<td></td>
	<td></td>
	
</tr>
</table>
</div>
<button onclick="printContent('div3')" class="btn"><h3><b>Print</b></h3></button>
<br>
