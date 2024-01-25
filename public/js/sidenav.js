$(function() {
    $('.sidemenu-dropdown-button').on('click', function(e) {
        var parent = $(this).parent().parent();
        if (parent.hasClass('open')) {
            parent.find('> .sidemenu-list').show().slideUp('fast', function() {
                parent.removeClass('open');
            });
        } else {
            parent.find('> .sidemenu-list').hide().slideDown('fast', function() {
                parent.addClass('open');
            });
        }
        e.preventDefault();
        return false;
    });
})