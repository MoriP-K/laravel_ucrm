<script setup>
	import { ref } from 'vue';
	import { Link } from '@inertiajs/inertia-vue3';

	const newTitle = ref('');
	const newContent = ref('');
</script>

<template>
	<div>
		<p>Inertia Test</p>	
		<a href="/">via tag a</a><br>
		<Link href="/">via tag Link</Link>
		<Link :href="route('inertia.index')"><p>named route</p></Link>
		<Link :href="route('inertia.show', { id: 3000 })">route param test</Link>

		<div class="mb-8"></div>
		<input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}<br>
		<input type="text" name="newContent" v-model="newContent">{{ newContent }}<br>
		<Link as="button" method="post" :href="route('inertia.store')"
			:data="{
				title : newTitle,
				content : newContent,
			}">DB test</Link>
	</div>
</template>

