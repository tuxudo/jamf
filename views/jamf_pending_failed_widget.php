<div class="col-lg-4 col-md-6">
	<div class="card" id="pending-failed-widget">
		<div class="card-header" data-container="body">
			<i class="fa fa-warning"></i>
			<span data-i18n="jamf.pending_failed"></span>
			<a href="/show/listing/jamf/jamf" class="pull-right"><i class="fa fa-list"></i></a>
		</div>
		<div class="card-body text-center"></div>
	</div><!-- /card -->
</div><!-- /col -->


<script>
$(document).on('appUpdate', function(e, lang) {

	$.getJSON( appUrl + '/module/jamf/get_pending_failed', function( data ) {

		if(data.error){
			//alert(data.error);
			return;
		}

		var card = $('#pending-failed-widget div.card-body'),
			baseUrl = appUrl + '/show/listing/jamf/jamf#';
		card.empty();

		// Set statuses
		//card.append(' <a href="'+baseUrl+'" class="btn btn-success"><span class="bigger-150">'+data.Completed+'</span><br>'+i18n.t('jamf.comands_completed')+'</a>');
		card.append(' <a href="'+baseUrl+'comands_pending > 0" class="btn btn-warning"><span class="bigger-150">'+data.Pending+'</span><br>'+i18n.t('jamf.comands_pending')+'</a>');
		card.append(' <a href="'+baseUrl+'comands_failed > 0" class="btn btn-danger"><span class="bigger-150">'+data.Failed+'</span><br>'+i18n.t('jamf.comands_failed')+'</a>');

	});
});

</script>