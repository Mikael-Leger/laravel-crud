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
    ],
    shortcuts: {
        'container': 'px-4 py-2',
        'flex-gap': 'gap-y-4 gap-x2',
        'container-centered': 'container flex flex-col items-center flex-gap',
        'container-centered-content': 'container-centered gap-1',
        'card': 'container border-1-solid-black br-5 w-[250px] h-[250px] bg-[#E17564]',
        'card-green': 'bg-[#237a3e]',
        'card-red': ' bg-[#872341]',
        'btn': 'container border-0 bg-blue-500 text-white rounded',
        'title': 'text-[22px] capitalize',
        'wrapper': 'flex flex-wrap flex-gap',
    },
})
