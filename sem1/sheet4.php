<div id="div4">

<?php

include("/table.php");

//appeared student//
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy where eng_th=120");
$resm=mysql_fetch_array($sqm);
$APPEARED=$resm["clear"];
$appear=( $total_student-$APPEARED);

$sqm1=mysql_query("SELECT count(`enrollment_no`) as clear from fy where eng_tw=120");
$resm1=mysql_fetch_array($sqm1);
$APPEARED1=$resm1["clear"];
$appear1=( $total_student-$APPEARED1);


$sqm2=mysql_query("SELECT count(`enrollment_no`) as clear from fy where bsc_th=120");
$resm2=mysql_fetch_array($sqm2);
$APPEARED2=$resm2["clear"];
$appear2=( $total_student-$APPEARED2);


$sqm3=mysql_query("SELECT count(`enrollment_no`) as clear from fy where bsc_pr=120");
$resm3=mysql_fetch_array($sqm3);
$APPEARED3=$resm3["clear"];
$appear3=( $total_student-$APPEARED3);


$sqm4=mysql_query("SELECT count(`enrollment_no`) as clear from fy where bms_th=120");
$resm4=mysql_fetch_array($sqm4);
$APPEARED4=$resm4["clear"];
$appear4=( $total_student-$APPEARED4);


$sqm5=mysql_query("SELECT count(`enrollment_no`) as clear from fy where egg_pr=120");
$resm5=mysql_fetch_array($sqm5);
$APPEARED5=$resm5["clear"];
$appear5=( $total_student-$APPEARED5);


$sqm6=mysql_query("SELECT count(`enrollment_no`) as clear from fy where egg_tw=120");
$resm6=mysql_fetch_array($sqm6);
$APPEARED6=$resm6["clear"];
$appear6=( $total_student-$APPEARED6);


$sqm7=mysql_query("SELECT count(`enrollment_no`) as clear from fy where cmf_pr=120");
$resm7=mysql_fetch_array($sqm7);
$APPEARED7=$resm7["clear"];
$appear7=( $total_student-$APPEARED7);


$sqm8=mysql_query("SELECT count(`enrollment_no`) as clear from fy where cmf_tw=120");
$resm8=mysql_fetch_array($sqm8);
$APPEARED8=$resm8["clear"];
$appear8=( $total_student-$APPEARED8);


$sqm9=mysql_query("SELECT count(`enrollment_no`) as clear from fy where wpi_tw=120");
$resm9=mysql_fetch_array($sqm9);
$APPEARED9=$resm9["clear"];
$appear9=( $total_student-$APPEARED9);


$sqm10=mysql_query("SELECT count(`enrollment_no`) as clear from fy where sw=120");
$resm10=mysql_fetch_array($sqm10);
$APPEARED10=$resm10["clear"];
$appear10=( $total_student-$APPEARED10);


//min
$sql1=mysql_query(" SELECT min(eng_th)AS min FROM `fy` ");
$res=mysql_fetch_array($sql1);
$min_student=$res["min"];

$sql1=mysql_query(" SELECT min(eng_tw)AS min FROM `fy` ");
$res=mysql_fetch_array($sql1);
$min1_student=$res["min"];

$sql1=mysql_query(" SELECT min(bsc_th)AS min FROM `fy` ");
$res=mysql_fetch_array($sql1);
$min2_student=$res["min"];

$sql1=mysql_query(" SELECT min(bsc_pr)AS min FROM `fy` ");
$res=mysql_fetch_array($sql1);
$min3_student=$res["min"];

$sql1=mysql_query(" SELECT min(bms_th)AS min FROM `fy` ");
$res=mysql_fetch_array($sql1);
$min4_student=$res["min"];

$sql1=mysql_query(" SELECT min(egg_pr)AS min FROM `fy` ");
$res=mysql_fetch_array($sql1);
$min5_student=$res["min"];

$sql1=mysql_query(" SELECT min(egg_tw)AS min FROM `fy` ");
$res=mysql_fetch_array($sql1);
$min6_student=$res["min"];

$sql1=mysql_query(" SELECT min(cmf_pr)AS min FROM `fy` ");
$res=mysql_fetch_array($sql1);
$min7_student=$res["min"];

$sql1=mysql_query(" SELECT min(cmf_tw)AS min FROM `fy` ");
$res=mysql_fetch_array($sql1);
$min8_student=$res["min"];

$sql1=mysql_query(" SELECT min(wpi_tw)AS min FROM `fy` ");
$res=mysql_fetch_array($sql1);
$min9_student=$res["min"];

