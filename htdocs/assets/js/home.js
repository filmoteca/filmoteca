$(document).ready(function(){

    $('.visit-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
    });

    $('.main-carousel').slick({
		autoplay: true,
		autoplaySpeed: 6000
	});

    $('.programming .carrousel-widget').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1
    });

    $('#friend-sites-toggle-button').click(function(){

        $(this).siblings('div').slideToggle('slow')
        .toggleClass(function(){
            if($(this).hasClass('in')){
                return 'out';
            }else{
                return 'in';
            }
        });
    });

    $('#exhibition-modal').on('show.bs.modal', function($clicked){

        var url         = $clicked.relatedTarget.getAttribute('href');
        var $modal      = $(this).find('.modal-content');
        var loadingTemplate = '' +
            '<div class="modal-body">' +
                '<div class="loading"></div>' +
            '</div>';
        var messageOfError = '<div class="alert alert-danger">No se pudo recuperar la exhibición</div>';

        $modal.html(loadingTemplate)
            .load(url,function(responseText, responseStatus){

                if( responseStatus !== 'error' ){
                    return;
                }
                $modal.html(messageOfError);
            });
    });
});