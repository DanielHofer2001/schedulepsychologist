function login(){
    administrador_login();
    usuario_login();
}

function administrador_login(){
    var user, pwd;
    var user = document.getElementById("usuario").value;
    var pwd = document.getElementById("password").value;

    if (user == "daniel.hofer@inacapmail.cl" && pwd == "hofer")
    {
        window.location = "/SchedulePsychologist/public/clientes"
    }else{
        if (user == "francisco.gimenez@inacapmail.cl" && pwd == "gimenez")
        {
            window.location = "/SchedulePsychologist/public/clientes"
        }else{
            if (user == "huris.arevalo@inacapmail.cl" && pwd == "arevalo")
            {
                window.location = "/SchedulePsychologist/public/clientes"
            }
        }
    }
}

function usuario_login(){
    var user, pwd;
    var user = document.getElementById("usuario").value;
    var pwd = document.getElementById("password").value;

    if (user == "clientes" && pwd == "123") 
    {
        window.location = "/SchedulePsychologist/public/agendar"
    }
}
