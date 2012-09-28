Lamantiini = { };

Lamantiini.titleSeparator = ' - ';

Lamantiini.navi = null;

Lamantiini.cache = { };


/**
 * I stole and shamelessly ripped this from Sakari. Thanks, Sakari! Goto http://sakarituominen.com now.
 *
 */
Lamantiini.smallBalls =
{

    gotBalls: 333,

    init: function($canvasElement) {

        try {

                var canvasElement = $canvasElement.get(0);

                var
                    width = canvasElement.clientWidth,
                    height = canvasElement.clientHeight,
                    canvas = canvasElement.getContext('2d'),
                    x = Math.round(width / 2), // center x
                    y = Math.round(height / 2), // center y
                    d = Math.round(Math.sqrt(Math.pow(x, 2) + Math.pow(y, 2)));

                canvasElement.setAttribute('width', width);
                canvasElement.setAttribute('height', height);

                // Draw lotsof em manatee balls!
                for (var i = 0; i < this.gotBalls; i++) {
                    canvas.beginPath();
                    canvas.arc(Math.round(width * Math.random()), Math.round(height * Math.random()), Math.round(50 * Math.random() + 20), 0, Math.PI * 2, true);
                    canvas.closePath();

                    var tussi = 125;
                    var tussi2 = 125;

                    var r = Math.round(tussi * Math.random() + tussi2);
                    var g = Math.round(tussi * Math.random() + tussi2);
                    var b = Math.round(tussi * Math.random() + tussi2);

                    // canvas.fillStyle = 'rgba(255, 224, 240, .55)';

                    canvas.fillStyle = 'rgba(' + r + ', ' + g +', ' + b + ', .55)';
                    canvas.fill();
                }

            }
            catch(e) {
                // canvas multifail!
            }

    }

};

$(document).ready(function() {

    Lamantiini.smallBalls.init($('#luss'));


    $('#content-container > h2 + div').hide();

    $('#content-container > h2 + div.active').show();

    $('#content-container > h2').click(function() {
        $(this).toggleClass('active').next('div').slideToggle();
    })



});

