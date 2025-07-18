<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Премиальные абонементы для достижения ваших фитнес-целей" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #000;
            --secondary-color: #1d1d1f;
            --accent-color: #bf4800;
            --accent-hover: #ff8a00;
            --text-color: #333;
            --light-text: #86868b;
            --bg-color: linear-gradient(135deg, #f0f2f5 0%, #e6e9ef 100%);
            --card-bg: #fff;
            --transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
            --section-padding: 120px 0;
            --card-border-radius: 24px;
            --shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 35px 60px rgba(255, 94, 0, 0.2);
            --gradient-primary: linear-gradient(135deg, #ff5e00, #ff9d00);
            --gradient-card: linear-gradient(135deg, #ffffff 0%, #fff8f5 100%);
            --gradient-gold: linear-gradient(135deg, #ffb300, #ffdd00);
            --gradient-premium: linear-gradient(135deg, #8a2387, #e94057, #f27121);
            --btn-border-radius: 50px;
            --glass-bg: rgba(255, 255, 255, 0.15);
            --glass-border: rgba(255, 255, 255, 0.25);
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
            background: var(--bg-color);
            line-height: 1.6;
            overflow-x: hidden;
            perspective: 1000px;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
        }

        /* Hero Section */
        .hero-section {
            height: 60vh;
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
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
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
            transform: translateY(-50%) rotateY(5deg);
            width: 50%;
            max-width: 800px;
            height: 70%;
            background: url('img/Абонементы2.jpg') center/cover no-repeat;
            border-radius: var(--card-border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
            transform-style: preserve-3d;
            /* border: 5px solid white; */
        }

        .hero-image:hover {
            transform: translateY(-50%) scale(1.02) rotateY(10deg);
            box-shadow: var(--shadow-hover);
        }

        /* Pricing Section */
        .pricing-section {
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
            border-radius: 10px;
        }

        .section-title p {
            font-size: 1.4rem;
            color: var(--light-text);
            max-width: 700px;
            margin: 40px auto 0;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .pricing-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            position: relative;
            padding: 45px;
            transform-style: preserve-3d;
            transform: translateZ(0);
        }


        .pricing-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--gradient-card);
            opacity: 0.7;
            z-index: -1;
            border-radius: inherit;
        }

        .pricing-card.premium {
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.8) 0%, rgba(45, 45, 45, 0.85) 100%);
            border: 1px solid rgba(255, 215, 0, 0.3);
        }

        .pricing-card.premium:before {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
        }

        .pricing-card.premium .pricing-title,
        .pricing-card.premium .pricing-description,
        .pricing-card.premium .pricing-duration,
        .pricing-card.premium .feature-item {
            color: rgba(255, 255, 255, 0.9);
        }

        .pricing-card:hover {
            transform: translateY(-15px) rotateX(5deg) rotateY(5deg) scale(1.02);
            box-shadow: 0 35px 60px rgba(255, 94, 0, 0.25);
        }

        .pricing-header {
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }

        .pricing-title {
            font-size: 2.4rem;
            font-weight: 800;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            background: linear-gradient(90deg, #000, #ff5e00);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .pricing-title i {
            margin-right: 15px;
            font-size: 2rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .pricing-price {
            font-size: 4rem;
            font-weight: 900;
            margin: 25px 0;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 8px 20px rgba(255, 94, 0, 0.35);
            position: relative;
            display: inline-block;
        }

        .pricing-price:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 10px;
        }

        .pricing-card.premium .pricing-price:after {
            background: #ffdd00;
        }

        .pricing-card.premium .pricing-title {
            background: linear-gradient(90deg, #fff, #ffdd00);
            -webkit-background-clip: text;
            background-clip: text;
        }


        .pricing-card.premium .pricing-price {
            background: var(--gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            text-shadow: 0 5px 15px rgba(255, 179, 0, 0.3);
        }

        .pricing-duration {
            font-size: 1.8rem;
            font-weight: 500;
            color: var(--light-text);
            margin-bottom: 25px;
            position: relative;
            padding-left: 30px;
        }

        .pricing-duration:before {
            content: '⏱️';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.4rem;
        }

        .pricing-description {
            color: var(--light-text);
            font-size: 1.8rem;
            line-height: 1.7;
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }

        .features-list {
            margin: 30px 0;
            position: relative;
            z-index: 2;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 1.4rem;
            color: var(--text-color);
        }

        .feature-item i {
            color: var(--accent-color);
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .pricing-card.premium .feature-item i {
            color: #ffdd00;
        }

        .btn {
            display: inline-block;
            width: 100%;
            padding: 18px;
            text-align: center;
            position: relative;
            background: var(--gradient-primary);
            color: white;
            border: none;
            border-radius: var(--btn-border-radius);
            font-weight: 700;
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(255, 94, 0, 0.3);
            transform: translateZ(20px);
            position: relative;
            z-index: 2;
            text-overflow: clip;
            letter-spacing: 0.5px;
            white-space: normal;
            overflow: visible;
        }

        .btn span {
            position: relative;
            z-index: 3;
            display: inline-block;
            max-width: 100%;
        }

        .btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: 0.5s;
            z-index: 1;
            /* Важное исправление */
        }

        .btn:hover {
            transform: translateY(-5px) scale(1.05) translateZ(20px);
            box-shadow: 0 15px 30px rgba(255, 94, 0, 0.4);
        }

        .btn:hover:before {
            left: 100%;
        }

        .btn.buy-button {
            background: var(--gradient-primary);
            color: white;
            border: none;
            border-radius: var(--btn-border-radius);
            font-weight: 700;
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(255, 94, 0, 0.3);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 18px 30px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .btn.buy-button:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 30px rgba(255, 94, 0, 0.4);
            background: linear-gradient(135deg, #ff7a00, #ffaa00);
        }

        .btn.buy-button i {
            margin-right: 12px;
            font-size: 1.4rem;
        }

        .premium .btn {
            background: var(--gradient-gold);
            box-shadow: 0 10px 25px rgba(255, 179, 0, 0.3);
        }

        .premium .btn:hover {
            box-shadow: 0 15px 30px rgba(255, 179, 0, 0.4);
        }

        /* 3D Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
            perspective: 1000px;
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            margin: 5% auto;
            padding: 50px;
            width: 75%;
            border-radius: 30px;
            box-shadow: 0 50px 100px rgba(0, 0, 0, 0.2);
            position: relative;
            transform-style: preserve-3d;
            transform: rotateX(-15deg) scale(0.9) translateY(100px);
            opacity: 0;
            transition: transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275), opacity 0.8s ease;
            overflow: hidden;
        }

        .modal-content .btn {
            padding: 20px;
            font-size: 1.8rem;
            margin-top: 30px;
            min-width: 250px;
            /* Гарантирует достаточно места для текста */
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: var(--gradient-primary);
            z-index: 10;
        }

        .modal.show .modal-content {
            transform: rotateX(0) scale(1) translateY(0);
            opacity: 1;
        }

        .modal h2 {
            margin-bottom: 40px;
            font-size: 3.5rem;
            font-weight: 800;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
            letter-spacing: -0.5px;
            position: relative;
            padding-bottom: 20px;
        }

        .modal h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 32px;
            font-weight: bold;
            cursor: pointer;
            transition: var(--transition);
            transform: translateZ(10px);
            position: absolute;
            top: 20px;
            right: 25px;
            z-index: 10;
        }

        .close:hover {
            color: var(--accent-color);
            transform: rotate(90deg) translateZ(10px);
        }

        .trainer-images {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
            transform-style: preserve-3d;
        }

        .trainer-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            cursor: pointer;
            border: 3px solid transparent;
            transition: var(--transition);
            transform: translateZ(20px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .trainer-image:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(255, 94, 0, 0.25);
        }

        .trainer-image.selected {
            border: 4px solid var(--accent-color);
            transform: scale(1.1);
            box-shadow: 0 15px 30px rgba(255, 94, 0, 0.4);
        }

        .trainer-name {
            font-size: 1.6rem;
            font-weight: 700;
            margin-top: 15px;
        }

        .trainer-experience {
            font-size: 1.3rem;
            color: var(--accent-color);
        }

        .modal-form {
            display: flex;
            flex-direction: column;
            transform-style: preserve-3d;
        }

        .modal-form label {
            margin-top: 20px;
            font-weight: 600;
            transform: translateZ(20px);
            font-size: 1.1rem;
        }

        .modal-form input {
            padding: 25px;
            margin-top: 12px;
            border-radius: 20px;
            border: 1px solid #e0e0e0;
            background: rgba(255, 255, 255, 0.9);
            font-size: 1.6rem;
            transition: var(--transition);
            transform: translateZ(15px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            width: 100%;
        }

        .modal-form input:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 4px rgba(255, 94, 0, 0.15);
            transform: translateZ(20px);
            outline: none;
        }

        .modal-form button {
            padding: 16px;
            margin-top: 30px;
            background: var(--gradient-primary);
            color: white;
            border: none;
            border-radius: var(--btn-border-radius);
            font-weight: 700;
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition);
            transform: translateZ(25px);
            box-shadow: 0 10px 25px rgba(255, 94, 0, 0.3);
            position: relative;
            overflow: hidden;
        }

        .modal-form button:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: 0.5s;
        }

        .modal-form button:hover {
            background: linear-gradient(135deg, #ff7a00, #ffaa00);
            transform: translateY(-3px) translateZ(30px);
            box-shadow: 0 15px 30px rgba(255, 94, 0, 0.4);
        }

        .modal-form button:hover:before {
            left: 100%;
        }

        .modal p {
            margin: 15px 0;
            transform: translateZ(20px);
            font-size: 1.8rem;
        }

        .modal .btn {
            padding: 25px;
            font-size: 1.8rem;
            margin-top: 40px;
            border-radius: 20px;
        }

        .payment-options {
            display: flex;
            gap: 20px;
            margin: 30px 0;
            justify-content: center;
        }

        .payment-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 25px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.8);
            border: 2px solid transparent;
            cursor: pointer;
            transition: var(--transition);
            transform: translateZ(15px);
            width: 180px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        .payment-option:hover {
            transform: translateY(-8px) translateZ(20px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .payment-option.selected {
            border: 2px solid var(--accent-color);
            background: rgba(255, 158, 0, 0.1);
            transform: translateY(-10px) scale(1.05) translateZ(25px);
            box-shadow: 0 20px 40px rgba(255, 94, 0, 0.2);
        }

        .payment-option i {
            font-size: 4.5rem;
            margin-bottom: 15px;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .payment-option span {
            font-weight: 600;
            font-size: 1.8rem;
        }

        .card-input-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin: 20px 0;
        }

        .subscription-info {
            font-size: 2.2rem;
            margin: 30px 0;
            padding: 30px;
            background: rgba(255, 245, 240, 0.7);
            border-radius: 20px;
            border-left: 5px solid var(--accent-color);
        }

        .subscription-info strong {
            font-weight: 700;
            color: var(--accent-color);
        }

        .success-icon {
            font-size: 8rem;
            margin: 40px 0;
        }

        /* Стилизация поля выбора даты */
        .datetime-container {
            position: relative;
            margin-top: 20px;
        }

        .datetime-container label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 1.8rem;
            transform: translateZ(20px);
        }

        .datetime-custom {
            display: flex;
            align-items: center;
            background: white;
            border: 2px solid #e0e0e0;
            border-radius: 15px;
            padding: 15px 20px;
            font-size: 1.8rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .datetime-custom:hover {
            border-color: #ff9d00;
        }

        .datetime-custom:focus-within {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 4px rgba(255, 94, 0, 0.15);
        }

        .datetime-custom i {
            color: var(--accent-color);
            margin-right: 15px;
            font-size: 2.2rem;
        }

        .datetime-custom input {
            border: none;
            background: transparent;
            font-size: 1.8rem;
            width: 100%;
            padding: 5px 0;
        }

        .datetime-custom input:focus {
            outline: none;
        }

        /* Animations */
        .animate {
            opacity: 0;
            transform: translateY(30px) rotateX(15deg);
            transition: opacity 0.8s ease, transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .animate.visible {
            opacity: 1;
            transform: translateY(0) rotateX(0);
        }

        @keyframes float {
            0% {
                transform: translateY(0px) rotateY(5deg);
            }

            50% {
                transform: translateY(-20px) rotateY(8deg);
            }

            100% {
                transform: translateY(0px) rotateY(5deg);
            }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 10px 25px rgba(255, 94, 0, 0.3);
            }

            50% {
                transform: scale(1.05);
                box-shadow: 0 15px 35px rgba(255, 94, 0, 0.5);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 10px 25px rgba(255, 94, 0, 0.3);
            }
        }

        .pulse {
            animation: pulse 3s ease-in-out infinite;
        }

        @keyframes glow {
            0% {
                box-shadow: 0 0 10px rgba(255, 94, 0, 0.5);
            }

            50% {
                box-shadow: 0 0 30px rgba(255, 94, 0, 0.8);
            }

            100% {
                box-shadow: 0 0 10px rgba(255, 94, 0, 0.5);
            }
        }

        .glow {
            animation: glow 3s ease-in-out infinite;
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

        /* 3D Card Effect */
        .card-3d {
            transform-style: preserve-3d;
            transform: perspective(1000px) rotateY(var(--rotateY)) rotateX(var(--rotateX));
            transition: transform 0.5s ease;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .pricing-card {
                padding: 35px;
            }

            .modal-content {
                width: 100%;
                padding: 50px;
            }
        }

        @media (max-width: 768px) {
            .pricing-card {
                padding: 30px;
            }

            .modal-content {
                width: 90%;
                padding: 30px;
            }

            .modal h2 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 1200px) {
            .hero-title {
                font-size: 3.2rem;
            }

            .pricing-grid {
                grid-template-columns: 1fr;
            }

            .modal-content {
                width: 70%;
            }
        }

        @media (max-width: 992px) {
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
                animation: none;
            }

            .section-title h2 {
                font-size: 2.8rem;
            }

            .payment-options {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 20px;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.4rem;
            }

            .modal-content {
                width: 85%;
                padding: 25px;
            }

            .card-input-group {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.3rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .modal-content {
                width: 95%;
            }

            .trainer-image {
                width: 180px;
                height: 180px;
                border: 4px solid transparent;
                transition: all 0.4s ease;
            }
        }

        @media (max-width: 768px) {
            .datetime-custom {
                padding: 12px 15px;
                font-size: 1.6rem;
            }

            .datetime-custom i {
                font-size: 1.8rem;
                margin-right: 10px;
            }

            .modal-content .btn {
                padding: 16px;
                font-size: 1.6rem;
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
                <h1 class="hero-title">Премиальные <span style="color: var(--accent-color);">абонементы</span></h1>
                <p class="hero-subtitle">Выберите оптимальный вариант для достижения ваших целей. Индивидуальный подход, современное оборудование и профессиональные тренеры.</p>
            </div>
        </div>
        <div class="hero-image floating">
            <img src="img/Абонементы2.jpg" alt="О фитнес-клубе" loading="lazy" width="800" height="560" style="width: 100%; height: 100%; object-fit: cover; border-radius: var(--card-border-radius); box-shadow: var(--shadow);">
        </div>
         <div id="particles-js"></div>
     </section>
 
     <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-title animate">
                <h2>Наши абонементы</h2>
                <h4>Выберите оптимальный вариант для ваших фитнес-целей</h4>
            </div>

            <div class="pricing-grid">
                @foreach($pricingItems as $item)
                <div class="pricing-card animate {{ str_contains($item->type, 'Премиум') ? 'premium' : '' }}">
                    <div class="pricing-header">
                        <h3 class="pricing-title">
                            <i class="fas {{ str_contains($item->type, 'Премиум') ? 'fa-crown' : 'fa-dumbbell' }}"></i>
                            {{ $item->type }}
                        </h3>
                        <div class="pricing-price">{{ $item->price }} ₽</div>
                        @if($item->duration)
                        <div class="pricing-duration">Срок: {{ $item->duration }} дней</div>
                        @endif
                    </div>
                    <div class="pricing-description">
                        {{ $item->description }}
                    </div>

                    <div class="features-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i> Персональные тренировки
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i> Доступ ко всем тренажерам
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i> Консультация диетолога
                        </div>
                        @if(str_contains($item->type, 'Премиум'))
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i> SPA-процедуры
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i> Персональный тренер 24/7
                        </div>
                        @endif
                    </div>

                    @auth
                    <button class="btn buy-button glow authenticated" type="button" data-type="{{ $item->type }}" data-price="{{ $item->price }}" data-duration="{{ $item->duration }}">
                        <i class="fas fa-shopping-cart"></i> Купить сейчас
                    </button>
                    @endauth
                    @guest
                    <button class="btn buy-button glow" type="button" onclick="alert('Вы не авторизованы. Перейдите в личный кабинет и авторизуйтесь для покупки абонемента.');">
                        <i class="fas fa-shopping-cart"></i> Купить сейчас
                    </button>
                    @endguest
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <form id="purchaseForm" method="POST">
        @csrf
        <input type="hidden" id="subscription-type" name="type" readonly>
        <input type="hidden" id="subscription-price" name="price" readonly>
        <input type="hidden" id="subscription-duration" name="duration" readonly>
        <input type="hidden" id="selected-trainer" name="trainer">
        <input type="hidden" id="payment-method" name="payment_method">
        <input type="hidden" id="subscription-assigned-date" name="assigned_date" readonly>

        <!-- Модальное окно 1: Данные абонемента -->
        <div id="subscriptionModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeAllModals()">&times;</span>
                <h2>Оформление абонемента</h2>

                <div class="subscription-info">
                    <div><strong>Тип абонемента:</strong> <span id="display-subscription-type"></span></div>
                    <div><strong>Стоимость:</strong> <span id="display-subscription-price"></span> ₽</div>
                    <div><strong>Срок:</strong> <span id="display-subscription-duration"></span> дней</div>
                </div>

                <button class="btn glow pulse" type="button" onclick="openModal('trainerModal')">
                    Выбрать тренера <i class="fas fa-arrow-right" style="margin-left: 15px;"></i>
                </button>
            </div>
        </div>

        <!-- Модальное окно 2: Выбор тренера -->
        <div id="trainerModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeAllModals()">&times;</span>
                <h2>Выберите тренера</h2>
                <p style="font-size: 1.8rem; margin-bottom: 30px;">Наши профессионалы помогут вам достичь лучших результатов</p>

                <div class="trainer-images">
                    @foreach($teams as $trainer)
                    <div style="text-align:center; margin: 0 20px 40px;">
                    <img src="{{ asset('img/' . $trainer->foto) }}"
                            alt="{{ $trainer->FIO }}"
                            class="trainer-image"
                            loading="lazy" decoding="async" fetchpriority="low"
                            onclick="selectTrainer(this, '{{ $trainer->FIO }}')">
                        <div class="trainer-name">{{ $trainer->FIO }}</div>
                    </div>
                    @endforeach
                </div>

                <div class="datetime-container">
                    <label>Выберите дату и время первой тренировки:</label>
                    <div class="datetime-custom">
                        <i class="far fa-calendar-alt"></i>
                        <input type="datetime-local" id="assigned-date" name="assigned_date" required>
                    </div>
                </div>

                <button class="btn glow pulse" type="button" onclick="validateTrainerAndDate()">
                    Продолжить <i class="fas fa-arrow-right" style="margin-left: 15px;"></i>
                </button>
            </div>
        </div>

        <!-- Модальное окно 3: Выбор способа оплаты -->
        <div id="paymentModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeAllModals()">&times;</span>
                <h2>Способ оплаты</h2>
                <p style="font-size: 1.8rem; margin-bottom: 40px;">Выберите удобный для вас вариант оплаты</p>

                <div class="payment-options">
                    <div class="payment-option" onclick="selectPaymentMethod(this, 'cash')">
                        <i class="fas fa-money-bill-wave"></i>
                        <span>Наличные</span>
                    </div>
                    <div class="payment-option" onclick="selectPaymentMethod(this, 'card')">
                        <i class="fas fa-credit-card"></i>
                        <span>Банковская карта</span>
                    </div>
                </div>

                <button class="btn glow pulse" type="button" onclick="openPaymentDetails()">
                    Далее <i class="fas fa-arrow-right" style="margin-left: 15px;"></i>
                </button>
            </div>
        </div>

        <!-- Модальное окно 4: Данные карты -->
        <div id="cardDetailsModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeAllModals()">&times;</span>
                <h2>Введите данные карты</h2>

                <label for="card-number">Номер карты:</label>
                <input type="text" id="card-number" placeholder="1234 5678 9012 3456" maxlength="19" oninput="formatCardNumber(this)" onkeypress="return isNumberKey(event)">

                <div class="card-input-group">
                    <div>
                        <label for="card-expiry">Срок действия:</label>
                        <input type="text" id="card-expiry" placeholder="MM/YY" maxlength="5" oninput="formatCardExpiry(this)" onkeypress="return isNumberOrSlashKey(event)">
                    </div>

                    <div>
                        <label for="card-cvv">CVV:</label>
                        <input type="text" id="card-cvv" placeholder="123" maxlength="3" onkeypress="return isNumberKey(event)">
                    </div>
                </div>

                <button class="btn glow" type="button" onclick="submitPurchase()">
                    Подтвердить оплату <i class="fas fa-lock" style="margin-left: 10px;"></i>
                </button>
            </div>
        </div>


        <!-- Модальное окно 5: Успешная оплата -->
        <div id="successModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeAllModals()">&times;</span>
                <h2>Оплата прошла успешно!</h2>

                <div style="text-align: center; margin: 50px 0;">
                    <i class="fas fa-check-circle success-icon"
                        style="background: var(--gradient-primary); 
                      -webkit-background-clip: text; 
                      background-clip: text; 
                      color: transparent;"></i>
                    <p style="margin-top: 30px; font-size: 2.2rem;">
                        Ваш абонемент активирован и готов к использованию!
                    </p>
                </div>

                <button class="btn pulse" type="button" onclick="window.location.href='{{ url('/dashboard') }}'">
                    Перейти в личный кабинет <i class="fas fa-user" style="margin-left: 15px;"></i>
                </button>
            </div>
        </div>
    </form>

    @include("layouts.footer")

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script>
        // Particles.js initialization
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 100,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: "#ff5e00"
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#000000"
                    }
                },
                opacity: {
                    value: 0.6,
                    random: true
                },
                size: {
                    value: 4,
                    random: true
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ff5e00",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 3,
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

        // 3D card hover effect
        document.querySelectorAll('.pricing-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateY = (x - centerX) / 25;
                const rotateX = (centerY - y) / 25;

                gsap.to(card, {
                    rotateX: rotateX,
                    rotateY: rotateY,
                    duration: 0.5
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    rotateX: 0,
                    rotateY: 0,
                    duration: 0.8,
                    ease: "elastic.out(1, 0.5)"
                });
            });
        });

        let selectedTrainer = null;
        let selectedPaymentMethod = null;

        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = "block";
            setTimeout(() => {
                modal.classList.add("show");
            }, 10);
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove("show");
            setTimeout(() => {
                modal.style.display = "none";
            }, 600);
        }

        function closeAllModals() {
            const modals = document.querySelectorAll('.modal.show');
            modals.forEach(modal => {
                modal.classList.remove("show");
                setTimeout(() => {
                    modal.style.display = "none";
                }, 600);
            });
        }

        function selectTrainer(img, trainerName) {
            const images = document.querySelectorAll('.trainer-image');
            images.forEach(image => image.classList.remove('selected'));
            img.classList.add('selected');
            selectedTrainer = trainerName;
            document.getElementById('selected-trainer').value = selectedTrainer;

            // Анимация выбора
            gsap.fromTo(img, {
                scale: 0.8,
                opacity: 0.7
            }, {
                scale: 1,
                opacity: 1,
                duration: 0.5,
                ease: "back.out(1.7)"
            });
        }

        function selectPaymentMethod(element, method) {
            const options = document.querySelectorAll('.payment-option');
            options.forEach(option => option.classList.remove('selected'));
            element.classList.add('selected');
            selectedPaymentMethod = method;

            // Анимация выбора
            gsap.fromTo(element, {
                y: 0,
                scale: 1
            }, {
                y: -10,
                scale: 1.05,
                duration: 0.3,
                yoyo: true,
                repeat: 1
            });
        }

        function openPaymentDetails() {
            if (!selectedPaymentMethod) {
                alert('Пожалуйста, выберите способ оплаты');
                return;
            }
            document.getElementById('payment-method').value = selectedPaymentMethod;
            if (selectedPaymentMethod === 'card') {
                openModal('cardDetailsModal');
            } else {
                submitPurchase();
            }
        }

        function validateTrainerAndDate() {
            const assignedDateInput = document.getElementById('assigned-date');
            if (!selectedTrainer) {
                alert('Пожалуйста, выберите тренера');
                return;
            }
            if (!assignedDateInput.value) {
                alert('Пожалуйста, выберите дату и время тренировки');
                return;
            }
            document.getElementById('subscription-assigned-date').value = assignedDateInput.value;
            openModal('paymentModal');
            closeModal('trainerModal');
        }

        function submitPurchase() {
            if (!selectedTrainer) {
                alert('Пожалуйста, выберите тренера');
                openModal('trainerModal');
                return;
            }

            const assignedDate = document.getElementById('subscription-assigned-date').value;
            if (!assignedDate) {
                alert('Пожалуйста, выберите дату и время тренировки');
                openModal('trainerModal');
                return;
            }

            if (!selectedPaymentMethod) {
                alert('Пожалуйста, выберите способ оплаты');
                openModal('paymentModal');
                return;
            }

            // Убраны проверки авторизации, так как они теперь на кнопке "Купить сейчас"

            const formData = {
                type: document.getElementById('subscription-type').value,
                price: document.getElementById('subscription-price').value,
                duration: document.getElementById('subscription-duration').value,
                trainer: selectedTrainer,
                assigned_date: assignedDate,
                payment_method: selectedPaymentMethod,
                card_number: document.getElementById('card-number').value.replace(/\s+/g, ''),
                card_expiry: document.getElementById('card-expiry').value,
                card_cvv: document.getElementById('card-cvv').value,
                _token: document.querySelector('input[name="_token"]').value
            };

            // Анимация загрузки
            const button = document.querySelector('#cardDetailsModal .btn');
            button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Обработка...';
            button.disabled = true;

            fetch("{{ route('subscriptions.purchase') }}", {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': formData._token
                    },
                    credentials: 'same-origin',
                    body: JSON.stringify(formData)
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(err => {
                            throw err;
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        closeModal('cardDetailsModal');
                        openModal('successModal');
                    } else {
                        alert('Ошибка при оплате: ' + data.message);
                        button.innerHTML = 'Подтвердить оплату <i class="fas fa-lock" style="margin-left: 10px;"></i>';
                        button.disabled = false;
                    }
                })
                .catch(error => {
                    console.error('Ошибка:', error);
                    alert('Произошла ошибка при отправке данных: ' + (error.message || JSON.stringify(error)));
                    button.innerHTML = 'Подтвердить оплату <i class="fas fa-lock" style="margin-left: 10px;"></i>';
                    button.disabled = false;
                });
        }

        document.querySelectorAll('.buy-button.authenticated').forEach(button => {
            button.addEventListener('click', function() {
                const type = this.getAttribute('data-type');
                const price = this.getAttribute('data-price');
                const duration = this.getAttribute('data-duration');

                document.getElementById('subscription-type').value = type;
                document.getElementById('subscription-price').value = price;
                document.getElementById('subscription-duration').value = duration;

                document.getElementById('display-subscription-type').textContent = type;
                document.getElementById('display-subscription-price').textContent = price;
                document.getElementById('display-subscription-duration').textContent = duration;

                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });

                openModal('subscriptionModal');

                // Анимация нажатия кнопки
                gsap.fromTo(this, {
                    scale: 1
                }, {
                    scale: 0.95,
                    duration: 0.2,
                    yoyo: true,
                    repeat: 1
                });
            });
        });

        window.onclick = function(event) {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                    closeModal(modal.id);
                }
            });
        };

        window.addEventListener('keydown', function(event) {
            if (event.key === "Escape") {
                const modals = document.querySelectorAll('.modal');
                modals.forEach(modal => {
                    if (modal.style.display === "block") {
                        closeModal(modal.id);
                    }
                });
            }
        });

        function formatCardNumber(input) {
            let value = input.value.replace(/\D/g, '').substring(0, 16);
            let formattedValue = '';
            for (let i = 0; i < value.length; i++) {
                if (i > 0 && i % 4 === 0) {
                    formattedValue += ' ';
                }
                formattedValue += value[i];
            }
            input.value = formattedValue;
        }

        function formatCardExpiry(input) {
            let value = input.value.replace(/[^\d]/g, '').substring(0, 4);
            if (value.length >= 3) {
                value = value.substring(0, 2) + '/' + value.substring(2);
            }
            input.value = value;
        }

        function isNumberKey(evt) {
            let charCode = evt.which ? evt.which : evt.keyCode;
            if (charCode < 48 || charCode > 57) {
                evt.preventDefault();
                return false;
            }
            return true;
        }

        function isNumberOrSlashKey(evt) {
            let charCode = evt.which ? evt.which : evt.keyCode;
            if ((charCode < 48 || charCode > 57) && charCode !== 47) {
                evt.preventDefault();
                return false;
            }
            return true;
        }
        // Установка минимальной даты для выбора первой тренировки (завтрашний день)
        function setMinAssignedDate() {
            const input = document.getElementById('assigned-date');
            if (!input) return;
            const now = new Date();
            now.setDate(now.getDate() + 1);
            now.setHours(0, 0, 0, 0);
            const year = now.getFullYear();
            const month = (now.getMonth() + 1).toString().padStart(2, '0');
            const day = now.getDate().toString().padStart(2, '0');
            input.min = `${year}-${month}-${day}T00:00`;
            if (input.value < input.min) {
                input.value = input.min;
            }
        }

        // Обработчик открытия модального окна выбора тренера
        document.getElementById('trainerModal').addEventListener('transitionend', (event) => {
            if (event.target.classList.contains('show')) {
                setMinAssignedDate();
            }
        });

        // Вызов при загрузке страницы
        window.addEventListener('load', () => {
            setMinAssignedDate();
        });

        // Установка минимальной даты для выбора первой тренировки
        function setMinAssignedDate() {
            const input = document.getElementById('assigned-date');
            if (!input) return;

            const now = new Date();
            now.setDate(now.getDate() + 1);
            now.setHours(0, 0, 0, 0);

            const year = now.getFullYear();
            const month = (now.getMonth() + 1).toString().padStart(2, '0');
            const day = now.getDate().toString().padStart(2, '0');

            input.min = `${year}-${month}-${day}T00:00`;

            if (!input.value || input.value < input.min) {
                // Установка значения по умолчанию: завтра в 10:00
                now.setHours(10, 0, 0, 0);
                const hours = now.getHours().toString().padStart(2, '0');
                const minutes = now.getMinutes().toString().padStart(2, '0');

                input.value = `${year}-${month}-${day}T${hours}:${minutes}`;
            }
        }

        // Инициализация при загрузке страницы
        window.addEventListener('DOMContentLoaded', () => {
            setMinAssignedDate();

            // Обработчик открытия модального окна выбора тренера
            document.getElementById('trainerModal').addEventListener('transitionend', (event) => {
                if (event.target.classList.contains('show')) {
                    setMinAssignedDate();
                }
            });
        });
    </script>
</body>

 </html>

