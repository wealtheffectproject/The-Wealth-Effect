// JavaScript Document
//"use strict";
$(document).ready(function(){
    $('#learn-more').click(function(){
        $('#about').css('display', 'block').animate({
        'top' : "-=100%" //moves up
        });
    });
});