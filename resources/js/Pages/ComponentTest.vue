<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Label from '@/Components/InputLabel.vue';
import Input from '@/Components/TextInput.vue';

const emitTest = (e) => console.log(e);

</script>

<template>
	<div>
		<GuestLayout>
			<Label value="title">Title</Label>
			<Input 
				modelValue="initialword"
				@update:modelValue="emitTest"
			></Input>
		</GuestLayout>
	</div>
</template>