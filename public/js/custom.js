/*=============================================================
    Authour URL: www.designbootstrap.com
    
    http://www.designbootstrap.com/

    License: MIT

    http://opensource.org/licenses/MIT

    100% Free To use For Personal And Commercial Use.

    IN EXCHANGE JUST TELL PEOPLE ABOUT THIS WEBSITE
   
========================================================  */

$(document).ready(function () {

/*====================================
SCROLLING SCRIPTS
======================================*/

$('.scroll-me a').bind('click', function (event) { //just pass scroll-me in design and start scrolling
var $anchor = $(this);
$('html, body').stop().animate({
scrollTop: $($anchor.attr('href')).offset().top
}, 1200, 'easeInOutExpo');
event.preventDefault();
});


/*====================================
SLIDER SCRIPTS
======================================*/
$(window).load(function() {
     // + any other carousel related stuff that has to wait for the images to complete loading
     $('.carousel').carousel()
})



$('#carousel-slider').carousel({
interval: 4000, //TIME IN MILLI SECONDS
wrap: false,
hover: false,
});


/*====================================
VAGAS SLIDESHOW SCRIPTS
======================================*/
// $.vegas('slideshow', {
// backgrounds: [

// { src: 'img/denali.png', fade: 9000, delay: 19000},
// { src: 'img/1.jpg', fade: 2000, delay: 9000
//  }
// ]
// })

// ('overlay', {
// /** SLIDESHOW OVERLAY IMAGE **/
// src: 'js/vegas/overlays/overlay.png' // THERE ARE TOTAL 01 TO 15 .png IMAGES AT THE PATH GIVEN, WHICH YOU CAN USE HERE
// });

/*====================================
POPUP IMAGE SCRIPTS
======================================*/
$('.fancybox-media').fancybox({
openEffect: 'elastic',
closeEffect: 'elastic',
helpers: {
title: {
type: 'inside'
}
}
});


/*====================================
FILTER FUNCTIONALITY SCRIPTS
======================================*/
$(window).load(function () {
var $container = $('#work-div');
$container.isotope({
filter: '*',
animationOptions: {
duration: 750,
easing: 'linear',
queue: false
}
});
$('.caegories a').click(function () {
$('.caegories .active').removeClass('active');
$(this).addClass('active');
var selector = $(this).attr('data-filter');
$container.isotope({
filter: selector,
animationOptions: {
duration: 750,
easing: 'linear',
queue: false
}
});
return false;
});

});

/*====================================
Leaflet SCRIPTS
======================================*/
// var map;

//  var za = new L.GeoJSON.AJAX('public/van.geojson').addTo(map);


L.mapbox.accessToken = 'pk.eyJ1IjoiemFiYXdhMTc1IiwiYSI6ImNpaGNteWhxOTA5Z2x0Y2x6dGZzbXY2YXkifQ.d9K73AIBjfM3mu2_mq3-Sw';

var map = L.mapbox.map('mapid', 'zabawa175.bv9tr8cs')
    .setView([49.2678, -122.915],7);

var featureLayer = L.mapbox.featureLayer({
        type: 'FeatureCollection',
        features: [{
            type: 'Feature',
            properties: {
                'Location': 'Vancouver, BC',
                'Email': 'z.zabawa175@gmail.com',
                'phone': '(778) 251 - 2672',
                'marker-color': '#548cba',
                'marker-size': 'large',
                'marker-symbol': ''
            },
            geometry: {
                type: 'Point',
                coordinates: [-123.1526, 49.2732]
            }
        }]
    })
    .addTo(map);

featureLayer.eachLayer(function(layer) {
 var content = 
        ' <ul> <li> <p><span class="icon ion-ios-navigate-outline"><\/span>' + layer.feature.properties.Location + '</li>' +
        '<li><p><span class="icon ion-ios-email-outline"><\/span>' + layer.feature.properties.Email + '<\/p><\/li>' +
        '<li class="noUl"><p><span class="icon ion-ios-telephone-outline"><\/span>' + layer.feature.properties.phone + '<\/p><\/li><\/ul>';
    layer.bindPopup(content);
});
// bound script should work

// L.mapbox.accessToken = 'pk.eyJ1IjoiemFiYXdhMTc1IiwiYSI6ImNpaGNteWhxOTA5Z2x0Y2x6dGZzbXY2YXkifQ.d9K73AIBjfM3mu2_mq3-Sw';

// var southWest = L.latLng(39.1982, -140.2734),
//     northEast = L.latLng(54.9524, -101.2061),
//     bounds = L.latLngBounds(southWest, northEast); 



// var map = L.mapbox.map('mapid', 'zabawa175.bv9tr8cs', {
//     maxBounds: bounds,
//     maxZoom: 6,
//     minZoom: 8
// });

// map.fitBounds(bounds);


// map.fitBounds(za.getBounds());
// var mapquestOSM = new L.TileLayer("http://{s}.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png", {
//             maxZoom: 17,
//             subdomains: ["otile1", "otile2", "otile3", "otile4"],
//             attribution: 'Tiles courtesy of <a href="http://www.mapquest.com/" target="_blank">MapQuest</a>. Map data (c) <a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a> contributors, CC-BY-SA.'
//         });
// var mbTiles = new L.tileLayer('public/mapTiles/mbtiles.php?db=Zmap.mbtiles&z={z}&x={x}&y={y}', {
//             tms: true,
//             attribution: 'Tiles Courtesy of <a href="http://tiles.mapbox.com/mapbox/map/geography-class" target="_blank">MapBox</a>',
//             opacity: 0.7
//         });

// var map = new L.Map("mapid",{
//             zoom: 3,
//             center: [36.315125, -88.769531],
//         });

// var map = L.map('mapid', {
//     center: [50, 30],
//     zoom: 5
// });


// var mb = L.tileLayer.mbTiles('public/mapTiles/Zmap1.mbtiles').addTo(map);

/*====================================
WRITE YOUR CUSTOM SCRIPTS BELOW
======================================*/
 $(document).ready(function(){
 if (Modernizr.touch) {
        // show the close overlay button
        $(".close-overlay").removeClass("hidden");
        // handle the adding of hover class when clicked
        $(".img").click(function(e){
            if (!$(this).hasClass("hover")) {
                $(this).addClass("hover");
            }
        });
        // handle the closing of the overlay
        $(".close-overlay").click(function(e){
            e.preventDefault();
            e.stopPropagation();
            if ($(this).closest(".img").hasClass("hover")) {
                $(this).closest(".img").removeClass("hover");
            }
        });
    } else {
        // handle the mouseenter functionality
        $(".img").mouseenter(function(){
            $(this).addClass("hover");
        })
        // handle the mouseleave functionality
        .mouseleave(function(){
            $(this).removeClass("hover");
        });
    }
});


$('#yourElement').addClass('animated bounceOutLeft');



});
