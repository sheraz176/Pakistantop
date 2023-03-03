var myMap;

function createObjectsMap(x, y) {
    if (typeof myMap != 'undefined') {
        $('.objects-map').html('');
        myMap = null;
    }
    ymaps.ready(function() {
        var myPlacemark;
        var lon = x;
        var lat = y;
        var zoom = 12;
        var objects = $('.json-objects').html();
        objects = JSON.parse(objects);
        myMap = new ymaps.Map('map', {
            center: [lon, lat],
            zoom: zoom,
            controls: ['fullscreenControl']
        });
        myMap.controls.add('zoomControl');

        myCollection = new ymaps.GeoObjectCollection();
        $.each(objects, function(k, object) {
            myCollection.add(createIconPlacemark(object.coords, object.name, object.icon_2, object.confession, object.address, object.url, object.more));
        });
        myMap.geoObjects.add(myCollection);
    });
}

function createAddressMap(x, y) {
    if (typeof myMap != 'undefined') {
        $('.map').html('');
        myMap = null;
    }
    ymaps.ready(function() {
        var myPlacemark;
        var lon = x;
        var lat = y;
        var zoom = $('#map').data('zoom') > 0 ? $('#map').data('zoom') : 17;
        var desc = $('#map').data('desc')
        var img = $('#map').data('img');
        var editable = $('#map').data('editable');
        var confession = $('#map').data('confession');
        var address = $('#map').data('address');
        var url = $('#map').data('url');
        var more = $('#map').data('more');

        myMap = new ymaps.Map('map', {
            center: [lon, lat],
            zoom: zoom,
            controls: ['fullscreenControl']
        });
        myMap.controls.add('zoomControl');

        if (editable == 1) {
            myMap.events.add('click', function(e) {
                var coords = e.get('coords');

                if (myPlacemark) {
                    myPlacemark.geometry.setCoordinates(coords);
                } else {
                    myPlacemark = createPlacemark(coords, editable);
                    myMap.geoObjects.add(myPlacemark);
                }
                $('input[name=coords]').val(coords);
            });
        } else {
            myPlacemark = createIconPlacemark([lon, lat], desc, img, confession, address, url, more);
            myMap.geoObjects.add(myPlacemark);
        }
    });
}

function createPlacemark(coords, editable) {
    return new ymaps.Placemark(coords, {}, {
        preset: 'islands#greenDotIconWithCaption',
        draggable: editable == 1 ? true : false
    });
}

function createIconPlacemark(coords, desc, img, confession, address, url, more) {
    let html = '<b>' + desc + '</b>';
    if (typeof confession != 'undefined' && confession != null && confession != '') {
        html += '<p style="margin: 5px 0;"><img style="width: 20px; height: 20px; vertical-align: top; margin-right: 5px;" src="/upload/images/' + img + '">' + confession + '</p>';
    }
    html += '<p style="margin-bottom: 5px;">' + address + '</p>';
    if (typeof url != 'undefined') {
        html += '<p><a href="' + url + '">' + more + '</a></p>';
    }
    return new ymaps.Placemark(coords, {
        hintContent: desc,
        balloonContent: html
    }, {
        iconLayout: 'default#image',
        iconImageHref: '/upload/images/' + img,
        iconImageSize: [30, 30],
        iconImageOffset: [-15, -15]
    })
}