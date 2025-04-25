<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clarence Babiano - Web Developer</title>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('public/images/image.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/0a5161f91a.js" crossorigin="anonymous"></script>
    <style>
      * {
        scroll-behavior: smooth;
      }

      #typing-text::after {
        content: "|";
        animation: blink 0.7s infinite;
        font-size: 2rem;
      }

      @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
      }


      .tech-wrapper::after {
        content: attr(data-name);
        position: absolute;
        bottom: -30px;
        background: rgba(0, 0, 0, 0.8);
        color: #00ffff;
        padding: 0.25rem 0.5rem;
        border-radius: 0.375rem;
        font-size: 0.875rem;
        opacity: 0;
        white-space: nowrap;
        pointer-events: none;
        transition: opacity 0.3s;
        text-shadow: 0 0 5px #00ffff;
        z-index: 8;
      }

      .tech-wrapper:hover::after {
        opacity: 1;
      }
      
      html, body {
  overflow-x: hidden;
  margin: 0;
  padding: 0;
}

 .glow-border {
    border-color: #0ff;
    box-shadow: 0 0 20px #0ff;
  }


    </style>
  </head>
  <body class="bg-black text-white font-sans">
  <canvas id="trail" class="fixed top-0 left-0 pointer-events-none z-50"></canvas>
  
  <!-- Navbar -->
<!-- Navbar -->
<nav id="navbar" class="fixed top-0 left-0 w-full bg-transparent flex justify-end items-center py-4 px-6 z-50 transition-all duration-300 overflow-hidden">
  <!-- Hamburger Icon for Mobile -->
  <div class="block md:hidden">
<button id="hamburger-icon" class="relative w-6 h-5 flex flex-col justify-between items-center md:hidden z-50">
  <span id="bar1" class="w-6 h-0.5 bg-white rounded transition-all duration-300 ease-in-out origin-center"></span>
  <span id="bar2" class="w-6 h-0.5 bg-white rounded transition-all duration-300 ease-in-out origin-center"></span>
  <span id="bar3" class="w-6 h-0.5 bg-white rounded transition-all duration-300 ease-in-out origin-center"></span>
</button>



  </div>

  <!-- Desktop Menu Links -->
  <div class="hidden md:flex space-x-6">
    <a href="#landing" class="nav-link text-white font-bold hover:text-cyan-300">Home</a>
    <a href="#about" class="nav-link text-white font-bold hover:text-cyan-300">About Me</a>
    <a href="#certifications" class="nav-link text-white font-bold hover:text-cyan-300">Certifications</a>
    <a href="#projects" class="nav-link text-white font-bold hover:text-cyan-300">Projects</a>
    <a href="#contact" class="nav-link text-white font-bold hover:text-cyan-300">Contact Me</a>
  </div>
</nav>

<!-- Mobile Menu -->
<!-- Mobile Menu Links -->
<div id="mobile-menu" class="md:hidden fixed top-0 right-0 h-full w-1/2 bg-black/90 backdrop-blur-md z-40 transform translate-x-full transition-transform duration-300 ease-in-out border-l-4 border-transparent">
  <div class="flex flex-col items-center justify-center h-full space-y-8 text-center px-4">
    <a href="#landing" class="text-white-300 font-extrabold text-xl hover:text-white drop-shadow-[0_0_8px_#0ff]">Home</a>
    <a href="#about" class="text-white-300 font-extrabold text-xl hover:text-white drop-shadow-[0_0_8px_#0ff]">About Me</a>
    <a href="#certifications" class="text-white-300 font-extrabold text-xl hover:text-white drop-shadow-[0_0_8px_#0ff]">Certifications</a>
    <a href="#projects" class="text-white-300 font-extrabold text-xl hover:text-white drop-shadow-[0_0_8px_#0ff]">Projects</a>
    <a href="#contact" class="text-white-300 font-extrabold text-xl hover:text-white drop-shadow-[0_0_8px_#0ff]">Contact Me</a>
  </div>
</div>



