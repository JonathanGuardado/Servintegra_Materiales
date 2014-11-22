var myMessages = "";
myMessages = ['info', 'warning', 'errors', 'success'];
function hideAllMessages()
{
    var messagesHeights = new Array(); // this array will store height for each

    for (i = 0; i < myMessages.length; i++)
    {
        messagesHeights[i] = jQuery('.' + myMessages[i]).outerHeight();
        jQuery('.' + myMessages[i]).css('top', -messagesHeights[i]);
    }
}