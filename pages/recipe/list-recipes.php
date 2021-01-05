<div id="listar-recetas">
    <h1 class="app-tam-fuente-25 app-mg-ab-5">Listado de recetas</h1>

    <div class="app-pos-der ">
        <div class="app-col-10 app-mg-der-20"> 
            <label>Nombre de la receta</label>
            <input type="text" class="app-altura-modal-inputs app-campo app-mg-arr-5">
        </div>

        <div class="app-col-2"> 
            <label>Creado por</label>
            <i data-target="app-usuario" class="fas fa-user app-flotar-der"></i>
            <select class="app-seleccionable app-altura-modal-inputs app-mg-arr-5">
                <option disabled selected>Cualquiera</option>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
        </div>
    </div>

    <div class="app-mg-arr-15">
        <p>Filtros</p>
        <div class="app-pos-der app-distancia app-mg-arr-10">
            <div class="app-col-2 app-mg-der-20">
                <label>Desde</label>
                <input type="date" class="app-altura-modal-inputs app-campo app-mg-arr-5">
            </div>
            
            <div class="app-col-2 app-mg-der-20">
                <label>Hasta</label>
                <input type="date" class="app-altura-modal-inputs app-campo app-mg-arr-5">
            </div>

            <div class="app-col-2 app-mg-der-20">
                <label>Tipo receta</label>
                <select class="app-seleccionable app-altura-modal-inputs app-mg-arr-5">
                    <option disabled selected>Cualquiera</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
            
            <div class="app-col-2 app-mg-der-20">
                <label>Tipo cocina</label>
                <select class="app-seleccionable app-altura-modal-inputs app-mg-arr-5">
                    <option disabled selected>Cualquiera</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>

            <div class="app-col-2 app-mg-der-20 app-mg-arr-11">
                <div class="tooltip top app-ancho-100p">
                    <button data-target="app-modal-prefs-usuario" class="app-btn app-btn-azul app-tam-btn-modal  app-ancho-100p app-centrar">Prefs. Usuario</button>

                    <div class="tiptext">
                        <p>Favoritos: 0 a 10 personas</p> <br>
                        <p>Guardados: 0 a más personas</p>
                    </div>
                </div>

            </div>



        <!-- inicio modal preferencias de usuario-->

            <div id="app-modal-prefs-usuario" class="modal">
                <div class="modal-content modal-content-peque">

                    <h2 class="app-inline app-tam-fuente-25">Preferencias de usuario</h2>
                    <i class="fas fa-times app-cerrar-modal"></i><br> 
                                    
                    <div class="app-mg-arr-15">
                        <div class="app-alinear">
                            <div class="app-col-6">
                                <p>Cant. Favoritos</p>
                            </div>

                            <div class="app-col-6 app-alinear">
                                <div class="app-col-6 app-mg-der-10">
                                    <h1 style="font-size:15px;">Mínimo</h1>
                                    <input type="number" class="app-campo app-texto-der app-mg-der-10"  style="height:25px;">
                                </div>

                                <div class="app-col-6 app-mg-der-10">
                                    <h1 style="font-size:15px;">Máximo</h1>
                                    <input type="number" class="app-campo app-texto-der app-mg-der-10"  style="height:25px;">
                                </div>
                            </div>
                        </div>
                                        
                        <div class="app-alinear app-mg-arr-15">
                            <div class="app-col-6">
                                <p>Cant. Guardados</p>
                            </div> 

                            <div class="app-col-6 app-alinear">
                                <div class="app-col-6 app-mg-der-10">
                                    <h1 style="font-size:15px;">Mínimo</h1>
                                    <input type="number" class="app-campo app-texto-der app-mg-der-10"  style="height:25px;">
                                </div>

                                <div class="app-col-6 app-mg-der-10">
                                    <h1 style="font-size:15px;">Máximo</h1>
                                    <input type="number" class="app-campo app-texto-der app-mg-der-10"  style="height:25px;">
                                </div>
                            </div>
                        </div>

                        <div class="app-pos-izq app-mg-arr-30 app-mg-der-10">
                            <button class="app-btn app-btn-azul app-tam-btn-modal" >
                                <i class="fas fa-check app-mg-der-5"></i>
                                Aceptar
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        <!-- fin modal preferencias de usuario-->


            
            <div class="app-col-2">
                <div class="tooltip bottom app-ancho-100p">
                    <button data-target="app-seleccionar-tags" class="app-btn app-btn-azul app-tam-btn-modal app-mg-arr-11 app-ancho-100p app-centrar">Tags</button>
                    
                    <div class="tiptext">
                        <p>Rico</p>
                        <p>Rápido</p>
                        <p>Chevere</p>
                        <p>Postre</p>
                        <p>Gaston</p>
                    </div>

                </div>
            </div>           
        </div>

        <div class="app-pos-der app-distancia app-mg-arr-30">
            <div class="app-col-2 app-mg-der-20">
                <div class="tooltip bottom app-ancho-100p">
                    <button data-target="app-modal-seleccionar-ingredientes" class="app-btn app-btn-azul app-tam-btn-modal app-mg-arr-11 app-ancho-100p app-centrar">Ingredientes</button>
                    <div class="tiptext">
                        <p>Perejil</p>
                        <p>Tomate</p>
                        <p>Fideos</p>
                        <p>Salsa Roja</p>
                    </div>
                </div>   
            </div>

            <div class="app-col-2 app-mg-der-20">
                <div class="tooltip bottom app-ancho-100p">
                    <button data-target="app-modal-seleccionar-materiales" class="app-btn app-btn-azul app-tam-btn-modal app-mg-arr-11 app-ancho-100p app-centrar">Materiales</button>
                    <div class="tiptext">
                        <p>Licuadora</p>
                        <p>Batidora</p>
                        <p>Rayadora</p>
                    </div>
                </div>
            </div>
                        
            <div class="app-col-2 app-mg-der-20">
                <label>Estado</label>
                <select class="app-seleccionable app-altura-modal-inputs app-mg-arr-5">
                    <option disabled selected>Sin aprobar</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
            <div class="app-col-2 app-mg-der-20">
                <label>No. Personas</label>
                <input type="number" class="app-campo app-texto-der app-altura-modal-inputs app-mg-arr-5">
            </div>

            <div class="app-col-4">
                <div class="tooltip bottom app-ancho-100p">
                    <button data-target="app-modal-seleccionar-información-nutricional" class="app-btn app-btn-azul app-tam-btn-modal app-mg-arr-11 app-ancho-100p app-centrar">Información nutricional</button>
                    <div class="tiptext">
                        <p>Calcio Máximo:</p>
                        <p>45mg por 1Kg</p>
                        <p>Calcio Mínimo:</p>
                        <p>30mg por 1Kg</p>
                        <p>Vitamina A Máxima:</p>
                        <p>12 por 1Kg</p>
                        <p>Hierro Mínimo:</p>
                        <p>23mg por 1kg</p>
                    </div>    
                </div>
            </div>
            
        </div>
    </div>
    <div class="app-pos-izq app-mg-ab-30">
            <button class="app-btn app-btn-azul app-tam-btn-modal app-mg-arr-30">Filtrar</button>
    </div>
    

    <div>
        <table class="app-tabla-tamaño">
            <thead>
                <tr>
                    <th class="app-col-medio">Id</th>
                    <th class="app-col-3">Nombre</th>
                    <th class="app-col-2">Fech. Creacion</th>
                    <th class="app-col-3">Creado por</th>
                    <th class="app-col-2">Estado</th>
                    <th class="app-col-uno-y-medio">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12</td>
                    <td>Arroz a la jardinera</td>
                    <td>12/07/2020</td>
                    <td>Andres Fernandez <i data-target="app-usuario" class="fas fa-question-circle"></i></td>
                    <td>Aprobado</td>
                    <td class="app-centrar-icns">                                
                        <i class="fas fa-bars tooltip left">
                            <div class="tiptext">
                                <p class="app-inline">Editar</p>
                                <i class="fas fa-edit"></i>
                                
                                <p>---------------</p>
                                <p>Previsualizar aprobación</p>
                                <p>---------------</p>
                            </div>
                        </i>
                    </td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>Arroz a la jardinera</td>
                    <td>12/07/2020</td>
                    <td>Andres Fernandez <i data-target="app-usuario" class="fas fa-question-circle"></i></td>
                    <td>Aprobado</td>
                    <td class="app-centrar-icns">                                
                        <i class="fas fa-bars tooltip left">
                            <div class="tiptext">
                                <p class="app-inline">Editar</p>
                                <i class="fas fa-edit"></i>
                                
                                <p>---------------</p>
                                <p>Previsualizar aprobación</p>
                                <p>---------------</p>
                            </div>
                        </i>
                    </td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>Arroz a la jardinera</td>
                    <td>12/07/2020</td>
                    <td>Andres Fernandez <i data-target="app-usuario" class="fas fa-question-circle"></i></td>
                    <td>Aprobado</td>
                    <td class="app-centrar-icns">                                
                        <i class="fas fa-bars tooltip left">
                            <div class="tiptext">
                                <p class="app-inline">Editar</p>
                                <i class="fas fa-edit"></i>
                                
                                <p>---------------</p>
                                <p>Previsualizar aprobación</p>
                                <p>---------------</p>
                            </div>
                        </i>
                    </td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>Arroz a la jardinera</td>
                    <td>12/07/2020</td>
                    <td>Andres Fernandez <i data-target="app-usuario" class="fas fa-question-circle"></i></td>
                    <td>Aprobado</td>
                    <td class="app-centrar-icns">                                
                        <i class="fas fa-bars tooltip left">
                            <div class="tiptext">
                                <p class="app-inline">Editar</p>
                                <i class="fas fa-edit"></i>
                                
                                <p>---------------</p>
                                <p>Previsualizar aprobación</p>
                                <p>---------------</p>
                            </div>
                        </i>
                    </td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>Arroz a la jardinera</td>
                    <td>12/07/2020</td>
                    <td>Andres Fernandez <i data-target="app-usuario" class="fas fa-question-circle"></i></td>
                    <td>Aprobado</td>
                    <td class="app-centrar-icns">                                
                        <i class="fas fa-bars tooltip left">
                            <div class="tiptext">
                                <p class="app-inline">Editar</p>
                                <i class="fas fa-edit"></i>
                                
                                <p>---------------</p>
                                <p>Previsualizar aprobación</p>
                                <p>---------------</p>
                            </div>
                        </i>
                    </td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>Arroz a la jardinera</td>
                    <td>12/07/2020</td>
                    <td>Andres Fernandez <i data-target="app-usuario" class="fas fa-question-circle"></i></td>
                    <td>Aprobado</td>
                    <td class="app-centrar-icns">                                
                        <i class="fas fa-bars tooltip left">
                            <div class="tiptext">
                                <p class="app-inline">Editar</p>
                                <i class="fas fa-edit"></i>
                                
                                <p>---------------</p>
                                <p>Previsualizar aprobación</p>
                                <p>---------------</p>
                            </div>
                        </i>
                    </td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>Arroz a la jardinera</td>
                    <td>12/07/2020</td>
                    <td>Andres Fernandez <i data-target="app-usuario" class="fas fa-question-circle"></i></td>
                    <td>Aprobado</td>
                    <td class="app-centrar-icns">                                
                        <i class="fas fa-bars tooltip left">
                            <div class="tiptext">
                                <p class="app-inline">Editar</p>
                                <i class="fas fa-edit"></i>
                                
                                <p>---------------</p>
                                <p>Previsualizar aprobación</p>
                                <p>---------------</p>
                            </div>
                        </i>
                    </td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>Arroz a la jardinera</td>
                    <td>12/07/2020</td>
                    <td>Andres Fernandez <i data-target="app-usuario" class="fas fa-question-circle"></i></td>
                    <td>Aprobado</td>
                    <td class="app-centrar-icns">                                
                        <i class="fas fa-bars tooltip left">
                            <div class="tiptext">
                                <p class="app-inline">Editar</p>
                                <i class="fas fa-edit"></i>
                                
                                <p>---------------</p>
                                <p>Previsualizar aprobación</p>
                                <p>---------------</p>
                            </div>
                        </i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="app-pos-izq app-mg-ver-10">
        <p>Siguientes 10 recetas <i class="fas fa-arrow-right"></i></p>
        <p class="app-mg-der-10"><i class="fas fa-arrow-left"></i>Anteriores 10 recetas</p>
        
    </div>



