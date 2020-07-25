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
                            <h4 class="mt-3 ml-3">Añadir Productos</h4>
                            <div class="row ml-3 mt-5">
                                <form action="" @submit.prevent="">
                                    <div class="form-group row">
                                        <label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nombre">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <input type="text">
                                        </div>
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

        }
    },
    created:{

    },
    methods:{

    }
    
}
</script>