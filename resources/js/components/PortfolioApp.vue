<template>
    <div class="min-h-screen bg-slate-950 text-slate-100 antialiased">
        <header class="border-b border-slate-800">
            <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
                <!-- ISA monogram logo -->
                <a href="#" class="group flex select-none items-center gap-2.5 min-w-0">
                    <span class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-violet-500 via-fuchsia-500 to-cyan-500 text-sm font-extrabold tracking-tight text-white shadow-md shadow-violet-500/30 transition duration-200 group-hover:brightness-110 group-hover:shadow-violet-500/55">ISA</span>
                    <span class="hidden sm:inline bg-gradient-to-r from-violet-400 via-fuchsia-400 to-cyan-400 bg-clip-text text-base font-bold text-transparent tracking-wide">Ircis Sadi Aldaba</span>
                </a>
                <div class="flex flex-shrink-0 items-center gap-2 text-sm">
                    <a href="#skills" class="group relative hidden xs:block px-3 py-1.5 sm:px-4 font-medium text-slate-400 transition duration-200 hover:text-slate-100">
                        Skills
                        <span class="absolute inset-x-0 bottom-0 h-px scale-x-0 rounded-full bg-gradient-to-r from-slate-500 to-cyan-700 transition-transform duration-300 group-hover:scale-x-100"></span>
                    </a>
                    <a href="#contact" class="rounded-full border border-slate-600 bg-slate-800 px-3 py-1.5 sm:px-4 font-semibold text-slate-200 shadow-sm transition duration-200 hover:border-slate-500 hover:bg-slate-700 hover:text-white">
                        Contact
                    </a>
                </div>
            </nav>
        </header>

        <main>
            <section class="relative isolate overflow-hidden border-b border-slate-800">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_35%,rgba(139,92,246,0.22),transparent_42%),radial-gradient(circle_at_75%_55%,rgba(34,211,238,0.20),transparent_45%)]"></div>
                <div class="relative mx-auto flex min-h-[78vh] max-w-6xl flex-col items-center justify-center px-4 py-16 text-center sm:px-6 md:py-24">
                    <div style="perspective: 900px">
                        <div :class="{ 'hero-flip-play': heroFlipping }">
                            <h1 class="bg-gradient-to-r from-violet-400 via-fuchsia-400 to-cyan-400 bg-clip-text text-4xl font-extrabold tracking-tight text-transparent sm:text-5xl md:text-7xl xl:text-8xl [font-family:'Space_Grotesk',sans-serif]">Ircis Sadi Aldaba</h1>
                        </div>
                    </div>
                    <p class="mt-4 text-lg font-bold sm:text-2xl md:text-3xl lg:text-4xl" aria-label="Full Stack Developer">
                        <span
                            v-for="(char, i) in subtitleChars"
                            :key="i"
                            class="char-float char-rgb inline-block"
                            :style="{ animationDelay: `${i * 60}ms, ${i * 110}ms` }"
                        >{{ char === ' ' ? '\u00A0' : char }}</span>
                    </p>

                    <div class="mt-8 flex flex-wrap items-center justify-center gap-3 sm:gap-4">
                        <a href="#about" class="group rounded-2xl border border-slate-700 bg-slate-900/70 p-4 sm:p-5 transition hover:border-violet-400/60 hover:bg-slate-800" aria-label="About Me">
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 text-violet-300 transition group-hover:text-violet-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21a8 8 0 0 0-16 0"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </a>
                        <a href="#experience" class="group rounded-2xl border border-slate-700 bg-slate-900/70 p-4 sm:p-5 transition hover:border-fuchsia-400/60 hover:bg-slate-800" aria-label="Work Experience">
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 text-fuchsia-300 transition group-hover:text-fuchsia-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="18" height="13" rx="2"></rect><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                        </a>
                        <a href="#projects" class="group rounded-2xl border border-slate-700 bg-slate-900/70 p-4 sm:p-5 transition hover:border-cyan-400/60 hover:bg-slate-800" aria-label="Projects">
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 text-cyan-300 transition group-hover:text-cyan-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                        </a>
                    </div>

                    <div class="mt-4 flex flex-wrap items-center justify-center gap-3">
                        <a href="https://github.com/isaldaba" target="_blank" rel="noopener noreferrer" class="rounded-full border border-slate-700 bg-slate-900/70 p-2 text-slate-300 transition hover:text-white" aria-label="GitHub">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-3.16 19.49c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.19-3.37-1.19a2.65 2.65 0 0 0-1.11-1.46c-.91-.62.07-.61.07-.61a2.1 2.1 0 0 1 1.53 1.03 2.13 2.13 0 0 0 2.91.83 2.13 2.13 0 0 1 .63-1.34c-2.22-.25-4.55-1.11-4.55-4.92a3.86 3.86 0 0 1 1.03-2.68 3.58 3.58 0 0 1 .1-2.65s.84-.27 2.75 1.02a9.52 9.52 0 0 1 5 0c1.9-1.29 2.74-1.02 2.74-1.02a3.58 3.58 0 0 1 .1 2.65 3.85 3.85 0 0 1 1.03 2.68c0 3.82-2.34 4.66-4.57 4.91a2.39 2.39 0 0 1 .68 1.86v2.75c0 .27.18.58.69.48A10 10 0 0 0 12 2z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/ircis-sadi-aldaba-921390296/" target="_blank" rel="noopener noreferrer" class="rounded-full border border-slate-700 bg-slate-900/70 p-2 text-slate-300 transition hover:text-white" aria-label="LinkedIn">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M6.94 7.5A1.44 1.44 0 1 1 6.94 4.62a1.44 1.44 0 0 1 0 2.88zM5.5 8.98h2.88V19H5.5V8.98zm4.5 0h2.76v1.37h.04c.39-.73 1.33-1.5 2.74-1.5 2.93 0 3.46 1.93 3.46 4.43V19h-2.88v-5.04c0-1.2-.02-2.74-1.67-2.74-1.67 0-1.92 1.3-1.92 2.65V19H10V8.98z"/></svg>
                        </a>
                        <a href="mailto:ircisaldaba97@gmail.com" class="rounded-full border border-slate-700 bg-slate-900/70 p-2 text-slate-300 transition hover:text-white" aria-label="Email">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="m3 7 9 6 9-6"></path></svg>
                        </a>
                    </div>
                </div>
            </section>

            <section id="about" class="border-y border-slate-800 bg-slate-900/40">
                <div class="mx-auto max-w-6xl px-4 py-12 sm:px-6 md:py-20">
                    <div class="text-center">
                        <h2 data-reveal data-delay="0" class="text-3xl font-bold text-sky-400 opacity-0 -translate-x-12 transition-all duration-700 ease-out sm:text-4xl md:text-5xl lg:text-6xl [font-family:'Space_Grotesk',sans-serif]">About Me</h2>
                        <span data-reveal data-delay="80" class="mx-auto mt-4 block h-1 w-24 rounded-full bg-gradient-to-r from-violet-400 to-cyan-400 opacity-0 -translate-x-12 transition-all duration-700 ease-out"></span>
                    </div>

                    <div class="mt-12 grid items-center gap-10 lg:grid-cols-[320px_1fr]">
                        <div data-reveal data-delay="120" class="mx-auto w-full max-w-[320px] rounded-full border border-slate-700 bg-gradient-to-br from-violet-500/20 to-cyan-500/20 p-2 opacity-0 -translate-x-12 transition-all duration-700 ease-out">
                            <img :src="profilePhotoUrl" @error="onProfileImageError" alt="Ircis profile photo" class="h-[300px] w-full rounded-full object-cover md:h-[320px]">
                        </div>

                        <div class="space-y-6">
                            <article data-reveal data-delay="180" class="rounded-2xl border border-slate-800 bg-slate-950/70 p-8 opacity-0 -translate-x-12 transition-all duration-700 ease-out">
                                <h3 class="text-2xl font-semibold text-white sm:text-3xl">Hello, I am Ircis 👋</h3>
                                <p class="mt-4 text-base leading-relaxed text-slate-300 sm:text-lg">I build fast and practical web applications with strong backend structure and clean frontend interfaces. I focus on maintainable solutions using Laravel, JavaScript, and modern UI tools.</p>
                                <p class="mt-4 text-base leading-relaxed text-slate-300 sm:text-lg">I enjoy learning new technologies, solving real business problems, and continuously improving as a full-stack developer.</p>
                            </article>

                            <article data-reveal data-delay="240" class="rounded-2xl border border-cyan-500/20 bg-gradient-to-r from-violet-950/40 to-cyan-950/40 p-6 opacity-0 -translate-x-12 transition-all duration-700 ease-out">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <div>
                                        <h4 class="text-2xl font-semibold text-white">Download Resume</h4>
                                        <p class="mt-1 text-slate-300">Get my latest CV in PDF format</p>
                                    </div>
                                    <a :href="resumeUrl" download="Ircis Sadi Aldaba-Resume.pdf" class="rounded-full bg-gradient-to-r from-violet-500 to-cyan-500 px-6 py-3 text-sm font-semibold text-white transition hover:brightness-110">Download PDF</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section id="skills" class="mx-auto max-w-6xl px-4 py-12 sm:px-6 sm:py-16">
                <div class="text-center">
                    <h2 class="inline-flex items-center rounded-lg border border-sky-500/30 bg-slate-900 px-4 py-2 text-2xl font-semibold text-sky-400 shadow-sm shadow-sky-500/20 [font-family:'Space_Grotesk',sans-serif]">Skills</h2>
                </div>
                <div class="skills-carousel-wrapper mt-8 overflow-hidden">
                    <div class="skills-carousel-track flex items-center gap-5 pr-5">
                        <article v-for="(skill, index) in duplicatedSkills" :key="`${skill.name}-${index}`" :aria-hidden="index >= skills.length" class="min-w-[170px] rounded-xl border border-slate-800 bg-slate-900 p-5 text-center">
                            <img :src="skill.icon" :alt="index >= skills.length ? '' : skill.name" class="mx-auto h-10 w-10 object-contain">
                            <h3 class="mt-3 text-lg font-semibold">{{ skill.name }}</h3>
                        </article>
                    </div>
                </div>
            </section>

            <section id="experience" class="mx-auto max-w-6xl px-4 py-12 sm:px-6 sm:py-16">
                <div class="text-center">
                    <h2 data-reveal data-delay="0" class="bg-gradient-to-r from-fuchsia-400 via-violet-400 to-cyan-400 bg-clip-text text-3xl font-extrabold text-transparent opacity-0 -translate-x-12 transition-all duration-700 ease-out sm:text-4xl md:text-5xl [font-family:'Space_Grotesk',sans-serif]">Work Experience</h2>
                    <span data-reveal data-delay="80" class="mx-auto mt-3 block h-1 w-24 rounded-full bg-gradient-to-r from-fuchsia-400 to-cyan-400 opacity-0 -translate-x-12 transition-all duration-700 ease-out"></span>
                </div>
                <article data-reveal data-delay="80" class="mt-8 rounded-2xl border border-slate-800 bg-slate-900 p-5 sm:p-7 opacity-0 -translate-x-12 transition-all duration-300 ease-out hover:scale-[1.02] hover:border-violet-500/40 hover:shadow-lg hover:shadow-violet-500/10">
                    <h3 class="text-xl font-semibold text-slate-50 sm:text-2xl">Full Stack Developer</h3>
                    <p class="mt-2 text-sm font-medium text-slate-300">ITech-RAR / Kumosoft, Mindanao Branch • 2025 - To Date</p>

                    <h4 class="mt-6 text-lg font-semibold text-violet-300">Key Responsibilities</h4>
                    <ul class="mt-3 space-y-3 text-base leading-relaxed text-slate-200">
                        <li class="flex gap-3"><span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-sky-400"></span><span>Currently working as a Full Stack Developer.</span></li>
                        <li class="flex gap-3"><span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-sky-400"></span><span>Building new functions and features.</span></li>
                        <li class="flex gap-3"><span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-sky-400"></span><span>Debugging issues or concerns reported by clients.</span></li>
                        <li class="flex gap-3"><span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-sky-400"></span><span>Maintaining school websites in Mindanao while providing L1 technical support for system-related concerns.</span></li>
                    </ul>

                    <h4 class="mt-6 text-lg font-semibold text-violet-300">Technologies & Skills</h4>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">Laravel</span>
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">PHP</span>
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">JavaScript</span>
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">Vue</span>
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">MySQL</span>
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">L1 Tech Support</span>
                    </div>
                </article>

                <article data-reveal data-delay="120" class="mt-6 rounded-2xl border border-slate-800 bg-slate-900 p-5 sm:p-7 opacity-0 -translate-x-12 transition-all duration-300 ease-out hover:scale-[1.02] hover:border-violet-500/40 hover:shadow-lg hover:shadow-violet-500/10">
                    <h3 class="text-xl font-semibold text-slate-50 sm:text-2xl">IT Staff / Site Lead</h3>
                    <p class="mt-2 text-sm font-medium text-slate-300">Land Registration Systems Inc. (LARES) • November 2023 - April 2024</p>

                    <h4 class="mt-6 text-lg font-semibold text-violet-300">Key Responsibilities</h4>
                    <ul class="mt-3 space-y-3 text-base leading-relaxed text-slate-200">
                        <li class="flex gap-3"><span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-sky-400"></span><span>Managed network operations.</span></li>
                        <li class="flex gap-3"><span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-sky-400"></span><span>Maintained server and workstation PC availability.</span></li>
                        <li class="flex gap-3"><span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-sky-400"></span><span>Handled incident reports using LARES software.</span></li>
                    </ul>

                    <h4 class="mt-6 text-lg font-semibold text-violet-300">Technologies & Skills</h4>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">Networking</span>
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">Troubleshooting</span>
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">L1 Tech Support</span>
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">Server Maintenance</span>
                    </div>
                </article>

                <article data-reveal data-delay="160" class="mt-6 rounded-2xl border border-slate-800 bg-slate-900 p-5 sm:p-7 opacity-0 -translate-x-12 transition-all duration-300 ease-out hover:scale-[1.02] hover:border-violet-500/40 hover:shadow-lg hover:shadow-violet-500/10">
                    <h3 class="text-xl font-semibold text-slate-50 sm:text-2xl">Web Developer Internship</h3>
                    <p class="mt-2 text-sm font-medium text-slate-300">Nero Printing Services and Trading • February 2023 - May 2023</p>

                    <h4 class="mt-6 text-lg font-semibold text-violet-300">Key Responsibilities</h4>
                    <ul class="mt-3 space-y-3 text-base leading-relaxed text-slate-200">
                        <li class="flex gap-3"><span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-sky-400"></span><span>Helped develop the company website and learned practical web development workflows.</span></li>
                        <li class="flex gap-3"><span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-sky-400"></span><span>Performed basic troubleshooting.</span></li>
                        <li class="flex gap-3"><span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-sky-400"></span><span>Handled debugging tasks.</span></li>
                    </ul>

                    <h4 class="mt-6 text-lg font-semibold text-violet-300">Technologies & Skills</h4>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">PHP</span>
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">Laravel</span>
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">Vue</span>
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">SQLite</span>
                        <span class="rounded-full border border-violet-500/40 bg-violet-500/10 px-3 py-1 text-sm text-violet-200">JavaScript</span>
                    </div>
                </article>
            </section>

            <section id="projects" class="border-t border-slate-800 bg-slate-900/20">
                <div class="mx-auto max-w-6xl px-4 py-12 sm:px-6 md:py-20">
                    <div class="text-center">
                        <h2 data-reveal data-delay="0" class="bg-gradient-to-r from-violet-400 via-fuchsia-400 to-cyan-400 bg-clip-text text-3xl font-extrabold text-transparent opacity-0 -translate-x-12 transition-all duration-700 ease-out sm:text-4xl md:text-5xl [font-family:'Space_Grotesk',sans-serif]">Featured Projects</h2>
                        <span data-reveal data-delay="80" class="mx-auto mt-3 block h-1 w-20 rounded-full bg-gradient-to-r from-violet-400 to-cyan-400 opacity-0 -translate-x-12 transition-all duration-700 ease-out"></span>
                    </div>

                    <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <article
                            v-for="(project, i) in projects"
                            :key="project.title"
                            data-reveal
                            :data-delay="i * 80"
                            class="group cursor-pointer rounded-2xl border border-slate-800 bg-slate-900 overflow-hidden opacity-0 -translate-x-12 transition-all duration-700 ease-out hover:border-violet-500/40 hover:shadow-lg hover:shadow-violet-500/10"
                            :class="{ 'sm:col-span-2 lg:col-span-3': project.featured }"
                            @click="selectedProject = project"
                        >
                            <div class="relative overflow-hidden" :class="project.featured ? 'h-64' : 'h-44'">
                                <img :src="project.image" :alt="project.title" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                                <span v-if="project.featured" class="absolute top-3 left-3 rounded-full bg-gradient-to-r from-violet-500 to-cyan-500 px-3 py-1 text-xs font-bold text-white shadow-md">⭐ Featured</span>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-bold text-white group-hover:text-violet-300 transition-colors">{{ project.title }}</h3>
                                <p class="mt-2 text-sm text-slate-400 line-clamp-2">{{ project.description }}</p>
                                <div class="mt-3 flex flex-wrap gap-2">
                                    <span v-for="tech in project.tech.slice(0, 3)" :key="tech" class="rounded-full border border-slate-700 bg-slate-800 px-2.5 py-0.5 text-xs text-slate-300">{{ tech }}</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Project Modal -->
            <Teleport to="body">
                <Transition name="modal">
                        <div v-if="selectedProject" class="fixed inset-0 z-50 flex items-end justify-center sm:items-center p-0 sm:p-4" @click.self="selectedProject = null">
                        <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-sm"></div>
                        <div class="relative z-10 w-full max-w-2xl max-h-[92vh] sm:max-h-[90vh] overflow-y-auto rounded-t-2xl sm:rounded-2xl border border-slate-700 bg-slate-900 shadow-2xl shadow-violet-500/10">
                            <!-- Modal Header -->
                            <div class="flex items-start gap-3 border-b border-slate-800 p-4 sm:p-6">
                                <img :src="selectedProject.image" :alt="selectedProject.title" class="h-14 w-14 rounded-xl object-cover flex-shrink-0">
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-xl font-bold text-violet-300">{{ selectedProject.title }}</h3>
                                    <p class="text-sm text-slate-400">{{ selectedProject.category }}</p>
                                </div>
                                <button @click="selectedProject = null" class="ml-2 flex-shrink-0 rounded-lg p-1.5 text-slate-400 hover:bg-slate-800 hover:text-white transition">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6 6 18M6 6l12 12"/></svg>
                                </button>
                            </div>
                            <!-- Modal Body -->
                            <div class="p-4 sm:p-6 space-y-5 sm:space-y-6">
                                <div>
                                    <h4 class="font-bold text-white">Project Overview</h4>
                                    <p class="mt-2 text-sm leading-relaxed text-slate-300">{{ selectedProject.overview }}</p>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white">Technology Stack</h4>
                                    <div class="mt-3 flex flex-wrap gap-2">
                                        <span v-for="tech in selectedProject.tech" :key="tech" class="rounded-full border border-slate-600 bg-slate-800 px-3 py-1 text-sm text-slate-200">{{ tech }}</span>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white">Key Features</h4>
                                    <div class="mt-3 grid gap-2 sm:grid-cols-2">
                                        <div v-for="feat in selectedProject.features" :key="feat" class="flex items-center gap-2 text-sm text-slate-300">
                                            <span class="h-1.5 w-1.5 rounded-full bg-cyan-400 flex-shrink-0"></span>
                                            {{ feat }}
                                        </div>
                                    </div>
                                </div>
                                <div v-if="selectedProject.impact">
                                    <h4 class="font-bold text-white">Impact</h4>
                                    <div class="mt-3 grid gap-2 sm:grid-cols-2">
                                        <div v-for="item in selectedProject.impact" :key="item" class="flex items-center gap-2 text-sm text-slate-300">
                                            <span class="h-1.5 w-1.5 rounded-full bg-violet-400 flex-shrink-0"></span>
                                            {{ item }}
                                        </div>
                                    </div>
                                </div>
                                <div v-if="selectedProject.accessNotice" class="rounded-xl border border-amber-500/30 bg-amber-500/10 px-4 py-3">
                                    <p class="text-xs leading-relaxed text-amber-300">🔒 {{ selectedProject.accessNotice }}</p>
                                </div>
                            </div>
                            <!-- Modal Footer -->
                            <div class="flex flex-wrap gap-3 border-t border-slate-800 p-4 sm:p-6">
                                <a v-if="selectedProject.liveUrl" :href="selectedProject.liveUrl" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 rounded-full bg-gradient-to-r from-violet-500 to-cyan-500 px-5 py-2.5 text-sm font-semibold text-white shadow-md hover:brightness-110 transition">
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                    View Live Site
                                </a>
                                <a v-if="selectedProject.codeUrl" :href="selectedProject.codeUrl" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 rounded-full border border-slate-600 bg-slate-800 px-5 py-2.5 text-sm font-semibold text-white hover:bg-slate-700 transition">
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-3.16 19.49c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.19-3.37-1.19a2.65 2.65 0 0 0-1.11-1.46c-.91-.62.07-.61.07-.61a2.1 2.1 0 0 1 1.53 1.03 2.13 2.13 0 0 0 2.91.83 2.13 2.13 0 0 1 .63-1.34c-2.22-.25-4.55-1.11-4.55-4.92a3.86 3.86 0 0 1 1.03-2.68 3.58 3.58 0 0 1 .1-2.65s.84-.27 2.75 1.02a9.52 9.52 0 0 1 5 0c1.9-1.29 2.74-1.02 2.74-1.02a3.58 3.58 0 0 1 .1 2.65 3.85 3.85 0 0 1 1.03 2.68c0 3.82-2.34 4.66-4.57 4.91a2.39 2.39 0 0 1 .68 1.86v2.75c0 .27.18.58.69.48A10 10 0 0 0 12 2z"/></svg>
                                    View Code
                                </a>
                                <button v-if="selectedProject.screenshots && selectedProject.screenshots.length" @click="openScreenshot(0)" class="flex items-center gap-2 rounded-full border border-fuchsia-500/50 bg-fuchsia-500/10 px-5 py-2.5 text-sm font-semibold text-fuchsia-300 hover:bg-fuchsia-500/20 hover:border-fuchsia-400/70 transition">
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-5-5L5 21"/></svg>
                                    Screenshots ({{ selectedProject.screenshots.length }})
                                </button>
                                <span v-if="!selectedProject.liveUrl && !selectedProject.codeUrl" class="flex items-center gap-2 rounded-full border border-slate-700 bg-slate-800/50 px-5 py-2.5 text-sm text-slate-500 cursor-default">
                                    🔒 Access Restricted
                                </span>
                            </div>
                        </div>
                    </div>
                </Transition>
            </Teleport>

            <!-- Screenshot Lightbox -->
            <Teleport to="body">
                <Transition name="modal">
                    <div v-if="screenshotIndex !== null" class="fixed inset-0 z-[60] flex items-center justify-center p-4" @click.self="screenshotIndex = null">
                        <div class="absolute inset-0 bg-slate-950/92 backdrop-blur-sm"></div>
                        <div class="relative z-10 flex w-full max-w-5xl flex-col items-center">
                            <!-- Close -->
                            <button @click="screenshotIndex = null" class="absolute -top-1 right-0 rounded-lg p-1.5 text-slate-400 hover:bg-slate-800 hover:text-white transition" aria-label="Close screenshots">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6 6 18M6 6l12 12"/></svg>
                            </button>
                            <!-- Image -->
                            <div class="relative flex w-full items-center justify-center">
                                <!-- Prev arrow -->
                                <button @click="prevScreenshot" class="absolute left-0 z-10 flex h-10 w-10 items-center justify-center rounded-full bg-slate-800/80 text-slate-300 hover:bg-slate-700 hover:text-white transition -translate-x-1 sm:-translate-x-5" aria-label="Previous screenshot">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
                                </button>
                                <div class="overflow-hidden flex items-center justify-center w-full">
                                    <Transition :name="'screenshot-' + screenshotDir" mode="out-in">
                                        <img :src="screenshotImages[screenshotIndex]" :key="screenshotIndex" class="max-h-[75vh] w-auto max-w-full rounded-xl shadow-2xl shadow-violet-500/20 select-none" alt="Screenshot">
                                    </Transition>
                                </div>
                                <!-- Next arrow -->
                                <button @click="nextScreenshot" class="absolute right-0 z-10 flex h-10 w-10 items-center justify-center rounded-full bg-slate-800/80 text-slate-300 hover:bg-slate-700 hover:text-white transition translate-x-1 sm:translate-x-5" aria-label="Next screenshot">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                                </button>
                            </div>
                            <!-- Counter + dot indicators -->
                            <div class="mt-4 flex flex-col items-center gap-2">
                                <p class="text-sm font-medium text-slate-400">{{ screenshotIndex + 1 }} / {{ screenshotImages.length }}</p>
                                <div class="flex flex-wrap justify-center gap-1.5">
                                    <button
                                        v-for="(_, i) in screenshotImages"
                                        :key="i"
                                        @click="screenshotDir = i >= screenshotIndex ? 'next' : 'prev'; screenshotIndex = i"
                                        class="h-1.5 rounded-full transition-all duration-200"
                                        :class="i === screenshotIndex ? 'w-5 bg-fuchsia-400' : 'w-1.5 bg-slate-600 hover:bg-slate-400'"
                                        :aria-label="`Go to screenshot ${i + 1}`"
                                    ></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </Transition>
            </Teleport>

            <section id="contact" class="border-t border-slate-800 bg-slate-900/40">
                <div class="mx-auto max-w-6xl px-4 py-14 sm:px-6 sm:py-20">
                    <!-- Heading -->
                    <div class="text-center">
                        <h2 data-reveal data-delay="0" class="bg-gradient-to-r from-violet-400 via-fuchsia-400 to-cyan-400 bg-clip-text text-3xl font-extrabold text-transparent opacity-0 -translate-x-12 transition-all duration-700 ease-out sm:text-4xl md:text-5xl [font-family:'Space_Grotesk',sans-serif]">Get In Touch</h2>
                        <span data-reveal data-delay="80" class="mx-auto mt-3 block h-1 w-20 rounded-full bg-gradient-to-r from-violet-400 to-cyan-400 opacity-0 -translate-x-12 transition-all duration-700 ease-out"></span>
                        <p data-reveal data-delay="140" class="mx-auto mt-4 max-w-md text-slate-400 opacity-0 -translate-x-12 transition-all duration-700 ease-out">Open to new opportunities, collaborations, or just a chat. Reach out through any of the channels below.</p>
                    </div>

                    <!-- Contact Cards -->
                    <div class="mt-12 grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">

                        <!-- Phone -->
                        <button
                            type="button"
                            data-reveal data-delay="80"
                            class="group relative flex flex-col items-center gap-3 rounded-2xl border border-slate-800 bg-slate-900 p-6 text-center opacity-0 -translate-x-12 transition-all duration-300 ease-out hover:scale-[1.04] hover:border-violet-500/50 hover:shadow-lg hover:shadow-violet-500/10"
                            @click="copyPhone"
                        >
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-violet-500/15 text-violet-300 transition group-hover:bg-violet-500/25">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.8 19.8 0 0 1 1.61 3.36 2 2 0 0 1 3.6 1.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6.29 6.29l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </span>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">Phone</p>
                                <p class="mt-1 font-semibold text-slate-100">{{ phoneNumber }}</p>
                            </div>
                            <span class="absolute top-3 right-3 rounded-full bg-slate-800 px-2 py-0.5 text-xs text-slate-400 opacity-0 transition-opacity duration-200 group-hover:opacity-100">{{ copyPhoneLabel }}</span>
                        </button>

                        <!-- Email -->
                        <a
                            href="mailto:ircisaldaba97@gmail.com"
                            data-reveal data-delay="140"
                            class="group flex flex-col items-center gap-3 rounded-2xl border border-slate-800 bg-slate-900 p-6 text-center opacity-0 -translate-x-12 transition-all duration-300 ease-out hover:scale-[1.04] hover:border-cyan-500/50 hover:shadow-lg hover:shadow-cyan-500/10"
                        >
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/15 text-cyan-300 transition group-hover:bg-cyan-500/25">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                            </span>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">Email</p>
                                <p class="mt-1 break-all font-semibold text-slate-100 text-sm">ircisaldaba97@gmail.com</p>
                            </div>
                        </a>

                        <!-- LinkedIn -->
                        <a
                            href="https://www.linkedin.com/in/ircis-sadi-aldaba-921390296/"
                            target="_blank" rel="noopener noreferrer"
                            data-reveal data-delay="200"
                            class="group flex flex-col items-center gap-3 rounded-2xl border border-slate-800 bg-slate-900 p-6 text-center opacity-0 -translate-x-12 transition-all duration-300 ease-out hover:scale-[1.04] hover:border-sky-500/50 hover:shadow-lg hover:shadow-sky-500/10"
                        >
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-500/15 text-sky-300 transition group-hover:bg-sky-500/25">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M6.94 7.5A1.44 1.44 0 1 1 6.94 4.62a1.44 1.44 0 0 1 0 2.88zM5.5 8.98h2.88V19H5.5V8.98zm4.5 0h2.76v1.37h.04c.39-.73 1.33-1.5 2.74-1.5 2.93 0 3.46 1.93 3.46 4.43V19h-2.88v-5.04c0-1.2-.02-2.74-1.67-2.74-1.67 0-1.92 1.3-1.92 2.65V19H10V8.98z"/></svg>
                            </span>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">LinkedIn</p>
                                <p class="mt-1 font-semibold text-slate-100">Ircis Sadi Aldaba</p>
                            </div>
                        </a>

                        <!-- GitHub -->
                        <a
                            href="https://github.com/isaldaba"
                            target="_blank" rel="noopener noreferrer"
                            data-reveal data-delay="260"
                            class="group flex flex-col items-center gap-3 rounded-2xl border border-slate-800 bg-slate-900 p-6 text-center opacity-0 -translate-x-12 transition-all duration-300 ease-out hover:scale-[1.04] hover:border-fuchsia-500/50 hover:shadow-lg hover:shadow-fuchsia-500/10"
                        >
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-fuchsia-500/15 text-fuchsia-300 transition group-hover:bg-fuchsia-500/25">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-3.16 19.49c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.19-3.37-1.19a2.65 2.65 0 0 0-1.11-1.46c-.91-.62.07-.61.07-.61a2.1 2.1 0 0 1 1.53 1.03 2.13 2.13 0 0 0 2.91.83 2.13 2.13 0 0 1 .63-1.34c-2.22-.25-4.55-1.11-4.55-4.92a3.86 3.86 0 0 1 1.03-2.68 3.58 3.58 0 0 1 .1-2.65s.84-.27 2.75 1.02a9.52 9.52 0 0 1 5 0c1.9-1.29 2.74-1.02 2.74-1.02a3.58 3.58 0 0 1 .1 2.65 3.85 3.85 0 0 1 1.03 2.68c0 3.82-2.34 4.66-4.57 4.91a2.39 2.39 0 0 1 .68 1.86v2.75c0 .27.18.58.69.48A10 10 0 0 0 12 2z"/></svg>
                            </span>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">GitHub</p>
                                <p class="mt-1 font-semibold text-slate-100">@isaldaba</p>
                            </div>
                        </a>

                        <!-- GitLab -->
                        <a
                            href="https://gitlab.com/isaldaba"
                            target="_blank" rel="noopener noreferrer"
                            data-reveal data-delay="320"
                            class="group flex flex-col items-center gap-3 rounded-2xl border border-slate-800 bg-slate-900 p-6 text-center opacity-0 -translate-x-12 transition-all duration-300 ease-out hover:scale-[1.04] hover:border-orange-500/50 hover:shadow-lg hover:shadow-orange-500/10"
                        >
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-500/15 text-orange-300 transition group-hover:bg-orange-500/25">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="m23.546 10.93-1.335-4.104a.58.58 0 0 0-.27-.329.57.57 0 0 0-.418-.042L12 9.95 2.477 6.455a.57.57 0 0 0-.418.042.58.58 0 0 0-.27.33L.454 10.93a.576.576 0 0 0 .21.645l11.138 8.098a.576.576 0 0 0 .396 0l11.138-8.098a.576.576 0 0 0 .21-.645zM12 17.51 2.395 10.473l.96-2.95L12 10.87l8.645-3.348.96 2.95z"/></svg>
                            </span>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">GitLab</p>
                                <p class="mt-1 font-semibold text-slate-100">@isaldaba</p>
                            </div>
                        </a>
                    </div>

                    <!-- Footer note -->
                    <p class="mt-10 text-center text-sm text-slate-600">© {{ new Date().getFullYear() }} Ircis Sadi Aldaba · Built with Laravel &amp; Vue</p>
                </div>
            </section>
        </main>

        <!-- Scroll to Top -->
        <Transition name="scroll-top">
            <button
                v-if="showScrollTop"
                @click="scrollToTop"
                aria-label="Scroll to top"
                class="fixed bottom-6 right-6 z-50 flex h-11 w-11 items-center justify-center rounded-full bg-gradient-to-br from-violet-500 via-fuchsia-500 to-cyan-500 text-white shadow-lg shadow-violet-500/30 transition hover:brightness-110 active:scale-95"
            >
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="18 15 12 9 6 15"/>
                </svg>
            </button>
        </Transition>
    </div>
