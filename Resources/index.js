$(document).ready(function() {
	$.ajax({
		url: "Resources/Structure.xml",
		type: "GET",
		dataType: "xml",
		success: function(data) {
			$(data).find("Lab").each(function (i,lab) {
				var thisHtml = '<li>' + $(this).find("FolderName").text() + '<br/>';
				thisHtml += $(this).find("Description").text() + '<br/>';
				thisHtml += '<a href="'+ $(this).find("Path").text()+'">'+$(this).find("Path").text() +'</a>' + '<br/>';
				thisHtml += '<br/></li>';
				$("#labs").append(thisHtml);
			});

			$(data).find("Homework").each(function (i, hmwk) {
				var thisHtml = '<li>' + $(this).find("FolderName").text() + '<br/>';
				thisHtml += $(this).find("Description").text() + '<br/>';
				thisHtml += '<a href="'+ $(this).find("Path").text()+'">'+$(this).find("Path").text() +'</a>' + '<br/>';
				thisHtml += '<br/></li>';
				$("#homeworks").append(thisHtml);
			});

			string = $(data).find("index").each(function(i) {$(this).text()})
			console.log('<p>' + string + '</p>');
			$('#TASP').append('<p>' + $(data).find("index").text() + '</p>');


			// $(data).find("TASP").each(function (i, tasp) {
			// 	$('#TASP').append($(this).find("index").text());
			// })
		}
	});
});