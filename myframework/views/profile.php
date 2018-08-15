
<?if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){


}else{
	header("Location:/welcome");
} ?>

<div class="container">

	<div class="row">

		<div class="col-md-12 col-xs-12">
			<img src="/assets/avatar.jpg" class="img-thumbnail picture hidden-xs"/><br><br>
			<form action="/profile/update" method="post" enctype="multipart/form-data">
				<label class="btn btn-secondary btn-file" style="width:110px; margin-bottom:0px;">Browse
					<input type="file" name="img" style="display:none;">
				</label>
				<input type="submit" value="Update" class="btn btn-primary">
			</form><br><br>

			<div class="header">

				<h1>Portfolio</h1>
				<!--
				<p>Username: <?php echo $_SESSION["profiledata"][0]; ?><br>
				Password: <?php echo $_SESSION["profiledata"][1]; ?><br>
				<?php echo $_SESSION["profiledata"][2]; ?><br> -->

			</div>
		</div>
	</div>
</div>
