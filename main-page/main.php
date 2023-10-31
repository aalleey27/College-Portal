<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SE College admin</title>
    <link rel="stylesheet" href="main-page/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <!-- <<<<<<<<<<<<<<<<<<<<<<<<<  Navbar> >>>>>>>>>>>>>>>>>>>>>> -->
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
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
      </nav>

      <!-- <<<<<<<<<<<<<<<<<<<<<<<< NAVBAR END>>>>>>>>>>>>>>>>>>>>>>>>>> -->

      <!-- <<<<<<<<<<<<<<<<<<<< LEft Area >>>>>>>>>>>>>>>>>>>>>>> -->
      <div class="ccontainer">
        <div class="left-area">
            <div class="left-container">
                <div class="sel-button">
                    <i class="fa-solid fa-gauge"></i>
                    <p>Dashboard</p>
                </div>
    
                <div class="sel-button">
                    <i class="fa-solid fa-landmark"></i>
                    <p>Students</p>
                </div>
    
                <div class="sel-button">
                    <i class="fa-solid fa-gauge"></i>
                    <p>Departments</p>
                </div>
    
                <div class="sel-button">
                    <i class="fa-solid fa-landmark"></i>
                    <p>Classes</p>
                </div>
    
                <div class="sel-button">
                    <i class="fa-solid fa-gauge"></i>
                    <p>Exam</p>
                </div>
    
                <div class="sel-button">
                    <i class="fa-solid fa-gauge"></i>
                    <p>Result</p>
                </div>
            </div>
          </div>
    
          <!-- <<<<<<<<<<<< Right Area?>>>>>>>>>>>>>>
         -->
         <div class="right-container">
            <div class="uppar-area">
                <div class="uppar-heading">
                    <h3>Dashboard| </h3>
                    <h5>OverView</h5>
                </div>
            </div>

            <div class="mid-area">
                <div class="buttonss">
                    <div class="an-click">
                        <a href="">
                            <img id="std-im" src="/assets/images/icon-student.png" alt="">
                            <h4>Add Student</h4>
                        </a>
                    </div>
                </div>
                <div class="buttonss">
                    <div class="an-click">
                        <a href="">
                            <img id="std-im" src="/assets/images/icon-student.png" alt="">
                            <h4>Add Student</h4>
                        </a>
                    </div>
                </div>
                <div class="buttonss">
                    <div class="an-click">
                        <a href="">
                            <img id="std-im" src="/assets/images/icon-student.png" alt="">
                            <h4>Add Student</h4>
                        </a>
                    </div>
                </div>
            </div>
         </div>
      </div>

      

      

     
      




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>