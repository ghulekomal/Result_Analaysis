<div id="div2">
<?php 

include("/table.php");

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];

//fail in
$res221=mysql_query("select count(enrollment_no) as abc from ty where  count=1");
	$res1=mysql_fetch_array($res221);
	$res42=$res1["abc"];
//echo $res42 ;
//echo "<br>";
//echo  $total_student;

    $res222=mysql_query("select count(enrollment_no) as abc from ty where  count=2");
	$res2=mysql_fetch_array($res222);
	$res43=$res2["abc"];

	$res223=mysql_query("select count(enrollment_no) as abc from ty where  count=3");
	$res3=mysql_fetch_array($res223);
	$res44=$res3["abc"];

	$res224=mysql_query("select count(enrollment_no) as abc from ty where  count=4");
	$res4=mysql_fetch_array($res224);
	$res45=$res4["abc"];

	$res225=mysql_query("select count(enrollment_no) as abc from ty where  count=5");
	$res5=mysql_fetch_array($res225);
	$res46=$res5["abc"];

    $res226=mysql_query("select count(enrollment_no) as abc from ty where  count=6");
	$res6=mysql_fetch_array($res226);
	$res47=$res6["abc"];

	$res227=mysql_query("select count(enrollment_no) as abc from ty where  count=7");
	$res7=mysql_fetch_array($res227);
	$res48=$res7["abc"];

	$res228=mysql_query("select count(enrollment_no) as abc from ty where  count=8");
	$res8=mysql_fetch_array($res228);
	$res49=$res8["abc"];

	$res229=mysql_query("select count(enrollment_no) as abc from ty where  count=9");
	$res9=mysql_fetch_array($res229);
	$res50=$res9["abc"];

    $res230=mysql_query("select count(enrollment_no) as abc from ty where  count=10");
	$res10=mysql_fetch_array($res230);
	$res51=$res10["abc"];

	$res231=mysql_query("select count(enrollment_no) as abc from ty where  count=11");
	$res11=mysql_fetch_array($res231);
	$res52=$res11["abc"];

?>

<h3 align="center"> Fail In (Sem 5)</h3>
<table border="1" align="center">
<tr>
	<td>Result</td>
	<td>Particular</td>
	<td>Sub1</td>
	<td>Sub2 </td>
	<td>Sub3</td>
	<td>Sub4 </td>
	<td>Sub5 </td>
	<td>Sub6 </td>
	<td>Sub7 </td>
	<td>Sub8 </td>
	<td>Sub9 </td>
	<td>Sub10</td>
	<td>Sub11</td>

</tr>
<tr>
<td>winter :</td>
	<td>No of Student</td>
	<td><?php echo $res42; ?></td>
	<td><?php echo $res43; ?></td>
	<td><?php echo $res44; ?></td>
	<td><?php echo $res45; ?></td>
	<td><?php echo $res46; ?></td>
	<td><?php echo $res47; ?></td>
	<td><?php echo $res48; ?></td>
	<td><?php echo $res49; ?></td>
	<td><?php echo $res50; ?></td>
	<td><?php echo $res51; ?></td>
	<td><?php echo $res52; ?></td>
</tr>

<tr>
<td></td>
	<td>Percentage</td>
	<td><?php echo round(($res42/$total_student)*100,2); ?></td>
	<td><?php echo round(($res43/$total_student)*100,2); ?></td>
	<td><?php echo round(($res44/$total_student)*100,2); ?></td>
	<td><?php echo round(($res45/$total_student)*100,2); ?></td>
	<td><?php echo round(($res46/$total_student)*100,2); ?></td>
	<td><?php echo round(($res47/$total_student)*100,2); ?></td>
	<td><?php echo round(($res48/$total_student)*100,2); ?></td>
	<td><?php echo round(($res49/$total_student)*100,2); ?></td>
	<td><?php echo round(($res50/$total_student)*100,2); ?></td>
	<td><?php echo round(($res51/$total_student)*100,2); ?></td>
	<td><?php echo round(($res52/$total_student)*100,2); ?></td>
	
</tr>

</table>
<?php

//appeared//

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where osy_th>100");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear=( $total_student-$APPEARED);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where sen_th>100");
$resm=mysql_fetch_array($sqm);
$APPEARED1=$resm["clear"];
$appear1=( $total_student-$APPEARED1);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where ifs_th>100 or ifs_th=1200");
$resm=mysql_fetch_array($sqm);
$APPEARED2=$resm["clear"];
$appear2=( $total_student-$APPEARED2);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where jpr_th>100 or jpr_th=1200 ");
$resm=mysql_fetch_array($sqm);
$APPEARED2=$resm["clear"];
$appear3=( $total_student-$APPEARED2);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where cte_th>100 or cte_th=1200");
$resm=mysql_fetch_array($sqm);
$APPEARED2=$resm["clear"];
$appear4=( $total_student-$APPEARED2);




