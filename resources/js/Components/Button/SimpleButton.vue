<template>
	<Link 
		class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none  focus:shadow-outline-gray transition ease-in-out duration-150"
		:href="href"
		as="button"
		:class="[{
			'bg-gray-700 hover:bg-gray-900 hover:bg-gray-700 focus:border-gray-900 active:bg-gray-900 focus:border-gray-900': color==='default',
			'bg-blue-700 hover:bg-blue-900 focus:border-blue-900 active:bg-blue-900 focus:border-blue-900': color==='blue',
			'bg-green-700 hover:bg-green-900 focus:border-green-900 active:bg-green-900 focus:border-green-900': color==='green',
			'bg-red-700 hover:bg-red-900 focus:border-red-900 active:bg-red-900 focus:border-red-900': color==='red',
			'bg-purple-700 hover:bg-purple-900 focus:border-purple-900 active:bg-purple-900 focus:border-purple-900': color==='purple','bg-yellow-700 hover:bg-yellow-900 focus:border-yellow-900 active:bg-yellow-900 focus:border-yellow-900': color==='yellow',
		}]"
		>
		<slot />
	</Link>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
	components: {
        Link
    },
    props: {
        color: {
            type: String,
            default: 'default',
        },
        href: {
            type: String,
            default: '#',
        },
    }
}
</script>
