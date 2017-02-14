// JavaScript Document
//"use strict";
$(document).ready(function(){
    $("#test").click(function() {
    	$('html, body').animate({
        scrollTop: $("div").next("#section").offset().top
    	}, 800);		
	});
});