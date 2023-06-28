<x-layout>
    <x-slot name="title">
        ChatRooms | My Chat
    </x-slot>
    <x-header/>    
    <style>
        @media (min-width: 600px) {
            #chat-parant {
                display: flex;
            }
            #chat-left {
                flex-grow: 1;
            }
            #chat-center {
                flex-grow: 6;
            }
            #chat-right {
                flex-grow: 2;
            }
        }

        /*タブ実装*/

        .chat-area {
            max-width: 730px;
            min-width: 730px;
        }

        .tab_box .btn_area {
            /* margin:0 10px; */
            /* display: -webkit-box; */
            /* display: flex; */
            max-width: 430px;
            min-width: 430px;
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
            <dir class="card-header left-title m-0">
                <h5 class="mx-auto mb-0">チャット</h5>
            </dir>
            <div class="tab_box">
                <div class="btn_area">
                    <div class="left-content">
                        <div class="height-100" style="background-color:#f0f0f0;">
                            @if (!empty($members))
                                @foreach ($members as $member) 
                                    <div id='chat-item' class="tab_btn chat-item card mb-0 border-top-0 border-start-0 border-end-0 rounded-0" data-chat-id="{{ $member['chat_id'] }}">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3 ms-3" style="max-width:60px;">
                                                    <a href="{{ url('/chat_profile') }}">
                                                        <img src="storage/kkrn_icon_user_2.png" alt="アイコン" style="height:65px; width:65px;">
                                                    </a>
                                                </div>
                                                <div class="col-7 ms-5">
                                                    <h5 class="card-title">{{ $member['user']['name'] }}</h5>
                                                    <p class="card-text">{{ $member['latest_message']['message'] }}</p>
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
            <div class="page-content page-container ms-1 me-3" id="page-content">
                <div class="row d-flex justify-content-center m-0">
                    <div class="p-0">
                        <div class="card card-bordered m-0" style="width:100% !important;">
                            <div class="card-header sticky-top" style="height:52px; width:100% !important;">
                                <h4 class="card-title">
                                    @if (!empty($receiver))
                                    <a href="{{ url('/chat_profile') }}">
                                        <img class="avatar" src="../../storage/kkrn_icon_user_2.png" alt="..." style="height:40px; width:40px;">
                                    </a>
                                        <strong class="ms-3 fw-bolder" style="text-align:center; font-size:20px">{{ $receiver->name }}</strong>
                                    @endif
                                </h4>
                            </div>
                            <div class="chat-area" style="height:auto; overflow: auto !important;">
                                <div id="chat-area" class="ps-container ps-theme-default ps-active-y border-start border-end" id="chat-content" style="height: calc(80vh - 60px)  !important; background-color:#f5f5f5;">
                                    {{-- 一分以内に送られたメッセージは時間を表示せず、重ねて表示させる --}}
                                    @if (!empty($messages))    
                                        @foreach ($messages as $key => $message)
                                            @if ($message->user_id === $sender)
                                                <div class="media media-chat media-chat-reverse">
                                                    <div class="media-body">
                                                        <div class="media-text">
                                                            <p>{{ $message->message }}</p>
                                                        </div>
                                                        <p class="meta">{{ $message->created_at->format('H:i') }}</p>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="media media-chat">
                                                    <a href="{{ url('/chat_profile') }}">
                                                        <img class="avatar" src="../../storage/kkrn_icon_user_2.png" alt="..." style="height:26px; width:26px;">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-text">
                                                            <p>{{ $message->message }}</p>
                                                        </div>
                                                        <p class="meta">{{ $message->created_at->format('H:i') }}</p>
                                                    </div>
                                                </div>    
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                <form action="{{ route('home.store') }}" method="POST">
                                    <div class="publisher bt-1 border-light bottom-0 mx-auto" style="height:50px; width:100% !important;">
                                        <img class="avatar avatar-xs" src="../../storage/kkrn_icon_user_3.png" alt="...">
                                        @csrf
                                        @if (!empty($chatRoomId))                                            
                                            <input type="hidden" name="chat_room_id" value="{{ $chatRoomId }}">
                                            <input type="hidden" name="user_id" value="{{ $sender }}">
                                        @endif
                                        <input class="publisher-input" id="messageInput" type="text" name="message" placeholder="メッセージを入力..." style="width:70px;">
                                        <div class="publiisher-button">
                                            <button class="publisher-btn text-info" id="sendMessageButton" href="#" data-abc="true">
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

    </div>
</x-layout>