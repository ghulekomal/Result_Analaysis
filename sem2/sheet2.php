<div id="div2">
<?php 

include("/table.php");
//passed
 $sqlw=mysql_query("select COUNT(`enrollment_no`) as total from fy");
    $resTot=mysql_fetch_array($sqlw);
    $total_stud=$resTot["total"];

//fail in//

	
	$res221=mysql_query("select count(enrollment_no) as abc from fy where  count=1");
	$res1=mysql_fetch_array($res221);
	$res42=$res1["abc"];

    $res222=mysql_query("select count(enrollment_no) as abc from fy where  count=2");
	$res2=mysql_fetch_array($res222);
	$res43=$res2["abc"];

	$res223=mysql_query("select count(enrollment_no) as abc from fy where  count=3");
	$res3=mysql_fetch_array($res223);
	$res44=$res3["abc"];

	$res224=mysql_query("select count(enrollment_no) as abc from fy where  count=4");
	$res4=mysql_fetch_array($res224);
	$res45=$res4["abc"];

	$res225=mysql_query("select count(enrollment_no) as abc from fy where  count=5");
	$res5=mysql_fetch_array($res225);
	$res46=$res5["abc"];

    $res226=mysql_query("select count(enrollment_no) as abc from fy where  count=6");
	$res6=mysql_fetch_array($res226);
	$res47=$res6["abc"];

	$res227=mysql_query("select count(enrollment_no) as abc from fy where  count=7");
	$res7=mysql_fetch_array($res227);
	$res48=$res7["abc"];

	$res228=mysql_query("select count(enrollment_no) as abc from fy where  count=8");
	$res8=mysql_fetch_array($res228);
	$res49=$res8["abc"];

	$res229=mysql_query("select count(enrollment_no) as abc from fy where  count=9");
	$res9=mysql_fetch_array($res229);
	$res50=$res9["abc"];

    $res230=mysql_query("select count(enrollment_no) as abc from fy where  count=10");
	$res10=mysql_fetch_array($res230);
	$res51=$res10["abc"];

	$res231=mysql_query("select count(enrollment_no) as abc from fy where  count=11");
	$res11=mysql_fetch_array($res231);
	$res52=$res11["abc"];

?>

<h3 align="center"> Fail In (Sem 1)</h3>
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
	<td><?php echo  round(($res42/$total_stud)*100,2); ?></td>
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

$sqlw=mysql_query("select COUNT(`enrollment_no`) as total from fy1");
    $resTot=mysql_fetch_array($sqlw);
    $total_stud1=$resTot["total"];




$res221=mysql_query("select count(enrollment_no) as abc from fy1 where  count=1");
	$res1=mysql_fetch_array($res221);
	$res42=$res1["abc"];

    $res222=mysql_query("select count(enrollment_no) as abc from fy1 where  count=2");
	$res2=mysql_fetch_array($res222);
	$res43=$res2["abc"];

	$res223=mysql_query("select count(enrollment_no) as abc from fy1 where  count=3");
	$res3=mysql_fetch_array($res223);
	$res44=$res3["abc"];

	$res224=mysql_query("select count(enrollment_no) as abc from fy1 where  count=4");
	$res4=mysql_fetch_array($res224);
	$res45=$res4["abc"];

	$res225=mysql_query("select count(enrollment_no) as abc from fy1 where  count=5");
	$res5=mysql_fetch_array($res225);
	$res46=$res5["abc"];

    $res226=mysql_query("select count(enrollment_no) as abc from fy1 where  count=6");
	$res6=mysql_fetch_array($res226);
	$res47=$res6["abc"];

	$res227=mysql_query("select count(enrollment_no) as abc from fy1 where  count=7");
	$res7=mysql_fetch_array($res227);
	$res48=$res7["abc"];

	$res228=mysql_query("select count(enrollment_no) as abc from fy1 where  count=8");
	$res8=mysql_fetch_array($res228);
	$res49=$res8["abc"];

	$res229=mysql_query("select count(enrollment_no) as abc from fy1 where  count=9");
	$res9=mysql_fetch_array($res229);
	$res50=$res9["abc"];

    $res230=mysql_query("select count(enrollment_no) as abc from fy1 where  count=10");
	$res10=mysql_fetch_array($res230);
	$res51=$res10["abc"];

	$res231=mysql_query("select count(enrollment_no) as abc from fy1 where  count=11");
	$res11=mysql_fetch_array($res231);
	$res52=$res11["abc"];

