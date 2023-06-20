@php
    use Carbon\Carbon;
@endphp

<x-layout>
    <x-slot name="title">
        Chat | My Chat
    </x-slot>
    <x-header/>
    <style>
        .card-bordered {
    border: 1px solid #ebebeb;
}

.card {
    width:100%;
    border: 0;
    border-radius: 0px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0 2px 3px rgba(0,0,0,0.03);
    box-shadow: 0 2px 3px rgba(0,0,0,0.03);
    -webkit-transition: .5s;
    transition: .5s;
}

body {
    background-color: #f9f9fa
}

.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}


.card-header {
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    padding: 15px 20px;
    background-color: transparent;
    border-bottom: 1px solid rgba(77,82,89,0.07);
}

.card-header .card-title {
    padding: 0;
    border: none;
}

h4.card-title {
    font-size: 17px;
}

.card-header>*:last-child {
    margin-right: 0;
}

.card-header>* {
    margin-left: 8px;
    margin-right: 8px;
}

.btn-secondary {
    color: #4d5259 !important;
    background-color: #e4e7ea;
    border-color: #e4e7ea;
    color: #fff;
}

.btn-xs {
    font-size: 11px;
    padding: 2px 8px;
    line-height: 18px;
}
.btn-xs:hover{
    color:#fff !important;
}

.card-title {
    font-family: Roboto,sans-serif;
    font-weight: 300;
    line-height: 1.5;
    margin-bottom: 0;
    padding: 15px 20px;
    border-bottom: 1px solid rgba(77,82,89,0.07);
}


.ps-container {
    position: relative;
}

.ps-container {
    padding: 1rem;
    overflow-y: auto;
    direction: ltr;
    scrollbar-color: #d4aa70 #e4e4e4;
    scrollbar-width: thin;
    border: 1px solid rgba(77,82,89,0.07) !important;
}

.ps-container::-webkit-scrollbar {
    width: 20px;
}

.ps-container::-webkit-scrollbar-track {
    background-color: #e4e4e4;
    border-radius: 100px;
}

.ps-container::-webkit-scrollbar-thumb {
    border-radius: 100px;
    border: 5px solid transparent;
    background-clip: content-box;
    background-color: var(--first-color);
}

.media-chat {
    padding-right: 64px;
    margin-bottom: 0;
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear;
}

.media .avatar {
    flex-shrink: 0;
}

.avatar {
    position: relative;
    display: inline-block;
    width: 36px;
    height: 36px;
    line-height: 36px;
    text-align: center;
    border-radius: 100%;
    background-color: #f5f6f7;
    color: #8b95a5;
    text-transform: uppercase;
}

.media-chat .media-body {
    -webkit-box-flex: initial;
    flex: initial;
    display: table;
    width:100%;
}

.media-body {
    min-width: 0;
}


.media-text p {
    display: inline-block;
}

.media-chat .media-body .media-text p {
    position: relative;
    padding: 6px 13px !important;
    margin: 4px 0;
    background-color: #efefef !important;
    font-weight: 100;
    color:#484848;
    border-radius: 20px !important;
}

.media>* {
    margin: 0 8px;
}

.media-chat .media-body p.meta {
    background-color: transparent !important;
    color: #484848 !important;
    padding: 0;
    opacity: .8;
}

.media-meta-day {
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    margin-bottom: 0;
    color: #8b95a5;
    opacity: .8;
    font-weight: 400;
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear;
}

.media-meta-day::before {
    margin-right: 16px;
}

.media-meta-day::before, .media-meta-day::after {
    content: '';
    -webkit-box-flex: 1;
    flex: 1 1;
    border-top: 1px solid #ebebeb;
}

.media-meta-day::after {
    content: '';
    -webkit-box-flex: 1;
    flex: 1 1;
    border-top: 1px solid #ebebeb;
}

.media-meta-day::after {
    margin-left: 16px;
}

.media-chat.media-chat-reverse {
    padding-right: 12px;
    padding-left: 64px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    flex-direction: row-reverse;
}

.media-chat {
    padding-right: 64px;
    margin-bottom: 0;
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear;
}

