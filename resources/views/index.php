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
							<p>ここのショップはオペアンプ等の電子部品を取り扱っているショップです。<br>NOSの部品もあります。
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
		<h2>いまそろっている商品たち</h2>
							<?php foreach($e_items as $index): ?>
							<div>
							              <?=$index->name?>
							    <img src="<?=$index->img?>"/>

							</div>
<?php endforeach; ?>
</div>
												</div>

<h2>↓商品ページ↓</h2>
												<form action="/index/01" method="post">
													<?= csrf_field()?>
													<input type="hidden" name="item_id" value= "<?=$index->id?>""<?=$index->img?>">
													<input type="submit" value="LM733の在庫">
												</form>
												<form action="/index/02" method="post">
													<?= csrf_field()?>
													<input type="hidden" name="item_id" value= "<?=$index->id?>""<?=$index->img?>">
													<input type="submit" value="2SC1345の在庫">
												</form>
												<form action="/index/03" method="post">
													<?= csrf_field()?>
													<input type="hidden" name="item_id" value= "<?=$index->id?>""<?=$index->img?>">
													<input type="submit" value="FineGoldの在庫">
												</form>



							</div>

						</div>

					</div>
				</div>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>



				<form action="/cart/list" method="post">
				  <?= csrf_field()?>
				  <input type="hidden" name="item_id" value= "<?=$index->id?>">
				  <input type="submit" value="カートの中身">
				</form>



	</body>
</html>
<!-- Footer -->
<footer>
<div>
<p class="copyright">&copy;  Designed by <a href="https://templated.co">TEMPLATED</a>.</p>
</div>
</footer>
