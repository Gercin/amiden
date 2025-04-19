function getVHeight() {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    window.addEventListener('resize', () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    })
}

function phoneMasked() {
    var listCountries = $.masksSort($.masksLoad("/local/templates/main/js/phone-codes.json"), ['#'], /[0-9]|#/, "mask");
    var maskOpts = {
        inputmask: {
            definitions: {
                '#': {
                    validator: "[0-9]",
                    cardinality: 1
                }
            },
            showMaskOnHover: false,
            autoUnmask: true,
            clearMaskOnLostFocus: true
        },
        match: /[0-9]/,
        replace: '#',
        listKey: "mask"
    };
    var maskChangeWorld = function (maskObj, determined) {
        if (determined) {
            var hint = maskObj.name_ru;
            if (maskObj.desc_ru && maskObj.desc_ru != "") {
                hint += " (" + maskObj.desc_ru + ")";
            }
        }
    }
    $(".phone-masked").each(function () {
        $(this).inputmasks($.extend(true, {}, maskOpts, {
            list: listCountries,
            onMaskChange: maskChangeWorld
        }));
    })
}

function fadeIn(el, display) {
    el.style.opacity = 0;
    el.style.display = display || "block";
    (function fade() {
        var val = parseFloat(el.style.opacity);
        if (!((val += .1) > 1)) {
            el.style.opacity = val;
            requestAnimationFrame(fade);
        }
    })();
}

function fadeOut(el) {
    el.style.opacity = 1;
    (function fade() {
        if ((el.style.opacity -= .1) < 0) {
            el.style.display = "none";
        } else {
            requestAnimationFrame(fade);
        }
    })();
};

function hidBitrixError() {
    $(document).find('.tablebodytext').css('display', 'none');
};

function sectionTabDesktopAction() {
    $(".tab-block-top__item").on("click", function () {
        data_category = $(this).attr("data-id");
        if (!$(this).parents(".tab-block").find(".tab-block__content[data-id=" + data_category + "]").length)
            return false;

        $(".tab-block-top__item").removeClass("tab-block-top__item--active")
        $(".tab-block-top__item[data-id=" + data_category + "]").addClass("tab-block-top__item--active")

        $(this).parents(".tab-block").find(".tab-block__content").removeClass("tab-block__content--active")
        $(this).parents(".tab-block").find(".tab-block__content[data-id=" + data_category + "]").addClass("tab-block__content--active")

    })
}

let menuHeader = function () {
    let dropdownTimerOpened;
    let dropdownTimerClosed;
    let isMenuOpened = false;
    let menu = $('.header__menu');


    $('.header-fone-elem').on('mouseenter', function (evt) {

        if ($(window).width() > 1560) {

            let el = $(this),
                dropdown = el.children('.header-fone-block');

            clearInterval(dropdownTimerClosed);
            dropdown.fadeIn(600)
            el.addClass('active');

        }

    })

    $('.header-fone-elem').on('mouseleave', function () {
        if ($(window).width() > 1560) {
            let el = $(this),
                dropdown = el.children('.header-fone-block');

            dropdown.stop().fadeOut(200);
            el.removeClass('active');

            dropdownTimerClosed = setTimeout(() => {
                isMenuOpened = false;
            }, 100);
        }
    })


}


$(document).ready(function () {
    AOS.init({
        //once: true
    });

    getVHeight();

    menuHeader();

    hidBitrixError();

    $(".fancybox-form").fancybox({
        type: 'ajax',
        toolbar: false,
        modal: true,
        smallBtn: false,
    })

    phoneMasked();

    $('body').on('click', '.custom-popup-close', function (e) {
        $.fancybox.close();
    });

    $(document).on('change', '.with-label', function () {
        checkInputValue($(this));
    });

    setInputLabel();

    function setInputLabel() {
        if ('undefined' !== $('.with-label')) {
            $('.with-label').each(function () {
                checkInputValue($(this));
            });
        }
    }

    /*
        inputData = function () {
            document.querySelectorAll('.app-form.contactForm .fieldItem input').forEach(function (el) {
                if ($(el).val().length) {
                    $(el).siblings("label").addClass("active");
                }
            });
        }
    */

    const main_events = new Swiper('.main-events__list.swiper', {
        navigation: {
            nextEl: '.main-events__list .swiper-button-next',
            prevEl: '.main-events__list .swiper-button-prev',
        },
    });

    const main_news = new Swiper('.news-list.swiper', {
        navigation: {
            nextEl: '.news-list .swiper-button-next',
            prevEl: '.news-list .swiper-button-prev',
        },
        slidesPerView: 1,
        //spaceBetween: 10,
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                //spaceBetween: 20
            },
            // when window width is >= 480px
            500: {
                slidesPerView: 1.5,
                //spaceBetween: 30
            },
            // when window width is >= 640px
            991: {
                slidesPerView: 2,
                //spaceBetween: 40
            },
            1230: {
                slidesPerView: 2.5,
                //spaceBetween: 40
            }
        }
    });

    const slider = new Swiper('.slider.swiper', {
        navigation: {
            nextEl: '.slider .swiper-button-next',
            prevEl: '.slider .swiper-button-prev',
        },
    });


    sectionTabDesktopAction()


    $('.text-block table').each(function () {
        $(this).wrap("<div class='table-wrap'></div>")
    })


    $(".more-btn span").on("click", function () {
        $(this).closest(".more-content").removeClass("closed");
    })


    $(".header__menu-btn").on("click", function () {
        let el = $(".menu");

        el.fadeIn();
        el.addClass('active');
        $("body").addClass("body--fixed")
    })

    $(".menu__close").on("click", function () {
        let el = $(".menu");

        el.fadeOut();
        el.removeClass('active');
        $("body").removeClass("body--fixed")
        el.removeClass('active');
    })


})


