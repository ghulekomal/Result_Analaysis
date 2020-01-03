<div id="div1">

<?php
include("/table.php");

$a=mysql_query("SELECT * FROM `fy` ");
while($rw=mysql_fetch_array($a)){
$sum=0;
if($rw["eng_th"]==140){
 $sum+=40;
}
else if($rw["eng_th"]==120){
 $sum+=0;
 }
else{   
$sum+=$rw["eng_th"];
}
$sum+=$rw["eng_tw"];

if($rw["bsc_th"]==140){
 $sum+=40;
}
else if($rw["bsc_th"]==120){
 $sum+=0;
 }
else{
$sum+=$rw["bsc_th"];
}
$sum+=$rw["bsc_pr"];

if($rw["bms_th"]==140){
 $sum+=40;
}
else if($rw["bms_th"]==120){
 $sum+=0;
 }
else{
$sum+=$rw["bms_th"];
}


$sum+=$rw["egg_pr"];
$sum+=$rw["egg_tw"];

$sum+=$rw["cmf_pr"];
$sum+=$rw["cmf_tw"];

$sum+=$rw["wpi_tw"];
$sum+=$rw["sw"];

$upd=mysql_query("update fy set sum='".$sum."' where roll_no=".$rw["roll_no"]);

$avg=$sum/6.5;
$upd=mysql_query("update fy set avg='".$avg."' where roll_no=".$rw["roll_no"]);
}




$cnt=mysql_query("SELECT * FROM `fy` ");
while($row=mysql_fetch_array($cnt)){
    $atkt=0;
if($row["eng_th"]<40 and $row["eng_th"]!=140 or $row["eng_th"]==120)
  $atkt+=1;
if($row["eng_tw"]<0 and $row["eng_tw"]!=140 or $row["eng_tw"]==120)
    $atkt+=1;
if($row["bsc_th"]<40 and $row["bsc_th"]!=140 or $row["bsc_th"]==120)
    $atkt+=1;
if($row["bsc_pr"]<0 and $row["bsc_pr"]!=140 or $row["bsc_pr"]==120)
    $atkt+=1;
if($row["bms_th"]<40 and $row["bms_th"]!=140 or $row["bms_th"]==120)
    $atkt+=1;
if($row["egg_pr"]<0 and $row["egg_pr"]!=140 or $row["egg_pr"]==120)
    $atkt+=1;
if($row["egg_tw"]<0 and $row["egg_tw"]!=140 or $row["egg_tw"]==120)
    $atkt+=1;
if($row["cmf_pr"]<0 and $row["cmf_pr"]!=140 or $row["cmf_pr"]==120)
    $atkt+=1;
if($row["cmf_tw"]<0 and $row["cmf_tw"]!=140 or $row["cmf_tw"]==120)
    $atkt+=1;
if($row["wpi_tw"]<0 and $row["wpi_tw"]!=140 or $row["wpi_tw"]==120)
    $atkt+=1;
if($row["sw"]<0 and $row["sw"]!=140 or $row["sw"]==120)
    $atkt+=1;

$upd=mysql_query("update fy set count='".$atkt."' where roll_no=".$row["roll_no"]);
}
?>




<?php
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$total_student1=($total_student/$total_student)*100;

//appeared
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy where avg>100");
$resm=mysql_fetch_array($sqm);
$apear=$resm["clear"];
$appear1=( $total_student-$apear);
$appear_per1=($appear1/ $total_student)*100;

//clear
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy where count=0 ");
$resm=mysql_fetch_array($sqm);
$clear1=$resm["clear"];
$clear_per1=($clear1/ $appear1)*100;

//ATKT
$sqm=mysql_query("select count(`enrollment_no`) AS clear from fy where count=1 OR count=2");
$resm=mysql_fetch_array($sqm);
$atkt1=$resm["clear"];
$atkt_per1=($atkt1/ $appear1)*100;

//clear+atkt
$clearatkt1=($clear1+$atkt1);
$clearatkt_per1=($clearatkt1/$appear1)*100;

// Distinction
$sq2=mysql_query("select count(`enrollment_no`) as dist from fy where avg>74.99 AND count=0");
$res2=mysql_fetch_array($sq2);
$dist=$res2["dist"];
$dist_per=($dist/$appear1)*100;

// first class with Dist
$sq3=mysql_query("select count(`enrollment_no`) as first from fy where avg>59.99  AND avg<74.99  AND count=0");
$res3=mysql_fetch_array($sq3);
$first=$res3["first"];
$first_per=($first/ $appear1)*100;

