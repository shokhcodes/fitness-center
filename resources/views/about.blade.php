<!DOCTYPE html>
<?php
session_start();
?>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>О нас | Фит-Рус Премиум</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Премиальный фитнес-клуб с современным оборудованием и индивидуальным подходом" />
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
            background: url('img/Компания2.jpg') center/cover no-repeat;
            border-radius: var(--card-border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .hero-image:hover {
            transform: translateY(-50%) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        /* About Section */
        .about-section {
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

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .feature-card {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            padding: 50px 40px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .feature-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-hover);
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

        /* Stats Section */
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
            border-radius: var(--card-border-radius);
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
        }

        .stat-text {
            font-size: 1.8rem;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Solutions Section */
        .solutions-section {
            padding: var(--section-padding);
            background: var(--bg-color);
        }

        .solutions-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            align-items: center;
        }

        .solution-content {
            padding: 30px;
        }

        .solution-title {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 30px;
            letter-spacing: -0.02em;
        }

        .solution-text {
            font-size: 1.8rem;
            color: var(--light-text);
            margin-bottom: 40px;
            line-height: 1.7;
        }

        .solution-features {
            list-style: none;
            margin: 30px 0;
        }

        .solution-features li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 40px;
            font-size: 1.4rem;
            line-height: 1.6;
        }

        .solution-features li:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: var(--accent-color);
            font-size: 1.2rem;
        }

        .solution-image {
            height: 500px;
            border-radius: var(--card-border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            background: url('img/Подход2.jpg') center/cover no-repeat;
        }

        .solution-image:hover {
            transform: scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        /* Accordion Section */
        .accordion-section {
            padding: var(--section-padding);
            background: linear-gradient(135deg, #f5f5f7 0%, #e9e9ed 100%);
        }

        .accordion-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .accordion-item {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            margin-bottom: 20px;
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .accordion-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .accordion-header {
            padding: 25px 30px;
            font-size: 1.6rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--card-bg);
            transition: var(--transition);
        }

        .accordion-header:hover {
            background: #f9f9f9;
        }

        .accordion-header i {
            transition: var(--transition);
        }

        .accordion-item.active .accordion-header i {
            transform: rotate(180deg);
        }

        .accordion-content {
            padding: 0 30px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease, padding 0.5s ease;
        }

        .accordion-item.active .accordion-content {
            padding: 0 30px 30px;
            max-height: 500px;
        }

        .accordion-content p {
            color: var(--light-text);
            line-height: 1.7;
            font-size: 1.6rem;
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: var(--section-padding);
            background: var(--secondary-color);
            color: #fff;
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
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border-radius: var(--card-border-radius);
            border: 1px solid var(--glass-border);
            padding: 40px;
            transition: var(--transition);
        }

        .testimonial-card:hover {
            transform: translateY(-15px);
            background: rgba(191, 72, 0, 0.2);
        }

        .testimonial-text {
            font-size: 1.8rem;
            line-height: 1.7;
            margin-bottom: 30px;
            position: relative;
        }

        .testimonial-text:before {
            content: '\201C';
            font-size: 5rem;
            position: absolute;
            top: -20px;
            left: -15px;
            color: rgba(255, 255, 255, 0.1);
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
        }

        .testimonial-info p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
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

        /* Particles Effect */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .hero-title {
                font-size: 3.8rem;
            }

            .features-grid,
            .testimonials-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .stats-container {
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

            .solutions-container {
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

            .features-grid,
            .testimonials-grid,
            .stats-container {
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
    </style>
</head>

<body>
    @include("layouts.header")

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content animate">
                <h1 class="hero-title">О фитнес-клубе <span style="color: var(--accent-color);">Фит-Рус</span></h1>
                <p class="hero-subtitle">Премиальный фитнес-центр с современным оборудованием, профессиональными тренерами и уникальной атмосферой для достижения ваших целей.</p>
            </div>
        </div>
        <div class="hero-image floating">
            <img src="img/Компания2.jpg" alt="О фитнес-клубе" loading="lazy" width="800" height="560" style="width: 100%; height: 100%; object-fit: cover; border-radius: var(--card-border-radius); box-shadow: var(--shadow);">
        </div>
        <div id="particles-js"></div>
    </section>

    <!-- About Section -->
    <!-- <section class="about-section">
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
    </section> -->

    <!-- Stats Section -->
    <!-- <section class="stats-section">
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
    </section> -->

    <!-- Solutions Section -->
    <section class="solutions-section">
        <div class="container">
            <div class="solutions-container">
                <div class="solution-content">
                    <h2 class="solution-title">Наш подход к фитнесу</h2>
                    <p class="solution-text">Мы создаем персонализированный опыт, который помогает каждому клиенту достигать своих целей в фитнесе и здоровом образе жизни.</p>

                    <ul class="solution-features">
                        <li>Персонализированный подход: индивидуальные программы тренировок</li>
                        <li>Удобное расположение: центральный район с парковкой</li>
                        <li>Чистое и безопасное пространство: гигиена и комфорт</li>
                        <li>Разнообразие тренажёров: для всех групп мышц</li>
                        <li>Контроль тренеров: правильная техника и безопасность</li>
                        <li>Мотивирующая атмосфера: сообщество единомышленников</li>
                    </ul>
                </div>

                <div class="solution-image animate"></div>
            </div>
        </div>
    </section>

    <!-- Accordion Section -->
    <section class="accordion-section">
        <div class="container">
            <div class="section-title animate">
                <h2>Наши преимущества</h2>
                <h4>Узнайте, что делает наш фитнес-клуб особенным</h4>
            </div>

            <div class="accordion-container">
                <div class="accordion-item animate">
                    <div class="accordion-header">
                        <span>Разнообразие тренажёров</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>В зале можно найти множество тренажёров, которые позволят тренировать разные группы мышц. Это позволяет создавать индивидуальные программы тренировок для достижения конкретных целей. Мы постоянно обновляем оборудование, чтобы предоставлять нашим клиентам самые современные решения для фитнеса.</p>
                    </div>
                </div>

                <div class="accordion-item animate">
                    <div class="accordion-header">
                        <span>Профессиональные тренеры</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>В тренажёрном зале работают опытные тренеры, которые помогут правильно настроить тренажёры и выполнить упражнения с максимальной эффективностью и безопасностью. Все наши тренеры имеют международные сертификаты и регулярно проходят повышение квалификации.</p>
                    </div>
                </div>

                <div class="accordion-item animate">
                    <div class="accordion-header">
                        <span>Мотивирующая атмосфера</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>В тренажёрном зале люди окружены теми, кто так же стремится к своим целям. Это создаёт атмосферу мотивации и поддержки, которая поможет достигнуть лучших результатов. Мы регулярно проводим групповые мероприятия и соревнования для поддержания мотивации.</p>
                    </div>
                </div>

                <div class="accordion-item animate">
                    <div class="accordion-header">
                        <span>Гибкий график занятий</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>О комфортном времени клиент договаривается индивидуально, а при необходимости переносит занятие. Мы работаем с 7:00 до 23:00 без выходных, чтобы каждый мог найти удобное время для тренировок.</p>
                    </div>
                </div>

                <div class="accordion-item animate">
                    <div class="accordion-header">
                        <span>Чистота и гигиена</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>В тренажёрном зале должны быть станции дезинфекции и специальные места для очистки оборудования. Мы придерживаемся высочайших стандартов чистоты и гигиены, с регулярной санитарной обработкой всех помещений и оборудования.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-title animate">
                <h2 style="color: #fff;">Отзывы клиентов</h2>
                <h4 style="color: #fff;">Что говорят наши клиенты о нашем клубе</h4>
            </div>

            <div class="testimonials-container">
                <div class="testimonials-grid">
                    <div class="testimonial-card animate">
                        <div class="testimonial-text">
                            "Фит-Рус изменил мой подход к тренировкам. Индивидуальная программа и поддержка тренера помогли мне достичь цели, которую я считал невозможной. Атмосфера здесь вдохновляет!"
                        </div>
                        <div class="testimonial-author">
                            <img src="img/Анна.jpg" alt="Анна" class="testimonial-avatar" loading="lazy" width="100" height="100">
                            <div class="testimonial-info">
                                <h4>Анна Иванова</h4>
                                <p>Клиентка 2 года</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card animate">
                        <div class="testimonial-text">
                            "Профессионализм тренеров и качество оборудования превосходят все ожидания. За 6 месяцев тренировок я достиг результатов, которые не мог получить за 2 года в других клубах."
                        </div>
                        <div class="testimonial-author">
                            <img src="img/Максим.jpg" alt="Максим" class="testimonial-avatar" loading="lazy" width="100" height="100">
                            <div class="testimonial-info">
                                <h4>Максим Петров</h4>
                                <p>Клиент 6 месяцев</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card animate">
                        <div class="testimonial-text">
                            "Чистота, современное оборудование и дружелюбная атмосфера - вот что отличает Фит-Рус. Особенно ценю онлайн-поддержку тренера между тренировками. Это действительно премиум-сервис!"
                        </div>
                        <div class="testimonial-author">
                            <img src="img/Екатерина.jpg" alt="Екатерина" class="testimonial-avatar" loading="lazy" width="100" height="100">
                            <div class="testimonial-info">
                                <h4>Екатерина Смирнова</h4>
                                <p>Клиентка 1 год</p>
                            </div>
                        </div>
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

        // Accordion functionality
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const item = header.parentElement;
                const isActive = item.classList.contains('active');

                // Close all items
                document.querySelectorAll('.accordion-item').forEach(i => {
                    i.classList.remove('active');
                });

                // Open clicked item if it was closed
                if (!isActive) {
                    item.classList.add('active');
                }
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

        // Floating animation for hero image
        gsap.to('.hero-image', {
            y: -20,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
    </script>
</body>

</html>