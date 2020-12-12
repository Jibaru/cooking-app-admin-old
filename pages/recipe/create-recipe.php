<div id="app-crear-receta">
    <div class="app-contenedor">
        <h2>Creación de receta</h2>
    </div>
    <div class="app-contenedor">
        <div class="app-contenedor-imagen app-ajustar-centro app-fondo-gris-bajo ">
            <h3>Sin imagen</h3>
        </div>
    </div>

    <div class="app-contenedor">
        <div class="app-pos-izq">
            <button type="file" class="app-btn app-btn-azul">
                Seleccionar imagen...
            </button>
        </div>
    </div>

    <div class="app-contenedor">
        <label>Nombre de la receta</label>
        <input type="text" class="app-campo" maxlength="45">
        <div class="app-pos-izq app-texto-gris-alto">
            <span>0/45</span>
        </div>
    </div>

    <div class="app-contenedor ">
        <div class="app-ajustar-laterales app-mg-ab-10">
            <div class="app-ancho-45">
                <label>Tipo</label>
                <select class="app-seleccionable">
                    <option disabled selected>Seleccionar...</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
            <div class="app-ancho-45">
                <label>Cocina</label>
                <select class="app-seleccionable">
                    <option disabled selected>Seleccionar...</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
        </div>
    </div>

    <div class="app-contenedor">
        <label>Descripcion breve</label>
        <div>
            <textarea name="descripcion" class="app-campo-area" cols="30" rows="8" maxlength="45"></textarea>
        </div>
        <div class="app-pos-izq app-texto-gris-alto">
            <span>0/45</span>
        </div>
    </div>

    <div class="app-contenedor">
        <div class="app-ajustar-laterales app-mg-ab-10">
            <div class="app-ancho-28">
                <label>Cantidad de personas</label>
                <input type="number" class="app-campo app-texto-der" placeholder="1 persona">
            </div>
            <div class="app-ancho-28">
                <label>Tiempo de preparación</label>
                <input type="text" class="app-campo app-texto-centro" placeholder="00:00">
                <div class="app-pos-izq app-texto-gris-alto">
                    <span>0 milisegundos</span>
                </div>
            </div>
            <div class="app-ancho-28">
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

                <!-- Inicio modal ingredientes -->

                <a href="#abrir-modal-ingredientes" class="app-mostrar-modal">
                    <button class="app-btn app-btn-azul">
                        <i class="fas fa-plus-circle"></i>Agregar
                    </button>
                </a>

                <div id="abrir-modal-ingredientes" class="modal">
                    <div class="content">
                    <a href="#" class="app-cerrar-modal"><i class="fas fa-times app-mg-der-30 app-mg-arr-30"></i></a><br> 
                        <div class="estilo">

                            
                            <h2 class="app-inline app-fs-25">Seleccionar ingrediente</h2>


                            <i class="fas fa-search app-modal-buscar"><input type="text" class="app-campo app-mg-ab-10 app-mg-izq-20 app-altura-camp-modal" ></i>
                            
                            <div class="modal-body ajustar-contenedor">
                                <div class="app-espaciado borde-modal  app-mg-todo-5 ajustar-contenedor" >
                                    <div class="app-contenedor-modal-imagen  app-fondo-gris-bajo app-col-5">
                                        <a href="">
                                            <i class="fas fa-check-circle"></i>
                                        </a>                                        
                                    </div>
                                    <div class="app-mg-izq-10 app-cont-50">
                                        Tomate <br>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <div>
                                            <div class="app-ancho-45">
                                                <input type="number" class="app-campo app-texto-der" placeholder="1">
                                            </div>
                                            <div class="app-ancho-45">
                                                <select class="app-seleccionable">
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

                                <div class="app-espaciado borde-modal  app-mg-todo-5 ajustar-contenedor">
                                    <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                        <a href="">
                                            <i class="fas fa-check-circle"></i>
                                        </a>     
                                    </div>
                                    <div class="app-mg-izq-10 app-cont-50">
                                        Rocoto <br>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <div>
                                            <div class="app-ancho-45">
                                                <input type="number" class="app-campo app-texto-der" placeholder="1">
                                            </div>
                                            <div class="app-ancho-45">
                                                <select class="app-seleccionable">
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

                                <div class="app-espaciado borde-modal  app-mg-todo-5 ajustar-contenedor">
                                    <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                        <a>
                                            <i class="fas fa-check-circle"></i>
                                        </a>     
                                    </div>
                                    <div class="app-mg-izq-10 app-cont-50">
                                        Arroz blanco <br>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <div>
                                            <div class="app-ancho-45">
                                                <input type="number" class="app-campo app-texto-der" placeholder="1">
                                            </div>
                                            <div class="app-ancho-45">
                                                <select class="app-seleccionable">
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

                                <div class="app-espaciado borde-modal  app-mg-todo-5 ajustar-contenedor">
                                    <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                        <a href="">
                                            <i class="fas fa-check-circle"></i>
                                        </a>     
                                    </div>
                                    <div class="app-mg-izq-10 app-cont-50">
                                        Perejil <br>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <div>
                                            <div class="app-ancho-45">
                                                <input type="number" class="app-campo app-texto-der" placeholder="1">
                                            </div>
                                            <div class="app-ancho-45">
                                                <select class="app-seleccionable">
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

                                <div class="app-espaciado borde-modal  app-mg-todo-5 ajustar-contenedor">
                                    <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                        <a href="">
                                            <i class="fas fa-check-circle"></i>
                                        </a>     
                                    </div>
                                    <div class="app-mg-izq-10 app-cont-50">
                                        Tomate <br>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <div>
                                            <div class="app-ancho-45">
                                                <input type="number" class="app-campo app-texto-der" placeholder="1">
                                            </div>
                                            <div class="app-ancho-45">
                                                <select class="app-seleccionable">
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

                                <div class="app-espaciado borde-modal  app-mg-todo-5 ajustar-contenedor">
                                    <div class="app-contenedor-modal-imagen app-fondo-gris-bajo app-col-5">
                                        <a href="">
                                            <i class="fas fa-check-circle"></i>
                                        </a>     
                                    </div>
                                    <div class="app-mg-izq-10 app-cont-50">
                                        Tomate <br>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <div>
                                            <div class="app-ancho-45">
                                                <input type="number" class="app-campo app-texto-der" placeholder="1">
                                            </div>
                                            <div class="app-ancho-45">
                                                <select class="app-seleccionable">
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
                            <div class="app-mg-arr-15 app-pos-izq">
                                <a href="#abrir-modal-nuevo-ingrediente" class="app-mostrar-modal">
                                    <button class="app-btn app-btn-azul app-tam-btn-modal">
                                        <i class="fas fa-plus-circle"></i>Nuevo
                                    </button>
                                </a>
                            </div>


                        </div>
                    </div>
                    <a href="#" class="btn-cerrar-modal"></a>
                </div>

                <!--Fin modal ingredientes-->


                <!--Inicio modal agregar ingredientes-->

                <div id="abrir-modal-nuevo-ingrediente" class="modal">
                    <div class="content">

                        <div class="estilo">
                            <div>
                            <h2 class="app-inline app-fs-25">Crear ingrediente</h2>
                            <a href="#" class="app-cerrar-modal"><i class="fas fa-times"></i></a><br> 
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
                                    <div class="ajustar-contenedor app-mg-arr-10 ">
                                        <div class="app-ancho-45 app-mg-der-20">
                                            <h1>Categoría</h1>
                                            <select class="app-seleccionable" style="height:25px;">
                                                <option >kg</option>
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                        <div class="app-ancho-45 ajustar-contenedor">
                                            <h1 style="font-size:15px;">Cantidad y unidades</h1>
                                            <input type="number" class="app-campo app-texto-der app-ancho-45 app-mg-der-10" placeholder="1" style="height:25px;">
                                            <select class="app-seleccionable app-ancho-45" style="height:25px;">
                                                <option >kg</option>
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="contenedor">
                                        <a href="#abrir-modal-info-nutri" class="app-mostrar-modal">
                                            <button class="app-btn app-btn-azul app-tam-btn-modal">
                                                 Información nutricional 
                                                 <i class="fas fa-chevron-right"></i>
                                            </button>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="contenedor">
                                <button class="app-btn app-btn-azul app-tam-btn-modal" >Guardar</button>
                             </div>

                        </div>
                    </div>
                    <a href="#" class="btn-cerrar-modal"></a>
                </div>







            </div>
            <div class="tbling">
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
               
                    <h2 class="app-mg-arr-35">Materiales</h2>
                
                <button class="app-btn app-btn-azul app-mg-arr-22">
                    <span class="fas fa-plus-circle" id="ag2"></span>Agregar
                </button>
            </div>

            <div class="tblmat">
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
                            <a>
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

    <div class="app-contenedor">
        <div>
            <div class="app-ajustar-laterales">
                <h2 class="app-mg-arr-22">Instrucciones</h2>
                <button class="app-btn app-btn-azul app-mg-arr-22">
                    <span class="fas fa-plus-circle" id="ag3"></span>Agregar
                </button>
            </div>
            
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
                
                <a href="#abrir-modal-tags" class="app-mostrar-modal">
                    <button class="app-btn app-btn-azul app-mg-arr-22">
                        <span class="fas fa-plus-circle"></span>Agregar
                    </button>
                </a>

                <div id="abrir-modal-tags" class="modal" >
                    <div class="content">

                        <div class="estilo">
                        
                            <h2 class="app-inline app-fs-25">Agregar Tags</h2>
                            <a href="#" class="app-cerrar-modal"><i class="fas fa-times"></i></a>

                            <input type="text" class="app-campo app-mg-ab-10" >
                            <div class="tgs">
                                <button class="app-btn-tags app-btn-amarillo">Rápido<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                                <button class="app-btn-tags app-btn-amarillo">Gastón<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                                <button class="app-btn-tags app-btn-amarillo">Rico<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                                <button class="app-btn-tags app-btn-amarillo">Cool<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                                <button class="app-btn-tags app-btn-amarillo">Postre<i class="fas fa-times-circle app-paddng-izq" ></i></button>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn-cerrar-modal"></a>
                </div>





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