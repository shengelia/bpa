var baseUrl = 'https://yalamacasinos.com/lm/user/';
var games = {
    top: [
        {
            "id": 9,
            "name": "3 Fruits Win",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=3_fruits_win_10&lang=en&wl=pl_gate-dp"
        },
        {
            "id": 31,
            "name": "Jacks or better mh",
            "url": "https://showcase.playngo.com/casino/GameLoader?pid=2&gid=jacksorbetter&gameId=269&lang=en_GB&practice=1&channel=desktop&div=pngCasinoGame&width=100%&height=100%&user=&password=&ctx=&demo=2&brand=&lobby=&rccurrentsessiontime=0&rcintervaltime=0&rcaccounthistoryurl=&rccontinueurl=&rcexiturl=&rchistoryurlmode=&autoplaylimits=0&autoplayreset=0&callback=&rcmga=&resourcelevel=0&hasjackpots=False&country=&pauseplay=&playlimit=&selftest=&sessiontime="
        },
        {
            "id": 14,
            "name": "Kingdon Of The Sun",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=kingdom_of_the_sun2&lang=en&wl=pl_gate"
        },
        {
            "id": 21,
            "name": "Live Baccarat",
            "url": "https://live.livepbt.com?PlayerName=guest&OperatorName=demoPlayer&AuthCode=DEMO&GameType=Baccarat&lobbyURL=https://magicspinscasino.com"
        },
        {
            "id": 32,
            "name": "Jacks or better 52 hand",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=16&machid=0&handcount=52&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 22,
            "name": "Roulette High",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=roulette_with_track_high&lang=en&wl=pl_gate"
        }
    ],
    poker: [
        {
            "id": 31,
            "name": "Jacks or better mh",
            "url": "https://showcase.playngo.com/casino/GameLoader?pid=2&gid=jacksorbetter&gameId=269&lang=en_GB&practice=1&channel=desktop&div=pngCasinoGame&width=100%&height=100%&user=&password=&ctx=&demo=2&brand=&lobby=&rccurrentsessiontime=0&rcintervaltime=0&rcaccounthistoryurl=&rccontinueurl=&rcexiturl=&rchistoryurlmode=&autoplaylimits=0&autoplayreset=0&callback=&rcmga=&resourcelevel=0&hasjackpots=False&country=&pauseplay=&playlimit=&selftest=&sessiontime="
        },
        {
            "id": 27,
            "name": "Joker poker 52 hand",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=16&machid=1&handcount=52&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 32,
            "name": "Jacks or better 52 hand",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=16&machid=0&handcount=52&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 28,
            "name": "Joker poker 3 hand",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=16&machid=1&handcount=3&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 29,
            "name": "Joker poker 10 hand",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=16&machid=1&handcount=10&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 30,
            "name": "Joker poker",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=7&machid=1&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en",
        },
        {
            "id": 26,
            "name": "Joker poker mh",
            "url": "https://showcase.playngo.com/casino/GameLoader?pid=2&gid=jokerpoker&gameId=271&lang=en_GB&practice=1&channel=desktop&div=pngCasinoGame&width=100%&height=100%&user=&password=&ctx=&demo=2&brand=&lobby=&rccurrentsessiontime=0&rcintervaltime=0&rcaccounthistoryurl=&rccontinueurl=&rcexiturl=&rchistoryurlmode=&autoplaylimits=0&autoplayreset=0&callback=&rcmga=&resourcelevel=0&hasjackpots=False&country=&pauseplay=&playlimit=&selftest=&sessiontime="
        },
        {
            "id": 25,
            "name": "Loose deuces",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=7&machid=11&handcount=10&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 33,
            "name": "Jacks or better 3 hand",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=16&machid=0&handcount=3&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 34,
            "name": "Jacks or better 10 hand",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=16&machid=0&handcount=10&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 35,
            "name": "Jacks or better",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=7&machid=0&handcount=52&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 36,
            "name": "Jackpot poker",
            "url": "https://showcase.playngo.com/casino/GameLoader?pid=2&gid=jackpotpoker&gameId=276&lang=en_GB&practice=1&channel=desktop&div=pngCasinoGame&width=100%&height=100%&user=&password=&ctx=&demo=2&brand=&lobby=&rccurrentsessiontime=0&rcintervaltime=0&rcaccounthistoryurl=&rccontinueurl=&rcexiturl=&rchistoryurlmode=&autoplaylimits=0&autoplayreset=0&callback=&rcmga=&resourcelevel=0&hasjackpots=False&country=&pauseplay=&playlimit=&selftest=&sessiontime="
        },
        {
            "id": 41,
            "name": "Deuces wild mh",
            "url": "https://showcase.playngo.com/casino/GameLoader?pid=2&gid=deuceswild&gameId=270&lang=en_GB&practice=1&channel=desktop&div=pngCasinoGame&width=100%&height=100%&user=&password=&ctx=&demo=2&brand=&lobby=&rccurrentsessiontime=0&rcintervaltime=0&rcaccounthistoryurl=&rccontinueurl=&rcexiturl=&rchistoryurlmode=&autoplaylimits=0&autoplayreset=0&callback=&rcmga=&resourcelevel=0&hasjackpots=False&country=&pauseplay=&playlimit=&selftest=&sessiontime="
        },
        {
            "id": 42,
            "name": "Deuces wild",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=7&machid=2&handcount=52&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 43,
            "name": "Bonus poker deluxe",
            "img": "//cdn.vegasgod.com/rtg/bonus-poker-deluxe/cover.jpg",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=7&machid=6&handcount=52&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 37,
            "name": "Double jackpot poker",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=7&machid=10&handcount=52&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 38,
            "name": "Double double jackpot poker",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=7&machid=9&handcount=52&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 39,
            "name": "Double double bonus poker",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=7&machid=8&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 40,
            "name": "Double bonus poker",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=7&machid=7&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },

        {
            "id": 44,
            "name": "Bonus poker",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=7&machid=5&handcount=52&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        },
        {
            "id": 45,
            "name": "Bonus deuces wild",
            "url": "https://www.slots.lv/static/brng-flash/rtgflash/brand-agnostic/mini_flash_client.html?token=&forReal=FALSE&IP=casinoapp.slots.lv&portBase=0&casinoName=USD&gameid=7&machid=13&denom=25&user=&playAgain=&playForReal=&embedded=false&language=en"
        }
    ],
    slot: [
        {
            "id": 11,
            "name": "God Of The Sea",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=god_of_sea&lang=en&wl=pl_gate"
        },
        {
            "id": 3,
            "name": "Wolf Run Slots",
            "url": "https://ogs-cdn-usnj.nyxop.net/flash/wrapper.html?operatorid=107&currency=FPY&gameid=200-1196-001&lang=en&sessionid=Free&mode=demo&type=igt&wrapperroot=https://ogs-cdn-usnj.nyxop.net/flash/igtwrapper.swf?serverRoot%3Dhttps://platform.ac.rgsgames.com/&gameProviderId=140&skinCode=GNT2&nsCode=GNUG&minbet=1&denomination=1"
        },
        {
            "id": 1,
            "name": "Fire Horse",
            "url": "https://platform.rgsgames.com/skb/gateway?skincode=CA02&minbet=1.00&countrycode=GB&channel=MOB&nscode=CSMO&language=en&moneymode=fun&technology=HTML&login=demo&currencycode=FPY&softwareid=200-1237-001&width=1024&denomamount=1.00&presenttype=STD&lang1=en&height=768"
        },
        {
            "id": 8,
            "name": "Wild Burning Wins",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=wild_burning_wins_5&lang=en&wl=pl_gate-dp"
        },
        {
            "id": 5,
            "name": "Pixies Of The Forest Slots",
            "url": "https://m.ac.rgsgames.com/games/index.html?nscode=GNUG&skincode=GNT1&currencycode=FPY&softwareid=200-1157-001&language=en&countrycode=CA&denomamount=1.00&minbet=1.00&uniqueid=1234&securetoken=999999"
        },
        {
            "id": 6,
            "name": "Book of Gold",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=book_of_gold_classic&lang=en&wl=pl_gate"
        },
        {
            "id": 7,
            "name": "Imperial Fruits",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=imperial_fruits_40&lang=en&wl=pl_gate-dp"
        },
        {
            "id": 2,
            "name": "Candy Bar Slots",
            "url": "https://ogs-cdn-usnj.nyxop.net/flash/wrapper.html?operatorid=107&currency=FPY&gameid=200-1295-001&lang=en&sessionid=Free&mode=demo&type=igt&wrapperroot=https://ogs-cdn-usnj.nyxop.net/flash/igtwrapper.swf?serverRoot%3Dhttps://platform.ac.rgsgames.com/&gameProviderId=140&skinCode=GNT2&nsCode=GNUG&minbet=1&denomination=1"
        },
        {
            "id": 9,
            "name": "3 Fruits Win",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=3_fruits_win_10&lang=en&wl=pl_gate-dp"
        },
        {
            "id": 10,
            "name": "Joker Expanded - 5 Lines",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=joker_expand&lang=en&wl=pl_gate"
        },
        {
            "id": 15,
            "name": "Fruits & Stars",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=fruits_n_stars_he&lang=en&wl=pl_gate"
        },
        {
            "id": 4,
            "name": "Lobstermania Slots",
            "url": "https://ogs-cdn-usnj.nyxop.net/flash/wrapper.html?operatorid=107&currency=FPY&gameid=200-1233-002&lang=en&sessionid=Free&mode=demo&type=igt&wrapperroot=https://ogs-cdn-usnj.nyxop.net/flash/igtwrapper.swf?serverRoot%3Dhttps://platform.ac.rgsgames.com/&gameProviderId=140&skinCode=GNT2&nsCode=GNUG&minbet=1&denomination=1"
        },
        {
            "id": 13,
            "name": "Sevens & Fruits",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=sevens_n_fruits&lang=en&wl=pl_gate"
        },
        {
            "id": 14,
            "name": "Kingdon Of The Sun",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=kingdom_of_the_sun2&lang=en&wl=pl_gate"
        },
        {
            "id": 12,
            "name": "40 Joker Staxx",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=40_joker_staxx&lang=en&wl=pl_gate"
        }
    ],
    table: [
        {
            "id": 20,
            "name": "Live Roulette",
            "url": "https://live.livepbt.com?PlayerName=guest&OperatorName=demoPlayer&AuthCode=DEMO&GameType=Roulette&lobbyURL=https://magicspinscasino.com"
        },
        {
            "id": 18,
            "name": "Carrbbean Table Game",
            "url": "https://streamtech-gp3.discreetgaming.com/cwguestlogin.do?gameId=12&lang=en&bankId=TS"
        },
        {
            "id": 19,
            "name": "High Blackjack",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=blackjack_us_high&lang=en&wl=pl_gate"
        },
        {
            "id": 16,
            "name": "Baccarat Table Game",
            "url": "https://streamtech-gp3.discreetgaming.com/cwguestlogin.do?gameId=13&lang=en&bankId=TS"
        },
        {
            "id": 21,
            "name": "Live Baccarat",
            "url": "https://live.livepbt.com?PlayerName=guest&OperatorName=demoPlayer&AuthCode=DEMO&GameType=Baccarat&lobbyURL=https://magicspinscasino.com"
        },
        {
            "id": 22,
            "name": "Roulette High",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=roulette_with_track_high&lang=en&wl=pl_gate"
        },
        {
            "id": 23,
            "name": "Table Blackjack",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=blackjack_us&lang=en&wl=pl_gate"
        },
        {
            "id": 24,
            "name": "Low Roulette",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=roulette_with_track_low&lang=en&wl=pl_gate"
        },
        {
            "id": 17,
            "name": "Blackjack Low",
            "url": "https://cdn.ps-gamespace.com/gm/index.html?key=TEST550004&partner=playsonsite-prod&gameName=blackjack_us_low&lang=en&wl=pl_gate"
        }
    ]
};

