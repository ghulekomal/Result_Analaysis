<div id="div1">
<?php
include("/table.php");


$a=mysql_query("SELECT * FROM `ty` ");
while($rw=mysql_fetch_array($a)){
$sum=0;
if($rw["osy_th"]==140 )
{
 $sum+=40;
}
else{   
$sum+=$rw["osy_th"];
}
$sum+=$rw["osy_tw"];

if($rw["sen_th"]==120){
 $sum+=0;
}
else if($rw["sen_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["sen_th"];
}

if($rw["ifs_th"]==120) {
 $sum+=0;
}
else if($rw["ifs_th"]==140) {
 $sum+=40;
}
else{
$sum+=$rw["ifs_th"];
}
$sum+=$rw["ifs_tw"];


if($rw["jpr_th"]==120){
 $sum==0;
}
if($rw["jpr_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["jpr_th"];
}
$sum+=$rw["jpr_pr"];
$sum+=$rw["jpr_tw"];

if($rw["cte_th"]==140)
{
 $sum+=40;
}
else
{
$sum+=$rw["cte_th"];
}
$sum+=$rw["cte_pr"];
$sum+=$rw["cte_tw"];

$sum+=$rw["bsc_or"];
$sum+=$rw["bsc_tw"];

$sum+=$rw["nma_pr"];
$sum+=$rw["nma_tw"];
$sum+=$rw["pp"];
$sum+=$rw["sw"];
$upd=mysql_query("update ty set sum='".$sum."' where roll_no=".$rw["roll_no"]);

$avg=$sum/9;
$upd=mysql_query("update ty set avg='".$avg."' where roll_no=".$rw["roll_no"]);




}

//$atkt=1;
$cnt=mysql_query("SELECT * FROM `ty` ");
while($row=mysql_fetch_array($cnt)){
    $atkt=0;
if($row["osy_th"]<40 and $row["osy_th"]!=140 or $row["osy_th"]==120)
  $atkt+=1;
if($row["osy_tw"]<0 and $row["osy_tw"]!=140 or $row["osy_tw"]==120)
    $atkt+=1;
if($row["sen_th"]<40 and $row["sen_th"]!=140 or $row["sen_th"]==120)
    $atkt+=1;
if($row["ifs_th"]<40 and $row["ifs_th"]!=140 or $row["ifs_th"]==120)
    $atkt+=1;
if($row["ifs_tw"]<0 and $row["ifs_tw"]!=140 or $row["ifs_tw"]==120)
    $atkt+=1;
if($row["jpr_th"]<40 and $row["jpr_th"]!=140 or $row["jpr_th"]==120)
    $atkt+=1;
if($row["jpr_pr"]<0 and $row["jpr_pr"]!=140 or $row["jpr_pr"]==120)
    $atkt+=1;
if($row["jpr_tw"]<0 and $row["jpr_tw"]!=140 or $row["jpr_tw"]==120)
    $atkt+=1;
if($row["cte_th"]<40 and $row["cte_th"]!=140 or $row["cte_th"]==120)
    $atkt+=1;
if($row["cte_pr"]<0 and $row["cte_pr"]!=140 or $row["cte_pr"]==120)
    $atkt+=1;
if($row["cte_tw"]<0 and $row["cte_tw"]!=140 or $row["cte_tw"]==120)
    $atkt+=1;
if($row["bsc_or"]<0 and $row["bsc_or"]!=140 or $row["bsc_or"]==120)
    $atkt+=1;
if($row["bsc_tw"]<0 and $row["bsc_tw"]!=140 or $row["bsc_tw"]==120)
    $atkt+=1;
if($row["nma_pr"]<0 and $row["nma_pr"]!=140 or $row["nma_pr"]==120)
    $atkt+=1;
if($row["nma_tw"]<0 and $row["nma_tw"]!=140 or $row["nma_tw"]==120)
    $atkt+=1;
if($row["pp"]<0 and $row["pp"]!=140 or $row["pp"]==120)
    $atkt+=1;
if($row["sw"]<0 and $row["sw"]!=140 or $row["sw"]==120)
    $atkt+=1;

$upd=mysql_query("update ty set count='".$atkt."' where roll_no=".$row["roll_no"]);
}
?>




<?php
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$total_student1=($total_student/$total_student)*100;

//appeared

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty where avg>120");
$resm=mysql_fetch_array($sqm);
$apear=$resm["clear"];
$appeark=( $total_student-$apear);
$appear_per=($appeark/ $total_student)*100;



//clear
$sqm=mysql_query("SELECT count(`seat_no`) as clear from ty where count=0 ");
$resm=mysql_fetch_array($sqm);
$clear=$resm["clear"];
$clear_per=($clear/ $appeark)*100;

//ATKT
$sqm=mysql_query("SELECT count(enrollment_no) AS clear from ty where count=1 OR count=2");
$resm=mysql_fetch_array($sqm);
$atkt1=$resm["clear"];


$sq6=mysql_query("SELECT count(`seat_no`) AS pass from ty where avg>120");
$res6=mysql_fetch_array($sq6);
$atkt2=$res6["pass"];

$atkt3=$atkt1-$atkt2;
$atkt_per=($atkt3/ $appeark)*100;

//clear+atkt
$clearatkt=($clear+$atkt);
$clearatkt_per=($clearatkt/$appeark)*100;

// Distinction
$sq2=mysql_query("select count(`enrollment_no`) as dist from ty where avg>74.99 AND count=0");
$res2=mysql_fetch_array($sq2);
$dist=$res2["dist"];
$dist_per=($dist/$appeark)*100;

// first class with Dist
$sq3=mysql_query("select count(`enrollment_no`) as first from ty where avg>59.99  AND avg<75 AND count=0");
$res3=mysql_fetch_array($sq3);
$first=$res3["first"];
$first_per=($first/ $appeark)*100;

// Second class with Dist
$sq4=mysql_query("select count(`enrollment_no`) as second from ty where avg>49.99 and avg<59.99  AND count=0" );
$res4=mysql_fetch_array($sq4);
$second=$res4["second"];
$second_per=($second/$appeark)*100;

// pass class with Dist
$sql1=mysql_query("SELECT count( `seat_no` ) AS total_stud
FROM `sy1` ");
$res=mysql_fetch_array($sql1);
$total_student=$res["total_stud"];
$sql3=mysql_query("select count(`seat_no`) As clear from ty  where avg>39.99 and avg<49 AND count=0");
$res3=mysql_fetch_array($sql3);
$pass=$res3["clear"];
$pass_per=($pass/ $appeark)*100;


// fail class with Dist
$sq6=mysql_query("select count(enrollment_no) AS pass from ty where count=3 OR count>3");
$res6=mysql_fetch_array($sq6);
$fail1=$res6["pass"];

$sq6=mysql_query("SELECT count(`seat_no`) AS pass from cty where avg>360");
$res6=mysql_fetch_array($sq6);
$fail2=$res6["pass"];

$fail=$fail1+$fail2;
$fail_per=($fail/$appeark)*100;


//eligible for next year
$sqm=mysql_query("SELECT count(`seat_no`) as clear from sy1 where count<5");
$resm=mysql_fetch_array($sqm);
$eligible=$resm["clear"];
$eligible_per=($eligible/$appear)*100;

?>




<?php
$a1=mysql_query("SELECT * FROM `cty` ");
while($rw=mysql_fetch_array($a1)){
$sum=0;
if($rw["osy_th"]==140){
 $sum+=40;
}
else{   
$sum+=$rw["osy_th"];
}
$sum+=$rw["osy_tw"];


if($rw["sen_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["sen_th"];
}


if($rw["ifs_th"]==140) {
 $sum+=40;
}
else{
$sum+=$rw["ifs_th"];
}
$sum+=$rw["ifs_tw"];

if($rw["jpr_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["jpr_th"];
}
$sum+=$rw["jpr_pr"];
$sum+=$rw["jpr_tw"];

if($rw["cte_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["cte_th"];
}
$sum+=$rw["cte_pr"];
$sum+=$rw["cte_tw"];

$sum+=$rw["bsc_or"];
$sum+=$rw["bsc_tw"];

$sum+=$rw["nma_pr"];
$sum+=$rw["nma_tw"];
$sum+=$rw["pp"];
$sum+=$rw["sw"];

$upd=mysql_query("update cty set sum='".$sum."' where roll_no=".$rw["roll_no"]);

$avg=$sum/9;
$upd=mysql_query("update cty set avg='".$avg."' where roll_no=".$rw["roll_no"]);
}

//$atkt=1;
$cnt1=mysql_query("SELECT * FROM `cty` ");
while($row=mysql_fetch_array($cnt1)){
    $atkt=0;
if($row["osy_th"]<40 and $row["osy_th"]!=140 or $row["osy_th"]==120)
  $atkt+=1;
if($row["osy_tw"]<0 and $row["osy_tw"]!=140 or $row["osy_tw"]==120)
    $atkt+=1;
if($row["sen_th"]<40 and $row["sen_th"]!=140 or $row["sen_th"]==120)
    $atkt+=1;
if($row["ifs_th"]<40 and $row["ifs_th"]!=140 or $row["ifs_th"]==120)
    $atkt+=1;
if($row["ifs_tw"]<0 and $row["ifs_tw"]!=140 or $row["ifs_tw"]==120)
    $atkt+=1;
if($row["jpr_th"]<40 and $row["jpr_th"]!=140 or $row["jpr_th"]==120)
    $atkt+=1;
if($row["jpr_pr"]<0 and $row["jpr_pr"]!=140 or $row["jpr_pr"]==120)
    $atkt+=1;
if($row["jpr_tw"]<0 and $row["jpr_tw"]!=140 or $row["jpr_tw"]==120)
    $atkt+=1;
if($row["cte_th"]<40 and $row["cte_th"]!=140 or $row["cte_th"]==120)
    $atkt+=1;
if($row["cte_pr"]<0 and $row["cte_pr"]!=140 or $row["cte_pr"]==120)
    $atkt+=1;
if($row["cte_tw"]<0 and $row["cte_tw"]!=140 or $row["cte_tw"]==120)
    $atkt+=1;
if($row["bsc_or"]<0 and $row["bsc_or"]!=140 or $row["bsc_or"]==120)
    $atkt+=1;
if($row["bsc_tw"]<0 and $row["bsc_tw"]!=140 or $row["bsc_tw"]==120)
    $atkt+=1;
if($row["nma_pr"]<0 and $row["nma_pr"]!=140 or $row["nma_pr"]==120)
    $atkt+=1;
if($row["nma_tw"]<0 and $row["nma_tw"]!=140 or $row["nma_tw"]==120)
    $atkt+=1;
if($row["pp"]<0 and $row["pp"]!=140 or $row["pp"]==120)
    $atkt+=1;
if($row["sw"]<0 and $row["sw"]!=140 or $row["sw"]==120)
    $atkt+=1;

$upd=mysql_query("update cty set count='".$atkt."' where roll_no=".$row["roll_no"]);
}
?>

<?php
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `cty` ");
$res=mysql_fetch_array($sql1);
$ctotal_student=$res["total_stud"];
$ctotal_student1=($ctotal_student/$ctotal_student)*100;

//appeared
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `cty` ");
$res=mysql_fetch_array($sql1);
$ctotal_student=$res["total_stud"];

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from cty where avg>100");
$resm=mysql_fetch_array($sqm);
$appear=$resm["clear"];
$cappear=( $ctotal_student-$appear);
$cappear_per=($cappear/ $ctotal_student)*100;

//clear
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from cty where count=0 ");
$resm=mysql_fetch_array($sqm);
$cclear=$resm["clear"];
$cclear_per=($cclear/ $cappear)*100;

//ATKT
$sqm=mysql_query("select count(`enrollment_no`) AS clear from cty where count=1 OR count=2");
$resm=mysql_fetch_array($sqm);
$catkt1=$resm["clear"];

$sq6=mysql_query("SELECT count(`seat_no`) AS pass from cty where avg>120");
$res6=mysql_fetch_array($sq6);
$catkt2=$res6["pass"];

$catkt=$catkt1-$catkt2;
$catkt_per=($catkt/ $cappear)*100;
//clear+atkt
$cclearatkt=($cclear+$catkt);
$cclearatkt_per=($cclearatkt/$cappear)*100;

// Distinction
$sq2=mysql_query("select count(`enrollment_no`) as dist from cty where avg>74.99 AND count=0 AND avg<100");
$res2=mysql_fetch_array($sq2);
$cdist=$res2["dist"];
$cdist_per=($cdist/$cappear)*100;

// first class with Dist
$sq3=mysql_query("select count(`enrollment_no`) as first from cty where avg>59.99  AND avg<75 AND count=0");
$res3=mysql_fetch_array($sq3);
$cfirst=$res3["first"];
$cfirst_per=($cfirst/ $cappear)*100;

// Second class with Dist
$sq4=mysql_query("select count(`enrollment_no`) as second from cty where avg>49.99 and avg<59.99  AND count=0" );
$res4=mysql_fetch_array($sq4);
$csecond=$res4["second"];
$csecond_per=($csecond/ $cappear)*100;

// pass class with Dist
$sql3=mysql_query("SELECT count(`seat_no`) As clear from cty  where avg>39.99 and avg<49  AND count=0");
$res3=mysql_fetch_array($sql3);
$cpass=$res3["clear"];
$cpass_per=($cpass/ $cappear)*100;


// fail class with Dist
$sq6=mysql_query("SELECT count(`seat_no`) AS pass from cty where count>=3");
$res6=mysql_fetch_array($sq6);
$cfail1=$res6["pass"];

$sq6=mysql_query("SELECT count(`seat_no`) AS pass from cty where avg>120");
$res6=mysql_fetch_array($sq6);
$cfail2=$res6["pass"];
$cfail=$cfail1+$cfail2;
$cfail_per=($cfail/$appeark)*100;
?>

<?php
$a2=mysql_query("SELECT * FROM `ty1` ");
while($rw=mysql_fetch_array($a2)){
$sum=0;
if($rw["man_th"]==140){
 $sum+=20;
}
else{   
$sum+=$rw["man_th"];
}

if($rw["mco_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["mco_th"];
}
$sum+=$rw["mco_pr"];
$sum+=$rw["mco_tw"];

if($rw["ajp_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["ajp_th"];
}
$sum+=$rw["ajp_pr"];
$sum+=$rw["ajp_tw"];

if($rw["oom_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["oom_th"];}
$sum+=$rw["oom_tw"];

$sum+=$rw["ste_pr"];
$sum+=$rw["ste_tw"];

$sum+=$rw["jpr_or"];
$sum+=$rw["jpr_tw"];

$sum+=$rw["ede_tw"];
$sum+=$rw["sw"];


$upd=mysql_query("update ty1 set sum='".$sum."' where roll_no=".$rw["roll_no"]);

$avg=$sum/8;
$upd=mysql_query("update ty1 set avg='".$avg."' where roll_no=".$rw["roll_no"]);
}



$cnt2=mysql_query("SELECT * FROM `ty1` ");
while($row=mysql_fetch_array($cnt2)){
    $atkt=0;
if($row["man_th"]<19 and $row["man_th"]!=140 or $row["man_th"]==120)
  $atkt+=1;
if($row["mco_th"]<40 and $row["mco_th"]!=140 or $row["mco_th"]==120)
    $atkt+=1;
if($row["mco_pr"]<0 and $row["mco_pr"]!=140 or $row["mco_pr"]==120)
    $atkt+=1;
if($row["mco_tw"]<0 and $row["mco_tw"]!=140 or $row["mco_tw"]==120)
    $atkt+=1;
if($row["ajp_th"]<40  and $row["ajp_th"]!=140 or $row["ajp_th"]==120)
    $atkt+=1;
if($row["ajp_pr"]<19  and $row["ajp_pr"]!=140 or $row["ajp_pr"]==120)
    $atkt+=1;
if($row["ajp_tw"]<0 and $row["ajp_tw"]!=140 or $row["ajp_tw"]==120 )
    $atkt+=1;
if($row["oom_th"]<40 and $row["oom_th"]!=140 or $row["oom_th"]==120 )
    $atkt+=1;
if($row["oom_tw"]<0 and $row["oom_tw"]!=140 or $row["oom_tw"]==120 )
    $atkt+=1;
if($row["ste_pr"]<0 and $row["ste_pr"]!=140 or $row["ste_pr"]==120 )
    $atkt+=1;
if($row["ste_tw"]<0 and $row["ste_tw"]!=140 or $row["ste_tw"]==120 )
    $atkt+=1;
if($row["jpr_or"]<0 and $row["jpr_or"]!=140 or $row["jpr_or"]==120 )
    $atkt+=1;
if($row["jpr_tw"]<0  and $row["jpr_tw"]!=140 or $row["jpr_tw"]==120)
    $atkt+=1;
if($row["ede_tw"]<0 and $row["ede_tw"]!=140 or $row["ede_tw"]==120)
    $atkt+=1;
if($row["sw"]<0  and $row["sw"]!=140 or $row["sw"]==120)
    $atkt+=1;

$upd=mysql_query("update ty1 set count='".$atkt."' where roll_no=".$row["roll_no"]);
}

?>

<?php

$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `ty1` ");
$res=mysql_fetch_array($sql1);
$atotal_student=$res["total_stud"];
$atotal_student1=($atotal_student/$atotal_student)*100;

//appeared

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from ty1 where avg=120");
$resm=mysql_fetch_array($sqm);
$apear2=$resm["clear"];
$aappear=( $atotal_student-$apear2);
$aappear_per=($aappear/ $aappear)*100;

//clear
$sqm=mysql_query("SELECT count(`seat_no`) as clear from ty1 where count=0 ");
$resm=mysql_fetch_array($sqm);
$aclear=$resm["clear"];
$aclear_per=($aclear/ $aappear)*100;

//ATKT
$sqm=mysql_query("select count(enrollment_no) AS clear from ty1 where count=1 OR count=2");
$resm=mysql_fetch_array($sqm);
$aatkt=$resm["clear"];
$aatkt_per=($aatkt/ $aappear)*100;

//clear+atkt
$aclearatkt=($aclear+$aatkt);
$aclearatkt_per=($aclearatkt/$aappear)*100;

// Distinction
$sq2=mysql_query("select count(`enrollment_no`) as dist from ty1 where avg>74.99 AND count=0");
$res2=mysql_fetch_array($sq2);
$adist=$res2["dist"];
$adist_per=($adist/$aappear)*100;

// first class with Dist
$sq3=mysql_query("select count(`enrollment_no`) as first from ty1 where avg>59.99  AND avg<75 AND count=0");
$res3=mysql_fetch_array($sq3);
$afirst=$res3["first"];
$afirst_per=($afirst/ $aappear)*100;

// Second class with Dist
$sq4=mysql_query("select count(`enrollment_no`) as second from ty1 where avg>49.99 and avg<60 AND count=0" );
$res4=mysql_fetch_array($sq4);
$asecond=$res4["second"];
$asecond_per=($asecond/ $aappear)*100;

// pass class with Dist

$sql3=mysql_query("select count(`seat_no`) As clear from ty1  where avg>39.99 and avg<50 AND count=0");
$res3=mysql_fetch_array($sql3);
$apass=$res3["clear"];
$apass_per=($apass/ $aappear)*100;


// fail class with Dist
$sq6=mysql_query("select count(enrollment_no) AS pass from ty1 where count>1");
$res6=mysql_fetch_array($sq6);
$afail=$res6["pass"];
$afail_per=($afail/$aappear)*100;

//eligible//
$sq6=mysql_query("select count(enrollment_no) AS pass from ty1 where count<4");
$res6=mysql_fetch_array($sq6);
$aeligible=$res6["pass"];
$aeligible_per=($aeligible/$aappear)*100;

?>

<?php
$a3=mysql_query("SELECT * FROM `cty1` ");
while($rw=mysql_fetch_array($a3)){
$sum=0;
if($rw["man_th"]==140){
 $sum+=20;
}
else{   
$sum+=$rw["man_th"];
}

if($rw["mco_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["mco_th"];
}
$sum+=$rw["mco_pr"];
$sum+=$rw["mco_tw"];

if($rw["ajp_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["ajp_th"];
}
$sum+=$rw["ajp_pr"];
$sum+=$rw["ajp_tw"];

if($rw["oom_th"]==140){
 $sum+=40;
}
else{
$sum+=$rw["oom_th"];}
$sum+=$rw["oom_tw"];

$sum+=$rw["ste_pr"];
$sum+=$rw["ste_tw"];

$sum+=$rw["jpr_or"];
$sum+=$rw["jpr_tw"];

$sum+=$rw["ede_tw"];
$sum+=$rw["sw"];


$upd=mysql_query("update cty1 set sum='".$sum."' where roll_no=".$rw["roll_no"]);

$avg=$sum/8;
$upd=mysql_query("update cty1 set avg='".$avg."' where roll_no=".$rw["roll_no"]);
}



$cnt3=mysql_query("SELECT * FROM `cty1` ");
while($row=mysql_fetch_array($cnt3)){
    $atkt=0;
if($row["man_th"]<20 and $row["man_th"]!=140 or $row["man_th"]==120)
  $atkt+=1;
if($row["mco_th"]<40 and $row["mco_th"]!=140 or $row["mco_th"]==120)
    $atkt+=1;
if($row["mco_pr"]<0 and $row["mco_pr"]!=140 or $row["mco_pr"]==120)
    $atkt+=1;
if($row["mco_tw"]<0 and $row["mco_tw"]!=140 or $row["mco_tw"]==120)
    $atkt+=1;
if($row["ajp_th"]<40 and $row["ajp_th"]!=140 or $row["ajp_th"]==120)
    $atkt+=1;
if($row["ajp_pr"]<19 and $row["ajp_pr"]!=140 or $row["ajp_pr"]==120)
    $atkt+=1;
if($row["ajp_tw"]<0 and $row["ajp_tw"]!=140 or $row["ajp_tw"]==120)
    $atkt+=1;
if($row["oom_th"]<40 and $row["oom_th"]!=140 or $row["oom_th"]==120)
    $atkt+=1;
if($row["oom_tw"]<0 and $row["oom_tw"]!=140 or $row["oom_tw"]==120)
    $atkt+=1;
if($row["ste_pr"]<0 and $row["ste_pr"]!=140 or $row["ste_pr"]==120)
    $atkt+=1;
if($row["ste_tw"]<0 and $row["ste_tw"]!=140 or $row["ste_tw"]==120)
    $atkt+=1;
if($row["jpr_or"]<0 and $row["jpr_or"]!=140 or $row["jpr_or"]==120)
    $atkt+=1;
if($row["jpr_tw"]<0 and $row["jpr_tw"]!=140 or $row["jpr_tw"]==120)
    $atkt+=1;
if($row["ede_tw"]<0 and $row["ede_tw"]!=140 or $row["ede_tw"]==120)
    $atkt+=1;
if($row["sw"]<0 and $row["sw"]!=140 or $row["sw"]==120)
    $atkt+=1;

$upd=mysql_query("update cty1 set count='".$atkt."' where roll_no=".$row["roll_no"]);
}
?>


<?php
$sql1=mysql_query("SELECT count( `enrollment_no` ) AS total_stud
FROM `cty1` ");
$res=mysql_fetch_array($sql1);
$btotal_student=$res["total_stud"];
$btotal_student1=($btotal_student/$btotal_student)*100;

//appeared
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from cty1 where avg>100");
$resm=mysql_fetch_array($sqm);
$apear3=$resm["clear"];
$bappear=( $btotal_student-$apear3);
$bappear_per=($bappear/ $bappear)*100;

//clear
$sqm=mysql_query("SELECT count(`seat_no`) as clear from cty1 where count=0 ");
$resm=mysql_fetch_array($sqm);
$bclear=$resm["clear"];
$bclear_per=($bclear/ $bappear)*100;

//ATKT
$sqm=mysql_query("select count(enrollment_no) AS clear from cty1 where count=1 OR count=2");
$resm=mysql_fetch_array($sqm);
$abatkt=$resm["clear"];
$batkt_per=($batkt/ $bappear)*100;

//clear+atkt
$bclearatkt=($bclear+$batkt);
$bclearatkt_per=($bclearatkt/$bappear)*100;

// Distinction
$sq2=mysql_query("select count(`enrollment_no`) as dist from cty1 where avg>74.99 AND count=0 AND avg<100");
$res2=mysql_fetch_array($sq2);
$bdist=$res2["dist"];
$bdist_per=($bdist/$bappear)*100;

// first class with Dist
$sq3=mysql_query("select count(`enrollment_no`) as first from cty1 where avg>59.99  AND avg<74.99 AND count=0");
$res3=mysql_fetch_array($sq3);
$bfirst=$res3["first"];
$bfirst_per=($bfirst/ $bappear)*100;

// Second class with Dist
$sq4=mysql_query("select count(`enrollment_no`) as second from cty1 where avg>49.99 and avg<60 AND count=0" );
$res4=mysql_fetch_array($sq4);
$bsecond=$res4["second"];
$bsecond_per=($bsecond/ $bappear)*100;

// pass class with Dist
$sql3=mysql_query("select count(`seat_no`) As clear from cty1  where avg>39.99 and avg<50 AND count=0");
$res3=mysql_fetch_array($sql3);
$bpass=$res3["clear"];
$bpass_per=($bpass/ $bappear)*100;


// fail class with Dist
$sq6=mysql_query("select count(enrollment_no) AS pass from cty1 where count>1");
$res6=mysql_fetch_array($sq6);
$bfail=$res6["pass"];
$bfail_per=($bfail/$bappear)*100;

//eligible//
$sq6=mysql_query("select count(enrollment_no) AS pass from ty1 where count<4");
$res6=mysql_fetch_array($sq6);
$beligible=$res6["pass"];
$beligible_per=($beligible/$bappear)*100;
?>

<h3 align="center">SRES' S. K.B.P. POLYTECHNIC, KOPARGAON</h3>
<table border="1" align="center">
<tr>
        <td></td>
        <td></td>
        <td colspan="2">Winter : (Last Year)</td>
        <td colspan="2">Winter :(Current Year)</td>
        <td colspan="2">Summer :(Last Year)</td>
        <td colspan="2">Summer : (Current Year)</td>
        <td></td>
        <td colspan="2"> Year End Result</td>
</tr>
<tr>
        <td></td>
        <td></td>
        <td colspan="2">Sem 5</td>
        <td colspan="2">Sem 5</td>
        <td colspan="2">Sem 6</td>
        <td colspan="2">Sem 6</td>
        <td >Backlok Status</td>
        <td colspan="2"> Year 1 2 3</td>
</tr>
<tr>
        <td>srno</td>
         <td>particulars</td>
        <td>stud</td>
        <td>per</td>
        <td>stud</td>
        <td>per</td>
        <td>stud</td>
         <td>per</td>
        <td>stud</td>
        <td>per</td>
        <td>Sem-1\3\5</td>
        <td>stud</td>
        <td>per</td>
</tr>
         <tr>
        <td>1</td>
        <td>Total no of Student APPEARED</td>
        <td><?php echo $appear ?></td>
        <td><?php echo round($appear_per ,2)?></td>
        <td><?php echo $cappear ?></td>
        <td><?php echo round($cappear_per,2) ?></td>
        <td><?php echo $aappear ?></td>
        <td><?php echo round($aappear_per,2) ?></td>
        <td><?php echo $bappear ?></td>
        <td><?php echo round($bappear_per,2) ?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>2</td>
        <td>Total no of Student CLEAR Pass </td>
        <td> <?php echo $clear  ?></td>
        <td> <?php  echo round($clear_per,2) ?> </td>
        <td><?php echo $cclear  ?></td>
        <td><?php  echo round($cclear_per,2) ?></td>
        <td><?php echo $aclear  ?></td>
        <td><?php  echo round($aclear_per,2) ?></td>
        <td><?php echo $bclear  ?></td>
        <td><?php  echo round($bclear_per ,2)?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>3</td>
        <td>Total no of Student having ATKT </td>
        <td><?php echo $atkt  ?></td>
        <td><?php echo round($atkt_per ,2) ?></td>
        <td><?php echo $catkt  ?></td>
        <td><?php echo round($catkt_per ,2) ?></td>
        <td><?php echo $aatkt  ?></td>
        <td><?php echo round($aatkt_per ,2) ?></td>
        <td><?php echo $batkt  ?></td>
        <td><?php echo round($batkt_per,2)  ?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>4</td>
        <td>Total no of Student passed (CLEAR+ATKT)</td>
        <td><?php echo $clearatkt  ?></td>
        <td><?php echo round($clearatkt_per ,2) ?></td>
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
        <td><?php echo round($dist_per ,2)?></td>
        <td><?php echo $cdist  ?></td>
        <td><?php echo round($cdist_per,2) ?></td>
        <td><?php echo $adist  ?></td>
        <td><?php echo round($adist_per,2) ?></td>
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
        <td><?php  echo round($cfirst_per,2)  ?></td>
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
        <td><?php  echo round($second_per ,2) ?> </td>
        <td><?php echo $csecond   ?></td>
        <td><?php  echo round($csecond_per ,2) ?></td>
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
        <td><?php echo round($apass_per,2)  ?></td>
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
        <td><?php  echo round($fail_per,2)  ?> </td>
        <td><?php echo $cfail   ?></td>
        <td><?php  echo round($cfail_per,2)  ?></td>
        <td><?php echo $afail   ?></td>
        <td><?php  echo round($afail_per,2)  ?></td>
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
        <td><?php echo round($eligible_per ,2) ?></td>
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
</div>
<button onclick="printContent('div1')" class="btn"><h3><b>Print</b></h3></button>
<br><br>