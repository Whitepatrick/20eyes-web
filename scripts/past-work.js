$(function() {
        $('#past-work').click(function() {
                var $box = $('.box');
                if ($box.is(':visible')) {
                        $box.fadeOut('fast');
                }       else {
                        $box.fadeIn('fast');
                }
        });
});