<!-- inicio modal datos del creador-->

    <div id="app-usuario" class="modal">
        <div class="modal-content modal-content-small">


            <div class="app-mg-todo-5">
                <h2 class="app-inline app-tam-fuente-25">Datos del creador</h2>
                <i class="fas fa-times app-cerrar-modal"></i><br> 
            </div>
                            
            <div>
                <div class="ajustar-contenedor">
                    <div class="app-contenedor-modal-imagen-150 app-mg-todo-5 app-fondo-gris-bajo app-col-4 app-ajustar-centro" >
                        <h3 class="app-texto-blanco">Sin imagen</h3>
                    </div>

                    <div class="app-mg-arr-10 app-mg-izq-20">
                        <p>Apellidos</p>
                            <p>Rueda Boada</p> <br>
                            <p>Nombres</p>
                            <p>Ignacio Raúl</p> <br>
                            <p>Correo</p>
                            <p>IgnacioRueda@gmail.com</p>
                    </div>
                </div>
                                
                <div class="app-mg-todo-5">
                    <div class="app-ajustar-laterales2">
                        <p>Recetas creadas</p>
                        <p>1</p>
                    </div>

                    <div class="app-ajustar-laterales2">
                        <p>Recetas favoritas</p>
                        <p>2</p>
                    </div>

                    <div class="app-ajustar-laterales2">
                        <p>Recetas guardadas</p>
                        <p>13</p>
                    </div>
                                    
                    <div class="app-ajustar-laterales2">
                        <p>Rol</p>
                        <p>Administrador</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

