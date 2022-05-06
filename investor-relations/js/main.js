/* Layout */
// Scroll To Top Button //
$(window).scroll(function () {
    if ($(this).scrollTop() >= 200) {
        $('#return-to-top').fadeIn(200);
    } else {
        $('#return-to-top').fadeOut(200);
    }
});
$('#return-to-top').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 250);
});
// Change Sticky Header when reach top //
$(document).ready(function () {
    var observer = new IntersectionObserver(function (entries) {
        // no intersection with screen
        if (entries[0].intersectionRatio === 0) {
            document.querySelector(".sticky-header").classList.add("sticky-header-change");
            $('.sticky-header__description').hide()
            $('.intro').show();
            $('.company-img').addClass('company-img-change');
            $('.nav-container__desktop__logo img').addClass('change-color');
              $('.nav-container__lang-btn').addClass('lang-btn-change-mobaile');
        }
        // fully intersects with screen
        else if (entries[0].intersectionRatio === 1 && $(".tabs li[data-cont='.overview']").hasClass("active")) {
            document.querySelector(".sticky-header").classList.remove("sticky-header-change");
            $('.intro').hide();
            $('.sticky-header__description').fadeIn(600)
            $('.company-img').removeClass('company-img-change');
            $('.nav-container__desktop__logo img').removeClass('change-color');
             $('.nav-container__lang-btn').removeClass('lang-btn-change-mobaile');
        }
    }, { threshold: [0, 1] });
    observer.observe(document.querySelector(".sticky-header-indicator"));
});
// Navigation-Bar Desktop //
$(document).ready(function () {
    let navbarLinks = $('.nav-container__desktop__links__link');
    let navbarMobileLinks = $('.nav-container__mobile__body__link');

    $(navbarLinks).click(function () {
        $(navbarLinks).removeClass("active")
        $(this).addClass("active");
    });

    $(navbarMobileLinks).click(function () {
        $(navbarMobileLinks).removeClass("active")
        $(this).addClass("active");
    });
});
// Navigation-Bar Mobile //
$(document).ready(function () {
    let desktopMenuBtn = $('.nav-container__desktop__bar');
    let mobileMenuBtn = $('.nav-container__mobile__header__btn');
    let mobileMenu = $('.nav-container__mobile');

    $(desktopMenuBtn).click(function () {
        $(mobileMenu).css('transform', 'translate(0%,0%)');
    });

    $(mobileMenuBtn).click(function () {
        $(mobileMenu).css('transform', 'translate(100%,0%)');
    });
})
// Desktop Tabs //
let tabs = document.querySelectorAll(".tabs li");
let tabsArray = Array.from(tabs);
let divs = document.querySelectorAll(".content > div");
let divsArray = Array.from(divs);
tabsArray.forEach((ele) => {
    ele.addEventListener("click", function (e) {
        var currentTab = this.innerText;
        itemName.text(currentTab)
        tabsArray.forEach((ele) => {
            ele.classList.remove("active");
            overlayCont.classList.remove("show");
            $('body').css('overflow-y', 'scroll');
        });
        e.currentTarget.classList.add("active");
        divsArray.forEach((div) => {
            div.style.display = "none";
        });
        document.querySelector(e.currentTarget.dataset.cont).style.display = "flex";
    });
});
// Mobile Tabs //
var overlayCont = document.querySelector(".overlay-container");
var overlayInner = document.querySelector(".overlay-inner");
var wClose = document.getElementById("wClose");
var item = $('.item');
var itemName = $('.item span');
item.click(function () {
    overlayCont.classList.add("show");
    $('body').css('overflow-y', 'hidden');
})
wClose.addEventListener("click", function () {
    overlayCont.classList.remove("show");
    $('body').css('overflow-y', 'scroll');
})

overlayCont.addEventListener("click", function (e) {
    if (e.target == overlayCont) {
        overlayCont.classList.remove("show");
        $('body').css('overflow-y', 'scroll');
    }
})

/* End of Layout */

/* Overview Page */
// Navigate To Profile Page On CLick On More Button On Sticky Header //
$('.sticky-header__description__more-en').click(function(){
    $('.item span').text('Profile');
})
$('.sticky-header__description__more-ar').click(function(){
    $('.item span').text('ملف الشركة');
})
/* End of Overview Page */

