<template>
    <div>
        
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