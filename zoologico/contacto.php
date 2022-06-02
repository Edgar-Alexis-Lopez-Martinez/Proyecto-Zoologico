 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>
     <h1>Contacto</h1>
     <form method="get" action="procesarformulario.html">
         <label>Nombre</label>
         <input type="text" name="nombre" /> <br />
         <label>Apellidos</label>
         <input type="text" name="apellidos" /> <br />
         <label>Correo</label>
         <input type="email" name="correo" /> <br />
         <label>Fecha de nacimiento</label>
         <input type="date" name="nacimiento" /> <br />
         <select name="tipo">
             <option value="1">Comentario</option>
             <option value="2">Duda</option>
             <option value="3">Felicitación</option>
         </select> <br />
         <label for="">Programación</label>
         <input type="checkbox" name="interes" value="1" />
         <label for="">Base de datos</label>
         <input type="checkbox" name="interes" value="2" />
         <label for="">Redes</label>
         <input type="checkbox" name="interes" value="3" /> <br />
         <input type="password" name="contrasena" />
         <input type="hidden" name="escondido" value="ya vamonos" />
         <input type="submit" name="enviar" value="enviar información" />
     </form>
 </body>

 </html>