<?php

//second year first sem3
 //first topper
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud FROM `csy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sq2=mysql_query("SELECT candidate_name AS dist from csy where avg=(select MAX(avg) from csy)");
$res2=mysql_fetch_array($sq2);
$total_Dist11=$res2["dist"];

//sum of topper
$sq3=mysql_query("SELECT sum AS dist from csy where sum=(select MAX(sum) from csy)");
$res3=mysql_fetch_array($sq3);
$total_Dist12=$res3["dist"];

//avg
$sq3=mysql_query("SELECT MAX(avg) AS dist2 from csy ");
$res3=mysql_fetch_array($sq3);
$total_Dist13=$res3["dist2"];

//second topper
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud FROM `csy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sq2=mysql_query("select candidate_name AS dist from csy where avg NOT IN (select MAX(avg) from csy)ORDER BY avg DESC LIMIT 1");
$res2=mysql_fetch_array($sq2);
$total_Dist14=$res2["dist"];

//sum of second topper
$sq3=mysql_query("select MAX(sum) AS dist from csy where sum!=$total_Dist12");
$res3=mysql_fetch_array($sq3);
$total_Dist15=$res3["dist"];

//avg
$sq3=mysql_query("SELECT  MAX(avg) as dist from csy where avg NOT IN (select MAX(avg) from csy)");
$res3=mysql_fetch_array($sq3);
$total_Dist16=$res3["dist"];

//second year sem 4
//first topper
//$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud FROM `csy` ");
//$res=mysql_fetch_array($sql1);
//$total_student=$res["total_stud"];
//$sq2=mysql_query("SELECT candidate_name as dist from csy where avg=(select MAX(avg) from csy)");
//$res2=mysql_fetch_array($sq2);
//$total_Dist17=$res2["dist"];

//sum of topper
//$sq3=mysql_query("SELECT sum AS dist from csy where sum=(select MAX(sum) from csy)");
//$res3=mysql_fetch_array($sq3);
//$total_Dist18=$res3["dist"];

 //avg
//$sq3=mysql_query("SELECT MAX(avg) AS dist2 from csy ");
//$res3=mysql_fetch_array($sq3);
//$total_Dist19=$res3["dist2"];


//second topper
//$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud FROM `csy` ");
//$res=mysql_fetch_array($sql1);
//$total_student=$res["total_stud"];
//$sq2=mysql_query("select candidate_name AS dist from csy where avg NOT IN (select MAX(avg) from csy)ORDER BY avg DESC LIMIT 1");
//$res2=mysql_fetch_array($sq2);
//$total_Dist20=$res2["dist"];

//sum of second topper
//$sq3=mysql_query("select MAX(sum) AS dist from csy where sum!=$total_Dist18");
//$res3=mysql_fetch_array($sq3);
//$total_Dist21=$res3["dist"];

//$sq3=mysql_query("SELECT  MAX(avg) as dist from csy where avg NOT IN (select MAX(avg) from csy)");
//$res3=mysql_fetch_array($sq3);
//$total_Dist22=$res3["dist"];

//aggregate topper
//first aggrigate tooper name
//$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud FROM `csy` ");
//$res=mysql_fetch_array($sql1);
//$total_student=$res["total_stud"];
//$sq2=mysql_query("SELECT candidate_name as dist from csy where avg=(select MAX(avg) from csy)");
//$res2=mysql_fetch_array($sq2);
//$total_Dist30=$res2["dist"];


//second aggrigate topper name
//$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud FROM `csy` ");
//$res=mysql_fetch_array($sql1);
//$total_student=$res["total_stud"];
//$sq2=mysql_query("select candidate_name AS dist from csy where avg NOT IN (select MAX(avg) from csy)ORDER BY avg DESC LIMIT 1");
//$res2=mysql_fetch_array($sq2);
//$total_Dist31=$res2["dist"];

//$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud FROM `csy` ");
//$res=mysql_fetch_array($sql1);
//$total_student=$res["total_stud"];
//$sq2=mysql_query("select candidate_name AS dist from csy where avg NOT IN (select MAX(avg) from csy)ORDER BY avg DESC LIMIT 1");
//$res2=mysql_fetch_array($sq2);
//$total_Dist31=$res2["dist"];


//sum 
//$agg1=($total_Dist12+$total_Dist18);

//sum
//$agg2=($total_Dist15+$total_Dist21);


//avg
//$agg3=($agg1/1750)*100;

//avg
//$agg4=($agg2/1750)*100;
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
	<td>winter 2017</td>
	<td>I</td>
	<td><?php echo "$total_Dist11"; ?></td>
	<td><?php echo "$total_Dist12"; ?></td>
	<td><?php echo "$total_Dist13"; ?></td>
</tr>
<tr>
	<td></td>
	<td>II</td>
	<td><?php echo "$total_Dist14"; ?></td>
	<td><?php echo "$total_Dist15"; ?></td>
	<td><?php echo "$total_Dist16"; ?></td>
</tr>
</td>
</tr>

<tr>
	<td>summer :</td>
	<td>I</td>
	<td></td>
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
	<td></td>
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
</tr>
</tr>

<tr>
	<td>summer :</td>
	<td>I</td>
	<td></td>
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