<!-- Landing Section -->
<section id="landing" class="min-h-screen w-full flex flex-col md:flex-row items-center justify-center pt-32 relative bg-black/70 backdrop-blur-md overflow-hidden px-6 md:px-36">
  <div class="flex flex-col md:flex-row items-center justify-between w-full gap-16 relative z-10">
    <!-- Text Section -->
    <div class="flex-1 text-left" data-aos="fade-down-right" data-aos-delay="200" data-aos-duration="800">
      <h1 class="text-5xl sm:text-6xl md:text-7xl font-bold text-cyan-400 drop-shadow-[0_0_10px_#00ffff]">Hi, I'm Clarence 👨‍💻</h1>
      <span id="typing-text" class="drop-fade delay-2 block text-3xl sm:text-4xl md:text-3xl mt-6 text-cyan-300 drop-shadow-[0_0_6px_#00ffff]">Web & Mobile Dev</span>
      <p class="drop-fade delay-3 text-xl sm:text-2xl mt-6 text-gray-300 drop-shadow-[0_0_10px_#00ffff] mb-20 max-w-3xl leading-relaxed">
        Welcome to my personal page. I'm an FEU student taking <span class="underline">Bachelor of Science in Information Technology</span> specializing in <span class="underline">Web and Mobile App Development.</span>
        Have a tour about me and the projects I made.
      </p>
    </div>

    <!-- Image Section -->
    <div class="flex-1 flex items-center justify-center relative" data-aos="fade-down-left" data-aos-delay="200" data-aos-duration="800">
      <div class="absolute w-[300px] sm:w-[400px] h-[300px] sm:h-[400px] rounded-full bg-cyan-400/30 blur-3xl z-0"></div>
      <img src="{{ asset('public/images/image.png') }}" alt="Profile Photo" class="drop-fade delay-4 w-72 h-72 sm:w-96 sm:h-96 md:w-[420px] md:h-[420px] rounded-2xl object-cover relative z-10 animate-float" />
    </div>
  </div>
</section>

