<template>
    <div>
        <h2 id="editar">Administrar sección noticias</h2>
        <hr>
        <div class="card mb-2" v-if="edit" >
            <div class="card-header">
                <h3>Editar Noticia</h3>
            </div>
            <div class="card-body">
                <form class="form-group" @submit.prevent="editarNoticia(noticia)">
                    <input type="text" class="form-control mb-2" placeholder="Título de la noticia" v-model="noticia.titulo">
                    <input type="text" class="form-control mb-2" placeholder="Descripcion de la noticia" v-model="noticia.descripcion">
                    <button type="submit" class="btn btn-warning">Guardar cambios</button>
                    <button class="btn btn-danger" @click="cancelEdit">Cancelar</button>
                </form>
            </div>
        </div>
        <div class="card mb-2" v-else>
            <div class="card-header">
                <h3>Agregar noticias</h3>
            </div>
            <div class="card-body">
                <form  class="form-group" @submit.prevent="agregar">
                    <input type="text" class="form-control mb-2" placeholder="Titulo" v-model="noticia.titulo">
                    <input type="text" class="form-control mb-2" placeholder="Descripcion" v-model="noticia.descripcion">
                    <button class="btn btn-primary" type="submit">Agregar</button>
                </form>
            </div>
        </div>
        <h3 class="mt-3">Noticias</h3>
        <hr>

        <div class="card mb-2">
            <div class="card-header">

            </div>
            <div class="card-body">
                <ul>
                    <li class="list-group-item" v-for="(item,index) in noticias" :key="index">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="" class="">
                                    <img :src="item.url_imagen" alt="" class="img-thumbnail mb-3" style="width:384px;height:100px">
                                </a> 
                            </div>
                            <div class="col-md-6">
                                <h5><strong>Título: </strong>{{item.titulo}}</h5>
                                <h5><strong>Descripción: </strong>{{item.descripcion}}</h5>
                                <button class="btn btn-danger float-right" @click="eliminarNoticia(item,index)">Eliminar</button>
                                <button class="btn btn-warning float-right mr-2" @click="changeForm(item)"><a href="#editar" style="text-decoration:none; color:black;">Editar</a> </button>
                            </div>
                        </div>
                           
                        
                    </li>
                </ul>
            </div>
        </div>
       
    </div>
</template>

<script>

export default {
    
    data(){

        return{
            noticias:[],
            noticia:{titulo: '', descripcion: ''},
            edit: false
        }
    },
    created(){
        axios.get('/editnoticias').then(res =>{
            this.noticias=res.data;
        })
    },
    methods:{
        agregar(){
            if(this.noticia.titulo.trim()==='' || this.noticia.descripcion.trim()===''){
                alert('Debes completar todos los campos antes de guardar');
                return;
            }

            const params={titulo: this.noticia.titulo, descripcion: this.noticia.descripcion}
            this.noticia={titulo: '', descripcion:'', url_imagen:''}
            console.log(params)
            axios.post('/editnoticias', params).then(res =>{
                this.noticias.push(res.data)
            })
        },
        editarNoticia(noticia){
            const params=this.noticia;
            axios.put(`/editnoticias/${noticia.id}`,params).then(res =>{
                this.edit=false;
                const index= this.noticias.findIndex(item=>item.id===noticia.id);
                this.noticias[index]=res.data;
            })

        },
        eliminarNoticia(noticia,index){
            const confirmacion=confirm(`Esta seguro de querer eliminar la noticia ${noticia.titulo} ?`);
            if(confirmacion){
                axios.delete(`/editnoticias/${noticia.id}`).then(()=>{
                    this.noticias.splice(index,1);
                })

            }
            
            
        },
        cancelEdit(){
            this.noticia={titulo:'',descripcion:''}
            this.edit=false
        },
        changeForm(item){
            this.noticia.titulo=item.titulo
            this.noticia.descripcion=item.descripcion
            this.noticia.id=item.id
            this.edit=true
        }
       
    }
}
</script>