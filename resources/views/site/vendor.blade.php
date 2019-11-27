<html>
    <head>
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <style>
            /*custom font*/

            @import url(http://fonts.googleapis.com/css?family=Montserrat);

            body {
                font-family: montserrat, arial, verdana;
            }
            /*form styles*/
            #msform {
                width: 75%;
                margin: 50px auto;
                text-align: center;
                position: relative;
            }
            #msform fieldset {
                background: white;
                border: 0 none;
                border-radius: 3px;
                box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
                padding: 20px 30px;
                box-sizing: border-box;
                width: 96%;
                margin: 0 2%;
                /*stacking fieldsets above each other*/
                position: absolute;
            }
            /*Hide all except first fieldset*/
            #msform fieldset:not(:first-of-type) {
                display: none;
            }
            /*inputs*/
            #msform input, #msform textarea {
                padding: 9px;
                border: 1px solid #ccc;
                border-radius: 3px;
                margin-bottom: 10px;
                width: 49%;
                box-sizing: border-box;
                font-family: montserrat;
                color: #2C3E50;
                font-size: 13px;
            }
            input[type="radio"]{width:auto!important;}
            /*buttons*/
            #msform .action-button {
                width: 100px;
                background: #27AE60;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 1px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px;
            }
            #msform .action-button:hover, #msform .action-button:focus {
                box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
            }
            /*headings*/
            .fs-title {
                font-size: 15px;
                text-transform: uppercase;
                color: #2C3E50;
                margin-bottom: 10px;
            }
            .fs-subtitle {
                font-weight: normal;
                font-size: 13px;
                color: #666;
                margin-bottom: 20px;
            }
            /*progressbar*/
            #progressbar {
                margin-bottom: 30px;
                overflow: hidden;
                /*CSS counters to number the steps*/
                counter-reset: step;
                padding: 0 10px;
            }
            #progressbar li {
                list-style-type: none;
                color: white;
                text-transform: uppercase;
                font-size: 9px;
                width: 25%;
                float: left;
                position: relative;
            }
            #progressbar li:before {
                content: counter(step);
                counter-increment: step;
                width: 20px;
                line-height: 20px;
                display: block;
                font-size: 10px;
                color: #333;
                background: white;
                border-radius: 3px;
                margin: 0 auto 5px auto;
            }
            /*progressbar connectors*/
            #progressbar li:after {
                content: '';
                width: 100%;
                height: 2px;
                background: white;
                position: absolute;
                left: -50%;
                top: 9px;
                z-index: -1; /*put it behind the numbers*/
            }
            #progressbar li:first-child:after {
                /*connector not needed before the first step*/
                content: none;
            }
            /*marking active/completed steps green*/
            /*The number of the step and the connector before it = green*/
            #progressbar li.active:before, #progressbar li.active:after {
                background: #27AE60;
                color: white;
            }
            .desposit_method label
            {
                width: 46%;
                text-align: right;
                padding-right: 15px;
                display: inline-block;
                font-size:14px;
            }
            .error{
                color: red;
            }
        </style>
        <title>Vendor Registration</title>
    </head>
    <body style="background:#f66a2b">
        <h1 style="margin-top:40px" align="center">Vendor Registration</h1>
        <!-- multistep form -->
        <form id="msform" method="post" action="{{route('site.vendor.register')}}" enctype="multipart/form-data">
            @csrf
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Information</li>
                <li>Store Information</li>
                <li>Deposit Method</li>
                <li>Preview</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                @if(session()->has('status'))
                <div style="background-color: green;color: white;margin-right: 200px;margin-left: 200px;padding-bottom: 6px;line-height: 23px;">{{ session()->get('status') }}</div>
                @endif
                <h2 class="fs-title">Personal Information</h2>
                <div id="step1Error" class="error"></div>
                <input type="text" name="fullname" id="fullname" placeholder="Full Name" />
                <input type="text" name="username" id="username" placeholder="Username" />
                <input type="email" name="email" id="email" placeholder="Email Id" />
                <input type="text" name="contact" id="contact" placeholder="Contact Number" />
                <input type="password" name="pass" id="pass" placeholder="Password" />
                <input type="password" name="cpass" id="cpass" placeholder="Confirm Password" />
                <!--<input type="text" name="country" id="country" placeholder="Saudi Arabia" value="Saudi Arabia" disabled />-->
                <input type="button" name="next" class="next action-button" id="step1" value="Next" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Store Information</h2>
                <div id="step2Error" class="error"></div>
                <h3 class="fs-subtitle">Upload Required Documents</h3>
                <input type="file" name="vendor_doc" id="vendor_doc" placeholder="docs"/>
                <input type="text" name="expirydate" id="expirydate" placeholder="Trade License Expiry Date"/>
                <input type="text" name="registrationno" id="registrationno" placeholder="Tax Registration Number"/>
                <input type="text" name="businessid" id="businessid" placeholder="Business Id"/>
                <input type="text" name="storename" id="storename" placeholder="Store Name"/>
                <input type="text" name="tradename" id="tradename" placeholder="Trade Name"/>
                <input type="text" name="phoneno" id="phoneno" placeholder="Phone Number"/>
                <input type="text" name="pickupaddress" id="pickupaddress" placeholder="Pick Up Address"/>
                <input type="text" name="country" id="country" placeholder="Country"/>
                <input type="text" name="city" id="city" placeholder="City"/>
                <input type="text" name="zone" id="zone" placeholder="Zone"/>
                <input type="button" name="previous" class="previous action-button" value="Previous"/>
                <input type="button" name="next" class="next action-button" id="step2" value="Next"/>
            </fieldset>
            <fieldset class="desposit_method">
                <h2 class="fs-title">Set Up Your Deposit Method</h2>
                <div id="step3Error" class="error"></div>
                <label>IBAN</label><input type="text" name="iban" id="iban" placeholder="IBAN"/>
                <label>ISO Country Code</label><input type="text" name="iso" id="iso" placeholder="ISO Country Code"/>
                <label>IBAN Check Digits</label><input type="text" name="ibancheckdigits" id="ibancheckdigits" placeholder="IBAN Check Digits"/>
                <label>BBAN</label><input type="text" name="bban" id="bban" placeholder="BBAN"/>
                <label>Bank Identifier</label><input type="text" name="bank" id="bank" placeholder="Bank Identifier"/>
                <label>Account No</label><input type="text" name="accountno" id="accountno" placeholder="Account No"/>
                <label>SEPA Member</label><input type="text" name="sepa" id="sepa" placeholder="SEPA Member"/>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" id="step3" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Preview</h2>
                <h3 class="fs-subtitle">Personal Information</h3>
                <table style="border: 1px solid #ddd;width: 970px;clear: both;border-collapse: separate !important;text-align: center;">
                    <tr>
                        <th>Full Name</th>
                        <td><span id="fullname_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td><span id="username_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><span id="email_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Contact Number</th>
                        <td><span id="contact_pre"></span></td>
                    </tr>
                </table>
                <h3 class="fs-subtitle">Store Information</h3>
                <table style="border: 1px solid #ddd;width: 970px;clear: both;border-collapse: separate !important;text-align: center;">
                    <tr>
                        <th>Expiry Date</th>
                        <td><span id="expirydate_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Tax Registration Number</th>
                        <td><span id="registrationno_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Business ID</th>
                        <td><span id="businessid_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Store Name</th>
                        <td><span id="storename_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Trade Name</th>
                        <td><span id="tradename_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td><span id="phoneno_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Pickup address</th>
                        <td><span id="pickupaddress_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td><span id="country_pre"></span></td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td><span id="city_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Zone</th>
                        <td><span id="zone_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Document</th>
                        <td><img id="blah" src="#" alt="your image" /></td>
                    </tr>
                </table>
                <h3 class="fs-subtitle">Bank Details</h3>
                <table style="border: 1px solid #ddd;width: 970px;clear: both;border-collapse: separate !important;text-align: center;">
                    <tr>
                        <th>IBAN</th>
                        <td><span id="iban_pre"></span></td>
                    </tr>
                    <tr>
                        <th>ISO Country Code</th>
                        <td><span id="iso_pre"></span></td>
                    </tr>
                    <tr>
                        <th>IBAN Check Digits</th>
                        <td><span id="ibancheckdigits_pre"></span></td>
                    </tr>
                    <tr>
                        <th>BBAN</th>
                        <td><span id="bban_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Bank Identifier</th>
                        <td><span id="bank_pre"></span></td>
                    </tr>
                    <tr>
                        <th>Account No</th>
                        <td><span id="accountno_pre"></span></td>
                    </tr>
                    <tr>
                        <th>SEPA Member</th>
                        <td><span id="sepa_pre"></span></td>
                    </tr>
                </table>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset>
        </form>

        <!-- jQuery --> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
