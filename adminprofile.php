<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title >United Hands</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php include "sidebar.php"; ?>
  <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <?php
function getUserDetails() {
    $user = [
        'name' => 'admin',
        'email' => 'admin@unitedhands.com',
        'address' => '567,colombo, Sri Lanka',
        'phonenumber' => '077 9876 543',
        
        
    ];
    return $user;
}

$user = getUserDetails();
?>
<section>
<div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="image\profile.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
              <h3><strong>Name:</strong> <?php echo $user['name']; ?></h3>
            </div>
          </div>
        </div>

        <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
          <div class="row">
              <div class="col-sm-3">
              <p><strong>Name:</strong></p> 
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-0"><?php echo $user['name']; ?></p>

              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
              <p><strong>Email:</strong></p> 
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-0"><?php echo $user['email']; ?></p>

              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
              <p><strong>Address:</strong></p> 
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-0"><?php echo $user['address']; ?></p>

              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
              <p><strong>Phone Number:</strong></p> 
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-0"><?php echo $user['phonenumber']; ?></p>

              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="col-lg-4">
              <button type="button" class="btn btn-primary" onclick="window.location.href = 'changepassword.php';">Change Password</button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
               Edit Profile</button>

               <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" value="<?php echo $user['name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" value="<?php echo $user['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" value="<?php echo $user['address']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="phonenumber" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phonenumber" value="<?php echo $user['phonenumber']; ?>">
                    </div>
                    
                    
                    
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    
                </form>
            </div>
        </div>
        
    </div>
</div>
</section>

<div class="row">
          <div class="col-md-4">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Projects</span> Project Status
                </p>
              </div>
            </div>

        
          </div>
        </div>

    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

