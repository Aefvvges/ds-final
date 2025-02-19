Desarrollo de sistemas. Examen final 
Desarrollar el examen respetando la arquitectura propuesta en clase (https://github.com/N74Mmerino/arquitectura-propuesta). Solamente dejar los archivos necesarios.
Ejercicio 
Se está trabajando en un sistema de gestión de clientes y estamos realizando una API. 
En uno de los requerimientos, se pide exponer un endpoint para poder consultar un cliente por id.
Url: api/clientes/consultar.php | Method: get | Parámetro a recibir por GET: id.
Se debe recibir el id y devolver un JSON similar al siguiente (con los mismos datos): 
{
  "DatosCliente": {
    "Id": [id enviado por get],
    "Cuit": "27361234560",
    "Nombre": "Juana",
    "Apellido": "Coslay",
    "NumeroDocumento": 36123456,
    "Genero": "Sin indicar",
    "FechaNacimiento": "2024-11-26",
    "ActividadComercial": {
      "Id": 1,
      "Descripcion": "Empleado"
    },
    "ListDirecciones": [
    
      {
        "Id": 1,
        "Calle": "Laprida",
        "NumeroCalle": "123",
        "Localidad": {
          "Id": 1,
          "Descripcion": "Rosario",
          "Provincia": {
            "Id": 1,
            "Descripcion": "Santa Fe"
          }
        }
      },
      {
        "Id": 2,
        "Calle": "Buenos Aires",
        "NumeroCalle": "1234",
        "Localidad": {
          "Id": 2,
          "Descripcion": "San Nicolas de los Arroyos",
          "Provincia": {
            "Id": 2,
            "Descripcion": "Buenos Aires"
          }
        }
      }
    ]
  }
}
