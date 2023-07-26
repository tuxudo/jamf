<div class="col-lg-4 col-md-6">
	<div class="card" id="jamf-version-widget">
		<div class="card-header" data-container="body" >
			<i class="fa fa-arrows-alt"></i>
			<span data-i18n="jamf.jamf_version"></span>
			<a href="/show/listing/jamf/jamf" class="pull-right"><i class="fa fa-list"></i></a>
		</div>
		<div class="list-group scroll-box"></div>
	</div><!-- /card -->
</div><!-- /col -->

<script>
$(document).on('appUpdate', function(e, lang) {

	var box = $('#jamf-version-widget div.scroll-box');

	$.getJSON( appUrl + '/module/jamf/get_jamf_version', function( data ) {
		
		box.empty();
		if(data.length){
			$.each(data, function(i,d){
				var badge = '<span class="badge pull-right">'+d.count+'</span>';
				box.append('<a href="'+appUrl+'/show/listing/jamf/jamf/#'+d.jamf_version+'" class="list-group-item">'+d.jamf_version+badge+'</a>')
			});
		}
		else{
			box.append('<span class="list-group-item">'+i18n.t('jamf.no_jamf_version')+'</span>');
		}
	});
});	
</script>
