<footer class="bg-dark border-t border-gray-800 py-12">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-[1.3fr_1fr_0.7fr_1fr] gap-8">
            <!-- Company Info -->
            <div>
                <div class="flex items-center space-x-4 max-w-60">
                    <a href="{{route('home')}}"><img src="{{ asset('assets/king-yolo-footer-logo.png') }}" alt="KingYolo logo"
                            class="max-w-60" /></a>
                </div>
                <p class="text-gray-400 mb-4 mt-2 pr-8">
                   {{ \App\Helpers\SiteHelper::getSettings('site_description') }}
                </p>
                <div class="flex space-x-4">
                    <a href="{{ \App\Helpers\SiteHelper::getSettings('social_link_telegram') }}" class="text-gray-400 hover:text-gold transition-colors">
                        <svg role="img" width="24" height="24" class="fill-white/80 hover:fill-[#d4af37]"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Telegram</title>
                            <path
                                d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                        </svg>
                    </a>
                    <a href="{{ \App\Helpers\SiteHelper::getSettings('social_link_whatsapp') }}" class="text-gray-400 hover:text-gold transition-colors">
                        <svg role="img" viewBox="0 0 24 24" width="24" height="24"
                            class="fill-white/80 hover:fill-[#d4af37]" xmlns="http://www.w3.org/2000/svg">
                            <title>WhatsApp</title>
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                    </a>
                    <a href="{{ \App\Helpers\SiteHelper::getSettings('social_link_wechat') }}" class="text-gray-400 hover:text-gold transition-colors">
                        <svg role="img" viewBox="0 0 24 24" width="28" height="28"
                            class="fill-white/80 hover:fill-[#d4af37]" xmlns="http://www.w3.org/2000/svg">
                            <title>WeChat</title>
                            <path
                                d="M8.691 2.188C3.891 2.188 0 5.476 0 9.53c0 2.212 1.17 4.203 3.002 5.55a.59.59 0 0 1 .213.665l-.39 1.48c-.019.07-.048.141-.048.213 0 .163.13.295.29.295a.326.326 0 0 0 .167-.054l1.903-1.114a.864.864 0 0 1 .717-.098 10.16 10.16 0 0 0 2.837.403c.276 0 .543-.027.811-.05-.857-2.578.157-4.972 1.932-6.446 1.703-1.415 3.882-1.98 5.853-1.838-.576-3.583-4.196-6.348-8.596-6.348zM5.785 5.991c.642 0 1.162.529 1.162 1.18a1.17 1.17 0 0 1-1.162 1.178A1.17 1.17 0 0 1 4.623 7.17c0-.651.52-1.18 1.162-1.18zm5.813 0c.642 0 1.162.529 1.162 1.18a1.17 1.17 0 0 1-1.162 1.178 1.17 1.17 0 0 1-1.162-1.178c0-.651.52-1.18 1.162-1.18zm5.34 2.867c-1.797-.052-3.746.512-5.28 1.786-1.72 1.428-2.687 3.72-1.78 6.22.942 2.453 3.666 4.229 6.884 4.229.826 0 1.622-.12 2.361-.336a.722.722 0 0 1 .598.082l1.584.926a.272.272 0 0 0 .14.047c.134 0 .24-.111.24-.247 0-.06-.023-.12-.038-.177l-.327-1.233a.582.582 0 0 1-.023-.156.49.49 0 0 1 .201-.398C23.024 18.48 24 16.82 24 14.98c0-3.21-2.931-5.837-6.656-6.088V8.89c-.135-.01-.27-.027-.407-.03zm-2.53 3.274c.535 0 .969.44.969.982a.976.976 0 0 1-.969.983.976.976 0 0 1-.969-.983c0-.542.434-.982.97-.982zm4.844 0c.535 0 .969.44.969.982a.976.976 0 0 1-.969.983.976.976 0 0 1-.969-.983c0-.542.434-.982.969-.982z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Services -->
            <div>
                <h4 class="font-inter font-bold mb-4">Our Services</h4>
                <ul class="space-y-2 text-gray-400">
                    <li>
                        <a href="{{route('kingbot')}}" class="hover:text-[#d4af37] hover:underline transition-colors">KingBot -
                            Banking Automation</a>
                    </li>
                    <li>
                        <a href="{{route('kingmedia')}}"
                            class="hover:text-[#d4af37] hover:underline transition-colors">KingMedia - Digital
                            Marketing</a>
                    </li>
                    <li>
                        <a href="{{route('kingtech')}}"
                            class="hover:text-[#d4af37] hover:underline transition-colors">KingTech - Website Development</a>
                    </li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-inter font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-gray-400">
                    <li>
                        <a href="{{route('home')}}" class="hover:text-[#d4af37] hover:underline transition-colors">Home</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}" class="hover:text-[#d4af37] hover:underline transition-colors">About Us</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}"
                            class="hover:text-[#d4af37] hover:underline transition-colors">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-inter font-bold mb-4">Contact Us</h4>
                <div class="space-y-2 text-gray-400">
                    <p class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail">
                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                            <rect x="2" y="4" width="20" height="16" rx="2" />
                        </svg>
                         {{ \App\Helpers\SiteHelper::getSettings('site_email') }}
                    </p>
                    <p class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-phone-icon lucide-phone">
                            <path
                                d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                        </svg>
                         {{ \App\Helpers\SiteHelper::getSettings('site_phone') }}
                    </p>
                    <p class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-map-pinned-icon lucide-map-pinned">
                            <path
                                d="M18 8c0 3.613-3.869 7.429-5.393 8.795a1 1 0 0 1-1.214 0C9.87 15.429 6 11.613 6 8a6 6 0 0 1 12 0" />
                            <circle cx="12" cy="8" r="2" />
                            <path
                                d="M8.714 14h-3.71a1 1 0 0 0-.948.683l-2.004 6A1 1 0 0 0 3 22h18a1 1 0 0 0 .948-1.316l-2-6a1 1 0 0 0-.949-.684h-3.712" />
                        </svg>
                         {{ \App\Helpers\SiteHelper::getSettings('site_address') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; 2025 KingYolo. All rights reserved.</p>
        </div>
    </div>
</footer>