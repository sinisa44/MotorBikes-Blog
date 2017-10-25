<?php

if(isset($_SESSION['korisnik']) && $_SESSION['korisnik']['role']=='admin'){
?>
<div class="container" style="margin-top: 70px;">

	<h1 class="text-center">ADMIN PANEL</h1>
	<hr>
	<?php include 'includes/admin/content.php';
        include 'includes/updatemodal.php';
	 ?>
	<hr>
	<?php include 'includes/admin/users.php'; ?>
	<hr>
	<?php include 'includes/admin/comments.php'; ?>
</div>

<?php }
else
{
	echo "<script>alert('you are not allowed to access!!')</script>";
} ?>

<script src="inc/js/updateajax.js">

</script>
