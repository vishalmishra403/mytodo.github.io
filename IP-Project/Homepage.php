<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel&family=Lobster+Two&family=Sacramento&family=Tapestry&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="homepage">
        <!-- Logo & Nav -->
        <nav>
            <ul>
                <li><a class="active" href="Homepage.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <h2 id="logo"><span style="color: tomato;">TO-DO-LIST</span></h2>
                
            </ul>
        </nav>

        <!-- Main heading -->
        <div class="main_heading"><h2>Welcome to your To-Do-List<br>
            here you can add your daily task and edit it easily</h2></div>

        <!-- Buttons -->
        <div id="btn">   
            <button id="btn1" type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                data-bs-target="#login_modal">Login</button>
            <button id="btn2" type="button" class="btn btn-outline-light" data-bs-toggle="modal"
            data-bs-target="#register_modal">Register</button>
        </div>

        <!-- The Modal for login button-->
        <div class="modal fade" id="login_modal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content" id="bg_login_modal">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Login</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="mytodolistdata.php" method="POST" class="was-validated">
                            <div class="mb-3 mt-3">
                                <label for="uname" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter username"
                                    name="uname" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                    name="pswd" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                                <label class="form-check-label" for="myCheck">I agree</label>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Check this checkbox to continue.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Modal for register button-->
        <div class="modal fade" id="register_modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" id="bg_register_modal">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Register</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="mytodolistdata2.php" method="POST"  class="was-validated">
                            <div class="mb-3 mt-3">
                                <label for="uname" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter username"
                                    name="username" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                              </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                    name="pswd" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3">
                                <label for="confirm_pwd" class="form-label">Confirm Password:</label>
                                <input type="password" class="form-control" id="confirm_pwd" placeholder="Enter to confirm password"
                                    name="confirm_pswd" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                                <label class="form-check-label" for="myCheck">I agree</label>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Check this checkbox to continue.</div>
                            </div>
                            <button type="submit" class="btn btn-primary" href="#Homepage.html">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
</body>

</html>