<template>
    <div class="mx-auto max-w-6xl px-6 py-20">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-sky-400 md:text-6xl [font-family:'Space_Grotesk',sans-serif]">About Me</h2>
            <span class="mx-auto mt-4 block h-1 w-24 rounded-full bg-gradient-to-r from-violet-400 to-cyan-400"></span>
        </div>

        <div class="mt-12 grid items-center gap-10 lg:grid-cols-[320px_1fr]">
            <div class="mx-auto w-full max-w-[320px] rounded-full border border-slate-700 bg-gradient-to-br from-violet-500/20 to-cyan-500/20 p-2">
                <img :src="photoUrl" alt="Profile placeholder" class="h-[300px] w-full rounded-full object-cover md:h-[320px]">
            </div>

            <div class="space-y-6">
                <article class="rounded-2xl border border-slate-800 bg-slate-950/70 p-8">
                    <h3 class="text-3xl font-semibold text-white">Hello, I am Ircis 👋</h3>
                    <p class="mt-4 text-lg leading-relaxed text-slate-300">I build fast and practical web applications with strong backend structure and clean frontend interfaces. I focus on maintainable solutions using Laravel, JavaScript, and modern UI tools.</p>
                    <p class="mt-4 text-lg leading-relaxed text-slate-300">I enjoy learning new technologies, solving real business problems, and continuously improving as a full-stack developer.</p>
                </article>

                <article class="rounded-2xl border border-cyan-500/20 bg-gradient-to-r from-violet-950/40 to-cyan-950/40 p-6">
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
</template>

<script setup>
const photoUrl = 'https://placehold.co/640x640/020617/7dd3fc?text=Your+Photo';
const resumeUrl = '#';
</script>
