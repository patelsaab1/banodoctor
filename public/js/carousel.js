$(".owl-carousel").owlCarousel({
 
    //Basic Speeds
    slideSpeed : 200,
    paginationSpeed : 800,
 
    //Autoplay
    autoPlay : true,
    goToFirst : true,
    goToFirstSpeed : 1000,
 
    // Navigation
    navigation : false,
    navigationText : ["prev","next"],
    pagination : true,
    paginationNumbers: false,
 
    // Responsive
    responsive: true,
    items : 4,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsMobile : [479,1]
 
});


$(".owl-carousel-college").owlCarousel({
 
    //Basic Speeds
    slideSpeed : 200,
    paginationSpeed : 800,
 
    //Autoplay
    autoPlay : true,
    goToFirst : true,
    goToFirstSpeed : 1000,
 
    // Navigation
    navigation : false,
    navigationText : ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
    pagination :false,
    paginationNumbers: false,
 
    // Responsive
    responsive: true,
    items : 3,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [980,2],
    itemsTablet: [768,2],
    itemsMobile : [479,1]
 
});


$(".owl-carousel-testimony").owlCarousel({
 
    //Basic Speeds
    slideSpeed : 200,
    paginationSpeed : 800,
 
    //Autoplay
    autoPlay : true,
    goToFirst : true,
    goToFirstSpeed : 1000,
 
    // Navigation
    navigation : false,
    navigationText : ["<div class='nav-button owl-prev bg-dark'>‹</div>", "<div class='nav-button owl-next bg-dark'>›</div>"],
    pagination :false,
    paginationNumbers: false,
 
    // Responsive
    responsive: true,
    items : 1,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [980,1],
    itemsTablet: [768,2],
    itemsMobile : [479,1]
 
});



$(".owl-carousel").owlCarousel();
 
//get carousel instance data and store it in variable owl
var owl = $(".owl-carousel").data('owlCarousel');
 
//Public methods
owl.next() ;  // Go to next slide
owl.prev() ;  // Go to previous slide
owl.goTo(x);  // Go to x slide
 
owl.update(); // Update Slide
 
owl.buildControlls()    // Build Controlls
owl.destroyControlls()  // Remove Controlls
 
owl.play() // Autoplay
owl.stop() // Autoplay Stop



