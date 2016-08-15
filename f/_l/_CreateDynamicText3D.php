<?php if(!defined("VAL_YES")){ die('nope'); } ?>
<style>
img{ max-width: 100%; }
</style>

<div style="text-align: center;">
   <div class="animated fadeIn">
      <p>
      <div class="preview-label">
         <div class="preview-label-real" style="background-image: url(i/img/label.gif);">
            <p style="padding-top: 120px;">
            <div style="font-size: 9.5px; word-wrap: break-word;" id="input-label-preview" ></div>
            </p>
         </div>
      </div>
      </p>
      <div style="text-align: left;">
         <label>Code:</label>
         <textarea id="textlabel-input" placeholder="Ingresa un texto!"></textarea>
         <hr class="barra-back">
         <div class="input-field col s12" style="padding-top: 25px; padding-left: 15px; padding-bottom: 25px; border: 1px solid #ccc; margin-bottom: 5px;">
            Color: <input class="jscolor" value="AB1818" id="box_colors"> 
         </div>
         <div class="input-field col s12">
            <ul>
               <li>
                  <div class="_boton-samp" style="padding: 5px; font-size: 14px;" id="add_to_label_n">Add \n</div>
               </li>
               <li>
                  <div class="_boton-samp" style="padding: 5px; font-size: 14px;" id="add_to_label_t">Add \t</div>
               </li>
               <li>
                  <div class="_boton-samp" style="padding: 5px; font-size: 14px;" id="add_to_label_all">Add color</div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<script>
   $('#input-label-preview').html(convertirDialogo('{8db0cd}¡Propiedad en venta!\\n{ffffff}Zona: {dfde96}Idlewood\\n\\n{ffffff}Ingresa {dfde96}/comprar casa {ffffff}para adquirir esta propiedad.\\nPresiona {dfde96}"N" {ffffff}para obtener mas informacion.'));
</script>