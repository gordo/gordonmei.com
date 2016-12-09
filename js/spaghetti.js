$('#gallery').delegate('li', 'click', function(event) {
    var showcaseEl = $('#showcase');

    event.preventDefault();

    if (showcaseEl.hasClass('expanded')) {
        // for later. for now, don't collapse prematurely.
    }
    else {
        showcaseEl.toggleClass('expanded');
    }

    // select, et cetera
    // $('#workhistory > li').removeClass('selected');
    // $(this).toggleClass('selected');

    // toggle description - relies too much on particular structure in the DOM, refactor this later.
    $('#workhistory-description > article').removeClass('selected');
    var descripDataAttrVal = $(this).attr('data-project') + '-desc';
    $('[data-project-desc="' + descripDataAttrVal + '"]').toggleClass('selected');
});

$('#xmarksthespot').on('click', function(event) {
    event.preventDefault();
    $('#showcase').removeClass('expanded');
    $('#workhistory > li').removeClass('selected');
});