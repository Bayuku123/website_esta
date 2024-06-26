<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Chai Kar Sing -->
    <link rel="stylesheet" href="css/AdminLogin.css" />
    <link href="fontawesome/css/all.css" rel="stylesheet">  
    <link rel="stylesheet" href="css/admin.css" />
    <title>Admin Login</title>

  </head>
  <body>
    <div id="form_login" >
        <div class="container login-container shadow bg-white rounded p-4">
            <div class="justify-content-center">
                <div class="row d-inline">
                    <i class="fa fa-cog fa-2x pl-3"></i>
                    <h3 class="d-inline ml-2">Admin V-Continental</h3>
                </div>
                <form class="row" method="post" action="includes/admin-login.inc.php"> 
                    <div class="form-group w-100 px-3 pt-3">
                        <label for="usernameInput"><i class="fas fa-user mr-2 px-1"></i>Username</label>
                        <input type="text" class="form-control" id="usernameInput" placeholder="Enter username" required name="username" />
                    </div>
                    <div class="form-group w-100  px-3 pt-3">
                        <label for="passwordInput"><i class="fas fa-lock mr-2 px-1"></i>Password</label>
                        <input type="password" class="form-control" id="passwordInput" placeholder="Enter password" required name="password" />
                    </div>
                    <div class="form-group w-100 px-3">
                        <button type="submit" name="admin-login-submit" class="btn btn-dark">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>