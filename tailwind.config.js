/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/**/*.{js,ts,jsx,tsx,mdx}",
    "./components/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    extend: {
      colors: {
        navy: {
          950: '#050B16',
          900: '#0A1224',
          850: '#0E1A34',
          800: '#142346',
          700: '#1C315E',
        },
        cyan: {
          400: '#00D9FF',
          500: '#00B8D9',
          600: '#008BA3',
        },
        electric: '#1E90FF',
        teal: {
          glow: '#00E6A8',
        },
        amber: {
          alert: '#FFC857',
        },
        red: {
          alert: '#FF4D4D',
        },
      },
      fontFamily: {
        mono: ['Space Mono', 'Consolas', 'Courier New', 'monospace'],
        display: ['Space Grotesk', 'sans-serif'],
        sans: ['Inter', 'sans-serif'],
      },
      animation: {
        'radar-sweep': 'radarSweep 4s linear infinite',
        'pulse-glow': 'pulseGlow 2s ease-in-out infinite',
        'orbit-rotate': 'orbitRotate 20s linear infinite',
        'ping-slow': 'ping 3s cubic-bezier(0, 0, 0.2, 1) infinite',
        'shimmer': 'shimmer 2.5s infinite',
      },
      keyframes: {
        radarSweep: {
          '0%': { transform: 'rotate(0deg)' },
          '100%': { transform: 'rotate(360deg)' },
        },
        pulseGlow: {
          '0%, 100%': { opacity: '0.4', filter: 'drop-shadow(0 0 8px rgba(0, 217, 255, 0.4))' },
          '50%': { opacity: '1', filter: 'drop-shadow(0 0 20px rgba(0, 217, 255, 0.9))' },
        },
        orbitRotate: {
          '0%': { transform: 'rotate(0deg)' },
          '100%': { transform: 'rotate(360deg)' },
        },
        shimmer: {
          '0%': { backgroundPosition: '-200% 0' },
          '100%': { backgroundPosition: '200% 0' },
        },
      },
      boxShadow: {
        'cyan-glow': '0 0 20px rgba(0, 217, 255, 0.25)',
        'blue-glow': '0 0 20px rgba(30, 144, 255, 0.25)',
        'red-glow': '0 0 20px rgba(255, 77, 77, 0.35)',
        'amber-glow': '0 0 20px rgba(255, 200, 87, 0.35)',
        'teal-glow': '0 0 20px rgba(0, 230, 168, 0.35)',
      },
    },
  },
  plugins: [],
}
