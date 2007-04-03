<?php
/*
Pixmicat! language file - Japanese [ja_JA]
*/
if (!isset($language)) $language = Array();

// pixmicat.php
$language['page_not_found']				= '對不起，您所要求的頁數並不存在'; /**/
$language['thread_not_found']			= '該当記事がみつかりません';
$language['del_head']					= '【記事削除】';
$language['del_img_only']				= '画像だけ消す';
$language['del_pass']					= '投稿キー: ';
$language['del_btn']					= ' 削除 ';
$language['prev_page']					= '前のﾍﾟｰｼﾞ';
$language['first_page']					= '最初のﾍﾟｰｼﾞ';
$language['all_pages']					= 'すべて';
$language['next_page']					= '次のﾍﾟｰｼﾞ';
$language['last_page']					= '最後のﾍﾟｰｼﾞ';
$language['img_sample']					= '[サムネ表示]';
$language['img_filename']				= '画像ファイル名：';
$language['reply_btn']					= '返信';
$language['warn_sizelimit']				= '這篇因附加圖檔容量限制，附加圖檔不久後就會刪除。'; /**/
$language['warn_oldthread']				= 'このスレは古いので、もうすぐ消えます。';
$language['warn_locked']				= '管理者によるスレッドストップです。';
$language['notice_omitted']				= 'レス %1$s 件省略。全て読むには返信ボタンを押してください。';
$language['post_name']					= '';
$language['post_category']				= 'カテゴリー: ';
$language['regist_notpost']				= '不正な投稿をしないで下さい(post)';
$language['regist_nospam']				= '防止 Spambot 機制啟動！'; /**/
$language['regist_ipfiltered']			= '拒絶されました(host) 原因：%1$s';
$language['regist_wordfiltered']		= '拒絶されました(str)';
$language['regist_upload_exceedphp']	= '上傳失敗<br />上傳的附加圖檔容量超過PHP內定值'; /**/
$language['regist_upload_exceedcustom']	= '上傳失敗<br />上傳的附加圖檔容量超過上傳容量限制'; /**/
$language['regist_upload_incompelete']	= 'アップロードに失敗しました<br />ファイルが破損しています';
$language['regist_upload_direrror']		= '上傳失敗<br />上傳的暫存資料夾設定錯誤，請通報系統管理員'; /**/
$language['regist_upload_noimg']		= '画像がありません';
$language['regist_upload_filenotfound']	= 'アップロードに失敗しました<br />サーバがサポートしていない可能性があります';
$language['regist_upload_killincomp']	= '[Notice] Your sending was canceled because of the incorrect file size.';
$language['regist_upload_notimage']		= 'アップロードに失敗しました<br />画像ファイル以外は受け付けません';
$language['regist_upload_notsupport']	= 'アップロードに失敗しました<br />GIF,JPG,PNG以外の画像ファイルは受け付けません';
$language['regist_upload_blocked']		= 'アップロードに失敗しました<br />禁止画像です';
$language['regist_uploaded']			= '画像 %1$s のアップロードが成功しました<br />';
$language['regist_sakuradetected']		= '偵測到您有輸入櫻花日文假名'; /**/
$language['regist_withoutname']			= '名前がありません';
$language['regist_withoutcomment']		= '何か書いて下さい';
$language['regist_nametoolong']			= '名前が長すぎます';
$language['regist_emailtoolong']		= 'メル欄が長すぎます';
$language['regist_topictoolong']		= '題名が長すぎます';
$language['regist_longthreadnum']		= '変なレス番号指定するんじゃないの';
$language['admin']						= '管理';
$language['deletor']					= '削除';
$language['trip_pre']					= '◆';
$language['trip_pre_fake']				= '◇';
$language['cap_char']					= '★';
$language['cap_char_fake']				= '☆';
$language['regist_commenttoolong']		= '本文が長すぎます';
$language['notice_incompletefile']		= '注意：ファイルが破損しています';
$language['sun']						= '日';
$language['mon']						= '月';
$language['tue']						= '火';
$language['wed']						= '水';
$language['thu']						= '木';
$language['fri']						= '金';
$language['sat']						= '土';
$language['regist_successivepost']		= '連続投稿はもうしばらく時間を置いてからお願い致します';
$language['regist_duplicatefile']		= 'アップロードに失敗しました<br />同じ画像があります';
$language['regist_threaddeleted']		= 'スレッドがありません';
$language['regist_threadlocked']		= 'もう書けませんです';
$language['regist_redirect']			= '%1$s 画面を切り替えます <p>如果瀏覽器沒有自動切換，請手動按連結前往：<a href="%2$s">掲示板に戻る</a></p>';
$language['del_notchecked']				= '你真的有要刪除嗎？請回頁面重勾選'; /**/
$language['del_wrongpwornotfound']		= '該当記事が見つからないかパスワードが間違っています';
$language['admin_wrongpassword']		= '"パスワードが違います';
$language['return']						= '掲示板に戻る';
$language['admin_remake']				= 'ログを更新する';
$language['admin_top']					= '管理モード';
$language['admin_manageposts']			= '記事管理';
$language['admin_optimize']				= 'テーブルを最適化する';
$language['admin_verify_btn']			= ' 認証 ';
$language['admin_archive']				= '<th>庫存</th>';
$language['admin_notices']				= '<ul><li>削除したい記事のチェックボックスにチェックを入れ、削除ボタンを押して下さい。</li><li>只想刪除文章的附加圖檔，請先勾選「僅刪除附加圖檔」再按照一般刪文方式</li><li>想停止／繼續討論串，請勾選該文章前之「停止」核取框之後按下執行按鈕</li><li>勾選後換頁亦相當於執行，請慎用此功能</li><li>管理文章完畢，記得順手按下「更新文章」以更新靜態快取</li></ul>'; /**/
$language['admin_submit_btn']			= ' 執行 '; /**/
$language['admin_reset_btn']			= ' リセット ';
$language['admin_list_header']			= '%1$s<th>停止</th><th>削除</th><th>投稿日</th><th>題名</th><th>投稿者</th><th>コメント</th><th>ホスト名</th><th>添付(Bytes)<br />MD5</th>';
$language['admin_archive_btn']			= '存';
$language['admin_stop_btn']				= '停';
$language['admin_totalsize']			= '【 画像データ合計 : <b>%1$s</b> KB 】';
$language['search_disabled']			= '管理員選擇不開放搜尋功能！'; /**/
$language['search_top']					= '検索';
$language['search_notice']				= '<li>お探しの記事に関連する言葉をキーワード入力欄に入力して検索ボタンを押してください。</li><li>複数のキーワードの間にスペースを入れて入力します。</li><li>複数キーワード間の検索条件を細かく指定する場合に利用します。<p />キーワード：';
$language['search_target']				= '検索対象：';
$language['search_target_comment']		= 'コメント';
$language['search_target_name']			= 'お名前';
$language['search_target_topic']		= '題名';
$language['search_target_number']		= '記事No.';
$language['search_method']				= '検索条件：';
$language['search_method_and']			= 'AND';
$language['search_method_or']			= 'OR';
$language['search_submit_btn']			= ' 検索 ';
$language['search_notfound']			= '找不到符合的關鍵字。'; /**/
$language['search_back']				= '[戻る]';
$language['category_nokeyword']			= '請輸入類別標籤以搜尋類似文章。'; /**/
$language['category_notfound']			= '沒有符合此類別標籤的文章'; /**/
$language['category_recache']			= '重新快取'; /**/
$language['module_info_top']			= '模組資訊'; /**/
$language['module_loaded']				= 'Module Loaded:'; /**/
$language['module_info']				= 'Module Infomation:'; /**/
$language['info_top']					= '系統資訊'; /**/
$language['info_disabled']				= '未開啟'; /**/
$language['info_enabled']				= '已開啟'; /**/
$language['info_functional']			= '功能正常'; /**/
$language['info_nonfunctional']			= '功能失常'; /**/
$language['info_basic']					= '基本設定'; /**/
$language['info_basic_ver']				= '程式版本'; /**/
$language['info_basic_pio']				= 'PIO 函式庫後端及版本'; /**/
$language['info_basic_threadsperpage']	= '一頁顯示幾篇討論串'; /**/
$language['info_basic_threads']			= '篇'; /**/
$language['info_basic_postsperpage']	= '一篇討論串最多顯示之回應筆數'; /**/
$language['info_basic_posts']			= '筆'; /**/
$language['info_basic_postsinthread']	= '回應模式一頁顯示幾筆回應內容'; /**/
$language['info_basic_posts_showall']	= '(全部顯示：0)'; /**/
$language['info_basic_bumpposts']		= '回應筆數超過多少則不自動推文'; /**/
$language['info_basic_bumphours']		= '討論串可接受推文的時間範圍'; /**/
$language['info_basic_hours']			= '小時'; /**/
$language['info_basic_0disable']		= '(關閉：0)'; /**/
$language['info_basic_urllinking']		= 'URL文字自動作成超連結'; /**/
$language['info_0no1yes']				= '(是：1 否：0)'; /**/
$language['info_basic_com_limit']		= '內文接受Bytes數'; /**/
$language['info_basic_com_after']		= ' Bytes (中文字為2Bytes)'; /**/
$language['info_basic_anonpost']		= '接受匿名發送'; /**/
$language['info_basic_anonpost_opt']	= '(強制砍名：2 是：1 否：0)'; /**/
$language['info_basic_del_incomplete']	= '自動刪除上傳不完整附加圖檔'; /**/
$language['info_basic_use_sample']		= '使用預覽圖機能 (品質：%1$s)'; /**/
$language['info_0notuse1use']			= '(使用：1 不使用：0)'; /**/
$language['info_basic_use_sample_func']	= '└ 預覽圖生成功能'; /**/
$language['info_basic_useblock']		= '封鎖檢查功能'; /**/
$language['info_0disable1enable']		= '(啟動：1 關閉：0)'; /**/
$language['info_basic_showid']			= '顯示ID'; /**/
$language['info_basic_showid_after']	= '(強制顯示：2 選擇性顯示：1 永遠不顯示：0)'; /**/
$language['info_basic_cr_limit']		= '文字換行行數上限'; /**/
$language['info_basic_cr_after']		= ' 行 (不限：0)'; /**/
$language['info_basic_timezone']		= '時區設定'; /**/
$language['info_basic_threadcount']		= '目前總討論串篇數'; /**/
$language['info_dsusage_top']			= '記錄檔使用量'; /**/
$language['info_dsusage_max']			= '最大筆數'; /**/
$language['info_dsusage_usage']		= '使用率'; /**/
$language['info_dsusage_count']		= '目前筆數'; /**/
$language['info_fileusage_top']		= '附加圖檔總容量限制功能：'; /**/
$language['info_fileusage_limit']		= '上限大小'; /**/
$language['info_fileusage_count']		= '目前容量'; /**/
$language['info_fileusage_unlimited']	= '無上限'; /**/
$language['info_server_top']			= '伺服器支援情報'; /**/
$language['info_server_gd']				= 'GD函式庫'; /**/
$language['init_permerror']				= '根目錄沒有寫入權限，請修改權限<br />'; /**/
$language['init_inited']				= '環境初始化成功！<br />請現在打開此程式刪除init()程式環境初始化區段<br />'; /**/
$language['action_opt_notsupport']		= '後端並不支援此動作'; /**/
$language['action_opt_optimize']		= 'テーブル最適化';
$language['action_opt_success']			= '成功した';
$language['action_opt_failed']			= '失敗した';