<!-- fin modal datos del creador-->


<!--Inicio modal seleccionar tags-->

                <div id="app-seleccionar-tags" class="modal">
                    <div class="modal-content modal-content-peque">

                        <h2 class="app-inline app-tam-fuente-25">Seleccionar tags</h2>
                        <i class="fas fa-times app-cerrar-modal"></i><br> 

                            
                        <div class="app-pos-der app-mg-arr-15">
                            <i class="fas fa-search"></i>
                            <input type="text" class="app-campo app-mg-ab-10 app-mg-izq-20 app-altura-camp-modal" >
                        </div>


                        <div class="tgs">
                            <button class="app-btn-tags app-btn-amarillo">Rico<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                        </div>

                    </div>

                </div>

<!--fin modal seleccionar tags-->




<!--Inicio modal seleccionar ingredientes-->

                <div id="app-modal-seleccionar-ingredientes" class="modal">
                    <div class="modal-content modal-content-peque">

                        <div>
                            <h2 class="app-inline app-tam-fuente-25">Seleccionar ingredientes</h2>
                            <i class="fas fa-times app-cerrar-modal"></i><br> 
                        </div>
                            
                        <div class="app-pos-der app-mg-arr-15">
                            <i class="fas fa-search"></i>
                            <input type="text" class="app-campo app-mg-ab-10 app-mg-izq-20 app-altura-camp-modal" >
                        </div>


                        <div class="ajustar-contenedor">
                            <button class="app-btn-tags app-btn-amarillo">Tomate<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                            <button class="app-btn-tags app-btn-amarillo">Arroz<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                        </div>

                    </div>
                </div>

