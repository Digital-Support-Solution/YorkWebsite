$(function () {
    header = function () {
        // header object
        var self = {
            // sub-object
            resize: {
                currentSize: 3,
                resizeElements: function () {
                    var Elements = $();
                    $("p,li,div,span,table,h1,h2,h3,h4,a,button,label,input,small,.information-bar-text").each(function () {
                        var text = $(this).contents().filter(function () {
                            return this.nodeType === Node.TEXT_NODE;
                        }).text().trim();
                        if (text.length) {
                            Elements = Elements.add($(this));
                        }
                    });
                    return Elements;
                },
                changeSize: function (amount) {
                    self.resize.currentSize = self.resize.currentSize + amount;
                    self.resize.resizeElements().each(function () {
                        var $this = $(this);
                        var currentFont = parseInt($this.css("font-size"));
                        fontsize = currentFont >= 19 ? currentFont : currentFont + 1;
                        $this.css("font-size", currentFont + amount);
                    });
                    $(window).trigger("resize");
                    if (self.resize.currentSize == 3) {
                        window.localStorage.removeItem('accessibility_resize');
                    } else {
                        window.localStorage.setItem('accessibility_resize', self.resize.currentSize);
                    }
                },
                init: function () {
                    var amount = window.localStorage.getItem('accessibility_resize');
                    if (amount && amount !== '3') {
                        setTimeout(function () {
                            self.resize.changeSize(amount - 3);
                        }, 50)
                    }
                }
            },
            fixed: {
                init: function () {
                    if ($('header.fixed').length > 0) {
                        $('header.fixed').addClass('is-fixed');
                        self.fixed.calculateSizes();
                        $(window).on('resize', function () {
                            self.fixed.calculateSizes();
                        });
                        $(window).on('scroll', function () {
                            self.fixed.calculateSizes();
                        });
                    }
                },
                calculateSizes: function () {
                    if ($(window).scrollTop() > 100) {
                        $('header.fixed').addClass('scrolled');
                    } else {
                        $('header.fixed').removeClass('scrolled');
                    }
                    setTimeout(function () {
                        $('body').css({ 'padding-top': $('header.fixed').outerHeight(true) });
                    }, 1);
                }
            },
            increase: function () {
                if (self.resize.currentSize <= 6) {
                    self.resize.changeSize(1);
                }
            },
            decrease: function () {
                if (self.resize.currentSize > 1) {
                    self.resize.changeSize(-1);
                }
            },
            shareClose: function (el) {
                if (el) {
                    $(el).closest(".share-this-page").toggle();
                }
            //    if ($(".share-this-page").size() > 0) {
            //        $(".share-this-page").toggle();
            //    }
            },
            share: function () {
                /**
                 * we have two share dialog. 
                 * Selector represents the dialog under consideration based on view-port.
                 * */
                var selector = "header .share-this-page";
                if (getWindowType() == "mobile") {
                    selector = ".share-this-page-mobile-wrapper .share-this-page"
                }
                $(selector).toggle();
                //Added from site.js file
                if ($(selector).length > 0) {
                    var validateEmail = function (email) {
                        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
                            return true;
                        }
                        return false;
                    };
                    var updateForm = function () {
                        $(`${selector} button`).removeAttr("disabled");
                        if (
                            $(`${selector} #share_recipient_name`).val() === "" ||
                            $(`${selector} #share_recipient_email`).val() === "" ||
                            !validateEmail($(`${selector} #share_recipient_email`).val()) ||
                            $(`${selector} #share_message`).val() === "" ||
                            $(`${selector} #share_sender_name`).val() === "" ||
                            $(`${selector} #share_sender_email`).val() === "" ||
                            !validateEmail($(`${selector} #share_sender_email`).val())
                        ) {
                            $(`${selector} button`).attr("disabled", "disabled");
                        }
                    };
                    $(`${selector} input[type=text], ${selector} textarea`).keyup(
                        function () {
                            updateForm();
                        }
                    );

                    $(`${selector} input[type=text], ${selector} textarea`).blur(
                        function () {
                            if (
                                !$(this).val() ||
                                $(this).val() === "" ||
                                (["share_recipient_email", "share_sender_email"].indexOf(
                                    $(this).attr("id")
                                ) > -1 &&
                                    !validateEmail($(this).val()))
                            ) {
                                $(this).addClass("error");
                            } else {
                                $(this).removeClass("error");
                            }
                            updateForm();
                        }
                    );

                    $(`${selector} input[type=checkbox]`).change(function () {
                        updateForm();
                    });
                    updateForm();
                    $(`${selector} form`).submit(function () {
                        $(`${selector} button`).attr("disabled", "disabled");
                        $.post(
                            "/umbraco/Surface/ShareThisPage/VerifyUcaptcha",
                            $(this).serialize()
                        ).then(
                            function (response) {
                                if (response.result === true) {
                                    $(`${selector}`).html(
                                        "<h4>Thank you</h4><p>Your email has been sent.</p>"
                                    );
                                } else {
                                    $(`${selector} .error`).text(
                                        "There was an error sending your email."
                                    );
                                    $(`${selector} button`).removeAttr("disabled");
                                }
                            },
                            function () {
                                $(`${selector} .error`).text(
                                    "There was an error sending your email."
                                );
                                $(`${selector} button`).removeAttr("disabled");
                            }
                        );
                        return false;
                    });
                }
            },
            navigation: {
                init: function () {
                    $('nav > ul > li').on('keydown', function (e) {
                        if (e.key == 'ArrowDown') {
                            $('header .dropdown').removeClass('open');
                            $(this).addClass('open');
                            e.preventDefault();
                        } else if (e.key == 'ArrowUp') {
                            $('header .dropdown').removeClass('open');
                            e.preventDefault();
                        }
                    });
                }
            },
            mobile: {
                init: function () {
                    $('.mobile-menu i').click(function (el) {
                        el.preventDefault();
                        $(el.currentTarget).parent().parent().toggleClass('open')
                        return false;
                    });
                    $('.desktop-menu-more, .mobile-menu-open').click(function () {
                        $('body').addClass('menu-open')
                    });
                    $('.close-menu, .mobile-menu .overlay, .close-menu').click(function () {
                        $('body').removeClass('menu-open')
                    })
                }
            },
            more: {
                init: function () {
                    self.more.calculate();
                    $(window).on('resize', function () {
                        self.more.calculate();
                    });
                },
                calculate: function () {
                    $('.desktop-menu-more').show();
                    $('header nav > ul > li').show();
                    var first = $('nav > ul > li').first().offset().top;
                    var found = false;
                    $('header nav > ul > li').each(function (id, el) {
                        if ($(el).offset().top > first || found) {
                            $(el).hide();
                            found = true;
                        }
                    });

                    if (!found) {
                        $('.desktop-menu-more').hide();
                    }
                }
            },
            search: {
                init: function () {
                    var searchTrigger = $('header a.js-header-search-trigger');
                    var searchOverlay = $('.header-search-overlay');
                    var input = searchOverlay.find('input[type=text]');
                    var overlayBg = $('.header-search-overlay-bg');
                    var clear = $('.header-search-overlay-field .search-clear');

                    if (searchTrigger.length) {
                        searchTrigger.click(function (e) {
                            e.preventDefault();

                            var menu = $('.js-hide-on-search');
                            menu.addClass('d-none');
                            //searchOverlay.css('padding-top', 130 / 2 - (35 / 2));
                            overlayBg.show();
                            searchOverlay.attr('aria-hidden', false);
                            overlayBg.show();
                            input.focus();

                            // listen to search (key up)
                            var typingTimer; //timer identifier
                            var container = $('.header-search-overlay-response-placeholder');
                            var loader = $(container).find('.header-search-overlay-loader');
                            var resultsContainer = $(container).find('.header-search-overlay-results-container');
                            var field = $('.header-search-overlay-field');
                            var doneTypingInterval = 500; //time in ms, .5 second for example
                            clear.focus(function () {
                                field.addClass('focus')
                            })
                            clear.click(function () {
                                $(input).val('');
                                container.removeClass('with-results');
                                clear.hide();
                                clearTimeout(typingTimer);
                                loader.hide();
                                resultsContainer.empty();
                                input.focus();
                            })
                            input.on('keyup', function () {
                                clearTimeout(typingTimer);
                                var enabled = $(this).data('enabled');
                                if (enabled !== true)
                                    return null;


                                loader.hide();
                                resultsContainer.empty();
                                container.removeClass('with-results');

                                if ($(this).val().length >= 4) {
                                    container.addClass('with-results');
                                    loader.show();
                                    typingTimer = setTimeout(self.search.performSearch, doneTypingInterval);
                                }
                                if ($(this).val().length > 0) {
                                    clear.css('display', 'flex');
                                } else {
                                    clear.hide();
                                }
                            })
                            input.on('keydown', function () {
                                clearTimeout(typingTimer);
                            })

                            // listen to close button
                            $('.header-search-overlay-close').click(function (e) {
                                e.preventDefault();
                                $('.header-search-overlay input[type=text]').blur();
                                menu.removeClass('d-none');
                                overlayBg.hide();
                                searchOverlay.attr('aria-hidden', true);
                                searchTrigger.focus();
                            })
                        })
                    }
                },
                replaceMatch: function (match) {
                    return '<span class="match">' + match + '</span>';
                },
                highlightSearchSummary: function (term, summary) {
                    if (!term || !summary) return summary;

                    //trim the white space out
                    term = term.trim();

                    //split the term by space
                    var terms = term.replace(' ', '|');

                    var pattern = new RegExp(terms, 'gi');

                    return summary.replace(pattern, self.search.replaceMatch);
                },
                performSearch: function () {
                    var input = $('.header-search-overlay input');
                    var rootId = $(input).data('rootid');
                    var authToken = $(input).data('authtoken');

                    var container = $(".header-search-overlay-response-placeholder");
                    var resultsContainer = $(container).find('.header-search-overlay-results-container');
                    var loader = $(".header-search-overlay-loader");

                    var term = $(input).val();
                    var searchResultsPage = $(input).data('searchresultspage');

                    var quickSearchUrl = '/api/search/GetResults?PageId=' + rootId + '&Term=' + term + '&Page=1&PageSize=5&Type=all&Offset=0&QuickSearch=true';
                    $.ajax({
                        url: quickSearchUrl,
                        async: true,
                        type: "GET",
                        dataType: "json",
                        contentType: "application/json",
                        success: function (data, textStatus, jqXHR) {
                            if (data !== null) {
                                resultsContainer.empty();
                                var total = data.TotalItemCount;
                                if (total > 0) {
                                    var ul = $("<ul/>", { addClass: "header-search-overlay-results", id: "header-search-overlay-results" });
                                    resultsContainer.append(ul);

                                    $.each(data.Results, function (i, val) {
                                        val.Summary = '<span class="header-search-overlay-results-item-summary">' + self.search.highlightSearchSummary(term, val.Summary) + '</span>';
                                        var bc = $("<div/>", { role: "heading", html: val.Breadcrumbs });
                                        var sm = $("<div/>", { html: val.Summary });
                                        var url = val.Url;
                                        var tabTarget = val.ExternalResource ? "_blank" : "_self";
                                        var a = $("<a/>", { href: url, target: tabTarget, title: val.Name, html: bc.html() + sm.html() });
                                        var li = $("<li/>", { addClass: "header-search-overlay-results-item" }).append(a);
                                        $(ul).append(li);
                                    });

                                    var resultString = "result";
                                    if (total > 1) resultString += "s";

                                    var totalResult = total + " " + resultString;
                                    if (total > 4) {
                                        totalResult = "See all " + totalResult;
                                    } else {
                                        totalResult = "See " + totalResult;
                                    }
                                    if (searchResultsPage !== "*") {
                                        var seeAllLink = `<a href="${searchResultsPage}?q=${encodeURI(term)}" class="header-search-overlay-results-total button">${totalResult}
                                                            <i class="sonic sonic_thick-arrow-right">
                                                        </a>`
                                        $(seeAllLink).insertAfter(ul);
                                    }
                                } else {
                                    var p = $("<p/>", { html: data.Message });
                                    resultsContainer.append(p);
                                }
                            }
                            $(loader).hide();
                        },
                        error: function () {
                            $(loader).hide();
                            $(container).hide();
                        }
                    });
                }
            }
        }
        if (!document.querySelector('body#splash-page')) {
            self.resize.init();
            self.navigation.init();
            self.mobile.init();
            self.search.init();
            setTimeout(function () {
                self.more.init();
            }, 20);
            setTimeout(function () {
                self.fixed.init();
            }, 2000);
        }
        return self;
    }();
})


