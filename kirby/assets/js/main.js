// // init Isotope
// var $teaser = $('.teaser').isotope({
// 	 itemSelector: '.teaser-project',
// 	 layoutMode: 'fitRows'
// });

// // filter items on button click
// $('.button-group').on( 'click', 'button', function() {
//   var filterValue = $( this ).attr('data-js-filter-by-tags');
//   // use filterFn if matches value
//   filterValue = filterValue;
//   console.log(filterValue);

//   $teaser.isotope({ filter: filterValue });
// });

// $('.teaser-project').each( function( i, projectView ) {
//   var $projectView = $( projectView );
//   $projectview.on( 'click', 'button', function() {
//     $projectview.find('.is-checked').removeClass('is-checked');
//     $( this ).addClass('is-checked');
//   });
// });

// // var element = document.getElementById('teaser-project-is-checked')
// // element.scrollIntoView();

$(function(){
    if(localStorage.getItem('lastClickedTag')){
        filterProjectsByTag(localStorage.getItem('lastClickedTag'));
    }
});

$('.filterButton').on('click', function(){
    var filterValue = $( this ).attr('data-js-filter-by-tags');
    filterProjectsByTag(filterValue);
});

$('#allButton').on('click', function(){
	$('.teaser-project').css('display','');
});

function filterProjectsByTag(tagName){
    $('.'+tagName).css('display','');
    $('.teaser-project').not('.'+tagName).css('display','none');
    localStorage.setItem('lastClickedTag',tagName);
}