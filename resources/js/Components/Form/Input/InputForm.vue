<script setup>
import { onMounted, ref } from 'vue';

const props = defineProps({
	required: {
        type: Boolean,
        default: false,
    },
    modelValue: {
        default: null,
    },
    name: {
    	type: String,
        default: null,
    },
    placeholder: {
    	type: String,
        default: null,
    },
    label: {
    	type: String,
        default: null,
    }
    ,
    error: {
    	type: String,
        default: null,
    }
    });

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});
</script>

<template>
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{label}}</label>
    <input type="text" :name="name" :id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" :placeholder="placeholder" :required="required"
                  :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input"
                  />
     <p v-if="error" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Well done!</span> {{error}}</p>


</template>
