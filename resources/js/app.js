import './bootstrap';
import '../sass/app.scss'; 

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
     // Your code to run since DOM is loaded and ready
    });

    // 遷移先のURLにリダイレクト
    $('.chat-item').on('click', function() {
        var chatId = $(this).data('chat-id');
        // window.location.href = '/chat/' + chatId; 
        window.location.href = '/home/' + chatId; 
    });

    $('.tab_box .tab_btn').click(function() {
        var index = $('.tab_box .tab_btn').index(this);
        $('.tab_box .tab_btn, .tab_box .tab_panel').removeClass('active');
        $(this).addClass('active');
        $('.tab_box .tab_panel').eq(index).addClass('active');
    });

    // スクロールバーを下に固定
    window.addEventListener('DOMContentLoaded', function() {
        let chatArea = document.getElementById('chat-area'),
        chatAreaHeight = chatArea.scrollHeight;
        chatArea.scrollTop = chatAreaHeight;
    });

    $(document).ready(function() {
        // メッセージフォームをAjaxで送信
        $('#sendMessageButton').click(function() {
            var message = $('#messageInput').val();
            var chat_room_id = $('#chat_room_id').val();
            var user_id = $('#user_id').val();
            
            // サーバーにメッセージを送信
            $.ajax({
                url: "{{ route('home.store') }}",
                method: "POST",
                data: { message: message,
                        chat_room_id: chat_room_id,
                        user_id: user_id},
                success: function(response) {
                    // メッセージの送信が成功した場合、必要に応じて何か処理を実行
                    $('#messageInput').val(''); // 入力フィールドをクリア
                },
                error: function(xhr) {
                    // エラーをハンドリング
                }
            });
        });
    });

    