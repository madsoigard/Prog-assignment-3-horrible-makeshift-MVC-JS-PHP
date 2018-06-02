<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../styles/style.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">Secondhand</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="categorylist.php">Home</a>
				</li>
			</ul>
		</div>

		<!-- Saving the logout button for when the database is up and running.

		<form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="POST">
			<button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="submit">Logout</button>
		</form>-->

		<form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="POST">
			<input name="username" class="form-control mr-sm-2" type="text" placeholder="username" aria-label="username">
			<input name="password" class="form-control mr-sm-2" type="password" placeholder="password" aria-label="password">
		<button class="btn btn-success marginbutton" type="submit" name="submit">Login</button>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-outline-info marginbutton" data-toggle="modal" data-target="#registerModal">
			Register
		</button>
		</form>
	</nav>
  <!-- Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register yourself!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
					<!--We need to write the action script for registering a user -->
					<form  class="register" action="register.php" method="post">
		        <div class="form-group row">
		          <label for="firstName" class="col-sm-2 col-form-label">Fornavn</label>
		          <div class="col-sm-10">
		            <input type="text" class="form-control" id="firstName" name="firstName" autofocus required placeholder="Fornavn">
		          </div>
		        </div>
		        <div class="form-group row">
		          <label for="lastName" class="col-sm-2 col-form-label">Etternavn</label>
		          <div class="col-sm-10">
		            <input type="text" class="form-control" id="lastName" name="lastName" required placeholder="Etternavn">
		          </div>
		        </div>
		        <div class="form-group row">
		          <label for="email" class="col-sm-2 col-form-label">E-post</label>
		          <div class="col-sm-10">
		            <input type="email" class="form-control" id="email" name="email" required placeholder="E-post">
		          </div>
		        </div>
		        <div class="form-group row">
		          <label for="password" class="col-sm-2 col-form-label">Passord</label>
		          <div class="col-sm-10">
		            <input type="password" class="form-control" id="pwd" name="pwd" required placeholder="*******">
		          </div>
		        </div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Register user</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">...Nevermind!</button>
						</div>
		      </form>
        </div>
      </div>
    </div>
  </div>
