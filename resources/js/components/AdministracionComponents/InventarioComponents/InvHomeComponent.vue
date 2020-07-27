<template>
    <div>
        <div class="container my-3">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card" style="border-radius:15px;">
                            <div class="card-header">
                                <h3 class="mt-3 ml-3">Inventario</h3> 
                                <hr>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active"><i class="fas fa-home"></i></li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xs-12 col-md-4 my-3">
                                        <a href="/inventario/productos/agregar" style="text-decoration:none; color:black;"><div class="card ml-2 mr-2 option" style="background: linear-gradient(0,green,white);">
                                            <div class="card-img-top elemento">
                                                <img src='/img/caja.png' alt="" class="img-fluid imagen">
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2 col-md-2 my-3">
                                                    <span class="ml-3"><i class="fas fa-plus-circle" style="font-size:30px"></i></span>
                                                </div>
                                                <div class="col-sm-10 col-md-10">
                                                    <h3 class="mt-3">Añadir producto</h3>
                                                </div>
                                            </div>
                                            
                                        </div></a>
                                    </div>
                                    <div class="col-xs-12 col-md-4 my-3" @click="">
                                        <div class="card ml-2 mr-2 elemento option" style="background-color:red;">
                                            <div class="card-img-top text-center imagen">
                                                <img src="img/camion-de-reparto.png" alt="" style="max-height:178px">
                                            </div>
                                            <div class="row" style="background-color: #d50000">
                                                <div class="col-sm-2 col-md-2 my-3">
                                                    <span class="ml-3"><i class="fas fa-map-marker-alt" style="font-size:30px;"></i></span>
                                                </div>
                                                <div class="col-sm-2 col-md-10">
                                                    <h3 class="mt-3">Consultar despachos</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4 my-3">
                                        <div class="card ml-2 -mr-2 option bg-primary option">
                                            <div class="card-img-top elemento">
                                                <img src="img/inventario.jpg" alt="" style="height:178px; width:326px" class="imagen">
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-2 col-md-2 my-3">
                                                    <span class="ml-3"><i class="fas fa-clipboard-list" style="font-size:30px;"></i></span>
                                                </div>
                                                <div class="col-xs-10 col-md-10">
                                                    <h3 class="mt-3">Consultar stock</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    
}
</script>