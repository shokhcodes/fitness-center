<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Профиль | Фит-Рус Премиум</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Управление профилем пользователя" />
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
            height: 50vh;
            min-height: 500px;
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
            text-align: center;
            margin: 0 auto;
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
            margin: 0 auto 40px;
        }

        /* .hero-image {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 50%;
            max-width: 800px;
            height: 70%;
            background: url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80') center/cover no-repeat;
            border-radius: var(--card-border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .hero-image:hover {
            transform: translateY(-50%) scale(1.02);
            box-shadow: var(--shadow-hover);
        } */

        /* Profile Section */
        .profile-section {
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

        .profile-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-top: 50px;
        }

        @media (max-width: 992px) {
            .profile-container {
                grid-template-columns: 1fr;
            }
        }

        .profile-card {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            padding: 50px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border-top: 4px solid var(--accent-color);
        }

        .profile-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .profile-card h3 {
            font-size: 2rem;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .profile-card h3 i {
            color: var(--accent-color);
            font-size: 1.8rem;
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
            padding: 16px 20px;
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
            width: 100%;
            justify-content: center;
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

        .alert-danger {
            background: rgba(231, 76, 60, 0.15);
            color: #e74c3c;
            border: 1px solid rgba(231, 76, 60, 0.3);
            margin-bottom: 30px;
        }

        .alert-danger ul {
            margin: 10px 0 0 20px;
        }

        /* Features */
        .features {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .feature {
            display: flex;
            align-items: center;
            background: white;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            animation: fadeInUp 0.6s ease forwards;
        }

        .feature:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-hover);
        }

        .feature i {
            font-size: 28px;
            color: var(--accent-color);
            margin-right: 15px;
        }

        .feature p {
            margin: 0;
            font-size: 1.2rem;
            color: var(--dark-color);
        }

        /* User Data */
        .user-data {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            padding: 30px;
            margin-top: 40px;
            box-shadow: var(--shadow);
            border-top: 4px solid var(--accent-color);
            animation: fadeInUp 0.6s ease forwards;
            display: none;
        }

        .user-data h3 {
            font-size: 1.8rem;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-data h3 i {
            color: var(--accent-color);
        }

        .user-data p {
            margin-bottom: 15px;
            font-size: 1.1rem;
            padding-left: 10px;
            border-left: 3px solid var(--accent-color);
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

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fadeInUp {
            animation: fadeInUp 0.6s ease forwards;
        }

        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }

        /* Responsive */
        @media (max-width: 1200px) {
            .hero-title {
                font-size: 3.8rem;
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
            
            .profile-card {
                padding: 30px;
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
            
            .features {
                flex-direction: column;
                align-items: center;
            }
            
            .feature {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.3rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .profile-card {
                padding: 25px 20px;
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
                <h1 class="hero-title">Ваш <span style="color: var(--accent-color);">Профиль</span></h1>
                <p class="hero-subtitle">Управляйте личной информацией, абонементами и настройками вашего аккаунта</p>
                <div class="features">
                    <div class="feature fadeInUp delay-1">
                        <i class="fas fa-user-check"></i>
                        <p><strong>Регистрация/Авторизация:</strong> Войдите или создайте аккаунт</p>
                    </div>
                    <div class="feature fadeInUp delay-2">
                        <i class="fas fa-id-card"></i>
                        <p><strong>Абонементы:</strong> Просмотрите ваши активные абонементы</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-image floating"></div>
        <div id="particles-js"></div>
    </section>

    <!-- Profile Section -->
    <section class="profile-section">
        <div class="container">
            <div class="section-title animate">
                <h2>Управление профилем</h2>
                <h4>Измените свои данные или войдите в существующий аккаунт</h4>
            </div>
            
            <div class="profile-container">
                <div class="profile-card animate delay-1">
                    <h2><i class="fas fa-sign-in-alt"></i> Вход в аккаунт</h2>
                    <h4>Войдите в ваш аккаунт, чтобы получить доступ к персональным данным и абонементам</h4>
                    
                    <form method="POST" action="{{ route('login') }}" id="loginForm">
                        @csrf
                        
                        <div class="form-group">
                            <label class="form-label" for="login_email">Email</label>
                            <input type="email" class="form-control" id="login_email" name="email" required placeholder="Ваш email">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="login_password">Пароль</label>
                            <input type="password" class="form-control" id="login_password" name="password" required placeholder="Ваш пароль">
                        </div>
                        
                        <button type="submit" class="btn-primary" onclick="return validateForm()">
                            <i class="fas fa-arrow-right"></i> Войти в аккаунт
                        </button>
                    </form>
                </div>
                
                <div class="profile-card animate delay-2">
                    <h2><i class="fas fa-user-plus"></i> Регистрация</h2>
                    <h4>Создайте новый аккаунт для доступа ко всем возможностям нашего фитнес-центра</h4>
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        @if ($errors->any())
                            <div class="alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <div class="form-group">
                            <label class="form-label" for="name">Имя</label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Ваше имя">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Ваш email">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="password">Пароль</label>
                            <input type="password" class="form-control" id="password" name="password" required placeholder="Создайте пароль">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="password_confirmation">Подтверждение пароля</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Повторите пароль">
                        </div>
                        
                        <button type="submit" class="btn-primary">
                            <i class="fas fa-user-check"></i> Зарегистрироваться
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="user-data" id="userData">
                <h3><i class="fas fa-user-circle"></i> Ваши данные</h3>
                <p id="userName"><strong>Имя:</strong> Иван Иванов</p>
                <p id="userEmail"><strong>Email:</strong> ivan@example.com</p>
                
                <h3><i class="fas fa-id-card"></i> Ваши абонементы</h3>
                <p id="userSubscriptions"><strong>Премиум-абонемент:</strong> Действителен до 31.12.2024</p>
                <p><strong>Количество посещений:</strong> 12 из 30</p>
                <p><strong>Статус:</strong> Активен</p>
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

        // Hover effect for cards
        document.querySelectorAll('.profile-card').forEach(card => {
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

        // Form validation
        function validateForm() {
            const email = document.getElementById('login_email').value;
            const password = document.getElementById('login_password').value;
            
            if (!email || !password) {
                alert('Пожалуйста, заполните все поля');
                return false;
            }
            
            // For demo purposes - show user data
            document.getElementById('userData').style.display = 'block';
            gsap.fromTo('#userData', 
                { y: 50, opacity: 0 },
                { y: 0, opacity: 1, duration: 0.8, ease: "power2.out" }
            );
            
            return true;
        }
        
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