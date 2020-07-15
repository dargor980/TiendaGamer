<template>
<div>
        <link rel="stylesheet" href="css/admin.css">
        <div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#" @click="opcion='home'">Tienda Qlia</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      
      
  
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>
              <a href="#" @click="opcion='home'">Inicio</a>
              </span>
          </li>
          <li class="header-menu">
            <span>Administración</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Web clientes</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#" @click="opcion='noticias'">Sección noticias
                  </a>
                </li>
                <li>
                  <a href="#" @click="opcion='productos destacados'">Productos destacados</a>
                </li>
                <li>
                  <a href="#">Dashboard 3</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Inventario</span>
             <!-- <span class="badge badge-pill badge-danger">3</span>  -->
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Productos

                  </a>
                </li>
                <li>
                  <a href="#">Ordenes de compra</a>
                </li>
                <li>
                  <a href="#">Credit cart</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-truck"></i>
              <span>Proveedores</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Estadísticas de ventas</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-envelope"></i>
              <span>Mensajes</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Bandeja de entrada</a>
                </li>
                <li>
                  <a href="#">Enviados</a>
                </li>
              </ul>
            </div>
          </li>
          
          
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
   
  </nav>



  <main class="page-content">
    <div class="container-fluid">
      <contprincipal v-if="opcion==='home'"></contprincipal>
      <editnoticias v-if="opcion==='noticias'"></editnoticias>
      <editdestacados v-if="opcion==='productos destacados'"></editdestacados>

     <footadmin></footadmin>
    </div>
  </main>
  <!-- page-content" -->
  
    </div>
  
</div>
</template>

<script>
export default {
    data(){
        return{
          opcion:'home'
        }
    },
    created(){
      
    },
    methods:{
      actdiv(){

      }
    }
    
}
</script>