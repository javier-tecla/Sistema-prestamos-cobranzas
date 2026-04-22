<!DOCTYPE html>
<html lang="es" class="scroll-smooth dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Benji · Finanzas Inteligentes · Dark Edition</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        // Paleta Dark sofisticada
                        dark: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b', // Fondo de tarjetas
                            900: '#0f172a', // Fondo principal
                            950: '#020617' // Fondo de navegación/footer
                        }

                    }

                }

            }

        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .glass-nav {
            background: rgba(2, 6, 23, 0.8);
            /* dark-950 con opacidad */
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
        }

        .hero-gradient {
            /* Degradado radial suave desde arriba en modo oscuro */
            background: radial-gradient(circle at 50% -20%, rgba(79, 70, 229, 0.15) 0%, #0f172a 60%);
        }

        .feature-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 255, 255, 0.03);
            background-color: #1e293b;
            /* dark-800 */
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            border-color: rgba(79, 70, 229, 0.4);
            /* indigo-600 suave */
        }

        /* Animación de entrada (Reveal) */
        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.7s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Patrón de grid sutil para fondos */
        .grid-pattern {
            background-image: linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90s, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }
    </style>
</head>

<body class="bg-dark-900 text-dark-200 antialiased overflow-x-hidden">
    <nav class="fixed top-0 w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div
                    class="w-9 h-9 bg-indigo-600 rounded-lg flex items-center justify-center shadow-lg shadow-indigo-900/50 relative overflow-hidden group">
                    <div
                        class="absolute inset-0 bg-indigo-500 scale-0 group-hover:scale-100 transition-transform duration-300 rounded-lg">
                    </div>
                    <span class="text-white font-bold text-xl relative z-10">B</span>
                </div>
                <span class="text-xl font-extrabold tracking-tight text-white">Benji</span>
            </div>
            <div class="flex items-center gap-3">
                <a href="#"
                    class="text-sm font-semibold text-dark-300 hover:text-white transition-colors px-4 py-2">
                    Entrar
                </a>
                <a href="{{ url('login') }}"
                    class="bg-white text-dark-950 px-5 py-2.5 rounded-full text-sm font-bold hover:bg-dark-100 transition-all shadow-md shadow-white/5 active:scale-95">
                    Probar Gratis
                </a>
            </div>
        </div>
    </nav>

    <main>
        <section class="pt-48 pb-24 hero-gradient relative">
            <div class="absolute inset-0 grid-pattern opacity-40 pointer-events-none"></div>
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="text-center max-w-4xl mx-auto">
                    <span
                        class="inline-flex items-center gap-2 px-4 py-1.5 mb-8 text-xs font-bold tracking-widest text-indigo-300 uppercase bg-indigo-950/50 rounded-full border border-indigo-800/50">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                        </span>
                        Nueva Era en Cobranzas
                    </span>
                    <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-8 tracking-tight leading-[1.1]">
                        La infraestructura de préstamos <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">más
                            potente</span>
                    </h1>
                    <p class="text-xl text-dark-300 mb-12 leading-relaxed max-w-2xl mx-auto font-normal opacity-90">
                        Gestiona todo tu ciclo crediticio desde una sola interfaz centralizada. Benji automatiza el
                        trabajo pesado para que te enfoques en crecer.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-5">
                        <a href="{{ url('login') }}"
                            class="w-full sm:w-auto px-10 py-4 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-500 transition-all shadow-lg shadow-indigo-950/30 active:scale-95 block text-center">
                            Probar Demo
                        </a>
                        <button
                            class="w-full sm:w-auto px-10 py-4 bg-dark-800 border border-dark-700 text-dark-100 font-bold rounded-xl hover:bg-dark-700 hover:border-dark-600 transition-all active:scale-95">
                            Ver Documentación
                        </button>
                    </div>
                </div>
                <div class="mt-24 relative reveal">
                    <div
                        class="absolute -inset-10 bg-indigo-500/10 blur-[100px] rounded-full opacity-70 pointer-events-none">
                    </div>
                    <div
                        class="relative bg-dark-950 rounded-2xl shadow-2xl shadow-black/50 border border-dark-800 p-2 overflow-hidden group">
                        <div
                            class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-indigo-500/50 to-transparent">
                        </div>
                        <img src="{{ url('/img/web.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 border-y border-dark-800 bg-dark-950/50">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-10">
                <div class="text-center reveal">
                    <div class="text-4xl font-extrabold text-white tracking-tight">+$50M</div>
                    <div class="text-sm text-dark-400 font-medium mt-2 uppercase tracking-wider">Procesado</div>
                </div>
                <div class="text-center reveal" style="transition-delay: 0.1s">
                    <div class="text-4xl font-extrabold text-white tracking-tight">500+</div>
                    <div class="text-sm text-dark-400 font-medium mt-2 uppercase tracking-wider">Instituciones</div>
                </div>
                <div class="text-center reveal" style="transition-delay: 0.2s">
                    <div class="text-4xl font-extrabold text-white tracking-tight">12ms</div>
                    <div class="text-sm text-dark-400 font-medium mt-2 uppercase tracking-wider">Latencia API</div>
                </div>
                <div class="text-center reveal" style="transition-delay: 0.3s">
                    <div class="text-4xl font-extrabold text-white tracking-tight">24/7</div>
                    <div class="text-sm text-dark-400 font-medium mt-2 uppercase tracking-wider">Soporte</div>
                </div>
            </div>
        </section>

        <section id="modulos" class="py-28 bg-dark-900 relative">
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8 reveal">
                    <div class="max-w-2xl">
                        <span class="text-indigo-400 font-semibold mb-2 block">Potencia sin límites</span>
                        <h2 class="text-4xl md:text-5xl font-bold text-white mb-5 tracking-tight">Ecosistema modular
                        </h2>
                        <p class="text-lg text-dark-300 opacity-90">Herramientas diseñadas para trabajar juntas o
                            integrarse en tu flujo actual mediante nuestra API robusta.</p>
                    </div>
                    <a href="#"
                        class="text-indigo-400 font-bold flex items-center gap-2 group border border-indigo-900/50 px-5 py-3 rounded-xl bg-indigo-950/20 hover:bg-indigo-950/50 transition-all">
                        Ver todos los módulos <span class="group-hover:translate-x-1 transition-transform">→</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="feature-card p-10 rounded-2xl reveal group">
                        <div
                            class="w-14 h-14 bg-indigo-950 border border-indigo-800 rounded-xl flex items-center justify-center mb-8 shadow-inner group-hover:scale-110 transition-transform duration-300">
                            <span class="text-3xl">💰</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-indigo-300 transition-colors">
                            Gestión de Préstamos</h3>
                        <p class="text-dark-300 text-base leading-relaxed opacity-90">Crea contratos personalizados,
                            define tasas de interés y plazos de amortización en segundos.</p>
                    </div>
                    <div class="feature-card p-10 rounded-2xl reveal group" style="transition-delay: 0.1s">
                        <div
                            class="w-14 h-14 bg-dark-700 border border-dark-600 rounded-xl flex items-center justify-center mb-8 shadow-inner group-hover:scale-110 transition-transform duration-300">
                            <span class="text-3xl">💳</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-dark-100 transition-colors">
                            Cobranza Inteligente</h3>
                        <p class="text-dark-300 text-base leading-relaxed opacity-90">Procesa pagos automáticamente y
                            mantén un historial impecable de cada transacción.</p>
                    </div>
                    <div class="feature-card p-10 rounded-2xl reveal group" style="transition-delay: 0.2s">
                        <div
                            class="w-14 h-14 bg-indigo-950 border border-indigo-800 rounded-xl flex items-center justify-center mb-8 shadow-inner group-hover:scale-110 transition-transform duration-300">
                            <span class="text-3xl">🔔</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-indigo-300 transition-colors">
                            Notificaciones</h3>
                        <p class="text-dark-300 text-base leading-relaxed opacity-90">Envío automático de recordatorios
                            por WhatsApp, SMS y Email antes del vencimiento.</p>
                    </div>
                    <div class="feature-card p-10 rounded-2xl reveal group">
                        <div
                            class="w-14 h-14 bg-dark-700 border border-dark-600 rounded-xl flex items-center justify-center mb-8 shadow-inner group-hover:scale-110 transition-transform duration-300">
                            <span class="text-3xl">👥</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-dark-100 transition-colors">CRM
                            Clientes</h3>
                        <p class="text-dark-300 text-base leading-relaxed opacity-90">Perfil detallado de cada deudor
                            con calificación de riesgo y bóveda de documentos digitales.</p>
                    </div>
                    <div class="feature-card p-10 rounded-2xl reveal group" style="transition-delay: 0.1s">
                        <div
                            class="w-14 h-14 bg-indigo-950 border border-indigo-800 rounded-xl flex items-center justify-center mb-8 shadow-inner group-hover:scale-110 transition-transform duration-300">
                            <span class="text-3xl">💾</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-indigo-300 transition-colors">
                            Backups Enterprise</h3>
                        <p class="text-dark-300 text-base leading-relaxed opacity-90">Tu información está siempre
                            segura y disponible con respaldos cifrados de extremo a extremo.</p>
                    </div>
                    <div class="feature-card p-10 rounded-2xl reveal group" style="transition-delay: 0.2s">
                        <div
                            class="w-14 h-14 bg-dark-700 border border-dark-600 rounded-xl flex items-center justify-center mb-8 shadow-inner group-hover:scale-110 transition-transform duration-300">
                            <span class="text-3xl">⚙️</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-dark-100 transition-colors">
                            Personalización</h3>
                        <p class="text-dark-300 text-base leading-relaxed opacity-90">Adapta el sistema a las leyes,
                            impuestos y monedas de tu región sin necesidad de código.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 relative overflow-hidden">
            <div class="absolute inset-0 bg-indigo-600/5 blur-[120px] rounded-full pointer-events-none"></div>
            <div class="max-w-5xl mx-auto px-6 relative z-10 reveal">
                <div
                    class="bg-indigo-600 rounded-[2.5rem] p-12 md:p-20 text-center relative overflow-hidden shadow-2xl shadow-black/30">
                    <div class="absolute inset-0 grid-pattern opacity-10 pointer-events-none"></div>
                    <h2
                        class="text-3xl md:text-5xl font-extrabold text-white mb-7 relative z-10 tracking-tight leading-tight">
                        ¿Listo para modernizar<br> tu cartera?</h2>
                    <p class="text-indigo-100 text-xl mb-12 max-w-xl mx-auto relative z-10 font-normal opacity-90">
                        Únete a las instituciones que ya están ahorrando un 40% de tiempo en gestión administrativa con
                        Benji.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-5 relative z-10">
                        <a href="#"
                            class="px-10 py-4 bg-white text-dark-950 font-bold rounded-xl hover:bg-dark-100 transition-all shadow-lg active:scale-95">
                            Empezar ahora — Es Gratis
                        </a>
                        <a href="#"
                            class="px-10 py-4 bg-indigo-700 text-white font-bold rounded-xl hover:bg-indigo-800 transition-all border border-indigo-500/50 active:scale-95">
                            Hablar con ventas
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark-950 pt-24 pb-12 border-t border-dark-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div
                            class="w-9 h-9 bg-indigo-600 rounded flex items-center justify-center text-white font-bold text-lg">
                            B</div>
                        <span class="text-2xl font-extrabold text-white tracking-tight">Benji</span>
                    </div>
                    <p class="text-dark-400 text-sm leading-relaxed max-w-xs">La solución definitiva para la gestión de
                        activos financieros y cobranza automatizada en Latinoamérica.</p>
                </div>
                <div class="md:ml-auto">
                    <h4 class="font-bold mb-7 text-white tracking-wide uppercase text-xs">Producto</h4>
                    <ul class="text-sm text-dark-300 space-y-4">
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Características</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">API Docs</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Seguridad</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Precios</a></li>
                    </ul>
                </div>
                <div class="md:ml-auto">
                    <h4 class="font-bold mb-7 text-white tracking-wide uppercase text-xs">Compañía</h4>
                    <ul class="text-sm text-dark-300 space-y-4">
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Sobre nosotros</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Carreras</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Contacto</a></li>
                    </ul>
                </div>
                <div class="md:ml-auto">
                    <h4 class="font-bold mb-7 text-white tracking-wide uppercase text-xs">Legal</h4>
                    <ul class="text-sm text-dark-300 space-y-4">
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Privacidad</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Términos</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Licencia</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-10 border-t border-dark-800 flex flex-col md:flex-row justify-between items-center gap-5">
                <p class="text-xs text-dark-500">© 2026 Benji Financial Systems S.A. Todos los derechos reservados.</p>
                <div class="flex gap-5">
                    <div
                        class="w-9 h-9 rounded-full bg-dark-800 hover:bg-dark-700 transition-colors cursor-pointer border border-dark-700 flex items-center justify-center text-dark-400 hover:text-white">
                        TW</div>
                    <div
                        class="w-9 h-9 rounded-full bg-dark-800 hover:bg-dark-700 transition-colors cursor-pointer border border-dark-700 flex items-center justify-center text-dark-400 hover:text-white">
                        LI</div>
                    <div
                        class="w-9 h-9 rounded-full bg-dark-800 hover:bg-dark-700 transition-colors cursor-pointer border border-dark-700 flex items-center justify-center text-dark-400 hover:text-white">
                        GH</div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // Animación de entrada al hacer scroll (Intersection Observer)
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                }
            });
        }, {
            threshold: 0.1 // Se activa cuando el 10% del elemento es visible
        });
        const reveals = document.querySelectorAll(".reveal");
        reveals.forEach((el) => observer.observe(el));
    </script>
</body>

</html>
