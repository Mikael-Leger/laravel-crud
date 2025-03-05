import { defineConfig } from 'unocss';

export default defineConfig({
    content: {
        filesystem: [
            './resources/**/*.{html,js,php}',
        ]
    },
    rules: [
        ['m-1', { margin: '1px' }],
    ],
    shortcuts: {
        'btn': 'px-4 py-2 bg-blue-500 text-white rounded',
    },
})
