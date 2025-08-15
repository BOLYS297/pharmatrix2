<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 - Page non trouvée</title>
    <link rel="stylesheet" href="404-styles.css" />
    <style>
        /* Variables CSS pour faciliter la personnalisation */
        :root {
            --primary-color: #6366f1;
            --secondary-color: #8b5cf6;
            --accent-color: #06b6d4;
            --pink-color: #ec4899;
            --text-white: #ffffff;
            --text-gray: #d1d5db;
            --text-dark: #374151;
            --background-dark: #0f172a;
            --glass-bg: rgba(255, 255, 255, 0.1);
            --shadow-color: rgba(99, 102, 241, 0.3);
        }

        /* Reset et styles de base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg,
                    var(--background-dark) 0%,
                    #1e1b4b 50%,
                    #312e81 100%);
            color: var(--text-white);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Particules d'arrière-plan */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 50%;
            opacity: 0.6;
            animation: float 6s ease-in-out infinite;
        }

        .particle:nth-child(1) {
            top: 20%;
            left: 10%;
            background: var(--accent-color);
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            top: 40%;
            right: 20%;
            background: var(--pink-color);
            animation-delay: 1s;
        }

        .particle:nth-child(3) {
            bottom: 40%;
            left: 20%;
            background: var(--secondary-color);
            animation-delay: 2s;
        }

        .particle:nth-child(4) {
            top: 60%;
            right: 10%;
            background: #fbbf24;
            animation-delay: 3s;
        }

        .particle:nth-child(5) {
            bottom: 20%;
            right: 30%;
            background: #10b981;
            animation-delay: 4s;
        }

        /* Container principal */
        .container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        /* Section d'erreur */
        .error-section {
            text-align: center;
            max-width: 600px;
            animation: slideIn 1s ease-out;
        }

        /* Code d'erreur 404 */
        .error-code {
            font-size: 8rem;
            font-weight: 900;
            background: linear-gradient(135deg,
                    var(--primary-color),
                    var(--accent-color));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 50px var(--shadow-color);
            margin-bottom: 1rem;
            animation: glow 2s ease-in-out infinite alternate;
        }

        /* Rocket emoji */
        .rocket {
            font-size: 4rem;
            animation: bounce 2s ease-in-out infinite;
            margin: 1rem 0;
        }

        /* Titre d'erreur */
        .error-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-white);
        }

        /* Description */
        .error-description {
            font-size: 1.2rem;
            color: var(--text-gray);
            margin-bottom: 3rem;
            line-height: 1.6;
        }

        /* Conteneur des boutons */
        .buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 3rem;
        }

        /* Styles des boutons */
        .btn {
            padding: 1rem 2rem;
            border-radius: 1rem;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: linear-gradient(135deg,
                    var(--primary-color),
                    var(--secondary-color));
            color: var(--text-white);
            box-shadow: 0 10px 30px var(--shadow-color);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px var(--shadow-color);
        }

        .btn-secondary {
            background: var(--glass-bg);
            color: var(--text-white);
            border: 1px solid rgba(255, 255, 255, 0.2);
            /* backdrop-filter: blur(10px); */
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        /* Statistiques */
        .stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 900;
            background: linear-gradient(135deg,
                    var(--accent-color),
                    var(--pink-color));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--text-gray);
        }

        /* Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 50px var(--shadow-color);
            }

            to {
                text-shadow: 0 0 80px var(--shadow-color),
                    0 0 100px var(--primary-color);
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .error-code {
                font-size: 6rem;
            }

            .error-title {
                font-size: 2rem;
            }

            .error-description {
                font-size: 1rem;
            }

            .buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 300px;
            }

            .stats {
                gap: 2rem;
            }
        }

        @media (max-width: 480px) {
            .error-code {
                font-size: 4rem;
            }

            .error-title {
                font-size: 1.5rem;
            }

            .stats {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Particules d'arrière-plan -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Contenu principal -->
    <div class="container">
        <!-- Section 404 -->
        <div class="error-section">
            <h1 class="error-code">404</h1>
            <div class="rocket">🚀</div>
            <h2 class="error-title">Oups ! Page non trouvée</h2>
            <p class="error-description">
                Il semble que cette page se soit envolée vers l'espace. Retournons à
                la base !
            </p>

            <!-- Boutons d'action -->
            <div class="buttons">
                <a href="/" class="btn btn-primary" id="homeBtn">
                    🏠 Retour à l'accueil
                </a>
                <a
                    href="javascript:history.back()"
                    class="btn btn-secondary"
                    id="backBtn">
                    ← Page précédente
                </a>
            </div>

            <!-- Statistiques -->
            <div class="stats">
                <div class="stat">
                    <div class="stat-number">∞</div>
                    <div class="stat-label">Possibilités</div>
                </div>
                <div class="stat">
                    <div class="stat-number">0</div>
                    <div class="stat-label">Pages trouvées</div>
                </div>
                <div class="stat">
                    <div class="stat-number">1</div>
                    <div class="stat-label">Solution</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Script pour la page 404 - Simple et facile à modifier

        // Attendre que la page soit chargée
        document.addEventListener("DOMContentLoaded", function() {
            // Ajouter des effets d'interaction aux boutons
            const buttons = document.querySelectorAll(".btn");

            buttons.forEach((button) => {
                // Effet de clic
                button.addEventListener("click", function(e) {
                    // Créer un effet de ripple
                    const ripple = document.createElement("span");
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.width = ripple.style.height = size + "px";
                    ripple.style.left = x + "px";
                    ripple.style.top = y + "px";
                    ripple.classList.add("ripple");

                    this.appendChild(ripple);

                    // Supprimer l'effet après l'animation
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Ajouter des particules supplémentaires dynamiquement
            createFloatingShapes();

            // Effet de parallaxe léger sur le mouvement de la souris
            document.addEventListener("mousemove", function(e) {
                const particles = document.querySelectorAll(".particle");
                const mouseX = e.clientX / window.innerWidth;
                const mouseY = e.clientY / window.innerHeight;

                particles.forEach((particle, index) => {
                    const speed = (index + 1) * 0.5;
                    const x = mouseX * speed;
                    const y = mouseY * speed;

                    particle.style.transform = `translate(${x}px, ${y}px)`;
                });
            });

            // Animation du code d'erreur au survol
            const errorCode = document.querySelector(".error-code");
            if (errorCode) {
                errorCode.addEventListener("mouseenter", function() {
                    this.style.transform = "scale(1.1)";
                    this.style.transition = "transform 0.3s ease";
                });

                errorCode.addEventListener("mouseleave", function() {
                    this.style.transform = "scale(1)";
                });
            }

            // Compter les clics sur les boutons (juste pour le fun)
            let clickCount = 0;
            const homeBtn = document.getElementById("homeBtn");
            const backBtn = document.getElementById("backBtn");

            if (homeBtn) {
                homeBtn.addEventListener("click", function() {
                    clickCount++;
                    console.log(`Bouton accueil cliqué ${clickCount} fois`);
                });
            }

            if (backBtn) {
                backBtn.addEventListener("click", function() {
                    clickCount++;
                    console.log(`Bouton retour cliqué ${clickCount} fois`);
                });
            }
        });

        // Fonction pour créer des formes flottantes supplémentaires
        function createFloatingShapes() {
            const container = document.querySelector(".particles");
            const shapes = ["◆", "●", "▲", "★", "♦"];
            const colors = ["#6366f1", "#8b5cf6", "#06b6d4", "#ec4899", "#10b981"];

            for (let i = 0; i < 3; i++) {
                const shape = document.createElement("div");
                shape.className = "floating-shape";
                shape.textContent = shapes[Math.floor(Math.random() * shapes.length)];
                shape.style.cssText = `
            position: absolute;
            font-size: 1.5rem;
            color: ${colors[Math.floor(Math.random() * colors.length)]};
            opacity: 0.4;
            animation: float 8s ease-in-out infinite;
            animation-delay: ${Math.random() * 4}s;
            top: ${Math.random() * 80 + 10}%;
            left: ${Math.random() * 80 + 10}%;
            pointer-events: none;
        `;

                container.appendChild(shape);
            }
        }

        // Ajouter le style CSS pour l'effet ripple directement via JavaScript
        const style = document.createElement("style");
        style.textContent = `
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }
    
    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    .btn {
        position: relative;
        overflow: hidden;
    }
`;
        document.head.appendChild(style);

        // Fonction utilitaire pour changer les couleurs facilement
        function changeTheme(primaryColor, secondaryColor, accentColor) {
            const root = document.documentElement;
            root.style.setProperty("--primary-color", primaryColor);
            root.style.setProperty("--secondary-color", secondaryColor);
            root.style.setProperty("--accent-color", accentColor);
        }

        // Exemple d'utilisation : changeTheme('#ff6b6b', '#4ecdc4', '#45b7d1');

        // Fonction pour ajouter un message personnalisé
        function setCustomMessage(title, description) {
            const titleElement = document.querySelector(".error-title");
            const descElement = document.querySelector(".error-description");

            if (titleElement) titleElement.textContent = title;
            if (descElement) descElement.textContent = description;
        }

        // Exemple d'utilisation : setCustomMessage('Oops!', 'Cette page a disparu dans un trou noir!');
    </script>
</body>

</html>