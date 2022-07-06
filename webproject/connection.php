<?php
$host="localhost";
$user="root";
$pass= "";
$db="fam";

$con= mysqli_connect("$host","$user","$pass","$db");
if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

/*$veg1=POST_['1'];
$veg2=POST_['2'];
$veg3=POST_['3'];
$fru4=POST_['4'];
$fru5=POST_['5'];
$fru6=POST_['6'];
$oth7=POST_['7'];
$oth8=POST_['8'];
$oth9=POST_['9'];*/

// if(isset($_POST['carrot']))
// {
   
// 	$query1="SELECT * FROM harvest_table WHERE Item_ID='1';";
//     	 $sel= mysqli_query($con,$query1);


//     	 echo "<table border='1'>";
//     	 while($row=mysqli_fetch_array($sel))
//     	 {

//     	 	echo "<tr>";
//     	 	echo "<td>".$row['Item_ID']."</td>";
//     	 	echo "<td>".$row['Item_Name']."</td>";
//     	 	echo "<td>".$row['Farmer_Name']."</td>";
//     	 	echo "<td>".$row['Harvest_(KG)']."</td>";
//     	 	echo "<td>".$row['Location']."</td>";
//     	 	echo "<td>".$row['Date']."</td>";
//     	 	echo "</tr>";
    	 	

//     	 }
//     	 echo"</table>";
// }

// if(isset($_POST['beetroot']))
// {
   
// 	$query1="SELECT * FROM harvest_table WHERE Item_ID='2';";
//     	 $sel= mysqli_query($con,$query1);


//     	 echo "<table border='1'>";
//     	 while($row=mysqli_fetch_array($sel))
//     	 {

//     	 	echo "<tr>";
//     	 	echo "<td>".$row['Item_ID']."</td>";
//     	 	echo "<td>".$row['Item_Name']."</td>";
//     	 	echo "<td>".$row['Farmer_Name']."</td>";
//     	 	echo "<td>".$row['Harvest_(KG)']."</td>";
//     	 	echo "<td>".$row['Location']."</td>";
//     	 	echo "<td>".$row['Date']."</td>";
//     	 	echo "</tr>";
    	 	

//     	 }
//     	 echo"</table>";
// }

// if(isset($_POST['onion']))
// {
   
// 	$query1="SELECT * FROM harvest_table WHERE Item_ID='3';";
//     	 $sel= mysqli_query($con,$query1);


//     	 echo "<table border='1'>";
//     	 while($row=mysqli_fetch_array($sel))
//     	 {

//     	 	echo "<tr>";
//     	 	echo "<td>".$row['Item_ID']."</td>";
//     	 	echo "<td>".$row['Item_Name']."</td>";
//     	 	echo "<td>".$row['Farmer_Name']."</td>";
//     	 	echo "<td>".$row['Harvest_(KG)']."</td>";
//     	 	echo "<td>".$row['Location']."</td>";
//     	 	echo "<td>".$row['Date']."</td>";
//     	 	echo "</tr>";
    	 	

//     	 }
//     	 echo"</table>";
// }

// if(isset($_POST['apple']))
// {
   
// 	$query1="SELECT * FROM harvest_table WHERE Item_ID='4';";
//     	 $sel= mysqli_query($con,$query1);


//     	 echo "<table border='1'>";
//     	 while($row=mysqli_fetch_array($sel))
//     	 {

//     	 	echo "<tr>";
//     	 	echo "<td>".$row['Item_ID']."</td>";
//     	 	echo "<td>".$row['Item_Name']."</td>";
//     	 	echo "<td>".$row['Farmer_Name']."</td>";
//     	 	echo "<td>".$row['Harvest_(KG)']."</td>";
//     	 	echo "<td>".$row['Location']."</td>";
//     	 	echo "<td>".$row['Date']."</td>";
//     	 	echo "</tr>";
    	 	

//     	 }
//     	 echo"</table>";
// }

// if(isset($_POST['orange']))
// {
   
// 	$query1="SELECT * FROM harvest_table WHERE Item_ID='5';";
//     	 $sel= mysqli_query($con,$query1);


