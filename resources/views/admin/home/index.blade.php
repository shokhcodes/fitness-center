@extends('layouts.Adminka')

@section('title', 'Главная админ-панели')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fas fa-tachometer-alt mr-2"></i>Панель управления</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"><i class="fas fa-home"></i></li>
                </ol>
            </div>
        </div>
    </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Статистика -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-info">
                        <div class="inner">
                            <h3>{{ $subscription_count ?? 0 }}</h3>
                            <p>Абонементы</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-id-card"></i>
                        </div>
                        <a href="{{ route('subscriptions.index') }}" class="small-box-footer">
                            Подробнее <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        <div class="ribbon-wrapper">
                            <div class="ribbon bg-primary">New</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-success">
                        <div class="inner">
                            <h3>{{ $user_count ?? 0 }}</h3>
                            <p>Пользователи</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('users.index') }}" class="small-box-footer">
                            Подробнее <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-warning">
                        <div class="inner">
                            <h3>{{ $team_count ?? 0 }}</h3>
                            <p>Тренеры</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <a href="{{ route('teams.index') }}" class="small-box-footer">
                            Подробнее <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-danger">
                        <div class="inner">
                            <h3>{{ $service_count ?? 0 }}</h3>
                            <p>Услуги</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-list-alt"></i>
                        </div>
                        <a href="{{ route('admin.ourService.index') }}" class="small-box-footer">
                            Подробнее <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Вторая строка статистики -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-primary">
                        <div class="inner">
                            <h3>{{ $bestoffer_count ?? 0 }}</h3>
                            <p>Лучшие предложения</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <a href="{{ route('bestoffers.index') }}" class="small-box-footer">
                            Подробнее <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-secondary">
                        <div class="inner">
                            <h3>{{ $contact_count ?? 0 }}</h3>
                            <p>Контакты</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <a href="{{ route('contacts.index') }}" class="small-box-footer">
                            Подробнее <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-indigo">
                        <div class="inner">
                            <h3>{{ $review_count ?? 0 }}</h3>
                            <p>Отзывы</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comment"></i>
                        </div>
                        <a href="{{ route('reviews.index') }}" class="small-box-footer">
                            Подробнее <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>


                <!-- Графики и дополнительная информация -->


                <div class="col-md-6">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Последние действия</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <li class="item">
                                    <div class="product-img">
                                        <img src="{{ asset('img/avatar.png') }}" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Новый пользователь
                                            <span class="badge badge-warning float-right">2 мин назад</span></a>
                                        <span class="product-description">
                                            Зарегистрирован новый пользователь: Иван Иванов
                                        </span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img">
                                        <img src="{{ asset('img/avatar.png') }}" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Новый заказ
                                            <span class="badge badge-info float-right">35 мин назад</span></a>
                                        <span class="product-description">
                                            Оформлен новый абонемент на 3 месяца
                                        </span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img">
                                        <img src="{{ asset('img/avatar.png') }}" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Новое сообщение
                                            <span class="badge badge-danger float-right">1 час назад</span></a>
                                        <span class="product-description">
                                            Оставлено новое сообщение через форму обратной связи
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Календарь и быстрые действия -->


            <div class="col-md-6">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Быстрые действия</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12">
                                <a href="{{ route('bestoffers.create') }}" class="btn btn-app bg-gradient-info">
                                    <i class="fas fa-star"></i> Спецпредложение
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <a href="{{ route('subscriptions.create') }}" class="btn btn-app bg-gradient-success">
                                    <i class="fas fa-plus-circle"></i> Создать абонемент
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <a href="{{ route('admin.ourService.create') }}" class="btn btn-app bg-gradient-danger">
                                    <i class="fas fa-plus-square"></i> Новая услуга
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <a href="{{ route('users.create') }}" class="btn btn-app bg-gradient-primary">
                                    <i class="fas fa-user-plus"></i> Добавить пользов
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <a href="{{ route('teams.create') }}" class="btn btn-app bg-gradient-warning">
                                    <i class="fas fa-user-tie"></i> Добавить тренера
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <a href="{{ route('contacts.create') }}" class="btn btn-app bg-gradient-secondary">
                                    <i class="fas fa-envelope"></i> Рассылка
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <a href="{{ route('reviews.index') }}" class="btn btn-app bg-gradient-indigo">
                                    <i class="fas fa-comments"></i> Управление отзывами
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<!-- Дополнительные скрипты для графиков и календаря -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
                                    <script src="{{ asset('adminlte/plugins/fullcalendar/main.min.js') }}"></script>

                                    <script>
                                        $(function() {
                                            // График посещений
                                            var ctx = document.getElementById('visitorsChart').getContext('2d');
                                            var visitorsChart = new Chart(ctx, {
                                                type: 'line',
                                                data: {
                                                    labels: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
                                                    datasets: [{
                                                        label: 'Посещения',
                                                        data: [65, 59, 80, 81, 56, 55, 40, 35, 60, 75, 80, 95],
                                                        backgroundColor: 'rgba(60,141,188,0.9)',
                                                        borderColor: 'rgba(60,141,188,0.8)',
                                                        pointRadius: false,
                                                        pointColor: '#3b8bba',
                                                        pointStrokeColor: 'rgba(60,141,188,1)',
                                                        pointHighlightFill: '#fff',
                                                        pointHighlightStroke: 'rgba(60,141,188,1)',
                                                        tension: 0.1
                                                    }]
                                                },
                                                options: {
                                                    maintainAspectRatio: false,
                                                    responsive: true,
                                                    plugins: {
                                                        legend: {
                                                            display: false
                                                        }
                                                    },
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true
                                                        }
                                                    }
                                                }
                                            });

                                            // Календарь
                                            $('#calendar').fullCalendar({
                                                header: {
                                                    left: 'prev,next today',
                                                    center: 'title',
                                                    right: 'month,agendaWeek,agendaDay'
                                                },
                                                defaultView: 'month',
                                                editable: true,
                                                events: [{
                                                        title: 'Совещание',
                                                        start: new Date(y, m, d, 10, 30),
                                                        allDay: false,
                                                        backgroundColor: '#f56954',
                                                        borderColor: '#f56954'
                                                    },
                                                    {
                                                        title: 'Тренировка',
                                                        start: new Date(y, m, d + 1, 19, 0),
                                                        end: new Date(y, m, d + 1, 20, 30),
                                                        allDay: false,
                                                        backgroundColor: '#00a65a',
                                                        borderColor: '#00a65a'
                                                    }
                                                ]
                                            });
                                        });
                                    </script>
                                    @endsection

                                    @section('styles')
                                    <!-- Дополнительные стили -->
                                    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fullcalendar/main.min.css') }}">
                                    <style>
                                        .small-box {
                                            border-radius: 0.5rem;
                                            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                                            transition: transform 0.3s;
                                        }

                                        .small-box:hover {
                                            transform: translateY(-5px);
                                        }

                                        .card {
                                            border-radius: 0.5rem;
                                            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                                        }

                                        .btn-app {
                                            border-radius: 0.5rem;
                                            margin: 0 0 1rem 0;
                                            min-width: 100%;
                                            height: 80px;
                                            padding: 15px 5px;
                                            font-size: 14px;
                                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                        }

                                        .btn-app:hover {
                                            transform: scale(1.02);
                                        }

                                        .products-list .product-info {
                                            margin-left: 60px;
                                        }
                                    </style>
                                    @endsection
