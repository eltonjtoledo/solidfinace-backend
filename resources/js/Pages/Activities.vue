<template>
	<Header />
	<div class="flex bg-zinc-200 grow h-screen">
		<Asidebar :toggle="open" />
		<div class="flex flex-col">
			<button class="rounded bg-primary text-white text-lg p-2 font-bold w-10 h-10" @click="abrir">
				<svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
					<path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round">
					</path>
				</svg>
			</button>
		</div>
	</div>
</template>

<script setup>
import { ref } from "vue";
import Asidebar from "../Components/Asidebar.vue";
import Header from "../Components/Header.vue";

let open = ref(true);

const abrir = () => {
	open.value = !open.value;
}
</script>