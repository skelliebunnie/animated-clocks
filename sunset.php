<?php include './templates/head.php'; ?>
<body class="sunset">
	<main>
		<?php include './templates/nav.php'; ?>
		<?php include './templates/clock.php'; ?>
	</main>
	<div class="cloudsWrapper cloudsAnimation">
		<div class="cloudWrapperInner bgTop">
			<div class="cloud cloudTop" style="background-image: url('./img/clouds1.svg');"></div>
		</div>
		<div class="cloudWrapperInner bgMiddle">
			<div class="cloud cloudMiddle" style="background-image: url('./img/clouds2.svg');"></div>
		</div>
		<div class="cloudWrapperInner bgBottom">
			<div class="cloud cloudBottom" style="background-image: url('./img/clouds3.svg');"></div>
		</div>
	</div>
	<div class="landWaveWrapper landWaveAnimation">
		<div class="waveWrapperInner bgTop">
			<div class="wave waveTop" style="background-image: url('./img/landwave1.svg');"></div>
		</div>
		<div class="waveWrapperInner bgMiddle">
			<div class="wave waveMiddle" style="background-image: url('./img/landwave1.svg');"></div>
		</div>
		<div class="waveWrapperInner bgBottom">
			<div class="wave waveBottom" style="background-image: url('./img/landwave1.svg');"></div>
		</div>
	</div>
	<div id="sunWrapper">
		<div class="sun"></div>
	</div>
	<div id="star-container" class="small-stars"></div>
<?php include './templates/footer.php'; ?>