<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="" class="navbar-brand">Tienda Qlia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="toglle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="#" class="nav-link"><span><i class="fas fa-user"></i></span> Usuario</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link"><span><i class="fa fa-shopping-cart"></i></span> Producto(s) </a>
                    </li>
                </ul>
                <form action="" class="form-inline my-2 my-lg-0">
                    <input type="search" class="form-control mr-sm-2" placeholder="Buscar producto" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-none d-lg-block">
            <div class="collapse navbar-collapse mr-auto">
                <ul class="navbar-nav">
                    <li class="nav-item"> <a href="" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Videojuegos</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Computación</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Geek</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Contacto</a></li>

                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    data(){
        busqueda: ''
    },
    methods:{
        buscar(){

        },
    }
}
</script>