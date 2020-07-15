<template>
    <div>
    <div class="carousel slide" data-ride="carousel" id="elemento">
            <ol class="carousel-indicators">
                <li v-for="(item,index) in elementos" :key="index" data-target="elemento" :data-slide-to="index" class="active"></li>
            </ol>
        
        <div class="carousel-inner">
                <div class="carousel-item" v-bind:class="{active:index===0}" v-for="(item,index) in elementos" :key="index">
                    <img :src="item.url_imagen" alt="" class="d-block w-100" style="max-height:270px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{item.titulo}}</h5>
                        <p>{{item.descripcion}}</p>
                    </div>
                </div>
        </div>
        <a href="#elemento" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">atrás</span>
        </a>
        <a href="#elemento" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">siguiente</span>
        </a>
    </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            elementos: [],
            elemento: {titulo: '', descripcion: '', url_imagen:''}
        }
    },
    created(){
        axios.get('/editnoticias').then(res =>{
            this.elementos=res.data;
        })
    }
    
}
</script>