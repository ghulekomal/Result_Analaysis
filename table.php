
<table align="center" width="90%" class="table-bordered table-condensed">
    <tr height="20">
        <td><b>SRES K.B.P POLYTECHNIC KOPARGAON.</b></td>
        <td><b>MAHARASHTRA STATE BOARD OF TECHNICAL BOARD OF EDUCATION</b></td>
        <td><b>D-8</b></td>
    </tr>
    <tr height="10">
        <td>ACAD/F/</td>
        <td colspan="2">Analysis of Term-End Examination Result</td>
    </tr>
    <tr height="10">
        <td>REV=    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date=</td>
        <td>Examination: <?php   $staff=mysql_query("select year2 from year ");
    $rowst=mysql_fetch_array($staff);
    echo $rowst["year2"];      ?></td>
    </tr>
    <tr height="10">
        <td>Course:Information Technology </td>
        <td>Semester: <?php
if ($_GET["sem"]==1) 
    echo "First Semester";
if ($_GET["sem"]==2) 
    echo "Second Semester";
if ($_GET["sem"]==3) 
    echo "Third Semester";
if ($_GET["sem"]==4) 
    echo "Fourth Semester";
if ($_GET["sem"]==5) 
    echo "Fifth Semester";
if ($_GET["sem"]==6) 
    echo "Sixth Semester";

         ?></td>
        <td>Division: </td>
    </tr>
</table>
