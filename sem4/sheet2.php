
<div id="div2">
<?php 
include("/table.php");
$sqlw=mysql_query("select COUNT(`enrollment_no`) as total from sy");
    $resTot=mysql_fetch_array($sqlw);
    $total_stud=$resTot["total"];

 




//fail in//

	$res221=mysql_query("select count(enrollment_no) as abc from sy where  count=1");
	$res1=mysql_fetch_array($res221);
	$res42=$res1["abc"];

    $res222=mysql_query("select count(enrollment_no) as abc from sy where  count=2");
	$res2=mysql_fetch_array($res222);
	$res43=$res2["abc"];

	$res223=mysql_query("select count(enrollment_no) as abc from sy where  count=3");
	$res3=mysql_fetch_array($res223);
	$res44=$res3["abc"];

	$res224=mysql_query("select count(enrollment_no) as abc from sy where  count=4");
	$res4=mysql_fetch_array($res224);
	$res45=$res4["abc"];

	$res225=mysql_query("select count(enrollment_no) as abc from sy where  count=5");
	$res5=mysql_fetch_array($res225);
	$res46=$res5["abc"];

    $res226=mysql_query("select count(enrollment_no) as abc from sy where  count=6");
	$res6=mysql_fetch_array($res226);
	$res47=$res6["abc"];

	$res227=mysql_query("select count(enrollment_no) as abc from sy where  count=7");
	$res7=mysql_fetch_array($res227);
	$res48=$res7["abc"];

	$res228=mysql_query("select count(enrollment_no) as abc from sy where  count=8");
	$res8=mysql_fetch_array($res228);
	$res49=$res8["abc"];

	$res229=mysql_query("select count(enrollment_no) as abc from sy where  count=9");
	$res9=mysql_fetch_array($res229);
	$res50=$res9["abc"];

    $res230=mysql_query("select count(enrollment_no) as abc from sy where  count=10");
	$res10=mysql_fetch_array($res230);
	$res51=$res10["abc"];

	$res231=mysql_query("select count(enrollment_no) as abc from sy where  count=11");
	$res11=mysql_fetch_array($res231);
	$res52=$res11["abc"];

?>

<h3 align="center"> Fail In (Sem 3) </h3>
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
$res221=mysql_query("select count(enrollment_no) as abc from sy1 where  count=1");
	$res1=mysql_fetch_array($res221);
	$res42=$res1["abc"];

    $res222=mysql_query("select count(enrollment_no) as abc from sy1 where  count=2");
	$res2=mysql_fetch_array($res222);
	$res43=$res2["abc"];

	$res223=mysql_query("select count(enrollment_no) as abc from sy1 where  count=3");
	$res3=mysql_fetch_array($res223);
	$res44=$res3["abc"];

	$res224=mysql_query("select count(enrollment_no) as abc from sy1 where  count=4");
	$res4=mysql_fetch_array($res224);
	$res45=$res4["abc"];

	$res225=mysql_query("select count(enrollment_no) as abc from sy1 where  count=5");
	$res5=mysql_fetch_array($res225);
	$res46=$res5["abc"];

    $res226=mysql_query("select count(enrollment_no) as abc from sy1 where  count=6");
	$res6=mysql_fetch_array($res226);
	$res47=$res6["abc"];

	$res227=mysql_query("select count(enrollment_no) as abc from sy1 where  count=7");
	$res7=mysql_fetch_array($res227);
	$res48=$res7["abc"];

	$res228=mysql_query("select count(enrollment_no) as abc from sy1 where  count=8");
	$res8=mysql_fetch_array($res228);
	$res49=$res8["abc"];

	$res229=mysql_query("select count(enrollment_no) as abc from sy1 where  count=9");
	$res9=mysql_fetch_array($res229);
	$res50=$res9["abc"];

    $res230=mysql_query("select count(enrollment_no) as abc from sy1 where  count=10");
	$res10=mysql_fetch_array($res230);
	$res51=$res10["abc"];

	$res231=mysql_query("select count(enrollment_no) as abc from sy1 where  count=11");
	$res11=mysql_fetch_array($res231);
	$res52=$res11["abc"];

?>

<h3 align="center"> Fail In (Sem 4)</h3>
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
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where evs_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear=( $total_student-$APPEARED);
echo $appear;

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where chm_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED1=$resm["clear"];
$appear1=( $total_student-$APPEARED1);
echo $APPEARED1;	

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where dcn_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED2=$resm["clear"];
$appear2=( $total_student-$APPEARED2);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where map_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED2=$resm["clear"];
$appear3=( $total_student-$APPEARED2);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where oop_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED2=$resm["clear"];
$appear4=( $total_student-$APPEARED2);



