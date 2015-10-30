$(function() {
    $('.paginated-form').on({
        click: function(e) {
            e.preventDefault();
            var t = $(e.target),
                form = t.parents('form'),
                group = t.parents('div').attr('data-group');

            if (t.is('.next-btn')) {
                form.find('.active').fadeOut(100, function() {
                    $(this).removeClass('active').removeAttr('style');
                });

                setTimeout(function() {
                    group++;
                    $('div[data-group=' + group + ']').addClass('active');
                    $('form textarea:not(.no-autosize)').removeAttr('style');
                }, 120);

            }

            if (t.is('.prev-btn')) {
                form.find('.active').removeClass('active');
                group--;
                $('div[data-group=' + group + ']').addClass('active');
            }
        }
    });

    $('.booking-form-open').click(function(e) {
        e.preventDefault();
        $('.booking-form').fadeIn(100);
    });

    $('.booking-form-close').click(function(e) {
        e.preventDefault();
        $('.booking-form').fadeOut(100);
    });
});