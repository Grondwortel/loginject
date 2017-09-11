<?php session_start(); ?>

<?php if (isset($_SESSION['username'])){ ?>
	<li><?php "Welkom " . $_SESSION['username']; ?></li>
	<li><a href="logout.php">Uitloggen</a>
<?php } else { ?>
	<li><a href='loginform.php'>Inloggen</a></li>
<?php } ?>




