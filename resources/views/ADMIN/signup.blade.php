<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('ADMIN/bootstrap/css/bootstrap.min.css') }}">
    <style>
        .modal {
            display: block; /* Menampilkan modal sebagai contoh */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        .cancelbtn, .signupbtn {
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="id01" class="modal">
        <form id="signupForm" class="modal-content" action="/status" method="POST">
          @csrf
          <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <input type="hidden" name="status" value="0">
            <div class="form-group">
                <label for="username"><b>Username</b></label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
            </div>
      
            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="text" class="form-control" placeholder="Enter Email" name="email" required>
            </div>
      
            <div class="form-group">
                <label for="psw"><b>Password</b></label>
                <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
            </div>
            
            <div class="form-group form-check">
                <label>
                  <input type="checkbox" class="form-check-input" checked="checked" name="remember"> Remember me
                </label>
            </div>
      
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
            <div class="clearfix">
              <button type="submit" class="btn btn-primary signupbtn">Sign Up</button>
              <br><br>
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger cancelbtn">Cancel</button>
            </div>
          </div>
        </form>
    </div>

    <script src="{{ asset('ADMIN/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
