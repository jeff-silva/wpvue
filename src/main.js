import { createApp, defineCustomElement } from 'vue';
import './style.css';

// Teste page
import App from './App.vue';
createApp(App).mount('#app');

// Elements
import adminFooter from './elements/admin-footer.vue';
customElements.define('admin-footer', defineCustomElement(adminFooter));
