$(document).ready(function() {
    $('#launcher a').click(function(event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            success: function(data) {
                $('#appspace').html(data);
            }
        });
        return false;
    });
});
