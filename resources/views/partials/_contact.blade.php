<!-- Contact -->
<section id="contact" class="four">
	<div class="container">

		<header>
			<h2>Contact</h2>
		</header>

		<p>Feel free to contact me and a say friendly hello if you have any Suggestions or advice </br />
		You can also reach me for any technical or project specific queries, freelancing or business inquiries </p>

		
		<!-- <form method="post" action="#"> -->
		{!! Form::open(['method' => 'post', 'action' => ['WelcomeController@contact']]) !!}
			<div class="row 50%">
				<div class="6u"><input type="text" id='name' name="name" placeholder="Name" /></div>
				<div class="6u"><input type="text" id='email' name="email" placeholder="Email" /></div>
			</div>
			<div class="row 50%">
				<div class="12u">
					<textarea id='message' name="message" placeholder="Message"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="12u">
					<input type="submit" value="Send Message" />
				</div>
			</div>
		<!-- </form> -->

	</div>
</section>