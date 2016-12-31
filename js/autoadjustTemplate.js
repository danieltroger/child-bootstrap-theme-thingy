/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function() {
   var footer = $("footer");
   if(footer.position().top + footer.height() < $(window).height()) {
        var moveRange = $(window).height() - footer.height() - footer.position().top;
        footer.css({"margin-top":moveRange+"px"});
   }
});