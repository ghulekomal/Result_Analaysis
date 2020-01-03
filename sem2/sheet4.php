<div id="div4">
<?php

include("/table.php");
//appeared student//
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where cms_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear=( $total_student-$APPEARED);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where cms_or=120");
$resm=mysql_fetch_array($sqm);
$APPEARED1=$resm["clear"];
$appear1=( $total_student-$APPEARED1);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where cms_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED2=$resm["clear"];
$appear2=( $total_student-$APPEARED2);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where aps_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED3=$resm["clear"];
$appear3=( $total_student-$APPEARED3);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where aps_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED4=$resm["clear"];
$appear4=( $total_student-$APPEARED4);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where pic_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED5=$resm["clear"];
$appear5=( $total_student-$APPEARED5);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where pic_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED6=$resm["clear"];
$appear6=( $total_student-$APPEARED6);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where pic_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED7=$resm["clear"];
$appear7=( $total_student-$APPEARED7);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where eeg_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED8=$resm["clear"];
$appear8=( $total_student-$APPEARED8);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where eeg_tw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED9=$resm["clear"];
$appear9=( $total_student-$APPEARED9);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where ems_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED10=$resm["clear"];
$appear10=( $total_student-$APPEARED10);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where dls_or=120");
$resm=mysql_fetch_array($sqm);
$APPEARED11=$resm["clear"];
$appear11=( $total_student-$APPEARED11);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where wpd_pr=120");
$resm=mysql_fetch_array($sqm);
$APPEARED12=$resm["clear"];
$appear12=( $total_student-$APPEARED12);

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where sw=120");
$resm=mysql_fetch_array($sqm);
$APPEARED13=$resm["clear"];
$appear13=( $total_student-$APPEARED13);


