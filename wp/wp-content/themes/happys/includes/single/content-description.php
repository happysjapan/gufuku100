<?php if ( is_single() ) : ?>
  <div class="block-detail--information page_wrapper">
    <div class="row">
      <div class="columns small-12">
        <h3 id="detail" class="block-detail--information--title">詳細情報</h3>

        <table class="table table-bordered">
          <tr>
            <th width="200">治療院名</th>
            <td>
              <?php echo get_field("clinic_name"); ?>
            </td>
          </tr>
          <tr>
            <th>代表者名</th>
            <td><?php the_field("clinic_member_name"); ?></td>
          </tr>
          <tr>
            <th>施術内容</th>
            <td><?php the_field("clinic_description"); ?></td>
          </tr>
          <tr>
            <th>従業員数</th>
            <td><?php the_field("clinic_member_number"); ?>名</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td><?php the_field("clinic_address"); ?></td>
          </tr>
          <tr>
            <th>治療時間</th>
            <td><?php the_field("clinic_time"); ?></td>
          </tr>
          <tr>
            <th>定休日</th>
            <td><?php the_field("clinic_holiday"); ?></td>
          </tr>
          <tr class="success">
            <th>電話番号/FAX</th>
            <td><?php the_field("clinic_tel"); ?></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td><?php the_field("clinic_email"); ?></td>
          </tr>
          <tr>
            <th>HP</th>
            <td><a href="<?php the_field("clinic_hp"); ?>" target="_blank"><?php the_field("clinic_hp"); ?></a></td>
          </tr>
        </table>

        <h3 id="stuff" class="block-detail--information--title">編集部からのコメント</h3>
        <p><?php the_field("editor_comment"); ?></p>
    </div>
  </div>
</div>


<?php endif; ?>
