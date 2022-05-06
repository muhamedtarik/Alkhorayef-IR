

const api_user = "AWPT_IR_SERVICES"; //Argaam API User
const api_password = "D44B21-DF4A51C4CF80453C857BE8F-A0302F-5D"; // Argaam API Password
const baseUrl = "https://data.argaam.com";
const api_version = '1.0';
const formatter = new Intl.NumberFormat('en-US', {
    minimumFractionDigits: 2,
    maximumFractionDigits: 2,
});
const toRealNumber = new Intl.NumberFormat("en-US", {
    minimumFractionDigits: 0,
    maximumFractionDigits: 0,
});
var alkhorayefapp = new Vue({
    el: "#alkhorayefapp",
    data: {
        Config: appConfig,
        Language: "en",
        Loading: {},
        _token: '',
        MonthNames: ['يناير', 'فبراير', 'مارس', 'أبريل ', 'مايو', 'يونيو ', 'يوليو ', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'],
        accessTokenExpireIn: new Date(2020),
        PageLoading: false,
        CurrentPageName: 'overview',
        chartData: [],
        MarketValue : 0,
        CompanyOverview: {
            prices: [
                {
                    marketID: 0,
                    companyID: 0,
                    bid: "",
                    tradingDate: "",
                    openValue: 0,
                    closeValue: 0,
                    previousCloseValue: 0,
                    high: 0,
                    low: 0,
                    change: 0,
                    volume: 0,
                    amount: 0,
                    percentageChange: 0
                }
            ],
            profileInfo: {
                companyID: 0,
                marketID: 0,
                bid: "",
                companyNameAr: "",
                companyNameEn: "",
                cityNameEn: "",
                cityNameAr: "",
                addressEn: "",
                addressAr: "",
                poBoxEn: "",
                phone: "",
                fax: "",
                poBoxAr: "",
                email: "",
                websiteURL: "",
                summaryEn: "",
                summaryAr: "",
                overviewEn: "",
                overviewAr: "",
                ticker: ""
            },
            events: [
                {
                    calendarEventID: 0,
                    marketID: 0,
                    companyID: 0,
                    occursOn: "2021-08-29T10:20:30.482Z",
                    titleEn: "",
                    titleAr: "",
                    descriptionEn: "",
                    descriptionAr: "",
                    calendarEventTypeID: 0,
                    eventLocationAr: "",
                    eventLocationEn: "",
                    articleLinkURLAr: "",
                    articleLinkURLEn: "",
                    latitude: "",
                    longitude: ""
                }
            ],
            financialResultPdf: {
                companyNameEn: "",
                companyNameAr: "",
                company: 0,
                year: 0,
                files: [
                    {
                        year: 0,
                        fiscalPeriod: "",
                        fileURLAr: "",
                        fileURLEn: ""
                    }
                ],
                marketID: 0
            },
            financialRatios: {
                period: "",
                forYear: 0,
                fields: [
                    {
                        ratioName: "",
                        nameEn: "",
                        nameAr: "",
                        values: {
                            year: "",
                            period: "",
                            value: ""
                        }
                    }
                ]
            },
            discloser: [
                {
                    articleID: 0,
                    languageID: 0,
                    language: "",
                    title: "",
                    publishedOn: "",
                    link: "",
                    isLinked: true,
                    linkedToURL: "",
                    isPaid: true,
                    articleSourceName: "",
                    articleType: "",
                    articleTypeNameAr: "",
                    articleTypeNameEn: "",
                    marketTickerIDs: "",
                    body: "<span>Loading...</span>",
                    marketTickerChartIDs: [
                        ""
                    ],
                    companyTickerIDs: "",
                    companyTickerChartIDs: [
                        ""
                    ]
                }
            ],
            latestNews: [
                {
                    articleID: 0,
                    languageID: 0,
                    language: "",
                    title: "",
                    publishedOn: "",
                    link: "",
                    isLinked: true,
                    linkedToURL: "",
                    isPaid: true,
                    articleSourceName: "",
                    articleType: "",
                    articleTypeNameAr: "",
                    articleTypeNameEn: "",
                    marketTickerIDs: "",
                    marketTickerChartIDs: [
                        ""
                    ],
                    companyTickerIDs: "",
                    body: "<span>Loading...</span>",
                    companyTickerChartIDs: [
                        ""
                    ]
                }
            ],
            analystEstimates: [
                {
                    articleID: 0,
                    languageID: 0,
                    language: "",
                    title: "",
                    publishedOn: "",
                    link: "",
                    isLinked: true,
                    linkedToURL: "",
                    isPaid: true,
                    articleSourceName: "",
                    articleType: "",
                    articleTypeNameAr: "",
                    articleTypeNameEn: "",
                    marketTickerIDs: "",
                    body: "<span>Loading...</span>",
                    marketTickerChartIDs: [
                        ""
                    ],
                    companyTickerIDs: "",
                    companyTickerChartIDs: [
                        ""
                    ]
                }
            ],
            companyStockSummary: {
                companyStockPriceID: 0,
                companyID: 0,
                companyNameEn: "",
                companyNameAr: "",
                marketID: 0,
                marketNameEn: "",
                marketNameAr: "",
                sectorID: 0,
                sectorNameEn: "",
                sectorNameAr: "",
                marketStatusID: 0,
                defaultMarketID: 0,
                forDate: "2021-08-29T10:20:30.483Z",
                recordStatus: 0,
                displaySeqNo: 0,
                openValue: 0,
                closeValue: 0,
                dailyClose: 0,
                previousCloseValue: 0,
                high: 0,
                low: 0,
                indexValue: 0,
                change: 0,
                percentageChange: 0,
                volume: 0,
                amount: 0,
                contractCount: 0,
                avgVolume3Months: 0,
                avgTransactions3Months: 0,
                highPrice52weeks: 0,
                lowPrice52weeks: 0,
                y2TDChange: 0,
                ytdChange: 0,
                month6Change: 0,
                month3Change: 0,
                month2Change: 0,
                month1Change: 0,
                weekChange: 0,
                ybgnChange: 0,
                y2TDFirstChange: 0,
                y2TDFirstDate: "2021-08-29T10:20:30.483Z",
                lastProcessedEntryNo: 0,
                avgVolume12Months: 0,
                avgTransactions12Months: 0,
                avgTurnover12Months: 0,
                avgTurnover3Months: 0,
                groupID: 0,
                groupCompaniesID: 0,
                shortNameAr: "",
                shortNameEn: "",
                marketValue: 0
            },
            dividandInfo: {
                totalRecords: 0,
                companyDividendInformationID: 0,
                companyID: 0,
                capital: 0.0,
                dividendDate: "2021-08-29T10:20:30.483Z",
                dividendAnnouncedDate: "2021-08-29T10:20:30.483Z",
                dividendDueDate: "2021-08-29T10:20:30.483Z",
                companyDividendStatusID: 0,
                cashDividend: 0,
                bonusShareDistributed: 0,
                dividendPercentage: 0,
                notesEn: "",
                notesAr: "",
                createdOn: "2021-08-29T10:20:30.483Z",
                dividendPolicy: "",
                companyDividendStatusNameEn: "",
                companyDividendStatusNameAr: "",
                numberOfShares: 0,
                cashDividendPerShare: 0,
                measuringUnitNameAr: "",
                measuringUnitNameEn: "",
                currencyNameAr: "",
                currencyNameEn: "",
                fundSize: 0,
                sectorID: 0
            },
            cpaitalSummary: {
                companyCapitalID: 0,
                companyID: 0,
                marketID: 0,
                companyCapitalStatusID: 0,
                currentCapital: 0,
                currentShares: 0,
                bonusShares: 0,
                announcedDate: "2021-08-29T10:20:30.483Z",
                dueDate: "2021-08-29T10:20:30.483Z",
                splitDate: "2021-08-29T10:20:30.483Z",
                notesAr: "",
                notesEn: "",
                linkAr: "",
                linkEn: "",
                newCapital: 0,
                newShares: 0,
                measuringUnitID: 0,
                currencyID: 0,
                companyCapitalStatusNameAr: "",
                companyCapitalStatusNameEn: "",
                measuringUnitNameAr: "",
                measuringUnitNameEn: "",
                currencyNameAr: "",
                currencyNameEn: ""
            }
        },
        CompanyProfile: {
            profileInfo: {
                companyID: 0,
                marketID: 0,
                bid: "",
                companyNameAr: "",
                companyNameEn: "",
                cityNameEn: "",
                cityNameAr: "",
                addressEn: "",
                addressAr: "",
                poBoxEn: "",
                phone: "",
                fax: "",
                poBoxAr: "",
                email: "",
                websiteURL: "",
                summaryEn: "",
                summaryAr: "",
                overviewEn: "",
                overviewAr: "",
                ticker: ""
            },
            financialHighlights: [
                {
                    CompanyID: 0,
                    FSFieldName: "",
                    DisplayNameAr: "",
                    DisplayNameEn: "",
                    IsCurrency: false,
                    Currency: "SAR",
                    "2020": 0,
                    "2019": 0,
                    "2018": 0,
                    "2017": 0,
                    "2016": 0
                }
            ],
            tradingData: {
                freeFloatedShareID: 0,
                companyID: 0,
                marketID: 0,
                measuringUnitID: 0,
                freeFloatShareValue: 0,
                announcedDate: "2021-08-30T13:10:44.806Z",
                fiscalPeriodID: 0,
                isDeleted: true,
                createdOn: "2021-08-30T13:10:44.806Z",
                createdBy: 0,
                updatedOn: "2021-08-30T13:10:44.806Z",
                updatedBy: 0,
                totalItems: 0,
                totalCompanies: 0,
                companyName: "",
                measuringUnit: "",
                marketName: "",
                aggregatedValues: 0,
                sectorName: "",
                gicsSectorName: "",
                numberOfShares: 0,
                numberOfFreeShares: 0,
                percentage: 0,
                freeFloatedShareMarketValue: 0,
                companyWeight: 0,
                companyNameEn: "",
                companyNameAr: "",
                shortNameAr: "",
                shortNameEn: "",
                measuringUnitNameAr: "",
                measuringUnitNameEn: "",
                freeFloatedShareValues: "",
                year: 0,
                month: 0,
                sectorID: 0,
                date: "",
                hasOnlyBasicProfile: true,
                yearEndMonth: 0,
                avgTransactions3Months: 0,
                avgVolume3Months: 0,
                marketNameAr: "",
                marketNameEn: "",
                foreignOwnerShip: 0
            },
            stockInfo: {
                companyID: 0,
                viewCount: 0,
                addressEn: "",
                addressAr: "",
                establishedOn: "",
                establishedOnDay: 0,
                establishedOnMonth: 0,
                establishedOnYear: 0,
                poBoxEn: "",
                poBoxAr: "",
                email: "",
                websiteURL: "",
                summaryEn: "",
                summaryAr: "",
                overviewEn: "",
                overviewAr: "",
                createdOn: "2021-08-30T13:10:44.806Z",
                updatedOn: "2021-08-30T13:10:44.806Z",
                phone: "",
                fax: "",
                numberOfShares: 0,
                numberOfSharesMeasuringUnitID: 0,
                nominalValue: 0,
                nominalValueMeasuringUnitID: 0,
                businessSegmentOverviewAr: "",
                businessSegmentOverviewEn: "",
                geoLocationSegmentOverviewEn: "",
                geoLocationSegmentOverviewAr: "",
                fiscalPeriodStartMonth: 0,
                foreignOwnerShip: 0,
                dividends: 0,
                marketValue: 0,
                bookValue: 0
            },
            majorShareholder: [
                {
                    shareholderID: 0,
                    shareholderNameAr: "",
                    shareholderNameEn: "",
                    shareholderTypeNameAr: "",
                    shareholderTypeNameEn: "",
                    noOfShares: 0,
                    marketValue: 0,
                    percentage: 0,
                    notesAr: "",
                    notesEn: ""
                }
            ],
            
            milestones: [
                {
                    companyID: 0,
                    titleAr: "",
                    titleEn: "",
                    developmentDay: 0,
                    developmentMonth: 0,
                    developmentYear: 0,
                    fullDate: "",
                    articleLinkAr: "",
                    articleLinkEn: "",
                    totalRecords: ""
                }
            ]
        },
        BoardOfDirectors: [
            {
                nameEn: "",
                nameAr: "",
                position: "",
                currentPercentage: 0,
                lastPercentage: 0,
                change: 0
            }
        ],
        CompanyChart: {
            fromDate: "",
            toDate: "",
            chartsData: [
                {
                    totalRecords: 0,
                    change: 0,
                    percentageChange: 0,
                    forTime: "",
                    companyStockPriceArchiveID: 0,
                    forDate: "",
                    tcCompanyID: 0,
                    companyID: 0,
                    entryNumber: 0,
                    volume: 0,
                    amount: 0,
                    open: 0,
                    close: 0,
                    min: 0,
                    max: 0,
                    contractCount: 0,
                    tcMarketID: 0,
                    marketID: 0
                }
            ]
        },
        CompanyOrganizationStructure: {
            individuals: [
                {
                    individualID: 0,
                    nameEn: "",
                    nameAr: "",
                    positionID: 0,
                    positionNameEn: "",
                    positionNameAr: "",
                    companyPositionTypeID: 0,
                    companyPositionTypeNameAr: "",
                    companyPositionTypeNameEn: "",
                    profilePicURL: "assets/avatar1.png",
                    resumeHighLightAr: '',
                    resumeHighLightEn: '',
                    positionHistory: [
                        {
                            companyNameAr: "",
                            companyNameEn: "",
                            positionNameAr: "",
                            positionNameEn: "",
                            startedOn: "",
                            endedOn: ""
                        }
                    ]
                }
            ],
            Salaries: [
                {
                    year: 0,
                    boardMembersRenumerations: {
                        salaries: 0,
                        bonuses: 0,
                        otherRewards: 0,
                        total: 0,
                        notesEn: "",
                        notesAr: ""
                    },
                    executivesRenumerations: {
                        salaries: 0,
                        bonuses: 0,
                        otherRewards: 0,
                        total: 0,
                        notesEn: "",
                        notesAr: ""
                    },
                    totalsRenumerations: {
                        salaries: 0,
                        bonuses: 0,
                        otherRewards: 0,
                        total: 0,
                        notesEn: "",
                        notesAr: ""
                    }
                }
            ]
        },
        MajorShareholders: {
            shareholders: [
                {
                    shareholderID: 0,
                    shareholderNameAr: "",
                    shareholderNameEn: "",
                    shareholderTypeNameAr: "",
                    shareholderTypeNameEn: "",
                    noOfShares: 0,
                    marketValue: 0,
                    percentage: 0,
                    notesAr: "",
                    notesEn: ""
                }
            ],
            foreignOwnerships: [
                {
                    companyNameAr: "",
                    companyNameEn: "",
                    companyID: 0,
                    qfiMaximum: 0,
                    qfiActual: 0,
                    tfoMaximum: 0,
                    tfoActual: 0
                }
            ]
        },
        FinancialResults: {
            financialResults: [
                {
                    year: 0,
                    q1en: "",
                    q1ar: "",
                    q2en: "",
                    q2ar: "",
                    q3en: "",
                    q3ar: "",
                    q4en: "",
                    q4ar: "",
                    annualen: "",
                    annualar: "",
                    managementen: "",
                    managementar: ""
                }
            ]
        },
        CompanyProjects: {
            projects: [
                {
                    projectID: 0,
                    announcedDate: "",
                    projectNameAr: "",
                    projectNameEn: "",
                    countryNameAr: "",
                    countryNameEn: "",
                    cost: 0,
                    projectStatusNameAr: "",
                    projectStatusNameEn: "",
                    startDate: "",
                    expectedCompletionDate: ""
                }
            ],
            news: [
                {
                    articleid: "",
                    title: "",
                    source: "",
                    date: "",
                    link: "",
                }
            ]
        },
        CorporateActions: {
            recentDividends: {
                totalRecords: 0,
                companyDividendInformationID: 0,
                companyID: 0,
                dividendDate: "",
                dividendAnnouncedDate: "",
                dividendDueDate: "",
                companyDividendStatusID: 0,
                cashDividend: 0,
                bonusShareDistributed: 0,
                dividendPercentage: 0,
                notesEn: "",
                notesAr: "",
                createdOn: "",
                dividendPolicy: "",
                companyDividendStatusNameEn: "",
                companyDividendStatusNameAr: "",
                numberOfShares: 0,
                cashDividendPerShare: 0,
                measuringUnitNameAr: "",
                measuringUnitNameEn: "",
                currencyNameAr: "",
                currencyNameEn: "",
                fundSize: 0,
                sectorID: 0
            },
            capitalChanges: {
                companyCapitalStatusNameAr: "",
                companyCapitalStatusNameEn: "",
                measuringUnitNameAr: "",
                measuringUnitNameEn: "",
                currencyNameAr: "",
                currencyNameEn: "",
                companyCapitalID: 0,
                companyID: 0,
                marketID: 0,
                companyCapitalStatusID: 0,
                currentCapital: 0,
                currentShares: 0,
                bonusShares: 0,
                announcedDate: "",
                dueDate: "",
                splitDate: "",
                notesAr: "",
                notesEn: "",
                linkAr: "",
                linkEn: "",
                newCapital: 0,
                newShares: 0,
                measuringUnitID: 0,
                currencyID: 0
            },
            capitalChangeHistory: [
                {
                    ipoid: 0,
                    companyID: 0,
                    tableDate: "",
                    typeEn: "",
                    typeAr: "",
                    currentCapital: 0,
                    currentShares: 0,
                    newCapital: 0,
                    newShares: 0,
                    offeredPercentage: 0,
                    changeRate: 0,
                    notesAr: "",
                    notesEn: "",
                    linkAr: "",
                    linkEn: "",
                    ipoStatusID: 0,
                    statusNameAr: "",
                    statusNameEn: ""
                }
            ],
            capitalDividendHistory: [
                {
                    totalRecords: 0,
                    companyDividendInformationID: 0,
                    companyID: 0,
                    dividendDate: "",
                    dividendAnnouncedDate: "",
                    dividendDueDate: "",
                    companyDividendStatusID: 0,
                    cashDividend: 0,
                    bonusShareDistributed: 0,
                    dividendPercentage: 0,
                    notesEn: "",
                    notesAr: "",
                    createdOn: "",
                    dividendPolicy: "",
                    companyDividendStatusNameEn: "",
                    companyDividendStatusNameAr: "",
                    numberOfShares: 0,
                    cashDividendPerShare: 0,
                    measuringUnitNameAr: "",
                    measuringUnitNameEn: "",
                    currencyNameAr: "",
                    currencyNameEn: "",
                    fundSize: "",
                    sectorID: 0
                }
            ],
            capitalChartData: [{ Capital: 0, FinancialYear: 200 }],
            dividendsChartData: [{ CashDividend: 0, FinancialYear: 200 }],
        },
        CompanyFStatements: {
            tabs: [
                {
                    tabNameEn: "",
                    tabNameAr: "",
                    fields: [
                        {
                            displayNameEn: "",
                            displayNameAr: "",
                            isCurrency: false,
                            currency: '',
                            values: [
                                {
                                    fiscalPeriod: "",
                                    value: 0
                                }
                            ]
                        }
                    ]
                }
            ]
        },
        CompanyFRatios: {
            financialRatioFieldsGroups: [
                {
                    fieldGroupAr: "",
                    fieldGroupEn: "",
                    groupSeqNo: 0,
                    financialRatioFieldsGroupFields: [
                        {
                            ratioName: "",
                            nameEn: "",
                            nameAr: "",
                            isCurrency: false,
                            currency: '',
                            values: [
                                {
                                    year: "",
                                    period: "",
                                    value: ""
                                }
                            ]
                        }
                    ]
                }
            ]
        },
        SelectedTab: { CompanyOverview: false, Page: false, CompanyProfile: false },
        Alerts: [
            {
                alertTypeID: 0,
                typeNameEn: "",
                typeNameAr: "",
                isRange: false,
                rangeType: null,
            },
        ],
        Countries: [
            { NameEn: "Algeria", NameAr: "الجزائر", Value: "Algeria" },
            { NameEn: "Andorra", NameAr: "أندورا", Value: "Andorra" },
            { NameEn: "Angola", NameAr: "أنغولا", Value: "Angola" },
            { NameEn: "Anguilla", NameAr: "أنغويلا", Value: "Anguilla" },
            { NameEn: "Argentina", NameAr: "الأرجنتين", Value: "Argentina" },
            { NameEn: "Australia", NameAr: "أستراليا", Value: "Australia" },
            { NameEn: "Austria", NameAr: "النمسا", Value: "Austria" },
            { NameEn: "Bahamas", NameAr: "البهاما", Value: "Bahamas" },
            { NameEn: "Bahrain", NameAr: "البحرين", Value: "Bahrain" },
            { NameEn: "Bangladesh", NameAr: "بنغلاديش", Value: "Bangladesh" },
            { NameEn: "Barbados", NameAr: "باربادوس", Value: "Barbados" },
            { NameEn: "Belgium", NameAr: "بلجيكا", Value: "Belgium" },
            { NameEn: "Belize", NameAr: "بليز", Value: "Belize" },
            { NameEn: "Benin", NameAr: "بنين", Value: "Benin" },
            { NameEn: "Bermuda", NameAr: "جزر برمود", Value: "Bermuda" },
            { NameEn: "Bhutan", NameAr: "بوتان", Value: "Bhutan" },
            { NameEn: "Bolivia", NameAr: "بوليفيا", Value: "Bolivia" },
            { NameEn: "Bosina & Herzegovina", NameAr: "البوسنة و الهرسك", Value: "Bosina & Herzegovina" },
            { NameEn: "Botswana", NameAr: "بوتسوانا", Value: "Botswana" },
            { NameEn: "Brazil", NameAr: "البرازيل", Value: "Brazil" },
            { NameEn: "Bulgaria", NameAr: "بلغاريا", Value: "Bulgaria" },
            { NameEn: "Burma", NameAr: "ميانمار", Value: "Burma" },
            { NameEn: "Canada", NameAr: "كندا", Value: "Canada" },
            { NameEn: "Chile", NameAr: "تشيلي", Value: "Chile" },
            { NameEn: "China", NameAr: "الصين", Value: "China" },
            { NameEn: "Costa Rica", NameAr: "كوستاريكا", Value: "Costa Rica" },
            { NameEn: "Cuba", NameAr: "كوبا", Value: "Cuba" },
            { NameEn: "Cyprus", NameAr: "قبرص", Value: "Cyprus" },
            { NameEn: "Czech", NameAr: "التشيك", Value: "Czech" },
            { NameEn: "Denmark", NameAr: "الدنمارك", Value: "Denmark" },
            { NameEn: "Ecuador", NameAr: "الإكوادور", Value: "Ecuador" },
            { NameEn: "Egypt", NameAr: "مصر", Value: "Egypt" },
            { NameEn: "Eritrea", NameAr: "إريتريا", Value: "Eritrea" },
            { NameEn: "Ethiopia", NameAr: "إثيوبيا", Value: "Ethiopia" },
            { NameEn: "Falkland Islands", NameAr: "جزر فوكلاند", Value: "Falkland Islands" },
            { NameEn: "Faroe Island", NameAr: "جزر فارو", Value: "Faroe Island" },
            { NameEn: "Fiji", NameAr: "فيجي", Value: "Fiji" },
            { NameEn: "Finland", NameAr: "فنلندا", Value: "Finland" },
            { NameEn: "France", NameAr: "فرنسا", Value: "France" },
            { NameEn: "French Guyana", NameAr: "غويانا الفرنسية", Value: "French Guyana" },
            { NameEn: "French Polynesia", NameAr: "بولينيزيا الفرنسية", Value: "French Polynesia" },
            { NameEn: "Gabon", NameAr: "الغابون", Value: "Gabon" },
            { NameEn: "Gambia", NameAr: "غامبيا", Value: "Gambia" },
            { NameEn: "Georgia", NameAr: "جيورجيا", Value: "Georgia" },
            { NameEn: "Germany", NameAr: "ألمانيا", Value: "Germany" },
            { NameEn: "Ghana", NameAr: "غانا", Value: "Ghana" },
            { NameEn: "Gibralter", NameAr: "جبل طارق", Value: "Gibralter" },
            { NameEn: "Greece", NameAr: "اليونان", Value: "Greece" },
            { NameEn: "Greenland", NameAr: "جرينلاند", Value: "Greenland" },
            { NameEn: "Guadeloupe", NameAr: "جزر جوادلوب", Value: "Guadeloupe" },
            { NameEn: "Guam", NameAr: "جوام", Value: "Guam" },
            { NameEn: "Guatemala", NameAr: "غواتيمال", Value: "Guatemala" },
            { NameEn: "Guinea", NameAr: "غينيا", Value: "Guinea" },
            { NameEn: "Guyana Rep.", NameAr: "غيانا", Value: "Guyana Rep." },
            { NameEn: "Haiti Rep.", NameAr: "هايتي", Value: "Haiti Rep." },
            { NameEn: "Honduras Rep.", NameAr: "هندوراس", Value: "Honduras Rep." },
            { NameEn: "Hong Kong", NameAr: "هونغ كونغ", Value: "Hong Kong" },
            { NameEn: "Hungary", NameAr: "المجر", Value: "Hungary" },
            { NameEn: "Iceland", NameAr: "آيسلندا", Value: "Iceland" },
            { NameEn: "India", NameAr: "الهند", Value: "India" },
            { NameEn: "Indonesia", NameAr: "إندونيسيا", Value: "Indonesia" },
            { NameEn: "Iran", NameAr: "ايران", Value: "Iran" },
            { NameEn: "Iraq", NameAr: "العراق", Value: "Iraq" },
            { NameEn: "Ireland", NameAr: "أيرلندا", Value: "Ireland" },
            { NameEn: "Isreal", NameAr: "إسرائيل", Value: "Isreal" },
            { NameEn: "Italy", NameAr: "إيطاليا", Value: "Italy" },
            { NameEn: "Ivory Coast", NameAr: "ساحل العاج", Value: "Ivory Coast" },
            { NameEn: "Jamaica", NameAr: "جمايكا", Value: "Jamaica" },
            { NameEn: "Japan", NameAr: "اليابان", Value: "Japan" },
            { NameEn: "Jordan", NameAr: "الاردن", Value: "Jordan" },
            { NameEn: "Kenya", NameAr: "كينيا", Value: "Kenya" },
            { NameEn: "Kiribati", NameAr: "كيريباتي", Value: "Kiribati" },
            { NameEn: "North Korea", NameAr: "كوريا الشمالية", Value: "North Korea" },
            { NameEn: "Kuwait", NameAr: "الكويت", Value: "Kuwait" },
            { NameEn: "Latvia", NameAr: "لاتفيا", Value: "Latvia" },
            { NameEn: "Lebanon", NameAr: "لبنان", Value: "Lebanon" },
            { NameEn: "Liberia Rep.", NameAr: "ليبيريا", Value: "Liberia Rep." },
            { NameEn: "Libya", NameAr: "ليبيا", Value: "Libya" },
            { NameEn: "Liechtenstein", NameAr: "ليختنشتين", Value: "Liechtenstein" },
            { NameEn: "Lithuania", NameAr: "لتوانيا", Value: "Lithuania" },
            { NameEn: "Luxembourg", NameAr: "لوكسمبورغ", Value: "Luxembourg" },
            { NameEn: "Macao", NameAr: "ماكاو", Value: "Macao" },
            { NameEn: "Madagascar", NameAr: "مدغشقر", Value: "Madagascar" },
            { NameEn: "Malawi", NameAr: "مالاوي", Value: "Malawi" },
            { NameEn: "Malaysia", NameAr: "ماليزيا", Value: "Malaysia" },
            { NameEn: "Maldives", NameAr: "جزر المالديف", Value: "Maldives" },
            { NameEn: "Mali Rep.", NameAr: "مالي", Value: "Mali Rep." },
            { NameEn: "Malta", NameAr: "مالطا", Value: "Malta" },
            { NameEn: "Mauritius", NameAr: "موريشيوس", Value: "Mauritius" },
            { NameEn: "Mayotee", NameAr: "مايوت", Value: "Mayotee" },
            { NameEn: "Mexico", NameAr: "المكسيك", Value: "Mexico" },
            { NameEn: "Mongolia Rep.", NameAr: "منغوليا", Value: "Mongolia Rep." },
            { NameEn: "Morocco", NameAr: "المغرب", Value: "Morocco" },
            { NameEn: "Mozambique", NameAr: "موزمبيق", Value: "Mozambique" },
            { NameEn: "Myanmar", NameAr: "بورما", Value: "Myanmar" },
            { NameEn: "Namibia", NameAr: "ناميبيا", Value: "Namibia" },
            { NameEn: "Nauru Rep.", NameAr: "ناورو", Value: "Nauru Rep." },
            { NameEn: "Nepal", NameAr: "نيبال", Value: "Nepal" },
            { NameEn: "Netherlands", NameAr: "هولندا", Value: "Netherlands" },
            { NameEn: "New Zealand", NameAr: "نيوزيلندا", Value: "New Zealand" },
            { NameEn: "Nicaragua", NameAr: "نيكاراجوا", Value: "Nicaragua" },
            { NameEn: "Niger Rep.", NameAr: "النيجر", Value: "Niger Rep." },
            { NameEn: "Nigeria Rep.", NameAr: "نيجيريا", Value: "Nigeria Rep." },
            { NameEn: "Norfolk Island", NameAr: "جزيرة نورفولك", Value: "Norfolk Island" },
            { NameEn: "Norway", NameAr: "النرويج", Value: "Norway" },
            { NameEn: "Oman", NameAr: "سلطنة عمان", Value: "Oman" },
            { NameEn: "Pakistan", NameAr: "باكستان", Value: "Pakistan" },
            { NameEn: "Palau", NameAr: "بالاو", Value: "Palau" },
            { NameEn: "Panama", NameAr: "بنما", Value: "Panama" },
            { NameEn: "Paraguay", NameAr: "باراغواي", Value: "Paraguay" },
            { NameEn: "Peru", NameAr: "بيرو", Value: "Peru" },
            { NameEn: "Phillipines", NameAr: "الفلبين", Value: "Phillipines" },
            { NameEn: "Poland", NameAr: "بولندا", Value: "Poland" },
            { NameEn: "Portugal", NameAr: "البرتغال", Value: "Portugal" },
            { NameEn: "Qatar", NameAr: "قطر", Value: "Qatar" },
            { NameEn: "Romania", NameAr: "رومانيا", Value: "Romania" },
            { NameEn: "Russia", NameAr: "روسيا", Value: "Russia" },
            { NameEn: "Rwanda Rep.", NameAr: "رواندا", Value: "Rwanda Rep." },
            { NameEn: "Saudi Arabia", NameAr: "المملكة العربية السعودية", Value: "Saudi Arabia" },
            { NameEn: "Senegal", NameAr: "السنغال", Value: "Senegal" },
            { NameEn: "Seychelles", NameAr: "سيشيل", Value: "Seychelles" },
            { NameEn: "Singapore", NameAr: "سنغافورة", Value: "Singapore" },
            { NameEn: "Slovak Rep.", NameAr: "سلوفاكيا", Value: "Slovak Rep." },
            { NameEn: "Slovinia", NameAr: "سلوفينيا", Value: "Slovinia" },
            { NameEn: "Solomon Island", NameAr: "جزر سليمان", Value: "Solomon Island" },
            { NameEn: "Somalia", NameAr: "الصومال", Value: "Somalia" },
            { NameEn: "South Africa", NameAr: "جنوب أفريقيا", Value: "South Africa" },
            { NameEn: "South Korea", NameAr: "كوريا الجنوبية", Value: "South Korea" },
            { NameEn: "Spain", NameAr: "إسبانيا", Value: "Spain" },
            { NameEn: "Sri Lanka", NameAr: "سيريلانكا", Value: "Sri Lanka" },
            { NameEn: "Sudan", NameAr: "السودان", Value: "Sudan" },
            { NameEn: "Sweden", NameAr: "السويد", Value: "Sweden" },
            { NameEn: "Switzerland", NameAr: "سويسرا", Value: "Switzerland" },
            { NameEn: "Syria", NameAr: "سوريا", Value: "Syria" },
            { NameEn: "Taiwan", NameAr: "تايوان", Value: "Taiwan" },
            { NameEn: "Tanzania", NameAr: "تونس", Value: "Tanzania" },
            { NameEn: "Thailand", NameAr: "تايلندا", Value: "Thailand" },
            { NameEn: "Turkey", NameAr: "تركيا", Value: "Turkey" },
            { NameEn: "UAE", NameAr: "الإمارات", Value: "UAE" },
            { NameEn: "Uganda", NameAr: "أوغندا", Value: "Uganda" },
            { NameEn: "Ukraine", NameAr: "أوكرانيا", Value: "Ukraine" },
            { NameEn: "Uruguay", NameAr: "أورغواي", Value: "Uruguay" },
            { NameEn: "USA", NameAr: "الولايات المتحدة الامريكية", Value: "USA" },
            { NameEn: "Uzbekistan", NameAr: "أوزباكستان", Value: "Uzbekistan" },
            { NameEn: "Vatican City", NameAr: "دولة مدينة الفاتيكان", Value: "Vatican City" },
            { NameEn: "Venezuela", NameAr: "فنزويلا", Value: "Venezuela" },
            { NameEn: "Vietnam", NameAr: "فيتنام", Value: "Vietnam" },
            { NameEn: "Yeman (PDR)", NameAr: "جنوب اليمن", Value: "Yeman (PDR)" },
            { NameEn: "Yeman Arab Republic", NameAr: "اليمن", Value: "Yeman Arab Republic" },
            { NameEn: "Zambia", NameAr: "زامبيا", Value: "Zambia" },
            { NameEn: "Zimbabwe", NameAr: "زمبابوي", Value: "Zimbabwe" },
            { NameEn: "Palestine", NameAr: "فلسطين", Value: "Palestine" },
            { NameEn: "south korea", NameAr: "كوريا الجنوبية", Value: "south korea" },
            { NameEn: "Cayman Islands", NameAr: "جزر الكايمن", Value: "Cayman Islands" },
            { NameEn: "United Kingdom", NameAr: "المملكة المتحدة", Value: "United Kingdom" },
            { NameEn: "Kazakhstan", NameAr: "كازاخستان", Value: "Kazakhstan" },
            { NameEn: "Turkmenistan", NameAr: "تركمنستان", Value: "Turkmenistan" },
            { NameEn: "Tunisia", NameAr: "تونس", Value: "Tunisia" },
            { NameEn: "Papua New Guinea", NameAr: "بابوا غينيا الجديدة", Value: "Papua New Guinea" },
            { NameEn: "Marshall Islands", NameAr: "جزر المارشال", Value: "Marshall Islands" },
            { NameEn: "Jersey", NameAr: "جيرسي", Value: "Jersey" },
        ],
        AlertSubscriber: {
            email: "",
            firstName: "",
            lastName: "",
            jobTitle: "",
            phoneNo: "",
            countryName: "",
            languageID: this.Language == "ar" ? 1 : 2,
            platform: "Web IR",
            alertTypes: [""],
            updateCode: "",
            showCode: false,
            userMessage: "",
            isError: false,
        },
        MemberPosition: { Chairman: "رئيس مجلس الإدارة", BoardofDirectors: "أعضاء مجلس الإدارة" },
        MarketData: {
            MarketNameEn: "TASI",
            MarketNameAr: "تاسي",
            StockExchangeNameEn: "",
            StockExchangeNameAr: "",
            TradingDate: "2022-03-01T00:00:00",
            CloseValue: 12674.34,
            PreviousCloseValue: 12590.26,
            OpenValue: 12594.7,
            PercentageChange: 0.6678,
            ChangeValue: 84.08,
            volume: 266790861,
            High: 12748,
            Low: 12583.64,
            DisplayTextAr: "",
            DisplayTextEn: ""
        }
    },
    mounted: function () {
        var app = this;
        this.getAccessToken().then(function (response) {
            app._token = response;
            app.loadCompanyOverView(function () {
                $(".widgets-container.overview").show({
                    duration: 800,
                    start: function () {
                        $(this).css('display', 'flex');
                    }
                });
                $(".js-preloader").hide();
            });
            window.onpopstate = function (event) {
                var page = "";
                if (event.state) {
                    page = event.state.page;
                }
                //$("[data-cont='." + page + "']").click();
                console.log(page);
            }
        }, function () {
            app.Loading.Prices = true;
            app.Loading.ProfileInfo = true;
            alert("rejected !!");
        })
            .catch(function (ex) {
                alert(ex);
            });
    },
    methods: {
        sendEventToGA: function (eventName, value) {
            try {
                ga('send', 'pageview', '/' + value);
                ga('send', {
                    hitType: 'event',
                    eventCategory: eventName,
                    eventAction: value,
                    eventLabel: 'EventToTrackGoal'
                });
                console.log("Event send to GA");
            } catch (exc) {
            };
        },
        getAccessToken: function () {
            var app = this;
            //debugger;
            if (this.accessTokenExpireIn < new Date()) {
                var authUrl = baseUrl + "/authenticate";
                var data = { username: api_user, password: api_password };
                return axios.post(authUrl, data)
                    .then(function (response) {
                        var data_1 = response.data;
                        app._token = data_1.jwtToken;
                        app.accessTokenExpireIn = data_1.expires;
                        return Promise.resolve(response.data.jwtToken);
                    })
                    .catch(function (exception) {
                        console.log('Error:' + exception);
                        throw (exception);
                        return Promise.reject(exception);
                    });
            }
            else {
                return Promise.resolve(this._token);
            }
        },
        LoadPage: function (pageName, loadFunc) {
            this.Loading.Page = true;
            $(".widgets-container").fadeOut(800);
            $(".js-preloader").show();
            //history.pushState({
            //    page: window.location.hash
            //}, null, "/app.html#p_"+pageName);
            loadFunc(function () {
                $(".widgets-container." + pageName).fadeIn({
                    duration: 0,
                    start: function () {
                        $(this).css('display', 'flex');
                        $(".js-preloader").hide();
                        $('body,html').animate({
                            scrollTop: $('.sticky-header-indicator').offset().top + 1
                        }, 250);
                    }
                });
            });
            this.Loading.Page = false;
            $(".tabs li.active").removeClass("active");
            $("[data-cont='." + pageName + "']").addClass("active");
            this.PageLoading = true;
            this.sendEventToGA('PageLoaded', pageName);
            window.location.hash = 'p_' + pageName.toLowerCase();
        },
        getFetch: function (url) {
            const apiUrl = `${baseUrl}/api/v${api_version}/json/${url}`;
            return this.getAccessToken().then(function (act) {
                return axios({
                    url: apiUrl,
                    method: "GET",
                    headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + act }
                }).then(res => res);
            });
        },
        loadCompanyOverView: function (callBack) {
            var app = this;
            this.getAccessToken().then(function (response) {
                app.fetchCompanyOverView(response);
                app.fetchMarketData(response);
                app.fetchCartData('overviewchart', '1D');
                callBack();
            }, function () {
                app.Loading.Page = false;
                alert("Unable to connect to Argaam!!!");
            })
                .catch(function (ex) {
                    alert(ex);
                });
        },
        fetchCompanyOverView: function (accT) {
            this.Loading.CompanyOverview = true;
            var app = this;
            this.getFetch("ir-api/overview/" + app.Language).then(resp => {
                app.CompanyOverview = resp.data;
                app.Loading.CompanyOverview = false;
                app.fetchCompanyProfile(function () { });
                app.MarketValue = app.CompanyProfile.tradingData.numberOfShares * app.CompanyOverview.prices[0].closeValue;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        loadCompanyProfile: function (callBack) {
            var app = this;
            this.getAccessToken().then(function (response) {
                app.fetchCompanyProfile(response);
                
                callBack();
            }, function () {
                app.Loading.Page = false;
                alert("Unable to connect to Argaam!!!");
            }).catch(function (ex) {
                alert(ex);
            });
        },
        fetchCompanyProfile: function (accT) {
            this.Loading.CompanyProfile = true;
            var app = this;
            this.getFetch("ir-api/profile/").then(resp => {
                app.CompanyProfile = resp.data;
                app.MarketValue = app.CompanyProfile.tradingData.numberOfShares * app.CompanyOverview.prices[0].closeValue;
                app.Loading.CompanyProfile = false;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        fetchMarketData: function (accT) { 
            var app = this;
            this.getFetch("ir-api/market-data/").then(resp => {
                app.MarketData = resp.data.ticker;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        loadCompanyChart: function (callBack) {
            var app = this;
            $('#chart_calendar').pignoseCalendar({
                format: 'YYYY-MM-DD',
                theme: 'dark',
                multiple: true,
                disabledWeekdays: [
                    5, // Friday
                    6, // Saturday
                ],
                select: function (date, context) {
                    console.log(date);
                    if (date[0] !== null && date[1] !== null) {
                        $('#chart_calendar').val(date[0]._i + ' / ' + date[1]._i);
                    }
                },
                apply: function (date, context) {
                    //Do something with dates
                    console.log(date);
                }
            });
            var d = new Date();
            var d2 = new Date(d.setDate(d.getDate() - 7));
            var di = app.getDateString(d2) + ' / ' + app.getDateString(new Date());
            $('#chart_calendar').val(di);

            this.getAccessToken().then(function (response) {
                app.fetchCompanyChart(response);
                app.fetchMainChart();
                //app.fetchCartData('mainChart', 'AY');
                callBack();
            }, function () {
                app.Loading.Page = false;
                alert("Unable to connect to Argaam!!!");
            }).catch(function (ex) {
                alert(ex);
            });
        },
        fetchCompanyChart: function (accT) {
            this.Loading.CompanyChart = true;
            console.log("Loading Data for :" + $("#chart_calendar").val());
            var from = new Date();
            var to = new Date();
            var to = new Date(to.setDate(to.getDate() - 7));
            if ($('#chart_calendar').val().length != 0) {
                from = new Date($('#chart_calendar').val().split("/")[0].trim());
                to = new Date($('#chart_calendar').val().split("/")[1].trim());
            }
            debugger;
            var app = this;
            this.getFetch("ir-api/chart-data-table/" + app.getDateString(from) + "/" + app.getDateString(to)).then(resp => {
                app.CompanyChart = resp.data;
                app.Loading.CompanyChart = false;

            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        loadCompanyOrganizationStructure: function (callBack) {
            var app = this;
            this.getAccessToken().then(function (response) {
                app.fetchCompanyOrganizationStructure(response);
                setTimeout(applySalaryYearTabs, 2000);
                callBack();
            }, function () {
                app.Loading.Page = false;
                alert("Unable to connect to Argaam!!!");
            }).catch(function (ex) {
                alert(ex);
            });
        },
        fetchCompanyOrganizationStructure: function (accT) {
            this.Loading.CompanyOrganizationStructure = true;
            var app = this;
            this.getFetch("ir-api/organizational-structure/").then(resp => {
                app.CompanyOrganizationStructure = resp.data;
                app.Loading.CompanyOrganizationStructure = false;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        loadMajorShareholders: function (callBack) {
            var app = this;
            this.getAccessToken().then(function (response) {
                app.fetchMajorShareholders(response);
                app.fetchBoardOfDirectors(response);
                callBack();
            }, function () {
                app.Loading.Page = false;
                alert("Unable to connect to Argaam!!!");
            }).catch(function (ex) {
                alert(ex);
            });
        },
        fetchBoardOfDirectors: function (accT) {
            this.Loading.MajorShareholders = true;
            var app = this;
            this.getFetch("ir-api/bod-holdings").then(resp => {
                app.BoardOfDirectors = resp.data;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        fetchMajorShareholders: function (accT) {
            this.Loading.MajorShareholders = true;
            var app = this;
            this.getFetch("ir-api/major-shareholders/" + app.Language).then(resp => {
                app.MajorShareholders = resp.data;
                app.Loading.MajorShareholders = false;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        loadCompanyFReports: function (callBack) {
            var app = this;
            this.getAccessToken().then(function (response) {
                app.fetchCompanyFReports(response);
                callBack();
            }, function () {
                app.Loading.Page = false;
                alert("Unable to connect to Argaam!!!");
            }).catch(function (ex) {
                alert(ex);
            });
        },
        fetchCompanyFReports: function (accT) {
            this.Loading.FinancialResults = true;
            var app = this;
            this.getFetch("ir-api/financial-results/" + app.Language).then(resp => {
                app.FinancialResults = resp.data;
                app.Loading.FinancialResults = false;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        loadCompanyFStatements: function (callBack) {
            var app = this;
            this.getAccessToken().then(function (response) {
                app.fetchCompanyFStatements(response);
                callBack();
            }, function () {
                app.Loading.Page = false;
                alert("Unable to connect to Argaam!!!");
            }).catch(function (ex) {
                alert(ex);
            });
        },
        fetchCompanyFStatements: function (accT) {
            this.Loading.CompanyFStatements = true;
            var app = this;
            this.getFetch("ir-api/financial-statements/" + app.Language).then(resp => {
                app.CompanyFStatements = resp.data;
                app.Loading.CompanyFStatements = false;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        fetchCompanyFStatementsForPeriod: function (fiscalPeriodType) {
            this.Loading.CompanyFStatements = true;
            var app = this;
            this.getFetch("ir-api/financial-statements/" + app.Language + "?fiscalPeriodType=" + fiscalPeriodType).then(resp => {
                app.CompanyFStatements = resp.data;
                app.Loading.CompanyFStatements = false;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        loadCompanyFRatios: function (callBack) {
            var app = this;
            this.getAccessToken().then(function (response) {
                app.fetchCompanyFRatios(response);
                callBack();
            }, function () {
                app.Loading.Page = false;
                alert("Unable to connect to Argaam!!!");
            }).catch(function (ex) {
                alert(ex);
            });
        },
        fetchCompanyFRatios: function (accT) {
            this.Loading.CompanyFRatios = true;
            var app = this;
            this.getFetch("ir-api/financial-ratios").then(resp => {
                app.CompanyFRatios = resp.data;
                app.Loading.CompanyFRatios = false;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        fetchCompanyFRatiosForPeriod: function (fiscalPeriodType) {
            this.Loading.CompanyFRatios = true;
            var app = this;
            this.getFetch("ir-api/financial-ratios?fiscalPeriodType=" + fiscalPeriodType).then(resp => {
                app.CompanyFRatios = resp.data;
                app.Loading.CompanyFRatios = false;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        loadCorporateActions: function (callBack) {
            var app = this;
            this.getAccessToken().then(function (response) {
                app.fetchCorporateActions(response);
                callBack();

            }, function () {
                app.Loading.Page = false;
                alert("Unable to connect to Argaam!!!");
            }).catch(function (ex) {
                alert(ex);
            });
        },
        fetchCorporateActions: function (accT) {
            this.Loading.CorporateActions = true;
            var app = this;
            this.getFetch("ir-api/corporate-actions/" + app.Language).then(resp => {
                app.CorporateActions = resp.data;
                var capitalData = [];
                var cpaitalCategories = [];
                app.CorporateActions.capitalChartData.forEach(function (v) {
                    capitalData.push(v.Capital);
                    cpaitalCategories.push(v.FinancialYear);
                });
                app.populateChart(capitalData, cpaitalCategories, 'capital_change_chart', "", 80);
                var dividendData = [];
                var devidendCategories = [];
                app.CorporateActions.dividendsChartData.forEach(function (v) {

                    dividendData.push(v.Capital);
                    devidendCategories.push(0);
                });
                app.populateChart(dividendData, devidendCategories, 'historical_dividends_chart', "", 80);

                app.Loading.CorporateActions = false;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        loadProjects: function (callBack) {
            var app = this;
            this.getAccessToken().then(function (response) {
                app.fetchProjects(response);
                callBack();
            }, function () {
                app.Loading.Page = false;
                alert("Unable to connect to Argaam!!!");
            }).catch(function (ex) {
                alert(ex);
            });
        },
        fetchProjects: function (accT) {
            this.Loading.CompanyProjects = true;
            var app = this;
            this.getFetch("ir-api/projects-news/" + app.Language).then(resp => {
                app.CompanyProjects = resp.data;
                app.Loading.CompanyProjects = false;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        loadDisclosures: function (callBack) {
            callBack();
        },
        toAvatar: function (imgURL) {
            return imgURL ? imgURL : "assets/avatar1.png";
        },
        getIndividualsByPosition: function (individuals, positionID) {
            var result;
            if (individuals) {
                result = individuals.filter(function (individual) {
                    if (individual) {
                        return individual.companyPositionTypeID === positionID;
                    }
                });

                //now make them unique
                var uniqueIndividuals = [];
                var individualIDs = [];
                $.each(result, function () {
                    if ($.inArray(this.individualID, individualIDs) === -1) {
                        individualIDs.push(this.individualID);
                        uniqueIndividuals.push(this);
                    }
                });

                return uniqueIndividuals.sort();
            }

            return result;
        },
        toFileURL: function (fileURL) {
            return fileURL ? fileURL : "#";
        },
        fetchCartData: function (chartDiv, period, chartType = 'line') {
            $('.ticker-tab [data-cont]').removeClass('active');
            $('.ticker-tab [data-cont="' + period + '"]').addClass('active');
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/ir-api/charts-data/0/" + period;
            var app = this;
            axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + app._token } })
                .then(function (response) {
                    app.chartData = response.data.data;
                    var data = app.chartData;
                    Highcharts.stockChart(chartDiv, {
                        chart: {
                            renderTo: chartDiv,
                            backgroundColor: 'transparent'
                        },
                        rangeSelector: {
                            enabled: false
                        },
                        plotOptions: {
                            series: {
                                lineWidth: 4
                            }
                        },
                        responsive: {
                            rules: [{
                                condition: {
                                    maxWidth: 500
                                },
                                chartOptions: {
                                    legend: {
                                        enabled: false
                                    }
                                }
                            }]
                        },
                        series: [{
                            name: 'AWPT',
                            // type: 'area',
                            type: chartType,
                            data: data,
                            color: '#fff',
                            tooltip: {
                                valueDecimals: 2
                            },
                            turboThreshold: 1000000
                        }],
                        exporting: {
                            enabled: false
                        },
                        yAxis: [{
                            id: "main-series",
                            startOfWeek: 0,
                            labels: {
                                formatter: function () {
                                    return Highcharts.numberFormat(this.value, 2);
                                },
                                offset: 0,
                                lineWidth: 1,
                                style: {
                                    color: '#fff'
                                }
                            }
                        }],
                        xAxis: [{
                            id: "main-series",
                            labels: {
                                style: {
                                    color: '#fff'
                                }
                            }
                        }],
                        tooltip: {
                            formatter: function () {
                                return Highcharts.dateFormat(period.includes('D') ? '%B %e, %Y %H:%M' : '%B %e, %Y', this.x) + '<br/> <b> AWPT </b>:' +
                                    Highcharts.numberFormat(this.y, 2);
                            }
                        },
                        annotationsOptions: { enabledButtons: false },
                        navigator: { enabled: false },
                        scrollbar: { enabled: false }
                    });
                })
                .catch(function (exception) {
                    console.log('Error:' + exception);
                });

        },
        chartOptionChanged: function () {
            var period = $("#chart_perid").val();
            var type = $("#chart_type").val();
            var app = this;
            app.fetchMainChart(type);
        },
        getFinancialHighlightYears: function () {
            var app = this;
            var years = [];
            Object.keys(app.CompanyProfile.financialHighlights[0]).forEach(function (v, i) {
                if (app.isNumber(v)) {
                    years.push(v);
                }
            });
            return years;
        },
        setCurrencyFinancialHighlight: function (cur) {
            var app = this;
            $("[data-cont='Financials_Highlights__riyal']").removeClass("active");
            $("[data-cont='Financials_Highlights__usd']").removeClass("active");
            $("[data-cont='Financials_Highlights__" + cur.toLowerCase() + "']").addClass("active");

            var years = app.getFinancialHighlightYears();
            app.CompanyProfile.financialHighlights.forEach(function (fn, i) {
                years.forEach(function (y) {
                    fn[y] = app.convertToCurrency(fn[y], fn.Currency, cur);
                    console.log(fn.FSFieldName + ' ' + y + ' : ' + fn[y]);
                });
                fn.Currency = cur;
            });
        },
        setCurrencyFinancialStatement: function (cur) {
            var app = this;
            $("[data-cont='main-financial-statement__riyal']").removeClass("active");
            $("[data-cont='main-financial-statement__usd']").removeClass("active");
            $("[data-cont='main-financial-statement__" + cur.toLowerCase() + "']").addClass("active");
            app.CompanyFStatements.tabs.forEach(function (tab) {
                tab.fields.forEach(function (field) {
                    if (field.isCurrency) {
                        field.values.forEach(function (value) {
                            value.value = app.convertToCurrency_new(value.value, field.currency, cur);
                        });
                        field.currency = cur;
                    }
                });
            });

        },
        setCurrencyFinancialRatios: function (cur) {
            var app = this;
            $("[data-cont='main-financial-ratio__usd']").removeClass("active");
            $("[data-cont='main-financial-ratio__sar']").removeClass("active");
            $("[data-cont='main-financial-ratio__" + cur.toLowerCase() + "']").addClass("active");
            app.CompanyFRatios.financialRatioFieldsGroups.forEach(function (fg) {
                fg.financialRatioFieldsGroupFields.forEach(function (field) {
                    if (field.isCurrency) {
                        field.values.forEach(function (value) {
                            if (value.value !== '-') {
                                value.value = app.convertToCurrency_new(value.value, field.currency, cur);
                            }
                        });
                        field.currency = cur;
                    }
                });
            });

        },
        convertToCurrency_new: function (value, from, to) {
            var exchangeRate = { 'SAR-USD': 0.2666, 'USD-SAR': 3.7500, 'SAR-SAR': 1.000, 'USD-USD': 1.000 };
            var c = from.toUpperCase() + '-' + to.toUpperCase();
            var rate = exchangeRate[c];

            return value * rate;

        },
        convertToCurrency: function (value, from, to) {
            var exchangeRate = { 'RIYAL-USD': 0.2666, 'USD-RIYAL': 3.7500, 'RIYAL-RIYAL': 1.000, 'USD-USD': 1.000 };
            var c = from.toUpperCase() + '-' + to.toUpperCase();
            var rate = exchangeRate[c];

            return value * rate;

        },
        fetchArticleBody: function (article) {
            var app = this;
            this.getFetch("articles/get-article-amp/" + app.Language + "/" + article.articleID).then(resp => {
                article.body = resp.data.ampReadyBody;
            }).catch(function (exception) {
                console.log('Error:' + exception);
            });
        },
        openNews: function (section, id, article, dontLoadPage) {
            var app = this;
            app.PageLoading = true;
            if (dontLoadPage === undefined) {
                app.LoadPage('main-Disclosures', this.loadDisclosures);
            }
            $(".pr__section").hide();
            $('.' + section).fadeIn(500);
            $(".pr__tabs li").removeClass("active");
            $(".pr__tabs li[data-cont='." + section + "']").addClass("active");
            $('.' + section + ' .pr__disclosures__container__row__line').show();
            $('.' + section + ' .pr__disclosures__container__row__details').hide();
            $("#" + section + "_line_" + id).hide();
            $("#" + section + "_detail_" + id).fadeIn(500);
            window.location.hash = section.replace('pr__', 'n_') + '|' + id;

            if (article !== undefined) {
                if (article.body == null) {
                    article.body = '<span> Loading.....</span>';
                    app.fetchArticleBody(article);
                }
            }
        },
        closeNews: function (section, id) {
            $("#" + section + "_line_" + id).show();
            $("#" + section + "_detail_" + id).hide();
        },
        openEvent: function (id) {
            var app = this;
            app.LoadPage('main-Disclosures', this.loadDisclosures);
            $(".pr__tabs li").removeClass("active");
            $(".pr__tabs li[data-cont='.pr__calendar']").addClass("active");
            $(".pr__section").hide();
            $('.pr__calendar').fadeIn(500);
            if (id !== 0) {
                app.showEventDetails(id);
            }
        },
        isNumber: function isNumber(input) {
            return !isNaN(parseFloat(input));
        },
        showIndividualDetails: function (id) {
            $(".structure__container").hide();
            $("[data-cont='ind_details_" + id + "']").show();
            $('body,html').animate({
                scrollTop: $('.sticky-header-indicator').offset().top + 1
            }, 250);
        },
        fomratedValue: function (val, fielName = '') {
            if (val === undefined) {
                return '';
            }
            if (val.value === undefined || val.value === NaN || val.value == '-') {
                return '-';
            }
            var percent = fielName.includes("%") ? " %" : "";
            return (val.value < 0 ? '(' + formatter.format(Math.abs(val.value)) + ')' : formatter.format(val.value)) + percent;
        },
        cssClassForValue: function (val) {
            if (val === undefined || val.value === undefined) {
                return '';
            }
            return val.value < 0 ? 'red' : 'green';
        },
        fetchMainChart: function (chartType = 'line') {
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/ir-api/charts-data/0/5Y";
            var app = this;
            app.getAccessToken().then(function (act) {
                axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + app._token } })
                    .then(function (response) {
                        app.chartData = response.data.data;
                        var data = app.chartData;
                        var ohlc = [],
                            volume = [],
                            dataLength = data.length,
                            i = 1;

                        for (i; i < dataLength; i += 1) {
                            ohlc.push([
                                new Date(String(data[i]['date'].replace(' ', 'T'))).getTime(), // the date
                                data[i]['open'], // open
                                data[i]['high'], // high
                                data[i]['low'], // low
                                data[i]['close'] // close
                            ]);

                            volume.push([
                                new Date(String(data[i]['date'].replace(' ', 'T'))).getTime(), // the date
                                data[i]['volume'] // the volume
                            ]);
                        }
                        Highcharts.stockChart('mainChart', {
                            chart: {
                                backgroundColor: 'transparent',
                                color: '#fff'
                            },
                            xAxis: {
                                gridLineColor: '#707073',
                                labels: {
                                    style: {
                                        color: '#E0E0E3'
                                    }
                                },
                                lineColor: '#707073',
                                minorGridLineColor: '#505053',
                                tickColor: '#707073',
                                title: {
                                    style: {
                                        color: '#A0A0A3'

                                    }
                                }
                            },
                            exporting: {
                                enabled: false
                            },
                            yAxis: [{
                                gridLineColor: '#707073',
                                labels: {
                                    align: 'left',
                                    style: {
                                        color: '#fff'
                                    }
                                },
                                height: '80%',
                                resize: {
                                    enabled: true
                                }
                            }, {
                                labels: {
                                    align: 'left',
                                    style: {
                                        color: '#fff'
                                    }
                                },
                                top: '80%',
                                height: '20%',
                                offset: 0,

                            }],
                            tooltip: {
                                shape: 'square',
                                headerShape: 'callout',
                                borderWidth: 0,
                                valueDecimals: 2,
                                shadow: false,
                                positioner: function (width, height, point) {
                                    var chart = this.chart,
                                        position;

                                    if (point.isHeader) {
                                        position = {
                                            x: Math.max(
                                                // Left side limit
                                                chart.plotLeft,
                                                Math.min(
                                                    point.plotX + chart.plotLeft - width / 2,
                                                    // Right side limit
                                                    chart.chartWidth - width - chart.marginRight
                                                )
                                            ),
                                            y: point.plotY
                                        };
                                    } else {
                                        position = {
                                            x: point.series.chart.plotLeft,
                                            y: point.series.yAxis.top - chart.plotTop
                                        };
                                    }

                                    return position;
                                }
                            },
                            series: [{
                                type: chartType,
                                threshold: null,
                                id: 'awpt-tasi',
                                name: 'AWPT',
                                color: '#fff',
                                data: ohlc
                            }, {
                                type: 'column',
                                id: 'awpt-volume',
                                name: 'AWPT Volume',
                                data: volume,
                                color: '#fff',
                                yAxis: 1
                            }],
                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 800
                                    },
                                    chartOptions: {
                                        rangeSelector: {
                                            inputEnabled: false
                                        }
                                    }
                                }]
                            }
                        });

                    })
                    .catch(function (exception) {
                        console.log('Error:' + exception);
                    });
            });
        },
        searchCompanyPrices: function () {
            var app = this;
            this.getAccessToken().then(function (response) {
                app.fetchCompanyChart(response);
            });
            return false;
        },
        getDateString: function (date) {
            return String(date.getFullYear()) + '-' + String(date.getMonth() + 1).padStart(2, '0') + '-' + String(date.getDate()).padStart(2, '0');
        },
        getEventForOverView: function () {
            let result = this.CompanyOverview.events;

            result = result.filter(event => event.descriptionEn.length != 0)

            return result;
        },
        showEventDetails: function (id) {
            $("[data-cont='event__" + id + "']").addClass("is-visible");
        },
        hideEventDetails: function (id) {
            $("[data-cont='event__" + id + "']").removeClass("is-visible");
        },
        getMonthNameAr: function (month) {
            return this.MonthNames[month - 1];
        },
        showChartForFinancialHighlight: function (fn) {
            var app = this;
            $(".Financials-Highlights__popup").show();
            var data = [];
            var cat = [];
            app.getFinancialHighlightYears().forEach(function (y) {
                cat.push(y);
                data.push(fn[y]);
            });
            var title = app.Language == "en" ? fn.DisplayNameEn : fn.DisplayNameAr;
            app.populateChart(data, cat, 'financialhighligh_chart', title);
        },
        populateChart: function (data, category, id, title, pw = 40) {
            var app = this;
            Highcharts.chart(id, {
                chart: {
                    type: "column",
                    backgroundColor: "transparent",
                    style: {
                        color: "#fff",
                    },
                },
                exporting: {
                    enabled: false,
                },
                title: {
                    text: title,
                    style: {
                        color: "#fff",
                    },
                },
                xAxis: {
                    categories: category,
                    text: title,
                    max: category.length < 15 ? category.length - 1 : 15,
                    labels: {
                        style: {
                            color: "#fff",
                        },
                        //formatter: function () {
                        //    return Highcharts.dateFormat('%b-%e-%Y', this.value);
                        //}
                    },
                    lineColor: "#fff",
                },
                yAxis: {
                    title: { enabled: false },
                    opposite: app.Language == "ar",
                    gridLineDashStyle: "dot",
                    gridLineColor: "#707070",
                    labels: {
                        style: {
                            color: "#fff",
                        },
                    },
                },
                plotOptions: {
                    column: {
                        pointPadding: 2,
                        borderWidth: 0,
                    },
                },
                series: [
                    {
                        name: title,
                        data: data,
                        pointWidth: pw,
                        animation: app.Language == "en",
                        color: "#9095f4",
                        negativeColor: "#f83b3b",
                        tooltip: {
                            valueDecimals: 2,
                        },
                    },
                ],
                legend: {
                    enabled: false,
                },
                annotationsOptions: { enabledButtons: false },
                navigator: { enabled: false },
                scrollbar: { enabled: false },
            });
            $(".highcharts-credits").hide();
        },
        showChartForFinancialStatement: function (fsfield) {
            var app = this;
            $(".fs-popup").show();
            var data = [];
            var cat = [];
            fsfield.values.forEach(function (v) {
                data.push(v.value);
                cat.push(v.fiscalPeriod);
            });
            var title = app.Language == "en" ? fsfield.displayNameEn : fsfield.displayNameAr;
            app.populateChart(data, cat, 'fs_details_chart', title);
        },
        showChartForFinancialRatio: function (fsRatio) {
            var app = this;
            $(".fr-popup").show();
            var data = [];
            var cat = [];
            fsRatio.values.forEach(function (v) {
                if (v.value !== '-') {
                    data.push(parseFloat(v.value));
                } else {
                    data.push(0);
                }
                var p = v.period == "-" ? v.year : v.period;
                cat.push(p);
            });
            var title = app.Language == "en" ? fsRatio.nameEn : fsRatio.nameAr;
            app.populateChart(data, cat, 'fr_details_chart', title);
        },
        loadSubscription: function (callBack) {
            var app = this;
            this.getAccessToken()
                .then(
                    function (response) {
                        app.fetchSubscriptionData(response);
                        callBack();
                    },
                    function () {
                        app.Loading.Page = false;
                        alert("Unable to connect to Argaam!!!");
                    }
                )
                .catch(function (ex) {
                    alert(ex);
                });
        },
        fetchSubscriptionData: function (accT) {
            var app = this;
            this.getFetch("ir-api/get-alerts/")
                .then((resp) => {
                    app.Alerts = resp.data;
                })
                .catch(function (exception) {
                    console.log("Error:" + exception);
                });
        },
        checkEmailExists: function () {
            var app = this;
            if (app.validEmail(app.AlertSubscriber.email)) {
                this.getFetch("ir-api/check-email/" + app.AlertSubscriber.email)
                    .then((resp) => {
                        if (resp.data.exists) {
                            app.AlertSubscriber.showCode = true;
                        } else {
                            app.AlertSubscriber.showCode = false;
                            app.AlertSubscriber.userMessage = "";
                        }
                    })
                    .catch(function (exception) {
                        console.log("Error:" + exception);
                    });
            }
        },
        postFetch: function (url, data) {
            const apiUrl = `${baseUrl}/api/v${api_version}/json/${url}`;

            return this.getAccessToken().then(function (act) {
                var headers = {
                    "Content-Type": "application/json",
                    authorization: "Bearer " + act,
                };

                return axios.post(apiUrl, data, { headers }).then(res => res);
            });
        },
        subscribe: function () {
            var app = this;
            if (app.isValidToSubscribe()) {
                this.postFetch("ir-api/subscribe-alerts/", app.AlertSubscriber)
                    .then((resp) => {
                        if (app.AlertSubscriber.showCode) {
                            if (resp.data.success) {
                                if (app.Language == "en") {
                                    app.AlertSubscriber.userMessage = "Your subscription is updated successfully";
                                } else {
                                    app.AlertSubscriber.userMessage = "تم تحديث اشتراكك بنجاح";
                                }
                                app.AlertSubscriber.isError = false;
                            } else {
                                if (app.Language == "en") {
                                    app.AlertSubscriber.userMessage = "Unable to update your subscription";
                                } else {
                                    app.AlertSubscriber.userMessage = "غير قادر على تحديث اشتراكك";
                                }
                                app.AlertSubscriber.isError = true;
                            }
                        } else {
                            if (resp.data.success) {
                                if (app.Language == "en") {
                                    app.AlertSubscriber.userMessage = "You are now subscribed, please check your email and confirm your subscription.";
                                } else {
                                    app.AlertSubscriber.userMessage = "أنت الآن مشترك ، يرجى التحقق من بريدك الإلكتروني وتأكيد اشتراكك.";
                                }
                                app.AlertSubscriber.isError = false;
                            } else {
                                if (app.Language == "en") {
                                    app.AlertSubscriber.userMessage = "Unable to subscribe";
                                } else {
                                    app.AlertSubscriber.userMessage = "غير قادر على الاشتراك";
                                }
                                app.AlertSubscriber.isError = true;
                            }
                        }
                        return false;
                    })
                    .catch(function (exception) {
                        console.log("Error:" + exception);
                        app.AlertSubscriber.userMessage =
                            "Unable to subscribe, due to " + exception;
                        app.AlertSubscriber.isError = true;
                    });
            }
        },
        isValidToSubscribe: function () {
            var app = this;
            this.checkEmailExists();
            if (!app.validEmail(app.AlertSubscriber.email)) {
                if (app.Language == "en") {
                    app.AlertSubscriber.userMessage = "A valid Email address is required";
                } else {
                    app.AlertSubscriber.userMessage = "مطلوب عنوان بريد إلكتروني صالح";

                }
                app.AlertSubscriber.isError = true;
                return false;
            }
            if (app.AlertSubscriber.firstName.trim().length == 0) {
                if (app.Language == "en") {
                    app.AlertSubscriber.userMessage = "First name is required";
                } else {
                    app.AlertSubscriber.userMessage = "الإسم الأول مطلوب";
                } 
                app.AlertSubscriber.isError = true;
                return false;
            }
            if (app.AlertSubscriber.lastName.trim().length == 0) {
                
                if (app.Language == "en") {
                    app.AlertSubscriber.userMessage = "Last name is required";
                } else {
                    app.AlertSubscriber.userMessage = "إسم العائلة مطلوب";
                }
                app.AlertSubscriber.isError = true;
                return false;
            }
            if (app.AlertSubscriber.countryName.trim().length == 0) {
                
                if (app.Language == "en") {
                    app.AlertSubscriber.userMessage = "Country is required";
                } else {
                    app.AlertSubscriber.userMessage = "اسم الدولة مطلوب";
                }
                app.AlertSubscriber.isError = true;
                return false;
            }
            if (
                app.AlertSubscriber.showCode &&
                app.AlertSubscriber.updateCode.trim().length == 0
            ) {
                if (app.Language == "en") {
                    app.AlertSubscriber.userMessage = "Please enter the confirmation code to update your subscription";
                } else {
                    app.AlertSubscriber.userMessage = "الرجاء إدخال رمز التأكيد لتحديث اشتراكك";
                }
                app.AlertSubscriber.isError = true;
                return false;
            }
            app.AlertSubscriber.alertTypes = [];
            $(".subscription-center__form__custom-checkbox__input").each(function (
                i,
                e
            ) {
                if ($(e).prop("checked")) {
                    app.AlertSubscriber.alertTypes.push($(e).attr("data-cont"));
                }
            });
            if (app.AlertSubscriber.alertTypes.length == 0) {
                if (app.Language == "en") {
                    app.AlertSubscriber.userMessage = "You must select at least one Alert Type to subscribe to";
                } else {
                    app.AlertSubscriber.userMessage = "يجب تحديد نوع تنبيه واحد على الأقل للاشتراك فيه";
                }
                app.AlertSubscriber.isError = true;
                return false;
            }

            app.AlertSubscriber.userMessage = "";
            app.AlertSubscriber.isError = false;
            return true;
        },
        resendConformationCode: function () {
            var app = this;
            if (app.validEmail(app.AlertSubscriber.email)) {
                this.getFetch("ir-api/send-code/" + app.AlertSubscriber.email)
                    .then((resp) => {
                        if (resp.data.success) {
                            app.AlertSubscriber.userMessage =
                                "Email containing confirmation code is sent, please check your inbox.";
                        }
                    })
                    .catch(function (exception) {
                        console.log("Error:" + exception);
                    });
            }
        },
        validEmail: function (email) {
            var re =
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        },
        getMemberPositionArabic: function (position) {
            var p = position;
            if (p == null) {
                p = '';
            }
            return this.MemberPosition[p.replace(' ', '').replace(' ', '')];
        },
    },

    updated: function () {
        var app = this;
        var hash = window.location.hash;
        if (app.PageLoading) {
            //app.PageLoading = false;
            return;
        }
        if (hash.startsWith("#n_")) {
            hash = hash.replace('#n_', 'pr__');
            var section = hash.split('|')[0];
            var article = hash.split('|')[1];
            app.openNews(section, 0);
            $("#pr__disclosures_line_" + article + " .pr__disclosures__container__row__line__icon").click();
        }
        else if (hash.startsWith("#p_")) {
            var pn = hash.replace('#p_', '');
            if (app.CurrentPageName !== pn) {
                $("[data-cont='." + pn + "']").click();
            }
        }
    }

}); 