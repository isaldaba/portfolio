import './bootstrap';
import { createApp } from 'vue';
import PortfolioApp from './components/PortfolioApp.vue';

const appRoot = document.getElementById('app');

if (appRoot) {
	createApp(PortfolioApp).mount(appRoot);
}
