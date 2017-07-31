/**
 * Created by Артём on 30.07.2017.
 */
var isOperation = false;
var isOperationNow = false;
var isError = false;
var screen = $('.screen')[0];

var send = {
    "num1":'',
    "num2":'',
    "operator":''
};

$('.clear').on('click',function (e) {
    clearScreen();
    resetCalc();
    isError = false;
});

$('.num').on('click',function (e) {
    if(isOperation) {
        disabledOperation(true);
        if(isOperationNow){
            clearScreen();
        }
    }else{
        disabledOperation(false);
    }
    isError ? clearScreen() : false;
    show(e.target.id);
    isError = isOperationNow = false;
});

$('.operation').on('click',function (e) {
    send.num1 = screen.value;
    send.operator = e.target.id;

    clearScreen();
    show(e.target.id);
    disabledOperation(true);
    isOperation = isOperationNow = true;
});

$('#equals').on('click',function (e) {
    send.num2 = screen.value;
    clearScreen();
    if(isOperationNow || send.num2 === ''){
        isError = true;
        show('Error')
    }else{
        $.ajax({
            type: "GET",
            url: '/result',
            data: {'num1' : send.num1, 'num2' : send.num2, 'operator' : send.operator},
            success: function( msg ) {
                screen.value = msg;
            }
        });
    }
    resetCalc();
    disabledOperation(false);
});

function disabledOperation(val) {
    $('.operation').attr('disabled',val);
}

function resetCalc() {
    isOperation = isOperationNow = false;
    disabledOperation(true);
}

function clearScreen() {
    screen.value = '';
}

function show(something) {
    screen.value += something;
}