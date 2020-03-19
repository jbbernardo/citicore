<% include HeaderSpace %>
<section class="cnct-frame1">
	<div class="gen__withBG frm-cntnr width--85">
		<div class="width--70">
			<h1 class="bold">$Fr1FrameTitle</h1>
			<h5 class="bold">$Fr1FrameDesc</h5>
			<small class="bold">$Fr1FrameLabel</small>
			<div class="inlineBlock-parent">
				<div class="cnct1__img" style="background-image: url('$Fr1Img1.URL')"></div>
				<p><a href="$Fr1FrameAddrTo" target="_blank">$Fr1FrameAddr</a></p>
			</div>
			<div class="inlineBlock-parent">
				<div class="cnct1__img" style="background-image: url('$Fr1Img2.URL')"></div>
				<p><% loop ContactLists %><span><a href="tel: $CLNumber" target="_blank">$CLNumber</a></span><% end_loop %></p>
			</div>
			<div class="inlineBlock-parent">
				<div class="cnct1__img" style="background-image: url('$Fr1Img3.URL')"></div>
				<p><a href="mailto: $Fr1FrameEmail" target="_blank">$Fr1FrameEmail</a></p>
			</div>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__BGCon" style="background-image: url('$Fr1BG.URL')"></div>
		<div class="gen__grdtWhite"></div>
	</div>
</section>
<section class="cnct-frame2">
	<div class="gen__withBG frm-cntnr width--70">
		<div class="gen__subTitleCon">
			<small>$Fr2FrameTitle</small>
			<h4 class="bold">$Fr2FrameSubTitle</h4>
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
					<div class="recaptcha-hldr m-margin-b">
						<div class="g-recaptcha" data-sitekey="6LdeXuIUAAAAAHRBoW9M3bHhFxCm-1eU0VMMDQ5y"></div>
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