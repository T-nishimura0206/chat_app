<x-layout>
    <x-slot name="title">
        ChatRooms | My Chat
    </x-slot>
    <x-header/>    
    <div class="height-100" style="overflow:auto; background-color:#f0f0f0;">
        <h4 class="bg-light p-3 mb-0">メッセージ</h4>
        @if (!empty($members))
            @foreach ($members as $member) 
                <div class="chat-item card border-top-0 border-start-0 border-end-0 rounded-0" data-chat-id="{{ $member['chat_id'] }}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 ms-3" style="max-width:60px;">
                                <img src="storage/kkrn_icon_user_2.png" alt="アイコン" style="height:65px; width:65px;">
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
</x-layout>