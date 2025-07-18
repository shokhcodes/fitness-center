<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Личный кабинет | Фит-Рус Премиум</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Личный кабинет пользователя" />
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
            --card-border-radius: 20px;
            --shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 30px 60px rgba(0, 0, 0, 0.15);
            --success: #4CAF50;
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
            background-color: var(--bg-color);
            color: var(--text-color);
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

        .accent {
            color: var(--accent-color);
        }

        /* Content Section */
        .content-section {
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

        /* User Card */
        .user-card {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            padding: 40px;
            box-shadow: var(--shadow);
            margin-bottom: 60px;
            transition: var(--transition);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .user-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .user-header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .user-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--accent-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
            position: relative;
        }

        .user-icon i {
            font-size: 40px;
            color: white;
        }

        .user-info h3 {
            font-size: 2.2rem;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .user-info p {
            font-size: 1.2rem;
            color: var(--light-text);
        }

        .user-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .detail-item {
            background: rgba(0, 0, 0, 0.03);
            padding: 20px;
            border-radius: 12px;
        }

        .detail-item h4 {
            font-size: 1.1rem;
            color: var(--light-text);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .detail-item h4 i {
            margin-right: 10px;
            color: var(--accent-color);
        }

        .detail-item p {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        /* Cards Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--card-border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }

        .card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-hover);
        }

        .card-header {
            background: var(--accent-color);
            padding: 20px 30px;
            color: white;
        }

        .card-header h3 {
            font-size: 1.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .card-header h3 i {
            margin-right: 12px;
        }

        .card-content {
            padding: 30px;
        }

        /* Subscription Card */
        .subscription-item {
            padding: 20px;
            margin-bottom: 20px;
            background: rgba(0, 0, 0, 0.03);
            border-radius: 12px;
            transition: var(--transition);
        }

        .subscription-item:hover {
            background: rgba(0, 0, 0, 0.05);
        }

        .sub-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 15px;
        }

        .sub-detail h4 {
            font-size: 0.9rem;
            color: var(--light-text);
            margin-bottom: 5px;
        }

        .sub-detail p {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        .status-badge {
            display: inline-block;
            padding: 6px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-top: 10px;
            color: white;
        }

        .status-active {
            background: var(--success);
        }

        .status-pending {
            background: #FF9800;
        }

        .status-inactive {
            background: #F44336;
        }

        /* Reviews */
        .review-form {
            background: rgba(0, 0, 0, 0.03);
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 40px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            color: var(--primary-color);
        }

        .form-control {
            width: 100%;
            padding: 15px;
            background: rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            color: var(--text-color);
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .rating-stars {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .star {
            color: #ddd;
            cursor: pointer;
            font-size: 1.8rem;
            transition: var(--transition);
        }

        .star.active,
        .star:hover {
            color: gold;
        }

        .btn {
            display: inline-block;
            padding: 15px 35px;
            background: var(--accent-color);
            color: white;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn:hover {
            background: #a53c00;
            transform: translateY(-3px);
        }

        .reviews-container {
            display: grid;
            gap: 30px;
        }

        .review-card {
            background: var(--card-bg);
            padding: 25px;
            border-radius: 15px;
            transition: var(--transition);
            border-left: 4px solid var(--accent-color);
            box-shadow: var(--shadow);
        }

        .review-card:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-5px);
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .review-user {
            display: flex;
            align-items: center;
        }

        .review-user .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--accent-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-weight: bold;
        }

        .review-user-info h4 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: var(--primary-color);
        }

        .review-rating {
            color: gold;
        }

        .review-date {
            color: var(--light-text);
            font-size: 0.9rem;
        }

        .review-text {
            margin-bottom: 20px;
            line-height: 1.7;
            color: var(--text-color);
        }

        .review-actions {
            display: flex;
            justify-content: flex-end;
        }

        .btn-delete {
            background: #f44336;
            padding: 8px 20px;
            font-size: 0.9rem;
        }

        .btn-delete:hover {
            background: #d32f2f;
        }

        /* 3D Profile Animation */
        .profile-3d {
            position: relative;
            width: 220px;
            height: 220px;
            margin: 0 auto 40px;
            perspective: 1200px;
        }

        .profile-card {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 1.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .profile-3d:hover .profile-card {
            transform: rotateY(180deg);
        }

        .front,
        .back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        }

        .front {
            background: linear-gradient(135deg, var(--accent-color), #ff6a00);
            color: white;
        }

        .back {
            background: linear-gradient(135deg, #2e8eda, #1a5a8d);
            color: white;
            transform: rotateY(180deg);
        }

        .front i,
        .back i {
            font-size: 5rem;
            transition: transform 0.5s;
        }

        .profile-3d:hover .front i {
            transform: scale(1.1);
        }

        /* 3D Floating Effect */
        @keyframes float3d {

            0%,
            100% {
                transform: translateY(0) rotateY(0) rotateX(0);
            }

            25% {
                transform: translateY(-15px) rotateY(10deg) rotateX(5deg);
            }

            50% {
                transform: translateY(0) rotateY(0) rotateX(0);
            }

            75% {
                transform: translateY(-10px) rotateY(-8deg) rotateX(-4deg);
            }
        }

        .profile-3d {
            animation: float3d 8s ease-in-out infinite;
        }

        /* Particles Container */
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

        /* Стили для кнопки редактирования */
        .edit-profile-btn {
            background: var(--accent-color);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            font-size: 1rem;
            margin-left: auto;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 15px rgba(191, 72, 0, 0.3);
            white-space: nowrap;
        }

        .edit-profile-btn:hover {
            background: #a53c00;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(191, 72, 0, 0.4);
        }

        .edit-profile-btn i {
            font-size: 0.9em;
        }

        /* Адаптация для мобильных */
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

            .user-header {
                flex-direction: column;
                text-align: center;
            }

            .user-icon {
                margin-right: 0;
                margin-bottom: 20px;
            }

            .edit-profile-btn {
                margin: 25px auto 0;
                width: 100%;
                max-width: 280px;
                justify-content: center;
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

            .cards-grid {
                grid-template-columns: 1fr;
            }

            .profile-3d {
                width: 180px;
                height: 180px;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.3rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .user-details {
                grid-template-columns: 1fr;
            }

            .detail-item p {
                font-size: 1.2rem;
            }

            .profile-3d {
                width: 150px;
                height: 150px;
            }

            .front i,
            .back i {
                font-size: 3.5rem;
            }

            .edit-profile-btn {
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
            <div class="hero-content animate">
                <h1 class="hero-title">Ваш <span class="accent">профиль</span></h1>
                <p class="hero-subtitle">Управляйте своими данными, просматривайте абонементы и оставляйте отзывы о нашем фитнес-центре</p>

                <!-- 3D Profile Animation -->
                <div class="profile-3d">
                    <div class="profile-card">
                        <div class="front">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="back">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-image floating"></div>
        <div id="particles-js"></div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <!-- User Info Card -->
            <div class="user-card animate">
                <div class="user-header">
                    <div class="user-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="user-info">
                        @if(auth()->check())
                        <h2>Добро пожаловать, {{ $user->name }}!</h2>
                        <h4>Ваш премиальный фитнес-аккаунт</h4>
                        @else
                        <h3>Требуется авторизация</h3>
                        <p>Пожалуйста, войдите для доступа к личному кабинету</p>
                        @endif
                    </div>

                    <!-- Новая кнопка с правильным расположением -->
                    @if(auth()->check())
                    <button id="editProfileBtn" class="edit-profile-btn">
                        <i class="fas fa-edit"></i> Редактировать профиль
                    </button>
                    @endif
                </div>

                @if(auth()->check())
                <div id="editProfileForm" style="display: none; margin-top: 20px;">
                    <form method="POST" action="{{ route('dashboard.update') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="old_password">Старый пароль</label>
                            <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" autocomplete="current-password">
                            @error('old_password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="password">Новый пароль (оставьте пустым, если не хотите менять)</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="password-confirm">Подтверждение пароля</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                        </div>

                        <button type="submit" class="btn">
                            <i class="fas fa-save"></i> Сохранить изменения
                        </button>
                    </form>
                </div>

                <div class="user-details">
                    <div class="detail-item">
                        <h4><i class="fas fa-envelope"></i> Email</h4>
                        <p>{{ $user->email }}</p>
                    </div>
                    <div class="detail-item">
                        <h4><i class="fas fa-calendar-alt"></i> Дата регистрации</h4>
                        <p>{{ $user->created_at->format('d.m.Y') }}</p>
                    </div>
                    <div class="detail-item">
                        <h4><i class="fas fa-ticket-alt"></i> Активных абонементов</h4>
                        <p>{{ $activeSubscriptionsCount ?? 0 }}</p>
                    </div>
                    <div class="detail-item">
                        <h4><i class="fas fa-star"></i> Ваших отзывов</h4>
                        <p>{{ $userReviewsCount ?? 0 }}</p>
                    </div>
                </div>
                @else
                <div class="detail-item" style="text-align: center; padding: 30px;">
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">Для доступа к личному кабинету необходима авторизация</p>
                    <a href="{{ route('login') }}" class="btn">
                        <i class="fas fa-sign-in-alt"></i> Войти в аккаунт
                    </a>
                </div>
                @endif
            </div>

            @if(auth()->check())
            <!-- Subscriptions Section -->
            <div class="section-title animate">
                <h2>Ваши абонементы</h2>
                <h4>Активные и исторические записи о ваших приобретениях</h4>
            </div>

            <div class="card animate">
                <div class="card-header">
                    <h3><i class="fas fa-id-card"></i> Список абонементов</h3>
                </div>
                <div class="card-content">
                    @foreach($subscriptions as $subscription)
                    <div class="subscription-item">
                        <div class="sub-details">
                            <div class="sub-detail">
                                <h3 style="font-weight: bold;">Тип абонемента</h3>
                                <h3>{{ $subscription->type }}</h3>
                            </div>
                            <div class="sub-detail">
                                <h3 style="font-weight: bold;">Цена</h3>
                                <h3>{{ $subscription->price }} руб.</h3>
                            </div>
                            <div class="sub-detail">
                                <h3 style="font-weight: bold;">Назначенная дата</h3>
                                <h3>
                                    @if($subscription->assigned_date)
                                    {{ \Carbon\Carbon::parse($subscription->assigned_date)->format('d.m.Y H:i') }}
                                    @else
                                    Не указана
                                    @endif
                                </h3>
                            </div>
                            <div class="sub-detail">
                                <h3 style="font-weight: bold;">Срок действия</h3>
                                <h3>{{ $subscription->duration }} дней</h3>
                            </div>
                        </div>
                        <div class="sub-details">
                            <div class="sub-detail">
                                <h3 style="font-weight: bold;">Тренер</h3>
                                <h3>
                                    @if($subscription->team)
                                    <img src="{{ asset('img/' . $subscription->team->foto) }}" alt="{{ $subscription->team->FIO }}" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
                                    {{ $subscription->team->FIO }}
                                    @else
                                    Не указан
                                    @endif
                                </h3>
                            </div>
                            <div class="sub-detail">
                                <h3 style="font-weight: bold;">Способ оплаты</h3>
                                <h3>
                                    @if($subscription->payment_method === 'cash')
                                    Наличные
                                    @elseif($subscription->payment_method === 'card')
                                    Банковская карта
                                    @else
                                    {{ $subscription->payment_method ?? 'Не указан' }}
                                    @endif
                                </h3>
                            </div>
                            <div class="sub-detail">
                                <h3 style="font-weight: bold;">Статус</h3>
                                @if($subscription->status === \App\Models\Subscription::STATUS_ACTIVE)
                                <span class="status-badge status-active">Активен</span>
                                @elseif($subscription->status === \App\Models\Subscription::STATUS_PENDING)
                                <span class="status-badge status-pending">Ожидает оплаты</span>
                                @else
                                <span class="status-badge status-inactive">Не активен</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Reviews Section -->
            <div class="section-title animate" style="margin-top: 100px;">
                <h2>Ваши отзывы</h2>
                <h4>Поделитесь своим опытом с другими клиентами</h4>
            </div>

            <div class="cards-grid">
                <!-- Review Form -->
                <div class="card animate">
                    <div class="card-header">
                        <h3><i class="fas fa-comment-medical"></i> Оставить отзыв</h3>
                    </div>
                    <div class="card-content">
                        @if(session('success'))
                        <div style="background: rgba(76, 175, 80, 0.1); padding: 15px; border-radius: 10px; margin-bottom: 20px; border-left: 4px solid var(--success);">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form action="{{ route('reviews.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="review-text">Ваш отзыв</label>
                                <textarea id="review-text" name="text" class="form-control" required minlength="10" maxlength="1000"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Оценка</label>
                                <div class="rating-stars">
                                    <span class="star" data-value="1"><i class="fas fa-star"></i></span>
                                    <span class="star" data-value="2"><i class="fas fa-star"></i></span>
                                    <span class="star" data-value="3"><i class="fas fa-star"></i></span>
                                    <span class="star" data-value="4"><i class="fas fa-star"></i></span>
                                    <span class="star" data-value="5"><i class="fas fa-star"></i></span>
                                </div>
                                <input type="hidden" name="rating" id="rating-value" value="5">
                            </div>

                            <button type="submit" class="btn">
                                <i class="fas fa-paper-plane"></i> Отправить отзыв
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Reviews List -->
                <div class="card animate">
                    <div class="card-header">
                        <h3><i class="fas fa-comments"></i> Последние отзывы</h3>
                    </div>
                    <div class="card-content">
                        <div class="reviews-container">
                            @foreach($reviews as $review)
                            <div class="review-card">
                                <div class="review-header">
                                    <div class="review-user">
                                        <div class="avatar">{{ substr($review->user->name, 0, 1) }}</div>
                                        <div class="review-user-info">
                                            <h4>{{ $review->user->name }}</h4>
                                            <div class="review-rating">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <i class="fas fa-star" style="color: {{ $i <= $review->rating ? 'gold' : '#ddd' }}"></i>
                                                    @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-date">
                                        {{ $review->created_at->format('d.m.Y') }}
                                    </div>
                                </div>
                                <div class="review-text">
                                    {{ $review->text }}
                                </div>
                                @if(auth()->user()->is_admin ?? false)
                                <div class="review-actions">
                                    <form action="{{ route('reviews.destroy', $review) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete">
                                            <i class="fas fa-trash"></i> Удалить
                                        </button>
                                    </form>
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
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

        // Floating animation for hero image
        gsap.to('.hero-image', {
            y: -20,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });

        // Hover effect for cards
        document.querySelectorAll('.card, .user-card, .subscription-item').forEach(card => {
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

        // Rating stars functionality
        document.querySelectorAll('.star').forEach(star => {
            star.addEventListener('click', function() {
                const value = this.getAttribute('data-value');
                document.getElementById('rating-value').value = value;

                // Reset all stars
                document.querySelectorAll('.star').forEach(s => {
                    s.classList.remove('active');
                });

                // Activate selected stars
                for (let i = 1; i <= value; i++) {
                    document.querySelector(`.star[data-value="${i}"]`).classList.add('active');
                }
            });
        });

        // Initialize rating to 5 stars
        document.querySelectorAll('.star[data-value="5"]').forEach(star => {
            star.classList.add('active');
        });

        // Enhanced 3D card hover effect
        document.querySelectorAll('.profile-3d').forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card.querySelector('.front i'), {
                    scale: 1.2,
                    duration: 0.5,
                    ease: "elastic.out(1, 0.3)"
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card.querySelector('.front i'), {
                    scale: 1,
                    duration: 0.5,
                    ease: "power2.out"
                });
            });
        });

        // Edit profile form toggle
        document.getElementById('editProfileBtn').addEventListener('click', function() {
            const form = document.getElementById('editProfileForm');
            if (form.style.display === 'none' || form.style.display === '') {
                form.style.display = 'block';
                gsap.fromTo(form, {
                    height: 0,
                    opacity: 0
                }, {
                    height: 'auto',
                    opacity: 1,
                    duration: 0.7,
                    ease: "power2.out"
                });
            } else {
                gsap.to(form, {
                    height: 0,
                    opacity: 0,
                    duration: 0.5,
                    ease: "power2.in",
                    onComplete: () => form.style.display = 'none'
                });
            }
        });
    </script>
</body>

</html>