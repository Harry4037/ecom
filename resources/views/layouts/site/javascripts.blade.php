<!-- Bootstrap core JavaScript -->
<!--<script src="vendor/jquery/jquery.min.js"></script>-->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- select2 Js -->
<script src="vendor/select2/js/select2.min.js"></script>
<!-- Owl Carousel -->
<script src="vendor/owl-carousel/owl.carousel.js"></script>
<!-- Slider Js -->
<script src="vendor/slider/slider.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/custom.js"></script>
<script>

    $("#verifyOTP").validate({
        rules: {
            user_OTP: {
                required: true,
                digits: true,
            },
        },
        submitHandler: function (form) {
            let btn = $(form).find('input[type="submit"]');
            btn.val('Submitting . . .').attr('disabled', 'disabled');
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function (response) {
                    btn.val('Verify').removeAttr('disabled');
                    if (response.status) {
                        $("#reg_msg").css("color", "green");
                        $("#reg_msg").html(response.msg);
                        $("#registerUser").css("display", "block");
                        $("#verifyOTP").css("display", "none");

                        setTimeout(function () {
                            location.reload();
                        }, 1500);

                    } else {
                        $("#reg_msg").css("color", "red");
                        $("#reg_msg").html(response.msg);
                    }
                },
            });
        }
    });

    $("#registerUser").validate({
        rules: {
            user_email_id: {
                required: true,
                email: true,
            },
            user_password: {
                required: true,
                minlength: 6,
            },
            user_c_password: {
                required: true,
                equalTo: "#user_password"
            }
        },
        messages: {
            user_password: {
                minlength: "Password must be minimum six character."
            },
            user_c_password: {
                equalTo: "Confirm password does't match."
            },
//            user_mobile_number: {
//                digits: "Please enter valid mobile number.",
//                minlength: "Please enter 10 digit mobile number.",
//                maxlength: "Please enter 10 digit mobile number."
//            }
        },
        submitHandler: function (form) {
            let btn = $(form).find('input[type="submit"]');
            btn.val('Submitting . . .').attr('disabled', 'disabled');
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function (response) {
                    btn.val('Create Your Account').removeAttr('disabled');
                    if (response.status) {
                        $("#reg_msg").css("color", "green");
                        $("#reg_msg").html(response.msg);
                        $("#user_otp_id").val(response.user_id);
                        $("#registerUser").css("display", "none");
                        $("#verifyOTP").css("display", "block");
                    } else {
                        $("#reg_msg").css("color", "red");
                        $("#reg_msg").html(response.msg);
                    }

//                    setTimeout(function () {
//                        location.reload();
//                    }, 1500);
                },
            });
        }
    });

    $("#loginUser").validate({
        rules: {
            email_id: {
                required: true,
                email: true,
            },
            password: {
                required: true,
            },
        },
        submitHandler: function (form) {
            let btn = $(form).find('input[type="submit"]');
            btn.val('Submitting . . .').attr('disabled', 'disabled');
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function (response) {
                    console.log(response);
                    btn.val('Enter to your account').removeAttr('disabled');
                    console.log(response.auth);
                    if (response.auth) {
                        console.log("success");
                        window.location.href = response.intended;

                    } else {
                        $("#login_msg").html("Invalid login details or OTP not verified.");
                        $("#login_msg").css("color", "red");
                        $("#login_msg").css("display", "block");

                        setTimeout(function () {
                            $("#login_msg").fadeOut();
                        }, 2000);
                    }
                },
                error: function (xhr) {
                    btn.val('Enter to your account').removeAttr('disabled');
                    $("#login_msg").html("Invalid login details or OTP not verified.");
                    $("#login_msg").css("color", "red");
                    $("#login_msg").css("display", "block");

                    setTimeout(function () {
                        $("#login_msg").fadeOut();
                    }, 2000);
                }
            });
        }
    });

    window.onscroll = function () {
        myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
<script>
    var theToggle = document.getElementById('toggle');

    // based on Todd Motto functions
    // https://toddmotto.com/labs/reusable-js/

    // hasClass
    function hasClass(elem, className) {
        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
    }
    // addClass
    function addClass(elem, className) {
        if (!hasClass(elem, className)) {
            elem.className += ' ' + className;
        }
    }
    // removeClass
    function removeClass(elem, className) {
        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(' ' + className + ' ') >= 0) {
                newClass = newClass.replace(' ' + className + ' ', ' ');
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        }
    }
    // toggleClass
    function toggleClass(elem, className) {
        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, " ") + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(" " + className + " ") >= 0) {
                newClass = newClass.replace(" " + className + " ", " ");
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        } else {
            elem.className += ' ' + className;
        }
    }

//        theToggle.onclick = function () {
//            toggleClass(this, 'on');
//            return false;
//        }
</script>
<!-----Slider Js-------------------->
<script type="text/javascript">
    var revapi1,
            tpj;
    (function () {
        if (!/loaded|interactive|complete/.test(document.readyState))
            document.addEventListener("DOMContentLoaded", onLoad);
        else
            onLoad();
        function onLoad() {
            if (tpj === undefined) {
                tpj = jQuery;
                if ("off" == "on")
                    tpj.noConflict();
            }
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//www.webinforest.com/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                        ,
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "uranus",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 20,
                            space: 5,
                            tmp: '<span class="tp-bullet-inner"></span>'
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1400,
                    gridheight: 350,
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "enterpoint",
                        speed: 1000,
                        speedbg: 0,
                        speedls: 0,
                        levels: [3, 6, 9, 12, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
            ; /* END OF revapi call */

        }
        ; /* END OF ON LOAD FUNCTION */
    }()); /* END OF WRAPPING FUNCTION */
</script>
<script type="text/javascript">function setREVStartSize(e) {
        try {
            e.c = jQuery(e.c);
            var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
            }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                var u = (e.c.width(), jQuery(window).height());
                if (void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c)
                        jQuery.each(c, function (e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                }
                f = u
            } else
                void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({height: f})
        } catch (d) {
            console.log("Failure at Presize of Slider:" + d)
        }
    }
    ;</script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script type="text/javascript" src="js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/extensions/revolution.extension.video.min.js"></script>					
