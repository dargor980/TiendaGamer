<template>
    <div>
        <div class="container">
            <h3 class="mt-3">Productos Destacados</h3>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-3" v-for="(item,index) in destacados" :key="index">
                    <div class="card" style="background-color: rgba(126, 252, 0, 0.658);">
                        <div class="card-header">
                            <h5 class="text-center"><strong>{{item.nombre}}</strong></h5>
                        </div>
                        <div class="card-img-top">
                                <img :src="item.url_imagen" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer" style="margin-bottom:-10px;">   
                            <h4 class="text-center"><strong>$ {{item.precio_internet}}</strong></h4>
                            <p class="text-center">Precio tienda: {{item.precio_tienda}}</p>
                        </div>
                    </div>
                </div>
              
                
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            destacados: [],
            destacado: {nombre:'', precio_internet: '', precio_tienda: '', url_imagen: ''}
        }
    },
    created(){
        axios.get('/destacado'). then(res =>{
            this.destacados=res.data;
        })
        
    },
    methods:{
        
    }
}

</script>