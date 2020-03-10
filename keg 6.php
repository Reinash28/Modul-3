<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width">
    <!-- css  bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- load jquery and bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Dynamic Table</title>
    <script type="text/javascript">
        function Login() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var element = "";
            if (username == "admin" && password == "admin") {
                element += "<div class='alert alert-success alert-dismissible'>";
                element += "<span class= 'close' data-dismiss='alert'>&times; </span>";
                element += "<h4>Login Berhasil</h4>"
                element += "Anda berhasil login...."
                element += "</div>"
            } else {
                element += "<div class='alert alert-success alert-dismissible'>";
                element += "<span class= 'close' data-dismiss='alert'>&times; </span>";
                element += "<h4>Login Gagal</h4>"
                element += "Anda gagal login...."
                element += "</div>"
            }
            document.getElementById('login-body').innerHTML;
            document.getElementById('apalah').innerHTML += element;
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="card col-sm-4">
            <div class="card-header bg-primary text-white text-center">
                <h4>LOGIN FORM</h4>
            </div>
            <div class="card-body" id='apalah'>
            </div>
            <div class="card-body" id="login-body">
                Username
                <div class="col-sm-12">
                    <input type="text" id="username" class="form-control">
                </div>
                Password
                <div class="col-sm-12">
                    <input type="password" id="password" class="form-control">
                </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary btn-block" onclick="Login();">
          LOGIN
        </button>
            </div>
        </div>
    </div>
</body>

</html>
