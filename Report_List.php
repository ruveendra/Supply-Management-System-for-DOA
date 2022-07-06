<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="dropDown.js"></script> -->
    <meta charset="utf-8">
    <title> </title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url(../images/image4.jpg);
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
        <h1>Edit Submit Report</h1>
    </div>

    <div class="main">
        <div class="container" id="reports">
            <!-- <div class="card" style="width: 500px; margin:auto">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <div class='preview'>
                        <img src="../uploads/5fe1fb7b6edb18.38926913.jpg" id="img" width="100" height="100">
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#panel-modal2">Edit</a>
                    <a class="btn btn-secondary">Delete</a>
                </div>
            </div> -->
        </div>
    </div>
    
    
   


    


 <!-- Main Form-->


 <div class="modal modal-nutrition fade full-height from-right" id="panel-modal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
          <div class="col-md-12">
            <h4 class="modal-title"> Edit Report</h4>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="main">
          <div class="container">
  
              <form id="rep_save" method="POST" enctype='multipart/form-data'>
                  <input type="hidden" name="txtActionType" id="txtActionType" value="save_data">
  
                  <div class="form-group row">
                      <label for="inputEmail3"  class="col-sm-2 col-form-label txt-white">Title</label>
                      <div class="col-sm-10">
                          <input type="text" name="title" class="col-xs-3" id="title"  >
                      </div>
                  </div>
  
  
                  <div class="form-group row" onload="Category()">
                      <label for="inputState" class="col-sm-2 col-form-label txt-white">Category</label>
                      <div class="col-sm-10">
                          <select id="category" name="category" class="col-xs-3" onchange="Category()">
                              <option selected>Choose...</option>
                              <option selected value="1">Vegetables</option>
                              <option value="2">Fruits</option>
                              <option value="3">Other</option>
                          </select>
                      </div>
                  </div>
  
                  <div class="form-group row">
                      <label for="inputState" name="itemName" class="col-sm-2 col-form-label txt-white">Item Name</label>
                      <div class="col-sm-10" id="itemList">
  
                      </div>
                  </div>
  
                  <div class="form-group row">
                      <label for="exampleFormControlTextarea1"
                          class="col-sm-2 col-form-label txt-white">Description</label>
                      <div class="col-sm-10">
                          <textarea class="col-xs-3" name="description" id="description" rows="3"></textarea>
                      </div>
                  </div>
  
                  <div class="form-group row">
                      <label for="exampleFormControlFile1" class="col-sm-2 col-form-label txt-white">Upload Image</label>
                      <div class="col-sm-10">
                          <input type="file" class="col-xs-3" id="image" name="image" accept="image/*"
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
                          <input class="col-xs-3" name="quantity" type="number" value="0" id="quantity">
                      </div>
                  </div>
  
                  <div class="form-group row">
                      <label for="example-number-input" class="col-2 col-form-label txt-white">Price (LKR/kg):</label>
                      <div class="col-2">
                          <input class="col-xs-3" name="price" type="number" value="0" id="price">
                      </div>
                  </div>
  
                  <div class="form-group row">
                      <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary" id="btnSave"
                              style="float: right; margin-bottom: 10px;"  onclick="save_edit()">Submit</button>
                      </div>
                  </div>
              </form>
  
          </div>
      </div>



      </div><!--.row-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-flat-secondary" data-dismiss="modal">Cancel</button>
        
        <!-- <button type="submit" class="btn btn-primary" id="btnSave"
                              style="float: right; margin-bottom: 10px;"  onclick="save_edit()">Submit</button> -->
      </div>
    </div>
  </div>


  <script>
        $(document).ready(function() {
            autoload();

        });


        function autoload() {
            $('#reports').empty();

           
        

            $.post('../havest_report_action.php', {
                    'txtActionType': 'get_farmer_reports',
                    'farmer_id': 1
                },
                function(data) {


                    for (var i = 0; i < data.length; i++) {

                        $('#reports').append('<div style="margin-bottom:10px"><div class="card" style="width: 500px; margin:auto;">' +
                            '<div class="card-body">' +
                            '<h5 class="card-title">' + data[i][2] + '</h5>' +
                            '<div class="preview">' +
                            '<img src="../uploads/5fe1fb7b6edb18.38926913.jpg" id="img" width="100" height="100"></div>' +
                            '<p class="card-text">' + data[i][5] + '</p>' +
                            '<button class="btn btn-primary" data-toggle="modal" onclick="mainForm('+ data[i][0] +')" data-target="#panel-modal2">Edit</button>' +
                            '<button class="btn btn-secondary" onclick="delete_report(' + data[i][0] + ')">Delete</button></div></div></div>');
                            
                         
                    }
                }, 'json'
            );
        }

        

        function mainForm(hr_id){ 
            
            x=hr_id;
            alert(x);


      
        
           
     
     $.post('../havest_report_action.php', {
                     'txtActionType': 'default_report',
                     'hr_id': hr_id
                 },
                 function(data) {
 
 
                 
 
                         document.getElementById('title').value = data[0][2];
                         document.getElementById('category').value = data[0][3];
                         
                         
                         item_value= data[0][4];
                         document.getElementById('description').value = data[0][5];
                         document.getElementById('preview').src = data[0][6];
                         
                         document.getElementById('quantity').value = data[0][7];
                         
                         document.getElementById('price').value = parseFloat(data[0][8]);
                         Category();
                         document.getElementById('item').value = data[0][4];


 
                     
                 }, 'json'
             );
             
     
 
                 
 
 




$("#panel-modal2").modal('toggle');

return x;





// alert(item) //see here usage
};

        function delete_report(id) {
            
            $.post('../havest_report_action.php', {
                    'txtActionType': 'delete_report',
                    'hr_id': id
                },
                function(data) {
                    autoload();
                }, 
            );
        }



//  function formDefault(){
     
//     $.post('../havest_report_action.php', {
//                     'txtActionType': 'get_farmer_reports',
//                     'farmer_id': 1
//                 },
//                 function(data) {


//                     for (var i = 0; i < data.length; i++) {

//                         document.getElementById('title').value = data[i][2];
//                         document.getElementById('category').value = data[i][3];
//                         document.getElementById('itemList').value = data[i][4];
//                         document.getElementById('description').value = data[i][5];
//                         document.getElementById('image').value = data[i][6];
//                         document.getElementById('quantity').value = data[i][7];
//                         document.getElementById('Price').value = data[i][8];

//                     }
//                 }, 'json'
//             );

    

                

// }

    





        


        function Category() {

            var category1 = document.getElementById("category").value;
            // document.getElementById('item').value =item_value;

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


        $(document).ready(function() {

        });

        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0];
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

    // Update button



    $("form#rep_save").submit(function(e) {

        e.preventDefault();
        var y = x
        var formData = new FormData(this);
        formData.append('txtActionType','save_edit');
        formData.append('hr_id',y);
        formData.append('item',item_value);
        
        $.ajax({
            url: '../havest_report_action.php',
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



        // function save_edit() {
            
        //     var y = x
            
        //     alert(item_value);
            

        //     $.post('../havest_report_action.php', {
        //             'txtActionType':'save_edit',
        //             'hr_id': y,
        //             title:document.getElementById("title").value,
        //             category:document.getElementById("category").value,
        //             item:item_value,
        //             description:document.getElementById("description").value,
        //             quantity:document.getElementById("quantity").value,
        //             price:document.getElementById("price").value,

                    
                    

                    

                    
        //         },
        //         function(data) {
        //             alert(data) ;
                    
        //         }, 
        //     );
        // }



    </script>





</body>

</html>