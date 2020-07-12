<template>
    <div>
        <div class="container">
            <h3 class="mt-3 ml-3 my-2">Productos destacados</h3>
            <hr>
            <ul class="list-group">
                <li class="list-group-item" v-for="(item,index) in productos" :key="index" style="background-color: transparent;">
                    <p>{{item.nombre}}</p>
                    <p>{{item.descripcion}}</p>
                    <P>{{item.precio_internet}}</p>
                    <p>{{item.precio_tienda}}</p>
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
            producto: {nombre:'',precio_internet: '', precio_tienda: '',descripcion:''}
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





