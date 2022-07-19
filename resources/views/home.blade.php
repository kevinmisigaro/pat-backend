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
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fees">Fees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#themes">Themes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sponsorship">Sponsorship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#guidelines">Guidelines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#deadlines">Deadlines</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-outline-light me-3" href="/register">Register for Conference</a>
                    <a class="btn btn-outline-light" href="/login">Sign in</a>
                </div>
            </div>
        </div>
    </nav>


    <div id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item drk">
                    <div
                        style="background-image: url('{{ asset('assets/3.jpeg') }}'); height: 70vh; background-size:cover; background-position: 50% center">
                    </div>
                    <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                        <div>
                            <h2 style="color: white">
                                THEME: Children and Non Communicable <br> Diseases (NCDs)
                            </h2><br>
                            <p style="color: white">"Leave no child behind"</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item drk">
                    <div
                        style="background-image: url('{{ asset('assets/4.jpeg') }}'); height: 70vh; background-size:cover; background-position: 50% center">
                    </div>
                    <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                        <h2 style="color: white">
                            Will take place on October 13<sup>th</sup> - 15<sup>th</sup>
                        </h2>
                    </div>
                </div>
                <div class="carousel-item drk active">
                    <div
                        style="background-image: url('{{ asset('/assets/8.jpeg') }}'); height: 70vh; background-size:cover; background-position: 50% center">
                    </div>
                    <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                        <h2 style="color: white">
                            23<sup>rd</sup> PAT Annual General Meeting<br>
                            & Scientific Conference
                        </h2>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- ====== Fees Start ====== -->
    <section id="fees" class="ud-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-section-title mx-auto text-center">
                        {{-- <span>Features</span> --}}
                        <h2>Registration fees</h2>
                        <p>
                            Early bird registration until 15th August 2022
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 mb-3">
                    <div class="card bg-light" style="width: 100%">
                        <div class="card-body text-center">
                            <p><b>Paediatricians - Early Bird</b> <br> 100,000 TZS</p>
                            <br>
                            <a href="/register">Register now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card bg-light" style="width: 100%">
                        <div class="card-body text-center">
                            <p><b>Paediatricians - Late Bird</b> <br> 150,000 TZS</p>
                            <br>
                            <a href="/register">Register now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card bg-light" style="width: 100%">
                        <div class="card-body text-center">
                            <p><b>Paediatrician On site registration</b> <br> 200,000 TZS</p>
                            <br>
                            <a href="/register">Register now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card bg-light" style="width: 100%">
                        <div class="card-body text-center">
                            <p><b>Associate members</b> <br> 50,000 TZS </p>
                            <br>
                            <a href="/register">Register now</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <div class="card bg-light" style="width: 100%">
                        <div class="card-body text-center">
                            <p><b>Non East African Resident</b> <br> 100 USD </p>
                            <br>
                            <a href="/register">Register now</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- ===== Fees End ====== -->

    <!-- ====== Themes Start ====== -->
    <section id="themes" class="ud-faq">
        <div class="shape">
            <img src="assets/images/faq/shape.svg" alt="shape" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-section-title text-center mx-auto">
                        <h2>Sub-themes</h2>
                        <p>
                            Your abstract should aim at one of the Sub-themes below
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Multisectoral approach in addressing NCDs in children</span>
                            </button>
                            <div id="collapseOne" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Categories: Policy frameworks and resources for NCDs in Children, Corporate social
                                    responsibility in fighting NCDs in children, & Public Private Partnership in
                                    addressing NCDs in children.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Nutrition, growth, & early childhood development</span>
                            </button>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Categories: Food security, Childhood nutrition, Growth monitoring, Nurturing care
                                    for early childhood development, & Health promotion and School health programs.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Infections and NCDs</span>
                            </button>
                            <div id="collapseThree" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Categories: Intertwining of infectious diseases and NCDs, Role of immunization in
                                    fighting NCDs, To change any of the text in this You can also update the fonts of
                                    the& Managing comorbidities.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Newborn, child and adolescents <br> health</span>
                            </button>
                            <div id="collapseFour" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Categories: Sexual and reproductive health, Care of newborn and prematurity,
                                    Paediatric death review and response, & Mental health and rehabilitation in children
                                    and adolescents.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Hema /oncology in children <br> and adolescents</span>
                            </button>
                            <div id="collapseFive" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Categories: Sexual and reproductive health, Care of newborn
                                    and prematurity, Paediatric death review and response, & Mental
                                    health and rehabilitation in children and adolescents.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Systemic Non-Communicable diseases</span>
                            </button>
                            <div id="collapseSix" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Categories: Respiratory disorders, Cardiovascular disorders, & Gastrointestinal
                                    disorders.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Themes End ====== -->

    <!-- ====== Guidelines ====== -->
    <section id="guidelines" class="ud-features">
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
            </div>
            <div class="row">

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
                            +255782835136.
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
        </div>
    </section>
    <!-- ====== Guidlines End ====== -->


    <!-- ====== Deadlines ====== -->
    <section id="deadlines" class="ud-about">
        <div class="container">
            <div class="ud-about-wrapper wow fadeInUp" data-wow-delay=".2s">
                <div class="ud-about-content-wrapper">
                    <div class="ud-about-content">
                        <h2>Deadlines</h2>
                        <p>
                            - <b>Deadline for Abstract Submission: 20th August 2022</b>
                        </p>
                        <p>
                            - <b>Notification of acceptance: 15th September 2022</b>
                        </p>
                        <p>
                            - <b>Deadline for conference registration: 09th October, 2022</b>
                        </p>
                    </div>
                </div>
                <div class="ud-about-image">
                    <img src="{{ asset('capeverde1.png') }}" alt="cape-verde" />
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Deadline End ====== -->

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="ud-contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <div class="ud-contact-content-wrapper">
                        <div class="ud-contact-title">
                            <span>CONTACT US</span>
                            <h2>
                                Reach out to us
                            </h2>
                        </div>
                        <div class="ud-contact-info-wrapper">
                            <div class="ud-single-info">
                                <div class="ud-info-icon">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <div class="ud-info-meta">
                                    <h5>Our Location</h5>
                                    <p>4TH FLOOR PAEDIATRIC COMPLEX, Muhimbili, Dar es Salaam</p>
                                </div>
                            </div>
                            <div class="ud-single-info">
                                <div class="ud-info-icon">
                                    <i class="lni lni-envelope"></i>
                                </div>
                                <div class="ud-info-meta">
                                    <h5>How to contact us</h5>
                                    <p>P.O BOX 65370</p>
                                    <p>+255 767 029 904,<br> +255 754 047 857</p>
                                    <p>info@pediatrics.or.tz</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s">
                        <h3 class="ud-contact-form-title">Send us a message</h3>
                        <form action="/contact" method="POST" class="ud-contact-form">
                            @csrf
                            <div class="ud-form-group">
                                <label for="fullName">Name*</label>
                                <input type="text" name="name" placeholder="Name" />
                            </div>
                            <div class="ud-form-group">
                                <label for="email">Email*</label>
                                <input type="email" name="email" placeholder="example@yourmail.com" />
                            </div>
                            <div class="ud-form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" />
                            </div>
                            {{-- <div class="ud-form-group">
                                <label for="phone">Message</label>
                                <input type="text" name="message" />
                            </div> --}}
                            <div class="ud-form-group">
                                <label for="message">Message*</label>
                                <textarea name="message" rows="1" placeholder="type your message here"></textarea>
                            </div>
                            <div class="ud-form-group mb-0">
                                <button type="submit" class="ud-main-btn">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact End ====== -->

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
