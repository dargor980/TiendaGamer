/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
	

window.Vue = require('vue');


Vue.component('navbar', require('./components/NavbarComponent.vue').default);
Vue.component('piepagina', require('./components/FooterComponent.vue').default);
Vue.component('contacto', require('./components/ContactComponent.vue').default);
Vue.component('listadoproductos', require('./components/MostrarProductoComponent.vue').default);
Vue.component('carrousel', require('./components/CarrouselComponent.vue').default);
Vue.component('destacados', require('./components/MostrarProductosDestacadosComponent.vue').default);
Vue.component('admin', require('./components/AdministracionComponents/AdministracionComponent.vue').default);
Vue.component('editnoticias', require('./components/AdministracionComponents/EditarNoticiasComponent.vue').default);
Vue.component('contprincipal', require('./components/AdministracionComponents/MainContentComponent.vue').default);
Vue.component('editdestacados', require('./components/AdministracionComponents/EditarProductosDestacadosComponent.vue').default);
Vue.component('footadmin', require('./components/AdministracionComponents/FooterAdminComponent.vue').default);
Vue.component('inventario', require('./components/AdministracionComponents/InventarioComponents/InventarioComponent.vue').default);
Vue.component('invproducto', require('./components/AdministracionComponents/InventarioComponents/InvProductoComponent.vue').default);
Vue.component('invhome', require('./components/AdministracionComponents/InventarioComponents/InvHomeComponent.vue').default);
Vue.component('invstock', require('./components/AdministracionComponents/InventarioComponents/InvStockComponent.vue').default);
Vue.component('invaddproducto', require('./components/AdministracionComponents/InventarioComponents/InvAddProductoComponent.vue').default);

const app = new Vue({
    el: '#app',
});
