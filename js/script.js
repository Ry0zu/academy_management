// VALIDAR FORMULARIO DE REGISTRO (BOOTSTRAP)
function validar_registro() {
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    //Validar DNI
                    if (!nif(document.getElementById("dni_usuario").value)) {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("dni_usuario").value = "";
                    }
                    //Validar password
                    if (document.getElementById("pass_usuario").value != document.getElementById("pass2_usuario").value) {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("pass_usuario").value = "";
                        document.getElementById("pass2_usuario").value = "";
                    }

                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
}


///// Validar DNI

function nif(dni) {
    var numero
    var letr
    var letra
    var expresion_regular_dni

    expresion_regular_dni = /^\d{8}[a-zA-Z]$/;

    if (expresion_regular_dni.test(dni) == true) {
        numero = dni.substr(0, dni.length - 1);
        letr = dni.substr(dni.length - 1, 1);
        numero = numero % 23;
        letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        letra = letra.substring(numero, numero + 1);
        if (letra != letr.toUpperCase()) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}


// VALIDAR FORMULARIO DE LOGIN (BOOTSTRAP)
function validar_login() {
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {



                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
}


// FUNCION DESPLAZAMIENTO MENU //

posicionarMenu();

$(window).scroll(function() {
    posicionarMenu();
});

function posicionarMenu() {
    var altura_del_header = $('.header').outerHeight(true);
    var altura_del_menu = $('.navi').outerHeight(true);

    if ($(window).scrollTop() >= altura_del_header) {
        $('.navi').addClass('fixed');
        $('.contenido').css('margin-top', (altura_del_menu) + 'px');
    } else {
        $('.navi').removeClass('fixed');
        $('.contenido').css('margin-top', '0');
    }
}



// VALIDAR NUEVO CURSO //
function validar_add() {
    (function() {
        'use strict'
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {

                    /*Validar fechas inicio-fin*/
                    let fechainicial = document.getElementById("fecha_inicio_curso").value;
                    let fechafinal = document.getElementById("fecha_fin_curso").value;

                    if (Date.parse(fechafinal) < Date.parse(fechainicial)) {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("fecha_inicio_curso").value = "";
                        document.getElementById("fecha_fin_curso").value = "";
                    }

                    /*Validar horas inicio-fin*/
                    let horainicial = document.getElementById("horario_inicio_curso").value;
                    let hora_inicial_array = horainicial.split(":");
                    let minutos_iniciales = hora_inicial_array[0] * 60 + hora_inicial_array[1];

                    let horafinal = document.getElementById("horario_fin_curso").value;
                    let hora_final_array = horafinal.split(":");
                    let minutos_finales = hora_final_array[0] * 60 + hora_final_array[1];

                    if (parseInt(minutos_iniciales) > parseInt(minutos_finales)) {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("horario_inicio_curso").value = "";
                        document.getElementById("horario_fin_curso").value = "";
                    }

                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
}


/// Llamadas AJAX - Delete curso //

function borrar_curso(id_curso){
    var objXMLHttpRequest = new XMLHttpRequest();
    objXMLHttpRequest.onreadystatechange = function() {
        if (objXMLHttpRequest.readyState === 4){
            if (objXMLHttpRequest.status === 200){
                location.reload();
            } else{
                alert('Error Code: ' + objXMLHttpRequest.status);
                alert('Error Message: ' + objXMLHttpRequest.statusText);
            }
        }
    }
    objXMLHttpRequest.open('GET', 'php/borrar_curso.php?id_curso=' + id_curso);
    objXMLHttpRequest.send();
}