{{-- Global Design System Tokens --}}
<style>
    :root {
        /* Brand Colors - Mr. Handyman Inspired */
        --color-brand-primary: #0066CC;
        --color-brand-primary-dark: #004C99;
        --color-brand-secondary: #FF6600;
        --color-brand-secondary-dark: #CC5200;
        --color-trust-green: #00AA4F;
        --color-trust-gold: #FFB800;
        --color-text-primary: #1A1A1A;
        --color-text-secondary: #666666;
        --color-bg-light: #F7F7F7;
        --color-bg-white: #FFFFFF;

        /* Spacing Scale - 8px base grid */
        --spacing-0: 0;
        --spacing-1: 0.25rem;
        /* 4px */
        --spacing-2: 0.5rem;
        /* 8px */
        --spacing-3: 0.75rem;
        /* 12px */
        --spacing-4: 1rem;
        /* 16px */
        --spacing-5: 1.25rem;
        /* 20px */
        --spacing-6: 1.5rem;
        /* 24px */
        --spacing-8: 2rem;
        /* 32px */
        --spacing-10: 2.5rem;
        /* 40px */
        --spacing-12: 3rem;
        /* 48px */
        --spacing-16: 4rem;
        /* 64px */
        --spacing-20: 5rem;
        /* 80px */
        --spacing-24: 6rem;
        /* 96px */

        /* Shadow Scale */
        --shadow-xs: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        --shadow-sm: 0 2px 4px 0 rgb(0 0 0 / 0.06);
        --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
        --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
        --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1);
        --shadow-2xl: 0 25px 50px -12px rgb(0 0 0 / 0.25);

        /* Border Radius Scale */
        --radius-sm: 0.5rem;
        /* 8px */
        --radius-md: 1rem;
        /* 16px */
        --radius-lg: 1.5rem;
        /* 24px */
        --radius-xl: 2rem;
        /* 32px */
        --radius-2xl: 3rem;
        /* 48px */
        --radius-full: 9999px;

        /* Z-Index Scale */
        --z-base: 1;
        --z-dropdown: 10;
        --z-sticky: 20;
        --z-fixed: 30;
        --z-modal-backdrop: 40;
        --z-modal: 50;
        --z-popover: 60;
        --z-tooltip: 70;

        /* Animation Durations */
        --duration-fast: 150ms;
        --duration-base: 300ms;
        --duration-slow: 500ms;
        --duration-slower: 700ms;

        /* Animation Easings */
        --ease-in: cubic-bezier(0.4, 0, 1, 1);
        --ease-out: cubic-bezier(0, 0, 0.2, 1);
        --ease-in-out: cubic-bezier(0.4, 0, 0.2, 1);
        --ease-bounce: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    /* Utility Classes for Design Tokens */
    .shadow-soft {
        box-shadow: 0 10px 40px -15px rgba(0, 0, 0, 0.15);
    }

    .shadow-elevated {
        box-shadow:
            0 4px 6px -1px rgba(0, 0, 0, 0.1),
            0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }

    .transition-smooth {
        transition: all var(--duration-base) var(--ease-out);
    }

    .transition-bounce {
        transition: transform var(--duration-slow) var(--ease-bounce);
    }

    /* Premium Card Styles */
    .card-premium {
        @apply bg-white rounded-[2rem] shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100;
    }

    .card-premium:hover {
        transform: translateY(-8px);
        border-color: rgba(79, 70, 229, 0.2);
    }

    /* Image Overlay Gradients */
    .overlay-dark {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.2) 50%, transparent 100%);
    }

    .overlay-primary {
        background: linear-gradient(to top, rgba(79, 70, 229, 0.8) 0%, rgba(79, 70, 229, 0.3) 50%, transparent 100%);
    }

    /* Text Gradients */
    .text-gradient-primary {
        @apply text-transparent bg-clip-text bg-gradient-to-r from-primary via-secondary to-accent;
    }

    /* Loading States */
    @keyframes skeleton-loading {
        0% {
            background-position: -200px 0;
        }

        100% {
            background-position: calc(200px + 100%) 0;
        }
    }

    .skeleton {
        background: linear-gradient(90deg, #f0f0f0 0px, #f8f8f8 40px, #f0f0f0 80px);
        background-size: 200px 100%;
        animation: skeleton-loading 1.5s ease-in-out infinite;
    }

    /* Focus Styles for Accessibility */
    .focus-ring {
        @apply focus:outline-none focus:ring-4 focus:ring-primary/20 focus:ring-offset-2;
    }

    /* Smooth Scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    ::-webkit-scrollbar-track {
        @apply bg-gray-100;
    }

    ::-webkit-scrollbar-thumb {
        @apply bg-gray-400 rounded-full;
    }

    ::-webkit-scrollbar-thumb:hover {
        @apply bg-gray-500;
    }

    /* Full-Width Layout Utilities */
    .section-full-width {
        width: 100%;
        padding-left: 0;
        padding-right: 0;
    }

    .section-content-contained {
        max-width: 1280px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 1rem;
        padding-right: 1rem;
    }

    @media (min-width: 640px) {
        .section-content-contained {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
    }

    @media (min-width: 1024px) {
        .section-content-contained {
            padding-left: 2rem;
            padding-right: 2rem;
        }
    }

    /* Professional Color Classes */
    .bg-brand-primary {
        background-color: var(--color-brand-primary);
    }

    .bg-brand-secondary {
        background-color: var(--color-brand-secondary);
    }

    .text-brand-primary {
        color: var(--color-brand-primary);
    }

    .text-brand-secondary {
        color: var(--color-brand-secondary);
    }

    .bg-trust-green {
        background-color: var(--color-trust-green);
    }

    .text-trust-green {
        color: var(--color-trust-green);
    }
</style>