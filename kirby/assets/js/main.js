$(document).pjax('a[data-pjax]', '#pjax-container');
$(document).pjax(".teaser-project-link");

$(document).ready(function() {
		
		

            var handleMediaChange = function(mediaQueryList) {
                if (mediaQueryList.matches) {
                    $('.teaser-project-link').click(function(event) {
                        $('.project-detail').css({ 'display': 'block', 'float': 'left', 'width': '95%', 'margin': '0 1rem 0 1rem' });
                        $('.project-overview').css({ 'position': 'fixed', 'left': ' -100%', 'display': 'none' });
                        $('.arrow').css({ 'display': 'block' });
                    })
                }
            };

            var mql = window.matchMedia("screen and (max-width: 45rem)");
            mql.addListener(handleMediaChange);
            handleMediaChange(mql);

            var colors = ["#FF358B", "#01B0F0", "#AEEE00", "#000000"];
            var index = 0;


            var elements = $('div').not('.is-checked');

            // var svg = el.find('svg path');

            $(this).click(function() {
                if (index >= colors.length)
                    index = 0; // reset back to first color
                $('a').css('color', colors[index]);
                $(elements).css('color', colors[index]);
                 $('svg').css('fill', colors[index]);
                 $('arrow').css('stroke', colors[index]);
                index++;


            });

            $(document).on("click", ".teaser-project", function() {
                $('.teaser-project').each(function(i) {
                    if ($('.teaser-project').hasClass('is-checked')) {
                        $('.teaser-project').removeClass('is-checked');
                    }
                });

                $(this).addClass('is-checked');

            });

            $(document).on("click", ".arrow",function() {
		                $('.project-overview').css({ 'position': 'fixed', 'left': ' 0%', 'display': 'block' });
		                $('.project-detail').css({ 'display': 'none' });
            });

        });


