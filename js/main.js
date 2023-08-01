(function($) {

    "use strict";

    var fullHeight = function() {

        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function() {
            $('.js-fullheight').css('height', $(window).height());
        });

    };
    fullHeight();

    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
    });

})(jQuery);

function afficherEmployés() {
    document.getElementById('A').style.display = 'block';
    document.getElementById('B').style.display = 'block';
    document.getElementById('C').style.display = 'none';
    document.getElementById('D').style.display = 'none';
    document.getElementById('E').style.display = 'none';
    document.getElementById('F').style.display = 'none';
    document.getElementById('G').style.display = 'none';


}

function afficherGestion() {
    document.getElementById('A').style.display = 'none';
    document.getElementById('B').style.display = 'none';
    document.getElementById('C').style.display = 'block';
    document.getElementById('D').style.display = 'block';
    document.getElementById('E').style.display = 'none';
    document.getElementById('F').style.display = 'none';
    document.getElementById('G').style.display = 'none';

}

function afficherRetards() {
    document.getElementById('A').style.display = 'none';
    document.getElementById('B').style.display = 'none';
    document.getElementById('C').style.display = 'none';
    document.getElementById('D').style.display = 'none';
    document.getElementById('E').style.display = 'block';
    document.getElementById('F').style.display = 'none';
    document.getElementById('G').style.display = 'none';


}

function afficherAbscences() {
    document.getElementById('A').style.display = 'none';
    document.getElementById('B').style.display = 'none';
    document.getElementById('C').style.display = 'none';
    document.getElementById('D').style.display = 'none';
    document.getElementById('E').style.display = 'none';
    document.getElementById('F').style.display = 'block';
    document.getElementById('G').style.display = 'none';
}

function afficherCongés() {
    document.getElementById('A').style.display = 'none';
    document.getElementById('B').style.display = 'none';
    document.getElementById('C').style.display = 'none';
    document.getElementById('D').style.display = 'none';
    document.getElementById('E').style.display = 'none';
    document.getElementById('F').style.display = 'none';
    document.getElementById('G').style.display = 'block';


}