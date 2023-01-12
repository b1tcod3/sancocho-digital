<script setup>

import Layout from '@/Layouts/GuestLayout.vue';
import SimpleButton from '@/Components/Button/SimpleButton.vue';

</script>

<template>
    <Layout>
    	<section class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
  			<div class="mx-auto max-w-screen-xl text-center">
  				<img alt="..." src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg" class="shadow-xl rounded-full align-middle border-none mx-auto max-w-150-px h-32 w-32">
  			</div>

  			<div class="w-full px-4 text-center mt-5">
          <div class="flex justify-center py-4 lg:pt-4 pt-8">
            <div class="mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-sky-600">
                22
              </span>
              <span class="text-sm text-sky-400">Friends</span>
            </div>
            <div class="mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-sky-600">
                10
              </span>
              <span class="text-sm text-sky-400">Photos</span>
            </div>
            <div class="lg:mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-sky-600">
                89
              </span>
              <span class="text-sm text-sky-400">Comments</span>
            </div>
          </div>
        </div>

  			<div class="text-center mt-6">
	        <h3 class="text-xl font-semibold leading-normal mb-2 text-sky-700 mb-2 dark:text-white">
	          Jenna Stones
	        </h3>
	        <div class="text-sm leading-normal mt-0 mb-2 text-sky-400 font-bold uppercase">
	          <i class="fas fa-map-marker-alt mr-2 text-lg text-sky-400"></i>
	          Los Angeles, California
	        </div>
	        <div class="mb-2 text-sky-600 mt-10">
	          <i class="fas fa-briefcase mr-2 text-lg text-sky-400"></i>
	          Solution Manager - Creative Tim Officer
	        </div>
	        <div class="mb-2 text-sky-600">
	          <i class="fas fa-university mr-2 text-lg text-sky-400"></i>
	          University of Computer Science
	        </div>
	      </div>
	      <div class="mt-10 py-10 border-t border-sky-200 text-center">
        <div class="flex flex-wrap justify-center">
          <div class="w-full lg:w-9/12 px-4">
            <p class="mb-4 text-lg leading-relaxed text-sky-700 dark:text-white">
              An artist of considerable range, Jenna the name taken
              by Melbourne-raised, Brooklyn-based Nick Murphy
              writes, performs and records all of his own music,
              giving it a warm, intimate feel with a solid groove
              structure. An artist of considerable range.
            </p>
            <SimpleButton color="blue" href="#">
              Show more
            </SimpleButton>
          </div>
        </div>
      </div>
    
  		</section>
    </Layout>
</template>
