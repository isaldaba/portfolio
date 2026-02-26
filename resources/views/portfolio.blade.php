<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=space-grotesk:500,700,800&display=swap" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-slate-950 text-slate-100 antialiased">
    <header class="border-b border-slate-800">
        <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
            <p class="text-lg font-semibold">My Portfolio</p>
            <div class="flex items-center gap-5 text-sm text-slate-300">
                <a href="#about" class="hover:text-white">About</a>
                <a href="#experience" class="hover:text-white">Experience</a>
                <a href="#projects" class="hover:text-white">Projects</a>
                <a href="#contact" class="hover:text-white">Contact</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="mx-auto max-w-6xl px-6 py-20">
            <p class="mb-4 inline-block rounded-full bg-slate-800 px-3 py-1 text-xs font-medium text-slate-300">Laravel 12 • PHP 8.2 • Tailwind CSS</p>
            <h1 class="max-w-3xl text-4xl font-bold leading-tight tracking-tight md:text-5xl [font-family:'Space_Grotesk',sans-serif]">Hi, I’m Your Ircis Sadi Aldaba. I build clean and fast web apps and I am a Full Web Developer currently working in ITech-rar, Solutions Inc..</h1>
            <p class="mt-6 max-w-2xl text-base text-slate-300 md:text-lg">This is a simple portfolio starter built with Laravel Blade and Tailwind. Update this content with your real bio, projects, and contact links.</p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="#projects" class="rounded-lg bg-indigo-500 px-5 py-3 text-sm font-semibold text-white hover:bg-indigo-400">View Projects</a>
                <a href="#experience" class="rounded-lg border border-slate-700 px-5 py-3 text-sm font-semibold text-slate-200 hover:bg-slate-800">Past Jobs</a>
                <a href="#contact" class="rounded-lg border border-slate-700 px-5 py-3 text-sm font-semibold text-slate-200 hover:bg-slate-800">Contact Me</a>
            </div>
        </section>

        <section id="about" class="border-y border-slate-800 bg-slate-900/40">
            <div class="mx-auto max-w-6xl px-6 py-16">
                <h2 data-reveal data-delay="0" class="inline-flex items-center rounded-lg border border-slate-700 bg-slate-900 px-4 py-2 text-2xl font-semibold text-white opacity-0 -translate-x-12 transition-all duration-700 ease-out shadow-sm shadow-indigo-500/10 [font-family:'Space_Grotesk',sans-serif]">About Me</h2>
                <p data-reveal data-delay="120" class="mt-4 max-w-3xl text-slate-300 opacity-0 -translate-x-12 transition-all duration-700 ease-out">I’m a web developer focused on building practical and user-friendly applications. I enjoy working with Laravel for backend structure and Tailwind for clean responsive interfaces.</p>
            </div>
        </section>

        <section id="experience" class="mx-auto max-w-6xl px-6 py-16">
            <h2 data-reveal data-delay="0" class="inline-flex items-center rounded-lg border border-slate-700 bg-slate-900 px-4 py-2 text-2xl font-semibold text-white opacity-0 -translate-x-12 transition-all duration-700 ease-out shadow-sm shadow-indigo-500/10 [font-family:'Space_Grotesk',sans-serif]">Experience</h2>
            <div class="mt-8 grid gap-6 md:grid-cols-3">
                <article data-reveal data-delay="80" class="relative cursor-pointer rounded-xl border border-slate-800 bg-slate-900 p-5 opacity-0 -translate-x-12 transition-all duration-700 ease-out hover:-translate-y-2 hover:scale-[1.08] hover:border-slate-600 hover:z-10 active:scale-110">
                    <p class="inline-flex rounded-full border border-indigo-400/20 bg-indigo-500/10 px-2.5 py-1 text-sm font-semibold tracking-wide text-indigo-300">2025 - To Date</p>
                    <h3 class="mt-3 text-3xl font-semibold text-slate-50">Jr. Full-Stack Web Developer</h3>
                    <p class="mt-1 text-sm font-medium text-sky-300">ITech-RAR / Kumosoft, Mindanao Branch</p>
                    <p class="mt-3 text-sm leading-relaxed text-slate-200">Currently working as a Junior Full-Stack Developer, building new features and functions, debugging issues, and maintaining school websites in Mindanao while providing technical support for system-related concerns.</p>
                </article>
                <article data-reveal data-delay="160" class="relative cursor-pointer rounded-xl border border-slate-800 bg-slate-900 p-5 opacity-0 -translate-x-12 transition-all duration-700 ease-out hover:-translate-y-2 hover:scale-[1.08] hover:border-slate-600 hover:z-10 active:scale-110">
                    <p class="inline-flex rounded-full border border-violet-400/20 bg-violet-500/10 px-2.5 py-1 text-sm font-semibold tracking-wide text-violet-300">Nov 2023 - Apr 2024</p>
                    <h3 class="mt-3 text-3xl font-semibold text-slate-50">IT Staff / Tech Support</h3>
                    <p class="mt-1 text-sm font-medium text-sky-300">Land Registration Systems Inc. (LARES) - Calbayog</p>
                    <p class="mt-3 text-sm leading-relaxed text-slate-200">Served as Site Lead / IT Staff, handled on-site technical concerns, and managed incident reports using the software developed by LARES.</p>
                </article>
                <div id="experience-extra" class="hidden">
                    <article data-reveal data-delay="0" class="relative cursor-pointer rounded-xl border border-slate-800 bg-slate-900 p-5 opacity-0 -translate-x-12 transition-all duration-700 ease-out hover:-translate-y-2 hover:scale-[1.08] hover:border-slate-600 hover:z-10 active:scale-110">
                        <p class="inline-flex rounded-full border border-cyan-400/20 bg-cyan-500/10 px-2.5 py-1 text-sm font-semibold tracking-wide text-cyan-300">Feb 2023 - May 2023</p>
                        <h3 class="mt-3 text-3xl font-semibold text-slate-50">Web Developer Intern</h3>
                        <p class="mt-1 text-sm font-medium text-sky-300">Nero Printing Services and Trading - Cebu</p>
                        <p class="mt-3 text-sm leading-relaxed text-slate-200">Completed web development internship and built a website for the company.</p>
                    </article>
                </div>
            </div>
            <button id="experience-toggle" type="button" class="mt-6 rounded-lg border border-slate-700 px-4 py-2 text-sm font-semibold text-slate-200 transition hover:bg-slate-800">See More</button>
        </section>

        <section id="projects" class="mx-auto max-w-6xl px-6 py-16">
            <h2 data-reveal data-delay="0" class="inline-flex items-center rounded-lg border border-slate-700 bg-slate-900 px-4 py-2 text-2xl font-semibold text-white opacity-0 -translate-x-12 transition-all duration-700 ease-out shadow-sm shadow-indigo-500/10 [font-family:'Space_Grotesk',sans-serif]">Projects</h2>
            <div class="mt-8 grid gap-6 md:grid-cols-3">
                <article data-reveal data-delay="80" class="rounded-xl border border-slate-800 bg-slate-900 p-5 opacity-0 -translate-x-12 transition-all duration-700 ease-out">
                    <h3 class="text-lg font-semibold">Project One</h3>
                    <p class="mt-2 text-sm text-slate-300">Short description of your first project.</p>
                </article>
                <article data-reveal data-delay="160" class="rounded-xl border border-slate-800 bg-slate-900 p-5 opacity-0 -translate-x-12 transition-all duration-700 ease-out">
                    <h3 class="text-lg font-semibold">Project Two</h3>
                    <p class="mt-2 text-sm text-slate-300">Short description of your second project.</p>
                </article>
                <div id="projects-extra" class="hidden">
                    <article data-reveal data-delay="0" class="rounded-xl border border-slate-800 bg-slate-900 p-5 opacity-0 -translate-x-12 transition-all duration-700 ease-out">
                        <h3 class="text-lg font-semibold">Project Three</h3>
                        <p class="mt-2 text-sm text-slate-300">Short description of your third project.</p>
                    </article>
                </div>
            </div>
            <button id="projects-toggle" type="button" class="mt-6 rounded-lg border border-slate-700 px-4 py-2 text-sm font-semibold text-slate-200 transition hover:bg-slate-800">See More</button>
        </section>

        <section id="contact" class="border-t border-slate-800 bg-slate-900/40">
            <div class="mx-auto max-w-6xl px-6 py-16">
                <h2 class="inline-flex items-center rounded-lg border border-slate-700 bg-slate-900 px-4 py-2 text-2xl font-semibold text-white shadow-sm shadow-indigo-500/10 [font-family:'Space_Grotesk',sans-serif]">Contact me</h2>
                <div class="group mt-4 inline-flex items-center gap-3">
                    <button id="copy-phone" type="button" data-phone="+639310194370" class="text-2xl font-semibold transition duration-200 hover:scale-105">
                        +639310194370
                    </button>
                    <span id="copy-phone-label" class="text-sm text-slate-400 opacity-0 transition-opacity duration-200 group-hover:opacity-100">Copy</span>
                </div>
                <p class="mt-4 text-slate-300">Email: <a href="mailto:ircisaldaba97@gmail.com" class="hover:text-white hover:underline">ircisaldaba97@gmail.com</a></p>
                <p class="mt-2 flex flex-wrap gap-2 text-slate-300">
                    <a href="https://www.linkedin.com/in/ircis-sadi-aldaba-921390296/" target="_blank" rel="noopener noreferrer" class="hover:text-white hover:underline">LinkedIn</a>
                    <span>/</span>
                    <a href="https://github.com/isaldaba" target="_blank" rel="noopener noreferrer" class="hover:text-white hover:underline">GitHub (isaldaba)</a>
                    <span>/</span>
                    <a href="https://github.com/IrcisSadi" target="_blank" rel="noopener noreferrer" class="hover:text-white hover:underline">GitHub (IrcisSadi)</a>
                </p>
            </div>
        </section>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const copyPhoneButton = document.getElementById('copy-phone');
            const copyPhoneLabel = document.getElementById('copy-phone-label');
            const revealElements = document.querySelectorAll('[data-reveal]');

            const revealItem = (element) => {
                element.classList.remove('opacity-0', '-translate-x-12');
                element.classList.add('opacity-100', 'translate-x-0');
            };

            const hideItem = (element) => {
                element.classList.remove('opacity-100', 'translate-x-0');
                element.classList.add('opacity-0', '-translate-x-12');
            };

            revealElements.forEach((element) => {
                const delay = Number(element.dataset.delay ?? 0);
                element.style.transitionDelay = `${delay}ms`;
            });

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        revealItem(entry.target);
                        return;
                    }

                    hideItem(entry.target);
                });
            }, { threshold: 0.18 });

            revealElements.forEach((element) => {
                revealObserver.observe(element);
            });

            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                anchor.addEventListener('click', () => {
                    const sectionId = anchor.getAttribute('href');

                    if (!sectionId || sectionId === '#') {
                        return;
                    }

                    const section = document.querySelector(sectionId);

                    if (!section) {
                        return;
                    }

                    section.querySelectorAll('[data-reveal]').forEach((element) => {
                        revealItem(element);
                    });
                });
            });

            const setupExpandableSection = (buttonId, targetId) => {
                const toggleButton = document.getElementById(buttonId);
                const target = document.getElementById(targetId);

                if (!toggleButton || !target) {
                    return;
                }

                toggleButton.addEventListener('click', () => {
                    const isHidden = target.classList.contains('hidden');

                    if (isHidden) {
                        target.classList.remove('hidden');
                        toggleButton.textContent = 'See Less';

                        target.querySelectorAll('[data-reveal]').forEach((element) => {
                            revealObserver.observe(element);
                        });

                        return;
                    }

                    target.classList.add('hidden');
                    toggleButton.textContent = 'See More';
                });
            };

            setupExpandableSection('experience-toggle', 'experience-extra');
            setupExpandableSection('projects-toggle', 'projects-extra');

            if (!copyPhoneButton) {
                return;
            }

            copyPhoneButton.addEventListener('click', async () => {
                const phoneNumber = copyPhoneButton.dataset.phone ?? copyPhoneButton.textContent?.trim() ?? '';

                if (!phoneNumber) {
                    return;
                }

                try {
                    await navigator.clipboard.writeText(phoneNumber);
                } catch {
                    const tempInput = document.createElement('textarea');
                    tempInput.value = phoneNumber;
                    tempInput.style.position = 'fixed';
                    tempInput.style.opacity = '0';
                    document.body.appendChild(tempInput);
                    tempInput.focus();
                    tempInput.select();
                    document.execCommand('copy');
                    document.body.removeChild(tempInput);
                }

                if (copyPhoneLabel) {
                    copyPhoneLabel.textContent = 'Copied!';

                    window.setTimeout(() => {
                        copyPhoneLabel.textContent = 'Copy';
                    }, 1200);
                }
            });
        });
    </script>
</body>
</html>
