<!-- Templates -->
<div id="tmplContainer">
  <a id="msgTmpl">
    <div class="card">
      <div class="card-block">
        <h6 class="card-title msgTitle"></h5>
          <h6 class='card-subtitle mb-2 text-muted dateItem msgParticipant'></h6>
      </div>
    </div>
  </a>
  <a id="categoryTmpl"><li></li></a>

	<a  id="itemCardTempl">
		<div class="card">
			<div class="row">
				<div class="col-md-8">
					<div class="card-block">
						<h5 class="card-title"></h5>
						<h6 class='card-subtitle mb-2 text-muted dateItem'></h6><br />
						<p class="card-text"></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-img-bottom float-right">
						<img id="pleaseWork" class="img-fluid imgItem" alt="Responsive image">
					</div>
				</div>
			</div>
		</div>
	</a>

  <form id="formTmpl" class="logoutloginform" method="post"></form>
  <!-- MESSAGES BUTTON
  <a href="messages.php">
    <button name="messages" type="button" class="btn btn-info messagebutton"><i class="fas fa-comments messageicon"></i> Messages</button>
  </a>

  <a id="loginButton" href="login.php" class="btn btn-success" role="button" type="submit">
    <i class="fas fa-user"></i> Log in
  </a>
  -->

  <a id="loginButton" href="login.php">
    <button name="messages" type="submit" role="button" class="btn btn-success"><i class="fas fa-user"></i> Log in</button>
  </a>

  <button id="logoutButton" name="logout" class="btn btn-success" role="button" type="submit"><i class="fas fa-user"></i> Log out</button>


</div>

<?php
if(isset($_POST['logout'])){
  session_destroy();
  header('Refresh:0');
}
?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="js/home.js"></script>
<script src="js/item.js"></script>
<script src="js/login.js"></script>
<script src="js/uploadItem.js"></script>
<script src="js/messages.js"></script>


</body>
</html>
