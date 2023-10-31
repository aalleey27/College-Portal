<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login/login.css">
  <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Welcome SE College admin page</title>
</head>

<body class="back-image">

  <div id="loader-container">
    <div id="loader"></div>
  </div>
  <!-- <<<<<<<<<<<<<<<<<<<<< NAVBAR >>>>>>>>>>>>>>>>>>>>>>>> -->
  <nav class="navbar  bg-light bg-gradient navbarr navbar-expand-sm bg-light justify-content-center">
    <!-- <div class="anchor">
      <a href="Home.php">Home</a>
    </div>
    <div class="anchor">
      <a href="">Services</a>
    </div>
    <div class="anchor">
      <a href="">About</a>
    </div> -->
    <img id="logo-m" src="assets/images/logo.png" alt="">
    <h1>Government Se Graduate College Bahawalpur</h1>
  </nav>

  <!-- <<<<<<<<<<<<<<<<<< NAVBAR END  >>>>>>>>>>>>> -->

  <div class="container-image">

    <div class="left-area">
      <div class="text-main">
        <h2>Welcome to Se College E-portal</h2>
        <p>This is the first portal that has been created by the student of se college CS Department session 2020-2024
        </p>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
          data-bs-target="#example">Login?SignUp</button>


        <!-- <<<<<<<<<<<<<<<<<< MODAL>>>>>>>>>>>>>>>>>>>> -->


        <div class="modal fade" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close model-but" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="login_check.php" method="POST">
                <div class="modal-body">
                  <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Roll No</span>
                    <input type="number" name="rollno" class="form-control" placeholder="Roll No" aria-label="Roll No"
                      aria-describedby="addon-wrapping">
                  </div>
                  <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Password</span>
                    <input type="password" name="password" class="form-control" placeholder="password" aria-label="password"
                      aria-describedby="addon-wrapping">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                  <button type="submit
              " class="btn btn-primary close-btn ">submit</button>
                </div>

              </form>


            </div>
          </div>
        </div>
        <!-- <<<<<<<<<<<<<<<<<< MODAL>>>>>>>>>>>>>>>>>>>> -->
      </div>
    </div>
    <div class="right-area">
      <img id="main-image" src="assets/images/new-person-image.jpeg" alt="">
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>