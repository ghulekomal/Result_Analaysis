<div id="div2">
<?php 

include("/table.php");

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_stud=$res["total_stud"];

	$res221=mysql_query("select count(enrollment_no) as abc from ty where  count=1");
	$res1=mysql_fetch_array($res221);
	$res42=$res1["abc"];
echo $res42;

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
	<td><?php echo round(($res42/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res43/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res44/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res45/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res46/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res47/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res48/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res49/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res50/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res51/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res52/$total_stud)*100,2); ?></td>
	
</tr>
</table>

<?php
$res221=mysql_query("select count(enrollment_no) as abc from ty1 where  count=1");
	$res1=mysql_fetch_array($res221);
	$res42=$res1["abc"];
	echo $res42;

    $res222=mysql_query("select count(enrollment_no) as abc from ty1 where  count=2");
	$res2=mysql_fetch_array($res222);
	$res43=$res2["abc"];

	$res223=mysql_query("select count(enrollment_no) as abc from ty1 where  count=3");
	$res3=mysql_fetch_array($res223);
	$res44=$res3["abc"];

	$res224=mysql_query("select count(enrollment_no) as abc from ty1 where  count=4");
	$res4=mysql_fetch_array($res224);
	$res45=$res4["abc"];

	$res225=mysql_query("select count(enrollment_no) as abc from ty1 where  count=5");
	$res5=mysql_fetch_array($res225);
	$res46=$res5["abc"];

    $res226=mysql_query("select count(enrollment_no) as abc from ty1 where  count=6");
	$res6=mysql_fetch_array($res226);
	$res47=$res6["abc"];

	$res227=mysql_query("select count(enrollment_no) as abc from ty1 where  count=7");
	$res7=mysql_fetch_array($res227);
	$res48=$res7["abc"];

	$res228=mysql_query("select count(enrollment_no) as abc from ty1 where  count=8");
	$res8=mysql_fetch_array($res228);
	$res49=$res8["abc"];

	$res229=mysql_query("select count(enrollment_no) as abc from ty1 where  count=9");
	$res9=mysql_fetch_array($res229);
	$res50=$res9["abc"];

    $res230=mysql_query("select count(enrollment_no) as abc from ty1 where  count=10");
	$res10=mysql_fetch_array($res230);
	$res51=$res10["abc"];

	$res231=mysql_query("select count(enrollment_no) as abc from ty1 where  count=11");
	$res11=mysql_fetch_array($res231);
	$res52=$res11["abc"];

?>
<h3 align="center"> Fail In (Sem 6)</h3>
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
<td>summer :</td>
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
	<td><?php echo round(($res42/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res43/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res44/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res45/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res46/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res47/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res48/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res49/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res50/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res51/$total_stud)*100,2); ?></td>
	<td><?php echo round(($res52/$total_stud)*100,2); ?></td>
	
</tr>
</table>
<?php

