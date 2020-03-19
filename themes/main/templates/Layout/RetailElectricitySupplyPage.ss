<% include HeaderSpaceContent %>
<% include SubNavBusiness %>
<section class="res-frame1">
	<div class="gen__withBG frm-cntnr width--85">
		<div class="gen__breadcrumbs inlineBlock-parent">
			<a href="$Parent.Parent.Link"><p>$Parent.Parent.Title</p></a>
			<a href="$Parent.Link"><p>$Parent.Title</p></a>
			<p class="active">$Title</p>
		</div>
		<div class="inlineBlock-parent">
			<div class="width--50 res1__textCon">
				<h4 class="bold clr--red">$Fr1FrameTitle</h4>
				<p class="s-margin-t">
					$Fr1FrameDesc
				</p>
			</div
			><div class="width--50 res1__imgCon">
				<div class="res1__img" style="background-image: url('$Fr1Img.URL')"></div>
			</div>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__grdtWhite"></div>
	</div>
</section>
<section class="res-frame2">
	<div class="gen__withBG frm-cntnr width--70">
		<div class="gen__subTitleCon align-c">
			<h4 class="bold clr--white">$Fr2FrameTitle</h4>
		</div>
		<div class="display--flex flex--wrap justify--around l-margin-t res2__sliderCon">
			<div class="res2__sliderListCon align-c">
				<div class="vertical-parent">
					<div class="vertical-align">
						<h4 class="bold m-margin-b clr--red">$Fr2Box1Prefix<span class="clr--black">$Fr2Box1Title</span></h4>
						<p>$Fr2Box1Desc</p>
					</div>
				</div>
			</div>
			<div class="res2__sliderListCon align-c">
				<div class="vertical-parent">
					<div class="vertical-align">
						<h4 class="bold m-margin-b clr--red">$Fr2Box2Prefix<span class="clr--black">$Fr2Box2Title</span></h4>
						<p>$Fr2Box2Desc</p>
					</div>
				</div>
			</div>
			<div class="res2__sliderListCon align-c">
				<div class="vertical-parent">
					<div class="vertical-align">
						<h4 class="bold m-margin-b clr--red">$Fr2Box3Prefix<span class="clr--black">$Fr2Box3Title</span></h4>
						<p>$Fr2Box3Desc</p>
					</div>
				</div>
			</div>
		</div>
		<div class="res2__textCon align-c l-margin-t clr--white">
			<p class="bold">$Fr2CntctTitle</p>
			<p>$Fr2CntctPerson</p>
			<p><a href="tel: $Fr2CntctNumber" target="_blank">$Fr2CntctNumber</a></p>
			<p><a href="mailto: $Fr2CntctEmail" target="_blank">$Fr2CntctEmail</a></p>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__BGCon" style="background-image: url('$Fr2BG.URL')"></div>
	</div>
</section>
<section class="res-frame3">
	<div class="gen__withBG frm-cntnr width--70">
		<div class="width--85 ma-auto">
			<div class="gen__subTitleCon">
				<small>$Fr3FrameTitle</small>
				<h4 class="bold">$Fr3FrameSubTitle</h4>
				<p class="s-margin-t">$Fr3FrameDesc</p>
			</div>
		</div>
		<div class="res3__partnersCon page-grid grid-2">
			<% loop PartnerLists %>
			<div class="page__gridChild">
				<div class="res3__img" style="background-image: url('$PLImg.URL')"></div>
				<div class="res3__textCon display--flex flex--wrap clr--white">
					<div class="align--self-end">
						<h4 class="bold">$PLTitle</h4>
						<p class="s-margin-t">$PLDesc</p>
					</div>
				</div>
			</div>
			<% end_loop %>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__BGCon" style="background-image: url('$Fr3BG.URL')"></div>
		<div class="gen__grdtWhite"></div>
	</div>
</section>