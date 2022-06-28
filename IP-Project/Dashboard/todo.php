<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />

  <style>
    .home_icon {
            position: fixed;
            right: 0;
            bottom: 0;            
        }

        #my_icon {
            font-size: 3rem;
            color: black;
        }
  </style>
</head>

<body>
  <header class="bg-dark mb-3">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <nav class="navbar justify-content-center">
            <a class="navbar-brand">To-do-List</a>  
          </nav>
        </div>
      </div>
    </div>
  </header>
  <section class="todo-outer">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-sm-12 col-md-8 ">
          <h1>Welcome</h1>
          <div class="todo-inner">
            <div class="form-row">
              <div class="col-8 mr-sm-2">
                <input type="text" class="form-control" placeholder="Enter your task" id="addtaskinput" />
                <input type="hidden" id="saveindex">
              </div>
              <button type="button" class="btn btn-success mr-sm-2" id="addtaskbtn">
                Add Task
              </button>
              <button type="button" class="btn btn-success mr-sm-2" id="savetaskbtn" style="display: none;">
                Save Task
              </button>
              <button type="button" id="deleteallbtn" class="btn btn-danger">
                Delete All
              </button>
            </div>
            <div class="to-do-output">
              <table class="table table-striped mt-3 mb-0" id="addedtasklist">
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="home_icon">
        
    <a id="my_icon" href="../Homepage.php">Logout <i class="fa fa-home" ></i></a>
</div>
  <script src="js/main.js"></script>
</body>

</html>