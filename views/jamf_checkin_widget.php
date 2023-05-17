<div class="col-lg-4 col-md-6">
	<div class="card" id="jamf-checkin-widget">
		<div class="card-heading" data-container="body">
			<i class="fa fa-hand-peace-o"></i>
			<span data-i18n="jamf.last_contact_time_epoch"></span>
			<a href="/show/listing/jamf/jamf" class="pull-right"><i class="fa fa-list"></i></a>
			</h3>
		</div>
		<div class="card-body text-center"></div>
	</div><!-- /card -->
</div><!-- /col -->

<script>
$(document).on('appUpdate', function(e, lang) {

	$.getJSON( appUrl + '/module/jamf/get_last_checkin', function( data ) {

		if(data.error){
			// alert(data.error);
			return;
		}

		var card = $('#jamf-checkin-widget div.card-body'),
			baseUrl = appUrl + '/show/listing/jamf/jamf';
		card.empty();

        if(data[0].red != "0"){
			card.append(' <a href="'+baseUrl+'" class="btn btn-danger"><span class="bigger-150">'+data[0].red+'</span><br>> 1 '+i18n.t('jamf.month')+'</a>');
		}
		if(data[0].yellow != "0"){
			card.append(' <a href="'+baseUrl+'" class="btn btn-warning"><span class="bigger-150">'+data[0].yellow+'</span><br>> 1 '+i18n.t('jamf.week')+'</a>');
		}
		if(data[0].green != "0"){
			card.append(' <a href="'+baseUrl+'" class="btn btn-success"><span class="bigger-150">'+data[0].green+'</span><br>'+i18n.t('jamf.today')+'</a>');
		}
	});
});
</script>