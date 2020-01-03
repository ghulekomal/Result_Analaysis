<div class="widget-header">
<h3>Report</h3>
</div>
<br><br>
<a href="index.php?reg=report&&sem=1" class="btn btn-primary">Sem1</a>
<a href="index.php?reg=report&&sem=2" class="btn btn-info">Sem2</a>
<a href="index.php?reg=report&&sem=3" class="btn btn-success">Sem3</a>
<a href="index.php?reg=report&&sem=4" class="btn btn-primary">Sem4</a>
<a href="index.php?reg=report&&sem=5" class="btn btn-danger">Sem5</a>
<a href="index.php?reg=report&&sem=6" class="btn btn-info">Sem6</a>
<br>
<br><br>

<?php 
if ($_GET["sem"]==1)
{	include("/sem1/sheet5.php");
include("/sem1/sheet1.php");
	include("/sem1/sheet2.php");
	include("/sem1/sheet3.php");
	include("/sem1/sheet4.php");
}

if ($_GET["sem"]==2)
{	include("/sem2/sheet5.php");
include("/sem2/sheet1.php");
	include("/sem2/sheet2.php");
	include("/sem2/sheet3.php");
	include("/sem2/sheet4.php");
}

if ($_GET["sem"]==3)
{	include("/sem3/sheet0.php");
	include("/sem3/sheet1.php");
	include("/sem3/sheet2.php");
	include("/sem3/sheet3.php");
	include("/sem3/sheet4.php");
}

if ($_GET["sem"]==4)
{	include("/sem4/sheet5.php");
include("/sem4/sheet1.php");
	include("/sem4/sheet2.php");
	include("/sem4/sheet3.php");
	include("/sem4/sheet4.php");
}

if ($_GET["sem"]==5)
{	include("/sem5/sheet5.php");
include("/sem5/sheet1.php");
	include("/sem5/sheet2.php");
	include("/sem5/sheet3.php");
	include("/sem5/sheet4.php");
}

if ($_GET["sem"]==6)
{	include("/sem6/sheet5.php");
include("/sem6/sheet1.php");
	include("/sem6/sheet2.php");
	include("/sem6/sheet3.php");
	include("/sem6/sheet4.php");
}
 ?>