$sql1=mysql_query(" SELECT min(sw)AS min FROM `fy` ");
$res=mysql_fetch_array($sql1);
$min10_student=$res["min"];


//max
$sql1=mysql_query(" SELECT * FROM `fy`");
$res=mysql_fetch_array($sql1);
$res9=120;
$res8=140;
$sql2=mysql_query(" SELECT max(eng_th) AS max FROM `fy`where eng_th!=$res9 and (eng_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max_student=$res2["max"];

$sql2=mysql_query(" SELECT max(eng_tw)AS max FROM `fy`  where eng_tw!=$res9 and (eng_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max1_student=$res2["max"];

$sql2=mysql_query(" SELECT max(bsc_th)AS max FROM `fy`  where bsc_th!=$res9 and (bsc_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max2_student=$res2["max"];

$sql2=mysql_query(" SELECT max(bsc_pr)AS max FROM `fy`  where bsc_pr!=$res9 and (bsc_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max3_student=$res2["max"];

$sql2=mysql_query(" SELECT max(bms_th)AS max FROM `fy`  where bms_th!=$res9 and (bms_th!=$res8)");
$res2=mysql_fetch_array($sql2);
$max4_student=$res2["max"];

$sql2=mysql_query(" SELECT max(egg_pr)AS max FROM `fy` where egg_pr!=$res9 and (egg_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max5_student=$res2["max"];

$sql2=mysql_query(" SELECT max(egg_tw)AS max FROM `fy` where egg_tw!=$res9 and (egg_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max6_student=$res2["max"];

$sql2=mysql_query(" SELECT max(cmf_pr)AS max FROM `fy` where cmf_pr!=$res9 and (cmf_pr!=$res8)");
$res2=mysql_fetch_array($sql2);
$max7_student=$res2["max"];

$sql2=mysql_query(" SELECT max(cmf_tw)AS max FROM `fy`  where cmf_tw!=$res9 and (cmf_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max8_student=$res2["max"];

$sql2=mysql_query(" SELECT max(wpi_tw)AS max FROM `fy` where wpi_tw!=$res9 and (wpi_tw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max9_student=$res2["max"];

$sql2=mysql_query(" SELECT max(sw)AS max FROM `fy`  where sw!=$res9 and (sw!=$res8)");
$res2=mysql_fetch_array($sql2);
$max10_student=$res2["max"];


//passed//
$sq=mysql_query("select count(`seat_no`) As clear from fy where eng_th>39.99 and eng_th!=120 or eng_th=140");
$re=mysql_fetch_array($sq);
$total_Dist=$re["clear"];
$total_per=($total_Dist/ $appear)*100;

$sq1=mysql_query("select count(`seat_no`) As clear from fy  where eng_tw>9 and eng_tw!=120 or eng_tw=140 ");
$re1=mysql_fetch_array($sq1);
$total_Dist1=$re1["clear"];
$total_per1=($total_Dist1/ $appear1)*100;

$sq2=mysql_query("select count(`seat_no`) As clear from fy  where bsc_th>39 and bsc_th!=120 or bsc_th=140 ");
$re2=mysql_fetch_array($sq2);
$total_Dist2=$re2["clear"];
$total_per2=($total_Dist2/ $appear2)*100;

$sq3=mysql_query("select count(`seat_no`) As clear from fy  where bsc_pr>19 and bsc_pr!=120 or bsc_pr=140");
$re3=mysql_fetch_array($sq3);
$total_Dist3=$re3["clear"];
$total_per3=($total_Dist3/ $appear3)*100;

$sq4=mysql_query("select count(`seat_no`) As clear from fy  where bms_th>39 and bms_th!=120 or bms_th=140");
$re4=mysql_fetch_array($sq4);
$total_Dist4=$re4["clear"];
$total_per4=($total_Dist4/ $appear4)*100;

$sq5=mysql_query("select count(`seat_no`) As clear from fy  where egg_pr>19 and egg_pr!=120 or egg_pr=140 ");
$re5=mysql_fetch_array($sq5);
$total_Dist5=$re5["clear"];
$total_per5=($total_Dist5/ $appear5)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from fy  where egg_tw>19 and egg_tw!=120 or egg_tw=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist6=$res3["clear"];
$total_per6=($total_Dist6/ $appear6)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from fy  where cmf_pr>19 and cmf_pr!=120 or cmf_pr=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist7=$res3["clear"];
$total_per7=($total_Dist7/ $appear7)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from fy  where cmf_tw>9 and cmf_tw!=120 or cmf_tw=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist8=$res3["clear"];
$total_per8=($total_Dist8/ $appear8)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from fy  where wpi_tw>19 and wpi_tw!=120 or wpi_tw=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist9=$res3["clear"];
$total_per9=($total_Dist9/ $appear9)*100;

$sql3=mysql_query("select count(`seat_no`) As clear from fy  where sw>9 and sw!=120 or sw=140 ");
$res3=mysql_fetch_array($sql3);
$total_Dist10=$res3["clear"];
$total_per10=($total_Dist10/ $appear10)*100;

//above 60%  student//

$sql3=mysql_query("select count(`enrollment_no`) As clear from fy where eng_th>59 and eng_th<120 ");
$res3=mysql_fetch_array($sql3);
$total_Dist21=$res3["clear"];
$total_per21=($total_Dist21/$appear)*100;

$sql31=mysql_query("select count(`seat_no`) As clear from fy where eng_tw>14 and eng_tw<120 ");
$res31=mysql_fetch_array($sql31);
$total_Dist22=$res31["clear"];
$total_per22=($total_Dist22/$appear1)*100;

$sql32=mysql_query("select count(`seat_no`) As clear from fy where bsc_th>59 and bsc_th<120 ");
$res32=mysql_fetch_array($sql32);
$total_Dist23=$res32["clear"];
$total_per23=($total_Dist23/$appear2)*100;

$sql34=mysql_query("select count(`seat_no`) As clear from fy where bsc_pr>29 and bsc_pr<120 ");
$res34=mysql_fetch_array($sql34);
$total_Dist24=$res34["clear"];
$total_per24=($total_Dist24 /$appear3)*100;

$sql35=mysql_query("select count(`seat_no`) As clear from fy where bms_th>59 and bms_th<120 ");
$res35=mysql_fetch_array($sql35);
$total_Dist25=$res35["clear"];
$total_per25=($total_Dist25 /$appear4)*100;

$sql36=mysql_query("select count(`seat_no`) As clear from fy where egg_pr>29 and egg_pr<120 ");
$res36=mysql_fetch_array($sql36);
$total_Dist26=$res36["clear"];
$total_per26=($total_Dist26 / $appear5)*100;

$sql37=mysql_query("select count(`seat_no`) As clear from fy where egg_tw>29 and egg_tw<120 ");
$res37=mysql_fetch_array($sql37);
$total_Dist27=$res37["clear"];
$total_per27=($total_Dist27 /$appear6)*100;

$sql38=mysql_query("select count(`seat_no`) As clear from fy where cmf_pr>29 and cmf_pr<120");
$res38=mysql_fetch_array($sql38);
$total_Dist28=$res38["clear"];
$total_per28=($total_Dist28 /$appear7)*100;

$sql39=mysql_query("select count(`seat_no`) As clear from fy where cmf_tw>14 and cmf_tw<120");
$res39=mysql_fetch_array($sql39);
$total_Dist29=$res39["clear"];
$total_per29=($total_Dist29/$appear8)*100;

$sql40=mysql_query("select count(`seat_no`) As clear from fy where wpi_tw>29 and wpi_tw<120");
$res40=mysql_fetch_array($sql40);
$total_Dist30=$res40["clear"];
$total_per30=($total_Dist30/$appear9)*100;

$sql41=mysql_query("select count(`seat_no`) As clear from fy where sw>29 and sw<120");
$res41=mysql_fetch_array($sql41);
$total_Dist31=$res41["clear"];
$total_per31=($total_Dist31/$appear10)*100;
?>
<form>
<br><br>
	<table border="1" align="center">
		<tr>
			<td>Sr. No.</td>
			<td>Sub Code</td>
			<td>Sub Name</td>
			<td>TH/PR/OR</td>
			<td>Lowest Mark</td>
			<td>Highest</td>
			<td>Appeared Student</td>
			<td>No os Student Passed</td>
			<td>Passed student %</td>
			<td>Above 60% of Student %</td>
		</tr>
		<tr>
			<td>1</td>
			<td>17101</td>
			<td>ENGLISH</td>
			<td>TH</td>
			<td><?php echo $min_student; ?></td>
			<td><?php echo $max_student; ?></td>
			<td><?php echo $appear; ?></td>
			<td><?php echo $total_Dist; ?></td>
			<td><?php echo round($total_per,2); ?></td>
			<td><?php echo round($total_per21,2); ?></td>
			
		</tr>
		<tr>
			<td>2</td>
			<td>17101</td>
			<td>ENGLISH</td>
			<td>TW</td>
			<td><?php echo $min1_student; ?></td>
			<td><?php echo $max1_student; ?></td>
			<td><?php echo $appear1; ?></td>
			<td><?php echo $total_Dist1; ?></td>
			<td><?php echo round($total_per1,2); ?></td>
			<td><?php echo round($total_per22,2); ?></td>
		</tr>
		<tr>
			<td>3</td>
			<td>17102/103</td>
			<td>BASIC SCIENCE</td>
			<td>TH</td>
			<td><?php echo $min2_student; ?></td>
			<td><?php echo $max2_student; ?></td>
			<td><?php echo $appear2; ?></td>
			<td><?php echo $total_Dist2; ?></td>
			<td><?php echo round($total_per2,2); ?></td>
			<td><?php echo round($total_per23,2); ?></td>
		</tr>
		<tr>
			<td>4</td>
			<td>17102/103</td>
			<td>BASIC SCIENCE</td>
			<td>PR</td>
			<td><?php echo $min3_student; ?></td>
			<td><?php echo $max3_student; ?></td>
			<td><?php echo $appear3; ?></td>
			<td><?php echo $total_Dist3; ?></td>
			<td><?php echo round($total_per3,2); ?></td>
			<td><?php echo round($total_per24,2); ?></td>
		</tr>
		<tr>
			<td>5</td>
			<td>17104</td>
			<td>BASIC MATHEMATICS</td>
			<td>TH</td>
			<td><?php echo $min4_student; ?></td>
			<td><?php echo $max4_student; ?></td>
			<td><?php echo $appear4; ?></td>
			<td><?php echo $total_Dist4; ?></td>
			<td><?php echo round($total_per4,2); ?></td>
			<td><?php echo round($total_per25,2); ?></td>
		</tr>
		<tr>
			<td>6</td>
			<td>17001</td>
			<td>ENGINERRING GRAPHICS</td>
			<td>PR</td>
			<td><?php echo $min5_student; ?></td>
			<td><?php echo $max5_student; ?></td>
			<td><?php echo $appear5; ?></td>
			<td><?php echo $total_Dist5; ?></td>
			<td><?php echo round($total_per5,2); ?></td>
			<td><?php echo round($total_per26,2); ?></td>
		</tr>
		<tr>
			<td>7</td>
			<td>17001</td>
			<td>ENGINERRING GRAPHICS</td>
			<td>TW</td>
			<td><?php echo $min6_student; ?></td>
			<td><?php echo $max6_student; ?></td>
			<td><?php echo $appear6; ?></td>
			<td><?php echo $total_Dist6; ?></td>
			<td><?php echo round($total_per6,2); ?></td>
			<td><?php echo round($total_per27,2); ?></td>
		</tr>
		<tr>
			<td>8</td>
			<td>17002</td>
			<td>COMPUTER FUNDAMENTALS</td>
			<td>PR</td>
		    <td><?php echo $min7_student; ?></td>
			<td><?php echo $max7_student; ?></td>
			<td><?php echo $appear7; ?></td>
			<td><?php echo $total_Dist7; ?></td>
			<td><?php echo round($total_per7,2); ?></td>
			<td><?php echo round($total_per28,2); ?></td>
		</tr>
		<tr>
			<td>9</td>
			<td>17002</td>
			<td>COMPUTER FUNDAMENTALS</td>
			<td>TW</td>
			<td><?php echo $min8_student; ?></td>
			<td><?php echo $max8_student; ?></td>
			<td><?php echo $appear8; ?></td>
			<td><?php echo $total_Dist8; ?></td>
			<td><?php echo round($total_per8,2); ?></td>
			<td><?php echo round($total_per29,2); ?></td>
		</tr>
		<tr>
			<td>10</td>
			<td>17007</td>
			<td>WORKSHOP</td>
			<td>TW</td>
			<td><?php echo $min9_student; ?></td>
			<td><?php echo $max9_student; ?></td>
			<td><?php echo $appear9; ?></td>
			<td><?php echo $total_Dist9; ?></td>
			<td><?php echo round($total_per9,2); ?></td>
			<td><?php echo round($total_per30,2); ?></td>
		</tr>
		<tr>
			<td>11</td>
			<td></td>
			<td>SESSION</td>
			<td>SW</td>
			<td><?php echo $min10_student; ?></td>
			<td><?php echo $max10_student; ?></td>
			<td><?php echo $appear10; ?></td>
			<td><?php echo $appear10; ?></td>
			<td><?php echo 100?></td>
			<td><?php echo round($total_per31,2); ?></td>
		</tr>
		
	</table>
</form>
</div>
<button onclick="printContent('div4')" class="btn"><h3><b>Print</b></h3></button>