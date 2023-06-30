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
                /* flex-grow: 1; */
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
            /* max-width: 730px;
            min-width: 730px; */
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
            <div class="tab_box" style="width:250px">
                <div class="btn_area" style="width:100%">
                    <div class="left-content" style="width:100%">
                        <div class="height-100" style="width:100%;">
                            @if (!empty($members))
                                @foreach ($members as $member) 
                                    <div id='chat-item' class="tab_btn chat-item card mb-0 border-top-0 border-start-0 border-end-0 rounded-0" data-chat-id="{{ $member['chat_id'] }}">
                                        <div class="card-body">
                                            <div class="row" style="justify-content: space-between;">
                                                <div class="col-3 ms-3" style="max-width:60px;">
                                                    <a href="{{ url('/chat_profile') }}">
                                                        <img src="storage/kkrn_icon_user_2.png" alt="" style="height:42px; width:42px; background-color:#d4d4d4; border-radius:50px;">
                                                    </a>
                                                </div>
                                                <div class="col-7 ms-3">
                                                    <div class="d-flex" style="justify-content: space-between;">
                                                        <h5 class="card-title p-0" style="border:none; font-size: 14px;">{{ $member['user']['name'] }}</h5>
                                                        <p class="card-meta">{{  $member['latest_message']['created_at']->format('H:i') }}</p>                                                    
                                                    </div>
                                                    <p class="card-text" style="max-height:50px; max-width:90px; font-size: 11px; overflow:hidden; white-spece:nowrap; text-overflow: ellipsis;">{{ $member['latest_message']['message'] }}</p>
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
            <div class="page-content page-container ms-1 me-1" id="page-content">
                <div class="row d-flex justify-content-center m-0">
                    <div class="p-0">
                        <div class="card card-bordered m-0" style="width:100% !important;">
                            <div class="card-header sticky-top" style="height:55px; width:100% !important; background-color: var(--white-color); border:none;">
                                <h4 class="card-title">
                                    @if (!empty($receiver))
                                    <a href="{{ url('/chat_profile') }}">
                                        <img class="avatar" src="../../storage/kkrn_icon_user_2.png" alt="..." style="height:40px; width:40px;">
                                    </a>
                                        <strong class="ms-3 fw-bolder" style="text-align:center; font-size:20px;">{{ $receiver->name }}</strong>
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
                                                        <div class="media-text m-0">
                                                            <p>{{ $message->message }}</p>
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
                                        <input class="publisher-input" id="messageInput" type="text" name="message" placeholder="  メッセージを入力..." style="width:70px;">
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