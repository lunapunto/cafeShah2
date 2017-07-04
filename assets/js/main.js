var $ = jQuery;
var ajaxurl;
var dir;
var hwindow;
var wwindow;
/*
* Helper () isset
* Devuelve si un elemento exista dada su clase
*/
function isset(selector){
  return ($(selector).length ? true : false);
}
/*
* Función onResize()
* Llamada al inicio y cuando la venta se vuelve a ajustar
*/
function onResize(){
   hwindow = $(window).height();
   wwindow = $(window).width();
   /*
   * Helper para clases .full
   * Asigna el alto de tamaño de la ventana
   */
   if(isset('.full')){
     $('.full').height(hwindow);
   }
   /*
   * Helper para clases .min_full
   * El tamaño mínimo del elemento será el alto de la ventana
   */
   if(isset('.min_full')){
     $('.min_full').css('min-height', hwindow+'px');
   }
}
function is_waypoint(e){
  var ot = $(window).scrollTop();
  var ob = ot + hwindow;
  var et = e.offset().top + e.outerHeight();
  if(ot <= et && et <= ob){
    return true;
  }else{
    return false;
  }
}
$(document).ready(function(){
  onResize();

  /* Instancía las variables principales */
  ajaxurl = $('#ajaxurl').val();
  dir = $('#dir').val();

})

/*
* On window resize ()
*/
$(window).resize(function(){
  onResize();
})

/*
* onLoad()
* Trigger in footer.php
*/
function onLoad(){

};
