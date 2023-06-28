<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    

    <x-slot name="title">
        ChatRooms | My Chat
    </x-slot>

    <style>
        /*タブ実装*/
        .tab_box .btn_area {
            margin:0 10px;
            display: -webkit-box;
            display: flex;
        }

        .tab_box .tab_btn {
            width: 188px;
            padding: 8px 0;
            color: #333;
            background: #f5f7f8;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease 0s;
        }

        .tab_box .tab_btn + .tab_btn {
            margin-left: 8px;
        }

        .tab_box .tab_btn:hover {
            background-color: #dce1e4;
        }

        .tab_box .tab_btn.active {
            background:#07539f;
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
    </style>

    <div class="tab_box">
        <div class="btn_area">
            <p class="tab_btn active">タブ1</p>
            <p class="tab_btn">タブ2</p>
            <p class="tab_btn">タブ3</p>
        </div>
        <div class="panel_area">
            <div class="tab_panel active">
                <p>タブ11111</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト11111</p>
            </div>
            <div class="tab_panel">
                <p>タブ22222</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト22222</p>
            </div>
            <div class="tab_panel">
                <p>タブ333333</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト33333</p>
            </div>
        </div>
    </div>

    <script>
        $('.tab_box .tab_btn').click(function() {
        var index = $('.tab_box .tab_btn').index(this);
        $('.tab_box .tab_btn, .tab_box .tab_panel').removeClass('active');
        $(this).addClass('active');
        $('.tab_box .tab_panel').eq(index).addClass('active');
    });
    </script>
</body>
</html>