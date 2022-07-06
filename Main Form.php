<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyD1RjtiYTdss0guByAKGs9zfjC9yoo3Dng&callback=initMap -->

    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1RjtiYTdss0guByAKGs9zfjC9yoo3Dng"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1RjtiYTdss0guByAKGs9zfjC9yoo3Dng&callback=initMap"
        async defer></script> -->
        <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJGDuHRtlv_E0vl2YDks008z1y3YNZAuk&libraries=places&callback=initMap">
</script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

    <!-- <script type="text/javascript" src="dropDown.js"></script> -->
    <meta charset="utf-8">
    <title> </title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url(images/image4.jpg);
            background-position: center;
            background-size: cover;
            font-family: sans-serif;
            margin-top: 40px;
        }

        .regform {
            width: 800px;
            background-color: rgb(0, 0, 0, 0.6);
            margin: auto;
            color: #FFFFFF !important;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 15px 15px 0px 0px;

        }

        .main {
            background-color: rgb(0, 0, 0, 0.5);
            width: 800px;
            margin: auto;

        }

        #name {
            width: 100%;
            height: 585px;
        }

        .name {
            margin-left: 25px;
            margin-top: 30px;
            width: 125px;
            color: white;
            font-size: 14px;
            font-weight: 700;
        }

        .option {
            font-size: 14px;
        }

        .upload {
            font-size: 14px;
        }

        .txt-white {
            color: white;
        }


        .file {
            visibility: hidden;
            position: absolute;
        }
    </style>
</head>



<body>

    <div class="regform">
        <h1>Submit Report</h1>
    </div>

    <div class="main">
        <div class="container">

            <form id="rep_save" method="POST" enctype='multipart/form-data'>
                <input type="hidden" name="txtActionType" id="txtActionType" value="save_data">

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label txt-white">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="title"  >
                    </div>
                </div>


                <div class="form-group row">
                    <label for="inputState" class="col-sm-2 col-form-label txt-white">Category</label>
                    <div class="col-sm-10">
                        <select id="category" name="category" class="form-control" onchange="Category()">
                            <option selected>Choose...</option>
                            <option selected value="1">Vegetables</option>
                            <option value="2">Fruits</option>
                            <option value="3">Other</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputState" name="itemName" class="col-sm-2 col-form-label txt-white">Item Name</label>
                    <div class="col-sm-10" id="itemList" >

                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleFormControlTextarea1"
                        class="col-sm-2 col-form-label txt-white">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label txt-white">Location</label>
                    <div class="col-sm-10">
                        <input type="text" name="location" class="form-control" id="location"  >
                    </div>
                </div>


                <div class="form-group row">
                    <label for="exampleFormControlFile1" class="col-sm-2 col-form-label txt-white">Upload Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*"
                            style="color: white;">
                    </div>
                </div>


                <div class="ml-2 col-sm-6">
                    <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail"
                        style="max-width: 50%; max-height: 50%; margin-bottom: 20px;">
                </div>


                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label txt-white">Quantity (kg):</label>
                    <div class="col-2">
                        <input class="form-control" name="quantity" type="number" value="0" id="quantity">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label txt-white">Price (LKR/kg):</label>
                    <div class="col-2">
                        <input class="form-control" name="price" type="number" value="0" id="price">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" id="btnSave"
                            style="float: right; margin-bottom: 10px;"  onclick="save_report()">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script>
        // Category();

        function Category() {

            var category1 = document.getElementById("category").value;

            if (category1 == 1) {
                document.getElementById("itemList").innerHTML = `<select name="item"  onchange="vegetables()" class="form-control" id="item">
                                                                <option selected value="1">Carrot</option>
                                                                <option value="2">Beetroot</option>
                                                                <option value="3">Onion</option>
                                                                </select>
                                                                `;
                                                                
                                                                
            } else if (category1 == 2) {
                document.getElementById("itemList").innerHTML = `<select name="item" onchange ="fruits()" class="form-control" id="item">
                                                                <option value="1">Apple</option>
                                                                <option value="2">Orange</option>
                                                                <option value="3">Watermelon</option>
                                                                </select>`;

                                                                 
                                                                                                                        
            } else if (category1 == 3) {
                document.getElementById("itemList").innerHTML = `<select name="item" onchange="other()" class="form-control" id="item">
                                                                <option value="1">Sugar</option>
                                                                <option value="2">Fish</option>
                                                                <option value="3">Eggs</option>
                                                                </select>`;
                                                                
                                                                

            }

                                                  
                                                              
            

        }



       function vegetables(){
        item_value=document.getElementById("item").value;
       }
       function fruits(){
        item_value=document.getElementById("item").value;
       }
       function other(){
        item_value=document.getElementById("item").value;
       }


     

        $(document).on("click", ".browse", function () {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
        $('input[type="file"]').change(function (e) {
            var fileName = e.target.files[0];
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });




// Goole location



function initMap() {
  var input = document.getElementById('location');
  

  var autocomplete = new google.maps.places.Autocomplete(input);
 
  autocomplete.addListener('place_changed', function() {
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
    }

    var address = '';
    if (place.address_components) {
      address = [
        (place.address_components[0] && place.address_components[0].short_name || ''),
        (place.address_components[1] && place.address_components[1].short_name || ''),
        (place.address_components[2] && place.address_components[2].short_name || '')
      ].join(' ');
    }

    // document.getElementById('placeInfo').innerHTML = '<div><strong>' + place.name + '</strong><br>' + address;    
  });
}




        // var x = 0;


        // $("#btnSave").click(function () {

        //     if ($("#rep_save").valid()) {

        //         Swal.fire({
        //             title: 'Are you sure, Do you want to confirm these information?',
        //             text: "",
        //             type: 'warning',
        //             position: 'top',
        //             animation: false,
        //             heightAuto: false,
        //             customClass: 'animated fadeInDown',
        //             showCancelButton: true,
        //             confirmButtonColor: '#009e53',
        //             cancelButtonColor: '#d33',
        //             confirmButtonText: 'Yes'
        //         }).then((result) => {
        //             if (result.value) {
        //                 x = 1;

        //                 //$("#btnSave").hide();
        //                 //$('#txtActionType').val('employee_registration');
        //                 $("#rep_save").submit();
        //             }
        //         })
        //     }
        // });



$("form#rep_save").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        formData.append('txtActionType','save_report');
        
        $.ajax({
            url: 'havest_report_action.php',
            type: 'POST',
            data: formData,
            success: function (data) {
                alert(data)
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });



    
        
        // <!--validate-->

        $("#rep_save").validate({
            rules: {
                title: "required",
                category: "required",
                itemName: "required",
                discription: "required",
                image: "required",

                quantity: {
                    required: true,
                    digits: true,

                },
                price: {
                    digits: true,
                }

            },

            messages: {

                title: "Please enter your First Name ",
                category: "Please enter your Last Name ",
                itemName: "Please upload your Profile Picture ",
                discription: "Please enter your Address",
                image: "Please enter your Address",


                quantity: {
                    required: "Please enter the quantity",
                },

                price: {
                    required: "Please enter the price",
                    digits: "Please enter a valid Number"
                },
                onfocusout: function (element) {
                    $(element).valid();
                },

            }
        });
    </script>


</body>

</html>