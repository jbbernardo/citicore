<% if ClassName != 'Page' %>
<div class="hdr-frame">
	<div>
		<div class="width--100 hdr__topCon">
			<div class="width--90 align-r inlineBlock ma-auto">
				<% loop $HeaderFooter %>
					<% loop $SocialLinks %>
					<a href="$SlLink" target="_blank"><i class="$SlIcon"></i></a>
					<% end_loop %>
				<% end_loop %>
			</div>
		</div>
		<div class="width--100 hdr__midCon">
			<div class="width--90 ma-auto vertical-parent">
				<div class="vertical-align">
					<div class="hdr__midContent">
						<div>
							<% loop $HeaderFooter %>
							<a href="$AbsoluteBaseURL"><img src="$HeaderLogo.URL"></a>
							<% end_loop %>
						</div>
						<div class="to-Mob">
							<div id="nav-icon">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
						<ul class="inlineBlock-parent">
							<li class="hdr__link $FirstLast $LinkOrSection"><a href="#home" title="Home">Home</a></li>
							<li class="hdr__link"><a href="#aboutus" title="About Us">About Us</a></li>
							<li class="hdr__link"><a href="#ourbusiness" title="Our Business">Our Business</a></li>
							<li class="hdr__link"><a href="#sustainability" title="Sustainability">Sustainability</a></li>
							<li class="hdr__link"><a href="#investorcenter" title="Investor Center">Investor Center</a></li>
							<li class="hdr__link"><a href="#modal" title="Careers<">Careers</a></li>
							<li class="hdr__link"><a href="#contactus" title="Contact Us">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="width--100 hdr__botCon">
			<div class="width--33"></div>
			<div class="width--33"></div>
			<div class="width--33"></div>
		</div>
	</div>
</div>
<% end_if %>