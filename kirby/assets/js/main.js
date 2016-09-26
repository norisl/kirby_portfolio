function loadBackground(destination) {
   $.ajax({
      url: destination,
      success : function(project) { 
      $('.project-detail').html(project);
    
        }
   });
}

$( ".teaser-project-link" ).on( "click", function(event) {
	event.preventDefault();
	var $url = $(this).attr('data-slug');
 	loadBackground($url);
});




$(document).ready(function () {
	var colors = ["#FF358B", "#01B0F0", "#AEEE00", "#000000"];
	var index = 0;
	
	$ (this).click(function (){
	if (index >= colors.length)
    index = 0; // reset back to first color
	$ ('li').css('color', colors[index]);
	index++;
	});

	if ($(window).width() >= 350) {
		$( '.teaser-project-link').click( function(event) {
	 	$('.project-detail').css({'display':'block', 'float':'left', 'width':'95%', 'margin': '0 1rem 0 1rem'});
	 	$('.project-overview').css( {'position':'fixed', 'left':' -100%', 'display':'none'});
		});
	};

 });
