require('./bootstrap');

require('alpinejs');
const list = document.querySelector('#chat');
const userlist= document.querySelector('#users');
const chat0 = window.Echo.join(`chat`)
    .here((users) => {

         for (i in users) {
            const user = document.createElement('li');

             user.innerHTML=` <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
             <div>
                 <h2>${users[i].name}</h2>
                 <h3>
                     <span class="status orange"></span>
                     online
                 </h3>
             </div>`
          userlist.appendChild(user );
         }
         });


const chat = window.Echo.join(`chat.${userId}`)

    .here((users) => {


    })
    .joining((user) => {

    })
    .leaving((user) => {

    })
    .listen('ChatMessage', (event) => {
        const ma= document.createElement('li')

        ma.innerHTML=` <li class="you">
        <div class="entete">
            <span class="status green"></span>
            <h2>Vincent</h2>
            <h3>10:12AM, Today</h3>
        </div>
        <div class="triangle"></div>
        <div class="message">
          ${event.message}
        </div>
    </li>`
list.appendChild( ma);
    })

