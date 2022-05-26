<?php

  include('./connection.php');

  $statement = pg_query($connection,"SELECT * FROM outmail;");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Mail</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./profile.css">
    <link rel="shortcut icon" href="./anya.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Data Table CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <!-- GSAP Animation CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>
</head>
<body>
    


    <div class="container-fluid">
      <input type="checkbox" id="check">
      <label  class="d-md-block d-sm-block d-none" for="check">
        <i class="bi bi-list" id="btn"></i>
        <i class="bi bi-x" id="cancel"></i>
      </label>
      <div class="row">
        <div class="sidebar col-md-3 col-sm-3 d-md-block d-sm-block d-none" style="background-image: linear-gradient(to bottom left, #e052a0,#ffffff); ,height: 660px;">
          <div class="row text-center">
            <div class="col-md-11 mt-3 ">
              <img class="rounded-circle ms-3"src="./anya.png" alt="" width="150px" height="150px"> <br>
              <p class="text-white fw-bold ms-3 fs-3 mt-2">Rekam Surat</p>
            </div>
            <div class="col-md-1 mt-5 mb-5">
              
            </div>
          </div>
              <div class="mt-2">
                <ul class="navbar-nav">
                  <li class="passive">
                    <div class="my-4">
                      <a href="./index.php" class="text-decoration-none text-white">
                        <h5><i class="bi bi-house-door text-white ms-5 me-3"></i>Beranda</h5>
                      </a>
                    </div>
                  </li>
                  <li class="active">
                    <div class="my-4">
                      <a href="./create_mail.php" class="text-decoration-none text-white">
                        <h5><i class="bi bi-pencil ms-5 me-3"></i>Rekam Surat</h5>
                      </a>
                    </div>
                  </li>
                  <li class="passive">
                    <div class="my-4">
                      <a href="./profile.html" class="menu-active text-decoration-none text-white">
                        <h5><i class="bi bi-person-check ms-5 me-3 text-white"></i>Profil</h5>
                      </a>
                    </div>
                  </li>               
                </ul>
              </div>            
        </div>
        <div class="col-md-3 col-sm-3 d-md-none d-sm-none d-block">
           <nav class="navbar tembus navbar-dark bg-info navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom position-fixed" style="background-image: linear-gradient(to bottom left, #00dbde,#fc00ff);">
            <span class="nav-indicator"></span>
            <ul class="navbar-nav nav-justified w-100">
              <li class="nav-item item-passive">
                <a href="./index.php" class="nav-link text-decoration-none text-white">
                 <i class="bi bi-house-door text-white ms-5 me-3"></i>
                 <span class="title-passive d-block small ms-5 me-3">Home</span>
                </a>
              </li>
              <li class="nav-item item-active">
                <a href="./create_mail.php" class=" nav-link text-decoration-none text-white">
                  <i class="bi bi-pencil ms-5 me-3"></i>
                  <span class="title-active d-block small ms-5 me-3">Add</span>
                </a>
              </li>
              <li class="nav-item item-passive">
                <a href="./profile.html" class=" nav-link text-decoration-none text-white">
                  <i class="p bi bi-person-check ms-5 me-3 text-white"></i>
                  <span class="title-passive d-block small ms-5 me-3">Profile</span>
                </a>
              </li>
            </ul>
          </nav>

        </div>
        <div class="home col-md-8 col-sm-8 col-12" style="background-image: linear-gradient(to bottom left,#fc00ff);">
          <div class="card mt-5 shadow">
            <div class="card-body">
                <form method="POST" action= "Backend/tambah_proses.php">
                        <div class="card-title ">
                                <h5><b>Rekam Surat</b></h5>
                                <h6 class="text-muted">Rekam informasi surat yang keluar di sini</h6>
                                <hr>
                        </div>
                        <div class="form-group mt-2">
                            <p>Nomor Surat</p>
                            <input type="text" class="form-control" id ="nomor" name ="nomor" placeholder="Masukan Nomor Surat . . . ." required>
                        </div>
                        <div class="form-group mt-2">
                            <p for="nama">Tanggal</p>
                            <input type="date" class="form-control" id ="tanggal" name ="tanggal" placeholder="Masukkan tanggal ...." required>
                        </div>
                        <div class="form-group mt-2">
                            <p for="prodi">Judul</p>
                            <input type="text" class="form-control" id ="judul" name ="judul" placeholder="Masukkan Judul surat . . . ." required>
                        </div>

                        <div class="text-center mt-5">
                            <input type="submit" name="submit" class="btn" style="background-color: #00dbde; color: aliceblue;" value="SAVE" onclick="return confirm('Are you sure ?')">
                        </div>
                        
                    </div>
                </form>    
            </div>
          </div>
        </div>
      </div>
    </div>

   
   
    
    <!-- Data Table Framework -->
    <script>

      gsap.from("input", {duration: 1, x: 100, opacity:0});
      gsap.from("p", {duration: 0.8, x: -100, opacity:0});
      gsap.from("h5 ", {duration: 1.5, y: -100, opacity:0});
      gsap.from("h6 ", {duration: 1, y: -100, opacity:0});
    </script>

    <!-- Framework Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>