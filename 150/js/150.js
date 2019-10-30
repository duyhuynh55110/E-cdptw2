var type150 = new Vue({
	el: ".type-150",
	data: {
		m: "123",
		socials: [
			{name: "Facebook", process: 50},
			{name: "Twitter", process: 70},
			{name: "Google", process: 50},
			{name: "Zalo", process: 40},
		],
	timer: null
	},
	mounted(){
		var timer = setInterval(
			() => {
				this.socials.forEach(social => (social.process = 25 + Math.floor(Math.random() * 75)))
			}, 2200)
	}
});