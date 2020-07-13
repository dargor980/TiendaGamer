<template>
    <div>
        <div class="container">
            <h3 class="mt-3 ml-3 my-2">Productos destacados</h3>
            <hr>
            <ul class="list-group">
                <li class="list-group-item" v-for="(item,index) in productos" :key="index" style="background-color: transparent;">
                    <img :src="item.url_imagen" alt="" class="img-fluid">
                    <h4 class="mt-2">{{item.nombre}}</h4>
                    <h5 class="mt-2">Precio Internet: ${{item.precio_internet}}</h5>
                    <h5 class="mt-2">Precio Tienda: ${{item.precio_tienda}}</h5>
                </li>
            </ul>
        </div>
        
 
 
   </div>
</template>

<script>
export default {
    data(){
        return{
            productos: [],
            producto: {nombre:'',precio_internet: '', precio_tienda: '',descripcion:'', url_imagen: ''}
        }
    },
    created(){
        axios.get('/productos').then(res =>{
            this.productos=res.data;
        })
    },
    methods:{

    }
}
</script>