?>
<h3 align="center"> Fail In (Sem 2)</h3>
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
	<td><?php echo round(($res42/$total_stud1)*100,2); ?></td>
	<td><?php echo round(($res43/$total_stud1)*100,2); ?></td>
	<td><?php echo round(($res44/$total_stud1)*100,2); ?></td>
	<td><?php echo round(($res45/$total_stud1)*100,2); ?></td>
	<td><?php echo round(($res46/$total_stud1)*100,2); ?></td>
	<td><?php echo round(($res47/$total_stud1)*100,2); ?></td>
	<td><?php echo round(($res48/$total_stud1)*100,2); ?></td>
	<td><?php echo round(($res49/$total_stud1)*100,2); ?></td>
	<td><?php echo round(($res50/$total_stud1)*100,2); ?></td>
	<td><?php echo round(($res51/$total_stud1)*100,2); ?></td>
	<td><?php echo round(($res52/$total_stud1)*100,2); ?></td>
	
</tr>

</table>


<?php
//appeared//
$sql1=mysql_query("SELECT count( `enrollment_no`)AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where cms_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear=( $total_student-$APPEARED);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where aps_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED1=$resm["clear"];
$appear1=( $total_student-$APPEARED1);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where pic_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED2=$resm["clear"];
$appear2=( $total_student-$APPEARED2);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where eeg_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED3=$resm["clear"];
$appear3=( $total_student-$APPEARED3);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where ems_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED4=$resm["clear"];
$appear4=( $total_student-$APPEARED4);


//pass
$sql3=mysql_query("select count(`enrollment_no`) As clear from fy1 where cms_th>39 and cms_th!=120  OR cms_th=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist=$res3["clear"];
$total_per=($total_Dist/ $appear)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from fy1 where aps_th>39 and aps_th!=120 OR aps_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$total_per1=($total_Dist1/ $appear1)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from fy1 where pic_th>39 and pic_th!=120 OR pic_th=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$total_per2=($total_Dist2/ $appear2)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from fy1 where eeg_th>39 and eeg_th!=120 OR eeg_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist3=$res3["clear"];
$total_per3=($total_Dist3/ $appear3)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from fy1 where ems_th>39 and ems_th!=120 OR ems_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist4=$res3["clear"];
$total_per4=($total_Dist4/ $appear4)*100;



//fail//
$sql3=mysql_query("select count(`enrollment_no`) As clear from fy1 where cms_th<40 ");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];
$total_per11=($total_Dist11/ $appear)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from fy1 where aps_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];
$total_per12=($total_Dist12/ $appear1)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from fy1 where pic_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];
$total_per13=($total_Dist13/ $appear2)*100;


