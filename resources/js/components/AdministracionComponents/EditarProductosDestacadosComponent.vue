<template>
    <div>
       <h2>Administrar productos destacados</h2> 
       <hr>
       <div class="card mb-2" v-if="addToDestacado" id="adddestacado">
           <div class="card-header">
               <h4>Agregar producto destacado</h4>
           </div>


           <!--alert producto añadido (good ending :v)-->
           <div class="alert alert-success mt-2 ml-2 mr-2 alert-dismissible fade show" role="alert" v-if="good">
               Producto añadido exitosamente 
               <button type="button" class="close" data-dismiss="alert" aria-label="Close" @click="good=false;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


           <!--formulario de búsqueda--> 
           <div class="card-body">
               <form @submit.prevent="searchProducto()">
                   <h5>Buscar producto</h5>
                   <hr>
                   <div class="row">
                       <div class="col-md-3">
                           <h6>Categoría</h6>
                           <select name="category" id="" class="form-control" v-model="categoria">
                               <option value="todas">Todas</option>
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
                   <button class="btn btn-primary mt-3" @click="changeForm()">Cancelar</button>
               </form>
           </div>
       </div>

       <!-- Resultados de busqueda-->
        <div class="card my-3" v-if="showFormBusqueda">
               <div class="card-header">
                   <h4>Resultados de la Búsqueda</h4>
               </div>
               <div class="card-body">
                   <table class="table table-stripped table-bordered table-hover" style="widht:100%">
                       <thead class="thead-dark">
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
                               <td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop" @click="selectedItem=item;indice=index"><i class="fa fa-plus-circle"></i> Añadir a destacados</button></td>
                           </tr>
                       </tbody>
                   </table>
               </div>
        </div>

        <!--busqueda vacia-->
        <div class="card my-3" v-if="voidSearch">
            <div class="card-header">
                <h4>Resultados de Búsqueda</h4>
            </div>
            <div class="card-body">
                <div class="alert alert-warning text-center" role="alert">
                    <strong>No se han encontrado Productos.</strong>
                </div>
            </div>
        </div>
               <!--modal de confirmacion añadir-->
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
                                     <button type="button" class="btn btn-success" @click="addDestacado(selectedItem,indice)" data-dismiss="modal">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
               

        <!--modal de confirmacion eliminación-->

        <div class="modal fade" id="eliminar" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="eliminarLabel" aria-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-tittle">Eliminar de destacados</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>¿Está seguro de quitar el producto de la sección de Destacados?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success" @click="deleteToDestacado(selectedItem,indice)" data-dismiss="modal">Confirmar</button>
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
                <a href="#adddestacado"><button class="btn btn-primary mb-3  mt-2" @click="addToDestacado=true"><i class="fa fa-plus-circle"></i> Añadir</button></a>
                <table class="table table-stripped table-bordered table-responsive" style="widht:100%">
                    
                     <thead class="thead-dark">
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
                               <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminar" @click="selectedItem=item;indice=index"><i class="fa fa-trash"></i> Eliminar</button></td>
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
            precios:[{min:1000,max:5000},{min:5000,max:20000},{min:20000,max:100000},{min:100000,max:150000},{min:150000,max:250000},{min:250000,max:500000},
            {min:500000,max:750000},{min:750000,max:1000000},{min:1000000,max:2500000},{min:2500000,max:4500000}],
            precio:'',
            good:'',
            selectedItem:[],
            indice:'',
            addToDestacado:false,
            showFormBusqueda:false,
            voidSearch:false
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
            const param={descripcion: this.categoria}
            axios.post('/destacado/search',param).then(res =>{
                this.resultadoBusqueda=res.data;
                if(this.resultadoBusqueda.length!==0){
                    
                    this.showFormBusqueda=true;
                }         
                else{
                    this.voidSearch=true;
                }            
            })      
        },
        addDestacado(selectedItem,indice){
            const param=selectedItem
            axios.put(`/destacado/edit`,param).then(res =>{
                this.destacados.push(res.data);
                this.resultadoBusqueda.splice(indice,1)
                this.good=true;

            })
        },
        deleteToDestacado(selectedItem,indice){
            const param=selectedItem
            axios.put('/destacado/remove',param).then(res =>{
                this.destacados.splice(indice,1)
            })
        },
        changeForm(){
            this.showFormBusqueda=false;
            this.addToDestacado=false;
            this.voidSearch=false;
        },

        
    }
}
</script>