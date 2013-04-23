var cookieDate = new Date().getMonth() +6;
$(document).ready(function()
{
    calculateDimensions();
    $(window).resize(function() {
        calculateDimensions();
    });
    function calculateDimensions ()
    {
        tollbarWidth    = $('#toolbar_block').width();
        mainWidth       = $(window).width();
        mainHeight      = $(window).height();
        width           = mainWidth -tollbarWidth -20;
        $('#wrapcentre')        .css('width', width + 'px');
        $('#main_content_block').css('min-height', mainHeight + 'px');
        $('#toolbar_block')     .css('min-height', mainHeight + 'px');
    }

    if (getCookie('user_bar') == 'hide') {
        $('#user_bar').hide();
        $('#show_user_bar').show();
        setCookie('user_bar', 'hide', cookieDate);
    } else {
        setCookie('user_bar', 'show', cookieDate);
    }
    $('#colapse_user_bar').click(function()
    {
        $('#user_bar').slideUp();
        $('#show_user_bar').slideDown();
        setCookie('user_bar', 'hide', cookieDate);
    });
    $('#show_user_bar').click(function()
    {
        $('#user_bar').slideDown();
        $('#show_user_bar').slideUp();
        setCookie('user_bar', 'show', cookieDate);
    });

    function setCookie(name, value, expire)
    {
        document.cookie = name + "=" + escape(value) + ((expire === null)?"" : ("; expires=" + expire));
    }
    function getCookie(name)
    {
        if (document.cookie != "") {
            var toCookie=document.cookie.split("; ");
            for (i=0; i < toCookie.length; i++) {
                var cookieName    = toCookie[i].split("=")[0];
                var cookieValue   = toCookie[i].split("=")[1];
                if (cookieName == name) {
                    return unescape(cookieValue);
                }
            }
        }
    }
    $('#toolbar_block').tooltip({
        position: {
            my: "left+40 center",
            at: "left+40 center",
            using: function (position, feedback)
            {
                $( this ).css( position );
                $( "<div>").css('margin-left', '80px');
            }
        }
    });

    $('.new_breadcrumbs').each(function()
    {
        breadcrumbsLength = $('.new_breadcrumbs').length;
        elements = 0;
        $(this).find('a').each(function(){
            if (elements) {
                $(this).css('margin-left', '-22px');
                $(this).css('padding-left', '35px');
            }
            $(this).css('z-index', breadcrumbsLength);
            breadcrumbsLength--;
            elements++;
        });
        $('.new_breadcrumbs a:last-child i').remove();
        $('.new_breadcrumbs a:last-child .arrow').remove();
    });
    
    stat = $('#wrapfooter .stat_block div').text();
    if (stat === '') {
        $('#wrapfooter .stat_block').remove();
    }
});