function formAreaInit() {
    $("input.with-label").each(function () {
        if ($(this).val().length) {
            $(this).siblings("label").addClass("active");
            $(this).addClass("active");
        }
    })

    $("input.with-label").blur(function (evt) {
        if ($(this).val().length == 0) {
            $(this).siblings("label").removeClass("active");
            $(this).removeClass("active");
        }
    });

    $("input.with-label").focus(function (evt) {
        $(this).siblings("label").addClass("active");
        $(this).addClass("active");

    });

    $("textarea.with-label").each(function () {
        if ($(this).val().length) {
            $(this).siblings("label").addClass("active");
            $(this).addClass("active");
        }
    })


    $(document).on('blur', 'textarea.with-label', function (evt) {
        if ($(this).val().length == 0) {
            $(this).siblings("label").removeClass("active");
            $(this).removeClass("active");
        }
    });


    $(document).on('focus', 'textarea.with-label', function (evt) {
        $(this).siblings("label").addClass("active");
        $(this).addClass("active");

        var element = $(this);
        var l = element.val().length;
        element[0].setSelectionRange(l, l);

    });

}

$(document).ready(function () {
    formAreaInit();
})

$(document).ready(function () {
    if ($('.withLabel').length > 0) {
        $('.withLabel').map(function () {
            checkInputValue($(this));

            $(this).on('change', function () {
                checkInputValue($(this));
            })
        })
    }

})

let checkInputValue = function (el) {
    let input = el;
    let label = el.siblings('label');
    let isActive = label.hasClass('active');

    if (input.val().length > 0) {
        input.addClass('active');
        label.addClass('active');
    } else {
        input.removeClass('active');
        label.removeClass('active');
    }
}

$(window).resize(function () {
    AOS.refresh()
})

$(document).on("submit", "[data-type=js-form]", function (e) {
    console.log("form submit");
    e.preventDefault();

    let form = $(this),
        url = form.attr("data-url"),
        contentType = 'application/x-www-form-urlencoded; charset=UTF-8',
        processData = true,
        data = {};


    form.find("[data-type=get-field]").each(function () {
        let field = $(this).attr("data-uf"),
            val = $(this).val();

        data[field] = val;
    });

    console.log(data);

    $.ajax({
        type: "POST",
        url: url,
        dataType: "json",
        contentType: contentType,
        processData: processData,
        data: data,
        success: function (r) {
            console.log(r);
            form.find("[data-reset=y]").each(function () {
                $(this).val(" ");
            });
            form.siblings("[data-fancybox]").trigger('click');
        },
    });
})

$(document).on("click", "[data-type=event-modal-click]", function (e) {
    console.log("event-modal-click");

    let eventId = $(this).attr("data-url");

    $(document).find("[data-uf=UF_EVENT]").val(eventId);
});