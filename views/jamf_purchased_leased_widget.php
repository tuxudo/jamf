<div class="col-lg-4 col-md-6">
	<div class="card" id="purchased-leased-widget">
		<div class="card-header" data-container="body">
			<i class="fa fa-money"></i>
			<span data-i18n="jamf.purchased_or_leased"></span>
			<a href="/show/listing/jamf/jamf" class="pull-right"><i class="fa fa-list"></i></a>
		</div>
		<div class="card-body text-center"></div>
	</div><!-- /card -->
</div><!-- /col -->


<script>
$(document).on('appUpdate', function(e, lang) {

	$.getJSON( appUrl + '/module/jamf/get_purchased_leased', function( data ) {

		if(data.error){
			//alert(data.error);
			return;
		}

		var card = $('#purchased-leased-widget div.card-body'),
			baseUrl = appUrl + '/show/listing/jamf/jamf#';
		card.empty();

		// Set statuses
		card.append(' <a href="'+baseUrl+'purchased = 1" class="btn btn-info"><span class="bigger-150">'+data.Purchased+'</span><br>'+i18n.t('jamf.is_purchased')+'</a>');
		card.append(' <a href="'+baseUrl+'purchased = 0" class="btn btn-info"><span class="bigger-150">'+data.Leased+'</span><br>'+i18n.t('jamf.is_leased')+'</a>');
	});
});

</script>