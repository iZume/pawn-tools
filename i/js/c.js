/* Creador de Dialogos por _Zume [04-07-2016 update]*/
jQuery.urlShortener.settings.apiKey = 'AIzaSyB0gTfcH9tlTH7iuZDLFsYZlaomR6QkXfc';

function urlParam(name) {
  var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);

  var fin = 'undefined';

  if (!jQuery.isEmptyObject(results)) {
    fin = results[1];

  }
  return fin;
}

var _lang = urlParam('lang');

var __getDialogUsed = getDialogType();
if (__getDialogUsed == 'DIALOG_STYLE_LIST') {
  var checkBoxIsEmpty = setInterval(function() {
    if ($("#dialog_edit_input").val().length < 1) {
      $('#agregar_resultado').html(sendExample(__getDialogUsed));
    }
  }, 500);
}

String.prototype.splice = function(idx, rem, str) {
  return this.slice(0, idx) + str + this.slice(idx + Math.abs(rem));
};

function refreshPreview() {
  var str = $('#dialog_edit_input').val();

  var print_caracteres = 0;
  if (str.length > 128) {
    print_caracteres = '<span style="color: red;">' + str.length + '</span>';
  }
  else if (str.length > 64) {
    print_caracteres = '<span style="color: orange;">' + str.length + '</span>';
  }
  else if (str.length > 32) {
    print_caracteres = '<span style="color: yellow;">' + str.length + '</span>';
  }
  else if (str.length > 0) {
    print_caracteres = '<span style="color: green;">' + str.length + '</span>';
  }
  else if (str.length < 1) {
    print_caracteres = 'cero';
  }
  $('#count_characters').html('Characters: ' + print_caracteres);

  var ul = '?q=dialogs&sub=' + __getDialogUsed + '&titulo=' + encodeURIComponent($('#title_input').val()) + '&mensaje=' + encodeURIComponent(str);
  var l = window.location.href.split('?')[0];
  var e = l.search("localhost");
  var np = null;

  if (e != -1) {
    l = siteOriginal;
  }

  var s = l + ul;
  
  jQuery.urlShortener({
    longUrl: s,
    success: function(shortUrl) {
      np = "?hash=" + shortUrl.substr(shortUrl.search('.gl/') + 4);
      history.pushState(null, null, np);
    },
    error: function(error) {
      np = ul;
      history.pushState(null, null, np);
    }
  });
  var temp = 'new str[' + str.length + '+1];\n\nformat(str, sizeof(str), "%s' + str;
  var conteo = 0;
  var i = 0;
  var res = '';
  for (i; i < str.length; i++) {
    if (temp.length > 0) {
      res += temp.substring(0, 200) + '", str);';
      temp = temp.substring(200);

      if (temp.length > 0) {
        res += '\nformat(str, sizeof(str), "%s';
      }
    }
  }
  if (res.charAt(res.length - 1) != ';') {
    res = res + '", str);';
  }
  res += '\n\n';
  if (str.length < 1)
    res = '';

  res += 'ShowPlayerDialog(playerid, ' + Math.floor(Math.random() * 1000) + 1 + ', ' + __getDialogUsed + ', "' + $('#title_input').val() + '", str, "' + $('#button_1').val() + '", "' + $('#button_0').val() + '");';

  var code = res;

  $('#code_dialog').html(code);

  $('.title_change').html(convertirDialogo($('#title_input').val()));
  $('#agregar_resultado').html(convertirDialogo(str, __getDialogUsed));
}

