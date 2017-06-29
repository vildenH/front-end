 function addLoadEvent(func) {
     var oldFun = window.onload;
     if (typeof window.onload != 'function') {
         window.onload = func;
     } else {
         window.onload = function () {
             oldFun();
             func();
         }
     }
 }