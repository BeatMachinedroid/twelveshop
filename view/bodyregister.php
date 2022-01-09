<?php


    // When form submitted, insert values into the database.

    
?>

<div class="d-md-flex half">
    <div class="bg" ></div>
      <div class="container">
        
          <div class="col-md-12">
            <div class="form-block mx-auto">
            <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
              <div class="text-center mb-4">  
                <h3>Register Twelve Kitchen</h3>
              </div>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                <!-- conten -->
                <form action="register.php" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="username">
                </div>
                <div class="form-group first">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" placeholder="Example-name" id="username" name="nama">
                </div>
                <div class="form-group first">
                  <label for="telp">No. Telphon</label>
                  <input type="text" class="form-control" placeholder="08" id="username" name="telp">
                </div>
                <div class="form-group first">
                  <label for="almt">Address</label>
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="almt">
                </div>
                <div class="form-group last mb-3">
                  <label >Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="pass">
                  <?php if($validate != '') {?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php }?>
                </div>
                <div class="form-group last mb-3">
                  <label >Re - Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="repass">
                  <?php if($validate != '') {?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php }?>
                </div>
                
                <div class="d-sm-flex mb-2 align-items-center">
                  <span class="ml-auto"><a href="register.php" class="forgot-pass">i have acount</a></span> 
                </div>

                <input type="submit" value="Register" name="Register" class="btn btn-block btn-primary">

              </form>
                <!-- end conten -->
              </form>
            </div>
          </div>
        </div>
      </div>
    
  </div>