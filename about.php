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
              <form action="">
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-8">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="First name"
                      />
                    </div>
                    <div class="col-md-4">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Last name"
                      />
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="">Email</label>
                  <input
                    type="email"
                    name="username"
                    class="form-control"
                    placeholder="Username"
                  />
                </div>
                <div class="mb-3">
                  <label for="">Password</label>
                  <input
                    type="password"
                    name="username"
                    class="form-control"
                    placeholder="Username"
                  />
                </div>
                <div class="mb-3">
                  <label for="">Address</label>
                  <textarea class="form-control" id="" rows="3"></textarea>
                </div>
                <div class="mt-2 mb-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
