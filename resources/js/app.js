import './bootstrap';
import { createApp } from 'vue';

import teste from "./componentes/teste.vue";

const app = createApp({});

// Registra o componente globalmente
app.component('teste', teste);

app.mount('#app');

console.log("teste");
