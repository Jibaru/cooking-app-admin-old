<div id="app-crear-receta">
    <div class="app-contenedor">
        <h2>Creación de receta</h2>
    </div>
    <div class="app-contenedor app-grid app-ajustar-columna-12 app-ajustar-columnas-pequenio">
        <div class="app-contenedor-imagen app-ajustar-centro app-fondo-gris-bajo ">
            <h3>Sin imagen</h3>
        </div>
    </div>

    <div class="app-contenedor app-grid app-ajustar-columna-12 app-ajustar-columnas-pequenio">
        <div class="app-pos-izq">
            <button type="file" class="app-btn app-btn-azul">
                Seleccionar imagen...
            </button>
        </div>
    </div>

    <div class="app-contenedor app-grid app-ajustar-columna-12 app-ajustar-columnas-pequenio">
        <div>
            <label>Nombre de la receta</label>
            <input type="text" class="app-campo" maxlength="45">
            <div class="app-pos-izq app-texto-gris-alto">
                <span>0/45</span>
            </div>
        </div>
    </div>

    <div class="app-contenedor ">
        <div class="app-ajustar-laterales app-mg-ab-10 app-grid app-ajustar-6-6-columnas app-ajustar-columnas-pequenio app-espacio-columnas-20">
            <div class="">
                <label>Tipo</label>
                <select class="app-seleccionable app-ancho-100p">
                    <option disabled selected>Seleccionar...</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
            <div class="">
                <label>Cocina</label>
                <select class="app-seleccionable app-ancho-100p">
                    <option disabled selected>Seleccionar...</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
        </div>
    </div>

    <div class="app-contenedor app-grid app-ajustar-columna-12 app-ajustar-columnas-pequenio">
        <div>
            <label>Descripcion breve</label>
            <div>
                <textarea name="descripcion" class="app-campo-area" cols="30" rows="8" maxlength="45"></textarea>
            </div>
            <div class="app-pos-izq app-texto-gris-alto">
                <span>0/45</span>
            </div>
        </div>
    </div>

    <div class="app-contenedor">
        <div class="app-ajustar-laterales app-mg-ab-10 app-grid app-ajustar-4-4-4-columnas app-ajustar-columnas-pequenio app-espacio-columnas-20">
            <div class="">
                <label>Cantidad de personas</label>
                <input type="number" class="app-campo app-texto-der" placeholder="1 persona">
            </div>
            <div class="">
                <label>Tiempo de preparación</label>
                <input type="text" class="app-campo app-texto-centro" placeholder="00:00">
                <div class="app-pos-izq app-texto-gris-alto">
                    <span>0 milisegundos</span>
                </div>
            </div>
            <div class="">
                <label>Tiempo de cocción</label>
                <input type="text" class="app-campo app-texto-centro" placeholder="00:00">
                <div class="app-pos-izq app-texto-gris-alto">
                    <span>0 milisegundos</span>
                </div>
            </div>

        </div>
    </div>

    <div class="app-contenedor">
        <div id="ingr">
            <div class="app-ajustar-laterales">
                <div>
                    <h2 class="app-mg-arr-22">Ingredientes</h2>
                </div>


                    <button data-target="abrir-modal-ingredientes" class="app-btn app-btn-azul">
                        <i class="fas fa-plus-circle"></i>Agregar
                    </button>
                <!-- Inicio modal ingredientes -->

                <div id="abrir-modal-ingredientes" class="modal">
                    <div class="modal-content modal-content-medio">

                        <div class="app-pos-der app-distancia">
                            <h2 class="app-inline app-tam-fuente-25">Seleccionar ingrediente</h2>
                            <i class="fas fa-times app-cerrar-modal app-posicion-boton-cerrar"></i>
                        </div>
                            
                        <div class="app-pos-der app-mg-arr-15">
                            <i class="fas fa-search"></i>
                            <input type="text" class="app-campo app-mg-ab-10 app-mg-izq-20 app-altura-camp-modal" >
                        </div>
                            
                        <div class="modal-body ajustar-contenedor">

                            <div class="app-grid app-ajustar-6-6-columnas app-ajustar-columnas">

                                <div class="borde-modal  app-mg-todo-5 ajustar-contenedor" >
                                    <div class="app-contenedor-modal-imagen  app-fondo-gris-bajo app-col-5">
                                        <a class="app-btn-flotante app-flotar-arriba-15">
                                            <i class="fas fa-check-circle app-fondo-blanco"></i>
                                        </a>                                        
                                    </div>
                                    <div class="app-mg-izq-10 app-cont-50">
                                        Tomate <br>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <div class="app-ajustar-laterales2 app-mg-arr-30">
                                            <div class="app-ancho-45">
                                                <input type="number" class="app-campo app-texto-der app-altura-modal-inputs" placeholder="1">
                                            </div>
                                            <div class="app-ancho-45">
                                                <select class="app-seleccionable app-altura-modal-inputs">
                                                    <option value="kg">Kg</option>
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="borde-modal  app-mg-todo-5 ajustar-contenedor">
                                    <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                        <a class="app-btn-flotante app-flotar-arriba-15">
                                            <i class="fas fa-check-circle app-fondo-blanco"></i>
                                        </a>     
                                    </div>
                                    <div class="app-mg-izq-10 app-cont-50">
                                        Rocoto <br>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <div class="app-ajustar-laterales2 app-mg-arr-30">
                                            <div class="app-ancho-45">
                                                <input type="number" class="app-campo app-texto-der app-altura-modal-inputs" placeholder="1">
                                            </div>
                                            <div class="app-ancho-45">
                                                <select class="app-seleccionable app-altura-modal-inputs">
                                                    <option value="kg">Kg</option>
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="borde-modal  app-mg-todo-5 ajustar-contenedor">
                                    <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                        <a class="app-btn-flotante app-flotar-arriba-15">
                                            <i class="fas fa-check-circle app-fondo-blanco"></i>
                                        </a>     
                                    </div>
                                    <div class="app-mg-izq-10 app-cont-50">
                                        Arroz blanco <br>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <div class="app-ajustar-laterales2 app-mg-arr-30">
                                            <div class="app-ancho-45">
                                                <input type="number" class="app-campo app-texto-der app-altura-modal-inputs" placeholder="1">
                                            </div>
                                            <div class="app-ancho-45">
                                                <select class="app-seleccionable app-altura-modal-inputs">
                                                    <option value="kg">Kg</option>
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="borde-modal  app-mg-todo-5 ajustar-contenedor">
                                    <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                        <a class="app-btn-flotante app-flotar-arriba-15">
                                            <i class="fas fa-check-circle app-fondo-blanco"></i>
                                        </a>     
                                    </div>
                                    <div class="app-mg-izq-10 app-cont-50">
                                        Perejil <br>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <div class="app-ajustar-laterales2 app-mg-arr-30">
                                            <div class="app-ancho-45">
                                                <input type="number" class="app-campo app-texto-der app-altura-modal-inputs" placeholder="1">
                                            </div>
                                            <div class="app-ancho-45">
                                                <select class="app-seleccionable app-altura-modal-inputs">
                                                    <option value="kg">Kg</option>
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="borde-modal  app-mg-todo-5 ajustar-contenedor">
                                    <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                        <a class="app-btn-flotante app-flotar-arriba-15">
                                            <i class="fas fa-check-circle app-fondo-blanco"></i>
                                        </a>     
                                    </div>
                                    <div class="app-mg-izq-10 app-cont-50">
                                        Tomate <br>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <div class="app-ajustar-laterales2 app-mg-arr-30">
                                            <div class="app-ancho-45">
                                                <input type="number" class="app-campo app-texto-der app-altura-modal-inputs" placeholder="1">
                                            </div>
                                            <div class="app-ancho-45">
                                                <select class="app-seleccionable app-altura-modal-inputs">
                                                    <option value="kg">Kg</option>
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="borde-modal  app-mg-todo-5 ajustar-contenedor">
                                    <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                        <a class="app-btn-flotante app-flotar-arriba-15">
                                            <i class="fas fa-check-circle app-fondo-blanco"></i>
                                        </a>     
                                    </div>
                                    <div class="app-mg-izq-10 app-cont-50">
                                        Tomate <br>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <div class="app-ajustar-laterales2 app-mg-arr-30">
                                            <div class="app-ancho-45">
                                                <input type="number" class="app-campo app-texto-der app-altura-modal-inputs" placeholder="1">
                                            </div>
                                            <div class="app-ancho-45">
                                                <select class="app-seleccionable app-altura-modal-inputs">
                                                    <option value="kg">Kg</option>
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="app-mg-arr-15 app-pos-izq app-mg-der-20">

                            <button data-target="abrir-modal-nuevo-ingrediente" class="app-btn app-btn-azul app-tam-btn-modal">
                                <i class="fas fa-plus-circle"></i>Nuevo
                            </button>

                        </div>

                    </div>

                </div>

                <!--Fin modal ingredientes-->


                <!--Inicio modal crear ingredientes-->

                <div id="abrir-modal-nuevo-ingrediente" class="modal">
                    <div class="modal-content modal-content-medio app-max-altura-70p app-scroll-y">
                        <div class="app-pos-der app-distancia">
                            <h2 class="app-inline app-tam-fuente-25 app-mg-todo-5">Crear ingrediente</h2>
                            <i class="fas fa-times app-cerrar-modal app-posicion-boton-cerrar"></i> 
                        </div>
                            
                        <div class="">

                            <div class="app-grid app-ajustar-6-6-columnas app-ajustar-columnas-pequenio app-ajustar-columnas-medio">
                                <div class="app-contenedor-modal-imagen-200 app-mg-todo-5 app-fondo-gris-bajo app-ajustar-centro" >
                                    <h3>Sin imagen</h3>
                                </div>

                                <div class=" app-mg-izq-10">
                                    <h1 class="app-mg-ab-3">Nombre</h1>
                                    <input type="text" class="app-campo app-mg-ab-10 app-altura-camp-modal" ></i>
                                    <h1 class="app-mg-ab-3">Descripcion</h1>
                                    <textarea class="app-campo-area app-ajustar-textar" cols="30" rows="8" maxlength="45"></textarea>
                                    <div class="ajustar-contenedor app-mg-arr-10 app-grid app-ajustar-6-6-columnas app-ajustar-columnas-pequenio app-espacio-columnas-7 ">
                                        <div class="">
                                            <h1>Categoría</h1>
                                            <select class="app-seleccionable" style="height:25px;">
                                                <option >kg</option>
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                        <div class="">
                                            <h1 style="font-size:15px;">Cantidad y unidades</h1>
                                            <div class="app-grid app-ajustar-6-6-columnas app-ajustar-columnas-pequenio app-espacio-columnas-7">
                                                <div>
                                                    <input type="number" class="app-campo app-texto-der " placeholder="1" style="height:25px;">
                                                </div>
                                                <div>
                                                    <select class="app-seleccionable" style="height:25px;">
                                                        <option >kg</option>
                                                        <option value="volvo">Volvo</option>
                                                        <option value="saab">Saab</option>
                                                        <option value="mercedes">Mercedes</option>
                                                        <option value="audi">Audi</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        </div>
                                        <div class="contenedor">

                                            <button data-target="abrir-modal-crear-info-nutricional" class="app-btn app-btn-azul app-tam-btn-modal">
                                                Información nutricional 
                                                <i class="fas fa-chevron-right"></i>
                                            </button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="contenedor">
                                <button class="app-btn app-btn-azul app-tam-btn-modal"> 
                                    <i class="fas fa-check app-mg-der-5"></i>
                                    Guardar
                                </button>
                            </div>

                    </div>

                </div>
                <!--Fin modal agregar ingredientes-->



                <!--Inicio modal crear información nutricional-->

                <div id="abrir-modal-crear-info-nutricional" class="modal">
                    <div class="modal-content modal-content-medio app-max-altura-70p app-scroll-y">

                        <div class="app-pos-der app-distancia">
                            <h2 class="app-inline app-tam-fuente-25">Crear información nutricional</h2>
                            <i class="fas fa-times app-cerrar-modal app-posicion-boton-cerrar"></i>
                        </div>

                        <div class="app-padding-15">

                            <div class="app-alinear app-grid app-ajustar-6-6-columnas app-ajustar-columnas-pequenio">
                                <div class="">
                                    <div class="borde-modal app-col-6 app-mg-auto">
                                        <div>
                                            <label>Nutriente</label>
                                            <select class="app-seleccionable app-altura-modal-inputs">
                                                <option>Calcio</option>
                                                <option>Calcio</option>
                                                <option>Calcio</option>
                                            </select>
                                        </div>
                                        
                                        <div class="app-mg-arr-15">
                                            <label > Cantidad y unidades</label>
                                            <div class="app-alinear">
                                                <div class="app-col-6 app-mg-der-5">                                               
                                                    <input type="number" class="app-campo app-texto-der app-altura-modal-inputs">
                                                </div>
                                            
                                                <div class="app-col-6">
                                                    <select class="app-seleccionable app-altura-modal-inputs">
                                                        <option>kg</option>
                                                        <option></option>
                                                        <option></option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="app-pos-izq app-btn-flotante app-flotar-abajo-25">
                                            <a class="app-btn-flotante app-sombra-gris">
                                                <i class="fas fa-times-circle app-fondo-blanco"></i>
                                            </a> 

                                            <a class="app-btn-flotante app-sombra-gris">
                                                <i class="fas fa-check-circle app-fondo-blanco app-mg-der-5"></i>
                                            </a>                                             
                                        </div>

                                    </div>

                                </div>
                                <div class="">
                                    <table class="app-tabla-tamaño">
                                        <thead>
                                            <tr>
                                                <th class="app-col-4 app-celda-texto-centro" >Nutriente</th>
                                                <th class="app-col-2 app-celda-texto-centro">Cant.</th>
                                                <th class="app-col-2 app-celda-texto-centro">Unid.</th>
                                                <th class="app-col-4 app-celda-texto-centro">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Calcio</td>
                                                <td>15</td>
                                                <td>gr</td>
                                                <td class="app-centrar-icns">                                
                                                    <i class="far fa-edit"></i>
                                                    <i class="fas fa-trash"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Hierro</td>
                                                <td>16</td>
                                                <td>gr</td>
                                                <td class="app-centrar-icns">                                
                                                    <i class="far fa-edit"></i>
                                                    <i class="fas fa-trash"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Hierro</td>
                                                <td>16</td>
                                                <td>gr</td>
                                                <td class="app-centrar-icns">                                
                                                    <i class="far fa-edit"></i>
                                                    <i class="fas fa-trash"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Hierro</td>
                                                <td>16</td>
                                                <td>gr</td>
                                                <td class="app-centrar-icns">                                
                                                    <i class="far fa-edit"></i>
                                                    <i class="fas fa-trash"></i>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="app-centrar-icns">                                
                                                    <i></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="app-centrar-icns">                                
                                                    <i></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="app-centrar-icns">                                
                                                    <i></i>
                                                </td>
                                            </tr>

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="contenedor">
                                <button class="app-btn app-btn-azul app-tam-btn-modal"> 
                                    <i class="fas fa-chevron-left app-mg-der-5"></i>
                                    Volver a la creación de ingredientes
                                </button>
                            </div>


                    </div>

                </div>

                <!--Fin modal crear información nutricional-->



            </div>
            <div class="tbling app-tbl-responsive app-grid app-ajustar-columna-12 app-ajustar-columnas-pequenio">
                <table class="app-tabla-tamaño">
                    <thead>
                        <tr>
                            <th class="app-col-5 app-celda-texto-centro" >Ingredientes</th>
                            <th class="app-col-2 app-celda-texto-centro">Cantidad</th>
                            <th class="app-col-2 app-celda-texto-centro">Unidades</th>
                            <th class="app-col-3 app-celda-texto-centro">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tomate</td>
                            <td class="app-celda-texto-der">1</td>
                            <td class="app-celda-texto-der">kg</td>
                            <td class="app-centrar-icns">                                
                                <a>
                                    <i class="far fa-edit"></i>
                                </a>
                                <a>
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Arroz</td>
                            <td class="app-celda-texto-der">1.5</td>
                            <td class="app-celda-texto-der">kg</td>
                            <td class="app-centrar-icns">
                                <a>
                                    <i class="far fa-edit"></i>
                                </a>
                                 <a href="">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Sal</td>
                            <td class="app-celda-texto-der">1</td>
                            <td class="app-celda-texto-der">cucharadas</td>
                            <td class="app-centrar-icns">
                                <a>
                                    <i class="far fa-edit"></i>
                                </a>
                                 <a href="">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="app-contenedor">
        <div id="mats">

            <div class="app-ajustar-laterales">
               
                <div>
                    <h2 class="app-mg-arr-22">Materiales</h2>
                </div>

                <button data-target="modal-materiales" class="app-btn app-btn-azul app-mg-arr-22">
                    <i class="fas fa-plus-circle"></i>Agregar
                </button>


             <!-- Inicio modal materiales-->

                <div id="modal-materiales" class="modal">
                        <div class="modal-content modal-content-medio">
 
                                <div class="app-pos-der app-distancia">
                                    <h2 class="app-inline app-tam-fuente-25">Seleccionar Material</h2>
                                    <i class="fas fa-times app-cerrar-modal app-posicion-boton-cerrar"></i> 
                                </div>
                            
                                <div class="app-pos-der app-mg-arr-15">
                                    <i class="fas fa-search"></i>
                                    <input type="text" class="app-campo app-mg-ab-10 app-mg-izq-20 app-altura-camp-modal" >
                                </div>
                                
                                <div class="modal-body ajustar-contenedor">
                                    <div class="app-grid app-ajustar-6-6-columnas app-ajustar-columnas">
                                        <div class="borde-modal  app-mg-todo-5 ajustar-contenedor" >
                                            <div class="app-contenedor-modal-imagen  app-fondo-gris-bajo app-col-5">
                                                <a class="app-btn-flotante app-flotar-arriba-15">
                                                    <i class="fas fa-check-circle app-fondo-blanco"></i>
                                                </a>                                         
                                            </div>
                                            <div class="app-mg-izq-10 app-cont-50">
                                                Licuadora <br>
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                            </div>
                                        </div>

                                        <div class="borde-modal  app-mg-todo-5 ajustar-contenedor">
                                            <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                                <a class="app-btn-flotante app-flotar-arriba-15">
                                                    <i class="fas fa-check-circle app-fondo-blanco"></i>
                                                </a>      
                                            </div>
                                            <div class="app-mg-izq-10 app-cont-50">
                                                Batidora <br>
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                            </div>
                                        </div>

                                        <div class="borde-modal  app-mg-todo-5 ajustar-contenedor">
                                            <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                                <a class="app-btn-flotante app-flotar-arriba-15">
                                                    <i class="fas fa-check-circle app-fondo-blanco"></i>
                                                </a>       
                                            </div>
                                            <div class="app-mg-izq-10 app-cont-50">
                                                Coladora <br>
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>

                                            </div>
                                        </div>

                                        <div class="borde-modal  app-mg-todo-5 ajustar-contenedor">
                                            <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                                <a class="app-btn-flotante app-flotar-arriba-15">
                                                    <i class="fas fa-check-circle app-fondo-blanco"></i>
                                                </a>    
                                            </div>
                                            <div class="app-mg-izq-10 app-cont-50">
                                                Rayador <br>
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>

                                            </div>
                                        </div>

                                        <div class="borde-modal  app-mg-todo-5 ajustar-contenedor">
                                            <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                                <a class="app-btn-flotante app-flotar-arriba-15">
                                                    <i class="fas fa-check-circle app-fondo-blanco"></i>
                                                </a>        
                                            </div>
                                            <div class="app-mg-izq-10 app-cont-50">
                                                Rayador <br>
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>

                                            </div>
                                        </div>

                                        <div class="borde-modal  app-mg-todo-5 ajustar-contenedor">
                                            <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                                <a class="app-btn-flotante app-flotar-arriba-15">
                                                    <i class="fas fa-check-circle app-fondo-blanco"></i>
                                                </a>      
                                            </div>
                                            <div class="app-mg-izq-10 app-cont-50">
                                                Rayador <br>
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-mg-arr-15 app-pos-izq">

                                    <button data-target="abrir-modal-nuevo-material" class="app-btn app-btn-azul app-tam-btn-modal">
                                        <i class="fas fa-plus-circle"></i>Nuevo
                                    </button>

                                </div>



                        </div>
                        <a href="#" class="btn-cerrar-modal"></a>
                    </div>

                <!--Fin modal materiales-->


                <!--Inicio modal crear material-->

                <div id="abrir-modal-nuevo-material" class="modal">
                    <div class="modal-content modal-content-medio">

                        <div class="app-pos-der app-distancia">
                            <h2 class="app-inline app-tam-fuente-25 app-mg-todo-5">Crear Material</h2>
                            <i class="fas fa-times app-cerrar-modal app-posicion-boton-cerrar"></i>
                        </div>

                            
                        <div class="ajustar-contenedor ">
                            <div class="app-contenedor-modal-imagen-200 app-mg-todo-5 app-fondo-gris-bajo app-col-5 app-ajustar-centro" >
                                <h3>Sin imagen</h3>
                            </div>

                            <div class="app-cont-50 app-mg-izq-10">
                                <h1 class="app-mg-ab-3">Nombre</h1>
                                <input type="text" class="app-campo app-mg-ab-10 app-altura-camp-modal" ></i>
                                <h1 class="app-mg-ab-3">Descripcion</h1>
                                <textarea class="app-campo-area app-ajustar-textar" cols="30" rows="8" maxlength="45"></textarea>
                            </div>
                        </div>
                            
                        <div class="contenedor">
                            <button class="app-btn app-btn-azul app-tam-btn-modal" >
                                <i class="fas fa-check app-mg-der-5"></i>
                                Guardar
                            </button>
                        </div>
                    </div>

                </div> 
                <!--Fin modal crear material-->


            <div class="tblmat app-tbl-responsive ">
                <div class="app-grid app-ajustar-columna-12 app-ajustar-columnas-pequenio">
                    <table class="app-tabla-tamaño">
                        <tr>
                            <th class="app-celda-texto-centro">Materiales</th>
                            <th class="app-col2-9 app-celda-texto-centro">Acciones</th>
                        </tr>

                        <tr>
                            <td>Batidora</td>
                            <td class="app-centrar-icns">
                                <a>
                                    <i class="far fa-edit"></i>
                                </a>
                                <a>
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Licuadora</td>
                            <td class="app-centrar-icns">
                                <a>
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Olla arrocera</td>
                            <td class="app-centrar-icns">                   
                                <i class="far fa-edit"></i>
                                <i class="fas fa-trash"></i>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="app-contenedor">
        <div>
            <div class="app-ajustar-laterales">
                <h2 class="app-mg-arr-22">Instrucciones</h2>
                <button data-target="modal-instrucciones" class="app-btn app-btn-azul app-mg-arr-22">
                    <i class="fas fa-plus-circle"></i>Agregar
                </button>
            </div>


            <!--Inicio modal crear paso-->

            <div id="modal-instrucciones" class="modal">
                <div class="modal-content modal-content-medio">

                    <div class="app-mg-ab-30 app-pos-der app-distancia">
                        <h2 class="app-inline app-tam-fuente-25 app-mg-todo-5">Crear Paso</h2>
                        <i class="fas fa-times app-cerrar-modal app-posicion-boton-cerrar"></i> 
                    </div>

                    <div class="ajustar-contenedor ">
                        <div class="app-contenedor-modal-imagen-150 app-mg-todo-5 app-fondo-gris-bajo app-col-4 app-ajustar-centro" >
                            <h3>Sin imagen</h3>
                        </div>

                        <div class="app-col-7 app-mg-izq-10">

                            <h1 class="app-mg-ab-3 app-mg-arr-10">Contenido</h1>
                            <textarea class="app-campo-area app-ajustar-textar-grande" cols="30" rows="8" maxlength="45"></textarea>

                        </div>
                    </div>

                    <div class="app-pos-izq app-mg-todo-5">
                        <button data-target="modal-agregar-paso" class="app-btn app-btn-azul app-tam-btn-modal app-mg-der-5p">
                            <i class="fas fa-plus-circle"></i>
                                Agregar paso
                        </button>
                    </div>

                    <div class="contenedor">
                        <button class="app-btn app-btn-azul app-tam-btn-modal" >
                            <i class="fas fa-check app-mg-der-5"></i>
                            Guardar
                        </button>
                    </div>

                    </div>
            </div>
                <!--Fin modal crear paso-->

                <!--Inicio modal agregar paso--> 

                <div id="modal-agregar-paso" class="modal">
                    <div class="modal-content modal-content-medio">

                        <i class="fas fa-times app-cerrar-modal app-posicion-boton-cerrar"></i> 

                        <div class="ajustar-contenedor modal-body app-mg-arr-15">
                                
                            <div class="app-contenedor-modal-imagen-150 app-mg-todo-5 app-fondo-gris-bajo app-col-4 app-ajustar-centro" >
                                <h3>Sin imagen</h3>
                            </div>

                            <div class="app-col-7 app-mg-izq-10">
                                <h1 class="app-mg-ab-3 app-mg-arr-5 app-inline">Contenido</h1>
                                <i class="fas fa-trash app-flotar-der app-mg-der-10"></i>
                                <textarea class="app-campo-area app-ajustar-textar-grande" cols="30" rows="8" maxlength="45"></textarea>

                            </div>
                            <div class="app-contenedor-modal-imagen-150 app-mg-todo-5 app-fondo-gris-bajo app-col-4 app-ajustar-centro" >
                                <h3>Sin imagen</h3>
                            </div>

                            <div class="app-col-7 app-mg-izq-10">
                                <h1 class="app-mg-ab-3 app-mg-arr-5 app-inline">Contenido</h1>
                                <i class="fas fa-trash app-flotar-der app-mg-der-10"></i>
                                <textarea class="app-campo-area app-ajustar-textar-grande" cols="30" rows="8" maxlength="45"></textarea>
                            </div>
                        </div>

                        <div class="app-pos-izq app-mg-arr-10">
                            <button class="app-btn app-btn-azul app-tam-btn-modal app-mg-der-5p">
                                <i class="fas fa-plus-circle"></i>
                                 Agregar paso
                            </button>
                        </div>

                        <div class="contenedor">
                            <button class="app-btn app-btn-azul app-tam-btn-modal" >
                                <i class="fas fa-check app-mg-der-5"></i>
                                Guardar
                            </button>
                         </div>
                    </div>
                </div>

                <!--Fin modal agregar paso--> 

            
            <div>
                <div class="step">
                    <h4 class="app-inline">Paso 1</h4>
                    <span class="far fa-edit" id="edpu"></span>
                    <span class="fas fa-trash"></span>
                </div>

                <p style="line-height: 115%">
                <img src="../assets/images/comida.png" alt="">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam rem laboriosam dicta eius quidem! Molestiae minima consequatur officia repellendus iure in! Atque alias ab neque id dolore consectetur, laboriosam quia minima inventore
                    sunt blanditiis quo fugiat consequuntur. Aliquid quis tempora perspiciatis aperiam cumque. Expedita officia magnam minus debitis dignissimos, quo repellendus ducimus assumenda natus. Aliquid, consequatur hic. Quaerat culpa sed eius
                    doloremque! Nostrum aliquid quisquam nisi laudantium autem qui?</p>
            </div>

            <div>
                <div class="step app-mg-arr-15">
                    <h4 class="app-inline">Paso 2 </h4>
                    <span class="far fa-edit" id="edpd"></span>
                    <span class="fas fa-trash"></span>
                </div>

                <p style="line-height: 115%">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam rem laboriosam dicta eius quidem! Molestiae minima consequatur officia repellendus iure in! Atque alias ab neque id dolore consectetur, laboriosam quia minima inventore
                </p>
            </div>
        </div>
    </div>

    <div class="app-contenedor">
        <div>
            <div class="app-ajustar-laterales">
                <h2 class="app-mg-arr-22">Tags</h2>
               
                <button data-target="my-modal" class="app-btn app-btn-azul app-mg-arr-22">
                        <span class="fas fa-plus-circle"></span>Agregar
                </button>



                <!-- Inicio modal tags -->
                <div id="my-modal" class="modal">

                    
                    <div class="modal-content modal-content-small">

                        <div class="app-pos-der app-distancia">
                            <h2 class="app-inline app-tam-fuente-25">Agregar Tags</h2>
                            <i class="fas fa-times app-cerrar-modal app-posicion-boton-cerrar"></i>  
                        </div>
  
                        <div class="app-pos-der app-mg-arr-15">

                            <input type="text" class="app-campo app-mg-ab-10  app-altura-camp-modal" >
                        </div> 
                        <div class="tgs">
                            <button class="app-btn-tags app-btn-amarillo">Rápido<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                            <button class="app-btn-tags app-btn-amarillo">Gastón<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                            <button class="app-btn-tags app-btn-amarillo">Rico<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                            <button class="app-btn-tags app-btn-amarillo">Cool<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                            <button class="app-btn-tags app-btn-amarillo">Postre<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                        </div>

                    </div>
                </div>

                <!-- fin modal tags -->


            </div>
            
            <div id="cont2">
                <div class="tgs">
                    <button class="app-btn-tags app-btn-amarillo">Postre<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                    <button class="app-btn-tags app-btn-amarillo">Rico<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                    <button class="app-btn-tags app-btn-amarillo">Rápido<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                    <button class="app-btn-tags app-btn-amarillo">Casero<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                    <button class="app-btn-tags app-btn-amarillo">Genial<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="app-contenedor contenedor">
        <button class="app-btn app-btn-azul" >Guardar receta</button>
    </div>
</div>