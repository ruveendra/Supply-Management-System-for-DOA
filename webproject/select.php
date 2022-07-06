<?php
if (isset($_POST["fam_id"])) {
     $output = '';
     $connect = mysqli_connect("localhost", "root", "", "fam");
     $report_query = "SELECT * FROM famtab WHERE Report_ID = '" . $_POST["fam_id"] . "'";
     $result = mysqli_query($connect, $report_query);
     $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
     while ($row = mysqli_fetch_array($result)) {
          $output .= '  
           <tr>  
           <td width="30%"><label>Image</label></td>  
           <td width="70%"><img src="uploads/' . $row["Image"] . '" width="100px" /></td>
     </tr>
                <tr>  
                     <td width="30%"><label>Title</label></td>  
                     <td width="70%">' . $row["Title"] . '</td>
               </tr>
               <tr>  
                     <td width="30%"><label>Category</label></td>  
                     <td width="70%">'.$row["Category"] . '</td>
               </tr>
               <tr>  
                     <td width="30%"><label>Item</label></td>  
                     <td width="70%">' . $row["Item"] . '</td>
               </tr>
               <tr>  
                     <td width="30%"><label>Description</label></td>  
                     <td width="70%">' . $row["Description"] . '</td>
               </tr>

               <tr>  
               <td width="30%"><label>Quantity</label></td>  
               <td width="70%">' . $row["Quantity"] . '</td>
               </tr>

               <tr>  
                     <td width="30%"><label>Unit_Price</label></td>  
                     <td width="70%">' . $row["Unit_Price"] . '</td>
               </tr>

               <tr>  
                     <td width="30%"><label>Date</label></td>  
                     <td width="70%">' . $row["Date"] . '</td>
               </tr>

               ';
     }
     $output .= "</table></div>";
     echo $output;
}
