<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Progress Check</title>
    
    </head>
    <body>
        
        <div class="top_wrapper">
            <!--ロゴやユーザーネームなど-->
        </div>
        
        <div class="main_container">
        <!--本の情報を編集・削除できる-->
                <img src={{ $learn->image }}>
                <h2 class="category">{{ $learn->category }}</h2>
                <h2 class="bookName">{{ $learn->bookName }}</h2>
                <h2 class="progress">{{ $learn->progress }}</h2>
                <p class="comment">{{ $learn->coment }}</p>
                
                <!--削除ボタンを追加-->
            
        </div>
        
    </body>
</html>
