<% if ClassName != 'Page' %>
<div class="hdr-frame changeHeader">
	<div>
		<div class="width--100 hdr__topCon desktop">
			<div class="width--90 ma-auto display--flex flex--wrap justify--between align--items-center frm-cntnr">
				<div class="width--auto inlineBlock-parent">
					<div class="inlineBlock-parent hdr__cntctLink align-t">
						<i class="fas fa-phone"></i>
						<a href="#">(02) 8-470-8996</a>
					</div>
						<span class="s-margin-lr clr--white align-t">|</span>
					<div class="inlineBlock-parent hdr__cntctLink align-t">
						<i class="fas fa-envelope"></i>
						<a href="#">info@crec.com.ph</a>
					</div>
				</div>
				<div class="width--auto">
					<% loop $HeaderFooter %>
						<% loop $SocialLinks %>
						<a href="$SlLink" target="_blank"><i class="$SlIcon"></i></a>
						<% end_loop %>
					<% end_loop %>
				</div>
			</div>
		</div>
		<div class="width--100 hdr__midCon">
			<div class="width--90 ma-auto vertical-parent frm-cntnr">
				<div class="vertical-align">
					<div class="hdr__midContent">
						<div>
							<% loop $HeaderFooter %>
							<a href="$AbsoluteBaseURL"><img src="$HeaderLogo.URL" alt="$HeaderLogo.Title"></a>
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

						<ul class="inlineBlock-parent mobile">
							<li class="hdr__link $FirstLast $LinkOrSection"><a href="$AbsoluteBaseURL" title="Home">Home</a></li>
							<li class="hdr__link"><a title="About Us">About Us</a>
								<ul class="hdr__subLinkCon">
									<li class="hdr__subLink"><a href="about-us">About Us</a></li>
									<li class="hdr__subLink"><a href="about-us/board-director">Board of Directors</a></li>
									<li class="hdr__subLink"><a href="about-us/corporate-governance">Corporate Governance</a></li>
									<li class="hdr__subLink"><a href="about-us/company-history">Company History</a></li>
								</ul>
							</li>
							<li class="hdr__link"><a title="Our Business">Our Business</a>
								<ul class="hdr__subLinkCon">
									<li class="hdr__subLink"><a href="our-business/renewable-energy">Renewable Energy</a>
										<ul class="hdr__subLink2Con to-mob">
											<li class="hdr__sub2Link"><a href="our-business/renewable-energy/at-a-glance/">At a Glance</a></li>
											<li class="hdr__sub2Link"><a href="our-business/renewable-energy/solar-power">Solar Power</a></li>
											<li class="hdr__sub2Link"><a href="our-business/renewable-energy/run-of-river-hydro-power">Run-of-River Hydro Power</a></li>
											<li class="hdr__sub2Link"><a href="our-business/renewable-energy/biomass-power">Biomass Power</a></li>
											<li class="hdr__sub2Link"><a href="our-business/renewable-energy/retail-electricity-supply">Retail Electricity Power</a></li>
										</ul>
									</li>
									<li class="hdr__subLink"><a href="our-business/biomass">Biomass</a></li>
									<li class="hdr__subLink"><a href="our-business/water-supply">Water Supply</a>
										<ul class="hdr__subLink2Con to-mob">
											<li class="hdr__sub2Link"><a href="our-business/water-suppy/cswater/">CsWater</a></li>
											<li class="hdr__sub2Link"><a href="our-business/water-suppy/bulk-water-supply">Bulk Water Supply</a></li>
											<li class="hdr__sub2Link"><a href="our-business/water-suppy/water-sourcing-and-distribution">Water Sourcing and Distribution</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="hdr__link"><a title="Sustainability">Sustainability</a>
								<ul class="hdr__subLinkCon">
									<li class="hdr__subLink"><a href="sustainability/communities">Communities</a></li>
									<li class="hdr__subLink"><a href="sustainability/environment">Environment</a></li>
									<li class="hdr__subLink"><a href="sustainability/health-and-safety">Health & Safety</a></li>
								</ul>
							</li>
							<li class="hdr__link"><a href="#modal" title="Investor Center">Investor Center</a></li>
							<li class="hdr__link"><a href="#modal" title="Careers">Careers</a></li>
							<li class="hdr__link"><a href="contact-us" title="Contact Us">Contact Us</a></li>
							<div class="width--100 hdr__topCon mobile">
								<div class="width--90 ma-auto display--flex flex--wrap justify--between align--items-center frm-cntnr">
									<div class="width--auto inlineBlock-parent">
										<% loop $HeaderFooter %>
										<div class="inlineBlock-parent hdr__cntctLink align-t">
											<i class="fas fa-phone"></i>
											<a href="tel: $FtrNum" target="_blank">$FtrNum</a>
										</div>
											<span class="s-margin-lr clr--white align-t">|</span>
										<div class="inlineBlock-parent hdr__cntctLink align-t">
											<i class="fas fa-envelope"></i>
											<a href="mailto: $FtrEmail">$FtrEmail</a>
										</div>
										<% end_loop %>
									</div>
									<div class="width--auto">
										<% loop $HeaderFooter %>
											<% loop $SocialLinks %>
											<a href="$SlLink" target="_blank"><i class="$SlIcon"></i></a>
											<% end_loop %>
										<% end_loop %>
									</div>
								</div>
							</div>
						</ul>

						<ul class="inlineBlock-parent desktop">
							<li class="hdr__link $FirstLast $LinkOrSection"><a href="$AbsoluteBaseURL" title="Home">Home</a></li>
							<li class="hdr__link"><a title="About Us">About Us</a>
								<ul class="hdr__subLinkCon">
									<li class="hdr__subLink"><a href="about-us">About Us</a></li>
									<li class="hdr__subLink"><a href="about-us/board-director">Board of Directors</a></li>
									<li class="hdr__subLink"><a href="about-us/corporate-governance">Corporate Governance</a></li>
									<li class="hdr__subLink"><a href="about-us/company-history">Company History</a></li>
								</ul>
							</li>
							<li class="hdr__link"><a title="Our Business">Our Business</a>
								<ul class="hdr__subLinkCon">
									<li class="hdr__subLink"><a href="our-business/renewable-energy">Renewable Energy</a></li>
									<li class="hdr__subLink"><a href="our-business/biomass">Biomass</a></li>
									<li class="hdr__subLink"><a href="our-business/water-supply">Water Supply</a></li>
								</ul>
							</li>
							<li class="hdr__link"><a title="Sustainability">Sustainability</a>
								<ul class="hdr__subLinkCon">
									<li class="hdr__subLink"><a href="sustainability/communities">Communities</a></li>
									<li class="hdr__subLink"><a href="sustainability/environment">Environment</a></li>
									<li class="hdr__subLink"><a href="sustainability/health-and-safety">Health & Safety</a></li>
								</ul>
							</li>
							<li class="hdr__link"><a href="#modal" title="Investor Center">Investor Center</a></li>
							<li class="hdr__link"><a href="#modal" title="Careers">Careers</a></li>
							<li class="hdr__link"><a href="contact-us" title="Contact Us">Contact Us</a></li>
							<div class="width--100 hdr__topCon mobile">
								<div class="width--90 ma-auto display--flex flex--wrap justify--between align--items-center frm-cntnr">
									<div class="width--auto inlineBlock-parent">
										<% loop $HeaderFooter %>
										<div class="inlineBlock-parent hdr__cntctLink align-t">
											<i class="fas fa-phone"></i>
											<a href="tel: $FtrNum" target="_blank">$FtrNum</a>
										</div>
											<span class="s-margin-lr clr--white align-t">|</span>
										<div class="inlineBlock-parent hdr__cntctLink align-t">
											<i class="fas fa-envelope"></i>
											<a href="mailto: $FtrEmail">$FtrEmail</a>
										</div>
										<% end_loop %>
									</div>
									<div class="width--auto">
										<% loop $HeaderFooter %>
											<% loop $SocialLinks %>
											<a href="$SlLink" target="_blank"><i class="$SlIcon"></i></a>
											<% end_loop %>
										<% end_loop %>
									</div>
								</div>
							</div>
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