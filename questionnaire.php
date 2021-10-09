<?php
    $ip = $_SERVER['REMOTE_ADDR'];

    $ip_data = @json_decode(file_get_contents("http://ipwhois.pro/json/" . $ip . "?key=qtvSMeTKnTYVx7lp"));
    $result['country'] = $ip_data->country_code;
    $country = $ip_data->country;
    $callingCodes = $ip_data->country_phone;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <title>                            <?php
                            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
                            $campaignid = isset($_GET['campaignid']) ? $_GET['campaignid'] : '';
                            $newTitle = $keyword . ' ' . $campaignid;
                            echo !empty($newTitle) ? $newTitle : 'Alternative Investments';
                            ?> Questionnaire | Chile Investment checker</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="additional/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="additional/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="additional/favicon-16x16.png">
    <link rel="manifest" href="additional/site.webmanifest">
    <link rel="canonical" href="#" />
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
	<meta name="facebook-domain-verification" content="n0l7rjax7ugbujuo8422dgolsjlevl" />

    <link rel="stylesheet" href="css/styles.min.css" />
    <link rel="stylesheet" href="css/qusetion.css" />
    <link rel="stylesheet" href="css/intlTelInput.min.css" />
    <link rel="stylesheet" href="css/tutorial_questionnaire_galaxy.css" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-27979701-2">
</script>
<link rel="stylesheet" href="./Automated data collection &amp; marketing reports _ Funnel_files/main.min.css">
    <link rel="stylesheet" href="./Automated data collection &amp; marketing reports _ Funnel_files/module_46942929666_Header_Menu_CTA.min.css">
    <link rel="stylesheet" href="./Automated data collection &amp; marketing reports _ Funnel_files/module_46942929667_Header_Menu.min.css">
    <link rel="stylesheet" href="./Automated data collection &amp; marketing reports _ Funnel_files/module_46943206780_HP_Hero.min.css">
    <link rel="stylesheet" href="./Automated data collection &amp; marketing reports _ Funnel_files/module_46943206790_Logos_Section.min.css">
    <link rel="stylesheet" href="./Automated data collection &amp; marketing reports _ Funnel_files/module_46942943571_Scrolljack.min.css">
    <link rel="stylesheet" href="./Automated data collection &amp; marketing reports _ Funnel_files/swiper-bundle.min.css">
    <link rel="stylesheet" href="./Automated data collection &amp; marketing reports _ Funnel_files/module_46942929672_Testimonials_Slider.min.css">
    <link rel="stylesheet" href="./Automated data collection &amp; marketing reports _ Funnel_files/module_46942929668_Newsletter_Section.min.css">
    <link rel="stylesheet" href="./Automated data collection &amp; marketing reports _ Funnel_files/module_46942943562_Footer_Menu.min.css">
    <link rel="stylesheet" href="./Automated data collection &amp; marketing reports _ Funnel_files/module_46934820456_social-follow.min.css">
    <link rel="stylesheet" href="./Automated data collection &amp; marketing reports _ Funnel_files/module_46942943558_Footer_Menu_Secondary.min.css">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-27979701-2');
