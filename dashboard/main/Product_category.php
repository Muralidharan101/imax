<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/tivo/template/datatable-basic-init.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 08:42:04 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <!-- <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title>IMAX | Products Size Creation</title>

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

    <style>
        #submit {
            background-color: #fe030c;
            border: 0px !important;
        }

        #submit:hover {
            background-color: #bd001fd0;
            border: 0px !important;
        }
    </style>
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"> </div>
        <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php include "navbar.php" ;?>
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include "sidebar.php" ;?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">

                                </div>
                                <h4 class="page-title">Product Category Creation</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->




                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form">
                                                <div class="mb-3">
                                                    <label for="proCategory" class="form-label">Product Category</label>
                                                    <input type="text" id="proCategory" class="form-control"
                                                        style="border:.5px solid #9b9999;">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-6">
                                            <div class="form">
                                                <div class="mt-5">
                                                    <button type="button" id="submit"
                                                        class="btn text-white mt-2 mb-3 float-end ">Create
                                                        Product Category</button>

                                                </div>
                                            </div>
                                        </div> <!-- end col -->




                                    </div>
                                    <!-- end row-->





                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <!-- Danger Alert Modal -->
                    <div id="edit" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content modal-filled bg-white">
                                <div class="modal-body p-4">
                                    <button type="button" class="btn my-2 float-end" data-bs-dismiss="modal"><i
                                            class="mdi mdi-window-close"></i></button>
                                    <div class="text-center">
                                        <i class="ri-close-circle-line h1"></i>
                                        <h4 class="pb-3 text-dark mb-2 ">Product Category Edit</h4>
                                        <div class="mb-3">
                                            <label for="edit_category" class="form-label text-dark float-start">Product
                                                Category</label>
                                            <input type="text" style="border:.5px solid #9b9999;" class="form-control"
                                                id="edit_category">
                                        </div>
                                        <button type="button" class="btn btn-success my-2" id="update">Update</button>
                                        <button type="button" class="btn btn-danger text-white my-2 ms-2"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="row">
                        <!-- Zero Configuration  Starts-->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive theme-scrollbar">
                                        <table class="display" id="basic-1">
                                            <thead>
                                                <tr>
                                                    <th>S no</th>
                                                    <th>Product Category</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Zero Configuration  Ends-->


                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 p-0 footer-left">
                            <p class="mb-0">Copyright © . All rights reserved Designed By <a
                                    href="https://cryptographicsolutions.in/">Cryptographic Solutions</a>.</p>
                        </div>
                        <!-- <div class="col-md-6 p-0 footer-right">
               <a href="https://cryptographicsolutions.in/"></a>
            </div> -->
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Template js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"> </script>
    <!-- login js-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        var EDIT_ID;
        var dataTable;
        var modal_id;

        $(document).ready(function () {

            $("#submit").click(function () {

                var category = $("#proCategory").val().trim();

                if (category == "") {
                    toastr.error("Enter Product Category");
                }

                else{

                    var fd = new FormData();

                    fd.append("category",category);

                    $.ajax({

                        url:'../main/ajax/category/create_category.php',
                        type:"post",
                        data:fd,
                        processData:false,
                        contentType:false,

                        success:function(response){
                             data = JSON.parse(response);

                            if(data.status == "Success"){
                                toastr.success("Product Category Created Successfully !","Success !")
                                
                                $("#proCategory").val("");
                            
                                dataTable.clear().draw();
                            
                                fetchData();
                            }
                            else{
                                toastr.error("Unable to create product category !","Error !")
                            }
                        }
                    })


                }
            });


            function fetchData(){

                $.ajax({
                    
                     url:'ajax/category/list_category.php',
                     type:'get',

                     success:function(response){

                        var result = JSON.parse(response);

                         dataTable = $("#basic-1").DataTable();

                        if(result.status == "Success"){

                            var data = result.data;

                            dataTable.clear().draw();

                            data.map(value => {
                                var editButton =
                                 `<a  data-bs-toggle="modal" data-bs-target="#edit" class='text-success me-2 edit_Category' data-id='${value.id}'><i class="bi bi-pencil-fill h6"></i></a>`;
                                var deleteButton = `<a  class='text-danger me-2 '><i class="bi bi-trash3-fill h6"></i></a>`
                                dataTable.row.add([

                                    value.id,
                                    value.category,
                                    `${editButton}${deleteButton}`

                                ]).draw(false)
                            });
                        }
                     }
                })
            }
            fetchData();

              //  sending edit button id to backend to show previous text in input

            $(document).on('click','.edit_Category',function(){

                var fd = new FormData();
                modal_id = $(this).data("id");
                fd.append("editId",modal_id);

                $.ajax({
                    url:'ajax/category/list_category_using_id.php',
                    type:'post',
                    contentType:false,
                    processData:false,
                    data:fd,

                    success:function (response){
                        var result = JSON.parse(response);
                    
                        if(result.status == "Success")
                        {
                            var Edit_data = result.data;

                            if(Edit_data.length > 0)
                            {
                                $("#edit_category").val(Edit_data[0].category);
                            }
                        }
                    }
                })
            })

         $("#update").click(function(){
            
            var fd = new FormData();

            fd.append("editId",modal_id);

            var input1 = $("#edit_category").val();
            fd.append("edit_Category",input1);

            $.ajax({
                url:'ajax/category/edit_category.php',
                type:'post',
                contentType:false,
                processData:false,
                data:fd,

                success:function(response){
                    var result = JSON.parse(response);
                    if(result.status == "Success"){
                        toastr.success("Product Updated Successfully","Updated !");
                        $('#edit').modal('hide');
                        dataTable.clear().draw();
                        fetchData();
                    }
                    else{
                        toastr.error("Unable to update product","Error !")
                    }
                }
            })

        });


        
// deleting product in table

$("#delete_Product").click(function(){
            
            var fd = new FormData();
            fd.append("edit_Id",Edit_ID);

            $.ajax({
                url:'ajax',
                type:'post',
                contentType:false,
                processData:false,
                data:fd,

                success:function(response){
                    var result = JSON.parse(respose);
                    if(status.result == "Success"){
                        toastr.success("Deleted Successfully","Updated !");
                    }
                    else{
                        toastr.error("Unable to delete","Error !")
                    }
                }
            });

        });

    });
    </script>