<section id="about" class="py-20 px-6 md:px-24 relative">

  <h2 class="pt-10 text-center text-3xl font-bold text-cyan-400 drop-shadow-[0_0_10px_#00ffff]">About Me</h2>
  <p class="pt-10 text-center text-white text-lg drop-shadow-[0_0_10px_#00ffff] mb-10">
    I am a student who likes to explore new things. I'm also the Lead Developer and Project Manager of our group called CodeBrew.
  </p>

  <div class="flex flex-col lg:flex-row justify-center items-center gap-12 relative">
    <!-- Glowing Vertical Divider -->
    <div class="hidden lg:block w-1 h-full bg-gradient-to-b from-cyan-400 to-teal-700 rounded-full shadow-[0_0_30px_#00ffff] absolute left-1/2 transform -translate-x-1/2"></div>

    <!-- Web Stack -->
    <div class="flex-1 z-10" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
      <h3 class="pt-10 text-center text-2xl text-cyan-400 drop-shadow mb-4">Web Stack</h3>
      <div class="pt-10 grid grid-cols-3 gap-8">
        @foreach (['ci.png' => 'CodeIgniter', 'laravel.png' => 'Laravel', 'php.png' => 'PHP', 'sql.png' => 'SQL', 'postman.png' => 'Postman', 'insomnia.png' => 'Insomnia', 'js.png' => 'JavaScript'] as $img => $name)
        <div class="drop-fade delay-4 tech-wrapper relative flex justify-center items-center transition-transform transform hover:scale-110 duration-300 ease-in-out" data-name="{{ $name }}">
          <div class="absolute w-32 h-32 rounded-full bg-cyan-400/20 blur-2xl z-0"></div>
          <img class="tech-img w-32 h-32 object-contain relative z-10 transition-all duration-300 hover:scale-110" src="{{ asset('public/images/' . $img) }}" alt="{{ $name }}" />
        </div>
        @endforeach
      </div>
    </div>

    <!-- Mobile Stack -->
    <div class="flex-1 z-10 transition-all duration-300 hover:scale-110" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
      <h3 class="pt-10 text-center text-2xl text-cyan-400 drop-shadow mb-4">Mobile Stack</h3>
      <div class="pt-10 grid grid-cols-3 gap-8">
        @foreach (['flutter.png' => 'Flutter', 'dart.png' => 'Dart', 'Python.png' => 'Python', 'ARDUINO.png' => 'Arduino', 'kotlin.png' => 'Kotlin', 'as.png' => 'Android Studio', 'c.png' => 'C++', 'kivy.png' => 'Kivy',] as $img => $name)
        <div class="drop-fade delay-6 tech-wrapper relative flex justify-center items-center transition-transform transform hover:scale-110 duration-300 ease-in-out" data-name="{{ $name }}">
          <div class="absolute w-32 h-32 rounded-full bg-cyan-400/20 blur-2xl z-0"></div>
          <img class="tech-img w-32 h-32 object-contain relative z-10 transition-all duration-300 hover:scale-110" src="{{ asset('public/images/' . $img) }}" alt="{{ $name }}" />
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- Tools Stack (Full Width) -->
  <div class="mt-20 z-10" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
    <h3 class="pt-10 text-center text-2xl text-cyan-400 drop-shadow mb-4">Tools</h3>
    <div class="pt-10 grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 justify-center">
      @foreach (['vscode.png' => 'VSCode', 'github.png' => 'Git', 'figma.png' => 'Figma', 'ps.png' => 'Photoshop', 'pp.png' => 'Premiere Pro'] as $img => $name)
      <div class="drop-fade delay-8 tech-wrapper relative flex justify-center items-center transition-transform transform hover:scale-110 duration-300 ease-in-out" data-name="{{ $name }}">
        <div class="absolute w-32 h-32 rounded-full bg-cyan-400/20 blur-2xl z-0"></div>
        <img class="tech-img w-24 h-24 object-contain relative z-10 transition-all duration-300 hover:scale-110" src="{{ asset('public/images/' . $img) }}" alt="{{ $name }}" />
      </div>
      @endforeach
    </div>
  </div>

</section>




<section id="certifications" class="relative px-6 py-12 bg-black">

  <div class="w-full max-w-7xl mx-auto"
  data-aos="fade-top"
        data-aos-delay="100"
        data-aos-duration="800">
    <h2 class="pt-10 text-center text-3xl text-cyan-400 mb-4 font-semibold drop-shadow-[0_0_10px_#00ffff]">
      My Certifications
    </h2>
    <p class="text-center text-white text-lg drop-shadow-[0_0_5px_#00ffff]">
      Throughout my college, I took several certifications to further enhance my skills. Here they are:
    </p>

    <!-- Scrollable Certification Cards -->
    <div class="overflow-x-auto pt-8 scrollbar-thin scrollbar-thumb-cyan-400 scrollbar-track-gray-900">
      <div class="flex gap-6 pb-4 w-max md:w-full md:flex-wrap md:justify-center">
    

      <div class="w-56 bg-[#1e1e1e] rounded-xl p-4 text-white shadow-[0_0_12px_rgba(0,255,255,0.3)] flex flex-col justify-between h-[340px] transform transition-transform duration-300"
     data-aos="fade-right"
     data-aos-delay="100"
     data-aos-duration="800"
     style="transition: transform 0.3s ease;">
  <img src="{{ asset('public/images/pmi.png') }}" alt="PMI" class="w-full h-32 object-cover rounded-md mb-3" />
  <h4 class="text-center text-base font-semibold">PMI Project Management Ready</h4>
  <p class="text-center text-sm">Date Issued: December 2, 2024</p>
  <div class="text-center mt-auto">
    <a href="https://www.credly.com/badges/48afdfde-f762-4a36-9af2-31ef08d82f78/public_url" target="_blank" class="inline-block px-3 py-1 mt-2 bg-cyan-400 text-black text-sm rounded-md hover:bg-cyan-300 transition transition-all duration-300 hover:scale-110 font-bold">
      Verify Me
    </a>
  </div>
