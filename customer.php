<?php require('connection.php');  ?>
<?php
$sql = "select * from customer";
$result = $con->query($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>crud dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap dashboard-template-main\src\css\bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="bootstrap dashboard-template-main\src\css/custom.css">


    <!--google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

</head>

<body>


    <div class="wrapper">


        <div class="body-overlay"></div>

        <!-------------------------sidebar------------>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/logo.png" class="img-fluid" /><span>Employees</span></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#" class="dashboard"><i class="material-icons">dashboard</i>
                        <span>Dashboard</span></a>
                </li>















            </ul>


        </nav>




        <!--------page-content---------------->

        <div id="content">

            <!--top--navbar----design--------->

            <div class="top-navbar">
                <div class="xp-topbar">

                    <!-- Start XP Row -->
                    <div class="row">
                        <!-- Start XP Col -->
                        <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                            <div class="xp-menubar">
                                <span class="material-icons text-white">signal_cellular_alt
                                </span>
                            </div>
                        </div>
                        <!-- End XP Col -->

                        <!-- Start XP Col -->
                        <div class="col-md-5 col-lg-3 order-3 order-md-2">
                            <div class="xp-searchbar">
                                <form>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon2">GO</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End XP Col -->

                        <!-- Start XP Col -->
                        <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                            <div class="xp-profilebar text-right">
                                <nav class="navbar p-0">
                                    <ul class="nav navbar-nav flex-row ml-auto">
                                        <li class="dropdown nav-item active">
                                            <a href="#" class="nav-link" data-toggle="dropdown">
                                                <span class="material-icons">notifications</span>
                                                <span class="notification">4</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">You have 5 new messages</a>
                                                </li>
                                                <li>
                                                    <a href="#">You're now friend with Mike</a>
                                                </li>
                                                <li>
                                                    <a href="#">Wish Mary on her birthday!</a>
                                                </li>
                                                <li>
                                                    <a href="#">5 warnings in Server Console</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <span class="material-icons">question_answer</span>

                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#" data-toggle="dropdown">
                                                <img src="img/user.jpg" style="width:40px; border-radius:50%;" />
                                                <span class="xp-user-live"></span>
                                            </a>
                                            <ul class="dropdown-menu small-menu">
                                                <li>
                                                    <a href="#">
                                                        <span class="material-icons">
                                                            person_outline
                                                        </span>Profile

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="material-icons">
                                                            settings
                                                        </span>Settings</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="material-icons">
                                                            logout</span>Logout</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>


                                </nav>

                            </div>
                        </div>
                        <!-- End XP Col -->

                    </div>
                    <!-- End XP Row -->

                </div>
                <div class="xp-breadcrumbbar text-center">
                    <h4 class="page-title">TenPlus TV</h4> <!--Changes There-->
                    <ol class="breadcrumb">

                    </ol>
                </div>

            </div>



            <!--------main-content------------->

            <div class="main-content">
                <div class="row">

                    <div class="col-md-12">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
                                        <h2 class="ml-lg-2">Manage Employees</h2>
                                    </div>
                                    <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
                                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                            <i class="material-icons">&#xE147;</i> <span>Add New Sale</span></a>
                                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                                            <i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                         <th>id</th>
                                        <th>F_name</th>
                                        <th>L_name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Ship_addr</th>
                                        <th>street_addr</th>
                                        <th>city</th>
                                        <th>Zip</th>
                                        <th>Country</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        print_r($row);
                                    ?>
                                        <tr>
                                           
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['F_name'] ?></td>
                                            <td><?php echo $row['L_name'] ?></td>

                                            <td><?php echo $row['Mobile'] ?></td>
                                            <td><?php echo $row['Email'] ?></td>
                                            <td><?php echo $row['Ship_addr'] ?></td>
                                            <td><?php echo $row['street_addrl'] ?></td>
                                            <td><?php echo $row['city'] ?></td>
                                            <td><?php echo $row['Zip'] ?></td>
                                            <td><?php echo $row['Country'] ?></td>
                                            
                                            <td>
                                                <a class='btn btn-success' href='edit.php?id=<?php echo $row['id'] ?>'>Edit</a>
                                                <a class='btn btn-danger' href='delete.php?id=<?php echo $row['id'] ?>'>Delete</a>
                                            </td>


                                        </tr>
                                    <?php $i++;
                                    } ?>
                                </tbody>
                            </table>
                            <div class="clearfix">
                                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a href="#">Previous</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Edit Modal HTML -->
                    <div id="addEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="add.php" method="post">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Employee</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>F_name</label>
                                            <input type="text" name="F_name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>L_name</label>
                                            <input type="text" name="L_name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="number" name="Mobile" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="Email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Ship_addr</label>
                                            <input type="text" name="Ship_addr" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>street_addr</label>
                                            <input type="text" name="street_addr" class="form-control" required>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>city</label>
                                            <input type="text" name="city" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Zip</label>
                                            <input type="number
                                            " name="Zip" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" name="Country" class="form-control" required>
                                        </div>
                                      
                                       
                                       
                                     
                                  
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" name="add_customer" class="btn btn-success" value="Add">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Edit Modal HTML -->
                    <div id="editEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Employee</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>F_name</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>L_name</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="number" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Ship_addr</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>street_addr</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>city</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>$Zipip</label>
                                            <input type="number" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Coumtry</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                        
                                      
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-info" value="Save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                    <!-- Delete Modal HTML -->

                    <div id="deleteEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Employee</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete these Records?</p>
                                        <p class="text-warning"><small>This action cannot be undone.</small></p> <!--Change There for Deletion-->
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>


                <!---footer---->


            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="footer-in">
                        <p class="mb-0">&copy 2023 Mishra Ji design - All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!----------html code compleate----------->









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap dashboard-template-main\src\js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap dashboard-template-main\src\js/popper.min.js"></script>
    <script src="bootstrap dashboard-template-main\src\js/bootstrap.min.js"></script>
    <script src="bootstrap dashboard-template-main\src\js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(".xp-menubar").on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $(".xp-menubar,.body-overlay").on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>





</body>

</html>