<!DOCTYPE html>
<html lang="en">
<head>
    <!-- STYLE -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="/ZC/admin/css/datables.css" rel="stylesheet">
        <link href="/ZC/admin/css/fontAwesome.css" rel="stylesheet">
        <link href="/ZC/admin/css/clothes.css" rel="stylesheet">
        <link href="/ZC/admin/css/w3school.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <link rel="icon" type="image/gif/png" href="/ZC/admin/assets/images/logo.png">
        <title>Zsaliah's Closet Online Shop</title>
    <!-- END OF STYLE -->
</head>
<body>
    <!-- NAVBAR -->
        <nav style="background-color: #B97D60 !important; " class="navbar navbar-expand-lg navbar-dark  py-2 fixed-top px-5">
        <a class="navbar-brand me-auto ms-2" href="#" style="color:#201812">Zsaliah's Closet Online Shop <i class="fas fa-columns px-1"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ms-auto pt-2 text-white">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item px-2 dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-4"></i>                           
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdown">
                            <style>
                            .dropdown-menu li a:hover,.dropdown-item:hover{
                                background-color:white;
                                color: black !important;
                            }
                        </style>
                            <li><a class="dropdown-item text-white" href="#"><i class="fas fa-cog px-1"></i> <span>SETTINGS</span></a></li>
                            <li><button class="dropdown-item text-white" id="logout"><i class="fas fa-door-open px-1"></i><span> LOGOUT</span></button></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- END NAVBAR -->

    <!-- MAIN CONTENT -->
        <div class="w3-sidebar w3-bar-block text-dark" style="width:15%; background-color: #B97D60 !important;">
            <h3 class="w3-bar-item text-light text-center"><img class="card-img-top pt-5" style="border-radius:50%;" src="/ZC/admin/assets/images/fttcs.jpg"></h3>
            <a href="/ZC/admin/admin.php" class="w3-bar-item w3-button pt-3 sm-py-3 text-center">DASHBOARD</a>
            <a href="/ZC/admin/clothesA.php" class="w3-bar-item w3-button pt-3 sm-py-3 text-center">PRODUCTS</a>
            <a href="/ZC/admin/customerA.php" class="w3-bar-item w3-button pt-3 sm-py-3 text-center">CUSTOMER</a>  
            <a href="/ZC/admin/transaction.php" class="w3-bar-item w3-button pt-3 sm-py-3 text-center">TRANSACTION</a>
            <a href="/ZC/admin/discountA.php" class="w3-bar-item w3-button pt-3 sm-py-3 text-center">DISCOUNT</a>
            <p class="text-center pt-5 sm-mt-5" id="clockDisplay"></p>
            <p class="text-center" id="dateDisplay"></p>
        </div>
        <div style="margin-left:15%">
            <div class="container bg-white pt-5 mt-2">
                <h4 class="mb-3 pt-5"><i class="bi bi-calendar3-fill"></i> CLOTHES ACTIVE</h4>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/ZC/admin/clothesA.php">&nbsp;&nbsp;ACTIVE&nbsp;&nbsp;</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" style="color:#AD8B73;" href="/ZC/admin/clothesNS.php">NO STOCK</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" style="color:#AD8B73;" href="/ZC/admin/clothesNA.php">NOT ACTIVE</a>
                    </li>
                </ul>
                <div class="d-flex col-12 mt-4">
                    <a type="button" class="btn text-white mx-1" style="background-color: #826F66 !important;" href="/ZC/admin/clothesA.php"> <i class="fas fa-redo px-1"></i> REFRESH </a>
                    <button type="button" class="btn text-white mx-1" style="background-color: #826F66 !important;" data-bs-toggle="modal" data-bs-target="#addDish"> <i class="fas fa-plus px-1"></i> ADD PRODUCT</button>
                </div>
            </div>
            
            <div class="container my-2 pt-1">
                <div class="row">
                    <div class="col-3 ms-auto">
                    <form class="d-flex">
                        <input class="form-control me-1" type="search" id="myInput" placeholder="Search" aria-label="Search">
                        <button disable class="btn text-white px-3" style="background-color: #826F66 !important;" type="button">Search</button>
                    </form>
                    </div>
                </div>
                <table id="closetTable" style="border:none;" class="table table-striped table-borderless text-center align-middle" style="border-top:1px solid black;">
                    <thead style="font-size:18px;">
                        <tr>
                            <th>Product</th>
                            <th>Category</th>
                            <th width="35%">Description</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="closetData"></tbody>
                </table>
            </div>
        </div>
    <!-- MAIN CONTENT END -->

    <!-- ADD DISH MODAL -->
        <div class="modal fade" id="addDish" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-11">
                            <h5 class="modal-title" id="exampleModalLabel" style="font-size:23px;"><i class="fas fa-plus"></i> New <span style="color:#AD8B73;">Product</span> </h5>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="container">
                    <form id="newDish">
                    <div class="row g-4 mb-1">
                        <div class="col-7">
                            <label class="form-label">Insert Image:</label>
                            <input class="form-control" type="file" name="closetImage" id="closetImage" required>
                        </div>
                        <div class="col-5">
                            <label class="form-label">Category:</label>
                            <select class="form-select" aria-label="Default select example" name="closetCategory" id="closetCategory" required></select>
                        </div>
                    </div>   
                    <div class="row g-4 mb-1">
                        <div class="col-6">
                            <label class="form-label">Product:</label>
                            <input type="text" class="form-control" name="closetName" id="closetName" required>
                        </div>
                        <div class="col-3">
                            <label class="form-label">Price:</label>
                            <input type="text" class="form-control" name="closetPrice" id="closetPrice" required>
                        </div>
                        <div class="col-3">
                            <label class="form-label">Stock:</label>
                            <input type="number" min="0" class="form-control" name="closetStock" id="closetStock" required>
                        </div>
                    </div>
                    <div class="mb-1 mt-2">
                        <label class="form-label">Description:</label>
                        <textarea style="resize:none;" class="form-control" name="closetDescription" id="closetDescription" rows="3" required></textarea>
                        </div>
                    </div>
                <div class="row mt-4">
                    <div class="col-5 ms-auto">
                        <button type="button" class="btn text-white" style="background-color: #826F66 !important;" name="closetSubmit" id="closetSubmit">Add Product</button>
                    </div>
                </div>
            </form>
                </div>
                </div>
            </div>
        </div>
    <!-- END ADD DISH MODAL -->

    <!-- UPDATE DISH MODAL -->
        <div class="modal fade" id="updateclosetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-11">
                            <h5 class="modal-title" id="exampleModalLabel" style="font-size:23px;"><i class="fas fa-edit"></i> Update <span style="color:#AD8B73;">Dish</span> </h5>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="container">
                <form id="updateDishForm">
                    <div class="col-12 text-center mb-2">
                    <img class="img-thumbnail" style="height:170px; width:280px; border-radius:10px;" src="" id="updateImage">
                </div>
                <div class="row g-4 mb-2">
                    <div class="col-6">
                        <label class="form-label">Name of Dish:</label>
                        <input type="hidden" name="updateID" id="updateID">
                        <input type="text" class="form-control" name="updateName" id="updateName">
                    </div>
                    <div class="col-6">
                        <label class="form-label">New Image:</label>
                        <input class="form-control" type="file" name="updateImage" >
                    </div>
                </div>

                <div class="row g-4 mb-2">
                    <div class="col-4">
                        <label class="form-label">Price (₱):</label>
                        <input type="text" class="form-control" name="updatePrice" id="updatePrice">
                    </div>
                    <div class="col-4">
                        <label class="form-label">Category:</label>
                        <select class="form-select" aria-label="Default select example" name="updateCategory" id="updateCategory"></select>
                    </div>
                    <div class="col-4">
                        <label class="form-label">Stock:</label>
                        <input class="form-control" type="number" min="0" name="updateStock" id="updateStock">
                    </div>
                </div>   

                <div class="mb-1 mt-2">
                    <label class="form-label">Description:</label>
                    <textarea style="resize:none;" class="form-control" name="updateDescription" id="updateDescription" rows="3"></textarea>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-4 ms-auto">
                        <button type="button" class="btn text-white" style="background-color: #826F66 !important;" name="updateBtn" id="updateBtn">Save Changes</button>
                    </div>
                </div>
        </form>
            </div>
            </div>
        </div>
     </div>
    <!-- END UPDATE DISH MODAL -->

    <!-- JAVASCRIPT -->
        <script src="/ZC/admin/js/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="/ZC/admin/js/sweetalert.js"></script>
        <script src="/ZC/admin/js/datables.js"></script>
        <script src="/ZC/admin/js/logout.js"></script>
        <script src="/ZC/admin/js/Date_Time.js"></script>

    <!-- END OF JAVASCRIPT -->

    <!-- DETABLES BEHAVIOR -->
        <script>
                $(document).ready( function () {
                    getclosetA();
                    closetCategories();
                    $('#closetTable').DataTable({
                        ordering:false,
                        searching:false,
                        paging:false,
                        bLengthChange: false,
                        info:false,
                        scrollY: "45vh",
                        scrollX: false,
                    });
                });
        </script>
    <!-- END DETABLES BEHAVIOR -->

    <!-- ADD DISH FUNCTION -->
        <script>
            $('#closetSubmit').click(function(){
                var currentForm = $('#newDish')[0];
                var data = new FormData(currentForm);
            if($('#closetImage').val() == '' || $('#closetName').val() =='' || $('#closetCategory').val() =='' || $('#closetPrice').val() =='' || $('#closetDescription').val() == ''){
                Swal.fire(
                'Insert Failed',
                'Please, Input all missing Fields',
                'warning'
                )           
            }else{
                $.ajax({
                url: "/ZC/admin/php/newDish.php",
                method: "POST",
                dataType: "text",
                data:data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if(response == 'Sorry, The closet are already exist'){
                                 Swal.fire(
                                'Register Failed',
                                'Sorry, The product are already Exist',
                                'error'
                                )
                        }else if(response == 'File is not an image.'){
                                Swal.fire(
                                'Register Failed',
                                'Sorry, The file is not an image.',
                                'error'
                                )
                        }else if(response == 'Sorry, your file is too large.'){
                                Swal.fire(
                                'Register Failed',
                                'Sorry, your file is too large.',
                                'error'
                                )
                        }else if(response == 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'){
                                Swal.fire(
                                'Register Failed',
                                'Sorry, only JPG, JPEG, PNG & GIF files are allowed.',
                                'error'
                                )
                        }else if(response == 'Sorry, your file was not uploaded.'){
                                Swal.fire(
                                'Register Failed',
                                'Sorry, your file was not uploaded.',
                                'error'
                                )
                        }else if(response == 'Sorry, Registered Failed'){
                                Swal.fire(
                                'Stored Registered',
                                'Sorry, Registered Failed',
                                'error'
                                )
                        }else if(response == 'New closet Stored Successfully.'){
                            Swal.fire({
                            title: 'Stored Successfully',
                            text: "New Product Stored Successfully.",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Continue'
                            }).then((result) => {
                            if (result.isConfirmed) {
                                getclosetA();
                                $("#newDish").trigger("reset");
                            }
                            })
                        }
                },
                error:function(er){
                console.log(er)
                }
                })
            }
        })
        </script>
    <!-- END OF ADD DISH FUNCTION -->

    <!-- FUNCTION FOR FETCH DATA FOR THE UPDATE MODAL -->
         <script>    
                function update(id){
                    $('#updateclosetModal').modal('show')
                    $.ajax({
                        url: '/ZC/admin/fetchData/updateDish.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {closetID: id},
                    })
                    .done(function(response) {
                        $('#updateID').val(response[0].closetID)
                        $('#updateImage').attr("src","/ZC/admin/assets/closetPhoto/"+response[0].closetImage)
                        $('#updateName').val(response[0].closetName)
                        $('#updateCategory').val(response[0].closetCategory)
                        $('#updateStock').val(response[0].closetStock)
                        $('#updateDescription').val(response[0].closetDescription)
                        $('#updatePrice').val(response[0].closetPrice)
                        })
                }
            </script>
    <!-- END FUNCTION FOR FETCH DATA FOR THE UPDATE MODAL -->

    <!-- FUNCTION FOR FETCH DATA FOR THE UPDATE STATUS MODAL -->
            <script>    
               function updateStatus(id){
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Do you want to deactivate this Dish?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, deactivate it'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                            url: '/ZC/admin/php/dishDeactivate.php',
                            type: 'POST',
                            dataType: 'json',
                            data: {closetStatusID: id},
                        });
                        Swal.fire({
                        title: 'Deactivate Succesfully',
                        text: "Dish was deactivate successfully",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Continue'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            getclosetA();
                        }
                        })
                        }
                        })
                    }
            </script>
    <!-- END FUNCTION FOR FETCH DATA FOR THE UPDATE STATUS MODAL -->

    <!-- FUNCTION FOR FETCH DATA FOR SEARCH  -->
            <script>
                $(document).ready(function(){
                    $("#myInput").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#closetData tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>
    <!-- END FUNCTION FOR FETCH DATA FOR SEARCH  -->

    <!-- FUNCTION FOR FETCHING closet CATEGORY -->
        <script>
                function closetCategories(){
                    $.ajax({
                    url: '/ZC/admin/fetchData/closetCategory.php',
                    dataType:"json",
                    method:"GET",
                    success:function(response){
                        var data = "";
                        data+="<option selected>Choose</option>";
                        for(i=0;i<response.length;i++){
                            data+="<option value='"+response[i].categories_ID+"'>"+response[i].categories+"</option>"
                        }
                        $('#closetCategory').html(data)
                        $('#updateCategory').html(data)
                    },
                    error:function(error){
                        console.log(error)
                    }
                })
                }
                </script>
    <!-- END FUNCTION FOR FETCHING closet CATEGORY -->
  
    <!-- FUNCTION FOR FETCH closet DATA FOR TABLE -->
        <script>
            function getclosetA(){
                $.ajax({
                    url	:	"/ZC/admin/fetchdata/getCloset.php",
                    method:	"POST",
                    data	:	{getclosetA:1},
                    success	:	function(data){
                        $("#closetData").html(data);
                    }
                })
            }
        </script>
    <!-- FUNCTION FOR FETCH closet DATA FOR TABLE-->

    <!-- FUNCTION FOR UPDATE PRODUCT -->
        <script>
            $('#updateBtn').click(function(e){
                e.preventDefault();
                Swal.fire({
                    title: 'Save Changes?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Continue'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var currentForm = $('#updateDishForm')[0];
                        var data = new FormData(currentForm);
                        $.ajax({
                            url:"/ZC/admin/php/updateCloset.php",
                            method:"POST",
                            dataType: "text",
                            data:data,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success:function(response){
                                if(response == 1){
                                    Swal.fire({
                                        title: 'Update Successfully',
                                        text: "closet Has Updated",
                                        icon: 'info',
                                        confirmButtonColor: '#3085d6',
                                        confirmButtonText: 'Continue'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            update();
                                            getclosetA();
                                        }
                                    })
                                }else if(response == 'File is not an image.'){
                                    Swal.fire(
                                    'Update Failed',
                                    'File is not an image.',
                                    'error'
                                    )
                                }else if(response == 'Sorry, the file is too large.'){
                                    Swal.fire(
                                    'Update Failed',
                                    'Sorry the file is too large.',
                                    'error'
                                    )
                                }else if(response == 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'){
                                    Swal.fire(
                                    'Update Failed',
                                    'Sorry only JPG, JPEG, PNG & GIF files are allowed.',
                                    'error'
                                    )
                                }else if(response == 0){
                                    Swal.fire(
                                    'Update Failed',
                                    'closet Has Not Updated',
                                    'error'
                                    )
                                }
                            }
                        })
                    }
                })
            })
        </script>
    <!-- FUNCTION FOR UPDATE PRODUCT -->

</body>
</html>