<!--fin modal seleccionar ingredientes-->



<!--Inicio modal seleccionar materiales-->

                <div id="app-modal-seleccionar-materiales" class="modal">
                    <div class="modal-content modal-content-peque">

                        <h2 class="app-inline app-tam-fuente-25">Seleccionar materiales</h2>
                        <i class="fas fa-times app-cerrar-modal"></i> 

                            
                        <div class="app-pos-der app-mg-arr-15">
                            <i class="fas fa-search"></i>
                            <input type="text" class="app-campo app-mg-ab-10 app-mg-izq-20 app-altura-camp-modal" >
                        </div>


                            <div class="ajustar-contenedor">
                                <button class="app-btn-tags app-btn-amarillo">Licuadora<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                                <button class="app-btn-tags app-btn-amarillo">Batidora<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                        </div>

                    </div>
                </div>

<!--fin modal seleccionar ingredientes-->



<!--Inicio modal Seleccionar información nutricional-->
                <div id="app-modal-seleccionar-información-nutricional" class="modal">
                    <div class="modal-content modal-content-35p ">

                        <i class="fas fa-times app-cerrar-modal"></i> 

                        <div class="app-padding-25">
                            <h2 class="app-inline app-tam-fuente-25">Seleccionar información nutricional</h2>
                            <div class="app-pos-der app-ancho-100 app-mg-arr-10">
                                <div class="app-col-4 app-mg-der-15">
                                    <label>Nutriente</label>
                                    <select class="app-seleccionable app-altura-modal-inputs">
                                        <option>Calcio</option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>

                                <div class="app-col-4 app-mg-der-15">
                                    <label>Mínimo</label>
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

                                <div class="app-col-4">
                                    <label>Mínimo</label>

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
                            </div>

                            <div class="app-pos-izq app-mg-ver-10">
                                <button class="app-btn app-btn-azul app-tam-btn-modal">Agregar</button>
                            </div>

                            <div>
                                <table class="app-tabla-tamaño">
                                    <thead>
                                        <tr>
                                            <th>Nutriente</th>
                                            <th>Mínimo</th>
                                            <th>Máximo</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Calcio</td>
                                            <td>15kg</td>
                                            <td>19kg</td>
                                            <td class="app-centrar-icns">                                
                                                <i data-target="app-modal-modificar-información-nutricional" class="far fa-edit"></i>
                                                <i class="fas fa-trash"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Calcio</td>
                                            <td>15kg</td>
                                            <td>19kg</td>
                                            <td class="app-centrar-icns">                                
                                                <i data-target="app-modal-modificar-información-nutricional" class="far fa-edit"></i>
                                                <i class="fas fa-trash"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Calcio</td>
                                            <td>15kg</td>
                                            <td>19kg</td>
                                            <td class="app-centrar-icns">                                
                                                <i data-target="app-modal-modificar-información-nutricional" class="far fa-edit"></i>
                                                <i class="fas fa-trash"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="app-centrar-icns">                                

                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="app-centrar-icns">                                

                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="app-centrar-icns">                                

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

