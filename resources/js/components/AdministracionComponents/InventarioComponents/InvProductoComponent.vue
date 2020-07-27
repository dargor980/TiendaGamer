<template>
    <div>
       <div class="container my-3">
            <div class="row justify-content-center mb-2">
                <div class="col">
                     <div class="card" style="border-radius:15px;" >
                        <div class="card-header">
                            <h3 class="mt-3 ml-3">Productos</h3>
                            <hr>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/inventario"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="productos">Productos</li>
                                </ol>
                            </nav>
                        </div>
                       <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 my-3">
                                    <a href="/inventario/productos/agregar" style="text-decoration:none; color:black;"><div class="card ml-3">
                                        <div class="row">
                                            <div class="col-md-4" style="background-color:green;">
                                                <div class="card-img-top text-center my-4">
                                                    <span><i class="fas fa-plus text-white" style="font-size:30px;"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h3 class="my-4" >Añadir producto</h3>
                                            </div>
                                        </div>
                                    </div></a>
                                </div>

                                <div class="col-md-4 my-3">
                                    <div class="card ml-3">
                                        <div class="row">
                                            <div class="col-md-4 bg-primary">
                                                <div class="card-img-top text-center">
                                                    <span><i class="fas fa-list-ul my-4 text-white" style="font-size:30px;"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h3 class="my-4">Categorías</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 my-3">
                                    <div class="card ml-3">
                                        <div class="row">
                                            <div class="col-md-4" style="background-color:darkorange;">
                                                <div class="card-img-top text-center">
                                                     <span><i class="fas fa-dolly my-4" style="font-size:30px;"></i></span>
                                                </div>
                                               
                                            </div>
                                            <div class="col-md-8">
                                                <h3 class="my-4">Despachos</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-4">
                                    <table class="table table-sm  table-stripped table-hover table-responsive small ml-3">
                                        
                                        <thead class="thead-light">
                                            <tr><td colspan="3" style="font-weight:bolder;"><i class="fas fa-th ml-1"></i><strong> PRODUCTOS MAS VENDIDOS</strong> </td></tr>
                                            <tr style="border-top-style:solid; border-widht:medium;">
                                                <th scope="col">ID</th>
                                                <th scope="col">Producto</th>
                                                <th scope="col">Total vendido</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--modificar elemento para que itere y muestre datos-->
                                            <tr>
                                                <td>1</td>
                                                <td>Figura Jotaro Kujo Stardust crussaders</td>
                                                <td>10</td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-sm  table-stripped table-hover table-responsive small">
                                    <thead class="thead-light">
                                        <tr><td colspan="3" style="font-weight:bolder;"><i class="fas fa-th ml-1"></i><strong> ÚLTIMAS VENTAS</strong></td></tr>
                                        <tr style="border-top-style:solid; border-widht:medium;">
                                            <th>Producto</th>
                                            <th>Fecha</th>
                                            <th>Total venta</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--modificar elemento para que itere y muestre datos-->
                                        <tr>
                                            <th>GPU Nvidia Rtx 2080Ti</th>
                                            <th>21/07/2020</th>
                                            <th>4</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-sm  table-stripped table-hover small table-responsive">
                                    <thead class="thead-light" style="border-bottom-style:solid; border-widht:medium;">
                                        <tr><td colspan="3" style="font-weight:bolder;"><i class="fas fa-th ml-1"></i><strong> PRODUCTOS AÑADIDOS RECIENTEMENTE</strong></td></tr>
                                        
                                    </thead>
                                    <tbody>
                                        <!--elemento que se irá iterando-->
                                        <tr class="border-bottom">
                                            <td>
                                               <div class="media  flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <img src="/img/control.jpg" alt="" class="mr-3" style="max-widht:64px; max-height:64px;">
                                                        <h5 class="mb-1 mt-4">Control Xbox One</h5>
                                                    <small>Hace 3 días</small>
                                                    </div>                                                    
                                               </div>
                                               <div class="d-flex w-100 justify-content-between">
                                                        <h6><span class="badge badge-pill badge-warning">$49990</span></h6>
                                                        <p class="text-muted">Videojuegos</p>
                                                </div>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
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

        }
    },
    created(){

    },
    methods:{
        
    }
}
</script>