function showView(id,clases){ /*Cambiar de vistas al presionar un boton*/
  console.debug(id+'    '+ clases); /*Para saber que clase y que id esta presionando*/
  $('.'+clases).hide();
  $('#'+id).show();
}

function addClassActive(id) { /*Cambiar de color los botones*/
	console.debug('este es el id'+id);
    $('.nav-sidebar > li').removeClass('active');
    $('.nav-sidebar > li#' + id).addClass('active');
}