</template>

<script setup>
import { computed, onBeforeUnmount, onMounted, ref, watch } from 'vue';

const phoneNumber = '+639310194370';
const copyPhoneLabel = ref('Copy');
const selectedProject = ref(null);
const screenshotIndex = ref(null);
const screenshotDir = ref('next');
const screenshotImages = computed(() => selectedProject.value?.screenshots ?? []);
const openScreenshot = (index) => { screenshotDir.value = 'next'; screenshotIndex.value = index; };
const prevScreenshot = () => { screenshotDir.value = 'prev'; screenshotIndex.value = (screenshotIndex.value - 1 + screenshotImages.value.length) % screenshotImages.value.length; };
const nextScreenshot = () => { screenshotDir.value = 'next'; screenshotIndex.value = (screenshotIndex.value + 1) % screenshotImages.value.length; };
const heroFlipping = ref(false);
const showScrollTop = ref(false);
let heroFlipInterval = null;

const scrollToTop = () => window.scrollTo({ top: 0, behavior: 'smooth' });
const onWindowScroll = () => { showScrollTop.value = window.scrollY > 300; };

const onKeyDown = (e) => {
    if (screenshotIndex.value !== null) {
        if (e.key === 'ArrowLeft') prevScreenshot();
        else if (e.key === 'ArrowRight') nextScreenshot();
        else if (e.key === 'Escape') screenshotIndex.value = null;
    } else if (selectedProject.value && e.key === 'Escape') {
        selectedProject.value = null;
    }
};

