var Page = {
load: function(url) {
    $.ajax({
        url: url,
        success: function(data) {
            $('#appspace').html(data);
            window.history.pushState("string", "title", url);
            Page.refreshLayout();
        },
    });
},
refreshLayout: function() {
    $.ajax({
        url: '/ajax/header',
        success: function(data) {
            $('header').html(data);
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
            dataType: 'json',
            data: serial_data,
            success: function(data) {
                form.children('.messages').remove();
                form.append('<div class="messages"></div>');
                var messages = form.children('.messages');
                for(i in data)
                {
                    message = data[i];
                    if(message.text)
                    {
                        messages.append('<li class="' + message.class + '">' + message.text + '</li>');
                    }
                    if(message.redirect)
                    {
                        func = 'Page.load(' + message.redirect + ');';
                        console.log(func);
                        if(message.text)
                        {
                            setTimeout('Page.load("' + message.redirect + '");', 500);
                        }
                        else
                        {
                            Page.load(message.redirect);
                        }
                    }
                }
            }
        }); 
        return false; 
    }); 
});
