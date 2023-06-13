<template>
    <div class="bg-zinc-50 relative flex flex-col group bg-primary">
        <div class="m-1 p-2 rounded font-bold text-white self-center transition-all duration-500 inline flex flex-nowrap overflow-hidden border-b" :class="toggle ? ' w-30' : ' w-11'">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 grow-0 shrink-0">
                <path fill-rule="evenodd"
                    d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                    clip-rule="evenodd" /> 
            </svg>
            <div class="ml-2 text-white font-bold text-lg grow-0 shrink-0 w-80">Opção 1</div>
        </div>
        <div class="m-1 p-2 rounded font-bold text-white self-center transition-all duration-500 inline flex flex-nowrap overflow-hidden border-b" :class="toggle ? ' w-30' : ' w-11'">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 grow-0 shrink-0">
                <path fill-rule="evenodd"
                    d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                    clip-rule="evenodd" /> 
            </svg>
            <div class="ml-2 text-white font-bold text-lg grow-0 shrink-0 w-80">Opção 1</div>
        </div>
</div>
</template>  

<script setup>
    const props = defineProps({
        toggle: Boolean
    });

    console.log(props.toggle);
</script>