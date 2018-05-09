$(document).ready(function(){
    $(document).on('click', "input#ygoDeleteButton", function(event){
    	event.preventDefault();
    	window.console.log("Delete Button Clicked");
    	var data = $(this).parents('form').serializeObject();
    	window.console.log('Delete Info?', data);
    	if(confirm('Are you sure you want to delete this card?')){
    		$.ajax({
    			url: 'deleteCard.php',
    			type: 'POST',
    			dataType: 'json',
    			data: data
    		}).done(function(response){
    			window.console.log(response);
    			window.location.reload();
    		}).fail(function(jqXHR, textStatus, errorThrown){
    			window.console.log('jqXHR: ', jqXHR);
    		});
    	}
    });
    $(document).on('click', "input#pokeDeleteButton", function(event){
    	event.preventDefault();
    	window.console.log("Delete Button Clicked");
    	var data = $(this).parents('form').serializeObject();
    	window.console.log('Delete Info?', data);
    	if(confirm('Are you sure you want to delete this card?')){
    		$.ajax({
    			url: 'deleteCard.php',
    			type: 'POST',
    			dataType: 'json',
    			data: data
    		}).done(function(response){
    			window.console.log(response);
    			window.location.reload();
    		}).fail(function(jqXHR, textStatus, errorThrown){
    			window.console.log('jqXHR: ', jqXHR);
    		});
    	}
    });
    $('#reportsButton').click(function(event){
        // var reportData = {};
       event.preventDefault();
       window.console.log("Report Link Clicked");
       $.ajax({
           url:'getReportData.php',
           type:'POST',
           dataType:'json'
       }).done(function(data){
           window.console.log(data);
           $('#ygoFirstReportAnswer').html('$'+data['ygoPrice'][0]);
           $('#pokeFirstReportAnswer').html('$'+data['pokePrice'][0]);
           $('#ygoSecondReportAnswer').html(data['ygoQuantity'][0]);
           $('#pokeSecondReportAnswer').html(data['pokeQuantity'][0]);
           $('#ygoThirdReportAnswer').html(data['ygoMaxCard'][0]);
           $('#pokeThirdReportAnswer').html(data['pokeMaxCard'][0]);
        //   console.log(data['ygoPrice']);
        //   var output = '';
        //   for (var property in data) {
    	   //    output += property + ': ' + data[property]+'; ';
	       //}
	       //window.console.log(output);
       }).fail(function(jqXHR, textStatus, errorThrown){
           window.console.log('jqXHR: ', jqXHR);
       });
       return false;
    });
});
$.fn.serializeObject = function(){
	var o = {};
	var a = this.serializeArray();
	$.each(a, function(){
		if(o[this.name] !== undefined){
			if(!o[this.name].push) {
				o[this.name] = [o[this.name]];
			}
			o[this.name].push(this.value || '');
		}
		else{
			o[this.name] = this.value || '';
		}
	});
	return o;
}