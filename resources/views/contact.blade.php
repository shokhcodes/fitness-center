<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Контакты | Фит-Рус Премиум</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Свяжитесь с нашим премиальным фитнес-центром" />
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
            height: 60vh;
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
            background: url('img/контакт.jpg') center/cover no-repeat;
            border-radius: var(--card-border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .hero-image:hover {
            transform: translateY(-50%) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        /* Contact Section */
        .contact-section {
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

        .contact-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            margin-top: 50px;
        }

        .contact-form {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            padding: 50px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .contact-form:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .contact-info {
            background: var(--secondary-color);
            color: white;
            border-radius: var(--card-border-radius);
            padding: 50px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .contact-info:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .contact-info h3 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: white;
        }

        .contact-details {
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .contact-icon {
            background: var(--accent-color);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .contact-text h4 {
            font-size: 1.3rem;
            margin-bottom: 5px;
            color: white;
        }

        .contact-text p {
            color: #ccc;
            font-size: 1.1rem;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-link {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            transition: var(--transition);
        }

        .social-link:hover {
            background: var(--accent-color);
            transform: translateY(-5px);
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 30px;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            font-size: 1.4rem;
            color: var(--text-color);
        }

        .form-control {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e1e1;
            border-radius: 12px;
            font-size: 1.1rem;
            font-family: 'Inter', sans-serif;
            transition: var(--transition);
            background: #f9f9f9;
        }

        .form-control:focus {
            border-color: var(--accent-color);
            outline: none;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(191, 72, 0, 0.1);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .btn-primary {
            background: var(--accent-color);
            color: white;
            border: none;
            padding: 16px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 12px;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary:hover {
            background: #a53c00;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(191, 72, 0, 0.2);
        }

        .help-block {
            color: #e74c3c;
            font-size: 0.9rem;
            margin-top: 8px;
            display: block;
        }

        .alert {
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 25px;
            font-size: 1rem;
        }

        .alert-success {
            background: rgba(46, 204, 113, 0.15);
            color: #27ae60;
            border: 1px solid rgba(46, 204, 113, 0.3);
        }

        /* Map Container */
        .map-container {
            margin-top: 30px;
            border-radius: var(--card-border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            height: 400px;
        }

        .map-container:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
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
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .pulse {
            animation: pulse 4s ease-in-out infinite;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .hero-title {
                font-size: 3.8rem;
            }
            
            .contact-container {
                gap: 30px;
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
            
            .contact-container {
                grid-template-columns: 1fr;
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
            
            .section-title h2 {
                font-size: 2.5rem;
            }
            
            .contact-form,
            .contact-info {
                padding: 30px;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.3rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .contact-item {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .contact-icon {
                margin-bottom: 15px;
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
                <h1 class="hero-title">Свяжитесь <span style="color: var(--accent-color);">с нами</span></h1>
                <p class="hero-subtitle">Мы рады вашему интересу! Заполните форму или свяжитесь с нами напрямую. Наша команда ответит на все ваши вопросы.</p>
            </div>
        </div>
        <div class="hero-image floating"></div>
        <div id="particles-js"></div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="section-title animate">
                <h2>Наши контакты</h2>
                <h4>Мы всегда готовы ответить на ваши вопросы и помочь с выбором услуг</h4>
            </div>
            
            <div class="contact-container">
                <div class="contact-form animate">
                    <h3 style="font-size: 2.6rem; margin-bottom: 30px; color: var(--primary-color);">Написать нам</h3>
                    
                    <form name="sentMessage" id="contactForm" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        <div class="form-group">
                            <label class="form-label" for="name">Ваше имя</label>
                            <input type="text" name="name" id="name" class="form-control" required
                                data-validation-required-message="Пожалуйста, введите ваше имя"
                                value="{{ old('name') }}" />
                            @error('name')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="email">Ваш Email</label>
                            <input type="email" name="email" id="email" class="form-control" required
                                data-validation-required-message="Пожалуйста, введите ваш email"
                                value="{{ old('email') }}" />
                            @error('email')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="message">Сообщение</label>
                            <textarea name="message" id="message" required class="form-control"
                                data-validation-required-message="Пожалуйста, введите ваше сообщение" minlength="5"
                                data-validation-minlength-message="Минимум 5 символов"
                                maxlength="999" style="resize:none">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn-primary">
                            <i class="fas fa-paper-plane"></i> Отправить сообщение
                        </button>
                    </form>
                </div>
                
                <div class="contact-info animate">
                    <h3>Контактная информация</h3>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Наш адрес</h3>
                                <h4>г. Челябинск, ул. Гагарина, 7</h4>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Телефон</h3>
                                <h4>+7 (351) 123-45-67</h4>
                                <h4>+7 (900) 123-45-67</h4>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email</h3>
                                <h4>info@fitrus-premium.ru</h4>
                                <h4>support@fitrus-premium.ru</h4>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Часы работы</h3>
                                <h4>Пн-Пт: 9:00 - 00:00</h4>
                                <h4>Сб: 10:00 - 22:00</h4>
                                <h4>Вс: 10:00 - 21:00</h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <i class="fab fa-vk"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="map-container animate">
                <iframe src="https://maps.google.com/maps?width=100%&height=600&hl=ru&q=55.160026,61.402585&ie=UTF8&t=&z=14&iwloc=B&output=embed"></iframe>
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
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: "#bf4800" },
                shape: { type: "circle", stroke: { width: 0, color: "#000000" } },
                opacity: { value: 0.5, random: true },
                size: { value: 3, random: true },
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
                    onhover: { enable: true, mode: "repulse" },
                    onclick: { enable: true, mode: "push" },
                    resize: true
                }
            },
            retina_detect: true
        });

        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);

        // Animate elements on scroll
        document.querySelectorAll('.animate').forEach(el => {
            gsap.fromTo(el, 
                { y: 50, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: el,
                        start: "top 85%",
                        toggleActions: "play none none none"
                    }
                }
            );
        });

        // Floating animation for hero image
        gsap.to('.hero-image', {
            y: -20,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });

        // Hover effect for contact cards
        document.querySelectorAll('.contact-form, .contact-info, .map-container').forEach(card => {
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

        // Auto-focus on first input
        document.addEventListener('DOMContentLoaded', function() {
            const firstInput = document.querySelector('input');
            if (firstInput) {
                firstInput.focus();
            }
        });
    </script>
</body>
</html>