// lib_common.php
$language['head_home']					= 'ホーム';
$language['head_search']				= '検索';
$language['head_info']					= '系統資訊';
$language['head_admin']					= '管理用';
$language['head_refresh']				= 'リロード';
$language['form_top']					= 'レス送信モード';
$language['form_showpostform']			= '投稿';
$language['form_hidepostform']			= 'フォームを隠す';
$language['form_name']					= 'おなまえ';
$language['form_email']					= 'E-mail';
$language['form_topic']					= '題　　名';
$language['form_submit_btn']			= '送信する';
$language['form_comment']				= 'コメント';
$language['form_attechment']			= '添付File';
$language['form_noattechment']			= '画像なし';
$language['form_contpost']				= '連貼機能';
$language['form_category']				= 'カテゴリー';
$language['form_category_notice']		= '(請以 , 逗號分隔多個標籤)'; /**/
$language['form_delete_password']		= '投稿キー';
$language['form_delete_password_notice']= '(記事の削除用。英数字で8文字以内)';
$language['form_notice']				= '<li>添付可能ファイル：GIF, JPG, PNG ブラウザによっては正常に添付できないことがあります。</li><li>最大投稿データ量は %1$s KBまで。sage機能付き。</li><li>画像は横 %2$s ピクセル、縦 %3$s ピクセルを超えると縮小表示されます。</li>';
$language['form_notice_storage_limit']	= '<li>目前附加圖檔使用量大小： %1$s KB / %2$s KB</li>'; /**/
$language['form_notice_noscript']		= '＊您選擇關閉了JavaScript，但這對您的瀏覽及發文應無巨大影響'; /**/
$language['error_back']					= '戻る';
$language['ip_banned']					= '被列在 IP/Hostname 封鎖名單之內'; /**/
$language['ip_dnsbl_banned']			= '被列在 DNSBL(%1$s) 封鎖名單之內'; /**/

// mainscript.js // regist_withoutcomment,regist_upload_notsupport,js_convert_sakura
$language['js_convert_sakura']			= '偵測到您有輸入櫻花日文假名的可能性，將自動為您轉換'; /**/

?>