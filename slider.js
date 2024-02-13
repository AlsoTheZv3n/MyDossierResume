$(document).ready(function() {
    console.log("Document is ready!");

    $('#image-slider img:gt(0)').hide();

    setInterval(function() {
        console.log("Interval function is running!");
        $('#image-slider img:first-child').fadeOut().next('img').fadeIn().end().appendTo('#image-slider');
    }, 3000);
});

