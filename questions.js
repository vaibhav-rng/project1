function selOp(a){
    console.log(a);
    var all = document.getElementsByClassName('leftOP');
    for (var i = 0; i < all.length; i++) {
        all[i].style.backgroundColor = "rgb(201, 165, 201)";
    }
    switch(a){
        case 1: var sel = document.getElementById("opA");break;
        case 2: var sel = document.getElementById("opB");break;
        case 3: var sel = document.getElementById("opC");break;
        case 4: var sel = document.getElementById("opD");break;
    }
    sel.style.backgroundColor="rgb(79, 31, 130)";
}
setInterval(timer,1000)
var temp = 599;
function timer(){ 
    var min = Math.floor(temp/60);
    var sec = temp%60;
    if(sec < 10){
        var st = "0"+ min.toString() +":0"+ sec.toString();
    }
    else{
        var st = "0"+ min.toString() +":"+ sec.toString();
    }
    temp = temp - 1;
    document.getElementById("timer").value = st;
}
ind = 0;
const Questions = ["Question 1","Question 2","Question 3","Question 4","Question 5","Question 6","Question 7","Question 8","Question 9","Question 10"]
function slide(dir){
        switch(dir){
        case 1:
            if(ind >=0 && ind<9){
            ind++;
            document.getElementById("questions").innerHTML = Questions[ind];
            }
            break;
        case 0:
            if(ind > 0 && ind<10){
            ind--;
            document.getElementById("questions").innerHTML = Questions[ind];
            }
            break;
    }
}