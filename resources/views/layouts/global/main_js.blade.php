

<script type="text/javascript" src="{{ asset('/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/additional-methods.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.min.css') }}">


<script type="text/javascript" src="{{ asset('/js/jquery.fancybox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/app-mobile1b5e.js') }}"></script>

<script>
    window.isAuth = '1' ? false : true;
    window.currencyCode = 'IDR';
    window.lang = "id";
    window.agentCode = '{{ $setting->nama_web }}';
    window.sweetAlert = function(msg, type, title, showCancelBtn) {
        //check CF error
        var dateNow = "2023-05-26 16:46:59";

        if (msg.indexOf('cloudflare') >= 0) {
            msg = transMsgs.cfTimeout + ' (error time: ' + dateNow + ')';
            title = " ";
        }
        return Swal.fire({
            title: !title ? "Warning" : title,
            text: msg,
            icon: !type ? "error" : type,
            buttons: {
                confirm: {
                    text: "OK",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: true
                },
                cancel: {
                    text: "Cancel",
                    value: false,
                    visible: showCancelBtn ? true : false,
                    className: "",
                    closeModal: true,
                }
            }
        });
    }
    window.name = !window.name ? "parent" + Date.now() + Math.floor(Math.random() * 100000000) : window.name;
    window.formatNumber = function(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/[^0-9\-]/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }
    window.convertToNumber = function(value) {

        if (!value) {
            return 0;
        }
        if (value.indexOf(".") >= 0) {
            var decimal_pos = value.indexOf(".");
            value = value.substring(0, decimal_pos);

        }
        var number = value.replace(/[^0-9.-]+/g, "");
        if (isNaN(number)) {
            number = 0;
        }
        return number;
    }

    window.formatCurrency = function(value) {
        const symbol = ""; //"$"
        // get input value
        var input_val = value;

        if (typeof value !== 'string') {
            var input_val = value.toString();
        }
        if (input_val === "") {
            return;
        }

        var original_len = input_val.length;


        if (input_val.indexOf(".") >= 0) {

            var decimal_pos = input_val.indexOf(".");
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos + 1);

            left_side = formatNumber(left_side);

            right_side += "00";

            right_side = right_side.substring(0, 2);

            input_val = symbol + left_side + "." + right_side;

        } else {
            input_val = formatNumber(input_val);
            input_val = symbol + input_val + ".00";;

        }

        return input_val;
    }

    window.prize = 0;
    window.ajax_jackpot = function() {
        // $.ajax({
        //     url: "https://www.geo138.life/getPokerJackpotAmt",
        //     type: 'post',
        //     data: {
        //         _token: $('meta[name=csrf-token]').attr('content')
        //     },
        //     success: function(data) {
        //         prize = (data / 2000.000) * 2000.000;
        //         $('.jackpot_numbers_home').html(
        //             `IDR <span id="jackpot_amount">${ commaSeparateNumber(prize) }</span>`)

        //         //$('.jackpot_numbers_home').html(`IDR ` + commaSeparateNumber(data.prize));
        //     }
        // });
    }

    var newI = 0;
    window.popitup = function(url, gameid) {
        //alert(gameid);
        newwindow = window.open(url, window.agentCode + '_gameWindow' + gameid + newI,
            'toolbar=0,width=1200,height=750');
        newI++;
        if (window.focus) {
            newwindow.focus()
        }
        return false;
    }

    window.popup = function(mylink, windowname) {
        if (!window.focus) return true;
        var href;
        if (typeof(mylink) == 'string')
            href = mylink;
        else
            href = mylink.href;
        window.open(href, windowname, 'width=600,height=800,scrollbars=yes');
        return false;
    }
    window.commaSeparateNumber = function(val, isJP) {
        while (/(\d+)(\d{3})/.test(val.toString())) {

            if (window.currencyCode == 'VND' && isJP) {
                val = val.toFixed(0);
            } else {
                val = Number(val).toFixed(2);
            }
            val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
        }
        return val;
    }

    window.getRandomIntInclusive = function(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) +
            min; //The maximum is inclusive and the minimum is inclusive
    }

    /*bank acc min and maxlength limitation */
    window.accLength = parseInt("8");
    window.bankAccLength = function(selectedBank, default_minlength, default_maxlength) {
        console.log(selectedBank, default_minlength, default_maxlength);
        var custom_minLength, custom_maxLength;
        if (selectedBank == 'MDR') {
            custom_minLength = 13;
            custom_maxLength = 13;
        } else if (selectedBank == 'BNI' || selectedBank == 'BCA' || selectedBank == 'DMN' || selectedBank ==
            'BSI' || selectedBank == 'BLA') {
            custom_minLength = 10;
            custom_maxLength = 10;
        } else if (selectedBank == 'BRI') {
            custom_minLength = 15;
            custom_maxLength = 15;
        } else if (selectedBank == 'CIMBN' || selectedBank == 'BANKJAGO') {
            custom_minLength = 12;
            custom_maxLength = 12;
        } else {
            custom_minLength = default_minlength;
            custom_maxLength = default_maxlength;
        }

        return {
            'min_len': custom_minLength,
            'max_len': custom_maxLength
        }
    }
    /*bank acc min and maxlength limitation end*/


    $(document).ready(function() {
        //suspend-alert
        // login-alert
        // promo-disabled-alert
        // "maintenance-alert";
        // "comingsoon-alert";
        window.alertLogin = function(e) {
            e.preventDefault();
            sweetAlert(transMsgs.plsLogin);
            return false;
        }

        $(".suspend-alert").click(function(e) {
            e.preventDefault();
            sweetAlert(transMsgs.blockedFrGame);
            return false;
        });

        $(".login-alert").click(function(e) {
            if ($("#login-modal--layout").length && !$('#loginForm').hasClass('js-inline-form')) {
                $("#login-modal--layout").nifty("show")
            } else {
                alertLogin(e);
            }

            return false;
        });

        $(".maintenance-alert", ).click(function(e) {
            e.preventDefault();
            sweetAlert(transMsgs.gameMaintenance);
            return false;
        });

        $(document).on("click", ".maintenance-alert-lock", function(e) {
            e.preventDefault();
            sweetAlert('Game Terkunci, mohon hubungi administrator !');
            return false;
        });

        $(document).on("click", ".maintenance-login-lock", function(e) {
            e.preventDefault();
            sweetAlert('Silakan login untuk akses game');
            return false;
        });

        $(".url-box").click(function(e) {
            window.location = $(this).attr('href');
        })

        $(".comingsoon-alert").click(function(e) {
            e.preventDefault();
            sweetAlert(transMsgs.gameComingSoon);
            return false;
        });

        $(".promo-disabled-alert").click(function(e) {
            e.preventDefault();
            sweetAlert(transMsgs.gamePromoBlock);
            return false;
        });



    });


    $("input").focus(function() {
        $("body").addClass("input-focused");
    });
    $("input").focusout(function() {
        $("body").removeClass("input-focused");
    });

    // var host = window.location.host;
    // var curr_host = "www.geo138.life";
    // var agent_url = "index.html";

    // console.log(host, curr_host, agent_url, agent_url.includes(host));

    // if (host != curr_host && !agent_url.includes(host)) {

    //     location.href = "index.html";
    // }
    <?php echo $setting->live_chat ?>
</script>