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
    
          
    
    
          eventClick:function(info){
    
              var cliente= info.event; 
              console.log(evento)
    
              axios.post(baseURL+"/cliente/editar/"+info.event.id).
              then(
                (respuesta)=>{
                  
                  formulario.id.value= respuesta.data.id;
                  formulario.nombre.value= respuesta.data.nombre;
    
                  formulario.apellido.value= respuesta.data.apellido;
    
                  formulario.email.value= respuesta.data.email;
                  formulario.telefono.value= respuesta.data.telefono;
    
                  formulario.psicologo.value= respuesta.data.psicologo;
                  formulario.eventoid.value= respuesta.data.eventoid;
    
                  $("#cliente").modal("show");
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