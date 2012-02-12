/* Author: Zoe Blair

*/
$(document).ready(function() {
	$('#quiz').before('<div id="summary"><ol></ol></div>');
	$('#quiz li').each(function(){
		$('#summary ol').append('<li rel="'+$(this).attr('id')+'" onClick="_gaq.push([\'_trackEvent\', \'summary\', \''+$(this).attr('id')+'\']);">'+$(this).children('h3').text()+'</li>');
	});
	$('#summary li:first-child').addClass('current');
	
	$("#quiz label").click(function(){
		choice = $('#'+$(this).attr('for')).val();
			//change taxes
			if(choice == "cut") {
				var current = parseFloat($("#totaltaxes").text().replace(",", ""));
				
				current -= (2799 * parseFloat($(this).parent('li').children('input[type=hidden]').val()));
				current = Math.round(current*100)/100;
				current += '';
				x = current.split('.');
				x1 = x[0];
				x2 = x.length > 1 ? '.' + x[1] : '';
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(x1)) {
				x1 = x1.replace(rgx, '$1' + ',' + '$2');
				}
				current = x1 + x2;
				
				$("#totaltaxes").text(current);
				$("h2 span").text('$'+(2799+(1*current)));
			}
		var id = $(this).parent("li").next("li").attr("id");
		showquestion(id);
		$('#summary .current').removeClass("current").addClass(choice).addClass("done").next("li").addClass("current");
		
		/*done?*/
		if($("#quiz li.current").length == 0) {
			if($("#totaltaxes").text()*1 <= 0){
				$("h3.summary").text('You made the cut!');
				$("p.summary").html('You achieved a 0% budget increase. You really know how to get ruthless with the budget. Have you considered office? <br /> <br />If you\'re votes didn\'t match up with your councillors, you should get in touch before February 21st, when the budget finalizes.');
			}
			$('.summary').removeClass('hidden');
		}
	});
	
 });
 
function showquestion(id){
	$("#quiz li.current").removeClass("current");
	$("#"+id).addClass("current");	
}
 
function choicelog(question, choice) {
	$.ajax({
		url: 'database.php',
		type: 'get',
		data: 'action=choicelog&question='+question+'&choice='+choice,
		success: function(msg){
		}
	});
}












