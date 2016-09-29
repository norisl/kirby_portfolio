$(document).pjax('a[data-pjax]', '#pjax-container');
$(document).pjax(".teaser-project-linkaser");


$(document).ready(function () {
	var colors = ["#FF358B", "#01B0F0", "#AEEE00", "#000000"];
	var index = 0;
	
	$ (this).click(function (){
	if (index >= colors.length)
    	index = 0; // reset back to first color
		$('*').css('color', colors[index]);
		index++;
		
	});

	if (window.matchMedia('(max-width: 35rem)').matches){
		$( '.teaser-project-link').click( function(event) {
			console.log('fiired');
	 	$('.project-detail').css({'display':'block', 'float':'left', 'width':'95%', 'margin': '0 1rem 0 1rem'});
	 	$('.project-overview').css( {'position':'fixed', 'left':' -100%', 'display':'none'});
		});
	};

	// var path = document.querySelector('.path');
	// var length = path.getTotalLength();

 });
