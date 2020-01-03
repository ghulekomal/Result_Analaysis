<div id="div4">
<?php
include("/table.php");
//appeared student//
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where evs_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where evs_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED1=$resm["clear"];
$appear1=( $total_student-$APPEARED1);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where chm_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED2=$resm["clear"];
$appear2=( $total_student-$APPEARED2);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where chm_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED3=$resm["clear"];
$appear3=( $total_student-$APPEARED3);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where chm_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED4=$resm["clear"];
$appear4=( $total_student-$APPEARED4);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where dcn_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED5=$resm["clear"];
$appear5=( $total_student-$APPEARED5);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where dcn_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED6=$resm["clear"];
$appear6=( $total_student-$APPEARED6);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where dcn_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED7=$resm["clear"];
$appear7=( $total_student-$APPEARED7);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where map_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED8=$resm["clear"];
$appear8=( $total_student-$APPEARED8);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where man_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED9=$resm["clear"];
$appear9=( $total_student-$APPEARED9);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where man_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED10=$resm["clear"];
$appear10=( $total_student-$APPEARED10);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where oop_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED11=$resm["clear"];
$appear11=( $total_student-$APPEARED11);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where oop_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED12=$resm["clear"];
$appear12=( $total_student-$APPEARED12);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where oop_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED13=$resm["clear"];
$appear13=( $total_student-$APPEARED13);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where amt_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED13=$resm["clear"];
$appear14=( $total_student-$APPEARED13);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where amt_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED13=$resm["clear"];
$appear15=( $total_student-$APPEARED13);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where pp=120");
$resm=mysql_fetch_array($sqm);
$APPEARED13=$resm["clear"];
$appear16=( $total_student-$APPEARED13);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy1 where sw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED13=$resm["clear"];
$appear17=( $total_student-$APPEARED13);


