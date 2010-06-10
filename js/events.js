$(document).ready(function() {
	$('#search-label').click(function(){
		$('#search-text').focus();
	});
	
	$('#search-text').focus(function(){
		$('#search-label').hide();
	});
	
	$('#search-text').blur(function(){
		if ($('#search-text').val() == '') {
			$('#search-label').show();
		}
	});
	
	$('#subscribe-label').click(function(){
		$('#subscribe-input').focus();
	});
	$('#subscribe-input').focus(function(){
		$('#subscribe-label').hide();
	});
	$('#subscribe-input').blur(function(){
		if ($('#subscribe-input').val() == '') {
			$('#subscribe-label').show();
		}
	});
	
	$('.absolute').click(function(){
		$('#' + this.id.substring(6)).focus();
	});
	$('.with-label').focus(function(){
		$('#label-' + this.id).hide();
	});
	$('.with-label').blur(function(){
		if ($('#' + this.id).val() == '')
		{
			$('#label-' + this.id).show();
		}
	});
});