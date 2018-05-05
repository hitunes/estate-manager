<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "e-reg");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if(isset($_POST['save'])){  
if(isset($_POST['namee']) || isset($_POST['email']) || isset($_POST['estate']) || isset($_POST['apartno']) || isset($_POST['rentstar']) || isset($_POST['rentend']) || isset($_POST['utistar']) || isset($_POST['utiend']) ) {
// Escape user inputs for security

$namee = mysqli_real_escape_string($link, $_POST['namee']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$estate = mysqli_real_escape_string($link, $_POST['estate']);
$apartno = mysqli_real_escape_string($link, $_POST['apartno']);
$rentstar = mysqli_real_escape_string($link, $_POST['rentstar']);
$rentend = mysqli_real_escape_string($link, $_POST['rentend']);
$utistar = mysqli_real_escape_string($link, $_POST['utistar']);
$utiend = mysqli_real_escape_string($link, $_POST['utiend']);

 
// attempt insert query execution
$sql = "INSERT INTO tenants (namee, email, estate, apartno, rentstar, rentend, utistar, utiend) values('$namee', '$email', '$estate' , '$apartno' , '$rentstar', '$rentend', '$utistar' , '$utiend')";
if(mysqli_query($link, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
}
 
// close connection
mysqli_close($link);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Area | Posts</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<body>

  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
          aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php">
          <img src="assets/img/home-blue.svg" height="32px" alt="">
        </a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li>
            <a href="pages.php">Houses</a>
          </li>
          <li class="active">
            <a href="posts.php">Tenants</a>
          </li>
          <li>
            <a href="users.php">Messages</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">Welcome, Admin</a>
          </li>
          <li>
            <a href="login.php">Logout</a>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <header id="header">

  </header>

  <section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12--grey">
          <div class="row">
            <div class="col-md-3">
              <ol class="breadcrumb">
                <li>
                  <a href="dashboard.php">Dashboard</a>
                </li>
                <li class="active">Tenants</li>
              </ol>
            </div>
            <div class="col-md-9">
              <div class="dropdown create">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="true">
                  Create Content
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li>
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Add Tenant</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="dashboard.php" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
            </a>
            <?php
            $con=mysqli_connect("localhost","root","","e-reg");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM houses";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  // echo "number of rows: ",$rowcount;
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
            <a href="pages.php" class="list-group-item">
              <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Houses
              <span class="badge"><?php  echo "$rowcount" ?></span>
            </a>
            <?php
            $con=mysqli_connect("localhost","root","","e-reg");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM tenants";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  // echo "number of rows: ",$rowcount;
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
            <a href="posts.php" class="list-group-item">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Tenants
              <span class="badge"><?php  echo "$rowcount" ?></span>
            </a>
            <?php
            $con=mysqli_connect("localhost","root","","e-reg");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM comments";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  // echo "number of rows: ",$rowcount;
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
            <a href="users.php" class="list-group-item">
              <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Messages
              <span class="badge"><?php  echo "$rowcount" ?></span>
            </a>
          </div>
        </div>
        <div class="col-md-9">
          <!-- Website Overview -->
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Tenants</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <input class="form-control" type="text" placeholder="Filter Tenants...">
                </div>
              </div>
              <br>
              <table class="table table-striped table-hover table-responsive">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Estate</th>
                  <th>Apartment/flat No</th>
                  <th>Rent Start</th>
                  <th>Rent End</th>
                  <th>Utilities Start</th>
                  <th>Utilities End</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                <tr>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "e-reg";
    
    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
    
                    $sql = "SELECT id,namee, email, estate, apartno, rentstar, rentend, utistar, utiend FROM tenants order by id desc";
                    $result = $conn->query($sql);
    
                    if ($result->num_rows > 0) {
                      $index = 0;
        // output data of each row
                      while ($row = $result->fetch_assoc()) {
                        echo '<tr> <td>' . $row["namee"] . "</td>" . "<td>" . $row["email"] . "</td>" . "<td>" . $row["estate"] . "</td>" . "<td>" . $row["apartno"] . "</td>" . "<td>" . $row["rentstar"] . "</td>" . "<td>" . $row["rentend"] . "</td>" . "<td>" . $row["utistar"] . "</td>" . "<td>" . $row["utiend"] . "</td>" .  "<td>" .
                        
                      //   "<a class='btn btn-success btn-sm data-toggle='button' aria-pressed='true' autocomplete='off'' href='#'>RActive</a>" . "</td>" . 
                      // "<td>" .
                      //   "<a class='btn btn-success btn-sm' href='#'>UActive</a>" . 
                      // "</td>" . 
                        "<td>" . 
                        "<a class='btn btn-primary btn-sm' href='#' data-toggle='modal' data-target='#exampleModal3".$index."'>Send Msg</a>" . 
                        "</td>";
                        
                        $index++;  
                      }
                    } else {
                      echo "0 results";
                    }
    
                    $conn->close();
                    

                    ?>
                </tr>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


 

  <!-- Modals -->

  <!-- Add Page -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add Tenant</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="post" action=posts.php>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Fullname" name="namee">
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                   </div>
                   <div class="form-group">
                      <label for="exampleFormControlSelect1">Estate</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="estate">
                        <option>Chevron</option>
                        <option>Ivy</option>
                        <option>Park View</option>
                        <option>Banana</option>
                        <option>GRA</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apartment/flat No</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apartment/Flat No" name="apartno" >
                         </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Rent Start</label>
                        <input type="date" class="form-control" name="rentstar">
                         </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Rent End</label>
                        <input type="date" class="form-control" name="rentend">
                         </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Utilities Start Date</label>
                        <input type="date" class="form-control" name="utistar">
                         </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Utilities End Date</label>
                        <input type="date" class="form-control" name="utiend">
                         </div>
                <button type="submit" class="btn btn-primary" name="save">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "e-reg";

// Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id,namee, email, estate, apartno, rentstar, rentend, utistar, utiend FROM tenants order by id desc";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $indexx = 0;
// output data of each row
  while ($row = $result->fetch_assoc()) {
  ?>
    <div class="modal fade" id="exampleModal3<?php echo $indexx ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong> Message</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body message">
                <p class="text-center"><strong>New Message</strong> </p>
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="to" class="col-sm-1 control-label">To:</label>
                  
                    <div class="col-sm-11">
                      <input type="email" class="form-control select2-offscreen" id="to" placeholder='<?php echo $row["email"] ?>' tabindex="-1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cc" class="col-sm-1 control-label">CC:</label>
                    <div class="col-sm-11">
                      <input type="email" class="form-control select2-offscreen" id="cc" placeholder="Type email" tabindex="-1">
                    </div>
                  </div>

                </form>

                <div class="col-sm-11 col-sm-offset-1">

                  <div class="btn-toolbar" role="toolbar">

                    <div class="form-group">
                      <textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Discard</button>
            <button type="button" class="btn btn-primary">Send Message</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  $indexx++;
}
} 
  ?>


  




  <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add House</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Estate</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Estate Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">House/Apartment No</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="House Apartment">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1"> Apartment Info</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apartment Information">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    CKEDITOR.replace('editor1');
  </script>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>

