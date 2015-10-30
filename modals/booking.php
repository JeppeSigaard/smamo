<div class="booking-form">
	<span class="booking-form-close">&times;</span>
	<article class="inner">
		<form class="paginated-form" action="<?php echo admin_url('admin-ajax.php') ?>" method="post">
		    <input type="hidden" name="action" value="smamo_booking_form">
		    <input type="hidden" name="booking_id" value="">
			<!-- side 1 -->
			<div class="active" data-group="1">
				<h3 class="center underline">Book et møde</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores id nobis ex quisquam, dignissimos, officia expedita amet, error tenetur ratione quas natus, harum eos laudantium animi culpa sapiente sint modi! </p>
			</div>
			<div class="active" data-group="1">
				<input class="huge" type="email" name="email" required>
				<label for="email">Din email</label>
			</div>
			<div class="center active" data-group="1">
				<a href="#" class="button outline next-btn">Næste</a>
			</div>
			<!-- side 2 -->
			<div data-group="2">
				<h3 class="center underline">Mange tak</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores id nobis ex quisquam, dignissimos, officia expedita amet, error tenetur ratione quas natus, harum eos laudantium animi culpa sapiente sint modi! </p>
			</div>
			<div data-group="2">
				<input type="text" name="name">
				<label for="name">Dit navn</label>
			</div>
			<div data-group="2">
				<input type="text" name="phone">
				<label for="phone">Dit telefonnummer</label>
			</div>
			<div data-group="2">
				<textarea rows="1" name="description"></textarea>
				<label for="description">Beskriv hvad din henvendelse drejer sig om. </label>
			</div>
			<div class="center" data-group="2">
				<a href="#" class="button outline black prev-btn">Forrige</a>
				<a href="#" class="button outline next-btn">Næste</a>
			</div>
			<!-- side 3 -->
			<div data-group="3">
				<h3 class="center underline">Kategorisering og budget</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores id nobis ex quisquam, dignissimos, officia expedita amet, error tenetur ratione quas natus, harum eos laudantium animi culpa sapiente sint modi! </p>
			</div>
			<div class="center" data-group="3">
				<a href="#" class="button outline black prev-btn">Forrige</a>
				<a href="#" class="button outline next-btn">Næste</a>
			</div>
		</form>
	</article>
</div>