<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>Martin Harahap </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap');

        body {
            font-family: 'Orbitron', monospace;
            overflow-x: hidden;
            max-width: 100vw;
        }

        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .star {
            position: absolute;
            background: white;
            border-radius: 50%;
            animation: twinkle 3s infinite;
        }

        @keyframes twinkle {

            0%,
            100% {
                opacity: 0.3;
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        .pulsing {
            animation: pulse 2s ease-in-out infinite;
        }

        .gradient-text {
            background: linear-gradient(45deg, #3b82f6, #8b5cf6, #ec4899);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient 3s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .planet {
            background: radial-gradient(circle at 30% 30%, #60a5fa, #3b82f6, #1e40af);
            border-radius: 50%;
            box-shadow: 0 0 50px rgba(59, 130, 246, 0.5);
        }

        .rocket {
            filter: drop-shadow(0 0 20px rgba(236, 72, 153, 0.7));
        }

        .project-card {
            transition: all 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .status-indicator {
            box-shadow: 0 0 10px currentColor;
        }

        /* Loading Screen Animations */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0f0f23, #1a1a3a, #2d1b69);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .loading-screen.fade-out {
            animation: loadingFadeOut 1s ease-in-out forwards;
        }

        @keyframes loadingFadeOut {
            0% {
                opacity: 1;
                visibility: visible;
            }

            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

        .name-form {
            margin-top: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            width: 100%;
            max-width: 100vw;
            box-sizing: border-box;
            padding: 0 15px;
        }

        .name-input {
            padding: 12px 20px;
            border: 2px solid rgba(59, 130, 246, 0.5);
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1.1rem;
            font-family: 'Orbitron', monospace;
            text-align: center;
            outline: none;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            width: 100%;
            max-width: 300px;
            box-sizing: border-box;
        }

        .name-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .name-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
            transform: scale(1.02);
        }

        .submit-btn {
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            background: linear-gradient(45deg, #3b82f6, #8b5cf6);
            color: white;
            font-size: 1rem;
            font-family: 'Orbitron', monospace;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            width: 100%;
            max-width: 250px;
            box-sizing: border-box;
        }

        .submit-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(59, 130, 246, 0.4);
        }

        .submit-btn:active {
            transform: scale(0.98);
        }

        .greeting {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(59, 130, 246, 0.2);
            backdrop-filter: blur(10px);
            padding: 10px 16px;
            border-radius: 25px;
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: white;
            font-family: 'Orbitron', monospace;
            font-size: clamp(0.3rem, 2.5vw, 1.1rem);
            /* <- auto scale font size */
            z-index: 1000;
            opacity: 0;
            animation: greetingSlideDown 1s ease-out 0.5s forwards;
            max-width: 90vw;
            /* <- batasi lebar maksimum */
            box-sizing: border-box;
            text-align: center;
            word-wrap: break-word;
            overflow-wrap: break-word;
            line-height: 1.3;
            white-space: normal;
            /* <- pastikan teks bisa turun baris */
        }


        @keyframes greetingSlideDown {
            0% {
                opacity: 0;
                transform: translateX(-50%) translateY(-50px);
            }

            100% {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
            }
        }

        .loading-rocket {
            font-size: 6rem;
            animation: loadingRocketMove 2s ease-in-out infinite;
            margin-bottom: 2rem;
        }

        @keyframes loadingRocketMove {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            25% {
                transform: translateY(-30px) rotate(5deg);
            }

            50% {
                transform: translateY(-10px) rotate(-3deg);
            }

            75% {
                transform: translateY(-20px) rotate(2deg);
            }
        }

        .loading-text {
            font-size: 1.5rem;
            background: linear-gradient(45deg, #3b82f6, #8b5cf6, #ec4899);
            background-size: 200% 200%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: loadingTextPulse 1.5s ease-in-out infinite;
        }

        @keyframes loadingTextPulse {

            0%,
            100% {
                opacity: 0.6;
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(1.05);
            }
        }

        .loading-progress {
            width: 300px;
            height: 4px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 2px;
            overflow: hidden;
            margin-top: 2rem;
        }

        .loading-bar {
            height: 100%;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6, #ec4899);
            border-radius: 2px;
            animation: loadingBarMove 3s ease-out forwards;
        }

        @keyframes loadingBarMove {
            0% {
                width: 0%;
            }

            100% {
                width: 100%;
            }
        }

        /* Page Content Entrance Animations */
        .main-content {
            opacity: 0;
            animation: fadeInUp 1s ease-out 3.5s forwards;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .rocket-entrance {
            opacity: 0;
            transform: scale(0.3) rotate(180deg);
            animation: rocketEntrance 1.5s ease-out 4s forwards;
        }

        @keyframes rocketEntrance {
            0% {
                opacity: 0;
                transform: scale(0.3) rotate(180deg);
            }

            60% {
                opacity: 1;
                transform: scale(1.2) rotate(10deg);
            }

            100% {
                opacity: 1;
                transform: scale(1) rotate(0deg);
            }
        }

        .title-entrance {
            opacity: 0;
            transform: translateY(-50px);
            animation: titleSlideDown 1s ease-out 4.5s forwards;
        }

        @keyframes titleSlideDown {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .content-card {
            opacity: 0;
            transform: translateY(30px);
            animation: cardSlideUp 0.8s ease-out forwards;
        }

        .content-card:nth-child(1) {
            animation-delay: 5s;
        }

        .content-card:nth-child(2) {
            animation-delay: 5.2s;
        }

        .content-card:nth-child(3) {
            animation-delay: 5.4s;
        }

        .content-card:nth-child(4) {
            animation-delay: 5.6s;
        }

        .content-card:nth-child(5) {
            animation-delay: 5.8s;
        }

        @keyframes cardSlideUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .planet-entrance {
            opacity: 0;
            transform: scale(0) rotate(90deg);
            animation: planetEntrance 2s ease-out 3.8s forwards;
        }

        @keyframes planetEntrance {
            0% {
                opacity: 0;
                transform: scale(0) rotate(90deg);
            }

            60% {
                opacity: 0.8;
                transform: scale(1.1) rotate(30deg);
            }

            100% {
                opacity: 0.2;
                transform: scale(1) rotate(0deg);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {

            /* Mobile Styles */
            .loading-rocket {
                font-size: 4rem;
                margin-bottom: 1.5rem;
            }

            .loading-text {
                font-size: 1.2rem;
                text-align: center;
                padding: 0 20px;
                line-height: 1.4;
            }

            .name-input {
                width: calc(100vw - 60px);
                max-width: 280px;
                font-size: 1rem;
                padding: 10px 16px;
            }

            .submit-btn {
                font-size: 0.9rem;
                padding: 10px 25px;
                width: calc(100vw - 60px);
                max-width: 250px;
            }

            .greeting {
                font-size: 1rem;
                padding: 12px 20px;
                top: 15px;
                left: 15px;
                right: 15px;
                transform: none;
                text-align: center;
                max-width: calc(100vw - 30px);
                box-sizing: border-box;
                border-radius: 20px;
                line-height: 1.4;
            }

            .planet {
                width: 200px;
                height: 200px;
                top: 5px;
                right: 5px;
            }

            .rocket svg {
                width: 80px;
                height: 80px;
            }

            .title-entrance {
                font-size: 2.5rem;
                line-height: 1.2;
                padding: 0 15px;
            }

            .subtitle {
                font-size: 1rem;
                padding: 0 20px;
                line-height: 1.5;
            }

            .content-card {
                margin: 0 15px;
                padding: 1rem;
            }

            .project-card h3 {
                font-size: 1rem;
                line-height: 1.3;
            }

            .project-card p {
                font-size: 0.85rem;
                line-height: 1.4;
            }

            .contact-info a {
                padding: 12px 20px;
                font-size: 0.9rem;
                max-width: calc(100vw - 40px);
                text-align: center;
                justify-content: center;
            }

            .floating {
                display: none;
            }
        }

        @media (max-width: 480px) {

            /* Extra Small Mobile */
            .loading-rocket {
                font-size: 3rem;
                margin-bottom: 1rem;
            }

            .loading-text {
                font-size: 0.9rem;
                padding: 0 15px;
                line-height: 1.3;
            }

            .name-input {
                width: calc(100vw - 50px);
                max-width: 250px;
                font-size: 0.9rem;
                padding: 8px 14px;
                border-radius: 20px;
            }

            .submit-btn {
                font-size: 0.8rem;
                padding: 8px 20px;
                width: calc(100vw - 50px);
                max-width: 220px;
                border-radius: 20px;
            }

            .greeting {
                font-size: 0.85rem;
                padding: 8px 12px;
                top: 10px;
                left: 10px;
                right: 10px;
                border-radius: 15px;
                max-width: calc(100vw - 20px);
                word-wrap: break-word;
                line-height: 1.3;
            }

            .planet {
                width: 120px;
                height: 120px;
                top: 10px;
                right: 10px;
            }

            .rocket svg {
                width: 50px;
                height: 50px;
            }

            .title-entrance {
                font-size: 1.8rem;
                line-height: 1.1;
                padding: 0 15px;
                word-wrap: break-word;
                hyphens: auto;
            }

            .subtitle {
                font-size: 0.85rem;
                padding: 0 15px;
                line-height: 1.4;
            }

            .project-card,
            .content-card {
                padding: 0.8rem;
                margin: 0 10px 1rem 10px;
                border-radius: 12px;
            }

            .project-card h3 {
                font-size: 0.9rem;
                line-height: 1.3;
                word-wrap: break-word;
            }

            .project-card p {
                font-size: 0.75rem;
                line-height: 1.3;
            }

            .bg-red-900 p {
                font-size: 0.85rem;
                line-height: 1.4;
            }

            .bg-red-900 h3 {
                font-size: 1rem;
                line-height: 1.3;
            }

            .main-content {
                padding: 0.5rem;
                padding-top: 60px;
                /* Space for greeting */
            }

            .grid {
                gap: 0.75rem;
            }

            .contact-info a {
                padding: 10px 16px;
                font-size: 0.85rem;
                word-wrap: break-word;
            }
        }

        @media (max-width: 375px) {

            /* iPhone SE and smaller */
            .loading-rocket {
                font-size: 2.5rem;
                margin-bottom: 0.8rem;
            }

            .loading-text {
                font-size: 0.8rem;
                padding: 0 10px;
                line-height: 1.2;
            }

            .name-input {
                width: calc(100vw - 30px);
                max-width: 220px;
                font-size: 0.85rem;
                padding: 6px 12px;
                border-radius: 18px;
            }

            .submit-btn {
                font-size: 0.75rem;
                padding: 6px 15px;
                width: calc(100vw - 30px);
                max-width: 180px;
                border-radius: 18px;
                letter-spacing: 0.5px;
            }

            .greeting {
                font-size: 0.8rem;
                padding: 6px 10px;
                top: 5px;
                left: 5px;
                right: 5px;
                border-radius: 12px;
                max-width: calc(100vw - 10px);
                line-height: 1.3;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .planet {
                width: 100px;
                height: 100px;
                top: 5px;
                right: 5px;
            }

            .rocket svg {
                width: 40px;
                height: 40px;
            }

            .title-entrance {
                font-size: 1.5rem;
                line-height: 1.1;
                padding: 0 10px;
                word-break: break-word;
            }

            .subtitle {
                font-size: 0.8rem;
                padding: 0 10px;
                line-height: 1.3;
            }

            .project-card,
            .content-card {
                padding: 0.6rem;
                margin: 0 5px 0.8rem 5px;
                border-radius: 10px;
            }

            .project-card h3 {
                font-size: 0.85rem;
                line-height: 1.2;
                word-break: break-word;
            }

            .project-card p {
                font-size: 0.7rem;
                line-height: 1.2;
            }

            .bg-red-900 h3 {
                font-size: 1rem;
                line-height: 1.2;
            }

            .bg-red-900 p {
                font-size: 0.8rem;
                line-height: 1.3;
            }

            .contact-info a {
                font-size: 0.8rem;
                padding: 8px 14px;
                border-radius: 20px;
            }

            .main-content {
                padding: 0.25rem;
                padding-top: 55px;
                /* Space for greeting */
            }

            .grid {
                gap: 0.5rem;
            }

            /* Better text wrapping for very small screens */
            h1,
            h2,
            h3 {
                word-wrap: break-word;
                overflow-wrap: break-word;
                hyphens: auto;
            }

            /* Ensure no horizontal scroll */
            body {
                overflow-x: hidden;
                max-width: 100vw;
            }

            /* Adjust status indicator for small screens */
            .status-indicator {
                box-shadow: 0 0 8px currentColor;
            }
        }

        @media (min-width: 769px) and (max-width: 1024px) {

            /* Tablet Styles */
            .loading-rocket {
                font-size: 5rem;
            }

            .name-input {
                width: 320px;
            }

            .planet {
                width: 300px;
                height: 300px;
            }

            .rocket svg {
                width: 100px;
                height: 100px;
            }

            .title-entrance {
                font-size: 4rem;
            }
        }

        @media (min-width: 1025px) {
            /* Desktop Styles - Keep existing */
        }

        /* Responsive Grid Adjustments */
        @media (max-width: 640px) {
            .grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3 {
                grid-template-columns: repeat(1, minmax(0, 1fr));
                gap: 1rem;
            }

            .grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-4 {
                grid-template-columns: repeat(1, minmax(0, 1fr));
                gap: 1rem;
            }
        }

        @media (min-width: 641px) and (max-width: 768px) {
            .grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-4 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        /* Ultra small devices (≤320px) */
        @media (max-width: 320px) {
            .loading-rocket {
                font-size: 2rem;
                margin-bottom: 0.5rem;
            }

            .loading-text {
                font-size: 0.75rem;
                padding: 0 8px;
            }

            .name-input {
                width: calc(100vw - 20px);
                max-width: 200px;
                font-size: 0.8rem;
                padding: 5px 10px;
            }

            .submit-btn {
                font-size: 0.7rem;
                padding: 5px 12px;
                width: calc(100vw - 20px);
                max-width: 160px;
            }

            .greeting {
                font-size: 0.75rem;
                padding: 5px 8px;
                top: 3px;
                left: 3px;
                right: 3px;
                max-width: calc(100vw - 6px);
                border-radius: 10px;
                line-height: 1.2;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .title-entrance {
                font-size: 1.3rem;
                line-height: 1.0;
                padding: 0 8px;
            }

            .subtitle {
                font-size: 0.75rem;
                padding: 0 8px;
            }

            .project-card,
            .content-card {
                padding: 0.5rem;
                margin: 0 3px 0.6rem 3px;
            }

            .project-card h3 {
                font-size: 0.8rem;
            }

            .project-card p {
                font-size: 0.65rem;
            }

            .main-content {
                padding: 0.125rem;
                padding-top: 50px;
            }

            .planet {
                width: 80px;
                height: 80px;
            }

            .rocket svg {
                width: 35px;
                height: 35px;
            }
        }

        /* Landscape mode for small devices */
        @media (max-height: 500px) and (orientation: landscape) {
            .greeting {
                font-size: 0.75rem;
                padding: 4px 8px;
                top: 2px;
                left: 10px;
                right: 10px;
                border-radius: 10px;
                max-width: calc(100vw - 20px);
                line-height: 1.2;
            }

            .main-content {
                padding-top: 35px;
            }
        }

        /* Very long names handling */
        @media (max-width: 280px) {
            .greeting {
                font-size: 0.65rem;
                padding: 3px 5px;
                max-width: calc(100vw - 10px);
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                border-radius: 8px;
                top: 2px;
                left: 2px;
                right: 2px;
            }
        }

        /* Touch-friendly buttons */
        @media (hover: none) and (pointer: coarse) {

            .submit-btn,
            .project-card,
            .content-card {
                transform: none !important;
                min-height: 44px;
                /* iOS minimum touch target */
            }

            .submit-btn {
                min-height: 44px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .submit-btn:active {
                transform: scale(0.95) !important;
            }

            .project-card:active,
            .content-card:active {
                transform: translateY(-2px) !important;
            }
        }

        /* Prevent horizontal overflow on all screens */
        @media (max-width: 768px) {
            * {
                max-width: 100%;
                box-sizing: border-box;
            }

            html,
            body {
                overflow-x: hidden;
                max-width: 100vw;
            }

            .min-h-screen {
                min-height: 100vh;
                width: 100vw;
                max-width: 100vw;
            }

            /* Ensure all containers respect viewport width */
            .px-4,
            .px-6,
            .px-8 {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .mx-auto {
                margin-left: auto;
                margin-right: auto;
                max-width: calc(100vw - 2rem);
            }

            /* Fix specific responsive issues */
            .max-w-2xl,
            .max-w-4xl,
            .max-w-6xl {
                max-width: calc(100vw - 2rem);
                margin-left: 1rem;
                margin-right: 1rem;
            }
        }

        /* Additional safety for very small screens */
        @media (max-width: 400px) {
            .mx-auto {
                max-width: calc(100vw - 1rem);
            }

            .max-w-2xl,
            .max-w-4xl,
            .max-w-6xl {
                max-width: calc(100vw - 1rem);
                margin-left: 0.5rem;
                margin-right: 0.5rem;
            }
        }
    </style>
</head>

<body class="bg-gray-900 overflow-x-hidden"> <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loading-rocket">🚀</div>
        <div class="loading-text text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl text-center px-4">
            SELAMAT DATANG DI MISSION CONTROL
        </div>

        <div class="name-form">
            <input type="text"
                id="userName"
                class="name-input"
                placeholder="Masukkan nama astronot..."
                maxlength="20"
                autofocus>
            <button id="submitName" class="submit-btn" onclick="submitUserName()">
                🚀 MULAI MISI
            </button>
        </div>
    </div> <!-- Stars Background -->
    <div class="stars" id="stars"></div>

    <!-- Greeting Message -->
<div id="greeting" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-blue-500/20 backdrop-blur-md text-white px-4 py-2 rounded-full border border-blue-500/30 font-orbitron text-sm sm:text-base text-center z-[1000] max-w-[90vw] hidden whitespace-normal break-words"></div>
    <!-- Main Container -->
    <div class="min-h-screen flex items-center justify-center relative py-8 main-content">
        <!-- Planet Background -->
        <div class="planet absolute w-96 h-96 opacity-20 top-10 right-10 floating planet-entrance"></div>

        <!-- Main Content -->
        <div class="text-center z-10 px-4"> <!-- Rocket Icon -->
            <div class="mb-8 flex justify-center rocket-entrance">
                <div class="rocket pulsing">
                    <svg class="w-32 h-32 text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9.5 2c0-1.1.9-2 2-2s2 .9 2 2v2h-4V2zM12 7c-2.8 0-5 2.2-5 5v4c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2v-4c0-2.8-2.2-5-5-5zm0 8c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm-1-4c0-.6.4-1 1-1s1 .4 1 1-.4 1-1 1-1-.4-1-1z" />
                        <path d="M5 12c0-1.1.9-2 2-2s2 .9 2 2-2 4.5-2 4.5S5 13.1 5 12zm12 0c0-1.1-.9-2-2-2s-2 .9-2 2 2 4.5 2 4.5 2-3.4 2-4.5z" />
                    </svg>
                </div>
            </div> <!-- Main Title -->
            <h1 class="text-5xl md:text-7xl font-bold gradient-text mb-6 title-entrance" style="word-wrap: break-word; overflow-wrap: break-word;">
                SITUS DALAM PENGEMBANGAN
            </h1>

            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-blue-300 mb-8 font-light subtitle" style="word-wrap: break-word; overflow-wrap: break-word;">
                Menjelajahi galaksi digital untuk menciptakan pengalaman yang luar biasa
            </p>
            <!-- Apology Message -->
            <div class="bg-red-900 bg-opacity-60 backdrop-blur-lg rounded-xl p-6 mb-8 border border-red-700 max-w-2xl mx-auto content-card">
                <div class="flex items-center justify-center mb-3">
                    <svg class="w-8 h-8 text-red-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="text-xl font-semibold text-red-400">Maaf ya websitenya masih dikembangin nih hehe</h3>
                </div>
                <p class="text-red-200 text-center leading-relaxed">
                    Tapi bakalan kelar 1-2 Minggu lagi kok, ditungguin aja ya! Sementara itu, kamu bisa cek beberapa project yang udah tersedia di bawah ini. Terima kasih atas kesabarannya!
                </p>
            </div> <!-- Available Projects Section -->
            <div class="max-w-6xl mx-auto mb-8 content-card">
                <h2 class="text-3xl font-bold text-center text-white mb-6 gradient-text">
                    🌐 Project yang Tersedia
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 sm:gap-6 mb-8">
                    <!-- Available Project 1 -->
                    <div class="project-card bg-green-900 bg-opacity-60 backdrop-blur-lg rounded-xl p-6 border border-green-700">
                        <div class="flex items-center mb-3">
                            <div class="w-3 h-3 bg-green-500 rounded-full mr-3 animate-pulse status-indicator"></div>
                            <span class="text-green-400 font-semibold text-sm">ONLINE</span>
                        </div>
                        <div class="text-3xl mb-3">
                            📦
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">Gudangku - Sistem Informasi Manajemen Stok Barang</h3>
                        <p class="text-gray-300 text-sm mb-4">Sistem Informasi Manajemen Stok Barang</p>
                        <a href="https://gudangku.martinharahap.software" class="inline-flex items-center text-green-400 hover:text-green-300 text-sm font-medium">
                            Akses Project
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div> <!-- Available Project 2 -->
                    <div class="project-card bg-green-900 bg-opacity-60 backdrop-blur-lg rounded-xl p-6 border border-green-700">
                        <div class="flex items-center mb-3">
                            <div class="w-3 h-3 bg-green-500 rounded-full mr-3 animate-pulse status-indicator"></div>
                            <span class="text-green-400 font-semibold text-sm">ONLINE</span>
                        </div>
                        <div class="text-3xl mb-3">📝</div>
                        <h3 class="text-lg font-semibold text-white mb-2">Blog Personal</h3>
                        <p class="text-gray-300 text-sm mb-4">Artikel dan tutorial teknologi terkini</p>
                        <a href="#" class="inline-flex items-center text-green-400 hover:text-green-300 text-sm font-medium">
                            Akses Project
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div> <!-- Available Project 3 -->

                </div>

                <!-- Coming Soon Section -->
                <h2 class="text-3xl font-bold text-center text-white mb-6 gradient-text">
                    🚀 Coming Soon
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
                    <!-- Coming Soon Project 1 -->
                    <div class="project-card bg-yellow-900 bg-opacity-60 backdrop-blur-lg rounded-xl p-6 border border-yellow-700 relative">
                        <div class="flex items-center mb-3">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-3 animate-pulse status-indicator"></div>
                            <span class="text-yellow-400 font-semibold text-sm">COMING SOON</span>
                        </div>
                        <div class="text-3xl mb-3">🛒</div>
                        <h3 class="text-lg font-semibold text-white mb-2">CODin UTM</h3>
                        <p class="text-gray-300 text-sm mb-3">Platform jual beli berbasis website khusus untuk mahasiswa Universitas Trunojoyo Madura</p>
                        <div class="text-xs text-yellow-400">Target: Q3 2025</div>
                    </div> <!-- Coming Soon Project 2 -->
                    <div class="project-card bg-yellow-900 bg-opacity-60 backdrop-blur-lg rounded-xl p-6 border border-yellow-700">
                        <div class="flex items-center mb-3">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-3 animate-pulse status-indicator"></div>
                            <span class="text-yellow-400 font-semibold text-sm">COMING SOON</span>
                        </div>
                        <div class="text-3xl mb-3">📊</div>
                        <h3 class="text-lg font-semibold text-white mb-2">Hujan ga?</h3>
                        <p class="text-gray-300 text-sm mb-3">Aplikasi Peramalan Cuaca Daerah Telang</p>
                        <div class="text-xs text-yellow-400">Target: Q4 2025</div>
                    </div> <!-- Coming Soon Project 3 -->
                    <div class="project-card bg-yellow-900 bg-opacity-60 backdrop-blur-lg rounded-xl p-6 border border-yellow-700">
                        <div class="flex items-center mb-3">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-3 animate-pulse status-indicator"></div>
                            <span class="text-yellow-400 font-semibold text-sm">COMING SOON</span>
                        </div>
                        <div class="text-3xl mb-3">🤖</div>
                        <h3 class="text-lg font-semibold text-white mb-2">AI Assistant</h3>
                        <p class="text-gray-300 text-sm mb-3">Chatbot AI untuk bantuan otomatis</p>
                        <div class="text-xs text-yellow-400">Target: Q1 2026</div>
                    </div> <!-- Coming Soon Project 4 -->
                    <div class="project-card bg-yellow-900 bg-opacity-60 backdrop-blur-lg rounded-xl p-6 border border-yellow-700">
                        <div class="flex items-center mb-3">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-3 animate-pulse status-indicator"></div>
                            <span class="text-yellow-400 font-semibold text-sm">COMING SOON</span>
                        </div>
                        <div class="text-3xl mb-3">📱</div>
                        <h3 class="text-lg font-semibold text-white mb-2">Jekinskuy</h3>
                        <p class="text-gray-300 text-sm mb-3">Aplikasi mobile cross-platform</p>
                        <div class="text-xs text-yellow-400">Target: Q2 2026</div>
                    </div>
                </div>
            </div>
            <!-- Status Card -->
            <div class="bg-gray-800 bg-opacity-80 backdrop-blur-lg rounded-2xl p-8 mb-8 border border-gray-700 shadow-2xl max-w-md mx-auto content-card">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-4 h-4 bg-yellow-500 rounded-full animate-pulse mr-3"></div>
                    <span class="text-yellow-400 font-semibold">STATUS: DALAM PENGEMBANGAN</span>
                </div>

                <div class="space-y-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-400">Progress:</span>
                        <span class="text-blue-400">75%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-2">
                        <div class="bg-gradient-to-r from-blue-500 to-purple-600 h-2 rounded-full w-3/4 animate-pulse"></div>
                    </div>
                </div>
            </div>
            <!-- Features Coming Soon -->
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-8 max-w-4xl mx-auto content-card">
                <div class="bg-gray-800 bg-opacity-60 backdrop-blur-lg rounded-xl p-6 border border-gray-700">
                    <div class="text-3xl mb-3">🚀</div>
                    <h3 class="text-lg font-semibold text-white mb-2">Performa Tinggi</h3>
                    <p class="text-gray-400 text-sm">Teknologi terdepan untuk kecepatan maksimal</p>
                </div>

                <div class="bg-gray-800 bg-opacity-60 backdrop-blur-lg rounded-xl p-6 border border-gray-700">
                    <div class="text-3xl mb-3">🌟</div>
                    <h3 class="text-lg font-semibold text-white mb-2">Desain Modern</h3>
                    <p class="text-gray-400 text-sm">Interface yang intuitif dan menawan</p>
                </div>

                <div class="bg-gray-800 bg-opacity-60 backdrop-blur-lg rounded-xl p-6 border border-gray-700">
                    <div class="text-3xl mb-3">🛸</div>
                    <h3 class="text-lg font-semibold text-white mb-2">Inovasi Terbaru</h3>
                    <p class="text-gray-400 text-sm">Fitur-fitur revolusioner yang mengagumkan</p>
                </div>
            </div> <!-- Contact Info -->
            <div class="text-center content-card contact-info">
                <p class="text-gray-400 mb-4">Punya pertanyaan? Hubungi mission control:</p>
                <a href="mailto:imanuelmrtn@gmail.com" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-full hover:from-blue-700 hover:to-purple-700 transition duration-300 transform hover:scale-105" style="max-width: calc(100vw - 2rem); word-wrap: break-word; box-sizing: border-box;">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                    Kirim Pesan
                </a>
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-4 h-4 bg-blue-500 rounded-full opacity-60 floating" style="animation-delay: -1s;"></div>
        <div class="absolute bottom-20 right-20 w-6 h-6 bg-purple-500 rounded-full opacity-40 floating" style="animation-delay: -2s;"></div>
        <div class="absolute top-40 right-40 w-3 h-3 bg-pink-500 rounded-full opacity-80 floating" style="animation-delay: -3s;"></div>
        <div class="absolute bottom-40 left-20 w-5 h-5 bg-yellow-500 rounded-full opacity-50 floating" style="animation-delay: -4s;"></div>
    </div>

    <audio id="myAudio" preload="auto" loop style="display: none;">
        <source src="Feast - Tarot.mp3" type="audio/mpeg">
        <source src="Feast - Tarot.ogg" type="audio/ogg">
        <source src="Feast - Tarot.wav" type="audio/wav">
        Browser kamu tidak mendukung pemutar audio.
    </audio>
    <script>
        const audio = document.getElementById('myAudio');
        let userName = '';

        // Function to submit user name and start audio
        function submitUserName() {
            const nameInput = document.getElementById('userName');
            const name = nameInput.value.trim();

            if (name === '') {
                alert('Silakan masukkan nama terlebih dahulu!');
                nameInput.focus();
                return;
            }

            userName = name;

            // Hide loading screen with animation
            const loadingScreen = document.getElementById('loadingScreen');
            loadingScreen.classList.add('fade-out');

            // Show greeting
            setTimeout(() => {
                showGreeting(userName);
                startAudio();
            }, 1000);
        }
        // Function to show greeting
        function showGreeting(name) {
            const greeting = document.getElementById('greeting');

            // Truncate name if too long for very small screens
            let displayName = name;
            const screenWidth = window.innerWidth;

            if (screenWidth <= 280 && name.length > 8) {
                displayName = name.substring(0, 8) + '...';
            } else if (screenWidth <= 320 && name.length > 12) {
                displayName = name.substring(0, 12) + '...';
            } else if (screenWidth <= 375 && name.length > 15) {
                displayName = name.substring(0, 15) + '...';
            } else if (screenWidth <= 480 && name.length > 18) {
                displayName = name.substring(0, 18) + '...';
            }

            greeting.textContent = `👋 Hai, ${displayName}! Selamat datang di Mission Control`;
            greeting.style.display = 'block';
        }

        // Function to start audio with fade in
        function startAudio() {
            audio.volume = 0;
            audio.currentTime = 117;
            audio.play().then(() => {
                // Fade in volume secara bertahap
                let fade = setInterval(() => {
                    if (audio.volume < 1) {
                        audio.volume = Math.min(1, audio.volume + 0.05);
                    } else {
                        clearInterval(fade);
                    }
                }, 200);
            }).catch(err => {
                console.warn("Autoplay gagal:", err);
            });
        }
        // Handle Enter key press in input
        document.addEventListener('DOMContentLoaded', function() {
            const nameInput = document.getElementById('userName');
            nameInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    submitUserName();
                }
            });

            // Handle window resize for greeting responsiveness
            window.addEventListener('resize', function() {
                if (userName && document.getElementById('greeting').style.display === 'block') {
                    showGreeting(userName);
                }
            });

            // Handle orientation change
            window.addEventListener('orientationchange', function() {
                setTimeout(function() {
                    if (userName && document.getElementById('greeting').style.display === 'block') {
                        showGreeting(userName);
                    }
                }, 100);
            });
        });
    </script>

    <script>
        // Generate random stars
        function createStars() {
            const starsContainer = document.getElementById('stars');
            const numStars = 150;

            for (let i = 0; i < numStars; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.left = Math.random() * 100 + '%';
                star.style.top = Math.random() * 100 + '%';
                star.style.width = Math.random() * 3 + 1 + 'px';
                star.style.height = star.style.width;
                star.style.animationDelay = Math.random() * 3 + 's';
                star.style.animationDuration = (Math.random() * 3 + 2) + 's';
                starsContainer.appendChild(star);
            }
        }
        // Initialize stars when page loads
        document.addEventListener('DOMContentLoaded', function() {
            createStars();
            initializeLoadingSequence();
        });

        // Loading sequence controller
        function initializeLoadingSequence() {
            const loadingTexts = [
                "MENGINISIALISASI MISI...",
                "MENGAKTIFKAN SISTEM...",
                "MEMUAT DATA GALAKSI...",
                "MENGHUBUNGKAN KE STASIUN..."
            ];

            let currentTextIndex = 0;
            const loadingTextElement = document.querySelector('.loading-text');

            const textInterval = setInterval(() => {
                currentTextIndex = (currentTextIndex + 1) % loadingTexts.length;
                loadingTextElement.textContent = loadingTexts[currentTextIndex];
            }, 800);

            // Stop text animation when loading completes
            setTimeout(() => {
                clearInterval(textInterval);
                loadingTextElement.textContent = "MISI SIAP DILUNCURKAN!";
            }, 2800);

            // Add entrance animation for stars after loading
            setTimeout(() => {
                const stars = document.querySelectorAll('.star');
                stars.forEach((star, index) => {
                    setTimeout(() => {
                        star.style.opacity = '1';
                        star.style.transform = 'scale(1)';
                    }, index * 10);
                });
            }, 3500);
        }

        // Add click effect to cards
        document.addEventListener('click', function(e) {
            if (e.target.closest('.project-card') || e.target.closest('.content-card')) {
                createClickEffect(e.pageX, e.pageY);
            }
        });

        function createClickEffect(x, y) {
            const effect = document.createElement('div');
            effect.style.position = 'fixed';
            effect.style.left = x + 'px';
            effect.style.top = y + 'px';
            effect.style.width = '20px';
            effect.style.height = '20px';
            effect.style.background = 'radial-gradient(circle, #3b82f6, transparent)';
            effect.style.borderRadius = '50%';
            effect.style.pointerEvents = 'none';
            effect.style.zIndex = '9998';
            effect.style.animation = 'clickRipple 0.6s ease-out forwards';

            // Add keyframe animation
            if (!document.querySelector('#clickEffect')) {
                const style = document.createElement('style');
                style.id = 'clickEffect';
                style.textContent = `
                    @keyframes clickRipple {
                        0% { transform: scale(0) translate(-50%, -50%); opacity: 1; }
                        100% { transform: scale(4) translate(-50%, -50%); opacity: 0; }
                    }
                `;
                document.head.appendChild(style);
            }

            document.body.appendChild(effect);
            setTimeout(() => effect.remove(), 600);
        }

        // Add parallax effect to mouse movement
        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;

            const planet = document.querySelector('.planet');
            if (planet) {
                planet.style.transform = `translate(${mouseX * 20}px, ${mouseY * 20}px)`;
            }

            const floatingElements = document.querySelectorAll('.floating');
            floatingElements.forEach((element, index) => {
                const speed = (index + 1) * 0.5;
                element.style.transform += ` translate(${mouseX * speed}px, ${mouseY * speed}px)`;
            });
        });
    </script>

</body>

</html>