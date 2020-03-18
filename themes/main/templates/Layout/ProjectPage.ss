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

							<% if $PrjFTSerDesc %>
							<div class="prj1__detailsListCon inlineBlock-parent">
								<% if $PrjFTSerImg %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$PrjFTSerImg.URL')"></div
								><% else %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$ThemeDir/icons/services.png"></div
								><% end_if %><div class="prj1__dtlsTextCon align-t">
									<% if $PrjFTSerTitle %>
									<h6 class="bold">$PrjFTSerTitle</h6>
									<% else %>
									<h6 class="bold">Services</h6>
									<% end_if %>
									<p>$PrjFTSerDesc</p>
								</div>
							</div>
							<% end_if %>

							<% if $PrjFTCapDesc %>
							<div class="prj1__detailsListCon inlineBlock-parent">
								<% if $PrjFTCapImg %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$PrjFTCapImg.URL')"></div
								><% else %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$ThemeDir/icons/capacity.png"></div
								><% end_if %><div class="prj1__dtlsTextCon align-t">
									<% if $PrjFTCapTitle %>
									<h6 class="bold">$PrjFTCapTitle</h6>
									<% else %>
									<h6 class="bold">Capacity</h6>
									<% end_if %>
									<p>$PrjFTCapDesc</p>
								</div>
							</div>
							<% end_if %>

							<% if $PrjFTGFADesc %>
							<div class="prj1__detailsListCon inlineBlock-parent">
								<% if $PrjFTGFAImg %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$PrjFTGFAImg.URL')"></div
								><% else %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$ThemeDir/icons/gfa.png"></div
								><% end_if %><div class="prj1__dtlsTextCon align-t">
									<% if $PrjFTGFATitle %>
									<h6 class="bold">$PrjFTGFATitle</h6>
									<% else %>
									<h6 class="bold">GFA</h6>
									<% end_if %>
									<p>$PrjFTGFADesc</p>
								</div>
							</div>
							<% end_if %>

							<% if $PrjFTSrcDesc %>
							<div class="prj1__detailsListCon inlineBlock-parent">
								<% if $PrjFTSrcImg %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$PrjFTSrcImg.URL')"></div
								><% else %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$ThemeDir/icons/source.png"></div
								><% end_if %><div class="prj1__dtlsTextCon align-t">
									<% if $PrjFTSrcTitle %>
									<h6 class="bold">$PrjFTSrcTitle</h6>
									<% else %>
									<h6 class="bold">Source</h6>
									<% end_if %>
									<p>$PrjFTSrcDesc</p>
								</div>
							</div>
							<% end_if %>

							<% if $PrjFTAreDesc %>
							<div class="prj1__detailsListCon inlineBlock-parent">
								<% if $PrjFTAreImg %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$PrjFTAreImg.URL')"></div
								><% else %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$ThemeDir/icons/areas.png"></div
								><% end_if %><div class="prj1__dtlsTextCon align-t">
									<% if $PrjFTAreTitle %>
									<h6 class="bold">$PrjFTAreTitle</h6>
									<% else %>
									<h6 class="bold">Areas to be Powered</h6>
									<% end_if %>
									<p>$PrjFTAreDesc</p>
								</div>
							</div>
							<% end_if %>

							<% if $PrjFTConPerson %>
							<div class="prj1__detailsListCon inlineBlock-parent">
								<% if $PrjFTConImg %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$PrjFTConImg.URL')"></div
								><% else %>
								<div class="prj1__dtlsImgCon align-t" style="background-image: url('$ThemeDir/icons/contact.png"></div
								><% end_if %><div class="prj1__dtlsTextCon align-t">
									<% if $PrjFTConTitle %>
									<h6 class="bold">$PrjFTConTitle</h6>
									<% else %>
									<h6 class="bold">Contact</h6>
									<% end_if %>
									<p>$PrjFTConPerson</p>
									<p><a href="tel: $PrjFTConNumber" target="_blank">$PrjFTConNumber</a></p>
								</div>
							</div>
							<% end_if %>
							
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