<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>Tentang Kita</h3>
					<p><?php getshortdescription("titles"); ?></p>
					<div class="read">
						<a href="about.php" class="btn btn-primary read-m">Tentang Kita</a>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>Post yang populer</h3>
						<?php getpopularposts("page_hits"); ?>
					</div>
				</div>
				<!-- subscribe -->
				<div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
					<h2>Daftar ke berlangganan</h2>
					<div class="subscribe-main text-left">
							<div class="subscribe-form">
									<form action="#" method="post" class="subscribe_form">
										<input class="form-control" type="email" placeholder="Enter your email..." required="">
										<button type="submit" class="btn btn-primary submit">Berlangganan</button>
									</form>
									<div class="clearfix"> </div>
						   </div>
						<p>kami menghormati privasimu, tidak ada spam!</p>
					</div>
					<!-- //subscribe -->
				</div>
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook" href="https://www.facebook.com/Masjid-Ar-Raudhoh-Telanaipura-108085588609606">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="https://twitter.com/raudhohar">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
							</li>
							<li class="mx-3">
								<a class="instagram" href="instagram.com/masjidarraudhohtelanaipura/">
									<i class="fab fa-instagram"></i>
									<span>instagram</span>
								</a>
							</li>
							
						</ul>

					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">
					<p> Responsive Blog Site <?php $current=date("Y"); print_r($current);?> | Brought To You by
						Hamba Allah
					</p>

				</div>
			</div>
			<!-- //footer -->
		</div>
	</footer>