<% include HeaderSpaceContent %>
<% include SubNav %>
<section class="abtBD-frame1">
	<div class="gen__withBG frm-cntnr width--85">
		<div class="gen__breadcrumbs inlineBlock-parent">
			<a href="#"><p>$Parent.Title</p></a>
			<p class="active invert">$Title</p>
		</div>
		<div class="gen__subTitleCon">
			<h4 class="bold clr--white">$Fr1FrameTitle</h4>
		</div>
		<div class="display--flex flex--wrap justify--between abt2BD__sliderCon">
			<% loop ListBoardDirectors %>
			<div class="abtBD__sliderListCon">
				<div class="abtBD__imgCon" style="background-image: url('$LBDImg.URL')"></div>
				<div class="abtBD__blueBG"></div>
				<div class="abtBD__textCon display--flex flex--wrap align--items-center">
					<div>
						<h6 class="bold">$LBDTitle</h6>
						<p>$LBDPos</p>
					</div>
				</div>
				<a href="#abtBD-modal-$ID"><div class="abtBD__trigerCon"></div></a>
			</div>
			<% end_loop %>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__BGCon" style="background-image: url('$Fr1BG.URL')"></div>
	</div>
</section>

<% include BoardDirectorsModal %>