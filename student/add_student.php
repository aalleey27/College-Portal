<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main-page/main.css">
    <link rel="stylesheet" href="add_student.sass">
    <title>SE COLLEGE PORTAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="main-uppar">
        <div class="text-upp">
            <h3>Government Sadiq Egerton Graduate College Bahawalpur</h3>
        </div>
    </div>


    <!-- <<<<<<<<<<<<<<<<<<<<<<<<<  Navbar> >>>>>>>>>>>>>>>>>>>>>> -->
    <!-- <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SE COllege Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <i class="fa fa-home"></i>
                Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-envelope-o">
                  <span class="badge badge-danger">11</span>
                </i>
                Link
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">
                <i class="fa fa-envelope-o">
                  <span class="badge badge-warning">11</span>
                </i>
                Disabled
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-envelope-o">
                  <span class="badge badge-primary">11</span>
                </i>
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-bell">
                  <span class="badge badge-info">11</span>
                </i>
                Test
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-globe">
                  <span class="badge badge-success">11</span>
                </i>
                Test
              </a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav> -->


    <nav class="navbar bg-body-tertiary justify-content-center position-relative d-flex">
        <form class="container-fluid justify-content-start">
            <div class="btn-group" role="group">
                <button type="button" class="btn w-50 dropdown-toggle btn btn-outline-success me-2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Student
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-bs-whatever="@mdo">Add New Student</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="gridmoddle" data-bs-target="#gridmoddle"
                            data-bs-whatever="@mdo">View Student List</a></li>
                </ul>
            </div>

        </form>
    </nav>



    <!-- <<<<<<<<<<<<<<<<<<<<<<<< NAVBAR END>>>>>>>>>>>>>>>>>>>>>>>>>> -->

    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body " id="gridmoddle">
                    <div class="container-fluid">
                        <form action="add_std.php" method="post">
                            <div class="row">
                                <div class="col-md-4">

                                    <label for="recipient-name" class="col-form-label">Full Name</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">Father Name</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">Contact No</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">Date Of Birth</label>
                                    <input type="date" class="form-control" id="recipient-name">
                                </div>
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">Address</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">Date of entry</label>
                                    <input type="date" class="form-control" id="recipient-name">
                                </div>
                            </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>