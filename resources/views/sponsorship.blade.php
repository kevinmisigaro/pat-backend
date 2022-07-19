<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paediatric Association of Tanzania</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Paediatric Association of Tanzania">
    <meta name="description" content="Paediatric Association of Tanzania">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://pat.co.tz/">
    <meta property="og:title" content="Paediatric Association of Tanzania">
    <meta property="og:description" content="Paediatric Association of Tanzania">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://pat.co.tz/">
    <meta property="twitter:title" content="Paediatric Association of Tanzania">
    <meta property="twitter:description" content="Paediatric Association of Tanzania Team">
    <meta property="twitter:image" content="">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('patlogo2.png') }}" type="image/svg" />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ud-styles.css?v.2') }}" />

    <style>
        .drk:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: black;
            opacity: 0.4;
            z-index: 1;
        }

        .carousel-item {}

        .carousel-caption {
            z-index: 2;
        }

    </style>

</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/#home">
                <img src="{{ asset('pat-logo-white.png') }}" style="max-width: 90px" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#fees">Fees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#themes">Themes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sponsorship">Sponsorship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#guidelines">Guidelines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#deadlines">Deadlines</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-outline-light me-3" href="/register">Register for Conference</a>
                    <a class="btn btn-outline-light" href="/login">Sign in</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ====== Pricing Start ====== -->
    <section id="sponsorship" class="ud-pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-section-title mx-auto text-center">
                        <span>Sponsorship</span>
                        <h2>Partnership Packages</h2>
                        {{-- <p>
                  There are many variations of passages of Lorem Ipsum available
                  but the majority have suffered alteration in some form.
                </p> --}}
                    </div>
                </div>
            </div>


            <div class="row g-0 align-items-center justify-content-center">

                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="ud-single-pricing first-item wow fadeInUp me-3" data-wow-delay=".15s">
                        <div class="ud-pricing-header">
                            <h3>TITLE PRESENTING PARTNER</h3>
                            <h4>$ 10,000</h4>
                        </div>
                        <div class="ud-pricing-body"></div>
                        <div class="ud-pricing-footer">
                            <a data-bs-toggle="modal" data-bs-target="#titleModal" class="ud-main-btn ud-border-btn">
                                View details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="titleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    TITLE PRESENTING PARTNER
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="pb-4 row" style="text-align: justify !important">
                                    <div class="col-md-6 mb-3">
                                        <h5>Nomenclature</h5>
                                        <p>
                                            PAT & your company (the name
                                            of a sponsor) PRESENT THE SCIENTIFIC CONFERENCE,
                                            ZANZIBAR 2022
                                        </p>
                                        <br>
                                        <h5>Business presentations</h5>
                                        <p>
                                            Special mention and acknowledgement during
                                            television broadcast at the official opening of the
                                            conference on October, 2022 and a breakfast
                                            address by the Chief Guest on the same day
                                        </p>
                                        <br>
                                        <h5>Logo visibility in event communication and promotion</h5>
                                        <p>
                                            Presenting partner logo in event communications i.e.
                                            speaker invitations, sponsor invitation, delegate
                                            invitation, program brochure and conference
                                            marketing campaigns
                                        </p>
                                        <br>
                                        <h5>Delegate pass</h5>
                                        <p>
                                            3 complimentary passes to the conference
                                        </p>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <h5>On site branding</h5>
                                        <ul>
                                            <li>
                                                - One hour session to all conference delegates in the main venue
                                            </li>
                                            <li>
                                                - Table space and 4 (four) chairs
                                            </li>
                                            <li>
                                                - Prominent display of company logo on the main stage backdrops
                                            </li>
                                            <li>- Running of corporate film/ power point
                                                presentation during the lunch/tea breaks
                                                (maximum of 10 min)</li>

                                            <li>- Acknowledgement in conference
                                                documentation welcome letter and other
                                                printed conference documents.</li>
                                            <li>- 2 branding panels to be displayed at
                                                significant points in the venue (Panels
                                                provided by you)</li>
                                            <li>- Four inserts in conference delegate bag</li>
                                            <li>- Full page advertisement in hard copy
                                                program brochure/abstract book (front
                                                page)</li>
                                            <li>- Audio recognition as a conference partner
                                                in between sessions</li>
                                            <li>- Privilege in preparation of Name tags with
                                                the preferable background</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="ud-single-pricing first-item wow fadeInUp me-3" data-wow-delay=".15s">
                        <div class="ud-pricing-header">
                            <h3>DIAMOND SPONSOR</h3>
                            <h4>$ 8,000</h4>
                        </div>
                        <div class="ud-pricing-body"></div>
                        <div class="ud-pricing-footer">
                            <a data-bs-toggle="modal" data-bs-target="#diamondModal" class="ud-main-btn ud-border-btn">
                                View details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="diamondModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    DIAMOND SPONSOR
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="pb-4 row" style="text-align: justify !important">
                                    <div class="col-md-6 mb-3">

                                        <h5>Business presentations</h5>
                                        <p>
                                            - Special mention and acknowledgement
                                            during television broadcast at the official
                                            opening of the conference on October,
                                            2022 and a breakfast address by the Chief
                                            Guest on the same day
                                        </p>
                                        <p>
                                            - Diamond sponsor logo in event
                                            communications i.e. speaker invitations,
                                            sponsors invitation, delegate invitation,
                                            program brochure and conference
                                            marketing campaigns
                                        </p>
                                        <p>
                                            - Logo presence on HTML e-mailers, invites
                                        </p>
                                        <br>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <h5>On site branding</h5>
                                        <ul>
                                            <li>
                                                - Table space and two chairs
                                            </li>
                                            <li>
                                                - Prominent display of your company logo on
                                                the main stage backdrop
                                            </li>
                                            <li>
                                                - 1 branding panel to be displayed at
                                                significant points in the venue (Panels
                                                provided by you)
                                            </li>
                                            <li>- Acknowledgement in conference
                                                documentation welcome letter</li>

                                            <li>- half page advertisement in the hard copy
                                                program brochure (mid book)</li>
                                            <li>- Two inserts in conference delegate bag</li>
                                            <li>- 3 complimentary passes to the conference</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="ud-single-pricing first-item wow fadeInUp me-3" data-wow-delay=".15s">
                        <div class="ud-pricing-header">
                            <h3>GOLD SPONSOR</h3>
                            <h4>$ 6,000</h4>
                        </div>
                        <div class="ud-pricing-body"></div>
                        <div class="ud-pricing-footer">
                            <a data-bs-toggle="modal" data-bs-target="#goldModal" class="ud-main-btn ud-border-btn">
                                View details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="goldModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Gold sponsor
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="pb-4 row" style="text-align: justify !important">
                                    <div class="col-md-6 mb-3">

                                        <h5>Business presentations</h5>
                                        <p>
                                            - Special mention and acknowledgement
                                            during television broadcast at the official
                                            opening of the conference on October,
                                            2022 and a breakfast address by the Chief
                                            Guest on the same day
                                        </p>
                                        <p>
                                            - Gold sponsor logo in event communications
                                            i.e. speaker invitations, sponsors invitation,
                                            delegate invitation, program brochure and
                                            conference marketing campaigns
                                        </p>
                                        <p>
                                            - Logo presence on HTML e-mailers, invites
                                        </p>
                                        <br>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <h5>On site branding</h5>
                                        <ul>
                                            <li>
                                                - Table space and two chairs
                                            </li>
                                            <li>
                                                - Prominent display of your company logo on
                                                the main stage backdrop
                                            </li>
                                            <li>
                                                - 2 branding panels to be displayed at
                                                significant points outside the conference
                                                halls (Panels provided by you)
                                            </li>
                                            <li>- Acknowledgement in conference
                                                documentation welcome letter</li>

                                            <li>- Half page advertisement in the hard copy
                                                program brochure (end page)</li>
                                            <li>- Two inserts in conference delegate bag</li>
                                            <li>- 2 complimentary passes to the conference</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="ud-single-pricing first-item wow fadeInUp me-3" data-wow-delay=".15s">
                        <div class="ud-pricing-header">
                            <h3>TANZANITE/GALA DINNER SPONSOR</h3>
                            <h4>$ 5,000</h4>
                        </div>
                        <div class="ud-pricing-body"></div>
                        <div class="ud-pricing-footer">
                            <a data-bs-toggle="modal" data-bs-target="#tanzaniteModal"
                                class="ud-main-btn ud-border-btn">
                                View details
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="tanzaniteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    TANZANITE/GALA DINNER SPONSOR
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="pb-4 row" style="text-align: justify !important">
                                    <div class="col-md-6 mb-3">


                                        <p>
                                            - Tanzanite sponsor logo in event
                                            communications i.e. speaker invitations,
                                            sponsor invitations, delegate invitation,
                                            program brochure and conference
                                            marketing campaigns
                                        </p>
                                        <p>
                                            - Logo presence on HTML e-mailers, invites
                                        </p>
                                        <br>
                                        <h5>On site branding</h5>
                                        <ul>
                                            <li>
                                                - Table space and two chairs
                                            </li>
                                            <li>
                                                - Prominent display of your company logo on
                                                the main stage backdrop
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <ul>
                                            <li>
                                                - 1 branding panel outside the conference
                                                hall (panel provided by you)
                                            </li>
                                            <li>- A half page advertisement in the hard copy
                                                program brochure (end page)</li>

                                            <li>- Half page advertisement in the hard copy
                                                program brochure (end page)</li>
                                            <li>- Two inserts in conference delegate bag</li>
                                            <li>- 2 complimentary passes to the conference</li>
                                            <li>- Up to 50 minutes talk at the Gala Dinner</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="ud-single-pricing first-item wow fadeInUp me-3" data-wow-delay=".15s">
                        <div class="ud-pricing-header">
                            <h3>EXHIBITORS PACKAGE-2000</h3>
                            <h4>$ 2,000</h4>
                        </div>
                        <div class="ud-pricing-body"></div>
                        <div class="ud-pricing-footer">
                            <a data-bs-toggle="modal" data-bs-target="#exModal" class="ud-main-btn ud-border-btn">
                                View details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    EXHIBITORS PACKAGE
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="pb-4 row">
                                    <div class="col-md-12 mb-3">

                                        <h5>The exhibitor will enjoy the following benefits:</h5>
                                        <p>
                                            - The exhibitor will interact with delegates from Tanzania and across the
                                            continent
                                        </p>
                                        <p>
                                            - The exhibitors will receive recognition by Key Speakers during the
                                            conference
                                        </p>
                                        <p>
                                            - Their logo will appear in the conference bags
                                        </p>
                                        <p>
                                            - Insert their brochure in the conference folders
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ====== Pricing End ====== -->

    <section id="fees" class="ud-features">
        <div class="container">

            <div class="text-center">
                <h5>Download the partnership confirmation form below to <br> fill and send to this email: info@paediatrics.co.tz</h5>
                <br>
                <button class="btn btn-primary mb-5">
                    Download confirmation form
                </button>
                <br><br>
            </div>

            <h5>Financial terms and conditions</h5>
            <ul>
                <li>
                    - 100% payment at the time of the booking
                </li>
                <li>
                    - Payment to be made in favour of the Paediatric Association of Tanzania
                </li>
                <li>
                    - Within 6 weeks of the event
                </li>
                <li>
                    - 6-10 weeks of the event 75% to be paid
                </li>
                <li>
                    - All payments are non-refundable
                </li>
            </ul>
            <br><br>

            <h4 style="text-align: center">Please note that sponsorship entitlements will not commence until <br> 70% deposit
                has been done. Deposit is due by August 2022.
            </h4>
            <br><br>

            <h5>Payment information</h5>
            <p>All deposits should be deposited to the following account:</p>
            <br>
            <p><b>Account name: PAEDIATRIC ASSOSICATION OF TANZANIA</b></p>
            <p><b>Account number:</b> 041103002213</p>
            <p><b>Bank:</b> NATIONAL BANK OF COMMERCE, Tanzania</p>
        </div>
    </section>

    <!-- ====== Footer Start ====== -->
    <footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">
        <div class="ud-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="ud-footer-bottom-left">
                            <li>
                                <a href="/login">Login</a>
                            </li>
                            {{-- <li>
                  <a href="javascript:void(0)">Support policy</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Terms of service</a>
                </li> --}}
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <p class="ud-footer-bottom-right">
                            Paediatric Association of Tanzania
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== Footer End ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
        <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);

    </script>
</body>

</html>
