//https://developers.google.com/chart/interactive/docs/customizing_tooltip_content	
//this should also include a total share of workload
function createCustomHTMLContent(title, category_explanation) {
  return '<div style="padding:5px 5px 5px 5px;">' +
     		'<table class="medals_layout" style="font-family:Comfortaa;	color:#4332ff;">' + 
      			'<tr>' + '<td style="font-weight:900;	color: #281e96;">' + title +'</td>' + '</tr>' + 
       			'<tr>' + '<td style="font-weight:900;	color: #665dcf;">' + category_explanation +'</td>' + '</tr>' +      	
      			'<tr>' + '<td style="color: #cecece;"><b>click to edit</b></td>' + '</tr>' +      	
      		'</table>' + 
      	'</div>';
} 