
<?php 	

																													
if(isset($_POST["Import"])){
		echo $filename=$_FILES["file"]["tmp_name"];
		$sem=$_POST["sem"];
		$year=$_POST["year"];
		if($sem==1 and $year="past")
				mysql_query("TRUNCATE `fy`");
		if($sem==2 and $year=="past")
				mysql_query("TRUNCATE `fy1`");
		if($sem==3 and $year=="past")
				mysql_query("TRUNCATE `sy`");
		if($sem==4 and $year=="past")
				mysql_query("TRUNCATE `sy1`");
		if($sem==5 and $year=="past")
				mysql_query("TRUNCATE `ty`");
		if($sem==6 and $year=="past")
				mysql_query("TRUNCATE `ty1`");
		if($sem==1 and $year=="current")
				mysql_query("TRUNCATE `cfy`");
		if($sem==2 and $year=="current")
				mysql_query("TRUNCATE `cfy1`");
		if($sem==3 and $year=="current")
				mysql_query("TRUNCATE `csy`");
		if($sem==4 and $year=="current")
				mysql_query("TRUNCATE `csy1`");
		if($sem==5 and $year=="current")
				mysql_query("TRUNCATE `cty`");
		if($sem==6 and $year=="current")
				mysql_query("TRUNCATE `cty1`");
		
		
	    if($sem==1){
 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	         	if($year=="past"){
	           $result = mysql_query("INSERT INTO fy(`roll_no`,`seat_no`,`enrollment_no`,`candidate_name`,`eng_th`,`eng_tw`,`bsc_th`,`bsc_pr`,`bms_th`,`egg_pr`,`egg_tw`,`cmf_pr`,`cmf_tw`,`wpi_tw`,`sw`,`sum`, `avg`,`count`)values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','0','0','0')");  
	       }
else{
	        $result = mysql_query("INSERT INTO cfy(`roll_no`,`seat_no`,`enrollment_no`,`candidate_name`,`eng_th`,`eng_tw`,`bsc_th`,`bsc_pr`,`bms_th`,`egg_pr`,`egg_tw`,`cmf_pr`,`cmf_tw`,`wpi_tw`,`sw`,`sum`, `avg`,`count`)values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','0','0','0')"); 

	       }

	           }
	       }       
	   }
	   else if($sem==2){
	   	 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {if($year=="past"){
			$result = mysql_query("Insert into fy1(`roll_no`,`seat_no`,`enrollment_no`,`candidate_name`,`cms_th`,`cms_or`,`cms_tw`,`aps_th`,`aps_pr`,`pic_th`,`pic_pr`,`pic_tw`,`eeg_th`,`eeg_tw`,`ems_th`,`dls_or`,`wpd_pr`,`sw`,`sum`,`avg`,`count`) values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','0','0','0')");}
			else{
			$result = mysql_query("Insert into cfy1(`roll_no`,`seat_no`,`enrollment_no`,`candidate_name`,`cms_th`,`cms_or`,`cms_tw`,`aps_th`,`aps_pr`,`pic_th`,`pic_pr`,`pic_tw`,`eeg_th`,`eeg_tw`,`ems_th`,`dls_or`,`wpd_pr`,`sw`,`sum`,`avg`,`count`) values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','0','0','0')");}
		}}
	   }
	    else if($sem==3){
	    	 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    	      if($year=="past"){	
	   	$result=mysql_query("INSERT into sy(`roll_no`,`seat_no`,`enrollment_no`,`candidate_name`,`ams_th`,`dsu_th`,`dsu_pr`,`dsu_tw`,`ete_th`,`ete_tw`,`rdb_th`,`rdb_or`,`rdb_tw`,`dte_th`,`dte_tw`,`gui_pr`,`pp`,`sw`,`sum`,`avg`,`count`)  values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','0','0','0')");}
	      else{	
	   	$result=mysql_query("INSERT into csy(`roll_no`,`seat_no`,`enrollment_no`,`candidate_name`,`ams_th`,`dsu_th`,`dsu_pr`,`dsu_tw`,`ete_th`,`ete_tw`,`rdb_th`,`rdb_or`,`rdb_tw`,`dte_th`,`dte_tw`,`gui_pr`,`pp`,`sw`,`sum`,`avg`,`count`)  values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','0','0','0')");}

	   }} }
	    else if($sem==4){
	    	 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    	        if($year=="past"){	
	    	$result=mysql_query("INSERT into sy1 (`roll_no`,`seat_no`,`enrollment_no`,`candidate_name`,`evs_th`,`evs_tw`,`chm_th`,`chm_pr`,`chm_tw`,`dcn_th`,`dcn_pr`,`dcn_tw`,`map_th`,`man_pr`,`man_tw`,`oop_th`,`oop_pr`,`oop_tw`,`amt_pr`,`amt_tw`,`pp`,`sw`,`sum`,`avg`,`count`) values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','$emapData[19]','$emapData[20]','$emapData[21]','0','0','0')");}
	    	    else{	
	    	$result=mysql_query("INSERT into csy1 (`roll_no`,`seat_no`,`enrollment_no`,`candidate_name`,`evs_th`,`evs_tw`,`chm_th`,`chm_pr`,`chm_tw`,`dcn_th`,`dcn_pr`,`dcn_tw`,`map_th`,`man_pr`,`man_tw`,`oop_th`,`oop_pr`,`oop_tw`,`amt_pr`,`amt_tw`,`pp`,`sw`,`sum`,`avg`,`count`) values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','$emapData[19]','$emapData[20]','$emapData[21]','0','0','0')");}
	    	   	
	   }} }
	    else if($sem==5){
	    	 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    	      if($year=="past"){	
	    	$result=mysql_query("INSERT into ty(`roll_no`,`seat_no`,`enrollment_no`,`candidate_name`,`osy_th`,`osy_tw`,`sen_th`,`ifs_th`,`ifs_tw`,`jpr_th`,`jpr_pr`,`jpr_tw`,`cte_th`,`cte_pr`,`cte_tw`,`bsc_or`,`bsc_tw`,`nma_pr`,`nma_tw`,`pp`,`sw`,`sum`,`avg`,`count`)values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','$emapData[19]','$emapData[20]','0','0','0')");}
	    	  else{	
	    	$result=mysql_query("INSERT into cty(`roll_no`,`seat_no`,`enrollment_no`,`candidate_name`,`osy_th`,`osy_tw`,`sen_th`,`ifs_th`,`ifs_tw`,`jpr_th`,`jpr_pr`,`jpr_tw`,`cte_th`,`cte_pr`,`cte_tw`,`bsc_or`,`bsc_tw`,`nma_pr`,`nma_tw`,`pp`,`sw`,`sum`,`avg`,`count`)values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','$emapData[19]','$emapData[20]','0','0','0')");}
	   	 }}  }
	    else if($sem==6){
	    	 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    	       if($year=="past"){	
	   	$result=mysql_query("INSERT into ty1(`roll_no`,`seat_no`,`enrollment_no`,`candidate_name`,`man_th`,`mco_th`,`mco_pr`,`mco_tw`,`ajp_th`,`ajp_pr`,`ajp_tw`,`oom_th`,`oom_tw`,`ste_pr`,`ste_tw`,`jpr_or`,`jpr_tw`,`ede_tw`,`sw`,`sum`,`avg`,`count`)	values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','0','0','0')");
	   }
	    	      else{	
	   	$result=mysql_query("INSERT into cty1(`roll_no`,`seat_no`,`enrollment_no`,`candidate_name`,`man_th`,`mco_th`,`mco_pr`,`mco_tw`,`ajp_th`,`ajp_pr`,`ajp_tw`,`oom_th`,`oom_tw`,`ste_pr`,`ste_tw`,`jpr_or`,`jpr_tw`,`ede_tw`,`sw`,`sum`,`avg`,`count`)	values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','0','0','0')");}
	  }}  }
  fclose($file);	 
	         if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
						</script>";
			
		 
		}}
	 ?>
	  
	   <div class="widget-header">
	   	<h2>Import Files</h2>
	   	</div>

  				<form  method="post" name="upload_excel" enctype="multipart/form-data">
					
     <table class="table-condensed table-bordered" width="60%" align="center">
     	<tr><td><input type="radio" name="sem" value="1"> Sem 1 &nbsp;&nbsp; <input type="radio" name="sem" value="2"> Sem 2 &nbsp;&nbsp;<input type="radio" name="sem" value="3"> Sem 3&nbsp;&nbsp; <input type="radio" name="sem" value="4"> Sem 4 &nbsp;&nbsp;<input type="radio" name="sem" value="5"> Sem 5 &nbsp;&nbsp;<input type="radio" name="sem" value="6"> Sem 6&nbsp;&nbsp;</td></tr>
     	<tr><td>Year: <input type="radio" name="year" value="current"> Current <input type="radio" name="year" value="past"> Past </td></tr>
     	<tr><td>


					 <fieldset>
						<div class="control-group">
							<div class="controls">
								CSV File: <input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</td></tr>
			</table>
				</form>