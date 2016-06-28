<?php if ( is_single() ) : ?>
  <div class="block-detail--information block-detail">
    <div class="row">
      <div class="columns small-12">
        <h3 id="detail" class="title-medium">詳細情報</h3>

        <table class="table table-striped table-bordered">
          <tr>
            <th class="col-xs-3">会社名</th>
            <td>
              <?php the_field("bengo_name"); ?>
              <?php if (get_field("bengo_name_kana")) { ?>
                 ( <?php the_field("bengo_name_kana"); ?> )
              <?php } ?>
            </td>
          </tr>
          <tr>
            <th>代表者名</th>
            <td><?php the_field(""); ?></td>
          </tr>
          <tr>
            <th>事業紹介</th>
            <td><?php the_field(""); ?></td>
          </tr>
          <tr>
            <th>設立</th>
            <td><?php the_field(""); ?></td>
          </tr>
          <tr>
            <th>従業員数</th>
            <td><?php the_field(""); ?></td>
          </tr>
          <tr>
            <th>所在地</th>
            <td><?php the_field(""); ?></td>
          </tr>
          <tr>
            <th>定休日</th>
            <td><?php the_field("bengo_holiday"); ?></td>
          </tr>
          <tr class="success">
            <th>電話番号/FAX</th>
            <td><?php the_field("bengo_tel"); ?></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td><?php the_field(""); ?></td>
          </tr>
          <tr>
            <th>HP</th>
            <td><a href="<?php the_field("bengo_hp"); ?>" target="_blank"><?php the_field("bengo_hp"); ?></a></td>
          </tr>
        </table>

      </div>
    </div>


    <h3 id="stuff" class="title-medium"><?php the_field("bengo_name"); ?>編集部からのコメント</h3>
    <?php include (TEMPLATEPATH . '/content-stuff.php'); ?>

  </div>
<?php endif; ?>
