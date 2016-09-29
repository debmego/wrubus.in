$('.show-password').click(function () {
    var pass = $(this).closest('div').find('input');
    if (pass.attr('type') == 'password') {
        pass.attr('type', 'text');
    }
    else {
        pass.attr('type', 'password');
    }
});

var bodyHeight = (window.innerHeight - 95);
$('.body-wrap').css('min-height', bodyHeight + 'px');
$('.body-wrap').css('height', bodyHeight + 'px');
