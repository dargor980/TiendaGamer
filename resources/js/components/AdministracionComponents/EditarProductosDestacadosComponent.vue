<template>
    <div>
       <h2>Administrar productos destacados</h2> 
       <hr>
       <div class="card mb-2" v-if="addToDestacado">
           <div class="card-header">
               <h4>Agregar producto destacado</h4>
           </div>
           <div class="card-body">
               <form>
                   <h5>Buscar producto</h5>
                   <hr>
                   <div class="row">
                       <div class="col-md-3">
                           <h6>Categoría</h6>
                           <select name="" id="" class="form-control">
                               <option value=""></option>
                               <option value="">aaaaa</option>
                           </select>
                       </div>
                       <div class="col-md-3">
                           <h6>Precio</h6>
                           <select name="" id="" class="form-control">
                               <option value="">aaaa</option>
                           </select>
                       </div>
                   </div>
                   <button class="btn btn-success mt-3" @click="searchProducto"><i class="fas fa-search"></i> Buscar</button>
                   <button class="btn btn-primary mt-3">Cancelar</button>
               </form>
           </div>
       </div>
        <div class="card my-3" v-if="showFormBusqueda">
               <div class="card-header">
                   <h4>Resultados de la Búsqueda</h4>
               </div>
               <div class="card-body">
                   <table class="table table-stripped table-bordered" style="widht:100%">
                       <thead>
                           <tr>
                               <th>Imagen</th>
                               <th>Producto</th>
                               <th>Categoría</th>
                               <th>Precio Tienda</th>
                               <th>Precio Internet</th>
                               <th>Descripción</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                           </tr>
                       </tbody>
                   </table>
               </div>
        </div>

        <div class="card my-3">
            <div class="card-header">
                <h4>Productos Destacados</h4>
            </div>
            <div class="card-body">
                <button class="btn btn-primary mb-3  mt-2" @click="addToDestacado=true"><i class="fa fa-plus-circle"></i> Añadir</button>
                <table class="table table-stripped table-bordered" style="widht:100%">
                    
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
                           <tr>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
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
            destacado: {url_imagen:'', nombre:'', precio_internet:'', precio_tienda:'', descripcion:''},
            addToDestacado:false,
            showFormBusqueda:false
        }
    },
    created(){
        axios.get()
    },
    methods:{
        searchProducto(){
            this.showFormBusqueda=true;
        },
        addDestacado(){

        },
        deleteToDestacado(){

        }
        
    }
}
</script>