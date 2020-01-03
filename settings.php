
<?php 
if (isset($_POST["btn_save_staff"])) {
    $resStaff=mysql_query("INSERT INTO `sub_teacher` ( `subj`, `staff`) VALUES ( '".$_POST["subj"]."', '".$_POST["staff"]."')");
   if ($resStaff) 
   {
    echo "Inserted...";
       
   }
}

if (isset($_POST["btn_save_year1"])) {
    $resStaff1=mysql_query("INSERT INTO `year` ( `year2`) VALUES ( '".$_POST["year2"]."')");
   if ($resStaff1) {
    echo "Inserted...";
       
   }
}




 ?>

            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>SETTING</h3>
            </div>
            
            <form action="" method="post">
                 <center><h3>Subject Teacher Information</h3></center>
                 <table class="table-condensed table-bordered" align="center">
                     <tr>
                         <td><select name="subj" class="form-control">
                            <option selected="" disabled="">~~~Select Subject~~~</option>
                             <option value="ENG">ENG</option>
                             <option value="BSC">BSC</option>
                            <option value="BSC">BSC</option>                    
                          <option value="BMS">BMS</option>
                         <option value="CMS">CMS</option>
                         <option value="APS">APS</option>
                         <option value="PIC">PIC</option>
                         <option value="EEG">EEG</option>
                         <option value="EMS">EMS</option>
                         <option value="AMS">AMS</option>
                         <option value="DSU">DSU</option>
                         <option value="ETE">ETE</option>
                         <option value="RDB">RDB</option>
                         <option value="DTE">DTE</option>
                         <option value="EVS">EVS</option>
                         <option value="CHM">CHM</option>
                         <option value="DCN">DCN</option>
                         <option value="MAP">MAP</option>
                         <option value="OOP">OOP</option>
                         <option value="OSY">OSY</option>
                         <option value="SEN">SEN</option>
                         <option value="IFS">IFS</option>
                         <option value="JPR">JPR</option>
                         <option value="CTE">CTE</option>
                         <option value="MAN">MAN</option> 
                         <option value="MCO">MCO</option>
                         <option value="AJP">AJP</option>
                         <option value="OOM">OOM</option>
                         </select></td>
                     </tr>
                    <tr>
                        <td><input type="text" placeholder="Teacher Name" class="form-control" name="staff"></td>
                    </tr>

                    <tr><td>
                        <input type="submit" value="Submit" name="btn_save_staff" class="btn btn-primary">
                    </td></tr>
                 </table>
             </form>



            <br><br><br>





            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>SETTING</h3>
            </div>
            
            <form action="" method="post">
                 <center><h3>Year</h3></center>
                 <table class="table-condensed table-bordered" align="center">
                     <tr>
                         <td><select name="year2" class="form-control">
                            <option selected="" disabled="">~~~ select Year~~~</option>
                             <option value="summer 2015">summer 2015</option>
                             <option value="winter 2015">winter 2015</option>
                            <option value="summer 2016">summer 2016</option>                    
                          <option value="winter 2016">winter 2016</option>
                         <option value="summer 2017">summer 2017</option>
                         <option value="winter 2017">winter 2017</option>
                             <option value="summer 2018">summer 2018</option>
                            <option value="winter 2018">winter 2018</option>                    
                          <option value="summer 2019">summer 2019</option>
                         <option value="winter 2019">winter 2019</option>
                         </select></td>
                     </tr>

                    <tr><td>
                        <input type="submit" value="Submit" name="btn_save_year1" class="btn btn-primary">
                    </td></tr>
                 </table>
             </form>


            <br><br><br>