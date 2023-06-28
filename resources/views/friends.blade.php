<x-layout>
    <x-slot name="title">
        Friend | My Chat
    </x-slot>
    <x-header/> 
    <h4 class="sticky-top bg-light p-3 mb-0">友達</h4>

    <div class="d-flex mb-4 justify-content-center h-100">
        <div class="search d-flex justify-content-center">
            <input type="text" class="search-input mt-0 h-100" placeholder="search..." name="">
            <a href="#" class="search-icon">
                <i class="fa fa-search"></i>
            </a>
        </div>
    </div>
    
    <div class="profile-container height-100" style="overflow:auto; background-color:#f0f0f0;">
        <div class="friend-container mt-3 mx-auto d-flex">

            <div class="card friend-content ms-3 mt-3 mx-auto" style="width: 16rem;">
                <a href="{{ url('chat_profile') }}">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" class="card-img-top" alt="...">
                </a>    
                <div class="card-body mx-auto">
                    <h5 class="card-title friend-title">test2</h5>
                    <p class="card-text friend-text">test2です。</p>
                    <a href="#" class="btn friend-buttom">チャットへ移動</a>
                </div>
            </div>
            <div class="card friend-content ms-3 mt-3 mx-auto" style="width: 16rem;">
                <a href="{{ url('chat_profile') }}">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" class="card-img-top" alt="...">
                </a>    
                <div class="card-body mx-auto">
                    <h5 class="card-title friend-title">test2</h5>
                    <p class="card-text friend-text">test2です。</p>
                    <a href="#" class="btn friend-buttom">チャットへ移動</a>
                </div>
            </div>
            <div class="card friend-content ms-3 mt-3 mx-auto" style="width: 16rem;">
                <a href="{{ url('chat_profile') }}">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" class="card-img-top" alt="...">
                </a>    
                <div class="card-body mx-auto">
                    <h5 class="card-title friend-title">test2</h5>
                    <p class="card-text friend-text">test2です。</p>
                    <a href="#" class="btn friend-buttom">チャットへ移動</a>
                </div>
            </div>
            <div class="card friend-content ms-3 mt-3 mx-auto" style="width: 16rem;">
                <a href="{{ url('chat_profile') }}">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" class="card-img-top" alt="...">
                </a>    
                <div class="card-body mx-auto">
                    <h5 class="card-title friend-title">test2</h5>
                    <p class="card-text friend-text">test2です。</p>
                    <a href="#" class="btn friend-buttom">チャットへ移動</a>
                </div>
            </div>

        </div>
    </div>
</x-layout>