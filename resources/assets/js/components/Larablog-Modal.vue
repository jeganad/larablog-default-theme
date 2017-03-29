<template>
	<div class="modal is-active">
		<div class="modal-background"></div>
		<div class="modal-card">
			<header class="modal-card-head">
				<slot name="header">
					<p class="modal-card-title">Modal title</p>
				</slot>
				<button class="delete"  @click="$emit('close')"></button>
			</header>
			<section class="modal-card-body">
				<slot name="body"></slot>
			</section>
			<footer class="modal-card-foot">
				<slot name="footer">
					<a class="button is-success" @click="$emit('close')">Ok</a>
				</slot>
			</footer>
		</div>
	</div>
</template>

<script>
	export default {

	}
</script>