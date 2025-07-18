<!DOCTYPE html>
<?php
session_start();
?>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Политика конфиденциальности | Фит-Рус Премиум</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Политика конфиденциальности фитнес-клуба Фит-Рус Премиум" />
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
            --section-padding: 80px 0;
            --card-border-radius: 20px;
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
        }

        .container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 40px;
        }

        /* Hero Section - Увеличенные шрифты */
        .privacy-hero {
            padding: 140px 0 90px;
            background: linear-gradient(135deg, #000 0%, #1d1d1f 100%);
            color: #fff;
            text-align: center;
        }

        .privacy-hero h1 {
            font-size: 4.5rem; /* Увеличено с 3.5rem */
            font-weight: 700;
            margin-bottom: 25px;
        }

        .privacy-hero p {
            font-size: 2.2rem; /* Увеличено с 1.4rem */
            color: rgba(255, 255, 255, 0.8);
            max-width: 900px;
            margin: 0 auto;
            line-height: 1.5;
        }

        /* Content Section */
        .privacy-content {
            padding: 100px 0; /* Увеличено */
        }

        .content-block {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            padding: 60px 50px; /* Увеличено */
            margin-bottom: 50px; /* Увеличено */
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08); /* Усилена тень */
        }

        /* Увеличенные шрифты для заголовков и текста */
        .content-block h2 {
            font-size: 3.0rem; /* Увеличено с 2.2rem */
            margin-bottom: 35px; /* Увеличено */
            color: var(--accent-color);
            position: relative;
            padding-bottom: 20px; /* Увеличено */
        }

        .content-block h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100px; /* Увеличено */
            height: 5px; /* Увеличено */
            background: var(--accent-color);
        }

        .content-block p {
            margin-bottom: 25px; /* Увеличено */
            line-height: 1.8;
            color: var(--text-color);
            font-size: 1.8rem; /* Увеличено */
        }

        .content-block ul {
            padding-left: 40px; /* Увеличено */
            margin: 30px 0; /* Увеличено */
        }

        .content-block li {
            margin-bottom: 18px; /* Увеличено */
            position: relative;
            padding-left: 35px; /* Увеличено */
            font-size: 1.8rem; /* Увеличено */
            line-height: 1.6;
        }

        .content-block li:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 5px; /* Отрегулировано */
            color: var(--accent-color);
            font-size: 1.6rem; /* Увеличено */
        }

        /* Last Updated - Увеличенный шрифт */
        .last-updated {
            text-align: center;
            color: var(--light-text);
            font-size: 1.6rem; /* Увеличено с 1.1rem */
            margin-top: 60px; /* Увеличено */
            padding-top: 30px; /* Увеличено */
            border-top: 1px solid #eee;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .privacy-hero h1 {
                font-size: 3.8rem;
            }
            
            .privacy-hero p {
                font-size: 1.9rem;
            }
            
            .content-block h2 {
                font-size: 2.5rem;
            }
            
            .content-block p,
            .content-block li {
                font-size: 1.6rem;
            }
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 0 30px;
            }
            
            .privacy-hero {
                padding: 100px 0 60px;
            }
            
            .privacy-hero h1 {
                font-size: 3.2rem;
            }
            
            .privacy-hero p {
                font-size: 1.6rem;
            }
            
            .privacy-content {
                padding: 70px 0;
            }
            
            .content-block {
                padding: 40px 30px;
            }
            
            .content-block h2 {
                font-size: 2.0rem;
                padding-bottom: 15px;
            }
            
            .content-block p,
            .content-block li {
                font-size: 1.4rem;
            }
            
            .content-block li {
                padding-left: 30px;
            }
            
            .last-updated {
                font-size: 1.3rem;
            }
        }
        
        @media (max-width: 576px) {
            .privacy-hero h1 {
                font-size: 2.8rem;
            }
            
            .privacy-hero p {
                font-size: 1.4rem;
            }
            
            .content-block h2 {
                font-size: 1.8rem;
            }
            
            .content-block p,
            .content-block li {
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body>
    @include("layouts.header")

    <!-- Hero Section -->
    <section class="privacy-hero">
        <div class="container">
            <h1>Политика конфиденциальности</h1>
            <p>Ваша конфиденциальность важна для нас. Узнайте, как мы защищаем ваши данные.</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="privacy-content">
        <div class="container">
            <div class="content-block">
                <h2>Сбор информации</h2>
                <p>Мы собираем только необходимую информацию для предоставления наших услуг:</p>
                <ul>
                    <li>Контактные данные при регистрации</li>
                    <li>Информация о состоянии здоровья для безопасных тренировок</li>
                    <li>Данные об использовании нашего сайта и приложения</li>
                </ul>
            </div>

            <div class="content-block">
                <h2>Использование данных</h2>
                <p>Ваши данные используются исключительно для:</p>
                <ul>
                    <li>Персонализации тренировочного процесса</li>
                    <li>Обеспечения безопасности во время занятий</li>
                    <li>Информирования о новых услугах и акциях</li>
                    <li>Улучшения качества наших сервисов</li>
                </ul>
            </div>

            <div class="content-block">
                <h2>Защита данных</h2>
                <p>Мы используем современные методы защиты информации:</p>
                <ul>
                    <li>Шифрование передаваемых данных</li>
                    <li>Регулярные проверки безопасности</li>
                    <li>Ограниченный доступ к персональным данным</li>
                </ul>
                <p>Ваши данные никогда не передаются третьим лицам без вашего согласия, за исключением случаев, предусмотренных законодательством.</p>
            </div>

            <div class="last-updated">
                Последнее обновление: 01 июня 2025 года
            </div>
        </div>
    </section>

    @include("layouts.footer")
</body>

</html>