  <!-- modal-4 -->
  <div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-label="exampleModalLabel" aria-hidden="true">
      <!-- モーダルのダイヤログ本体 -->
      <div class="modal-dialog modal-lg" role="document">
          <!-- モーダルのコンテンツ部分 -->
          <div class="modal-content">
              <!-- モーダルのヘッダー -->
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">タグ</h5>
                  <!-- 閉じるアイコン -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <!-- /閉じるアイコン -->
              </div>
              <!-- /モーダルのヘッダー -->
              <!-- モーダルの本文 -->
              <div class="modal-body">
                  <!-- function -->
                  <!-- header/main/footer -->
                  <?php include('modal-4-post.php'); ?>
                  <?php include('modal-4-news.php'); ?>
                  <!-- /header/main/footer -->
                  <!-- /function -->
              </div>
              <!-- /モーダルの本文 -->
              <!-- モーダルのフッター -->
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる1</button>
                  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-1-1" data-dismiss="modal">モーダル1-1へ</button>
              </div>
              <!-- /モーダルのフッター -->
          </div>
          <!-- /モーダルのコンテンツ部分 -->
      </div>
      <!-- /モーダルのダイヤログ本体 -->
  </div>
  <!-- /modal-4 -->