</div>
        <div class="w-56 bg-[#1e1e1e] rounded-xl p-4 text-white shadow-[0_0_12px_rgba(0,255,255,0.3)] flex flex-col justify-between h-[340px] hover:scale-105 transition-transform duration-300"
        data-aos="fade-right"
        data-aos-delay="200"
        data-aos-duration="800">
          <img src="{{ asset('public/images/its.png') }}" alt="JavaScript" class="w-full h-32 object-cover rounded-md mb-3" />
          <h4 class="text-center text-base font-semibold">IT Specialist in JavaScript</h4>
          <p class="text-center text-sm">Date Issued: November 24, 2024</p>
          <div class="text-center mt-auto">
            <a href="https://www.credly.com/badges/a4d2d122-c1c7-4e00-9a3b-2d9c097fd1f6" target="_blank" class="inline-block px-3 py-1 mt-2 bg-cyan-400 text-black text-sm rounded-md hover:bg-cyan-300 transition transition-all duration-300 hover:scale-110 font-bold">
              Verify Me
            </a>
          </div>
        </div>

        <div class="w-56 bg-[#1e1e1e] rounded-xl p-4 text-white shadow-[0_0_12px_rgba(0,255,255,0.3)] flex flex-col justify-between h-[340px] hover:scale-105 transition-transform duration-300" 
        data-aos="fade-right"
        data-aos-delay="300"
        data-aos-duration="800">
          <img src="{{ asset('public/images/its.png') }}" alt="Networking" class="w-full h-32 object-cover rounded-md mb-3" />
          <h4 class="text-center text-base font-semibold">IT Specialist in Networking</h4>
          <p class="text-center text-sm">Date Issued: November 22, 2024</p>
          <div class="text-center mt-auto">
            <a href="https://www.credly.com/badges/6fc9555d-20a1-4e69-815a-e94e25236e1a" target="_blank" class="inline-block px-3 py-1 mt-2 bg-cyan-400 text-black text-sm rounded-md hover:bg-cyan-300 transition transition-all duration-300 hover:scale-110 font-bold">
              Verify Me
            </a>
          </div>
        </div>

        <div class="w-56 bg-[#1e1e1e] rounded-xl p-4 text-white shadow-[0_0_12px_rgba(0,255,255,0.3)] flex flex-col justify-between h-[340px] hover:scale-105 transition-transform duration-300" 
        data-aos="fade-right"
        data-aos-delay="400"
        data-aos-duration="800">
          <img src="{{ asset('public/images/cisco.png') }}" alt="CCNAv7" class="w-full h-32 object-cover rounded-md mb-3" />
          <h4 class="text-center text-base font-semibold">CCNAv7: Introduction to Networks</h4>
          <p class="text-center text-sm">Date Issued: May 20, 2023</p>
          <div class="text-center mt-auto">
            <a href="https://www.credly.com/badges/d490f7d9-e19c-4e26-b447-d781026f3767/public_url" target="_blank" class="inline-block px-3 py-1 mt-2 bg-cyan-400 text-black text-sm rounded-md hover:bg-cyan-300 transition transition-all duration-300 hover:scale-110 font-bold">
              Verify Me
            </a>
          </div>
        </div>

        <div class="w-56 bg-[#1e1e1e] rounded-xl p-4 text-white shadow-[0_0_12px_rgba(0,255,255,0.3)] flex flex-col justify-between h-[340px] hover:scale-105 transition-transform duration-300" 
        data-aos="fade-right"
        data-aos-delay="500"
        data-aos-duration="800">
          <img src="{{ asset('public/images/cisco.png') }}" alt="DevNet" class="w-full h-32 object-cover rounded-md mb-3" />
          <h4 class="text-center text-base font-semibold">CCNAv7: Switching, Routing & Wireless Essentials</h4>
          <p class="text-center text-sm">Date Issued: September 5, 2023</p>
          <div class="text-center mt-auto">
            <a href="https://www.credly.com/badges/fa0cb6e9-dc01-462e-ae07-1143465bdb38/public_url" target="_blank" class="inline-block px-3 py-1 mt-2 bg-cyan-400 text-black text-sm rounded-md hover:bg-cyan-300 transition transition-all duration-300 hover:scale-110 font-bold">
              Verify Me
            </a>
          </div>
        </div>

        <div class="w-56 bg-[#1e1e1e] rounded-xl p-4 text-white shadow-[0_0_12px_rgba(0,255,255,0.3)] flex flex-col justify-between h-[340px] hover:scale-105 transition-transform duration-300 "
        data-aos="fade-right"
        data-aos-delay="600"
        data-aos-duration="800">
          <img src="{{ asset('public/images/cisco.png') }}" alt="DevNet" class="w-full h-32 object-cover rounded-md mb-3" />
          <h4 class="text-center text-base font-semibold">CCNAv7: Enterprise Networking, Security & Automation</h4>
          <p class="text-center text-sm">Date Issued: December 5, 2023</p>
          <div class="text-center mt-auto">
            <a href="https://www.credly.com/badges/b3f342a2-7419-45c2-9db3-fc752f014074/public_url" target="_blank" class="inline-block px-3 py-1 mt-2 bg-cyan-400 text-black text-sm rounded-md hover:bg-cyan-300 transition transition-all duration-300 hover:scale-110 font-bold">
              Verify Me
            </a>
          </div>
        </div>

        <div class="w-56 bg-[#1e1e1e] rounded-xl p-4 text-white shadow-[0_0_12px_rgba(0,255,255,0.3)] flex flex-col justify-between h-[340px] " 
        data-aos="fade-right"
        data-aos-delay="700"
        data-aos-duration="800">
          <img src="{{ asset('public/images/cisco.png') }}" alt="DevNet" class="w-full h-32 object-cover rounded-md mb-3 " />
          <h4 class="text-center text-base font-semibold">NDG Linux & DevNet Associate</h4>
          <p class="text-center text-sm">Date Issued: April 27, 2024 & May 17, 2024</p>
          <div class="text-center mt-auto">
            <a href="https://example.com/badge/devnet" target="_blank" class="inline-block px-3 py-1 mt-2 bg-cyan-400 text-black text-sm rounded-md hover:bg-cyan-300 transition transition-all duration-300 hover:scale-110 font-bold">
              Verify Me
            </a>
          </div>
        </div>
        <!-- End Certification Card -->
      </div>
    </div>
  </div>
