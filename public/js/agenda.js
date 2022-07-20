document.addEventListener('DOMContentLoaded', function() {

let formulario = document.querySelector("form");



    var calendarEl = document.getElementById('agenda'); 

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',

      locale: "es",
      displayEventTime:false,
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek'
      },
        selecttable: true,
        selectmirror: true,
        allDaySlot: false,

      eventTimeFormat: {
        hour: '2-digit',
        minute: '2-digit',
        hour12: true
       },

      

      events : "http://localhost/SchedulePsychologist/public/evento/mostrar",

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

          axios.post("http://localhost/SchedulePsychologist/public/evento/editar/"+info.event.id).
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
      
   enviarDatos("http://localhost/SchedulePsychologist/public/evento/agregar");

    });

    document.getElementById("btnEliminar").addEventListener("click",function(){

    enviarDatos("http://localhost/SchedulePsychologist/public/evento/borrar/" + formulario.id.value);  


    });

    document.getElementById("btnEditar").addEventListener("click",function(){

      enviarDatos("http://localhost/SchedulePsychologist/public/evento/actualizar/" + formulario.id.value);
  
  
      });




  function enviarDatos(url){
    const datos= new FormData(formulario);
    
    axios.post(url, datos).
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