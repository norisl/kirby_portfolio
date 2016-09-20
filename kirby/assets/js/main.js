// $(function(){
//     if(localStorage.getItem('lastClickedTag')){
//     	console.log('fired');
//         filterProjectsByTag(localStorage.getItem('lastClickedTag'));
//     }
// });

// $('.filterButton').on('click', function(){
//     var filterValue = $( this ).attr('data-js-filter-by-tags');
//     filterProjectsByTag(filterValue);
// });

// $('#allButton').on('click', function(){
// 	$('.teaser-project').css('display','');
// });

// function filterProjectsByTag(tagName){
//     $('.'+tagName).css('display','');
//     $('.teaser-project').not('.'+tagName).css('display','none');
//     localStorage.setItem('lastClickedTag',tagName);
// }
// $ (function (){
// 	$('html, body').animate({
// 	    scrollTop: $(".teaser-project-is-checked").offset().top
// 	}, 1000);

// })

function loadBackground() {
   $.ajax({
      url: 'project-breathingapparatus',
      success : function(project) {        
        $('.project-detail').html(project);
        }
   });
}

$( ".fuerdichknopf" ).on( "click", function() {
  loadBackground();
});
