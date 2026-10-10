// 2027年までのカウントダウンタイマー
// 時間：分：秒をリアルタイムで表示する


// 時間表示用の要素を取得
const timer = document.getElementById("timer");
const message = document.getElementById("message");

// カウントダウン処理を行う関数
function countdown() {

  // 現在時刻を取得
  const now = new Date();

  // カウントダウンの終了日時（2027年1月1日）
  const target = new Date(2027, 0, 1, 0, 0, 0);

  // 終了日時までの残り時間（ミリ秒）
  const diff = target - now;

  // 残り時間が0以下になったら終了メッセージを表示
  if (diff <= 0) {
    timer.textContent = "00時00分00秒";
    message.textContent = "HAPPY NEW YEAR";
    clearInterval(count); // setIntervalを停止
    return;
  }

  // ミリ秒 → 秒に変換
  const sec = Math.floor(diff / 1000);

  // 秒から「時・分・秒」を計算
  const h = Math.floor(sec / 3600);
  const m = Math.floor((sec % 3600) / 60);
  const s = sec % 60;

  // 2桁表示に整形  （01, 02 のように表示）
  const hh = h.toString().padStart(2, "0");
  const mm = m.toString().padStart(2, "0");
  const ss = s.toString().padStart(2, "0");

  // 画面に表示
  timer.textContent = `${hh}時${mm}分${ss}秒`;
}

// 1秒ごとに countdown() を実行する
const count = setInterval(countdown, 1000);

// ページ読み込み時に一度実行
countdown();
