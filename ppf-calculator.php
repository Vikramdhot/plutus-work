<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="ppf, ppf interest rate, ppf account, public provident fund, ppf account online, ppf online, public provident fund interest rate, ppf investment
">
    <meta name="description" content="Use our PPF Calculator to effortlessly compute returns on your Public Provident Fund investments. Make informed decisions for a secure financial future today.
">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Favicons -->
    <link href="assets/favicon-icon.png" rel="icon">
    <link href="assets/favicon-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="newstyle.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="slick.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>PPF Calculator: Calculate Returns on Your PPF Investments
</title>

    <script>
        // Disable right-click
        document.addEventListener('contextmenu', function (event) {
            event.preventDefault(); // Disable right-click
            // alert('Right-click is disabled on this page.');
        });

        // Disable specific key functions (like F12, Ctrl+Shift+I, etc.)
        document.addEventListener('keydown', function (event) {
            // Disable F12
            if (event.keyCode === 123) {
                event.preventDefault();
                // alert('F12 is disabled.');
            }
            // Disable Ctrl+Shift+I (Inspect Element in most browsers)
            if (event.ctrlKey && event.shiftKey && event.keyCode === 73) {
                event.preventDefault();
                // alert('Inspect Element is disabled.');
            }
            // Disable Ctrl+U (View Source)
            if (event.ctrlKey && event.keyCode === 85) {
                event.preventDefault();
                // alert('View Source is disabled.');
            }
            // Disable right-click key (Shift + F10)
            if (event.shiftKey && event.keyCode === 121) {
                event.preventDefault();
                // alert('Right-click key is disabled.');
            }
        });
    </script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5QXXBLDZ');</script>
    <!-- End Google Tag Manager -->


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16704975030"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-16704975030');
    </script>

</head>

