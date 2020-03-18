<% include HeaderSpaceContent %>
<% include SubNavBusiness %>
<section class="prj-frame1">
	<div class="gen__withBG frm-cntnr width--85">
		<div class="gen__breadcrumbs inlineBlock-parent">
			<a href="$Parent.Parent.Link"><p>$Parent.Parent.Title</p></a>
			<a href="$Parent.Link"><p>$Parent.Title</p></a>
			<p class="active">$Title</p>
		</div>
		<div class="width--70 ma-auto">
			<div class="gen__tabCon">
				<div class="display--flex justify--between align--items-center gen__projectTitle">
					<h4 class="clr--yellow bold">$Fr1FrameTitle</h4>
					<div class="gen__sideNav align-c gen__project">
						<select>
							<% loop ProjectLists %>
								<option data-tab-target="$ID">$PrjTitle</option>
							<% end_loop %>
						</select>
						<i class="fas fa-caret-down"></i>
					</div>
				</div>
				<div class="gen__article gen__project m-margin-t">

					<% loop ProjectLists %>
					<div class="gen__tabList" data-tab-list="$ID">
						<div class="prj1__imgCon" style="background-image: url('$PrjImg.URL"></div>
						<div class="prj1__textCon">
							<p>$PrjDesc</p>
						</div>
						<div class="display--flex flex--wrap justify--between prj1__detailsCon">

							<% if $PrjFTLocDesc %>
							<div class="prj1__detailsListCon inlineBlock-parent">
								<% if $PrjFTLocImg %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$PrjFTLocImg.URL')"></div
								><% else %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$ThemeDir/icons/location.png"></div
								><% end_if %><div class="prj1__dtlsTextCon align-t">
									<% if $PrjFTLocTitle %>
									<h6 class="bold">$PrjFTLocTitle</h6>
									<% else %>
									<h6 class="bold">Location</h6>
									<% end_if %>
									<p>$PrjFTLocDesc</p>
								</div>
							</div>
							<% end_if %>

							<%-- <div class="prj1__detailsListCon inlineBlock-parent">
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('https://cesi-drafts.praxxys.ph/assets/homepage/frame1/488f527234/FTSEC-Drone-shot-15_-1.png"></div
								><div class="prj1__dtlsTextCon align-t">
									<h6 class="bold">Location</h6>
									<p>Brgy. Alejandro Mindoro Bataan</p>
								</div>
							</div> --%>
							
						</div>
					</div>
					<% end_loop %>
					
				</div>
			</div>
		</div>
	</div>
	<div class="gen__BGHolder">
		<div class="gen__BGCon" style="background-image: url('$Fr1BG.URL')"></div>
	</div>
</section>