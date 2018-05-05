<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Edit Page</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
                <a class="navbar-brand" href="#">
                    <img src="assets/img/Logo 1.svg" height="25px" alt="">
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
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1>
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Edit Page
                        <small>About</small>
                    </h1>
                </div>
                <div class="col-md-2">
                    <div class="dropdown create">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Create Content
              <span class="caret"></span>
            </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li>
                                <a type="button" data-toggle="modal" data-target="#addPage">Add Estate</a>
                            </li>
                            <li>
                                <a href="#">Add House</a>
                            </li>
                            <li>
                                <a href="#">Add Tenant</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
                                <li class="active">Messages</li>
                            </ol>
                        </div>
                        <div class="col-md-9">
                            <div class="dropdown create">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Create Content
                    <span class="caret"></span>
                  </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li>
                                        <a type="button" data-toggle="modal" data-target="#addPage">Add Estate</a>
                                    </li>
                                    <li>
                                        <a href="#">Add House</a>
                                    </li>
                                    <li>
                                        <a href="#">Add Tenant</a>
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
                        <a href="pages.php" class="list-group-item">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Houses
                            <span class="badge">15</span>
                        </a>
                        <a href="posts.php" class="list-group-item">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Tenants
                            <span class="badge">55</span>
                        </a>
                        <a href="users.php" class="list-group-item">
                            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Messages
                            <span class="badge">301</span>
                        </a>
                    </div>

                    <div class="well">
                        <h4>Disk Space Used</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                70%
                            </div>
                        </div>
                        <h4>Bandwidth Used </h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                30%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- Website Overview -->
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Edit Page</h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <label>Page Title</label>
                                    <input type="text" class="form-control" placeholder="Page Title" value="About">
                                </div>
                                <div class="form-group">
                                    <label>Page Body</label>
                                    <textarea name="editor1" class="form-control" placeholder="Page Body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </textarea>
                                </div>
                                <div class="checkbox">
                                    <label>
                    <input type="checkbox" checked> Published
                  </label>
                                </div>
                                <div class="form-group">
                                    <label>Meta Tags</label>
                                    <input type="text" class="form-control" placeholder="Add Some Tags..." value="tag1, tag2">
                                </div>
                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <input type="text" class="form-control" placeholder="Add Meta Description..." value="  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et ">
                                </div>
                                <input type="submit" class="btn btn-default" value="Submit">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <p>
            <img src="assets/img/Logo 2.svg" height="32px" alt="">
        </p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
                        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Page Title</label>
                            <input type="text" class="form-control" placeholder="Page Title">
                        </div>
                        <div class="form-group">
                            <label>Page Body</label>
                            <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
                        </div>
                        <div class="checkbox">
                            <label>
                <input type="checkbox"> Published
              </label>
                        </div>
                        <div class="form-group">
                            <label>Meta Tags</label>
                            <input type="text" class="form-control" placeholder="Add Some Tags...">
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <input type="text" class="form-control" placeholder="Add Meta Description...">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
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
