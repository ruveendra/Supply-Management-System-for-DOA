

<?php
include_once  'connection.php';
echo "<div class=\"table-responsive\"> <table class=\"table table-dark table-striped table-hover table-bordered\">
<thead>
<tr >
<th >Report ID</th>
<th >Farmer ID</th>
<th >Title</th>
<th >Category</th>
<th >Item</th>
<th >Description</th>

<th >Quantity</th>
<th >Unit Price</th>

<th >Date</th>
</tr>
</thead>

<tbody>";

$dropDown1 =  $_POST['dropDown1'];
$dropDown2 =  $_POST['dropDown2'];
$dropDown3 =  $_POST['dropDown3'];


 if($dropDown1==1){
    $sql = "SELECT * FROM famtab WHERE Item ='carrot'  ";
    $result = $con->query($sql);


 if ($result->num_rows > 0) {
//     // output data of each row
    while ($row = $result->fetch_assoc()) {
            echo "                
                    
                    <tr >
                    <td><input type='button' name='view' value='View' id='".$row["Report_ID"]."' class='btn btn-primary btn-md view_data' /></td>
                        <td > " . $row['Report_ID'] . "</td>
                        <td > " . $row['Farmer_ID'] . "</td>
                        <td > " . $row['Title'] . "</td>
                        <td > " . $row['Category'] . "</td>
                        <td > " . $row['Item'] . "</td>
                        <td > " . $row['Description'] . "</td>
                        
                        <td > " . $row['Quantity'] . "</td>
                        <td > " . $row['Unit_Price'] . "</td>
                        
                        <td > " . $row['Date'] . "</td>
                 </tr>
                    
                   
                
";
        }}}

        if($dropDown1==2){
            $sql = "SELECT * FROM famtab WHERE Item ='beetroot'  ";
            $result = $con->query($sql);
        
        
         if ($result->num_rows > 0) {
        //     // output data of each row
            while ($row = $result->fetch_assoc()) {
                    echo "                
                            
                            <tr >
                            <td><input type='button' name='view' value='View' id='".$row["Report_ID"]."' class='btn btn-primary btn-md view_data' /></td>
                                <td > " . $row['Report_ID'] . "</td>
                                <td > " . $row['Farmer_ID'] . "</td>
                                <td > " . $row['Title'] . "</td>
                                <td > " . $row['Category'] . "</td>
                                <td > " . $row['Item'] . "</td>
                                <td > " . $row['Description'] . "</td>
                                
                                <td > " . $row['Quantity'] . "</td>
                                <td > " . $row['Unit_Price'] . "</td>
                                
                                <td > " . $row['Date'] . "</td>
                         </tr>
                            
                           
                        
        ";
                }}}

                if($dropDown1==3){
                    $sql = "SELECT * FROM famtab WHERE Item ='onion'  ";
                    $result = $con->query($sql);
                
                
                 if ($result->num_rows > 0) {
                //     // output data of each row
                    while ($row = $result->fetch_assoc()) {
                            echo "                
                                    
                                    <tr >
                                    <td><input type='button' name='view' value='View' id='".$row["Report_ID"]."' class='btn btn-primary btn-md view_data' /></td>
                                        <td > " . $row['Report_ID'] . "</td>
                                        <td > " . $row['Farmer_ID'] . "</td>
                                        <td > " . $row['Title'] . "</td>
                                        <td > " . $row['Category'] . "</td>
                                        <td > " . $row['Item'] . "</td>
                                        <td > " . $row['Description'] . "</td>
                                        
                                        <td > " . $row['Quantity'] . "</td>
                                        <td > " . $row['Unit_Price'] . "</td>
                                        
                                        <td > " . $row['Date'] . "</td>
                                 </tr>
                                    
                                   
                                
                ";
                        }}}

                        if($dropDown2==4){
                            $sql = "SELECT * FROM famtab WHERE Item ='apple'  ";
                            $result = $con->query($sql);
                        
                        
                         if ($result->num_rows > 0) {
                        //     // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                    echo "                
                                            
                                            <tr >
                                            <td><input type='button' name='view' value='View' id='".$row["Report_ID"]."' class='btn btn-primary btn-md view_data' /></td>
                                                <td > " . $row['Report_ID'] . "</td>
                                                <td > " . $row['Farmer_ID'] . "</td>
                                                <td > " . $row['Title'] . "</td>
                                                <td > " . $row['Category'] . "</td>
                                                <td > " . $row['Item'] . "</td>
                                                <td > " . $row['Description'] . "</td>
                                                
                                                <td > " . $row['Quantity'] . "</td>
                                                <td > " . $row['Unit_Price'] . "</td>
                                                
                                                <td > " . $row['Date'] . "</td>
                                         </tr>
                                            
                                           
                                        
                        ";
                                }}}

                                if($dropDown2==5){
                                    $sql = "SELECT * FROM famtab WHERE Item ='orange'  ";
                                    $result = $con->query($sql);
                                
                                
                                 if ($result->num_rows > 0) {
                                //     // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                            echo "                
                                                    
                                                    <tr >
                                                    <td><input type='button' name='view' value='View' id='".$row["Report_ID"]."' class='btn btn-primary btn-md view_data' /></td>
                                                        <td > " . $row['Report_ID'] . "</td>
                                                        <td > " . $row['Farmer_ID'] . "</td>
                                                        <td > " . $row['Title'] . "</td>
                                                        <td > " . $row['Category'] . "</td>
                                                        <td > " . $row['Item'] . "</td>
                                                        <td > " . $row['Description'] . "</td>
                                                        
                                                        <td > " . $row['Quantity'] . "</td>
                                                        <td > " . $row['Unit_Price'] . "</td>
                                                        
                        <td > " . $row['Date'] . "</td>
                                                 </tr>
                                                    
                                                   
                                                
                                ";
                                        }}}

                                        if($dropDown2==6){
                                            $sql = "SELECT * FROM famtab WHERE Item ='watermelon'  ";
                                            $result = $con->query($sql);
                                        
                                        
                                         if ($result->num_rows > 0) {
                                        //     // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                    echo "                
                                                            
                                                            <tr >
                                                            <td><input type='button' name='view' value='View' id='".$row["Report_ID"]."' class='btn btn-primary btn-md view_data' /></td>
                                                                <td > " . $row['Report_ID'] . "</td>
                                                                <td > " . $row['Farmer_ID'] . "</td>
                                                                <td > " . $row['Title'] . "</td>
                                                                <td > " . $row['Category'] . "</td>
                                                                <td > " . $row['Item'] . "</td>
                                                                <td > " . $row['Description'] . "</td>
                                                                
                                                                <td > " . $row['Quantity'] . "</td>
                                                                <td > " . $row['Unit_Price'] . "</td>
                                                                
                        <td > " . $row['Date'] . "</td>
                                                         </tr>
                                                            
                                                           
                                                        
                                        ";
                                                }}}

                                                if($dropDown3==7){
                                                    $sql = "SELECT * FROM famtab WHERE Item ='sugar'  ";
                                                    $result = $con->query($sql);
                                                
                                                
                                                 if ($result->num_rows > 0) {
                                                //     // output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                            echo "                
                                                                    
                                                                    <tr >
                                                                    <td><input type='button' name='view' value='View' id='".$row["Report_ID"]."' class='btn btn-primary btn-md view_data' /></td>
                                                                        <td > " . $row['Report_ID'] . "</td>
                                                                        <td > " . $row['Farmer_ID'] . "</td>
                                                                        <td > " . $row['Title'] . "</td>
                                                                        <td > " . $row['Category'] . "</td>
                                                                        <td > " . $row['Item'] . "</td>
                                                                        <td > " . $row['Description'] . "</td>
                                                                        
                                                                        <td > " . $row['Quantity'] . "</td>
                                                                        <td > " . $row['Unit_Price'] . "</td>
                                                                        
                        <td > " . $row['Date'] . "</td>
                                                                 </tr>
                                                                    
                                                                   
                                                                
                                                ";
                                                        }}}

                                                        if($dropDown3==8){
                                                            $sql = "SELECT * FROM famtab WHERE Item ='fish'  ";
                                                            $result = $con->query($sql);
                                                        
                                                        
                                                         if ($result->num_rows > 0) {
                                                        //     // output data of each row
                                                            while ($row = $result->fetch_assoc()) {
                                                                    echo "                
                                                                            
                                                                            <tr >
                                                                            <td><input type='button' name='view' value='View' id='".$row["Report_ID"]."' class='btn btn-primary btn-md view_data' /></td>
                                                                                <td > " . $row['Report_ID'] . "</td>
                                                                                <td > " . $row['Farmer_ID'] . "</td>
                                                                                <td > " . $row['Title'] . "</td>
                                                                                <td > " . $row['Category'] . "</td>
                                                                                <td > " . $row['Item'] . "</td>
                                                                                <td > " . $row['Description'] . "</td>
                                                                                
                                                                                <td > " . $row['Quantity'] . "</td>
                                                                                <td > " . $row['Unit_Price'] . "</td>
                                                                                
                        <td > " . $row['Date'] . "</td>
                                                                         </tr>
                                                                            
                                                                           
                                                                        
                                                        ";
                                                                }}}

                                                                if($dropDown3==9){
                                                                    $sql = "SELECT * FROM famtab WHERE Item ='egg'  ";
                                                                    $result = $con->query($sql);
                                                                
                                                                
                                                                 if ($result->num_rows > 0) {
                                                                //     // output data of each row
                                                                    while ($row = $result->fetch_assoc()) {
                                                                            echo "                
                                                                                    
                                                                                    <tr >
                                                                                    <td><input type='button' name='view' value='View' id='".$row["Report_ID"]."' class='btn btn-primary btn-md view_data' /></td>
                                                                                        <td > " . $row['Report_ID'] . "</td>
                                                                                        <td > " . $row['Farmer_ID'] . "</td>
                                                                                        <td > " . $row['Title'] . "</td>
                                                                                        <td > " . $row['Category'] . "</td>
                                                                                        <td > " . $row['Item'] . "</td>
                                                                                        <td > " . $row['Description'] . "</td>
                                                                                        
                                                                                        <td > " . $row['Quantity'] . "</td>
                                                                                        <td > " . $row['Unit_Price'] . "</td>
                                                                                        
                        <td > " . $row['Date'] . "</td>
                                                                                 </tr>
                                                                                    
                                                                                   
                                                                                
                                                                ";
                                                                        }}}



 




echo "  </tbody>   </table> </div>  ";

//$conn->close();
?>
    


   
