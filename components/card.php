	
<div class="d-flex justify-content-center">
	<div class="card w-100 d-flex flex-column justify-content-center">
		<div>
			<div>
				<img src="<?php echo $movie->image ?>" alt="il padrino">
			</div>
		</div>
		<div class="card-body">
			<div>
				<h2>
					<?php echo $movie->title ?>
				</h2>

				<h4 class="d-flex">
					Lingua:
					<div class="mx-3 flagImg w-25">
						<?php echo $movie->getFlag() ?>
					</div>
				</h4>

				<h4>
					<span>Data:</span>
					<?php echo $movie->date ?>
				</h4>

				<h4>
					<span>Voto:</span>
					<?php echo $movie->vote ?>
				</h4>
			</div>
		</div>
	</div>
</div>