//pass
$sql3=mysql_query("select count(`enrollment_no`) As clear from sy1 where evs_th>=19 and evs_th!=120 or evs_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist=$res3["clear"];
$total_per=($total_Dist/ $appear)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from sy1 where chm_th>=40 and chm_th!=120 or chm_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$total_per1=($total_Dist1/ $appear1)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from sy1 where dcn_th>=40 and dcn_th!=120 or dcn_th=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$total_per2=($total_Dist2/ $appear2)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from sy1 where map_th>=40 and map_th!=120 or map_th=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist3=$res3["clear"];
$total_per3=($total_Dist3/ $appear3)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from sy1 where oop_th>=40 and oop_th!=120 or oop_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist4=$res3["clear"];
$total_per4=($total_Dist4/ $appear4)*100;

//fail//
$sql3=mysql_query("select count(`enrollment_no`) As clear from sy1 where evs_th<20");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];
$total_per11=($total_Dist11/ $appear)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from sy1 where chm_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];
$total_per12=($total_Dist12/ $appear1)*100;


$sql3=mysql_query("select count(`enrollment_no`) As clear from sy1 where dcn_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];
$total_per13=($total_Dist13/ $appear2)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from sy1 where map_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist14=$res3["clear"];
$total_per14=($total_Dist14/ $appear3)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from sy1 where oop_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist15=$res3["clear"];
$total_per15=($total_Dist15/ $appear4)*100;



//min//
$sql1=mysql_query(" SELECT min(evs_th)AS min FROM `sy1` ");
$res1=mysql_fetch_array($sql1);
$min_student=$res1["min"];

$sql1=mysql_query(" SELECT min(chm_th)AS min FROM `sy1` ");
$res1=mysql_fetch_array($sql1);
$min_student1=$res1["min"];

$sql1=mysql_query(" SELECT min(dcn_th)AS min FROM `sy1` ");
$res1=mysql_fetch_array($sql1);
$min_student2=$res1["min"];

$sql1=mysql_query(" SELECT min(map_th)AS min FROM `sy1` ");
$res1=mysql_fetch_array($sql1);
$min_student3=$res1["min"];

$sql1=mysql_query(" SELECT min(oop_th)AS min FROM `sy1` ");
$res1=mysql_fetch_array($sql1);
$min_student4=$res1["min"];


//max//
$resk=120;
$reskk=140;
$sql2=mysql_query(" SELECT max(evs_th) AS max FROM `sy1` where evs_th!=$resk and (evs_th!=$reskk)");
$res2=mysql_fetch_array($sql2);
$max_student=$res2["max"];

$sql2=mysql_query(" SELECT max(chm_th)AS max FROM `sy1` where chm_th!=120 and (chm_th!=140) ");
$res2=mysql_fetch_array($sql2);
$max_student1=$res2["max"];

$sql2=mysql_query(" SELECT max(dcn_th)AS max FROM `sy1` where dcn_th!=120 and (dcn_th!=140) ");
$res2=mysql_fetch_array($sql2);
$max_student2=$res2["max"];

$sql2=mysql_query(" SELECT max(map_th)AS max FROM `sy1`  where map_th!=120 and (map_th!=140)");
$res2=mysql_fetch_array($sql2);
$max_student3=$res2["max"];

$sql2=mysql_query(" SELECT max(oop_th)AS max FROM `sy1` where oop_th!=120 and (oop_th!=140) ");
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
<td>summer :</td>
	<td>1.</td>
	<td>17301</td>
	<td>EVS</td>
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
    $staff=mysql_query("select * from sub_teacher where subj='EVS'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
	
	
</tr>
<tr>
<td></td>
	<td>2.</td>
	<td>17210</td>
	<td>CHM</td>
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
    $staff=mysql_query("select * from sub_teacher where subj='CHM'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>

<tr>
<td></td>
	<td>3.</td>
	<td>17212</td>
	<td>DCN</td>
	<td><?php echo $appear2  ?></td>
	<td><?php echo $total_Dist2  ?></td>
	<td><?php echo round($total_per2,2) ?></td>
	<td><?php echo $total_Dist13  ?></td>
	<td><?php echo round($total_per13,2) ?></td>
	<td><?php echo "$max_student2" ;?> </td>
	<td><?php echo "$min_student2";  ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php 
    $staff=mysql_query("select * from sub_teacher where subj='DCN'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>
<tr>
<td></td>
	<td>4.</td>
	<td>17213</td>
	<td>MAP</td>
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
    $staff=mysql_query("select * from sub_teacher where subj='MAP'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>
<tr>
<td></td>
	<td>5.</td>
	<td>17216</td>
	<td>OOP</td>
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
    $staff=mysql_query("select * from sub_teacher where subj='OOP'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>
</table>
<br>
<br>


<?php
//ams
$sql3=mysql_query("select candidate_name as dist from sy where ams_th=(select MAX(ams_th) from sy where ams_th<120)");
$res3=mysql_fetch_array($sql3);
$tams=$res3["dist"];

$sql3=mysql_query("select max(ams_th) as clear from sy where ams_th<120");
$res3=mysql_fetch_array($sql3);
$tams1=$res3["clear"];


//dsu
$sql3=mysql_query("select candidate_name as dist from sy where dsu_th=(select MAX(dsu_th) from sy where dsu_th<120)");
$res3=mysql_fetch_array($sql3);
$tdsu=$res3["dist"];

$sql3=mysql_query("select max(dsu_th) as clear from sy where dsu_th<120");
$res3=mysql_fetch_array($sql3);
$tdsu1=$res3["clear"];

//ete
$sql3=mysql_query("select candidate_name as dist from sy where ete_th=(select MAX(ete_th) from sy where ete_th<120)");
$res3=mysql_fetch_array($sql3);
$tete=$res3["dist"];

$sql3=mysql_query("select max(ete_th) as clear from sy where ete_th<120");
$res3=mysql_fetch_array($sql3);
$tete1=$res3["clear"];

//rdb
$sql3=mysql_query("select candidate_name as dist from sy where rdb_th=(select MAX(rdb_th) from sy where rdb_th<120)");
$res3=mysql_fetch_array($sql3);
$trdb=$res3["dist"];

$sql3=mysql_query("select max(rdb_th) as clear from sy where rdb_th<120");
$res3=mysql_fetch_array($sql3);
$trdb1=$res3["clear"];

//dte
$sql3=mysql_query("select candidate_name as dist from sy where dte_th=(select MAX(dte_th) from sy where dte_th<120)");
$res3=mysql_fetch_array($sql3);
$tdte=$res3["dist"];

$sql3=mysql_query("select max(dte_th) as clear from sy where dte_th<120");
$res3=mysql_fetch_array($sql3);
$tdte1=$res3["clear"];

?>

<table border="1" align="center">
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
	<td>Winter :</td>
	<td>1.</td>
	<td><?php echo $tams ?></td>
	<td>AMS</td>
	<td><?php echo $tams1 ?></td>
	</tr>
<tr>
	<td></td>
	<td>2.</td>
	<td><?php echo $tdsu ?></td>
	<td>DSU</td>
	<td><?php echo $tdsu1 ?></td>
</tr>
<tr>
	<td></td>
	<td>3.</td>
	<td><?php echo $tete ?></td>
	<td>ETE</td>
	<td><?php echo $tete1 ?></td>
</tr>
<tr>
	<td></td>
	<td>4.</td>
	<td><?php echo $trdb ?></td>
	<td>RDB</td>
	<td><?php echo $trdb1 ?></td>
</tr>
<tr>
	<td></td>
	<td>5.</td>
	<td><?php echo $tdte ?></td>
	<td>DTE</td>
	<td><?php echo $tdte1 ?></td>
</tr>
</table>


<?php

$sql3=mysql_query("select max(evs_th) as clear from  sy1 where evs_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from sy1 where evs_th=(select max(evs_th) from sy1 where evs_th<120) ");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];


$sql3=mysql_query("select max(chm_th) as clear from sy1 where chm_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from sy1 where chm_th=(select max(chm_th) from sy1 where chm_th<120) ");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];

$sql3=mysql_query("select max(dcn_th) as clear from sy1 where dcn_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist3=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from sy1 where dcn_th=(select max(dcn_th) from sy1 where dcn_th<120) ");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];

$sql3=mysql_query("select max(map_th) as clear from sy1 where map_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist4=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from sy1 where map_th=(select max(map_th) from sy1 where map_th<120) ");
$res3=mysql_fetch_array($sql3);
$total_Dist14=$res3["clear"];

$sql3=mysql_query("select max(oop_th) as clear from sy1 where oop_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist5=$res3["clear"];
$sql3=mysql_query("select candidate_name As clear from sy1 where oop_th=(select max(oop_th) from sy1 where oop_th<120) ");
$res3=mysql_fetch_array($sql3);
$total_Dist15=$res3["clear"];


?>

<table border="1" align="center">
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
	<td>summmer :</td>
	<td>1.</td>
	<td><?php echo $total_Dist11 ?></td>
	<td>CMS</td>
	<td><?php echo $total_Dist1 ?></td>
	
</tr>
<tr>
	<td></td>
	<td>2.</td>
	<td><?php echo $total_Dist12 ?></td>
	<td>APS</td>
	<td><?php echo $total_Dist2 ?></td>
</tr>
<tr>
	<td></td>
	<td>3.</td>
	<td><?php echo $total_Dist13 ?></td>
	<td>PIC</td>
	<td><?php echo $total_Dist3 ?></td>
</tr>
<tr>
	<td></td>
	<td>4.</td>
	<td><?php echo $total_Dist14 ?></td>
	<td>EEG</td>
	<td><?php echo $total_Dist4 ?></td>
</tr>
<tr>
	<td></td>
	<td>5.</td>
	<td><?php echo $total_Dist15 ?></td>
	<td>EMS</td>
	<td><?php echo $total_Dist5 ?></td>
</tr>

</table>
</div>
<button onclick="printContent('div2')" class="btn"><h3><b>Print</b></h3></button>
<br>

