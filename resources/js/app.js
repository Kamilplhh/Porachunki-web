import './bootstrap';
import "@fortawesome/fontawesome-free/css/all.css";
import $ from 'jquery';
window.$ = $;

$(".fa-brands").on("mouseenter", function () {
    $(this).toggleClass('fa-shake');
}
).on("mouseleave", function () {
    $(this).toggleClass('fa-shake');
})

$(window).on("scroll", function () {
    if (window.scrollY >= 100) {
        $('.navi').addClass('dark');
    } else {
        $('.navi').removeClass('dark');
    }
})

$( document ).ready(function() {
    $('.container').addClass('transition');
});

$('.smallS').on('click', function() {
    $('.navi-mobile').toggleClass('show');
    $('.block').toggleClass('fix');
})