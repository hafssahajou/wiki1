function search(name) {
    try {
        $.ajax({
            type: "POST",
            url: "http://localhost/wiki1/public/index.php?action=index",
            data: {
                search: name
            },
            dataType: 'text',
            success: function (response) {
                console.log(response);
                $('#features').empty();
                response.wikis.forEach(function (wiki) {
                    var article = $('<article>');
                    article.append('<span class="icon fa-gem"></span>');
                    var contentDiv = $('<div class="content">');
                    contentDiv.append('<h3><a href="index.php?action=wiki&id=' + wiki.wiki_id + '">' + wiki.title + '</a></h3>');
                    contentDiv.append('<p>' + wiki.description + '</p>');
                    article.append(contentDiv);
                    $('#features').append(article);
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error("AJAX Error: " + textStatus, errorThrown);
            }
        });
    } catch (e) {
        console.log(e);
    }
}