//     	 echo "<table border='1'>";
//     	 while($row=mysqli_fetch_array($sel))
//     	 {

//     	 	echo "<tr>";
//     	 	echo "<td>".$row['Item_ID']."</td>";
//     	 	echo "<td>".$row['Item_Name']."</td>";
//     	 	echo "<td>".$row['Farmer_Name']."</td>";
//     	 	echo "<td>".$row['Harvest_(KG)']."</td>";
//     	 	echo "<td>".$row['Location']."</td>";
//     	 	echo "<td>".$row['Date']."</td>";
//     	 	echo "</tr>";
    	 	

//     	 }
//     	 echo"</table>";
// }

// if(isset($_POST['watermelo']))
// {
   
// 	$query1="SELECT * FROM harvest_table WHERE Item_ID='6';";
//     	 $sel= mysqli_query($con,$query1);


//     	 echo "<table border='1'>";
//     	 while($row=mysqli_fetch_array($sel))
//     	 {

//     	 	echo "<tr>";
//     	 	echo "<td>".$row['Item_ID']."</td>";
//     	 	echo "<td>".$row['Item_Name']."</td>";
//     	 	echo "<td>".$row['Farmer_Name']."</td>";
//     	 	echo "<td>".$row['Harvest_(KG)']."</td>";
//     	 	echo "<td>".$row['Location']."</td>";
//     	 	echo "<td>".$row['Date']."</td>";
//     	 	echo "</tr>";
    	 	

//     	 }
//     	 echo"</table>";
// }

// if(isset($_POST['sugar']))
// {
   
// 	$query1="SELECT * FROM harvest_table WHERE Item_ID='7';";
//     	 $sel= mysqli_query($con,$query1);


//     	 echo "<table border='1'>";
//     	 while($row=mysqli_fetch_array($sel))
//     	 {

//     	 	echo "<tr>";
//     	 	echo "<td>".$row['Item_ID']."</td>";
//     	 	echo "<td>".$row['Item_Name']."</td>";
//     	 	echo "<td>".$row['Farmer_Name']."</td>";
//     	 	echo "<td>".$row['Harvest_(KG)']."</td>";
//     	 	echo "<td>".$row['Location']."</td>";
//     	 	echo "<td>".$row['Date']."</td>";
//     	 	echo "</tr>";
    	 	

//     	 }
//     	 echo"</table>";
// }

// if(isset($_POST['fish']))
// {
   
// 	$query1="SELECT * FROM harvest_table WHERE Item_ID='8';";
//     	 $sel= mysqli_query($con,$query1);


//     	 echo "<table border='1'>";
//     	 while($row=mysqli_fetch_array($sel))
//     	 {

//     	 	echo "<tr>";
//     	 	echo "<td>".$row['Item_ID']."</td>";
//     	 	echo "<td>".$row['Item_Name']."</td>";
//     	 	echo "<td>".$row['Farmer_Name']."</td>";
//     	 	echo "<td>".$row['Harvest_(KG)']."</td>";
//     	 	echo "<td>".$row['Location']."</td>";
//     	 	echo "<td>".$row['Date']."</td>";
//     	 	echo "</tr>";
    	 	

//     	 }
//     	 echo"</table>";
// }

// if(isset($_POST['eggs']))
// {
   
// 	$query1="SELECT * FROM harvest_table WHERE Item_ID='9';";
//     	 $sel= mysqli_query($con,$query1);


//     	 echo "<table border='1'>";
//     	 while($row=mysqli_fetch_array($sel))
//     	 {

//     	 	echo "<tr>";
//     	 	echo "<td>".$row['Item_ID']."</td>";
//     	 	echo "<td>".$row['Item_Name']."</td>";
//     	 	echo "<td>".$row['Farmer_Name']."</td>";
//     	 	echo "<td>".$row['Harvest_(KG)']."</td>";
//     	 	echo "<td>".$row['Location']."</td>";
//     	 	echo "<td>".$row['Date']."</td>";
//     	 	echo "</tr>";
    	 	

//     	 }
//     	 echo"</table>";
// }
?>