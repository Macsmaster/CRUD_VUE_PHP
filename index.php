<?php include('bd/conexion.php')  ?>

<?php include('includes/header.php')  ?>


<!-- Vue -->

<div id="app">

    <div class="container-fluid">

        <div class="row bg-dark">
            <div class="col-lg-12">
                <p class="text-center m-auto display-6 p-2 text-white">
                    CRUD VUE WITH</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <h3>Registered Users</h3>
            </div>
            <div class="col-lg-6">
                <button class="btn btn-info float-right" @click="showModal = true">
                    <i class="fa fa-user"></i>&nbsp;&nbsp;Add New User
                </button>
            </div>
        </div>
        <hr class="bg-info">
        <div class="alert alert-danger" v-if="errorMessage">
            Error Message
        </div>
        <div class="alert alert-success"  v-if="successMessage">
            Success Message
        </div>

        <!--   -->
        <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered tabled-striped">
                        <thead>
                            <tr class="bg-info text-light text-center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Miguel</td>
                                <td>miguel@gmail.com</td>
                                <td>2321312313</td>
                                <td><a href="#" class="text-success"  @click="showEditModal=true"><i class="fa fa-edit"></i></a></td>
                                <td><a href="#" class="text-danger" @click="showDeleteModal = true"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Miguel</td>
                                <td>miguel@gmail.com</td>
                                <td>2321312313</td>
                                <td><a href="#" class="text-success" @click="showEditModal=true"><i class="fa fa-edit" ></i></a></td>
                                <td><a href="#" class="text-danger" @click="showDeleteModal = true"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Miguel</td>
                                <td>miguel@gmail.com</td>
                                <td>2321312313</td>
                                <td><a href="#" class="text-success" @click="showEditModal=true"><i class="fa fa-edit"></i></a></td>
                                <td><a href="#" class="text-danger" @click="showDeleteModal = true"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        

    </div>


   <!--  ADD NEW USER MODEL -->

    <div id="overlay" v-if="showModal">
        
        <div class="modal-dialog " >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New User</h5>
                    <button type="button" class="close" @click="showModal = false">

                    <span aria-hidden="true">&times;</span>

                    </button>
                </div>
                <div class="modal-body p-4">
                    <form action="" method="post" class="">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control " placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control " placeholder="E-Mail">
                        </div>
                        <div class="form-group">
                            <input type="number" name="number" class="form-control" placeholder="Number">
                        </div>
                      
                        <div class="form-group">
                            <button class="btn btn-info btn-block">Add User</button>
                          
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


     <!--  EDIT USER MODEL -->

     <div id="overlay" v-if="showEditModal">
        
        <div class="modal-dialog " >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button type="button" class="close" @click="showEditModal = false">

                    <span aria-hidden="true">&times;</span>

                    </button>
                </div>
                <div class="modal-body p-4">
                    <form action="" method="post" class="">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control " placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control " placeholder="E-Mail">
                        </div>
                        <div class="form-group">
                            <input type="number" name="number" class="form-control" placeholder="Number">
                        </div>
                      
                        <div class="form-group">
                            <button class="btn btn-info btn-block">Update</button>
                          
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


     <!--  DELETE USER MODEL -->

     <div id="overlay" v-if="showDeleteModal">
        
        <div class="modal-dialog " >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete User</h5>
                    <button type="button" class="close" @click="showDeleteModal = false">

                    <span aria-hidden="true">&times;</span>

                    </button>
                </div>
                <div class="modal-body p-4">
                    <h4 class="text-danger">Are you sure?</h4>
                    <h5>You are deleting 'userxxx'</h5>
                    <hr>
                    <button class="btn btn-danger btn-lg" @click="showDeleteModal = false">Yes</button>
                    &nbsp;      &nbsp;      &nbsp;  
                    <button class="btn btn-success btn-lg" @click="showDeleteModal = false">No</button>
                </div>
            </div>
        </div>

    </div>


</div>








<?php include('includes/footer.php')  ?>