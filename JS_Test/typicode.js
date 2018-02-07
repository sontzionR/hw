/*global $*/
(function () {

    'use strict';

    var display = $("#display"),
        home = $("#home"),
        start,
        last,
        control,
        lngth;

    home.click(function () {
        display.empty();
        load();
    });
    function load() {
        start = 0;
        last = 3;
        control = 3;
        lngth = 0;
        var bloggers = $('<ul><h2>Select a blog</h2></ul>').appendTo(display).css('text-align', 'center');
        $.getJSON("https://jsonplaceholder.typicode.com/users", function (blogs) {
            $.each(blogs, function (i, blog) {
                $('<li><hr>Name:' + blog.name + '<br>' +
                    'Website: ' + blog.website + '<br>' +
                    'Company: ' + blog.company.name + '<br>' +
                    '<hr></li>')
                    .appendTo(bloggers)
                    .click(function () {
                        display.empty();
                        loadThisBlog(blog);
                    });
            });
        });
    }

    function loadThisBlog(blog) {
        let thisBlog = $('<ul><h2>' + blog.name + '</h2><hr><hr></ul>').appendTo(display);
        $.getJSON("https://jsonplaceholder.typicode.com/posts", { userId: blog.id }, function (data) {
            lngth = data.length;
            if (start > 0) {
                $('<button>').text('prev').appendTo(thisBlog).click(function () {
                    start -= control;
                    last -= control;
                    thisBlog.empty();
                    loadThisBlog(blog);
                });
            }
            if (last < lngth) {
                $('<button>').text('next').appendTo(thisBlog).click(function () {
                    start += control;
                    last += control;
                    thisBlog.empty();
                    loadThisBlog(blog);
                });
            }
            $.each(data.slice(start, last), function (i, dat) { //
                var thisData = $('<li><hr>Title: ' + dat.title + '<br>' +
                    'Body: ' + dat.body + '<br><button>show comments</button><br>' +
                    '</li><br>')//.css('background-color','yellow')
                    .appendTo(thisBlog),
                    cmmntBool = false,
                    cmmnts = $("<div></div>").appendTo(thisData),
                    bttn = thisData.find('button')
                        .click(function () {
                            var thisComments = $('<ol><h2>comments</h2></ol>').appendTo(cmmnts);
                            // if (cmmntBool===false) {
                            if (!cmmntBool) {
                                bttn.text("hide comments");
                                $.getJSON("https://jsonplaceholder.typicode.com/comments", { postId: dat.id }, function (comments) {
                                    $.each(comments, function (i, comment) {
                                        $('<li>' + comment.body + '<br></li><br>')
                                            .appendTo(thisComments);
                                        cmmntBool = true;
                                    });
                                });
                            } else {
                                cmmnts.empty();
                                bttn.text("show Comments");
                                cmmntBool = false;
                            }
                        });
            });
        });
    }
    load();
}());