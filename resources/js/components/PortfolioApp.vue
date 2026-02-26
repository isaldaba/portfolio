<template>
    <div class="min-h-screen bg-slate-950 text-slate-100 antialiased">
        <header class="border-b border-slate-800">
            <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
                <p class="text-lg font-semibold">My Portfolio</p>
                <div class="flex items-center gap-5 text-sm text-slate-300">
                    <a href="#about" class="hover:text-white">About</a>
                    <a href="#skills" class="hover:text-white">Skills</a>
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
                <p class="mt-6 max-w-2xl text-base text-slate-300 md:text-lg">This is a simple portfolio starter built with Laravel + Vue and Tailwind. Update this content with your real bio, projects, and contact links.</p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="#projects" class="rounded-lg bg-indigo-500 px-5 py-3 text-sm font-semibold text-white hover:bg-indigo-400">View Projects</a>
                    <a href="#experience" class="rounded-lg border border-slate-700 px-5 py-3 text-sm font-semibold text-slate-200 hover:bg-slate-800">Past Jobs</a>
                    <a href="#contact" class="rounded-lg border border-slate-700 px-5 py-3 text-sm font-semibold text-slate-200 hover:bg-slate-800">Contact Me</a>
                </div>
            </section>

            <section id="about" class="border-y border-slate-800 bg-slate-900/40">
                <div class="mx-auto max-w-6xl px-6 py-20">
                    <div class="text-center">
                        <h2 data-reveal data-delay="0" class="text-4xl font-bold text-sky-400 opacity-0 -translate-x-12 transition-all duration-700 ease-out md:text-6xl [font-family:'Space_Grotesk',sans-serif]">About Me</h2>
                        <span data-reveal data-delay="80" class="mx-auto mt-4 block h-1 w-24 rounded-full bg-gradient-to-r from-violet-400 to-cyan-400 opacity-0 -translate-x-12 transition-all duration-700 ease-out"></span>
                    </div>

                    <div class="mt-12 grid items-center gap-10 lg:grid-cols-[320px_1fr]">
                        <div data-reveal data-delay="120" class="mx-auto w-full max-w-[320px] rounded-full border border-slate-700 bg-gradient-to-br from-violet-500/20 to-cyan-500/20 p-2 opacity-0 -translate-x-12 transition-all duration-700 ease-out">
                            <img :src="profilePhotoUrl" alt="Profile placeholder" class="h-[300px] w-full rounded-full object-cover md:h-[320px]">
                        </div>

                        <div class="space-y-6">
                            <article data-reveal data-delay="180" class="rounded-2xl border border-slate-800 bg-slate-950/70 p-8 opacity-0 -translate-x-12 transition-all duration-700 ease-out">
                                <h3 class="text-3xl font-semibold text-white">Hello, I am Ircis 👋</h3>
                                <p class="mt-4 text-lg leading-relaxed text-slate-300">I build fast and practical web applications with strong backend structure and clean frontend interfaces. I focus on maintainable solutions using Laravel, JavaScript, and modern UI tools.</p>
                                <p class="mt-4 text-lg leading-relaxed text-slate-300">I enjoy learning new technologies, solving real business problems, and continuously improving as a full-stack developer.</p>
                            </article>

                            <article data-reveal data-delay="240" class="rounded-2xl border border-cyan-500/20 bg-gradient-to-r from-violet-950/40 to-cyan-950/40 p-6 opacity-0 -translate-x-12 transition-all duration-700 ease-out">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <div>
                                        <h4 class="text-2xl font-semibold text-white">Download Resume</h4>
                                        <p class="mt-1 text-slate-300">Get my latest CV in PDF format</p>
                                    </div>
                                    <a :href="resumeUrl" class="rounded-full bg-gradient-to-r from-violet-500 to-cyan-500 px-6 py-3 text-sm font-semibold text-white transition hover:brightness-110">Download PDF</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section id="skills" class="mx-auto max-w-6xl px-6 py-16">
                <div class="text-center">
                    <h2 class="inline-flex items-center rounded-lg border border-sky-500/30 bg-slate-900 px-4 py-2 text-2xl font-semibold text-sky-400 shadow-sm shadow-sky-500/20 [font-family:'Space_Grotesk',sans-serif]">Skills</h2>
                </div>
                <div class="mt-8 overflow-hidden">
                    <div class="skills-carousel-track flex items-center gap-5 pr-5">
                        <article v-for="(skill, index) in duplicatedSkills" :key="`${skill.name}-${index}`" :aria-hidden="index >= skills.length" class="min-w-[170px] rounded-xl border border-slate-800 bg-slate-900 p-5 text-center">
                            <img :src="skill.icon" :alt="index >= skills.length ? '' : skill.name" class="mx-auto h-10 w-10 object-contain">
                            <h3 class="mt-3 text-lg font-semibold">{{ skill.name }}</h3>
                        </article>
                    </div>
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
                    <article v-if="isExperienceExpanded" data-reveal data-delay="0" class="relative cursor-pointer rounded-xl border border-slate-800 bg-slate-900 p-5 opacity-0 -translate-x-12 transition-all duration-700 ease-out hover:-translate-y-2 hover:scale-[1.08] hover:border-slate-600 hover:z-10 active:scale-110">
                        <p class="inline-flex rounded-full border border-cyan-400/20 bg-cyan-500/10 px-2.5 py-1 text-sm font-semibold tracking-wide text-cyan-300">Feb 2023 - May 2023</p>
                        <h3 class="mt-3 text-3xl font-semibold text-slate-50">Web Developer Intern</h3>
                        <p class="mt-1 text-sm font-medium text-sky-300">Nero Printing Services and Trading - Cebu</p>
                        <p class="mt-3 text-sm leading-relaxed text-slate-200">Completed web development internship and built a website for the company.</p>
                    </article>
                </div>
                <button type="button" class="mt-6 rounded-lg border border-slate-700 px-4 py-2 text-sm font-semibold text-slate-200 transition hover:bg-slate-800" @click="toggleExperience">{{ isExperienceExpanded ? 'See Less' : 'See More' }}</button>
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
                    <article v-if="isProjectsExpanded" data-reveal data-delay="0" class="rounded-xl border border-slate-800 bg-slate-900 p-5 opacity-0 -translate-x-12 transition-all duration-700 ease-out">
                        <h3 class="text-lg font-semibold">Project Three</h3>
                        <p class="mt-2 text-sm text-slate-300">Short description of your third project.</p>
                    </article>
                </div>
                <button type="button" class="mt-6 rounded-lg border border-slate-700 px-4 py-2 text-sm font-semibold text-slate-200 transition hover:bg-slate-800" @click="toggleProjects">{{ isProjectsExpanded ? 'See Less' : 'See More' }}</button>
            </section>

            <section id="contact" class="border-t border-slate-800 bg-slate-900/40">
                <div class="mx-auto max-w-6xl px-6 py-16">
                    <h2 class="inline-flex items-center rounded-lg border border-slate-700 bg-slate-900 px-4 py-2 text-2xl font-semibold text-white shadow-sm shadow-indigo-500/10 [font-family:'Space_Grotesk',sans-serif]">Contact me</h2>
                    <div class="group mt-4 inline-flex items-center gap-3">
                        <button type="button" class="text-2xl font-semibold transition duration-200 hover:scale-105" @click="copyPhone">{{ phoneNumber }}</button>
                        <span class="text-sm text-slate-400 opacity-0 transition-opacity duration-200 group-hover:opacity-100">{{ copyPhoneLabel }}</span>
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
    </div>
</template>

<script setup>
import { computed, nextTick, onBeforeUnmount, onMounted, ref } from 'vue';

const phoneNumber = '+639310194370';
const copyPhoneLabel = ref('Copy');
const isExperienceExpanded = ref(false);
const isProjectsExpanded = ref(false);

const profilePhotoUrl = 'https://placehold.co/640x640/020617/7dd3fc?text=Your+Photo';
const resumeUrl = '#';

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

const toggleExperience = async () => {
    isExperienceExpanded.value = !isExperienceExpanded.value;
    await nextTick();
    setupRevealObserver();
};

const toggleProjects = async () => {
    isProjectsExpanded.value = !isProjectsExpanded.value;
    await nextTick();
    setupRevealObserver();
};

onMounted(() => {
    setupRevealObserver();
});

onBeforeUnmount(() => {
    if (revealObserver) {
        revealObserver.disconnect();
    }
});
</script>

<style scoped>
@keyframes skills-scroll {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}

.skills-carousel-track {
    animation: skills-scroll 28s linear infinite;
    width: max-content;
    will-change: transform;
}
</style>