<!--fin modal Seleccionar información nutricional-->




<div id="app-modal-modificar-información-nutricional" class="modal">
                    <div class="modal-content modal-content-35p ">

                        <i class="fas fa-times app-cerrar-modal"></i> 

                        <div class="app-padding-25">
                            <h2 class="app-inline app-tam-fuente-25">Seleccionar información nutricional</h2>
                            <div class="app-pos-der app-ancho-100 app-mg-arr-10">
                                <div class="app-col-4 app-mg-der-15">
                                    <label>Nutriente</label>
                                    <select class="app-seleccionable app-altura-modal-inputs">
                                        <option>Calcio</option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>

                                <div class="app-col-4 app-mg-der-15">
                                    <label>Mínimo</label>
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

                                <div class="app-col-4">
                                    <label>Mínimo</label>

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
                            </div>

                            <div class="app-pos-izq app-mg-ver-10">
                                <button class="app-btn app-btn-azul app-tam-btn-modal app-mg-izq-10">Cancelar</button>
                                <button class="app-btn app-btn-azul app-tam-btn-modal">Guardar</button>
                            </div>

                            <div>
                                <table class="app-tabla-tamaño">
                                    <thead>
                                        <tr>
                                            <th>Nutriente</th>
                                            <th>Mínimo</th>
                                            <th>Máximo</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Calcio</td>
                                            <td>15kg</td>
                                            <td>19kg</td>
                                            <td class="app-centrar-icns">                                
                                                <i class="far fa-edit"></i>
                                                <i class="fas fa-trash"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Calcio</td>
                                            <td>15kg</td>
                                            <td>19kg</td>
                                            <td class="app-centrar-icns">                                
                                                <i class="far fa-edit"></i>
                                                <i class="fas fa-trash"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Calcio</td>
                                            <td>15kg</td>
                                            <td>19kg</td>
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

                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="app-centrar-icns">                                

                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="app-centrar-icns">                                

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>



<!--Inicio modal crear notificación -->
            <div id="app-crear-notificacion" class="modal">
                    <div class="modal-content modal-content-medio">


                                <i class="fas fa-times app-cerrar-modal"></i> 

                        <div class="app-padding-25">
                            <h2 class="app-inline app-tam-fuente-25">Crear notificación</h2>
                            <div class="app-pos-der app-mg-arr-15 app-ancho-100p">
                                <div class="app-col-4 app-mg-der-10">
                                    <label>Fecha de envío</label>
                                    <input type="text" class="app-altura-modal-inputs app-campo app-mg-arr-7">
                                </div>

                                <div class="app-col-8">
                                    <label>Destinatario <i class="fas fa-info-circle"></i></label>
                                    <input type="text" class="app-altura-modal-inputs app-campo app-mg-arr-5" placeholder="Id:13-Rueda Boada Ignacio">
                                </div>
                            </div>

                            <div class="app-mg-ver-10">
                                <label>Motivo</label>
                                <input type="text" class="app-altura-modal-inputs app-campo app-mg-arr-5">
                            </div>

                            <div class="app-mg-ver-10">
                                <label>Contenido</label>
                                <textarea class="app-campo-area app-mg-arr-5" name="" id="" cols="30" rows="10"></textarea>
                            </div>

                            <div class="app-pos-izq">
                                <button class="app-btn app-btn-azul app-tam-btn-modal">Enviar notificación</button>
                            </div>
                        </div>
                    </div>

                </div>
<!--fin modal crear notificación -->

</div>