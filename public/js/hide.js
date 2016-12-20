$(document).ready(function () {
    //Select para mostrar e esconder divs
    $('#select').on('change', function () {
        var selectValue = '#' + $(this).val();

        $('#date_legal').children('div').hide();
        $('#date_natural').children('div').show();
        if (selectValue == '#natural') {
            $('#date_legal').children('div').hide();
            $('#date_natural').children('div').show();
        }
        if (selectValue == '#legal') {
            $('#date_natural').children('div').hide();
            $('#date_legal').children('div').show();
        }

    });
});

