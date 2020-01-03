<div id="div4">
<?php

include("/table.php");
echo "<br>";
//appeared student//
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where man_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED1=$resm["clear"];
$appear1=( $total_student-$APPEARED1);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where mco_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED2=$resm["clear"];
$appear2=( $total_student-$APPEARED2);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where mco_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED3=$resm["clear"];
$appear3=( $total_student-$APPEARED3);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where mco_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED4=$resm["clear"];
$appear4=( $total_student-$APPEARED4);


$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where ajp_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED5=$resm["clear"];
$appear5=( $total_student-$APPEARED5);

	$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where ajp_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED6=$resm["clear"];
$appear6=( $total_student-$APPEARED6);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where ajp_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED7=$resm["clear"];
$appear7=( $total_student-$APPEARED7);


$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where oom_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED8=$resm["clear"];
$appear8=( $total_student-$APPEARED8);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where oom_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED9=$resm["clear"];
$appear9=( $total_student-$APPEARED9);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where ste_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED10=$resm["clear"];
$appear10=( $total_student-$APPEARED10);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where ste_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED11=$resm["clear"];
$appear11=( $total_student-$APPEARED11);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where jpr_or=120");
$resm=mysql_fetch_array($sqm);
$APPEARED12=$resm["clear"];
$appear12=( $total_student-$APPEARED12);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where jpr_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED13=$resm["clear"];
$appear13=( $total_student-$APPEARED13);


$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where ede_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED14=$resm["clear"];
$appear14=( $total_student-$APPEARED14);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where sw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED15=$resm["clear"];
$appear15=( $total_student-$APPEARED15);


