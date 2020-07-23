<template>
    <div>
        <h2>Bienvenido {{user}}</h2>
        <hr>
 
   </div>
</template>

<script>
export default {
    data(){
        return{
            user:''
        }
    },
    created(){
        axios.get('/name').then(res =>{
          this.user=res.data;
        })
        
    },
    methods:{
        
    }
}
</script>