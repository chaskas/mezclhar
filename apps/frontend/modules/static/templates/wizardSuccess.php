<h2>Mezclas de Harina</h2>
<br/>
<ul class="breadcrumb" data-connect="breadcrumbcontent">
  <li><a href="#">Paso 1</a></li>
  <li><a href="#">Paso 2</a></li>
  <li><a href="#">Paso 3</a></li>
  <li><a href="#">Paso 4</a></li>
</ul>
<div class="widget" id="widget_1">
  <h3 class="handle">Nueva mezcla</h3>
  <div id="breadcrumbcontent">
    <div>
      <h3>Ingrese planilla Excel</h3>
      <p>
        Por favor diganos donde se encuentra la planilla excel con los datos.
      <div class="uploader" id="uniform-file_upload">
        <input type="file" size="19" style="opacity: 0; "/>
        <span class="filename">Seleccione</span>
        <span class="action">Examinar</span>
      </div>
      <hr>
      <button class="next">Siguiente</button>
      </p>
    </div>
    <div>
      <h3>Ingrese Par&aacute;metros</h3>
      <form>
        <fieldset>
          <section>
            <label>Planta:</label>
            <div>
              <select name="dropdown_vegetables" id="dropdown_vegetables">
                <option value="1">Coronel Sur</option>
                <option value="2">Coronel Norte</option>
                <option value="3">San Vicente</option>
                <option value="4">Coquimbo</option>
              </select>
            </div>
          </section>
          <section>
            <label>Lote:</label>
            <div>
              <select name="dropdown_fruits" id="dropdown_fruits">
                <option value="1">010203</option>
                <option value="2">010203</option>
                <option value="3">010203</option>
              </select>
            </div>
          </section>
          <section>
            <label>Estado:</label>
            <div>
              <select name="dropdown_fruits" id="dropdown_fruits">
                <option value="1">Vendida</option>
                <option value="2">Ofrecida</option>
                <option value="3">Sin calidad</option>
                <option value="3">Disponible</option>
              </select>
            </div>
          </section>
          <section>
            <label>Plantas</label>
            <div>
              <input type="checkbox" id="apples_check" /><label for="apples_check">Coronel Sur</label>
              <input type="checkbox" id="bananas_check" /><label for="bananas_check">Coronel Norte</label>
              <input type="checkbox" id="oranges_check" /><label for="oranges_check">San Vicente</label>
              <input type="checkbox" id="oranges_check" /><label for="oranges_check">Coquimbo</label>
            </div>
          </section>
          <label>Par&aacute;metros</label>
          <section><label for="integer">Prote&iacute;na</label>
            <div><input id="decimal" name="decimal" type="number" class="decimal"/>
<!--              <br/><span>This must be an integer</span>-->
            </div>
          </section>
          <section><label for="integer">Humedad</label>
            <div><input id="decimal" name="decimal" type="number" class="decimal"/>
<!--              <br/><span>This must be an integer</span>-->
            </div>
          </section>
          <section><label for="integer">Sal</label>
            <div><input id="decimal" name="decimal" type="number" class="decimal"/>
<!--              <br/><span>This must be an integer</span>-->
            </div>
          </section>
          <section><label for="integer">Grasa</label>
            <div><input id="decimal" name="decimal" type="number" class="decimal"/>
<!--              <br/><span>This must be an integer</span>-->
            </div>
          </section>
        </fieldset>
      </form>
      <hr>
      <button class="prev">Anterior</button><button class="next">Siguiente</button>
    </div>
    <div>
      <h3>Procesando</h3>
      <p>
        Espere un momento, su planilla est&aacute; siendo generada.
      <hr>
      <button class="prev">Anterior</button><button class="next">Siguiente</button>
      </p>
    </div>
    <div>
      <h3>Listo</h3>
      <p>
        Puede descargar su planilla haciendo click aqu&iacute;
      <hr>
      <button class="prev">Anterior</button>
      </p>
    </div>
<!--    <div>
      <h3>Confirmation</h3>
      <p>
        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
        Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
        ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
        lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
      <hr>
      <button class="prev">Anterior</button>
      </p>
    </div>-->
  </div>
</div>