new Vue({
    el: "#casinoApp",
    data() {
        return {
            games: games,
            isLogged: false,
            loading: false,
            pageLoading: true,
            activeMenu: 'top',
            modal: {
                signIn: false,
                signUp: false,
                forget: false,
                pleaseLoginOrSignUp: false,
                game: false
            },
            activeGame: '',
            user: {
                fullname: 'Hasan Eyvazoff',
                email: 'hasan@eyvazoff.com',
                token: ''
            },
            input: {
                signIn: {
                    email: '',
                    password: ''
                },
                signUp: {
                    fullname: '',
                    email: '',
                    password: '',
                    terms: false
                },
                forget: {
                    email: ''
                }
            },
            error: '',
            showHeader: false
        }
    },
    watch: {
        modal: {
            handler(v) {
                this.error = '';
            },
            deep: true
        },
        'modal.game': {
            handler(v) {
                if (v === false) {
                    this.activeGame = '';
                }
            },
            deep: true
        }
    },
    methods: {
        SetMenu(menu) {
            this.activeMenu = menu;
        },
        playNow(url) {
            if (this.isLogged) {
                this.modal.game = true;
                this.activeGame = url;
            } else {
                this.modal.pleaseLoginOrSignUp = true;
            }
        },
        join() {
            this.modal.pleaseLoginOrSignUp = false;
            this.modal.signUp = true;
        },
        sign() {
            this.modal.pleaseLoginOrSignUp = false;
            this.modal.signIn = true;
        },
        forget() {
            this.modal.signIn = false;
            this.modal.forget = true;
        },
        signInAction() {
            this.error = '';
            var i = this.input.signIn;
            if (!i.email || !i.password) {
                this.error = 'Fill in all fields';
            } else if (!validateEmail(i.email)) {
                this.error = 'Email address is invalid';
            }
            if (this.error !== '') return false;
            this.loading = true;
            var params = this.input.signIn;
            axios({
                url: baseUrl + 'login',
                method: 'post',
                data: params,
            }).then(res => {
                this.loading = false;
                this.isLogged = true;
                this.user.email = this.input.signIn.email;
                this.user.fullname = res.data.fullname;
                this.user.token = res.data.accessToken;
                window.localStorage.setItem("user", JSON.stringify(this.user));
            }).catch(err => {
                if (err.response) {
                    if (err.response.status === 500) {
                        this.error = 'Server problem';
                    } else {
                        this.error = 'Email or password incorrect';
                    }
                }
                this.loading = false;
            })
        },
        joinAction() {
            this.error = '';
            var i = this.input.signUp;
            if (!i.fullname || !i.email || !i.password) {
                this.error = 'Fill in all fields';
            } else if (!validateEmail(i.email)) {
                this.error = 'Email address is invalid';
            } else if (!i.terms) {
                this.error = 'Please confirm "Terms and conditions"';
            }
            if (this.error !== '') return false;
            this.loading = true;
            var params = this.input.signUp;
            axios({
                url: baseUrl + 'signup',
                method: 'post',
                data: params,
            }).then(res => {
                this.loading = false;
                this.isLogged = true;
                this.user.email = this.input.signUp.email;
                this.user.fullname = this.input.signUp.fullname;
                this.user.token = res.data.accessToken;
                window.localStorage.setItem("user", JSON.stringify(this.user));
            }).catch(err => {
                if (err.response) {
                    if (err.response.status === 500) {
                        this.error = 'Server problem';
                    } else {
                        this.error = 'Email address already in use';
                    }
                }
                this.loading = false;
            })
        },
        forgetAction() {
            this.error = '';
            var i = this.input.forget;
            if (!i.email) {
                this.error = 'Fill in all fields';
            } else if (!validateEmail(i.email)) {
                this.error = 'Email address is invalid';
            }
            if (this.error !== '') return false;
            this.loading = true;
            var params = this.input.forget;
            axios({
                url: baseUrl + 'resetpassword',
                method: 'post',
                data: params,
            }).then(res => {
                this.loading = false;
                this.error = 'We have sent you a password reset link to your e-mail.<br> Please check your inbox';
                /*this.modal.forget = false;*/
            }).catch(err => {
                if (err.response) {
                    if (err.response.status === 500) {
                        this.error = 'Server problem';
                    } else {
                        this.error = "Can't find this email";
                    }
                }
                this.loading = false;
            })
        },
        checkUserAuth() {
            var user = window.localStorage.getItem("user");
            user = JSON.parse(user);
            if (user) {
                var params = '';
                axios({
                    url: baseUrl + 'checkuser',
                    method: 'get',
                    data: params,
                    headers: {
                        'X-AccessToken': user.token
                    }
                }).then(res => {
                    this.isLogged = true;
                    this.user = user;
                    this.showHeader = true;
                }).catch(err => {
                    this.isLogged = false;
                    this.pageLoading = false;
                    this.showHeader = true;
                })
            } else {
                this.pageLoading = false;
                this.showHeader = true;
            }
        },
        logout() {
            this.isLogged = false;
            window.localStorage.removeItem("user");
        }
    },
    mounted() {
        this.checkUserAuth();
    }
});


function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

// Scrolling navbar
$(function () {
  $(document).scroll(function () {
      var $nav = $(".nav-header");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});
// Scrolling navbar