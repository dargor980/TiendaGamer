<template>
    <div>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
           <div class="navbar-brand">Tienda Qlia</div>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent"> 
               <ul class="navbar-nav">
                   <li class="nav-item"><a href="/inventario" class="nav-link">Inicio</a></li>
                   <li class="nav-item"><a href="/inventario/productos" class="nav-link">Productos</a></li>
                   <li class="nav-item"><a href="/inventario/stock" class="nav-link">Stock</a></li>
               </ul>
           </div>
        </div>        
    </div>
</template>

<script>
export default {
    data(){
        return{

        }
    },
    created(){

    },
    methods:{

    }

}
</script>