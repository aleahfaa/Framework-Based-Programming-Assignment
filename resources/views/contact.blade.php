@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto animate-fade-in">
    <!-- header -->
    <div class="mb-8">
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-8 h-8 bg-n-gray-100 rounded-md flex items-center justify-center">
                <span class="text-n-gray-600">👋</span>
            </div>
            <h1 class="text-2xl font-bold text-n-gray-900">Contact</h1>
        </div>
        <p class="text-n-gray-600 text-sm">
            Let's connect and create something amazing together!
        </p>
    </div>
    <!-- main -->
    <div class="grid lg:grid-cols-2 gap-8 mb-8">
        <!-- left content -->
        <div class="bg-white rounded-lg border border-n-gray-200 shadow-sm p-8">
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-n-gray-900 mb-3">
                    Hello, I am Iffa Amalia Sabrina.
                </h2>
                <p class="text-n-gray-700 leading-relaxed mb-6">
                    I am the writer of all of the articles you've read here. I'm passionate about sharing stories,
                    insights, and creativity through my writing. Feel free to reach out if you'd like to connect,
                    collaborate, or just say hello!
                </p>
                <!-- about -->
                <div class="bg-n-gray-50 rounded-md p-4 mb-6 border-l-4 border-purple-500">
                    <h3 class="text-sm font-medium text-n-gray-900 mb-2">What I do</h3>
                    <p class="text-sm text-n-gray-700">
                        Creative writing, storytelling, and sharing insights about life, technology, and personal growth.
                    </p>
                </div>
            </div>
            <!-- contact -->
            <div class="space-y-4">
                <h3 class="text-sm font-medium text-n-gray-900 mb-3">Get in touch</h3>
                <!-- instagram -->
                <a href="https://instagram.com/aleahfa_" target="_blank" class="block">
                    <div class="flex items-center space-x-3 p-3 rounded-md hover:bg-n-gray-50 transition-colors duration-200 group">
                        <div class="w-8 h-8 bg-pink-100 rounded-md flex items-center justify-center">
                            <svg class="w-4 h-4 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="text-sm font-medium text-n-gray-900">Instagram</div>
                            <span class="text-sm text-n-gray-600 group-hover:text-blue-600 transition-colors duration-200">
                                @aleahfa_
                            </span>
                        </div>
                        <svg class="w-4 h-4 text-n-gray-400 group-hover:text-n-gray-600 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </div>
                </a>
                <!-- email -->
                <a href="mailto:iffaamaliasabrina@gmail.com" target="_blank" class="block">
                    <div class="flex items-center space-x-3 p-3 rounded-md hover:bg-n-gray-50 transition-colors duration-200 group">
                        <div class="w-8 h-8 bg-blue-100 rounded-md flex items-center justify-center">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="text-sm font-medium text-n-gray-900">Instagram</div>
                            <span class="text-sm text-n-gray-600 group-hover:text-blue-600 transition-colors duration-200">
                                iffaamaliasabrina@gmail.com
                            </span>
                        </div>
                        <svg class="w-4 h-4 text-n-gray-400 group-hover:text-n-gray-600 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </div>
                </a>
                <!-- whatsApp -->
                {{-- <div class="flex items-center space-x-3 p-3 rounded-md hover:bg-n-gray-50 transition-colors duration-200 group">
                    <div class="w-8 h-8 bg-green-100 rounded-md flex items-center justify-center">
                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.106"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="text-sm font-medium text-n-gray-900">WhatsApp</div>
                        <a href="https://wa.me/1234567890" target="_blank" class="text-sm text-n-gray-600 hover:text-blue-600 transition-colors duration-200">
                            Send Message
                        </a>
                    </div>
                    <svg class="w-4 h-4 text-n-gray-400 group-hover:text-n-gray-600 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </div> --}}
            </div>

            <div class="mt-6 p-4 bg-green-50 rounded-md border border-green-200">
                <div class="flex items-center space-x-2">
                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                    <span class="text-sm text-green-800 font-medium">Available for collaboration</span>
                </div>
                <p class="text-xs text-green-700 mt-1">
                    I'm currently open to new writing projects and creative opportunities.
                </p>
            </div>
        </div>
        <!-- right -->
        <div class="bg-white rounded-lg border border-n-gray-200 shadow-sm overflow-hidden">
            <div class="aspect-w-4 aspect-h-5">
                <img src="https://media.licdn.com/dms/image/v2/D5603AQETkk7TH0bYzQ/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1710133622792?e=1759968000&v=beta&t=nqKJw5r2tGzzpI5H8zjtav-CiAljxgZoD3IYkhqKmXg" alt="Iffa Amalia Sabrina" class="w-full h-full object-cover">
            </div>
            <div class="p-4 border-t border-n-gray-200">
                <p class="text-xs text-n-gray-500 text-center">
                    "Writing is the way I make sense of the world around me."
                </p>
            </div>
        </div>
    </div>
    <!-- form section -->
    <div class="bg-white rounded-lg border border-n-gray-200 shadow-sm p-8">
        <div class="max-w-2xl mx-auto">
            <div class="mb-6">
                <h2 class="text-lg font-semibold text-n-gray-900 mb-2">Send me a message</h2>
                <p class="text-sm text-n-gray-600">
                    Have a question or want to work together? I'd love to hear from you!
                </p>
            </div>
            <form class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-n-gray-700 mb-2">Name</label>
                        <input type="text" class="w-full px-3 py-2 border border-n-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Your name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-n-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full px-3 py-2 border border-n-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="your@email.com">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-n-gray-700 mb-2">Subject</label>
                    <input type="text" class="w-full px-3 py-2 border border-n-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="What's this about?">
                </div>
                <div>
                    <label class="block text-sm font-medium text-n-gray-700 mb-2">Message</label>
                    <textarea rows="6" class="w-full px-3 py-2 border border-n-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-none" placeholder="Tell me more about your project or question..."></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-n-gray-900 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-n-gray-800 transition-colors duration-200 inline-flex items-center">
                        Send Message
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // form handling
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input, textarea');
        // focus effects
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('relative');
            });
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('relative');
                }
            });
        });
        // form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            // show loading state
            submitBtn.innerHTML = `
            Sending...
            <svg class="ml-2 w-4 h-4 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
            </svg>
        `;
            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-70');
            // simulate form submission
            setTimeout(() => {
                submitBtn.innerHTML = `
                Message Sent!
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            `;
                submitBtn.classList.remove('bg-n-gray-900', 'hover:bg-n-gray-800', 'opacity-70');
                submitBtn.classList.add('bg-green-600');
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('bg-green-600');
                    submitBtn.classList.add('bg-n-gray-900', 'hover:bg-n-gray-800');
                    form.reset();
                }, 3000);
            }, 2000);
        });
        // contact method hover effects
        const contactMethods = document.querySelectorAll('.group');
        contactMethods.forEach(method => {
            method.addEventListener('mouseenter', function() {
                const icon = this.querySelector('svg:last-child');
                if (icon) {
                    icon.style.transform = 'translateX(2px)';
                }
            });
            method.addEventListener('mouseleave', function() {
                const icon = this.querySelector('svg:last-child');
                if (icon) {
                    icon.style.transform = 'translateX(0)';
                }
            });
        });
        // click tracking for contact methods
        const contactLinks = document.querySelectorAll('a[href^="https://"], a[href^="mailto:"]');
        contactLinks.forEach(link => {
            link.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        });
    });
</script>

<style>
    .aspect-w-4 {
        position: relative;
        padding-bottom: 125%;
    }
    .aspect-w-4>* {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
    input:focus,
    textarea:focus {
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
    * {
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 200ms;
    }
    .hover\:shadow-sm:hover {
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }
    @keyframes pulse {
        0%,
        100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }
    .bg-green-500 {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>
@endsection
