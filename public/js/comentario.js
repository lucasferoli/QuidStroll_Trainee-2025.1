var input = document.querySelector('.inputComentario');
var result = document.querySelector('.inputCaracteres');
var limit = 70;
result.textContent = 0 + '/' + limit;


input.addEventListener (
    'input', 
    function(){
        var textLength = input.value.length;
        result.textContent = textLength + '/' + limit;
        if(textLength > 0){
            document.querySelector('.botaoEnviarComentario').style.display = "flex";
        }
        else{
            document.querySelector('.botaoEnviarComentario').style.display = "none";

        }
}
);