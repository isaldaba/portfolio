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
                <h2 class="text-2xl font-semibold">About Me</h2>
                <p class="mt-4 max-w-3xl text-slate-300">I’m a web developer focused on building practical and user-friendly applications. I enjoy working with Laravel for backend structure and Tailwind for clean responsive interfaces.</p>
            </div>
        </section>

        <section id="experience" class="mx-auto max-w-6xl px-6 py-16">
            <h2 class="text-2xl font-semibold text-slate-50">Experience</h2>
            <div class="mt-8 grid gap-6 md:grid-cols-3">
                <article class="relative cursor-pointer rounded-xl border border-slate-800 bg-slate-900 p-5 transition duration-300 ease-out hover:-translate-y-2 hover:scale-[1.08] hover:border-slate-600 hover:z-10 active:scale-110">
                    <p class="inline-flex rounded-full border border-indigo-400/20 bg-indigo-500/10 px-2.5 py-1 text-sm font-semibold tracking-wide text-indigo-300">2025 - To Date</p>
                    <h3 class="mt-3 text-3xl font-semibold text-slate-50">Jr. Full-Stack Web Developer</h3>
                    <p class="mt-1 text-sm font-medium text-sky-300">ITech-RAK / Kumosoft, Mindanao Branch</p>
                    <p class="mt-3 text-sm leading-relaxed text-slate-200">Currently working as a Junior Full-Stack Developer, building new features and functions, debugging issues, and maintaining school websites in Mindanao while providing technical support for system-related concerns.</p>
                </article>
                <article class="relative cursor-pointer rounded-xl border border-slate-800 bg-slate-900 p-5 transition duration-300 ease-out hover:-translate-y-2 hover:scale-[1.08] hover:border-slate-600 hover:z-10 active:scale-110">
                    <p class="inline-flex rounded-full border border-violet-400/20 bg-violet-500/10 px-2.5 py-1 text-sm font-semibold tracking-wide text-violet-300">Nov 2023 - Apr 2024</p>
                    <h3 class="mt-3 text-3xl font-semibold text-slate-50">IT Staff / Tech Support</h3>
                    <p class="mt-1 text-sm font-medium text-sky-300">Land Registration Systems Inc. (LARES) - Calbayog</p>
                    <p class="mt-3 text-sm leading-relaxed text-slate-200">Served as Site Lead / IT Staff, handled on-site technical concerns, and managed incident reports using the software developed by LARES.</p>
                </article>
                <article class="relative cursor-pointer rounded-xl border border-slate-800 bg-slate-900 p-5 transition duration-300 ease-out hover:-translate-y-2 hover:scale-[1.08] hover:border-slate-600 hover:z-10 active:scale-110">
                    <p class="inline-flex rounded-full border border-cyan-400/20 bg-cyan-500/10 px-2.5 py-1 text-sm font-semibold tracking-wide text-cyan-300">Feb 2023 - May 2023</p>
                    <h3 class="mt-3 text-3xl font-semibold text-slate-50">Web Developer Intern</h3>
                    <p class="mt-1 text-sm font-medium text-sky-300">Nero Printing Services and Trading - Cebu</p>
                    <p class="mt-3 text-sm leading-relaxed text-slate-200">Completed web development internship and built a website for the company.</p>
                </article>
            </div>
        </section>

        <section id="projects" class="mx-auto max-w-6xl px-6 py-16">
            <h2 class="text-2xl font-semibold">Projects</h2>
            <div class="mt-8 grid gap-6 md:grid-cols-3">
                <article class="rounded-xl border border-slate-800 bg-slate-900 p-5">
                    <h3 class="text-lg font-semibold">Project One</h3>
                    <p class="mt-2 text-sm text-slate-300">Short description of your first project.</p>
                </article>
                <article class="rounded-xl border border-slate-800 bg-slate-900 p-5">
                    <h3 class="text-lg font-semibold">Project Two</h3>
                    <p class="mt-2 text-sm text-slate-300">Short description of your second project.</p>
                </article>
                <article class="rounded-xl border border-slate-800 bg-slate-900 p-5">
                    <h3 class="text-lg font-semibold">Project Three</h3>
                    <p class="mt-2 text-sm text-slate-300">Short description of your third project.</p>
                </article>
            </div>
        </section>

        <section id="contact" class="border-t border-slate-800 bg-slate-900/40">
            <div class="mx-auto max-w-6xl px-6 py-16">
                <h2 class="text-2xl font-semibold">+639310194370</h2>
                <p class="mt-4 text-slate-300">Email: ircisaldaba97@gmail.com</p>
                <p class="mt-2 text-slate-300">https://www.linkedin.com/in/ircis-sadi-aldaba-921390296/ / https://github.com/isaldaba / https://github.com/IrcisSadi</p>
            </div>
        </section>
    </main>
</body>
</html>
