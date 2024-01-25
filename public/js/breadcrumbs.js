$(function() {
    $('.breadcrumbs .dropdown-handle').on('click', function (e) {
        if ($(this).parent("div").parent("li").hasClass('open')) {
            $(this).parent("div").parent("li").removeClass("open");
        } else {
            $('.breadcrumbs > ul > li').removeClass('open');
            $(this).parent("div").parent("li").addClass("open");
        }
        e.preventDefault();
        return false;
    });
    $(document).on("click", function(e){
        if(!$(e.target).closest('.breadcrumbs li').length){
            $('.breadcrumbs > ul > li').removeClass('open');
        }
    });
});