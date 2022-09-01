<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
     <!-- Login Base -->
  <div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-7 col-lg-5">
            <div class="card mt-3">
                <div class="card-body">
                <form action="login_action.php" method="POST">
                    <div class="mb-3 ">
                        <center><h2>Silahkan Login</h2></center>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button> <br>
                    <a href="daftar.php"><center>Belum Punya Akun? Daftar disini</center></a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
     <!-- Login Base -->
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>