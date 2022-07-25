document.addEventListener('DOMContentLoaded', function() {

let formulario = document.querySelector("#formularioEventos");

    var calendarEl = document.getElementById('agenda'); 

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
       
      locale: "es",
      allDay:false,
      selectable: true,
      selectHelper: true,
      
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek'
      },
       

      eventTimeFormat: {
        hour: '2-digit',
        minute: '2-digit',
        hour12: true
       },

      
      //events : "http://localhost/SchedulePsychologist/public/evento/mostrar",

eventSources:{

  url:baseURL+"/evento/mostrar",
  method:"POST",
  extraParams:{
    _token: formulario._token.value,


  }

  
},
plugins: [ dayGridPlugin, interactionPlugin ],
  events: [
    {
      groupId: 'blueEvents', // recurrent events in this group move together
      daysOfWeek: [ '4' ],
      startTime: '10:45:00',
      endTime: '12:45:00'
    },
    {
      daysOfWeek: [ '3' ], // these recurrent events move separately
      startTime: '11:00:00',
      endTime: '11:30:00',
      color: 'red'
    }
  ],
  editable: true,


      

      dateClick:function(info){
        formulario.reset();

        formulario.start.value=info.dateStr;
        formulario.end.value=info.dateStr;
        formulario.hinicio.value=info.timeStr;
        formulario.hfinal.value=info.timeStr;

        $("#evento").modal("show");
      },

      eventClick:function(info){

          var evento= info.event; 
          console.log(evento)

          axios.post(baseURL+"/evento/editar/"+info.event.id).
          then(
            (respuesta)=>{
              
              formulario.id.value= respuesta.data.id;
              formulario.title.value= respuesta.data.title;

              formulario.descripcion.value= respuesta.data.descripcion;

              formulario.start.value= respuesta.data.start;
              formulario.end.value= respuesta.data.end;

              formulario.hinicio.value= respuesta.data.hinicio;
              formulario.hfinal.value= respuesta.data.hfinal;

              $("#evento").modal("show");
            }
            ).catch(
              error=>{
                if(error.response){
                  console.log(error.response.data);
                }
              }
            )
      }


    });
    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click",function(){
      
   enviarDatos("/evento/agregar");

    });

    document.getElementById("btnEliminar").addEventListener("click",function(){

    enviarDatos("/evento/borrar/" + formulario.id.value);  


    });

    document.getElementById("btnEditar").addEventListener("click",function(){

      enviarDatos("/evento/actualizar/" + formulario.id.value);
  
  
      });




  function enviarDatos(url){
    const datos= new FormData(formulario);
    
    nuevaURL = baseURL+url;

    axios.post(nuevaURL, datos).
     then(
       (respuesta)=>{
         calendar.refetchEvents();
         $("#evento").modal("hide");
       }
       ).catch(
         error=>{
           if(error.response){
             console.log(error.response.data);
           }
         }
       )
  }

  });