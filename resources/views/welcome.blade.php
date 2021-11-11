<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Klinika Weterynaryjna</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Clarence Taylor</span>
        <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">O nas</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Nasze usługi</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Cennik</a></li>
            @if (Route::has('login'))
                    @auth
                        <li class="nav-item"> <a href="{{ url('/home') }}" class="nav-link js-scroll-trigger">Głowna</a></li>
                    @else
                        <li class="nav-item"> <a href="{{ route('login') }}" class="nav-link js-scroll-trigger">Zaloguj</a></li>

                        @if (Route::has('register'))
                            <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link js-scroll-trigger">Zarejestruj</a></li>
                        @endif
                    @endauth
            @endif

        </ul>
    </div>
</nav>
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                Klinika
                <span class="text-primary">Weterynaryjna</span>
            </h1>
            <div class="subheading mb-5">
                Nowy Sacz · Lwowska 23 · kom. 129834765·
                <a href="mailto:name@email.com">klinika@email.com</a>
            </div>
            <p class="lead mb-5">Kładziemy ogromny nacisk na swoje umiejętności zawodowe i nieustanne pogłębianie wiedzy. Standardem w naszej pracy jest  ciągłe podnoszenie naszych umiejętności przez naszych lekarzy i personel pomocniczy poprzez  uczestnictwo w kursach specjalistcznych, sympozjach i kongresach naukowych.</p>
            <p class="lead mb-5">W razie potrzeby współpracujemy z wysokiej klasy specjalistycznymi ośrodkami, które konsultują kierowanych przez nas pacjentów. Chcemy mieć zawsze pewność, że dołożyliśmy wszelkich starań by pomóc naszym czworonożnym podopiecznym.</p>
            <p class="lead mb-5">Bardzo cieszą nas osiągane sukcesy, których miarą jest dla nas stale zwiększająca się liczba klientów korzystających z usług naszej Lecznicy. Mobilizuje nas to do jeszcze bardziej wytężonej pracy i dalszego podnoszenia naszych kwalifikacji.</p>
            <div class="social-icons">
                <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="social-icon" href="#!"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Education-->
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Education</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">University of Colorado Boulder</h3>
                    <div class="subheading mb-3">Bachelor of Science</div>
                    <div>Computer Science - Web Development Track</div>
                    <p>GPA: 3.23</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">August 2006 - May 2010</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <div class="flex-grow-1">
                    <h3 class="mb-0">James Buchanan High School</h3>
                    <div class="subheading mb-3">Technology Magnet Program</div>
                    <p>GPA: 3.56</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">August 2002 - May 2006</span></div>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Skills-->
    <section class="resume-section" id="skills">
        <div class="resume-section-content">
            <h2 class="mb-5">Skills</h2>
            <div class="subheading mb-3">Programming Languages & Tools</div>
            <ul class="list-inline dev-icons">
                <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                <li class="list-inline-item"><i class="fab fa-react"></i></li>
                <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                <li class="list-inline-item"><i class="fab fa-less"></i></li>
                <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                <li class="list-inline-item"><i class="fab fa-npm"></i></li>
            </ul>
            <div class="subheading mb-3">Workflow</div>
            <ul class="fa-ul mb-0">
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>
                    Mobile-First, Responsive Design
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>
                    Cross Browser Testing & Debugging
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>
                    Cross Functional Teams
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>
                    Agile Development & Scrum
                </li>
            </ul>
        </div>
    </section>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>

