<div id="app-crear-receta">
    <div class="inicio">
        <h2>Creación de receta</h2>
        <div class="imag">
            <h3>Sin imagen</h3>
        </div>
    </div>

    <div class="cont1">
        <div class="espsel">
            <button type="file" class="ripple" id="btnselect">Seleccionar imagen...</button>
        </div>
    </div>

    <div class="cont1">
        <div>
            <label>Nombre de la receta</label>
        </div>
        <input type="text" id="camprec" maxlength="45">
        <div class="num">0/45</div>
    </div>

    <div class="cont1">
        <div class="combobox">
            <div id="tipo">
                <div>
                    <label>Tipo</label>
                </div>
                <select name="cars" id="cars">
                    <option class="slc" disabled selected>Seleccionar...</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>

            </div>

            <div id="cocina">
                <div>
                    <label>Cocina</label>
                </div>
                <div class="sel1">
                    <select name="cars" id="cars">
                        <option disabled selected>Seleccionar...</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="cont1">
        <div class="txt">
            <label>Descripcion breve</label>
            <div>
                <textarea name="descripcion" id="descr" cols="30" rows="10" maxlength="45"></textarea>
            </div>
            <div class="num">0/45</div>
        </div>
    </div>

    <div class="cont1">
        <div class="campos">

            <div id="cp">
                <div>
                    <label>Cantidad de personas</label>
                </div>
                <input type="number" id="incp" placeholder="1 persona">
            </div>

            <div id="tp">
                <div>
                    <label>Tiempo de preparación</label>
                </div>
                <input type="text" id="intp" placeholder="00:00">
                <div class="mili">
                    0 milisegundos
                </div>
            </div>

            <div id="tc">
                <div>
                    <label>Tiempo de cocción</label>
                </div>
                <input type="text" id="intc" placeholder="00:00">
                <div class="mili">
                    0 milisegundos
                </div>
            </div>

        </div>
    </div>

    <div class="cont1">
        <div id="ingr">

            <div class="esp">
                <h2 style="width: 100%">Ingredientes <button class="ripple">
                        <span class="fas fa-plus-circle" id="ag1"></span>Agregar
                    </button> </h2>
            </div>

            <div class="tbling">
                <table id="tbing">
                    <tr>
                        <th class="thicc">Ingredientes</th>
                        <th class="thca">Cantidad</th>
                        <th class="thun">Unidades</th>
                        <th class="thacc">Acciones</th>
                    </tr>

                    <tr>
                        <td>Tomate</td>
                        <td class="cant">1</td>
                        <td class="unid">kg</td>
                        <td>
                            <div class="icns">
                                <span class="far fa-edit"></span>

                                <span class="fas fa-trash"></span>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Arroz</td>
                        <td class="cant">1.5</td>
                        <td class="unid">kg</td>
                        <td>
                            <div class="icns">
                                <span class="far fa-edit"></span>

                                <span class="fas fa-trash"></span>
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

                </table>
            </div>
        </div>
    </div>

    <div class="cont1">
        <div id="mats">

            <div class="esp">
                <h2 style="width: 100%">Materiales <button class="ripple">
                        <span class="fas fa-plus-circle" id="ag2"></span>Agregar
                    </button></h2>
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

    <div class="cont1">
        <div>
            <h2 style="margin-bottom: 3px; margin-top: 50px; width: 100%">Instrucciones <button class="ripple">
                    <span class="fas fa-plus-circle" id="ag3"></span>Agregar
                </button></h2>


            <div class="prueba">
                <div class="step">
                    <h4 style="margin-top: 0px">Paso 1 <span class="far fa-edit" id="edpu"></span>
                        <span class="fas fa-trash"></span> </h4>
                </div>

                <p style="line-height: 115%"> <img src="../assets/images/comida.png" alt="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam rem laboriosam dicta eius quidem! Molestiae minima consequatur officia repellendus iure in! Atque alias ab neque id dolore consectetur, laboriosam quia minima inventore
                    sunt blanditiis quo fugiat consequuntur. Aliquid quis tempora perspiciatis aperiam cumque. Expedita officia magnam minus debitis dignissimos, quo repellendus ducimus assumenda natus. Aliquid, consequatur hic. Quaerat culpa sed eius
                    doloremque! Nostrum aliquid quisquam nisi laudantium autem qui?</p>
            </div>

            <div>
                <div class="step">
                    <h4>Paso 2 <span class="far fa-edit" id="edpd"></span>
                        <span class="fas fa-trash"></span></h4>
                </div>

                <p style="line-height: 115%">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam rem laboriosam dicta eius quidem! Molestiae minima consequatur officia repellendus iure in! Atque alias ab neque id dolore consectetur, laboriosam quia minima inventore </p>
                <div></div>
            </div>
        </div>
    </div>

    <div class="cont1">
        <div>
            <h2 id="ts">Tags <button class="ripple">
                    <span class="fas fa-plus-circle" id="ag4"></span>Agregar
                </button></h2>


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