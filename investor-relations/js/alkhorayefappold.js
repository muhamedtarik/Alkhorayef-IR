const api_user = "U23996-AEF4A894686BC8828EF8-8B518F-0B"; //Argaam API User 
const api_password = "yGnu/As3O52zQzbMBX/VMyNS1U8eCR7lL3bh1SfFCoifbPg49rjoNQ=="; // Argaam API Password
const baseUrl = "http://localhost:16901";
const api_version = '1.0';
const formatter = new Intl.NumberFormat('en-US', {
    minimumFractionDigits: 2,
    maximumFractionDigits: 2,
});

var alkhorayefapp = new Vue({
    el: "#alkhorayefapp",
    data: {
        Prices: {},
        ProfileInfo: { overviewEn: 'Loading...', summaryEn : '' },
        MarketData: {},
        ChartsData: {},
        Events: {},
        FinancialResultPdf: {},
        FinancialRatios: {},
        Discloser: {},
        LatestNews: {},
        CpaitalSummary: {},
        DividandInfo: {},
        AnalystEstimates: {},
        CompanyStockSummary: {},
        Loading: {
            Page: false, Prices: false, ProfileInfo: false, CompanyStockSummary: false,
            MarketData: false, ChartsData: false, Events: false, FinancialResultPdf: false,
            Discloser: false, FinancialRatios: false, LatestNews: false, AnalystEstimates: false, CpaitalSummary: false, DividandInfo : false
        },

        _token: '',
        accessTokenExpireIn: new Date(2020),
        companyId: 66, //this will be set by accesstoken
        marketId: 3,
        SelectedTab: {}
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
            });
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
        LoadPage: function (pageName, loadFunc) {
            this.Loading.Page = true;
            $(".widgets-container").hide(80);
            
            loadFunc(function(){
                $(".widgets-container." + pageName).show({
                    duration: 800,
                    start: function () {
                        $(this).css('display', 'flex');
                    }
                });
            });
            this.Loading.Page = false;
            $(".tabs li.active").removeClass("active");
            $("[data-cont='." + pageName + "']").addClass("active");
        },
        loadCompanyProfile: function (callBack) {
            console.log("Loading Overview");
            var app = this;
            this.getAccessToken().then(function (response) {
                app.fetchProfileInfo(response);

                app.Loading.Page = false;
                callBack();
            }, function () {
                app.Loading.Page = false;
                alert("rejected !!");
            })
                .catch(function (ex) {
                    alert(ex);
                });
        },
        loadCompanyOverView: function (callBack) {
            console.log("Loading Overview");
            var app = this; 
            this.getAccessToken().then(function (response) {
                console.log(response);
                app.fetchPrices(response);
                app.fetchProfileInfo(response);
                app.fetchEvents(response);
                app.fetchFinancialResultPdf(response);
                app.fetchFinancialRatios(response);
                app.fetchCompanyDiscloser(response);
                app.fetchStockSummary(response);
                app.fetchCompanyLatestNews(response);
                app.fetchCapitalSummary(response);
                app.fetchDividandSummary(response);
                app.Loading.Page = false;
                callBack();
            }, function () {
                app.Loading.Page = false;
                alert("rejected !!");
            })
            .catch(function (ex) {
                alert(ex);
            });
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
        fetchCapitalSummary: function (accT) {
            this.Loading.CpaitalSummary = true;
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/company/get-capital-summary/" + this.marketId + "/" + this.companyId;
            var app = this;
            axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + accT } })
                .then(function (response) {
                    console.log("Capital Summary");
                    console.log(response);
                    app.CpaitalSummary = response.data;
                    app.Loading.CpaitalSummary = false;
                })
                .catch(function (exception) {
                    console.log('Error:' + exception);
                });

        },
        fetchDividandSummary: function (accT) {
            this.Loading.DividandInfo = true;
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/company/get-dividand-summary/" + this.marketId + "/" + this.companyId;
            var app = this;
            axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + accT } })
                .then(function (response) {
                    console.log("Dividand Info Summary");
                    console.log(response);
                    app.DividandInfo = response.data;
                    app.Loading.DividandInfo = false;
                })
                .catch(function (exception) {
                    console.log('Error:' + exception);
                });

        },
        fetchStockSummary: function (accT) {
            this.Loading.CompanyStockSummary = true;
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/company/get-stock-summary/" + this.marketId + "/" + this.companyId;
            var app = this;
            axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + accT } })
                .then(function (response) {
                    console.log("Stock Summary");
                    console.log(response);
                    app.CompanyStockSummary = response.data;
                    app.Loading.CompanyStockSummary = false;
                })
                .catch(function (exception) {
                    console.log('Error:' + exception);
                });

        },
        fetchAnalystEstimates: function (accT) {
            this.Loading.AnalystEstimates = true;
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/company/get-articles/203/" + this.companyId;
            var app = this;
            axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + accT } })
                .then(function (response) {
                    console.log(response);
                    // debugger;
                    app.AnalystEstimates = response.data;
                    app.Loading.AnalystEstimates = false;
                })
                .catch(function (exception) {
                    console.log('Error:' + exception);
                });

        },
        fetchCompanyLatestNews: function (accT) {
            this.Loading.LatestNews = true;
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/company/get-articles/205/" + this.companyId;
            var app = this;
            axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + accT } })
                .then(function (response) {
                    console.log(response);
                    // debugger;
                    app.LatestNews = response.data;
                    app.Loading.LatestNews = false;
                })
                .catch(function (exception) {
                    console.log('Error:' + exception);
                });

        },
        fetchCompanyDiscloser: function (accT) {
            this.Loading.Discloser = true;
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/company/get-articles/204/" + this.companyId;
            var app = this;
            axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + accT } })
                .then(function (response) {
                    console.log(response);
                    // debugger;
                    app.Discloser = response.data;
                    app.Loading.Discloser = false;
                })
                .catch(function (exception) {
                    console.log('Error:' + exception);
                });

        },
        fetchFinancialRatios: function (accT) {
            this.Loading.FinancialRatios = true;
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/company/get-ratios/" + this.marketId + "/" + this.companyId + "?fiscalPeriodType=quarter";
            var app = this;
            axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + accT } })
                .then(function (response) {
                    console.log(response);
                    // debugger;
                    app.FinancialRatios = response.data;
                    app.Loading.FinancialRatios = false;
                })
                .catch(function (exception) {
                    console.log('Error:' + exception);
                });

        },
        fetchFinancialResultPdf: function (accT) {
            this.Loading.FinancialResultPdf = true;
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/company/get-financial-result-pdf/" + this.marketId + "/" + this.companyId;
            var app = this;
            axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + accT } })
                .then(function (response) {
                    console.log(response);
                    // debugger;
                    app.FinancialResultPdf = response.data;
                    app.Loading.FinancialResultPdf = false;
                })
                .catch(function (exception) {
                    console.log('Error:' + exception);
                });

        },
        fetchEvents: function (accT) {
            this.Loading.Events = true;
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/company/get-events/" + this.marketId + "/" + this.companyId;
            var app = this;
            axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + accT } })
                .then(function (response) {
                    console.log(response);
                    app.Events = response.data.events;
                    app.Loading.Events = false;
                })
                .catch(function (exception) {
                    console.log('Error:' + exception);
                });

        },
        fetchPrices: function (accT) {
            this.Loading.Prices = true;
            this.Loading.MarketData = true;
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/company/get-prices-data/" + this.marketId + "/" + this.companyId;
            var app = this;
            axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + accT } })
                .then(function (response) {
                    console.log(response);
                    app.Prices = response.data.companyPrices[0];
                    app.Loading.Prices = false;
                    app.Loading.MarketData = false;
                })
                .catch(function (exception) {
                    console.log('Error:' + exception);
                });

        },
        fetchProfileInfo: function (accT) {
            this.Loading.ProfileInfo = true;
            var apiUrl = baseUrl + "/api/v" + api_version + "/json/company/get-profile/" + this.marketId + "/" + this.companyId;
            var app = this;
            axios.get(apiUrl, { headers: { 'Content-Type': 'application/json', 'authorization': 'Bearer ' + accT } })
                .then(function (response) {
                    console.log(response);
                    app.ProfileInfo = response.data.companyProfile;
                    app.Loading.ProfileInfo = false;
                })
                .catch(function (exception) {
                    console.log('Error:' + exception);
                });


        },
        fetchMarketData: function () { },
        fetchChartData: function () { }


    }
});