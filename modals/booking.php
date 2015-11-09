<div class="booking-form">
	<span class="booking-form-close modal-form-x"></span>
	<article class="inner">
		<form class="paginated-form" action="<?php echo admin_url('admin-ajax.php') ?>" method="post">
		    <input type="hidden" name="action" value="smamo_booking_form">
		    <input type="hidden" name="booking_id" value="">
		    <input type="hidden" name="action_step" value="create">
			<!-- side 1 -->
			<div class="active" data-group="1">
				<h3 class="center">Book et møde</h3>
		        <p>Det eneste vi skal bruge er din email-adresse:</p>
			</div>
			<div class="active" data-group="1">
				<input class="huge" type="email" name="email" required>
				<label for="email">Din email</label>
			</div>
			<div class="center active" data-group="1">
				<a href="#" class="button outline next-btn">Næste (2/4)</a>
			</div>
			<!-- side 2 -->
			<div data-group="2">
				<h3 class="center">Mange tak</h3>
		        <p>Din henvendelse er registreret, og vi vil kontakte dig for en aftale om et møde i den nærmeste fremtid. Hvis du har lyst, kan du fortælle lidt mere om hvad vi kan hjælpe dig med:</p>
			</div>
			<div data-group="2">
			    <input type="checkbox" name="task_0" value="En ny hjemmeside">
                <label>En ny hjemmeside</label>
                <input type="checkbox" name="task_1" value="En reklamestrategi">
                <label>En reklamestrategi</label>
                <input type="checkbox" name="task_2" value="En native app">
                <label>En native app</label>
                <input type="checkbox" name="task_3" value="En kampagne">
                <label>En kampagne</label>
			</div>
			<div class="center" data-group="2">
				<a href="#" class="button outline black prev-btn">Forrige</a>
				<a href="#" class="button outline next-btn">Næste (3/4)</a>
			</div>
			<!-- side 3 -->
			<div data-group="3">
				<h3 class="center">Har du et budget?</h3>
		        <p></p>
			</div>
			<div data-group="3">
			    <input type="radio" name="budget" value="ca. 10.000 - 25.000">
			    <label>ca. 10.000 - 25.000</label>
			    <input type="radio" name="budget" value="ca. 25.000 - 50.000">
			    <label>ca. 25.000 - 50.000</label>
			    <input type="radio" name="budget" value="ca. 50.000 - 100.000">
			    <label>ca. 50.000 - 100.000</label>
			    <input type="radio" name="budget" value="Ved ikke">
			    <label>Ved ikke</label>
			</div>
			<div class="center" data-group="3">
				<a href="#" class="button outline black prev-btn">Forrige</a>
				<a href="#" class="button outline next-btn">Næste (4/4)</a>
			</div>
			<!-- side 4 -->
			<div data-group="4">
				<h3 class="center">En sidste ting</h3>
		        <p></p>
			</div>
			<div class="split" data-group="4">
                <div data-group="4">
                    <input type="text" name="name">
                    <label for="name">Dit navn</label>
                </div>
                <div data-group="4">
                    <input type="text" name="phone">
                    <label for="phone">Dit telefonnummer</label>
                </div>
			</div>
			<div data-group="4">
				<textarea rows="1" name="message"></textarea>
				<label for="message">Tilføj en kommentar</label>
            </div>
			<div class="center" data-group="4">
				<a href="#" class="button outline black prev-btn">Forrige</a>
				<a href="#" class="button outline next-btn booking-form-close">Afslut</a>
			</div>
		</form>
	</article>
</div>