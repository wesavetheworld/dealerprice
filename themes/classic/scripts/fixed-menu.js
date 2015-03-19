$(document).ready(function() {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 32) {
            $('#headerContents').css('position', 'fixed');
			$('#headerContents').css('marginTop', '-32px');
            $('#headerContents').slideDown(33);
        } else if ($(this).scrollTop() <= 30) {
            $('#headerContents').css('position', 'relative');
			$('#headerContents').css('display', 'block');
			$('#headerContents').css('marginTop', '0');
			$('#headerContents').slideDown(33);
        }
    });
});