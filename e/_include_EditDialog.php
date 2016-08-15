<?php if(!defined("VAL_YES")){ die('nope'); } ?>

<?php

function editDialogShow()
{
	?>
	<div class="row">
	   <form class="col s12">
	      <div class="row">
	         <div class="input-field col s12">
	            <div id="count_characters">Characters: --</div>
	         </div>
	         <div class="input-field col s12">
	            <input type="text" class="normal" id="title_input" placeholder="Titulo ..">
	         </div>
	         <div class="input-field col s12">
	            <label>Code:</label>
	            <div>
	               <textarea class="normal" id="dialog_edit_input" placeholder="Enter your code:"></textarea>
	               <hr class="barra-back">
	            </div>
	         </div>
	      </div>
	      <div class="input-field col s12">
	         <input type="text" class="normal" id="button_1" placeholder="Boton 1:">
	      </div>
	      <div class="input-field col s12">
	         <input type="text" class="normal" id="button_0" placeholder="Boton 0:">
	      </div>
	      <div class="input-field col s12" style="padding-top: 25px; padding-left: 15px; padding-bottom: 25px; border: 1px solid #ccc; margin-bottom: 5px;">
	         Color: <input class="jscolor" value="ab2567" id="box_colors"> 
	      </div>
	      <div class="input-field col s12">
	         <ul>
	            <li><div class="_boton-samp" style="padding: 5px; font-size: 14px;" id="add_n">Add \n</div></li>
	            <li><div class="_boton-samp" style="padding: 5px; font-size: 14px;" id="add_t">Add \t</div></li>
	            <li><div class="_boton-samp" style="padding: 5px; font-size: 14px;" id="add_all">Add color</div></li>
	         </ul>
	      </div>
	      <script>
	        $('#button_1').val('Accept');
	        $('#button_0').val('Cancel');
	         
	        $('.button_1_change').html($('#button_1').val());
	        $('.button_0_change').html($('#button_0').val());
	      </script>
	      <div class="input-field col s12" style="margin-top: 10px; border: 1px solid #ccc; padding: 10px;">
	         Codigo completo:
	         <div style="margin-top: 5px;">
	            <textarea id="code_dialog" disabled></textarea>
	            <hr class="barra-back">
	         </div>
	      </div>
	   </form>
	</div>
    <?php
}