<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import NavBar from '@/Components/Navbar/TopBar.vue';
import FooterPage from '@/Components/Footer/Footer.vue';
import metadata from '@/Data/metadata.json';

</script>

<template>
    <Head>
        <title>{{metadata.site_name}} | {{title}}</title>
        <meta head-key="description" type="description" content="" />
        <meta name="author" content="">
        <meta name="keywords" :content="metadata.keywords">
        <meta head-key="twitter:title" name="twitter:title" content="" />
        <meta head-key="twitter:site" name="twitter:site" content="" />
        <meta head-key="twitter:creator" name="twitter:creator" content="" />
        <meta head-key="twitter:description" name="twitter:description" content="" />
        <meta head-key="twitter:card" name="twitter:card" content="summary_large_image" />
     
        <meta head-key="og:url" property="og:url" content="" />
        <meta head-key="og:title" property="og:title" content="" />
        <meta head-key="og:description" property="og:description" content="" />
        <meta head-key="og:type" property="og:type" content="website" />
        <meta head-key="og:image" property="og:image" content="" />
    </Head>
    
    <div class="min-h-screen dark:bg-gray-500">
        <nav-bar />
        
        <slot/>

        <FooterPage />
    </div>
</template>