/* Profile Page */
// Change Cuurency Type  for Financial Highlights EN //
$('.Financials-Highlights-tabs__usd-en').click(function () {
    $('.Financials-Highlights__currency__type-en').html('(M USD)');
})
$('.Financials-Highlights-tabs__riyal-en').click(function () {
    $('.Financials-Highlights__currency__type-en').html('(M Riyal)');
})
// Change Cuurency Type  for Financial Highlights AR //
$('.Financials-Highlights-tabs__usd-ar').click(function () {
    $('.Financials-Highlights__currency__type-ar').html('(مليون دولار)');
})
$('.Financials-Highlights-tabs__riyal-ar').click(function () {
    $('.Financials-Highlights__currency__type-ar').html('(مليون ريال)');
})

// Financials Highlights Popup // 
$(".Financials-Highlights__table__row__data__text__icon").click(function () {
    $('body').addClass('hide-scroll');
    $('.Financials-Highlights__popup').show();
})
$('.Financials-Highlights__popup__overlay__chart__close img').click(function () {
    $('body').removeClass('hide-scroll');
    $('.Financials-Highlights__popup').hide();
})
//var fH_Popup = document.querySelector('.Financials-Highlights__popup__overlay')
//fH_Popup.addEventListener("click", function (e) {
//    if (e.target == fH_Popup) {
//        $('.Financials-Highlights__popup').hide();
//        $('body').removeClass('hide-scroll');
//    }
//})
// Stock Information Tabs //
let stockInformationTabs = document.querySelectorAll(".stock-information-tabs li");
let stockInformationTabsArray = Array.from(stockInformationTabs);
let stockInformationDivs = document.querySelectorAll(".stock-information__container > div");
let stockInformationDivsArray = Array.from(stockInformationDivs);
stockInformationTabsArray.forEach((ele) => {
    ele.addEventListener("click", function (e) {
        stockInformationTabsArray.forEach((ele) => {
            ele.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        stockInformationDivsArray.forEach((div) => {
            div.style.display = "none";
        });
        document.querySelector(e.currentTarget.dataset.cont).style.display = "block";
    });
});
// Financials Highlights USD Scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        financialsHighlightsUsdParent = $('.Financials-Highlights__usd__container');
    $(".Financials-Highlights__usd__panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".Financials-Highlights__usd__panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".Financials-Highlights__usd__container").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".Financials-Highlights__usd__panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = financialsHighlightsUsdParent.scrollLeft() + (scrollStep * modifier);
                financialsHighlightsUsdParent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
// Financials Highlights Riyal Scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        financialsHighlightsRiyalParent = $('.Financials-Highlights__riyal__container');
    $(".Financials-Highlights__riyal__panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".Financials-Highlights__riyal__panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".Financials-Highlights__riyal__container").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".Financials-Highlights__riyal__panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = financialsHighlightsRiyalParent.scrollLeft() + (scrollStep * modifier);
                financialsHighlightsRiyalParent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
/* End of Profile Page */

/* Chart Page */
// data picker //
$(function () {
    $('input.calendar').pignoseCalendar({
        format: 'YYYY-MM-DD',
        theme: 'dark'
    });
});
// FinancialsHighlights Tabs (Chart Page) //
let chartFinancialsHighlightsTabs = document.querySelectorAll(".chart-financials-highlights__tabs li");
let chartFinancialsHighlightsTabsArray = Array.from(chartFinancialsHighlightsTabs);
let chartFinancialsHighlightsDivs = document.querySelectorAll(".chart-financials-highlights__container > div");
let chartFinancialsHighlightsDivsArray = Array.from(chartFinancialsHighlightsDivs);
chartFinancialsHighlightsTabsArray.forEach((ele) => {
    ele.addEventListener("click", function (e) {
        chartFinancialsHighlightsTabsArray.forEach((ele) => {
            ele.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        chartFinancialsHighlightsDivsArray.forEach((div) => {
            div.style.display = "none";
        });
        document.querySelector(e.currentTarget.dataset.cont).style.display = "block";
    });
});
// Financials HighlightsRiyal Scroll Riyal (Chart Page) //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        chartFinancialsHighlightsRiyalParent = $('.chart-financials-highlights__data__details__riyal');
    $(".chart-financials-highlights__panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".chart-financials-highlights__panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".chart-financials-highlights__data__details__riyal").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".chart-financials-highlights__panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = chartFinancialsHighlightsRiyalParent.scrollLeft() + (scrollStep * modifier);
                chartFinancialsHighlightsRiyalParent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
// Financials HighlightsRiyal Scroll USD (Chart Page) //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        chartFinancialsHighlightsUsdParent = $('.chart-financials-highlights__data__details__usd');
    $(".chart-financials-highlights__panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".chart-financials-highlights__panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".chart-financials-highlights__data__details__usd").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".chart-financials-highlights__panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = chartFinancialsHighlightsUsdParent.scrollLeft() + (scrollStep * modifier);
                chartFinancialsHighlightsUsdParent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
/* End of Chart Page */

/* Organizational Structure Page */
// salaries tabs //
function applySalaryYearTabs() {
    let salariesTabs = document.querySelectorAll(".salaries__years__tabs li");
    let salariesTabsArray = Array.from(salariesTabs);
    let salariesDivs = document.querySelectorAll(".salaries__container > div");
    let salariesDivsArray = Array.from(salariesDivs);
    salariesTabsArray.forEach((ele) => {
        ele.addEventListener("click", function (e) {
            salariesTabsArray.forEach((ele) => {
                ele.classList.remove("active");
            });
            e.currentTarget.classList.add("active");
            salariesDivsArray.forEach((div) => {
                div.style.display = "none";
            });
            document.querySelector(e.currentTarget.dataset.cont).style.display = "block";
        });
    });
    salariesTabsArray[0].click();
}
// Organizational Structure Tabs //
let structureTabs = document.querySelectorAll(".structure__tabs li");
let structureTabsArray = Array.from(structureTabs);
let structureDivs = document.querySelectorAll(".structure__container > div");
let structureDivsArray = Array.from(structureDivs);
structureTabsArray.forEach((ele) => {
    ele.addEventListener("click", function (e) {
        structureTabsArray.forEach((ele) => {
            ele.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        structureDivsArray.forEach((div) => {
            div.style.display = "none";
            $('.structure__member-details').hide(0, function () {
                $('.structure__container').show();
            });
        });
        document.querySelector(e.currentTarget.dataset.cont).style.display = "grid";
    });
});
/* End of Organizational Structure Page */

/* Major Shareholder Page */
// Main Major Shareholders Tabs //
let mainMajorShareholderTabs = document.querySelectorAll(".main-major-shareholders__head__tabs li");
let mainMajorShareholderTabsArray = Array.from(mainMajorShareholderTabs);
let mainMajorShareholderDivs = document.querySelectorAll(".main-major-shareholders__container > div");
let mainMajorShareholderDivsArray = Array.from(mainMajorShareholderDivs);
mainMajorShareholderTabsArray.forEach((ele) => {
    ele.addEventListener("click", function (e) {
        mainMajorShareholderTabsArray.forEach((ele) => {
            ele.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        mainMajorShareholderDivsArray.forEach((div) => {
            div.style.display = "none";
        });
        document.querySelector(e.currentTarget.dataset.cont).style.display = "block";
    });
});
// Display MajorShareholders Sub Sections //
var foreignOwnerShip = $('.foreign-ownership');
var majorShareholderOptions = $('.main-major-shareholders__head__options');
function showMajorShareholderSec(forign,options){

    if(forign && !options ){
        foreignOwnerShip.css('display','block');
        majorShareholderOptions.css('display','none');
    }else if( !forign && options){
        foreignOwnerShip.css('display','none');
        majorShareholderOptions.css('display','flex');
    }else{
        foreignOwnerShip.css('display','none');
        majorShareholderOptions.css('display','none');
    }
}
// Main Major Shareholders - shareholders scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        mainMajorShareholdersShareholderParent = $('.main-major-shareholders__container__major-shareholders__data__details');
    $(".main-major-shareholders__container__major-shareholders__panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".main-major-shareholders__container__major-shareholders__panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".main-major-shareholders__container__major-shareholders__data__details").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".main-major-shareholders__container__major-shareholders__panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = mainMajorShareholdersShareholderParent.scrollLeft() + (scrollStep * modifier);
                mainMajorShareholdersShareholderParent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
// Historical Changes Scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        mainMajorShareholdersHistoricalChangesParent = $('.main-major-shareholders__container__historical-changes__data__details');
    $(".main-major-shareholders__container__historical-changes__panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".main-major-shareholders__container__historical-changes__panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".main-major-shareholders__container__historical-changes__data__details").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".main-major-shareholders__container__historical-changes__panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = mainMajorShareholdersHistoricalChangesParent.scrollLeft() + (scrollStep * modifier);
                mainMajorShareholdersHistoricalChangesParent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
/* End of Major Shareholder Page */

/* Financial Statements Page */
// Financial Statement Tabs //
let mainFinancialstatementTabs = document.querySelectorAll(".main-financial-statement__head__tabs li");
let mainFinancialstatementTabsArray = Array.from(mainFinancialstatementTabs);
let mainFinancialstatementDivs = document.querySelectorAll("#financialStatementMain > div");
let mainFinancialstatementDivsArray = Array.from(mainFinancialstatementDivs);
mainFinancialstatementTabsArray.forEach((ele) => {
    ele.addEventListener("click", function (e) {
        mainFinancialstatementTabsArray.forEach((ele) => {
            ele.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        mainFinancialstatementDivsArray.forEach((div) => {
            div.style.display = "none";
        });
        document.querySelector(e.currentTarget.dataset.cont).style.display = "block";
    });
});

// accordion menu //
function showHideChild(fieldID) {
    var openAccordians = JSON.parse(sessionStorage.getItem("openAccordians")) || [];
    if ($("#btn" + fieldID).data("childviewstatus") == 'open') {
        $("tr[data-parentid='" + fieldID + "']").each(function () {
            $(this).hide();
        });
        $("#tr" + fieldID).removeClass('fTrOpen').addClass('fTrClose');
        $("#btn" + fieldID).removeClass('fOpen').addClass('fClose');
        $("#btn" + fieldID).data("childviewstatus", 'close');
        openAccordians = jQuery.grep(openAccordians, function (acordian) {
            return acordian != "#btn" + fieldID;
        });
        sessionStorage.setItem("openAccordians", JSON.stringify(openAccordians));
    } else {
        $("tr[data-parentid='" + fieldID + "']").each(function () {
            $(this).show();
        });
        $("#tr" + fieldID).removeClass('fTrClose').addClass('fTrOpen');
        $("#btn" + fieldID).removeClass('fClose').addClass('fOpen');
        $("#btn" + fieldID).data("childviewstatus", 'open');
        if (openAccordians.indexOf("#btn" + fieldID) == -1) {
            openAccordians.push("#btn" + fieldID);
            sessionStorage.setItem("openAccordians", JSON.stringify(openAccordians));
        }
    }
    return false;
}
function showHideSubStatement(fieldID) {
    var openAccordians = JSON.parse(sessionStorage.getItem("openAccordians")) || [];
    if ($("#btn" + fieldID).data("childviewstatus") == 'open') {
        $("tr[data-SubStatatementID='" + fieldID + "']").each(function () {
            $(this).hide();
        });
        $("#tr" + fieldID).removeClass('fTrOpen').addClass('fTrClose');
        $("#btn" + fieldID).removeClass('fOpen').addClass('fClose');
        $("#btn" + fieldID).data("childviewstatus", 'close');
        openAccordians = jQuery.grep(openAccordians, function (acordian) {
            return acordian != "#btn" + fieldID;
        });
        sessionStorage.setItem("openAccordians", JSON.stringify(openAccordians));
    } else {
        $("tr[data-SubStatatementID='" + fieldID + "']").each(function () {
            if ($(this).data("ischildelement") == 'no') {
                $(this).show();
            }
            if ($(this).data("haschildelementdata") == 'yes') {
                var fldID = $(this).attr('id');
                fldID = fldID.substring(2);
                $("#tr" + fldID).removeClass('fTrOpen').addClass('fTrClose');
                $("#btn" + fldID).removeClass('fOpen').addClass('fClose');
                $("#btn" + fldID).data("childviewstatus", 'close')
            }
        });
        $("#tr" + fieldID).removeClass('fTrClose').addClass('fTrOpen');
        $("#btn" + fieldID).removeClass('fClose').addClass('fOpen');
        $("#btn" + fieldID).data("childviewstatus", 'open');
        if (openAccordians.indexOf("#btn" + fieldID) == -1) {
            openAccordians.push("#btn" + fieldID);
            sessionStorage.setItem("openAccordians", JSON.stringify(openAccordians));
        }
    }
    return false;
}
// Annual Scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        st_annual_Parent = $('.st-annual .scroll-container');
    $(".st-annual-panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".st-annual-panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".st-annual .scroll-container").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".st-annual-panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = st_annual_Parent.scrollLeft() + (scrollStep * modifier);

                st_annual_Parent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
// Quarter Scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        st_quarter_Parent = $('.st-quarter .scroll-container');
    $(".st-quarter-panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".st-quarter-panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".st-quarter .scroll-container").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".st-quarter-panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = st_quarter_Parent.scrollLeft() + (scrollStep * modifier);

                st_quarter_Parent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
// Interim Scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        st_interim_Parent = $('.st-interim .scroll-container');
    $(".st-interim-panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".st-interim-panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".st-interim .scroll-container").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".st-interim-panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = st_interim_Parent.scrollLeft() + (scrollStep * modifier);

                st_interim_Parent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
// Popup //
$(".fs-chart-btn").click(function () {
    $('body').addClass('hide-scroll');
    $('.fs-popup').show();
});
$('.fs-popup__overlay__chart__close img').click(function () {
    $('body').removeClass('hide-scroll');
    $('.fs-popup').hide();

});
var FS_Popup = document.querySelector('.fs-popup__overlay')
FS_Popup.addEventListener("click", function (e) {
    if (e.target == FS_Popup) {
        $('.fs-popup').hide();
        $('body').removeClass('hide-scroll');
    }
});
// Currency Tabs Active Class //
$('.main-financial-statement__head__options__tabs li').click(function () {
    $('.main-financial-statement__head__options__tabs li').removeClass('active');
    $(this).addClass('active');
});
// English Currency Type //
$('.main-financial-statement__head__options__tabs__usd-en').click(function () {
    $('.st-currency-en').text('USD')
});
$('.main-financial-statement__head__options__tabs__riyal-en').click(function () {
    $('.st-currency-en').text('SAR')
});
// Arabic Currenncy Type //
$('.main-financial-statement__head__options__tabs__usd-ar').click(function () {
    $('.st-currency-ar').text('دولار')
});
$('.main-financial-statement__head__options__tabs__riyal-ar').click(function () {
    $('.st-currency-ar').text('ريال')
});
/* End of Financial Statements Page */

/* Financial Reports Page */
// Financial Reports Scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        financialReportsParent = $('.financial-reports__container');
    $(".financial-reports__panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".financial-reports__panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
        $(".financial-reports__container").on("touchstart click mouseenter", function () {
            stopScrolling();
            $(".financial-reports__panner").removeClass('active-scroll');
        });
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = financialReportsParent.scrollLeft() + (scrollStep * modifier);
                financialReportsParent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
/* End of Financial Reports Page */

/* Financial Ratios Page */
// Annualized scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        ra_annualized_Parent = $('.ra-annualized .scroll-container');
    $(".ra-annualized-panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".ra-annualized-panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".ra-annualized .scroll-container").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".ra-annualized-panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = ra_annualized_Parent.scrollLeft() + (scrollStep * modifier);

                ra_annualized_Parent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
// Financial Ratio Tabs //
let mainFinancialratioTabs = document.querySelectorAll(".main-financial-ratio__head__tabs li");
let mainFinancialratioTabsArray = Array.from(mainFinancialratioTabs);
let mainFinancialratioDivs = document.querySelectorAll("#financialRatioMain > div");
let mainFinancialratioDivsArray = Array.from(mainFinancialratioDivs);
mainFinancialratioTabsArray.forEach((ele) => {
    ele.addEventListener("click", function (e) {
        mainFinancialratioTabsArray.forEach((ele) => {
            ele.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        mainFinancialratioDivsArray.forEach((div) => {
            div.style.display = "none";
        });
        document.querySelector(e.currentTarget.dataset.cont).style.display = "block";
    });
});
// Currency Tabs Active Class //
$('.main-financial-ratio__head__options__tabs li').click(function () {
    $('.main-financial-ratio__head__options__tabs li').removeClass('active');
    $(this).addClass('active');
});
// English Currency Type //
$('.main-financial-ratio__head__options__tabs__usd-en').click(function () {
    $('.ra-currency-en').text('USD')
})
$('.main-financial-ratio__head__options__tabs__riyal-en').click(function () {
    $('.ra-currency-en').text('SAR')
})
// Arabic Currency Type //
$('.main-financial-ratio__head__options__tabs__usd-ar').click(function () {
    $('.ra-currency-ar').text('دولار')
})
$('.main-financial-ratio__head__options__tabs__riyal-ar').click(function () {
    $('.ra-currency-ar').text('ريال')
})
// Popup //
$(".fr-chart-btn").click(function () {
    $('body').addClass('hide-scroll');
    $('.fr-popup').show();
});
$('.fr-popup__overlay__chart__close img').click(function () {
    $('body').removeClass('hide-scroll');
    $('.fr-popup').hide();

});
var FR_Popup = document.querySelector('.fr-popup__overlay')
FR_Popup.addEventListener("click", function (e) {
    if (e.target == FR_Popup) {
        $('.fr-popup').hide();
        $('body').removeClass('hide-scroll');
    }
});
// Annual scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        ra_annual_Parent = $('.ra-annual .scroll-container');
    $(".ra-annual-panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".ra-annual-panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".ra-annual .scroll-container").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".ra-annual-panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = ra_annual_Parent.scrollLeft() + (scrollStep * modifier);

                ra_annual_Parent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
// Trailing scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        ra_trailing_Parent = $('.ra-trailing .scroll-container');
    $(".ra-trailing-panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".ra-trailing-panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".ra-trailing .scroll-container").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".ra-trailing-panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = ra_trailing_Parent.scrollLeft() + (scrollStep * modifier);
                ra_trailing_Parent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
/* End of Financial Ratios Page */

/* Corporate Actions Page */
// Main Corporate Actions Tabs //
let mainCorporateActionsTabs = document.querySelectorAll(".main-corporate-actions__tabs li");
let mainCorporateActionsTabsArray = Array.from(mainCorporateActionsTabs);
let mainCorporateActionsDivs = document.querySelectorAll(".main-corporate-actions__container > div");
let mainCorporateActionsDivsArray = Array.from(mainCorporateActionsDivs);
mainCorporateActionsTabsArray.forEach((ele) => {
    ele.addEventListener("click", function (e) {
        mainCorporateActionsTabsArray.forEach((ele) => {
            ele.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        mainCorporateActionsDivsArray.forEach((div) => {
            div.style.display = "none";
        });
        document.querySelector(e.currentTarget.dataset.cont).style.display = "block";
    });
});
// Capital Changes scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        capitalChangesParent = $('.main-corporate-actions__capital-changes');
    $(".main-corporate-actions__panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".main-corporate-actions__panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".main-corporate-actions__capital-changes").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".main-corporate-actions__panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = capitalChangesParent.scrollLeft() + (scrollStep * modifier);

                capitalChangesParent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
// Dividend History scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        dividendHistoryParent = $('.main-corporate-actions__dividend-history');
    $(".main-corporate-actions__panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".main-corporate-actions__panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".main-corporate-actions__dividend-history").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".main-corporate-actions__panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = dividendHistoryParent.scrollLeft() + (scrollStep * modifier);

                dividendHistoryParent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
/* End of Corporate Actions Page */

/* Disclosures Page */
// Calendar Popup //
var calendarPopup = document.querySelector('.modal-overlay')
calendarPopup.addEventListener("click", function (e) {
    if (e.target == calendarPopup) {
        $('.pr__calendar-modal').removeClass('is-visible');
    }
})
// Disclouser Tabs //
let mainPrTabs = document.querySelectorAll(".pr__tabs li");
let mainPrTabsArray = Array.from(mainPrTabs);
let mainPrDivs = document.querySelectorAll(".pr__container > div");
let mainPrDivsArray = Array.from(mainPrDivs);
mainPrTabsArray.forEach((ele) => {
    ele.addEventListener("click", function (e) {
        mainPrTabsArray.forEach((ele) => {
            ele.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        mainPrDivsArray.forEach((div) => {
            div.style.display = "none";
        });
        document.querySelector(e.currentTarget.dataset.cont).style.display = "block";
    });
});
// Disclosures Tabs Scroll //
(function () {
    var scrollHandle = 0,
        scrollStep = 2,
        PrParent = $('.pr-scroll-tabs');
    $(".pr__panner").on("mouseenter touchstart", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);
        $(this).addClass('active-scroll');
        startScrolling(direction, scrollStep);
    });
    $(".pr__panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active-scroll');
    });
    $(".pr-scroll-tabs").on("touchstart click mouseenter", function () {
        stopScrolling();
        $(".pr__panner").removeClass('active-scroll');
    });
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = PrParent.scrollLeft() + (scrollStep * modifier);
                PrParent.scrollLeft(newOffset);
            }, 10);
        }
    }
    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());
/* End of Disclosures Page */

/* Subscription Center Page */
  //Subscription Center__select//
  $(".subscription-center__custom--country__select").click(function() {
    $(".subscription-center__custom--country__select").css("color", "#1a516d");
  });
/* End of Subscription Center Page */
  