<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Галерея | Фит-Рус Премиум</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Фотогалерея нашего премиального фитнес-центра" />
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
            background: url('img/галерея2.jpeg') center/cover no-repeat;
            border-radius: var(--card-border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .hero-image:hover {
            transform: translateY(-50%) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        /* Gallery Section */
        .gallery-section {
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

        .gallery-description {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 60px;
            font-size: 1.1rem;
            color: var(--light-text);
        }

        .gallery-description h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        /* Gallery Filter */
        .gallery-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 50px;
            gap: 15px;
        }

        .filter-btn {
            background: transparent;
            border: 2px solid var(--accent-color);
            color: var(--accent-color);
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--accent-color);
            color: white;
            transform: translateY(-3px);
        }

        .filter-btn i {
            margin-right: 8px;
        }

        /* Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 40px;
            /* Увеличенный промежуток */
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: var(--card-border-radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            height: 340px;
            /* Увеличена высота */
            opacity: 0;
            /* Начальное состояние для анимации */
            transform: translateY(30px);
        }

        .gallery-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 25px;
            opacity: 0;
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-title {
            color: white;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .gallery-category {
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .gallery-description-text {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.4rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .zoom-icon {
            position: absolute;
            top: 25px;
            right: 25px;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--accent-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            transition: var(--transition);
            transform: scale(0.8);
            opacity: 0;
        }

        .gallery-item:hover .zoom-icon {
            opacity: 1;
            transform: scale(1) rotate(0deg);
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

            .gallery-grid {
                grid-template-columns: repeat(3, 1fr);
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

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
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

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .filter-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    @include("layouts.header")

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Наша <span style="color: var(--accent-color);">галерея</span></h1>
                <p class="hero-subtitle">Взгляните на атмосферу нашего фитнес-центра, современное оборудование и вдохновляющие тренировки.</p>
            </div>
        </div>
        <div class="hero-image floating"></div>
        <div id="particles-js"></div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="section-title">
                <h2>Фотогалерея</h2>
            </div>

            <div class="gallery-description">
                <h4>Мы рады представить вам нашу галерею. Здесь вы найдете лучшие моменты тренировок, современное оборудование и атмосферу нашего фитнес-центра. Если у вас есть вопросы или вы хотите узнать больше, не стесняйтесь обращаться к нам.</h4>
            </div>

            <div class="gallery-filter">
                <button class="filter-btn active" data-filter="all">
                    <i class="fas fa-th"></i> Все
                </button>
                <button class="filter-btn" data-filter="artwork">
                    <i class="fas fa-palette"></i> Интерьер и оборудование	
                </button>
                <button class="filter-btn" data-filter="creative">
                    <i class="fas fa-lightbulb"></i> Спецзоны и сервисы
                </button>
                <button class="filter-btn" data-filter="nature">
                    <i class="fas fa-leaf"></i> Тренировочный процесс
                </button>
                <button class="filter-btn" data-filter="photography">
                    <i class="fas fa-camera"></i>  Персонал и клиенты		
                </button>
            </div>

            <div class="gallery-grid">
                @foreach($galleryItems as $item)
                <div class="gallery-item" data-category="{{ $item->category }}">
                    <img src="{{ asset($item->image_path) }}" alt="{{ $item->title }}" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h4 class="gallery-title">{{ $item->title }}</h4>
                        <p class="gallery-description-text">{{ $item->description }}</p>
                        <a href="{{ asset($item->image_path) }}" class="zoom-icon" title="Увеличить">
                            <i class="fas fa-search-plus"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="pagination-links" style="text-align:center; margin-top: 40px;">
                {{ $galleryItems->links() }}
            </div>
        </div>
    </section>

    @include("layouts.footer")

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
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

        // Gallery Filter
        $(document).ready(function() {
            // Magnific Popup
            $('.gallery-grid').magnificPopup({
                delegate: 'a.zoom-icon',
                type: 'image',
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300,
                    easing: 'ease-in-out'
                }
            });

            // Фильтрация галереи
            $('.filter-btn').click(function() {
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');

                const filter = $(this).data('filter');

                if (filter === 'all') {
                    $('.gallery-item').fadeIn(500);
                } else {
                    $('.gallery-item').each(function() {
                        if ($(this).data('category') === filter) {
                            $(this).fadeIn(500);
                        } else {
                            $(this).fadeOut(300);
                        }
                    });
                }
            });

            // Анимация появления карточек
            gsap.utils.toArray('.gallery-item').forEach((item, i) => {
                gsap.fromTo(item, {
                    opacity: 0,
                    y: 50
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    delay: i * 0.1,
                    scrollTrigger: {
                        trigger: item,
                        start: "top 90%",
                        toggleActions: "play none none none"
                    },
                    onComplete: () => {
                        item.classList.add('visible');
                    }
                });
            });

            // Анимация для hero
            gsap.from('.hero-title, .hero-subtitle', {
                opacity: 0,
                y: 30,
                duration: 1,
                stagger: 0.2
            });
        });
    </script>
</body>

</html>