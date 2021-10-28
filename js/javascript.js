
/*===========================

For Hamburger Menu

===========================*/

/*ESERCIZIO:
Creare un hamburger menu con l’utilizzo di Html, Css e JavaScript.*/


$(document).ready(function(){

  // // cliccando sull'icona hamburger si apre il menù
  // $(".header-right > a").click(function() {
  //   $(".hamburger-menu").show();
  //   // $(".hamburger-menu").addClass("active");
  // });
  //
  // // cliccando sulla X si chiude il menù
  // $(".close").click(function() {
  //   $(".hamburger-menu").hide();
  //   // $(".hamburger-menu").removeClass("active");
  // });


  // METODO ALTERNATIVO PER RESPONSIVE
  // cliccando sull'icona hamburger si apre il menù e quando allargo il browser
  // oltre un certo viewport il menù hamburger scompare automaticamente
  $(".links > a").click(function() {
    $(".hamburger-menu").addClass("active");
  });

  // cliccando sulla X si chiude il menù
  $(".close-menu").click(function() {
    $(".hamburger-menu").removeClass("active");
  });

});





/*===========================

For Contact Form

===========================*/
/*
Creating an HTML5 enhanced responsive-ready contact form, with custom javascript feature detection
www.toddmotto.com
*/
(function() {

	// Create input element for testing
	var inputs = document.createElement('input');

	// Create the supports object
	var supports = {};

	supports.autofocus   = 'autofocus' in inputs;
	supports.required    = 'required' in inputs;
	supports.placeholder = 'placeholder' in inputs;

	// Fallback for autofocus attribute
	if(!supports.autofocus) {

	}

	// Fallback for required attribute
	if(!supports.required) {

	}

	// Fallback for placeholder attribute
	if(!supports.placeholder) {

	}

	// Change text inside send button on submit
	var send = document.getElementById('contact-submit');
	if(send) {
		send.onclick = function () {
			this.innerHTML = '...Sending';
		}
	}

})();
