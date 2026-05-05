<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $profile->name ?? 'Dimas Aswito' }} | {{ $profile->headline ?? 'Software Engineer' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          }
        }
      }
    }
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: #0f172a; }
    ::-webkit-scrollbar-thumb { background: #334155; border-radius: 4px; }
    ::-webkit-scrollbar-thumb:hover { background: #475569; }
    
    .glass {
      background: rgba(15, 23, 42, 0.75);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(51, 65, 85, 0.5);
    }
    
    .reveal {
      opacity: 0;
      transform: translateY(24px);
      transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .reveal.active {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body class="bg-slate-950 text-slate-300 font-sans antialiased selection:bg-emerald-500/30 selection:text-emerald-50">

  <!-- Navigation -->
  <nav class="fixed top-0 w-full z-50 glass">
    <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
      <a href="#" class="text-lg font-bold text-slate-100 tracking-tight">
        {{ $profile->name ?? 'Dimas Aswito' }}
      </a>
      
      <!-- Desktop Links -->
      <div class="hidden md:flex items-center gap-8 text-sm font-medium">
        <a href="#about" class="hover:text-emerald-400 transition-colors">About</a>
        <a href="#experience" class="hover:text-emerald-400 transition-colors">Experience</a>
        <a href="#projects" class="hover:text-emerald-400 transition-colors">Projects</a>
        <a href="#education" class="hover:text-emerald-400 transition-colors">Education</a>
        <a href="#contact" class="px-4 py-2 rounded-lg bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 hover:bg-emerald-500/20 transition-all">
          Contact
        </a>
      </div>
      
      <!-- Mobile Toggle -->
      <button id="mobile-menu-btn" class="md:hidden text-slate-300 hover:text-white p-2">
        <i data-lucide="menu" class="w-6 h-6"></i>
      </button>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-slate-900/95 border-b border-slate-800 backdrop-blur-xl">
      <div class="px-6 py-4 flex flex-col gap-4 text-sm font-medium">
        <a href="#about" class="hover:text-emerald-400 transition-colors py-1">About</a>
        <a href="#experience" class="hover:text-emerald-400 transition-colors py-1">Experience</a>
        <a href="#projects" class="hover:text-emerald-400 transition-colors py-1">Projects</a>
        <a href="#education" class="hover:text-emerald-400 transition-colors py-1">Education</a>
        <a href="#contact" class="text-emerald-400 py-1">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="relative min-h-screen flex items-center justify-center pt-16 overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-emerald-900/20 via-slate-950 to-slate-950 pointer-events-none"></div>
    <div class="absolute top-1/4 -left-20 w-96 h-96 bg-blue-900/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-1/4 -right-20 w-[500px] h-[500px] bg-emerald-900/10 rounded-full blur-3xl pointer-events-none"></div>
    
    <div class="relative max-w-4xl mx-auto px-6 text-center">
      <p class="text-base text-slate-400 mb-6 reveal">
        Hello, I'm...
      </p>
      
      <h1 class="text-5xl sm:text-6xl md:text-7xl font-extrabold tracking-tight text-slate-100 mb-6 reveal" style="transition-delay: 100ms;">
        {{ $profile->name ?? 'Dimas Aswito' }}
      </h1>
      
      <p class="text-lg md:text-2xl text-slate-400 max-w-2xl mx-auto mb-12 leading-relaxed reveal" style="transition-delay: 200ms;">
        {{ $profile->description ?? 'Software Engineer & Full-stack Developer. Building functional, high-performance web and mobile solutions.' }}
      </p>
      
      <div class="reveal" style="transition-delay: 300ms;">
        <a href="#projects" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold transition-all hover:scale-105 hover:shadow-lg hover:shadow-emerald-500/20">
          View My Work
          <i data-lucide="arrow-down" class="w-4 h-4 animate-bounce"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-24 md:py-32 relative">
    <div class="max-w-6xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-16 items-start">
        
        <!-- Bio -->
        <div class="reveal">
          <h2 class="text-sm font-bold text-emerald-400 uppercase tracking-widest mb-3">About Me</h2>
          <h3 class="text-3xl md:text-4xl font-bold text-slate-100 mb-8">Who I Am</h3>
          <p class="text-slate-400 leading-relaxed text-lg mb-10">
            {{ $profile->about_text ?? "I'm an Informatics Engineering graduate from Politeknik Negeri Jember (POLIJE) with a strong passion for building software that creates real impact. My journey includes intensive training at Bangkit Academy by Google, GoTo, and Traveloka, where I honed my skills in mobile development. I'm also the co-founder of a software house, delivering tailored digital solutions for businesses and communities." }}
          </p>
          
          <!-- GitHub Contribution Card -->
          <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-emerald-500/30 transition-all duration-300">
            <div class="flex items-center justify-between mb-5">
              <div class="flex items-center gap-3">
                <i data-lucide="github" class="w-6 h-6 text-slate-200"></i>
                <div>
                  <div class="text-sm font-bold text-slate-200">{{ '@' . ($profile->github_username ?? 'aswitodimas') }}</div>
                  <div class="text-xs text-slate-500">Contribution Activity</div>
                </div>
              </div>
              <a href="https://github.com/{{ $profile->github_username ?? 'aswitodimas' }}" target="_blank" rel="noopener noreferrer" class="text-xs font-medium flex items-center gap-1 text-emerald-400 hover:text-emerald-300 transition-colors">
                View Profile <i data-lucide="external-link" class="w-3 h-3"></i>
              </a>
            </div>
            <div id="contrib-graph" class="grid grid-cols-12 gap-1.5"></div>
            <div class="flex items-center justify-between mt-3 text-[10px] text-slate-500">
              <span>Less</span>
              <div class="flex gap-1">
                <div class="w-2.5 h-2.5 rounded-sm bg-slate-800"></div>
                <div class="w-2.5 h-2.5 rounded-sm bg-emerald-900/50"></div>
                <div class="w-2.5 h-2.5 rounded-sm bg-emerald-700/70"></div>
                <div class="w-2.5 h-2.5 rounded-sm bg-emerald-500"></div>
                <div class="w-2.5 h-2.5 rounded-sm bg-emerald-400"></div>
              </div>
              <span>More</span>
            </div>
          </div>
        </div>
        
        <!-- Tech Stack -->
        <div class="reveal" style="transition-delay: 150ms;">
          <h4 class="text-lg font-semibold text-slate-100 mb-8 flex items-center gap-2">
            <i data-lucide="layers" class="w-5 h-5 text-emerald-400"></i>
            Tech Stack
          </h4>
          <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
            @forelse($skills as $skill)
            <div class="group bg-slate-900 border border-slate-800 rounded-xl p-5 flex flex-col items-center gap-3 hover:border-emerald-500/40 hover:-translate-y-1 transition-all duration-300 cursor-default">
              <i class="{{ $skill->icon_class }} colored text-4xl group-hover:scale-110 transition-transform"></i>
              <span class="text-sm font-medium text-slate-300">{{ $skill->name }}</span>
            </div>
            @empty
            <p class="col-span-2 sm:col-span-3 text-slate-500 text-sm">No skills found.</p>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience Section -->
  <section id="experience" class="py-24 md:py-32 bg-slate-900/30 border-y border-slate-800/50">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-20 reveal">
        <h2 class="text-sm font-bold text-emerald-400 uppercase tracking-widest mb-3">Experience</h2>
        <h3 class="text-3xl md:text-4xl font-bold text-slate-100">My Journey</h3>
      </div>
      
      <div class="relative">
        <!-- Desktop Center Line -->
        <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-px bg-slate-800 -translate-x-1/2"></div>
        <!-- Mobile Left Line -->
        <div class="md:hidden absolute left-8 top-0 bottom-0 w-px bg-slate-800"></div>
        
        <!-- Job 1 -->
        <div class="relative mb-14 pl-16 md:pl-0 md:w-1/2 md:pr-12 md:text-right md:ml-0 reveal">
          <span class="absolute left-8 md:left-full top-6 w-3 h-3 bg-slate-400 rounded-full ring-4 ring-slate-950 -translate-x-1/2"></span>
          <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-emerald-500/30 transition-all duration-300 group">
            <div class="flex flex-col md:items-end gap-1 mb-3">
              <h4 class="text-xl font-bold text-slate-100 group-hover:text-emerald-400 transition-colors">Junior Developer</h4>
              <span class="text-xs font-bold text-emerald-400 bg-emerald-500/10 px-2.5 py-1 rounded-md inline-block border border-emerald-500/20">Software House</span>
            </div>
            <p class="text-sm text-slate-400 mb-4 leading-relaxed">
              Developed <span class="text-slate-200 font-medium">Selena</span>, a drug reporting application designed for community health centers (Puskesmas) to streamline pharmaceutical data management and reporting workflows.
            </p>
            <div class="flex items-center gap-2 text-xs text-slate-500 md:justify-end font-medium">
              <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
              <span>Current Position</span>
            </div>
          </div>
        </div>
        
        <!-- Job 2 -->
        <div class="relative mb-14 pl-16 md:pl-0 md:w-1/2 md:pl-12 md:ml-auto reveal">
          <span class="absolute left-8 md:left-0 top-6 w-3 h-3 bg-slate-400 rounded-full ring-4 ring-slate-950 -translate-x-1/2"></span>
          <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-blue-500/30 transition-all duration-300 group">
            <div class="flex flex-col gap-1 mb-3">
              <h4 class="text-xl font-bold text-slate-100 group-hover:text-blue-400 transition-colors">Project Manager & Backend Dev</h4>
              <span class="text-xs font-bold text-blue-400 bg-blue-500/10 px-2.5 py-1 rounded-md inline-block w-fit border border-blue-500/20">Freelance / Contract</span>
            </div>
            <p class="text-sm text-slate-400 mb-4 leading-relaxed">
              Led the development of Village Information Systems for <span class="text-slate-200 font-medium">Ketapanrame</span> and <span class="text-slate-200 font-medium">Kembangbelor</span>, managing both backend architecture and end-to-end project coordination.
            </p>
            <div class="flex items-center gap-2 text-xs text-slate-500 font-medium">
              <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
              <span>Previous</span>
            </div>
          </div>
        </div>
        
        <!-- Job 3 -->
        <div class="relative pl-16 md:pl-0 md:w-1/2 md:pr-12 md:text-right md:ml-0 reveal">
          <span class="absolute left-8 md:left-full top-6 w-3 h-3 bg-slate-400 rounded-full ring-4 ring-slate-950 -translate-x-1/2"></span>
          <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-emerald-500/30 transition-all duration-300 group">
            <div class="flex flex-col md:items-end gap-1 mb-3">
              <h4 class="text-xl font-bold text-slate-100 group-hover:text-emerald-400 transition-colors">Mobile Development Cohort</h4>
              <span class="text-xs font-bold text-emerald-400 bg-emerald-500/10 px-2.5 py-1 rounded-md inline-block border border-emerald-500/20">Bangkit Academy</span>
            </div>
            <p class="text-sm text-slate-400 mb-4 leading-relaxed">
              Intensive training program led by Google, GoTo, and Traveloka. Specialized in Android mobile development, gaining hands-on experience with Kotlin and modern mobile architectures.
            </p>
            <div class="flex items-center gap-2 text-xs text-slate-500 md:justify-end font-medium">
              <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
              <span>Graduated</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="py-24 md:py-32">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-20 reveal">
        <h2 class="text-sm font-bold text-emerald-400 uppercase tracking-widest mb-3">Portfolio</h2>
        <h3 class="text-3xl md:text-4xl font-bold text-slate-100">My Projects</h3>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Traveljoy -->
        <article class="group bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-emerald-500/30 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-emerald-900/10 reveal">
          <div class="aspect-video bg-slate-800 relative overflow-hidden">
            <img src="http://static.photos/travel/640x360/42" alt="Traveljoy Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-80"></div>
          </div>
          <div class="p-6">
            <h4 class="text-xl font-bold text-slate-100 mb-3 group-hover:text-emerald-400 transition-colors">Traveljoy</h4>
            <p class="text-sm text-slate-400 mb-5 leading-relaxed">
              An AI-driven tourism assistant leveraging the Gemini API and Supabase to deliver personalized travel recommendations and intelligent itinerary planning.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="px-2.5 py-1 rounded-md bg-slate-800 text-xs font-medium text-slate-300 border border-slate-700">React</span>
              <span class="px-2.5 py-1 rounded-md bg-slate-800 text-xs font-medium text-slate-300 border border-slate-700">Supabase</span>
              <span class="px-2.5 py-1 rounded-md bg-slate-800 text-xs font-medium text-slate-300 border border-slate-700">Gemini API</span>
            </div>
          </div>
        </article>
        
        <!-- Selena -->
        <article class="group bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-emerald-500/30 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-emerald-900/10 reveal" style="transition-delay: 100ms;">
          <div class="aspect-video bg-slate-800 relative overflow-hidden">
            <img src="http://static.photos/medical/640x360/15" alt="Selena Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-80"></div>
          </div>
          <div class="p-6">
            <h4 class="text-xl font-bold text-slate-100 mb-3 group-hover:text-emerald-400 transition-colors">Selena</h4>
            <p class="text-sm text-slate-400 mb-5 leading-relaxed">
              A comprehensive drug reporting platform built for Puskesmas (community health centers) to manage, track, and report pharmaceutical data efficiently.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="px-2.5 py-1 rounded-md bg-slate-800 text-xs font-medium text-slate-300 border border-slate-700">Laravel</span>
              <span class="px-2.5 py-1 rounded-md bg-slate-800 text-xs font-medium text-slate-300 border border-slate-700">MySQL</span>
              <span class="px-2.5 py-1 rounded-md bg-slate-800 text-xs font-medium text-slate-300 border border-slate-700">Bootstrap</span>
            </div>
          </div>
        </article>
        
        <!-- ABC Algorithm -->
        <article class="group bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-emerald-500/30 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-emerald-900/10 reveal" style="transition-delay: 200ms;">
          <div class="aspect-video bg-slate-800 relative overflow-hidden">
            <img src="http://static.photos/technology/640x360/88" alt="ABC Algorithm Scheduler" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-80"></div>
          </div>
          <div class="p-6">
            <h4 class="text-xl font-bold text-slate-100 mb-3 group-hover:text-emerald-400 transition-colors">ABC Algorithm Scheduler</h4>
            <p class="text-sm text-slate-400 mb-5 leading-relaxed">
              An automated course scheduling system powered by the Artificial Bee Colony (ABC) algorithm. Developed as a thesis project to optimize academic timetables.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="px-2.5 py-1 rounded-md bg-slate-800 text-xs font-medium text-slate-300 border border-slate-700">Python</span>
              <span class="px-2.5 py-1 rounded-md bg-slate-800 text-xs font-medium text-slate-300 border border-slate-700">Algorithm</span>
              <span class="px-2.5 py-1 rounded-md bg-slate-800 text-xs font-medium text-slate-300 border border-slate-700">Research</span>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Education Section -->
  <section id="education" class="py-24 md:py-32 bg-slate-900/30 border-y border-slate-800/50">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-16 reveal">
        <h2 class="text-sm font-bold text-emerald-400 uppercase tracking-widest mb-3">Education</h2>
        <h3 class="text-3xl md:text-4xl font-bold text-slate-100">Academic Background</h3>
      </div>
      
      <div class="max-w-3xl mx-auto reveal">
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8 flex flex-col md:flex-row gap-6 items-start md:items-center hover:border-blue-500/30 transition-all duration-300 group">
          <div class="w-16 h-16 rounded-2xl bg-blue-500/10 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
            <i data-lucide="graduation-cap" class="w-8 h-8 text-blue-400"></i>
          </div>
          <div>
            <h4 class="text-xl font-bold text-slate-100 mb-1">Politeknik Negeri Jember (POLIJE)</h4>
            <p class="text-emerald-400 font-semibold mb-2">Bachelor of Applied Science in Informatics Engineering</p>
            <p class="text-sm text-slate-400 leading-relaxed">
              Completed comprehensive studies in software engineering, database systems, and algorithm design with a strong emphasis on practical, project-based learning.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-24 md:py-32 relative">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,_var(--tw-gradient-stops))] from-emerald-900/10 via-slate-950 to-slate-950 pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-6 relative text-center">
      <div class="reveal">
        <h2 class="text-sm font-bold text-emerald-400 uppercase tracking-widest mb-3">Get In Touch</h2>
        <h3 class="text-3xl md:text-5xl font-extrabold text-slate-100 mb-6">Let's Build Something Together</h3>
        <p class="text-slate-400 mb-12 max-w-xl mx-auto text-lg">
          Whether you have a project in mind, a question, or just want to say hi, feel free to reach out.
        </p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
          <a href="https://github.com/aswitodimas" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-200 font-semibold hover:border-slate-600 hover:bg-slate-800 transition-all">
            <i data-lucide="github" class="w-5 h-5"></i>
            GitHub
          </a>
          <a href="https://linkedin.com/in/dimasaswito" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-200 font-semibold hover:border-blue-500/50 hover:text-blue-400 transition-all">
            <i data-lucide="linkedin" class="w-5 h-5"></i>
            LinkedIn
          </a>
          <a href="#projects" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl border border-slate-700 text-slate-300 font-medium hover:border-slate-500 hover:text-white transition-all">
            <i data-lucide="briefcase" class="w-5 h-5"></i>
            View My Work
          </a>
          <a href="mailto:dimas.aswito@gmail.com" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold transition-all hover:scale-105 hover:shadow-lg hover:shadow-emerald-500/25">
            <i data-lucide="mail" class="w-5 h-5"></i>
            Send Email
          </a>
        </div>
      </div>
      
      <div class="border-t border-slate-800 pt-10 reveal" style="transition-delay: 150ms;">
        <p class="text-sm text-slate-500 flex items-center justify-center gap-3 flex-wrap">
          <i data-lucide="mountain" class="w-4 h-4 text-emerald-500"></i>
          <span>Outside of coding, you'll find me climbing mountains or exploring web security.</span>
          <i data-lucide="shield" class="w-4 h-4 text-blue-500"></i>
        </p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-8 border-t border-slate-800 bg-slate-950">
    <div class="max-w-6xl mx-auto px-6 text-center text-sm text-slate-600">
      <p> Dimas Aswito. All rights reserved.</p>
    </div>
  </footer>

  <script>
    // Initialize Lucide icons
    lucide.createIcons();
    
    // Mobile menu toggle
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    let isMenuOpen = false;
    
    btn.addEventListener('click', () => {
      isMenuOpen = !isMenuOpen;
      menu.classList.toggle('hidden');
      const icon = btn.querySelector('i');
      icon.setAttribute('data-lucide', isMenuOpen ? 'x' : 'menu');
      lucide.createIcons();
    });
    
    // Close mobile menu on link click
    menu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        isMenuOpen = false;
        menu.classList.add('hidden');
        const icon = btn.querySelector('i');
        icon.setAttribute('data-lucide', 'menu');
        lucide.createIcons();
      });
    });
    
    // Generate fake GitHub contribution graph
    const graph = document.getElementById('contrib-graph');
    const levels = ['bg-slate-800', 'bg-emerald-900/40', 'bg-emerald-800/60', 'bg-emerald-600/80', 'bg-emerald-400'];
    for (let i = 0; i < 48; i++) {
      const div = document.createElement('div');
      // Weighted random for realism
      const rand = Math.random();
      let levelIndex = 0;
      if (rand > 0.6) levelIndex = 1;
      if (rand > 0.75) levelIndex = 2;
      if (rand > 0.88) levelIndex = 3;
      if (rand > 0.96) levelIndex = 4;
      div.className = `h-3 rounded-sm ${levels[levelIndex]}`;
      graph.appendChild(div);
    }
    
    // Intersection Observer for scroll animations
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -50px 0px' });
    
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
  </script>
</body>
</html>