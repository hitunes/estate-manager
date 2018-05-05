<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Area | Dashboard</title>
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
            <img src="assets/img/Estate management icon blue.svg"  height="32px" alt="">
          </a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li>
            <a href="pages.php">Houses</a>
          </li>
          <li>
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
              </ol>
            </div>
            <div class="col-md-9">
              <div class="dropdown create">
                <!-- <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="true">
                  Create Content
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li>
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter1">Add House</a>
                    </li>
                  <li>
                      <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Add Tenant</a>
                    </li>
                </ul> -->
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
            <a href="dashboard.php" class="list-group-item active ">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
            </a>
            <?php
            $con = mysqli_connect("localhost", "root", "", "e-reg");
// Check connection
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $sql = "SELECT * FROM houses";

            if ($result = mysqli_query($con, $sql)) {
  // Return the number of rows in result set
              $rowcount = mysqli_num_rows($result);
  // echo "number of rows: ",$rowcount;
  // Free result set
              mysqli_free_result($result);
            }

            mysqli_close($con);
            ?>
            <a href="pages.php" class="list-group-item">
              <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Houses
              <span class="badge"><?php echo "$rowcount" ?></span>
            </a>

            <?php
            $con = mysqli_connect("localhost", "root", "", "e-reg");
// Check connection
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $sql = "SELECT * FROM tenants";

            if ($result = mysqli_query($con, $sql)) {
  // Return the number of rows in result set
              $rowcount = mysqli_num_rows($result);
  // echo "number of rows: ",$rowcount;
  // Free result set
              mysqli_free_result($result);
            }

            mysqli_close($con);
            ?>
            <a href="posts.php" class="list-group-item">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Tenants
              <span class="badge"><?php echo "$rowcount" ?></span>
            </a>

            <?php
            $con = mysqli_connect("localhost", "root", "", "e-reg");
// Check connection
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $sql = "SELECT * FROM comments";

            if ($result = mysqli_query($con, $sql)) {
  // Return the number of rows in result set
              $rowcount = mysqli_num_rows($result);
  // echo "number of rows: ",$rowcount;
  // Free result set
              mysqli_free_result($result);
            }

            mysqli_close($con);
            ?>
            <a href="users.php" class="list-group-item">
              <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Messages
              <span class="badge"><?php echo "$rowcount" ?></span>
            </a>
          </div>
        </div>
        <div class="col-md-9">
          <!-- Website Overview -->
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Estates Overview</h3>
            </div>
            <div class="panel-body ">
              <div class="col-md-4 ">
                <div class="well dash-box">
                <?php
                $con = mysqli_connect("localhost", "root", "", "e-reg");
// Check connection
                if (mysqli_connect_errno()) {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $sql = "SELECT * FROM tenants";

                if ($result = mysqli_query($con, $sql)) {
  // Return the number of rows in result set
                  $rowcount = mysqli_num_rows($result);
  // echo "number of rows: ",$rowcount;
  // Free result set
                  mysqli_free_result($result);
                }

                mysqli_close($con);
                ?>
                  <h2>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo "$rowcount" ?></h2>
                  <h4>Tenants</h4>
                </div>
              </div>
              <div class="col-md-4">
                <div class="well dash-box">
                <?php
                $con = mysqli_connect("localhost", "root", "", "e-reg");
// Check connection
                if (mysqli_connect_errno()) {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $sql = "SELECT * FROM houses";

                if ($result = mysqli_query($con, $sql)) {
  // Return the number of rows in result set
                  $rowcount = mysqli_num_rows($result);
  // echo "number of rows: ",$rowcount;
  // Free result set
                  mysqli_free_result($result);
                }

                mysqli_close($con);
                ?>
                  <h2>
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span> <?php echo "$rowcount" ?></h2>
                  <h4>Houses</h4>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="well dash-box">
                <?php
                $con = mysqli_connect("localhost", "root", "", "e-reg");
// Check connection
                if (mysqli_connect_errno()) {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $sql = "SELECT * FROM comments";

                if ($result = mysqli_query($con, $sql)) {
  // Return the number of rows in result set
                  $rowcount = mysqli_num_rows($result);
  // echo "number of rows: ",$rowcount;
  // Free result set
                  mysqli_free_result($result);
                }

                mysqli_close($con);
                ?>
                  <h2>
                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <?php echo "$rowcount" ?></h2>
                  <h4>Messages</h4>
                </div>
              </div>
              <!-- <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 13,334</h2>
                    <h4>Visitors</h4>
                  </div>
                </div> -->
            </div>
          </div>

          <!-- Latest Users -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Latest Tenants</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover table-responsive">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Joined</th>
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

                $sql = "SELECT id,namee, email, estate, apartno, rentstar, rentend, utistar, utiend FROM tenants order by id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
        // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    echo '<tr> <td>' . $row["namee"] . "</td>" . "<td>" . $row["email"] . "</td>" . "</td>" . "<td>" . $row["rentstar"] . "</td>";

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
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Fullname">
                        </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                       </div>
                       <div class="form-group">
                          <label for="exampleFormControlSelect1">Estate</label>
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>Chevron</option>
                            <option>Ivy</option>
                            <option>Park View</option>
                            <option>Banana</option>
                            <option>GRA</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Apartment/flat No</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apartment/Flat No">
                             </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rent Start</label>
                            <input type="date" class="form-control">
                             </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rent End</label>
                            <input type="date" class="form-control">
                             </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Utilities Start Date</label>
                            <input type="date" class="form-control">
                             </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Utilities End Date</label>
                            <input type="date" class="form-control">
                             </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>
        </div>
      </div>
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
                              <label for="exampleInputEmail1">	Apartment Info</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apartment Information">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
              </div>
            </div>
          </div>
        </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>