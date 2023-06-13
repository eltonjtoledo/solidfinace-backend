<template>
    <div>
        <h1 class="bg-red-200">Pagina Home</h1> 
        <br />
        {{ title }}
        <br />
        <input type="text" name="model" v-model="title" />
    </div>
</template>

<script setup>
import {ref} from 'vue';

    let title = ref("");
</script>