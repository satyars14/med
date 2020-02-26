"use scrict";

jQuery(document).ready(function ($) {
    let sbtn = $('.search-nv');
    let sarea = $('.searchbar');
    sbtn.on('click', function () {
        sarea.slideToggle(500);
    });
});