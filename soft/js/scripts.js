(function ($, root, undefined) {

    $(function () {
        'use strict';
        //mulai script----------------------------------------->

        //masonry grid
        $('.grid').masonry({
            // options
            itemSelector: '.item'
        });
        
        //==LIGHTBOX===
		var gallery = $('.gallery a').simpleLightbox({
			// shows image captions
			captions:   true,
			captionDelay:   0,
			captionSelector:  'img',
			captionType:    'attr',
			captionPosition:  'bottom',
			captionsData: 'caption',
			// text for navigation arrows
			navText:    ['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>']
		});

        // end script------------------------------------------>
    });

})(jQuery, this);
