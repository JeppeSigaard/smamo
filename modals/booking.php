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
		        <p>Vi vil selvfølgelig rigtig gerne mødes med dig, og vi skal nok tage os af det hele. Det eneste vi skal bruge er din email-adresse, så vi kan komme i kontakt med dig:</p>
			</div>
			<div class="active" data-group="1">
				<input class="huge" type="email" name="email" required>
				<label for="email">Din email</label>
			</div>
			<div class="center active" data-group="1">
				<a href="#" class="button outline next-btn submit">Send og næste (2/4)</a>
			</div>
			<div class="center active" data-group="1">
				<p class="small"><a href="mailto:hej@smartmonkey.dk">Send en email i stedet</a></p>
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
                <input type="checkbox" name="task_4" value="Noget helt andet">
                <label>Noget helt andet</label>
			</div>
			<div class="center" data-group="2">
				<a href="#" class="button outline black prev-btn">Forrige</a>
				<a href="#" class="button outline next-btn submit">Næste (3/4)</a>
			</div>
			<!-- side 3 -->
			<div data-group="3">
				<h3 class="center">Alletiders. Har du et budget?</h3>
		        <p>Som regel kan vi komme ekstra godt fra start, hvis vi på forhånd kender din investeringsvillighed. Det giver os et fingerpeg om hvad vi kan nå at realisere indenfor en kommende projektperiode. </p>
			</div>
			<div data-group="3">
			    <input type="radio" name="budget" value="ca. 15.000 - 25.000">
			    <label>Ca. 15.000 - 25.000</label>
			    <input type="radio" name="budget" value="ca. 25.000 - 50.000">
			    <label>Ca. 25.000 - 50.000</label>
			    <input type="radio" name="budget" value="ca. 50.000 - 100.000">
			    <label>Ca. 50.000 - 100.000</label>
			    <input type="radio" name="budget" value="mere end 100.000">
			    <label>Mere end 100.000</label>
			    <input type="radio" name="budget" value="Ved ikke">
			    <label>Ved ikke</label>
			</div>
			<div class="center" data-group="3">
				<a href="#" class="button outline black prev-btn">Forrige</a>
				<a href="#" class="button outline next-btn submit">Næste (4/4)</a>
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
				<a href="#" class="button outline submit next-btn submit-final">Afslut</a>
			</div>
			<!-- side 5 (tak for det) -->
			<div data-group="5">
				<h3 class="center">Super duper!</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur qui deserunt facere deleniti doloribus autem similique ipsa sequi tempore quas ratione impedit magnam beatae iure, aspernatur suscipit id iste quis.</p>
			</div>
		</form>
	</article>
</div>
