var Haynn = {};
Haynn.Following = {};
Haynn.Following.changeButtonState = function (a, b) {
    if ($(a).hasClass("not-follow")) {
        $(a).removeClass("not-follow");
        $(a).addClass("following");
        $(a).html("<span class='follow-icon'></span>Đang&nbsp;hóng");
        $(a).attr("title", "Nhấn để bỏ hóng")
    } else {
        $(a).removeClass("following");
        $(a).addClass("not-follow");
        $(a).html("<span class='follow-icon'></span>Hóng");
        $(a).attr("title", "Nhấn để hóng")
    } if (b == true) {
        var c = $(a).attr("data-followed");
        var d = $(a).attr("id");
        $("[data-followed=" + c + "]:not('#" + d + "')").each(function () {
            if ($(this) != $(a)) Haynn.Following.changeButtonState(this, false)
        })
    }
};
Haynn.Following.init = function () {
    var g = false;
    $(document).on("click", "[id|='follow']", function (b) {
        b.preventDefault();
        var c = "follow";
        var d = $(this).attr("data-follower");
        var e = $(this).attr("data-followed");
        var f = $(this).attr("data-token");
        if ($(this).hasClass("following")) c = "unfollow";
        if (g == false) {
            $(this).find(".follow-icon").addClass("loading");
            $.ajax({
                url: baseURL + "ajax/follow.php?do=" + c + "&follower=" + d + "&followed=" + e + "&token=" + f,
                context: this,
                beforeSend: function () {
                    g = true
                },
                success: function (a) {
                    if (a == "OK") {
                        $(this).find(".follow-icon").removeClass("loading");
                        Haynn.Following.changeButtonState(this, true);
                        g = false
                    } else if (a == "Unauthenticated") {
                        g = false;
                        $(this).find(".follow-icon").removeClass("loading");
                        displayLoginIsRequiredDialog()
                    } else {
                        $(this).find(".follow-icon").removeClass("loading");
                        g = false
                    }
                }
            })
        }
    })
};
Haynn.common = {};
Haynn.common.registerVoteClick = function () {
    $(document).on("click", '.voteButton', function (a) {
        a.preventDefault();
        var b = $(this).attr("data-id");
        var c = $(this).attr("data-upvote");
        if ($(this).hasClass("voted")) {
            changeVoteButtonState($(this));
            Haynn.common.votePost(b, c, true, $(this))
        } else {
            $(this).parent().find(".voteButton").removeClass("voted");
            changeVoteButtonState($(this));
            Haynn.common.votePost(b, c, false, $(this))
        }
    });
    changeVoteButtonState = function (a) {
        if (a.hasClass("voted")) {
            a.removeClass("voted")
        } else {
            a.addClass("voted")
        }
    }
};
Haynn.common.votePost = function (b, c, d, e) {
    var f;
    $.post(baseURL + "ajax/vote.php", {
        postID: b,
        isUpVote: c,
        isUnvote: d
    }, function (a) {
        if (a == "Unauthenticated") {
            {
                displayLoginIsRequiredDialog()
            }
        } else if (a == "OK") {}
    })
};
Haynn.indexPage = {
    isLoading: false,
    page: 1,
    theme: 1,
    initPage: "index",
    initPageNumber: 1,
    hasNoMore: false,
    sort: null,
    showLoadMore: true,
    quickUploadType: null,
    players: {}
};
Haynn.indexPage.recount = function (a) {
    if (a.toString().indexOf('/hay/') > 0) $.post(baseURL + "ajax/count/?url=" + a)
};
Haynn.indexPage.getTopComment = function (a) {
    if (a.commentID !== undefined) $.post(baseURL + "ajax/count/?do=getTopComment&url=" + a.href)
};
Haynn.indexPage.layout = function () {
    var c = $("#post-container");
    c.imagesLoaded(function () {
        Haynn.indexPage.setExpand();
        c.isotope({
            itemSelector: '.pin-container',
            transformsEnabled: false,
            masonry: {
                columnWidth: 240
            },
            onLayout: function (a, b) {
                a.each(function (e) {
                    $(this).css({
                        "z-index": (a.length - e)
                    })
                })
            }
        })
    })
};
Haynn.indexPage.reLayout = function () {
    var a = $('#post-container');
    a.isotope('reLayout')
};
Haynn.indexPage.setExpand = function () {
    $(document).ready(function () {
        $(".pin-container").each(function () {
            if ($(this).height() > 1200) {
                $(this).addClass("expandable");
                $(this).find(".pic").css('height', "600px")
            }
        })
    })
};
Haynn.indexPage.scrollToClip = function (a) {
    setTimeout(function () {
        $('html,body').animate({
            scrollTop: $("#anchor" + a).offset().top - 60
        }, 500)
    }, 1000)
};
Haynn.indexPage.scrollToEntry = function (a) {
    setTimeout(function () {
        $('html,body').animate({
            scrollTop: $("#entry-" + a).offset().top - 45
        }, 500)
    }, 1000)
};
Haynn.indexPage.registerLoadMorePost = function () {
    $("#btnLoadMore").click(function () {
        Haynn.indexPage.showLoadMore = false;
        $("#btnLoadMoreContainer").css("height", "42px");
        $(this).fadeOut(200);
        if (Haynn.indexPage.initPage != "unread") Haynn.indexPage.loadMorePost(Haynn.indexPage.page);
        else Haynn.Unread.loadSinglePage(false)
    })
};
Haynn.indexPage.registerTopClick = function () {
    moveTopList = function () {
        var a = $(".head").outerHeight();
        var b = $(".sidebar").width();
        var c = $("#topContentAnchor");
        var d = $(".fixedWhenScroll");
        var e = d.height();
        var f = c.offset().top - a;
        if ($(this).scrollTop() >= f && d.css('position') != 'fixed') {
            c.css('height', e);
            d.css({
                'top': a + "px",
                'position': 'fixed',
                width: b
            });
            $("#topDay").html("Top Ngày");
            $("#topWeek").html("Top Tuần");
            $("#topMonth").html("Top Tất Cả")
        } else if ($(this).scrollTop() < f && d.css('position') != 'relative') {
            c.css('height', '0px');
            d.css({
                'top': '0px',
                'position': 'relative'
            });
            $("#topDay").html("Ngày");
            $("#topWeek").html("Tuần");
            $("#topMonth").html("Tất cả")
        }
    };
    if (Haynn.indexPage.theme == 1) {
        $(window).scroll(function () {
            moveTopList()
        })
    }
};
Haynn.indexPage.registerModToolsClick = function () {
    $(document).on('click', '.modTools', function (d) {
        d.preventDefault();
        var e = $(this).attr("data-token");
        var f = $(this).attr("data-pid");
        var g = $(this).attr("data-action");
        $.post(baseURL + 'ajax/moderation.php', {
            "do": g,
            "token": e,
            "pid": f
        }, function (a, b, c) {
            if (a == "OK") {
                $("#entry-" + f).fadeTo('250', 0.0, function () {
                    $(this).slideUp("250", function () {
                        if (Haynn.indexPage.theme == 2) {
                            $(this).css("margin-bottom", "0px").css("margin-top", "0px");
                            $(this).remove();
                            Haynn.indexPage.reLayout()
                        } else {
                            $(this).remove()
                        } if ($("[id|=entry]").length == 1) {
                            Haynn.indexPage.loadMorePost()
                        }
                    })
                })
            }
        })
    })
};
Haynn.indexPage.registerTopUsersClick = function () {
    $(".topUsers .sort a").click(function (a) {
        a.preventDefault();
        var b = $(this).attr("data-sort");
        if (b == Haynn.indexPage.sort) return;
        Haynn.indexPage.sort = b;
        $(".topUsers .sort a").removeClass('selected');
        $(this).addClass('selected');
        $(".topUsers .content").load(baseURL + "top/like/" + b + "?ajax=true")
    })
};
Haynn.indexPage.loadMorePost = function (c, d) {
    if (Haynn.indexPage.initPage != "unread") {
        if ($(window).scrollTop() + $(window).height() >= ($(document).height() - 300)) {
            Haynn.indexPage.showLoadMore = false;
            if (Haynn.indexPage.isLoading || Haynn.indexPage.hasNoMore) return;
            Haynn.indexPage.isLoading = true;
            $('#load_image').show();
            $.get(baseURL + "ajax/loadmore.php?page=" + (c + 1) + "&type=" + Haynn.indexPage.initPage + "&theme=" + Haynn.indexPage.theme, function (a) {
                if (a == "NoMorePostToShow") {
                    $("#btnLoadMoreContainer").css("height", "");
                    Haynn.indexPage.hasNoMore = true;
                    Haynn.indexPage.showLoadMore = false;
                    $('#load_image').hide();
                    $("#noMorePost").show()
                } else {
                    contentToCheck = $("<div>" + a + "</div>");
                    $(".pin-container", contentToCheck).each(function () {
                        if ($(".pin-container[data-id=" + $(this).attr("data-id") + "]").size() > 0) {
                            $(this).remove()
                        }
                    });
                    dataToInsert = $(contentToCheck.html());
                    if (Haynn.indexPage.theme == 1) {
                        $("#listEnd").before(dataToInsert);
                        $('#load_image').hide();
                        Haynn.indexPage.isLoading = false;
                        Haynn.indexPage.page++;
                        Haynn.indexPage.showLoadMore = true;
                        $("#btnLoadMoreContainer").css("height", "");
                        dataToInsert.find("[id|=likebutton]").each(function () {
                            FB.XFBML.parse($(this)[0])
                        })
                    } else {
                        var b = $('#post-container');
                        b.append(dataToInsert);
                        b.isotope('appended', dataToInsert);
                        dataToInsert.imagesLoaded(function () {
                            Haynn.indexPage.setExpand();
                            Haynn.indexPage.reLayout();
                            $('#load_image').hide();
                            Haynn.indexPage.isLoading = false;
                            Haynn.indexPage.page++;
                            Haynn.indexPage.showLoadMore = true;
                            $("#btnLoadMoreContainer").css("height", "");
                            dataToInsert.find("[id|=likebutton]").each(function () {
                                FB.XFBML.parse($(this)[0])
                            })
                        })
                    }; if (Haynn.indexPage.page - Haynn.indexPageNumber == 2) {
                        $("#btnLoadMore").show();
                        Haynn.indexPage.hasNoMore = true
                    }
                }
            })
        }
    }
};
Haynn.indexPage.fixVoteGroup = function () {
    var g = $(".head").outerHeight();
    $(".pin-container").each(function () {
        var a = $(window).scrollTop();
        var b = $(this);
        var c = $(".upperInfo", this);
        var d = c.outerHeight();
        var e = $(".userInfo", this);
        var f = $(".upperInfoHeightHolder", this);
        if ((b.offset().top - d < a + 5)) {
            if (b.attr("data-new") == "true") {
                Haynn.Unread.addReadPhoto(parseInt(b.attr("data-pid")))
            }
            if (a + e.outerHeight() < b.offset().top + b.outerHeight() - g + 5) {
                e.css({
                    position: "fixed",
                    top: g + "px"
                });
                c.css({
                    position: 'fixed',
                    top: g + "px",
                    "z-index": "10",
                    "background": "#FFFFFF",
                    "width": "398px"
                });
                f.height(d)
            } else {
                e.css({
                    position: "absolute",
                    top: b.height() - e.height() - parseFloat(e.css("padding-top")) - 3
                });
                c.css({
                    position: "absolute",
                    top: b.height() - e.height() - parseFloat(e.css("padding-top")) - 3
                })
            }
        } else {
            e.css({
                position: "relative",
                top: ""
            });
            c.css({
                position: "relative",
                top: ""
            });
            f.height(0)
        }
    })
};
Haynn.indexPage.quickUploadInit = function () {
    var b = $("#postPhotoForm");
    var c = $("#postVideoForm");
    var d = $("#postMusicForm");
    var e = $(".quickSubmitForm").find(".boxAnchor");
    var f = $("#photoTips");
    var g = $("#videoTips");
    var h = $("#post_title");
    var i = $("#photo_post_url");
    var j = $("#music_post_url");
    var k = $(".videoInfo");
    $("[id^='clickSubmit']").click(function (a) {
        a.preventDefault();
        if ($(this).hasClass('loginRequired')) {
            displayLoginIsRequiredDialog();
            return
        }
        if ($(this).hasClass("active")) {
            $(this).removeClass("active")
        } else {
            $(this).parent().find("[id^='clickSubmit']").removeClass("active");
            $(this).addClass("active")
        } if ($(this).attr("id") == "clickSubmitPhoto") {
            if (!(b).is(":visible")) {
                $("#photo_file_upload").trigger("click")
            };
            if (c.is(":visible")) {
                g.hide();
                c.hide();
                k.hide()
            }
            if (d.is(":visible")) {
                d.hide();
                k.hide()
            }
            b.fadeToggle(350, function () {
                if (Haynn.indexPage.theme == 2) {
                    Haynn.indexPage.reLayout()
                }
                setQuickUploadType()
            });
            f.fadeToggle(350);
            e.css("margin-left", "")
        }
        if ($(this).attr("id") == "clickSubmitVideo") {
            if (b.is(":visible")) {
                f.hide();
                b.hide()
            };
            if (d.is(":visible")) {
                k.hide();
                d.hide()
            };
            c.fadeToggle(350, function () {
                if (Haynn.indexPage.theme == 2) {
                    Haynn.indexPage.reLayout()
                }
                setQuickUploadType()
            });
            g.fadeToggle(350);
            i = $("#photo_post_url");
            if ($(".videoInfoThumbnail").html() != "") k.fadeToggle(350);
            e.css("margin-left", "75px")
        }
        if ($(this).attr("id") == "clickSubmitMusic") {
            if (b.is(":visible")) {
                f.hide();
                b.hide()
            };
            if (c.is(":visible")) {
                g.hide();
                c.hide();
                k.hide()
            }
            d.fadeToggle(350, function () {
                if (Haynn.indexPage.theme == 2) {
                    Haynn.indexPage.reLayout()
                }
                setQuickUploadType()
            });
            i = $("#music_post_url");
            if ($(".videoInfoThumbnail").html() != "") k.fadeToggle(350);
            e.css("margin-left", "43px")
        }
    });
    i.on("input", function () {
        value = $(this).val();
        if (value != "") {
            if (isValidYouTubeURL(value) || isValidVimeoURL(value) || isValidZingTVUrl(value)) {
                $("#videoLoadingImg").show();
                $.getJSON(baseURL + "ajax/mediainfo.php?do=getinfo&url=" + encodeURIComponent(value)).done(function (a) {
                    $(".videoInfo").show();
                    $(".videoInfoTitle").html("<p class='videoTitle'>" + a.title + "</p><p class='metadata'>Đăng bởi <span class='name'>" + a.uploader + "</span></p>");
                    $(".videoInfoThumbnail").html("<img src='" + a.thumbnail + "' alt=''/>");
                    $("#videoLoadingImg").hide();
                    if (Haynn.indexPage.theme == 2) {
                        Haynn.indexPage.reLayout()
                    }
                })
            } else {
                displayMessageDialog("#invalidVideoURL");
                return
            }
        }
    });
    j.on("input", function () {
        value = $(this).val();
        if (value != "") {
            if (isValidZingMp3URL(value)) {
                $("#videoLoadingImg").show();
                $.getJSON(baseURL + "/ajax/mediainfo.php?do=getinfo&url=" + value).done(function (a) {
                    $(".videoInfo").show();
                    $(".videoInfoTitle").html("<p class='videoTitle'>" + a.title + "</p><p class='metadata'><span class='name' style='font-weight: normal'>" + a.uploader + "</span></p>");
                    $(".videoInfoThumbnail").html("<img class='musicThumb' src='" + a.thumbnail + "' alt=''/>");
                    $("#videoLoadingImg").hide();
                    if (Haynn.indexPage.theme == 2) {
                        Haynn.indexPage.reLayout()
                    }
                })
            } else {
                displayMessageDialog("#invalidVideoURL");
                return
            }
        }
    });
    $("#btnSubmit").click(function () {
        checkAndSubmit()
    });

    function checkAndSubmit() {
        if (h.val() == "") {
            displayMessageDialog("#titleEmptyAlert");
            h.css('border-color', 'red');
            return
        } else {
            h.css('border-color', '')
        } if (h.val().length > 150) {
            displayMessageDialog("#titleTooLong");
            h.css('border-color', 'red');
            return
        }
        if (Haynn.indexPage.quickUploadType == null) {
            displayMessageDialog("#mediaIsRequired");
            return
        }
        if (Haynn.indexPage.quickUploadType == "photo") {
            if ($("#photo_file_upload").val() == "") {
                displayMessageDialog("#fileEmptyAlert");
                return
            }
            var a = $('#photo_file_upload').val().split('.').pop().toLowerCase();
            if ($.inArray(a, ['png', 'jpg', 'jpeg', 'gif']) == -1) {
                displayMessageDialog("#wrongExtAlert");
                return
            }
        }
        if (Haynn.indexPage.quickUploadType == "video") {
            if (i.val() == "") {
                displayMessageDialog("#urlEmptyAlert");
                return
            }
            if (!isValidYouTubeURL(i.val()) && !isValidVimeoURL(i.val()) && !isValidZingTVUrl(i.val())) {
                displayMessageDialog("#invalidVideoURL");
                return
            }
        }
        if (Haynn.indexPage.quickUploadType == "music") {
            if (j.val() == "") {
                displayMessageDialog("#urlEmptyAlert");
                return
            }
            if (!isValidZingMp3URL(j.val())) {
                displayMessageDialog("#invalidVideoURL");
                return
            }
        }
        $("#btnSubmit").attr("disabled", "disabled");
        $("#form-post-image").submit()
    }

    function isValidYouTubeURL(a) {
        var p = /^(?:http(?:s)?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/;
        return (a.match(p)) ? true : false
    }

    function isValidVimeoURL(a) {
        var p = /^(?:http(?:s)?:\/\/)?(www\.)?vimeo\.com\/(\w*\/)*(([a-z]{0,2}-)?\d+)/;
        return (a.match(p)) ? true : false
    }

    function isValidZingTVUrl(a) {
        var p = /^(?:http(?:s)?:\/\/)?(www\.)?tv\.zing\.vn\/video\/([A-Za-z-\d]+)(\/(\w{8}\.html))?\/(\w{8})(\.html)$/;
        return (a.match(p)) ? true : false
    }

    function isValidZingMp3URL(a) {
        var p = /^(http:\/\/)?mp3\.zing\.vn\/(bai-hat|album|playlist)\/([A-Za-z-\d]+)\/(\w{8})(\.html)$/;
        return (a.match(p)) ? true : false
    }

    function setQuickUploadType() {
        Haynn.indexPage.quickUploadType = null;
        if (b.is(":visible")) {
            $("#form-post-image").attr("action", baseURL + "submit?file=1");
            $("#photo_post_url, #music_post_url").attr("disabled", "disabled");
            $("#photo_file_upload").removeAttr("disabled");
            $("#post_type").val("Photo");
            Haynn.indexPage.quickUploadType = "photo"
        } else if (c.is(":visible")) {
            $("#form-post-image").attr("action", baseURL + "submit?t=v");
            $("#photo_file_upload, #music_post_url").attr("disabled", "disabled");
            $("#photo_post_url").removeAttr("disabled");
            $("#post_type").val("Video");
            Haynn.indexPage.quickUploadType = "video"
        } else if (d.is(":visible")) {
            $("#form-post-image").attr("action", baseURL + "submit?t=v");
            $("#photo_file_upload, #photo_post_url").attr("disabled", "disabled");
            $("#music_post_url").removeAttr("disabled");
            $("#post_type").val("Video");
            Haynn.indexPage.quickUploadType = "music"
        }
    }
};
Haynn.indexPage.init = function (a, b, c) {
    Haynn.indexPage.theme = a;
    Haynn.indexPage.initPage = b;
    Haynn.indexPage.page = c;
    Haynn.indexPageNumber = c;
    Haynn.common.registerVoteClick();
    $(document).ready(function () {
        if (Haynn.indexPage.theme == 2) {
            Haynn.indexPage.layout()
        }
        if (Haynn.indexPage.initPage == "unread") {
            Haynn.indexPage.registerLoadMorePost()
        }
        Haynn.indexPage.registerTopClick();
        Haynn.indexPage.registerModToolsClick();
        Haynn.indexPage.registerTopUsersClick();
        Haynn.indexPage.quickUploadInit();
        $(window).scroll(function () {
            Haynn.indexPage.loadMorePost(Haynn.indexPage.page, Haynn.indexPage.theme);
            if (Haynn.indexPage.theme == 1) {
                Haynn.indexPage.fixVoteGroup()
            }
        })
    });
    window.fbAsyncInit = function () {
        FB.Event.subscribe('edge.create', Haynn.indexPage.recount);
        FB.Event.subscribe('edge.remove', Haynn.indexPage.recount);
        FB.Event.subscribe('comment.remove', Haynn.indexPage.getTopComment);
        FB.Event.subscribe('comment.remove', Haynn.indexPage.recount);
        FB.Event.subscribe('comment.create', Haynn.indexPage.getTopComment);
        FB.Event.subscribe('comment.create', Haynn.indexPage.recount)
    }
};
Haynn.Facebook = {
    appId: null
};
Haynn.Facebook.init = function (c) {
    Haynn.Facebook.appId = c;
    (function (d, s, a) {
        var b, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(a)) return;
        b = d.createElement(s);
        b.id = a;
        b.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=" + c;
        fjs.parentNode.insertBefore(b, fjs)
    }(document, 'script', 'facebook-jssdk'))
};
Haynn.itemDetail = {
    itemID: null,
    displayInfoPane: true,
    likeButtonRendered: false
};
Haynn.itemDetail.init = function (c, v) {
    Haynn.itemDetail.itemID = c;
    videoType = v || "none";
    Haynn.common.registerVoteClick();
    window.fbAsyncInit = function () {
        FB.Event.subscribe('comment.create', Haynn.itemDetail.recount);
        FB.Event.subscribe('comment.create', Haynn.itemDetail.getTopComment);
        FB.Event.subscribe('comment.remove', Haynn.itemDetail.recount);
        FB.Event.subscribe('comment.remove', Haynn.itemDetail.getTopComment);
        FB.Event.subscribe('edge.create', Haynn.itemDetail.recount);
        FB.Event.subscribe('edge.remove', Haynn.itemDetail.recount)
    };
    Haynn.itemDetail.registerDeleteClick();
    Haynn.itemDetail.registerReportClick();
    Haynn.itemDetail.fixWhenScroll();
    Haynn.itemDetail.registerNavigationKeys();
    Haynn.itemDetail.displaySuccessMessage()
};
Haynn.itemDetail.fixWhenScroll = function () {
    var f = $(".contentWrap");
    var g = $(".head").outerHeight();
    var h = function () {
        var a = $(".scroller_anchor");
        var b = $(".fixedInfoPanel");
        var c = a.offset().top - g;
        var d = b.outerHeight();
        if ($(this).scrollTop() >= c + 10) {
            a.css('height', d + 'px');
            b.css({
                'top': '44px',
                'position': 'fixed'
            })
        } else if ($(this).scrollTop() < c + 10) {
            b.css({
                'position': "relative",
                "top": "0px"
            });
            a.css('height', '0px')
        }
    };
    var i = function () {
        var a = $("#fixedRecommendedListAnchor");
        var b = $(".unreadPosts");
        var c = b.height();
        var d = a.offset().top - 45;
        if ($(this).scrollTop() >= d && b.css('position') != 'fixed') {
            a.css('height', c);
            b.css({
                'top': '44px',
                'position': 'fixed'
            })
        } else if ($(this).scrollTop() < d && b.css('position') != 'relative') {
            a.css('height', '0px');
            b.css({
                'top': '0px',
                'position': 'relative'
            })
        }
    };
    var j = function () {
        var a = $(".head").height();
        var b = $("#voteGroupAnchor");
        var c = $(".voteGroup");
        var d = c.height();
        var e = b.offset().top - 111;
        if ($(this).scrollTop() >= e && c.css('position') != 'fixed') {
            b.css('height', d);
            c.css({
                'top': '110px',
                'position': 'fixed'
            })
        } else if ($(this).scrollTop() < e && c.css('position') != 'relative') {
            b.css('height', '0px');
            c.css({
                'top': '0px',
                'position': 'relative'
            })
        }
        if ($(this).scrollTop() > (f.offset().top + f.height() - $("#voteGroup").height() - 212)) {
            c.css({
                'top': f.height() - f.offset().top - 79,
                'position': 'absolute'
            })
        }
    };
    $(window).scroll(h);
    $(window).scroll(i)
};
Haynn.itemDetail.recount = function () {
    $.post(baseURL + "ajax/count/?itemID=" + Haynn.itemDetail.itemID)
};
Haynn.itemDetail.getTopComment = function () {
    $.post(baseURL + "ajax/count/?do=getTopComment&itemID=" + Haynn.itemDetail.itemID)
};
Haynn.itemDetail.displaySuccessMessage = function () {
    $(document).ready(function () {
        if (window.location.href.indexOf("?new=1") > -1) {
            $("#successfullyPosted").fadeIn(1000)
        }
        $("#closeMessage").click(function () {
            $("#successfullyPosted").animate({
                height: 0,
                opacity: 0
            }, function () {
                $(this).slideUp()
            })
        })
    })
};
Haynn.itemDetail.registerDeleteClick = function () {
    $("#btnDelete").click(function (e) {
        e.preventDefault();
        var b = $("#confirmToDelete");
        var c = b.html();
        b.dialog({
            resizable: false,
            modal: true,
            height: 120,
            buttons: {
                "Chắc chắn": function () {
                    $(this).html("<center><img src='images/hnnloading.gif' alt='' /> Đang xóa</center>");
                    $.ajax({
                        url: baseURL + "ajax/deletepost.php?pid=" + Haynn.itemDetail.itemID,
                        context: $(this),
                        success: function (a) {
                            if (a == "OK") {
                                $(this).dialog("close");
                                Haynn.itemDetail.displayDeleteOKDialog()
                            }
                            if (a == "Fail") {
                                $(this).dialog("close");
                                displayMessageDialog("#unsuccessfullyDelete")
                            }
                        }
                    })
                },
                "Nhấn nhầm thôi": function () {
                    $(this).dialog("close")
                },
            },
            show: {
                effect: "fade",
                duration: 200
            },
            beforeClose: function () {
                b.html(c)
            }
        })
    })
};
Haynn.itemDetail.registerReportClick = function () {
    $("#btnReport").click(function (e) {
        e.preventDefault();
        var d = $("#reportPost");
        d.dialog({
            resizable: false,
            modal: true,
            buttons: [{
                text: "Báo cáo",
                click: function () {
                    var b = $("input:radio[name=reason]:checked").val();
                    var c = $("input[name=reasonDetail]").val();
                    $.ajax({
                        type: 'POST',
                        url: baseURL + "ajax/report.php",
                        data: {
                            itemID: Haynn.itemDetail.itemID,
                            reason: b,
                            reasonDetail: c
                        },
                        context: $(this),
                        success: function (a) {
                            if (a == "OK") {
                                $(this).dialog("close");
                                displayMessageDialog("#successfullyReported")
                            } else {
                                $(this).dialog("close");
                                displayMessageDialog("#unsuccessfullyReported")
                            }
                        }
                    })
                }
            }, {
                text: "Bỏ qua",
                class: "cancelButton",
                click: function () {
                    $(this).dialog("close")
                }
            }],
            show: {
                effect: "fade",
                duration: 250
            },
            hide: {
                effect: "fade",
                duration: 250
            }
        })
    });
    $("input:radio[name='reason']").change(function () {
        if ($(this).attr("id") != "khac") {
            $("input:text[name='reasonDetail']").attr("disabled", "disabled")
        } else {
            $("input:text[name='reasonDetail']").removeAttr("disabled")
        }
    })
};
Haynn.itemDetail.displayDeleteOKDialog = function () {
    $("#successfullyDelete").dialog({
        resizable: false,
        modal: true,
        height: "auto",
        buttons: {
            "OK": function () {
                window.location.href = baseURL
            }
        },
        show: {
            effect: "fade",
            duration: 200
        },
        dialogClass: 'no-close'
    })
};
Haynn.itemDetail.registerNavigationKeys = function () {
    $(document).keydown(function (e) {
        var a = false;
        if (e.which == 37) {
            a = $('#btnPrev_post').attr('href')
        } else if (e.which == 39) {
            a = $('#btnNext_post').attr('href')
        }
        if (a) {
            window.location = a
        }
    })
};
Haynn.itemDetail.video = {
    postContent: "postContent",
    vmPlayer: "vmPlayer",
    ytPlayer: "ytPlayer",
    clipAnchor: "#clipAnchor"
};
Haynn.itemDetail.video.youTube = function () {
    var b = $("." + Haynn.itemDetail.video.postContent);
    var c = $("#" + Haynn.itemDetail.video.ytPlayer);
    var d = b.height();
    var e = b.width();
    var f = c.height();
    var g = c.width();
    var h = $(Haynn.itemDetail.video.clipAnchor).offset().top - 45;
    var i;
    window.onYouTubeIframeAPIReady = function () {
        i = new YT.Player(Haynn.itemDetail.video.ytPlayer, {
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        })
    };

    function onPlayerReady(a) {};
    var j = false;

    function onPlayerStateChange(a) {
        if (a.data == YT.PlayerState.PLAYING && !j) {
            Haynn.itemDetail.displayInfoPane = false;
            $("#rightCol").animate({
                'margin-top': '640px'
            }, 500, function () {
                $(".navigation").animate({
                    width: "945px",
                }, 250);
                $(".contentWrap").animate({
                    width: "945px",
                }, 250);
                c.animate({
                    width: '940px',
                    height: '530px'
                }, 250);
                i.setSize(940, 529);
                i.setPlaybackQuality('large');
                b.animate({
                    width: '1005px',
                    height: '562px',
                    "margin-left": "-25px"
                }, 250, function () {
                    $(".fixedInfoPanel").hide();
                    Haynn.itemDetail.displayInfoPane = false
                })
            })
        }
        if (a.data == YT.PlayerState.ENDED) {
            $("#voteGroup").show();
            c.animate({
                width: g,
                height: f
            }, 250);
            $(".navigation").animate({
                width: e - 50,
            }, 250);
            $(".contentWrap").animate({
                width: e - 60,
            }, 250);
            b.animate({
                width: e,
                height: d,
                "margin-left": "0"
            }, 250, function () {
                $("#rightCol").animate({
                    'margin-top': '0'
                }, 500);
                i.setSize(g, f)
            });
            Haynn.itemDetail.displayInfoPane = true
        }
    }
};
Haynn.itemDetail.video.vimeo = function () {
    var c = $("." + Haynn.itemDetail.video.postContent);
    var d = $("#" + Haynn.itemDetail.video.vmPlayer);
    var e = c.height();
    var f = c.width();
    var g = d.height();
    var h = d.width();
    var i = $(Haynn.itemDetail.video.clipAnchor).offset().top - 45;
    var j = d[0],
        player = $f(j);
    player.addEvent('ready', function () {
        player.addEvent('pause', onPause);
        player.addEvent('finish', onFinish);
        player.addEvent('playProgress', onPlayProgress);
        player.addEvent('play', onPlay)
    });

    function onPause(a) {
        d.animate({
            width: h,
            height: g
        }, 350);
        $(".navigation").animate({
            width: f - 50,
        }, 250);
        $(".contentWrap").animate({
            width: f - 60,
        }, 250);
        c.animate({
            width: f,
            height: e,
            "margin-left": "0"
        }, 350, function () {
            $("#rightCol").animate({
                'margin-top': '0'
            }, 500);
            $('html,body').animate({
                scrollTop: 0
            }, 500);
            Haynn.itemDetail.displayInfoPane = true
        })
    }

    function onFinish(a) {}

    function onPlayProgress(a, b) {}

    function onPlay(a) {
        $("#rightCol").animate({
            'margin-top': '640px'
        }, 500, function () {
            $(".navigation").animate({
                width: "945px",
            }, 250);
            $(".contentWrap").animate({
                width: "945px",
            }, 250);
            d.animate({
                width: '940px',
                height: '529px'
            }, 300);
            c.animate({
                width: '1005px',
                height: '562px',
                "margin-left": "-25px"
            }, 300, function () {
                $('html,body').animate({
                    scrollTop: i
                }, 500);
                Haynn.itemDetail.displayInfoPane = false
            })
        })
    }
};
Haynn.itemDetail.video.init = function (a) {
    if (a == "vimeo") Haynn.itemDetail.video.vimeo();
    else Haynn.itemDetail.video.youTube()
};
Haynn.settings = {};
Haynn.settings.checkAndSubmit = function () {
    var e = $("[name=fname]");
    var f = e.css("border-color");
    var g = $("[name=current-password]");
    var h = $("[name=new-password]");
    var i = $("[name=verify-password]");
    verifyName = function () {
        var a;
        var b = $("#nameError");
        if (e.val() == "") {
            e.css("border-color", "red");
            b.show();
            a = true
        } else {
            e.css("border-color", f);
            b.hide();
            a = false
        }
        return a
    };
    verifyLength = function () {
        var a = true;
        if (h.val() != "" && h.val().length < 8) {
            $("#newPasswordLength").show();
            h.css("border-color", "red");
            a = false
        } else {
            a = true
        } if (i.val() != "" && i.val().length < 8) {
            $("#verifyPasswordLength").show();
            i.css("border-color", "red");
            a = false
        } else {
            a = true
        }
        return a
    };
    verifyEmptyChange = function (c) {
        var d = true;
        $.each([h, i], function () {
            var a = $(this).attr("disabled");
            var b = false;
            if (a == "disabled") b = true;
            else b = false; if (b == false) {
                if ($(this).val() == "") {
                    $(this).css("border-color", "red");
                    d = false
                } else {
                    d = true
                }
            }
        });
        return d
    };
    verifyEmptyCreate = function (a) {
        var b = true;
        if ((h.val() != "" && i.val() == "")) {
            i.css("border-color", "red");
            b = false
        } else {
            b = true
        } if ((h.val() == "" && i.val() != "")) {
            h.css("border-color", "red");
            b = false
        } else {
            b = true
        }
        return b
    };
    verifyMatchPassword = function () {
        var a = true;
        var b = $("#blankCurrentPassword");
        if (h.val() != "" && i.val() != "") {
            if (h.val() != i.val()) {
                $("#passwordNotMatch").show();
                i.css("border-color", "red");
                a = false
            } else {
                a = true
            }
        }
        return a
    };
    $("#settings_submit").click(function () {
        $("#nameError, #blankCurrentPassword, #newPasswordLength, #passwordNotMatch, #verifyPasswordLength").hide();
        $("[name=new-password], [name=current-password], [name=verify-password]").css("border-color", f);
        if ($("[name=createPassword]").length) {
            if (verifyEmptyCreate()) {
                if (verifyLength()) {
                    if (verifyMatchPassword())($("#form-settings").submit())
                }
            }
        }
        if ($("[name=changePassword]").length) {
            if (verifyEmptyChange()) {
                if (verifyLength()) {
                    if (verifyMatchPassword())($("#form-settings").submit())
                }
            }
        }
    })
};
Haynn.settings.uiSettingInit = function () {
    var i = $("#btnSaveSetting");
    $("[id^='settingToggle']").click(function () {
        var a = $(this).attr("id");
        if ($(this).hasClass('off')) {
            $(this).removeClass('off');
            if (a == "settingTogglePhoto") $("input[name='enablePhoto']").attr("value", "1");
            if (a == "settingToggleMusic") $("input[name='enableMusic']").attr("value", "1");
            if (a == "settingToggleClip") $("input[name='enableClip']").attr("value", "1")
        } else {
            $(this).addClass('off');
            if (a == "settingTogglePhoto") $("input[name='enablePhoto']").attr("value", "0");
            if (a == "settingToggleMusic") $("input[name='enableMusic']").attr("value", "0");
            if (a == "settingToggleClip") $("input[name='enableClip']").attr("value", "0")
        };
        i.html("LƯU")
    });
    $("[id^='themeSettingToggle']").click(function () {
        $(this).find(".switch").toggleClass('off');
        if ($("#1ColThemeSwitch").hasClass('off')) $("input[name='themeStyle']").attr("value", "2");
        if ($("#2ColThemeSwitch").hasClass('off')) $("input[name='themeStyle']").attr("value", "1");
        i.html("LƯU")
    });
    $("[id^='colorSettingToggle']").click(function () {
        $(this).find(".switch").toggleClass('off');
        if ($("#blueThemeSwitch").hasClass('off')) {
            $("input[name='colorStyle']").attr("value", "black")
        }
        if ($("#blackThemeSwitch").hasClass('off')) {
            $("input[name='colorStyle']").attr("value", "blue")
        }
        i.html("LƯU")
    });
    i.click(function () {
        var d = $("input[name='enablePhoto']").attr("value");
        var e = $("input[name='enableClip']").attr("value");
        var f = $("input[name='enableMusic']").attr("value");
        var g = $("input[name='themeStyle']").attr("value");
        var h = $("input[name='colorStyle']").attr("value");
        $.ajax({
            url: baseURL + 'ajax/misc.php?do=savesetting',
            type: 'POST',
            dataType: 'default',
            beforeSend: function () {
                i.html("Loading...")
            },
            data: {
                "enablePhoto": d,
                "enableClip": e,
                "enableMusic": f,
                "theme": g,
                "color": h
            },
            complete: function (a, b, c) {
                if (a == "OK") alert("abc");
                i.html("ĐÃ LƯU")
            }
        })
    });
    $("#resetSetting").click(function (a) {
        a.preventDefault();
        $("[id^='settingToggle']").removeClass('off');
        $("[name='enablePhoto'], [name='enableMusic'], [name='enableClip'], [name='themeStyle']").attr("value", "1");
        $("#1ColThemeSwitch").removeClass('off');
        $("#2ColThemeSwitch").addClass('off');
        $("#blueThemeSwitch").removeClass('off');
        $("#blackThemeSwitch").addClass('off');
        i.html("LƯU")
    })
};
Haynn.settings.toggle = function () {
    var a = $("[name=fname]").css("border-color");
    $("[name=current-password]").keyup(function () {
        if ($(this).val() == "") {
            $("[name=new-password]").attr("disabled", "disabled").val("").css("border-color", a);
            $("[name=verify-password]").attr("disabled", "disabled").val("").css("border-color", a);
            $("#passwordNotMatch").hide()
        } else {
            $("[name=new-password]").removeAttr("disabled");
            $("[name=verify-password]").removeAttr("disabled")
        }
    })
};
Haynn.settings.init = function () {
    Haynn.settings.checkAndSubmit();
    Haynn.settings.toggle();
    Haynn.settings.uiSettingInit()
};
Haynn.userProfile = {};
Haynn.userProfile.commentNotification = function (a, b, c) {
    $.ajax({
        url: baseURL + 'ajax/profile.php',
        type: 'POST',
        data: {
            "do": 'comment',
            "profileID": b,
            "userID": a,
            "response": c
        }
    })
};
Haynn.userProfile.init = function (a, b) {
    profileID = a;
    userID = b;
    window.fbAsyncInit = function () {
        FB.Event.subscribe('comment.create', function (a) {
            Haynn.userProfile.commentNotification(userID, profileID, a)
        })
    }
};
Haynn.Unread = {
    justRead: {},
    submitted: {},
    isLoading: false,
    hasNoMore: false,
    page: 0,
    initPage: "unread",
    shouldTrack: false,
    showLoadMore: true,
    theme: 1
};
Haynn.LocalStorage = {
    Keys: {
        ReadPhotos: "ReadPhotos"
    }
};
Haynn.LocalStorage.isSupported = function () {
    try {
        localStorage.setItem("isSupported", true);
        localStorage.removeItem("isSupported");
        return true
    } catch (e) {
        return false
    }
};
Haynn.Unread.addReadPhoto = function (a) {
    if (!Haynn.Unread.shouldTrack) return;
    if (!Haynn.Unread.justRead[a]) {
        Haynn.Unread.justRead[a] = true
    }
};
Haynn.Unread.getJustReadPhotoIds = function () {
    var a = "";
    for (var b in Haynn.Unread.justRead) {
        if (a == "") a += b;
        else a += "," + b
    }
    return a
};
Haynn.Unread.submit = function (a) {
    var b = [];
    var c = "";
    for (var d in Haynn.Unread.justRead) {
        if (!Haynn.Unread.submitted[d]) {
            Haynn.Unread.submitted[d] = true;
            b.push(d);
            if (c == "") c += d;
            else c += "," + d
        }
    }
    if (c == "") return;
    $.ajax({
        url: baseURL + "ajax/misc.php?do=markread",
        dataType: "html",
        type: "POST",
        async: a,
        data: {
            postIDs: c
        },
        success: function () {},
        error: function () {
            for (var i in b) delete Haynn.Unread.submitted[i]
        },
        complete: function () {}
    })
};
Haynn.Unread.startTracking = function () {
    $(document).ready(function () {
        Haynn.Unread.shouldTrack = true;
        setInterval(function () {
            Haynn.Unread.submit(true)
        }, 30000);
        $(window).unload(function () {
            Haynn.Unread.submit(false)
        })
    })
};
Haynn.Unread.init = function () {
    $(document).ready(function () {
        Haynn.Unread.startTracking();
        Haynn.Unread.loadSinglePage(true);
        $(window).scroll(function () {
            Haynn.Unread.loadMore()
        })
    })
};
Haynn.Unread.loadSinglePage = function (e) {
    Haynn.Unread.showLoadMore = false;
    if (Haynn.Unread.isLoading || Haynn.Unread.hasNoMore) return;
    Haynn.Unread.isLoading = true;
    $('#load_image').show();
    $.post(baseURL + "ajax/unread.php", {
        excludePhotoIds: Haynn.Unread.getJustReadPhotoIds(),
        isFirstLoad: e
    }, function (a) {
        if (a == "NoMoreUnread") {
            $("#btnLoadMoreContainer").css("height", "");
            Haynn.Unread.hasNoMore = true;
            Haynn.Unread.showLoadMore = false;
            $('#load_image').hide();
            $("#noMorePost").show()
        } else {
            var b = $("<div>" + a + "</div>");
            $(".pin-container", b).each(function () {
                if ($(".pin-container[data-id=" + $(this).attr("data-id") + "]").size() > 0) {
                    $(this).remove()
                }
            });
            var c = $(b.html());
            if (Haynn.indexPage.theme == 1) {
                $("#listEnd").before(c);
                $('#load_image').hide();
                Haynn.Unread.isLoading = false;
                Haynn.Unread.page++;
                Haynn.Unread.showLoadMore = true;
                $("#btnLoadMoreContainer").css("height", "");
                c.find("[id|=likebutton]").each(function () {
                    FB.XFBML.parse($(this)[0])
                })
            } else {
                var d = $('#post-container');
                d.append(c);
                d.isotope('appended', c);
                c.imagesLoaded(function () {
                    Haynn.indexPage.setExpand();
                    Haynn.indexPage.reLayout();
                    $('#load_image').hide();
                    Haynn.Unread.isLoading = false;
                    Haynn.Unread.page++;
                    Haynn.Unread.showLoadMore = true;
                    $("#btnLoadMoreContainer").css("height", "");
                    c.find("[id|=likebutton]").each(function () {
                        FB.XFBML.parse($(this)[0])
                    })
                })
            }
        }
    })
};
Haynn.Unread.loadMore = function () {
    if ($(window).scrollTop() + $(window).height() >= ($(document).height() - 400)) {
        if ((Haynn.Unread.page % 4) === 0) {
            if (Haynn.Unread.showLoadMore === true) {
                $("#btnLoadMore").show();
                Haynn.Unread.showLoadMore = false
            }
        } else {
            Haynn.Unread.loadSinglePage(false)
        }
    }
};
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var players = {};
$(document).ready(function () {
    Haynn.Following.init()
});

function displayMessageDialog(a) {
    $(a).dialog({
        show: {
            effect: 'fade',
            duration: 250
        },
        hide: {
            effect: 'fade',
            duration: 250
        },
        resizeable: false,
        modal: true,
        height: 140,
        buttons: {
            "OK": function () {
                $(this).dialog("close")
            },
        }
    })
};

function displayLoginIsRequiredDialog(b) {
    var c = $("#loginIsRequired");
    c.dialog({
        resizable: false,
        modal: true,
        height: 200,
        buttons: [{
            text: "Đăng nhập",
            click: function () {
                if (typeof b === "undefined") {
                    var a = document.URL;
                    window.location.href = baseURL + "login?return=/" + a.replace(baseURL, "")
                } else {
                    a = b;
                    window.location.href = baseURL + "login?return=/" + a
                }
            }
        }, {
            text: "Bỏ qua",
            class: "cancelButton",
            click: function () {
                $(this).dialog("close");
                changeVoteButtonState(btn)
            }
        }],
        show: {
            effect: "fade",
            duration: 200
        },
        hide: {
            effect: "fade",
            duration: 200
        }
    })
}