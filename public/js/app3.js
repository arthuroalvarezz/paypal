
$(document).ready( function () {
    $('#table_id').DataTable({
      "columnDefs": [
        { "orderable": false, "targets": [7,8,9] }
      ],
        "language": {
            "paginate": {
                "previous": "Anterior",
                "next": "Siguiente"
              },
            "search": "Buscar",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados - lo sentimos",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)"
        }
    });

    

    $('#table_workshops').DataTable({
      "columnDefs": [
        { "orderable": false, "targets": [5,6] }
      ],
        "language": {
            "paginate": {
                "previous": "Anterior",
                "next": "Siguiente"
              },
            "search": "Buscar",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados - lo sentimos",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)"
        }
    });

    $('#table_id_emails').DataTable( {
      dom: 'Bfrtip',
      buttons: [
      {
        extend: 'excelHtml5', 
        text: '<i class="fas fa-file-excel"></i> Exportación',
        titleAttr: 'Exportar a Excel',
        filename: function(){
          var today = new Date();
          var dd = String(today.getDate()).padStart(2, '0');
          var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
          var yyyy = today.getFullYear();

          today = dd + '/' + mm + '/' + yyyy;
          return 'Mensajes_' + today;
      },
        className: 'btn btn-lg btn-success'
      },
      ],
      "language": {
        "paginate": {
            "previous": "Anterior",
            "next": "Siguiente"
          },
        "search": "Buscar",
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados - lo sentimos",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "infoEmpty": "No hay registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)"
    }
  } );

  $('#table_id_webinars').DataTable( {
    dom: 'Bfrtip',
    buttons: [
    {
      extend: 'excelHtml5', 
      text: '<i class="fas fa-file-excel"></i> Exportación',
      titleAttr: 'Exportar a Excel',
      filename: function(){
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = dd + '/' + mm + '/' + yyyy;
        return 'Registro_Webinars_' + today;
    },
      className: 'btn btn-lg btn-success'
    },
    ],
    "language": {
      "paginate": {
          "previous": "Anterior",
          "next": "Siguiente"
        },
      "search": "Buscar",
      "lengthMenu": "Mostrar _MENU_ registros",
      "zeroRecords": "No se encontraron resultados - lo sentimos",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "No hay registros",
      "infoFiltered": "(filtrado de un total de _MAX_ registros)"
  }
} );


    $("#input-2").fileinput({
      language: 'es',
      theme: "fa",
      uploadUrl: "../resena_eventos_privados_img",
      uploadExtraData:function(){
        return{
          _token:$("input[name='_token']").val(),
          tallerID:$("input[name='tallerID']").val()
        };
      },
      allowedFileExtensions: ["jpg", "png", "jpeg"],
      overwriteInitial:false,
      maxFileSize:2000,
      maxFileNum:3,
      slugCallback:function(filename){
        return filename.replace('(','_').replace(']','_');
      } 
    });


        $("#input-abiertos").fileinput({
      language: 'es',
      theme: "fa",
      uploadUrl: "../resena_eventos_abiertos_img",
      uploadExtraData:function(){
        return{
          _token:$("input[name='_token']").val(),
          tallerID:$("input[name='tallerID']").val()
        };
      },
      allowedFileExtensions: ["jpg", "png", "jpeg"],
      overwriteInitial:false,
      maxFileSize:2000,
      maxFileNum:3,
      slugCallback:function(filename){
        return filename.replace('(','_').replace(']','_');
      }
    });


    $('input[type="radio"]').click(function(){
            if($(this).attr("value")=="No"){
                $(".calleExistente").hide('slow');
                $(".calle").show('slow');                
                $(".ciudad").show('slow');                
                $(".estado").show('slow');                
                $(".pais").show('slow');
                $(".url").show('slow');
                
                document.getElementById("inputAddStreet").required = false;
                document.getElementById("street").required = true;
                document.getElementById("city").required = true;
                document.getElementById("country").required = true;
                document.getElementById("url").required = true;

            }
            if($(this).attr("value")=="Sí"){

                $(".calleExistente").show('slow');
                $(".calle").hide('slow');                
                $(".ciudad").hide('slow');                
                $(".estado").hide('slow');                
                $(".pais").hide('slow');
                $(".url").hide('slow');

                document.getElementById("inputAddStreet").required = true;
                document.getElementById("street").required = false;
                document.getElementById("city").required = false;
                document.getElementById("country").required = false;
                document.getElementById("url").required = false;

            }        
        });

        $('#inputGroupFile01').on('change',function(){ 
          //get the file name 
          var fileName = $(this).val(); 
          // removing the fake path (Chrome) 
          fileName = fileName.replace("C:\\fakepath\\", ""); 
          //replace the "Choose a file" label 
          $(this).next('.custom-file-label').html(fileName); 
        });

        $('#inputGroupFile02').on('change',function(){ 
          //get the file name 
          var fileName = $(this).val(); 
          // removing the fake path (Chrome) 
          fileName = fileName.replace("C:\\fakepath\\", ""); 
          //replace the "Choose a file" label 
          $(this).next('.custom-file-label').html(fileName); 
        });

        $('#inputGroupFile01Edit').on('change',function(){ 
          //get the file name 
          var fileName = $(this).val(); 
          // removing the fake path (Chrome) 
          fileName = fileName.replace("C:\\fakepath\\", ""); 
          //replace the "Choose a file" label 
          $(this).next('.custom-file-label').html(fileName); 
        });

        $('#inputGroupFile02Edit').on('change',function(){ 
          //get the file name 
          var fileName = $(this).val(); 
          // removing the fake path (Chrome) 
          fileName = fileName.replace("C:\\fakepath\\", ""); 
          //replace the "Choose a file" label 
          $(this).next('.custom-file-label').html(fileName); 
        });

});

(function() {
  'use strict';
  window.addEventListener('load', function() {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName('needs-validation');
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
  form.addEventListener('submit', function(event) {
    
  if (form.checkValidity() === false /*&& CKEDITOR.instances.descripcion.getData() == ""*/) {
    //$(".pais").show('slow');
    event.preventDefault();
  event.stopPropagation();
  }

  form.classList.add('was-validated');
  }, false);
  });
  }, false);
  })();