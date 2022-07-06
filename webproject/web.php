<?php
$connect = mysqli_connect("localhost", "root", "", "fam");
$query = "SELECT * FROM famtab";
$result = mysqli_query($connect, $query);
?>
<html>

<head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-weight: bold; color:#000;
            font-size:18px;" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    </div>
    <div id="main">

        <form>
            <div id="A">
                <div id="B">

                    <div class="container">
                        <h5 style="text-align: center;font-weight:bold;font-size:20px">Vegetables</h5>
                        <div>
                            <div>
                                <select class="form-control form-control-lg" aria-label="Default select example" id="sampleRecipientInput1">
                                    <option selected>Select a vegetable</option>
                                    <option value="1">Carrot</option>
                                    <option value="2">Beetroot</option>
                                    <option value="3">Onion</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="container">

                    <h5 style="text-align: center;font-weight:bold;font-size:20px">Fruits</h5>
                        <div>
                            <div>
                                <select class="form-control form-control-lg" aria-label="Default select example" id="sampleRecipientInput2">

                                    <option selected>Select a fruit</option>
                                    <option value="4">Apple</option>
                                    <option value="5">Orange</option>
                                    <option value="6">Watermelon</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </form>

    <div id="show-table">


        <?php include_once('connection.php'); ?>

        <div class="table-responsive">
            <table class="table table-dark table-striped table-hover table-bordered">
                <thead>
                    <tr>
                    <th>Action</th>
                        <th>Report ID</th>
                        <th>Farmer ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Date</th>
                    </tr>
                    <thead>
                    <tbody>
                        <?php

                        $sql = "SELECT * FROM famtab";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            //                     $image = $rows['image'];
                            //  echo "<img src='".$image."' />";

                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                <td><input type="button" name="view" value="View" id="<?php echo $row["Report_ID"]; ?>" class="btn btn-primary btn-md view_data" /></td>
                                    <td id="ReportId"> <?php echo $row['Report_ID'] ?> </td>
                                    <td id="FarmerId"> <?php echo $row['Farmer_ID'] ?></td>
                                    <td id="Title"> <?php echo $row['Title'] ?></td>
                                    <td id="Category"> <?php echo $row['Category'] ?></td>
                                    <td id="Item"> <?php echo $row['Item'] ?></td>
                                    <td id="Description"> <?php echo $row['Description'] ?></td>
                                    <td id="Quantity"> <?php echo $row['Quantity'] ?></td>
                                    <td id="UnitPrice"> <?php echo $row['Unit_Price'] ?></td>
                                    <td id="Date"> <?php echo $row['Date'] ?></td>
                                </tr>
                            <?php } ?>
                    </tbody>
            </table>

        </div>
    <?php
                        } else {
                            echo "0 results";
                        }

                        // $conn->close();
    ?>
    </div>

    </div>

    <div  id="dataModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Report Details </h4>
                </div>
                <div class="modal-body" id="fam_detail"> </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> 
    <script>
        $(document).ready(function() {
            $('.view_data').click(function() {
                var fam_id = $(this).attr("id");
                $.ajax({
                    url: "select.php",
                    method: "post",
                    data: {fam_id:fam_id},
                    success: function(data) {
                        $('#fam_detail').html(data);
                        $('#dataModal').modal("show");
                    }
                });
            });
        });
    </script>




    <script>
        function searchData() {

            var dropDown1 = $("#sampleRecipientInput1").val();
            var dropDown2 = $("#sampleRecipientInput2").val();
            var dropDown3 = $("#sampleRecipientInput3").val();


            $.post("search.php", {
                    dropDown1: dropDown1,
                    dropDown2: dropDown2,
                    dropDown3: dropDown3
                })
                .done(function(data) {


                    $("#show-table").html(data);
                });


        }

        $("#sampleRecipientInput1").click(function(e) {
            searchData();


        });


        $("#sampleRecipientInput2").click(function(e) {
            searchData();


        });
        $("#sampleRecipientInput3").click(function(e) {
            searchData();


        });
    </script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>

</html>