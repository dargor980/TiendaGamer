<template>
    <div>
        <div class="container my-3">
            <div class="row justify-content-center mb-2">
                <div class="col">
                    <div class="card" style="border-radius:15px;">
                        <div class="card-header">
                            <h3 class="ml-3 mt-3">Productos</h3>
                            <hr>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/inventario"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="/inventario/productos">Productos</a></li>
                                    <li class="breadcrumb-item active">Añadir productos</li>
                                </ol>
                            </nav>
                        </div>

                        <div class="card-body">
                            <h4 class="mt-3 ml-3">Añadir Producto</h4>
                            <div class="row ml-3 mt-5 mr-2">
                                <form @submit.prevent="" enctype="multipart/form-data">

                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <div class="bg-secondary text-center" style="width:125px; height:125px; border-radius:5px;">
                                                <i class="fas fa-box mt-4" style="font-size:50px;"></i>
                                                <img src="" alt="" style="max-height:125px; max-widht:125px;">
                                            </div>      
                                        </div>
                                        <div class="col-sm-8">
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" lang="es" accept="image/*" id="imagen" @change="getImage" name="imagen">
                                                <label for="imagen" class="custom-file-label">{{nombre}}</label>
                                            </div>
                                        </div>
                                                                          
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nombre" v-model="producto.nombre">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="categoria" class="col-sm-4 col-form-label">Categoría</label>
                                        <div class="col-sm-8">
                                            <select name="" id="categoria" class="form-control custom-select" v-model="producto.id_categoria">
                                                <option  selected>Seleccione...</option>
                                                <option :value="item.id" v-for="(item,index) in categorias" :key="index">{{item.descripcion}}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label">Precio tienda</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" v-model="producto.precio_tienda">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label">Precio internet</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" v-model="producto.precio_internet">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label">Descripción</label>
                                        <div class="col-sm-8">
                                            <textarea name="" id="" cols="30" rows="10" class="form-control" v-model="producto.descripcion"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row float-right">
                                        <button class="btn btn-success" @click="uploadImage()">Guardar</button>
                                        <button class="btn btn-danger ml-2">Cancelar</button>
                                    </div>

                                </form>
                            </div>
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
            imagen:null,
            nombre:'Seleccionar archivo',
            categorias:[],
            categoria:'',
            producto:{nombre:'', precio_internet:'', precio_tienda:'', descripcion:'', url_imagen:'', id_categoria:''},
        }
    },
    created(){
        axios.get('/categoria').then(res =>{
            this.categorias=res.data;
        })
    },
    methods:{
        getImage(event){
            this.imagen= event.target.files[0];
            this.nombre=this.imagen.name
            this.producto.url_imagen=this.imagen.name;
        },
        uploadImage(){
            var data= new FormData();
            data.append("name", this.producto.nombre);
            data.append("file", this.imagen);
            axios.post('/productos/image',data).then(res =>{

            })
        },
        uploadProducto(){
            const params=this.producto
            axios.post('/productos',params).then(res =>{

            })
        }
    }
    
}
</script>