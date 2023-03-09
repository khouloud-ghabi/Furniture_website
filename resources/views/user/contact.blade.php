<!-- contact -->

			<div class="col-md-6 contact-form-right">
				<div class="contact-form-top">
					<h3>Envoie-nous un message</h3>
				</div>
                @foreach ($data as $contact)


				<div class="agileinfo-contact-form-grid">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="text" name="Subject" placeholder="Subject" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<button class="btn1">Envoyer</button>
					</form>
				</div>
                @endforeach
			</div>

<!-- //contact -->
