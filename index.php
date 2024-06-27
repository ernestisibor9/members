<?php 
    if(isset($_POST['submit'])){
        // Retrieve the form data
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        // Set the header variables
        $headers = "From : $firstname" . "" .  "$lastname" . "\r\n" .
                    "Email: $email" . "\r\n" . "Address: $address";

        // Create a method to send the email
        if(mail("info@queen.ailff.com", "Registration Form", 'You have been registered', $headers)){
            echo "Registration successfully done!";
        }
        else{
            echo "Registration failed!";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  </head>
  <body class="bg-primary">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card shadow p-4">
            <h4 class="text-center text-primary">Registration Form</h4>
            <div class="card-body">
              <form action="" method="post">
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-8">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="First name"
                        name="firstname"
                      />
                    </div>
                    <div class="col-md-4">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Last name"
                        name="lastname"
                      />
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Username"
                    name="email"
                  />
                </div>
                <div class="mb-3">
                  <label for="">Address</label>
                  <textarea class="form-control" id="" rows="3" name="address"></textarea>
                </div>
                <div class="mt-2 mb-2">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