//min
$sql1=mysql_query(" SELECT min(evs_th)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min_student=$res["min"];

$sql1=mysql_query(" SELECT min(evs_tw)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min1_student=$res["min"];

$sql1=mysql_query(" SELECT min(chm_th)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min2_student=$res["min"];

$sql1=mysql_query(" SELECT min(chm_pr)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min3_student=$res["min"];

$sql1=mysql_query(" SELECT min(chm_tw)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min4_student=$res["min"];

$sql1=mysql_query(" SELECT min(dcn_th)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min5_student=$res["min"];

$sql1=mysql_query(" SELECT min(dcn_pr)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min6_student=$res["min"];

$sql1=mysql_query(" SELECT min(dcn_tw)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min7_student=$res["min"];

$sql1=mysql_query(" SELECT min(map_th)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min8_student=$res["min"];

$sql1=mysql_query(" SELECT min(man_pr)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min9_student=$res["min"];

$sql1=mysql_query(" SELECT min(man_tw)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min10_student=$res["min"];

$sql1=mysql_query(" SELECT min(oop_th)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min11_student=$res["min"];

$sql1=mysql_query(" SELECT min(oop_pr)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min12_student=$res["min"];

$sql1=mysql_query(" SELECT min(oop_tw)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min13_student=$res["min"];

$sql1=mysql_query(" SELECT min(amt_pr)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min14_student=$res["min"];

$sql1=mysql_query(" SELECT min(amt_tw)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min15_student=$res["min"];

$sql1=mysql_query(" SELECT min(pp)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min16_student=$res["min"];

$sql1=mysql_query(" SELECT min(sw)AS min FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$min17_student=$res["min"];

//max
$sql1=mysql_query(" SELECT * FROM `sy1`");
$res=mysql_fetch_array($sql1);
$res9=120;
$res8=140;
$sql2=mysql_query(" SELECT max(evs_th) AS max FROM`sy1`where evs_th!=$res9 and (evs_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max_student=$res2["max"];

$sql2=mysql_query(" SELECT max(evs_tw)AS max FROM `sy1`where evs_tw!=$res9 and (evs_tw!=$res8) ");
$res2=mysql_fetch_array($sql2);
$max1_student=$res2["max"];

$sql2=mysql_query(" SELECT max(chm_th)AS max FROM `sy1`where chm_th!=$res9 and (chm_th!=$res8) ");
$res2=mysql_fetch_array($sql2);
$max2_student=$res2["max"];

$sql2=mysql_query(" SELECT max(chm_pr)AS max FROM `sy1`where chm_pr!=$res9 and (chm_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max3_student=$res2["max"];

$sql2=mysql_query(" SELECT max(chm_tw)AS max FROM `sy1` where chm_tw!=$res9 and (chm_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max4_student=$res2["max"];

$sql2=mysql_query(" SELECT max(dcn_th)AS max FROM `sy1`where dcn_th!=$res9 and (dcn_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max5_student=$res2["max"];

$sql2=mysql_query(" SELECT max(dcn_pr)AS max FROM `sy1`where dcn_pr!=$res9 and (dcn_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max6_student=$res2["max"];

$sql2=mysql_query(" SELECT max(dcn_tw)AS max FROM `sy1`where dcn_tw!=$res9  and (dcn_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max7_student=$res2["max"];

$sql2=mysql_query(" SELECT max(map_th)AS max FROM `sy1`where map_th!=$res9 and (map_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max8_student=$res2["max"];

$sql2=mysql_query(" SELECT max(man_pr)AS max FROM `sy1` where man_pr!=$res9 and (man_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max9_student=$res2["max"];

$sql2=mysql_query(" SELECT max(man_tw)AS max FROM `sy1`where man_tw!=$res9 and (man_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max10_student=$res2["max"];

$sql2=mysql_query(" SELECT max(oop_th)AS max FROM `sy1`where oop_th!=$res9 and (oop_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max11_student=$res2["max"];

$sql2=mysql_query(" SELECT max(oop_pr)AS max FROM `sy1` where oop_pr!=$res9 and (oop_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max12_student=$res2["max"];

$sql2=mysql_query(" SELECT max(oop_tw)AS max FROM `sy1`where oop_tw!=$res9 and (oop_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max13_student=$res2["max"];

$sql2=mysql_query(" SELECT max(amt_pr)AS max FROM `sy1`where amt_pr!=$res9 and (amt_pr!=$res8) ");
$res2=mysql_fetch_array($sql2);
$max14_student=$res2["max"];

$sql2=mysql_query(" SELECT max(amt_tw)AS max FROM `sy1`where amt_tw!=$res9 and (amt_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max15_student=$res2["max"];

$sql2=mysql_query(" SELECT max(pp)AS max FROM `sy1`where pp!=$res9 and (pp!=$res8) ");
$res2=mysql_fetch_array($sql2);
$max16_student=$res2["max"];

$sql2=mysql_query(" SELECT max(sw)AS max FROM `sy1` where sw!=$res9 and (sw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max17_student=$res2["max"];




//passed//

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where evs_th>19 and evs_th!=120 or evs_th=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist=$res3["clear"];
$total_per=($total_Dist/ $appear)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where evs_tw>9 and evs_tw!=120 or evs_tw=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$total_per1=($total_Dist1/$appear1)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where chm_th>39 and chm_th!=120 or chm_th=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$total_per2=($total_Dist2/$appear2)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where chm_pr>9 and chm_pr!=120 or chm_pr=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist3=$res3["clear"];
$total_per3=($total_Dist3/$appear3)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where chm_tw>9 and chm_tw!=120 or chm_tw=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist4=$res3["clear"];
$total_per4=($total_Dist4/$appear4)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where dcn_th>39 and dcn_th!=120 or dcn_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist5=$res3["clear"];
$total_per5=($total_Dist5/$appear5)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where dcn_pr>9 and dcn_pr!=120 or dcn_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist6=$res3["clear"];
$total_per6=($total_Dist6/$appear6)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where dcn_tw>9 and dcn_tw!=120 or dcn_tw=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist7=$res3["clear"];
$total_per7=($total_Dist7/$appear7)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where map_th>39 and map_th!=120 or map_th=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist8=$res3["clear"];
$total_per8=($total_Dist8/ $appear8)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where man_pr>9 and man_pr!=120 or man_pr=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist9=$res3["clear"];
$total_per9=($total_Dist9/ $appear9)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where man_tw>9 and man_tw!=120 or man_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist10=$res3["clear"];
$total_per10=($total_Dist10/$appear10)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where oop_th>39 and oop_th!=120 or oop_th=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];
$total_per11=($total_Dist11/$appear11)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where oop_pr>19 and oop_pr!=120 or oop_pr=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];
$total_per12=($total_Dist12/ $appear12)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1  where oop_tw>9 and oop_tw!=120 or oop_tw=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];
$total_per13=($total_Dist13/$appear13)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where amt_pr>19 and amt_pr!=120 or amt_pr=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist14=$res3["clear"];
$total_per14=($total_Dist14/ $appear14)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where amt_tw>19 and amt_tw!=120 or amt_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist15=$res3["clear"];
$total_per15=($total_Dist15/$appear15)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where pp>19 and pp!=120 or pp=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist16=$res3["clear"];
$total_per16=($total_Dist16/$appear16)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where sw>9 and sw!=120 or sw=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist17=$res3["clear"];
$total_per17=($total_Dist17/ $appear17)*100;

//above 60% student//
$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where evs_th>29 and evs_th!=120 or evs_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist21=$res3["clear"];
$total_per21=($total_Dist21/ $appear)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where evs_tw>14 and evs_tw!=120 or evs_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist22=$res3["clear"];
$total_per22=($total_Dist22/$appear1)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where chm_th>59 and chm_th!=120 or chm_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist23=$res3["clear"];
$total_per23=($total_Dist23/ $appear2)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where chm_pr>14 and chm_pr!=120 or chm_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist24=$res3["clear"];
$total_per24=($total_Dist24/ $appear3)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where chm_tw>14 and chm_tw!=120 or chm_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist25=$res3["clear"];
$total_per25=($total_Dist25/$appear4)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where dcn_th>59 and dcn_th!=120 or dcn_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist26=$res3["clear"];
$total_per26=($total_Dist26/ $appear5)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where dcn_pr>14 and dcn_pr!=120 or dcn_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist27=$res3["clear"];
$total_per27=($total_Dist27/$appear6)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where dcn_tw>14 and dcn_tw!=120 or dcn_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist28=$res3["clear"];
$total_per28=($total_Dist28/ $appear7)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where map_th>59 and map_th!=120 or map_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist29=$res3["clear"];
$total_per29=($total_Dist29/$appear8)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where man_pr>14 and man_pr!=120 or man_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist30=$res3["clear"];
$total_per30=($total_Dist30/$appear9)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where man_tw>14 and man_tw!=120 or man_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist31=$res3["clear"];
$total_per31=($total_Dist31/$appear10)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where oop_th>59 and oop_th!=120 or oop_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist32=$res3["clear"];
$total_per32=($total_Dist32/$appear11)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where oop_pr>29 and oop_pr!=120 or oop_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist33=$res3["clear"];
$total_per33=($total_Dist33/$appear12)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where oop_tw>14 and oop_tw!=120 or oop_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist34=$res3["clear"];
$total_per34=($total_Dist34/$appear13)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where amt_pr>14 and amt_pr!=120 or amt_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist35=$res3["clear"];
$total_per35=($total_Dist35/$appear14)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where amt_tw>14 and amt_tw!=120 or amt_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist36=$res3["clear"];
$total_per36=($total_Dist36/$appear15)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where pp>14 and pp!=120 or pp=140");
$res3=mysql_fetch_array($sql3);
$total_Dist37=$res3["clear"];
$total_per37=($total_Dist37/$appear16)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy1 where sw>9 and sw!=120 or sw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist38=$res3["clear"];
$total_per38=($total_Dist38/$appear17)*100;



?>
<br>
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
			<td>17401</td>
			<td>Evironment studies</td>
			<td>TH</td>
			<td><?php echo "$min_student" ;?> </td>
			<td><?php echo "$max_student";  ?></td>
			<td><?php echo $appear ?></td>
			<td> <?php echo $total_Dist  ?></td>
            <td>  <?php  echo round($total_per,2);?></td>
			<td><?php  echo round($total_per21,2);?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>17401</td>
			<td>Evironment studies</td>
			<td>TW</td>
			<td><?php echo "$min1_student" ;?> </td>
			<td> <?php echo "$max1_student";  ?></td>
			<td><?php echo $appear1 ?></td>
			<td><?php echo $total_Dist1  ?></td>
			<td>  <?php  echo round($total_per1 ,2);?></td>
			<td><?php  echo round($total_per22 ,2);?> </td>
		</tr>
		<tr>
			<td>3</td>
			<td>17428</td>
			<td>Computer Hardware Maintaince</td>
			<td>TH</td>
			<td><?php echo "$min2_student" ;?> </td>
			<td><?php echo "$max2_student";  ?></td>
			<td><?php echo $appear2 ?></td>
			<td><?php echo $total_Dist2  ?></td>
			<td><?php  echo round($total_per2 ,2);?></td>
			<td><?php  echo round($total_per23 ,2);?></td>
		</tr>
		<tr>
			<td>4</td>
			<td>17428</td>
			<td>Computer Hardware Maintaince</td>
			<td>PR</td>
			<td><?php echo "$min3_student" ;?></td>
			<td><?php echo "$max3_student";  ?></td>
			<td><?php echo $appear3 ?></td>
			<td><?php echo $total_Dist3  ?></td>
			<td><?php  echo round($total_per3 ,2);?></td>
			<td><?php  echo round($total_per24 ,2);?></td>
		</tr>
		<tr>
			<td>5</td>
			<td>17428</td>
			<td>Computer Hardware Maintaince</td>
			<td>TW</td>
			<td><?php echo "$min4_student" ;?></td>
			<td><?php echo "$max4_student";  ?></td>
			<td><?php echo $appear4 ?></td>
			<td><?php echo $total_Dist4  ?></td>
			<td><?php  echo round($total_per4 ,2);?></td>
			<td><?php  echo round($total_per25 ,2);?></td>
		</tr>
		<tr>
			<td>6</td>
			<td>17430</td>
			<td>DataCommunication Networking</td>
			<td>TH</td>
			<td><?php echo "$min5_student" ;?></td>
			<td><?php echo "$max5_student";  ?></td>
			<td><?php echo $appear5 ?></td>
			<td><?php echo $total_Dist5  ?></td>
			<td><?php  echo round($total_per5 ,2);?></td>
			<td><?php  echo round($total_per26 ,2);?></td>
		</tr>
		<tr>
			<td>7</td>
			<td>17430</td>
			<td>DataCommunication Networking</td>
			<td>PR</td>
			<td><?php echo "$min6_student" ;?></td>
			<td><?php echo "$max6_student";  ?></td>
			<td><?php echo $appear6 ?></td>
			<td><?php echo $total_Dist6  ?></td>
			<td><?php  echo round($total_per6 ,2);?></td>
			<td><?php  echo round($total_per27 ,2);?></td>
		</tr>
		<tr>
			<td>8</td>
			<td>17430</td>
			<td>DataCommunication Networking</td>
			<td>TW</td>
			<td><?php echo "$min7_student" ;?></td>
			<td><?php echo "$max7_student";  ?></td>
			<td><?php echo $appear7 ?></td>
			<td><?php echo $total_Dist7  ?></td>
			<td><?php  echo round($total_per7 ,2);?></td>
			<td><?php  echo round($total_per28 ,2);?></td>
		</tr>
		<tr>
			<td>9</td>
			<td>17431</td>
			<td>Microproccessor and Progaramming</td>
			<td>TH</td>
			<td><?php echo "$min8_student" ;?></td>
			<td><?php echo "$max8_student";  ?></td>
			<td><?php echo $appear8 ?></td>
			<td><?php echo $total_Dist8  ?></td>
			<td><?php  echo round($total_per8 ,2);?></td>
			<td><?php  echo round($total_per29 ,2);?></td>
		</tr>
		<tr>
			<td>10</td>
			<td>17431</td>
			<td>Microproccessor and Progaramming</td>
			<td>pr</td>
			<td><?php echo "$min9_student" ;?></td>
			<td><?php echo "$max9_student";  ?></td>
			<td><?php echo $appear9 ?></td>
			<td><?php echo $total_Dist9  ?></td>
			<td><?php  echo round($total_per9 ,2);?></td>
			<td><?php  echo round($total_per30 ,2);?></td>
		</tr>
		<tr>
			<td>11</td>
			<td>17431</td>
			<td>Microproccessor and Progaramming</td>
			<td>TW</td>
			<td><?php echo $min10_student; ;?></td>
			<td><?php echo $max10_student;  ?></td>
			<td><?php echo $appear10 ?></td>
			<td><?php echo $total_Dist10  ?></td>
			<td><?php  echo round($total_per10 ,2);?></td>
			<td><?php  echo round($total_per31 ,2);?></td>
		</tr>
		<tr>
			<td>12</td>
			<td>17432</td>
			<td>Object Oriented Programming</td>
			<td>TH</td>
			<td><?php echo "$min11_student" ;?></td>
			<td><?php echo "$max11_student"; ?></td>
			<td><?php echo $appear11 ?></td>
			<td><?php echo $total_Dist11  ?></td>
			<td><?php  echo round($total_per11 ,2);?></td>
			<td><?php  echo round($total_per32 ,2);?></td>
		</tr>
		<tr>
			<td>13</td>
			<td>17432</td>
			<td>Object Oriented Programming</td>
			<td>PR</td>
			<td><?php echo "$min12_student" ;?></td>
			<td><?php echo "$max12_student";  ?></td>
			<td><?php echo $appear12 ?></td>
			<td><?php echo $total_Dist12  ?></td>
			<td><?php  echo round($total_per12,2); ?></td>
			<td><?php  echo round($total_per33,2); ?></td>
		</tr>
		<tr>
			<td>14</td>
			<td>17432</td>
			<td>Object Oriented Programming</td>
			<td>TW</td>
			<td><?php echo "$min13_student" ;?></td>
			<td><?php echo "$max13_student";  ?></td>
			<td><?php echo $appear13 ?></td>
			<td><?php echo $total_Dist13  ?></td>
			<td><?php  echo round($total_per13,2); ?></td>
			<td><?php  echo round($total_per34,2); ?></td>
		</tr>
		<tr>
			<td>14</td>
			<td>17042</td>
			<td>AMT</td>
			<td>PR</td>
			<td><?php echo "$min14_student" ;?></td>
			<td><?php echo "$max14_student";  ?></td>
			<td><?php echo $appear14 ?></td>
			<td><?php echo $total_Dist14  ?></td>
			<td><?php  echo round($total_per14,2); ?></td>
			<td><?php  echo round($total_per35,2); ?></td>
		</tr>
				<tr>
			<td>14</td>
			<td>17042</td>
			<td>AMT</td>
			<td>TW</td>
			<td><?php echo "$min15_student" ;?></td>
			<td><?php echo "$max15_student";  ?></td>
			<td><?php echo $appear15 ?></td>
			<td><?php echo $total_Dist15  ?></td>
			<td><?php  echo round($total_per15,2); ?></td>
			<td><?php  echo round($total_per36,2); ?></td>
		</tr>
			<tr>
			<td>14</td>
			<td></td>
			<td>ppt_tw</td>
			<td>TW</td>
			<td><?php echo "$min16_student" ;?></td>
			<td><?php echo "$max16_student";  ?></td>
			<td><?php echo $appear16 ?></td>
			<td><?php echo $total_Dist16  ?></td>
			<td><?php  echo round($total_per16,2); ?></td>
			<td><?php  echo round($total_per37,2); ?></td>
		</tr>
		<tr>
			<td>14</td>
			<td></td>
			<td>sw</td>
			<td>TW</td>
			<td><?php echo "$min17_student" ;?></td>
			<td><?php echo "$max17_student";  ?></td>
			<td><?php echo $appear17 ?></td>
			<td><?php echo $total_Dist17  ?></td>
			<td><?php  echo round($total_per17,2); ?></td>
			<td><?php  echo round($total_per38,2); ?></td>
		</tr>

	</table>
</form>
</div>
<button onclick="printContent('div4')" class="btn"><h3><b>Print</b></h3></button>
<br>

