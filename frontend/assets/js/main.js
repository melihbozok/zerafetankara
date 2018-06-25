$(document).ready(function(){
   
    $('.responsive-menu').click(function(){
       $('.main-menu ul').slideToggle();
    });
    
    /*
    $('.slider').owlCarousel({
        items:1,
        nav:true
    })
    */
    
    $(".menuOpen").click(function(){
    	$(".cover .menu").slideToggle();
    	/*$(".cover .menu").addClass("BounceIn");
    	if($("cover .menu").css("display") == "block"){
    		$(".cover .menu").removeClass("BounceIn");
    		$(".cover .menu").addClass("BounceOut");

    	}*/
    })

});