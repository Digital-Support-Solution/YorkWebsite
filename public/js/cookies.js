
function isAndroidStockBrowser() {
    var rxaosp = window.navigator.userAgent.match(
        /Android.*AppleWebKit\/([\d‌​.]+)/
    );
    return (isaosp = rxaosp && rxaosp[1] < 537);
}


function deleteCookie(name) {
    setCookie(name, "", -1);
}

function setCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        var expires = "; expires=" + date.toGMTString();
    } else expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}

/**
 * Function called in document ready event tocheck the get the stored cookies
 */
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0)
            return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function setBackToTopPosition() {
    var $cc = $(".cookie-consent").not(".accepted");
    var $btt = $('#back-to-top');
    if ($cc.length) {
        var top = $cc.outerHeight();
        $btt.css("bottom", (top + 20) + "px");
    } else {
        var bttStyle = $btt.attr("style") || "";
        var hasDisplay = bttStyle != null;
        var isVisible = -1 != bttStyle.indexOf("display");
        var styleTag = isVisible ? "display: block" : "";
        $btt.attr("style", styleTag);
        $(window).trigger("scroll");
    }
}

$(function () {
    $('.mini-feature-cookie').click(function () {
        var pageId = $(this).attr('page-id').split('_')[1];

        var daysToExpire = 1;
        var date = new Date();

        date.setTime(date.getTime()+(daysToExpire*24*60*60*1000));
        document.cookie = "SplashLocation" + "=" +pageId+"; expires=" + date.toGMTString();
    });
});

$(document).ready(function () {
    //Check if android stock browser reject all cookie
    if (isAndroidStockBrowser()) {
        $.reject({
            reject: { all: true, closeCookie: true },
        });
    } else {
        $.reject({
            closeCookie: true,
        });
    }
    //on click of reject cookie
    $("#runReject").click(function () {
        $.reject({
            reject: { all: true },
        });
        return false;
    });

    //(Was within doc ready func)
    $("#dismissCookies").click(function () {
        setCookie("dismiss-cookies", "1", 1);
        $(".cookie-consent").hide();
    });
    if (getCookie("dismiss-cookies") === "1") {
        $(".cookie-consent").hide();
    } else {
        $(".cookie-consent").show();
    }

    /*
     * Following function calls an API on the "Accept" button click
     * which will save the cookie once response is true
     */
    $(".cookie-consent .cookie-consent-actions button:not(#dismissCookies)").click(function (e) {
        var container = $(".cookie-consent");
        container.addClass("accepted");
        if (e.target) {
            if (e.target.id == "acknowledgeCookies") {
                acknowledge = true;
                duration = $("#acknowledgeCookies").attr("duration");
            } else {
                acknowledge = false;
                duration = $("#acceptCookies").attr("duration");
            }
            setTimeout(setBackToTopPosition, 1);
            $.ajax({
                url: "/api/cookie/Accept",
                async: true,
                type: "POST",
                dataType: "json",
                contentType: "application/json",
                data:
                    '{"acknowledge":"' +
                    acknowledge +
                    '", "duration":"' +
                    duration +
                    '"}',
            });
        }
    });
});

deleteCookie("dcjq-accordion");
