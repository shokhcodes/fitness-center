<!DOCTYPE html>
<?php
session_start();
?>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Частые вопросы | Фит-Рус Премиум</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Ответы на частые вопросы о фитнес-клубе Фит-Рус Премиум" />
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
        .faq-hero {
            padding: 140px 0 70px;
            background: linear-gradient(135deg, #f5f5f7 0%, #e9e9ed 100%);
            text-align: center;
        }

        .faq-hero h1 {
            font-size: 4.5rem; /* Увеличено с 3.5rem */
            font-weight: 700;
            margin-bottom: 20px;
        }

        .faq-hero p {
            font-size: 2rem; /* Увеличено с 1.4rem */
            color: var(--light-text);
            max-width: 900px;
            margin: 0 auto;
            line-height: 1.5;
        }

        /* FAQ Section */
        .faq-section {
            padding: 100px 0; /* Увеличено */
        }

        .faq-container {
            max-width: 900px; /* Увеличено */
            margin: 0 auto;
        }

        .faq-item {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            margin-bottom: 30px; /* Увеличено */
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08); /* Усилена тень */
        }

        /* Увеличенные шрифты для вопросов и ответов */
        .faq-question {
            padding: 30px 40px; /* Увеличено */
            font-size: 2.2rem; /* Увеличено с 1.6rem */
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--card-bg);
            transition: all 0.3s ease;
        }

        .faq-question:hover {
            background: #f9f9f9;
        }

        .faq-question i {
            color: var(--accent-color);
            font-size: 1.8rem; /* Увеличено */
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 40px; /* Увеличено */
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease, padding 0.5s ease;
        }

        .faq-item.active .faq-answer {
            padding: 0 40px 40px; /* Увеличено */
            max-height: 500px;
        }

        .faq-answer p {
            color: var(--light-text);
            line-height: 1.8; /* Увеличено */
            font-size: 1.8rem; /* Увеличено с 1.1rem */
        }

        /* Contact CTA - Увеличенные шрифты */
        .contact-cta {
            text-align: center;
            margin-top: 60px; /* Увеличено */
            padding: 40px; /* Увеличено */
            background: linear-gradient(135deg, #000 0%, #1d1d1f 100%);
            border-radius: var(--card-border-radius);
            color: #fff;
        }

        .contact-cta h3 {
            font-size: 2.8rem; /* Увеличено с 2rem */
            margin-bottom: 30px; /* Увеличено */
            font-weight: 700;
        }

        .contact-cta a {
            display: inline-block;
            background: var(--accent-color);
            color: #fff;
            padding: 18px 50px; /* Увеличено */
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700; /* Жирнее */
            font-size: 1.6rem; /* Увеличено с 1.1rem */
            transition: all 0.3s ease;
        }

        .contact-cta a:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(191, 72, 0, 0.4); /* Усилена тень */
        }

        /* Responsive */
        @media (max-width: 992px) {
            .faq-hero h1 {
                font-size: 3.8rem;
            }
            
            .faq-hero p {
                font-size: 1.8rem;
            }
            
            .faq-question {
                font-size: 1.9rem;
                padding: 25px 30px;
            }
            
            .faq-answer p {
                font-size: 1.6rem;
            }
            
            .contact-cta h3 {
                font-size: 2.4rem;
            }
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 0 30px;
            }
            
            .faq-hero {
                padding: 100px 0 50px;
            }
            
            .faq-hero h1 {
                font-size: 3.2rem;
            }
            
            .faq-hero p {
                font-size: 1.5rem;
            }
            
            .faq-section {
                padding: 70px 0;
            }
            
            .faq-question {
                font-size: 1.6rem;
                padding: 20px 25px;
            }
            
            .faq-answer p {
                font-size: 1.4rem;
            }
            
            .faq-item.active .faq-answer {
                padding: 0 25px 30px;
            }
            
            .contact-cta {
                padding: 30px;
            }
            
            .contact-cta h3 {
                font-size: 2rem;
            }
            
            .contact-cta a {
                font-size: 1.4rem;
                padding: 15px 40px;
            }
        }
        
        @media (max-width: 576px) {
            .faq-hero h1 {
                font-size: 2.8rem;
            }
            
            .faq-hero p {
                font-size: 1.3rem;
            }
            
            .faq-question {
                font-size: 1.4rem;
                padding: 18px 20px;
            }
            
            .faq-answer p {
                font-size: 1.2rem;
            }
            
            .contact-cta h3 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    @include("layouts.header")

    <!-- Hero Section -->
    <section class="faq-hero">
        <div class="container">
            <h1>Частые вопросы</h1>
            <p>Найдите ответы на самые популярные вопросы о нашем фитнес-клубе</p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Какой график работы клуба?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Наш клуб работает с Понедельника до Пятницы с 9:00 до 00:00 Суббота-Воскресенье с 10:00 до 22:00 без выходных и праздников. Время работы может меняться только в особых случаях, о которых мы заранее информируем наших клиентов.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>Что входит в абонемент?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Все абонементы включают доступ к тренажерному залу, кардиозоне и зоне функционального тренинга. В зависимости от типа абонемента также доступны групповые занятия, сауна и скидки на дополнительные услуги.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>Можно ли заморозить абонемент?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Да, вы можете заморозить абонемент на срок от 2 недель до 3 месяцев. Для этого необходимо обратиться к администратору клуба. Заморозка доступна 1 раз в год для стандартных абонементов и 2 раза в год для премиальных.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>Как записаться на персональную тренировку?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Вы можете записаться через мобильное приложение, на сайте или у администратора клуба. Рекомендуем записываться за 24-48 часов до желаемого времени, особенно на вечерние часы и выходные дни.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>Что нужно взять с собой на первую тренировку?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Для первого посещения понадобится спортивная одежда, сменная обувь, полотенце и бутылка воды. Мы предоставляем бесплатные полотенца для душа, а также все необходимые средства гигиены.</p>
                    </div>
                </div>

                <div class="contact-cta">
                    <h3>Не нашли ответ на свой вопрос?</h3>
                    <a href="{{ route('contact') }}">Связаться с нами</a>
                </div>
            </div>
        </div>
    </section>

    @include("layouts.footer")

    <script>
        // Accordion functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                item.classList.toggle('active');
            });
        });
    </script>
</body>

</html>