// Second class with Dist
$sq4=mysql_query("select count(`enrollment_no`) as second from fy where avg>49.99 and avg<60  AND count=0" );
$res4=mysql_fetch_array($sq4);
$second=$res4["second"];
$second_per=($second/ $appear1)*100;

// pass class with Dist
$sql1=mysql_query("SELECT count( `seat_no` ) AS total_stud
FROM `fy` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sql3=mysql_query("select count(`seat_no`) As clear from fy  where avg>39.99 and avg<49  AND count=0");
$res3=mysql_fetch_array($sql3);
$pass=$res3["clear"];
$pass_per=($pass/ $appear1)*100;


// fail class with Dist
$sq6=mysql_query("SELECT count(`seat_no`) AS pass from fy where count=3 OR count>3");
$res6=mysql_fetch_array($sq6);
$fail=$res6["pass"];
$fail_per=($fail/$appear1)*100;

//eligible for next year
$sqm=mysql_query("SELECT count(`seat_no`) as clear from fy where count<4");
$resm=mysql_fetch_array($sqm);
$eligible=$resm["clear"];
$eligible_per=($eligible/$appear1)*100;
?>


<?php
$a1=mysql_query("SELECT * FROM `cfy` ");
while($rw=mysql_fetch_array($a1)){
$sum=0;
if($rw["eng_th"]==140){
 $sum+=40;
}
else if($rw["eng_th"]==120){
 $sum+=0;
 }
else{   
$sum+=$rw["eng_th"];
}
$sum+=$rw["eng_tw"];

if($rw["bsc_th"]==140){
 $sum+=40;
}
else if($rw["bsc_th"]==120){
 $sum+=0;
 }
else{
$sum+=$rw["bsc_th"];
}
$sum+=$rw["bsc_pr"];

if($rw["bms_th"]==140){
 $sum+=40;
}
else if($rw["bms_th"]==120){
 $sum+=0;
 }
else{
$sum+=$rw["bms_th"];
}


$sum+=$rw["egg_pr"];
$sum+=$rw["egg_tw"];

$sum+=$rw["cmf_pr"];
$sum+=$rw["cmf_tw"];

$sum+=$rw["wpi_tw"];
$sum+=$rw["sw"];

$upd=mysql_query("update cfy set sum='".$sum."' where roll_no=".$rw["roll_no"]);

$avg=$sum/6.5;
$upd=mysql_query("update cfy set avg='".$avg."' where roll_no=".$rw["roll_no"]);
}




$cnt1=mysql_query("SELECT * FROM `cfy` ");
while($row=mysql_fetch_array($cnt1)){
    $atkt=0;
if($row["eng_th"]<40 and $row["eng_th"]!=140 or $row["eng_th"]==120)
  $atkt+=1;
if($row["eng_tw"]<9 and $row["eng_tw"]!=140 or $row["eng_tw"]==120)
    $atkt+=1;
if($row["bsc_th"]<40 and $row["bsc_th"]!=140 or $row["bsc_th"]==120)
    $atkt+=1;
if($row["bsc_pr"]<19 and $row["bsc_pr"]!=140 or $row["bsc_pr"]==120)
    $atkt+=1;
if($row["bms_th"]<40 and $row["bms_th"]!=140 or $row["bms_th"]==120)
    $atkt+=1;
if($row["egg_pr"]<19 and $row["egg_pr"]!=140 or $row["egg_pr"]==120)
    $atkt+=1;
if($row["egg_tw"]<9 and $row["egg_tw"]!=140 or $row["egg_tw"]==120)
    $atkt+=1;
if($row["cmf_pr"]<19 and $row["cmf_pr"]!=140 or $row["cmf_pr"]==120)
    $atkt+=1;
if($row["cmf_tw"]<19 and $row["cmf_tw"]!=140 or $row["cmf_tw"]==120)
    $atkt+=1;
if($row["wpi_tw"]<19 and $row["wpi_tw"]!=140 or $row["wpi_tw"]==120)
    $atkt+=1;
if($row["sw"]<0 and $row["sw"]!=140 or $row["sw"]==120)
    $atkt+=1;

$upd=mysql_query("update cfy set count='".$atkt."' where roll_no=".$row["roll_no"]);
}
?>




<?php
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `cfy` ");
$res=mysql_fetch_array($sql1);
$ctotal_student=$res["total_stud"];
$ctotal_student1=($ctotal_student/$ctotal_student)*100;

//appeared
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from cfy where avg>100");
$resm=mysql_fetch_array($sqm);
$apear1=$resm["clear"];
$cappear=( $ctotal_student-$apear1);
$cappear_per=($cappear/ $total_student)*100;

//clear
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from cfy where count=0 ");
$resm=mysql_fetch_array($sqm);
$cclear=$resm["clear"];
$cclear_per=($cclear/ $cappear)*100;

//ATKT
$sqm=mysql_query("select count(`enrollment_no`) AS clear from cfy where count=1 OR count=2");
$resm=mysql_fetch_array($sqm);
$catkt=$resm["clear"];
$catkt_per=($catkt/ $cappear)*100;

//clear+atkt
$cclearatkt=($cclear+$catkt);
$cclearatkt_per=($cclearatkt/$cappear)*100;

// Distinction
$sq2=mysql_query("select count(`enrollment_no`) as dist from cfy where avg>74.99 AND count=0");
$res2=mysql_fetch_array($sq2);
$cdist=$res2["dist"];
$cdist_per=($cdist/$cappear)*100;

// first class with Dist
$sq3=mysql_query("select count(`enrollment_no`) as first from cfy where avg>59.99  AND avg<74.99  AND count=0");
$res3=mysql_fetch_array($sq3);
$cfirst=$res3["first"];
$cfirst_per=($cfirst/ $cappear)*100;

// Second class with Dist
$sq4=mysql_query("select count(`enrollment_no`) as second from cfy where avg>49.99 and avg<59.99  AND count=0" );
$res4=mysql_fetch_array($sq4);
$csecond=$res4["second"];
$csecond_per=($csecond/$cappear)*100;

// pass class with Dist
$sql3=mysql_query("select count(`seat_no`) As clear from cfy  where avg>39.99 and avg<49  AND count=0");
$res3=mysql_fetch_array($sql3);
$cpass=$res3["clear"];
$cpass_per=($cpass/ $cappear)*100;


// fail class with Dist
$sq6=mysql_query("SELECT count(`seat_no`) AS pass from cfy where count=3 OR count>3");
$res6=mysql_fetch_array($sq6);
$cfail=$res6["pass"];
$cfail_per=($cfail/$cappear)*100;

//eligible for next year
$sqm=mysql_query("SELECT count(`seat_no`) as clear from cfy where count>=0 OR count<4");
$resm=mysql_fetch_array($sqm);
$celigible=$resm["clear"];
$celigible_per=($celigible/$cappear)*100;
?>




<?php 
$a2=mysql_query("SELECT * FROM `fy1` ");
while($rw=mysql_fetch_array($a2)){
$sum=0;
if($rw["cms_th"]==140){
 $sum+=40;
}
else{   
$sum+=$rw["cms_th"];
}
$sum+=$rw["cms_or"];
$sum+=$rw["cms_tw"];

if($rw["aps_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["aps_th"];
}
$sum+=$rw["aps_pr"];

if($rw["pic_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["pic_th"];
}
$sum+=$rw["pic_pr"];
$sum+=$rw["pic_tw"];

if($rw["eeg_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["eeg_th"];
}
$sum+=$rw["eeg_tw"];

if($rw["ems_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["ems_th"];
}

$sum+=$rw["dls_or"];
$sum+=$rw["wpd_pr"];
$sum+=$rw["sw"];

$upd=mysql_query("update fy1 set sum='".$sum."' where roll_no=".$rw["roll_no"]);

$avg=$sum/8;
$upd=mysql_query("update fy1 set avg='".$avg."' where roll_no=".$rw["roll_no"]);
}




$cnt2=mysql_query("SELECT * FROM `fy1` ");
while($row=mysql_fetch_array($cnt2)){
    $atkt=0;
if($row["cms_th"]<40 and $row["cms_th"]!=140 or $row["cms_th"]==120)
  $atkt+=1;
if($row["cms_or"]<0 and $row["cms_or"]!=140 or $row["cms_or"]==120)
    $atkt+=1;
if($row["cms_tw"]<0 and $row["cms_tw"]!=140 or $row["cms_tw"]==120)
    $atkt+=1;
if($row["aps_th"]<40 and $row["aps_th"]!=140 or $row["aps_th"]==120)
    $atkt+=1;
if($row["aps_pr"]<0 and $row["aps_pr"]!=140 or $row["aps_pr"]==120)
    $atkt+=1;
if($row["pic_th"]<40 and $row["pic_th"]!=140 or $row["pic_th"]==120)
    $atkt+=1;
if($row["pic_pr"]<0 and $row["pic_pr"]!=140 or $row["pic_pr"]==120)
    $atkt+=1;
if($row["pic_tw"]<0 and $row["pic_tw"]!=140 or $row["pic_tw"]==120)
    $atkt+=1;
if($row["eeg_th"]<40 and $row["eeg_th"]!=140 or $row["eeg_th"]==120)
    $atkt+=1;
if($row["eeg_tw"]<0 and $row["eeg_tw"]!=140 or $row["eeg_tw"]==120)
    $atkt+=1;
if($row["ems_th"]<40 and $row["ems_th"]!=140 or $row["ems_th"]==120)
    $atkt+=1;
if($row["dls_or"]<0 and $row["dls_or"]!=140 or $row["dls_or"]==120)
    $atkt+=1;
if($row["wpd_pr"]<0 and $row["wpd_pr"]!=140 or $row["wpd_pr"]==120)
    $atkt+=1;
if($row["sw"]<0 and $row["sw"]!=140 or $row["sw"]==120)
    $atkt+=1;

$upd=mysql_query("update fy1 set count='".$atkt."' where roll_no=".$row["roll_no"]);
}
?>

<?php

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `fy1` ");
$res=mysql_fetch_array($sql1);
$atotal_student=$res["total_stud"];
$atotal_student1=($atotal_student/$atotal_student)*100;

//appeared
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy1 where avg>100");
$resm=mysql_fetch_array($sqm);
$apear2=$resm["clear"];
$aappear=( $atotal_student-$apear2);
$aappear_per=($aappear/ $atotal_student)*100;

//clear
$sqm=mysql_query("SELECT count(`seat_no`) as clear from fy1 where count=0 ");
$resm=mysql_fetch_array($sqm);
$aclear=$resm["clear"];
$aclear_per=($aclear/ $aappear)*100;

//ATKT
$sqm=mysql_query("select count(enrollment_no) AS clear from fy1 where count=1 OR count=2");
$resm=mysql_fetch_array($sqm);
$aatkt=$resm["clear"];
$aatkt_per=($aatkt/ $aappear)*100;

//clear+atkt
$aclearatkt=($aclear+$aatkt);
$aclearatkt_per=($aclearatkt/$aappear)*100;

// Distinction
$sq2=mysql_query("select count(`enrollment_no`) as dist from fy1 where avg>74.99 AND count=0 AND avg<100");
$res2=mysql_fetch_array($sq2);
$adist=$res2["dist"];
$adist_per=($adist/$aappear)*100;

// first class with Dist
$sq3=mysql_query("select count(`enrollment_no`) as first from fy1 where avg>59.99  AND avg<74.99 AND count=0");
$res3=mysql_fetch_array($sq3);
$afirst=$res3["first"];
$afirst_per=($afirst/ $aappear)*100;

// Second class with Dist
$sq4=mysql_query("select count(`enrollment_no`) as second from fy1 where avg>49.99 and avg<60 AND count=0" );
$res4=mysql_fetch_array($sq4);
$asecond=$res4["second"];
$asecond_per=($asecond/ $aappear)*100;

// pass class with Dist
$sql3=mysql_query("select count(`seat_no`) As clear from fy1  where avg>39.99 and avg<49.99 AND count=0");
$res3=mysql_fetch_array($sql3);
$apass=$res3["clear"];
$apass_per=($apass/ $aappear)*100;


// fail class with Dist
$sq6=mysql_query("select count(enrollment_no) AS pass from fy1 where count=3 OR count>3 AND cms_th!=120");
$res6=mysql_fetch_array($sq6);
$afail=$res6["pass"];
$afail_per=($afail/$aappear)*100;

//eligible for next year
$sqm=mysql_query("SELECT count(`seat_no`) as clear from fy1 where count<4");
$resm=mysql_fetch_array($sqm);
$aeligible=$resm["clear"];
$aeligible_per=($aeligible/$aappear)*100;
?>

<?php 
$a3=mysql_query("SELECT * FROM `cfy1` ");
while($rw=mysql_fetch_array($a3)){
$sum=0;
if($rw["cms_th"]==140){
 $sum+=40;
}
else{   
$sum+=$rw["cms_th"];
}
$sum+=$rw["cms_or"];
$sum+=$rw["cms_tw"];

if($rw["aps_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["aps_th"];
}
$sum+=$rw["aps_pr"];

if($rw["pic_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["pic_th"];
}
$sum+=$rw["pic_pr"];
$sum+=$rw["pic_tw"];

if($rw["eeg_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["eeg_th"];
}
$sum+=$rw["eeg_tw"];

if($rw["ems_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["ems_th"];
}

$sum+=$rw["dls_or"];
$sum+=$rw["wpd_pr"];
$sum+=$rw["sw"];

$upd=mysql_query("update cfy1 set sum='".$sum."' where roll_no=".$rw["roll_no"]);

$avg=$sum/8;
$upd=mysql_query("update cfy1 set avg='".$avg."' where roll_no=".$rw["roll_no"]);
}




$cnt3=mysql_query("SELECT * FROM `cfy1` ");
while($row=mysql_fetch_array($cnt3)){
    $atkt=0;
if($row["cms_th"]<40 and $row["cms_th"]!=140 or $row["cms_th"]==120)
  $atkt+=1;
if($row["cms_or"]<0 and $row["cms_or"]!=140 or $row["cms_or"]==120)
    $atkt+=1;
if($row["cms_tw"]<0 and $row["cms_tw"]!=140 or $row["cms_tw"]==120)
    $atkt+=1;
if($row["aps_th"]<40 and $row["aps_th"]!=140 or $row["aps_th"]==120)
    $atkt+=1;
if($row["aps_pr"]<0 and $row["aps_pr"]!=140 or $row["aps_pr"]==120)
    $atkt+=1;
if($row["pic_th"]<40 and $row["pic_th"]!=140 or $row["pic_th"]==120)
    $atkt+=1;
if($row["pic_pr"]<0 and $row["pic_pr"]!=140 or $row["pic_or"]==120)
    $atkt+=1;
if($row["pic_tw"]<0 and $row["pic_tw"]!=140 or $row["pic_tw"]==120)
    $atkt+=1;
if($row["eeg_th"]<40 and $row["eeg_th"]!=140 or $row["eeg_th"]==120)
    $atkt+=1;
if($row["eeg_tw"]<0 and $row["eeg_tw"]!=140 or $row["eeg_tw"]==120)
    $atkt+=1;
if($row["ems_th"]<40 and $row["ems_th"]!=140 or $row["ems_th"]==120)
    $atkt+=1;
if($row["dls_or"]<0 and $row["dls_or"]!=140 or $row["dls_or"]==120)
    $atkt+=1;
if($row["wpd_pr"]<0 and $row["wpd_pr"]!=140 or $row["wpd_pr"]==120)
    $atkt+=1;
if($row["sw"]<0 and $row["sw"]!=140 or $row["sw"]==120)
    $atkt+=1;

$upd=mysql_query("update cfy1 set count='".$atkt."' where roll_no=".$row["roll_no"]);
}


$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `cfy1` ");
$res=mysql_fetch_array($sql1);
$btotal_student=$res["total_stud"];
$btotal_student1=($btotal_student/$btotal_student)*100;

//appeared
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from cfy1 where avg>100");
$resm=mysql_fetch_array($sqm);
$apear3=$resm["clear"];
$bappear11=( $btotal_student-$apear3);
$bappear_per=($bappear11/ $btotal_student)*100;

//clear
$sqm=mysql_query("SELECT count(`seat_no`) as clear from cfy1 where count=0 ");
$resm=mysql_fetch_array($sqm);
$bclear=$resm["clear"];
$bclear_per=($bclear/ $bappear11)*100;
//ATKT
$sqm=mysql_query("select count(enrollment_no) AS clear from cfy1 where count=1 OR count=2");
$resm=mysql_fetch_array($sqm);
$batkt=$resm["clear"];
$batkt_per=($batkt/ $bappear11)*100;

//clear+atkt
$bclearatkt=($bclear+$batkt);
$bclearatkt_per=($bclearatkt/$bappear11)*100;

// Distinction
$sq2=mysql_query("select count(`enrollment_no`) as dist from cfy1 where avg>74.99 AND count=0 AND avg<100");
$res2=mysql_fetch_array($sq2);
$bdist=$res2["dist"];
$bdist_per=($bdist/$bappear11)*100;

// first class with Dist
$sq3=mysql_query("select count(`enrollment_no`) as first from cfy1 where avg>59.99  AND avg<74.99 AND count=0");
$res3=mysql_fetch_array($sq3);
$bfirst=$res3["first"];
$bfirst_per=($bfirst/ $bappear11)*100;

// Second class with Dist
$sq4=mysql_query("select count(`enrollment_no`) as second from cfy1 where avg>49 and avg<59 AND count=0" );
$res4=mysql_fetch_array($sq4);
$bsecond=$res4["second"];
$bsecond_per=($bsecond/ $bappear11)*100;

// pass class with Dist
$sql3=mysql_query("select count(`seat_no`) As clear from cfy1  where avg>39 and avg<49 AND count=0");
$res3=mysql_fetch_array($sql3);
$bpass=$res3["clear"];
$bpass_per=($bpass/ $bappear11)*100;


// fail class with Dist
$sq6=mysql_query("select count(enrollment_no) AS pass from cfy1 where count=3 OR count>3");
$res6=mysql_fetch_array($sq6);
$bfail=$res6["pass"];
$bfail_per=($bfail/$bappear11)*100;

//eligible for next year
$sqm=mysql_query("SELECT count(`seat_no`) as clear from cfy1 where count<5");
$resm=mysql_fetch_array($sqm);
$beligible=$resm["clear"];
$beligible_per=($beligible/$bappear11)*100;
?><br>
<h3 align="center"><font color="blue"><b>SRES' S. K.B.P. POLYTECHNIC, KOPARGAON</b></font> </h3><br>
<table border="1" align="center">
<tr>
        <td></td>
        <td></td>
        <td colspan="2"><b>Winter : (Last Year)</b></td>
        <td colspan="2"><b>Winter : (Current  Year)</b></td>
        <td colspan="2"><b>Summer :(Last Year)</b></td>
        <td colspan="2"><b>Summer : (Current Year)</b></td>
        <td></td>
        <td colspan="2"><b> Year End Result</b></td>
        
</tr>
<tr>
        <td><b><h4>srno</b></h4></td>
        <td><b><h4><center>particulars</center> </h4> </b></td>
        <td colspan="2"><h4><center>Sem 1</center></h4></td>
        <td colspan="2"><h4><center>Sem 1</center></h4></td>
        <td colspan="2"><h4><center>Sem 2</center></h4></td>
        <td colspan="2"><h4><center>Sem 2</center></h4></td>
        <td ><h4>Backlok Status</h4></td>
        <td colspan="2"><h4> <center> Year 1 2 3</center></h4></td>
        
</tr>
<tr>
        <td></td>
         <td></td>
        <td><b>stud</b></td>
        <td><b>per</b></td>
        <td><b>stud</b></td>
        <td><b>per</b></td>
        <td><b>stud</b></td>
         <td><b>per</b></td>
        <td><b>stud</b></td>
        <td><b>per</b></td>
        <td><b>Sem-1\3\5</b></td>
        <td><b>stud</b></td>
        <td><b>per</b></td>
</tr>
        <tr>
        <td>1</td>
        <td>Total no of Student APPEARED</td>
        <td><?php echo $appear1 ?></td>
        <td><?php echo round($appear_per1,2)?></td>
        <td><?php echo $cappear ?></td>
        <td><?php echo round($cappear_per,2) ?></td>
        <td><?php echo $aappear ?></td>
        <td><?php echo round($aappear_per ,2)?></td>
        <td><?php echo $bappear ?></td>
        <td><?php echo round($bappear_per,2) ?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>2</td>
        <td>Total no of Student CLEAR Pass </td>
        <td> <?php echo $clear1  ?></td>
        <td> <?php  echo round($clear_per1,2) ?> </td>
        <td><?php echo $cclear  ?></td>
        <td><?php  echo round($cclear_per,2) ?></td>
        <td><?php echo $aclear  ?></td>
        <td><?php  echo round($aclear_per,2) ?></td>
        <td><?php echo $bclear  ?></td>
        <td><?php  echo round($bclear_per,2) ?></td>
        <td></td>
        <td></td>
        <td></td>
        
        </tr>

        <tr>
        <td>3</td>
        <td>Total no of Student having ATKT </td>
        <td><?php echo $atkt1  ?></td>
        <td><?php echo round($atkt_per1,2)  ?></td>
        <td><?php echo $catkt  ?></td>
        <td><?php echo round($catkt_per,2)  ?></td>
        <td><?php echo $aatkt  ?></td>
        <td><?php echo round($aatkt_per,2)  ?></td>
        <td><?php echo $batkt  ?></td>
        <td><?php echo round($batkt_per,2)  ?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>4</td>
        <td>Total no of Student passed (CLEAR+ATKT)</td>
        <td><?php echo $clearatkt1  ?></td>
        <td><?php echo round($clearatkt_per1,2)  ?></td>
        <td><?php echo $cclearatkt  ?></td>
        <td><?php echo round($cclearatkt_per,2)  ?></td>
        <td><?php echo $aclearatkt  ?></td>
        <td><?php echo round($aclearatkt_per,2)  ?></td>
        <td><?php echo $bclearatkt  ?></td>
        <td><?php echo round($bclearatkt_per,2)  ?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>5</td>
    <td>Total no of Student with Distinction </td>
    <td><?php echo $dist  ?></td>
        <td><?php echo round( $dist_per,2) ?></td>
        <td><?php echo $cdist  ?></td>
        <td><?php echo round($cdist_per,2) ?></td>
        <td><?php echo $adist  ?></td>
        <td><?php echo round( $adist_per,2) ?></td>
        <td><?php echo $bdist  ?></td>
        <td><?php echo round($bdist_per,2) ?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>6</td>
    <td>Total no of Student with FIRST Class </td>
    <td><?php echo $first   ?> </td>
        <td><?php  echo round($first_per,2)  ?></td>
        <td><?php echo $cfirst   ?></td>
        <td><?php  echo round( $cfirst_per,2)  ?></td>
        <td><?php echo $afirst   ?></td>
        <td><?php  echo round($afirst_per,2)  ?></td>
        <td><?php echo $bfirst   ?></td>
        <td><?php  echo round($bfirst_per,2)  ?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>7</td>
        <td>Total no of Student with SECOND Class </td>
        <td><?php echo $second   ?></td>
        <td><?php  echo round( $second_per,2)  ?> </td>
        <td><?php echo $csecond   ?></td>
        <td><?php  echo round($csecond_per,2) ?></td>
        <td><?php echo $asecond   ?></td>
        <td><?php  echo round($asecond_per,2)  ?></td>
        <td><?php echo $bsecond   ?></td>
        <td><?php  echo round($bsecond_per,2)  ?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>8</td>
        <td>Total no of Student with PASS Class </td>
        <td><?php echo $pass   ?></td>
        <td><?php echo round($pass_per ,2) ?></td>
        <td><?php echo $cpass   ?></td>
        <td><?php echo round($cpass_per,2)  ?></td>
        <td><?php echo $apass   ?></td>
        <td><?php echo round($apass_per ,2) ?></td>
        <td><?php echo $bpass   ?></td>
        <td><?php echo round($bpass_per,2)  ?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>9</td>
    <td>Total no of Student FAILED</td>
    <td><?php echo $fail   ?></td>
        <td><?php  echo round($fail_per ,2) ?> </td>
        <td><?php echo $cfail   ?></td>
        <td><?php  echo round($cfail_per,2)  ?></td>
        <td><?php echo $afail   ?></td>
        <td><?php  echo round($afail_per ,2) ?></td>
        <td><?php echo $bfail   ?></td>
        <td><?php  echo round($bfail_per,2)  ?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>10</td>
    <td>Total no of Student with LSP</td>
    <td><?php echo "-"; ?></td>
        <td><?php echo "-"; ?></td>
        <td><?php echo "-"; ?></td>
        <td><?php echo "-"; ?></td>
        <td><?php echo "-"; ?></td>
        <td><?php echo "-"; ?></td>
        <td><?php echo "-"; ?></td>
        <td><?php echo "-"; ?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>11</td>
        <td>Total no of Student Eligible for admission to next year </td>
        <td><?php echo $eligible  ?></td>
        <td><?php echo round($eligible_per,2)  ?></td>
        <td><?php echo $celigible  ?></td>
        <td><?php echo round($celigible_per,2)  ?></td>
        <td><?php echo $aeligible  ?></td>
        <td><?php echo round($aeligible_per,2)  ?></td>
        <td><?php echo $beligible  ?></td>
        <td><?php echo round($beligible_per,2)  ?></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
<br><br>
</div>
<button onclick="printContent('div1')" class="btn"><h3><b>Print</b></h3></button>