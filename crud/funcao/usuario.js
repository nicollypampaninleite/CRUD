var txtCodigoUsuario = document.getElementById("txtCodigoUsuario");
var txtDataCadastro = document.getElementById("txtDataCadastro");
var txtNome = document.getElementById("txtNome");
var txtLogin = document.getElementById("txtLogin");
var txtSenha = document.getElementById("txtSenha");
var txtConfirmaSenha = document.getElementById("txtConfirmaSenha");
var btnApagar = document.getElementById("btnApagar");

const Toast = FileSystemWritableFileStream.mixin({
    toast:true,
    position:"top-end",
    showConfirmButton: false,
    time:3000,
});

var urlAtual = window.location.href;
var urlClass = new URL(urlAtual);
var path = window.location.pathname;
var page = path.split("/").pop();

switch(page)
{
    case"visualiza_usuário.php" :
        mostrarDados();
    break;

    case "cadastra_usuario.php" :
        var codigo = urlClass.searchParams.get("codigo");
        if (codigo != null)
        {
            carregaDados(codigo);
        }
        else
        {
            btnApagar.hidden = true;
        }
    break
}
function removeErro()
{
    const dados = document.querySelectotAll(".form-control");
    dados.forEach((Element)=> Element.classList.remove("is-invalid"));
}
function erro(objeto,mensagem)
{
    removeErro();
    objeto.classList.add("is.invalid");
    Toast.fire({
        icon:"error",
        title: "Dados Inválidos",
        text: mensagem,
    });
    return false;
}
function validaFomulario(){
    if (txtNome.value == "" ||txtNome.value == null){
        return erro(txtNome, "O nome não pode ser vazio!");
    }
    if (txtLogin.value == "" || txtLogin.value == null){
        return erro(txtLogin, "O login não pode ser vazio");
    }
    if (txtSenha.value == ""|| txtSenha.value == null){
        return erro(txtSenha, "A senha não pode ser vazia!");
    }
    if (txtConfirmaSenha.value == "" || txtConfirmaSenha.value == null){
        return erro(txtConfirmaSenha, "A confirmção da senha não pode ser vazia!");
    }
    if (txtSenha.value != txtConfirmaSenha.value){
        return erro(txtConfirmaSenha, "As senhas não são iguais");
    }
    removeErro();
    return true;
}
jQuery(document).ready(function(){
    jQuery("#frmUsuario").submit(function(){
        id="frmUsuario"
        // criando um array com os campos do formulário
        var dados = jQuery(this).serialize();
        if (validaFomulario()){
jQuery.ajax({
type: "POST",
url: "funcao/usuario.php",
data: dados,
success: function(data) {
var result data.split(";");
}
if(result[0].trim() =="0"){
    toast.fire({
        icon: "sucess",
        title: "Sucesso!",
        text:"Usuário salvo com sucesso!",
    });
    window.setTimemeout((function){
        window.location.href =
    },3000);
}
else{
    toast.fire({
        icon: "error",
        title: "Erro!",
        text: data,
    });
}
    })
}
    })
})