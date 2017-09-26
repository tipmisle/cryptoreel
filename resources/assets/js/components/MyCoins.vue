<template>
	<ul class="coins">
		<li class="coin">
			<div class="row">
				<div class="col col-lg-2 branding">
					<img src="https://files.coinmarketcap.com/static/img/coins/32x32/neo.png">
					<small>NEO</small>
				</div>
				<div class="col col-lg-8 holdings">
					<p>11.34 <span>NEO</span></p>
					<p>$523.42</p>
				</div>
				<div class="col col-lg-2 price">
					<p>$14.04</p>
				</div>
				<div class="edit col-lg-2">
					<ul>
						<li>
							<p>Edit</p>
						</li>
						<li>
							<p>Delete</p>
						</li>
					</ul>
				</div>
			</div>
		</li>
	</ul>
</template>

<script>
	export default {
		data() {
			return {
				coins: "",
			}
		}
	}
</script>