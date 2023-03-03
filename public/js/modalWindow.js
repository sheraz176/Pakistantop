$(document).ready(function() {
    $(document).on('click', '.modal-link', openWindow);
    $(document).on('click', '.modal-window', closeWindow);
    $('.modal').click(function(e) {
        if (!$(e.target).hasClass('close'))
            e.stopPropagation();
    });
});

function openWindow() {
    let $this = $(this);
    let modalWrapper = $('.modal-wrapper').html('');
    $('.hover_').fadeIn(300);
    $('.modal').hide().attr('class', 'modal');
    $('.modal-window').fadeIn(300);
    if ($(document).height() > $(window).height()) {
        $('body').addClass('no-scroll');
    }
    $.ajax({
        url: $this.data('url'),
        type: 'POST',
        dataType: 'html',
        success: function(html) {
            modalWrapper.html(html);
            $('.modal').fadeIn(300).addClass($this.data('class'));
            modalWrapper.find('form').each(function() {
                if (!$(this).hasClass('no-ajax'))
                    $(this).on('submit', submitForm);
            });
            $('.close').on('click', closeWindow);
            $('.modal-link').unbind().bind('click', openWindow);
        },
        error: function() {
            $('.modal-window, .close').on('click', closeWindow);
        }
    });
}

function closeWindow() {
    $('.modal').hide();
    $('.modal-window').fadeOut(300);
    $('body').removeClass('no-scroll');
}