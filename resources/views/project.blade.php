<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project['title'] ?? 'Project' }}</title>
    @vite('resources/css/app.css')
    <style>
        
        body {   font-family:Georgia, 'Times New Roman', Times, serif, Roboto, Helvetica, Arial, sans-serif;
}
        .section-fade { opacity: 0; transform: translateY(24px); transition: opacity 0.8s ease, transform 0.8s ease; }
        .section-fade.visible { opacity: 1; transform: translateY(0); }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-b from-slate-950 via-blue-700 to-slate-500 text-slate-900">
    <div class="relative overflow-hidden">
        <div class="absolute left-0 top-10 h-48 w-48 rounded-full bg-white/20 blur-3xl"></div>
        <div class="absolute right-0 top-1/4 h-80 w-80 rounded-full bg-sky-200/20 blur-3xl"></div>

        <header class="relative mx-auto flex max-w-6xl items-center justify-between gap-6 px-6 py-6 sm:px-10">
            <a href="{{ url('/') }}" class="rounded-full bg-white/10 px-5 py-3 text-lg font-semibold text-white shadow-lg shadow-slate-900/10 transition hover:bg-white/20">&larr; Back</a>
            <div class="hidden rounded-full bg-white/10 px-5 py-3 text-white/90 shadow-lg shadow-slate-900/10 md:block">Project Detail</div>
        </header>

        <main class="relative mx-auto max-w-6xl px-6 pb-20 sm:px-10">
            <section class="section-fade mt-10 rounded-[2.5rem] border border-white/15 bg-white/10 p-6 shadow-2xl shadow-slate-950/20 backdrop-blur-xl md:p-10">
                <div class="grid gap-8 lg:grid-cols-2 lg:gap-10">
                    <div id="project-image" class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-slate-950/40 backdrop-blur-sm shadow-xl w-full h-auto max-h-[600px] flex items-center justify-center">
    <img src="{{ $project['image'] }}" 
         alt="{{ $project['title'] }}" 
         class="w-full h-auto max-h-[600px] object-contain transition-transform duration-700 ease-out hover:scale-105"
         loading="eager">
</div>
                    
                    <div class="space-y-6 text-white">
                        <span class="inline-flex rounded-full bg-sky-100/15 px-4 py-2 text-sm font-semibold uppercase tracking-[0.32em] text-sky-100">Featured Project</span>
                        <h1 class="text-4xl font-extrabold sm:text-5xl">{{ $project['title'] ?? 'Untitled Project' }}</h1>
                        <p class="max-w-3xl text-lg leading-8 text-slate-100/90 md:text-xl">{{ $project['description']}}</p>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="rounded-3xl bg-white/10 p-6 text-slate-50 shadow-lg shadow-slate-950/10">
                                <h2 class="font-semibold text-white">Platform</h2>
                                <p class="mt-2 text-sm text-slate-200">{{ $project['platform'] ?? 'N/A' }}</p>
                            </div>
                            <div class="rounded-3xl bg-white/10 p-6 text-slate-50 shadow-lg shadow-slate-950/10">
                                <h2 class="font-semibold text-white">Stack</h2>
                                <p class="mt-2 text-sm text-slate-200">{{ $project['stack'] ?? 'N/A' }}</p>
                            </div>
                            <div class="rounded-3xl p-6 shadow-lg shadow-slate-950/10 bg-white/5">
    <h2 class="font-semibold text-white">Url</h2>
    <a href="{{ $project['url'] ?? '#' }}" class="mt-2 block text-sm text-white hover:text-blue-500 font-black break-all">
        {{ $project['url'] ?? 'N/A' }}
    </a>
</div>

<div class="rounded-3xl p-6 shadow-lg shadow-slate-950/10 bg-white/5">
    <h2 class="font-semibold text-white">GitHub</h2>
    <a href="{{ $project['github'] ?? '#' }}" class="mt-2 block text-sm text-white hover:text-blue-500 font-black break-all">
        {{ $project['github'] ?? 'N/A' }}
    </a>
</div>
                        </div>
                        <div class="flex flex-col gap-4 sm:flex-row">
                            <a href="{{ url('/') }}" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-[#4FC3F7] to-[#01579B] px-8 py-4 text-base font-bold text-white shadow-lg shadow-[#01579B]/30 transition hover:scale-[1.02]">Home</a>
                            <button id="open-modal-btn" class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/10 px-8 py-4 text-base font-semibold text-white transition hover:bg-white/20">View Image</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fade mt-10 rounded-[2.5rem] border border-white/15 bg-[#ffffff1a] p-6 shadow-2xl shadow-slate-950/20 backdrop-blur-xl md:p-10">
                <h2 class="text-3xl font-extrabold text-white">Project Highlights</h2>
                <div class="mt-6 grid gap-6 md:grid-cols-3">
                    <article class="rounded-3xl bg-white/10 p-5 text-slate-100 shadow-lg shadow-slate-950/10">
                        <h3 class="font-semibold text-white">Responsive Design</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-200">Optimized layouts for every screen size with smooth transitions and readable text.</p>
                    </article>
                    <article class="rounded-3xl bg-white/10 p-5 text-slate-100 shadow-lg shadow-slate-950/10">
                        <h3 class="font-semibold text-white">Modern UI</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-200">Clean visuals, bold color energy, and refined spacing across the page.</p>
                    </article>
                    <article class="rounded-3xl bg-white/10 p-5 text-slate-100 shadow-lg shadow-slate-950/10">
                        <h3 class="font-semibold text-white">Fast Experience</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-200">Lightweight layout and accessible components for a polished user experience.</p>
                    </article>
                </div>
            </section>
        </main>
    </div>

    <div id="image-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md">
        <div class="relative max-w-4xl w-full overflow-hidden rounded-[2rem] border border-white/15 bg-slate-900 shadow-2xl animate-fade-in">
            <button id="close-modal-btn" class="absolute right-4 top-4 z-10 flex h-10 w-10 items-center justify-center rounded-full bg-black/50 text-white transition hover:bg-black/80">
                ✕
            </button>
            <div class="p-2">
                <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="max-h-[80vh] w-full object-contain rounded-[1.5rem]" />
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Intersection Observer Logic
            const sections = document.querySelectorAll('.section-fade');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.15 });

            sections.forEach(section => observer.observe(section));

            // Modal Logic
            const modal = document.getElementById('image-modal');
            const openBtn = document.getElementById('open-modal-btn');
            const closeBtn = document.getElementById('close-modal-btn');

            // Open Modal
            openBtn.addEventListener('click', () => {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden'; // Prevents background scrolling when modal is open
            });

            // Close Modal functions
            const closeModal = () => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = ''; // Restores background scrolling
            };

            closeBtn.addEventListener('click', closeModal);

            // Close Modal when clicking outside the modal content box
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Close Modal with Escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });
        });
    </script>
</body>
</html>