$(document).ready(function() {
  // LABEL
  var label_preview = $('#input-label-preview');
  var label_input = $('#textlabel-input');

  label_input.keyup(function() {
    label_preview.html(convertirDialogo(label_input.val(), 'DIALOG_STYLE_MSGBOX'));
  });
  $("#add_to_label_all").click(function() {
    label_input.val(function() {
      return label_input.val().splice(label_input.prop("selectionStart"), 0, "{" + $('#box_colors').val() + "}");
    });
    label_preview.html(convertirDialogo(label_input.val(), 'DIALOG_STYLE_MSGBOX'));
  });
  $('#add_to_label_n').click(function() {
    label_input.val(function() {
      return label_input.val().splice(label_input.prop("selectionStart"), 0, '\\n');
    });
    label_preview.html(convertirDialogo(label_input.val(), 'DIALOG_STYLE_MSGBOX'));
  });
  $('#add_to_label_t').click(function() {
    label_input.val(function() {
      return label_input.val().splice(label_input.prop("selectionStart"), 0, '\\t');
    });
    label_preview.html(convertirDialogo(label_input.val(), 'DIALOG_STYLE_MSGBOX'));
  });
  // DIALOGS
  if (urlParam('sub') == 'undefined') {
    $('.msg_box_example').html(sendExample('DIALOG_STYLE_MSGBOX'));
    $('.input_example').html(sendExample('DIALOG_STYLE_INPUT'));
    $('.list_example').html(sendExample('DIALOG_STYLE_LIST'));
    $('.password_example').html(sendExample('DIALOG_STYLE_PASSWORD'));
  }
  else {
    var mensaje = urlParam('mensaje');
    var titulo = urlParam('titulo');


    if (mensaje != 'undefined' && mensaje.length > 0) {
      $('#dialog_edit_input').val(decodeURIComponent(mensaje));

      refreshPreview();
    }
    else {
      if (__getDialogUsed !== 'DIALOG_STYLE_LIST') {
        $('#dialog_edit_input').val('Ejemplo de dialogo tipo ' + __getDialogUsed);
      }
      refreshPreview();
    }
    if (titulo != 'undefined' && titulo.length > 0) {
      $('#title_input').val(decodeURIComponent(titulo));

      refreshPreview();
    }
    else {
      $('#title_input').val('Titulo');

      refreshPreview();
    }

  }
  $("#add_all").click(function() {
    $('#dialog_edit_input').val(function() {
      return $('#dialog_edit_input').val().splice($('#dialog_edit_input').prop("selectionStart"), 0, "{" + $('#box_colors').val() + "}");
    });
    refreshPreview();
  });
  $("#add_n").click(function() {
    var id = $('#dialog_edit_input');
    $('#dialog_edit_input').val(function() {
      return id.val().splice(id.prop("selectionStart"), 0, '\\n');
    });
    refreshPreview();
  });
  $("#add_t").click(function() {
    var id = $('#dialog_edit_input');
    $('#dialog_edit_input').val(function() {
      return id.val().splice(id.prop("selectionStart"), 0, '\\t');
    });
    refreshPreview();
  });
  $('#button_1').on({
    keyup: function() {
      $('.button_1_change').html(convertirDialogo($(this).val()));

      refreshPreview();
    }
  });
  $('#button_0').on({
    keyup: function() {
      $('.button_0_change').html(convertirDialogo($(this).val()));

      refreshPreview();
    }
  });
  $('#button_0').on({
    keyup: function() {
      $('.button_0_change').html(convertirDialogo($(this).val()));

      refreshPreview();
    }
  });
  $('#dialog_edit_input').on({
    keyup: function() {
      refreshPreview();
    }
  });
  $('#title_input').on({
    keyup: function() {
      refreshPreview();
    }
  });
});
var messages = ["{FFFFFF}You'd like these dialogues more than others!", "{FF6200}SA:MP {FFFFFF}is created by {188C1E}Kalcor", "¡He! ¡Enter your password!"];

function getMessage() {
  return messages[Math.floor(Math.random() * messages.length)];
}

function sendExample(type = null) {

  switch (type) {
    case 'DIALOG_STYLE_MSGBOX':
      {
        return convertirDialogo(getMessage());
      }
    case 'DIALOG_STYLE_INPUT':
      {
        return convertirDialogo(getMessage());
      }
    case 'DIALOG_STYLE_PASSWORD':
      {
        return convertirDialogo('Ingrese su contraseña:');
      }
    case 'DIALOG_STYLE_LIST':
      {

        var al_list = ["Bananas", "Potatoes", "Tomatoes", "Mangoes", "Watermelon", "Vehicles", "Cookies", "Accounts", "Houses", "General"];

        var str = "<li>Primero</li>";
        var elegido = -1;
        var sat = false;

        var elementos = 15;
        var first = Math.floor((Math.random() * elementos) + 0);

        for (var i = 0; i < elementos; i++) {
          var show = Math.floor(Math.floor(Math.random() * al_list.length));

          if (first == i) {
            str = str + '<li class="active">' + al_list[show] + '</li>';
          }
          else {
            str = str + "<li>" + al_list[show] + "</li>";
          }

        }
        return convertirDialogo(str);
      }
  }
}

function convertirDialogo(val_, type) {
  val_ = val_.replace(/\\t/g, "<p class=\"create_t\"></p>");

  if (type !== 'DIALOG_STYLE_LIST') {
    val_ = val_.replace(/\\n/g, "<br />");
  }

  for (var i = 0; i < val_.length; i++) {
    var _list_created = false;
    if (type === 'DIALOG_STYLE_LIST') {
      var l_ = val_.charAt(i) == "\\" && val_.charAt(i + 1) == "n";
      if (i == 0 && l_ == false) {
        val_ = '<li>' + val_;
      }
      else {
        if (l_) {
          val_ = val_.replace(/\\n/g, '<li>');
        }
      }
    }
    var start = i;
    var end = i + 7
    if (val_.charAt(start) == '{' && val_.charAt(end) == '}') {
      var _col = val_.substring(start, end + 1);
      var __col = _col.substring(1, _col.length - 1);

      val_ = val_.replace(_col, "<span style=\"color: #" + __col + ";\">");
    }
  }
  return val_;
}

function getDialogType() {
  var type = null;

  if (urlParam('sub') !== 'undefined') {
    type = urlParam('sub');
  }
  return type;
}