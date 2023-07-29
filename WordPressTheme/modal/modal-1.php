  <!-- modal-1 -->
  <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-label="exampleModalLabel" aria-hidden="true">
      <!-- モーダルのダイヤログ本体 -->
      <div class="modal-dialog modal-lg" role="document">
          <!-- モーダルのコンテンツ部分 -->
          <div class="modal-content">
              <!-- モーダルのヘッダー -->
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">お問い合わせ１</h5>
                  <!-- 閉じるアイコン -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <!-- /閉じるアイコン -->
              </div>
              <!-- /モーダルのヘッダー -->
              <!-- モーダルの本文 -->
              <div class="modal-body">
                  <!-- contents -->
                  </head>

                  <body>
                      <div id="formWrap">
                          <!-- <h3>お問い合わせ</h3> -->
                          <p>下記フォームに必要事項を入力後、確認ボタンを押してください。</p>
                          <form method="post" action="mail.php">
                              <table class="formTable">
                                  <tr>
                                      <th>ご用件</th>
                                      <td><select name="ご用件">
                                              <option value="">選択してください</option>
                                              <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                                              <option value="リンクについて">リンクについて</option>
                                          </select></td>
                                  </tr>
                                  <tr>
                                      <th>お名前</th>
                                      <td><input size="20" type="text" name="お名前" /> ※必須</td>
                                  </tr>
                                  <tr>
                                      <th>電話番号（半角）</th>
                                      <td><input size="30" type="text" name="電話番号" /></td>
                                  </tr>
                                  <tr>
                                      <th>Mail（半角）</th>
                                      <td><input size="30" type="text" name="Email" /> ※必須</td>
                                  </tr>
                                  <tr>
                                      <th>性別</th>
                                      <td><input type="radio" name="性別" value="男" /> 男　
                                          <input type="radio" name="性別" value="女" /> 女
                                      </td>
                                  </tr>
                                  <tr>
                                      <th>サイトを知ったきっかけ</th>
                                      <td><input name="サイトを知ったきっかけ[]" type="checkbox" value="友人・知人" /> 友人・知人　
                                          <input name="サイトを知ったきっかけ[]" type="checkbox" value="検索エンジン" /> 検索エンジン
                                      </td>
                                  </tr>
                                  <tr>
                                      <th>お問い合わせ内容<br /></th>
                                      <td><textarea name="お問い合わせ内容" cols="50" rows="5"></textarea></td>
                                  </tr>
                              </table>
                              <p align="center">
                                  <input type="submit" value="　 確認 　" />　<input type="reset" value="リセット" />
                              </p>
                          </form>
                          <p>※IPアドレスを記録しております。いたずらや嫌がらせ等はご遠慮ください</p>
                      </div>

                      <!-- /contents -->
              </div>
              <!-- /モーダルの本文 -->
              <!-- モーダルのフッター -->
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
              </div>
              <!-- /モーダルのフッター -->
          </div>
          <!-- /モーダルのコンテンツ部分 -->
      </div>
      <!-- /モーダルのダイヤログ本体 -->
  </div>
  <!-- /modal-1 -->