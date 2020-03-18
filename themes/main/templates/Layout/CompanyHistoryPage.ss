<% include HeaderSpaceContent %>
<% include SubNav %>
<section class="abtCH-frame1">
	<div class="frm-cntnr width--85">
		<div class="gen__breadcrumbs inlineBlock-parent">
			<a href="#"><p>$Parent.Title</p></a>
			<p class="active">$Title</p>
		</div>
		<div class="gen__subTitleCon">
			<h4 class="bold">$Fr1FrameTitle</h4>
		</div>
		<div class="abtCH1__tabCon">
			<% loop HistoryLists %>
			<div class="rows m-padding-tb abtCH1__listCon">
				<div class="abtCH1__menu rows inlineBlock-parent">
					<h4 class="clr--red bold">$HLTitle</h4>
					<i class="fas fa-caret-down"></i>
				</div>
				<div class="abtCH1__content m-padding-t">
					$HLDesc
				</div>
			</div>
			<% end_loop %>
		</div>
	</div>
</section>