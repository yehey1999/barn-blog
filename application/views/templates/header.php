<html>
	<head>
		<title>The Barn</title>
		<meta charset="utf-8">
		<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<link href="<?php echo base_url(); ?>assets/css/index.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="container">

			<div id="header" class="position-relative my-0 mx-auto">
				<p class="title h1 pt-5 pl-2 text-uppercase ma-0 py-0 pr-0">The Barn</p>
				<span class="position-absolute pt-3">BY CSIT201</span>
			</div>

			<nav id="nav" class="navbar navbar-expand-lg navbar-dark mx-auto p-0">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse flex-grow-0 text-center w-100" id="navbarSupportedContent">
					<ul class="menu-items navbar-nav text-center w-100">
						<li class="nav-item pt-2 w-100 <?php if ($title == "Home") echo "active" ?>">
							<a class="pt-1 text-decoration-none font-weight-bold text-center" href="<?php echo base_url(); ?>">Homepage</a>
						</li>
						<li class="nav-item pt-2 w-100 <?php if ($title == "My-blog") echo "active" ?>">
							<a class="pt-1 text-decoration-none font-weight-bold text-center" href="<?php echo base_url(); ?>my-blog">My Blog</a>
						</li>
						<li class="nav-item pt-2 w-100 <?php if ($title == "Photo-gallery") echo "active" ?>">
							<a class="pt-1 text-decoration-none font-weight-bold text-center" href="<?php echo base_url(); ?>photo-gallery">Photo Gallery</a>
						</li>
						<li class="nav-item pt-2 w-100 <?php if ($title == "Favorite-sites") echo "active" ?>">
							<a class="pt-1 text-decoration-none font-weight-bold text-center" href="<?php echo base_url(); ?>favorite-sites">Favorite Sites</a>
						</li>
						<li class="nav-item pt-2 w-100 <?php if ($title == "Comment") echo "active" ?>">
							<a class="pt-1 text-decoration-none font-weight-bold text-center" href="<?php echo base_url(); ?>comment">Comment</a>
						</li>
					</ul>
				</div>
			</nav>
