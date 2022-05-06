<?php
/**
 * Template Name: Argaam Arabic
 * This template file is used for Argaam Investor Relation pages (Arabic).
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<!DOCTYPE html>
<html lang="sa-ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" media="all" href="assets/fav.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-ar/pignose.calendar.min.css">
    <link rel="stylesheet" href="css/style-ar/all.min.css">
    <link rel="stylesheet" href="css/style-ar/style.css">
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/stock/modules/data.js"></script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
    <style>
        [v-cloak] {
            display: none;
        }

        @media print {
            .noprint {
                display: none;
            }

            body {
                zoom: 80%;
            }

            .columchart {
                display: none;
            }
        }
        .error {
            color: red;
        }

        .info {
            color: green;
        }
    </style>
    <title>Investors – AWPT</title>
</head>

<body style="direction:rtl">
    <div id="alkhorayefapp" v-bind:lang="Language = 'ar'">
        <div id="return-to-top">
            <span>
                <i class="fas fa-chevron-up"></i>
            </span>
        </div>
        <div class="loading">
            <div class="preloader js-preloader flex-center">
                <div class="dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
        </div>
        <main>
            <img class="company-img" src="assets/body-bg.jpg" alt="header-background">
            <div class="sticky-header-indicator"></div>
            <div class="sticky-header noprint">
                <nav>
                    <div class="nav-container">
                        <div class="nav-container__desktop">
                            <a class="nav-container__desktop__logo" href="https://awpt.com.sa">
                                <img class="nav-container__desktop__logo__img" src="assets/logo2.png">
                            </a>
                            <div class="nav-container__desktop__links">
                                <a class="nav-container__desktop__links__link"
                                    href="https://awpt.com.sa/our-company">شركتنا</a>
                                <a class="nav-container__desktop__links__link"
                                    href="https://awpt.com.sa/business-units">وحدة العمل</a>
                                <a class="nav-container__desktop__links__link"
                                    href="https://awpt.com.sa/projects">المشاريع</a>
                                <a class="nav-container__desktop__links__link"
                                    href="https://awpt.com.sa/our-network">شبكتنا</a>
                                <a class="nav-container__desktop__links__link active" href="investor-relations-ar">المستثمرون</a>
                                <a class="nav-container__desktop__links__link" href="https://awpt.com.sa/reach-us">تواصل
                                    معنا</a>
                                <a class="nav-container__desktop__links__link" href="https://awpt.com.sa/investor-relations">Investors</a>
                            </div>
                            <span class="nav-container__desktop__bar">
                                <img class="nav-container__desktop__bar__img" src="assets/menu.svg"
                                    alt="menue-bar">
                            </span>
                        </div>
                        <div class="nav-container__mobile">
                            <div class="nav-container__mobile__header">
                                <a class="nav-container__mobile__header__logo" href="https://awpt.com.sa">
                                    <img class="nav-container__mobile__header__logo__img"
                                        src="assets/logo.png">
                                </a>
                                <span class="nav-container__mobile__header__btn">
                                    <img class="fas fa-times nav-container__mobile__header__btn__icon"
                                        src="assets/close.svg">
                                </span>
                            </div>
                            <div class="nav-container__mobile__body">
                                <a class="nav-container__mobile__body__link"
                                    href="https://awpt.com.sa/our-company">شركتنا</a>
                                <a class="nav-container__mobile__body__link"
                                    href="https://awpt.com.sa/business-units">وحدة العمل</a>
                                <a class="nav-container__mobile__body__link"
                                    href="https://awpt.com.sa/projects">المشاريع</a>
                                <a class="nav-container__mobile__body__link"
                                    href="https://awpt.com.sa/our-network">شبكتنا</a>
                                <a class="nav-container__mobile__body__link active" href="#">المستثمرون</a>
                                <a class="nav-container__mobile__body__link" href="https://awpt.com.sa/reach-us">تواصل
                                    معنا</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="sticky-header__service">
                    <p class="sticky-header__service__title">
                        علاقات المساهمين
                    </p>
                    <div class="sticky-header__service__values">
                        <p class="sticky-header__service__values__number">
                            {{formatter.format(CompanyOverview.prices[0].closeValue)}}
                        </p>
                        <p
                            v-bind:class="'sticky-header__service__values__indicators ' + (CompanyOverview.prices[0].change < 0 ?'red' : 'green')">
                            <span class="sticky-header__service__values__indicators__pointer">
                                <i
                                    v-bind:class="'fas fa-caret-'+(CompanyOverview.prices[0].change < 0 ?'down' : 'up')"></i>
                                {{CompanyOverview.prices[0].change < 0 ? '(' +
                                    formatter.format(Math.abs(CompanyOverview.prices[0].change)) + ')' :
                                    formatter.format(CompanyOverview.prices[0].change)}} </span>
                                    <span class="sticky-header__service__values__indicators__percent">
                                        {{CompanyOverview.prices[0].percentageChange < 0 ? '(' +
                                            formatter.format(Math.abs(CompanyOverview.prices[0].percentageChange)) + ')'
                                            : formatter.format(CompanyOverview.prices[0].percentageChange)}}% </span>
                        </p>
                    </div>
                </div>
                <p class="sticky-header__description">
                    تتمثل أنشطة الشركة وفقًا لسجلها التجاري الرئيسي وسجلاتها الفرعية بالآتي: تمديدات خطوط المياه بين
                    المدن وداخلها وإنشاء شبكات جديدة وصيانتها، وإنشاء وإصلاح المحطات والخطوط الرئيسية لتوزيع المياه،
                    وإنشاء وإصلاح قنوات الري والسقي وأبراج تخزين الماء الرئيسية وحفر آبار المياه وصيانتها، وإنشاء وإصلاح
                    محطات ومشاريع الصرف الصحي وشبكات المجاري والمضخات، وإنشاء السدود. إصلاح وصيانة الأنابيب وخطوط
                    الأنابيب وأجهزة تنقية المياه، وجمع المياه وتنقيتها والتخلص من مياه المجاري، وتشغيل شبكات ومرافق
                    معالجة الصرف الصحي، وتمديد أنابيب النفط والغاز، وحفر آبار المياه الأنبوبية، وتمديدات أنابيب الري
                    وصيانتها وإصلاحها، وإدارة المشاريع الانشائية... <span class="sticky-header__description__more sticky-header__description__more-ar"
                        v-on:click="LoadPage('profile', loadCompanyProfile)">المزيد</span>
                </p>
                <ul class="tabs sticky-header__tabs noprint">
                    <li data-cont=".overview" v-on:click="LoadPage('overview', loadCompanyOverView)" class="active">
                        معلومات <br> الشركة</li>
                    <li data-cont=".profile" v-on:click="LoadPage('profile', loadCompanyProfile)"> ملف <br> الشركة</li>
                    <li data-cont=".Chart" v-on:click="LoadPage('Chart', loadCompanyChart)">تشارت</li>
                    <li data-cont=".Organisational-Structure"
                        v-on:click="LoadPage('Organisational-Structure', loadCompanyOrganizationStructure)">الهيكل <br>
                        التنظيمي</li>
                    <li data-cont=".Major-Shareholder"
                        v-on:click="LoadPage('Major-Shareholder', loadMajorShareholders)">كبار <br> المساهمين</li>
                    <li data-cont=".Financial-Statment"
                        v-on:click="LoadPage('Financial-Statment', loadCompanyFStatements)">القوائم <br> المالية</li>
                    <li data-cont=".Financial-Reports" v-on:click="LoadPage('Financial-Reports', loadCompanyFReports)">
                        قائمة <br> التقارير المالية</li>
                    <li data-cont=".Financial-Ratios" v-on:click="LoadPage('Financial-Ratios', loadCompanyFRatios)">
                        المؤشرات <br> المالية</li>
                    <li data-cont=".Corporate-Actions" v-on:click="LoadPage('Corporate-Actions', loadCorporateActions)">
                        اجراءات <br> الشركة</li>
                    <li data-cont=".main-Disclosures" v-on:click="openNews('pr__disclosures',0)">الأخبار <br> الصحفية
                    </li>
                    <li data-cont=".subscription" v-on:click="LoadPage('subscription', loadSubscription)">مركز <br> الاشتراكات</li>
                    <li data-cont=".contact-us">التواصل</li>
                </ul>
                <div class="mobile-dropdown">
                    <div class="item">
                        <span>ملف الشركة</span>
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="overlay-container">
                    <div class="overlay-inner">
                        <img id="wClose" src="assets/close.svg" alt="close">
                        <ul class="tabs drop-down">
                            <li data-cont=".overview" v-on:click="LoadPage('overview', loadCompanyOverView)"
                                class="active">معلومات <br> الشركة</li>
                            <li data-cont=".profile" v-on:click="LoadPage('profile', loadCompanyProfile)"> ملف <br>
                                الشركة</li>
                            <li data-cont=".Chart" v-on:click="LoadPage('Chart', loadCompanyChart)">تشارت</li>
                            <li data-cont=".Organisational-Structure"
                                v-on:click="LoadPage('Organisational-Structure', loadCompanyOrganizationStructure)">
                                الهيكل <br> التنظيمي</li>
                            <li data-cont=".Major-Shareholder"
                                v-on:click="LoadPage('Major-Shareholder', loadMajorShareholders)">كبار <br> المساهمين
                            </li>
                            <li data-cont=".Financial-Statment"
                                v-on:click="LoadPage('Financial-Statment', loadCompanyFStatements)">القوائم <br> المالية
                            </li>
                            <li data-cont=".Financial-Reports"
                                v-on:click="LoadPage('Financial-Reports', loadCompanyFReports)">قائمة <br> التقارير
                                المالية</li>
                            <li data-cont=".Financial-Ratios"
                                v-on:click="LoadPage('Financial-Ratios', loadCompanyFRatios)">المؤشرات <br> المالية</li>
                            <li data-cont=".Corporate-Actions"
                                v-on:click="LoadPage('Corporate-Actions', loadCorporateActions)">اجراءات <br> الشركة
                            </li>
                            <li data-cont=".main-Disclosures" v-on:click="openNews('pr__disclosures',0)">الأخبار <br>
                                الصحفية</li>
                            </li>
                            <li data-cont=".subscription" v-on:click="LoadPage('subscription', loadSubscription)">مركز الاشتراكات</li>
                            <li data-cont=".contact-us">التواصل</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="widgets-container overview" v-cloak v-show="Config.OverView.Visible">
                    <div class="ticker" v-cloak v-show="Config.OverView.Ticker">
                       <table style="width: 100%;margin-bottom: 15px;">
                            <tr>
                                <td>
                                 <p>{{MarketData.MarketNameAr}}</p>  
                                </td>
                                <td></td>
                                <td style="text-align: center;">
                                  <p> {{formatter.format(MarketData.CloseValue)}}</p>   
                                </td>
                                 <td style="text-align: center;"    v-bind:class="'ticker__pointer '+ (MarketData.ChangeValue < 0 ? 'red' : 'green')">
                                    <i v-bind:class="'fas fa-caret-'+(MarketData.ChangeValue < 0 ?'down' : 'up')"
                                            style=" margin-right: 5px;"></i>
                                    <span>{{formatter.format(MarketData.ChangeValue)}}</span>
                                </td>
                                <td style="text-align: center;"    v-bind:class="'ticker__pointer '+ (MarketData.ChangeValue < 0 ? 'red' : 'green')">
                                  <p>
                                     {{MarketData.PercentageChange < 0 ? '(' +formatter.format(Math.abs(MarketData.PercentageChange))+ ')' : formatter.format(MarketData.PercentageChange)}} %
                                    </p>  
                                </td>

                            </tr>
                        </table>
                        <table style="width: 100%; margin-bottom: 20px;" v-cloak v-show="!Loading.CompanyOverview">
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Ticker</p>
                                    </td>
                                    <td style="text-align: center;">
                                        <p>السعر</p>
                                    </td>
                                    <td style="text-align: center;">
                                        <p>التغير</p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="line-height: 30px; font-weight:500;">
                                            {{CompanyOverview.profileInfo.ticker}}</p>
                                    </td>
                                    <td style="text-align: center;">
                                        <p style="font-weight: 500;">
                                            {{formatter.format(CompanyOverview.prices[0].closeValue)}}</p>
                                    </td>
                                    <td v-bind:class="'ticker__pointer '+ (CompanyOverview.prices[0].change < 0 ? 'red' : 'green')"
                                        style="text-align: center;">
                                        <i v-bind:class="'fas fa-caret-'+(CompanyOverview.prices[0].change < 0 ?'down' : 'up')"
                                            style=" margin-left: 5px;"></i>
                                        <span>{{CompanyOverview.prices[0].change < 0 ? '(' +
                                                formatter.format(Math.abs(CompanyOverview.prices[0].change)) + ')' :
                                                formatter.format(CompanyOverview.prices[0].change)}}</span>
                                    </td>
                                    <td
                                        v-bind:class="'ticker__pointer '+ (CompanyOverview.prices[0].change < 0 ? 'red' : 'green')">
                                        <p>{{CompanyOverview.prices[0].percentageChange < 0 ? '(' +
                                                formatter.format(Math.abs(CompanyOverview.prices[0].percentageChange))
                                                + ')' :
                                                formatter.format(CompanyOverview.prices[0].percentageChange)}}%</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class="ticker-tab">
                            <li class="active" data-cont="1D" v-on:click="fetchCartData('overviewchart','1D')">يوم</li>
                            <li data-cont="5D" v-on:click="fetchCartData('overviewchart','5D')">5 أيام</li>
                            <li data-cont="3M" v-on:click="fetchCartData('overviewchart','3M')">3 أشهر</li>
                            <li data-cont="6M" v-on:click="fetchCartData('overviewchart','6M')">6 أشهر</li>
                            <li data-cont="1Y" v-on:click="fetchCartData('overviewchart','1Y')">سنة</li>
                            <li data-cont="2Y" v-on:click="fetchCartData('overviewchart','2Y')">سنتين</li>
                            <li data-cont="5Y" v-on:click="fetchCartData('overviewchart','5Y')">5 سنوات</li>
                            <li data-cont="AY" v-on:click="fetchCartData('overviewchart','AY')">الكل</li>
                        </ul>
                        <div class="ticker-container">
                            <div class="one-day">
                                <div>
                                    <div id="overviewchart" style="height: 120px;width:100%"></div>
                                </div>
                                <table style="width: 100%; font-size: 9px; margin-top: 10px;">
                                    <tbody>
                                        <tr>
                                            <td style="padding-bottom: 5px;">
                                                <p>O: {{formatter.format(CompanyOverview.prices[0].openValue)}} </p>
                                            </td>
                                            <td style="padding-bottom: 5px;">
                                                <p>H: {{formatter.format(CompanyOverview.prices[0].high)}} </p>
                                            </td>
                                            <td style="padding-bottom: 5px;">
                                                <p>L: {{formatter.format(CompanyOverview.prices[0].low)}}</p>
                                            </td>
                                            <td style="padding-bottom: 5px;">
                                                <p>C: {{formatter.format(CompanyOverview.prices[0].closeValue)}}</p>
                                            </td>
                                            <td style="padding-bottom: 5px;">
                                                <p style="margin-right: 5px;">|</p>
                                            </td>
                                            <td style="padding-bottom: 5px;">
                                                <p>{{CompanyOverview.prices[0].tradingDate}}</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="font-size: 12px; color: #90F49B; text-align: right;">(متأخرة بـ 15 دقيقة)</p>
                                <a hhref="#" v-on:click="LoadPage('Chart', loadCompanyChart)" class="ticker__more">
                                    <span>المزيد</span>
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="marketvalue" v-cloak v-show="Config.OverView.MarketValues.Visible">
                        <div class="marketvalue__container">
                            <p class="marketvalue__header">
                                <span class="marketvalue__header__title">
                                    أداء السهم
                                </span>
                             
                            </p>
                            <div class="marketvalue__container__right">
                                <p class="marketvalue__container__right__data"
                                    v-show="Config.OverView.MarketValues.Volume">
                                    <span class="marketvalue__container__right__data__text">
                                        حجم التداول
                                    </span>
                                    <span class="marketvalue__container__right__data__number">
                                        {{toRealNumber.format(CompanyOverview.prices[0].volume)}}
                                    </span>
                                </p>
                                <p class="marketvalue__container__right__data"
                                    v-show="Config.OverView.MarketValues.Turnover">
                                    <span class="marketvalue__container__right__data__text">
                                        قيمه التداول
                                    </span>
                                    <span class="marketvalue__container__right__data__number">
                                        {{formatter.format(CompanyOverview.companyStockSummary.avgTurnover12Months)}}
                                    </span>
                                </p>
                                <p class="marketvalue__container__right__data"
                                    v-show="Config.OverView.MarketValues.Transactions">
                                    <span class="marketvalue__container__right__data__text">
                                        عدد الصفقات
                                    </span>
                                    <span class="marketvalue__container__right__data__number">
                                        {{toRealNumber.format(CompanyOverview.companyStockSummary.contractCount)}}
                                    </span>
                                </p>
                                <p class="marketvalue__container__right__data"
                                    v-show="Config.OverView.MarketValues.Transactions">
                                    <span class="marketvalue__container__right__data__text">
                                       القيمة السوقية
                                    </span>
                                    <span class="marketvalue__container__right__data__number">
                                        {{toRealNumber.format(MarketValue)}}  مليون 
                                    </span>
                                </p>
                            </div>
                            <div class="marketvalue__container__left">
                                <p class="marketvalue__container__left__data"
                                    v-show="Config.OverView.MarketValues.AverageVolume">
                                    <span class="marketvalue__container__left__data__text">
                                        م. حجم التداول
                                        <br>
                                        <span class="marketvalue__container__left__data__text--small">
                                            (3 شهر)
                                        </span>
                                    </span>
                                    <span class="marketvalue__container__left__data__number">
                                        {{formatter.format(CompanyOverview.companyStockSummary.avgVolume3Months)}}
                                    </span>
                                </p>
                                <p class="marketvalue__container__left__data"
                                    v-show="Config.OverView.MarketValues.AverageTurnover">
                                    <span class="marketvalue__container__left__data__text">
                                        م. قيمه التداول
                                        <br>
                                        <span class="marketvalue__container__left__data__text--small">
                                            (3 شهر)
                                        </span>
                                    </span>
                                    <span class="marketvalue__container__left__data__number">
                                        {{formatter.format(CompanyOverview.companyStockSummary.avgTurnover3Months)}}
                                    </span>
                                </p>
                                <p class="marketvalue__container__left__data"
                                    v-show="Config.OverView.MarketValues.AverageTransactions">
                                    <span class="marketvalue__container__left__data__text">
                                        م.عدد الصفقات
                                        <br>
                                        <span class="marketvalue__container__left__data__text--small">
                                            (3 شهر)
                                        </span>
                                    </span>
                                    <span class="marketvalue__container__left__data__number">
                                        {{formatter.format(CompanyOverview.companyStockSummary.avgTransactions3Months)}}
                                    </span>
                                </p>
                                <p class="marketvalue__container__left__data"
                                    v-show="Config.OverView.MarketValues.AverageTransactions">
                                    <span class="marketvalue__container__left__data__text">
                                         &nbsp;
                                    </span>
                                    <span class="marketvalue__container__left__data__number">
                                        &nbsp;
                                    </span>
                                </p>
                                
                            </div>
                            <div class="marketvalue__container__change" v-show="Config.OverView.MarketValues.Change">
                                <p class="marketvalue__container__change__name">التغير</p>
                                    <p class="marketvalue__container__change__data">
                                    <span class="marketvalue__container__change__data__period">شهر</span>
                                    <span  v-bind:class="'marketvalue__container__change__data__perecntage '+ (CompanyOverview.companyStockSummary.month1Change < 0 ? 'red' : 'green')">
                                     {{CompanyOverview.companyStockSummary.month1Change < 0 ? '(' +formatter.format(Math.abs(CompanyOverview.companyStockSummary.month1Change))+ ')' : formatter.format(CompanyOverview.companyStockSummary.month1Change)}} %
                                     </span>
                                </p>
                                 
                                <p class="marketvalue__container__change__data">
                                    <span class="marketvalue__container__change__data__period">3 اشهر</span>
                                    <span v-bind:class="'marketvalue__container__change__data__perecntage '+ (CompanyOverview.companyStockSummary.month3Change < 0 ? 'red' : 'green')">
                                      {{CompanyOverview.companyStockSummary.month3Change < 0 ? '(' +formatter.format(Math.abs(CompanyOverview.companyStockSummary.month3Change))+ ')' : formatter.format(CompanyOverview.companyStockSummary.month3Change)}} %
                                    </span>
                                </p>
                                <p class="marketvalue__container__change__data">
                                    <span class="marketvalue__container__change__data__period">6 اشهر</span>
                                    <span v-bind:class="'marketvalue__container__change__data__perecntage '+ (CompanyOverview.companyStockSummary.month6Change < 0 ? 'red' : 'green')">
                                     {{CompanyOverview.companyStockSummary.month6Change < 0 ? '(' +formatter.format(Math.abs(CompanyOverview.companyStockSummary.month6Change))+ ')' : formatter.format(CompanyOverview.companyStockSummary.month6Change)}} %</span>
                                </p>
                                 <p class="marketvalue__container__change__data">
                                    <span class="marketvalue__container__change__data__period">12 اشهر</span>
                                    <span v-bind:class="'marketvalue__container__change__data__perecntage '+ (CompanyOverview.companyStockSummary.ytdChange < 0 ? 'red' : 'green')">
                                     {{CompanyOverview.companyStockSummary.ytdChange < 0 ? '(' +formatter.format(Math.abs(CompanyOverview.companyStockSummary.ytdChange))+ ')' : formatter.format(CompanyOverview.companyStockSummary.ytdChange)}} %</span>
                                </p>
                                <p class="marketvalue__container__change__data">
                                    <span class="marketvalue__container__change__data__period">من بدايه العام</span>
                                    <span v-bind:class="'marketvalue__container__change__data__perecntage '+ (CompanyOverview.companyStockSummary.ybgnChange < 0 ? 'red' : 'green')" >
                                     {{CompanyOverview.companyStockSummary.ybgnChange < 0 ? '(' +formatter.format(Math.abs(CompanyOverview.companyStockSummary.ybgnChange))+ ')' : formatter.format(CompanyOverview.companyStockSummary.ybgnChange)}} %
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="annual-reports" v-cloak v-show="Config.OverView.AnnualReport">
                        <h2 class="annual-reports__title">التقارير</h2>
                        <p class="annual-reports__number">التقرير السنوي {{CompanyOverview.financialResultPdf.year}}</p>
                        <div v-show="!Loading.FinancialResultPdf"
                            v-for="file in CompanyOverview.financialResultPdf.files.slice(0,Config.OverView.AnnualReportItems)">
                            <a v-bind:href="file.fileURLAr" class="annual-reports__download">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55.9" height="74.534"
                                    viewBox="0 0 55.9 74.534">
                                    <path id="Icon_awesome-file-pdf" data-name="Icon awesome-file-pdf"
                                        d="M26.48,37.281c-.728-2.329-.713-6.827-.291-6.827C27.412,30.454,27.3,35.826,26.48,37.281Zm-.247,6.871A67.173,67.173,0,0,1,22.1,53.28c2.664-1.019,5.677-2.5,9.157-3.188A18.857,18.857,0,0,1,26.232,44.153ZM12.534,62.32c0,.116,1.922-.786,5.081-5.852C16.639,57.385,13.378,60.035,12.534,62.32ZM36.1,23.292H55.9V71.04a3.485,3.485,0,0,1-3.494,3.494H3.494A3.485,3.485,0,0,1,0,71.04V3.494A3.485,3.485,0,0,1,3.494,0H32.609V19.8A3.5,3.5,0,0,0,36.1,23.292ZM34.938,48.3a14.611,14.611,0,0,1-6.216-7.832c.655-2.693,1.689-6.784.9-9.346-.684-4.28-6.172-3.858-6.958-.99-.728,2.664-.058,6.42,1.179,11.209a136.7,136.7,0,0,1-5.939,12.49c-.015,0-.015.015-.029.015-3.945,2.023-10.714,6.478-7.934,9.9a4.523,4.523,0,0,0,3.13,1.456c2.606,0,5.2-2.62,8.895-9,3.756-1.237,7.876-2.78,11.5-3.377a22.062,22.062,0,0,0,9.317,2.839c4.251,0,4.542-4.658,2.868-6.318C43.629,47.37,37.747,47.937,34.938,48.3ZM54.881,15.285,40.615,1.019A3.491,3.491,0,0,0,38.14,0h-.873V18.633H55.9v-.888A3.483,3.483,0,0,0,54.881,15.285ZM44.094,52.45c.6-.393-.364-1.732-6.231-1.31C43.265,53.44,44.094,52.45,44.094,52.45Z"
                                        fill="#fff" />
                                </svg>
                                <span>Q1 عربي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="37.471" height="45.5"
                                    viewBox="0 0 37.471 45.5">
                                    <path id="Icon_material-file-download" data-name="Icon material-file-download"
                                        d="M44.971,20.559H34.265V4.5H18.206V20.559H7.5L26.235,39.294ZM7.5,44.647V50H44.971V44.647Z"
                                        transform="translate(-7.5 -4.5)" fill="#fff" />
                                </svg>
                            </a>
                            <a v-bind:href="file.fileURLEn" class="annual-reports__download">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55.9" height="74.534"
                                    viewBox="0 0 55.9 74.534">
                                    <path id="Icon_awesome-file-pdf" data-name="Icon awesome-file-pdf"
                                        d="M26.48,37.281c-.728-2.329-.713-6.827-.291-6.827C27.412,30.454,27.3,35.826,26.48,37.281Zm-.247,6.871A67.173,67.173,0,0,1,22.1,53.28c2.664-1.019,5.677-2.5,9.157-3.188A18.857,18.857,0,0,1,26.232,44.153ZM12.534,62.32c0,.116,1.922-.786,5.081-5.852C16.639,57.385,13.378,60.035,12.534,62.32ZM36.1,23.292H55.9V71.04a3.485,3.485,0,0,1-3.494,3.494H3.494A3.485,3.485,0,0,1,0,71.04V3.494A3.485,3.485,0,0,1,3.494,0H32.609V19.8A3.5,3.5,0,0,0,36.1,23.292ZM34.938,48.3a14.611,14.611,0,0,1-6.216-7.832c.655-2.693,1.689-6.784.9-9.346-.684-4.28-6.172-3.858-6.958-.99-.728,2.664-.058,6.42,1.179,11.209a136.7,136.7,0,0,1-5.939,12.49c-.015,0-.015.015-.029.015-3.945,2.023-10.714,6.478-7.934,9.9a4.523,4.523,0,0,0,3.13,1.456c2.606,0,5.2-2.62,8.895-9,3.756-1.237,7.876-2.78,11.5-3.377a22.062,22.062,0,0,0,9.317,2.839c4.251,0,4.542-4.658,2.868-6.318C43.629,47.37,37.747,47.937,34.938,48.3ZM54.881,15.285,40.615,1.019A3.491,3.491,0,0,0,38.14,0h-.873V18.633H55.9v-.888A3.483,3.483,0,0,0,54.881,15.285ZM44.094,52.45c.6-.393-.364-1.732-6.231-1.31C43.265,53.44,44.094,52.45,44.094,52.45Z"
                                        fill="#fff" />
                                </svg>
                                <span>Q1 إنجليزي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="37.471" height="45.5"
                                    viewBox="0 0 37.471 45.5">
                                    <path id="Icon_material-file-download" data-name="Icon material-file-download"
                                        d="M44.971,20.559H34.265V4.5H18.206V20.559H7.5L26.235,39.294ZM7.5,44.647V50H44.971V44.647Z"
                                        transform="translate(-7.5 -4.5)" fill="#fff" />
                                </svg>
                            </a>
                        </div>
                        <a href="#" v-on:click="LoadPage('Financial-Reports', loadCompanyFReports)"
                            class="annual-reports__more">
                            <span>المزيد</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                    <div class="calender" v-cloak v-show="Config.OverView.Calendar">
                        <h2 class="calender__title">المفكرة</h2>
                        <div class="calender__container"
                            v-for="event in getEventForOverView().slice(0,Config.OverView.CalendarItems)">
                            <div class="calender__container__date">
                                <span>{{new Date(event.occursOn).getDate()}}</span> <br>
                                <span>{{getMonthNameAr(new Date(event.occursOn).toLocaleString('en-US', { month:
                                    '2-digit' }))}}</span> <br>
                                <span>{{new Date(event.occursOn).getFullYear()}}</span>
                            </div>
                            <div class="calender__container__text">
                                <span class="calender__container__text__category">
                                    {{event.titleAe}}
                                </span>
                                <p class="calender__container__text__details"
                                    v-html="event.descriptionAr.substring(0,200)+'...'">

                                </p>
                                <p class="calender__container__text__companies">
                                    <span class="calender__container__text__companies__first">
                                        {{event.eventLocationAr}}
                                    </span>
                                    <span class="calender__container__text__companies__last"
                                        v-on:click="openEvent(event.calendarEventID)">
                                        اقرأ
                                    </span>
                                </p>
                            </div>
                        </div>

                        <div class="calender__more" v-on:click="openEvent(0)">
                            <span>المزيد</span>
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </div>
                    <div class="Disclosures" v-cloak v-show="Config.OverView.Disclosures">
                        <h2 class="Disclosures__title">الإفصاحات</h2>
                        <div class="Disclosures__container" v-show="!Loading.CompanyOverview"
                            v-for="Article in CompanyOverview.discloser.slice(0,Config.OverView.DisclosuresItems)">
                            <div class="Disclosures__container__text">
                                <p class="Disclosures__container__text__details">
                                    {{Article.title}}
                                </p>
                                <p class="Disclosures__container__text__companies">
                                    <span
                                        class="Disclosures__container__text__companies__first">{{Article.articleSourceName}}
                                        {{Article.publishedOn}}</span>
                                    <span class="Disclosures__container__text__companies__last"
                                        v-on:click="openNews('pr__disclosures',Article.articleID,Article)">
                                        التفاصيل
                                    </span>
                                </p>
                            </div>
                        </div>

                        <div class="Disclosures__more" v-on:click="openNews('pr__disclosures',0)">
                            <span>المزيد</span>
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </div>
                    <div class="financial-ratios" v-show="Config.OverView.FinancialRatios">
                        <p class="financial-ratios__title">المؤشرات المالية</p>
                        <ul class="financial-ratios__list">
                            <li class="financial-ratios__list__item">
                                <span class="financial-ratios__list__item__name">المؤشرات المالية</span>
                                <span class="financial-ratios__list__item__number">الحالي</span>
                            </li>
                            <li class="financial-ratios__list__item"
                                v-for="fr in CompanyOverview.financialRatios.fields"
                                v-if="!Config.OverView.ExcludeFromFinancialRatios.includes(fr.nameEn)">
                                <span class="financial-ratios__list__item__name">{{fr.nameAr}}</span>
                                <span class="financial-ratios__list__item__number">{{fr.values.value}}</span>
                            </li>
                        </ul>
                        <a href="#" v-on:click="LoadPage('Financial-Ratios', loadCompanyFRatios)"
                            class="financial-ratios__more">
                            <span class="financial-ratios__more__name">المزيد</span>
                            <span class="financial-ratios__more__icon"><i class="fas fa-arrow-left"></i></span>
                        </a>
                    </div>
                    <div class="corporate-actions" v-cloak v-show="Config.OverView.CorporateActions.Visible">
                        <p class="corporate-actions__title">إجراءات الشركة</p>
                        <ul class="corporate-actions__tabs">
                            <li data-cont=".corporate-actions-recent-change" class="active"
                                v-show="CompanyOverview.cpaitalSummary != null && Config.OverView.CorporateActions.RecentChanges.Visible">
                                التغير في رأس المال</li>
                            <li data-cont=".corporate-actions-recent-dividends"
                                v-show="Config.OverView.CorporateActions.RecentDividends.Visible"
                                v-bind:class="CompanyOverview.cpaitalSummary == null? 'active' : ''">أحدث التوزيعات
                                النقدية</li>
                        </ul>
                        <div class="corporate-actions__container">
                            <ul class="corporate-actions__list corporate-actions-recent-change"
                                v-show="CompanyOverview.cpaitalSummary != null && Config.OverView.CorporateActions.RecentChanges.Visible">
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentChanges.PreviousCapital">
                                    <span class="corporate-actions__list__item__name">رأس المال السابق</span>
                                    <span class="corporate-actions__list__item__number">
                                        {{formatter.format(CompanyOverview.cpaitalSummary ?
                                        CompanyOverview.cpaitalSummary.currentCapital : 0)}} <br>
                                        {{CompanyOverview.cpaitalSummary ?
                                        CompanyOverview.cpaitalSummary.measuringUnitNameAr : ""}}
                                        {{CompanyOverview.cpaitalSummary ? CompanyOverview.cpaitalSummary.currencyNameAr
                                        : ""}}</span>
                                </li>
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentChanges.PreviousNoShares">
                                    <span class="corporate-actions__list__item__name">عدد الأسهم <br> قبل التغير</span>
                                    <span class="corporate-actions__list__item__number">{{CompanyOverview.cpaitalSummary
                                        ? CompanyOverview.cpaitalSummary.currentShares : ""}}</span>
                                </li>
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentChanges.CapitalChange">
                                    <span class="corporate-actions__list__item__name">نسبة التغير</span>
                                    <span
                                        class="corporate-actions__list__item__number">{{((CompanyOverview.cpaitalSummary
                                        ? CompanyOverview.cpaitalSummary.newCapital : 0) -
                                        (CompanyOverview.cpaitalSummary ? CompanyOverview.cpaitalSummary.currentCapital
                                        : 0))/100}} %</span>
                                </li>
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentChanges.CurrentCapital">
                                    <span class="corporate-actions__list__item__name">رأس المال بعد التغير <br> (مليون
                                        ريال)</span>
                                    <span
                                        class="corporate-actions__list__item__number">{{formatter.format(CompanyOverview.cpaitalSummary
                                        ? CompanyOverview.cpaitalSummary.newCapital : 0)}}</span>
                                </li>
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentChanges.CurrentShares">
                                    <span class="corporate-actions__list__item__name">عدد الأسهم بعد <br> التغير
                                        (مليون)</span>
                                    <span
                                        class="corporate-actions__list__item__number">{{formatter.format(CompanyOverview.cpaitalSummary
                                        ? CompanyOverview.cpaitalSummary.newShares : 0)}}</span>
                                </li>
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentChanges.Type">
                                    <span class="corporate-actions__list__item__name">النوع</span>
                                    <span class="corporate-actions__list__item__number">{{CompanyOverview.cpaitalSummary
                                        ? CompanyOverview.cpaitalSummary.companyCapitalStatusNameAr : ""}}</span>
                                </li>
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentChanges.Announcement">
                                    <span class="corporate-actions__list__item__name">تاريخ الإعلان</span>
                                    <span class="corporate-actions__list__item__number">{{CompanyOverview.cpaitalSummary
                                        ? new Date(CompanyOverview.cpaitalSummary.announcedDate).toLocaleDateString() :
                                        ""}}</span>
                                </li>
                            </ul>
                            <ul class="'corporate-actions__list corporate-actions-recent-dividends"
                                v-show="Config.OverView.CorporateActions.RecentDividends.Visible"
                                v-bind:style="CompanyOverview.cpaitalSummary == null ? 'display:block;' :''">
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentDividends.Capital">
                                    <span class="corporate-actions__list__item__name">رأس المال <br> (مليون ريال)</span>
                                    <span class="corporate-actions__list__item__number">
                                        {{formatter.format(CompanyOverview.dividandInfo.capital)}}</span>
                                </li>
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentDividends.Shares">
                                    <span class="corporate-actions__list__item__name">عدد الأسهم <br> (مليون)</span>
                                    <span
                                        class="corporate-actions__list__item__number">{{formatter.format(CompanyOverview.dividandInfo.numberOfShares)}}</span>
                                </li>
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentDividends.DividendsPerCapital">
                                    <span class="corporate-actions__list__item__name">النسبة من رأس المال</span>
                                    <span
                                        class="corporate-actions__list__item__number">{{formatter.format(CompanyOverview.dividandInfo.dividendPercentage)}}
                                        %</span>
                                </li>
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentDividends.CashDividend">
                                    <span class="corporate-actions__list__item__name">توزيعات أرباح نقدية</span>
                                    <span
                                        class="corporate-actions__list__item__number">{{formatter.format(CompanyOverview.dividandInfo.cashDividend)}}
                                        {{CompanyOverview.dividandInfo.measuringUnitNameAr}}
                                        {{CompanyOverview.dividandInfo.currencyNameAr}}</span>
                                </li>
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentDividends.DividendPolicy">
                                    <span class="corporate-actions__list__item__name">سياسة توزيع الأرباح</span>
                                    <span
                                        class="corporate-actions__list__item__number">{{CompanyOverview.dividandInfo.dividendPolicy}}</span>
                                </li>
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentDividends.Type">
                                    <span class="corporate-actions__list__item__name">النوع</span>
                                    <span
                                        class="corporate-actions__list__item__number">{{CompanyOverview.dividandInfo.companyDividendStatusNameAr}}</span>
                                </li>
                                <li class="corporate-actions__list__item" v-cloak
                                    v-show="Config.OverView.CorporateActions.RecentDividends.Announcement">
                                    <span class="corporate-actions__list__item__name">تاريخ الإعلان</span>
                                    <span class="corporate-actions__list__item__number">{{new
                                        Date(CompanyOverview.dividandInfo.dividendAnnouncedDate).toLocaleString('en-us')}}</span>
                                </li>

                            </ul>
                        </div>
                        <a href="#" v-on:click="LoadPage('Corporate-Actions', loadCorporateActions)"
                            class="corporate-actions__more">
                            <span class="corporate-actions__more__name">المزيد</span>
                            <span class="corporate-actions__more__icon"><i class="fas fa-arrow-left"></i></span>
                        </a>
                    </div>
                    <div class="latest-news" v-cloak v-show="Config.OverView.LatestNews">
                        <h2 class="latest-news__title">الأخبار</h2>
                        <div class="latest-news__container"
                            v-for="Article in CompanyOverview.latestNews.slice(0,Config.OverView.LatestNewsItems)">
                            <div class="latest-news__container__text">
                                <p class="latest-news__container__text__details">
                                    {{Article.title}}
                                </p>
                                <p class="latest-news__container__text__companies">
                                    <span
                                        class="latest-news__container__text__companies__first">{{Article.articleSourceName}}
                                        {{Article.publishedOn}}</span>
                                    <span class="latest-news__container__text__companies__last"
                                        v-on:click="openNews('pr__latestnews',Article.articleID,Article)">
                                        التفاصيل
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="latest-news__more" v-on:click="openNews('pr__latestnews',0)">
                            <span>المزيد</span>
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </div>
                    <div class="analyst-estimates" v-cloak v-show="Config.OverView.AnalystEstimates">
                        <h2 class="analyst-estimates__title">اراء و توقعات المحللين</h2>
                        <div class="analyst-estimates__container"
                            v-for="Article in CompanyOverview.analystEstimates.slice(0, Config.OverView.AnalystEstimatesItems)">
                            <div class="analyst-estimates__container__text">
                                <p class="analyst-estimates__container__text__details">
                                    {{Article.title}}
                                </p>
                                <p class="analyst-estimates__container__text__companies">
                                    <span class="analyst-estimates__container__text__companies__first">
                                        {{Article.articleSourceName}} {{Article.publishedOn}}
                                    </span>
                                    <span class="analyst-estimates__container__text__companies__last"
                                        v-on:click="openNews('pr__analyst_estimates',Article.articleID, Article)">اقرأ</span>
                                </p>
                            </div>
                        </div>
                        <div class="latest-news__more" v-on:click="openNews('pr__analyst_estimates',0)">
                            <span>المزيد</span>
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </div>
                    <div class="contact-ir" v-cloak v-show="Config.OverView.Contact.Visible">
                        <p class="contact-ir__title">التواصل</p>
                        <p class="contact-ir__address" v-cloak v-show="Config.OverView.Contact.Address"><i
                                class="fas fa-map-marker-alt"></i><span>العنوان</span></p>
                        <ul class="contact-ir__address-details" v-cloak v-show="Config.OverView.Contact.Address">
                            <li class="contact-ir__address-details__item">
                                {{CompanyOverview.profileInfo.addressAr}}
                            </li>
                            <li class="contact-ir__address-details__item">
                                {{CompanyOverview.profileInfo.poBoxAr}}
                            </li>

                        </ul>
                        <ul class="contact-ir__contact">
                            <li class="contact-ir__contact__item">
                                <span>
                                    <span style="margin-right: 10px;">Ext: 222</span>
                                    966 11 4000 612
                                </span>
                                <i class="fas fa-phone"></i>
                            </li>
                            <li class="contact-ir__contact__item">
                                <i class="fas fa-fax"></i>
                                <span>
                                    0593999005
                                </span>
                            </li>
                            <li class="contact-ir__contact__item">
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:Awpt-IR@alkhorayef.com" target="_blank">
                                    Awpt-IR@alkhorayef.com
                                </a>
                            </li>
                        </ul>
                        <div class="contact-ir__download" v-cloak v-show="Config.OverView.Contact.DwonloadApp.Visible">
                            <span class="contact-ir__download__link">تحميل التطبيق</span>
                            <div class="contact-ir__download__apps">
                                <div class="contact-ir__download__apps__apple" v-cloak
                                    v-show="Config.OverView.Contact.DwonloadApp.iOS">
                                    <a href="https://apps.apple.com/us/app/alkhorayef/id1578487723" target="_blank"
                                        class="contact-ir__download__apps__apple__link">
                                        <img class="contact-ir__download__apps__apple__link__img"
                                            src="assets/app-store-badge.png" alt="app-store">
                                    </a>
                                </div>
                                <div class="contact-ir__download__apps__andriod" v-cloak
                                    v-show="Config.OverView.Contact.DwonloadApp.Android">
                                    <a href="https://play.google.com/store/apps/details?id=com.danatev.ir_alkhorayef"
                                        target="_blank" class="contact-ir__download__apps__andriod__link">
                                        <img class="contact-ir__download__apps__andriod__link__img"
                                            src="assets/google-play-badge.png" alt="google-play">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widgets-container profile" v-cloak v-show="Config.Profile.Visible">
                    <div class="intro">
                        <div class="intro__container" v-cloak v-show="Config.Profile.Business">
                            <p class="intro__container__title">
                                مجال عمل الشركة
                            </p>
                            <p class="intro__container__text" v-html="CompanyProfile.profileInfo.overviewAr">
                            </p>
                        </div>
                        <div class="intro__container" v-cloak v-show="Config.Profile.Overview">
                            <p class="intro__container__title">
                                نبذة موسعة
                            </p>
                            <p class="intro__container__text">
                                تتمثل أنشطة الشركة وفقًا لسجلها التجاري الرئيسي وسجلاتها الفرعية بالآتي: تمديدات خطوط
                                المياه بين المدن وداخلها وإنشاء شبكات جديدة وصيانتها، وإنشاء وإصلاح المحطات والخطوط
                                الرئيسية لتوزيع المياه، وإنشاء وإصلاح قنوات الري والسقي وأبراج تخزين الماء الرئيسية وحفر
                                آبار المياه وصيانتها، وإنشاء وإصلاح محطات ومشاريع الصرف الصحي وشبكات المجاري والمضخات،
                                وإنشاء السدود. إصلاح وصيانة الأنابيب وخطوط الأنابيب وأجهزة تنقية المياه، وجمع المياه
                                وتنقيتها والتخلص من مياه المجاري، وتشغيل شبكات ومرافق معالجة الصرف الصحي، وتمديد أنابيب
                                النفط والغاز، وحفر آبار المياه الأنبوبية، وتمديدات أنابيب الري وصيانتها وإصلاحها، وإدارة
                                المشاريع الانشائية. البيع بالتجزئة للأدوات الكهربائية وتمديداتها، وبيع أجهزة القياس
                                والرقابة ومعدات وأجهزة الملاحة، وبيع معدات ضخ المياه، وبيع أجهزة ومعدات ومستلزمات تنقية
                                المياه بالتجزئة، والبيع بالتجزئة للمولدات الكهربائية ولوازمها. نقل وتوزيع المياه، وإنشاء
                                وإصلاح الطرق والشوارع والأرصفة ومستلزمات الطرق، وإنشاء محطات الطاقة الكهربائية
                                والمحولات، وإنشاء أرصفة الموانئ والإنشاءات البحرية، وتنظيف الممرات المائية، وسحب المياه
                                الجوفية وتجفيف المواقع، وتركيب شبكات الطاقة الشمسية وصيانتها وإصلاحها، وأنشطة إدارة
                                مشاريع كفاءة الطاقة.
                            </p>
                        </div>
                    </div>
                    <!--<div class="Financials-Highlights" v-cloak v-show="Config.Profile.FinancialsHighlights">
                        <div class="Financials-Highlights__currency">
                            <p class="Financials-Highlights__title">
                                ملخص النتائج المالية <span
                                    class="Financials-Highlights__currency__type Financials-Highlights__currency__type-ar">(مليون
                                    ريال)</span>
                            </p>
                            <ul class="Financials-Highlights-tabs" v-cloak v-show="Config.Profile.CurrencyConversion">
                                <li data-cont="Financials_Highlights__usd"
                                    v-on:click="setCurrencyFinancialHighlight('USD')"
                                    class="Financials-Highlights-tabs__usd Financials-Highlights-tabs__usd-ar">دولار
                                </li>
                                <li data-cont="Financials_Highlights__riyal"
                                    v-on:click="setCurrencyFinancialHighlight('RIYAL')"
                                    class="active Financials-Highlights-tabs__riyal Financials-Highlights-tabs__riyal-ar">
                                    ريال</li>
                            </ul>
                        </div>
                        <div class="Financials-Highlights__container">
                            <div class="Financials-Highlights__riyal">
                                <span id="Financials-Highlights__riyal__panner-left"
                                    class="Financials-Highlights__riyal__panner" data-scroll-modifier="-1">
                                    <i class="far fa-arrow-alt-circle-left"></i>
                                </span>
                                <span id="Financials-Highlights__riyal__panner-right"
                                    class="Financials-Highlights__riyal__panner" data-scroll-modifier="1">
                                    <i class="far fa-arrow-alt-circle-right"></i>
                                </span>
                                <div class="Financials-Highlights__riyal__container">
                                    <table class="Financials-Highlights__table">
                                        <tr class="Financials-Highlights__table__row">
                                            <th class="Financials-Highlights__table__row__header">
                                                <p class="Financials-Highlights__table__row__header__text">
                                                    الوصف
                                                </p>
                                            </th>
                                            <th class="Financials-Highlights__table__row__header" v-cloak
                                                v-show="Config.Profile.Charts">
                                                <p class="Financials-Highlights__table__row__header__text">
                                                    تشارت
                                                </p>
                                            </th>
                                            <th class="Financials-Highlights__table__row__header"
                                                v-for="year in getFinancialHighlightYears()"
                                                v-if="!Config.Profile.ExcludeFromFinancialYear.includes(year)">
                                                <p class="Financials-Highlights__table__row__header__text">
                                                    {{year}}
                                                </p>
                                            </th>
                                        </tr>
                                        <tr class="Financials-Highlights__table__row"
                                            v-for="financialHighlight in CompanyProfile.financialHighlights"
                                            v-if="!Config.Profile.ExcludeFromFinancialField.includes(financialHighlight.DisplayNameEn)">
                                            <td class="Financials-Highlights__table__row__data desc">
                                                <p class="Financials-Highlights__table__row__data__text">
                                                    {{financialHighlight.DisplayNameAr}}
                                                </p>
                                            </td>
                                            <td class="Financials-Highlights__table__row__data" v-cloak
                                                v-show="Config.Profile.Charts">
                                                <p class="Financials-Highlights__table__row__data__text"
                                                    v-on:click="showChartForFinancialHighlight(financialHighlight)">
                                                    <svg class="Financials-Highlights__table__row__data__text__icon"
                                                        xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                                        viewBox="0 0 56 56">
                                                        <path id="Icon_material-insert-chart"
                                                            data-name="Icon material-insert-chart"
                                                            d="M54.278,4.5H10.722A6.241,6.241,0,0,0,4.5,10.722V54.278A6.241,6.241,0,0,0,10.722,60.5H54.278A6.241,6.241,0,0,0,60.5,54.278V10.722A6.241,6.241,0,0,0,54.278,4.5ZM23.167,48.056H16.944V26.278h6.222Zm12.444,0H29.389V16.944h6.222Zm12.444,0H41.833V35.611h6.222Z"
                                                            transform="translate(-4.5 -4.5)" fill="#fff" />
                                                    </svg>
                                                </p>
                                            </td>
                                            <td class="Financials-Highlights__table__row__data"
                                                v-for="year in getFinancialHighlightYears()"
                                                v-if="!Config.Profile.ExcludeFromFinancialYear.includes(year)">
                                                <p class="Financials-Highlights__table__row__data__text">
                                                    {{formatter.format(financialHighlight[year])}}
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="Financials-Highlights__popup">
                            <div class="Financials-Highlights__popup__overlay">
                                <div class="Financials-Highlights__popup__overlay__chart">
                                    <div class="Financials-Highlights__popup__overlay__chart__close">
                                        <img src="assets/calendar-closeBtn.png" alt="close">
                                    </div>
                                    <div class="Financials-Highlights__popup__overlay__chart__graph">
                                        <div id="financialhighligh_chart" style="width:100%; height:260px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="stock-information" v-cloak v-show="Config.Profile.StockInfo.Visible">
                        <p class="stock-information__title">
                            بيانات السهم
                        </p>
                        <div class="stock-information__container">
                            <div class="stock-information__riyal riyal">
                                <ul class="stock-information__list">
                                    <li class="stock-information__list__item" v-cloak
                                        v-show="Config.Profile.StockInfo.SharesOutstanding">
                                        <span class="stock-information__list__item__name">عدد الأسهم (مليون)</span>
                                        <span class="stock-information__list__item__number">
                                            {{CompanyProfile.stockInfo.numberOfShares}}
                                        </span>
                                    </li>
                                    <li class="stock-information__list__item" v-cloak
                                        v-show="Config.Profile.StockInfo.ParValue">
                                        <span class="stock-information__list__item__name">القيمة الإسمية للسهم
                                            (ريال)</span>
                                        <span class="stock-information__list__item__number">
                                            {{CompanyProfile.stockInfo.nominalValue}}
                                        </span>
                                    </li>
                                    <li class="stock-information__list__item" v-cloak
                                        v-show="Config.Profile.StockInfo.BookValue">
                                        <span class="stock-information__list__item__name">القيمة الدفترية للسهم
                                            (ريال)</span>
                                        <span class="stock-information__list__item__number">
                                            {{CompanyProfile.stockInfo.bookValue}}
                                        </span>
                                    </li>
                                    <li class="stock-information__list__item" v-cloak
                                        v-show="Config.Profile.StockInfo.MarketCap">
                                        <span class="stock-information__list__item__name">القيمة السوقية (مليون)</span>
                                        <span class="stock-information__list__item__number">
                                            {{CompanyProfile.stockInfo.marketValue}}
                                        </span>
                                    </li>
                                </ul>
                                <a href="#" v-on:click="LoadPage('Financial-Ratios', loadCompanyFRatios)"
                                    class="stock-information__more">
                                    <span class="stock-information__more__name">المؤشرات المالية</span>
                                    <span class="stock-information__more__icon"><i class="fas fa-arrow-left"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="trading-data" v-cloak v-show="Config.Profile.TradingData.Visible">
                        <p class="trading-data__title">بيانات التداول</p>
                        <ul class="trading-data__list">
                            <li class="trading-data__list__item" v-cloak
                                v-show="Config.Profile.TradingData.TradingMarket">
                                <span class="trading-data__list__item__name">سوق التداول :</span>
                                <span class="trading-data__list__item__number">
                                    {{CompanyProfile.tradingData.marketNameAr}}
                                </span>
                            </li>
                            <li class="trading-data__list__item" v-cloak
                                v-show="Config.Profile.TradingData.FiscalYearEnd">
                                <span class="trading-data__list__item__name">نهاية السنة المالية :</span>
                                <span class="trading-data__list__item__number">
                                    {{CompanyProfile.tradingData.yearEndMonth}}
                                </span>
                            </li>
                            <li class="trading-data__list__item" v-cloak v-show="Config.Profile.TradingData.FreeFloat">
                                <span class="trading-data__list__item__name">الأسهم الحرة (مليون) :</span>
                                <span class="trading-data__list__item__number">
                                    {{CompanyProfile.tradingData.freeFloatedShareMarketValue}}
                                </span>
                            </li>
                            <li class="trading-data__list__item" v-cloak
                                v-show="Config.Profile.TradingData.FreeFloatPercent">
                                <span class="trading-data__list__item__name">الأسهم الحرة % :</span>
                                <span class="trading-data__list__item__number">
                                    {{CompanyProfile.tradingData.percentage}}
                                </span>
                            </li>
                            <li class="trading-data__list__item" v-cloak
                                v-show="Config.Profile.TradingData.WeightinIndexPercent">
                                <span class="trading-data__list__item__name">وزن الشركة % :</span>
                                <span class="trading-data__list__item__number">
                                    {{CompanyProfile.tradingData.companyWeight}}
                                </span>
                            </li>
                            <li class="trading-data__list__item" v-cloak
                                v-show="Config.Profile.TradingData.AverageVolume">
                                <span class="trading-data__list__item__name">متوسط حجم التداول <br> لآخر 3 أشهر :</span>
                                <span class="trading-data__list__item__number">
                                    {{CompanyProfile.tradingData.avgVolume3Months}}
                                </span>
                            </li>
                            <li class="trading-data__list__item" v-cloak
                                v-show="Config.Profile.TradingData.AverageTransactions">
                                <span class="trading-data__list__item__name">متوسط ​​عدد التداولات <br> في آخر 3 أشهر
                                    :</span>
                                <span class="trading-data__list__item__number">
                                    {{CompanyProfile.tradingData.avgTransactions3Months}}
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="Major-Shareholders" v-cloak v-show="Config.Profile.MajorShareholders.Visible">
                        <p class="Major-Shareholders__title">
                            المساهمين الرئيسيين
                        </p>
                        <div class="Major-Shareholders__container">
                            <table class="Major-Shareholders__table">
                                <tr class="Major-Shareholders__table__row">
                                    <td class="Major-Shareholders__table__row__header">
                                        <p class="Major-Shareholders__table__row__header__text">
                                            اسم المساهم
                                        </p>
                                    </td>
                                    <td class="Major-Shareholders__table__row__header" v-cloak
                                        v-show="Config.Profile.MajorShareholders.NumberShares">
                                        <p class="Major-Shareholders__table__row__header__text">
                                            عدد الأسهم (مليون)
                                        </p>
                                    </td>
                                    <td class="Major-Shareholders__table__row__header" v-cloak
                                        v-show="Config.Profile.MajorShareholders.Holding">
                                        <p class="Major-Shareholders__table__row__header__text">
                                            نسبة الملكية
                                        </p>
                                    </td>
                                </tr>
                                <tr class="Major-Shareholders__table__row"
                                    v-for="majorShareholde in CompanyProfile.majorShareholder">
                                    <td class="Major-Shareholders__table__row__data">
                                        <p class="Major-Shareholders__table__row__data__text">
                                            {{majorShareholde.shareholderNameAr}}
                                        </p>
                                    </td>
                                    <td class="Major-Shareholders__table__row__data" v-cloak
                                        v-show="Config.Profile.MajorShareholders.NumberShares">
                                        <p class="Major-Shareholders__table__row__data__text">
                                            {{majorShareholde.noOfShares}}
                                        </p>
                                    </td>
                                    <td class="Major-Shareholders__table__row__data" v-cloak
                                        v-show="Config.Profile.MajorShareholders.Holding">
                                        <p class="Major-Shareholders__table__row__data__text">
                                            {{majorShareholde.percentage}} %
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <a href="#" v-on:click="LoadPage('Major-Shareholder', loadMajorShareholders)"
                            class="Major-Shareholders__more">
                            <span class="Major-Shareholders__more__name">المزيد</span>
                            <span class="Major-Shareholders__more__icon"><i class="fas fa-arrow-left"></i></span>
                        </a>
                    </div>
                    <div class="milestones" v-cloak v-show="Config.Profile.Milestones">
                        <p class="milestones__title">التطورات الرئيسية</p>
                        <ul class="milestones__list">
                            <li class="milestones__list__item"
                                v-for="milestone in CompanyProfile.milestones.slice(0, Config.Profile.MilestonesItems)">
                                <span class="milestones__list__item__number">
                                    {{new Date(milestone.fullDate).toLocaleDateString('en-US')}}
                                </span>
                                <span class="milestones__list__item__name">
                                    {{milestone.titleAr}}
                                </span>
                            </li>
                        </ul>
                        <!-- <a href="#" class="milestones__more">
                            <span class="milestones__more__name">More</span>
                            <span class="milestones__more__icon"><i class="fas fa-arrow-right"></i></span>
                        </a> -->
                    </div>
                </div>
                <div class="widgets-container Chart">
                    <div class="main-chart">
                        <div class="main-chart__select-container">
                            <select @change="chartOptionChanged" id="chart_type">
                                <option value="line">Line</option>
                                <option value="area">Area</option>
                                <option value="ohlc">OHLC</option>
                                <option value="spline">Spline</option>
                                <option value="areaspline">Area spline</option>
                            </select>
                            <!--<select @change="chartOptionChanged" id="chart_perid">
                                <option value="AY">All</option>
                                <option value="5Y">5 Years</option>
                                <option value="2Y">2 Years</option>
                                <option value="1Y">1 Years</option>
                                <option value="6M">6 Month</option>
                                <option value="3M">3 Month</option>
                                <option value="5D">5 Days</option>
                                <option value="1D">One Day</option>
                            </select>-->
                        </div>
                        <h2 class="main-chart__company-name">{{CompanyOverview.profileInfo.companyNameAr}}</h2>
                        <div id="mainChart" tyle="height: 200px;width:100%; min-height: 75vh;"></div>
                    </div>
                    <div class="filter">
                        <form class="filter__search">
                            <span class="filter__search__name">
                                التاريخ
                            </span>
                            <span class="filter__search__input">
                                <input type="text" id="chart_calendar" value="2021-09-01 / 2021-09-30"
                                    class="chart_calendar"
                                    v-bind:placeholder="CompanyChart.fromDate + ', ' + CompanyChart.toDate">
                                <span class="filter__search__input__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49.087" height="56.099"
                                        viewBox="0 0 49.087 56.099">
                                        <path id="Icon_awesome-calendar-alt" data-name="Icon awesome-calendar-alt"
                                            d="M0,50.84A5.261,5.261,0,0,0,5.259,56.1H43.828a5.261,5.261,0,0,0,5.259-5.259v-29.8H0ZM35.062,29.364a1.319,1.319,0,0,1,1.315-1.315H40.76a1.319,1.319,0,0,1,1.315,1.315v4.383a1.319,1.319,0,0,1-1.315,1.315H36.377a1.319,1.319,0,0,1-1.315-1.315Zm0,14.025a1.319,1.319,0,0,1,1.315-1.315H40.76a1.319,1.319,0,0,1,1.315,1.315v4.383a1.319,1.319,0,0,1-1.315,1.315H36.377a1.319,1.319,0,0,1-1.315-1.315ZM21.037,29.364a1.319,1.319,0,0,1,1.315-1.315h4.383a1.319,1.319,0,0,1,1.315,1.315v4.383a1.319,1.319,0,0,1-1.315,1.315H22.352a1.319,1.319,0,0,1-1.315-1.315Zm0,14.025a1.319,1.319,0,0,1,1.315-1.315h4.383a1.319,1.319,0,0,1,1.315,1.315v4.383a1.319,1.319,0,0,1-1.315,1.315H22.352a1.319,1.319,0,0,1-1.315-1.315ZM7.012,29.364A1.319,1.319,0,0,1,8.327,28.05H12.71a1.319,1.319,0,0,1,1.315,1.315v4.383a1.319,1.319,0,0,1-1.315,1.315H8.327a1.319,1.319,0,0,1-1.315-1.315Zm0,14.025a1.319,1.319,0,0,1,1.315-1.315H12.71a1.319,1.319,0,0,1,1.315,1.315v4.383a1.319,1.319,0,0,1-1.315,1.315H8.327a1.319,1.319,0,0,1-1.315-1.315ZM43.828,7.012H38.568V1.753A1.758,1.758,0,0,0,36.815,0H33.309a1.758,1.758,0,0,0-1.753,1.753V7.012H17.531V1.753A1.758,1.758,0,0,0,15.778,0H12.272a1.758,1.758,0,0,0-1.753,1.753V7.012H5.259A5.261,5.261,0,0,0,0,12.272v5.259H49.087V12.272A5.261,5.261,0,0,0,43.828,7.012Z"
                                            fill="#fff"></path>
                                    </svg>
                                </span>
                            </span>
                            <button class="filter__search__btn" v-on:click="searchCompanyPrices">
                                بحث
                            </button>
                        </form>
                        <div class="filter__data" style="display:none;">
                            <a href="#" class="filter__data__link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="51.918" height="69.225"
                                    viewBox="0 0 51.918 69.225">
                                    <path id="Icon_awesome-file-pdf" data-name="Icon awesome-file-pdf"
                                        d="M24.594,34.626c-.676-2.163-.663-6.341-.27-6.341C25.459,28.285,25.351,33.274,24.594,34.626Zm-.23,6.382a62.387,62.387,0,0,1-3.84,8.477,49.786,49.786,0,0,1,8.5-2.961A17.514,17.514,0,0,1,24.364,41.007ZM11.641,57.881c0,.108,1.785-.73,4.719-5.435C15.454,53.3,12.425,55.758,11.641,57.881Zm21.89-36.248H51.918V65.98a3.237,3.237,0,0,1-3.245,3.245H3.245A3.237,3.237,0,0,1,0,65.98V3.245A3.237,3.237,0,0,1,3.245,0H30.286V18.388A3.254,3.254,0,0,0,33.531,21.633ZM32.449,44.861a13.57,13.57,0,0,1-5.773-7.274c.608-2.5,1.568-6.3.838-8.68-.635-3.975-5.733-3.583-6.463-.919-.676,2.474-.054,5.963,1.1,10.411A126.96,126.96,0,0,1,16.63,50c-.014,0-.014.014-.027.014-3.664,1.879-9.951,6.017-7.369,9.194a4.2,4.2,0,0,0,2.907,1.352c2.42,0,4.827-2.434,8.261-8.356a77.069,77.069,0,0,1,10.681-3.137A20.49,20.49,0,0,0,39.737,51.7c3.948,0,4.218-4.327,2.664-5.868-1.879-1.839-7.342-1.311-9.951-.973ZM50.972,14.2,37.722.946A3.242,3.242,0,0,0,35.424,0h-.811V17.306H51.918v-.825A3.235,3.235,0,0,0,50.972,14.2ZM40.953,48.714c.554-.365-.338-1.609-5.787-1.217C40.183,49.634,40.953,48.714,40.953,48.714Z"
                                        fill="#fff" />
                                </svg>
                            </a>
                            <a href="#" class="filter__data__link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="51.142" height="68.189"
                                    viewBox="0 0 51.142 68.189">
                                    <path id="Icon_awesome-file-alt" data-name="Icon awesome-file-alt"
                                        d="M29.833,18.113V0H3.2A3.189,3.189,0,0,0,0,3.2v61.8a3.189,3.189,0,0,0,3.2,3.2H47.945a3.189,3.189,0,0,0,3.2-3.2V21.309H33.029A3.206,3.206,0,0,1,29.833,18.113Zm8.524,31.431a1.6,1.6,0,0,1-1.6,1.6H14.384a1.6,1.6,0,0,1-1.6-1.6V48.478a1.6,1.6,0,0,1,1.6-1.6H36.758a1.6,1.6,0,0,1,1.6,1.6Zm0-8.524a1.6,1.6,0,0,1-1.6,1.6H14.384a1.6,1.6,0,0,1-1.6-1.6V39.954a1.6,1.6,0,0,1,1.6-1.6H36.758a1.6,1.6,0,0,1,1.6,1.6Zm0-9.589V32.5a1.6,1.6,0,0,1-1.6,1.6H14.384a1.6,1.6,0,0,1-1.6-1.6V31.431a1.6,1.6,0,0,1,1.6-1.6H36.758A1.6,1.6,0,0,1,38.356,31.431Zm12.785-15.2v.812H34.094V0h.812a3.194,3.194,0,0,1,2.264.932L50.209,13.984A3.186,3.186,0,0,1,51.142,16.235Z"
                                        fill="#fff" />
                                </svg>
                            </a>
                            <a href="#" class="filter__data__link">
                                <svg id="Icon_ionic-ios-print" data-name="Icon ionic-ios-print"
                                    xmlns="http://www.w3.org/2000/svg" width="68.188" height="68.189"
                                    viewBox="0 0 68.188 68.189">
                                    <path id="Path_3" data-name="Path 3"
                                        d="M9,18.935V51.718a2.63,2.63,0,0,0,2.623,2.623H48.34a2.63,2.63,0,0,0,2.623-2.623V18.935a2.63,2.63,0,0,0-2.623-2.623H11.623A2.63,2.63,0,0,0,9,18.935Z"
                                        transform="translate(4.113 13.848)" fill="#fff" />
                                    <g id="Group_116" data-name="Group 116" transform="translate(0 0)">
                                        <path id="Path_4" data-name="Path 4"
                                            d="M52.46,3.375H10.5A2.63,2.63,0,0,0,7.875,6V9.276a.658.658,0,0,0,.656.656h45.9a.658.658,0,0,0,.656-.656V6A2.63,2.63,0,0,0,52.46,3.375Z"
                                            transform="translate(2.616 -3.375)" fill="#fff" />
                                        <path id="Path_5" data-name="Path 5"
                                            d="M66.4,7.875H8.7a5.245,5.245,0,0,0-5.327,5.131V41.592A5.385,5.385,0,0,0,8.7,46.887h2.541a1.315,1.315,0,0,0,1.311-1.311V28.2a4.582,4.582,0,0,1,4.59-4.59H57.795a4.582,4.582,0,0,1,4.59,4.59V45.576A1.315,1.315,0,0,0,63.7,46.887h2.7a5.244,5.244,0,0,0,5.163-5.294V13.006A5.1,5.1,0,0,0,66.4,7.875Z"
                                            transform="translate(-3.375 2.616)" fill="#fff" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="chart-financials-highlights">
                        <div class="chart-financials-highlights__currency">
                            <p class="chart-financials-highlights__title">
                                التفاصيل المالية <span class="chart-financials-highlights__title__type">
                                    (مليون ريال)
                                </span>
                            </p>
                        </div>
                        <div class="chart-financials-highlights__container">
                            <div class="chart-financials-highlights__riyal">
                                <div class="chart-financials-highlights__data">
                                    <span id="chart-financials-highlights__pan-left"
                                        class="chart-financials-highlights__panner" data-scroll-modifier='-1'>
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </span>
                                    <span id="chart-financials-highlights__pan-right"
                                        class="chart-financials-highlights__panner" data-scroll-modifier='1'>
                                        <i class="far fa-arrow-alt-circle-left"></i>
                                    </span>
                                    <div class="chart-financials-highlights__data__date">
                                        <p class="chart-financials-highlights__data__date__day">التاريخ</p>
                                        <p class="chart-financials-highlights__data__date__day"
                                            v-for="charts_Data in CompanyChart.chartsData">
                                            {{new Date(charts_Data.forDate).toLocaleDateString('en-US')}}
                                        </p>
                                    </div>
                                    <div
                                        class="chart-financials-highlights__data__details chart-financials-highlights__data__details__riyal">
                                        <table class="chart-financials-highlights__data__details__table">
                                            <tr class="chart-financials-highlights__data__details__table__row">
                                                <th
                                                    class="chart-financials-highlights__data__details__table__row__head">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__head__text">
                                                        السعر
                                                    </p>
                                                </th>
                                                <th
                                                    class="chart-financials-highlights__data__details__table__row__head">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__head__text">
                                                        التغير
                                                    </p>
                                                </th>
                                                <th
                                                    class="chart-financials-highlights__data__details__table__row__head">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__head__text">
                                                        التغير (%)
                                                    </p>
                                                </th>
                                                <th
                                                    class="chart-financials-highlights__data__details__table__row__head">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__head__text">
                                                        حجم التداول
                                                    </p>
                                                </th>
                                                <th
                                                    class="chart-financials-highlights__data__details__table__row__head">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__head__text">
                                                        قيمة التداول
                                                    </p>
                                                </th>
                                                <th
                                                    class="chart-financials-highlights__data__details__table__row__head">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__head__text">
                                                        الافتتاح
                                                    </p>
                                                </th>
                                                <th
                                                    class="chart-financials-highlights__data__details__table__row__head">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__head__text">
                                                        الأعلى
                                                    </p>
                                                </th>
                                                <th
                                                    class="chart-financials-highlights__data__details__table__row__head">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__head__text">
                                                        الأدنى
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr class="chart-financials-highlights__data__details__table__row"
                                                v-for="charts_Data in CompanyChart.chartsData">
                                                <td
                                                    class="chart-financials-highlights__data__details__table__row__data">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__data__text">

                                                        {{formatter.format(charts_Data.close)}}
                                                    </p>
                                                </td>
                                                <td
                                                    v-bind:class="'chart-financials-highlights__data__details__table__row__data ' + (charts_Data.change < 0 ? 'red' : 'green')">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__data__text">
                                                        {{charts_Data.change < 0 ? '(' +
                                                            formatter.format(Math.abs(charts_Data.change)) + ')' :
                                                            formatter.format(charts_Data.change)}}% </p>
                                                </td>
                                                <td
                                                    v-bind:class="'chart-financials-highlights__data__details__table__row__data ' + (charts_Data.change < 0 ? 'red' : 'green')">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__data__text">
                                                        {{charts_Data.percentageChange < 0 ? '(' +
                                                            formatter.format(Math.abs(charts_Data.percentageChange))
                                                            + ')' : formatter.format(charts_Data.percentageChange)}}%
                                                            </p>
                                                </td>
                                                <td
                                                    class="chart-financials-highlights__data__details__table__row__data">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__data__text">
                                                        {{charts_Data.volume}}
                                                    </p>
                                                </td>
                                                <td
                                                    class="chart-financials-highlights__data__details__table__row__data">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__data__text">
                                                        {{charts_Data.amount}}
                                                    </p>
                                                </td>
                                                <td
                                                    class="chart-financials-highlights__data__details__table__row__data">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__data__text">
                                                        {{charts_Data.open}}
                                                    </p>
                                                </td>
                                                <td
                                                    class="chart-financials-highlights__data__details__table__row__data">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__data__text">
                                                        {{charts_Data.max}}
                                                    </p>
                                                </td>
                                                <td
                                                    class="chart-financials-highlights__data__details__table__row__data">
                                                    <p
                                                        class="chart-financials-highlights__data__details__table__row__data__text">
                                                        {{charts_Data.min}}
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widgets-container Organisational-Structure">
                    <div class="structure">
                        <ul class="structure__tabs">
                            <li data-cont=".structure__executives" class="active">المدراء التنفيذيون</li>
                             <li data-cont=".structure__board" >
                                مجلس الإدارة
                            </li>
                        </ul>
                        <div class="structure__container" v-show="!Loading.CompanyOrganizationStructure">
                             <div class="structure__executives">
                                <div class="structure__executives__member structure__executives__member-one"
                                    v-for="(Individual,index) in getIndividualsByPosition(CompanyOrganizationStructure.individuals, 2)"
                                    v-bind:data-cont="'ind_profile_'+ Individual.individualID">
                                    <img class="structure__executives__member__img"
                                        v-on:click="showIndividualDetails(Individual.individualID)"
                                        v-bind:src="toAvatar(Individual.profilePicURL)" alt="member">
                                    <p class="structure__executives__member__name">
                                        <span v-on:click="showIndividualDetails(Individual.individualID)">
                                            {{Individual.nameAr}}</span>
                                    </p>
                                    <p class="structure__executives__member__title">
                                        <span
                                            v-on:click="showIndividualDetails(Individual.individualID)">{{Individual.positionNameAr}}
                                            <i class="fas fa-chevron-left"></i></span>
                                    </p>
                                </div>
                            </div>
                            <div class="structure__board">
                                <div class="structure__board__member structure__board__member-details-one"
                                    v-for="(Individual,index) in getIndividualsByPosition(CompanyOrganizationStructure.individuals, 1)"
                                    v-bind:data-cont="'ind_profile_'+ Individual.individualID">
                                    <img class="structure__board__member__img"
                                        v-on:click="showIndividualDetails(Individual.individualID)"
                                        v-bind:src="toAvatar(Individual.profilePicURL)" alt="member">
                                    <p class="structure__board__member__name">
                                        <span
                                            v-on:click="showIndividualDetails(Individual.individualID)">{{Individual.nameAr}}</span>
                                    </p>
                                    <p class="structure__board__member__title">
                                        <span
                                            v-on:click="showIndividualDetails(Individual.individualID)">{{Individual.positionNameAr}}
                                            <i class="fas fa-chevron-left"></i></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="structure__member-details structure__board__member-details-one"
                            v-for="Individual in CompanyOrganizationStructure.individuals"
                            v-bind:data-cont="'ind_details_'+ Individual.individualID">
                            <p class="structure__member-details__meta">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31.746" height="35.979"
                                    viewBox="0 0 31.746 35.979">
                                    <path id="Icon_material-subdirectory-arrow-right"
                                        data-name="Icon material-subdirectory-arrow-right"
                                        d="M31.746,12.7,19.048,0,16.042,3.005l7.6,7.577H0v25.4H4.233V14.815H23.64l-7.6,7.577L19.048,25.4Z"
                                        transform="translate(31.746 35.979) rotate(180)" />
                                </svg>
                                <span class="structure__member-details__meta__category">
                                    {{Individual.companyPositionTypeID == 1 ? 'مجلس إدارة' : 'المدراء التفيذيون'}}
                                </span>
                                <span class="structure__member-details__meta__slash">
                                    /
                                </span>
                                <span class="structure__member-details__meta__name">
                                    {{Individual.positionNameAr}} - {{Individual.nameAr}}
                                </span>
                            </p>
                            <div class="structure__member-details__profile">
                                <div class="structure__member-details__profile__img">
                                    <img v-bind:src="toAvatar(Individual.profilePicURL)" v-bind:alt="Individual.nameAr">
                                </div>
                                <div class="structure__member-details__profile__data">
                                    <p class="structure__member-details__profile__data__name">
                                        {{Individual.nameAr}}
                                    </p>
                                    <p class="structure__member-details__profile__data__title">
                                        {{Individual.positionNameAr}}
                                    </p>
                                    <!--<p class="structure__member-details__profile__data__social-media">
                                        <a href="#" target="_blank"
                                           class="structure__member-details__profile__data__social-media__link">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="68.481" height="55.619"
                                                 viewBox="0 0 68.481 55.619">
                                                <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter"
                                                      d="M61.442,17.242c.043.608.043,1.217.043,1.825C61.485,37.621,47.363,59,21.552,59A39.662,39.662,0,0,1,0,52.7a29.035,29.035,0,0,0,3.389.174,28.108,28.108,0,0,0,17.424-6A14.06,14.06,0,0,1,7.691,37.143a17.7,17.7,0,0,0,2.651.217,14.844,14.844,0,0,0,3.693-.478A14.037,14.037,0,0,1,2.781,23.108v-.174a14.135,14.135,0,0,0,6.344,1.781A14.056,14.056,0,0,1,4.78,5.944,39.894,39.894,0,0,0,33.719,20.631a15.844,15.844,0,0,1-.348-3.215,14.049,14.049,0,0,1,24.29-9.6,27.633,27.633,0,0,0,8.908-3.389,14,14,0,0,1-6.17,7.735,28.136,28.136,0,0,0,8.082-2.173,30.17,30.17,0,0,1-7.039,7.256Z"
                                                      transform="translate(0 -3.381)" fill="#fff" />
                                            </svg>
                                        </a>
                                        <a href="#" target="_blank"
                                           class="structure__member-details__profile__data__social-media__link">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="55.871" height="55.869"
                                                 viewBox="0 0 55.871 55.869">
                                                <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in"
                                                      d="M12.506,55.87H.923v-37.3H12.506Zm-5.8-42.389a6.74,6.74,0,1,1,6.708-6.772A6.765,6.765,0,0,1,6.708,13.481ZM55.858,55.87H44.3V37.712c0-4.327-.087-9.877-6.022-9.877-6.022,0-6.945,4.7-6.945,9.565V55.87H19.762v-37.3H30.871v5.088h.162a12.171,12.171,0,0,1,10.96-6.024c11.723,0,13.878,7.72,13.878,17.746V55.87Z"
                                                      transform="translate(0 -0.001)" fill="#fff" />
                                            </svg>
                                        </a>
                                    </p>-->
                                </div>
                            </div>
                            <div class="structure__member-details__about" v-html="Individual.resumeHighLightAr">
                            </div>
                            <div class="structure__member-details__keydates"
                                v-show="Individual.positionHistory != null">
                                <p class="structure__member-details__keydates__title">
                                    أهم التواريخ
                                </p>
                                <div class="structure__member-details__keydates__container">
                                    <table class="structure__member-details__keydates__table">
                                        <thead>
                                            <tr class="structure__member-details__keydates__table__row">
                                                <th class="structure__member-details__keydates__table__row__head">
                                                    <p
                                                        class="structure__member-details__keydates__table__row__head__text">
                                                        الشركة
                                                    </p>
                                                </th>
                                                <th class="structure__member-details__keydates__table__row__head">
                                                    <p
                                                        class="structure__member-details__keydates__table__row__head__text">
                                                        المنصب
                                                    </p>
                                                </th>
                                                <th class="structure__member-details__keydates__table__row__head">
                                                    <p
                                                        class="structure__member-details__keydates__table__row__head__text">
                                                        من
                                                    </p>
                                                </th>
                                                <th class="structure__member-details__keydates__table__row__head">
                                                    <p
                                                        class="structure__member-details__keydates__table__row__head__text">
                                                        الى
                                                    </p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="structure__member-details__keydates__table__row"
                                                v-for="position in Individual.positionHistory">
                                                <td class="structure__member-details__keydates__table__row__data">
                                                    <p
                                                        class="structure__member-details__keydates__table__row__data__text">
                                                        {{position.companyNameAr}}
                                                    </p>
                                                </td>
                                                <td class="structure__member-details__keydates__table__row__data">
                                                    <p
                                                        class="structure__member-details__keydates__table__row__data__text">
                                                        {{position.positionNameAr}}
                                                    </p>
                                                </td>
                                                <td class="structure__member-details__keydates__table__row__data">
                                                    <p
                                                        class="structure__member-details__keydates__table__row__data__text">
                                                        {{position.startedOn}}
                                                    </p>
                                                </td>
                                                <td class="structure__member-details__keydates__table__row__data">
                                                    <p
                                                        class="structure__member-details__keydates__table__row__data__text">
                                                        {{position.endedOn}}
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="salaries">
                        <div class="salaries__years">
                            <p class="salaries__years__title">
                                الرواتب والمكافآت
                            </p>
                            <ul class="salaries__years__tabs">
                                <li v-bind:data-cont="'.year' + Year.year"
                                    v-for="Year in CompanyOrganizationStructure.salaries">
                                    {{Year.year}}
                                </li>
                            </ul>
                        </div>
                        <div class="salaries__container">
                            <div v-bind:class="'salaries__details year' + Year.year"
                                v-for="Year in CompanyOrganizationStructure.salaries">
                                <table class="salaries__details__table">
                                    <tr class="salaries__details__table__row">
                                        <th class="salaries__details__table__row__head">
                                            <p class="salaries__details__table__row__head__text">
                                                التفاصيل
                                            </p>
                                        </th>
                                        <th class="salaries__details__table__row__head">
                                            <p class="salaries__details__table__row__head__text">
                                                المديرون التنفيذيون
                                            </p>
                                        </th>
                                        <th class="salaries__details__table__row__head">
                                            <p class="salaries__details__table__row__head__text">
                                                أعضاء مجلس الإدارة
                                            </p>
                                        </th>
                                        <th class="salaries__details__table__row__head">
                                            <p class="salaries__details__table__row__head__text">
                                                الإجمالي
                                            </p>
                                        </th>
                                    </tr>
                                    <tr class="salaries__details__table__row">
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                الرواتب (مليون ريال)
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.boardMembersRenumerations.salaries}}
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.executivesRenumerations.salaries}}
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.totalsRenumerations.salaries}}
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="salaries__details__table__row">
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                المكافآت (مليون ريال)
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.boardMembersRenumerations.bonuses}}
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.executivesRenumerations.bonuses}}
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.totalsRenumerations.bonuses}}
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="salaries__details__table__row">
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                المزايا الأخرى (مليون ريال)
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.boardMembersRenumerations.otherRewards}}
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.executivesRenumerations.otherRewards}}
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.totalsRenumerations.otherRewards}}
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="salaries__details__table__row">
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                الإجمالي
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.boardMembersRenumerations.total}}
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.executivesRenumerations.total}}
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.totalsRenumerations.total}}
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="salaries__details__table__row">
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                ملاحظات
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.boardMembersRenumerations.notesAr}}
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.executivesRenumerations.notesAr}}
                                            </p>
                                        </td>
                                        <td class="salaries__details__table__row__data">
                                            <p class="salaries__details__table__row__data__text">
                                                {{Year.totalsRenumerations.notesAr}}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="widgets-container Major-Shareholder">
                    <div class="main-major-shareholders">
                        <p class="main-major-shareholders__title">
                            كبار المساهمين - شركة الخريّف لتقنية المياه والطاقة
                        </p>
                        <div class="main-major-shareholders__head">
                            <ul class="main-major-shareholders__head__tabs">
                                <li onclick="showMajorShareholderSec(true,false)"
                                    data-cont=".main-major-shareholders__container__major-shareholders" class="active">
                                    المساهمين الرئيسيين
                                </li>
                                <!--<li onclick="showMajorShareholderSec(false,false)"
                                    data-cont=".main-major-shareholders__container__historical-changes">
                                    التطورات التاريخية
                                </li>-->
                                <li onclick="showMajorShareholderSec(false,true)"
                                    data-cont=".main-major-shareholders__container__board">
                                    أعضاء مجلس الإدارة المساهمون
                                </li>
                            </ul>
                            
                        </div>
                        <div class="main-major-shareholders__container">
                            <div class="main-major-shareholders__container__major-shareholders">
                                <div class="main-major-shareholders__container__major-shareholders__data">
                                    <span id="main-major-shareholders__container__major-shareholders__panner-left"
                                        class="main-major-shareholders__container__major-shareholders__panner"
                                        data-scroll-modifier='-1'>
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </span>
                                    <span id="main-major-shareholders__container__major-shareholders__panner-right"
                                        class="main-major-shareholders__container__major-shareholders__panner"
                                        data-scroll-modifier='1'>
                                        <i class="far fa-arrow-alt-circle-left"></i>
                                    </span>
                                    <div class="main-major-shareholders__container__major-shareholders__data__shareholders">
                                        <p class="main-major-shareholders__container__major-shareholders__data__shareholders__name">
                                            المالك
                                        </p>
                                        <p class="main-major-shareholders__container__major-shareholders__data__shareholders__name"
                                            v-for="Shareholder in MajorShareholders.shareholders">
                                            {{Shareholder.shareholderNameAr}}
                                        </p>
                                    </div>
                                    <div class="main-major-shareholders__container__major-shareholders__data__details">
                                        <table
                                            class="main-major-shareholders__container__major-shareholders__data__details__table">
                                            <tr
                                                class="main-major-shareholders__container__major-shareholders__data__details__table__row">
                                                <th
                                                    class="main-major-shareholders__container__major-shareholders__data__details__table__row__head">
                                                    <p
                                                        class="main-major-shareholders__container__major-shareholders__data__details__table__row__head__text">
                                                        النوع
                                                    </p>
                                                </th>
                                                <th
                                                    class="main-major-shareholders__container__major-shareholders__data__details__table__row__head">
                                                    <p
                                                        class="main-major-shareholders__container__major-shareholders__data__details__table__row__head__text">
                                                        عدد الأسهم
                                                    </p>
                                                </th>
                                                <th
                                                    class="main-major-shareholders__container__major-shareholders__data__details__table__row__head">
                                                    <p
                                                        class="main-major-shareholders__container__major-shareholders__data__details__table__row__head__text">
                                                        نسبة الملكية
                                                    </p>
                                                </th>
                                                <th
                                                    class="main-major-shareholders__container__major-shareholders__data__details__table__row__head">
                                                    <p
                                                        class="main-major-shareholders__container__major-shareholders__data__details__table__row__head__text">
                                                        القيمة السوقية (مليون)
                                                    </p>
                                                </th>
                                                <th
                                                    class="main-major-shareholders__container__major-shareholders__data__details__table__row__head">
                                                    <p
                                                        class="main-major-shareholders__container__major-shareholders__data__details__table__row__head__text">
                                                        ملاحظات
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr class="main-major-shareholders__container__major-shareholders__data__details__table__row"
                                                v-for="Shareholder in MajorShareholders.shareholders">
                                                <td
                                                    class="main-major-shareholders__container__major-shareholders__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__major-shareholders__data__details__table__row__data__text">
                                                        {{Shareholder.shareholderTypeNameAr}}
                                                    </p>
                                                </td>
                                                <td
                                                    class="main-major-shareholders__container__major-shareholders__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__major-shareholders__data__details__table__row__data__text">
                                                        {{Shareholder.noOfShares}}
                                                    </p>
                                                </td>
                                                <td
                                                    class="main-major-shareholders__container__major-shareholders__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__major-shareholders__data__details__table__row__data__text">
                                                        {{Shareholder.percentage}}
                                                    </p>
                                                </td>
                                                <td
                                                    class="main-major-shareholders__container__major-shareholders__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__major-shareholders__data__details__table__row__data__text">
                                                        {{Shareholder.marketValue}}
                                                    </p>
                                                </td>
                                                <td
                                                    class="main-major-shareholders__container__major-shareholders__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__major-shareholders__data__details__table__row__data__text">
                                                        {{Shareholder.notesAr}}
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="main-major-shareholders__container__historical-changes">

                                <div class="main-major-shareholders__container__historical-changes__data">
                                    <span id="main-major-shareholders__container__historical-changes__panner-left"
                                        class="main-major-shareholders__container__historical-changes__panner"
                                        data-scroll-modifier='-1'>
                                        <i class="far fa-arrow-alt-circle-left"></i>
                                    </span>
                                    <span id="main-major-shareholders__container__historical-changes__panner-right"
                                        class="main-major-shareholders__container__historical-changes__panner"
                                        data-scroll-modifier='1'>
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </span>
                                    <div
                                        class="main-major-shareholders__container__historical-changes__data__shareholders">
                                        <p
                                            class="main-major-shareholders__container__historical-changes__data__shareholders__name">
                                            التاريخ
                                        </p>
                                        <p
                                            class="main-major-shareholders__container__historical-changes__data__shareholders__name">
                                            2020/12/01
                                        </p>
                                        <p
                                            class="main-major-shareholders__container__historical-changes__data__shareholders__name">

                                            2020/01/01
                                        </p>
                                    </div>
                                    <div class="main-major-shareholders__container__historical-changes__data__details">
                                        <table
                                            class="main-major-shareholders__container__historical-changes__data__details__table">
                                            <tr
                                                class="main-major-shareholders__container__historical-changes__data__details__table__row">
                                                <th
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__head">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__head__text">
                                                        المالك
                                                    </p>
                                                </th>
                                                <th
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__head">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__head__text">
                                                        نسبة المليكة السابقة
                                                    </p>
                                                </th>
                                                <th
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__head">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__head__text">
                                                        الملكية الحالية
                                                    </p>
                                                </th>
                                                <th
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__head">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__head__text">
                                                        التغير
                                                    </p>
                                                </th>
                                                <th
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__head">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__head__text">
                                                        ملاحظات
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr
                                                class="main-major-shareholders__container__historical-changes__data__details__table__row">
                                                <td
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__data__text">
                                                        شركة نماء الخريّف
                                                    </p>
                                                </td>
                                                <td
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__data__text">
                                                        2.98
                                                    </p>
                                                </td>
                                                <td
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__data__text">
                                                        2.98
                                                    </p>
                                                </td>
                                                <td
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__data__text">
                                                        2.98
                                                    </p>
                                                </td>
                                                <td
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__data__text">
                                                        2.98
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr
                                                class="main-major-shareholders__container__historical-changes__data__details__table__row">
                                                <td
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__data__text">
                                                        شركة مجموعة الخريّف
                                                    </p>
                                                </td>
                                                <td
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__data__text">
                                                        0.65
                                                    </p>
                                                </td>
                                                <td
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__data__text">
                                                        0.65
                                                    </p>
                                                </td>
                                                <td
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__data__text">
                                                        0.65
                                                    </p>
                                                </td>
                                                <td
                                                    class="main-major-shareholders__container__historical-changes__data__details__table__row__data">
                                                    <p
                                                        class="main-major-shareholders__container__historical-changes__data__details__table__row__data__text">
                                                        1.05
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="main-major-shareholders__container__board">
                                <div class="main-major-shareholders__container__board__data">
                                    <table class="main-major-shareholders__container__board__data__table">
                                        <tr class="main-major-shareholders__container__board__data__table__row">
                                            <td class="main-major-shareholders__container__board__data__table__row__data">
                                                الإسم
                                            </td>
                                            <td
                                                class="main-major-shareholders__container__board__data__table__row__data">
                                                المنصب
                                            </td>
                                            <td
                                                class="main-major-shareholders__container__board__data__table__row__data">
                                                نسبة التملك في آخر يوم تداول (%)
                                            </td>
                                            <td
                                                class="main-major-shareholders__container__board__data__table__row__data">
                                                نسبة التملك ليوم التداول السابق (%)
                                            </td>
                                            <td
                                                class="main-major-shareholders__container__board__data__table__row__data">
                                                التغير
                                            </td>
                                        </tr>
                                        <tr class="main-major-shareholders__container__board__data__table__row">
                                            <td class="main-major-shareholders__container__board__data__table__row__data date">
                                                {{getDateString(new Date())}}
                                            </td>
                                            <td
                                                class="main-major-shareholders__container__board__data__table__row__data">
                                            </td>
                                            <td
                                                class="main-major-shareholders__container__board__data__table__row__data">
                                            </td>
                                            <td
                                                class="main-major-shareholders__container__board__data__table__row__data">
                                            </td>
                                            <td
                                                class="main-major-shareholders__container__board__data__table__row__data">
                                            </td>
                                        </tr>
                                        <tr class="main-major-shareholders__container__board__data__table__row"  v-for="member in BoardOfDirectors">
                                            <td class="main-major-shareholders__container__board__data__table__row__data">
                                                {{member.nameAr}}
                                            </td>
                                            <td class="main-major-shareholders__container__board__data__table__row__data">
                                                {{getMemberPositionArabic(member.position)}}
                                            </td>
                                            <td class="main-major-shareholders__container__board__data__table__row__data">
                                                {{member.currentPercentage}}
                                            </td>
                                            <td class="main-major-shareholders__container__board__data__table__row__data">
                                                {{member.lastPercentage}}
                                            </td>
                                            <td class="main-major-shareholders__container__board__data__table__row__data">
                                                {{member.change}}
                                            </td>
                                        </tr> 
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="foreign-ownership">
                        <h2 class="foreign-ownership__title">
                            ملكية الأجانب
                        </h2>
                        <table class="foreign-ownership__table">
                            <tr class="foreign-ownership__table__row">
                                <th class="foreign-ownership__table__row__main-header">
                                    <p class="foreign-ownership__table__row__main-header__text">
                                        الشركة
                                    </p>
                                </th>
                                <th colspan="2" class="foreign-ownership__table__row__main-header">
                                    <p class="foreign-ownership__table__row__main-header__text">
                                        ملكية جميع المستثمرين الأجانب
                                    </p>
                                </th>
                            </tr>
                            <tr class="foreign-ownership__table__row">
                                <th class="foreign-ownership__table__row__data">
                                    <p class="foreign-ownership__table__row__title__text">
                                    </p>
                                </th>
                                <th class="foreign-ownership__table__row__title">
                                    <p class="foreign-ownership__table__row__title__text">
                                        الحد الأعلى
                                    </p>
                                </th>
                                <th class="foreign-ownership__table__row__title">
                                    <p class="foreign-ownership__table__row__title__text">
                                        الملكية الفعلية
                                    </p>
                                </th>
                            </tr>
                            <tr class="foreign-ownership__table__row"
                                v-for="foreignOwnership in MajorShareholders.foreignOwnerships">
                                <td class="foreign-ownership__table__row__data">
                                    <p class="foreign-ownership__table__row__data__text">
                                        {{foreignOwnership.companyNameAr}}
                                    </p>
                                </td>
                                <td class="foreign-ownership__table__row__data">
                                    <p class="foreign-ownership__table__row__data__text" style="font-weight: normal;">
                                        {{foreignOwnership.tfoMaximum}} %
                                    </p>
                                </td>
                                <td class="foreign-ownership__table__row__data">
                                    <p class="foreign-ownership__table__row__data__text" style="font-weight:normal">
                                        {{foreignOwnership.tfoActual}} %
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="widgets-container Financial-Statment">
                    <div class="main-financial-statement">
                        <p class="main-financial-statement__title"> القوائم المالية </p>
                        <div class="main-financial-statement__head">
                            <ul class="main-financial-statement__head__tabs">
                                <li data-cont=".st-annual" class="active"
                                    @click="fetchCompanyFStatementsForPeriod('year')">سنوي</li>
                                <li data-cont=".st-quarter" @click="fetchCompanyFStatementsForPeriod('quarter')">ربعي
                                </li>
                                <!--<li data-cont=".st-interim" @click="fetchCompanyFStatementsForPeriod('interim')">مرحلي
                                </li>-->
                            </ul>
                            <div class="main-financial-statement__head__options">
                                <span class="main-financial-statement__head__options__currency">
                                    العملة :
                                </span>
                                <ul class="main-financial-statement__head__options__tabs">
                                    <li data-cont="main-financial-statement__usd"
                                        v-on:click="setCurrencyFinancialStatement('USD')"
                                        class="main-financial-statement__head__options__tabs__usd main-financial-statement__head__options__tabs__usd-ar">
                                        دولار</li>
                                    <li data-cont="main-financial-statement__sar"
                                        v-on:click="setCurrencyFinancialStatement('SAR')"
                                        class="active main-financial-statement__head__options__tabs__riyal main-financial-statement__head__options__tabs__riyal-ar">
                                        ريال</li>
                                </ul>
                                <a href="#" onclick="window.print(); return false;"
                                    class="main-financial-statement__head__options__link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="58.5" height="78"
                                        viewBox="0 0 58.5 78">
                                        <path id="Icon_awesome-file-pdf" data-name="Icon awesome-file-pdf"
                                            d="M27.711,39.015c-.762-2.437-.746-7.145-.3-7.145C28.686,31.87,28.565,37.492,27.711,39.015Zm-.259,7.191a70.3,70.3,0,0,1-4.327,9.552c2.788-1.066,5.941-2.62,9.582-3.336A19.734,19.734,0,0,1,27.452,46.206ZM13.117,65.218c0,.122,2.011-.823,5.317-6.124C17.413,60.054,14,62.827,13.117,65.218ZM37.781,24.375H58.5V74.344A3.647,3.647,0,0,1,54.844,78H3.656A3.647,3.647,0,0,1,0,74.344V3.656A3.647,3.647,0,0,1,3.656,0H34.125V20.719A3.667,3.667,0,0,0,37.781,24.375ZM36.563,50.548a15.29,15.29,0,0,1-6.505-8.2c.686-2.818,1.767-7.1.945-9.78-.716-4.479-6.459-4.037-7.282-1.036-.762,2.788-.061,6.718,1.234,11.73a143.053,143.053,0,0,1-6.216,13.071c-.015,0-.015.015-.03.015-4.129,2.118-11.213,6.779-8.3,10.359a4.734,4.734,0,0,0,3.275,1.523c2.727,0,5.439-2.742,9.308-9.415,3.93-1.295,8.242-2.91,12.035-3.534a23.088,23.088,0,0,0,9.75,2.971c4.448,0,4.753-4.875,3-6.612-2.118-2.072-8.272-1.478-11.213-1.1ZM57.434,16,42.5,1.066A3.654,3.654,0,0,0,39.914,0H39V19.5H58.5v-.929A3.645,3.645,0,0,0,57.434,16ZM46.145,54.889c.625-.411-.381-1.813-6.52-1.371C45.277,55.925,46.145,54.889,46.145,54.889Z" />
                                    </svg>
                                </a>
                                <a href="https://www.argaam.com/ar/excel/financial-statment/13068?marketid=3&fromyear=2018&toyear=2021&yearly=true&quarterly=true&interm=false&currencyID=3"
                                    class="main-financial-statement__head__options__link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="57.625" height="76.833"
                                        viewBox="0 0 57.625 76.833">
                                        <path id="Icon_awesome-file-alt" data-name="Icon awesome-file-alt"
                                            d="M33.614,20.409V0H3.6A3.593,3.593,0,0,0,0,3.6v69.63a3.593,3.593,0,0,0,3.6,3.6H54.023a3.593,3.593,0,0,0,3.6-3.6V24.01H37.216A3.612,3.612,0,0,1,33.614,20.409Zm9.6,35.415a1.806,1.806,0,0,1-1.8,1.8H16.207a1.806,1.806,0,0,1-1.8-1.8v-1.2a1.806,1.806,0,0,1,1.8-1.8H41.418a1.806,1.806,0,0,1,1.8,1.8Zm0-9.6a1.806,1.806,0,0,1-1.8,1.8H16.207a1.806,1.806,0,0,1-1.8-1.8v-1.2a1.806,1.806,0,0,1,1.8-1.8H41.418a1.806,1.806,0,0,1,1.8,1.8Zm0-10.8v1.2a1.806,1.806,0,0,1-1.8,1.8H16.207a1.806,1.806,0,0,1-1.8-1.8v-1.2a1.806,1.806,0,0,1,1.8-1.8H41.418A1.806,1.806,0,0,1,43.219,35.415ZM57.625,18.293v.915H38.417V0h.915a3.6,3.6,0,0,1,2.551,1.05L56.574,15.757A3.59,3.59,0,0,1,57.625,18.293Z" />
                                    </svg>
                                </a>
                                <a href="#" onclick="window.print(); return false;"
                                    class="main-financial-statement__head__options__link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="76.833" height="76.833"
                                        viewBox="0 0 76.833 76.833">
                                        <g id="Icon_ionic-ios-print" data-name="Icon ionic-ios-print"
                                            transform="translate(0 0)">
                                            <path id="Path_3" data-name="Path 3"
                                                d="M9,19.268V56.206a2.964,2.964,0,0,0,2.955,2.955H53.327a2.964,2.964,0,0,0,2.955-2.955V19.268a2.964,2.964,0,0,0-2.955-2.955H11.955A2.964,2.964,0,0,0,9,19.268Z"
                                                transform="translate(5.776 17.671)" />
                                            <g id="Group_116" data-name="Group 116" transform="translate(0 0)">
                                                <path id="Path_4" data-name="Path 4"
                                                    d="M58.112,3.375H10.83A2.964,2.964,0,0,0,7.875,6.33v3.694a.741.741,0,0,0,.739.739H60.328a.741.741,0,0,0,.739-.739V6.33A2.964,2.964,0,0,0,58.112,3.375Z"
                                                    transform="translate(3.945 -3.375)" />
                                                <path id="Path_5" data-name="Path 5"
                                                    d="M74.39,7.875H9.378a5.91,5.91,0,0,0-6,5.781V45.867a6.067,6.067,0,0,0,6,5.966H12.24a1.482,1.482,0,0,0,1.478-1.478V30.777a5.163,5.163,0,0,1,5.171-5.171h45.8a5.163,5.163,0,0,1,5.171,5.171V50.355a1.482,1.482,0,0,0,1.478,1.478H74.39a5.909,5.909,0,0,0,5.818-5.966V13.656A5.751,5.751,0,0,0,74.39,7.875Z"
                                                    transform="translate(-3.375 3.945)" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div id="financialStatementMain">
                            <div class="financial-statement company-fst st-annual">
                                <div id="divExcelTable" class="clear aplusholdBM scrollbar2 divExcelTable">
                                    <div class="widget arb" style="position: relative;">
                                        <span class="fs-sc-arr-right st-annual-panner" data-scroll-modifier="1">
                                            <i class="far fa-arrow-alt-circle-left"></i>
                                        </span>
                                        <div class="divExcelTable scroll-container">
                                            <table id="companyFinancialResult" class="table clear" width="100%"
                                                cellspacing="0" cellpadding="0">
                                                <thead id="periodrow">
                                                    <tr class="year group1">
                                                        <th class="argaam-font col_sticky" style="padding: 0;">
                                                            <div>
                                                                <span class="fs-sc-arr-left st-annual-panner"
                                                                    data-scroll-modifier="-1">
                                                                    <i class="far fa-arrow-alt-circle-right"></i>
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <th
                                                            style="min-width:40px; max-width:40px; background-color: white;">
                                                        </th>
                                                        <th class="center"
                                                            v-for="value in CompanyFStatements.tabs[0].fields[0].values">
                                                            <span class="">
                                                                {{value.fiscalPeriod}}
                                                            </span>
                                                        </th>
                                                    </tr>
                                                    <tr style="height: 15px;"></tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="group1 argaam-font" style="border-top: 1px solid white;">
                                                        <th class="argaam-font col_sticky col_bg">التفاصيل </th>
                                                        <th style="min-width:40px; max-width:40px;">
                                                        </th>
                                                        <th class="center" style="background-color:#1a516d ;"
                                                            v-for="value in CompanyFStatements.tabs[0].fields[0].values">
                                                            مليون <span class="st-currency st-currency-ar">ريال</span>
                                                        </th>
                                                    </tr>
                                                    <tr class="dummy">
                                                        <th colspan="100"></th>
                                                    </tr>

                                                    <template v-show="CompanyFStatements.tabs[0].fields[0].values"
                                                        v-for="(tab, _indx) in CompanyFStatements.tabs">
                                                        <tr class="level1">
                                                            <td class="argaam-font col_sticky">
                                                                <span class="fOpen"
                                                                    v-bind:id="'btn' + (_indx + 1 *1000)"
                                                                    @click="return showHideSubStatement((_indx + 1 *1000));"
                                                                    data-childviewstatus="open"></span>

                                                                {{tab.tabNameAr}}
                                                            </td>
                                                        </tr>
                                                        <tr class="row-border">
                                                            <td colspan="100">
                                                            </td>
                                                        </tr>
                                                        <tr class="level2 level2tds" v-for="field in tab.fields"
                                                            v-bind:data-substatatementid="(_indx + 1 *1000)"
                                                            data-ischildelement="no" data-haschildelementdata="no"
                                                            style="">
                                                            <td class="argaam-font-normal">
                                                                <div>
                                                                    {{field.displayNameAr}}
                                                                </div>
                                                            </td>
                                                            <td class="columchart">
                                                                <span class="chart-btn"
                                                                    v-on:click="showChartForFinancialStatement(field)">
                                                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                                                        width="20" height="20" viewBox="0 0 56 56">
                                                                        <path id="Icon_material-insert-chart"
                                                                            data-name="Icon material-insert-chart"
                                                                            d="M54.278,4.5H10.722A6.241,6.241,0,0,0,4.5,10.722V54.278A6.241,6.241,0,0,0,10.722,60.5H54.278A6.241,6.241,0,0,0,60.5,54.278V10.722A6.241,6.241,0,0,0,54.278,4.5ZM23.167,48.056H16.944V26.278h6.222Zm12.444,0H29.389V16.944h6.222Zm12.444,0H41.833V35.611h6.222Z"
                                                                            transform="translate(-4.5 -4.5)"
                                                                            fill="#fff"></path>
                                                                    </svg>
                                                                </span>
                                                            </td>
                                                            <td v-for="val in field.values"
                                                                v-bind:class="'colum ' + _indx + ' ' + cssClassForValue(val)">
                                                                <span>
                                                                    {{fomratedValue(val, field.displayNameAr)}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </template>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="financial-statement company-fst st-quarter">
                                <div id="divExcelTable" class="clear aplusholdBM scrollbar2 divExcelTable">
                                    <div class="widget arb" style="position: relative;">
                                        <span class="fs-sc-arr-right st-quarter-panner" data-scroll-modifier="1">
                                            <i class="far fa-arrow-alt-circle-left"></i>
                                        </span>
                                        <div class="divExcelTable scroll-container">
                                            <table id="companyFinancialResult" class="table clear" width="100%"
                                                cellspacing="0" cellpadding="0">
                                                <thead id="periodrow">
                                                    <tr class="year group1">
                                                        <th class="argaam-font col_sticky" style="padding: 0;">
                                                            <div>
                                                                <span class="fs-sc-arr-left st-quarter-panner"
                                                                    data-scroll-modifier="-1">
                                                                    <i class="far fa-arrow-alt-circle-right"></i>
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <th
                                                            style="min-width:40px; max-width:40px; background-color: white;">
                                                        </th>
                                                        <th class="center"
                                                            v-for="value in CompanyFStatements.tabs[0].fields[0].values">
                                                            <span class="">
                                                                {{value.fiscalPeriod}}
                                                            </span>
                                                        </th>
                                                    </tr>
                                                    <tr style="height: 15px;"></tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="group1 argaam-font" style="border-top: 1px solid white;">
                                                        <th class="argaam-font col_sticky col_bg">التفاصيل </th>
                                                        <th style="min-width:40px; max-width:40px;">
                                                        </th>
                                                        <th class="center" style="background-color:#1a516d ;"
                                                            v-for="value in CompanyFStatements.tabs[0].fields[0].values">
                                                            مليون <span class="st-currency st-currency-ar">ريال</span>
                                                        </th>
                                                    </tr>
                                                    <tr class="dummy">
                                                        <th colspan="100"></th>
                                                    </tr>

                                                    <template v-show="CompanyFStatements.tabs[0].fields[0].values"
                                                        v-for="(tab, _indx) in CompanyFStatements.tabs">
                                                        <tr class="level1">
                                                            <td class="argaam-font col_sticky">
                                                                <span class="fOpen"
                                                                    v-bind:id="'btn' + (_indx + 1 *2000)"
                                                                    @click="return showHideSubStatement((_indx + 1 *2000));"
                                                                    data-childviewstatus="open"></span>

                                                                {{tab.tabNameAr}}
                                                            </td>
                                                        </tr>
                                                        <tr class="row-border">
                                                            <td colspan="100">
                                                            </td>
                                                        </tr>
                                                        <tr class="level2 level2tds" v-for="field in tab.fields"
                                                            v-bind:data-substatatementid="(_indx + 1 *2000)"
                                                            data-ischildelement="no" data-haschildelementdata="no"
                                                            style="">
                                                            <td class="argaam-font-normal">
                                                                <div>
                                                                    {{field.displayNameAr}}
                                                                </div>
                                                            </td>
                                                            <td class="columchart">
                                                                <span class="chart-btn"
                                                                    v-on:click="showChartForFinancialStatement(field)">
                                                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                                                        width="20" height="20" viewBox="0 0 56 56">
                                                                        <path id="Icon_material-insert-chart"
                                                                            data-name="Icon material-insert-chart"
                                                                            d="M54.278,4.5H10.722A6.241,6.241,0,0,0,4.5,10.722V54.278A6.241,6.241,0,0,0,10.722,60.5H54.278A6.241,6.241,0,0,0,60.5,54.278V10.722A6.241,6.241,0,0,0,54.278,4.5ZM23.167,48.056H16.944V26.278h6.222Zm12.444,0H29.389V16.944h6.222Zm12.444,0H41.833V35.611h6.222Z"
                                                                            transform="translate(-4.5 -4.5)"
                                                                            fill="#fff"></path>
                                                                    </svg>
                                                                </span>
                                                            </td>
                                                            <td v-for="val in field.values"
                                                                v-bind:class="'colum ' + _indx + ' ' + cssClassForValue(val)">
                                                                <span>
                                                                    {{fomratedValue(val, field.displayNameAr)}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </template>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="financial-statement company-fst st-interim">
                                <div id="divExcelTable" class="clear aplusholdBM scrollbar2 divExcelTable">
                                    <div class="widget arb" style="position: relative;">
                                        <span class="fs-sc-arr-right st-interim-panner" data-scroll-modifier="1">
                                            <i class="far fa-arrow-alt-circle-left"></i>
                                        </span>
                                        <div class="divExcelTable scroll-container">
                                            <table id="companyFinancialResult" class="table clear" width="100%"
                                                cellspacing="0" cellpadding="0">
                                                <thead id="periodrow">
                                                    <tr class="year group1">
                                                        <th class="argaam-font col_sticky" style="padding: 0;">
                                                            <div>
                                                                <span class="fs-sc-arr-left st-interim-panner"
                                                                    data-scroll-modifier="-1">
                                                                    <i class="far fa-arrow-alt-circle-right"></i>
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <th
                                                            style="min-width:40px; max-width:40px; background-color: white;">
                                                        </th>
                                                        <th class="center"
                                                            v-for="value in CompanyFStatements.tabs[0].fields[0].values">
                                                            <span class="">
                                                                {{value.fiscalPeriod}}
                                                            </span>
                                                        </th>
                                                    </tr>
                                                    <tr style="height: 15px;"></tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="group1 argaam-font" style="border-top: 1px solid white;">
                                                        <th class="argaam-font col_sticky col_bg">التفاصيل </th>
                                                        <th style="min-width:40px; max-width:40px;">
                                                        </th>
                                                        <th class="center" style="background-color:#1a516d ;"
                                                            v-for="value in CompanyFStatements.tabs[0].fields[0].values">
                                                            مليون <span class="st-currency st-currency-ar">ريال</span>
                                                        </th>
                                                    </tr>
                                                    <tr class="dummy">
                                                        <th colspan="100"></th>
                                                    </tr>

                                                    <template v-show="CompanyFStatements.tabs[0].fields[0].values"
                                                        v-for="(tab, _indx) in CompanyFStatements.tabs">
                                                        <tr class="level1">
                                                            <td class="argaam-font col_sticky">
                                                                <span class="fOpen"
                                                                    v-bind:id="'btn' + (_indx + 1 *3000)"
                                                                    @click="return showHideSubStatement((_indx + 1 *3000));"
                                                                    data-childviewstatus="open"></span>

                                                                {{tab.tabNameAr}}
                                                            </td>
                                                        </tr>
                                                        <tr class="row-border">
                                                            <td colspan="100">
                                                            </td>
                                                        </tr>
                                                        <tr class="level2 level2tds" v-for="field in tab.fields"
                                                            v-bind:data-substatatementid="(_indx + 1 *3000)"
                                                            data-ischildelement="no" data-haschildelementdata="no"
                                                            style="">
                                                            <td class="argaam-font-normal">
                                                                <div>
                                                                    {{field.displayNameAr}}
                                                                </div>
                                                            </td>
                                                            <td class="columchart">
                                                                <span class="chart-btn"
                                                                    v-on:click="showChartForFinancialStatement(field)">
                                                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                                                        width="20" height="20" viewBox="0 0 56 56">
                                                                        <path id="Icon_material-insert-chart"
                                                                            data-name="Icon material-insert-chart"
                                                                            d="M54.278,4.5H10.722A6.241,6.241,0,0,0,4.5,10.722V54.278A6.241,6.241,0,0,0,10.722,60.5H54.278A6.241,6.241,0,0,0,60.5,54.278V10.722A6.241,6.241,0,0,0,54.278,4.5ZM23.167,48.056H16.944V26.278h6.222Zm12.444,0H29.389V16.944h6.222Zm12.444,0H41.833V35.611h6.222Z"
                                                                            transform="translate(-4.5 -4.5)"
                                                                            fill="#fff"></path>
                                                                    </svg>
                                                                </span>
                                                            </td>
                                                            <td v-for="val in field.values"
                                                                v-bind:class="'colum ' + _indx + ' ' + cssClassForValue(val)">
                                                                <span>
                                                                    {{fomratedValue(val, field.displayNameAr)}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </template>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fs-popup">
                            <div class="fs-popup__overlay">
                                <div class="fs-popup__overlay__chart">
                                    <div class="fs-popup__overlay__chart__close">
                                        <img src="assets/calendar-closeBtn.png" alt="close">
                                    </div>
                                    <div class="fs-popup__overlay__chart__graph">
                                        <div id="fs_details_chart" style="width:100%; height:260px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widgets-container Financial-Reports">
                    <div class="financial-reports">
                        <h2 class="financial-reports__title">
                            قائمة التقارير المالية
                        </h2>
                        <span id="financial-reports__panner-left" class="financial-reports__panner"
                            data-scroll-modifier="-1">
                            <i class="far fa-arrow-alt-circle-right"></i>
                        </span>
                        <span id="financial-reports__panner-right" class="financial-reports__panner"
                            data-scroll-modifier="1">
                            <i class="far fa-arrow-alt-circle-left"></i>
                        </span>
                        <div class="financial-reports__container">
                            <table class="financial-reports__table">
                                <tr class="financial-reports__table__row">
                                    <td class="financial-reports__table__row__data" style="padding-top: 0px;">
                                        <p class="financial-reports__table__row__data__text" style="font-weight: bold;">
                                            السنة
                                        </p>
                                    </td>
                                    <td class="financial-reports__table__row__data" style="padding-top: 0px;">
                                        <p class="financial-reports__table__row__data__text" style="font-weight: bold;">
                                            الربع الأول
                                        </p>
                                    </td>
                                    <td class="financial-reports__table__row__data" style="padding-top: 0px;">
                                        <p class="financial-reports__table__row__data__text" style="font-weight: bold;">
                                            الربع الثاني
                                        </p>
                                    </td>
                                    <td class="financial-reports__table__row__data" style="padding-top: 0px;">
                                        <p class="financial-reports__table__row__data__text" style="font-weight: bold;">
                                            الربع الثالث
                                        </p>
                                    </td>
                                    <td class="financial-reports__table__row__data" style="padding-top: 0px;">
                                        <p class="financial-reports__table__row__data__text" style="font-weight: bold;">
                                            الربع الرابع
                                        </p>
                                    </td>
                                    <td class="financial-reports__table__row__data" style="padding-top: 0px;">
                                        <p class="financial-reports__table__row__data__text" style="font-weight: bold;">
                                            السنوي
                                        </p>
                                    </td>
                                    <td class="financial-reports__table__row__data" style="padding-top: 0px;">
                                        <p class="financial-reports__table__row__data__text" style="font-weight: bold;">
                                            تقرير مجلس الإدارة
                                        </p>
                                    </td>
                                </tr>
                                <tr class="financial-reports__table__row"
                                    v-for="financialResult in FinancialResults.financialResults">
                                    <td class="financial-reports__table__row__data">
                                        <p class="financial-reports__table__row__data__text">
                                            {{financialResult.year}}
                                        </p>
                                    </td>
                                    <td class="financial-reports__table__row__data">
                                        <p class="financial-reports__table__row__data__text">
                                            <span
                                                v-show="(financialResult.q1ar && financialResult.q1ar != '') || (financialResult.q1en && financialResult.q1en != '')"
                                                class="financial-reports__table__row__data__text__link">
                                                <img src="assets/pdf.png" alt="pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </span>
                                            <a v-show="financialResult.q1ar && financialResult.q1ar != ''"
                                                v-bind:href="toFileURL(financialResult.q1ar)"
                                                class="financial-reports__table__row__data__text__link" target="_blank">
                                                <img src="assets/ar.png" alt="ar-pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </a>
                                            <a v-show="financialResult.q1en && financialResult.q1en != ''"
                                                v-bind:href="toFileURL(financialResult.q1en)"
                                                class="financial-reports__table__row__data__text__link" target="_blank">
                                                <img src="assets/en.png" alt="en-pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </a>
                                        </p>
                                    </td>
                                    <td class="financial-reports__table__row__data">
                                        <p class="financial-reports__table__row__data__text">
                                            <span
                                                v-show="(financialResult.q2ar && financialResult.q2ar != '') || (financialResult.q2en && financialResult.q2en != '')"
                                                class="financial-reports__table__row__data__text__link">
                                                <img src="assets/pdf.png" alt="pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </span>
                                            <a v-show="financialResult.q2ar && financialResult.q2ar != ''"
                                                v-bind:href="toFileURL(financialResult.q2ar)"
                                                class="financial-reports__table__row__data__text__link" target="_blank">
                                                <img src="assets/ar.png" alt="ar-pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </a>
                                            <a v-show="financialResult.q2en && financialResult.q2en != ''"
                                                v-bind:href="toFileURL(financialResult.q2en)"
                                                class="financial-reports__table__row__data__text__link" target="_blank">
                                                <img src="assets/en.png" alt="en-pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </a>
                                        </p>
                                    </td>
                                    <td class="financial-reports__table__row__data">
                                        <p class="financial-reports__table__row__data__text">
                                            <span
                                                v-show="(financialResult.q3ar && financialResult.q3ar != '') || (financialResult.q3en && financialResult.q3en != '')"
                                                class="financial-reports__table__row__data__text__link">
                                                <img src="assets/pdf.png" alt="pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </span>
                                            <a v-show="financialResult.q3ar && financialResult.q3ar != ''"
                                                v-bind:href="toFileURL(financialResult.q3ar)"
                                                class="financial-reports__table__row__data__text__link" target="_blank">
                                                <img src="assets/ar.png" alt="ar-pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </a>
                                            <a v-show="financialResult.q3en && financialResult.q3en != ''"
                                                v-bind:href="toFileURL(financialResult.q3en)"
                                                class="financial-reports__table__row__data__text__link" target="_blank">
                                                <img src="assets/en.png" alt="en-pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </a>
                                        </p>
                                    </td>
                                    <td class="financial-reports__table__row__data">
                                        <p class="financial-reports__table__row__data__text">
                                            <span
                                                v-show="(financialResult.q4ar && financialResult.q4ar != '') || (financialResult.q4en && financialResult.q4en != '')"
                                                class="financial-reports__table__row__data__text__link">
                                                <img src="assets/pdf.png" alt="pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </span>
                                            <a v-show="financialResult.q4ar && financialResult.q4ar != ''"
                                                v-bind:href="toFileURL(financialResult.q4ar)"
                                                class="financial-reports__table__row__data__text__link" target="_blank">
                                                <img src="assets/ar.png" alt="ar-pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </a>
                                            <a v-show="financialResult.q4en && financialResult.q4en != ''"
                                                v-bind:href="toFileURL(financialResult.q4en)"
                                                class="financial-reports__table__row__data__text__link" target="_blank">
                                                <img src="assets/en.png" alt="en-pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </a>
                                        </p>
                                    </td>
                                    <td class="financial-reports__table__row__data">
                                        <p class="financial-reports__table__row__data__text">
                                            <span
                                                v-show="(financialResult.annualar && financialResult.annualar != '') || (financialResult.annualen && financialResult.annualen != '')"
                                                class="financial-reports__table__row__data__text__link">
                                                <img src="assets/pdf.png" alt="pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </span>
                                            <a v-show="financialResult.annualar && financialResult.annualar != ''"
                                                v-bind:href="toFileURL(financialResult.annualar)"
                                                class="financial-reports__table__row__data__text__link" target="_blank">
                                                <img src="assets/ar.png" alt="ar-pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </a>
                                            <a v-show="financialResult.annualen && financialResult.annualen != ''"
                                                v-bind:href="toFileURL(financialResult.annualen)"
                                                class="financial-reports__table__row__data__text__link" target="_blank">
                                                <img src="assets/en.png" alt="en-pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </a>
                                        </p>
                                    </td>
                                    <td class="financial-reports__table__row__data">
                                        <p class="financial-reports__table__row__data__text">
                                            <span
                                                v-show="(financialResult.managementar && financialResult.managementar != '') || (financialResult.managementen && financialResult.managementen != '')"
                                                class="financial-reports__table__row__data__text__link">
                                                <img src="assets/pdf.png" alt="pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </span>
                                            <a v-show="financialResult.managementar && financialResult.managementar != ''"
                                                v-bind:href="toFileURL(financialResult.managementar)"
                                                class="financial-reports__table__row__data__text__link" target="_blank">
                                                <img src="assets/ar.png" alt="ar-pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </a>
                                            <a v-show="financialResult.managementen && financialResult.managementen != ''"
                                                v-bind:href="toFileURL(financialResult.managementen)"
                                                class="financial-reports__table__row__data__text__link" target="_blank">
                                                <img src="assets/en.png" alt="en-pdf"
                                                    class="financial-reports__table__row__data__text__link__icon">
                                            </a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="widgets-container Financial-Ratios">
                    <div class="main-financial-ratio">
                        <p class="main-financial-ratio__title"> المؤشرات المالية </p>
                        <div class="main-financial-ratio__head">
                            <ul class="main-financial-ratio__head__tabs">
                                <li data-cont=".ra-annual" @click="fetchCompanyFRatiosForPeriod('year')" class="active">
                                    سنوي</li>
                                <li data-cont=".ra-trailing" @click="fetchCompanyFRatiosForPeriod('quarter')"> اخر 12
                                </li>
                                <!--<li data-cont=".ra-annualized" @click="fetchCompanyFRatiosForPeriod('interim')">معدل
                                    سنويا</li>-->
                            </ul>
                            <div class="main-financial-ratio__head__options">
                                <span class="main-financial-ratio__head__options__currency">
                                    العملة :
                                </span>
                                <ul class="main-financial-ratio__head__options__tabs">
                                    <li data-cont="main-financial-ratio__usd"
                                        v-on:click="setCurrencyFinancialRatios('USD')"
                                        class="main-financial-ratio__head__options__tabs__usd main-financial-ratio__head__options__tabs__usd-ar">
                                        دولار</li>
                                    <li data-cont="main-financial-ratio__sar"
                                        v-on:click="setCurrencyFinancialRatios('SAR')"
                                        class="active main-financial-ratio__head__options__tabs__riyal main-financial-ratio__head__options__tabs__riyal-ar">
                                        ريال</li>
                                </ul>
                                <a href="#" class="main-financial-ratio__head__options__link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="58.5" height="78"
                                        viewBox="0 0 58.5 78">
                                        <path id="Icon_awesome-file-pdf" data-name="Icon awesome-file-pdf"
                                            d="M27.711,39.015c-.762-2.437-.746-7.145-.3-7.145C28.686,31.87,28.565,37.492,27.711,39.015Zm-.259,7.191a70.3,70.3,0,0,1-4.327,9.552c2.788-1.066,5.941-2.62,9.582-3.336A19.734,19.734,0,0,1,27.452,46.206ZM13.117,65.218c0,.122,2.011-.823,5.317-6.124C17.413,60.054,14,62.827,13.117,65.218ZM37.781,24.375H58.5V74.344A3.647,3.647,0,0,1,54.844,78H3.656A3.647,3.647,0,0,1,0,74.344V3.656A3.647,3.647,0,0,1,3.656,0H34.125V20.719A3.667,3.667,0,0,0,37.781,24.375ZM36.563,50.548a15.29,15.29,0,0,1-6.505-8.2c.686-2.818,1.767-7.1.945-9.78-.716-4.479-6.459-4.037-7.282-1.036-.762,2.788-.061,6.718,1.234,11.73a143.053,143.053,0,0,1-6.216,13.071c-.015,0-.015.015-.03.015-4.129,2.118-11.213,6.779-8.3,10.359a4.734,4.734,0,0,0,3.275,1.523c2.727,0,5.439-2.742,9.308-9.415,3.93-1.295,8.242-2.91,12.035-3.534a23.088,23.088,0,0,0,9.75,2.971c4.448,0,4.753-4.875,3-6.612-2.118-2.072-8.272-1.478-11.213-1.1ZM57.434,16,42.5,1.066A3.654,3.654,0,0,0,39.914,0H39V19.5H58.5v-.929A3.645,3.645,0,0,0,57.434,16ZM46.145,54.889c.625-.411-.381-1.813-6.52-1.371C45.277,55.925,46.145,54.889,46.145,54.889Z" />
                                    </svg>
                                </a>
                                <a href="#" class="main-financial-ratio__head__options__link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="57.625" height="76.833"
                                        viewBox="0 0 57.625 76.833">
                                        <path id="Icon_awesome-file-alt" data-name="Icon awesome-file-alt"
                                            d="M33.614,20.409V0H3.6A3.593,3.593,0,0,0,0,3.6v69.63a3.593,3.593,0,0,0,3.6,3.6H54.023a3.593,3.593,0,0,0,3.6-3.6V24.01H37.216A3.612,3.612,0,0,1,33.614,20.409Zm9.6,35.415a1.806,1.806,0,0,1-1.8,1.8H16.207a1.806,1.806,0,0,1-1.8-1.8v-1.2a1.806,1.806,0,0,1,1.8-1.8H41.418a1.806,1.806,0,0,1,1.8,1.8Zm0-9.6a1.806,1.806,0,0,1-1.8,1.8H16.207a1.806,1.806,0,0,1-1.8-1.8v-1.2a1.806,1.806,0,0,1,1.8-1.8H41.418a1.806,1.806,0,0,1,1.8,1.8Zm0-10.8v1.2a1.806,1.806,0,0,1-1.8,1.8H16.207a1.806,1.806,0,0,1-1.8-1.8v-1.2a1.806,1.806,0,0,1,1.8-1.8H41.418A1.806,1.806,0,0,1,43.219,35.415ZM57.625,18.293v.915H38.417V0h.915a3.6,3.6,0,0,1,2.551,1.05L56.574,15.757A3.59,3.59,0,0,1,57.625,18.293Z" />
                                    </svg>
                                </a>
                                <a href="#" class="main-financial-ratio__head__options__link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="76.833" height="76.833"
                                        viewBox="0 0 76.833 76.833">
                                        <g id="Icon_ionic-ios-print" data-name="Icon ionic-ios-print"
                                            transform="translate(0 0)">
                                            <path id="Path_3" data-name="Path 3"
                                                d="M9,19.268V56.206a2.964,2.964,0,0,0,2.955,2.955H53.327a2.964,2.964,0,0,0,2.955-2.955V19.268a2.964,2.964,0,0,0-2.955-2.955H11.955A2.964,2.964,0,0,0,9,19.268Z"
                                                transform="translate(5.776 17.671)" />
                                            <g id="Group_116" data-name="Group 116" transform="translate(0 0)">
                                                <path id="Path_4" data-name="Path 4"
                                                    d="M58.112,3.375H10.83A2.964,2.964,0,0,0,7.875,6.33v3.694a.741.741,0,0,0,.739.739H60.328a.741.741,0,0,0,.739-.739V6.33A2.964,2.964,0,0,0,58.112,3.375Z"
                                                    transform="translate(3.945 -3.375)" />
                                                <path id="Path_5" data-name="Path 5"
                                                    d="M74.39,7.875H9.378a5.91,5.91,0,0,0-6,5.781V45.867a6.067,6.067,0,0,0,6,5.966H12.24a1.482,1.482,0,0,0,1.478-1.478V30.777a5.163,5.163,0,0,1,5.171-5.171h45.8a5.163,5.163,0,0,1,5.171,5.171V50.355a1.482,1.482,0,0,0,1.478,1.478H74.39a5.909,5.909,0,0,0,5.818-5.966V13.656A5.751,5.751,0,0,0,74.39,7.875Z"
                                                    transform="translate(-3.375 3.945)" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div id="financialRatioMain">
                            <div class="financial-ratio company-fra ra-annual">
                                <div id="divExcelTable" class="clear aplusholdBM scrollbar2 divExcelTable">
                                    <div class="widget arb" style="position: relative;">
                                        <span class="fr-sc-arr-right ra-annual-panner" data-scroll-modifier="1">
                                            <i class="far fa-arrow-alt-circle-left"></i>
                                        </span>
                                        <div class="divExcelTable scroll-container">
                                            <table id="companyFinancialResult" class="table clear" width="100%"
                                                cellspacing="0" cellpadding="0">
                                                <thead id="periodrow">
                                                    <tr class="year group1">
                                                        <th class="argaam-font col_sticky" style="padding: 0;">
                                                            <div>
                                                                <span class="fr-sc-arr-left ra-annual-panner"
                                                                    data-scroll-modifier="-1">
                                                                    <i class="far fa-arrow-alt-circle-right"></i>
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <th
                                                            style="min-width:40px; max-width:40px; background-color: white;">
                                                        </th>
                                                        <th class="center"
                                                            v-for="value in CompanyFRatios.financialRatioFieldsGroups[0].financialRatioFieldsGroupFields[0].values">
                                                            <span v-show="value.period.replace('-', '')" class="">
                                                                {{value.period}}
                                                            </span>
                                                            <span v-show="value.year && !value.period.replace('-', '')"
                                                                class="">
                                                                {{value.year}}
                                                            </span>
                                                        </th>
                                                    </tr>
                                                    <tr style="height: 15px;"></tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="group1 argaam-font" style="border-top: 1px solid white;">
                                                        <th class="argaam-font col_sticky col_bg">التفاصيل </th>
                                                        <th style="min-width:40px; max-width:40px;">
                                                        </th>
                                                        <th class="center" style="background-color:#1a516d ;"
                                                            v-for="value in CompanyFRatios.financialRatioFieldsGroups[0].financialRatioFieldsGroupFields[0].values">
                                                            مليون <span class="ra-currency ra-currency-ar">ريال</span>
                                                        </th>
                                                    </tr>
                                                    <tr class="dummy">
                                                        <th colspan="100"></th>
                                                    </tr>

                                                    <template
                                                        v-show="CompanyFRatios.financialRatioFieldsGroups[0].financialRatioFieldsGroupFields[0].values"
                                                        v-for="(ratioGroup, _indx) in CompanyFRatios.financialRatioFieldsGroups">
                                                        <tr class="level1">
                                                            <td class="argaam-font col_sticky">
                                                                <span class="fOpen"
                                                                    v-bind:id="'btn' + (_indx + 1 *4000)"
                                                                    @click="return showHideSubStatement((_indx + 1 *4000));"
                                                                    data-childviewstatus="open"></span>

                                                                {{ratioGroup.fieldGroupAr}}
                                                            </td>
                                                        </tr>
                                                        <tr class="row-border">
                                                            <td colspan="100">
                                                            </td>
                                                        </tr>
                                                        <tr class="level2 level2tds"
                                                            v-for="field in ratioGroup.financialRatioFieldsGroupFields"
                                                            v-bind:data-substatatementid="(_indx + 1 *4000)"
                                                            data-ischildelement="no" data-haschildelementdata="no"
                                                            style="">
                                                            <td class="argaam-font-normal">
                                                                <div>
                                                                    {{field.nameAr}}
                                                                </div>
                                                            </td>
                                                            <td class="columchart">
                                                                <span class="chart-btn"
                                                                    v-on:click="showChartForFinancialRatio(field)">
                                                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                                                        width="20" height="20" viewBox="0 0 56 56">
                                                                        <path id="Icon_material-insert-chart"
                                                                            data-name="Icon material-insert-chart"
                                                                            d="M54.278,4.5H10.722A6.241,6.241,0,0,0,4.5,10.722V54.278A6.241,6.241,0,0,0,10.722,60.5H54.278A6.241,6.241,0,0,0,60.5,54.278V10.722A6.241,6.241,0,0,0,54.278,4.5ZM23.167,48.056H16.944V26.278h6.222Zm12.444,0H29.389V16.944h6.222Zm12.444,0H41.833V35.611h6.222Z"
                                                                            transform="translate(-4.5 -4.5)"
                                                                            fill="#fff"></path>
                                                                    </svg>
                                                                </span>
                                                            </td>
                                                            <td v-for="val in field.values"
                                                                v-bind:class="'colum ' + _indx + ' ' + cssClassForValue(val)">
                                                                <span>
                                                                    {{fomratedValue(val, field.nameAr)}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </template>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="financial-ratio company-fra ra-trailing">
                                <div id="divExcelTable" class="clear aplusholdBM scrollbar2 divExcelTable">
                                    <div class="widget arb" style="position: relative;">
                                        <span class="fr-sc-arr-right ra-trailing-panner" data-scroll-modifier="1">
                                            <i class="far fa-arrow-alt-circle-left"></i>
                                        </span>
                                        <div class="divExcelTable scroll-container">
                                            <table id="companyFinancialResult" class="table clear" width="100%"
                                                cellspacing="0" cellpadding="0">
                                                <thead id="periodrow">
                                                    <tr class="year group1">
                                                        <th class="argaam-font col_sticky" style="padding: 0;">
                                                            <div>
                                                                <span class="fr-sc-arr-left ra-trailing-panner"
                                                                    data-scroll-modifier="-1">
                                                                    <i class="far fa-arrow-alt-circle-right"></i>
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <th
                                                            style="min-width:40px; max-width:40px; background-color: white;">
                                                        </th>
                                                        <th class="center"
                                                            v-for="value in CompanyFRatios.financialRatioFieldsGroups[0].financialRatioFieldsGroupFields[0].values">
                                                            <span v-show="value.period.replace('-', '')" class="">
                                                                {{value.period}}
                                                            </span>
                                                            <span v-show="value.year && !value.period.replace('-', '')"
                                                                class="">
                                                                {{value.year}}
                                                            </span>
                                                        </th>
                                                    </tr>
                                                    <tr style="height: 15px;"></tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="group1 argaam-font" style="border-top: 1px solid white;">
                                                        <th class="argaam-font col_sticky col_bg">التفاصيل </th>
                                                        <th style="min-width:40px; max-width:40px;">
                                                        </th>
                                                        <th class="center" style="background-color:#1a516d ;"
                                                            v-for="value in CompanyFRatios.financialRatioFieldsGroups[0].financialRatioFieldsGroupFields[0].values">
                                                            مليون <span class="ra-currency ra-currency-ar">ريال</span>
                                                        </th>
                                                    </tr>
                                                    <tr class="dummy">
                                                        <th colspan="100"></th>
                                                    </tr>

                                                    <template
                                                        v-show="CompanyFRatios.financialRatioFieldsGroups[0].financialRatioFieldsGroupFields[0].values"
                                                        v-for="(ratioGroup, _indx) in CompanyFRatios.financialRatioFieldsGroups">
                                                        <tr class="level1">
                                                            <td class="argaam-font col_sticky">
                                                                <span class="fOpen"
                                                                    v-bind:id="'btn' + (_indx + 1 *5000)"
                                                                    @click="return showHideSubStatement((_indx + 1 *5000));"
                                                                    data-childviewstatus="open"></span>

                                                                {{ratioGroup.fieldGroupAr}}
                                                            </td>
                                                        </tr>
                                                        <tr class="row-border">
                                                            <td colspan="100">
                                                            </td>
                                                        </tr>
                                                        <tr class="level2 level2tds"
                                                            v-for="field in ratioGroup.financialRatioFieldsGroupFields"
                                                            v-bind:data-substatatementid="(_indx + 1 *5000)"
                                                            data-ischildelement="no" data-haschildelementdata="no"
                                                            style="">
                                                            <td class="argaam-font-normal">
                                                                <div>
                                                                    {{field.nameAr}}
                                                                </div>
                                                            </td>
                                                            <td class="columchart">
                                                                <span class="chart-btn"
                                                                    v-on:click="showChartForFinancialRatio(field)">
                                                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                                                        width="20" height="20" viewBox="0 0 56 56">
                                                                        <path id="Icon_material-insert-chart"
                                                                            data-name="Icon material-insert-chart"
                                                                            d="M54.278,4.5H10.722A6.241,6.241,0,0,0,4.5,10.722V54.278A6.241,6.241,0,0,0,10.722,60.5H54.278A6.241,6.241,0,0,0,60.5,54.278V10.722A6.241,6.241,0,0,0,54.278,4.5ZM23.167,48.056H16.944V26.278h6.222Zm12.444,0H29.389V16.944h6.222Zm12.444,0H41.833V35.611h6.222Z"
                                                                            transform="translate(-4.5 -4.5)"
                                                                            fill="#fff"></path>
                                                                    </svg>
                                                                </span>
                                                            </td>
                                                            <td v-for="val in field.values"
                                                                v-bind:class="'colum ' + _indx + ' ' + cssClassForValue(val)">
                                                                <span>
                                                                    {{fomratedValue(val, field.nameAr)}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </template>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="financial-ratio company-fra ra-annualized">
                                <div id="divExcelTable" class="clear aplusholdBM scrollbar2 divExcelTable">
                                    <div class="widget arb" style="position: relative;">
                                        <span class="fr-sc-arr-right ra-annualized-panner" data-scroll-modifier="1">
                                            <i class="far fa-arrow-alt-circle-left"></i>
                                        </span>
                                        <div class="divExcelTable scroll-container">
                                            <table id="companyFinancialResult" class="table clear" width="100%"
                                                cellspacing="0" cellpadding="0">
                                                <thead id="periodrow">
                                                    <tr class="year group1">
                                                        <th class="argaam-font col_sticky" style="padding: 0;">
                                                            <div>
                                                                <span class="fr-sc-arr-left ra-annualized-panner"
                                                                    data-scroll-modifier="-1">
                                                                    <i class="far fa-arrow-alt-circle-right"></i>
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <th
                                                            style="min-width:40px; max-width:40px; background-color: white;">
                                                        </th>
                                                        <th class="center"
                                                            v-for="value in CompanyFRatios.financialRatioFieldsGroups[0].financialRatioFieldsGroupFields[0].values">
                                                            <span v-show="value.period.replace('-', '')" class="">
                                                                {{value.period}}
                                                            </span>
                                                            <span v-show="value.year && !value.period.replace('-', '')"
                                                                class="">
                                                                {{value.year}}
                                                            </span>
                                                        </th>
                                                    </tr>
                                                    <tr style="height: 15px;"></tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="group1 argaam-font" style="border-top: 1px solid white;">
                                                        <th class="argaam-font col_sticky col_bg">التفاصيل </th>
                                                        <th style="min-width:40px; max-width:40px;">
                                                        </th>
                                                        <th class="center" style="background-color:#1a516d ;"
                                                            v-for="value in CompanyFRatios.financialRatioFieldsGroups[0].financialRatioFieldsGroupFields[0].values">
                                                            مليون <span class="ra-currency ra-currency-ar">ريال</span>
                                                        </th>
                                                    </tr>
                                                    <tr class="dummy">
                                                        <th colspan="100"></th>
                                                    </tr>

                                                    <template
                                                        v-show="CompanyFRatios.financialRatioFieldsGroups[0].financialRatioFieldsGroupFields[0].values"
                                                        v-for="(ratioGroup, _indx) in CompanyFRatios.financialRatioFieldsGroups">
                                                        <tr class="level1">
                                                            <td class="argaam-font col_sticky">
                                                                <span class="fOpen"
                                                                    v-bind:id="'btn' + (_indx + 1 *6000)"
                                                                    @click="return showHideSubStatement((_indx + 1 *6000));"
                                                                    data-childviewstatus="open"></span>

                                                                {{ratioGroup.fieldGroupAr}}
                                                            </td>
                                                        </tr>
                                                        <tr class="row-border">
                                                            <td colspan="100">
                                                            </td>
                                                        </tr>
                                                        <tr class="level2 level2tds"
                                                            v-for="field in ratioGroup.financialRatioFieldsGroupFields"
                                                            v-bind:data-substatatementid="(_indx + 1 *6000)"
                                                            data-ischildelement="no" data-haschildelementdata="no"
                                                            style="">
                                                            <td class="argaam-font-normal">
                                                                <div>
                                                                    {{field.nameAr}}
                                                                </div>
                                                            </td>
                                                            <td class="columchart">
                                                                <span class="chart-btn"
                                                                    v-on:click="showChartForFinancialRatio(field)">
                                                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                                                        width="20" height="20" viewBox="0 0 56 56">
                                                                        <path id="Icon_material-insert-chart"
                                                                            data-name="Icon material-insert-chart"
                                                                            d="M54.278,4.5H10.722A6.241,6.241,0,0,0,4.5,10.722V54.278A6.241,6.241,0,0,0,10.722,60.5H54.278A6.241,6.241,0,0,0,60.5,54.278V10.722A6.241,6.241,0,0,0,54.278,4.5ZM23.167,48.056H16.944V26.278h6.222Zm12.444,0H29.389V16.944h6.222Zm12.444,0H41.833V35.611h6.222Z"
                                                                            transform="translate(-4.5 -4.5)"
                                                                            fill="#fff"></path>
                                                                    </svg>
                                                                </span>
                                                            </td>
                                                            <td v-for="val in field.values"
                                                                v-bind:class="'colum ' + _indx + ' ' + cssClassForValue(val)">
                                                                <span>
                                                                    {{fomratedValue(val, field.nameAr)}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </template>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fr-popup">
                            <div class="fr-popup__overlay">
                                <div class="fr-popup__overlay__chart">
                                    <div class="fr-popup__overlay__chart__close">
                                        <img src="assets/calendar-closeBtn.png" alt="close">
                                    </div>
                                    <div class="fr-popup__overlay__chart__graph">
                                        <div id="fr_details_chart" style="width:100%; height:260px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widgets-container Corporate-Actions">
                    <div class="capital-change">
                        <p class="capital-change__title">تطور رأس المال</p>
                        <div id="capital_change_chart" style="width:100%; height:360px;"></div>
                    </div>
                    <div class="recent-change">
                        <p class="recent-change__title">أحدث التوزيعات النقدية</p>
                        <ul class="recent-change__list">
                            <li class="recent-change__list__item">
                                <span class="recent-change__list__item__name">رأس المال (مليون ريال) </span>
                                <span
                                    class="recent-change__list__item__number">{{CorporateActions.recentDividends.fundSize}}</span>
                            </li>
                            <li class="recent-change__list__item">
                                <span class="recent-change__list__item__name">عدد الأسهم (مليون)</span>
                                <span
                                    class="recent-change__list__item__number">{{CorporateActions.recentDividends.numberOfShares}}</span>
                            </li>
                            <li class="recent-change__list__item">
                                <span class="recent-change__list__item__name">النسبة من رأس المال</span>
                                <span
                                    class="recent-change__list__item__number">{{CorporateActions.recentDividends.dividendPercentage}}
                                    %</span>
                            </li>
                            <li class="recent-change__list__item">
                                <span class="recent-change__list__item__name">توزيعات أرباح نقدية</span>
                                <span
                                    class="recent-change__list__item__number">{{CorporateActions.recentDividends.cashDividend}}</span>
                            </li>
                            <li class="recent-change__list__item">
                                <span class="recent-change__list__item__name">النوع</span>
                                <span
                                    class="recent-change__list__item__number">{{CorporateActions.recentDividends.companyDividendStatusNameAr}}</span>
                            </li>
                            <li class="recent-change__list__item">
                                <span class="recent-change__list__item__name">تاريخ الإعلان</span>
                                <span class="recent-change__list__item__number">{{new
                                    Date(CorporateActions.recentDividends.dividendAnnouncedDate).toLocaleDateString('en-US')}}</span>
                            </li>
                            <li class="recent-change__list__item">
                                <span class="recent-change__list__item__name">تاريخ الأحقية</span>
                                <span class="recent-change__list__item__number">{{new
                                    Date(CorporateActions.recentDividends.dividendDueDate).toLocaleDateString('en-US')}}</span>
                            </li>
                            <li class="recent-change__list__item">
                                <span class="recent-change__list__item__name">تاريخ التوزيع</span>
                                <span class="recent-change__list__item__number">{{new
                                    Date(CorporateActions.recentDividends.dividendDate).toLocaleDateString('en-US')}}</span>
                            </li>
                            <li class="recent-change__list__item">
                                <span class="recent-change__list__item__name">ملاحظات</span>
                                <span
                                    class="recent-change__list__item__number">{{CorporateActions.recentDividends.notesAr}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="historical-dividends">
                        <p class="historical-dividends__title">تطور التوزيعات النقدية</p>
                        <div id="historical_dividends_chart" style="width:100%; height:360px;"></div>
                    </div>
                    <div class="main-corporate-actions">
                        <ul class="main-corporate-actions__tabs">
                            <li data-cont=".main-corporate-actions__capital-changes" class="active">تغييرات رأس المال
                            </li>
                            <li data-cont=".main-corporate-actions__dividend-history">تاريخ التوزيعات
                            </li>
                        </ul>
                        <span id="main-corporate-actions__pan-left" class="main-corporate-actions__panner"
                            data-scroll-modifier='-1'>
                            <i class="far fa-arrow-alt-circle-left"></i>
                        </span>
                        <span id="main-corporate-actions__pan-right" class="main-corporate-actions__panner"
                            data-scroll-modifier='1'>
                            <i class="far fa-arrow-alt-circle-right"></i>
                        </span>
                        <div class="main-corporate-actions__container">
                            <div class="main-corporate-actions__capital-changes">
                                <table class="main-corporate-actions__capital-changes__table">
                                    <tr class="main-corporate-actions__capital-changes__table__row">
                                        <td class="main-corporate-actions__capital-changes__table__row__data"></td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data"></td>
                                        <td colspan="2" style="border-right: 1px solid white;"
                                            class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                قبل التغيير
                                            </p>
                                        </td>
                                        <td colspan="2"
                                            style="border-left: 1px solid white; border-right: 1px solid white;"
                                            class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                بعد التغيير
                                            </p>
                                        </td>
                                        <td colspan="3"
                                            class="main-corporate-actions__capital-changes__table__row__data"></td>
                                    </tr>
                                    <tr class="main-corporate-actions__capital-changes__table__row">
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                التاريخ
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                النوع
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                رأس المال (مليون ريال)
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                عدد الأسهم (مليون)
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                رأس المال (مليون ريال)
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                عدد الأسهم (مليون)
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                معدل التغير
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                ملاحظات
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                رابط
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="main-corporate-actions__capital-changes__table__row"
                                        v-for="capitalChange_history in CorporateActions.capitalChangeHistory">
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                {{new
                                                Date(capitalChange_history.tableDate).toLocaleDateString('en-US')}}
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                {{capitalChange_history.typeAr}}
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                {{capitalChange_history.currentCapital}}
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                {{capitalChange_history.currentShares}}
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                {{capitalChange_history.newCapital}}
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                {{capitalChange_history.newShares}}
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                {{capitalChange_history.changeRate}} %
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <p class="main-corporate-actions__capital-changes__table__row__data__text">
                                                {{capitalChange_history.notesAr}}
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__capital-changes__table__row__data">
                                            <a v-show="capitalChange_history.linkAr"
                                                v-bind:href="'capitalChange_history.linkAr'"
                                                class="main-corporate-actions__capital-changes__table__row__data__link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="39.582" height="39.582"
                                                    viewBox="0 0 39.582 39.582">
                                                    <patd id="Icon_awesome-link" data-name="Icon awesome-link"
                                                        d="M25.25,14.332a11.745,11.745,0,0,1,.028,16.59l-.028.029-5.2,5.2A11.751,11.751,0,0,1,3.437,19.527l2.869-2.869a1.236,1.236,0,0,1,2.11.82,14.245,14.245,0,0,0,.749,4.076,1.244,1.244,0,0,1-.292,1.284L7.86,23.851a5.566,5.566,0,1,0,7.821,7.922l5.2-5.194a5.565,5.565,0,0,0,0-7.872,5.791,5.791,0,0,0-.8-.662,1.24,1.24,0,0,1-.537-.975,3.079,3.079,0,0,1,.9-2.3l1.628-1.628A1.242,1.242,0,0,1,23.663,13a11.788,11.788,0,0,1,1.587,1.329Zm10.9-10.9a11.764,11.764,0,0,0-16.618,0l-5.2,5.2L14.3,8.66a11.753,11.753,0,0,0,1.614,17.919,1.242,1.242,0,0,0,1.591-.134l1.628-1.628a3.079,3.079,0,0,0,.9-2.3,1.24,1.24,0,0,0-.537-.975,5.791,5.791,0,0,1-.8-.662,5.565,5.565,0,0,1,0-7.872L23.9,7.81a5.566,5.566,0,1,1,7.821,7.922L30.71,16.743a1.244,1.244,0,0,0-.292,1.284,14.245,14.245,0,0,1,.749,4.076,1.236,1.236,0,0,0,2.11.82l2.869-2.869a11.763,11.763,0,0,0,0-16.618Z"
                                                        fill="#fff" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="main-corporate-actions__dividend-history">
                                <table class="main-corporate-actions__dividend-history__table">
                                    <tr class="main-corporate-actions__dividend-history__table__row">
                                        <td class="main-corporate-actions__dividend-history__table__row__data">
                                            <p class="main-corporate-actions__dividend-history__table__row__data__text">
                                                تاريخ الإعلان
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__dividend-history__table__row__data">
                                            <p class="main-corporate-actions__dividend-history__table__row__data__text">
                                                إجمالي التوزيعات
                                                النقدية (مليون ريال)
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__dividend-history__table__row__data">
                                            <p class="main-corporate-actions__dividend-history__table__row__data__text">
                                                التوزيع النقدي
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__dividend-history__table__row__data">
                                            <p class="main-corporate-actions__dividend-history__table__row__data__text">
                                                إجمالي التوزيعات
                                                النقدية (مليون ريال)
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__dividend-history__table__row__data">
                                            <p class="main-corporate-actions__dividend-history__table__row__data__text">
                                                التوزيع النقدي
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__dividend-history__table__row__data">
                                            <p class="main-corporate-actions__dividend-history__table__row__data__text">
                                                ملاحظات
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="main-corporate-actions__dividend-history__table__row"
                                        v-for="capitalDividend_history in CorporateActions.capitalDividendHistory">
                                        <td class="main-corporate-actions__dividend-history__table__row__data">
                                            <p class="main-corporate-actions__dividend-history__table__row__data__text">
                                                {{new
                                                Date(capitalDividend_history.dividendAnnouncedDate).toLocaleDateString('en-US')}}
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__dividend-history__table__row__data">
                                            <p class="main-corporate-actions__dividend-history__table__row__data__text">
                                                {{new
                                                Date(capitalDividend_history.dividendDueDate).toLocaleDateString('en-US')}}
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__dividend-history__table__row__data">
                                            <p class="main-corporate-actions__dividend-history__table__row__data__text">
                                                {{new
                                                Date(capitalDividend_history.dividendDate).toLocaleDateString('en-US')}}
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__dividend-history__table__row__data">
                                            <p class="main-corporate-actions__dividend-history__table__row__data__text">
                                                {{capitalDividend_history.cashDividend}}
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__dividend-history__table__row__data">
                                            <p class="main-corporate-actions__dividend-history__table__row__data__text">
                                                {{capitalDividend_history.cashDividendPerShare}}
                                            </p>
                                        </td>
                                        <td class="main-corporate-actions__dividend-history__table__row__data">
                                            <p class="main-corporate-actions__dividend-history__table__row__data__text">
                                                {{capitalDividend_history.notesAr}}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widgets-container main-Disclosures">
                    <div class="pr">
                        <span id="pr__panner-left" class="pr__panner" data-scroll-modifier="-1">
                            <i class="far fa-arrow-alt-circle-right"></i>
                        </span>
                        <span id="pr__panner-right" class="pr__panner" data-scroll-modifier="1">
                            <i class="far fa-arrow-alt-circle-left"></i>
                        </span>
                        <div class="pr-scroll-tabs">
                            <ul class="pr__tabs">
                                <!--<li class="active" data-cont=".pr__press-release">الإفصاحات</li>-->

                                <li data-cont=".pr__disclosures">الإفصاحات</li>
                                <li data-cont=".pr__calendar">المفكرة</li>
                                <li data-cont=".pr__latestnews">الأخبار</li>
                                <li data-cont=".pr__analyst_estimates">اراء و توقعات المحللين</li>
                            </ul>
                        </div>
                        <div class="pr__container">
                            <div class="pr__press-release pr__section">
                                <div class="pr__press-release__container">
                                    <!--<div class="pr__press-release__container__row">
                                        <div class="pr__press-release__container__row__line">
                                            <p class="pr__press-release__container__row__line__date">
                                                30/06/2021
                                            </p>
                                            <p class="pr__press-release__container__row__line__data">
                                                Alkhorayef Water signs 9 agreements worth SAR 316.6 mln with NWC
                                            </p>
                                            <span class="pr__press-release__container__row__line__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                                    <g id="Icon_feather-arrow-down-circle" data-name="Icon feather-arrow-down-circle" transform="translate(-1.5 -1.5)">
                                                        <path id="Path_24" data-name="Path 24" d="M48,25.5A22.5,22.5,0,1,1,25.5,3,22.5,22.5,0,0,1,48,25.5Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                                        <path id="Path_25" data-name="Path 25" d="M12,18l9,9,9-9" transform="translate(4.5 7.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                                        <path id="Path_26" data-name="Path 26" d="M18,12V30" transform="translate(7.5 4.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="pr__press-release__container__row__details">
                                            <div class="pr__press-release__container__row__details__close">
                                                <span class="pr__press-release__container__row__details__close__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="52.598" height="52.598" viewBox="0 0 52.598 52.598">
                                                        <path id="Icon_ionic-md-close-circle" data-name="Icon ionic-md-close-circle" d="M29.674,3.375a26.3,26.3,0,1,0,26.3,26.3A26.208,26.208,0,0,0,29.674,3.375Zm13.15,35.767-3.682,3.681-9.468-9.468-9.468,9.468-3.682-3.681,9.468-9.468-9.468-9.468,3.682-3.681,9.468,9.467,9.468-9.467,3.682,3.681-9.468,9.468Z" transform="translate(-3.375 -3.375)" fill="#fff" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="pr__press-release__container__row__details__title">
                                                Alkhorayef Water signs 9 agreements worth SAR 316.6 mln with NWC
                                            </p>
                                            <div class="pr__press-release__container__row__details__data">
                                                <p class="pr__press-release__container__row__details__data__time">
                                                    <span>
                                                        06/09/2021
                                                    </span>
                                                    <span>
                                                        Argaam
                                                    </span>
                                                </p>
                                                <div class="pr__press-release__container__row__details__data__links">
                                                    <a href="#" class="pr__press-release__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.303" height="28.774" viewBox="0 0 57.303 28.774">
                                                            <g id="Icon_feather-link-2" data-name="Icon feather-link-2" transform="translate(2.5 2.5)">
                                                                <path id="Path_22" data-name="Path 22" d="M34.784,10.5h7.132a11.887,11.887,0,1,1,0,23.774H34.784m-14.264,0H13.387a11.887,11.887,0,1,1,0-23.774h7.132" transform="translate(-1.5 -10.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="5" />
                                                                <path id="Path_23" data-name="Path 23" d="M12,18H31.019" transform="translate(4.642 -6.113)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="5" />
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="pr__press-release__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="46.682" height="37.937" viewBox="0 0 46.682 37.937">
                                                            <path id="Icon_metro-twitter" data-name="Icon metro-twitter" d="M49.252,9.308a19.148,19.148,0,0,1-5.5,1.508,9.606,9.606,0,0,0,4.211-5.3,19.173,19.173,0,0,1-6.082,2.324,9.586,9.586,0,0,0-16.32,8.735A27.19,27.19,0,0,1,5.821,6.57,9.588,9.588,0,0,0,8.785,19.357a9.538,9.538,0,0,1-4.338-1.2c0,.04,0,.08,0,.12a9.583,9.583,0,0,0,7.682,9.391,9.593,9.593,0,0,1-4.325.164,9.587,9.587,0,0,0,8.947,6.651,19.215,19.215,0,0,1-11.894,4.1,19.425,19.425,0,0,1-2.285-.134,27.107,27.107,0,0,0,14.681,4.3C34.868,42.754,44.5,28.161,44.5,15.5q0-.623-.028-1.239a19.456,19.456,0,0,0,4.779-4.958Z" transform="translate(-2.57 -4.817)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="pr__press-release__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.938" height="37.937" viewBox="0 0 37.938 37.937">
                                                            <path id="Icon_awesome-whatsapp" data-name="Icon awesome-whatsapp" d="M32.255,7.763A18.805,18.805,0,0,0,2.667,30.449L0,40.187,9.967,37.57a18.742,18.742,0,0,0,8.985,2.286h.008a18.98,18.98,0,0,0,18.977-18.8A18.873,18.873,0,0,0,32.255,7.763ZM18.96,36.69A15.6,15.6,0,0,1,11,34.513l-.567-.339-5.911,1.55L6.1,29.958l-.373-.593a15.656,15.656,0,1,1,29.037-8.307A15.8,15.8,0,0,1,18.96,36.69Zm8.57-11.7c-.466-.237-2.778-1.372-3.209-1.524s-.745-.237-1.059.237-1.211,1.524-1.49,1.846-.55.356-1.016.119c-2.761-1.38-4.573-2.464-6.393-5.589-.483-.83.483-.771,1.38-2.566a.871.871,0,0,0-.042-.821c-.119-.237-1.059-2.549-1.448-3.489-.381-.915-.771-.788-1.059-.8-.271-.017-.584-.017-.9-.017a1.74,1.74,0,0,0-1.253.584A5.278,5.278,0,0,0,9.4,16.883a9.2,9.2,0,0,0,1.914,4.861c.237.313,3.311,5.055,8.028,7.1,2.981,1.287,4.149,1.4,5.64,1.177.906-.135,2.778-1.135,3.167-2.236a3.929,3.929,0,0,0,.271-2.236C28.309,25.334,28,25.215,27.53,24.987Z" transform="translate(0 -2.25)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="pr__press-release__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="38.168" height="37.937" viewBox="0 0 38.168 37.937">
                                                            <path id="Icon_awesome-facebook" data-name="Icon awesome-facebook" d="M38.73,19.646A19.084,19.084,0,1,0,16.665,38.5V25.163H11.817V19.646h4.848v-4.2c0-4.783,2.847-7.424,7.208-7.424a29.37,29.37,0,0,1,4.272.372v4.694H25.738a2.758,2.758,0,0,0-3.11,2.98v3.582h5.293l-.846,5.517H22.628V38.5A19.091,19.091,0,0,0,38.73,19.646Z" transform="translate(-0.563 -0.563)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="pr__press-release__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.938" height="37.937" viewBox="0 0 37.938 37.937">
                                                            <path id="Icon_awesome-linkedin" data-name="Icon awesome-linkedin" d="M35.227,2.25H2.7A2.721,2.721,0,0,0,0,4.985V37.452a2.721,2.721,0,0,0,2.7,2.735H35.227a2.729,2.729,0,0,0,2.71-2.735V4.985A2.729,2.729,0,0,0,35.227,2.25ZM11.466,34.767H5.843v-18.1h5.631v18.1ZM8.654,14.19a3.26,3.26,0,1,1,3.26-3.26A3.262,3.262,0,0,1,8.654,14.19ZM32.543,34.767H26.92V25.961c0-2.1-.042-4.8-2.921-4.8-2.93,0-3.379,2.286-3.379,4.649v8.959H15v-18.1h5.394v2.473h.076a5.922,5.922,0,0,1,5.326-2.921c5.691,0,6.749,3.751,6.749,8.629Z" transform="translate(0 -2.25)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pr__press-release__container__row__details__logo">
                                                <img src="assets/alkhorayef-logo.png" alt="alkhorayef logo">
                                                <p>Logo of Alkhorayef Water and Power Technologies Co.</p>
                                            </div>
                                            <p class="pr__press-release__container__row__details__text">
                                                Alkhorayef Water and Power Technologies Co. (AWPT) signed today, Sept. 6, nine agreements worth SAR 316.61 million with National Water Co. (NWC) to install new water and wastewater connections in nine regions and sectors across the Kingdom.
                                            </p>
                                            <p class="pr__press-release__container__row__details__text">
                                                The agreements are valid for 36 months, the company said in a statement to Tadawul.
                                            </p>
                                            <p class="pr__press-release__container__row__details__text">
                                                Under these agreements, the new connections will be installed in Riyadh Region Riyadh City Sector, Riyadh Region South Sector, Riyadh Region North Sector, Al Madinah Region, Makkah Region Jeddah Sector, Eastern Region Central Sector, Al-Qassim Region, Hail Region and Tabuk Region.
                                            </p>
                                            <p class="pr__press-release__container__row__details__text">
                                                Revenue from the blanket purchase agreements will depend on the actual demand for new water and waste water connections by end users and on NWC awards to the company.
                                            </p>
                                            <p class="pr__press-release__container__row__details__text">
                                                The relevant financial impact is expected to appear in the third quarter of the year, AWPT added, noting that there are no related parties to these agreements.
                                            </p>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                            <div class="pr__calendar pr__section">
                                <table class="pr__calendar__table">
                                    <tr class="pr__calendar__table__row pr__calendar__table__row__header">
                                        <td class="pr__calendar__table__row__data">
                                            <p>
                                                تاريخ
                                            </p>
                                        </td>
                                        <td class="pr__calendar__table__row__data">
                                            <p>
                                                الحدث
                                            </p>
                                        </td>

                                        <td class="pr__calendar__table__row__data">
                                            <p>
                                                الموقع
                                            </p>
                                        </td>
                                        <td class="pr__calendar__table__row__data">
                                            <p>
                                                تفاصيل
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="pr__calendar__table__row pr__calendar__table__row__body"
                                        v-for="event in CompanyOverview.events">
                                        <td class="pr__calendar__table__row__data">
                                            <p>
                                                {{new Date(event.occursOn).toLocaleDateString('en-US')}}
                                            </p>
                                        </td>
                                        <td class="pr__calendar__table__row__data">
                                            <p>
                                                {{event.titleAr}}
                                            </p>
                                        </td>

                                        <td class="pr__calendar__table__row__data">
                                            <p>
                                                {{event.eventLocationAr}}
                                            </p>
                                        </td>
                                        <td class="pr__calendar__table__row__data"
                                            v-on:click="showEventDetails(event.calendarEventID)">
                                            <p>
                                                <i class="fas fa-arrow-left"></i>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                <div class="pr__calendar-modal" v-for="event in CompanyOverview.events"
                                    v-bind:data-cont="'event__'+ event.calendarEventID">
                                    <div class="modal-overlay modal-toggle"></div>
                                    <div class="modal-wrapper modal-transition">
                                        <div class="modal-header">
                                            <h2 class="modal-heading">المفكرة</h2>
                                            <img class="modal-close"
                                                v-on:click="hideEventDetails(event.calendarEventID)"
                                                src="assets/calendar-closeBtn.png">
                                        </div>
                                        <div class="modal-body">
                                            <p class="modal-body__row">
                                                <span class="modal-body__row__name">السوق</span>
                                                <span class="modal-body__row__value">تداول</span>
                                            </p>
                                            <p class="modal-body__row">
                                                <span class="modal-body__row__name">شركة</span>
                                                <span class="modal-body__row__value">الخريف</span>
                                            </p>
                                            <p class="modal-body__row">
                                                <span class="modal-body__row__name">نوع الحدث </span>
                                                <span class="modal-body__row__value"> {{event.titleAr}}</span>
                                            </p>
                                            <p class="modal-body__row">
                                                <span class="modal-body__row__name">تاريخ</span>
                                                <span class="modal-body__row__value">{{new
                                                    Date(event.occursOn).toLocaleDateString('en-US')}}</span>
                                            </p>
                                            <p class="modal-body__row">
                                                <span class="modal-body__row__name">التفاصيل</span>
                                                <span class="modal-body__row__value"
                                                    v-html="event.descriptionAr"></span>
                                            </p>

                                            <p class="modal-body__row">
                                                <span class="modal-body__row__name">الموقع </span>
                                                <span class="modal-body__row__value">{{event.eventLocationAr}}</span>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pr__disclosures pr__section">
                                <div class="pr__disclosures__container">
                                    <div class="pr__disclosures__container__row"
                                        v-for="Article in CompanyOverview.discloser"
                                        v-bind:id="'pr__disclosures_id_'+ Article.articleID">
                                        <div class="pr__disclosures__container__row__line"
                                            v-bind:id="'pr__disclosures_line_'+ Article.articleID">
                                            <p class="pr__disclosures__container__row__line__date">
                                                {{Article.publishedOn}}
                                            </p>
                                            <p class="pr__disclosures__container__row__line__data">
                                                {{Article.title}}
                                            </p>
                                            <span class="pr__disclosures__container__row__line__icon"
                                                v-on:click="openNews('pr__disclosures',Article.articleID,Article,'DontLoadPage')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                                    viewBox="0 0 48 48">
                                                    <g id="Icon_feather-arrow-down-circle"
                                                        data-name="Icon feather-arrow-down-circle"
                                                        transform="translate(-1.5 -1.5)">
                                                        <path id="Path_24" data-name="Path 24"
                                                            d="M48,25.5A22.5,22.5,0,1,1,25.5,3,22.5,22.5,0,0,1,48,25.5Z"
                                                            fill="none" stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="3" />
                                                        <path id="Path_25" data-name="Path 25" d="M12,18l9,9,9-9"
                                                            transform="translate(4.5 7.5)" fill="none" stroke="#fff"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="3" />
                                                        <path id="Path_26" data-name="Path 26" d="M18,12V30"
                                                            transform="translate(7.5 4.5)" fill="none" stroke="#fff"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="3" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="pr__disclosures__container__row__details"
                                            v-bind:id="'pr__disclosures_detail_'+ Article.articleID">
                                            <div class="pr__disclosures__container__row__details__close">
                                                <span class="pr__disclosures__container__row__details__close__icon"
                                                    v-on:click="closeNews('pr__disclosures',Article.articleID)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="52.598"
                                                        height="52.598" viewBox="0 0 52.598 52.598">
                                                        <path id="Icon_ionic-md-close-circle"
                                                            data-name="Icon ionic-md-close-circle"
                                                            d="M29.674,3.375a26.3,26.3,0,1,0,26.3,26.3A26.208,26.208,0,0,0,29.674,3.375Zm13.15,35.767-3.682,3.681-9.468-9.468-9.468,9.468-3.682-3.681,9.468-9.468-9.468-9.468,3.682-3.681,9.468,9.467,9.468-9.467,3.682,3.681-9.468,9.468Z"
                                                            transform="translate(-3.375 -3.375)" fill="#fff" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="pr__disclosures__container__row__details__title">
                                                {{Article.title}}
                                            </p>
                                            <div class="pr__disclosures__container__row__details__data">
                                                <p class="pr__disclosures__container__row__details__data__time">
                                                    <span>
                                                        {{Article.publishedOn}}
                                                    </span>
                                                    <span>
                                                        {{Article.articleSourceName}}
                                                    </span>
                                                </p>
                                                <div class="pr__disclosures__container__row__details__data__links">
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.303"
                                                            height="28.774" viewBox="0 0 57.303 28.774">
                                                            <g id="Icon_feather-link-2" data-name="Icon feather-link-2"
                                                                transform="translate(2.5 2.5)">
                                                                <path id="Path_22" data-name="Path 22"
                                                                    d="M34.784,10.5h7.132a11.887,11.887,0,1,1,0,23.774H34.784m-14.264,0H13.387a11.887,11.887,0,1,1,0-23.774h7.132"
                                                                    transform="translate(-1.5 -10.5)" fill="none"
                                                                    stroke="#fff" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="5" />
                                                                <path id="Path_23" data-name="Path 23" d="M12,18H31.019"
                                                                    transform="translate(4.642 -6.113)" fill="none"
                                                                    stroke="#fff" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="5" />
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="46.682"
                                                            height="37.937" viewBox="0 0 46.682 37.937">
                                                            <path id="Icon_metro-twitter" data-name="Icon metro-twitter"
                                                                d="M49.252,9.308a19.148,19.148,0,0,1-5.5,1.508,9.606,9.606,0,0,0,4.211-5.3,19.173,19.173,0,0,1-6.082,2.324,9.586,9.586,0,0,0-16.32,8.735A27.19,27.19,0,0,1,5.821,6.57,9.588,9.588,0,0,0,8.785,19.357a9.538,9.538,0,0,1-4.338-1.2c0,.04,0,.08,0,.12a9.583,9.583,0,0,0,7.682,9.391,9.593,9.593,0,0,1-4.325.164,9.587,9.587,0,0,0,8.947,6.651,19.215,19.215,0,0,1-11.894,4.1,19.425,19.425,0,0,1-2.285-.134,27.107,27.107,0,0,0,14.681,4.3C34.868,42.754,44.5,28.161,44.5,15.5q0-.623-.028-1.239a19.456,19.456,0,0,0,4.779-4.958Z"
                                                                transform="translate(-2.57 -4.817)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.938"
                                                            height="37.937" viewBox="0 0 37.938 37.937">
                                                            <path id="Icon_awesome-whatsapp"
                                                                data-name="Icon awesome-whatsapp"
                                                                d="M32.255,7.763A18.805,18.805,0,0,0,2.667,30.449L0,40.187,9.967,37.57a18.742,18.742,0,0,0,8.985,2.286h.008a18.98,18.98,0,0,0,18.977-18.8A18.873,18.873,0,0,0,32.255,7.763ZM18.96,36.69A15.6,15.6,0,0,1,11,34.513l-.567-.339-5.911,1.55L6.1,29.958l-.373-.593a15.656,15.656,0,1,1,29.037-8.307A15.8,15.8,0,0,1,18.96,36.69Zm8.57-11.7c-.466-.237-2.778-1.372-3.209-1.524s-.745-.237-1.059.237-1.211,1.524-1.49,1.846-.55.356-1.016.119c-2.761-1.38-4.573-2.464-6.393-5.589-.483-.83.483-.771,1.38-2.566a.871.871,0,0,0-.042-.821c-.119-.237-1.059-2.549-1.448-3.489-.381-.915-.771-.788-1.059-.8-.271-.017-.584-.017-.9-.017a1.74,1.74,0,0,0-1.253.584A5.278,5.278,0,0,0,9.4,16.883a9.2,9.2,0,0,0,1.914,4.861c.237.313,3.311,5.055,8.028,7.1,2.981,1.287,4.149,1.4,5.64,1.177.906-.135,2.778-1.135,3.167-2.236a3.929,3.929,0,0,0,.271-2.236C28.309,25.334,28,25.215,27.53,24.987Z"
                                                                transform="translate(0 -2.25)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="38.168"
                                                            height="37.937" viewBox="0 0 38.168 37.937">
                                                            <path id="Icon_awesome-facebook"
                                                                data-name="Icon awesome-facebook"
                                                                d="M38.73,19.646A19.084,19.084,0,1,0,16.665,38.5V25.163H11.817V19.646h4.848v-4.2c0-4.783,2.847-7.424,7.208-7.424a29.37,29.37,0,0,1,4.272.372v4.694H25.738a2.758,2.758,0,0,0-3.11,2.98v3.582h5.293l-.846,5.517H22.628V38.5A19.091,19.091,0,0,0,38.73,19.646Z"
                                                                transform="translate(-0.563 -0.563)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.938"
                                                            height="37.937" viewBox="0 0 37.938 37.937">
                                                            <path id="Icon_awesome-linkedin"
                                                                data-name="Icon awesome-linkedin"
                                                                d="M35.227,2.25H2.7A2.721,2.721,0,0,0,0,4.985V37.452a2.721,2.721,0,0,0,2.7,2.735H35.227a2.729,2.729,0,0,0,2.71-2.735V4.985A2.729,2.729,0,0,0,35.227,2.25ZM11.466,34.767H5.843v-18.1h5.631v18.1ZM8.654,14.19a3.26,3.26,0,1,1,3.26-3.26A3.262,3.262,0,0,1,8.654,14.19ZM32.543,34.767H26.92V25.961c0-2.1-.042-4.8-2.921-4.8-2.93,0-3.379,2.286-3.379,4.649v8.959H15v-18.1h5.394v2.473h.076a5.922,5.922,0,0,1,5.326-2.921c5.691,0,6.749,3.751,6.749,8.629Z"
                                                                transform="translate(0 -2.25)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pr__disclosures__container__row__details__logo"
                                                v-html="Article.body">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pr__latestnews pr__section">
                                <div class="pr__disclosures__container">
                                    <div class="pr__disclosures__container__row"
                                        v-for="Article in CompanyOverview.latestNews"
                                        v-bind:id="'pr__latestnews_id_'+ Article.articleID">
                                        <div class="pr__disclosures__container__row__line"
                                            v-bind:id="'pr__latestnews_line_'+ Article.articleID">
                                            <p class="pr__disclosures__container__row__line__date">
                                                {{Article.publishedOn}}
                                            </p>
                                            <p class="pr__disclosures__container__row__line__data">
                                                {{Article.title}}
                                            </p>
                                            <span class="pr__disclosures__container__row__line__icon"
                                                v-on:click="openNews('pr__latestnews',Article.articleID,Article,'DontLoadPage')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                                    viewBox="0 0 48 48">
                                                    <g id="Icon_feather-arrow-down-circle"
                                                        data-name="Icon feather-arrow-down-circle"
                                                        transform="translate(-1.5 -1.5)">
                                                        <path id="Path_24" data-name="Path 24"
                                                            d="M48,25.5A22.5,22.5,0,1,1,25.5,3,22.5,22.5,0,0,1,48,25.5Z"
                                                            fill="none" stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="3" />
                                                        <path id="Path_25" data-name="Path 25" d="M12,18l9,9,9-9"
                                                            transform="translate(4.5 7.5)" fill="none" stroke="#fff"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="3" />
                                                        <path id="Path_26" data-name="Path 26" d="M18,12V30"
                                                            transform="translate(7.5 4.5)" fill="none" stroke="#fff"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="3" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="pr__disclosures__container__row__details"
                                            v-bind:id="'pr__latestnews_detail_'+ Article.articleID">
                                            <div class="pr__disclosures__container__row__details__close">
                                                <span class="pr__disclosures__container__row__details__close__icon"
                                                    v-on:click="closeNews('pr__latestnews',Article.articleID)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="52.598"
                                                        height="52.598" viewBox="0 0 52.598 52.598">
                                                        <path id="Icon_ionic-md-close-circle"
                                                            data-name="Icon ionic-md-close-circle"
                                                            d="M29.674,3.375a26.3,26.3,0,1,0,26.3,26.3A26.208,26.208,0,0,0,29.674,3.375Zm13.15,35.767-3.682,3.681-9.468-9.468-9.468,9.468-3.682-3.681,9.468-9.468-9.468-9.468,3.682-3.681,9.468,9.467,9.468-9.467,3.682,3.681-9.468,9.468Z"
                                                            transform="translate(-3.375 -3.375)" fill="#fff" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="pr__disclosures__container__row__details__title">
                                                {{Article.title}}
                                            </p>
                                            <div class="pr__disclosures__container__row__details__data">
                                                <p class="pr__disclosures__container__row__details__data__time">
                                                    <span>
                                                        {{Article.publishedOn}}
                                                    </span>
                                                    <span>
                                                        {{Article.articleSourceName}}
                                                    </span>
                                                </p>
                                                <div class="pr__disclosures__container__row__details__data__links">
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.303"
                                                            height="28.774" viewBox="0 0 57.303 28.774">
                                                            <g id="Icon_feather-link-2" data-name="Icon feather-link-2"
                                                                transform="translate(2.5 2.5)">
                                                                <path id="Path_22" data-name="Path 22"
                                                                    d="M34.784,10.5h7.132a11.887,11.887,0,1,1,0,23.774H34.784m-14.264,0H13.387a11.887,11.887,0,1,1,0-23.774h7.132"
                                                                    transform="translate(-1.5 -10.5)" fill="none"
                                                                    stroke="#fff" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="5" />
                                                                <path id="Path_23" data-name="Path 23" d="M12,18H31.019"
                                                                    transform="translate(4.642 -6.113)" fill="none"
                                                                    stroke="#fff" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="5" />
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="46.682"
                                                            height="37.937" viewBox="0 0 46.682 37.937">
                                                            <path id="Icon_metro-twitter" data-name="Icon metro-twitter"
                                                                d="M49.252,9.308a19.148,19.148,0,0,1-5.5,1.508,9.606,9.606,0,0,0,4.211-5.3,19.173,19.173,0,0,1-6.082,2.324,9.586,9.586,0,0,0-16.32,8.735A27.19,27.19,0,0,1,5.821,6.57,9.588,9.588,0,0,0,8.785,19.357a9.538,9.538,0,0,1-4.338-1.2c0,.04,0,.08,0,.12a9.583,9.583,0,0,0,7.682,9.391,9.593,9.593,0,0,1-4.325.164,9.587,9.587,0,0,0,8.947,6.651,19.215,19.215,0,0,1-11.894,4.1,19.425,19.425,0,0,1-2.285-.134,27.107,27.107,0,0,0,14.681,4.3C34.868,42.754,44.5,28.161,44.5,15.5q0-.623-.028-1.239a19.456,19.456,0,0,0,4.779-4.958Z"
                                                                transform="translate(-2.57 -4.817)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.938"
                                                            height="37.937" viewBox="0 0 37.938 37.937">
                                                            <path id="Icon_awesome-whatsapp"
                                                                data-name="Icon awesome-whatsapp"
                                                                d="M32.255,7.763A18.805,18.805,0,0,0,2.667,30.449L0,40.187,9.967,37.57a18.742,18.742,0,0,0,8.985,2.286h.008a18.98,18.98,0,0,0,18.977-18.8A18.873,18.873,0,0,0,32.255,7.763ZM18.96,36.69A15.6,15.6,0,0,1,11,34.513l-.567-.339-5.911,1.55L6.1,29.958l-.373-.593a15.656,15.656,0,1,1,29.037-8.307A15.8,15.8,0,0,1,18.96,36.69Zm8.57-11.7c-.466-.237-2.778-1.372-3.209-1.524s-.745-.237-1.059.237-1.211,1.524-1.49,1.846-.55.356-1.016.119c-2.761-1.38-4.573-2.464-6.393-5.589-.483-.83.483-.771,1.38-2.566a.871.871,0,0,0-.042-.821c-.119-.237-1.059-2.549-1.448-3.489-.381-.915-.771-.788-1.059-.8-.271-.017-.584-.017-.9-.017a1.74,1.74,0,0,0-1.253.584A5.278,5.278,0,0,0,9.4,16.883a9.2,9.2,0,0,0,1.914,4.861c.237.313,3.311,5.055,8.028,7.1,2.981,1.287,4.149,1.4,5.64,1.177.906-.135,2.778-1.135,3.167-2.236a3.929,3.929,0,0,0,.271-2.236C28.309,25.334,28,25.215,27.53,24.987Z"
                                                                transform="translate(0 -2.25)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="38.168"
                                                            height="37.937" viewBox="0 0 38.168 37.937">
                                                            <path id="Icon_awesome-facebook"
                                                                data-name="Icon awesome-facebook"
                                                                d="M38.73,19.646A19.084,19.084,0,1,0,16.665,38.5V25.163H11.817V19.646h4.848v-4.2c0-4.783,2.847-7.424,7.208-7.424a29.37,29.37,0,0,1,4.272.372v4.694H25.738a2.758,2.758,0,0,0-3.11,2.98v3.582h5.293l-.846,5.517H22.628V38.5A19.091,19.091,0,0,0,38.73,19.646Z"
                                                                transform="translate(-0.563 -0.563)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.938"
                                                            height="37.937" viewBox="0 0 37.938 37.937">
                                                            <path id="Icon_awesome-linkedin"
                                                                data-name="Icon awesome-linkedin"
                                                                d="M35.227,2.25H2.7A2.721,2.721,0,0,0,0,4.985V37.452a2.721,2.721,0,0,0,2.7,2.735H35.227a2.729,2.729,0,0,0,2.71-2.735V4.985A2.729,2.729,0,0,0,35.227,2.25ZM11.466,34.767H5.843v-18.1h5.631v18.1ZM8.654,14.19a3.26,3.26,0,1,1,3.26-3.26A3.262,3.262,0,0,1,8.654,14.19ZM32.543,34.767H26.92V25.961c0-2.1-.042-4.8-2.921-4.8-2.93,0-3.379,2.286-3.379,4.649v8.959H15v-18.1h5.394v2.473h.076a5.922,5.922,0,0,1,5.326-2.921c5.691,0,6.749,3.751,6.749,8.629Z"
                                                                transform="translate(0 -2.25)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pr__disclosures__container__row__details__logo"
                                                v-html="Article.body">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pr__analyst_estimates pr__section">
                                <div class="pr__disclosures__container">
                                    <div class="pr__disclosures__container__row"
                                        v-for="Article in CompanyOverview.analystEstimates"
                                        v-bind:id="'pr__analyst_estimates_id_'+ Article.articleID">
                                        <div class="pr__disclosures__container__row__line"
                                            v-bind:id="'pr__analyst_estimates_line_'+ Article.articleID">
                                            <p class="pr__disclosures__container__row__line__date">
                                                {{Article.publishedOn}}
                                            </p>
                                            <p class="pr__disclosures__container__row__line__data">
                                                {{Article.title}}
                                            </p>
                                            <span class="pr__disclosures__container__row__line__icon"
                                                v-on:click="openNews('pr__analyst_estimates',Article.articleID,Article,'DontLoadPage')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                                    viewBox="0 0 48 48">
                                                    <g id="Icon_feather-arrow-down-circle"
                                                        data-name="Icon feather-arrow-down-circle"
                                                        transform="translate(-1.5 -1.5)">
                                                        <path id="Path_24" data-name="Path 24"
                                                            d="M48,25.5A22.5,22.5,0,1,1,25.5,3,22.5,22.5,0,0,1,48,25.5Z"
                                                            fill="none" stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="3" />
                                                        <path id="Path_25" data-name="Path 25" d="M12,18l9,9,9-9"
                                                            transform="translate(4.5 7.5)" fill="none" stroke="#fff"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="3" />
                                                        <path id="Path_26" data-name="Path 26" d="M18,12V30"
                                                            transform="translate(7.5 4.5)" fill="none" stroke="#fff"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="3" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="pr__disclosures__container__row__details"
                                            v-bind:id="'pr__analyst_estimates_detail_'+ Article.articleID">
                                            <div class="pr__disclosures__container__row__details__close">
                                                <span class="pr__disclosures__container__row__details__close__icon"
                                                    v-on:click="closeNews('pr__analyst_estimates',Article.articleID)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="52.598"
                                                        height="52.598" viewBox="0 0 52.598 52.598">
                                                        <path id="Icon_ionic-md-close-circle"
                                                            data-name="Icon ionic-md-close-circle"
                                                            d="M29.674,3.375a26.3,26.3,0,1,0,26.3,26.3A26.208,26.208,0,0,0,29.674,3.375Zm13.15,35.767-3.682,3.681-9.468-9.468-9.468,9.468-3.682-3.681,9.468-9.468-9.468-9.468,3.682-3.681,9.468,9.467,9.468-9.467,3.682,3.681-9.468,9.468Z"
                                                            transform="translate(-3.375 -3.375)" fill="#fff" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="pr__disclosures__container__row__details__title">
                                                {{Article.title}}
                                            </p>
                                            <div class="pr__disclosures__container__row__details__data">
                                                <p class="pr__disclosures__container__row__details__data__time">
                                                    <span>
                                                        {{Article.publishedOn}}
                                                    </span>
                                                    <span>
                                                        Argaam
                                                    </span>
                                                </p>
                                                <div class="pr__disclosures__container__row__details__data__links">
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.303"
                                                            height="28.774" viewBox="0 0 57.303 28.774">
                                                            <g id="Icon_feather-link-2" data-name="Icon feather-link-2"
                                                                transform="translate(2.5 2.5)">
                                                                <path id="Path_22" data-name="Path 22"
                                                                    d="M34.784,10.5h7.132a11.887,11.887,0,1,1,0,23.774H34.784m-14.264,0H13.387a11.887,11.887,0,1,1,0-23.774h7.132"
                                                                    transform="translate(-1.5 -10.5)" fill="none"
                                                                    stroke="#fff" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="5" />
                                                                <path id="Path_23" data-name="Path 23" d="M12,18H31.019"
                                                                    transform="translate(4.642 -6.113)" fill="none"
                                                                    stroke="#fff" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="5" />
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="46.682"
                                                            height="37.937" viewBox="0 0 46.682 37.937">
                                                            <path id="Icon_metro-twitter" data-name="Icon metro-twitter"
                                                                d="M49.252,9.308a19.148,19.148,0,0,1-5.5,1.508,9.606,9.606,0,0,0,4.211-5.3,19.173,19.173,0,0,1-6.082,2.324,9.586,9.586,0,0,0-16.32,8.735A27.19,27.19,0,0,1,5.821,6.57,9.588,9.588,0,0,0,8.785,19.357a9.538,9.538,0,0,1-4.338-1.2c0,.04,0,.08,0,.12a9.583,9.583,0,0,0,7.682,9.391,9.593,9.593,0,0,1-4.325.164,9.587,9.587,0,0,0,8.947,6.651,19.215,19.215,0,0,1-11.894,4.1,19.425,19.425,0,0,1-2.285-.134,27.107,27.107,0,0,0,14.681,4.3C34.868,42.754,44.5,28.161,44.5,15.5q0-.623-.028-1.239a19.456,19.456,0,0,0,4.779-4.958Z"
                                                                transform="translate(-2.57 -4.817)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.938"
                                                            height="37.937" viewBox="0 0 37.938 37.937">
                                                            <path id="Icon_awesome-whatsapp"
                                                                data-name="Icon awesome-whatsapp"
                                                                d="M32.255,7.763A18.805,18.805,0,0,0,2.667,30.449L0,40.187,9.967,37.57a18.742,18.742,0,0,0,8.985,2.286h.008a18.98,18.98,0,0,0,18.977-18.8A18.873,18.873,0,0,0,32.255,7.763ZM18.96,36.69A15.6,15.6,0,0,1,11,34.513l-.567-.339-5.911,1.55L6.1,29.958l-.373-.593a15.656,15.656,0,1,1,29.037-8.307A15.8,15.8,0,0,1,18.96,36.69Zm8.57-11.7c-.466-.237-2.778-1.372-3.209-1.524s-.745-.237-1.059.237-1.211,1.524-1.49,1.846-.55.356-1.016.119c-2.761-1.38-4.573-2.464-6.393-5.589-.483-.83.483-.771,1.38-2.566a.871.871,0,0,0-.042-.821c-.119-.237-1.059-2.549-1.448-3.489-.381-.915-.771-.788-1.059-.8-.271-.017-.584-.017-.9-.017a1.74,1.74,0,0,0-1.253.584A5.278,5.278,0,0,0,9.4,16.883a9.2,9.2,0,0,0,1.914,4.861c.237.313,3.311,5.055,8.028,7.1,2.981,1.287,4.149,1.4,5.64,1.177.906-.135,2.778-1.135,3.167-2.236a3.929,3.929,0,0,0,.271-2.236C28.309,25.334,28,25.215,27.53,24.987Z"
                                                                transform="translate(0 -2.25)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="38.168"
                                                            height="37.937" viewBox="0 0 38.168 37.937">
                                                            <path id="Icon_awesome-facebook"
                                                                data-name="Icon awesome-facebook"
                                                                d="M38.73,19.646A19.084,19.084,0,1,0,16.665,38.5V25.163H11.817V19.646h4.848v-4.2c0-4.783,2.847-7.424,7.208-7.424a29.37,29.37,0,0,1,4.272.372v4.694H25.738a2.758,2.758,0,0,0-3.11,2.98v3.582h5.293l-.846,5.517H22.628V38.5A19.091,19.091,0,0,0,38.73,19.646Z"
                                                                transform="translate(-0.563 -0.563)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="pr__disclosures__container__row__details__data__links__link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.938"
                                                            height="37.937" viewBox="0 0 37.938 37.937">
                                                            <path id="Icon_awesome-linkedin"
                                                                data-name="Icon awesome-linkedin"
                                                                d="M35.227,2.25H2.7A2.721,2.721,0,0,0,0,4.985V37.452a2.721,2.721,0,0,0,2.7,2.735H35.227a2.729,2.729,0,0,0,2.71-2.735V4.985A2.729,2.729,0,0,0,35.227,2.25ZM11.466,34.767H5.843v-18.1h5.631v18.1ZM8.654,14.19a3.26,3.26,0,1,1,3.26-3.26A3.262,3.262,0,0,1,8.654,14.19ZM32.543,34.767H26.92V25.961c0-2.1-.042-4.8-2.921-4.8-2.93,0-3.379,2.286-3.379,4.649v8.959H15v-18.1h5.394v2.473h.076a5.922,5.922,0,0,1,5.326-2.921c5.691,0,6.749,3.751,6.749,8.629Z"
                                                                transform="translate(0 -2.25)" fill="#fff" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pr__disclosures__container__row__details__logo"
                                                v-html="Article.body">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widgets-container subscription">
                    <div class="subscription-center">
                        <p class="subscription-center--text">اختر من القائمة أدناه ما ترغب في تلقي تحديثات له؟</p>
                        <form class="subscription-center__form">
                            <div class="subscription-center__form__custom-checkbox">
                                <template v-for="alert in Alerts">
                                    <input type="checkbox" class="subscription-center__form__custom-checkbox__input" v-bind:data-cont="alert.alertTypeID" v-bind:id="'cbx__'+ alert.alertTypeID" />
                                    <label class="subscription-center__form__custom-checkbox__label" v-bind:for="'cbx__'+ alert.alertTypeID">{{alert.typeNameAr}}</label>
                                </template>
                            </div>
                            <div class="subscription-center__inputs__container">
                                <input v-model="AlertSubscriber.email"
                                       @change="checkEmailExists"
                                       class="subscription-center__inputs__container--data"
                                       autocomplete="off"
                                       type="text"
                                       id="email-input"
                                       name="inputMail"
                                       placeholder="بريد الالكتروني" />
                                <input v-model="AlertSubscriber.firstName"
                                       class="subscription-center__inputs__container--data"
                                       autocomplete="off"
                                       type="text"
                                       id="first-name-input"
                                       name="firstName"
                                       placeholder="الاسم الاول" />
                                <input v-model="AlertSubscriber.lastName"
                                       class="subscription-center__inputs__container--data"
                                       autocomplete="off"
                                       type="text"
                                       id="last-name-input"
                                       name="lastName"
                                       placeholder="اسم العائلة" />
                                <input v-model="AlertSubscriber.jobTitle" class="subscription-center__inputs__container--data" autocomplete="off" type="text" id="company-input" name="company" placeholder="اسم شركتك" />
                                <div class="subscription-center__custom--country">
                                    <select v-model="AlertSubscriber.countryName" class="subscription-center__custom--country__select">
                                        <option value="" disabled selected>دولة </option>
                                        <option v-for="country in Countries" v-bind:value="country.Value">{{country.NameAr}}</option>
                                    </select>
                                </div>
                                <br />
                                <input v-show="AlertSubscriber.showCode"
                                       v-model="AlertSubscriber.updateCode"
                                       class="subscription-center__inputs__container--data"
                                       autocomplete="off"
                                       type="text"
                                       id="company-input"
                                       name="company"
                                       placeholder="رمز التأكيد" />
                            </div>
                            <p v-bind:class="AlertSubscriber.isError?'error':'info'">{{AlertSubscriber.userMessage}}</p>
                            <a href="#" v-show="!AlertSubscriber.showCode" v-on:click="subscribe" class="subscription-center__subscribe-btn">اشترك</a>
                            <a href="#" v-show="AlertSubscriber.showCode" v-on:click="subscribe" class="subscription-center__subscribe-btn">تحديث الاشتراك</a>

                            <p class="subscription-center__subscribe-link" v-show="AlertSubscriber.showCode">
                                لقد اشتركت بالفعل في خدمة التنبيهات ، يرجى إدخال رمز التأكيد المرسل إلى رسائل البريد الإلكتروني الخاصة بك ، إذا لم يكن لديك رمز التأكيد ، انقر فوق
                                <a href="#" v-on:click="resendConformationCode">هنا</a> لاستلامها.
                            </p>
                        </form>
                    </div>
                </div>  
                <div class="widgets-container contact-us">
                    <div class="contact" v-cloak v-show="Config.OverView.Contact.Visible">
                        <p class="contact__title">التواصل</p>
                        <p class="contact__address" v-cloak v-show="Config.OverView.Contact.Address"><i
                                class="fas fa-map-marker-alt"></i><span>العنوان</span></p>
                        <ul class="contact__address-details" v-cloak v-show="Config.OverView.Contact.Address">
                            <li class="contact__address-details__item">
                                {{CompanyOverview.profileInfo.addressAr}}
                            </li>
                            <li class="contact__address-details__item">
                                {{CompanyOverview.profileInfo.poBoxAr}}
                            </li>

                        </ul>
                        <ul class="contact__contact">
                            <li class="contact__contact__item">
                                <span>
                                    <span style="margin-right: 10px;">Ext: 222</span>
                                    966 11 4000 612
                                </span>
                                <i class="fas fa-phone"></i>
                            </li>
                            <li class="contact__contact__item">
                                <i class="fas fa-fax"></i>
                                <span>
                                    0593999005
                                </span>
                            </li>
                            <li class="contact__contact__item">
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:Awpt-IR@alkhorayef.com" target="_blank">
                                    Awpt-IR@alkhorayef.com
                                </a>
                            </li>
                        </ul>
                        <div class="contact__download" v-cloak v-show="Config.OverView.Contact.DwonloadApp.Visible">
                            <span class="contact__download__link">تحميل التطبيق</span>
                            <div class="contact__download__apps">
                                <div class="contact__download__apps__apple" v-cloak
                                    v-show="Config.OverView.Contact.DwonloadApp.iOS">
                                    <a href="https://apps.apple.com/us/app/alkhorayef/id1578487723" target="_blank"
                                        class="contact__download__apps__apple__link">
                                        <img class="contact__download__apps__apple__link__img"
                                            src="assets/app-store-badge.png" alt="app-store">
                                    </a>
                                </div>
                                <div class="contact__download__apps__andriod" v-cloak
                                    v-show="Config.OverView.Contact.DwonloadApp.Android">
                                    <a href="https://play.google.com/store/apps/details?id=com.danatev.ir_alkhorayef"
                                        target="_blank" class="contact__download__apps__andriod__link">
                                        <img class="contact__download__apps__andriod__link__img"
                                            src="assets/google-play-badge.png" alt="google-play">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div class="footer noprint">
            <div class="footer__row">
                <div class="footer__row__notice">
                    جميع الحقوق محفوظة، شركة الخريف لتقنية المياه و الطاقة
                    <script>document.write(new Date().getFullYear());</script>
                </div>
                <div class="footer__row__social">
                    <a class="footer__row__social__link"
                        href="https://www.linkedin.com/company/alkhorayefwater&amp;powertechnologies/" target="_blank"
                        title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a class="footer__row__social__link" href="https://twitter.com/AWPTCO" target="_blank"
                        title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="footer__row__social__link"
                        href="https://www.youtube.com/channel/UCJQtpZ26p2a4HSSF8-OCs7A/featured?disable_polymer=1"
                        target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/jquery.preloadinator.min.js"></script>
    <script src="js/pignose.calendar.min.js"></script>
    <script src="js/axios.min.js"></script>

    <script src="js/app-config.js"></script>
    <script src="js/alkhorayefapp.js?v=823783782393"></script>
    <script src="js/main.js?v=823783782393"></script>
</body>

</html>