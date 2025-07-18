<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Услуги | Фит-Рус Премиум</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Премиальные услуги нашего фитнес-центра для достижения ваших целей" />
    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #000;
            --secondary-color: #1d1d1f;
            --accent-color: #bf4800;
            --text-color: #333;
            --light-text: #86868b;
            --bg-color: #f5f5f7;
            --card-bg: #fff;
            --transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
            --section-padding: 120px 0;
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --card-border-radius: 20px;
            --shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--text-color);
            background-color: var(--bg-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
        }

        /* Hero Section */
        .hero-section {
            height: 70vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #f5f5f7 0%, #e9e9ed 100%);
            padding-top: 80px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
        }

        .hero-title {
            font-size: 4.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 30px;
            letter-spacing: -0.03em;
            color: var(--primary-color);
        }

        .hero-subtitle {
            font-size: 3.5rem;
            font-weight: 400;
            color: var(--light-text);
            margin-bottom: 40px;
            max-width: 600px;
            line-height: 1.4;
        }

        .hero-image {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 50%;
            max-width: 800px;
            height: 70%;
            background: url('img/Услуги2.jpeg') center/cover no-repeat;
            border-radius: var(--card-border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .hero-image:hover {
            transform: translateY(-50%) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        /* Services Section */
        .services-section {
            padding: var(--section-padding);
            background: var(--bg-color);
        }

        .section-title {
            text-align: center;
            margin-bottom: 80px;
        }

        .section-title h2 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: -0.02em;
            position: relative;
            display: inline-block;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--accent-color);
        }

        .section-title p {
            font-size: 1.4rem;
            color: var(--light-text);
            max-width: 700px;
            margin: 40px auto 0;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .service-card {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }

        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-hover);
        }

        .service-image {
            height: 300px;
            overflow: hidden;
            position: relative;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .service-card:hover .service-image img {
            transform: scale(1.05);
        }

        .service-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--accent-color);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .service-content {
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .service-name {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 15px;
            word-wrap: break-word;
            /* Перенос слов при необходимости */
        }

        .service-description {
            color: var(--light-text);
            font-size: 1.6rem;
            line-height: 1.7;
            margin-bottom: 25px;
            min-height: 100px;
            max-height: 100px;
            overflow-y: auto;
            /* Добавляет прокрутку, если текст не помещается */
            word-wrap: break-word;
            /* Перенос слов при необходимости */
            flex-grow: 1;
            /* Позволяет элементу расти и занимать доступное пространство */
            overflow-y: auto;
            /* Добавляет прокрутку, если текст не помещается */
        }

        /* Offers Section */
        .offers-section {
            padding: var(--section-padding);
            background: linear-gradient(135deg, #000 0%, #1d1d1f 100%);
            color: white;
        }

        .offers-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .offers-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .offer-card {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }

        .offer-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-hover);
        }

        .offer-image {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .offer-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .offer-card:hover .offer-image img {
            transform: scale(1.05);
        }

        .offer-content {
            padding: 20px;
            /* Уменьшите отступы */
        }

        .offer-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #000000;
            word-wrap: break-word;
            /* Перенос слов при необходимости */
        }

        .offer-description {
            color: var(--light-text);
            font-size: 1.6rem;
            line-height: 1.7;
            margin-bottom: 25px;
            min-height: 100px;
            max-height: 100px;
            overflow-y: auto;
            /* Добавляет прокрутку, если текст не помещается */
            word-wrap: break-word;
            /* Перенос слов при необходимости */
        }

        /* Particles Effect */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }

        /* Animations */
        .animate {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .animate.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .pulse {
            animation: pulse 4s ease-in-out infinite;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .hero-title {
                font-size: 3.8rem;
            }

            .services-grid,
            .offers-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 3.2rem;
            }

            .hero-section {
                flex-direction: column;
                text-align: center;
                padding-top: 120px;
                height: auto;
            }

            .hero-content {
                max-width: 100%;
                padding: 80px 0;
            }

            .hero-image {
                position: relative;
                width: 100%;
                height: 400px;
                margin-top: 40px;
                transform: none;
                top: 0;
            }

            .section-title h2 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 20px;
            }

            .hero-title {
                font-size: 2.8rem;
            }

            .hero-subtitle {
                font-size: 1.4rem;
            }

            .services-grid,
            .offers-grid {
                grid-template-columns: 1fr;
            }

            .section-title h2 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.3rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .service-name {
                font-size: 1.4rem;
            }

            .service-description {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 768px) {
            .offer-title {
                font-size: 1.4rem;
            }

            .offer-description {
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body>
    @include("layouts.header")

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content animate">
                <h1 class="hero-title">Наши <span style="color: var(--accent-color);">услуги</span></h1>
                <p class="hero-subtitle">Премиальные фитнес-услуги для достижения ваших целей. Индивидуальный подход, современное оборудование и профессиональные тренеры.</p>
            </div>
        </div>
        <div class="hero-image floating"></div>
        <div id="particles-js"></div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-title animate">
                <h2>Основные услуги</h2>
                <h4>Мы предлагаем широкий спектр услуг для всех уровней подготовки</hр>
            </div>

            <div class="services-grid">
                @foreach($services as $service)
                <div class="service-card">
                    <div class="service-image">
                        <img src="img/{{ $service->foto }}" alt="{{ $service->title }}" loading="lazy">
                        <div class="service-badge">Популярно</div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-name">{{ $service->title }}</h3>
                        <p class="service-description">{{ $service->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="pagination-links" style="text-align:center; margin-top: 40px;">
                {{ $services->links() }}
            </div>
        </div>
    </section>

    <!-- Offers Section -->
    <section class="offers-section">
        <div class="container">
            <div class="section-title animate">
                <h2 style="color: #fff;">Специальные предложения</h2>
                <h4 style="color: #fff;">Выгодные пакеты услуг для постоянных клиентов</h4>
            </div>

            <div class="offers-container">
                <div class="offers-grid">
                    @foreach($offers as $offer)
                    <div class="offer-card animate">
                        <div class="offer-image">
                            <img src="img/{{ $offer->foto }}" alt="{{ $offer->title }}" loading="lazy" width="250" height="250">
                        </div>
                        <div class="offer-content">
                            <h3 class="offer-title">{{ $offer->title }}</h3>
                            <p class="offer-description">{{ $offer->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @include("layouts.footer")

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script>
        // Particles.js initialization
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: "#bf4800"
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#000000"
                    }
                },
                opacity: {
                    value: 0.5,
                    random: true
                },
                size: {
                    value: 3,
                    random: true
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#bf4800",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: "none",
                    random: true,
                    straight: false,
                    out_mode: "out",
                    bounce: false
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "repulse"
                    },
                    onclick: {
                        enable: true,
                        mode: "push"
                    },
                    resize: true
                }
            },
            retina_detect: true
        });

        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);

        // Animate elements on scroll
        document.querySelectorAll('.animate').forEach(el => {
            gsap.fromTo(el, {
                y: 50,
                opacity: 0
            }, {
                y: 0,
                opacity: 1,
                duration: 1,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: el,
                    start: "top 85%",
                    toggleActions: "play none none none"
                }
            });
        });

        // Floating animation for hero image
        gsap.to('.hero-image', {
            y: -20,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });

        // Hover effect for service cards
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card, {
                    duration: 0.3,
                    boxShadow: '0 35px 60px rgba(0, 0, 0, 0.2)',
                    ease: "power2.out"
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    duration: 0.3,
                    boxShadow: '0 20px 50px rgba(0, 0, 0, 0.08)',
                    ease: "power2.out"
                });
            });
        });

        // Hover effect for offer cards
        document.querySelectorAll('.offer-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card, {
                    duration: 0.3,
                    boxShadow: '0 35px 60px rgba(0, 0, 0, 0.2)',
                    ease: "power2.out"
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    duration: 0.3,
                    boxShadow: '0 20px 50px rgba(0, 0, 0, 0.08)',
                    ease: "power2.out"
                });
            });
        });
    </script>
</body>

</html>