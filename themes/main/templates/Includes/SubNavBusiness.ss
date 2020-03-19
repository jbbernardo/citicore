<%-- <div class="hdr__subNav">
	<div class="frm-cntnr width--85 align-c">
		<div class="vertical-parent">
			<div class="vertical-align inlineBlock-parent">
				<p class="<% if Title = 'At a Glance' %>active<% end_if %>"><a href="our-business/renewable-energy/at-a-glance/">At a Glance</a></p>
				<p class="<% if Title = 'Solar Power' %>active<% end_if %>"><a href="our-business/renewable-energy/solar-power">Solar Power</a></p>
				<p class="<% if Title = 'Run-of-River Hydro Power' %>active<% end_if %>"><a href="our-business/renewable-energy/run-of-river-hydro-power">Run-of-River Hydro Power</a></p>
				<p class="<% if Title = 'Biomass Power' %>active<% end_if %>"><a href="our-business/renewable-energy/biomass-power">Biomass Power</a></p>
				<p class="<% if Title = 'Retail Electricity Supply' %>active<% end_if %>"><a href="our-business/renewable-energy/retail-electricity-supply">Retail Electricity Supply</a></p>
			</div>
		</div>
	</div>
</div> --%>
<% loop $Menu(2) %>
<div class="hdr__subNav <% if $isCurrent %>active<% else_if $isSection %>section<% end_if %>">
	<div class="frm-cntnr width--85 align-c">
		<div class="vertical-parent">
			<div class="vertical-align inlineBlock-parent">
			<% loop $Children %>
				<p class="<% if Title = Title %>active<% end_if %>"><a href="$Link">$Title</a></p>
			<% end_loop %>
			</div>
		</div>
	</div>
</div>
<% end_loop %>