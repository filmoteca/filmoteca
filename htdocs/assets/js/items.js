// -------------------------------------------------------------
//  Cerrar y ancla 
// -------------------------------------------------------------

$(document).ready(function() {
  
	$('.btn-aparatos ul .slide').on('click', function(){
		//Get the url from the item clicked
		var pagina = $(this).children('a.frameContent').attr('id');
  
    $('.items-handler').find('.fp-tableCell').css({'overflow':'scroll','padding-top': '0em'}); 
		//Load item 
		$("#itemContainer").load(pagina);
    $('.btnCerrar').removeClass('hidden');
  });
  $('.btn-chars ul .slide').on('click', function(){
    //Get the url from the item clicked
    var pagina = $(this).children('a.frameContent').attr('id');
  
    $('.items-handler').find('.fp-tableCell').css({'overflow':'scroll','padding-top': '0em'}); 
    //Load item 
    $("#charContainer").load(pagina);
    $('.btnCerrar').removeClass('hidden');
  });
});


// -------------------------------------------------------------
//  Cerrar y ancla 
// -------------------------------------------------------------

$(document).ready(function() {
  $('.btnCerrar').click(function(){
    $('#itemContainer').empty();  
    $('#charContainer').empty();
    $('.slide').removeClass('active');
    $('.btnCerrar').addClass('hidden');
    $('.items-handler').find('.fp-tableCell').css({'overflow':'hidden','padding-top': '0em'}); 
    window.location.hash = window.location.hash.replace(window.location.hash, window.location.hash.split("=")[0]);
  });
});

 function jumpToAnchor(hashName) { 
    location.hash = "#" + hashName; 
  }

/* 
  var dataAnchor = document.URL.split("#")[1];
  var fullhash = location.hash.substr(1);
  var item = document.URL.split("=")[1];    
  var hash = location.hash.split("=")[0]; 
  hash.split('#')[1];
  window.location.hash = window.location.hash.replace(window.location.hash.substr(9), ''); 
*/

// -------------------------------------------------------------
//  loaditems
// -------------------------------------------------------------

$(document).ready(function() {
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