</section>

<section id="projects" class="relative px-6 py-12 bg-black">
  <!-- Neon Bar Left -->


  <div class="w-full max-w-7xl mx-auto">
    <h2 class="pt-10 text-center text-3xl text-cyan-400 mb-4 font-semibold drop-shadow-[0_0_10px_#00ffff]">
      My Projects
    </h2>
    <p class="text-center text-white text-lg drop-shadow-[0_0_5px_#00ffff] mb-10">
      Here's a showcase of some of the projects I worked on throughout college:
    </p>

    <!-- Project Display Area (2x2 Grid) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center" 
    >
      <!-- Project 1 -->
      <div class="text-white space-y-4"data-aos="fade-down-left" data-aos-delay="200" data-aos-duration="800">
        <h3 class="text-2xl font-semibold text-cyan-400">TrashTrack    <span class="bg-blue-400 text-black px-3 py-1 rounded-lg text-sm">Arduino IoT</span>    <span class="bg-cyan-400 text-black px-3 py-1 rounded-lg text-sm">Flutter</span>    <span class="bg-cyan-400 text-black px-3 py-1 rounded-lg text-sm">PHP</span>    <span class="bg-red-400 text-black px-3 py-1 rounded-lg text-sm">CodeIgniter</span> <span class="bg-yellow-400 text-black px-3 py-1 rounded-lg text-sm">MySQL</span></h3>
        <p class="text-base text-gray-300">
          TrashTrack is an IoT-Based Enhanced Waste Management System created for our Client which is Barangay Banaba. The app features include: MQ4-MQ135 Gas Sensors, Real-time GPS Truck Locator, Waste Scheduling System, Report System, and Request System.
        </p>
        <img src="{{ asset('public/images/1.png') }}" alt="TrashTrack" class="w-full h-auto rounded-lg shadow-[0_0_20px_#00ffff] transition-all duration-300 hover:scale-110">
      </div>

      <!-- Project 2 -->
      <div class="text-white space-y-4" data-aos="fade-down-right" data-aos-delay="350" data-aos-duration="800">
        <h3 class="text-2xl font-semibold text-cyan-400">E-Tusok      <span class="bg-cyan-400 text-black px-3 py-1 rounded-lg text-sm">PHP</span>    <span class="bg-red-400 text-black px-3 py-1 rounded-lg text-sm">CodeIgniter</span> <span class="bg-yellow-400 text-black px-3 py-1 rounded-lg text-sm">MySQL</span></h3>
        <p class="text-base text-gray-300">
          eTusok is an ecommerce project showcasing a working eCommerce platform with features such as add to cart, order tracking, and checkout functionality. This app highlights various types of street food available for online ordering in the Philippines.
        </p>
        <img src="{{ asset('public/images/2.png') }}" alt="E-Tusok" class="w-full h-auto rounded-lg shadow-[0_0_20px_#00ffff] transition-all duration-300 hover:scale-110">
      </div>

      <!-- Project 3 -->
      <div class="text-white space-y-4" data-aos="fade-up-left" data-aos-delay="450" data-aos-duration="800">
        <h3 class="text-2xl font-semibold text-cyan-400">FIT Queue Management System     <span class="bg-cyan-400 text-black px-3 py-1 rounded-lg text-sm">Flutter</span>  <span class="bg-red-400 text-black px-3 py-1 rounded-lg text-sm">CodeIgniter</span> <span class="bg-yellow-400 text-black px-3 py-1 rounded-lg text-sm">MySQL</span></h3>
        <p class="text-base text-gray-300">
          Feutech Queue Management System was designed for students and faculty to eliminate long queues for teacher consultations. This app enables fast, seamless transactions between students and teachers.
        </p>
        <img src="{{ asset('public/images/3.png') }}" alt="FIT Queue Management" class="w-full h-auto rounded-lg shadow-[0_0_20px_#00ffff] transition-all duration-300 hover:scale-110">
      </div>

      <!-- Project 4 -->
      <div class="text-white space-y-4" data-aos="fade-up-right" data-aos-delay="550" data-aos-duration="800">
        <h3 class="text-2xl font-semibold text-cyan-400">World Vision Philippines          <span class="bg-cyan-400 text-black px-3 py-1 rounded-lg text-sm">Flutter</span> <span class="bg-purple-400 text-black px-3 py-1 rounded-lg text-sm">Insomnia</span></h3>
        <p class="text-base text-gray-300">
          The World Vision App was redesigned to provide a modern look with unique design elements tailored specifically for World Vision Philippines, enhancing the overall user experience.
        </p>
        <img src="{{ asset('public/images/4.png') }}" alt="World Vision Philippines" class="w-full h-auto rounded-lg shadow-[0_0_20px_#00ffff] transition-all duration-300 hover:scale-110">
      </div>
    </div>
  </div>