//min
$sql1=mysql_query(" SELECT min(man_th)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min1_student=$res["min"];

$sql1=mysql_query(" SELECT min(mco_th)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min2_student=$res["min"];

$sql1=mysql_query(" SELECT min(mco_pr)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min3_student=$res["min"];

$sql1=mysql_query(" SELECT min(mco_tw)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min4_student=$res["min"];

$sql1=mysql_query(" SELECT min(ajp_th)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min5_student=$res["min"];

$sql1=mysql_query(" SELECT min(ajp_pr)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min6_student=$res["min"];

$sql1=mysql_query(" SELECT min(ajp_tw)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min15_student=$res["min"];

$sql1=mysql_query(" SELECT min(oom_th)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min7_student=$res["min"];

$sql1=mysql_query(" SELECT min(oom_tw)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min8_student=$res["min"];

$sql1=mysql_query(" SELECT min(ste_pr)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min9_student=$res["min"];

$sql1=mysql_query(" SELECT min(ste_tw)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min10_student=$res["min"];

$sql1=mysql_query(" SELECT min(jpr_or)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min11_student=$res["min"];

$sql1=mysql_query(" SELECT min(jpr_tw)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min12_student=$res["min"];

$sql1=mysql_query(" SELECT min(ede_tw)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min13_student=$res["min"];

$sql1=mysql_query(" SELECT min(sw)AS min FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$min14_student=$res["min"];


//max
$sql1=mysql_query(" SELECT * FROM `ty1`");
$res=mysql_fetch_array($sql1);
$res9=120;
$sql2=mysql_query(" SELECT max(man_th)AS max FROM `ty1` where man_th!=$res9 AND man_th!=140");
$res2=mysql_fetch_array($sql2);
$max1_student=$res2["max"];

$sql2=mysql_query(" SELECT max(mco_th)AS max FROM `ty1`  where mco_th!=$res9 AND mco_th!=140");
$res2=mysql_fetch_array($sql2);
$max2_student=$res2["max"];

$sql2=mysql_query(" SELECT max(mco_pr)AS max FROM `ty1`  where mco_pr!=$res9 AND mco_pr!=140");
$res2=mysql_fetch_array($sql2);
$max3_student=$res2["max"];

$sql2=mysql_query(" SELECT max(mco_tw)AS max FROM `ty1`  where mco_tw!=$res9 AND mco_tw!=140");
$res2=mysql_fetch_array($sql2);
$max4_student=$res2["max"];

$sql2=mysql_query(" SELECT max(ajp_th)AS max FROM `ty1`  where ajp_th!=$res9 AND ajp_th!=140");
$res2=mysql_fetch_array($sql2);
$max5_student=$res2["max"];

$sql2=mysql_query(" SELECT max(ajp_pr)AS max FROM `ty1`  where ajp_pr!=$res9 AND ajp_pr!=140");
$res2=mysql_fetch_array($sql2);
$max6_student=$res2["max"];

$sql2=mysql_query(" SELECT max(ajp_pr)AS max FROM `ty1`  where ajp_tw!=$res9 AND ajp_tw!=140");
$res2=mysql_fetch_array($sql2);
$max15_student=$res2["max"];

$sql2=mysql_query(" SELECT max(oom_th)AS max FROM `ty1` where oom_th!=$res9 AND oom_th!=140");
$res2=mysql_fetch_array($sql2);
$max7_student=$res2["max"];

$sql2=mysql_query(" SELECT max(oom_tw)AS max FROM `ty1` where oom_tw!=$res9 AND oom_tw!=140");
$res2=mysql_fetch_array($sql2);
$max8_student=$res2["max"];

$sql2=mysql_query(" SELECT max(ste_pr)AS max FROM `ty1` where ste_pr!=$res9 AND ste_pr!=140");
$res2=mysql_fetch_array($sql2);
$max9_student=$res2["max"];

$sql2=mysql_query(" SELECT max(ste_tw)AS max FROM `ty1`  where ste_tw!=$res9 AND ste_tw!=140");
$res2=mysql_fetch_array($sql2);
$max10_student=$res2["max"];

$sql2=mysql_query(" SELECT max(jpr_or)AS max FROM `ty1` where jpr_or!=$res9 AND jpr_or!=140");
$res2=mysql_fetch_array($sql2);
$max11_student=$res2["max"];

$sql2=mysql_query(" SELECT max(jpr_tw)AS max FROM `ty1` where jpr_tw!=$res9 AND jpr_tw!=140");
$res2=mysql_fetch_array($sql2);
$max12_student=$res2["max"];

$sql2=mysql_query(" SELECT max(ede_tw)AS max FROM `ty1` where ede_tw!=$res9 AND ede_tw!=140");
$res2=mysql_fetch_array($sql2);
$max13_student=$res2["max"];

$sql2=mysql_query(" SELECT max(sw)AS max FROM `ty1`  where sw!=$res9 AND sw!=140");
$res2=mysql_fetch_array($sql2);
$max14_student=$res2["max"];


//above 60%  student//

$sql3=mysql_query("select count(`enrollment_no`) As clear from ty1 where man_th>29 AND man_th!=120 or man_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist21=$res3["clear"];
$total_per21=($total_Dist21/$appear1)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where mco_th>59 and mco_th!=120 or mco_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist22=$res3["clear"];
$total_per22=($total_Dist22/$appear2)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where mco_pr>29 and mco_pr!=120 or mco_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist23=$res3["clear"];
$total_per23=($total_Dist23 /$appear3)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where mco_tw>14 and mco_tw!=120 or mco_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist24=$res3["clear"];
$total_per24=($total_Dist24 /$appear4)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where ajp_th>59 and ajp_th!=120 or ajp_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist25=$res3["clear"];
$total_per25=($total_Dist25 /$appear5)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where ajp_pr>29 and ajp_pr!=120 or ajp_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist26=$res3["clear"];
$total_per26=($total_Dist26 /$appear6)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where ajp_tw>29 and ajp_tw!=120 or ajp_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist35=$res3["clear"];
$total_per35=($total_Dist35 /$appear6)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where oom_th>59 and oom_th!=120 or oom_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist27=$res3["clear"];
$total_per27=($total_Dist27/$appear7)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where oom_tw>14 and oom_tw !=120 or oom_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist28=$res3["clear"];
$total_per28=($total_Dist28 /$appear8)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where ste_pr>29 and ste_pr!=120 or ste_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist29=$res3["clear"];
$total_per29=($total_Dist29 /$appear9)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where ste_tw>14 and ste_tw!=120 or ste_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist30=$res3["clear"];
$total_per30=($total_Dist30/$appear10)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where jpr_or>29 and jpr_or!=120 or jpr_or=140");
$res3=mysql_fetch_array($sql3);
$total_Dist31=$res3["clear"];
$total_per31=($total_Dist31/$appear11)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where jpr_tw>29 and jpr_tw!=120 or jpr_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist32=$res3["clear"];
$total_per32=($total_Dist29/$appear12)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where ede_tw>14 and ede_tw!=120 or ede_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist33=$res3["clear"];
$total_per33=($total_Dist33/$appear13)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where sw>29 and sw!=120 or sw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist34=$res3["clear"];
$total_per34=($total_Dist34/$appear14)*100;

//passed//

$sql3=mysql_query("select count(`seat_no`) As clear from ty1 where man_th>19 and man_th!=120 or man_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$total_per1=($total_Dist1/ $appear1)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where mco_th>39 and mco_th!=120 or mco_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$total_per2=($total_Dist2/ $appear2)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where mco_pr>19 and mco_pr!=120 or mco_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist3=$res3["clear"];
$total_per3=($total_Dist3/ $appear3)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where mco_tw>9 and mco_tw!=120 or mco_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist4=$res3["clear"];
$total_per4=($total_Dist4/ $appear4)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where ajp_th>39 and ajp_th!=120 or ajp_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist5=$res3["clear"];
$total_per5=($total_Dist5/ $appear5)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where ajp_pr>19 and ajp_pr!=120 or ajp_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist6=$res3["clear"];
$total_per6=($total_Dist6/ $appear6)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where ajp_tw>19 and ajp_tw!=120 or ajp_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist15=$res3["clear"];
$total_per15=($total_Dist15/ $appear15)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where oom_th>39 and oom_th!=120 or oom_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist7=$res3["clear"];
$total_per7=($total_Dist7/ $appear7)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where oom_tw>9 and oom_tw!=120 or oom_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist8=$res3["clear"];
$total_per8=($total_Dist8/ $appear8)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where ste_pr>19 and ste_pr!=120 or ste_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist9=$res3["clear"];
$total_per9=($total_Dist9/ $appear9)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where ste_tw>9 and ste_tw!=120 or ste_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist10=$res3["clear"];
$total_per10=($total_Dist10/ $appear10)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where jpr_or>19 and jpr_or!=120 or jpr_or=140");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];
$total_per11=($total_Dist11/ $appear11)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where jpr_tw>19 and jpr_tw!=120 or jpr_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];
$total_per12=($total_Dist12/ $appear12)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where ede_tw>9 and ede_tw!=120 or ede_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];
$total_per13=($total_Dist13/ $appear13)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where sw>19 and sw!=120 or sw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist14=$res3["clear"];
$total_per14=($total_Dist14/ $appear14)*100;



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
			<td>17601</td>
			<td>MANAGEMENT</td>
			<td>TH</td>
			<td><?php echo "$min1_student" ;?> </td>
			<td><?php echo "$max1_student";  ?></td>
			<td><?php echo $appear1 ?></td>
			<td> <?php echo $total_Dist1  ?></td>
            <td>  <?php  echo round($total_per1,2) ?></td>
			<td><?php  echo round($total_per21 ,2)?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>17632</td>
			<td>Mobile Computing</td>
			<td>TH</td>
			<td><?php echo "$min2_student" ;?> </td>
			<td> <?php echo "$max2_student";  ?></td>
			<td><?php echo $appear2 ?></td>
			<td><?php echo $total_Dist2  ?></td>
			<td>  <?php  echo round($total_per2,2) ?></td>
			<td><?php  echo round($total_per22 ,2)?> </td>
		</tr>
		<tr>
			<td>3</td>
			<td>17632</td>
			<td>Mobile Computing</td>
			<td>PR</td>
			<td><?php echo "$min3_student" ;?> </td>
			<td><?php echo "$max3_student";  ?></td>
			<td><?php echo $appear3 ?></td>
			<td><?php echo $total_Dist3  ?></td>
			<td><?php  echo round($total_per3 ,2)?></td>
			<td><?php  echo round($total_per23,2) ?></td>
		</tr>
		
		<tr>
			<td>4</td>
			<td>17632</td>
			<td>Mobile Computing</td>
			<td>TW</td>
			<td><?php echo "$min4_student" ;?></td>
			<td><?php echo "$max4_student";  ?></td>
			<td><?php echo $appear4 ?></td>
			<td><?php echo $total_Dist4  ?></td>
			<td><?php  echo round($total_per4 ,2)?></td>
			<td><?php  echo round($total_per25,2) ?></td>
		</tr>
		<tr>
			<td>5</td>
			<td>17625</td>
			<td>Advanced java Programming</td>
			<td>TH</td>
			<td><?php echo "$min5_student" ;?></td>
			<td><?php echo "$max5_student";  ?></td>
			<td><?php echo $appear5 ?></td>
			<td><?php echo $total_Dist5  ?></td>
			<td><?php  echo round($total_per5,2) ?></td>
			<td><?php  echo round($total_per25,2) ?></td>
		</tr>
		<tr>
			<td>6</td>
			<td>17625</td>
			<td>Advanced java Programming</td>
			<td>PR</td>
			<td><?php echo "$min6_student" ;?></td>
			<td><?php echo "$max6_student";  ?></td>
			<td><?php echo $appear6 ?></td>
			<td><?php echo $total_Dist6  ?></td>
			<td><?php  echo round($total_per6,2) ?></td>
			<td><?php  echo round($total_per26 ,2)?></td>
		</tr>

		<tr>
			<td>7</td>
			<td>17625</td>
			<td>Advanced java Programming</td>
			<td>TW</td>
			<td><?php echo "$min15_student" ;?></td>
			<td><?php echo "$max15_student";  ?></td>
			<td><?php echo $appear15 ?></td>
			<td><?php echo $total_Dist15  ?></td>
			<td><?php  echo round($total_per15,2) ?></td>
			<td><?php  echo round($total_per15 ,2)?></td>
		</tr>



		<tr>
			<td>8</td>
			<td>17630</td>
			<td>Object Oriented Modelling</td>
			<td>TH</td>
			<td><?php echo "$min7_student" ;?></td>
			<td><?php echo "$max7_student";  ?></td>
			<td><?php echo $appear7 ?></td>
			<td><?php echo $total_Dist7  ?></td>
			<td><?php  echo round($total_per7,2) ?></td>
			<td><?php  echo round($total_per27 ,2)?></td>
		</tr>
		<tr>
			<td>9</td>
			<td>17630</td>
			<td>Object Oriented Modelling</td>
			<td>TW</td>
			<td><?php echo $min8_student ;?></td>
			<td><?php echo $max8_student;  ?></td>
			<td><?php echo $appear8 ?></td>
			<td><?php echo $total_Dist8  ?></td>
			<td><?php  echo round($total_per8,2) ?></td>
			<td><?php  echo round($total_per28,2) ?></td>
		</tr>
		<tr>
			<td>10</td>
			<td>17819</td>
			<td>Scripting Technology</td>
			<td>PR</td>
			<td><?php echo "$min9_student" ;?></td>
			<td><?php echo "$max9_student";  ?></td>
			<td><?php echo $appear9 ?></td>
			<td><?php echo $total_Dist9  ?></td>
			<td><?php  echo round($total_per9,2) ?></td>
			<td><?php  echo round($total_per29,2) ?></td>
		</tr>
		<tr>
			<td>11</td>
			<td>17819</td>
			<td>Scripting Technology</td>
			<td>TW</td>
			<td><?php echo "$min10_student" ;?></td>
			<td><?php echo "$max10_student";  ?></td>
			<td><?php echo $appear10 ?></td>
			<td><?php echo $total_Dist10  ?></td>
			<td><?php  echo round($total_per10,2) ?></td>
			<td><?php  echo round($total_per30,2) ?></td>
		</tr>

		<tr>
			<td>12</td>
			<td>17817</td>
			<td>java programming</td>
			<td>OR</td>
			<td><?php echo "$min11_student" ;?></td>
			<td><?php echo "$max11_student";  ?></td>
			<td><?php echo $appear11 ?></td>
			<td><?php echo $total_Dist11  ?></td>
			<td><?php  echo round($total_per11,2) ?></td>
			<td><?php  echo round($total_per31 ,2)?></td>
		</tr>


		<tr>
			<td>13</td>
			<td>17817</td>
			<td>java programming</td>
			<td>TW</td>
			<td><?php echo "$min12_student" ;?></td>
			<td><?php echo "$max12_student";  ?></td>
			<td><?php echo $appear12 ?></td>
			<td><?php echo $total_Dist12  ?></td>
			<td><?php  echo round( $total_per12,2) ?></td>
			<td><?php  echo round($total_per32,2) ?></td>
		</tr>
		
<tr>
			<td>14</td>
			<td>17818</td>
			<td>Enterpreneurship Developement</td>
			<td>TW</td>
			<td><?php echo "$min13_student" ;?></td>
			<td><?php echo "$max13_student";  ?></td>
			<td><?php echo $appear13 ?></td>
			<td><?php echo $total_Dist13  ?></td>
			<td><?php  echo round($total_per13,2) ?></td>
			<td><?php  echo round($total_per13 ,2)?></td>
		</tr>

		<tr>
			<td>15</td>
			<td></td>
			<td>SESSION</td>
			<td>SW</td>
			<td><?php echo "$min14_student" ;?></td>
			<td><?php echo "$max14_student";  ?></td>
			<td><?php echo $appear14 ?></td>
			<td><?php echo $total_Dist14  ?></td>
			<td><?php  echo round($total_per14,2) ?></td>
			<td><?php  echo round($total_per14 ,2)?></td>
		</tr>

	</table>
</form>
</div>
<button onclick="printContent('div4')" class="btn"><h3><b>Print</b></h3></button>