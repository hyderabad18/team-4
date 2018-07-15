<?php 

	if($_SERVER['PHP_SELF'] == "/volunteer/index.php")
    {
    	if(isset($_GET['route']))
    	{
    		$route = $_GET['route'];
    	}
    	else
    	{
    		$route = 'dash';
    	}
    }
	

	session_start();

	$logged = false;

	if (isset($_SESSION['id'])) 
    {
    	$logged = true;
    }
    else
    {
    	ob_start();
    	header('Location: '.'login');
    	ob_end_flush();
    	die();
    }


?>

<!-- include the header -->
<?php include 'support/header.php'; ?>
  

<!-- the menu of the page -->

<?php include 'support/menu.php'; ?>

<!-- the admin index page -->

<div class="page-content">

    <!-- main content include -->
	
    <?php include 'support/'.$route.'.php'; ?>

</div>

<!-- the main footer -->
<?php include 'support/footer.php'; ?>