</section>

<section id="contact" class="scroll-mt-24 py-20">
  <div class="w-full max-w-7xl mx-auto px-6" data-aos="fade-top" data-aos-delay="200" data-aos-duration="800">
    <h2 class="pt-10 text-center text-3xl sm:text-4xl md:text-5xl text-cyan-400 mb-4 font-semibold drop-shadow-[0_0_10px_#00ffff] transition-all duration-300 hover:scale-110">
      Interested? Connect with me!
    </h2>
    <p class="text-center text-white text-lg sm:text-xl mb-10 drop-shadow-[0_0_5px_#00ffff]">
      You can contact me through the following platforms:
    </p>

    <!-- Contact Links Section -->
    <div class="flex flex-wrap sm:flex-row justify-center sm:justify-center items-center text-white text-lg space-x-6 sm:space-x-6 sm:space-y-0">
      <!-- GitHub -->
      <a href="https://github.com/Claaarence" target="_blank" class="flex items-center space-x-3 transition-all duration-300 hover:scale-110">
        <img src="{{ asset('public/images/github.png') }}" alt="GitHub" class="w-14 h-14 drop-shadow-[0_0_10px_#00ffff]">
        <span class="hidden sm:inline">@Claaarence</span>
      </a>

      <!-- LinkedIn -->
      <a href="https://www.linkedin.com/in/clarence-babiano-065aa0336/" target="_blank" class="flex items-center space-x-3 transition-all duration-300 hover:scale-110">
        <img src="{{ asset('public/images/linkedin.png') }}" alt="LinkedIn" class="w-14 h-14 drop-shadow-[0_0_10px_#00ffff]">
        <span class="hidden sm:inline">Clarence Babiano</span>
      </a>

      <!-- Email -->
      <a href="mailto:clarencejosh.babiano@gmail.com" class="flex items-center space-x-3 transition-all duration-300 hover:scale-110">
        <img src="{{ asset('public/images/gmail.png') }}" alt="Email" class="w-14 h-14 drop-shadow-[0_0_10px_#00ffff]">
        <span class="hidden sm:inline">clarencejosh.babiano@gmail.com</span>
      </a>
    </div>
  </div>
