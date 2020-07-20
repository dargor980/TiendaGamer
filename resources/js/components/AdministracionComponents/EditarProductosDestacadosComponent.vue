<template>
    <div>
       <h2>Administrar productos destacados</h2> 
       <hr>
       <div class="card mb-2" v-if="addToDestacado" id="adddestacado">
           <div class="card-header">
               <h4>Agregar producto destacado</h4>
           </div>
           <div class="card-body">
               <form @submit.prevent="searchProducto()">
                   <h5>Buscar producto</h5>
                   <hr>
                   <div class="row">
                       <div class="col-md-3">
                           <h6>Categoría</h6>
                           <select name="category" id="" class="form-control" v-model="categoria">
                               <option :value="item.id" v-for="(item,index) in categorias" :key="index" >{{item.descripcion}}</option>
                              
                           </select>
                       </div>
                       <div class="col-md-3">
                           <h6>Precio</h6>
                           <select name="" id="" class="form-control" v-model="precio">
                               <option :value="item" v-for="(item,index) in precios" :key="index">{{item.min +'-'+ item.max}}</option>
                           </select>
                       </div>
                   </div>
                   <button class="btn btn-success mt-3" @click="searchProducto"><i class="fas fa-search"></i> Buscar</button>
                   <button class="btn btn-primary mt-3" @click="addToDestacado=false; showFormBusqueda=false">Cancelar</button>
               </form>
           </div>
       </div>

       <!--busqueda-->
        <div class="card my-3" v-if="showFormBusqueda">
               <div class="card-header">
                   <h4>Resultados de la Búsqueda</h4>
               </div>
               <div class="card-body">
                   <table class="table table-stripped table-bordered table-hover" style="widht:100%">
                       <thead>
                           <tr>
                               <th>Imagen</th>
                               <th>Producto</th>
                               <th>Categoría</th>
                               <th>Precio Tienda</th>
                               <th>Precio Internet</th>
                               <th>Descripción</th>
                               <th>Acción</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr v-for="(item,index) in resultadoBusqueda" :key="index">
                               <td><img :src="item.url_imagen" alt="" class="img-fluid"></td>
                               <td>{{item.nombre}}</td>
                               <td>
                                   <p>{{categorias.find(categoria => categoria.id===item.id_categoria).descripcion}}</p>
                               </td>
                               <td>{{item.precio_tienda}}</td>
                               <td>{{item.precio_internet}}</td>
                               <td>{{item.descripcion}}</td>
                               <td><button class="btn btn-success btn-sm" @click="addDestacado(item.id)" data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-plus-circle"></i> Añadir a destacados</button></td>
                           </tr>
                       </tbody>
                   </table>
               </div>

               <!--modal de confirmacion-->
               <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="false">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-tittle">Confirmar</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                 <div class="modal-body">
                                     <h6>¿Está seguro que quiere añadir el producto a la sección Destacados?</h6>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                     <button type="button" class="btn btn-success">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        <!--Lista de productos destacados-->
        <div class="card my-3">
            <div class="card-header">
                <h4>Productos Destacados</h4>
            </div>
            <div class="card-body">
                <button class="btn btn-primary mb-3  mt-2" @click="addToDestacado=true"><i class="fa fa-plus-circle"></i> Añadir</button>
                <table class="table table-stripped table-bordered table-responsive" style="widht:100%">
                    
                     <thead>
                           <tr>
                               <th>Imagen</th>
                               <th>Producto</th>
                               <th>Categoría</th>
                               <th>Precio Tienda</th>
                               <th>Precio Internet</th>
                               <th>Descripción</th>
                               <th>Acción</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr v-for="(item,index) in destacados" :key="index" >
                               <td><img :src="item.url_imagen" alt="" class="img-fluid"></td>
                               <td>{{item.nombre}}</td>
                               <td>{{categorias.find(categoria => categoria.id===item.id_categoria).descripcion}}</td>
                               <td>{{item.precio_tienda}}</td>
                               <td>{{item.precio_internet}}</td>
                               <td>{{item.descripcion}}</td>
                               <td><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Eliminar</button></td>
                           </tr>
                       </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
    data(){
        return{
            destacados: [],
            categorias: [],
            categoria: {descripcion:''},
            destacado: {url_imagen:'', nombre:'', precio_internet:'', precio_tienda:'', descripcion:'', id_categoria:''},
            resultadoBusqueda: [],
            precios:[{min:1000,max:5000},{min:5000,max:20000},{min:20000,max:10000},{min:100000,max:150000},{min:150000,max:250000},{min:250000,max:500000},
            {min:500000,max:750000},{min:750000,max:1000000},{min:1000000,max:2500000},{min:2500000,max:4500000}],
            precio:'',
            selectedItem:'',
            addToDestacado:false,
            showFormBusqueda:false
        }
    },
    created(){
        axios.get('/destacado').then(res =>{
           this.destacados=res.data;
        })
        axios.get('/categoria').then(res => {
            this.categorias=res.data;
        })

        
    },
    methods:{
        searchProducto(){
            this.showFormBusqueda=true;
            console.log(this.categoria)
            const param={descripcion: this.categoria}
            axios.post('/destacado/search',param).then(res =>{
                this.resultadoBusqueda=res.data;
            })
                
            
        },
        addDestacado(selectedItem){

        },
        deleteToDestacado(){

        },
        changeForm(){
            this.showFormBusqueda=false;
        },

        
    }
}
</script>