<template>
    <div>
        <div class="container">
            <h3 class="mt-3">Productos Destacados</h3>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                                aaaaaaaaaa
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            aaaaaaaaa
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            aaaaaaaaa
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            aaaaaaaaa
                        </div>
                        <div class="card-footer">

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
            destacados: [],
            destacado: {nombre:'', precio_internet: '', precio_tienda: '', url_imagen: ''}
        }
    },
    created(){
        axios.get('/destacado'). then(res =>{
            this.destacados=res.data;
        })
    },
    methods:{

    }
}
</script>