.media-chat.media-chat-reverse .media-body .media-text p {
    background: linear-gradient(to right, #4723D9, #6E3DEA);
}

.media-chat.media-chat-reverse .media-body p{
    float: right;
    clear: right;
    color: #f5f6f7;
}

.media-chat.media-chat-reverse .media-body p time{
    color: #484848;
}


.media-chat .media-body p {
    position: relative;
    padding: 6px 14px !important;
    margin: 4px 0;
    background-color: #f5f6f7;
    border-radius: 3px;
}


.border-light {
    border-color: #f1f2f3 !important;
}

.bt-1 {
    border-top: 1px solid #ebebeb !important;
}

.publisher {
    position: relative;
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    padding: 12px 20px;
    background-color: #f9fafb;
    border-top: 1px solid rgba(77,82,89,0.07) !important;
}

.publisher>*:first-child {
    margin-left: 0;
}

.publisher>* {
    margin: 0 8px;
}

.publisher-input {
    -webkit-box-flex: 1;
    flex-grow: 1;
    border: none;
    outline: none !important;
    background-color: transparent;
}

button, input, optgroup, select, textarea {
    font-family: Roboto,sans-serif;
    font-weight: 300;
}

.publisher-btn {
    background-color: transparent;
    border: none;
    color: #8b95a5;
    font-size: 16px;
    cursor: pointer;
    overflow: -moz-hidden-unscrollable;
    -webkit-transition: .2s linear;
    transition: .2s linear;
}

.file-group {
    position: relative;
    overflow: hidden;
} 

.publisher-btn {
    background-color: transparent;
    border: none;
    color: #cac7c7;
    font-size: 16px;
    cursor: pointer;
    overflow: -moz-hidden-unscrollable;
    -webkit-transition: .2s linear;
    transition: .2s linear;
} 

.file-group input[type="file"] {
    position: absolute;
    opacity: 0;
    z-index: -1; 
    width: 20px;
}

.publiisher-button {
    
}

.publiisher-button a {
    text-align: center;
}

.publiisher-button a i {
    margin-top: 9px;
    margin-right: 2px
}

.text-info {
    width: 35px;
    height:35px;
    display: inline-block;
    background: linear-gradient(to right, #4723D9, #6E3DEA);
    color: #cacaca !important;
    border-radius: 4px;
}

.text-info a{

}

.text-info:hover{
    color: #FFF !important;
}
    </style>
    <div class="page-content page-container ms-1 me-3" id="page-content">
        <div class="row d-flex justify-content-center m-0">
            <div class="p-0">
                <div class="card card-bordered m-0" style="width:100% !important;">
                    <div class="card-header sticky-top" style="height:52px; width:100% !important;">
                        <h4 class="card-title">
                            <img class="avatar" src="../../storage/kkrn_icon_user_2.png" alt="..." style="height:40px; width:40px;">
                            <strong class="ms-3 fw-bolder" style="text-align:center; font-size:20px">{{ $receiver->name }}</strong>
                        </h4>
                    </div>
                    <div style="height:auto; overflow: auto !important;">
                        <div id="chat-area" class="ps-container ps-theme-default ps-active-y border-start border-end" id="chat-content" style="height: calc(80vh - 70px)  !important; background-color:#f5f5f5;">
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
                                            <img class="avatar" src="../../storage/kkrn_icon_user_2.png" alt="..." style="height:26px; width:26px;">
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
                        <form action="{{ route('message.store') }}" method="POST">
                            <div class="publisher bt-1 border-light bottom-0 mx-auto" style="height:50px; width:100% !important;">
                                <img class="avatar avatar-xs" src="../../storage/kkrn_icon_user_3.png" alt="...">
                                @csrf
                                <input type="hidden" name="chat_room_id" value="{{ $chatRoomId }}">
                                <input type="hidden" name="user_id" value="{{ $sender }}">
                                <input class="publisher-input" type="text" name="message" placeholder="メッセージを入力..." style="width:70px;">
                                <div class="publiisher-button">
                                    <button class="publisher-btn text-info" href="#" data-abc="true">
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
</x-layout>
