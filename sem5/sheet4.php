<div id="div4">
<?php

include("/table.php");
//APPEARED//
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where osy_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where osy_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear1=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where sen_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear2=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where ifs_th=120  ");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear3=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where ifs_tw=120 ");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear4=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where jpr_th=120 ");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear5=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where jpr_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear6=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where jpr_tw=120 ");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear7=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where cte_th=120 ");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear8=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where cte_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear9=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where cte_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear10=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where bsc_or=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear11=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where bsc_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear12=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where nma_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear13=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where nma_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear14=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where pp=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear15=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where sw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear16=( $total_student-$APPEARED);
echo $appear16;


//min//
$sql1=mysql_query(" SELECT min(osy_th)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min_student=$res["min"];

$sql1=mysql_query(" SELECT min(osy_tw)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min1_student=$res["min"];

$sql1=mysql_query(" SELECT min(sen_th)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min2_student=$res["min"];

$sql1=mysql_query(" SELECT min(ifs_th)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min3_student=$res["min"];

$sql1=mysql_query(" SELECT min(ifs_tw)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min4_student=$res["min"];

$sql1=mysql_query(" SELECT min(jpr_th)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min5_student=$res["min"];

$sql1=mysql_query(" SELECT min(jpr_pr)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min6_student=$res["min"];

$sql1=mysql_query(" SELECT min(jpr_tw)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min7_student=$res["min"];

$sql1=mysql_query(" SELECT min(cte_th)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min8_student=$res["min"];

$sql1=mysql_query(" SELECT min(cte_pr)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min9_student=$res["min"];

$sql1=mysql_query(" SELECT min(cte_tw)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min10_student=$res["min"];

$sql1=mysql_query(" SELECT min(bsc_or)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min11_student=$res["min"];

$sql1=mysql_query(" SELECT min(bsc_tw)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min12_student=$res["min"];

$sql1=mysql_query(" SELECT min(nma_pr)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min13_student=$res["min"];

$sql1=mysql_query(" SELECT min(nma_tw)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min14_student=$res["min"];

$sql1=mysql_query(" SELECT min(pp)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min15_student=$res["min"];

$sql1=mysql_query(" SELECT min(sw)AS min FROM `ty` ");
$res=mysql_fetch_array($sql1);
$min16_student=$res["min"];


//max.../
$sql1=mysql_query(" SELECT * FROM `ty`");
$res=mysql_fetch_array($sql1);
$res9=120;
$res8=140;
$sql2=mysql_query(" SELECT max(osy_th)AS max FROM `ty`where osy_th!=$res9 and (osy_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max_student=$res2["max"];

$sql2=mysql_query(" SELECT max(osy_tw)AS max FROM `ty`where osy_tw!=$res9 and (osy_tw!=$res8) ");
$res2=mysql_fetch_array($sql2);
$max1_student=$res2["max"];

$sql2=mysql_query(" SELECT max(sen_th)AS max FROM `ty`where sen_th!=$res9 and (sen_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max2_student=$res2["max"];

$sql2=mysql_query(" SELECT max(ifs_th)AS max FROM `ty`where ifs_th<100");
$res2=mysql_fetch_array($sql2);
$max3_student=$res2["max"];

$sql2=mysql_query(" SELECT max(ifs_tw)AS max FROM `ty`where ifs_tw<100");
$res2=mysql_fetch_array($sql2);
$max4_student=$res2["max"];

$sql2=mysql_query(" SELECT max(jpr_th)AS max FROM `ty`where jpr_th<100");
$res2=mysql_fetch_array($sql2);
$max5_student=$res2["max"];

$sql2=mysql_query(" SELECT max(jpr_pr)AS max FROM `ty` where jpr_pr!=$res9 and (jpr_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max6_student=$res2["max"];

$sql2=mysql_query(" SELECT max(jpr_tw)AS max FROM `ty` where jpr_tw!=$res9 and (jpr_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max7_student=$res2["max"];

$sql2=mysql_query(" SELECT max(cte_th)AS max FROM `ty`where cte_th<100");
$res2=mysql_fetch_array($sql2);
$max8_student=$res2["max"];

$sql2=mysql_query(" SELECT max(cte_pr)AS max FROM `ty` where cte_pr!=$res9 and (cte_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max9_student=$res2["max"];

$sql2=mysql_query(" SELECT max(cte_tw)AS max FROM `ty` where cte_tw!=$res9 and (cte_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max10_student=$res2["max"];

$sql2=mysql_query(" SELECT max(bsc_or)AS max FROM `ty`where bsc_or!=$res9 and (bsc_or!=$res8)");
$res2=mysql_fetch_array($sql2);
$max11_student=$res2["max"];

$sql2=mysql_query(" SELECT max(bsc_tw)AS max FROM `ty`where bsc_tw!=$res9 and (bsc_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max12_student=$res2["max"];

$sql2=mysql_query(" SELECT max(nma_pr)AS max FROM `ty` where nma_pr!=$res9 and (nma_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max13_student=$res2["max"];

$sql2=mysql_query(" SELECT max(nma_tw)AS max FROM `ty` where nma_tw!=$res9 and (nma_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max14_student=$res2["max"];

$sql2=mysql_query(" SELECT max(pp)AS max FROM `ty`where pp!=$res9 and (pp!=$res8)");
$res2=mysql_fetch_array($sql2);
$max15_student=$res2["max"];

$sql2=mysql_query(" SELECT max(sw)AS max FROM `ty`where sw!=$res9 and (sw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max16_student=$res2["max"];

//passed//

$sql1=mysql_query("SELECT count( `seat_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sql3=mysql_query("select count(`seat_no`) As clear from ty where osy_th>39 and osy_th!=120 or osy_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist=$res3["clear"];
$total_per=($total_Dist/ $appear)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where osy_tw>9 and osy_tw!=120 or osy_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$total_per1=($total_Dist1/ $appear1)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where sen_th>39 and sen_th!=120 or sen_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$total_per2=($total_Dist2/ $appear2)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where ifs_th>39 and ifs_th!=1200 or ifs_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist3=$res3["clear"];
$total_per3=($total_Dist3/ $appear3)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where ifs_tw>9 and ifs_tw!=1200 or ifs_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist4=$res3["clear"];
$total_per4=($total_Dist4/ $appear4)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where jpr_th>39 and jpr_th!=1200 or jpr_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist5=$res3["clear"];
$total_per5=($total_Dist5/ $appear5)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where jpr_pr>19 and jpr_pr!=120 or jpr_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist6=$res3["clear"];
$total_per6=($total_Dist6/ $appear6)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where jpr_tw>9 and jpr_tw!=120 or jpr_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist7=$res3["clear"];
$total_per7=($total_Dist7/ $appear7)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where cte_th>39 and cte_th!=120 or cte_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist8=$res3["clear"];
$total_per8=($total_Dist8/ $appear8)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where cte_pr>9 and cte_pr!=120 or cte_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist9=$res3["clear"];
$total_per9=($total_Dist9/ $appear9)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where cte_tw>9 and cte_tw!=120 or cte_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist10=$res3["clear"];
$total_per10=($total_Dist10/ $appear10)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where bsc_or>9 and bsc_or!=120 or bsc_or=140");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];
$total_per11=($total_Dist11/ $appear11)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from ty  where bsc_tw>9 and bsc_tw!=120 or bsc_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];
$total_per12=($total_Dist12/ $appear12)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from ty  where nma_pr>19 and nma_pr!=120 or nma_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];
$total_per13=($total_Dist13/ $appear13)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where nma_tw>9 and nma_tw!=120 or nma_tw!=140");
$res3=mysql_fetch_array($sql3);
$total_Dist140=$res3["clear"];
$total_per140=($total_Dist140/ $appear14)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where pp>19 and pp!=120 or pp=140");
$res3=mysql_fetch_array($sql3);
$total_Dist15=$res3["clear"];
$total_per15=($total_Dist15/ $appear15)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty  where sw>9 and sw!=120 or sw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist16=$res3["clear"];
$total_per16=($total_Dist16/ $appear16)*100;


//above 60//
$sql3=mysql_query("select count(`seat_no`) As clear from ty where osy_th>59 and osy_th!=120 or osy_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist14=$res3["clear"];
$total_per14=($total_Dist14/ $appear)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where osy_tw>14 and osy_tw<100");
$res3=mysql_fetch_array($sql3);
$total_Dist15=$res3["clear"];
$total_per15=($total_Dist15/ $appear1)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where sen_th>59.99 and sen_th<100");
$res3=mysql_fetch_array($sql3);
$total_Dist16=$res3["clear"];
$total_per16=($total_Dist16/ $appear2)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where ifs_th>59 and ifs_th<100 ");
$res3=mysql_fetch_array($sql3);
$total_Dist17=$res3["clear"];
$total_per17=($total_Dist17/ $appear3)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where ifs_tw>14 and ifs_tw!=120 or ifs_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist18=$res3["clear"];
$total_per18=($total_Dist18/ $appear4)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where jpr_th>59 and jpr_th<100");
$res3=mysql_fetch_array($sql3);
$total_Dist19=$res3["clear"];
$total_per19=($total_Dist19/ $appear5)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where jpr_pr>29 and jpr_pr!=120 or jpr_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist20=$res3["clear"];
$total_per20=($total_Dist20/ $appear6)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where jpr_tw>14 and jpr_tw!=120 or jpr_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist21=$res3["clear"];
$total_per21=($total_Dist21/ $appear7)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where cte_th>59 and cte_th<100");
$res3=mysql_fetch_array($sql3);
$total_Dist22=$res3["clear"];
$total_per22=($total_Dist22/ $appear8)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where cte_pr>14 and cte_pr!=120 or cte_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist23=$res3["clear"];
$total_per23=($total_Dist23/ $appear9)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where cte_tw>14 and cte_tw!=120 or cte_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist24=$res3["clear"];
$total_per24=($total_Dist24/ $appear10)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where bsc_or>14 and bsc_or!=120 or bsc_or=140");
$res3=mysql_fetch_array($sql3);
$total_Dist25=$res3["clear"];
$total_per25=($total_Dist25/ $appear11)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where bsc_tw>14 and bsc_tw!=120 or bsc_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist26=$res3["clear"];
$total_per26=($total_Dist26/ $appear12)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where nma_pr>29 and nma_pr!=120 or nma_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist27=$res3["clear"];
$total_per27=($total_Dist27/ $appear13)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where nma_tw>14 and nma_tw!=120 or nma_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist28=$res3["clear"];
$total_per28=($total_Dist28/ $appear14)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where pp>29 and pp!=120 or pp=140");
$res3=mysql_fetch_array($sql3);
$total_Dist29=$res3["clear"];
$total_per29=($total_Dist29/ $appear15)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty where sw>29 and sw!=120 or sw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist30=$res3["clear"];
$total_per30=($total_Dist30/ $appear16)*100;

?>
<form>
	<table border="1" align="center">
		<tr>
			<td>srno</td>
			<td>sub_code</td>
			<td>sub_name</td>
			<td>th/pr/or</td>
			<td>lowest_mark</td>
			<td>highest_mark</td>
			<td>no_of_student_appeared</td>
			<td>no_of_student_passed</td>
			<td>%_of_student_passed</td>
			<td>%_of_stud_above_60%</td>
		</tr>
		<tr>
			<td>1</td>
			<td>17512</td>
			<td>Operating system</td>
			<td>TH</td>
			<td><?php echo "$min_student" ;?> </td>
			<td><?php echo "$max_student";  ?></td>
			<td><?php echo $appear ?></td>
			<td> <?php echo $total_Dist  ?></td>
            <td>  <?php  echo round($total_per,2) ?></td>
			<td><?php  echo round($total_per14,2) ?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>17512</td>
			<td>Operating system</td>
			<td>TW</td>
			<td><?php echo "$min1_student" ;?> </td>
			<td> <?php echo "$max1_student";  ?></td>
			<td><?php echo $appear1 ?></td>
			<td><?php echo $total_Dist1  ?></td>
			<td>  <?php  echo round($total_per1,2) ?></td>
			<td><?php  echo round($total_per15,2) ?> </td>
		</tr>
		<tr>
			<td>3</td>
			<td>17513</td>
			<td>Software Engineering</td>
			<td>TH</td>
			<td><?php echo "$min2_student" ;?> </td>
			<td><?php echo "$max2_student";  ?></td>
			<td><?php echo $appear2 ?></td>
			<td><?php echo $total_Dist2  ?></td>
			<td><?php  echo round($total_per2,2) ?></td>
			<td><?php  echo round($total_per16,2) ?></td>
		</tr>
		<tr>
			<td>4</td>
			<td>17518</td>
			<td>Information Security</td>
			<td>TW</td>
			<td><?php echo "$min3_student" ;?></td>
			<td><?php echo "$max3_student";  ?></td>
			<td><?php echo $appear3 ?></td>
			<td><?php echo $total_Dist3  ?></td>
			<td><?php  echo round($total_per3 ,2)?></td>
			<td><?php  echo round($total_per17,2) ?></td>
		</tr>
		<tr>
			<td>5</td>
			<td>17518</td>
			<td>Information Security</td>
			<td>TW</td>
			<td><?php echo "$min4_student" ;?></td>
			<td><?php echo "$max4_student";  ?></td>
			<td><?php echo $appear4 ?></td>
			<td><?php echo $total_Dist4  ?></td>
			<td><?php  echo round($total_per4,2) ?></td>
			<td><?php  echo round($total_per18 ,2)?></td>
		</tr>
		<tr>
			<td>6</td>
			<td>17515</td>
			<td>Java Programming</td>
			<td>TH</td>
			<td><?php echo "$min5_student" ;?></td>
			<td><?php echo "$max5_student";  ?></td>
			<td><?php echo $appear5 ?></td>
			<td><?php echo $total_Dist5  ?></td>
			<td><?php  echo round($total_per5,2) ?></td>
			<td><?php  echo round($total_per19,2) ?></td>
		</tr>
		<tr>
			<td>7</td>
			<td>17515</td>
			<td>Java Programming</td>
			<td>PR</td>
			<td><?php echo "$min6_student" ;?></td>
			<td><?php echo "$max6_student";  ?></td>
			<td><?php echo $appear6?></td>
			<td><?php echo $total_Dist6  ?></td>
			<td><?php  echo round($total_per6 ,2)?></td>
			<td><?php  echo round($total_per20,2) ?></td>
		</tr>
		<tr>
			<td>8</td>
			<td>17515</td>
			<td>Java Programming</td>
			<td>TW</td>
			<td><?php echo "$min7_student" ;?></td>
			<td><?php echo "$max7_student";  ?></td>
			<td><?php echo $appear7 ?></td>
			<td><?php echo $total_Dist7  ?></td>
			<td><?php  echo round($total_per7 ,2)?></td>
			<td><?php  echo round($total_per21,2) ?></td>
		</tr>
		<tr>
			<td>9</td>
			<td>17519</td>
			<td>Communication Technology</td>
			<td>TH</td>
			<td><?php echo "$min8_student" ;?></td>
			<td><?php echo "$max8_student";  ?></td>
			<td><?php echo $appear8 ?></td>
			<td><?php echo $total_Dist8  ?></td>
			<td><?php  echo round($total_per8 ,2)?></td>
			<td><?php  echo round($total_per22,2) ?></td>
		</tr>
		<tr>
			<td>10</td>
			<td>17519</td>
			<td>Communication Technology</td>
			<td>PR</td>
			<td><?php echo "$min9_student" ;?></td>
			<td><?php echo "$max9_student";  ?></td>
			<td><?php echo $appear9 ?></td>
			<td><?php echo $total_Dist9  ?></td>
			<td><?php  echo round($total_per9,2) ?></td>
			<td><?php  echo round($total_per23,2) ?></td>
		</tr>
		<tr>
			<td>11</td>
			<td>17519</td>
			<td>Communication Technology</td>
			<td>TW</td>
			<td><?php echo "$min10_student" ;?></td>
			<td><?php echo "$max10_student";  ?></td>
			<td><?php echo $appear10 ?></td>
			<td><?php echo $total_Dist10  ?></td>
			<td><?php  echo round($total_per10,2) ?></td>
			<td><?php  echo round($total_per24,2) ?></td>
		</tr>
		<tr>
			<td>12</td>
			<td>17075</td>
			<td>Behavioural Science</td>
			<td>OR</td>
			<td><?php echo "$min11_student" ;?></td>
			<td><?php echo "$max11_student";  ?></td>
			<td><?php echo $appear11 ?></td>
			<td><?php echo $total_Dist11  ?></td>
			<td><?php  echo round($total_per11,2) ?></td>
			<td><?php  echo round($total_per25,2) ?></td>
		</tr>
		<tr>
			<td>13</td>
			<td>17075</td>
			<td>Behavioural Science</td>
			<td>TW</td>
			<td><?php echo "$min12_student" ;?></td>
			<td><?php echo "$max12_student";  ?></td>
			<td><?php echo $appear12 ?></td>
			<td><?php echo $total_Dist12  ?></td>
			<td><?php  echo round($total_per12,2) ?></td>
			<td><?php  echo round($total_per26,2) ?></td>
		</tr>
		<tr>
			<td>14</td>
			<td>17061</td>
			<td>Network management & admin</td>
			<td>PR</td>
			<td><?php echo "$min13_student" ;?></td>
			<td><?php echo "$max13_student";  ?></td>
			<td><?php echo $appear13 ?></td>
			<td><?php echo $total_Dist13  ?></td>
			<td><?php  echo round($total_per13,2) ?></td>
			<td><?php  echo round($total_per27,2) ?></td>
		</tr>
		<tr>
			<td>15</td>
			<td>17061</td>
			<td>Network management & admin</td>
			<td>TW</td>
			<td><?php echo "$min14_student" ;?></td>
			<td><?php echo "$max14_student";  ?></td>
			<td><?php echo $appear14 ?></td>
			<td><?php echo $total_Dist140  ?></td>
			<td><?php  echo round($total_per140 ,2)?></td>
			<td><?php  echo round($total_per28,2) ?></td>
		</tr>
		<tr>
			<td>16</td>
			<td>17062</td>
			<td>PP</td>
			<td>TW</td>
			<td><?php echo "$min15_student" ;?></td>
			<td><?php echo "$max15_student";  ?></td>
			<td><?php echo $appear15 ?></td>
			<td><?php echo $total_Dist15  ?></td>
			<td><?php  echo round($total_per15,2) ?></td>
			<td><?php  echo round($total_per29,2) ?></td>
		</tr>
		<tr>
			<td>17</td>
			<td></td>
			<td>SW</td>
			<td>SW</td>
			<td><?php echo "$min16_student" ;?></td>
			<td><?php echo "$max16_student";  ?></td>
			<td><?php echo $appear16 ?></td>
			<td><?php echo $appear16?></td>
			<td><?php  echo "100"; ?></td>
			<td><?php  echo round($total_per30,2) ?></td>
		</tr>
		
	</table>
</form>
</div>
<button onclick="printContent('div4')" class="btn"><h3><b>Print</b></h3></button>
<br><br>