// Function that adds an onclick to the #site img and also
// unhides formatting divs.
$(document).ready(function() {
	$("#site").on("click", function(data) {
		$.ajax({
			url: "lab4.json",
			type: "GET",
			dataType: "json",
			success: function(data) {
				$.each(data.songs, function(i, item) {
					// Change inner html with basic json data
					$('.title')[i].innerHTML = data.songs[i].songName;
					$('.artist')[i].innerHTML = '<a href="'+data.songs[i].artistSiteURL+'">'+data.songs[i].artist+'</a>';
					$('.album')[i].innerHTML = data.songs[i].album;
					$('.date')[i].innerHTML = data.songs[i].releaseDate;
					$('.genres')[i].innerHTML = data.songs[i].genres;

					// Add cover art to the page
					var img = '<img src="' + data.songs[i].coverArtURL+'" height="75" width="75"/>';
					var $albumArtElement = $('.albumArt')[i];
					$albumArtElement.innerHTML = img;
				});
			}
		});
		$('.hidden').show();
	});
});