//min
$sql1=mysql_query(" SELECT min(cms_th)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min_student=$res["min"];

$sql1=mysql_query(" SELECT min(cms_or)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min1_student=$res["min"];

$sql1=mysql_query(" SELECT min(cms_tw)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min2_student=$res["min"];

$sql1=mysql_query(" SELECT min(aps_th)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min3_student=$res["min"];

$sql1=mysql_query(" SELECT min(aps_pr)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min4_student=$res["min"];

$sql1=mysql_query(" SELECT min(pic_th)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min5_student=$res["min"];

$sql1=mysql_query(" SELECT min(pic_pr)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min6_student=$res["min"];

$sql1=mysql_query(" SELECT min(pic_tw)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min7_student=$res["min"];

$sql1=mysql_query(" SELECT min(eeg_th)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min8_student=$res["min"];

$sql1=mysql_query(" SELECT min(eeg_tw)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min9_student=$res["min"];

$sql1=mysql_query(" SELECT min(ems_th)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min10_student=$res["min"];

$sql1=mysql_query(" SELECT min(dls_or)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min11_student=$res["min"];

$sql1=mysql_query(" SELECT min(wpd_pr)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min12_student=$res["min"];

$sql1=mysql_query(" SELECT min(sw)AS min FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$min13_student=$res["min"];

//max
$sql9=mysql_query(" SELECT * FROM `fy1`");
$res=mysql_fetch_array($sql9);
$res9=120;
$res8=140;
$sql2=mysql_query(" SELECT max(cms_th)AS max FROM `fy1`where cms_th!=$res9  and (cms_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max_student=$res2["max"];

$sql2=mysql_query(" SELECT max(cms_or)AS max FROM `fy1`  where cms_or!=$res9 and (cms_or!=$res8)");
$res2=mysql_fetch_array($sql2);
$max1_student=$res2["max"];

$sql2=mysql_query(" SELECT max(cms_tw)AS max FROM `fy1` where cms_tw!=$res9 and (cms_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max2_student=$res2["max"];

$sql2=mysql_query(" SELECT max(aps_th)AS max FROM `fy1`  where aps_th!=$res9 and (aps_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max3_student=$res2["max"];

$sql2=mysql_query(" SELECT max(aps_pr)AS max FROM `fy1` where aps_pr!=$res9 and (aps_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max4_student=$res2["max"];

$sql2=mysql_query(" SELECT max(pic_th)AS max FROM `fy1`where pic_th!=$res9 and (pic_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max5_student=$res2["max"];

$sql2=mysql_query(" SELECT max(pic_pr)AS max FROM `fy1` where pic_pr!=$res9 and (pic_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max6_student=$res2["max"];

$sql2=mysql_query(" SELECT max(pic_tw)AS max FROM `fy1`  where pic_tw!=$res9 and (pic_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max7_student=$res2["max"];

$sql2=mysql_query(" SELECT max(eeg_th)AS max FROM `fy1` where eeg_th!=$res9 and (eeg_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max8_student=$res2["max"];

$sql2=mysql_query(" SELECT max(eeg_tw)AS max FROM `fy1` where eeg_tw!=$res9 and (eeg_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max9_student=$res2["max"];

$sql2=mysql_query(" SELECT max(ems_th)AS max FROM `fy1` where ems_th!=$res9 and (ems_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max10_student=$res2["max"];

$sql2=mysql_query(" SELECT max(dls_or)AS max FROM `fy1`where dls_or!=$res9 and (dls_or!=$res8)");
$res2=mysql_fetch_array($sql2);
$max11_student=$res2["max"];

$sql2=mysql_query(" SELECT max(wpd_pr)AS max FROM `fy1` where wpd_pr!=$res9 and (wpd_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max12_student=$res2["max"];

$sql2=mysql_query(" SELECT max(sw)AS max FROM `fy1`where sw!=$res9 and (sw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max13_student=$res2["max"];

//passed//

$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where cms_th>39 and cms_th!=120 OR cms_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist=$res3["clear"];
$total_per=($total_Dist/ $appear)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where cms_or>9 and cms_or!=120 OR cms_or=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist1=$res3["clear"];
$total_per1=($total_Dist1/ $appear1)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where cms_tw>9 and cms_tw!=120 OR cms_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist2=$res3["clear"];
$total_per2=($total_Dist2/$appear2 )*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where aps_th>39 and aps_th!=120 OR aps_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist3=$res3["clear"];
$total_per3=($total_Dist3/ $appear3)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where aps_pr>19 and aps_pr!=120 OR aps_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist4=$res3["clear"];
$total_per4=($total_Dist4/ $appear4)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where pic_th>39 and pic_th!=120 OR pic_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist5=$res3["clear"];
$total_per5=($total_Dist5/ $appear5)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where pic_pr>9 and pic_pr!=120 OR pic_pr=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist6=$res3["clear"];
$total_per6=($total_Dist6/ $appear6)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where pic_tw>9 and pic_tw!=120  OR pic_tw=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist7=$res3["clear"];
$total_per7=($total_Dist7/ $appear6)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where eeg_th>39 and eeg_th!=120 OR eeg_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist8=$res3["clear"];
$total_per8=($total_Dist8/$appear7)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where eeg_tw>9 and eeg_tw!=120 OR eeg_tw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist9=$res3["clear"];
$total_per9=($total_Dist9/ $appear8)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where ems_th>39 and ems_th!=120 OR ems_th=140");
$res3=mysql_fetch_array($sql3);
$total_Dist10=$res3["clear"];
$total_per10=($total_Dist10/$appear9)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where dls_or>9 and dls_or!=120 OR dls_or=140");
$res3=mysql_fetch_array($sql3);
$total_Dist11=$res3["clear"];
$total_per11=($total_Dist11/$appear10)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where wpd_pr>19 and wpd_pr!=120 OR wpd_pr=140");
$res3=mysql_fetch_array($sql3);
$total_Dist12=$res3["clear"];
$total_per12=($total_Dist12/$appear11)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where sw>0 and sw!=120 OR sw=140");
$res3=mysql_fetch_array($sql3);
$total_Dist13=$res3["clear"];
$total_per13=($total_Dist13/$appear12)*100;


//above 60%  student//
$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where cms_th>59  and cms_th<120");
$res3=mysql_fetch_array($sql3);
$total_Dist21=$res3["clear"];
$total_per21=($total_Dist21/$appear)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where cms_or>14 and cms_or<120");
$res3=mysql_fetch_array($sql3);
$total_Dist22=$res3["clear"];
$total_per22=($total_Dist22/$appear1)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where cms_tw>14 and cms_tw<120");
$res3=mysql_fetch_array($sql3);
$total_Dist23=$res3["clear"];
$total_per23=($total_Dist23/$appear2)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where aps_th>59 and aps_th<120");
$res3=mysql_fetch_array($sql3);
$total_Dist24=$res3["clear"];
$total_per24=($total_Dist24/$appear3)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where aps_pr>29 and aps_pr<120");
$res3=mysql_fetch_array($sql3);
$total_Dist25=$res3["clear"];
$total_per25=($total_Dist25/$appear4)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where pic_th>59 and pic_th<120");
$res3=mysql_fetch_array($sql3);
$total_Dist26=$res3["clear"];
$total_per26=($total_Dist26 /$appear5)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where pic_pr>14 and pic_pr<120");
$res3=mysql_fetch_array($sql3);
$total_Dist27=$res3["clear"];
$total_per27=($total_Dist27/$appear6)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where pic_tw>14 and pic_tw<120");
$res3=mysql_fetch_array($sql3);
$total_Dist28=$res3["clear"];
$total_per28=($total_Dist28  /$appear7)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where eeg_th>59 and eeg_th<120");
$res3=mysql_fetch_array($sql3);
$total_Dist29=$res3["clear"];
$total_per29=($total_Dist29 /$appear8)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where eeg_tw>14 and eeg_tw<120");
$res3=mysql_fetch_array($sql3);
$total_Dist30=$res3["clear"];
$total_per30=($total_Dist30/$appear9)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where ems_th>59 and ems_th<120" );
$res3=mysql_fetch_array($sql3);
$total_Dist31=$res3["clear"];
$total_per31=($total_Dist31 / $appear10)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where dls_or>14 and dls_or<120");
$res3=mysql_fetch_array($sql3);
$total_Dist32=$res3["clear"];
$total_per32=($total_Dist32/$appear11)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where wpd_pr>29 and wpd_pr<120");
$res3=mysql_fetch_array($sql3);
$total_Dist33=$res3["clear"];
$total_per33=($total_Dist33/$appear12)*100;


$sql3=mysql_query("select count(`seat_no`) As clear from fy1 where sw>29 and sw<120");
$res3=mysql_fetch_array($sql3);
$total_Dist34=$res3["clear"];
$total_per34=($total_Dist34 /$appear13)*100;


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
			<td>17201</td>
			<td>communication skill</td>
			<td>TH</td>
			<td><?php echo "$min_student" ;?> </td>
			<td><?php echo "$max_student";  ?></td>
			<td><?php echo $appear ?></td>
			<td> <?php echo $total_Dist  ?></td>
            <td>  <?php  echo round($total_per,2) ?></td>
			<td><?php  echo round($total_per21,2) ?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>17201</td>
			<td>communication skill</td>
			<td>OR</td>
			<td><?php echo "$min1_student" ;?> </td>
			<td> <?php echo "$max1_student";  ?></td>
			<td><?php echo $appear1 ?></td>
			<td><?php echo $total_Dist1  ?></td>
			<td>  <?php  echo round($total_per1,2) ?></td>
			<td><?php  echo round($total_per22,2) ?> </td>
		</tr>
		<tr>
			<td>3</td>
			<td>17201</td>
			<td>communication skill</td>
			<td>TW</td>
			<td><?php echo "$min2_student" ;?> </td>
			<td><?php echo "$max2_student";  ?></td>
			<td><?php echo $appear2 ?></td>
			<td><?php echo $total_Dist2  ?></td>
			<td><?php  echo round($total_per2 ,2)?></td>
			<td><?php  echo round($total_per23,2) ?></td>
		</tr>
		<tr>
			<td>4</td>
			<td>17210/211</td>
			<td>Applied science</td>
			<td>TH</td>
			<td><?php echo "$min3_student" ;?></td>
			<td><?php echo "$max3_student";  ?></td>
			<td><?php echo $appear3 ?></td>
			<td><?php echo $total_Dist3  ?></td>
			<td><?php  echo round($total_per3,2) ?></td>
			<td><?php  echo round($total_per24,2) ?></td>
		</tr>
		<tr>
			<td>5</td>
			<td>17210/211</td>
			<td>Applied science</td>
			<td>PR</td>
			<td><?php echo "$min4_student" ;?></td>
			<td><?php echo "$max4_student";  ?></td>
			<td><?php echo $appear4 ?></td>
			<td><?php echo $total_Dist4  ?></td>
			<td><?php  echo round($total_per4,2) ?></td>
			<td><?php  echo round($total_per25,2) ?></td>
		</tr>
		<tr>
			<td>6</td>
			<td>17212</td>
			<td>Programming in 'C'</td>
			<td>TH</td>
			<td><?php echo "$min5_student" ;?></td>
			<td><?php echo "$max5_student";  ?></td>
			<td><?php echo $appear5 ?></td>
			<td><?php echo $total_Dist5  ?></td>
			<td><?php  echo round($total_per5,2) ?></td>
			<td><?php  echo round($total_per26,2) ?></td>
		</tr>
		<tr>
			<td>7</td>
			<td>17212</td>
			<td>Programming in 'C'</td>
			<td>PR</td>
			<td><?php echo "$min6_student" ;?></td>
			<td><?php echo "$max6_student";  ?></td>
			<td><?php echo $appear6 ?></td>
			<td><?php echo $total_Dist6  ?></td>
			<td><?php  echo round($total_per6,2) ?></td>
			<td><?php  echo round($total_per27,2) ?></td>
		</tr>
		<tr>
			<td>8</td>
			<td>17212</td>
			<td>Programming in 'C'</td>
			<td>TW</td>
			<td><?php echo "$min7_student" ;?></td>
			<td><?php echo "$max7_student";  ?></td>
			<td><?php echo $appear7 ?></td>
			<td><?php echo $total_Dist7  ?></td>
			<td><?php  echo round($total_per7 ,2)?></td>
			<td><?php  echo round($total_per28,2) ?></td>
		</tr>
		<tr>
			<td>9</td>
			<td>17213</td>
			<td>Basic electronic</td>
			<td>TH</td>
			<td><?php echo "$min8_student" ;?></td>
			<td><?php echo "$max8_student";  ?></td>
			<td><?php echo $appear8 ?></td>
			<td><?php echo $total_Dist8  ?></td>
			<td><?php  echo round($total_per8,2) ?></td>
			<td><?php  echo round($total_per29,2) ?></td>
		</tr>
		<tr>
			<td>10</td>
			<td>17213</td>
			<td>Basic Electronic</td>
			<td>TW</td>
			<td><?php echo "$min9_student" ;?></td>
			<td><?php echo "$max9_student";  ?></td>
			<td><?php echo $appear9 ?></td>
			<td><?php echo $total_Dist9  ?></td>
			<td><?php  echo round($total_per9 ,2)?></td>
			<td><?php  echo round($total_per30 ,2)?></td>
		</tr>
		<tr>
			<td>11</td>
			<td>17216</td>
			<td>Mathemetics</td>
			<td>TH</td>
			<td><?php echo "$min10_student" ;?></td>
			<td><?php echo "$max10_student";  ?></td>
			<td><?php echo $appear10 ?></td>
			<td><?php echo $total_Dist10  ?></td>
			<td><?php  echo round($total_per10,2) ?></td>
			<td><?php  echo round($total_per31 ,2)?></td>
		</tr>
		<tr>
			<td>8</td>
			<td>17010</td>
			<td>developement of life skill</td>
			<td>OR</td>
			<td><?php echo "$min11_student" ;?></td>
			<td><?php echo "$max11_student";  ?></td>
			<td><?php echo $appear11 ?></td>
			<td><?php echo $total_Dist11  ?></td>
			<td><?php  echo round($total_per11,2) ?></td>
			<td><?php  echo round($total_per32 ,2)?></td>
		</tr>
		<tr>
			<td>9</td>
			<td>17013</td>
			<td>Web page design</td>
			<td>PR</td>
			<td><?php echo "$min12_student" ;?></td>
			<td><?php echo "$max12_student";  ?></td>
			<td><?php echo $appear12 ?></td>
			<td><?php echo $total_Dist12  ?></td>
			<td><?php  echo round($total_per12,2) ?></td>
			<td><?php  echo round($total_per33 ,2)?></td>
		</tr>
		<tr>
			<td>10</td>
			<td></td>
			<td>sw</td>
			<td>sw</td>
			<td><?php echo "$min13_student" ;?></td>
			<td><?php echo "$max13_student";  ?></td>
			<td><?php echo $appear13 ?></td>
			<td><?php echo $total_Dist13  ?></td>
			<td><?php  echo round($total_per13,2) ?></td>
			<td><?php  echo round($total_per34,2) ?></td>
		</tr>
		
		
	</table>
</form>

</div>

<button onclick="printContent('div4')" class="btn"><h3><b>Print</b></h3></button>
<br>