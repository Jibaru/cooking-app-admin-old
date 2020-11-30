<div id="app-crear-receta">
    <div class="app-contenedor">
        <h2>Creación de receta</h2>
    </div>
    <div class="app-contenedor">
        <div class="app-contenedor-imagen app-fondo-gris-bajo">
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
                <div class="">
                    <h2>Ingredientes</h2>
                </div>
                <button class="app-btn app-btn-azul">
                    <span class="app-contenedor-circular app-fondo-blanco">
                        <i class="fas fa-plus-circle app-icono"></i>
                    </span>
                    <span>
                        Agregar
                    </span> 
                </button>
            </div>
            <div class="tbling">
                <table id="tbing">
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
                            <td class="cant">1</td>
                            <td class="unid">kg</td>
                            <td>
                                <div class="icns">
                                    <a>
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a>
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Arroz</td>
                            <td class="cant">1.5</td>
                            <td class="unid">kg</td>
                            <td>
                                <div class="icns">
                                    <a>
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Sal</td>
                            <td class="cant">1</td>
                            <td class="unid">cucharadas</td>
                            <td>
                                <div class="icns">
                                    <span class="far fa-edit"></span>

                                    <span class="fas fa-trash"></span>
                                </div>
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
                    <h2>Materiales</h2>
                </div>
                <button class="app-btn app-btn-azul">
                    <span class="fas fa-plus-circle" id="ag2"></span>Agregar
                </button>
            </div>

            <div class="tblmat">
                <table id="tbmate">
                    <tr>
                        <th>Materiales</th>
                        <th class="thacc">Acciones</th>
                    </tr>

                    <tr>
                        <td>Batidora</td>
                        <td>
                            <div class="icns">
                                <span class="far fa-edit"></span>

                                <span class="fas fa-trash"></span>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Licuadora</td>
                        <td>
                            <div class="icns">
                                <span class="far fa-edit"></span>

                                <span class="fas fa-trash"></span>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Olla arrocera</td>
                        <td>
                            <div class="icns">
                                <span class="far fa-edit"></span>

                                <span class="fas fa-trash"></span>
                            </div>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

    <div class="app-contenedor">
        <div>
            <div class="app-ajustar-laterales">
                <h2>Instrucciones</h2>
                <button class="app-btn app-btn-azul">
                    <span class="fas fa-plus-circle" id="ag3"></span>Agregar
                </button>
            </div>
            
            <div class="prueba">
                <div class="step">
                    <h4 style="margin-top: 0px; display: inline-block;">Paso 1</h4>
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
                <div class="step">
                    <h4>Paso 2 </h4>
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
                <h2 id="ts">Tags</h2>
                <button class="app-btn app-btn-azul">
                    <span class="fas fa-plus-circle" id="ag4"></span>Agregar
                </button>
            </div>
            
            <div id="cont2">
                <div class="botones">
                    <div class="tgs">
                        <button class="tags">Postre<span class="fas fa-times-circle" id="ex1"></span></button>
                        <button class="tags">Rico<span class="fas fa-times-circle" id="ex2" style="padding-left: 20px"></span></button>
                        <button class="tags">Rápido<span class="fas fa-times-circle" id="ex3"></span></button>
                        <button class="tags">Casero<span class="fas fa-times-circle" id="ex4"></span></button>
                        <button class="tags">Genial<span class="fas fa-times-circle" id="ex5"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedor">
        <button class="ripple" id="ultbtn">Guardar receta</button>
    </div>
</div>