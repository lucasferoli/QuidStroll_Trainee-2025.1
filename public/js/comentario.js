var input = document.querySelector('.inputComentario');
var result = document.querySelector('.inputCaracteres');
var limit = 70;
result.textContent = 0 + '/' + limit;


input.addEventListener (
    'input', 
    function(){
        var textLength = input.value.length;
        result.textContent = textLength + '/' + limit;
}
);