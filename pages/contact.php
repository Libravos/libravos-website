<?php include('../helper/launcher.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149290199-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-149290199-3');
  </script>

	<title>Contact Us | Libravos</title>
	<?php include '../helper/includes.php'; ?>
	<style>
		#page-content {
			background-image: url("/img/contact-bg.jpg");
			background-size: 100%;
			background-repeat: no-repeat;
			background-position: 0% 50%;
		}
	</style>
</head>
<body class="blue" data-spy="scroll" data-target="#navbar-top" data-offset="0" >

<!-- Navigation bar -->
<?php include '../helper/navbar.php'; ?>

<div id="page-content" style="min-height: 500px">
	<div class="row justify-content-center">
		<div class="col-md-10 deadCenter" style="min-height: 300px">
			<img src="/img/contact-mail.png" height="100" />
			<h1 class="blue-header deadCenter text-center" style="color:white">
				Don't be a stranger! For all inquiries, reach out to us at
				<a href="mailto:contact@libravos.com" class="blue-header" style="color:white">contact@libravos.com</a>
			</h1>
		</div>
	</div>
</div>

<?php include '../helper/footer.php'; ?>

</body>
</html>
