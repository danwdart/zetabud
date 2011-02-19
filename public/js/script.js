var Page = {
load: function(url) {
    $.ajax({
        url: url,
        success: function(data) {
            $('#appspace').html(data);
        }
    });
}
};

$(document).ready(function() {
    $('a').click(function(event) {
        event.preventDefault();
        Page.load($(this).attr('href'));
        return false;
    });

    $('form input[type=submit]').click(function(event) {
        event.preventDefault();
        var form = $(this).parents('form');
        var serial_data = form.serialize() + '&' + $(this).attr('name') + '=' + $(this).attr('value');
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: serial_data,
            success: function(data) {
                form.children('.messages').remove();
                form.append('<div class="messages">' + data + '</div>');
            }
        }); 
        return false; 
    }); 
});
