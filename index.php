<?php include './templates/head.php'; ?>
<body>
	<main>
		<?php include './templates/nav.php'; ?>
		<?php include './templates/clock.php'; ?>
	</main>
	<div class="waveWrapper waveAnimation">
		<div class="waveWrapperInner bgTop">
			<div class="wave waveTop" style="background-image: url('./img/wave1.svg');"></div>
		</div>
		<div class="waveWrapperInner bgMiddle">
			<div class="wave waveMiddle" style="background-image: url('./img/wave2.svg');"></div>
		</div>
		<div class="waveWrapperInner bgBottom">
			<div class="wave waveBottom" style="background-image: url('./img/wave3.svg');"></div>
		</div>
	</div>
	<div id="star-container"></div>
<?php include './templates/footer.php'; ?>