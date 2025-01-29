<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header class="header">
        <ul class="header-item">
            <li class="header-list">
                <a class="header-logo">PiGLy</a>
            </li>
            <li class="header-list">
                <div class="header-menus">
                    <a class="header-menu__weight-set" href="">目標体重設定</a>
                    <form class="header-menu__logout-form" action="">
                        <button class="header-menu__logout">ログアウト</button>
                    </form>
                </div>
            </li>
        </ul>
    </header>
    <main class="main">
        <div class="upper-container">
            <div class="upper-container__contents">
                <div class="upper-container__content">
                    <span class="upper-container__content-title">目標体重</span>
                    <span class="upper-container__content-value">45.0</span>
                    <span class="upper-container__content-unit">kg</span>
                </div>
                <div class="upper-container__content">
                    <span class="upper-container__content-title">目標まで</span>
                    <span class="upper-container__content-value">-1.5</span>
                    <span class="upper-container__content-unit">kg</span>
                </div>
                <div class="upper-container__content">
                    <span class="upper-container__content-title">最新体重</span>
                    <span class="upper-container__content-value">46.0</span>
                    <span class="upper-container__content-unit">kg</span>
                </div>
            </div>
        </div>
        <div class="lower-container">
            <div class="lower-container__search-and-add">
                <form class="lower-container__search-form" action="">
                    <input class="lower-container__search-form-date" type="date">
                    <span> ～ </span>
                    <input class="lower-container__search-form-date" type="date">
                    <button class="lower-container__search-form-submit" type="submit">検索</button>
                    <a class="lower-container__search-form-reset" href="">リセット</a>
                </form>
                <a class="lower-container__add" href="#add">データ追加</a>
            </div>
            <div class="lower-container__search-result">2023年11月21日～2023年11月25日の検索結果　5件</div>
            <div class="lower-container__table-wrapper">
                <table class="lower-container__table">
                    <tr class="lower-container__table-row">
                        <th class="lower-container__table-header">日付</th>
                        <th class="lower-container__table-header">体重</th>
                        <th class="lower-container__table-header">食事摂取カロリー</th>
                        <th class="lower-container__table-header">運動時間</th>
                        <th class="lower-container__table-header"></th>
                    </tr>
                    <tr class="lower-container__table-row">
                        <td class="lower-container__table-desc">2023/11/26</td>
                        <td class="lower-container__table-desc">46.5kg</td>
                        <td class="lower-container__table-desc">1200cal</td>
                        <td class="lower-container__table-desc">00:15</td>
                        <td class="lower-container__table-desc"><a href=""><img src="../img/pencil.svg" alt=""></a></td>
                    </tr>
                    <tr class="lower-container__table-row">
                        <td class="lower-container__table-desc">2023/11/26</td>
                        <td class="lower-container__table-desc">46.5kg</td>
                        <td class="lower-container__table-desc">1200cal</td>
                        <td class="lower-container__table-desc">00:15</td>
                        <td class="lower-container__table-desc"><a href=""><img src="../img/pencil.svg" alt=""></a></td>
                    </tr>
                    <tr class="lower-container__table-row">
                        <td class="lower-container__table-desc">2023/11/26</td>
                        <td class="lower-container__table-desc">46.5kg</td>
                        <td class="lower-container__table-desc">1200cal</td>
                        <td class="lower-container__table-desc">00:15</td>
                        <td class="lower-container__table-desc"><a href=""><img src="../img/pencil.svg" alt=""></a></td>
                    </tr>
                    <tr class="lower-container__table-row">
                        <td class="lower-container__table-desc">2023/11/26</td>
                        <td class="lower-container__table-desc">46.5kg</td>
                        <td class="lower-container__table-desc">1200cal</td>
                        <td class="lower-container__table-desc">00:15</td>
                        <td class="lower-container__table-desc"><a href=""><img src="../img/pencil.svg" alt=""></a></td>
                    </tr>
                    <tr class="lower-container__table-row">
                        <td class="lower-container__table-desc">2023/11/26</td>
                        <td class="lower-container__table-desc">46.5kg</td>
                        <td class="lower-container__table-desc">1200cal</td>
                        <td class="lower-container__table-desc">00:15</td>
                        <td class="lower-container__table-desc"><a href=""><img src="../img/pencil.svg" alt=""></a></td>
                    </tr>
                    <tr class="lower-container__table-row">
                        <td class="lower-container__table-desc">2023/11/26</td>
                        <td class="lower-container__table-desc">46.5kg</td>
                        <td class="lower-container__table-desc">1200cal</td>
                        <td class="lower-container__table-desc">00:15</td>
                        <td class="lower-container__table-desc"><a href=""><img src="../img/pencil.svg" alt=""></a></td>
                    </tr>
                    <tr class="lower-container__table-row">
                        <td class="lower-container__table-desc">2023/11/26</td>
                        <td class="lower-container__table-desc">46.5kg</td>
                        <td class="lower-container__table-desc">1200cal</td>
                        <td class="lower-container__table-desc">00:15</td>
                        <td class="lower-container__table-desc"><a href=""><img src="../img/pencil.svg" alt=""></a></td>
                    </tr>
                    <tr class="lower-container__table-row">
                        <td class="lower-container__table-desc">2023/11/26</td>
                        <td class="lower-container__table-desc">46.5kg</td>
                        <td class="lower-container__table-desc">1200cal</td>
                        <td class="lower-container__table-desc">00:15</td>
                        <td class="lower-container__table-desc"><a href=""><img src="../img/pencil.svg" alt=""></a></td>
                    </tr>
                    <tr class="lower-container__table-row">
                        <td class="lower-container__table-desc">2023/11/26</td>
                        <td class="lower-container__table-desc">46.5kg</td>
                        <td class="lower-container__table-desc">1200cal</td>
                        <td class="lower-container__table-desc">00:15</td>
                        <td class="lower-container__table-desc"><a href=""><img src="../img/pencil.svg" alt=""></a></td>
                    </tr>
                </table>
            </div>
            <div class="lower-container__pagination">
                <div>（ページネーション）</div>
            </div>
        </div>
    </main>

    <div class="modal" id="add">
        <a href="#" class="modal-overlay"></a>
        <div class="modal__inner">
            <div class="modal__content">
                <h2 class="modal-title">Weight Logを追加</h2>
                <form class="modal__form" action="">
                    <div class="modal__form-group">
                        <label class="modal__form-label" for="date">日付<span>必須</span></label>
                        <input class="modal__form-date" type="date" name="date">
                        <ul class="modal__form-error">
                            <li>日付を入力してください</li>
                        </ul>
                    </div>
                    <div class="modal__form-group">
                        <label class="modal__form-label" for="weight">体重<span>必須</span></label>
                        <input class="modal__form-weight" type="text" name="weight"><span> kg</span>
                        <ul class="modal__form-error">
                            <li>体重を入力してください</li>
                            <li>４桁までの数字で入力してください</li>
                            <li>小数点は１桁で入力してください</li>
                        </ul>
                    </div>
                    <div class="modal__form-group">
                        <label class="modal__form-label" for="calories">摂取カロリー<span>必須</span></label>
                        <input class="modal__form-calories" type="text" name="calories"><span> cal</span>
                        <ul class="modal__form-error">
                            <li>摂取カロリ－を人力してください</li>
                            <li>数字で入力してくたさい</li>
                        </ul>
                    </div>
                    <div class="modal__form-group">
                        <label class="modal__form-label" for="exercise-time">運動時間<span>必須</span></label>
                        <input class="modal__form-exercise-time" type="text" name="exercise-time">
                        <ul class="modal__form-error">
                            <li>運動時間を入力してください</li>
                        </ul>
                    </div>
                    <div class="modal__form-group">
                        <label class="modal__form-label" for="exercise-content">運動内容<span>必須</span></label>
                        <textarea class="modal__form-exercise-content" name="exercise-content" placeholder="運動内容を追加"></textarea>
                        <ul class="modal__form-error">
                            <li>１２０文字以内で入力してください</li>
                        </ul>
                    </div>
                    <div class="modal__form-group-btn">
                        <a class="modal__form-return" href="#">戻る</a>
                        <button class="modal__form-submit" type="submit">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
