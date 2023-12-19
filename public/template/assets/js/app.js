document.addEventListener('alpine:init', () => {
    // main section
    Alpine.data('scrollToTop', () => ({
        showTopButton: false,
        init() {
            window.onscroll = () => {
                this.scrollFunction();
            };
        },

        scrollFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                this.showTopButton = true;
            } else {
                this.showTopButton = false;
            }
        },

        goToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        },
    }));

    // theme customization
    Alpine.data('customizer', () => ({
        showCustomizer: false,
    }));

    // sidebar section
    Alpine.data('sidebar', () => ({
        init() {
            const selector = document.querySelector('.sidebar ul a[href="' + window.location.pathname + '"]');
            if (selector) {
                selector.classList.add('active');
                const ul = selector.closest('ul.sub-menu');
                if (ul) {
                    let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                    if (ele) {
                        ele = ele[0];
                        setTimeout(() => {
                            ele.click();
                        });
                    }
                }
            }
        },
    }));

    // header section
    Alpine.data('header', () => ({
        init() {
            const selector = document.querySelector('ul.horizontal-menu a[href="' + window.location.pathname + '"]');
            if (selector) {
                selector.classList.add('active');
                const ul = selector.closest('ul.sub-menu');
                if (ul) {
                    let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                    if (ele) {
                        ele = ele[0];
                        setTimeout(() => {
                            ele.classList.add('active');
                        });
                    }
                }
            }
        },

        notifications: [
            {
                id: 1,
                profile: 'user-profile.jpeg',
                message: '<strong class="text-sm mr-1">John Doe</strong>invite you to <strong>Prototyping</strong>',
                time: '45 min ago',
            },
            {
                id: 2,
                profile: 'profile-34.jpeg',
                message: '<strong class="text-sm mr-1">Adam Nolan</strong>mentioned you to <strong>UX Basics</strong>',
                time: '9h Ago',
            },
            {
                id: 3,
                profile: 'profile-16.jpeg',
                message: '<strong class="text-sm mr-1">Anna Morgan</strong>Upload a file',
                time: '9h Ago',
            },
        ],

        messages: [
            {
                id: 1,
                image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-success-light dark:bg-success text-success dark:text-success-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></span>',
                title: 'Congratulations!',
                message: 'Your OS has been updated.',
                time: '1hr',
            },
            {
                id: 2,
                image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-info-light dark:bg-info text-info dark:text-info-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span>',
                title: 'Did you know?',
                message: 'You can switch between artboards.',
                time: '2hr',
            },
            {
                id: 3,
                image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-danger-light dark:bg-danger text-danger dark:text-danger-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>',
                title: 'Something went wrong!',
                message: 'Send Reposrt',
                time: '2days',
            },
            {
                id: 4,
                image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-warning-light dark:bg-warning text-warning dark:text-warning-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">    <circle cx="12" cy="12" r="10"></circle>    <line x1="12" y1="8" x2="12" y2="12"></line>    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg></span>',
                title: 'Warning',
                message: 'Your password strength is low.',
                time: '5days',
            },
        ],

        languages: [
            {
                id: 1,
                key: 'Chinese',
                value: 'zh',
            },
            {
                id: 2,
                key: 'Danish',
                value: 'da',
            },
            {
                id: 3,
                key: 'English',
                value: 'en',
            },
            {
                id: 4,
                key: 'French',
                value: 'fr',
            },
            {
                id: 5,
                key: 'German',
                value: 'de',
            },
            {
                id: 6,
                key: 'Greek',
                value: 'el',
            },
            {
                id: 7,
                key: 'Hungarian',
                value: 'hu',
            },
            {
                id: 8,
                key: 'Italian',
                value: 'it',
            },
            {
                id: 9,
                key: 'Japanese',
                value: 'ja',
            },
            {
                id: 10,
                key: 'Polish',
                value: 'pl',
            },
            {
                id: 11,
                key: 'Portuguese',
                value: 'pt',
            },
            {
                id: 12,
                key: 'Russian',
                value: 'ru',
            },
            {
                id: 13,
                key: 'Spanish',
                value: 'es',
            },
            {
                id: 14,
                key: 'Swedish',
                value: 'sv',
            },
            {
                id: 15,
                key: 'Turkish',
                value: 'tr',
            },
            {
                id: 16,
                key: 'Arabic',
                value: 'ae',
            },
        ],

        removeNotification(value) {
            this.notifications = this.notifications.filter((d) => d.id !== value);
        },

        removeMessage(value) {
            this.messages = this.messages.filter((d) => d.id !== value);
        },
    }));
});