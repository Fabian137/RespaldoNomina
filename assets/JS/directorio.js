var directorio=[
    {
        "CONSECUTIVO": 1,
        "NOMBRE": "Ana Maria Ramona Gal.. Estrada ",
        "PISO": 1,
        "EXTENSIÓN": 101
    },
    {
        "CONSECUTIVO": 2,
        "NOMBRE": "Angelica ... ",
        "PISO": 1,
        "EXTENSIÓN": 106
    },
    {
        "CONSECUTIVO": 3,
        "NOMBRE": "María Fabiola Hérnandez Montes",
        "PISO": 1,
        "EXTENSIÓN": 113
    },
    {
        "CONSECUTIVO": 4,
        "NOMBRE": "Sin asignación ",
        "PISO": 1,
        "EXTENSIÓN": 104
    },
    {
        "CONSECUTIVO": 5,
        "NOMBRE": "Itzel",
        "PISO": 1,
        "EXTENSIÓN": 117
    },
    {
        "CONSECUTIVO": 6,
        "NOMBRE": "Guadalupe Luna",
        "PISO": 1,
        "EXTENSIÓN": 105
    },
    {
        "CONSECUTIVO": 7,
        "NOMBRE": "Orlando",
        "PISO": 1,
        "EXTENSIÓN": 116
    },
    {
        "CONSECUTIVO": 8,
        "NOMBRE": "Tania",
        "PISO": 1,
        "EXTENSIÓN": 112
    },
    {
        "CONSECUTIVO": 9,
        "NOMBRE": "Ramon",
        "PISO": 1,
        "EXTENSIÓN": 108
    },
    {
        "CONSECUTIVO": 10,
        "NOMBRE": "Sin asignación",
        "PISO": 1,
        "EXTENSIÓN": 107
    },
    {
        "CONSECUTIVO": 11,
        "NOMBRE": "Ricardo Martinez",
        "PISO": 1,
        "EXTENSIÓN": 111
    },
    {
        "CONSECUTIVO": 12,
        "NOMBRE": "Sin asignación",
        "PISO": 1,
        "EXTENSIÓN": 103
    },
    {
        "CONSECUTIVO": 13,
        "NOMBRE": "Daniel",
        "PISO": 1,
        "EXTENSIÓN": 109
    },
    {
        "CONSECUTIVO": 14,
        "NOMBRE": "Tania Gonzales(?)",
        "PISO": 1,
        "EXTENSIÓN": 102
    },
    {
        "CONSECUTIVO": 15,
        "NOMBRE": "Edwin",
        "PISO": 1,
        "EXTENSIÓN": 100
    },
    {
        "CONSECUTIVO": 16,
        "NOMBRE": "Externa",
        "PISO": 2,
        "EXTENSIÓN": 201
    },
    {
        "CONSECUTIVO": 17,
        "NOMBRE": "Claudia Ramirez",
        "PISO": 2,
        "EXTENSIÓN": 204
    },
    {
        "CONSECUTIVO": 18,
        "NOMBRE": "Michael Adrian",
        "PISO": 2,
        "EXTENSIÓN": "Voz"
    },
    {
        "CONSECUTIVO": 19,
        "NOMBRE": "Norma Angelica",
        "PISO": 2,
        "EXTENSIÓN": "Voz"
    },
    {
        "CONSECUTIVO": 20,
        "NOMBRE": "Eva",
        "PISO": 2,
        "EXTENSIÓN": "Voz"
    },
    {
        "CONSECUTIVO": 21,
        "NOMBRE": "Bertaheri Tatiana",
        "PISO": 2,
        "EXTENSIÓN": "Voz"
    },
    {
        "CONSECUTIVO": 22,
        "NOMBRE": "Congelador",
        "PISO": 2,
        "EXTENSIÓN": 206
    },
    {
        "CONSECUTIVO": 23,
        "NOMBRE": "Eliazar Trejo",
        "PISO": 3,
        "EXTENSIÓN": 300
    },
    {
        "CONSECUTIVO": 24,
        "NOMBRE": "Jarilee",
        "PISO": 3,
        "EXTENSIÓN": 305
    },
    {
        "CONSECUTIVO": 25,
        "NOMBRE": "Victor",
        "PISO": 3,
        "EXTENSIÓN": 308
    },
    {
        "CONSECUTIVO": 26,
        "NOMBRE": "Mari",
        "PISO": 3,
        "EXTENSIÓN": 304
    },
    {
        "CONSECUTIVO": 27,
        "NOMBRE": "Editk",
        "PISO": 3,
        "EXTENSIÓN": 311
    },
    {
        "CONSECUTIVO": 28,
        "NOMBRE": "Denis",
        "PISO": 4,
        "EXTENSIÓN": 401
    },
    {
        "CONSECUTIVO": 29,
        "NOMBRE": "Javier",
        "PISO": 4,
        "EXTENSIÓN": 403
    },
    {
        "CONSECUTIVO": 30,
        "NOMBRE": "America",
        "PISO": 4,
        "EXTENSIÓN": 405
    },
    {
        "CONSECUTIVO": 31,
        "NOMBRE": "Lizet",
        "PISO": 4,
        "EXTENSIÓN": 400
    },
    {
        "CONSECUTIVO": 32,
        "NOMBRE": "Hugo",
        "PISO": 4,
        "EXTENSIÓN": 204.02
    },
    {
        "CONSECUTIVO": 33,
        "NOMBRE": "Sala de juntas",
        "PISO": 5,
        "EXTENSIÓN": 503
    }

];
var directorioShow = document.querySelector('.direct');
var total = 0;

for(i=0; i<directorio.length; i++){
  var directInfo = directorio[i]
  directorioShow.innerHTML += `
    <tr>
        <th>${directInfo.CONSECUTIVO}</th>
        <td>${directInfo.NOMBRE}</td>
        <td>${directInfo.PISO}</td>
        <td>${directInfo.EXTENSIÓN}</td>
    </tr>`
  }