<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="es">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../../css/opcionLateral.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <nav>
         <ul>
            <li><a class = "op" href="javascript:void(0)" onclick="myFunction('../../docs/prueba1.pdf')"><i class="fab"><ion-icon name="alert-circle-outline"></ion-icon></i><span>Matriz de riesgos</span></a></li>
            <li><a class = "op dos" href="javascript:void(0)" onclick="myFunction('../../docs/prueba1.pdf')"><i class="fab"><ion-icon name="checkbox-outline"></ion-icon></i><span>Cumplimiento de objetivos</span></a></li>

            <li><a class = "op" href="javascript:void(0)" onclick="myFunction('../../docs/prueba1.pdf')"><i class="fab"><ion-icon name="bar-chart-outline"></ion-icon></i><span>Analisis Foda</span></a></li>
            <li><a class = "op" href="javascript:void(0)" onclick="myFunction('../../docs/prueba1.pdf')"><i class="fab"><ion-icon name="receipt-outline"></ion-icon></i><span>Ficha de proceso</span></a></li>
         </ul>
      </nav>
      
    <script>
		    function myFunction(pdfURL) {
		        var ventana = window.open('', '_blank');
		        ventana.document.write('<title>Visualizar archivo</title>'); // Título por defecto
		        ventana.document.write('<style>body { margin: 0px; }</style>'); // Cambia el margen del body
                ventana.document.write('<embed width="100%" height="100%"src="' + pdfURL + '" type="application/pdf">');
                ventana.document.close();
            }  
		</script>  
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   </body>
</html>