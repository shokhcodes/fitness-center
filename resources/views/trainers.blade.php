<!DOCTYPE html>
<?php
session_start();
?>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Профессиональные тренеры | Фит-Рус Премиум</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Профессиональные тренеры нашего фитнес-центра с международной сертификацией и индивидуальным подходом" />
    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
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
            background: url('img/профтренеры.jpg') center/cover no-repeat;
            border-radius: var(--card-border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .hero-image:hover {
            transform: translateY(-50%) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        /* Trainers Section */
        .trainers-section {
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

        .trainers-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .trainer-card {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }

        .trainer-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-hover);
        }

        .trainer-image {
            height: 400px;
            overflow: hidden;
            position: relative;
        }

        .trainer-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .trainer-card:hover .trainer-image img {
            transform: scale(1.05);
        }

        .trainer-badge {
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

        .trainer-content {
            padding: 30px;
            text-align: center;
        }

        .trainer-name {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 10px;
            word-wrap: break-word;
        }

        .trainer-experience {
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 20px;
            display: block;
        }

        .trainer-description {
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

        .trainer-social {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f5f5f7;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            color: var(--primary-color);
        }

        .social-icon:hover {
            background: var(--accent-color);
            color: white;
            transform: translateY(-5px);
        }

        /* Features Section */
        .features-section {
            padding: var(--section-padding);
            background: linear-gradient(135deg, #000 0%, #1d1d1f 100%);
            color: white;
        }

        .features-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            align-items: center;
        }

        .features-content {
            padding-right: 20px;
        }

        .features-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #000000;
            word-wrap: break-word;
        }

        .features-list {
            list-style: none;
            margin: 40px 0;
        }

        .features-list li {
            margin-bottom: 25px;
            position: relative;
            padding-left: 50px;
            font-size: 1.4rem;
            line-height: 1.6;
        }

        .features-list li:before {
            content: '';
            position: absolute;
            left: 0;
            top: 5px;
            width: 30px;
            height: 30px;
            background: var(--accent-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 900;
            font-family: 'Font Awesome 6 Free';
            content: '\f00c';
            font-size: 14px;
        }

        .features-image {
            height: 600px;
            border-radius: var(--card-border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            background: url('img/тренер.jpg') center/cover no-repeat;
        }

        .features-image:hover {
            transform: scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: var(--section-padding);
            background: var(--bg-color);
        }

        .testimonials-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .testimonial-card {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            padding: 40px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }

        .testimonial-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-hover);
        }

        .testimonial-text {
            font-size: 1.8rem;
            line-height: 1.7;
            margin-bottom: 30px;
            position: relative;
            color: var(--light-text);
        }

        .testimonial-text:before {
            content: '\201C';
            font-size: 5rem;
            position: absolute;
            top: -30px;
            left: -10px;
            color: rgba(0, 0, 0, 0.05);
            font-family: Georgia, serif;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .testimonial-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 3px solid var(--accent-color);
        }

        .testimonial-info h4 {
            font-size: 1.3rem;
            margin-bottom: 5px;
            font-weight: 700;
        }

        .testimonial-info p {
            color: var(--light-text);
            font-size: 0.9rem;
        }

        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f5f5f7 0%, #e9e9ed 100%);
            text-align: center;
        }

        .cta-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 60px 40px;
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
        }

        .cta-title {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 20px;
            letter-spacing: -0.02em;
        }

        .cta-subtitle {
            font-size: 2rem;
            color: var(--light-text);
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .cta-button {
            display: inline-block;
            background: var(--accent-color);
            color: white;
            padding: 18px 45px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.4rem;
            text-decoration: none;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(191, 72, 0, 0.3);
        }

        .cta-button:hover {
            background: #a53c00;
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(191, 72, 0, 0.4);
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

            .trainers-grid {
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

            .features-container {
                grid-template-columns: 1fr;
            }

            .features-image {
                height: 400px;
                margin-top: 50px;
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

            .trainers-grid,
            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .section-title h2 {
                font-size: 2.5rem;
            }

            .features-title {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.3rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .cta-title {
                font-size: 2.2rem;
            }

            .cta-subtitle {
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
                <h1 class="hero-title">Профессиональные <span style="color: var(--accent-color);">тренеры</span></h1>
                <p class="hero-subtitle">Наши сертифицированные специалисты помогут вам достичь фитнес-целей с индивидуальным подходом и передовыми методиками.</р>
            </div>
        </div>
        <div class="hero-image floating">
            <img src="img/профтренеры.jpg" alt="Профессиональные тренеры" loading="lazy" width="800" height="560" style="width: 100%; height: 100%; object-fit: cover; border-radius: var(--card-border-radius); box-shadow: var(--shadow);">
        </div>
        <div id="particles-js"></div>
    </section>

    <!-- Trainers Section -->
    <section class="trainers-section">
        <div class="container">
            <div class="section-title animate">
                <h2>Наша команда тренеров</h2>
                <h4>Эксперты с международными сертификатами и многолетним опытом</h4>
            </div>

            <div class="trainers-grid">
                @foreach($teams as $trainer)
                <div class="trainer-card animate">
                    <div class="trainer-image">
                        <img src="img/{{ $trainer->foto }}" alt="{{ $trainer->FIO }}" loading="lazy" width="400" height="400">
                        <div class="trainer-badge">{{ $trainer->master }}</div>
                    </div>
                    <div class="trainer-content">
                        <h3 class="trainer-name">{{ $trainer->FIO }}</h3>
                        <span class="trainer-experience">Опыт: {{ $trainer->age }} лет</span>
                        <p class="trainer-description">{{ $trainer->description }}</p>
                        <div class="trainer-social">
                            <a href="https://vk.com/" class="social-icon"><i class="fab fa-vk"></i></a>
                            <a href="https://t.me/" class="social-icon"><i class="fab fa-telegram-plane"></i></a>
                            <a href="https://wa.me/" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="features-container">
                <div class="features-content animate">
                    <h2 class="features-title" style="color: #fff;">Почему выбирают наших <span style="color: var(--accent-color);">тренеров</span></h2>

                    <ul class="features-list">
                        <li>Профессиональное образование и международные сертификаты</li>
                        <li>Индивидуальный подход к каждому клиенту</li>
                        <li>Доказанная эффективность программ тренировок</li>
                        <li>Постоянное повышение квалификации</li>
                        <li>Внимание к технике безопасности и правильной форме выполнения упражнений</li>
                        <li>Поддержка и мотивация на всех этапах тренировочного процесса</li>
                        <li>Составление индивидуальных планов питания</li>
                    </ul>
                </div>

                <div class="features-image floating animate"></div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-title animate">
                <h2>Отзывы о наших тренерах</h2>
                <h4>Что говорят наши клиенты о работе с профессионалами</hр>
            </div>

            <div class="testimonials-container">
                <div class="testimonials-grid">
                    <div class="testimonial-card animate">
                        <div class="testimonial-text">
                            "Иван Петров помог мне подготовиться к марафону за 3 месяца. Профессиональный подход и индивидуальная программа сделали свое дело - я пробежал свою первую дистанцию 42 км!"
                        </div>
                        <div class="testimonial-author">
                            <img src="img/Алексей.jpg" alt="Алексей Смирнов" class="testimonial-avatar" loading="lazy" width="100" height="100">
                            <div class="testimonial-info">
                                <h4>Алексей Смирнов</h4>
                                <p>Клиент 2 года</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card animate">
                        <div class="testimonial-text">
                            "После рождения ребенка я долго не могла прийти в форму. Анна Сидорова разработала для меня специальную программу. Через 4 месяца я вернулась к своему добеременному весу!"
                        </div>
                        <div class="testimonial-author">
                            <img src="img/Катя.jpg" alt="Екатерина Иванова" class="testimonial-avatar" loading="lazy" width="100" height="100">
                            <div class="testimonial-info">
                                <h4>Екатерина Иванова</h4>
                                <p>Клиент 1 год</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card animate">
                        <div class="testimonial-text">
                            "Я занимаюсь бодибилдингом 5 лет, но только с Дмитрием Ивановым смог выйти на новый уровень. Его знания помогли мне подготовиться к соревнованиям и занять 2 место!"
                        </div>
                        <div class="testimonial-author">
                            <img src="img/Дмитрий.jpg" alt="Дмитрий Петров" class="testimonial-avatar" loading="lazy" width="100" height="100">
                            <div class="testimonial-info">
                                <h4>Дмитрий Петров</h4>
                                <p>Клиент 3 года</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-container animate">
                <h2 class="cta-title">Готовы начать тренировки с профессионалом?</h2>
                <p class="cta-subtitle">Запишитесь на бесплатную консультацию и первую тренировку. Наши тренеры помогут вам определить цели и составят индивидуальную программу.</p>
                <a href="{{ route('pricing') }}" class="cta-button">Записаться на тренировку</a>
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

        // Floating animation for features image
        gsap.to('.features-image', {
            y: -20,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut",
            delay: 0.5
        });

        // Hover effect for trainer cards
        document.querySelectorAll('.trainer-card').forEach(card => {
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

        // Hover effect for social icons
        document.querySelectorAll('.social-icon').forEach(icon => {
            icon.addEventListener('mouseenter', () => {
                gsap.to(icon, {
                    duration: 0.2,
                    scale: 1.1,
                    ease: "back.out(1.7)"
                });
            });

            icon.addEventListener('mouseleave', () => {
                gsap.to(icon, {
                    duration: 0.3,
                    scale: 1,
                    ease: "elastic.out(1, 0.5)"
                });
            });
        });
    </script>
</body>

</html>