$sql3=mysql_query("select count(`enrollment_no`) As clear from fy1 where eeg_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist14=$res3["clear"];
$total_per14=($total_Dist14/ $appear3)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from fy1 where ems_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist15=$res3["clear"];
$total_per15=($total_Dist15/ $appear4)*100;


//min//
$sql1=mysql_query(" SELECT min(cms_th)AS min FROM `fy1` ");
$res1=mysql_fetch_array($sql1);
$min_student=$res1["min"];

$sql1=mysql_query(" SELECT min(aps_th)AS min FROM `fy1` ");
$res1=mysql_fetch_array($sql1);
$min_student1=$res1["min"];

$sql1=mysql_query(" SELECT min(pic_th)AS min FROM `fy1` ");
$res1=mysql_fetch_array($sql1);
$min_student2=$res1["min"];

$sql1=mysql_query(" SELECT min(eeg_th)AS min FROM `fy1` ");
$res1=mysql_fetch_array($sql1);
$min_student3=$res1["min"];

$sql1=mysql_query(" SELECT min(ems_th)AS min FROM `fy1` ");
$res1=mysql_fetch_array($sql1);
$min_student4=$res1["min"];


//max//
$sql2=mysql_query(" SELECT max(cms_th)AS max FROM `fy1` where cms_th!=120 and (cms_th!=140)");
$res2=mysql_fetch_array($sql2);
$max_student=$res2["max"];

$sql2=mysql_query(" SELECT max(aps_th)AS max FROM `fy1` where aps_th!=120 and (aps_th!=140)");
$res2=mysql_fetch_array($sql2);
$max_student1=$res2["max"];

$sql2=mysql_query(" SELECT max(pic_th)AS max FROM `fy1` where pic_th!=120 and (pic_th!=140)");
$res2=mysql_fetch_array($sql2);
$max_student2=$res2["max"];

$sql2=mysql_query(" SELECT max(eeg_th)AS max FROM `fy1` where eeg_th!=120 and (eeg_th!=140)");
$res2=mysql_fetch_array($sql2);
$max_student3=$res2["max"];

$sql2=mysql_query(" SELECT max(ems_th)AS max FROM `fy1` where ems_th!=120 and (ems_th!=140)");
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
	<td>17201</td>
	<td>CMS</td>
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
    $staff=mysql_query("select * from sub_teacher where subj='CMS'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
	
	
</tr>
<tr>
<td></td>
	<td>2.</td>
	<td>17210/17211</td>
	<td>APS</td>
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
    $staff=mysql_query("select * from sub_teacher where subj='APS'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>

<tr>
<td></td>
	<td>3.</td>
	<td>17212</td>
	<td>PIC</td>
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
    $staff=mysql_query("select * from sub_teacher where subj='PIC'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>
<tr>
<td></td>
	<td>4.</td>
	<td>17213</td>
	<td>EEG</td>
	<td><?php echo $appear3  ?></td>
	<td><?php echo $total_Dist3  ?></td>
	<td><?php echo round($total_per3,2) ?></td>
	<td><?php echo $total_Dist14  ?></td>
	<td><?php echo round($total_per14,2) ?></td>
	<td><?php echo "$max_student3" ;?> </td>
	<td><?php echo "$min_student3";  ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php 
    $staff=mysql_query("select * from sub_teacher where subj='EEG'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>

<tr>
<td></td>
	<td>5.</td>
	<td>17216</td>
	<td>EMS</td>
	<td><?php echo $appear4  ?></td>
	<td><?php echo $total_Dist4  ?></td>
	<td><?php echo round($total_per4,2) ?></td>
	<td><?php echo $total_Dist15  ?></td>
	<td><?php echo round($total_per15,2) ?></td>
	<td><?php echo "$max_student4" ;?> </td>
	<td><?php echo "$min_student4";  ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php 
    $staff=mysql_query("select * from sub_teacher where subj='EMS'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>
</table>
<br>
<?php 
$sql3=mysql_query("select candidate_name as dist from fy where eng_th=(select MAX(eng_th) from fy where eng_th<120)");
$res3=mysql_fetch_array($sql3);
$teng=$res3["dist"];

$sql3=mysql_query("select max(eng_th) as clear from fy where eng_th<120");
$res3=mysql_fetch_array($sql3);
$teng1=$res3["clear"];


//bsc
$sql3=mysql_query("select candidate_name as dist from fy where bsc_th=(select MAX(bsc_th) from fy where bsc_th<120)");
$res3=mysql_fetch_array($sql3);
$tbsc=$res3["dist"];

$sql3=mysql_query("select max(bsc_th) as clear from fy where bsc_th<120");
$res3=mysql_fetch_array($sql3);
$tbsc1=$res3["clear"];

//bms
$sql3=mysql_query("select candidate_name as dist from fy where bms_th=(select MAX(bms_th) from fy where bms_th<120)");
$res3=mysql_fetch_array($sql3);
$tbms=$res3["dist"];

$sql3=mysql_query("select max(bms_th) as clear from fy where bms_th<120 ");
$res3=mysql_fetch_array($sql3);
$tbms1=$res3["clear"];

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
	<td><?php echo $teng ?></td>
	<td>ENG</td>
	<td><?php echo $teng1 ?></td>
	
</tr>
<tr>
	<td></td>
	<td>2.</td>
	<td><?php echo $tbsc ?></td>
	<td>BSC</td>
	<td><?php echo $tbsc1 ?></td>
</tr>
<tr>
	<td></td>
	<td>3.</td>
	<td><?php echo $tbms ?></td>
	<td>BMS</td>
	<td><?php echo $tbms1 ?></td>
</tr>

</table>

<?php
//CMS
$sql3=mysql_query("select candidate_name as dist from fy1 where cms_th=(select MAX(cms_th) from fy1 where cms_th<120)");
$res3=mysql_fetch_array($sql3);
$tcms=$res3["dist"];

$sql3=mysql_query("select max(cms_th) as clear from fy1 where cms_th<120");
$res3=mysql_fetch_array($sql3);
$tcms1=$res3["clear"];


//APS
$sql3=mysql_query("select candidate_name as dist from fy1 where aps_th=(select MAX(aps_th) from fy1 where aps_th<120)");
$res3=mysql_fetch_array($sql3);
$taps=$res3["dist"];

$sql3=mysql_query("select max(aps_th) as clear from fy1 where aps_th<120");
$res3=mysql_fetch_array($sql3);
$taps1=$res3["clear"];

//PIC
$sql3=mysql_query("select candidate_name as dist from fy1 where pic_th=(select MAX(pic_th) from fy1 where pic_th<120)");
$res3=mysql_fetch_array($sql3);
$tpic=$res3["dist"];

$sql3=mysql_query("select max(pic_th) as clear from fy1 where pic_th<120");
$res3=mysql_fetch_array($sql3);
$tpic1=$res3["clear"];

//EEG
$sql3=mysql_query("select candidate_name as dist from fy1 where eeg_th=(select MAX(eeg_th) from fy1 where eeg_th<120)");
$res3=mysql_fetch_array($sql3);
$teeg=$res3["dist"];

$sql3=mysql_query("select max(eeg_th) as clear from fy1 where eeg_th<120");
$res3=mysql_fetch_array($sql3);
$teeg1=$res3["clear"];

//EMS
$sql3=mysql_query("select candidate_name as dist from fy1 where ems_th=(select MAX(ems_th) from fy1 where ems_th<120)");
$res3=mysql_fetch_array($sql3);
$tems=$res3["dist"];

$sql3=mysql_query("select max(ems_th) as clear from fy1 where ems_th<120");
$res3=mysql_fetch_array($sql3);
$tems1=$res3["clear"];
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
	<td>summer :</td>
	<td>1.</td>
	<td><?php echo $tcms ?></td>
	<td>CMS</td>
	<td><?php echo $tcms1 ?></td>
	
</tr>
<tr>
	<td></td>
	<td>2.</td>
	<td><?php echo $taps ?></td>
	<td>APS</td>
	<td><?php echo $taps1 ?></td>
</tr>
<tr>
	<td></td>
	<td>3.</td>
	<td><?php echo $tpic ?></td>
	<td>PIC</td>
	<td><?php echo $tpic1 ?></td>
</tr>
<tr>
	<td></td>
	<td>4.</td>
	<td><?php echo $teeg ?></td>
	<td>EEG</td>
	<td><?php echo $teeg1 ?></td>
</tr>
<tr>
	<td></td>
	<td>5.</td>
	<td><?php echo $tems ?></td>
	<td>EMS</td>
	<td><?php echo $tems1 ?></td>
</tr>


</table>
</div>
<button onclick="printContent('div2')" class="btn"><h3><b>Print</b></h3></button>
<br><br>
