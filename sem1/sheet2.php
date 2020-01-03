
<div id="div2"> 

<?php 
    include("/table.php");

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
	
	

<h3 align="center"> Fail In (sem 1)</h3>
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

//appeared//
$sql1=mysql_query("SELECT count( `enrollment_no`)AS total_stud
FROM `fy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy where eng_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear=( $total_student-$APPEARED);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy where bsc_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED1=$resm["clear"];
$appear1=( $total_student-$APPEARED1);

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy where bms_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED2=$resm["clear"];
$appear2=( $total_student-$APPEARED2);


//pass
$sql3=mysql_query("select count(`enrollment_no`) As clear from fy where eng_th>39 and eng_th!=120 OR eng_th=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist=$res3["clear"];
$total_per=($total_Dist/ $appear)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from fy where bsc_th>39 and bsc_th!=120 OR bsc_th=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$total_per1=($total_Dist1/ $appear1)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from fy where bms_th>39 and bms_th!=120 OR bms_th=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$total_per2=($total_Dist2/ $appear2)*100;



//fail//
$sql3=mysql_query("select count(`enrollment_no`) As clear from fy where eng_th<40 ");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];
$total_per11=($total_Dist11/ $appear)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from fy where bsc_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];
$total_per12=($total_Dist12/ $appear1)*100;

$sql3=mysql_query("select count(`enrollment_no`) As clear from fy where bms_th<40");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];
$total_per13=($total_Dist13/ $appear2)*100;



//min//
$sql1=mysql_query(" SELECT min(eng_th)AS min FROM `fy` ");
$res1=mysql_fetch_array($sql1);
$min_student=$res1["min"];

$sql1=mysql_query(" SELECT min(bsc_th)AS min FROM `fy` ");
$res1=mysql_fetch_array($sql1);
$min_student1=$res1["min"];

$sql1=mysql_query(" SELECT min(bms_th)AS min FROM `fy` ");
$res1=mysql_fetch_array($sql1);
$min_student2=$res1["min"];


//max//
$sql2=mysql_query(" SELECT max(eng_th)AS max FROM `fy` where eng_th!=120 and (eng_th!=140)");
$res2=mysql_fetch_array($sql2);
$max_student=$res2["max"];

$sql2=mysql_query(" SELECT max(bsc_th)AS max FROM `fy` where bsc_th!=120 and (bsc_th!=140)");
$res2=mysql_fetch_array($sql2);
$max_student1=$res2["max"];

$sql2=mysql_query(" SELECT max(bms_th)AS max FROM `fy` where bms_th!=120 and (bms_th!=140)");
$res2=mysql_fetch_array($sql2);
$max_student2=$res2["max"];
?>
<table border="1" align="center">
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
	<td>17101</td>
	<td>ENG</td>
	<td><?php echo $appear  ?></td>
	<td><?php echo $total_Dist  ?></td>
	<td><?php echo round($total_per,2); ?></td>
	<td><?php echo $total_Dist11  ?></td>
	<td><?php echo round($total_per11,2); ?></td>
	<td><?php echo "$max_student" ;?> </td>
	<td><?php echo "$min_student";  ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php 
    $staff=mysql_query("select * from sub_teacher where subj='ENG'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
	
	
</tr>
<tr>
<td></td>
	<td>2.</td>
	<td>17102</td>
	<td>BSC</td>
	<td><?php echo $appear1  ?></td>
	<td><?php echo $total_Dist1  ?></td>
	<td><?php echo round($total_per1,2); ?></td>
	<td><?php echo $total_Dist12  ?></td>
	<td><?php echo round($total_per12,2); ?></td>
	<td><?php echo "$max_student1" ;?> </td>
	<td><?php echo "$min_student1";  ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php 
    $staff=mysql_query("select * from sub_teacher where subj='BSC'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>

<tr>
<td></td>
	<td>3.</td>
	<td>17104</td>
	<td>BMS</td>
	<td><?php echo $appear2  ?></td>
	<td><?php echo $total_Dist2  ?></td>
	<td><?php echo round($total_per2,2); ?></td>
	<td><?php echo $total_Dist13  ?></td>
	<td><?php echo round($total_per13,2); ?></td>
	<td><?php echo "$max_student2" ;?> </td>
	<td><?php echo "$min_student2";  ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php 
    $staff=mysql_query("select * from sub_teacher where subj='BMS'");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["staff"];	  ?></td>
</tr>




<?php
//eng
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
</div>
<button onclick="printContent('div2')" class="btn"><h3><b>Print</b></h3></button>
<br>