//passed//
$sql3=mysql_query("select count(`enrollment_no`) As clear from ty where osy_th>39 and osy_th!=120 or osy_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist=$res3["clear"];
$total_per=($total_Dist/ $appear)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from ty where sen_th>39 and sen_th!=120 or sen_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$total_per1=($total_Dist1/ $appear1)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from ty where ifs_th>39 and ifs_th!=1200 or ifs_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$total_per2=($total_Dist2/ $appear2)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from ty where jpr_th>39 and jpr_th!=1200 or jpr_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist3=$res3["clear"];
$total_per3=($total_Dist3/ $appear3)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from ty where cte_th>39 and cte_th!=120 or cte_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist4=$res3["clear"];
$total_per4=($total_Dist4/ $appear4)*100;


//fail//
$sql3=mysql_query("select count(`enrollment_no`) As clear from ty where osy_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];
$total_per11=($total_Dist11/ $appear)*100;
//echo $total_Dist11;
 //echo     $total_per11;

$sql3=mysql_query("select count(`enrollment_no`) As clear from ty where sen_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];
$total_per12=($total_Dist12/ $appear1)*100;


$sql3=mysql_query("select count(`enrollment_no`) As clear from ty where ifs_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];
$total_per13=($total_Dist13/ $appear2)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from ty where jpr_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist14=$res3["clear"];
$total_per14=($total_Dist14/ $appear3)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from ty where cte_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist15=$res3["clear"];
$total_per15=($total_Dist15/ $appear4)*100;



//min//
$sql1=mysql_query(" SELECT min(osy_th)AS min FROM `ty` ");
$res1=mysql_fetch_array($sql1);
$min_student=$res1["min"];

$sql1=mysql_query(" SELECT min(sen_th)AS min FROM `ty` ");
$res1=mysql_fetch_array($sql1);
$min_student1=$res1["min"];

$sql1=mysql_query(" SELECT min(ifs_th)AS min FROM `ty` ");
$res1=mysql_fetch_array($sql1);
$min_student2=$res1["min"];

$sql1=mysql_query(" SELECT min(jpr_th)AS min FROM `ty` ");
$res1=mysql_fetch_array($sql1);
$min_student3=$res1["min"];

$sql1=mysql_query(" SELECT min(cte_th)AS min FROM `ty` ");
$res1=mysql_fetch_array($sql1);
$min_student4=$res1["min"];


//max//
$sql2=mysql_query(" SELECT max(osy_th)AS max FROM `ty` where osy_th<100 ");
$res2=mysql_fetch_array($sql2);
$max_student=$res2["max"];

$sql2=mysql_query(" SELECT max(sen_th)AS max FROM `ty` where sen_th<100");
$res2=mysql_fetch_array($sql2);
$max_student1=$res2["max"];

$sql2=mysql_query(" SELECT max(ifs_th)AS max FROM `ty`  where ifs_th<100 ");
$res2=mysql_fetch_array($sql2);
$max_student2=$res2["max"];

$sql2=mysql_query(" SELECT max(jpr_th)AS max FROM `ty` where jpr_th<100 ");
$res2=mysql_fetch_array($sql2);
$max_student3=$res2["max"];

$sql2=mysql_query(" SELECT max(cte_th)AS max FROM `ty` where cte_th<100");
$res2=mysql_fetch_array($sql2);
$max_student4=$res2["max"];




?>

<h3 align="center"> Subject Wise Result</h3>
<table border="1" align="center">
<tr>
    <td></td>
	<td>Sr.No.</td>
	<td>Subject Code</td>
	<td>Subject Abbr</td>
	<td>Student Appeared</td>
	<td>Pass No</td>
	<td>Pass Per</td>
	<td>Fail No</td>
	<td>Fail Per</td>
	<td>Highest Marks</td>
	<td>Lowest Marks</td>
	<td>TSI Class</td>
	<td>TSI Instt</td>
	<td>TSI MSBTE</td>
	<td>Subject Teacher</td>
</tr>
<tr>
    <td>winter :</td>
	<td>1.</td>
	<td>17512</td>
	<td>OSY</td>
	<td><?php echo $appear  ?></td>
	<td><?php echo $total_Dist  ?></td>
	<td><?php echo round($total_per,2) ?></td>
	<td><?php echo $total_Dist11  ?></td>
	<td><?php echo round($total_per11,2) ?></td>
	<td><?php echo "$max_student" ;?> </td>
	<td><?php echo "$min_student";  ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php 
    $staff=mysql_query("select * from sub_teacher where subj='OSY'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>
<tr>
    <td></td>
	<td>2.</td>
	<td>17513</td>
	<td>SEN</td>
	<td><?php echo $appear1  ?></td>
	<td><?php echo $total_Dist1  ?></td>
	<td><?php echo round($total_per1,2) ?></td>
	<td><?php echo $total_Dist12  ?></td>
	<td><?php echo round($total_per12,2) ?></td>
	<td><?php echo "$max_student1" ;?> </td>
	<td><?php echo "$min_student1";  ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php 
    $staff=mysql_query("select * from sub_teacher where subj='SEN'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>
<tr>
    <td></td>
	<td>3.</td>
	<td>17518</td>
	<td>IFS</td>
	<td><?php echo $appear2  ?></td>
	<td><?php echo $total_Dist2  ?></td>
	<td><?php echo round($total_per2 ,2)?></td>
	<td><?php echo $total_Dist13  ?></td>
	<td><?php echo round($total_per13,2) ?></td>
	<td><?php echo "$max_student2" ;?> </td>
	<td><?php echo "$min_student2";  ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php 
    $staff=mysql_query("select * from sub_teacher where subj='IFS'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>
<tr>
    <td></td>
	<td>4.</td>
	<td>17515</td>
	<td>JPR</td>
	<td><?php echo $appear3  ?></td>
	<td><?php echo $total_Dist3  ?></td>
	<td><?php echo round($total_per3,2) ?></td>
	<td><?php echo $total_Dist14 ?></td>
	<td><?php echo round($total_per14,2) ?></td>
	<td><?php echo "$max_student3" ;?> </td>
	<td><?php echo "$min_student3";  ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php 
    $staff=mysql_query("select * from sub_teacher where subj='JPR'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>
<tr>
    <td></td>
	<td>5.</td>
	<td>17519</td>
	<td>CTE</td>
	<td><?php echo $appear4  ?></td>
	<td><?php echo $total_Dist4  ?></td>
	<td><?php echo round($total_per4,2) ?></td>
	<td><?php echo $total_Dist15  ?></td>
	<td><?php echo round($total_per15,2)?></td>
	<td><?php echo "$max_student4" ;?> </td>
	<td><?php echo "$min_student4";  ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php 
    $staff=mysql_query("select * from sub_teacher where subj='CTE'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>
</table>
<?php

$sql3=mysql_query("select max(osy_th) as clear from  ty where osy_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from ty where osy_th=(select max(osy_th) from ty) ");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];


$sql3=mysql_query("select max(sen_th) as clear from ty where sen_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from ty where sen_th=(select max(sen_th) from ty where sen_th<120)");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];

$sql3=mysql_query("select max(ifs_th) as clear from ty where ifs_th<100 ");
$res3=mysql_fetch_array($sql3);
$total_Dist3=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from ty where ifs_th=(select max(ifs_th) from ty where ifs_th<100) ");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];
//echo $total_Dist13;

$sql3=mysql_query("select max(jpr_th) as clear from ty where jpr_th<100 ");
$res3=mysql_fetch_array($sql3);
$total_Dist4=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from ty where jpr_th=(select max(jpr_th) from ty where jpr_th<100) ");
$res3=mysql_fetch_array($sql3);
$total_Dist14=$res3["clear"];

$sql3=mysql_query("select max(cte_th) as clear from ty where cte_th<100 ");
$res3=mysql_fetch_array($sql3);
$total_Dist6=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from ty where cte_th=(select max(cte_th) from ty where cte_th<100) ");
$res3=mysql_fetch_array($sql3);
$total_Dist16=$res3["clear"];
//echo $total_Dist16;
//echo $total_Dist6;

?>

<h3 align="center"> Subject Topper</h3>
<table border="1" align="center">
<tr>
	<td>Exam</td>
	<td>Sr.No.</td>
	<td>Name Of Student</td>
	<td>Name of Subject</td>
	<td>Marks Obtained out of 100</td>
</tr>
<tr>
	<td>winter :</td>
	<td>1.</td>
	<td><?php echo $total_Dist11 ?></td>
	<td>OSY</td>
	<td><?php echo $total_Dist1 ?></td>
</tr>
<tr>
	<td></td>
	<td>2.</td>
	<td><?php echo $total_Dist12 ?></td>
	<td>SEN</td>
	<td><?php echo $total_Dist2 ?></td>
</tr>
<tr>
	<td></td>
	<td>3.</td>
	<td><?php echo $total_Dist13 ?></td>
	<td>IFS</td>
	<td><?php echo $total_Dist3 ?></td>
</tr>
<tr>
	<td></td>
	<td>4.</td>
	<td><?php echo $total_Dist14 ?></td>
	<td>JPR</td>
	<td><?php echo $total_Dist4 ?></td>
</tr>
<tr>
	<td></td>
	<td>5.</td>
	<td><?php echo $total_Dist16 ?></td>
	<td>CTE</td>
	<td><?php echo $total_Dist6 ?></td>
</tr>
</table>
</div>
<button onclick="printContent('div2')" class="btn"><h3><b>Print</b></h3></button>
<br><br>