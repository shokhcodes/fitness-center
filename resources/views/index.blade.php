<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фит-Рус | Премиум фитнес-центр</title>
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
        .hero {
            height: 93vh;
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
            font-size: 5.5rem;
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
            width: 60%;
            max-width: 1000px;
            height: 80%;
            background: url('img/Главная2.jpg') center/cover no-repeat;
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Features Section */
        .features {
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
        }

        .section-title p {
            font-size: 1.4rem;
            color: var(--light-text);
            max-width: 700px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .feature-card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 50px 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--accent-color);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.6s ease;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-icon {
            font-size: 3.5rem;
            color: var(--accent-color);
            margin-bottom: 30px;
            transition: var(--transition);
        }

        .feature-card:hover .feature-icon {
            transform: rotate(10deg) scale(1.1);
        }

        .feature-card h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .feature-card p {
            color: var(--light-text);
            font-size: 1.1rem;
            line-height: 1.7;
        }

        /* Interactive Stats */
        .stats-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #000 0%, #1d1d1f 100%);
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            text-align: center;
        }

        .stat-item {
            padding: 40px 20px;
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid var(--glass-border);
            transition: var(--transition);
        }

        .stat-item:hover {
            transform: translateY(-15px);
            background: rgba(191, 72, 0, 0.2);
        }

        .stat-number {
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 15px;
            color: var(--accent-color);

            /* background: linear-gradient(to right, #ff8a00, #da1b60); */
            /* -webkit-text-fill-color: transparent; */
        }

        .stat-text {
            font-size: 1.8rem;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Gallery Section */
        .gallery {
            padding: var(--section-padding);
            background: var(--secondary-color);
            color: #fff;
        }

        .gallery .section-title h2 {
            color: #fff;
        }

        .gallery .section-title p {
            color: rgba(255, 255, 255, 0.7);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-top: 60px;
        }

        .gallery-item {
            position: relative;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            perspective: 1000px;
        }

        .gallery-item-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.8s;
        }

        /* Убираем анимацию вращения и масштабирования при наведении */
        /*
        .gallery-item:hover .gallery-item-inner {
            transform: rotateY(15deg) rotateX(10deg);
        }
        */

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1); */
        }

        /*
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        */

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 40px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            /* Оставляем текст видимым без анимации */
            transform: translateY(0);
            transition: none;
        }

        /*
        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }
        */

        .gallery-overlay h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .gallery-overlay p {
            color: rgba(255, 255, 255, 0.7);
        }

        /* Trainers Section */
        .trainers {
            padding: var(--section-padding);
            background: var(--bg-color);
        }

        .trainers-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .trainer-card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            transition: var(--transition);
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .trainer-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
        }

        .trainer-image {
            height: 350px;
            overflow: hidden;
        }

        .trainer-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .trainer-card:hover .trainer-image img {
            transform: scale(1.1);
        }

        .trainer-info {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .trainer-info h3 {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .trainer-info p {
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .trainer-info .social-links {
            display: flex;
            justify-content: center;
            /* Центрирование иконок */
            gap: 15px;
            margin-top: auto;
            padding-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--bg-color);
            color: var(--text-color);
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--accent-color);
            color: #fff;
            transform: translateY(-3px);
        }

        /* 3D Presentation Section */
        .presentation {
            padding: 150px 0;
            background: linear-gradient(135deg, #f5f5f7 0%, #e9e9ed 100%);
            position: relative;
            overflow: hidden;
        }

        .presentation-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .presentation-content {
            width: 45%;
        }

        .presentation-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 30px;
            letter-spacing: -0.02em;
        }

        .presentation-text {
            font-size: 1.8rem;
            color: var(--light-text);
            margin-bottom: 40px;
            line-height: 1.7;
        }

        .presentation-model {
            width: 50%;
            height: 500px;
            background: url('img/Идеал2.jpg') center/cover no-repeat;
            border-radius: 20px;
            box-shadow: 0 40px 80px rgba(0, 0, 0, 0.2);
            transform: perspective(1000px) rotateY(15deg) rotateX(10deg);
            transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
        }

        .presentation-model:hover {
            transform: perspective(1000px) rotateY(0) rotateX(0);
        }

        .model-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.6s ease;
        }

        .presentation-model:hover .model-overlay {
            opacity: 1;
        }

        .model-button {
            padding: 15px 40px;
            background: var(--accent-color);
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 10px 30px rgba(191, 72, 0, 0.3);
        }

        .model-button:hover {
            background: #d9530d;
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
                font-size: 4.5rem;
            }

            .features-grid,
            .trainers-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 3.8rem;
            }

            .hero {
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
                height: 500px;
                margin-top: 40px;
                transform: none;
                top: 0;
            }

            .section-title h2 {
                font-size: 2.8rem;
            }

            .presentation-container {
                flex-direction: column;
            }

            .presentation-content,
            .presentation-model {
                width: 100%;
                margin-bottom: 50px;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 20px;
            }

            .hero-title {
                font-size: 3rem;
            }

            .hero-subtitle {
                font-size: 1.4rem;
            }

            .features-grid,
            .trainers-grid {
                grid-template-columns: 1fr;
            }

            .section-title h2 {
                font-size: 2.5rem;
            }

            .stats-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    @include("layouts.header")

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content animate">
                <h1 class="hero-title">Премиальный <span>фитнес-опыт</span></h1>
                <p class="hero-subtitle">Современный подход к тренировкам,<br> инновационное <br>оборудование и <br>профессиональные <br>тренеры для достижения<br> ваших целей.</p>
                <a href="#features" class="cta-button">Узнать больше</a>
            </div>
        </div>
        <div class="hero-image floating"></div>
        <div id="particles-js"></div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <div class="section-title animate">
                <h2>Почему выбирают нас</h2>
                <h4>Инновационный подход к фитнесу, созданный для ваших результатов</h4>
            </div>

            <div class="features-grid">
                <div class="feature-card animate">
                    <div class="feature-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3>Современное оборудование</h3>
                    <h4>Тренажеры последнего поколения от ведущих мировых производителей для максимальной эффективности тренировок.</h4>
                </div>

                <div class="feature-card animate">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Профессиональные тренеры</h3>
                    <h4>Команда сертифицированных специалистов с опытом работы от 5 лет. Индивидуальный подход к каждому клиенту.</h4>
                </div>

                <div class="feature-card animate">
                    <div class="feature-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Идеальное расположение</h3>
                    <h4>Центральное расположение с удобной транспортной доступностью и собственной парковкой.</h4>
                </div>

                <div class="feature-card animate">
                    <div class="feature-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Индивидуальные программы</h3>
                    <h4>Персональные тренировочные планы, разработанные с учетом ваших целей и физических особенностей.</h4>
                </div>

                <div class="feature-card animate">
                    <div class="feature-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Зона восстановления</h3>
                    <h4>Специальные зоны для восстановления после тренировок: массаж, сауна, зоны релаксации.</h4>
                </div>

                <div class="feature-card animate">
                    <div class="feature-icon">
                        <i class="fas fa-apple-alt"></i>
                    </div>
                    <h3>Здоровое питание</h3>
                    <h4>Фитнес-бар с полезными смузи, протеиновыми коктейлями и здоровыми перекусами после тренировок.</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Stats -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-container">
                <div class="stat-item animate">
                    <div class="stat-number" data-count="1200">0</div>
                    <div class="stat-text">Довольных клиентов</div>
                </div>

                <div class="stat-item animate">
                    <div class="stat-number" data-count="15">0</div>
                    <div class="stat-text">Профессиональных тренеров</div>
                </div>

                <div class="stat-item animate">
                    <div class="stat-number" data-count="50">0</div>
                    <div class="stat-text">Ежедневных тренировок</div>
                </div>

                <div class="stat-item animate">
                    <div class="stat-number" data-count="98">0</div>
                    <div class="stat-text">Успешных результатов</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-title animate">
                <h2>Наше пространство</h2>
                <h4 style="color: white;">Дизайнерский интерьер, созданный для вашего комфорта и мотивации</h4>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item animate">
                    <div class="gallery-item-inner">
                        <img src="img/Силовая.jpg" alt="Тренажерный зал" loading="lazy" width="500" height="500">
                        <div class="gallery-overlay">
                            <h3>Силовая зона</h3>
                            <p>Просторное помещение с профессиональным оборудованием</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item animate">
                    <div class="gallery-item-inner">
                        <img src="img/Кардиозона.jpg" alt="Кардиозона" loading="lazy" width="500" height="500">
                        <div class="gallery-overlay">
                            <h3>Кардио зона</h3>
                            <p>Современные тренажеры для эффективных тренировок</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item animate">
                    <div class="gallery-item-inner">
                        <img src="img/Групповое.jpg" alt="Зона групповых занятий" loading="lazy" width="500" height="500">
                        <div class="gallery-overlay">
                            <h3>Зона групповых занятий</h3>
                            <p>Просторный зал для йоги, пилатеса и функциональных тренировок</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item animate">
                    <div class="gallery-item-inner">
                        <img src="img/Отдых.jpg" alt="Зона восстановления" loading="lazy" width="500" height="500">
                        <div class="gallery-overlay">
                            <h3>Зона восстановления</h3>
                            <p>Место для отдыха и восстановления после тренировок</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trainers Section -->
    <section id="trainers" class="trainers">
        <div class="container">
            <div class="section-title animate">
                <h2> Наши тренеры</h2>
                <h4>Профессионалы с международной сертификацией и опытом работы</h4>
            </div>

            <div class="trainers-grid">
                <div class="trainer-card animate">
                    <div class="trainer-image">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=776&q=80" alt="Анна Иванова">
                    </div>
                    <div class="trainer-info">
                        <h3>Анна Иванова</h3>
                        <p>Фитнес-тренер</p>
                        <p>Специализация: Функциональный тренинг, Пилатес</p>
                        <div class="social-links">
                            <a href="https://vk.com/"><i class="fab fa-vk"></i></a>
                            <a href="https://t.me/"><i class="fab fa-telegram-plane"></i></a>
                            <a href="https://wa.me/"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <div class="trainer-card animate">
                    <div class="trainer-image">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Максим Петров">
                    </div>
                    <div class="trainer-info">
                        <h3>Максим Петров</h3>
                        <p>Тренер по бодибилдингу</p>
                        <p>Специализация: Силовые тренировки, Набор массы</p>
                        <div class="social-links">
                            <a href="https://vk.com/"><i class="fab fa-vk"></i></a>
                            <a href="https://t.me/"><i class="fab fa-telegram-plane"></i></a>
                            <a href="https://wa.me/"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <div class="trainer-card animate">
                    <div class="trainer-image">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=776&q=80" alt="Екатерина Смирнова">
                    </div>
                    <div class="trainer-info">
                        <h3>Екатерина Смирнова</h3>
                        <p>Инструктор по йоге</p>
                        <p>Специализация: Хатха-йога, Йогатерапия</p>
                        <div class="social-links">
                            <a href="https://vk.com/"><i class="fab fa-vk"></i></a>
                            <a href="https://t.me/"><i class="fab fa-telegram-plane"></i></a>
                            <a href="https://wa.me/"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <div class="trainer-card animate">
                    <div class="trainer-image">
                        <img src="https://images.unsplash.com/photo-1583864697784-a0efc8379f70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=776&q=80" alt="Дмитрий Волков">
                    </div>
                    <div class="trainer-info">
                        <h3>Дмитрий Волков</h3>
                        <p>Тренер по кроссфиту</p>
                        <p>Специализация: Функциональный тренинг, Выносливость</p>
                        <div class="social-links">
                            <a href="https://vk.com/"><i class="fab fa-vk"></i></a>
                            <a href="https://t.me/"><i class="fab fa-telegram-plane"></i></a>
                            <a href="https://wa.me/"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Отзывы наших клиентов -->
            <div class="section-title animate" style="margin-top: 80px;">
                <h2>Отзывы наших клиентов</h2>
            </div>
            <div class="reviews-grid" style="display: flex; gap: 30px; justify-content: center;">
                @foreach($reviews as $review)
                <div class="review-card animate" style="background: var(--card-bg); border-radius: 20px; padding: 30px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03); max-width: 350px;">
                    <h3 style="margin-bottom: 15px;">{{ $review->user->name }}</h3>
                    <p style="font-style: italic; color: var(--light-text);">{{ $review->text }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 3D Presentation Section -->
    <section class="presentation">
        <div class="container">
            <div class="presentation-container">
                <div class="presentation-content">
                    <h2 class="presentation-title">Идеальная среда для вашего прогресса</h2>
                    <p class="presentation-text">Наш фитнес-центр спроектирован с учетом всех аспектов эффективных тренировок. Просторные залы, зонированные пространства и профессиональное оборудование создают идеальные условия для достижения ваших целей.</p>
                    <p class="presentation-text">Каждая деталь продумана для вашего комфорта и мотивации - от эргономики тренажеров до освещения и вентиляции помещений.</p>
                    <!-- <a href="#" class="cta-button pulse">Записаться на экскурсию</a> -->
                </div>

                <div class="presentation-model">
                    <div class="model-overlay">
                        <!-- <button class="model-button">Виртуальный тур</button> -->
                    </div>
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

        // Floating animation for gallery items
        /*
        document.querySelectorAll('.gallery-item').forEach((item, index) => {
            gsap.to(item, {
                y: index % 2 === 0 ? -20 : 20,
                duration: 3,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });
        });
        */

        // Counter animation for stats
        function animateCounter() {
            document.querySelectorAll('.stat-number').forEach(counter => {
                const target = +counter.getAttribute('data-count');
                const duration = 2000;
                const startTime = Date.now();

                const updateCounter = () => {
                    const currentTime = Date.now();
                    const elapsed = currentTime - startTime;

                    if (elapsed < duration) {
                        const progress = elapsed / duration;
                        const value = Math.floor(progress * target);
                        counter.textContent = value;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };

                updateCounter();
            });
        }

        // Initialize counter animation when in view
        ScrollTrigger.create({
            trigger: ".stats-section",
            start: "top 80%",
            onEnter: animateCounter,
            once: true
        });

        // 3D effect for presentation model
        document.querySelector('.presentation-model').addEventListener('mousemove', (e) => {
            const rect = e.target.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateY = (x - centerX) / 20;
            const rotateX = (centerY - y) / 20;

            gsap.to('.presentation-model', {
                rotationY: rotateY,
                rotationX: rotateX,
                duration: 0.5
            });
        });

        document.querySelector('.presentation-model').addEventListener('mouseleave', () => {
            gsap.to('.presentation-model', {
                rotationY: 15,
                rotationX: 10,
                duration: 1,
                ease: "elastic.out(1, 0.5)"
            });
        });

        // Hover effect for feature cards
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card.querySelector('.feature-icon'), {
                    rotation: 10,
                    scale: 1.1,
                    duration: 0.5,
                    ease: "back.out(1.7)"
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card.querySelector('.feature-icon'), {
                    rotation: 0,
                    scale: 1,
                    duration: 0.7,
                    ease: "elastic.out(1, 0.5)"
                });
            });
        });
    </script>
</body>

</html>