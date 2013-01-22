jQuery(document).ready(function($) {

    var $content = $('#fullhome');

    $('#pagination a').on('click', function(e){
        if(typeof writeCaptureRefresh == 'function'){
            writeCaptureRefresh();
        }
        $content.infinitescroll('retrieve');
        e.preventDefault();
    });

    $content.infinitescroll({
        nextSelector: "#pagination a",
        navSelector: "#pagination",
        itemSelector: "article",
        contentSelector: $content,
        debug: true
    });

    $content.infinitescroll('pause');

});