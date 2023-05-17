<div class="col-lg-4 col-md-6">
	<div class="card" id="user-approved-mdm-widget">
		<div class="card-heading" data-container="body">
			<i class="fa fa-check-square"></i>
			<span data-i18n="jamf.user_approved_mdm"></span>
			<a href="/show/listing/jamf/jamf" class="pull-right"><i class="fa fa-list"></i></a>
		</div>
		<div class="card-body text-center"></div>
	</div><!-- /card -->
</div><!-- /col -->


<script>
$(document).on('appUpdate', function(e, lang) {

	$.getJSON( appUrl + '/module/jamf/get_user_approved_mdm', function( data ) {

		if(data.error){
			//alert(data.error);
			return;
		}

		var card = $('#user-approved-mdm-widget div.card-body'),
			baseUrl = appUrl + '/show/listing/jamf/jamf#';
		card.empty();

		// Set statuses
		card.append(' <a href="'+baseUrl+'user_approved_mdm = 1" class="btn btn-success"><span class="bigger-150">'+data.Yes+'</span><br>&nbsp;&nbsp;'+i18n.t('yes')+'&nbsp;&nbsp;</a>');
		card.append(' <a href="'+baseUrl+'user_approved_mdm = 0" class="btn btn-danger"><span class="bigger-150">'+data.No+'</span><br>&nbsp;&nbsp;&nbsp;'+i18n.t('no')+'&nbsp;&nbsp;&nbsp;</a>');
	});
});

</script>