//appeared//
$sql1=mysql_query("SELECT count( `enrollment_no`)AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where man_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear=( $total_student-$APPEARED);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where mco_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED1=$resm["clear"];
$appear1=( $total_student-$APPEARED1);


$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where ajp_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED2=$resm["clear"];
$appear2=( $total_student-$APPEARED2);


$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where oom_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED3=$resm["clear"];
$appear3=( $total_student-$APPEARED3);


//pass

$sql3=mysql_query("select count(`enrollment_no`) As clear from ty1 where man_th>19 and man_th!=120 or man_th=140 or count=0");
$res3=mysql_fetch_array($sql3);
$total_Dist=$res3["clear"];
$total_per=($total_Dist/ $appear)*100;


$sql3=mysql_query("select count(`enrollment_no`) As clear from ty1 where mco_th>39 and mco_th!=120 or mco_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$total_per1=($total_Dist1/ $appear1)*100;


$sql3=mysql_query("select count(`enrollment_no`) As clear from ty1 where ajp_th>39 and ajp_th!=120 or ajp_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$total_per2=($total_Dist2/ $appear2)*100;


$sql3=mysql_query("select count(`enrollment_no`) As clear from ty1 where oom_th>39 and oom_th!=120 or oom_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist3=$res3["clear"];
$total_per3=($total_Dist3/ $appear3)*100;


//fail//
$sql3=mysql_query("select count(`enrollment_no`) As clear from ty1 where man_th<20 or man_th=120 and man_th!=140");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];
$total_per11=($total_Dist11/ $appear)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from ty1 where mco_th<40 or mco_th=120 and  man_th!=140");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];
$total_per12=($total_Dist12/ $appear1)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from ty1 where ajp_th<40 or ajp_th=120 and ajp_th!=140");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];
$total_per13=($total_Dist13/ $appear2)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from ty1 where oom_th<40 or oom_th=120 and oom_th!=140");
$res3=mysql_fetch_array($sql3);
$total_Dist14=$res3["clear"];
$total_per14=($total_Dist14/ $appear3)*100;


//min//
$sql1=mysql_query(" SELECT min(man_th)AS min FROM `ty1` ");
$res1=mysql_fetch_array($sql1);
$min_student=$res1["min"];

$sql1=mysql_query(" SELECT min(mco_th)AS min FROM `ty1` ");
$res1=mysql_fetch_array($sql1);
$min_student1=$res1["min"];

$sql1=mysql_query(" SELECT min(ajp_th)AS min FROM `ty1` ");
$res1=mysql_fetch_array($sql1);
$min_student2=$res1["min"];

$sql1=mysql_query(" SELECT min(oom_th)AS min FROM `ty1` ");
$res1=mysql_fetch_array($sql1);
$min_student3=$res1["min"];


//max//
$sql2=mysql_query(" SELECT max(man_th)AS max FROM `ty1` where man_th!=120 AND man_th!=140");
$res2=mysql_fetch_array($sql2);
$max_student=$res2["max"];

$sql2=mysql_query(" SELECT max(mco_th)AS max FROM `ty1` where mco_th!=120 AND mco_th!=140 ");
$res2=mysql_fetch_array($sql2);
$max_student1=$res2["max"];

$sql2=mysql_query(" SELECT max(ajp_th)AS max FROM `ty1` where ajp_th!=120 AND ajp_th!=140 ");
$res2=mysql_fetch_array($sql2);
$max_student2=$res2["max"];

$sql2=mysql_query(" SELECT max(oom_th)AS max FROM `ty1` where oom_th!=120 AND oom_th!=140 ");
$res2=mysql_fetch_array($sql2);
$max_student3=$res2["max"];



?>
<br><br>
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
<td>summer :</td>
	<td>1.</td>
	<td>17201</td>
	<td>MAN</td>
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
    $staff=mysql_query("select * from sub_teacher where subj='MAN'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
	
	
</tr>
<tr>
<td></td>
	<td>2.</td>
	<td>17210</td>
	<td>MCO</td>
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
    $staff=mysql_query("select * from sub_teacher where subj='MCO'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>

<tr>
<td></td>
	<td>3.</td>
	<td>17212</td>
	<td>AJP</td>
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
    $staff=mysql_query("select * from sub_teacher where subj='AJP'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>
<tr>
<td></td>
	<td>3.</td>
	<td>17213</td>
	<td>OOM</td>
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
    $staff=mysql_query("select * from sub_teacher where subj='OOM'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>

</table>
<br><br>
<?php

$sql3=mysql_query("select max(osy_th) as clear from  ty where osy_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from ty where osy_th=(select max(osy_th) from ty ) ");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];
echo $total_Dist11;


echo $total_Dist12;$sql3=mysql_query("select max(sen_th) as clear from ty where sen_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from ty where sen_th=(select max(sen_th) from ty where sen_th<120)");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];

$sql3=mysql_query("select max(sen_th) as clear from ty where sen_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from ty where sen_th=(select max(sen_th) from ty where sen_th<120)");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];



$sql3=mysql_query("select max(ifs_th) as clear from ty where ifs_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist3=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from ty where ifs_th=(select max(ifs_th) from ty) ");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];

$sql3=mysql_query("select max(jpr_th) as clear from ty where jpr_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist4=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from ty where jpr_th=(select max(jpr_th) from ty) ");
$res3=mysql_fetch_array($sql3);
$total_Dist14=$res3["clear"];

/*$sql3=mysql_query("select max(cte_th) as clear from ty where cte_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist5=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from ty where cte_th=(select max(cte_th) from ty) ");
$res3=mysql_fetch_array($sql3);
$total_Dist15=$res3["clear"];*/

$sql3=mysql_query("select max(cte_th) as clear from ty where cte_th<100 ");
$res3=mysql_fetch_array($sql3);
$total_Dist5=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from ty where cte_th=(select max(cte_th) from ty where cte_th<100) ");
$res3=mysql_fetch_array($sql3);
$total_Dist15=$res3["clear"];
?>

<h3 align="center"> Subject Topper Sem 5</h3>
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
	<td><?php echo $total_Dist15 ?></td>
	<td>CTE</td>
	<td><?php echo $total_Dist5 ?></td>
</tr>
</table>

<?php
//man
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sql3=mysql_query("select candidate_name as dist from ty1 where man_th=(select MAX(man_th) from ty1 where man_th<120)");
$res3=mysql_fetch_array($sql3);
$tman=$res3["dist"];
$sql3=mysql_query("select max(man_th) as clear from ty1 where man_th<120");
$res3=mysql_fetch_array($sql3);
$tman1=$res3["clear"];

//mco

$sql3=mysql_query("select candidate_name as dist from ty1 where mco_th=(select MAX(mco_th) from ty1 where mco_th<120)");
$res3=mysql_fetch_array($sql3);
$tmco=$res3["dist"];

$sql3=mysql_query("select max(mco_th) as clear from ty1 where mco_th<120");
$res3=mysql_fetch_array($sql3);
$tmco1=$res3["clear"];

//AJP

$sql3=mysql_query("select candidate_name as dist from ty1 where ajp_th=(select MAX(ajp_th) from ty1 where ajp_th<120)");
$res3=mysql_fetch_array($sql3);
$tajp=$res3["dist"];

$sql3=mysql_query("select max(ajp_th) as clear from ty1 where ajp_th<120");
$res3=mysql_fetch_array($sql3);
$tajp1=$res3["clear"];

//OOM

$sql3=mysql_query("select candidate_name as dist from ty1 where oom_th=(select MAX(oom_th) from ty1 where oom_th<120)  AND oom_th!=120 AND oom_th!=140");
$res3=mysql_fetch_array($sql3);
$toom=$res3["dist"];
$sql3=mysql_query("select max(oom_th) as clear from ty1 where oom_th<120");
$res3=mysql_fetch_array($sql3);
$toom1=$res3["clear"];



?>
<br><br>
<table border="1" align="center">
<h3 align="center"> Subject Topper Sem 6</h3>
<table border="1" align="center">
<tr>
	<td>Exam</td>
	<td>Sr.No.</td>
	<td>Name Of Student</td>
	<td>Name of Subject</td>
	<td>Marks Obtained out of 100</td>
</tr>
<tr>
	<td>summer :</td>
	<td>1.</td>
	<td><?php echo $tman ?></td>
	<td>MAN</td>
	<td><?php echo $tman1 ?></td>
	
</tr>
<tr>
	<td></td>
	<td>2.</td>
	<td><?php echo $tmco ?></td>
	<td>MCO</td>
	<td><?php echo $tmco1 ?></td>
</tr>
<tr>
	<td></td>
	<td>3.</td>
	<td><?php echo $tajp ?></td>
	<td>AJP</td>
	<td><?php echo $tajp1 ?></td>
</tr>
<tr>
	<td></td>
	<td>3.</td>
	<td><?php echo $toom ?></td>
	<td>OOM</td>
	<td><?php echo $toom1 ?></td>
</tr>

</table>
</div>
<button onclick="printContent('div2')" class="btn"><h3><b>Print</b></h3></button>


<br><br>