$(function () {
    $("#expirydate").datepicker();
});
        </script>
        <script>

            jQuery.easing.jswing = jQuery.easing.swing;
            jQuery.extend(jQuery.easing, {def: "easeOutQuad", swing: function (e, f, a, h, g) {
                    return jQuery.easing[jQuery.easing.def](e, f, a, h, g)
                }, easeInQuad: function (e, f, a, h, g) {
                    return h * (f /= g) * f + a
                }, easeOutQuad: function (e, f, a, h, g) {
                    return -h * (f /= g) * (f - 2) + a
                }, easeInOutQuad: function (e, f, a, h, g) {
                    if ((f /= g / 2) < 1) {
                        return h / 2 * f * f + a
                    }
                    return -h / 2 * ((--f) * (f - 2) - 1) + a
                }, easeInCubic: function (e, f, a, h, g) {
                    return h * (f /= g) * f * f + a
                }, easeOutCubic: function (e, f, a, h, g) {
                    return h * ((f = f / g - 1) * f * f + 1) + a
                }, easeInOutCubic: function (e, f, a, h, g) {
                    if ((f /= g / 2) < 1) {
                        return h / 2 * f * f * f + a
                    }
                    return h / 2 * ((f -= 2) * f * f + 2) + a
                }, easeInQuart: function (e, f, a, h, g) {
                    return h * (f /= g) * f * f * f + a
                }, easeOutQuart: function (e, f, a, h, g) {
                    return -h * ((f = f / g - 1) * f * f * f - 1) + a
                }, easeInOutQuart: function (e, f, a, h, g) {
                    if ((f /= g / 2) < 1) {
                        return h / 2 * f * f * f * f + a
                    }
                    return -h / 2 * ((f -= 2) * f * f * f - 2) + a
                }, easeInQuint: function (e, f, a, h, g) {
                    return h * (f /= g) * f * f * f * f + a
                }, easeOutQuint: function (e, f, a, h, g) {
                    return h * ((f = f / g - 1) * f * f * f * f + 1) + a
                }, easeInOutQuint: function (e, f, a, h, g) {
                    if ((f /= g / 2) < 1) {
                        return h / 2 * f * f * f * f * f + a
                    }
                    return h / 2 * ((f -= 2) * f * f * f * f + 2) + a
                }, easeInSine: function (e, f, a, h, g) {
                    return -h * Math.cos(f / g * (Math.PI / 2)) + h + a
                }, easeOutSine: function (e, f, a, h, g) {
                    return h * Math.sin(f / g * (Math.PI / 2)) + a
                }, easeInOutSine: function (e, f, a, h, g) {
                    return -h / 2 * (Math.cos(Math.PI * f / g) - 1) + a
                }, easeInExpo: function (e, f, a, h, g) {
                    return(f == 0) ? a : h * Math.pow(2, 10 * (f / g - 1)) + a
                }, easeOutExpo: function (e, f, a, h, g) {
                    return(f == g) ? a + h : h * (-Math.pow(2, -10 * f / g) + 1) + a
                }, easeInOutExpo: function (e, f, a, h, g) {
                    if (f == 0) {
                        return a
                    }
                    if (f == g) {
                        return a + h
                    }
                    if ((f /= g / 2) < 1) {
                        return h / 2 * Math.pow(2, 10 * (f - 1)) + a
                    }
                    return h / 2 * (-Math.pow(2, -10 * --f) + 2) + a
                }, easeInCirc: function (e, f, a, h, g) {
                    return -h * (Math.sqrt(1 - (f /= g) * f) - 1) + a
                }, easeOutCirc: function (e, f, a, h, g) {
                    return h * Math.sqrt(1 - (f = f / g - 1) * f) + a
                }, easeInOutCirc: function (e, f, a, h, g) {
                    if ((f /= g / 2) < 1) {
                        return -h / 2 * (Math.sqrt(1 - f * f) - 1) + a
                    }
                    return h / 2 * (Math.sqrt(1 - (f -= 2) * f) + 1) + a
                }, easeInElastic: function (f, h, e, l, k) {
                    var i = 1.70158;
                    var j = 0;
                    var g = l;
                    if (h == 0) {
                        return e
                    }
                    if ((h /= k) == 1) {
                        return e + l
                    }
                    if (!j) {
                        j = k * 0.3
                    }
                    if (g < Math.abs(l)) {
                        g = l;
                        var i = j / 4
                    } else {
                        var i = j / (2 * Math.PI) * Math.asin(l / g)
                    }
                    return -(g * Math.pow(2, 10 * (h -= 1)) * Math.sin((h * k - i) * (2 * Math.PI) / j)) + e
                }, easeOutElastic: function (f, h, e, l, k) {
                    var i = 1.70158;
                    var j = 0;
                    var g = l;
                    if (h == 0) {
                        return e
                    }
                    if ((h /= k) == 1) {
                        return e + l
                    }
                    if (!j) {
                        j = k * 0.3
                    }
                    if (g < Math.abs(l)) {
                        g = l;
                        var i = j / 4
                    } else {
                        var i = j / (2 * Math.PI) * Math.asin(l / g)
                    }
                    return g * Math.pow(2, -10 * h) * Math.sin((h * k - i) * (2 * Math.PI) / j) + l + e
                }, easeInOutElastic: function (f, h, e, l, k) {
                    var i = 1.70158;
                    var j = 0;
                    var g = l;
                    if (h == 0) {
                        return e
                    }
                    if ((h /= k / 2) == 2) {
                        return e + l
                    }
                    if (!j) {
                        j = k * (0.3 * 1.5)
                    }
                    if (g < Math.abs(l)) {
                        g = l;
                        var i = j / 4
                    } else {
                        var i = j / (2 * Math.PI) * Math.asin(l / g)
                    }
                    if (h < 1) {
                        return -0.5 * (g * Math.pow(2, 10 * (h -= 1)) * Math.sin((h * k - i) * (2 * Math.PI) / j)) + e
                    }
                    return g * Math.pow(2, -10 * (h -= 1)) * Math.sin((h * k - i) * (2 * Math.PI) / j) * 0.5 + l + e
                }, easeInBack: function (e, f, a, i, h, g) {
                    if (g == undefined) {
                        g = 1.70158
                    }
                    return i * (f /= h) * f * ((g + 1) * f - g) + a
                }, easeOutBack: function (e, f, a, i, h, g) {
                    if (g == undefined) {
                        g = 1.70158
                    }
                    return i * ((f = f / h - 1) * f * ((g + 1) * f + g) + 1) + a
                }, easeInOutBack: function (e, f, a, i, h, g) {
                    if (g == undefined) {
                        g = 1.70158
                    }
                    if ((f /= h / 2) < 1) {
                        return i / 2 * (f * f * (((g *= (1.525)) + 1) * f - g)) + a
                    }
                    return i / 2 * ((f -= 2) * f * (((g *= (1.525)) + 1) * f + g) + 2) + a
                }, easeInBounce: function (e, f, a, h, g) {
                    return h - jQuery.easing.easeOutBounce(e, g - f, 0, h, g) + a
                }, easeOutBounce: function (e, f, a, h, g) {
                    if ((f /= g) < (1 / 2.75)) {
                        return h * (7.5625 * f * f) + a
                    } else {
                        if (f < (2 / 2.75)) {
                            return h * (7.5625 * (f -= (1.5 / 2.75)) * f + 0.75) + a
                        } else {
                            if (f < (2.5 / 2.75)) {
                                return h * (7.5625 * (f -= (2.25 / 2.75)) * f + 0.9375) + a
                            } else {
                                return h * (7.5625 * (f -= (2.625 / 2.75)) * f + 0.984375) + a
                            }
                        }
                    }
                }, easeInOutBounce: function (e, f, a, h, g) {
                    if (f < g / 2) {
                        return jQuery.easing.easeInBounce(e, f * 2, 0, h, g) * 0.5 + a
                    }
                    return jQuery.easing.easeOutBounce(e, f * 2 - g, 0, h, g) * 0.5 + h * 0.5 + a
                }});


            $(function () {

                //jQuery time
                var current_fs, next_fs, previous_fs; //fieldsets
                var left, opacity, scale; //fieldset properties which we will animate
                var animating; //flag to prevent quick multi-click glitches

                $(".next").click(function () {
                    var id = this.id;
                    if (id == 'step1') {
                        var fullname = $("#fullname").val();
                        var username = $("#username").val();
                        var email = $("#email").val();
                        var contact = $("#contact").val();
                        var pass = $("#pass").val();
                        var cpass = $("#cpass").val();
//                        var country = $("#country").val();

                        if (!fullname) {
                            $("#step1Error").html("Full name is required.");
                            return false;
                        }
                        if (!username) {
                            $("#step1Error").html("User name is required.");
                            return false;
                        }
                        if (!email) {
                            $("#step1Error").html("Email is required.");
                            return false;
                        }
                        if (!contact) {
                            $("#step1Error").html("Contact number is required.");
                            return false;
                        }
                        if (!pass) {
                            $("#step1Error").html("Password is required.");
                            return false;
                        }
                        if (!cpass) {
                            $("#step1Error").html("Confirm password is required.");
                            return false;
                        }
                        if (pass != cpass) {
                            $("#step1Error").html("Confirm password doesn't match.");
                            return false;
                        }
//                        if (!country) {
//                            $("#step1Error").html("Country is required.");
//                            return false;
//                        }
                    }

                    if (id == 'step2') {
                        var expirydate = $("#expirydate").val();
                        var registrationno = $("#registrationno").val();
                        var businessid = $("#businessid").val();
                        var storename = $("#storename").val();
                        var tradename = $("#tradename").val();
                        var phoneno = $("#phoneno").val();
                        var pickupaddress = $("#pickupaddress").val();
                        var country = $("#country").val();
                        var city = $("#city").val();
                        var zone = $("#zone").val();
                        var vendor_doc = $('#vendor_doc')[0].files[0]
                        if (!expirydate) {
                            $("#step2Error").html("Expirydate is required.");
                            return false;
                        }
                        if (!registrationno) {
                            $("#step2Error").html("Registration number is required.");
                            return false;
                        }
                        if (!businessid) {
                            $("#step2Error").html("Business id is required.");
                            return false;
                        }
                        if (!storename) {
                            $("#step2Error").html("Store name is required.");
                            return false;
                        }
                        if (!tradename) {
                            $("#step2Error").html("Trade name is required.");
                            return false;
                        }
                        if (!phoneno) {
                            $("#step2Error").html("Phone number is required.");
                            return false;
                        }
                        if (!pickupaddress) {
                            $("#step2Error").html("Pick up address is required.");
                            return false;
                        }
                        if (!country) {
                            $("#step2Error").html("Country is required.");
                            return false;
                        }
                        if (!city) {
                            $("#step2Error").html("City is required.");
                            return false;
                        }
                        if (!zone) {
                            $("#step2Error").html("Zone is required.");
                            return false;
                        }
                    }

                    if (id == 'step3') {
                        var iban = $("#iban").val();
                        var iso = $("#iso").val();
                        var ibancheckdigits = $("#ibancheckdigits").val();
                        var bban = $("#bban").val();
                        var bank = $("#bank").val();
                        var accountno = $("#accountno").val();
                        var sepa = $("#sepa").val();

                        if (!iban) {
                            $("#step3Error").html("IBAN is required.");
                            return false;
                        }
                        if (!iso) {
                            $("#step3Error").html("ISO Country code is required.");
                            return false;
                        }
                        if (!ibancheckdigits) {
                            $("#step3Error").html("IBAN Check digits is required.");
                            return false;
                        }
                        if (!bban) {
                            $("#step3Error").html("BBAN is required.");
                            return false;
                        }
                        if (!bank) {
                            $("#step3Error").html("Bank identifire is required.");
                            return false;
                        }
                        if (!accountno) {
                            $("#step3Error").html("Account number is required.");
                            return false;
                        }
                        if (!sepa) {
                            $("#step3Error").html("SEPA member is required.");
                            return false;
                        }

                        if ($('#vendor_doc')[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $('#blah').attr('src', e.target.result);
                            }
                            reader.readAsDataURL($('#vendor_doc')[0].files[0]);
                        }

                        $("#fullname_pre").html($("#fullname").val());
                        $("#username_pre").html($("#username").val());
                        $("#email_pre").html($("#email").val());
                        $("#contact_pre").html($("#contact").val());
                        $("#expirydate_pre").html($("#expirydate").val());
                        $("#registrationno_pre").html($("#registrationno").val());
                        $("#businessid_pre").html($("#businessid").val());
                        $("#storename_pre").html($("#storename").val());
                        $("#tradename_pre").html($("#tradename").val());
                        $("#phoneno_pre").html($("#phoneno").val());
                        $("#pickupaddress_pre").html($("#pickupaddress").val());
                        $("#country_pre").html($("#country").val());
                        $("#city_pre").html($("#city").val());
                        $("#zone_pre").html($("#zone").val());
                        $("#iban_pre").html($("#iban").val());
                        $("#iso_pre").html($("#iso").val());
                        $("#ibancheckdigits_pre").html($("#ibancheckdigits").val());
                        $("#bban_pre").html($("#bban").val());
                        $("#bank_pre").html($("#bank").val());
                        $("#accountno_pre").html($("#accountno").val());
                        $("#sepa_pre").html($("#sepa").val());

                    }

                    if (animating)
                        return false;
                    animating = true;
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();
                    //activate next step on progressbar using the index of next_fs
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({opacity: 0}, {
                        step: function (now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale current_fs down to 80%
                            scale = 1 - (1 - now) * 0.2;
                            //2. bring next_fs from the right(50%)
                            left = (now * 50) + "%";
                            //3. increase opacity of next_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({'transform': 'scale(' + scale + ')'});
                            next_fs.css({'left': left, 'opacity': opacity});
                        },
                        duration: 800,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                });
                $(".previous").click(function () {
                    if (animating)
                        return false;
                    animating = true;
                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();
                    //de-activate current step on progressbar
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                    //show the previous fieldset
                    previous_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({opacity: 0}, {
                        step: function (now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale previous_fs from 80% to 100%
                            scale = 0.8 + (1 - now) * 0.2;
                            //2. take current_fs to the right(50%) - from 0%
                            left = ((1 - now) * 50) + "%";
                            //3. increase opacity of previous_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({'left': left});
                            previous_fs.css({'transform': 'scale(' + scale + ')', 'opacity': opacity});
                        },
                        duration: 800,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                });


            });
        </script>
    </body>
</html>