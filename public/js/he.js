var HeApp= HeApp || {};
HeApp.UI = {
    reloadPage: function(target) {
        console.log(target);
        if (typeof target == 'undefined') {
            target = '_blank';
        }

        if (target == '_blank') {
            window.location.reload(true);
        } else if (target == '_opener') {
            window.opener.location.reload(true);
            window.close();
        } else if (target == '_parent') {
            parent.location.reload(true);
        }
    },
    fitModalWindow: function() {
        var m_height = $('.modal-wrapper').height();
        var iframe = window.parent.$('.embed-responsive-item');

        //console.log(m_height);
        if (iframe.length) {
            iframe.height(m_height+30);
            // iframe.animate({
            //     height: m_height
            //   }, "fast", "swing");
            //$(window).trigger('resize');
        }
    },
    checkScrollBar: function() {
        var hContent = $(document).height(); // get the height of your content
        var hWindow = $(window).height();  // get the height of the visitor's browser window

        // if the height of your content is bigger than the height of the
        // browser window, we have a scroll bar
        if(hContent>hWindow) {
            return true;
        }

        return false;
    }
};
