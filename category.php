<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Category</title>
	<!-- <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'> -->
	<link href="stylecss.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--js-->
	<script src="js/jquery.min.js"></script>

	<!--/js-->
	<!--animated-css-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>

<body>
	<?php include('function.php'); ?>
	<?php include('top.php'); ?>
	<!--/sticky-->
	<?php include('slider.php'); ?>
	<div style="height:50px"></div>
	<div style="width:1200px; margin:auto">

		<div style="width:200px; float:left">

			<table cellpadding="0" cellspacing="0" width="900px">
				<tr>
					<td style="font-family: Helvetica; font-size:20px; color:#1c9b8e"><b>Category</b></td>
				</tr>
				<?php


				$s = "select * from category";
				$result = mysqli_query($cn, $s);
				$r = mysqli_num_rows($result);
				//echo $r;

				while ($data = mysqli_fetch_array($result)) {

					echo "<tr><td class='acat' style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";
				}
				mysqli_close($cn);
				?>

			</table>

		</div>

		<div style="width:1000px; float:left">
			<table cellpadding="0px" cellspacing="0" width="1200px">
				<tr>
					<td class="headingText">Welcome to My Tour</td>
				</tr>
				<tr>
					<td class="paraText" width="700px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime voluptas ab totam expedita quibusdam debitis saepe, cum voluptatum inventore! Dolorem fugiat quidem enim exercitationem nesciunt voluptates, sint amet laudantium neque cumque sequi nihil reprehenderit officia sunt quo provident! Deleniti reiciendis ratione in, obcaecati ipsa consectetur, architecto minima quidem, temporibus doloremque voluptatem dolorum odit repudiandae est corporis excepturi optio enim numquam. Deserunt ex, laudantium porro ipsum est voluptatem, aliquid eaque dicta fuga tempora numquam repellendus adipisci accusamus debitis, eveniet odio. Quaerat impedit cumque quas maxime obcaecati, blanditiis velit tempore exercitationem temporibus vero, architecto amet? Cupiditate cum minus, autem debitis, voluptates pariatur odit sed corrupti eveniet blanditiis iusto, est ipsa quos velit odio sequi asperiores sit repellat exercitationem. Voluptatem id ducimus ea? Placeat dolor, libero illo mollitia molestiae sapiente voluptatem consequatur quas porro deleniti beatae corrupti doloremque aspernatur molestias et nam eveniet autem aut reiciendis quo laudantium repudiandae voluptatibus ut. Modi, harum!.</td>
					<td style="background-image:url(images/13.jpg); background-repeat:no-repeat; color:#FFF;  " width="900px" height="550px">
						<!-- <div style="background:linear-gradient(#1c9b8e,#096,#1c9b8e); vertical-align:text-top; padding-left:5%;  width:100%;">HAVE A GOOD TIME &nbsp;&nbsp;&nbsp; without spending a dime</div> -->
					</td>
				</tr>
			</table>

		</div>

	</div>

	<div style="clear:both"></div>

	<?php include('bottom.php'); ?>
</body>

</html>