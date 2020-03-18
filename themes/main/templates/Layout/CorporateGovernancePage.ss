<% include HeaderSpaceContent %>
<% include SubNav %>
<section class="abtCG-frame1">
	<div class="gen__withBG frm-cntnr width--85">
		<div class="gen__breadcrumbs inlineBlock-parent">
			<a href="#"><p>$Parent.Title</p></a>
			<p class="active">$Title</p>
		</div>
		<div class="gen__subTitleCon">
			<h4 class="bold">$Fr1FrameTitle</h4>
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
		<div class="gen__BGCon" style="background-image: url('$Fr1BG.URL')"></div>
	</div>
</section>