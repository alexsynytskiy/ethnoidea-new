var PublicationPage = function (options) {
    var pageOptions = $.extend(true, {
        types: []
    }, options);

    var selectors = {
        newsCategory: '#news-category',
        toMainPage: '#to-main-page',
        title: '#title',
        short: '#short'
    };

    $('body').on("change", selectors.newsCategory, function (e) {
        e.preventDefault();

        var value = $(this).val();

        if(value === pageOptions.types[0][0]) {
            $(selectors.toMainPage).hide();
            $(selectors.short).hide();
        }
        else {
            $(selectors.toMainPage).show();
            $(selectors.short).show();
        }
    });
};
