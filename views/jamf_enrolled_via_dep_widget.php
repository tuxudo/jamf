<div class="col-lg-4 col-md-6">
	<div class="card" id="enrolled-via-dep-widget">
		<div class="card-header" data-container="body">
			<i class="fa fa-plus-circle"></i>
			<span data-i18n="jamf.enrolled_via_dep"></span>
			<a href="/show/listing/jamf/jamf" class="pull-right"><i class="fa fa-list"></i></a>
		</div>
		<div class="card-body text-center"></div>
	</div><!-- /card -->
</div><!-- /col -->


<script>
$(document).on('appUpdate', function(e, lang) {

	$.getJSON( appUrl + '/module/jamf/get_enrolled_via_dep', function( data ) {

		if(data.error){
			//alert(data.error);
			return;
		}

		var card = $('#enrolled-via-dep-widget div.card-body'),
			baseUrl = appUrl + '/show/listing/jamf/jamf#';
		card.empty();

		// Set statuses
		card.append(' <a href="'+baseUrl+'enrolled_via_dep = 1" class="btn btn-success"><span class="bigger-150">'+data.Yes+'</span><br>&nbsp;&nbsp;'+i18n.t('yes')+'&nbsp;&nbsp;</a>');
		card.append(' <a href="'+baseUrl+'enrolled_via_dep = 0" class="btn btn-info"><span class="bigger-150">'+data.No+'</span><br>&nbsp;&nbsp;&nbsp;'+i18n.t('no')+'&nbsp;&nbsp;&nbsp;</a>');
	});
});

</script>