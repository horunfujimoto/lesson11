<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>お問い合わせ | サンプル株式会社</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.tailwindcss.com/3.1.8"></script>
</head>

<body>
    <header>
        <nav class="navbar bg-base-200">
            <div class="flex-1">
                <!-- ボタンの背景を透明にする指定を追加 btn btn-ghost normal-case-->
                <a href="#" class="normal-case text-xl btn btn-ghost normal-case">サンプル株式会社</a>

                <!-- メニューについて、以下の2つの指定を追加 -->
                <!-- (1)通常は表示しない hidden-->
                <!-- (2)768px以上の画面幅のときにメニューを表示する md:inline-flex-->
                <ul class="menu menu-horizontal p-0 hidden md:inline-flex">
                    <li><a href="#">会社情報</a></li>
                    <li><a href="#">ニュース</a></li>
                    <li><a href="#">採用情報</a></li>
                    <!-- お問い合わせページを表示していることをわかりやすくする設定を追加 active -->
                    <li><a href="#" class="active">お問い合わせ</a></li>
                </ul>
            </div>
            <div class="flex-none">
                <div class="dropdown dropdown-end">
                    <button class="btn btn-ghost md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="#">会社情報</a></li>
                        <li><a href="#">ニュース</a></li>
                        <li><a href="#">採用情報</a></li>
                        <li><a href="#">お問い合わせ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="m-4">
        <h1 class="text-4xl">お問い合わせ</h1>

        <!-- 以下の2つの指定を追加 -->
        <!-- (1)768px以上の画面幅のとき、グリッドを使う md:grid -->
        <!-- (2)768px以上の画面幅のとき、4個のカラムが並んだグリッドにするmd:grid-cols-4 -->
        <div class="mt-4 md:grid md:grid-cols-4">
            <div class="col-span-1">
                <strong>
                    <!-- (1)電話に関するHeroiconsのアイコンを追加 -->
                    <!-- (2)このアイコンをインラインで表示するための指定を追加 inline  -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 inline">
                      <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" />
                    </svg>
                    お電話：
                </strong>
            </div>

            <!-- 768px以上の画面幅のとき、3つ分のカラム幅で表示する指定を追加 "col-span-3-->
            <div class="col-span-3">
                <p>該当する内容の電話番号におかけください。</p>

                <div class="overflow-x-auto mb-4">
                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)テーブルの装飾を適用する -->
                    <!-- (2)テーブルの行ごとの背景色を交互に変える table-zebra-->
                    <table class="mt-4 table table-zebra w-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>内容</th>
                                <th>電話番号</th>
                                <th>担当</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>サービスに関するお問い合わせ</td>
                                <td>03-0000-0000</td>
                                <td>煌木</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>採用に関するお問い合わせ</td>
                                <td>03-0000-0001</td>
                                <td>煌田</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>サービスに関するお問い合わせ</td>
                                <td>03-0000-0002</td>
                                <td>煌山</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- 黄色の枠のアラートを指定 -->
                <div class="alert alert-warning mb-2">
                    <div class="w-full">
                        <!-- (1)時間に関するHeroiconsのアイコンを追加 -->
                        <!-- (2)このアイコンをインラインで表示するための指定を追加 -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        営業時間：平日10時〜19時
                    </div>
                </div>
                
            </div>
        </div>

        <!-- 以下の2つの指定を追加 -->
        <!-- (1)768px以上の画面幅のとき、グリッドを使う md:grid-->
        <!-- (2)768px以上の画面幅のとき、4個のカラムが並んだグリッドにする md:grid-cols-4-->
        <div class="mt-4 md:grid md:grid-cols-4">
            <div class="col-span-1">
                <strong>
                    <!-- (1)メールに関するHeroiconsのアイコンを追加 -->
                    <!-- (2)このアイコンをインラインで表示するための指定を追加 inline-->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 inline">
                      <path d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z" />
                      <path d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
                    </svg>
                    メール：
                </strong>
            </div>

            <!-- 768px以上の画面幅のとき、3つ分のカラム幅で表示する指定を追加"col-span-3 -->
            <div class="col-span-3">
                <p>
                    プライバシーポリシーをご確認いただき、ご同意の上で、送信ボタンをクリックしてください。<br>
                    お問い合わせの内容は、受付日から3営業日以内をめどにご返信いたします。
                </p>
                <form action="complete.php" method="POST">
                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)768px以上の画面幅のとき、グリッドを使う md:grid-->
                    <!-- (2)768px以上の画面幅のとき、6個のカラムが並んだグリッドにするmd:grid-cols-6 -->

                    <div class="form-control w-full my-4 md:grid md:grid-cols-6">
                        <label for="company" class="label">
                            <span class="label-text">会社名：</span>
                        </label>
                        <!-- 768px以上の画面幅のとき、フォーム部品は5つ分のカラム幅で表示する指定を追加 col-span-5 -->
                        <div class="col-span-5">
                            <input type="text" id="company" name="company" placeholder="会社名を入力してください" class="input input-bordered w-full" required>
                        </div>
                    </div>

                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
                    <!-- (2)768px以上の画面幅のとき、6個のカラムが並んだグリッドにする -->
                     <div class="form-control w-full my-4 md:grid md:grid-cols-6">
                        <label for="name" class="label">
                            <span class="label-text">氏名：</span>
                        </label>
                        <!-- 768px以上の画面幅のとき、フォーム部品は5つ分のカラム幅で表示する指定を追加 -->
                        <div class="col-span-5">
                            <input type="text" id="name" name="name" placeholder="氏名を入力してください" class="input input-bordered w-full" required>
                        </div>
                    </div>

                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
                    <!-- (2)768px以上の画面幅のとき、6個のカラムが並んだグリッドにする -->
                     <div class="form-control w-full my-4 md:grid md:grid-cols-6">
                        <label for="mail" class="label">
                            <span class="label-text">メール：</span>
                        </label>
                        <!-- 768px以上の画面幅のとき、フォーム部品は5つ分のカラム幅で表示する指定を追加 -->
                        <div class="col-span-5">
                            <input type="text" id="mail" name="mail" placeholder="メールアドレスを入力してください" class="input input-bordered w-full" required>
                        </div>
                    </div>

                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
                    <!-- (2)768px以上の画面幅のとき、6個のカラムが並んだグリッドにする -->
                     <div class="form-control w-full my-4 md:grid md:grid-cols-6">
                        <label for="tel" class="label">
                            <span class="label-text">電話番号：</span>
                        </label>
                        <!-- 768px以上の画面幅のとき、フォーム部品は5つ分のカラム幅で表示する指定を追加 -->
                        <div class="col-span-5">
                            <input type="text" id="tel" name="tel" placeholder="電話番号を入力してください" class="input input-bordered w-full" required>
                        </div>
                    </div>

                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
                    <!-- (2)768px以上の画面幅のとき、6個のカラムが並んだグリッドにする -->
                     <div class="form-control w-full my-4 md:grid md:grid-cols-6">
                        <label for="content" class="label">
                            <span class="label-text">内容：</span>
                        </label>
                        <!-- 768px以上の画面幅のとき、フォーム部品は5つ分のカラム幅で表示する指定を追加 -->
                        <div class="col-span-5">
                            <textarea class="textarea textarea-bordered w-full" id="content" name="content" placeholder="内容を入力してください" required></textarea>
                        </div>
                    </div>

                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
                    <!-- (2)768px以上の画面幅のとき、6個のカラムが並んだグリッドにする -->
                     <div class="form-control w-full my-4 md:grid md:grid-cols-6">
                        <!-- 以下の2つの指定を追加 -->
                        <!-- (1)768px以上の画面幅のとき、1つ目のカラムは空にする（2つ目のカラムから要素を並べる） -->
                        <!-- (2)768px以上の画面幅のとき、フォーム部品は5つ分のカラム幅で表示する -->
                        <div></div>
                        <div class="col-span-5">
                            <!-- 以下の2つの指定を追加 -->
                            <!-- (1)ボタンの色を緑色にする btn-success normal-case -->
                            <!-- (2)ボタンの幅が指定のカラム幅に対して100％の長さになるようにする w-full -->
                            <button type="submit" class="btn btn-success normal-case btn-outline w-full">お問い合わせ内容を送信する</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center pt-3 border-top">
        &copy; 2022 SAMPLE Inc.
    </footer>
</body>

</html>