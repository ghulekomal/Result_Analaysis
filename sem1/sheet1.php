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
$appear1=$resm["clear"];
$apear=( $total_student-$appear1);
$appear_per=($apear/ $total_student)*100;

//clear
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy where count=0 ");
$resm=mysql_fetch_array($sqm);
$clear=$resm["clear"];
$clear_per=($clear/ $apear)*100;


//ATKT
$sqm=mysql_query("select count(`enrollment_no`) AS clear from fy where count=1 OR count=2");
$resm=mysql_fetch_array($sqm);
$atkt1 =$resm["clear"];
$atkt_per1=($atkt1/ $apear)*100;

//clear+atkt
$clearatkt=($clear+$atkt1);
$clearatkt_per=($clearatkt/$apear)*100;

// Distinction
$sq2=mysql_query("select count(`enrollment_no`) as dist from fy where avg>74.99 AND count=0");
$res2=mysql_fetch_array($sq2);
$dist=$res2["dist"];
$dist_per=($dist/$apear)*100;

// first class with Dist
$sq3=mysql_query("select count(`enrollment_no`) as first from fy where avg>59.99  AND avg<74.99  AND count=0");
$res3=mysql_fetch_array($sq3);
$first=$res3["first"];
$first_per=($first/ $apear)*100;

// Second class with Dist
$sq4=mysql_query("select count(`enrollment_no`) as second from fy where avg>49.99 and avg<60  AND count=0" );
$res4=mysql_fetch_array($sq4);
$second=$res4["second"];
$second_per=($second/$apear)*100;

// pass class with Dist
$sql3=mysql_query("select count(`seat_no`) As clear from fy  where avg>39.99 and avg<49  AND count=0");
$res3=mysql_fetch_array($sql3);
$pass=$res3["clear"];
$pass_per=($pass/ $apear)*100;


// fail class with Dist
$sq6=mysql_query("SELECT count(`seat_no`) AS pass from fy where count=3 OR count>3");
$res6=mysql_fetch_array($sq6);
$fail=$res6["pass"];
$fail_per=($fail/$apear)*100;

//eligible for next year
$sqm=mysql_query("SELECT count(`seat_no`) as clear from fy where count>=0 OR count<4");
$resm=mysql_fetch_array($sqm);
$eligible=$resm["clear"];
$eligible_per=($eligible/$apear)*100;
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
$cappear_per=($cappear/ $ctotal_student)*100;
//echo $cappear;

//clear
$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from cfy where count=0 ");
$resm=mysql_fetch_array($sqm);
$cclear=$resm["clear"];
$cclear_per=($cclear/ $cappear)*100;
echo $cclear ;

$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy where count=0 ");
$resm=mysql_fetch_array($sqm);
$clear=$resm["clear"];
$clear_per=($clear/ $apear)*100;


$sqm=mysql_query("SELECT count(`enrollment_no`) as clear from fy where avg=120");
$resm=mysql_fetch_array($sqm);
$appear1=$resm["clear"];
$apear=( $total_student-$appear1);
$appear_per=($apear/ $total_student)*100;


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
$csecond_per=($csecond/ $cappear)*100;

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
$sqm=mysql_query("SELECT count(`seat_no`) as clear from cfy where count<5");
$resm=mysql_fetch_array($sqm);
$celigible=$resm["clear"];
$celigible_per=($celigible/$cappear)*100;
?>




<h3 align="center"><font color="blue"><b>SRES' S. K.B.P. POLYTECHNIC, KOPARGAON</b></font> </h3><br><br>
<table border="1" align="center" width="80%">
<tr>
        <td></td>
        <td></td>
        <td colspan="2"><b>Winter :(Last Year)</b></td>
        <td colspan="2"><b>Winter : (Current Year)</b></td>
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
        <td><?php echo $apear; ?></td>
        <td><?php echo round($appear_per,2); ?></td>
        <td><?php echo $cappear; ?></td>
        <td><?php echo round($cappear_per,2); ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>2</td>
        <td>Total no of Student CLEAR Pass </td>
        <td><?php echo $clear;  ?> </td>
        <td> <?php  echo round($clear_per,2); ?> </td>
        <td><?php echo $cclear;  ?></td>
        <td> <?php  echo round($cclear_per,2); ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    
        </tr>

        <tr>
        <td>3</td>
        <td>Total no of Student having ATKT </td>
        <td><?php echo $atkt1  ?></td>
        <td><?php echo round($atkt_per1 ,2);  ?></td>
        <td><?php echo $catkt  ?></td>
        <td><?php echo round($catkt_per,2);  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>4</td>
        <td>Total no of Student passed (CLEAR+ATKT)</td>
    <td><?php echo $clearatkt  ?></td>
        <td><?php echo round($clearatkt_per,2);  ?></td>
        <td><?php echo $cclearatkt  ?></td>
        <td><?php echo round($cclearatkt_per,2);  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>5</td>
    <td>Total no of Student with Distinction </td>
    <td><?php echo $dist  ?></td>
        <td><?php echo round($dist_per,2); ?></td>
        <td><?php echo $cdist  ?></td>
        <td><?php echo round($cdist_per,2); ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>6</td>
    <td>Total no of Student with FIRST Class </td>
    <td> <?php echo $first   ?></td>
        <td><?php  echo round($first_per,2);  ?></td>
        <td><?php echo $cfirst   ?></td>
        <td><?php  echo round($cfirst_per,2);  ?></td>
        <td></td>
        <td> </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>7</td>
        <td>Total no of Student with SECOND Class </td>
        <td> <?php echo $second   ?></td>
        <td> <?php  echo round($second_per,2);  ?></td>
        <td> <?php echo $csecond   ?></td>
        <td><?php  echo round($csecond_per,2);  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>8</td>
        <td>Total no of Student with PASS Class </td>
        <td><?php echo $pass   ?></td>
        <td><?php echo round($pass_per,2);  ?></td>
        <td><?php echo $cpass   ?></td>
        <td><?php echo round($cpass_per,2);  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>9</td>
    <td>Total no of Student FAILED</td>
    <td><?php echo $fail   ?></td>
        <td><?php  echo round($fail_per,2);  ?> </td>
        <td><?php echo $cfail   ?></td>
        <td><?php  echo round($cfail_per,2);  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td>11</td>
        <td>Total no of Student Eligible for admission to next year </td>
        <td><?php echo $eligible  ?></td>
        <td><?php echo round($eligible_per,2);  ?></td>
        <td><?php echo $celigible  ?></td>
        <td><?php echo round($celigible_per,2);  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
</div>
<button onclick="printContent('div1')" class="btn"><h3><b>Print</b></h3></button>
<br><br>