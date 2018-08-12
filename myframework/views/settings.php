
<?if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){


}else{
	header("Location:/welcome");
} ?>
<div class="container">
	<h1>This is a protected page.</h1>
	<h2>Edit your setting below.</h2>
</div>