</section>

<script>
  const hamburger = document.getElementById('hamburger-icon');
  const mobileMenu = document.getElementById('mobile-menu');
  const bar1 = document.getElementById('bar1');
  const bar2 = document.getElementById('bar2');
  const bar3 = document.getElementById('bar3');

  hamburger.addEventListener('click', () => {
    mobileMenu.classList.toggle('translate-x-full');
    mobileMenu.classList.toggle('translate-x-0');
    mobileMenu.classList.toggle('glow-border');

    // Animate to X
    bar1.classList.toggle('rotate-45');
    bar1.classList.toggle('translate-y-2');

    bar2.classList.toggle('opacity-0');

    bar3.classList.toggle('-rotate-45');
    bar3.classList.toggle('-translate-y-2');
  });
</script>



<script>
  // Navbar glow on scroll
  window.addEventListener("scroll", () => {
    const nav = document.getElementById("navbar");
    if (window.scrollY > 10) {
      nav.classList.add("bg-transparent", "shadow-lg", "shadow-cyan-500/50", "backdrop-blur-md");
    } else {
      nav.classList.remove("bg-transparent", "shadow-lg", "shadow-cyan-500/50", "backdrop-blur-md");
    }
  });

  // Active link highlighting
  const sections = document.querySelectorAll("section[id]");
  const navLinks = document.querySelectorAll(".nav-link");

  function updateActiveLink() {
    let currentSection = "";

    sections.forEach(section => {
      const rect = section.getBoundingClientRect();
      if (rect.top <= 120 && rect.bottom >= 120) {
        currentSection = section.id;
      }
    });

    navLinks.forEach(link => {
      link.classList.remove("text-cyan-400");
      if (link.getAttribute("href") === `#${currentSection}`) {
        link.classList.add("text-cyan-400");
      }
    });
  }

  window.addEventListener("scroll", updateActiveLink);
  window.addEventListener("load", updateActiveLink);
  window.addEventListener("resize", updateActiveLink);
</script>


