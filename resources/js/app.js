require('./bootstrap');

require('alpinejs');
const list = document.querySelector('#chat');
const userlist= document.querySelector('#users');

(function($) {
    $('#chat-form').on('submit', function(event) {
        event.preventDefault();
        $.post($(this).attr('action'), $(this).serialize(), function(res) {
            $('#text').val('');
            const message= document.createElement('li');
            var today = new Date();

            var time = today.getHours() + ":" + today.getMinutes() ;

            message.innerHTML=
            `  <li class="me">
            <div class="entete">
                <h3>${time}</h3>
                <h2>You</h2>
                <span class="status blue"></span>
            </div>
            <div class="triangle"></div>
            <div class="message">
                ${res}
            </div>
        </li>`

        list.appendChild(message)


        })
    });


})(jQuery);
const chat0 = window.Echo.join(`chat`)
    .here((users) => {

         for (i in users) {
            const user = document.createElement('li');

             user.innerHTML=` <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
             <div>
               <a href=  /chat/${users[i].id} >
                 <h2>${users[i].name}</h2>
                 <h3 id= id${users[i].id}>
                     <span class="status green"></span>
                     online
                 </h3>
                 </a>
             </div>`
          userlist.appendChild(user );
         }
         }).joining((user) => {
            const item = document.querySelector(`#id${user.id}`)
            if(item != null){
            item.innerHTML=`  <span class="status green"></span>
            online`
            }else{
                const useritem = document.createElement('li');

                useritem.innerHTML=` <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
                 <div>
                   <a href= chat/${user.id} >
                     <h2>${user.name}</h2>
                     <h3 id= id${user.id}>
                         <span class="status green"></span>
                         online
                     </h3>
                     </a>
                 </div>`
              userlist.appendChild(useritem );
            }

        })  .leaving((user) => {
               const item = document.querySelector(`#id${user.id}`)
               item.innerHTML=`  <span class="status orange"></span>
               offline`
        })


const chat = window.Echo.join(`chat.${userId}`)

    .here((users) => {


    })
    .joining((user) => {


    })
    .leaving((user) => {

    })
    .listen('ChatMessage', (event) => {
        const ma= document.createElement('li')
        var today = new Date();
        var time = today.getHours() + ":" + today.getMinutes() ;
        ma.innerHTML=` <li class="you">
        <div class="entete">
            <span class="status green"></span>
            <h3>${time}</h3>
        </div>
        <div class="triangle"></div>
        <div class="message">
          ${event.message}
        </div>
    </li>`
list.appendChild( ma);
    })




