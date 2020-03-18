<% include HeaderSpace %>
<section class="cnct-frame1">
	<div class="gen__withBG frm-cntnr width--85">
		<div class="width--50">
			<h1 class="bold">Contact Us</h1>
			<h5 class="bold">Want to know more? You may contact us through:</h5>
			<div class="inlineBlock-parent">
				<div class="cnct1__img" style="background-image: url('$ThemeDir/images/about/redbg1.png')"></div>
				<p><a href="#" target="_blank">45</a></p>
			</div>
			<div class="inlineBlock-parent">
				<div class="cnct1__img" style="background-image: url('$ThemeDir/images/about/redbg1.png')"></div>
				<p><a href="tel: " target="_blank">45</a></p>
			</div>
			<div class="inlineBlock-parent">
				<div class="cnct1__img" style="background-image: url('$ThemeDir/images/about/redbg1.png')"></div>
				<p><a href="mailto: " target="_blank">45</a></p>
			</div>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__BGCon" style="background-image: url('$ThemeDir/images/about/redbg1.png')"></div>
		<div class="gen__grdtWhite"></div>
	</div>
</section>
<section class="cnct-frame2">
	<div class="gen__withBG frm-cntnr width--70">
		<div class="gen__subTitleCon">
			<small>Contact Us</small>
			<h4 class="bold">Reach us Today</h4>
		</div>
		<div class="inlineBlock-parent">
			<div class="width--55 cnct2__formCon align-t">
				<form id="contactForm" class="frm-form__holder" action="" method="post">
					<div class="frm-form__row">
						<label for="fullname">Full Name</label>
						<input id="fullname" type="text" name="clientName" class="frm-form__input" required>
					</div>
					<div class="frm-form__row">
						<label for="email">E-Mail Address</label>
						<input id="email" type="email" name="clientEmail" class="frm-form__input" required>
					</div>
					<div class="frm-form__row">
						<label for="message">Message</label>
						<textarea id="message" name="clientMessage" class="frm-form__input textarea" required></textarea>
					</div>
					<div class="cnct2__btnCon">
						<button id="contactBtn" class="btn type-yellow">Submit</button>
						<input type="hidden" name="postFlag" value="1">
					</div>
				</form>
			</div
			><div class="width--45 align-t">
				<% include ContactList %>
			</div>
		</div>
		<div class="cnct2__mapCon">
			<div id="map" class="mapouter"></div>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__grdtWhite"></div>
	</div>
</section>