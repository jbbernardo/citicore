<% include HeaderSpaceContent %>
<% include SubNav %>
<section class="abt-frame1">
	<div class="gen__withBG frm-cntnr width--85">
		<div class="gen__breadcrumbs inlineBlock-parent">
			<a href="/about-us"><p>$Title</p></a>
			<p class="active">$Title</p>
		</div>
		<div class="width--50">
			<h1 class="bold">$Fr1FrameTitle</h1>
			<p class="s-margin-t">$Fr1FrameDesc</p>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__BGCon" style="background-image: url('$Fr1BG.URL')"></div>
		<div class="gen__grdtWhite"></div>
	</div>
</section>
<section class="abt-frame2">
	<div class="gen__withBG frm-cntnr width--85">
		<div class="gen__subTitleCon align-c">
			<h4 class="bold clr--white">$Fr2FrameTitle</h4>
		</div>
		<div class="display--flex flex--wrap justify--around abt2__sliderCon">
			<% loop VisionMissions %>
			<div class="abt2__sliderListCon align-c">
				<div class="abt2__imgCon" style="background-image: url('$VMImg.URL')"></div>
				<h5 class="bold m-margin-b">$VMTitle</h5>
				<p>$VMDesc</p>
			</div>
			<% end_loop %>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__BGCon" style="background-image: url('$Fr2BG.URL')"></div>
	</div>
</section>