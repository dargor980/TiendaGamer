<template>
    <div>
        <div class="modal-dialog text-center">
            <div class="col-sm-12">
                <div class="modal-content">
                    <div>
                        <h4 class="my-2">Contáctese con nosotros</h4>
                    </div>
                    <form action="" class="col-12">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" placeholder="Nombre" class="form-control">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" placeholder="Apellido" class="form-control">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" placeholder="Correo electrónico" class="form-control">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" placeholder="Teléfono" class="form-control">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            </div>
                            <input type="text" placeholder="Asunto" class="form-control">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                
                            </div>
                            <textarea name="" id=""  placeholder="Mensaje" class="form-control"></textarea>
                        </div>

                        <button class="btn btn-warning mb-3" type="submit"><i class="fas fa-paper-plane"></i> Enviar</button>
                    </form>
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