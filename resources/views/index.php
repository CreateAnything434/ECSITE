<!DOCTYPE HTML>
<!--
	Full Motion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>My SHOP for Electronic instuments</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="/assets/css/main.css" />
	</head>
	<body id="top">

			<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
				<section id="banner" data-video="images/banner">
					<div class="inner">
						<header>
							<h1>My SHOP for electric instuments</h1>
							<p>ここのショップはオペアンプ等の電子部品を取り扱っているショップです。NOSの部品もあります。<br />
							</p>
						</header>
						<a href="#main" class="more">Learn More</a>
					</div>
				</section>

			<!-- Main -->
				<div id="main">
					<div class="inner">

					<!-- Boxes -->

<div class="thumbnails">
	<div class="box">
		<a href="/cart/add" class="image fit">
							<?php foreach($index as $e_items): ?>
							<div>
							    <?=$e_items->name?>
							    <img src="<?=$e_items->img?>"/>
							</div>
							<?php endforeach; ?>
						</div>
												</div>





							</div>

						</div>

					</div>
				</div>

			<!-- Footer -->
			<footer?
			<div>
			<p class="copyright">&copy;  Designed by <a href="https://templated.co">TEMPLATED</a>.</p>
	</div>
</footer>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


			<div class="box">
				<a href="/cart/list" class="image fit"></a>
				<div>

					<a href class="button style3 fit" data-poptrox="youtube,800x400">注文カート</a>
				</div>
			</div>

	</body>
</html>
