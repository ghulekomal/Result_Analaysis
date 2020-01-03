<div id="div4">
<?php

include("/table.php");
//appeared//
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where ams_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where dsu_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear1=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where dsu_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear2=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where dsu_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear3=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where ete_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear4=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where ete_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear5=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where rdb_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear6=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where rdb_or=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear7=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where rdb_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear8=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where dte_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear9=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where dte_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear10=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where gui_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear11=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where pp=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear12=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from sy where sw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear13=( $total_student-$APPEARED);


//min//
$sql1=mysql_query(" SELECT min(ams_th)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min_student=$res["min"];

$sql1=mysql_query(" SELECT min(dsu_th)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min1_student=$res["min"];

$sql1=mysql_query(" SELECT min(dsu_pr)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min2_student=$res["min"];

$sql1=mysql_query(" SELECT min(dsu_tw)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min3_student=$res["min"];

$sql1=mysql_query(" SELECT min(ete_th)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min4_student=$res["min"];

$sql1=mysql_query(" SELECT min(ete_tw)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min5_student=$res["min"];

$sql1=mysql_query(" SELECT min(rdb_th)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min6_student=$res["min"];

$sql1=mysql_query(" SELECT min(rdb_or)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min7_student=$res["min"];

$sql1=mysql_query(" SELECT min(rdb_tw)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min8_student=$res["min"];

$sql1=mysql_query(" SELECT min(dte_th)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min9_student=$res["min"];

$sql1=mysql_query(" SELECT min(dte_tw)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min10_student=$res["min"];

$sql1=mysql_query(" SELECT min(gui_pr)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min11_student=$res["min"];

$sql1=mysql_query(" SELECT min(pp)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min12_student=$res["min"];

$sql1=mysql_query(" SELECT min(sw)AS min FROM `sy` ");
$res=mysql_fetch_array($sql1);
$min13_student=$res["min"];

//max..//
$sql1=mysql_query(" SELECT * FROM `fy`");
$res=mysql_fetch_array($sql1);
$res9=120;
$sql2=mysql_query(" SELECT max(ams_th)AS max FROM `sy`where ams_th!=$res9 ");
$res2=mysql_fetch_array($sql2);
$max_student=$res2["max"];

$sql2=mysql_query(" SELECT max(dsu_th)AS max FROM `sy` where dsu_th!=$res9");
$res2=mysql_fetch_array($sql2);
$max1_student=$res2["max"];

$sql2=mysql_query(" SELECT max(dsu_pr)AS max FROM `sy`where dsu_pr!=$res9 ");
$res2=mysql_fetch_array($sql2);
$max2_student=$res2["max"];

$sql2=mysql_query(" SELECT max(dsu_tw)AS max FROM `sy`where dsu_tw!=$res9 ");
$res2=mysql_fetch_array($sql2);
$max3_student=$res2["max"];

$sql2=mysql_query(" SELECT max(ete_th)AS max FROM `sy` where ete_th!=$res9");
$res2=mysql_fetch_array($sql2);
$max4_student=$res2["max"];

$sql2=mysql_query(" SELECT max(ete_tw)AS max FROM `sy` where ete_tw!=$res9");
$res2=mysql_fetch_array($sql2);
$max5_student=$res2["max"];

$sql2=mysql_query(" SELECT max(rdb_th)AS max FROM `sy` where rdb_th!=$res9");
$res2=mysql_fetch_array($sql2);
$max6_student=$res2["max"];

$sql2=mysql_query(" SELECT max(rdb_or)AS max FROM `sy`where rdb_or!=$res9 ");
$res2=mysql_fetch_array($sql2);
$max7_student=$res2["max"];

$sql2=mysql_query(" SELECT max(rdb_tw)AS max FROM `sy`where rdb_tw!=$res9 ");
$res2=mysql_fetch_array($sql2);
$max8_student=$res2["max"];

$sql2=mysql_query(" SELECT max(dte_th)AS max FROM `sy` where dte_th!=$res9");
$res2=mysql_fetch_array($sql2);
$max9_student=$res2["max"];

$sql2=mysql_query(" SELECT max(dte_tw)AS max FROM `sy` where dte_tw!=$res9");
$res2=mysql_fetch_array($sql2);
$max10_student=$res2["max"];

$sql2=mysql_query(" SELECT max(gui_pr)AS max FROM `sy`where gui_pr!=$res9 ");
$res2=mysql_fetch_array($sql2);
$max11_student=$res2["max"];

$sql2=mysql_query(" SELECT max(pp)AS max FROM `sy`where pp!=$res9 ");
$res2=mysql_fetch_array($sql2);
$max12_student=$res2["max"];

$sql2=mysql_query(" SELECT max(sw)AS max FROM `sy` where sw!=$res9");
$res2=mysql_fetch_array($sql2);
$max13_student=$res2["max"];


//passed//
$sql1=mysql_query("SELECT count( `seat_no` ) AS total_stud
FROM `sy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sql3=mysql_query("select count(`seat_no`) As clear from sy where ams_th>39 and ams_th!=120 or ams_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist=$res3["clear"];
$total_per=($total_Dist/ $appear)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where dsu_th>39 and dsu_th!=120 or dsu_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$total_per1=($total_Dist1/ $appear1)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where dsu_pr>19 and dsu_pr!=120 or dsu_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$total_per2=($total_Dist2/ $appear2)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where dsu_tw>9 and dsu_tw!=120 or dsu_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist3=$res3["clear"];
$total_per3=($total_Dist3/$appear3)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where ete_th>39 and ete_th!=120 or ete_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist4=$res3["clear"];
$total_per4=($total_Dist4/$appear4)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where ete_tw>9 and ete_tw!=120 or ete_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist5=$res3["clear"];
$total_per5=($total_Dist5/$appear5)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where rdb_th>39 and rdb_th!=120 or rdb_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist6=$res3["clear"];
$total_per6=($total_Dist6/ $appear6)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where rdb_or>9 and rdb_or!=120 or rdb_or=140");
$res3=mysql_fetch_array($sql3);
$total_Dist7=$res3["clear"];
$total_per7=($total_Dist7/ $appear7)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where rdb_tw>19 and rdb_tw!=120 or rdb_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist8=$res3["clear"];
$total_per8=($total_Dist8/$appear8)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where dte_th>39 and dte_th!=120 or dte_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist9=$res3["clear"];
$total_per9=($total_Dist9/$appear9)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where dte_tw>9 and dte_tw!=120 or dte_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist10=$res3["clear"];
$total_per10=($total_Dist10/$appear10)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where gui_pr>19 and gui_pr!=120 or gui_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];
$total_per11=($total_Dist11/$appear11)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where pp>19 and pp!=120 or pp=140");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];
$total_per12=($total_Dist12/ $appear12)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy  where sw>19 and sw!=120 or sw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];
$total_per13=($total_Dist13/$appear13)*100;


//above 60
$sql3=mysql_query("select count(`seat_no`) As clear from sy where ams_th>59 and ams_th!=120 or ams_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist14=$res3["clear"];
$total_per14=($total_Dist14/ $appear)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where dsu_th>59 and dsu_th!=120 or dsu_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist15=$res3["clear"];
$total_per15=($total_Dist15/ $appear1)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where dsu_pr>29 and dsu_pr!=120 or dsu_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist16=$res3["clear"];
$total_per16=($total_Dist16/ $appear2)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where dsu_tw>14 and dsu_tw!=120 or dsu_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist17=$res3["clear"];
$total_per17=($total_Dist17/ $appear3)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where ete_th>59 and ete_th!=120 or ete_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist18=$res3["clear"];
$total_per18=($total_Dist18/ $appear4)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where ete_tw>14 and ete_tw!=120 or ete_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist19=$res3["clear"];
$total_per19=($total_Dist19/ $appear5)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where rdb_th>59 and rdb_th!=120 or rdb_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist20=$res3["clear"];
$total_per20=($total_Dist20/ $appear6)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where rdb_or>14 and rdb_or!=120 or rdb_or=140");
$res3=mysql_fetch_array($sql3);
$total_Dist21=$res3["clear"];
$total_per21=($total_Dist21/ $appear7)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where rdb_tw>14 and rdb_tw!=120 or rdb_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist22=$res3["clear"];
$total_per22=($total_Dist22/ $appear8)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where dte_th>59 and dte_th!=120 or dte_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist23=$res3["clear"];
$total_per23=($total_Dist23/ $appear9)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where dte_tw>14 and dte_tw!=120 or dte_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist24=$res3["clear"];
$total_per24=($total_Dist24/ $appear10)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where gui_pr>29 and gui_pr!=120 or gui_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist25=$res3["clear"];
$total_per25=($total_Dist25/ $appear11)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where pp>29 and pp!=120 or pp=140");
$res3=mysql_fetch_array($sql3);
$total_Dist26=$res3["clear"];
$total_per26=($total_Dist26/ $appear12)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from sy where sw>29 and sw!=120 or sw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist27=$res3["clear"];
$total_per27=($total_Dist27/ $appear13)*100;



?><br>
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
			<td>17301</td>
			<td>Applied Mathematics</td>
			<td>TH</td>
			<td><?php echo "$min_student" ;?> </td>
			<td><?php echo "$max_student";  ?></td>
			<td><?php echo $appear ?></td>
			<td> <?php echo $total_Dist  ?></td>
            <td>  <?php  echo round($total_per ,2);?></td>
			<td><?php  echo round($total_per14 ,2);?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>17330</td>
			<td>Data Structure Using 'C'</td>
			<td>TH</td>
			<td><?php echo "$min1_student" ;?> </td>
			<td> <?php echo "$max1_student";  ?></td>
			<td><?php echo $appear1 ?></td>
			<td><?php echo $total_Dist1  ?></td>
			<td>  <?php  echo round($total_per1 ,2)?></td>
			<td><?php  echo round($total_per15 ,2)?> </td>
		</tr>
		<tr>
			<td>3</td>
			<td>17330</td>
			<td>Data Structure Using 'C'</td>
			<td>PR</td>
			<td><?php echo "$min2_student" ;?> </td>
			<td><?php echo "$max2_student";  ?></td>
			<td><?php echo $appear2 ?></td>
			<td><?php echo $total_Dist2  ?></td>
			<td><?php  echo round($total_per2 ,2);?></td>
			<td><?php  echo round($total_per16 ,2);?></td>
		</tr>
		<tr>
			<td>4</td>
			<td>17330</td>
			<td>Data Structure Using 'C'</td>
			<td>TW</td>
			<td><?php echo "$min3_student" ;?></td>
			<td><?php echo "$max3_student";  ?></td>
			<td><?php echo $appear3 ?></td>
			<td><?php echo $total_Dist3  ?></td>
			<td><?php  echo round($total_per3 ,2);?></td>
			<td><?php  echo round($total_per17 ,2);?></td>
		</tr>
		<tr>
			<td>5</td>
			<td>17331</td>
			<td>Electrical Technology</td>
			<td>TH</td>
			<td><?php echo "$min4_student" ;?></td>
			<td><?php echo "$max4_student";  ?></td>
			<td><?php echo $appear4 ?></td>
			<td><?php echo $total_Dist4  ?></td>
			<td><?php  echo round($total_per4 ,2);?></td>
			<td><?php  echo round($total_per18 ,2);?></td>
		</tr>
		<tr>
			<td>6</td>
			<td>17331</td>
			<td>Electrical Technology</td>
			<td>TW</td>
			<td><?php echo "$min5_student" ;?></td>
			<td><?php echo "$max5_student";  ?></td>
			<td><?php echo $appear5 ?></td>
			<td><?php echo $total_Dist5  ?></td>
			<td><?php  echo round($total_per5 ,2);?></td>
			<td><?php  echo round($total_per19 ,2);?></td>
		</tr>
		<tr>
			<td>7</td>
			<td>17332</td>
			<td>RDB</td>
			<td>TH</td>
			<td><?php echo "$min6_student" ;?></td>
			<td><?php echo "$max6_student";  ?></td>
			<td><?php echo $appear6 ?></td>
			<td><?php echo $total_Dist6  ?></td>
			<td><?php  echo round($total_per6 ,2);?></td>
			<td><?php  echo round($total_per20 ,2);?></td>
		</tr>
		<tr>
			<td>8</td>
			<td>17332</td>
			<td>RDB</td>
			<td>OR</td>
			<td><?php echo "$min7_student" ;?></td>
			<td><?php echo "$max7_student";  ?></td>
			<td><?php echo $appear7 ?></td>
			<td><?php echo $total_Dist7  ?></td>
			<td><?php  echo round($total_per7 ,2);?></td>
			<td><?php  echo round($total_per21 ,2);?></td>
		</tr>
		<tr>
			<td>9</td>
			<td>17332</td>
			<td>RDB</td>
			<td>TW</td>
			<td><?php echo "$min8_student" ;?></td>
			<td><?php echo "$max8_student";  ?></td>
			<td> <?php echo $appear8?></td>
			<td><?php echo $total_Dist8  ?></td>
			<td><?php  echo round($total_per8 ,2);?></td>
			<td><?php  echo round($total_per22 ,2);?></td>
		</tr>
		<tr>
			<td>10</td>
			<td>17333</td>
			<td>Digital Technique</td>
			<td>TH</td>
			<td><?php echo "$min9_student" ;?></td>
			<td><?php echo "$max9_student";  ?></td>
			<td><?php echo $appear9 ?></td>
			<td><?php echo $total_Dist9  ?></td>
			<td><?php  echo round($total_per9 ,2);?></td>
			<td><?php  echo round($total_per23 ,2);?></td>
		</tr>
		<tr>
			<td>11</td>
			<td>17333</td>
			<td>Digital Technique</td>
			<td>TW</td>
			<td><?php echo "$min10_student" ;?></td>
			<td><?php echo "$max10_student";  ?></td>
			<td><?php echo $appear10 ?></td>
			<td><?php echo $total_Dist10  ?></td>
			<td><?php  echo round($total_per10 ,2);?></td>
			<td><?php  echo round($total_per24 ,2);?></td>
		</tr>
		<tr>
			<td>12</td>
			<td>17206</td>
			<td>GUI</td>
			<td>PR</td>
			<td><?php echo "$min11_student" ;?></td>
			<td><?php echo "$max11_student";  ?></td>
			<td><?php echo $appear11 ?></td>
			<td><?php echo $total_Dist11  ?></td>
			<td><?php  echo round($total_per11 ,2);?></td>
			<td><?php  echo round($total_per25 ,2);?></td>
		</tr>
		<tr>
			<td>13</td>
			<td>17207</td>
			<td>PP-1</td>
			<td>TW</td>
			<td><?php echo "$min12_student" ;?></td>
			<td><?php echo "$max12_student";  ?></td>
			<td><?php echo $appear12 ?></td>
			<td><?php echo $total_Dist12  ?></td>
			<td><?php  echo round($total_per12 ,2);?></td>
			<td><?php  echo round($total_per26 ,2);?></td>
		</tr>
		<tr>
			<td>14</td>
			<td></td>
			<td>SS</td>
			<td>SW</td>
			<td><?php echo "$min13_student" ;?></td>
			<td><?php echo "$max13_student";  ?></td>
			<td><?php echo $appear13 ?></td>
			<td><?php echo $appear13  ?></td>
			<td><?php  echo "100";?></td>
			<td><?php  echo round($total_per27 ,2);?></td>
		</tr>
	</table>
</form>
</div>
<button onclick="printContent('div4')" class="btn"><h3><b>Print</b></h3></button>
<br>