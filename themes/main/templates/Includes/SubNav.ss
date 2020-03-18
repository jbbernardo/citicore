<% if ClassName = 'AboutPage' || 'BoardDirectorPage' || 'CorporateGovernancePage' || 'CompanyHistoryPage' %>
<div class="hdr__subNav">
	<div class="frm-cntnr width--85 align-c">
		<div class="vertical-parent">
			<div class="vertical-align inlineBlock-parent">
				<p class="<% if ClassName = 'AboutPage' %>active<% end_if %>"><a href="/about-us">About Us</a></p>
				<p><a href="about-us/board-director">Board of Directors</a></p>
				<p><a href="/about-us/corporate-governance">Corporate Governance</a></p>
				<p><a href="/about-us/company-history">Company History</a></p>
			</div>
		</div>
	</div>
</div>
<% end_if %>

<% if ClassName = 'OurBusinessPage' %>
<div class="hdr__subNav">
	<div class="frm-cntnr width--85 align-c">
		<div class="vertical-parent">
			<div class="vertical-align inlineBlock-parent">
				<p class="active"><a href="#">About Us</a></p>
				<p><a href="#">Board of Directors</a></p>
				<p><a href="#">Corporate Governance</a></p>
				<p><a href="#">Company History</a></p>
			</div>
		</div>
	</div>
</div>
<% end_if %>