<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Drop-fade Intersection Observer
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Handle .drop-fade animation
        if (entry.target.classList.contains('drop-fade')) {
          entry.target.classList.add('in-view');
        }

        // Handle .cert-card animation
        if (entry.target.classList.contains('cert-card')) {
          entry.target.classList.add('animate');
          entry.target.classList.remove('hidden');
        }

        observer.unobserve(entry.target); // Animate once
      }
    });
  }, {
    threshold: 0.6 // Better trigger when 60% visible
  });

  // Observe .drop-fade inside about and landing only
  ['#landing', '#about'].forEach(sectionId => {
    const section = document.querySelector(sectionId);
    if (section) {
      section.querySelectorAll('.drop-fade').forEach(el => observer.observe(el));
    }
  });

  // Observe .cert-card and apply alternating classes
  document.querySelectorAll('.cert-card').forEach((card, index) => {
    card.classList.add(index % 2 === 0 ? 'from-left' : 'from-right');
    observer.observe(card);
  });

  // Typing animation
  const typingText = document.getElementById("typing-text");
  const phrases = [
    "Full-Stack Web Developer ",
    "Mobile App Developer ",
    "No.1 Google Searcher and Stackoverflow User ",
    "I play games too! ",
    "A Student with a Dream "
  ];
  let i = 0, j = 0;
  let currentPhrase = [];
  let isDeleting = false;

  function loop() {
    typingText.innerHTML = currentPhrase.join("");

    if (i < phrases.length) {
      if (!isDeleting && j <= phrases[i].length) {
        currentPhrase.push(phrases[i][j]);
        j++;
      }

      if (isDeleting && j >= 0) {
        currentPhrase.pop();
        j--;
      }

      if (j === phrases[i].length) {
        isDeleting = true;
        setTimeout(loop, 1000);
        return;
      }

      if (isDeleting && j === 0) {
        currentPhrase = [];
        isDeleting = false;
        i = (i + 1) % phrases.length;
      }
    }

    const speed = isDeleting ? 50 : 150;
    setTimeout(loop, speed);
  }

  loop();

  // Canvas setup
  const canvas = document.getElementById('trail');
  const ctx = canvas.getContext('2d');
  let width = window.innerWidth;
  let height = window.innerHeight;
  canvas.width = width;
  canvas.height = height;

  function resize() {
    width = window.innerWidth;
    height = window.innerHeight;
    canvas.width = width;
    canvas.height = height;
  }

  window.addEventListener('resize', resize);

  let mouse = { x: width / 2, y: height / 2 };
  let mouseParticles = [];
  let floatingParticles = [];

  for (let i = 0; i < 100; i++) {
    floatingParticles.push({
      x: Math.random() * width,
      y: Math.random() * height,
      radius: Math.random() * 2 + 1,
      alpha: Math.random() * 0.6 + 0.3,
      dx: (Math.random() - 0.5) * 0.3,
      dy: (Math.random() - 0.5) * 0.3,
      color: Math.random() > 0.5 ? '#00ffff' : '#007bff'
    });
  }

  document.addEventListener('mousemove', (e) => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;

    for (let i = 0; i < 3; i++) {
      mouseParticles.push({
        x: mouse.x,
        y: mouse.y,
        alpha: 1,
        radius: Math.random() * 3 + 1,
        color: Math.random() > 0.5 ? '#00ffff' : '#007bff'
      });
    }
  });

  function draw() {
    ctx.clearRect(0, 0, width, height);

    // Floating particles
    for (let p of floatingParticles) {
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(${p.color === '#007bff' ? '0,123,255' : '0,255,255'},${p.alpha})`;
      ctx.shadowColor = p.color;
      ctx.shadowBlur = 10;
      ctx.fill();

      p.x += p.dx;
      p.y += p.dy;

      if (p.x < 0 || p.x > width) p.dx *= -1;
      if (p.y < 0 || p.y > height) p.dy *= -1;
    }

    // Mouse trail
    for (let i = 0; i < mouseParticles.length; i++) {
      let p = mouseParticles[i];
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(${p.color === '#007bff' ? '0,123,255' : '0,255,255'},${p.alpha})`;
      ctx.shadowColor = p.color;
      ctx.shadowBlur = 10;
      ctx.fill();

      p.alpha -= 0.02;
      p.y -= 0.5;
      p.radius *= 0.98;
    }

    mouseParticles = mouseParticles.filter(p => p.alpha > 0);

    requestAnimationFrame(draw);
  }

  draw();
});
</script>


</body>
</html>
