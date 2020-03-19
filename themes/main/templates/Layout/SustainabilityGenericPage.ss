<% include HeaderSpaceContent %>
<% include SubNavSus %>
<section class="susGP-frame1">
	<div class="gen__withBG frm-cntnr width--85">
		<div class="width--70">
			<h1 class="bold">$Fr1FrameTitle</h1>
			<p class="s-margin-t">$Fr1FrameDesc</p>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__BGCon" style="background-image: url('$Fr1BG.URL')"></div>
		<div class="gen__grdtWhite"></div>
	</div>
</section>
<% if $Fr2FrameTitle %>
<section class="susGP-frame2">
	<div class="gen__withBG frm-cntnr width--85">
		<div class="inlineBlock-parent">
			<div class="width--60">
				<h4 class="bold l-margin-b">$Fr2FrameTitle</h4>
				<div class="susGP2__textcon">
					$Fr2FrameDesc
				</div>
			</div
			><div class="width--40">
				<div class="susGP2__imgCon" style="background-image: url('$Fr2Img.URL')"></div>
			</div>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__grdtWhite"></div>
	</div>
</section>
<% end_if %>
<% if $Fr3FrameTitle %>
<section class="susGP-frame3">
	<div class="gen__withBG frm-cntnr width--85">
		<div class="gen__subTitleCon">
			<h4 class="bold">$Fr3FrameTitle</h4>
		</div>
		<div class="display--flex justify--between gen__tabCon">
			<div class="gen__sideNav align-c">
				<select>
					<% loop Articles %>
						<option data-tab-target="$ID">$GenArTitle</option>
					<% end_loop %>
				</select>
				<ul>
					<% loop Articles %>
					<li data-tab-target="$ID">
						<div class="vertical-parent">
							<div class="vertical-align">
								<p>$GenArTitle</p>
							</div>
						</div>
					</li>
					<% end_loop %>
				</ul>
			</div>
			<div class="gen__article">
				<% loop Articles %>
				<div class="gen__tabList" data-tab-list="$ID">
					$GenArDesc
				</div>
				<% end_loop %>
			</div>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__grdtWhite"></div>
	</div>
</section>
<% end_if %>