<?php
    include('kondisireg.php');
    // When form submitted, insert values into the database.
?>

<div class="d-md-flex half">
    <div class="bg" ></div>

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-4">
                <h3>Register Twelve Kitchen</h3>
              </div>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              <form action="kondisi2.php" method="POST">
                <!-- conten -->
                <div class="mb-2">
                  <label for="exampleFormControlInput1" class="form-label">Username / Email</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="username">
                </div>
                <div class="mb-2">
                  <label for="exampleFormControlInput1" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="example name" name="nama">
                </div>
                <div class="mb-2">
                  <label for="exampleFormControlInput1" class="form-label">No. Telphon</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="089166702313" name="telp">
                </div>
                
                <div class="mb-2">
                  <label for="exampleFormControlInput1" class="form-label">Alamat lengkap</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="alamat">
                </div>
                <div class="mb-2">
                  <label for="exampleFormControlInput1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="" name="pass">
                </div>
                <div class="mb-2">
                  <label for="exampleFormControlInput1" class="form-label">Re - Password</label>
                  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="" name="repass">
                </div>


                <div class="d-sm-flex mb-3 align-items-center">
                  <span class="ml-auto"><a href="login.php" class="forgot-pass">I have acount</a></span> 
                </div>
                <input type="submit" value="Register" class="btn btn-block btn-primary" name="regis">
                <!-- end conten -->
              </form>
            </div>
          </div>
        </div>
      </div>
    

    
  </div>