<% include HeaderSpaceContent %>
<% include SubNavBusiness %>
<section class="bsnss-frame1">
	<div class="gen__withBG frm-cntnr width--85">
		<div class="width--70">
			<h1 class="bold">$Fr1FrameTitle</h1>
			<p class="s-margin-t">$Fr1FrameDesc</p>
			<% if $Fr1BtnText %>
			<a href="$Fr1BtnLinkTo" target="_blank" class="frm-inlineBlock"><button class="btn type-yellow l-margin-t">$Fr1BtnText</button></a>
			<% end_if %>
		</div>

		<div class="bsnss1__sliderCon l-margin-t">
			<% loop FeatureLists %>
			<div class="bsnss1__sliderListCon align-c">
				<div class="vertical-parent">
					<div class="vertical-align">
						<% if $FLImg %>
						<div class="bsnss1__img" style="background-image: url('$FLImg.URL"></div>
						<% end_if %>
						<% if $FLTitle %>
						<p class="bsnss1__title bold clr--yellow">$FLTitle</p>
						<% end_if %>
						<% if $FLSubTitle %>
						<h5 class="bold">$FLSubTitle</h5>
						<% end_if %>
						<% if $FLDesc %>
						<p class="bsnss1__desc">$FLDesc</p>
						<% end_if %>
					</div>
				</div>
			</div>
			<% end_loop %>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__BGCon" style="background-image: url('$Fr1BG.URL')"></div>
		<div class="gen__grdtWhite"></div>
	</div>
</section>