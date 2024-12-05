<!--Header-->
<header>
		<div class="top-bar_sub_w3layouts container-fluid">
			<div class="row">
				<div class="col-md-4 logo text-left">
					<a class="navbar-brand" href="index.php" style="font-size:22px">
						 <img src="images/logo.jpg" height="50" alt="CoolBrand"> BLOG MASJID AR-RAUDHOH</a>
				</div>
				<div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
					<span>Selamat Datang Di BLOG Masjid Ar-Raudhoh</span>
					<span class="mx-lg-4 mx-md-2  mx-1">
						<a href="blogadmin/index.php">
							 <strong>Masuk</strong></a>
					</span>
					<span>
						<a href="blogadmin/membership_signup.php">
							<i class="far fa-user"></i> <strong>Daftar</strong></a>
					</span>
				</div>
				<div class="col-md-4 log-icons text-right">

					<ul class="social_list1 mt-3">

						<li>
							<a href="https://www.facebook.com/Masjid-Ar-Raudhoh-Telanaipura-108085588609606" class="facebook1 mx-2" >
								<i class="fab fa-facebook-f"></i>

							</a>
						</li>
						<li>
							<a href="https://twitter.com/raudhohar" class="twitter2">
								<i class="fab fa-twitter"></i>

							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/masjidarraudhohtelanaipura" class="facebook1 mx-2">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
					
					</ul>
				</div>
			</div>
		</div>

			<div class="header_top" id="home">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				   </button>


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.php">Tentang</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
									Kategori
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#"></a>
									<?php getcategoriesmenu("blog_categories"); ?>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Kontak</a>
							</li>

						</ul>
							<form action="search.php" method="post" class="form-inline my-2 my-lg-0 header-search" name="form">
								<input class="form-control mr-sm-2" type="search" placeholder="Search here..." required="yes" type="text" name="search[keyword]">
								<button class="btn btn1 my-2 my-sm-0" type="submit" name="submit"><i class="fas fa-search"></i></button>
							</form>
		
						

					</div>
				</nav>

			</div>
	</header>
	<!--//header-->