$(function () {
    $('.accordion-header').click(function () {
        $(this).parent().toggleClass('collapsed');
    })
})