// Lock body scroll when modal is open
watch(selectedProject, (val) => {
    document.body.style.overflow = val ? 'hidden' : '';
});

const defaultProfilePhotoUrl = 'https://placehold.co/640x640/020617/7dd3fc?text=Your+Photo';
const profilePhotoCandidates = ['/images/profile.jpg', '/images/profile.jpeg', '/images/profile.png', '/images/profile.webp'];
const profilePhotoIndex = ref(0);
const profilePhotoUrl = ref(profilePhotoCandidates[profilePhotoIndex.value]);
const resumeUrl = '/resume.pdf';

const skills = [
    { name: 'Python', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg' },
    { name: 'JavaScript', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg' },
    { name: 'Laravel', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg' },
    { name: 'PHP', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg' },
    { name: 'MySQL', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg' },
    { name: 'SQLite', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg' },
    { name: 'GitHub', icon: 'https://cdn.simpleicons.org/github/ffffff' },
    { name: 'Tailwind', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg' },
    { name: 'Vue', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg' },
];

const duplicatedSkills = computed(() => [...skills, ...skills]);

const subtitleChars = 'Full Stack Developer'.split('');

const projects = [
    {
        featured: true,
        title: 'School Management System',
        category: 'Full-Stack Web Application · Production System',
        image: 'https://rmmcmi.com/assets/site/images/web-background/landing_banner-2.webp',
        description: 'A production-grade system currently serving 8,000–9,000 students at a private educational institution. Centralizes student records, attendance, faculty management, and academic reporting.',
        overview: 'A production-grade School Management System developed for a private educational institution, currently serving approximately 8,000–9,000 students. The platform centralizes student records, attendance tracking, faculty management, and academic reporting into a secure, role-based system used daily by administrators and staff. Live in production since October 2025.',
        tech: ['Laravel', 'MySQL', 'REST APIs', 'PHP', 'Production Hosting'],
        features: [
            'Multi-role authentication (Admin, Faculty, Staff)',
            'Student enrollment & profile management',
            'Attendance monitoring system',
            'Academic record & grading modules',
            'Secure dashboard & reporting tools',
            'Data validation & relational database design',
        ],
        impact: [
            'Actively managing 8,000–9,000 student records',
            'Used daily by administrative and faculty staff',
            'Digitized and centralized institutional academic processes',
            'Reduced reliance on manual record-keeping workflows',
        ],
        liveUrl: 'https://rmmcmi.com',
        codeUrl: null,
        accessNotice: 'This system is currently in active production use. Public access and source code are restricted due to institutional ownership and data privacy policies.',
        screenshots: [
            '/images/ScreenShots/1.png',
            '/images/ScreenShots/2.png',
            '/images/ScreenShots/3.png',
            '/images/ScreenShots/4.png',
            '/images/ScreenShots/5.png',
            '/images/ScreenShots/6.png',
            '/images/ScreenShots/7.png',
            '/images/ScreenShots/8.png',
            '/images/ScreenShots/9.png',
            '/images/ScreenShots/10.png',
            '/images/ScreenShots/11.png',
        ],
    },
];

let revealObserver = null;

const revealItem = (element) => {
    element.classList.remove('opacity-0', '-translate-x-12');
    element.classList.add('opacity-100', 'translate-x-0');
};

const hideItem = (element) => {
    element.classList.remove('opacity-100', 'translate-x-0');
    element.classList.add('opacity-0', '-translate-x-12');
};

const setupRevealObserver = () => {
    if (revealObserver) {
        revealObserver.disconnect();
    }

    revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                revealItem(entry.target);
                return;
            }

            hideItem(entry.target);
        });
    }, { threshold: 0.18 });

    document.querySelectorAll('[data-reveal]').forEach((element) => {
        const delay = Number(element.dataset.delay ?? 0);
        element.style.transitionDelay = `${delay}ms`;
        revealObserver.observe(element);
    });
};

const copyPhone = async () => {
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

    copyPhoneLabel.value = 'Copied!';
    window.setTimeout(() => {
        copyPhoneLabel.value = 'Copy';
    }, 1200);
};

const onProfileImageError = () => {
    profilePhotoIndex.value += 1;

    if (profilePhotoIndex.value < profilePhotoCandidates.length) {
        profilePhotoUrl.value = profilePhotoCandidates[profilePhotoIndex.value];
        return;
    }

    profilePhotoUrl.value = defaultProfilePhotoUrl;
};



const triggerHeroFlip = () => {
    heroFlipping.value = true;
    setTimeout(() => { heroFlipping.value = false; }, 2700);
};

onMounted(() => {
    setupRevealObserver();
    // Play once after 1.5s on load, then repeat every 10s
    setTimeout(triggerHeroFlip, 1500);
    heroFlipInterval = setInterval(triggerHeroFlip, 10000);
    window.addEventListener('scroll', onWindowScroll, { passive: true });
    window.addEventListener('keydown', onKeyDown);
});

onBeforeUnmount(() => {
    if (revealObserver) {
        revealObserver.disconnect();
    }
    if (heroFlipInterval) {
        clearInterval(heroFlipInterval);
    }
    window.removeEventListener('scroll', onWindowScroll);
    window.removeEventListener('keydown', onKeyDown);
    document.body.style.overflow = '';
});
</script>

<style scoped>
.scroll-top-enter-active,
.scroll-top-leave-active {
    transition: opacity 0.3s ease, transform 0.3s ease;
}
.scroll-top-enter-from,
.scroll-top-leave-to {
    opacity: 0;
    transform: translateY(12px) scale(0.85);
}

.modal-enter-active,
.modal-leave-active {
    transition: opacity 0.25s ease;
}
.modal-enter-from,
.modal-leave-to {
    opacity: 0;
}
.modal-enter-active .relative.z-10,
.modal-leave-active .relative.z-10 {
    transition: transform 0.25s ease;
}
.modal-enter-from .relative.z-10,
.modal-leave-to .relative.z-10 {
    transform: scale(0.95);
}

@keyframes char-float {
    0%, 100% { transform: translateY(0px); }
    50%       { transform: translateY(-9px); }
}

@keyframes char-rgb {
    0%   { color: #f87171; }
    16%  { color: #fb923c; }
    33%  { color: #facc15; }
    50%  { color: #4ade80; }
    66%  { color: #60a5fa; }
    83%  { color: #a78bfa; }
    100% { color: #f87171; }
}

.char-float {
    will-change: transform, color;
}

.char-float.char-rgb {
    animation: char-float 2s ease-in-out infinite, char-rgb 4s linear infinite;
}

@keyframes hero-flip-glow {
    0%   { transform: rotateX(0deg);   filter: brightness(1)   drop-shadow(0 0  0px rgba(167,139,250,0))   drop-shadow(0 0  0px rgba(232,121,249,0))   drop-shadow(0 0  0px rgba(34,211,238,0)); }
    22%  { transform: rotateX(-90deg); filter: brightness(0.4) drop-shadow(0 0  0px rgba(167,139,250,0))   drop-shadow(0 0  0px rgba(232,121,249,0))   drop-shadow(0 0  0px rgba(34,211,238,0)); }
    50%  { transform: rotateX(0deg);   filter: brightness(1)   drop-shadow(0 0  0px rgba(167,139,250,0))   drop-shadow(0 0  0px rgba(232,121,249,0))   drop-shadow(0 0  0px rgba(34,211,238,0)); }
    65%  { transform: rotateX(0deg);   filter: brightness(1.1) drop-shadow(-4px 0 12px rgba(167,139,250,0.45)) drop-shadow(0 0 12px rgba(232,121,249,0.35)) drop-shadow(4px 0 12px rgba(34,211,238,0.35)); }
    80%  { transform: rotateX(0deg);   filter: brightness(1.2) drop-shadow(-5px 0 18px rgba(167,139,250,0.55)) drop-shadow(0 0 18px rgba(232,121,249,0.50)) drop-shadow(5px 0 18px rgba(34,211,238,0.50)); }
    100% { transform: rotateX(0deg);   filter: brightness(1)   drop-shadow(0 0  0px rgba(167,139,250,0))   drop-shadow(0 0  0px rgba(232,121,249,0))   drop-shadow(0 0  0px rgba(34,211,238,0)); }
}

.hero-flip-play {
    animation: hero-flip-glow 2.7s cubic-bezier(0.4, 0, 0.2, 1) forwards;
    transform-origin: center top;
    transform-style: preserve-3d;
    will-change: transform, filter;
}

@keyframes skills-scroll {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}

.skills-carousel-wrapper:hover .skills-carousel-track {
    animation-play-state: paused;
}

.skills-carousel-track {
    animation: skills-scroll 28s linear infinite;
    width: max-content;
    will-change: transform;
}

/* Screenshot slide transitions */
.screenshot-next-enter-active {
    transition: opacity 0.28s ease, transform 0.28s cubic-bezier(0.25, 0.8, 0.25, 1), filter 0.28s ease;
}
.screenshot-next-leave-active {
    transition: opacity 0.18s ease, transform 0.18s cubic-bezier(0.4, 0, 1, 1);
}
.screenshot-next-enter-from {
    opacity: 0;
    transform: translateX(56px) scale(0.97);
    filter: brightness(1.3) blur(2px);
}
.screenshot-next-enter-to {
    opacity: 1;
    transform: translateX(0) scale(1);
    filter: brightness(1) blur(0px);
}
.screenshot-next-leave-to {
    opacity: 0;
    transform: translateX(-40px) scale(0.97);
}

.screenshot-prev-enter-active {
    transition: opacity 0.28s ease, transform 0.28s cubic-bezier(0.25, 0.8, 0.25, 1), filter 0.28s ease;
}
.screenshot-prev-leave-active {
    transition: opacity 0.18s ease, transform 0.18s cubic-bezier(0.4, 0, 1, 1);
}
.screenshot-prev-enter-from {
    opacity: 0;
    transform: translateX(-56px) scale(0.97);
    filter: brightness(1.3) blur(2px);
}
.screenshot-prev-enter-to {
    opacity: 1;
    transform: translateX(0) scale(1);
    filter: brightness(1) blur(0px);
}
.screenshot-prev-leave-to {
    opacity: 0;
    transform: translateX(40px) scale(0.97);
}
</style>
