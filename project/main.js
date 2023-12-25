let mybutton = document.getElementById('my-btn'),
      myinput = document.getElementById('textbox3');
      mybutton.onclick = function(){
        'use strict'

        if ( this.textContent=== 'show password'){
            myinput.setAttribute('type', 'text');
            this.textContent='hide password';
         } else {
            myinput.setAttribute('type','password');
            this.textContent='show password';
          }
        }