<body>
    <!-- Google tag (gtag.js) --> <amp-analytics type="gtag" data-credentials="include">
        <script
            type="application/json"> { "vars": { "gtag_id": "AW-16704975030", "config": { "AW-16704975030": { "groups": "default" } } }, "triggers": { } } </script>
    </amp-analytics>
    <!--hdden conetn-->

    <?php
    include "navbar.php";
    ?>
    


    <div class="container-fluid">
        <div class="container calculation_top">
            <div class="d-flex flex-column">
                <div class="d-flex  align-items-center common_links_service">
                    <a class="light_text" href="calculators.html">Calculators </a>
                    <p>></p>
                    <a class="blod_text" href="#"> PPF Calculator</a>
                </div>
                <div class="d-flex align-items-center calculator_head">
                    <h1 style="color:  rgba(66, 66, 65, 1);">PPF Calculator</h1>
                </div>
            </div>

            <!-- insert here calculation part -->
             <div class="container-fluid py-5">
    <div class="container">
        <div class="row calculator-container">
            <div class="col-lg-6 cal_left_div">
                <div class="input-section">
                    <div class="input-group">
                      <label for="yearlyInvestment">Yearly Investment</label>
                      <div class="range_slide">
                        <input type="range" id="yearlyInvestment" min="0" max="150000" step="500" value="0">
                      </div>
                      <div class="range_input">
                        <input type="number" id="yearlyInvestmentInput" min="0" max="150000" step="500" value="0">
                      </div>
                    </div>
                    <div class="input-group">
                      <label for="timePeriod">Time Period (in years)</label>
                      <div class="range_slide">
                        <input type="range" id="timePeriod" min="1" max="35" step="1" value="0">
                      </div>
                      <div class="range_input">
                        <input type="number" id="timePeriodInput" min="1" max="35" step="1" value="0">
                      </div>
                    </div>
                    <div class="input-group">
                      <label for="rateOfInterest">Rate of Interest</label>
                      <div class="range_input">
                        <input type="number" id="rateOfInterest" value="7.1" disabled>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6 cal_left_div">
                <div class="result-section">
                    <div class="brown_ful">
                      <h2>Invested Amount:</h2>
                      <span id="investedAmount">₹ 0</span>
                    </div>
                    <div class="two_bomtm">
                      <div class="fadee">
                        <h2>Total Interest: </h2>
                        <span id="totalInterest">₹ 0</span>
                      </div>
                      <div class="backgrounnd">
                        <h2>Maturity Value:</h2>
                        <span id="maturityValue">₹ 0</span>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="d-flex flex-column  common_text_contents">
                <h1>Fixed Deposit (FD) Calculator: Understanding How it works</h1>
                <p>A Fixed Deposit (FD) Calculator is a financial tool that helps you determine the maturity amount and
                    interest earned on your fixed deposit investment. It eliminates the need for manual calculations and
                    provides quick, accurate results for both Simple Interest and Compound interest FDs.</p>
                <p>Fixed Deposits are a popular investment option due to their safety, assured returns, and predictable
                    interest earnings. Using an FD calculator ensures that you can plan your savings effectively and
                    make informed financial decisions.</p>

                <h2>How to Use the FD Calculator?</h2>
                <p>
                    Using the FD calculator is simple and quick. Follow these steps:
                </p>
                <ul>
                    <li><strong>1. Amount to Invest:</strong> Enter the amount you would like to invest in the fund</li>
                    <li><strong>2. Choose the Interest Rate:</strong> Enter the applicable interest rate (per annum)
                    </li>
                    <li><strong>3. Select the Tenure:</strong> Specify the duration of your FD in years or months.</li>
                    <li><strong>4. Select the Interest Type:</strong> Choose between simple or compound interest.</li>
                    <li><strong>5. Calculate:</strong> Click the calculate button to see the maturity amount and total
                        interest earned.</li>
                </ul>
                <p>The FD calculator will instantly display the results, allowing you to plan your investment
                    effectively.</p>

            </div>
        </div>
    </div>

    <div class="container-fluid faq_top_part">
        <div class="container">
            <div class="d-flex flex-column calculation_faq">
                <h1 class="text-center">Frequently asked questions</h1>
            </div>
            <div class="accordion accordion-flush calculation_faq_main" id="accordionFlushExample" style="margin-top: 2.5em;">
                <div class="accordion-item calculation_accordian">

                    <h2 class="accordion-header">
                        <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            What is an FD Calculator?
                            <span class="accordion-icon ms-auto"></span>
                        </div>
                    </h2>

                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>A Fixed Deposit (FD) Calculator is a financial tool that helps you determine the maturity
                                amount and interest earned on your fixed deposit investment. It eliminates the need for
                                manual calculations and provides quick, accurate results for both Simple Interest and
                                Compound interest FDs.</p>

                            <p>Fixed Deposits are a popular investment option due to their safety, assured returns, and
                                predictable interest earnings. Using an FD calculator ensures that you can plan your
                                savings effectively and make informed financial decisions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item calculation_accordian">
                    <h2 class="accordion-header">
                        <div class="accordion-button collapsed  " type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            How Does the FD Calculator Work?
                            <span class="accordion-icon ms-auto"></span>
                        </div>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum quas reprehenderit cupiditate
                            blanditiis quos, optio voluptate expedita, sequi voluptatem rem accusamus. Unde quae odio
                            ullam deleniti doloremque laboriosam quibusdam repellat veniam blanditiis voluptate nam non
                            illo est animi, perferendis, nostrum laudantium eaque repudiandae alias tempore nobis!
                            Mollitia illo tempora sapiente.
                        </div>
                    </div>
                </div>
                <div class="accordion-item calculation_accordian">
                    <h2 class="accordion-header">
                        <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            What is Simple Interest in Fixed Deposits?
                            <span class="accordion-icon ms-auto"></span>
                        </div>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis
                            unde incidunt aperiam iste provident modi laudantium nam impedit soluta? Dolore reiciendis
                            illo dolores doloribus quidem delectus quis rem exercitationem architecto rerum quasi
                            tempore quos doloremque blanditiis iste nihil pariatur, cum assumenda odit enim. Nihil
                            dolorem expedita quos minima consectetur ratione!
                        </div>
                    </div>
                </div>

                <div class="accordion-item calculation_accordian">
                    <h2 class="accordion-header">
                        <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                            What is Compound Interest in Fixed Deposits?
                            <span class="accordion-icon ms-auto"></span>
                        </div>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia,
                            similique iure incidunt ut velit in, mollitia minima neque totam autem rerum voluptate, quae
                            placeat officia pariatur accusantium non. Saepe autem doloremque optio possimus ducimus
                            omnis odio illo, officiis sequi eum vero cumque ullam fuga, eligendi iste repudiandae
                            deleniti mollitia animi!
                        </div>
                    </div>
                </div>

                <div class="accordion-item calculation_accordian">
                    <h2 class="accordion-header">

                        <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                            aria-controls="flush-collapseFive">
                            How do I work with the FD Calculator?
                            <span class="accordion-icon ms-auto"></span>
                        </div>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                            inventore, accusamus nesciunt fugiat exercitationem praesentium eveniet, libero culpa
                            molestias error reprehenderit ad soluta dolore quod atque commodi adipisci repudiandae, in
                            sunt nobis! Eaque doloremque reprehenderit quasi, perferendis unde voluptatibus deserunt
                            corporis sunt in alias dicta illo quidem voluptate quibusdam adipisci.</div>
                    </div>
                </div>



            </div>

        </div>
    </div>








    <footer style="padding:0;">
        <div class="d-flex flex-wrap gap-5 justify-content-evenly footer-head">
            <div class="d-flex flex-column gap-2">
                <a href="index.html" class="f-logo">
                    <img src="assets/logo.webp" alt="logo">
                </a>
                <h4 style="font-size: 14px;color:#727375">info@plutusco.com</h4>
                <div class="d-flex gap-2 align-items-center">
                    <a href="https://www.linkedin.com/company/plutus-co/"
                        class="icon d-flex justify-content-center align-items-center" target="_blank">
                        in
                    </a>
                    <a href="https://www.instagram.com/plutus__consulting?igsh=b2p4dnB4dW15Z3Bt"
                        class="icon d-flex justify-content-center align-items-center" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                    </a>
                    <a href="https://m.facebook.com/Plutusco/"
                        class="icon d-flex justify-content-center align-items-center" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </a>
                </div>
            </div>
             <div class="quick_links d-flex flex-column">
                <h3>Quick Links</h3>
                <a href="calculators.html"><p>Calculator</p></a>
                <a href="fd-calculator.html"><p>FD Calculator</p></a>
                <a href="income-tax-calculator.html"><p>Income Tax Calculator</p></a>
                <a href="mortgage-calculator.html"><p>Mortgage Calculator</p></a>
                <a href="ppf-calculator.html"><p>PPF Calculator</p></a>
                <a href="rd-calculator.html"><p>RD Calculator</p></a>
                <a href="sip-calculator.html"><p>SIP Calculator</p></a>
            </div>
            <div class="d-flex gap-3 justify-content-end flex-wrap col-lg-6 col-12 footer-right"
                style="min-width: 320px;">
                <div class="d-flex flex-column gap-2 ">
                    <div class="city">New Delhi</div>
                    <div class="office">Corporate Office</div>
                    <div class="address">503, Nilgiri Apartments,
                        9, Barakhamba Road, New Delhi 110001</div>
                </div>
                <div class="d-flex flex-column gap-2">
                    <div class="city">Guwahati</div>
                    <div class="address">2nd Floor, House no. 41, Lake View, Tayebulla complex, Md. Tayebulla road
                        Dighalipukhuri
                        Par (East), Guwahati, Assam 781001</div>
                </div>
                <div class="d-flex flex-column gap-2">
                    <div class="office">State Office</div>
                    <div class="address">Office 101-102, Building no. A-9, Amrit Bhawan, Street 3,
                        Guru Nanakpura, Laxmi Nagar, Delhi 110092</div>
                </div>
                <div class="d-flex flex-column gap-2">
                    <div class="city">Noida</div>
                    <div class="address">Nukleus Co-working Tower I.T. Tower, Plot no. 29, Sector 142, Noida, Uttar
                        Pradesh 201301
                    </div>
                </div>
            </div>
        </div>
        <div class="fotter_comman">
            <ul>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="refund-policy.html">Refund Policy</a></li>
                <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                <li><a href="cookie.html">Cookie Policy</a></li>
                <li><a href="careers-with-plutus.php">Career</a></li>
            </ul>
        </div>
        <div class="footer-end">
            <div class="text-center " style="font-size: 14px; color:#ffffff">Copyright © plutusco.com | All Right
                Reserved
            </div>
        </div>
    </footer>

    <div id="onetrust-consent-sdk" class="onetrust-consent-sdk" style="display: none;">
        <div class="ot-sdk-row">
            <div id="onetrust-group-container" class="ot-sdk-twelve ot-sdk-columns">
                <div id="onetrust-policy">
                    <div class="banner-header">
                        <img class="ot-bnr-logo" src="assets/logo.webp" title="Company Logo" alt="Company Logo">
                    </div>
                    <h2 id="onetrust-policy-title">We use cookies to give you the best possible experience on our
                        website.</h2>
                    <div id="onetrust-policy-text">
                        When you visit any website, it may store or retrieve information on your browser, mostly in the
                        form of
                        cookies. This information might be about you, your preferences, or your device and is mostly
                        used to make
                        the site work as you expect it to. The information does not usually directly identify you, but
                        it can give
                        you a more personalized web experience. Because we respect your right to privacy, you can choose
                        not to
                        allow some types of cookies. However, blocking some types of cookies may impact your experience
                        of the site
                        and the services we are able to offer. To find out more, read our updated <a href="cookie.html"
                            target="_blank">Cookie policy</a>.
                    </div>
                </div>
            </div>
            <div id="onetrust-button-group-parent" class="ot-sdk-twelve ot-sdk-columns">
                <div id="onetrust-button-group">
                    <div class="banner-actions-container">
                        <button id="onetrust-accept-btn-handler">Accept all cookies</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const consentBanner = document.getElementById('onetrust-consent-sdk');
            const consentButton = document.getElementById('onetrust-accept-btn-handler');
            const cookieName = 'user_consent';
            const cookieExpiryDays = 1; // 1 day

            // Function to get a cookie by name
            function getCookie(name) {
                const value = `; ${document.cookie}`;
                const parts = value.split(`; ${name}=`);
                if (parts.length === 2) return parts.pop().split(';').shift();
            }

            // Function to set a cookie
            function setCookie(name, value, days) {
                const date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                const expires = `expires=${date.toUTCString()}`;
                document.cookie = `${name}=${value}; ${expires}; path=/`;
            }

            // Check if the consent cookie is already set
            if (!getCookie(cookieName)) {
                consentBanner.style.display = 'block';
            }

            // When the user accepts the cookies
            consentButton.addEventListener('click', function () {
                setCookie(cookieName, 'accepted', cookieExpiryDays);
                consentBanner.style.display = 'none';
            });
        });

    </script>




    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="slick.js"></script>


    <script>
        function showCookieConsentPopup() {
            var consentPopup = document.getElementById("onetrust-consent-sdk");
            consentPopup.classList.add("active");
        }

        setTimeout(showCookieConsentPopup, 1000); // Call the function after 15 seconds of window load

        $("#onetrust-accept-btn-handler").click(function () {
            $(".onetrust-consent-sdk").removeClass("active");
        });

    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>



    <!-- WhatsApp and Call Button Script -->
    <script>
        $(document).ready(function () {
            // Create the WhatsApp button
            var whatsappButton = `
      <a href="#" id="whatsapp-btn" style="position:fixed;bottom:20px;right:20px;width:50px;z-index:1000;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon" style="width:100%;">
      </a>
    `;

            // Create the Call button
            // var callButton = `
            //   <a href="tel:8527516121" id="call-btn" style="position:fixed;bottom:80px;right:27px;width:40px;z-index:1000;">
            //     <img src="https://i.pinimg.com/736x/c1/00/d4/c100d4c70bc17365a2a42ac22ef782da.jpg" alt="Call Icon" style="width:100%;border-radius:50%">
            //   </a>
            // `;

            // // Append the buttons to the body
            $('body').append(callButton);
        });

        var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?10372';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {

                "backgroundColor": "#d7a942",
                "ctaText": "Chat with us",
                "borderRadius": "25",
                "marginLeft": "0",
                "marginRight": "20",
                "marginBottom": "20",
                "ctaIconWATI": false,
                "position": "right"
            },
            "brandSetting": {

                "brandName": "Plutus Consulting",
                "brandSubTitle": "undefined",
                "brandImg": "https://milliondox.com/New%20Project%20(60).png",
                "welcomeText": "Hi there!\nHow can I help you?",
                "messageText": "Hi, I want to enquire about the services offered!",
                "backgroundColor": "#d7a942",
                "ctaText": "Chat with us",
                "borderRadius": "25",
                "autoShow": false,
                "phoneNumber": "918527516121"
            }
        };
        s.onload = function () {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);

    </script>
    
    <script>
    const yearlyInvestmentInput = document.getElementById("yearlyInvestment");
    const yearlyInvestmentBox = document.getElementById("yearlyInvestmentInput");
    const timePeriodInput = document.getElementById("timePeriod");
    const timePeriodBox = document.getElementById("timePeriodInput");
    const rateOfInterest = 7.1; // Set interest rate here
    const investedAmountDisplay = document.getElementById("investedAmount");
    const totalInterestDisplay = document.getElementById("totalInterest");
    const maturityValueDisplay = document.getElementById("maturityValue");

    function calculatePPF() {
        const yearlyInvestment = parseFloat(yearlyInvestmentInput.value);
        const timePeriod = parseInt(timePeriodInput.value);

        // Sync inputs
        yearlyInvestmentBox.value = yearlyInvestment;
        timePeriodBox.value = timePeriod;

        // PPF Calculation
        let totalInvested = yearlyInvestment * timePeriod;
        let maturityValue = 0;
        let balance = 0;

        for (let year = 1; year <= timePeriod; year++) {
            balance += yearlyInvestment;
            balance += balance * (rateOfInterest / 100);
        }
        maturityValue = balance;
        let totalInterest = maturityValue - totalInvested;

        // Update Results
        investedAmountDisplay.innerText = `₹ ${totalInvested.toLocaleString()}`;
        totalInterestDisplay.innerText = `₹ ${totalInterest.toLocaleString()}`;
        maturityValueDisplay.innerText = `₹ ${maturityValue.toLocaleString()}`;
    }

    // Event Listeners
    yearlyInvestmentInput.addEventListener("input", () => {
        yearlyInvestmentBox.value = yearlyInvestmentInput.value;
        calculatePPF();
    });
    yearlyInvestmentBox.addEventListener("input", () => {
        yearlyInvestmentInput.value = yearlyInvestmentBox.value;
        calculatePPF();
    });

    timePeriodInput.addEventListener("input", () => {
        timePeriodBox.value = timePeriodInput.value;
        calculatePPF();
    });
    timePeriodBox.addEventListener("input", () => {
        timePeriodInput.value = timePeriodBox.value;
        calculatePPF();
    });

    // Initial Calculation
    calculatePPF();
</script>

<script>
    // Function to update the background fill for the slider
    function updateSliderBackground(slider) {
        const value = (slider.value - slider.min) / (slider.max - slider.min) * 100;
        slider.style.backgroundSize = value + '% 100%';
    }

    // Get all range inputs inside .range_slide elements
    const rangeSliders = document.querySelectorAll('.range_slide input');
    
    // Update the background size based on the range value for each slider
    rangeSliders.forEach(slider => {
      // Event listener to update background size when slider input changes
      slider.addEventListener('input', function() {
        updateSliderBackground(this);
      });
      
      // Set the initial background size based on the default value
      updateSliderBackground(slider);
    });
    
    // Sync the number input with the range input for each slider
    const numberInputs = document.querySelectorAll('.input-group input[type="number"]');
    numberInputs.forEach(numberInput => {
      numberInput.addEventListener('input', function() {
        const rangeInput = this.closest('.input-group').querySelector('input[type="range"]');
        
        // Update the range input value and trigger the background update
        rangeInput.value = this.value;
        updateSliderBackground(rangeInput);
      });
    });
</script>


</body>

</html>