</script>

    <!-- Global site tag (gtag.js) - Google Ads: 876186825 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-876186825"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-876186825');
    </script>

    <!-- Hotjar -->
    <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2056969,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '434219474739459');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=434219474739459&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

    <style>
        .final_question.current #video-player {
            padding:41.25% 0 0 0;position:relative;
        }
        .final_question .video-section > #video-player {
            width: auto;
            height: auto;
            max-width: 70%;
            float: none;
            margin: 0 auto;
        }
        @media only screen and (max-width: 480px) {
            .final_question .video-section > #video-player {
                max-width: 100%;
                padding: 56.25% 0 0 0;
            }
        }
        
    .final_question .video-section > h2 {
    text-align: center;
    margin-bottom: 30px;
    margin-top: 0px;
}
    
        .invalid {
            background-color: pink;
            border: 1px solid red;
        }

        .correct {
            padding-right: calc(1.5em + .75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: center right calc(.375em + .1875rem);
            background-size: calc(.75em + .375rem) calc(.75em + .375rem);
        }

        .incorrect {
            padding-right: calc(1.5em + .75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
            background-repeat: no-repeat;
            background-position: center right calc(.375em + .1875rem);
            background-size: calc(.75em + .375rem) calc(.75em + .375rem);
        }

        .right-form-wrapper {
            text-align: center;
        }

        .right-form-wrapper img {
            width: 150px !important;
            height: 150px;
            object-fit: contain;
            background-color: #fff;
            border-radius: 50%;
        }

        .right-form-wrapper h2 {
            margin-top: 5px;
            margin-bottom: 10px;
            color: #393a71;
            font-weight: bold;
            font-size: 30px;
        }

        .right-form-wrapper h4 {
            font-weight: normal;
            color: #999;
        }

        .form-fields {
            margin-top: 20px;
        }

        .form-fields input {
            width: 100%;
            padding: 10px 20px;
            height: 50px;
            background-color: #ddd;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
            color: #333;
            font-size: 13px;
        }

        .form-fields .form-btn {
            margin-top: 25px !important;
            background-color: #d3d8e3 !important;
            color: #393a71 !important;
            font-weight: normal !important;
            text-transform: none !important;
            font-size: 16px !important;
            border: 1px solid #393a71 !important;
        }

        .form-fields .form-btn:hover {
            background-color: #393a71 !important;
            color: #fff !important;
        }
        
        .reset.css-reload {
            display: block;
            max-width: 120px;
            margin: 0 auto 15px;
            color: #868686;
        }
        
        .reset.css-reload .reset_img {
            max-width: 20px;
            display: inline-block;
            vertical-align: middle;
            margin-right: 5px;
        }
        
        .reset.css-reload .reset_img img {
            max-width: 100%;
        }

        .question_body .right-form-wrapper {
            margin-bottom: 15px;
        }
        
        .final_question .video-section {
            width: 100%;
        }

        .error-phone{
            color: red;
        }
        
        #error-msg{
            color: #cd2a2a;
            font-weight: bold;
            position:absolute;
        }
        
        .final_question .video-section > video {
            width: auto;
            height: auto;
            max-width: 70%;
        }

        .first-screen-height {
            height: 774px;
        }

        @media screen and (max-width: 900px){
            .right-form-wrapper {
                padding: 0 20px;
            }
        }

        @media screen and (max-width: 767px){
            .questionnaire .form_wrapper form .final_question .right_icons {
                width: 100%;
            }
            .final_question .video-section > video {
                width: auto;
                height: auto;
                max-width: 100%;
            }
            .right-form-wrapper {
                padding: 0;
                width: 100%;
                margin-top: 50px;
            }
            .right-form-wrapper h2 {
                font-size: 24px;
            }
            
            .final_question .video-section >iframe {
             height: auto;
             width: 100%;
            }

        .final_question .video-section {
        	margin-top: 0;
            }
        }
        
        div.tutorial-quiz__section {
        	padding-top: 0;
        }
        
        div.tutorial-quiz__section .tutorial-quiz__title {
        	margin-bottom: 20px;
        }

    .right-form-wrapper1 {            text-align: center;
}
.right-form-wrapper1 {                padding: 0 20px;
}
.right-form-wrapper1 {                padding: 0;
                width: 100%;
                margin-top: 50px;
}
        
        .iti.iti--allow-dropdown,
        .iti--container {
            font-family: 'Avenir Next', sans-serif;
        }
        .iti--allow-dropdown input, 
        .iti--allow-dropdown input[type=tel], 
        .iti--allow-dropdown input[type=text], 
        .iti--separate-dial-code input, 
        .iti--separate-dial-code input[type=tel], 
        .iti--separate-dial-code input[type=text]{
            width: 100%;
        }
#input_phone_div .iti__flag-container {
    background-color: #fff;
    border: 1px solid #e4e4e4;
}
div#input_phone_div {
    margin-top: 10px;
}
#input_phone_div .iti.iti--allow-dropdown {
    display: block;
}
#input_phone_div input#PhoneNumber_countrycode {
    margin-left: 100px;
    padding-left: 30px !important;
    width: calc(100% - 100px);
}
div#input_phone_div .iti__flag.iti__in {
    background-image: url(images/flags.png) !important;
}
    </style>

</head>

