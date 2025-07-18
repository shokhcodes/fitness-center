<footer class="site-footer">
    <div class="footer-wave">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>

    <div class="footer-content">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <div class="footer-logo">
                        <i class="fas fa-dumbbell"></i>
                        <span>Фит-Рус</span>
                    </div>
                    <p class="footer-tagline">Премиальный фитнес для тех, кто стремится к совершенству</p>

                    <div class="footer-contacts">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Челябинск, ул. Гагарина, 7</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <span>+7 (904) 933-02-72</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>ok.nazarov@mail.ru</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-globe"></i>
                            <span>fit-rus.ru</span>
                        </div>
                    </div>
                </div>

                <div class="footer-column">
                    <h3 class="footer-heading">Навигация</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('index') }}"><i class="fas fa-chevron-right"></i> Главная</a></li>
                        <li><a href="{{ route('services') }}"><i class="fas fa-chevron-right"></i> Услуги</a></li>
                        <li><a href="{{ route('pricing') }}"><i class="fas fa-chevron-right"></i> Абонементы</a></li>
                        <li><a href="{{ route('portfolio') }}"><i class="fas fa-chevron-right"></i> Галерея</a></li>
                        <li><a href="{{ route('contact') }}"><i class="fas fa-chevron-right"></i> Контакты</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3 class="footer-heading">Дополнительно</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('dashboard') }}"><i class="fas fa-chevron-right"></i> Личный кабинет</a></li>
                        <li><a href="{{ route('privacy') }}"><i class="fas fa-chevron-right"></i> Политика конфиденциальности</a></li>
                        <li><a href="{{ route('faq') }}"><i class="fas fa-chevron-right"></i> FAQ</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3 class="footer-heading">Рабочее время</h3>
                    <div class="opening-hours">
                        <div class="hours-item">
                            <span>Понедельник - Пятница</span>
                            <span>9:00 - 00:00</span>
                        </div>
                        <div class="hours-item">
                            <span>Суббота</span>
                            <span>10:00 - 22:00</span>
                        </div>
                        <div class="hours-item">
                            <span>Воскресенье</span>
                            <span>10:00 - 21:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <div class="copyright">
                    &copy; 2025 Фит-Рус. Все права защищены
                </div>

                <div class="payment-methods">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-paypal"></i>
                    <i class="fab fa-cc-apple-pay"></i>
                </div>

                <div class="social-links">
                    <a href="https://t.me/" class="social-icon" target="_blank">
                        <i class="fab fa-telegram-plane"></i>
                    </a>
                    <a href="https://vk.com/" class="social-icon" target="_blank">
                        <i class="fab fa-vk"></i>
                    </a>
                    <a href="https://ok.ru/" class="social-icon" target="_blank">
                        <i class="fab fa-odnoklassniki"></i>
                    </a>
                    <a href="https://www.twitch.tv/" class="social-icon" target="_blank">
                        <i class="fab fa-twitch"></i>
                    </a>
                    <a href="https://wa.me/" class="social-icon" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</footer>

<style>
    /* Footer Styles */
    .site-footer {
        background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
        color: #fff;
        position: relative;
        padding-top: 80px;
        margin-top: 100px;
    }

    .footer-wave {
        position: absolute;
        top: -80px;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
    }

    .footer-wave svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 80px;
    }

    .footer-wave .shape-fill {
        fill: #f5f5f7;
    }

    .footer-content {
        position: relative;
        z-index: 10;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 60px;
    }

    .footer-column {
        margin-bottom: 30px;
    }

    .footer-logo {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        font-size: 28px;
        font-weight: 700;
    }

    .footer-logo i {
        color: #bf4800;
        margin-right: 10px;
        font-size: 32px;
    }

    .footer-tagline {
        color: #aaa;
        margin-bottom: 25px;
        font-size: 16px;
        line-height: 1.6;
    }

    .footer-heading {
        position: relative;
        font-size: 22px;
        margin-bottom: 25px;
        padding-bottom: 10px;
        font-weight: 700;
    }

    .footer-heading::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 50px;
        height: 3px;
        background: #bf4800;
    }

    .footer-contacts .contact-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 15px;
    }

    .footer-contacts .contact-item i {
        color: #bf4800;
        margin-right: 15px;
        font-size: 18px;
        margin-top: 4px;
    }

    .footer-contacts .contact-item span {
        color: #ddd;
        transition: all 0.3s ease;
    }

    .footer-contacts .contact-item:hover span {
        color: #fff;
    }

    .footer-links {
        list-style: none;
        padding: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links li a {
        color: #aaa;
        text-decoration: none;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .footer-links li a i {
        margin-right: 10px;
        color: #bf4800;
        font-size: 12px;
        transition: all 0.3s ease;
    }

    .footer-links li a:hover {
        color: #fff;
        transform: translateX(5px);
    }

    .footer-links li a:hover i {
        color: #fff;
    }

    .opening-hours .hours-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: 1px dashed rgba(255, 255, 255, 0.1);
    }

    .opening-hours .hours-item span {
        color: #ddd;
    }

    .footer-newsletter {
        margin-top: 30px;
    }

    .footer-newsletter p {
        color: #aaa;
        margin-bottom: 15px;
    }

    .newsletter-form {
        display: flex;
        background: #2a2a2a;
        border-radius: 50px;
        overflow: hidden;
    }

    .newsletter-form input {
        flex: 1;
        padding: 12px 20px;
        border: none;
        background: transparent;
        color: #fff;
        outline: none;
    }

    .newsletter-form input::placeholder {
        color: #777;
    }

    .newsletter-form button {
        background: #bf4800;
        color: white;
        border: none;
        padding: 0 25px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .newsletter-form button:hover {
        background: #d35400;
    }

    .footer-bottom {
        background: rgba(0, 0, 0, 0.3);
        padding: 20px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .footer-bottom-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }

    .copyright {
        color: #777;
        font-size: 14px;
    }

    .payment-methods {
        display: flex;
        gap: 15px;
        font-size: 24px;
        color: #777;
    }

    .social-links {
        display: flex;
        gap: 15px;
    }

    .social-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #2a2a2a;
        color: #aaa;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        background: #bf4800;
        color: white;
        transform: translateY(-5px);
    }

    /* Hover animations */
    .contact-item,
    .hours-item,
    .footer-logo,
    .footer-heading {
        transition: transform 0.3s ease;
    }

    .contact-item:hover,
    .hours-item:hover {
        transform: translateX(5px);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .footer-grid {
            gap: 30px;
        }

        .footer-bottom-content {
            flex-direction: column;
            gap: 20px;
            text-align: center;
        }
    }

    @media (max-width: 768px) {
        .footer-wave {
            top: -60px;
        }

        .footer-wave svg {
            height: 60px;
        }

        .footer-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
    }

    @media (max-width: 576px) {
        .footer-wave {
            top: -40px;
        }

        .footer-wave svg {
            height: 40px;
        }
    }
</style>

<script>
    // Add subtle animations to footer elements
    document.addEventListener('DOMContentLoaded', function() {
        const footerItems = document.querySelectorAll('.footer-column, .footer-heading, .footer-links li');

        footerItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, 200 + (index * 100));
        });

        // Add hover effect to logo
        const logo = document.querySelector('.footer-logo');
        if (logo) {
            logo.addEventListener('mouseenter', () => {
                logo.style.transform = 'scale(1.05)';
            });

            logo.addEventListener('mouseleave', () => {
                logo.style.transform = 'scale(1)';
            });
        }
    });
</script>