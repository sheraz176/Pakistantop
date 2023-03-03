var onloadCallback = function() {
    if ($('#captcha').length) {
        grecaptcha.render('captcha', {
            'sitekey': '6Lebq0YhAAAAANemy7KqqVwWimMkvmSPDARTM2uv'
        });
    }
};

$(document).ready(function() {

    $('.partners-carousel').owlCarousel({
        responsive: {
            0: {
                items: 1,
                autoHeight: true
            },
            600: {
                items: 3
            },
            800: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    });

    $('.menu-icon').click(function() {
        $(this).toggleClass('opened');
        $('.mobile-menu').toggleClass('opened');
    });

    $('.url-carousel').owlCarousel({
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
        }
    });

    $('form').each(function() {
        if (!$(this).hasClass('no-ajax')) {
            $(this).on('submit', submitForm);
        }
    });

    $('.references .name').on('click', function() {
        $(this).parent().toggleClass('active');
        $(this).parent().children('.text').slideToggle(200);
    });

    $('body').find('.address-map').each(function() {
        createAddressMap($(this).data('lon'), $(this).data('lat'));
    });

    $('body').find('.objects-map').each(function() {
        createObjectsMap($(this).data('lon'), $(this).data('lat'));
    });

    let input = document.getElementById("inputTag");
    let imageName = document.getElementById("imageName")

    $('.file-input').on('change', function() {
        let $this = $(this);
        let $span = $this.parent().find('span');
        $span.html($this.val() != '' ? $this.get(0).files[0].name : '');
    });

    $('.list-filter select').on('change', function() {
        $(this).closest('form').submit();
    });

    $('.map-filter select').on('change', function() {
        $('.objects-map').addClass('loading');
        $(this).closest('form').submit();
    });

});

function submitForm() {
    let form = $(this);
    let button = form.find('input[type=submit]');
    let result = form.find('.result');
    let message = Array();
    let formData = new FormData(this);
    button.addClass('loading').attr('disabled', 'disabled');
    result.html('');
    form.find('.error').removeClass('error');
    $('.objects-map').addClass('loading');
    $.ajax({
        url: form.attr('action'),
        data: formData,
        type: 'POST',
        contentType: false,
        processData: false,
        success: function(data) {
            button.removeClass('loading').removeAttr('disabled');
            if (data.reset) {
                form[0].reset();
                grecaptcha.reset(0);
                $('.file-label .file-name').html('');
            }
            if (data.updateObjects) {
                $('.json-objects').html(data.data);
                createObjectsMap($('#map').data('lon'), $('#map').data('lat'));
                $('.objects-map').removeClass('loading');
            }
            result.addClass('success').html(data.message);
        },
        error: function(data) {
            button.removeClass('loading').removeAttr('disabled');
            let errors = JSON.parse(data.responseText);
            $.each(errors.errors, function(k, v) {
                if (!in_array(v, message)) {
                    message.push(v);
                }
                show_error(k, form);
                grecaptcha.reset(0);
            });
            result.attr('class', 'result error').html(message.join('<br />'));
        }
    });

    return false;
}

function show_error(field, form) {
    field = form.find("[name='" + field + "']");
    if (field.length !== 1) return;
    field.addClass('error');
}

function in_array(a, array) {
    for (let i of array) {
        if (a === i) return true;
    }
    return false;
}