<!DOCTYPE html>
<?php
session_start();
?>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Тренажеры нашего зала | Фит-Рус Премиум</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Современные тренажеры для всех видов тренировок - кардио, силовые, функциональные. Профессиональное оборудование." />
    <meta name="author" content="Фитнес-клуб Премиум" />
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
            --section-padding: 100px 0;
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
            max-width: 800px;
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
            background: url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80') center/cover no-repeat;
            border-radius: var(--card-border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .hero-image:hover {
            transform: translateY(-50%) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        /* Section Title */
        .section-title {
            text-align: center;
            margin-bottom: 60px;
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

        /* Equipment Section */
        .equipment-section {
            padding: var(--section-padding);
            position: relative;
            overflow: hidden;
        }

        .equipment-section:nth-child(even) {
            background: linear-gradient(135deg, rgba(241, 241, 241, 0.8) 0%, rgba(255, 255, 255, 0.9) 100%);
        }

        .equipment-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .equipment-content {
            padding: 30px;
        }

        .equipment-title {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 30px;
            letter-spacing: -0.02em;
        }

        .equipment-description {
            font-size: 1.8rem;
            color: var(--light-text);
            margin-bottom: 40px;
            line-height: 1.7;
        }

        .equipment-features {
            list-style: none;
            margin: 30px 0;
        }

        .equipment-features li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 40px;
            font-size: 1.4rem;
            line-height: 1.6;
        }

        .equipment-features li:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: var(--accent-color);
            font-size: 1.2rem;
        }

        .equipment-image {
            position: relative;
            overflow: hidden;
            border-radius: var(--card-border-radius);
            box-shadow: var(--shadow);
            height: 500px;
            transition: var(--transition);
        }

        .equipment-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .equipment-image:hover img {
            transform: scale(1.05);
        }

        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            color: #fff;
        }

        .image-overlay h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        /* Equipment Cards */
        .cards-section {
            padding: var(--section-padding);
            background: var(--bg-color);
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .equipment-card {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .equipment-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-hover);
        }

        .card-header {
            padding: 25px;
            text-align: center;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
        }

        .card-body {
            padding: 30px;
        }

        .card-image {
            height: 200px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .equipment-card:hover .card-image img {
            transform: scale(1.1);
        }

        .card-features {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .card-features li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }

        .card-features li:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--accent-color);
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

        .accordion-image {
            height: 200px;
            overflow: hidden;
            border-radius: 10px;
            margin: 20px 0;
        }

        .accordion-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Tips Section */
        .tips-section {
            padding: var(--section-padding);
            background: var(--secondary-color);
            color: #fff;
        }

        .tips-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .tips-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .tip-card {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border-radius: var(--card-border-radius);
            border: 1px solid var(--glass-border);
            padding: 40px;
            transition: var(--transition);
        }

        .tip-card:hover {
            transform: translateY(-15px);
            background: rgba(191, 72, 0, 0.2);
        }

        .tip-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #fff;
            position: relative;
            padding-bottom: 15px;
        }

        .tip-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--accent-color);
        }

        .tip-content p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 20px;
        }

        .tip-list {
            list-style: none;
            padding: 0;
        }

        .tip-list li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }

        .tip-list li:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--accent-color);
        }

        /* CTA Section */
        .cta-section {
            padding: 120px 0;
            background: linear-gradient(135deg, #000 0%, #1d1d1f 100%);
            color: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 30px;
            letter-spacing: -0.02em;
        }

        .cta-subtitle {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 50px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            display: inline-block;
            padding: 18px 45px;
            background: var(--accent-color);
            color: #fff;
            font-size: 1.2rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 50px;
            transition: var(--transition);
            box-shadow: 0 10px 30px rgba(191, 72, 0, 0.3);
        }

        .cta-button:hover {
            background: #d9530d;
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(191, 72, 0, 0.4);
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
            
            .cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .tips-grid {
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
            
            .equipment-grid {
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
            
            .cards-grid, .tips-grid {
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
            
            .cta-title {
                font-size: 2.5rem;
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
                <h1 class="hero-title">Тренажеры <span style="color: var(--accent-color);">премиум-класса</span></h1>
                <p class="hero-subtitle">Наш зал оснащен лучшими тренажерами от ведущих мировых производителей. <br>Мы регулярно обновляем оборудование, чтобы обеспечить вам комфортные и эффективные тренировки.</p>
            </div>
        </div>
        <div class="hero-image floating"></div>
        <div id="particles-js"></div>
    </section>

    <!-- Cardio Equipment Section -->
    <section class="equipment-section">
        <div class="container">
            <div class="section-title animate">
                <h2>Кардио тренажеры</h2>
                <h4>Развивайте выносливость, сжигайте калории и укрепляйте сердечно-сосудистую систему</h4>
            </div>
            
            <div class="equipment-grid">
                <div class="equipment-content animate">
                    <h2 class="equipment-title">Современные кардио решения</h2>
                    <p class="equipment-description">Наши кардио тренажеры оснащены инновационными технологиями, которые делают тренировки не только эффективными, но и комфортными. Отслеживайте свой прогресс в реальном времени с помощью интегрированных систем мониторинга.</p>
                    
                    <ul class="equipment-features">
                        <li>Беговые дорожки Matrix TF50 с интерактивными дисплеями</li>
                        <li>Эллиптические тренажеры Life Fitness с 25 уровнями сопротивления</li>
                        <li>Велотренажеры TechnoGym с беспроводным мониторингом пульса</li>
                        <li>Гребные тренажеры Concept2 с точным измерением производительности</li>
                        <li>Степперы StairMaster с регулируемой интенсивностью</li>
                    </ul>
                </div>
                
                <div class="equipment-image animate">
                    <img src="img/беговая.jpg" alt="Кардио тренажеры">
                    <div class="image-overlay">
                        <h3>Кардио зона</h3>
                        <p>Современные тренажеры для эффективных кардио тренировок</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Strength Equipment Cards -->
    <section class="cards-section">
        <div class="container">
            <div class="section-title animate">
                <h2>Силовые тренажеры</h2>
                <h4>Профессиональное оборудование для развития силы и мышечной массы</h4>
            </div>
            
            <div class="cards-grid">
                <div class="equipment-card animate">
                    <div class="card-header" style="background: linear-gradient(135deg, #e74c3c, #e67e22);">
                        Жим ногами
                    </div>
                    <div class="card-body">
                        <div class="card-image">
                            <img src="img/жимногами.jpg" alt="Жим ногами">
                        </div>
                        <p>Тренажер для проработки мышц ног и ягодиц с регулируемой нагрузкой.</p>
                        <ul class="card-features">
                            <li>Макс. нагрузка: 300 кг</li>
                            <li>Регулируемый угол наклона</li>
                            <li>Безопасные фиксаторы</li>
                            <li>Эргономичное сиденье</li>
                        </ul>
                    </div>
                </div>
                
                <div class="equipment-card animate">
                    <div class="card-header" style="background: linear-gradient(135deg, #3498db, #2980b9);">
                        Тренажер для спины
                    </div>
                    <div class="card-body">
                        <div class="card-image">
                            <img src="img/спина.jpg" alt="Тренажер для спины">
                        </div>
                        <p>Идеален для укрепления мышц спины и улучшения осанки.</p>
                        <ul class="card-features">
                            <li>Изолированная проработка</li>
                            <li>Регулируемое сиденье</li>
                            <li>Поддержка поясницы</li>
                            <li>Плавная регулировка веса</li>
                        </ul>
                    </div>
                </div>
                
                <div class="equipment-card animate">
                    <div class="card-header" style="background: linear-gradient(135deg, #9b59b6, #8e44ad);">
                        Свободные веса
                    </div>
                    <div class="card-body">
                        <div class="card-image">
                            <img src="img/гантели.jpg" alt="Свободные веса">
                        </div>
                        <p>Профессиональные гантели, штанги и скамьи для функциональных тренировок.</p>
                        <ul class="card-features">
                            <li>Гантели от 1 до 50 кг</li>
                            <li>Олимпийские штанги</li>
                            <li>Регулируемые скамьи</li>
                            <li>Силовые рамы</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Free Weights Section -->
    <section class="equipment-section">
        <div class="container">
            <div class="section-title animate">
                <h2>Зона свободных весов</h2>
                <h4>Профессиональное оборудование для функционального тренинга</h4>
            </div>
            
            <div class="equipment-grid">
                <div class="equipment-image animate">
                    <img src="img/тренинг.jpg" alt="Зона свободных весов">
                    <div class="image-overlay">
                        <h3>Функциональный тренинг</h3>
                        <p>Пространство для комплексных тренировок</p>
                    </div>
                </div>
                
                <div class="equipment-content animate">
                    <h2 class="equipment-title">Профессиональное оборудование</h2>
                    <p class="equipment-description">Наша зона свободных весов оснащена всем необходимым для полноценных функциональных тренировок. От гантелей и штанг до профессиональных стоек и скамей - все оборудование от ведущих мировых производителей.</p>
                    
                    <ul class="equipment-features">
                        <li>Полный набор гантелей от 1 до 50 кг с шагом 1 кг</li>
                        <li>Олимпийские грифы (20 кг) и EZ-грифы (12 кг)</li>
                        <li>Профессиональные силовые рамы и стойки</li>
                        <li>Регулируемые скамьи для жима и гиперэкстензии</li>
                        <li>Зона функционального тренинга с гирями, медболами и резиновыми петлями</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Accordion Section -->
    <section class="accordion-section">
        <div class="container">
            <div class="section-title animate">
                <h2>Как правильно использовать тренажеры</h2>
                <h4>Советы от наших профессиональных тренеров</h4>
            </div>
            
            <div class="accordion-container">
                <div class="accordion-item animate">
                    <div class="accordion-header">
                        <span>Безопасность прежде всего</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Перед началом тренировки обязательно проверьте настройки тренажера. Убедитесь, что сиденье и спинка отрегулированы под ваш рост. Начинайте с небольшого веса и постепенно увеличивайте нагрузку.</p>
                        <ul class="card-features">
                            <li>Всегда проверяйте фиксаторы</li>
                            <li>Используйте страховочные замки</li>
                            <li>Не превышайте допустимый вес</li>
                            <li>Обращайтесь к тренеру при сомнениях</li>
                        </ul>
                    </div>
                </div>
                
                <div class="accordion-item animate">
                    <div class="accordion-header">
                        <span>Правильная техника</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Следите за осанкой во время выполнения упражнений. Движения должны быть плавными и контролируемыми. Избегайте рывков и раскачиваний. Если не уверены в технике - обратитесь к тренеру.</p>
                        <ul class="card-features">
                            <li>Держите спину прямо</li>
                            <li>Контролируйте движение</li>
                            <li>Дышите правильно</li>
                            <li>Выполняйте полную амплитуду</li>
                        </ul>
                    </div>
                </div>
                
                <div class="accordion-item animate">
                    <div class="accordion-header">
                        <span>Комбинация тренажеров</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Для комплексного развития тела сочетайте кардио и силовые тренажеры. Начните с 10-15 минут кардио для разминки, затем перейдите к силовым упражнениям, завершите тренировку снова кардио для заминки.</p>
                        <div class="cards-grid" style="margin-top: 30px;">
                            <div class="equipment-card">
                                <div class="card-header" style="background: linear-gradient(135deg, #e74c3c, #e67e22);">
                                    Разминка
                                </div>
                                <div class="card-body">
                                    <p>Кардио 10-15 мин</p>
                                    <ul class="card-features">
                                        <li>Беговая дорожка</li>
                                        <li>Эллипсоид</li>
                                        <li>Велотренажер</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="equipment-card">
                                <div class="card-header" style="background: linear-gradient(135deg, #3498db, #2980b9);">
                                    Основная часть
                                </div>
                                <div class="card-body">
                                    <p>Силовые упражнения</p>
                                    <ul class="card-features">
                                        <li>Жим ногами</li>
                                        <li>Тренажер для спины</li>
                                        <li>Свободные веса</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="equipment-card">
                                <div class="card-header" style="background: linear-gradient(135deg, #9b59b6, #8e44ad);">
                                    Заминка
                                </div>
                                <div class="card-body">
                                    <p>Кардио 5-10 мин</p>
                                    <ul class="card-features">
                                        <li>Гребной тренажер</li>
                                        <li>Степпер</li>
                                        <li>Велотренажер</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips Section -->
    <section class="tips-section">
        <div class="container">
            <div class="section-title animate">
                <h2 style="color: #fff;">Рекомендации по тренировкам</h2>
                <p style="color: rgba(255, 255, 255, 0.7);">Максимизируйте эффективность ваших тренировок</p>
            </div>
            
            <div class="tips-grid">
                <div class="tip-card animate">
                    <h3 class="tip-title">Индивидуальный подход</h3>
                    <div class="tip-content">
                        <p>Наши тренеры разработают персональную программу тренировок с учетом ваших целей и физических возможностей.</p>
                        <ul class="tip-list">
                            <li>Персональная консультация</li>
                            <li>Программа под ваши цели</li>
                            <li>Корректировка по мере прогресса</li>
                        </ul>
                    </div>
                </div>
                
                <div class="tip-card animate">
                    <h3 class="tip-title">Регулярность тренировок</h3>
                    <div class="tip-content">
                        <p>Для достижения видимых результатов важно придерживаться регулярного графика тренировок.</p>
                        <ul class="tip-list">
                            <li>Оптимально 3-4 раза в неделю</li>
                            <li>Чередование групп мышц</li>
                            <li>Восстановление между тренировками</li>
                        </ul>
                    </div>
                </div>
                
                <div class="tip-card animate">
                    <h3 class="tip-title">Питание и восстановление</h3>
                    <div class="tip-content">
                        <p>Правильное питание и восстановление - важные составляющие вашего прогресса.</p>
                        <ul class="tip-list">
                            <li>Сбалансированное питание</li>
                            <li>Достаточное потребление воды</li>
                            <li>Качественный сон и отдых</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <!-- <section class="cta-section">
        <div class="container">
            <div class="cta-content animate">
                <h2 class="cta-title">Готовы начать тренировки на профессиональном оборудовании?</h2>
                <p class="cta-subtitle">Запишитесь на бесплатную экскурсию по залу и первую тренировку с тренером</p>
                <a href="contact.html" class="cta-button pulse">Записаться сейчас</a>
            </div>
        </div>
    </section> -->

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

        // Hover effect for equipment cards
        document.querySelectorAll('.equipment-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card, {
                    scale: 1.02,
                    duration: 0.3,
                    ease: "power2.out"
                });
            });
            
            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    scale: 1,
                    duration: 0.5,
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