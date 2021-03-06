var cookieDate = new Date().getMonth() +6;
$(document).ready(function()
{
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
        show: false,
        hide: false,
        position: {
            my: "left+25 top",
            at: "left+25 top",
            using: function (position, feedback)
            {
                $( this ).css( position );
                $('<div>').css('margin-left', '80px');
                $(this).find('div').css('height', '24px');
            }
        }
    });

    $('.new_breadcrumbs').each(function()
    {
        var breadcrumbsLength   = $('.new_breadcrumbs').length;
        var elements            = 0;

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
    
    var stat = $('#wrapfooter .stat_block div').text();
    if (stat === '') {
        $('#wrapfooter .stat_block').remove();
    }

    var postRow = $('td img[src="./styles/jsma/imageset/forum_unread.gif"]').parent().parent();
    postRow.find('.forumlink').css('color', '#a4634d');

    postRow = $('td img[src="./styles/jsma/imageset/topic_unread_mine.gif"]').parent().parent();
    postRow.find('.topictitle').css('color', '#a4634d');

    postRow = $('td img[src="./styles/jsma/imageset/topic_read_locked.gif"]').parent().parent();
    changeLockedColor(postRow);

    postRow = $('td img[src="./styles/jsma/imageset/topic_read_locked_mine.gif"]').parent().parent();
    changeLockedColor(postRow);

    $('#toolbar_block .responsive').click(function()
    {
        $('#toolbar_block ul').toggle();
    });

    $('#show_chat_block').click(function()
    {
        $('.forabg').toggle();
    });

    var footerHeight    = $('#wrapfooter').height();
    var footerPosition  = $('#wrapfooter').position();
    var windowHeight    = $(window).height();

    $(window).resize(function() {
        footerHeight    = $('#wrapfooter').height();
        windowHeight    = $(window).height();
        footerPosition  = $('#wrapfooter').position();
        setFooterPosition(footerHeight, footerPosition, windowHeight);
    });
    setFooterPosition(footerHeight, footerPosition, windowHeight);

    $('.topictitle').each(function ()
    {
        var string = $(this).text();
        if (string === 'Regulamin Grupy Wataha') {
            $(this).addClass('regulamin_wataha');
        }
    });

    $('#submit').on('click', function() {
        let testVal = $('#test').data('test');
        $('#confirm_id').val(testVal);

    });
});
function setFooterPosition(footerHeight, footerPosition, windowHeight)
{
    var roundedFooterPosition   = Math.floor(footerPosition.top);
    var check                   = footerHeight + roundedFooterPosition;

    if (check < windowHeight) {
        var newPosition = windowHeight - footerHeight;
        console.log(newPosition);
        $('#wrapfooter').offset({top: newPosition -1});
    }
}
function changeLockedColor(lockedBlock)
{
    lockedBlock.find('.topictitle') .css('color', '#696B6C');
    lockedBlock.find('.gensmall')   .css('color', '#696B6C');
    lockedBlock.find('.gensmall a') .css('color', '#696B6C');
}