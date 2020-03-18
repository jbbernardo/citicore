<% loop ListBoardDirectors %>
<div id="abtBD-modal-$ID" class="remodal abtBD-modal-popup" data-remodal-id="abtBD-modal-$ID" style="max-width: 80%;">
	<div class="inlineBlock-parent modal-close" data-remodal-action="close" >
		<i class="fas fa-times"></i>
	</div>
	<div class="modal-body inlineBlock-parent align-l">
		<div class="width--40">
			<div class="abtBD-modal__imgCon" style="background-image: url('$LBDImg.URL"></div>
		</div
		><div class="width--60 display--flex flex--wrap align--items-center">
			<div>
				<h4 class="bold">$LBDTitle</h4>
				<h5 class="bold l-margin-b">$LBDPos</h5>
				<p>$LBDDesc</p>
			</div>
		</div>
	</div>
</div>
<% end_loop %>