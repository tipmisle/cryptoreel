
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import tether from '../../../node_modules/tether'

require('./bootstrap');

window.Vue = require('vue');
import axios from '../../../node_modules/axios'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



Vue.component('coin',{
	data() {
		return {
			thisCoin: this.coin,
			sum: "",
			coinData: {
				name: "",
				slug: "",
				image: "https://files.coinmarketcap.com/static/img/coins/32x32/" + this.coin + ".png",
				symbol: "",
				price_eur: "",
				price_usd: "",
			}
		}
	},
	props: ['coin'],
	template: `
        <li class="coin">
            <div class="row">
                <div class="col col-lg-2 branding">
                    <img :src="this.coinData.image">
                    <small>{{this.coinData.name}}</small>
                </div>
                <div class="col col-lg-7 holdings">
                    <p data-toggle="tooltip" data-placement="top" title="Quantity">{{this.sum}} <span>{{this.coinData.symbol}}</span></p>
                    <p data-toggle="tooltip" data-placement="top" title="Holdings worth">{{"$" + (this.coinData.price_usd * this.sum)}}</p>
                </div>
                <div class="col col-lg-3 price">
                    <p>{{"$" + (this.coinData.price_usd * 1)}}</p>
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
	`,
	methods: {
		getCoin: function(name) {
			var self = this;
			axios.get('api/coin/' + name).then(function (response) {
			   	console.log(response);
			   	self.coinData.name = response.data.coin.name;
			   	self.coinData.symbol = response.data.coin.symbol;
			   	self.coinData.price_usd = response.data.coin.price_usd;
			   	self.coinData.price_eur = response.data.coin.price_eur;
			   	self.sum = response.data.sum;
			  })
			  .catch(function (error) {
			    console.log(error);
			  });
		}
	},
	beforeMount() {
		this.getCoin(this.coin);
	},
})	
Vue.component('mycoins',{
	data() {
		return {
			coins: [],
		}
	},
	template: `
		<ul class="coins">
			<coin v-for="(coin, key) in coins" :coin="coin.coin_name" :key="coin.coin_name"></coin>
		</ul>
	`,
	methods: {
		getStats() {
			var self = this;
			axios.get('api/user/coins').then(function (response) {
				console.log(response.data.coins);
			    self.coins = response.data.coins;
			  })
			  .catch(function (error) {
			    console.log(error);
			  });
		}
	},
	mounted() {
		this.getStats();
	}
})	

const app = new Vue({
    el: '#app',

});
