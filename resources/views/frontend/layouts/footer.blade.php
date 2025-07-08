 <footer class="footer-gradient text-white overflow-hidden" data-aos="zoom-in-up" data-aos-duration="1000">
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
         <div class="grid grid-cols-1 md:grid-cols-6 gap-10">

             <!-- Logo & Description (span 2 columns) -->
             <div class="md:col-span-2">
                 <div class="mb-3">
                     <img src="{{ asset('assets/images/blackrevo-logo.png') }}" alt="Blackrevo Logo" class="h-12 w-auto">
                 </div>
                 <p class="text-base  leading-relaxed">
                     Boost your online success in Malaysia with expert SEO and IT solutions. Trusted by brands, powered
                     by BlackRevo.
                 </p>
             </div>

             <!-- Navigation 1 -->
             <div>
                 <ul class="space-y-1 text-md">
                     <li><a href="{{ route('about') }}" class="text-white hover:underline">Company</a></li>
                     <li><a href="{{ route('home') }}" class="text-gray-400 hover:underline">Home</a></li>
                     <li><a href="{{ route('career') }}" class="text-gray-400 hover:underline">Career</a></li>
                     <li><a href="{{ route('blog') }}" class="text-gray-400 hover:underline">Blog</a></li>
                 </ul>

             </div>

             <!-- Navigation 2 -->
             <div>
                 <ul class="space-y-1 text-md">
                     <li><a href="#" class="text-white hover:underline">Support</a></li>
                     <li><a href="{{ route('privacy') }}" class="text-gray-400 hover:underline">Privacy Policy</a></li>
                     <li><a href="{{ route('terms') }}" class="text-gray-400 hover:underline">Terms & Conditions</a>
                     </li>
                 </ul>
             </div>

             <!-- Newsletter (span 2 columns) -->
             <div class="md:col-span-2">
                 <p class="text-md  mb-4">Join a Newsletter</p>
                 <div class="flex items-center gap-3 flex-col sm:flex-row">
                     <form action="{{ route('submit.newsletter') }}" method="POST">
                         @csrf
                         <input type="email" name="email"
                             class="py-2 px-4 mb-3 w-full border border-gray-700 text-white focus:ring-2 focus:ring-cyan-300"
                             required placeholder="Enter your email">
                         <div class="relative inline-block">
                             <button type="submit"
                                 class="block cursor-pointer bg-red-900 text-white font-medium text-center px-6 py-2 rounded transition-colors duration-300 hover:bg-red-800"
                                 style="background: rgba(255, 0, 0, 0.3);">
                                 Submit
                             </button>

                             <!-- Top-left corner -->
                             <div class="absolute top-0 left-0 w-2.5 h-2.5 border-t border-l border-white/50"></div>

                             <!-- Top-right corner -->
                             <div class="absolute top-0 right-0 w-2.5 h-2.5 border-t border-r border-white/50"></div>

                             <!-- Bottom-left corner -->
                             <div class="absolute bottom-0 left-0 w-2.5 h-2.5 border-b border-l border-white/50"></div>

                             <!-- Bottom-right corner -->
                             <div class="absolute bottom-0 right-0 w-2.5 h-2.5 border-b border-r border-white/50"></div>
                         </div>
                     </form>
                 </div>

                 <div class="py-10 flex gap-4 mt-4 md:mt-0">
                     <!-- Facebook -->
                     <a href="https://www.facebook.com/blackrevo.my" target="_blank"
                         class="hover:text-white text-red-800 bg-white/10 backdrop-blur-sm shadow-md transition rounded-full w-11 h-11 flex items-center justify-center">
                         <i class="fa-brands fa-facebook-f text-lg"></i>
                     </a>

                     <!-- Instagram -->
                     <a href="https://www.instagram.com/blackrevo.my" target="_blank"
                         class="hover:text-white text-red-800 bg-white/10 backdrop-blur-sm shadow-md transition rounded-full w-11 h-11 flex items-center justify-center">
                         <i class="fa-brands fa-instagram text-lg"></i>
                     </a>

                     <!-- LinkedIn -->
                     <a href="http://linkedin.com/company/blackrevo-my" target="_blank"
                         class="hover:text-white text-red-800 bg-white/10 backdrop-blur-sm shadow-md transition rounded-full w-11 h-11 flex items-center justify-center">
                         <i class="fa-brands fa-linkedin-in text-lg"></i>
                     </a>

                     <!-- Xiaohongshu (XHS) -->
                     <a href="https://www.xiaohongshu.com/user/profile/67539b46000000001c01b74a" target="_blank"
                         class="hover:text-white text-red-800 bg-white/10 backdrop-blur-sm shadow-md transition rounded-full w-11 h-11 flex items-center justify-center">
                         <img src="{{ asset('assets/images/xhs-icon.png') }}" alt="xhs-icon"
                             class="w-7 h-7 object-contain">
                     </a>
                 </div>

             </div>
         </div>

         <!-- Divider -->
         <hr class="my-8 border-gray-400">

         <!-- Bottom Row -->
         <div class="pt-2 pb-16 sm:pb-20">
             <div class="flex justify-center text-center">
                 <div class="contact-info">
                     <div class="info-item font-manrope opacity-75 flex flex-col sm:flex-row items-center gap-2">
                         <i class="fas fa-location-dot text-red-800 mb-2 sm:mb-0"></i>
                         <span>
                             B-02-23A & B-02-25 Dataran Cascades, <br>
                             No. 13A, Jalan PJU 5/1, Kota Damansara, <br>
                             PJU 5, 47810 Petaling Jaya, Selangor
                         </span>
                     </div>
                 </div>
             </div>
         </div>

     </div>
     <div class="-mt-36 sm:-mt-40 md:-mt-44 lg:-mt-48 xl:-54 2xl:-mt-60">
         <img src="{{ asset('assets/images/Footer-logo.svg') }}" alt="">
     </div>
 </footer>
