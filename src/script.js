// Función para manejar la lógica de mostrar/ocultar respuestas
function CambiarEstadoRespuesta(pregunta, respuesta) {

    const respuestas = document.querySelectorAll('.respuesta');
    

    respuestas.forEach(OtraRespuesta => {
        if(OtraRespuesta !== respuesta){
            OtraRespuesta.style.display = 'none';
            
            let spanOtraRespuesta = OtraRespuesta.previousElementSibling.querySelector('span');

            

            

            

            spanOtraRespuesta.querySelector('i').classList.replace('fa-minus', 'fa-plus');
            spanOtraRespuesta.querySelector('i').style.color = 'black';

            
        }

    })

    respuesta.style.display = respuesta.style.display === 'none' ? 'block' : 'none';


    
    
    let span  = pregunta.querySelector('span');
    
    

    if (span.querySelector('i').classList.contains('fa-plus')) {
        span.querySelector('i').classList.replace('fa-plus', 'fa-minus');
        span.querySelector('i').style.color = 'red';
        
        

    } else {
        span.querySelector('i').classList.replace('fa-minus', 'fa-plus');
        span.querySelector('i').style.color = 'black';
        
        
        
    }
    

}

// Asociar eventos a todas las preguntas
for (let i = 1; i <= 7; i++) {
    const preguntaId = `pregunta_${i}`;
    const respuestaId = `respuesta_${i}`;


    

    const pregunta = document.getElementById(preguntaId);
    const respuesta = document.getElementById(respuestaId);

    pregunta.addEventListener("click", () => {
        CambiarEstadoRespuesta(pregunta, respuesta);
        
    });
}


