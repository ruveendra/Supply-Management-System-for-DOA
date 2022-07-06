<?php


if (isset($_POST["txtActionType"])) {

    $type = $_POST["txtActionType"];

    switch ($type) {          // checks the type

        case "save_report":
            save_report();
            break;
        case "get_farmer_reports":
            get_farmer_reports();   
            break;
        case "delete_report";
            delete_report();
            break; 
        
        case "default_report";
            default_report();
            break;
        case "save_edit";
            save_edit();
            break;


    }
}
function delete_report(){

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "farmer_reports";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $hr_id = $_POST['hr_id'];
    
    $sql = "UPDATE harvest_report SET hr_status= 0 WHERE hr_id='$hr_id'";


    if (mysqli_query($conn, $sql)) {

        echo "record Updated Successfully";
  
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


}

function get_farmer_reports(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "farmer_reports";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $farmer_id = $_POST['farmer_id'];
    
    $sql = "SELECT * FROM harvest_report WHERE farmer_id = '$farmer_id' AND hr_status = 1";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $rows = mysqli_fetch_all($result);

        echo json_encode($rows);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);



}

function save_report()

{
    //  echo ($_POST['image']);
    //   die();

    echo $_POST["category"];

    $error_count = 0;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "farmer_reports";
    $fileDestination = '';



    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    
    
    if(isset($_FILES['image'])) {
       print_r ("image2");
        $file = $_FILES['image'];
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];
       
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png');
    
        if(in_array($fileActualExt,$allowed)){
          if($fileError===0){
            if($fileSize<100000000){
              $fileNameNew = uniqid('', true).".".$fileActualExt;
              $fileDestination = 'uploads/'.$fileNameNew;
              move_uploaded_file($fileTmpName, $fileDestination );
    
    
            }
            else {
              echo "Your file is too big";
            }
    
    
          }
          else{
            echo "There was an error uploading your file";
          }
    
    
        }
        else {
          echo "invalid file Type";
        }
    
      }


   

    // // Create connection
    // $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    // if (file_exists($_FILES["image"]["tmp_name"])) {

    //     $file_name =  $_FILES["image"]["name"];
    //     $extention  = pathinfo($file_name, PATHINFO_EXTENSION);
    //     $target_dir = "uploads/";
    //     $upload_file_name = time() . '.' . $extention;
    //     $upload_file = "../" . $target_dir . $upload_file_name;
    //     move_uploaded_file($_FILES["image"]["tmp_name"], $upload_file);
    // } else {

    //     $errors['fileToUploadErr'] = "Picture is required";
    //     $error_count++;
    // }


    $farmers_id = 1;
    $hr_title = $_POST['title'];
    $hr_category = $_POST['category'];
    $hr_item = $_POST['item'];
    $hr_discription = $_POST['description'];
    $hr_image = $fileDestination;
    $hr_qty = $_POST['quantity'];
    $hr_price = $_POST['price'];
    $hr_status = 1;




    $sql = "INSERT INTO harvest_report (farmer_id, hr_title , hr_category, hr_item, hr_discription, hr_image, hr_qty, hr_price, hr_status)
    VALUES ('$farmers_id', '$hr_title', '$hr_category', '$hr_item', '$hr_discription', '$hr_image', '$hr_qty', '$hr_price', '$hr_status')";


    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


    
}

Function default_report(){



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "farmer_reports";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $hr_id = $_POST['hr_id'];
    
    $sql = "SELECT * FROM harvest_report WHERE hr_id = '$hr_id' AND hr_status = 1";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $rows = mysqli_fetch_all($result);

        echo json_encode($rows);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}

function save_edit(){
    
    $error_count = 0;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "farmer_reports";
    $fileDestination = '';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    
    if(isset($_FILES['image'])) {
        $file = $_FILES['image'];
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];
    
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png');
    
        if(in_array($fileActualExt,$allowed)){
          if($fileError===0){
            if($fileSize<100000000){
              $fileNameNew = uniqid('', true).".".$fileActualExt;
              $fileDestination = 'uploads/'.$fileNameNew;
              move_uploaded_file($fileTmpName, $fileDestination );
    
    
            }
            else {
              echo "Your file is too big";
            }
    
    
          }
          else{
            echo "There was an error uploading your file";
          }
    
    
        }
        else {
          echo "invalid file Type";
        }
    
      }



    $hr_id = $_POST['hr_id'];
    $farmers_id = 1;
    $hr_title = $_POST['title'];
    $hr_category = $_POST['category'];
    $hr_item = $_POST['item'];
    
    
    $hr_description = $_POST['description'];
    $hr_image =  $fileDestination;
    $hr_qty = $_POST['quantity'];
    $hr_price = $_POST['price'];
    $hr_status = 1;

   


    
    $sql = "UPDATE `harvest_report` SET 
    `farmer_id` = '$farmers_id', 
    `hr_title` = '$hr_title', 
    `hr_category` = '$hr_category', 
    `hr_item` = '$hr_item', 
    `hr_discription` = '$hr_description', 
    `hr_image` = '$hr_image', 
    `hr_qty` = '$hr_qty',
    `hr_price` = '$hr_price', 
    `hr_status` = '$hr_status'  
where `hr_id`='$hr_id'";

   
    if (mysqli_query($conn, $sql)) {
        echo "record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);




}


