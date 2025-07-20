<section>
    <!-- Hero Section -->
    <div class="relative gradient-bg radial-gradient py-24 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-72 h-72 rounded-full blur-3xl animate-float"
                style="background-color: rgba(212, 175, 55, 0.05)"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 rounded-full blur-3xl animate-float-delay"
                style="background-color: rgba(212, 175, 55, 0.03)"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl lg:text-6xl font-bold mb-6 animate-slide-up"
                    style="font-family: 'Inter', sans-serif; color: #d4af37">
                    Get In
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Touch</span>
                </h1>
                <p class="text-xl lg:text-2xl mb-8 animate-fade-in-delay-1" style="color: #b8b8b8">
                    Ready to transform your banking operations? Let's discuss how
                    <span class="font-medium" style="color: #d4af37">KingBot</span>,
                    <span class="font-medium" style="color: #d4af37">KingPay</span>, and
                    <span class="font-medium" style="color: #d4af37">KingMedia</span>
                    can revolutionize your business.
                </p>
            </div>
        </div>
    </div>

    <div class="py-24 lg:py-32 relative" style="background-color: #1c1c1c">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-start">
                <!-- Contact Form -->
                <div>
                    <div class="glass-card rounded-2xl p-8 lg:p-12 glass-card-hover transition-all duration-500">
                        <div class="text-center mb-6">
                            <h2 class="text-3xl lg:text-4xl font-bold mb-2"
                                style="font-family: 'Inter', sans-serif; color: #d4af37">
                                Send Us a Message
                            </h2>
                            <p class="text-lg" style="color: #b8b8b8">
                                Fill out the form below and we'll get back to you within 24
                                hours.
                            </p>
                        </div>

                        <form id="contactForm" class="space-y-4">
                            <div class="group">
                                <label for="name" class="block font-medium mb-1 text-lg" style="color: #d4af37">
                                    Full Name
                                </label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-6 py-2 rounded-xl text-lg focus:outline-none form-focus transition-all duration-300"
                                    style="
                                        background: rgba(255, 255, 255, 0.05);
                                        border: 2px solid rgba(212, 175, 55, 0.3);
                                        color: white;
                                    "
                                    placeholder="Enter your full name" required
                                    onfocus="this.style.borderColor='#D4AF37'"
                                    onblur="this.style.borderColor='rgba(212, 175, 55, 0.3)'" />
                            </div>

                            <div class="group">
                                <label for="email" class="block font-medium mb-1 text-lg" style="color: #d4af37">
                                    Email Address
                                </label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-6 py-2 rounded-xl text-lg focus:outline-none form-focus transition-all duration-300"
                                    style="
                                        background: rgba(255, 255, 255, 0.05);
                                        border: 2px solid rgba(212, 175, 55, 0.3);
                                        color: white;
                                    "
                                    placeholder="Enter your email address" required
                                    onfocus="this.style.borderColor='#D4AF37'"
                                    onblur="this.style.borderColor='rgba(212, 175, 55, 0.3)'" />
                            </div>

                            <div class="group">
                                <label for="message" class="block font-medium mb-1 text-lg" style="color: #d4af37">
                                    Message / Inquiry
                                </label>
                                <textarea id="message" name="message" rows="3"
                                    class="w-full px-6 py-4 rounded-xl text-lg focus:outline-none form-focus transition-all duration-300 resize-vertical"
                                    style="
                                        background: rgba(255, 255, 255, 0.05);
                                        border: 2px solid rgba(212, 175, 55, 0.3);
                                        color: white;
                                    "
                                    placeholder="Tell us about your project or inquiry..." required onfocus="this.style.borderColor='#D4AF37'"
                                    onblur="this.style.borderColor='rgba(212, 175, 55, 0.3)'"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full py-2 button-gradient font-bold text-lg rounded-xl hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl uppercase tracking-wide"
                                style="color: #1c1c1c">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Company Info -->
                    <div class="glass-card rounded-3xl p-8 glass-card-hover transition-all duration-500">
                        <h3 class="text-2xl font-bold mb-6 flex items-center"
                            style="font-family: 'Inter', sans-serif; color: #d4af37">
                            Contact Information
                        </h3>

                        <div class="space-y-4">
                            <div class="flex items-center group">
                                <div class="w-12 h-12 rounded-xl flex items-center justify-center mr-4 transition-colors duration-300"
                                    style="background: rgba(212, 175, 55, 0.1)">
                                    <svg class="w-6 h-6" style="color: #d4af37" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm" style="color: #b8b8b8">Email</p>
                                    <a href="mailto:contact@smluck.com"
                                        class="text-lg text-white hover:text-yellow-400 transition-colors duration-300">
                                        contact@example.com
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center group">
                                <div class="w-12 h-12 rounded-xl flex items-center justify-center mr-4 transition-colors duration-300"
                                    style="background: rgba(212, 175, 55, 0.1)">
                                    <svg class="w-6 h-6" style="color: #d4af37" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm" style="color: #b8b8b8">Phone</p>
                                    <a href="tel:+1234567890"
                                        class="text-lg text-white hover:text-yellow-400 transition-colors duration-300">
                                        +1 (234) 567-890
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="glass-card rounded-3xl p-8 glass-card-hover transition-all duration-500">
                        <h3 class="text-2xl font-bold mb-6 flex items-center"
                            style="font-family: 'Inter', sans-serif; color: #d4af37">
                            Connect With Us
                        </h3>

                        <div class="flex flex-wrap gap-4">
                            <a href="#"
                                class="w-14 h-14 rounded-2xl flex items-center justify-center social-hover transition-all duration-300"
                                style="background: rgba(212, 175, 55, 0.1); color: #d4af37" title="Telegram"
                                onmouseover="this.style.backgroundColor='#D4AF37'; this.style.color='#1C1C1C';"
                                onmouseout="this.style.backgroundColor='rgba(212, 175, 55, 0.1)'; this.style.color='#D4AF37';">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.244-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                                </svg>
                            </a>

                            <a href="#"
                                class="w-14 h-14 rounded-2xl flex items-center justify-center social-hover transition-all duration-300"
                                style="background: rgba(212, 175, 55, 0.1); color: #d4af37" title="WeChat"
                                onmouseover="this.style.backgroundColor='#D4AF37'; this.style.color='#1C1C1C';"
                                onmouseout="this.style.backgroundColor='rgba(212, 175, 55, 0.1)'; this.style.color='#D4AF37';">
                                <svg role="img" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>WeChat</title>
                                    <path
                                        d="M8.691 2.188C3.891 2.188 0 5.476 0 9.53c0 2.212 1.17 4.203 3.002 5.55a.59.59 0 0 1 .213.665l-.39 1.48c-.019.07-.048.141-.048.213 0 .163.13.295.29.295a.326.326 0 0 0 .167-.054l1.903-1.114a.864.864 0 0 1 .717-.098 10.16 10.16 0 0 0 2.837.403c.276 0 .543-.027.811-.05-.857-2.578.157-4.972 1.932-6.446 1.703-1.415 3.882-1.98 5.853-1.838-.576-3.583-4.196-6.348-8.596-6.348zM5.785 5.991c.642 0 1.162.529 1.162 1.18a1.17 1.17 0 0 1-1.162 1.178A1.17 1.17 0 0 1 4.623 7.17c0-.651.52-1.18 1.162-1.18zm5.813 0c.642 0 1.162.529 1.162 1.18a1.17 1.17 0 0 1-1.162 1.178 1.17 1.17 0 0 1-1.162-1.178c0-.651.52-1.18 1.162-1.18zm5.34 2.867c-1.797-.052-3.746.512-5.28 1.786-1.72 1.428-2.687 3.72-1.78 6.22.942 2.453 3.666 4.229 6.884 4.229.826 0 1.622-.12 2.361-.336a.722.722 0 0 1 .598.082l1.584.926a.272.272 0 0 0 .14.047c.134 0 .24-.111.24-.247 0-.06-.023-.12-.038-.177l-.327-1.233a.582.582 0 0 1-.023-.156.49.49 0 0 1 .201-.398C23.024 18.48 24 16.82 24 14.98c0-3.21-2.931-5.837-6.656-6.088V8.89c-.135-.01-.27-.027-.407-.03zm-2.53 3.274c.535 0 .969.44.969.982a.976.976 0 0 1-.969.983.976.976 0 0 1-.969-.983c0-.542.434-.982.97-.982zm4.844 0c.535 0 .969.44.969.982a.976.976 0 0 1-.969.983.976.976 0 0 1-.969-.983c0-.542.434-.982.969-.982z" />
                                </svg>
                            </a>

                            <a href="#"
                                class="w-14 h-14 rounded-2xl flex items-center justify-center social-hover transition-all duration-300"
                                style="background: rgba(212, 175, 55, 0.1); color: #d4af37" title="WhatsApp"
                                onmouseover="this.style.backgroundColor='#D4AF37'; this.style.color='#1C1C1C';"
                                onmouseout="this.style.backgroundColor='rgba(212, 175, 55, 0.1)'; this.style.color='#D4AF37';">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.488" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
