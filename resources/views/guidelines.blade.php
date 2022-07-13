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
</head>

<body>

    <!-- ====== Header Start ====== -->
    <header class="bg-primary py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand text-white" href="/">
                            {{-- Paediatric Association of Tanzania --}}
                            <img src="{{ asset('pat-logo-white.png') }}" style="max-width: 90px" alt="Logo" />
                        </a>
                        <button class="navbar-toggler">
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                        </button>

                        <div class="navbar-collapse">
                            <ul id="nav" class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/guidelines">Guidelines</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                            {{-- <a href="/login" class="ud-main-btn ud-login-btn">
                                    Sign In
                                </a> --}}
                            <a class="ud-main-btn ud-white-btn" href="/login">
                                Sign in
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ====== Header End ====== -->




    <section class="my-5">
        <div class="container">


            <div class="row">

                <div class="col-lg-12">
                    <div class="ud-section-title mx-auto text-center">
                        {{-- <span>Features</span> --}}
                        <h2>Submission Guidelines</h2>
                        <p>
                            Rules for submission of abstracts
                        </p>
                    </div>
                </div>

                <div class="col-lg-12">


                    <p>
                        Abstracts must be submitted through <a href="/register">here</a>. Abstracts submitted via emails
                        will not be considered.
                    </p>
                    <br>
                    <p>
                        Please read the submission rules before submitting an abstract.
                    </p>
                    <br>
                    <ol>
                        <li>
                            1. The presenting author is required to ensure that all co-authors are aware of the content
                            of the
                            abstract before submission
                        </li>
                        <li>
                            2. All abstracts should be submitted and presented in English language.
                        </li>
                        <li>
                            3. Please note that the submitting author will receive all correspondence about the
                            abstract, so we
                            advise that the submitting author details that are entered are the same details as those of
                            the
                            presenting author.
                        </li>
                        <li>
                            4. Your abstract is not successfully submitted until you receive a confirmation e-mail after
                            clicking
                            the final submit button. If you do not receive a confirmation e-mail, please contact us via
                            XXXXXXXX.
                        </li>
                    </ol>
                    <br>
                    <h5><b>Submission guidelines</b></h5>
                    <p>
                        Before you begin the submission process, kindly review the following information:
                    </p>
                    <ol>
                        <li>
                            - Abstract Topic – abstracts must be allocated to a specific Sub theme.
                        </li>
                        <li>
                            - Abstract text – limited to <b>350 words</b>; Format – <b>Microsoft word</b>; Font –
                            <b>Arial 10
                                points</b>;
                            Paragraph line spacing – <b>Single</b>.
                        </li>
                        <li>
                            - Abstract should not contain tables, figures, and references
                        </li>
                        <li>
                            - Abstract must be submitted with the following sections: <b>Introduction, Objectives,
                                Methodology, Results, Conclusion</b>.
                        </li>
                    </ol>
                    <br>
                    <h5><b>Abstract selection and presentation</b></h5>
                    <p>
                        The Committee will review all submitted abstracts and will notify the submitting author
                        regarding
                        abstract acceptance and scheduling will be sent to the submitting author.
                    </p>

                </div>

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
