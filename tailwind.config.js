import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            // Kita 'ajarkan' Tailwind font 'Poppins' dari style.css Anda
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            // Kita tambahkan palet warna dari style.css Anda
            colors: {
                'admin': {
                    'text': '#333333',        // var(--text-color)
                    'bg': '#f8f9fa',          // var(--admin-bg)
                    'sidebar': '#4a5c48',      // var(--admin-sidebar-bg)
                    'sidebar-text': '#e8e8e8',
                    'sidebar-active': '#ffffff',
                    'sidebar-hover': '#5a6c58',
                },
                // Kita buat alias agar mudah digunakan
                'primary': '#4a5c48', // Hijau Lumut Tua
                'accent': '#ffffff',  // Kuning/Emas
                'success': '#4CAF50', // Hijau Notifikasi
                'danger': '#dc3545',  // Merah Hapus
            },
        },
    },

    plugins: [forms],
};