<body class="questionnaire">
    <header class="header set-header">
        <div class="container">
            <div class="header__logo">
                <a href="index.php" class="header-link">
                    <img src="./Automated data collection &amp; marketing reports _ Funnel_files/funnel.svg" alt="" class="logo__img">
                </a>
            </div>
        </div>
    </header>
    <section class="form_section">
        <div class="container">
            <div class="form_wrapper">
                <form action='./api.php' name='form' id='form' method='POST' accept-charset='UTF-8' class="form-questionnaire">
                    <input type="hidden" name="zf_referrer_name" value="">
                    <input type="hidden" name="zf_redirect_url" value="">
                    <input type="hidden" name="zc_gad" value="">
                    <input type="hidden" name="SingleLine" value="TICLP" fieldType=1 maxlength="255" />
                    <input type="hidden" name="SingleLine7" value="PPC" fieldType=1 maxlength="255" />
                    <input type="hidden" class="achieve" name="SingleLine4" value="" fieldType=1 maxlength="255" />
                    <input type="hidden" class="objectives" name="SingleLine5" value="" fieldType=1 maxlength="255" />
                    <input type="hidden" class="country" name="SingleLine6" value="" fieldType=1 maxlength="255" />

                    <input type="hidden" name="css_achieve" value="<?php if (isset($_GET['achieve'])) {
                                                                        echo $_GET['achieve'];
                                                                    } ?>">
                    <input type="hidden" name="css_objectives" value="<?php if (isset($_GET['objectives'])) {
                                                                            echo $_GET['objectives'];
                                                                        } ?>">
                    <input type="hidden" name="css_country" value="<?php if (isset($_GET['country'])) {
                                                                        echo $_GET['country'];
                                                                    } ?>">
                    <input type="hidden" name="profit" value="<?php if (isset($_GET['profit'])) {
                                                                        echo $_GET['profit'];
                                                                    } ?>">
                    <input type="hidden" name="keyword" value="<?php if (isset($_GET['keyword'])) {
                                                                        echo $_GET['keyword'];
                                                                    } ?>">
                    <input type="hidden" name="campaignid" value="<?php if (isset($_GET['campaignid'])) {
                                                                        echo $_GET['campaignid'];
                                                                    } ?>">
                    <input type="hidden" name="device" value="<?php if (isset($_GET['device'])) {
                                                                        echo $_GET['device'];
                                                                    } ?>">
                    <input type="hidden" name="matchtype" value="<?php if (isset($_GET['matchtype'])) {
                                                                        echo $_GET['matchtype'];
                                                                    } ?>">
                    <input type="hidden" name="creative" value="<?php if (isset($_GET['creative'])) {
                                                                        echo $_GET['creative'];
                                                                    } ?>">
                    <input type="hidden" name="adgroupid" value="<?php if (isset($_GET['adgroupid'])) {
                                                                        echo $_GET['adgroupid'];
                                                                    } ?>">
                    <input type="hidden" name="feeditemid" value="<?php if (isset($_GET['feeditemid'])) {
                                                                        echo $_GET['feeditemid'];
                                                                    } ?>">
                    <input type="hidden" name="placement" value="<?php if (isset($_GET['placement'])) {
                                                                        echo $_GET['placement'];
                                                                    } ?>">
                    <div id="screen1" class="final_question current question">
                        <label class="question_body range_question" style="display: none;">
                            <h2>What is your preferred investment amount?</h2>
                            <div class="slidecontainer">
                                <div class="options">
                                    <input type="range" min="250" max="250000" currentValue='0' value="50" step="250" required name="SingleLine1" class="slider_range" id="myRange">
                                    <div class="progress_range_wrap">
                                        <span class="progress_range"></span>
                                        <span class="pseudo_fill"></span>
                                    </div>
                                    <div class="show_value_wrap"><span class="show_value">€</span></div>
                                </div>
                                <div class="button_block">
                                    <div class="go_back">Back to previous page</div>
                                    <div class="action_button next_question button">Next</div>
                                </div>
                            </div>
                        </label>
                        <div class="question_body">
                            <div class="right-form-wrapper">
                                    <img class="user-icon" src="img/2164fe0f569e55972bcdd0d114a962c0571bf37c.jpg">
                                    <h2>Felicidades!</h2>
                            </div>
                            <span>Según sus respuestas, hemos encontrado 3 oportunidades de inversión adecuadas que <b>coinciden con sus necesidades.</b></span>
                            <span>Por favor, ingrese su información a continuación y uno de nuestros asesores le contactarán en breve con sus resultados.</span>
                            <div class="options">
                                <div class="inputX2">
                                    <input id="fninput" placeholder="Nombre" type="text" required data-type="firstName" name="SingleLine2" value="" />
                                    <input id="lninput" placeholder="Apellidos" type="text" required data-type="lastName" name="SingleLine3" value="" />
                                </div>
                                <div class="input_mail form__item">
                                    <input placeholder="E-mail" type="text" required data-type="email" name="Email" value="" class="input-email" />
                                    <span class="error error-email"></span>
                                </div>
                                <div class="inputX2" style="flex-direction: row; position: relative;">
                                    <div class="input_phone form__item" style="width: 70px;display:none;" >
                                        <input class="phoneZ input-phone" style="padding: 0px; text-align: center;" type="text" required data-type="tel" value="<?= $callingCodes ?>" name="countrycode" />
                                        <input type="hidden" name="countrycode_use_me" value="<?= substr($callingCodes, 1) ?>">
                                        <span class="error error-phone"></span>
                                    </div>
                                    <div id="input_phone_div" class="input_phone form__item" style="flex-grow:1; display: inline-block;">
                                        <input class="phoneZ input-phone"  compname="PhoneNumber" placeholder="Numero de telefono" type="tel" required data-type="tel" phoneFormat="1" isCountryCodeEnabled=false fieldType=11 name="PhoneNumber_countrycode" id="PhoneNumber_countrycode" value="" />
                                        <span class="error error-phone"></span>


                                        <span id="valid-msg" class="msg-error-sms hide"></span>
                                        <span id="error-msg" class="msg-error-sms error-msg hide"></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="submit_button">
                                    <div id="submit-btn" class="row" style="display: flex; justify-content: center;">
                                        <input name="button" type="submit" id="button" class="button" value="Enviar datos" />
                                    </div>
                                    <!-- <div class="go_back">Volver a la página anterior</div> -->
                                </div>
                            </div>
                            <div class="right_icons" style="display: none;">
                                <div class="recommended"></div>
                            </div>
                        </div>
                </form>
                <script>
                    //Next question button
                    const form = document.querySelector('.form_wrapper form');
                    const nextQuestion = form.querySelectorAll('.next_question');
                    const goBackButton = form.querySelectorAll('.go_back');
                    let progressBar = form.querySelector('.progress_bar .progress_completed');
                    let currentProgress = '';
                    let percentPerStep;
                    const selectCountry = form.querySelector('.select_country');
                    let loadingPage = form.querySelector('.loading_page');
                    const header = document.querySelector('.right_side');

                    let preference = document.getElementById('preference');
                    /**/
                    let achieve = sessionStorage.getItem('achieve');
                    let objectives = sessionStorage.getItem('objectives');
                    let country = sessionStorage.getItem('country');

                    let achieveHidden = document.querySelector('.achieve');
                    let objectivesHidden = document.querySelector('.objectives');
                    let countryHidden = document.querySelector('.country');

                    achieveHidden.value = achieve || '';
                    objectivesHidden.value = objectives || '';
                    countryHidden.value = country || '';

                    /**/

                    //Range slider
                    let slider = document.querySelector("#myRange");
                    let currentMaxAmount = slider.max;
                    let output = document.querySelector(".show_value");
                    let rangeCurrentValue = form.querySelector('.progress_range');
                    output.innerHTML = `€ ${slider.value}`; // Display the default slider value

                    // // Update the current slider value (each time you drag the slider handle)
                    slider.oninput = function() {
                        output.innerHTML = `€ ${this.value.replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
                        slider.setAttribute('currentvalue', this.value * 100 / currentMaxAmount);

                        //slider.setAttribute('currentvalue', this.value.slice(0, -3));
                        rangeCurrentValue.style.width = `${slider.getAttribute('currentvalue')}%`;
                    };
                    const phoneNumber = document.querySelector("input[name='PhoneNumber_countrycode']");
                    const countryPhone = document.querySelector("input[name='countrycode']");
                    let num = 0;
                    //phoneNumber.addEventListener('input', phone_check);
                    document.getElementById("submit-btn").onclick = function() {
                        num++;
                        if(num>=2){
                            document.getElementById("submit-btn").innerHTML = "Already Submitted!";
                        }
                    }

                    function phone_check(e) {
                        let intlNumber = countryPhone.value + phoneNumber.value;

                        if (phoneNumber.value.length < 6) {
                            phoneNumber.classList.remove("incorrect");
                            phoneNumber.classList.remove("correct");
                            phoneNumber.classList.remove("invalid");
                            return;
                        }

                        if (/^\+[1-9]{1}[0-9]{3,14}$/.test(intlNumber)) {
                            phoneNumber.classList.remove('incorrect');
                            phoneNumber.classList.add('correct');
                            _debounce(phoneNumberValidation)('b02f6579d8a4748f617384c1e2c99547', countryPhone.value + phoneNumber.value, "");
                        } else {
                            phoneNumber.classList.add('incorrect');
                            phoneNumber.classList.remove('correct');
                        }
                    }

                    function name_validator(e) {
                        let n = e.target.value;

                        if (/[`!@#$%^&*()_+\-=\[\]{};':"\\|,<>\/?~]/.test(n) || n.length < 2) {
                            e.target.classList.add('invalid');
                        } else {
                            e.target.classList.remove('invalid');
                        }
                    }

                    const fnInput = document.querySelector('#fninput');
                    const lnInput = document.querySelector('#lninput');
                    fnInput.addEventListener('input', name_validator);
                    lnInput.addEventListener('input', name_validator);

                    let verify_timer = 0;

                    function phoneNumberValidation(k, n, c) {
                        fetch(`https://apilayer.net/api/validate?access_key=${k}&number=${n}&country_code=&format=1`)
                            .then(res => res.json())
                            .then(data => {
                                if (data.valid) {
                                    phoneNumber.classList.remove('incorrect');
                                    phoneNumber.classList.add('correct');
                                    phoneNumber.classList.remove('invalid');
                                } else {
                                    phoneNumber.classList.add('incorrect');
                                    phoneNumber.classList.remove('correct');
                                    phoneNumber.classList.add('invalid');
                                }
                            });
                    }

                    function _debounce(func) {
                        return function(k, n, c) {
                            if (verify_timer) clearTimeout(verify_timer);
                            verify_timer = setTimeout(func, 400, k, n, c);
                        };
                    }


                    //RadioButton check
                    const radioCheckBox = document.querySelectorAll('.options input');
                    //Remove class Selected if other button was chosen.
                    const removeSelected = () => {
                        for (let i = 0; i < radioCheckBox.length; i++) {
                            if (radioCheckBox[i].checked === false) {
                                radioCheckBox[i].parentElement.classList.remove('selected');
                            }
                        }
                    };
                    //Add class Selected for chosen radio button and enable Next button.
                    for (let i = 0; i < radioCheckBox.length; i++) {

                        radioCheckBox[i].addEventListener('click', function() {
                            if (this.checked && !radioCheckBox[i].parentElement.classList.contains('selected')) {
                                this.parentElement.classList.add('selected');
                                this.closest('.question').querySelector('.next_question').classList.remove('disabled');

                                if (radioCheckBox[i].getAttribute('name') !== 'investment_product_preference') {
                                    removeSelected();
                                }

                                if (this.closest('.question').classList.contains('hide-next-button')) {
                                    this.closest('.question').querySelector('.next_question').click();
                                }
                            } else {
                                if (radioCheckBox[i].getAttribute('type') !== 'range') {
                                    let severalItem = document.querySelectorAll('#screen5 label.selected'); //Child type='checkbox'
                                    if (severalItem.length < 2 && this.closest('.question').querySelector('.next_question') !== null) {
                                        this.closest('.question').querySelector('.next_question').classList.add('disabled');
                                    }
                                }
                                this.parentElement.classList.remove('selected');
                            }
                        });
                    }

                    //set country code to the span
                    /*selectCountry.querySelector('.custom-select').oninput = function () {
                        selectCountry.querySelector('span').innerHTML = this.value;
                    };*/


                    //Variables for setting form height
                    /*if (window.innerWidth < 1070) {*/
                    const maxScreenHeight = form.querySelectorAll('.question');
                    let maxHeightStorage = form.querySelector('.question.current').clientHeight;
                    //Function to decide there will be adaptive or fixed form height
                    const adaptiveOrFixed = () => {
                        if (window.innerWidth > 1024) {
                            maxScreenHeight.forEach(function(item, i) {
                                if (item.clientHeight > maxHeightStorage) {
                                    maxHeightStorage = item.clientHeight;
                                }
                            });

                            //Set height for the form Wrapper according to the max slide height.
                            form.style.height = `${maxHeightStorage}px`;
                            maxHeightStorage = form.querySelector('.question.current').clientHeight;

                        } else {
                            //Set height for the form Wrapper according to the current slide height.
                            form.style.height = `${form.querySelector('.current').clientHeight}px`;
                        }
                    };

                    //Delay for resize function trigger
                    let resize_timer = 0;

                    function debounce(func) {
                        return function(event) {
                            if (resize_timer) clearTimeout(resize_timer);
                            resize_timer = setTimeout(func, 400, event);
                        };
                    }

                    adaptiveOrFixed();
                    //Trigger adaptiveOrFixed function in case of resize
                    window.addEventListener('resize', debounce(function(event) {
                        adaptiveOrFixed();
                    }));
                    /*}*/

                    //Sliding questions and setting height for the form wrapper
                    for (let i = 0; i < nextQuestion.length; i++) {
                        nextQuestion[i].addEventListener('click', function() {
                            let SecondScreen = `#screen${Number(this.closest(".question").id.replace(/[^0-9]/g, '')) + 1}`;
                            const nextScreen = document.querySelector(SecondScreen);
                            //add Class
                            this.closest(".question").classList.add('prev');

                            //function to trigger when Loader reached
                            let slideLoader = () => {
                                form.querySelector(`#screen${Number(this.closest(".question").id.replace(/[^0-9]/g, '')) + 1}`).classList.add('prev');
                                form.querySelector(`#screen${Number(this.closest(".question").id.replace(/[^0-9]/g, '')) + 1}`).classList.remove('current');
                                form.querySelector(`#screen${Number(this.closest(".question").id.replace(/[^0-9]/g, '')) + 2}`).classList.add('current');
                                adaptiveOrFixed();
                            };
                            if (nextScreen.classList.contains('loading_page')) {
                                setTimeout(() =>
                                    slideLoader(), 5000);
                            }
                            nextScreen.classList.add('current');
                            this.closest(".question").classList.remove('current');
                            //set Height
                            if (window.innerWidth <= 1024) {
                                form.style.height = `${nextScreen.clientHeight}px`;
                            }
                            //Progress Bar
                            percentPerStep = 100 / form.querySelectorAll('.question').length;
                            currentProgress = Number(progressBar.getAttribute('currentValue'));
                            addedProgress = currentProgress + Math.floor(percentPerStep);
                            progressBar.setAttribute('currentValue', addedProgress.toString());
                            progressBar.style.width = `${progressBar.getAttribute('currentValue')}%`;


                        });
                        goBackButton[i].addEventListener('click', function() {
                            let prevScreen = form.querySelector(`#screen${Number(this.closest(".question").id.replace(/[^0-9]/g, '')) - 1}`);
                            //let currentScreen = form.querySelector(`#screen${Number(this.closest(".question").id.slice(-1)) + 0}`);
                            let currentScreen = form.querySelector(`#${this.closest(".question").id}`);
                            if (window.innerWidth <= 1024) {
                                form.style.height = `${prevScreen.clientHeight}px`;
                            }
                            currentProgress = Number(progressBar.getAttribute('currentValue'));
                            addedProgress = currentProgress - Math.floor(percentPerStep);
                            progressBar.setAttribute('currentValue', addedProgress.toString());
                            progressBar.style.width = `${progressBar.getAttribute('currentValue')}%`;
                            currentScreen.classList.remove('current');
                            if (prevScreen.classList.contains('loading_page')) {
                                prevScreen.classList.remove('prev');
                                prevScreen = form.querySelector(`#screen${Number(this.closest(".question").id.replace(/[^0-9]/g, '')) - 2}`);
                                prevScreen.classList.remove('prev');
                                prevScreen.classList.add('current');
                                adaptiveOrFixed();
                            } else {
                                prevScreen.classList.remove('prev');
                                prevScreen.classList.add('current');
                            }
                        });
                    }

                    const hiddenCountryCode = document.querySelector("input[name='countrycode_use_me'");

                    document.querySelectorAll('.form-questionnaire .input-email, .form-questionnaire .input-phone').forEach(function(inp) {

                        inp.addEventListener('input', function(e) {
                            if (e.target.getAttribute('name') == 'countrycode') {
                                e.stopImmediatePropagation();
                                let n = countryPhone.value;
                                if (/^(\+?\d{1,3}|\d{1,4})$/.test(n)) {
                                    countryPhone.classList.remove('invalid');
                                    if (n.indexOf("+") == -1) {
                                        hiddenCountryCode.value = n;
                                    } else {
                                        hiddenCountryCode.value = n.substr(1);
                                    }
                                } else {
                                    countryPhone.classList.add('invalid');
                                }

                                return;
                            }
                            var inpType = inp.getAttribute('type'),
                                fld = inp.closest('.form__item'),
                                errFld = fld.querySelector('.error'),
                                has_err = 0,
                                txt_err = '';
                            if (inp.classList.contains('input-phone')) {
                                // this.value = inp.value.replace(/[^0-9]/g, '');
                                // has_err = !/^[\d\)\(\s\-+)]{11,17}$/.test(inp.value);
                                // txt_err = '';
                            } else if (inp.classList.contains('input-email')) {
                                has_err = !/^([a-zA-Z0-9_\s\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(inp.value);
                                if (has_err) {
                                    inp.classList.add("incorrect");
                                    inp.classList.add("invalid");
                                } else {
                                    inp.classList.remove("incorrect");
                                    inp.classList.remove("invalid");
                                }

                                txt_err = 'Please, enter correct email';
                            } else {
                                has_err = !/^[A-Za-z\s\.-]{2,}$/.test(inp.value);
                                txt_err = 'Please, enter your correct name';
                            }
                            /*switch (inpType) {
                                case 'text':
                                    has_err = !/^[A-Za-z\s\.-]{2,}$/.test(inp.value);
                                    txt_err = 'Please, enter your name';
                                    break;
                                case 'email':
                                    has_err = !/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(inp.value);
                                    txt_err = 'Please, enter correct email';
                                    break;
                                case 'tel':
                                    has_err = !/^[\d\)\(\s\-+)]{11,17}$/.test(inp.value);
                                    txt_err = 'Please, enter contact phone number';
                                    break;
                            }*/

                            if (has_err) {
                                fld.classList.add('has_error');
                                errFld.innerHTML = txt_err;
                            } else {
                                fld.classList.remove('has_error');
                                errFld.innerHTML = '';
                            }

                        });
                    });
                </script>
            </div>
        </div>
    </section>
    <footer class="footer">
          <div class="footer__main-row">
            <div class="flexbox-container">
              <div class="row">
                <div class="col-lg-3 col-sm-3 col-xs-12">
                  <div id="hs_cos_wrapper_site_logo" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-logo" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                    <span id="hs_cos_wrapper_site_logo_hs_logo_widget" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_logo" style="" data-hs-cos-general-type="widget" data-hs-cos-type="logo">
                      <a href="https://funnel.io/?hsLang=en" id="hs-link-site_logo_hs_logo_widget" style="border-width:0px;border:0px;">
                        <img src="./Automated data collection &amp; marketing reports _ Funnel_files/funnel-white.svg" class="hs-image-widget " style="width: 131px; border: 0px; visibility: visible;" width="131" alt="funnel-white" title="funnel-white" data-nsfw-filter-status="sfw">
                      </a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-9 col-sm-9 col-xs-12">
                  <div id="hs_cos_wrapper_footer-menu" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                    <nav class="footer-menu">
                      <ul>
                        <li>
                          <a href="javascript:;">PLATFORM</a>
                          <ul>
                            <li>
                              <a href="https://funnel.io/platform-overview?hsLang=en">Overview</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/all-data-sources?hsLang=en">Data Connectors</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/data-transformation?hsLang=en">Data Transformation</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/all-data-destinations?hsLang=en">Data Destinations</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/pricing?hsLang=en">Pricing</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="javascript:;">SOLUTIONS</a>
                          <ul>
                            <li>
                              <a href="https://funnel.io/digital-marketing?hsLang=en">Digital Marketing</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/data-analysts-bi?hsLang=en">Data Analysts/BI</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/it-engineering?hsLang=en">IT / Engineering</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/agencies?hsLang=en">Agencies</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/ecommerce?hsLang=en">E-commerce</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/retail?hsLang=en">Retail</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/partners?hsLang=en">Solution Partners</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="javascript:;">COMPANY</a>
                          <ul>
                            <li>
                              <a href="https://funnel.io/about?hsLang=en">About us</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/contact?hsLang=en">Contact Us</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/media-kit?hsLang=en">Media Kit</a>
                            </li>
                            <li>
                              <a href="https://jobs.funnel.io/">Careers</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="javascript:;">RESOURCES</a>
                          <ul>
                            <li>
                              <a href="https://funnel.io/all-resources?hsLang=en">Resources Library</a>
                            </li>
                            <li>
                              <a href="https://blog.funnel.io/?hsLang=en">Blog</a>
                            </li>
                            <li>
                              <a href="https://help.funnel.io/">Knowledge Base</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/all-case-studies?hsLang=en">Case Studies</a>
                            </li>
                            <li>
                              <a href="https://funnel.io/customers?hsLang=en">Customers</a>
                            </li>
                            <li>
                              <a href="https://blog.funnel.io/product-updates?hsLang=en">Product Updates</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer__copyright-row">
            <div class="flexbox-container">
              <div class="row middle-xs">
                <div class="col-lg-1 col-xs-4">
                  <div id="hs_cos_wrapper_copyright" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-text" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                    <span id="hs_cos_wrapper_copyright_" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_text" style="" data-hs-cos-general-type="widget" data-hs-cos-type="text">© Funnel.io</span>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-8 last-lg">
                  <div id="hs_cos_wrapper_social_buttons" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                    <div class="social-links">
                      <a class="social-links__link" href="https://www.facebook.com/funnel.io" target="_blank" rel="noopener">
                        <span id="hs_cos_wrapper_social_buttons_" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_icon social-links__icon" style="" data-hs-cos-general-type="widget" data-hs-cos-type="icon">
                          <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512" aria-labelledby="facebook-f1">
                            <title id="facebook-f1">Follow us on Facebook</title>
                            <g id="layer1">
                              <path d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"></path>
                            </g>
                          </svg>
                        </span>
                      </a>
                      <a class="social-links__link" href="https://www.linkedin.com/company/funnel-io" target="_blank" rel="noopener">
                        <span id="hs_cos_wrapper_social_buttons__2" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_icon social-links__icon" style="" data-hs-cos-general-type="widget" data-hs-cos-type="icon">
                          <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-labelledby="linkedin-in2">
                            <title id="linkedin-in2">Follow us on LinkedIn</title>
                            <g id="layer1">
                              <path d="M100.3 480H7.4V180.9h92.9V480zM53.8 140.1C24.1 140.1 0 115.5 0 85.8 0 56.1 24.1 32 53.8 32c29.7 0 53.8 24.1 53.8 53.8 0 29.7-24.1 54.3-53.8 54.3zM448 480h-92.7V334.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V480h-92.8V180.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V480z"></path>
                            </g>
                          </svg>
                        </span>
                      </a>
                      <a class="social-links__link" href="https://twitter.com/funnel" target="_blank" rel="noopener">
                        <span id="hs_cos_wrapper_social_buttons__3" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_icon social-links__icon" style="" data-hs-cos-general-type="widget" data-hs-cos-type="icon">
                          <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-labelledby="twitter3">
                            <title id="twitter3">Follow us on Twitter</title>
                            <g id="layer1">
                              <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                            </g>
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 col-xs-12">
                  <div id="hs_cos_wrapper_footer-menu-secondary" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                    <nav class="footer-menu-secondary">
                      <ul>
                        <li>
                          <a href="https://funnel.io/privacy?hsLang=en">Privacy and Cookie Notice</a>
                        </li>
                        <li>
                          <a href="https://funnel.io/cctv?hsLang=en">Video Surveillance Notice</a>
                        </li>
                        <li>
                          <a href="https://funnel.io/general-terms-and-conditions?hsLang=en">General Terms and Conditions</a>
                        </li>
                        <li>
                          <a href="https://funnel.io/funnel-information-security-overview?hsLang=en">Information Security Overview</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <svg class="footer__shape" width="353" height="280" viewBox="0 0 353 280" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle opacity="1" cx="311" cy="311" r="276" stroke="#ea676e" stroke-width="70"></circle>
          </svg>
        </footer>
    <a href="#" id="return-to-top"><img src="img/chevron-arrow-down.svg" class="icon-chevron-up" /></a>
    <script>
        let tagSelect = document.getElementById("country");
        let options = tagSelect.children;
        for (let i = 0; i < options.length; i++) {
            let name = options[i].getAttribute("value");
            if (name == "<?= $country ?>") {
                options[i].setAttribute("selected", "true");
                break;
            }
        }
    </script>
    <script src="js/tiny.min.js"></script>
    <script src="js/scripts.min.js"></script>
    <script src="js/intlTelInput.min.js"></script>
    <script src="js/utils.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/theinvestmentchecker.js"></script>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/611d1b56649e0a0a5cd1c111/1fdcr5ii7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

var input = document.querySelector("#PhoneNumber_countrycode"),
        errorMsg = document.querySelector("#error-msg"),
        validMsg = document.querySelector("#valid-msg");


        var errorMap = ["Numero Invalido", "Prefijo de pais invalido", "Demasiago corto", "Demasiago largo", "Numero Invalido"];


        // var iti = window.intlTelInput(input, {
        //     nationalMode: true,
        //     utilsScript: "<?php //echo BASE_URL?>assets/js/utils.js",
        // });

        var iti = window.intlTelInput(input, {
             initialCountry: "auto",
             separateDialCode: true,
             geoIpLookup: function(success, failure) {
                 $.get("api/get-ip-info.php", function() {}, "").always(function(resp) {
                     var countryCode = (resp && resp.country_code) ? resp.country_code : "us";
                     success(countryCode);
                     //console.log(resp);
                 });
             },
             autoPlaceholder: "aggressive",
             nationalMode: true,
             utilsScript: "js/utils.js",
         });

            var reset = function() {
                input.classList.remove("error-phone");
                errorMsg.innerHTML = "";
                errorMsg.classList.add("hide");
                validMsg.classList.add("hide");
            };

            function validatePhone(){
                reset();
                if (input.value.trim()) {
                    if (iti.isValidNumber()) {

                        validMsg.classList.remove("hide");

                        var submitButton = document.getElementById('button');
                        submitButton.disabled = false;
                        $("#inf_field_Phone1_main").val(iti.getNumber());
                        $("#userphone").val(iti.getNumber());

                    } else {

                        var submitButton = document.getElementById('button');
                        submitButton.disabled = true;


                        input.classList.add("error-phone");
                        var errorCode = iti.getValidationError();
                        errorMsg.innerHTML = errorMap[errorCode];

                        if(errorCode == "-99"){
                            errorMsg.innerHTML = "It's not a phone number";
                        }
                        errorMsg.classList.remove("hide");
                    }
                }
            }

            input.addEventListener('change', validatePhone);
            input.addEventListener('keyup', validatePhone);


</script>

      <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Marker Animation JS -->

<script src="js/jquery.marker-animation.min.js"></script>

<script>
$(document).ready(function(){

   $('.marker-animation').markerAnimation({
    color: '#FFFF00'
});

});
</script>
</body>

</html>