$(function () {
    if ($('.site-notification').length > 0) {
        var siteNotification = $('.site-notification');
        var content = $('.site-notification-content:not(.for-calc)');
        var toggler = content.find(".site-notification-toggler");
        var message = content.find('.site-notification-message');
        var rteCalc = message.find('.rich-text-editor.for-calc');

        var hideText = siteNotification.data('hide-text');
        var showText = siteNotification.data('show-text');
        var isDismissable = siteNotification.data('dismiss');
        if (isDismissable !== '') {
            var heightRef = 27;
            checkRteElementsLineHeight();

            var localStorageKey = window.location.origin + "_site-wide-notification-hidden";
            toggler.click(function () {
                siteNotification.toggleClass('message-hidden');
                if (siteNotification.hasClass('message-hidden')) {
                    toggler.text(showText);
                    localStorage.setItem(localStorageKey, true);
                } else {
                    toggler.text(hideText);
                    localStorage.removeItem(localStorageKey);
                }
            });
            window.addEventListener('resize', function (event) {
                checkSiteNotificationToggler();
            }, true);
            checkSiteNotificationToggler();

            function checkRteElementsLineHeight() {
                const crte = document.querySelector('.rich-text-editor.for-calc');
                const elements = crte.querySelectorAll('*');
                let largestEls = [];
                elements.forEach(function (el) {
                    var lineHeight = parseFloat(window.getComputedStyle(el, null).getPropertyValue('line-height').replace('px', ''));
                    var fontSize = parseFloat(window.getComputedStyle(el, null).getPropertyValue('font-size').replace('px', ''));
                    if (lineHeight > heightRef) {
                        largestEls.push({
                            lineHeight,
                            el,
                            fontSize
                        })
                        el.style.fontSize = '16px';
                        el.style.lineHeight = '1.6';
                    }
                })

                if (largestEls.length > 0 && crte.clientHeight <= heightRef) {
                    Array.prototype.max = function () {
                        return Math.max.apply(null, this);
                    };
                    heightRef = Math.ceil(largestEls.map(l => l.lineHeight).max());
                    largestEls.forEach(function (largestEl) {
                        largestEl.el.style.fontSize = `${largestEl.fontSize}px`;
                        largestEl.el.style.lineHeight = `${largestEl.lineHeight}px`;
                    })
                }

            }

            function checkSiteNotificationToggler() {
                if (rteCalc.height() > heightRef) {
                    siteNotification.addClass('collapsable');
                    checkHidden(); // toggle visible, but we need to check if it is in collapsed/expanded state.
                } else {
                    siteNotification.removeClass('message-hidden');
                    siteNotification.removeClass('collapsable');
                }
            }

            function checkHidden() {
                var isHidden = localStorage.getItem(localStorageKey);
                if (isHidden) {
                    toggler.text(showText);
                    siteNotification.addClass('message-hidden');
                } else {
                    toggler.text(hideText);
                    siteNotification.removeClass('message-hidden');
                }
            }
        }
    }
});
