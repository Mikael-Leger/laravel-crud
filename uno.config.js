import { defineConfig } from 'unocss';

export default defineConfig({
    content: {
        filesystem: [
            './resources/**/*.{html,js,php}',
        ]
    },
    rules: [
        ['border-1-solid-black', { "border": '1px solid black' }],
        ['br-5', { "border-radius": '5px' }],
        ['bg-blue', { "background-color": '#00b7cc' }],
        ['bg-orange', { "background-color": '#ff8811' }],
        ['bg-red', { "background-color": '#dc3545' }],
        ['bg-purple', { "background-color": '#9368b7' }],
    ],
    shortcuts: {
        'container': 'px-4 py-2',
        'flex-gap': 'gap-y-4 gap-x2',
        'flex-col': 'flex flex-col',
        'flex-row': 'flex flex-row',
        'container-centered': 'container flex flex-col items-center flex-gap',
        'container-centered-content': 'container-centered gap-1',
        'card': 'container border-1-solid-black br-5 w-full h-full bg-white text-black',
        'card-small': 'w-[300px]',
        'btn': 'container border-0 text-white rounded',
        'title': 'text-[22px] capitalize',
        'wrapper': 'flex flex-wrap flex-gap',
        'table': 'border-1-solid-black',
        'table-row': 'grid grid-cols-[50px_1fr_1fr_1fr_200px_100px_300px]'
    },
})
