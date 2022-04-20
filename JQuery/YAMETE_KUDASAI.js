$('button').click(() => {
    $('#modal').fadeIn('slow');
});

$('#modal').click(function (e) {
    if ($(e.target).closest('#modal_body').length == 0) {
        $(this).fadeOut('slow');
    }
});
$(document).keydown(function(e) {
    if (e.keyCode === 27) {
        e.stopPropagation();
        $('#modal').fadeOut('fast');
    }
});