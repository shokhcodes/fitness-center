<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<style>
/* Modern Header Styles */
.navbar-default {
    background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
    border: none;
    min-height: 70px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    transition: all 0.4s ease;
    margin-bottom: 0;
    padding: 0 15px;
}

.navbar-brand {
    height: 70px;
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
    padding: 0;
    margin-right: 30px;
}

.navbar-brand .logo-wrapper {
    display: flex;
    align-items: center;
    height: 100%;
}

.navbar-brand .logo-icon {
    color: #ff6b00;
    font-size: 32px;
    margin-right: 10px;
    transition: all 0.3s ease;
}

.navbar-brand .logo-text {
    color: #fff;
    font-size: 26px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

.navbar-brand:hover .logo-icon {
    transform: rotate(10deg) scale(1.1);
    color: #ff9e00;
}

/* Основное меню - видимое на больших экранах */
.navbar-nav-desktop {
    display: flex;
    align-items: center;
    margin: 0;
    padding: 0;
    height: 70px;
}

.navbar-nav-desktop > li {
    margin: 0 5px;
}

.navbar-nav-desktop > li > a {
    color: #ddd !important;
    height: 70px;
    display: flex;
    align-items: center;
    padding: 0 15px !important;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    position: relative;
    border-radius: 4px;
}

.navbar-nav-desktop > li > a:focus, 
.navbar-nav-desktop > li > a:hover {
    color: #fff !important;
    background: rgba(255, 107, 0, 0.15) !important;
}

.navbar-nav-desktop > li > a .nav-icon {
    font-size: 18px;
    margin-right: 8px;
    transition: all 0.3s ease;
}

.navbar-nav-desktop > li.active > a {
    color: #fff !important;
    background: rgba(255, 107, 0, 0.25) !important;
}

.navbar-nav-desktop > li.active > a:after {
    content: '';
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    width: 20px;
    height: 3px;
    background: #ff6b00;
    border-radius: 2px;
}

/* Мобильное меню - скрыто на больших экранах */
.navbar-nav-mobile {
    display: none;
    flex-direction: column;
    width: 100%;
    padding: 0;
    margin: 0;
}

.navbar-nav-mobile > li {
    width: 100%;
}

.navbar-nav-mobile > li.active > a {
    background: rgba(255, 107, 0, 0.25) !important;
    color: #fff !important;
    border-radius: 4px;
}

.navbar-nav-mobile > li > a {
    color: #ddd !important;
    display: flex;
    align-items: center;
    padding: 12px 20px !important;
    font-size: 16px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.navbar-nav-mobile > li > a .nav-icon {
    font-size: 20px;
    margin-right: 10px;
    min-width: 24px;
}

/* Compact Dropdown Menu */
.dropdown-menu {
    background: #0d0d0d;
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 4px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    padding: 5px 0;
    min-width: 200px;
    overflow: hidden;
    transform: translateY(10px);
    opacity: 0;
    visibility: hidden;
    display: block;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-menu > li > a {
    color: #ddd !important;
    padding: 10px 20px !important;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    border-radius: 0;
}

.dropdown-menu > li > a i {
    color: #ff6b00;
    margin-right: 10px;
    transition: all 0.3s ease;
}

.dropdown-menu > li > a:hover {
    color: #fff !important;
    background: rgba(255, 107, 0, 0.2) !important;
    padding-left: 25px !important;
}

.dropdown-menu > li > a:hover i {
    color: #fff;
}

/* Login Indicator */
.navbar-auth-indicator {
    display: inline-block;
    width: 8px;
    height: 8px;
    background: #4CAF50;
    border-radius: 50%;
    margin-left: 8px;
    box-shadow: 0 0 8px #4CAF50;
}

/* Logout Button */
.btn-logout {
    color: #ddd !important;
    background: transparent !important;
    border: none;
    padding: 0 15px !important;
    height: 70px;
    display: flex;
    align-items: center;
    font-weight: 600;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    border-radius: 4px;
    cursor: pointer;
}

.btn-logout:hover {
    color: #fff !important;
    background: rgba(255, 107, 0, 0.2) !important;
}

.btn-logout i {
    margin-right: 8px;
}

/* Mobile Menu Button */
.navbar-toggle {
    border: none;
    border-radius: 0;
    margin-top: 18px;
    transition: all 0.3s ease;
    background: transparent !important;
}

.navbar-toggle .icon-bar {
    background-color: #ff6b00;
    width: 25px;
    height: 3px;
    transition: all 0.3s ease;
    display: block;
    margin: 4px 0;
}

.navbar-toggle:hover .icon-bar {
    background-color: #fff;
}

/* Header Animation */
@keyframes headerEntry {
    0% { transform: translateY(-100%); opacity: 0; }
    100% { transform: translateY(0); opacity: 1; }
}

.navbar {
    animation: headerEntry 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
}

.navbar-nav-desktop > li {
    opacity: 0;
    transform: translateY(-20px);
    transition: opacity 0.5s ease, transform 0.5s ease;
}

/* Compact admin link */
.admin-link {
    background: rgba(106, 27, 154, 0.2) !important;
}

.admin-link:hover {
    background: rgba(106, 27, 154, 0.3) !important;
}

.admin-link i {
    color: #9c27b0 !important;
}

/* Responsive Styles */
@media (max-width: 1200px) {
    .navbar-nav-desktop > li > a {
        padding: 0 10px !important;
        font-size: 13px;
    }
    
    .navbar-nav-desktop > li > a .nav-icon {
        margin-right: 5px;
    }
}

@media (max-width: 992px) {
    .navbar-nav-desktop {
        display: none;
    }
    
    .navbar-nav-mobile {
        display: flex;
    }
    
    .navbar-collapse {
        background: rgba(13, 13, 13, 0.95);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        border-top: 1px solid rgba(255,255,255,0.05);
        max-height: 80vh;
        overflow-y: auto;
    }
    
    .dropdown-menu {
        position: static;
        float: none;
        width: 100%;
        box-shadow: none;
        margin-top: 0;
        background: rgba(20, 20, 20, 0.8);
        border: none;
        opacity: 1;
        visibility: visible;
        transform: none;
        display: none;
    }
    
    .dropdown.open .dropdown-menu {
        display: block;
    }
    
    .btn-logout {
        height: auto;
        padding: 12px 20px !important;
        display: block;
        text-align: left;
        width: 100%;
    }
    
    .navbar-brand {
        margin-right: 15px;
    }
}

@media (max-width: 768px) {
    .navbar-brand .logo-text {
        font-size: 22px;
    }
    
    .navbar-toggle {
        margin-top: 15px;
    }
    
    .navbar-nav-mobile > li > a {
        font-size: 15px;
        padding: 10px 20px !important;
    }
}

@media (max-width: 576px) {
    .navbar-brand .logo-text {
        font-size: 18px;
    }
    
    .navbar-brand .logo-icon {
        font-size: 26px;
    }
}
</style>

<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header" style="display: flex; justify-content: center; align-items: center; width: 100%;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main" style="position: absolute; left: 15px;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('index') }}" style="margin: 0;">
                    <div class="logo-wrapper" style="display: flex; align-items: center; justify-content: center; height: 100%;">
                        <i class="fas fa-dumbbell logo-icon"></i>
                        <span class="logo-text">Фит-Рус</span>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <!-- Десктопное меню -->
                <ul class="nav navbar-nav navbar-nav-desktop">
                    <li class="{{ Request::route()->getName() == 'index' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('index') }}">
                            <i class="fas fa-home nav-icon"></i>
                            <span>Главная</span>
                        </a>
                    </li>
                    <li class="dropdown {{ Request::route()->getName() == 'about' ? 'active' : '' }}">
                        <a href="#" class="dropdown-toggle waves-effect waves-dark" data-toggle="dropdown">
                            <i class="fas fa-info-circle nav-icon"></i>
                            <span>о нас</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('about') }}"><i class="fas fa-building"></i> компания</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ route('equipment') }}"><i class="fas fa-dumbbell"></i> тренажеры</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ route('trainers') }}"><i class="fas fa-users"></i> тренеры</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::route()->getName() == 'services' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('services') }}">
                            <i class="fas fa-dumbbell nav-icon"></i>
                            <span>услуги</span>
                        </a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'portfolio' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('portfolio') }}">
                            <i class="fas fa-images nav-icon"></i>
                            <span>галерея</span>
                        </a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'pricing' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('pricing') }}">
                            <i class="fas fa-tags nav-icon"></i>
                            <span>абонементы</span>
                        </a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'contact' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('contact') }}">
                            <i class="fas fa-phone-alt nav-icon"></i>
                            <span>контакты</span>
                        </a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'dashboard' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('dashboard') }}">
                            <i class="fas fa-user nav-icon"></i>
                            <span>кабинет</span>
                            @auth
                                <span class="navbar-auth-indicator"></span>
                            @endauth
                        </a>
                    </li>
                    @auth
                        @if(Auth::user()->is_admin == 1)
                            <li class="{{ Request::route()->getName() == 'admin.home.index' ? 'active' : '' }}">
                                <a class="waves-effect waves-dark admin-link" href="{{ route('admin.home.index') }}">
                                    <i class="fas fa-cog nav-icon"></i>
                                    <span>админка</span>
                                </a>
                            </li>
                        @endif
                    @endauth

                    @auth
                        @if(Auth::user()->id != 0)
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn-logout waves-effect waves-light">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span class="hidden-xs">Выход</span>
                                    </button>
                                </form>
                            </li>
                        @endif
                    @endauth
                </ul>
                
                <!-- Мобильное меню -->
                <ul class="nav navbar-nav navbar-nav-mobile">
                    <li class="{{ Request::route()->getName() == 'index' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('index') }}">
                            <i class="fas fa-home nav-icon"></i>
                            <span>Главная</span>
                        </a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'about' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('about') }}">
                            <i class="fas fa-info-circle nav-icon"></i>
                            <span>О компании</span>
                        </a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'equipment' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('equipment') }}">
                            <i class="fas fa-dumbbell nav-icon"></i>
                            <span>Тренажеры</span>
                        </a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'trainers' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('trainers') }}">
                            <i class="fas fa-users nav-icon"></i>
                            <span>Тренеры</span>
                        </a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'services' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('services') }}">
                            <i class="fas fa-dumbbell nav-icon"></i>
                            <span>Услуги</span>
                        </a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'portfolio' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('portfolio') }}">
                            <i class="fas fa-images nav-icon"></i>
                            <span>Галерея</span>
                        </a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'pricing' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('pricing') }}">
                            <i class="fas fa-tags nav-icon"></i>
                            <span>Абонементы</span>
                        </a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'contact' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('contact') }}">
                            <i class="fas fa-phone-alt nav-icon"></i>
                            <span>Контакты</span>
                        </a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'dashboard' ? 'active' : '' }}">
                        <a class="waves-effect waves-dark" href="{{ route('dashboard') }}">
                            <i class="fas fa-user nav-icon"></i>
                            <span>Личный кабинет</span>
                            @auth
                                <span class="navbar-auth-indicator"></span>
                            @endauth
                        </a>
                    </li>
                    @auth
                        @if(Auth::user()->is_admin == 1)
                            <li class="{{ Request::route()->getName() == 'admin.home.index' ? 'active' : '' }}">
                                <a class="waves-effect waves-dark admin-link" href="{{ route('admin.home.index') }}">
                                    <i class="fas fa-cog nav-icon"></i>
                                    <span>Админ панель</span>
                                </a>
                            </li>
                        @endif
                    @endauth

                    @auth
                        @if(Auth::user()->id != 0)
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn-logout waves-effect waves-light" style="width: 100%; text-align: left;">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Выход из системы</span>
                                    </button>
                                </form>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- jQuery (необходим для Bootstrap JS) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Анимация элементов меню
    const navItems = document.querySelectorAll('.navbar-nav-desktop > li');
    navItems.forEach((item, index) => {
        setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, 300 + (index * 100));
    });

    // Эффект при скролле
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar-default');
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.8)';
            navbar.style.minHeight = '60px';
            document.querySelector('.navbar-brand').style.height = '60px';
            
            if (scrollTop > lastScrollTop) {
                // Скролл вниз - скрываем хедер
                navbar.style.transform = 'translateY(-100%)';
            } else {
                // Скролл вверх - показываем хедер
                navbar.style.transform = 'translateY(0)';
            }
        } else {
            navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.6)';
            navbar.style.minHeight = '70px';
            document.querySelector('.navbar-brand').style.height = '70px';
            navbar.style.transform = 'translateY(0)';
        }
        
        lastScrollTop = scrollTop;
    });
    
    // Подсветка активного пункта меню
    const currentPath = window.location.pathname;
    const allLinks = document.querySelectorAll('.navbar-nav-desktop > li > a, .navbar-nav-mobile > li > a');
    
    allLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.parentElement.classList.add('active');
        }
    });
    
    // Инициализация выпадающих меню
    $('.dropdown-toggle').dropdown();
});
</script>
