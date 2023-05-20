<?php
include './Models/Movie.php';
?>

<?php include './components/header.php'; ?>

<main>
	<div class="py-4 d-flex justify-content-center">
		<div class="py-4 d-flex">
			<?php foreach ($movies as $movie) { ?>
				<?php include './components/card.php'; ?>
			<?php } ?>
		</div>
	</div>
</main>



<?php include './components/footer.php'; ?>