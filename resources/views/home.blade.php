<x-layout>
    <x-slot name="title">
        ChatRooms | My Chat
    </x-slot>
    <x-header/>    
    <style>
        @media screen and (min-width: 768px){
            body{
                margin: 0;
                padding-left: calc(var(--nav-width) + 10px);
            }

            #chat-left {
                margin: calc(var(--header-height)) 0 0 0;
            }

            #chat-center {
                margin-top: 8px;
                background-color: var(--white-color);
            }
        }
        
        @media (min-width: 600px) {
            #chat-parant {
                display: flex;
            }
            #chat-left {
                /* flex-grow: 1; */
            }
            #chat-center {
                flex-grow: 6;
                background-color: var(--white-color);
            }
            #chat-right {
                flex-grow: 2;
            }
        }

        /*タブ実装*/

        .chat-area {
            /* max-width: 730px;
            min-width: 730px; */
            background-color:var(--white-color);
        }

        .tab_box .btn_area {
            /* margin:0 10px; */
            /* display: -webkit-box; */
            /* display: flex; */
            /* max-width: 430px;
            min-width: 430px; */
        }

        .tab_box .tab_btn {
            /* width: 300px; */
            /* padding: 8px 0; */
            /* color: #333;
            background: #f5f7f8; */
            /* text-align: center; */
            cursor: pointer;
            transition: all 0.2s ease 0s;
        }

        .tab_box .tab_btn + .tab_btn {
            /* margin-left: 8px; */
        }

        .tab_box .tab_btn:hover {
            background-color: #dce1e4;
        }

        .tab_box .tab_btn.active {
            background: linear-gradient(to right, #4723D9, #6E3DEA);
            color:#fff;
        }

        .tab_box .panel_area {
            border: solid 1px #e3ebf3;
            padding: 20px;
        }

        .tab_box .tab_panel {
            display:none;
        }

        .tab_box .tab_panel.active {
            display:block;
        }

        .tab_box .active::before{
            background-color: #4723D9;
        }
    </style>


    <div id="chat-parant">
        
        <div id="chat-left">
            <dir class="card-header left-title m-0 me-2" style="width:250px;">
                <h5 class="mx-auto mb-0 fw-bolder">チャット</h5>
            </dir>

            {{-- 検索
            <div class="d-flex mb-4 justify-content-center">
                <div class="search d-flex justify-content-center">
                    <input type="text" class="search-input mt-0" placeholder="search..." name="" style="width: 100px;">
                    <a href="#" class="search-icon">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div> --}}

            <div class="tab_box" style="width:250px">
                <div class="btn_area" style="width:100%">
                    <div class="left-content" style="width:100%">
                        <div class="height-100" style="width:100%;">
                            @if (!empty($members))
                                @foreach ($members as $member) 
                                    <div id='chat-item' class="tab_btn chat-item card m-0 pb-0 border-top-0 border-start-0 border-end-0 rounded-0" data-chat-id="{{ $member['chat_id'] }}" style="height:60px; overflow:hidden;">
                                        <div class="card-body" style="display: contents; max-height:10px;">
                                            <div class="row" style="justify-content: space-between;">
                                                <div class="card-image col-3 mx-auto mt-3" style="max-width:60px;">
                                                    <a href="{{ url('/chat_profile') }}">
                                                        {{-- <img src="{{ asset('storage/app/public/image/kkrn_icon_user_1.png') }}" alt="" style="height:42px; width:42px; background-color:#d4d4d4; border-radius:50px;"> --}}
                                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" style="height:42px; width:42px; background-color:#d4d4d4; border-radius:50px;">
                                                    </a>
                                                </div>
                                                <div class="card-content col-7">
                                                    <div class="d-flex" style="justify-content: space-between;">
                                                        <h5 class="card-title pt-3 p-0" style="border:none; font-size: 14px;">{{ $member['user']['name'] }}</h5>
                                                        @if (!empty($member['latest_message']['created_at']))
                                                            <p class="card-meta pt-3 pe-2 me-1">{{  $member['latest_message']['created_at']->format('H:i') }}</p>                                                    
                                                        @endif
                                                    </div>
                                                    <p class="card-text" style="max-height:50px; max-width:90px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-size: 11px; white-spece:nowrap; text-overflow: ellipsis;">{{ $member['latest_message']['message'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="chat-center">
            <div class="page-content page-container me-1" id="page-content" style="background-color: var(--white-color);">
                <div class="row d-flex justify-content-center m-0" style="background-color: var(--white-color);">
                    <div class="p-0" style="background-color: var(--white-color);">
                        <div class="card m-0" style="width:100% !important; box-shadow: none;">
                            <div class="card-header sticky-top" style="height:60px; width:100% !important; background-color: var(--white-color); border:none; box-shadow:none;">
                                <h4 class="card-title">
                                    @if (!empty($receiver))
                                    <a href="{{ url('/chat_profile') }}">
                                        <img class="avatar" src="../../storage/kkrn_icon_user_2.png" alt="..." style="height:40px; width:40px;">
                                    </a>
                                        <strong class="ms-3 fw-bold" style="text-align:center; font-size:20px;">{{ $receiver->name }}</strong>
                                    @endif
                                </h4>
                            </div>
                            <div class="chat-area" style="height:auto;">
                                <div id="chat-area" class="ps-container ps-theme-default ps-active-y">
                                    @if (!empty($messages))    
                                        @foreach ($messages as $key => $message)
                                            @if ($message->user_id === $sender)
                                                <div class="media media-chat media-chat-reverse p-0">
                                                    <div class="media-body" style="justify-content: flex-end;">
                                                        <p class="meta">{{ $message->created_at->format('H:i') }}</p>
                                                        <div id='message-container' class="media-text m-0">
                                                            <p id="media-chat-reverse-message">{{ $message->message }}</p>
                                                            <input type="hidden" id="message-id" data-message-id="{{ $message->id }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="media media-chat p-0">
                                                    <a href="{{ url('/chat_profile') }}">
                                                        <img class="avatar" src="../../storage/kkrn_icon_user_2.png" alt="..." style="height:26px; width:26px;">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-text m-0">
                                                            <p id="media-chat-message" style="border-radius: 2px 20px 20px 14px;">{{ $message->message }}</p>
                                                            <input type="hidden" id="message-id" data-message-id="{{ $message->id }}">
                                                        </div>
                                                        <p class="meta">{{ $message->created_at->format('H:i') }}</p>
                                                    </div>
                                                </div>    
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                <form id="message-form" method="POST">
                                    <div class="publisher border-light bottom-0 mx-auto" style="height:50px; width:100% !important;">
                                        <img class="avatar avatar-xs" src="../../storage/kkrn_icon_user_3.png" alt="...">
                                        @csrf
                                        @if (!empty($chatRoomId))                                            
                                            <input type="hidden" id="chat_room_id" name="chat_room_id" value="{{ $chatRoomId }}">
                                            <input type="hidden" id="user_id" name="user_id" value="{{ $sender }}">
                                        @endif
                                        <input class="publisher-input" id="message-input" type="text" name="message" placeholder="   メッセージを入力..." style="width:70px;">
                                        <div class="publiisher-button">
                                            <button class="publisher-btn text-info" id="sendMessageButton" data-abc="true">
                                                <i class="fa fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </div>                      
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div id="chat-right">
            
        </div> --}}

    </div>
    <script>
        // メッセージ送信の非同期処理
        $('#message-form').on('submit', function(event) {
            event.preventDefault();
    
            // 入力されたメッセージとチャットルームID、ユーザーIDを取得
            var message = $('#message-input').val();
            // メッセージが空の場合は送信しない
            if (message.trim() === '') {
                return;
            }
            var chatRoomId = $('input[name="chat_room_id"]').val();
            var userId = $('input[name="user_id"]').val();
    
            // Ajax リクエストを送信
            $.ajax({
                url: "{{ route('message.store') }}",
                method: 'POST',
                data: {
                    message: message,
                    chat_room_id: chatRoomId,
                    user_id: userId,
                    _token: "{{ csrf_token() }}"
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // 送信したメッセージを表示
                    var newMessage = response.message;
                        var messageHtml = '<div class="media media-chat media-chat-reverse p-0">' 
                                        + '<div class="media-body" style="justify-content: flex-end;">' 
                                        + '<p class="meta">' + newMessage.send_time + '</p>'
                                        + '<div id="message-container" class="media-text m-0">'
                                        + '<p id="media-chat-reverse-message">' + newMessage.message + '</p>'
                                        + '</div>'
                                        + '</div>'    
                                        + '</div>'; 
                    $('#chat-area').append(messageHtml);
                    
                    // フォームをクリア
                    $('#message-input').val('');
                },
                error: function(xhr) {
                    console.error(xhr);
                }
            });
        });

        // 定期的にメッセージを取得する非同期処理
        var chatRoomId = $('input[name="chat_room_id"]').val();
        
        if (chatRoomId) {
            // 5秒ごとにメッセージを取得
            setInterval(fetchMessages, 5000); 
            
            function fetchMessages() {
                $.ajax({
                    url: '/home/' + chatRoomId + '/receive',
                    method: 'GET',
                    success: function(response) {
                        
                        var latestMessage = response.messages;
                        var user_id = latestMessage.user_id;
                        var login_user_id = latestMessage.login_user_id;
                        var message_id = latestMessage.id;
                        var message = latestMessage.message;
                        var send_time = latestMessage.created_at;
                        var chat_area = $('#chat-area');
                        var alreadyMessage = chat_area.find('[data-message-id="' + message_id + '"]').length;

                        if (user_id !== login_user_id && (alreadyMessage === 0)) {
                            // 取得したメッセージを表示
                            var newMessage = response.messages;
                            var messageHtml = '<div class="media media-chat p-0">'
                                                + '<a href="{{ url('/chat_profile') }}">'
                                                + '<img class="avatar" src="../../storage/kkrn_icon_user_2.png" alt="..." style="height:26px; width:26px;">'
                                                + '</a>' 
                                                + '<div class="media-body">'
                                                + '<div class="media-text m-0">'
                                                + '<p id="media-chat-message" style="border-radius: 2px 20px 20px 14px;">' + newMessage.message + '</p>'
                                                + '</div>'
                                                + '<p class="meta">' + send_time + '</p>'
                                                + '<input type="hidden" id="message-id" data-message-id="' + message_id + '">'
                                                + '</div>'
                                                + '</div>';
                            $('#chat-area').append(messageHtml);
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr);
                    }
                });
            }
        }
    </script>
</x-layout>