<?php if ( is_single() ) : ?>
  <div class="block-detail--information page_wrapper">
    <div class="row">
      <div class="columns small-12">
        <h3 id="detail" class="block-detail--information--title">詳細情報</h3>

        <table class="table table-bordered">
          <tr>
            <th width="200">会社名</th>
            <td>
              <?php echo get_field("shop_company_name"); ?>
            </td>
          </tr>
          <tr>
            <th>代表者名</th>
            <td><?php the_field("shop_member_name"); ?></td>
          </tr>
          <tr>
            <th>事業紹介</th>
            <td><?php the_field("shop_description"); ?></td>
          </tr>
          <tr>
            <th>設立</th>
            <td><?php the_field("shop_establish"); ?>年</td>
          </tr>
          <tr>
            <th>従業員数</th>
            <td><?php the_field("shop_member_number"); ?>名</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td><?php the_field("shop_address"); ?></td>
          </tr>
          <tr>
            <th>定休日</th>
            <td><?php the_field("shop_date"); ?></td>
          </tr>
          <tr class="success">
            <th>電話番号/FAX</th>
            <td><?php the_field("shop_tel"); ?></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td><?php the_field("shop_email"); ?></td>
          </tr>
          <tr>
            <th>HP</th>
            <td><a href="<?php the_field("shop_hp"); ?>" target="_blank"><?php the_field("shop_hp"); ?></a></td>
          </tr>
        </table>

        <h3 id="stuff" class="block-detail--information--title">編集部からのコメント</h3>
        <p>text<?php the_field("editor_comment"); ?></p>
    </div>
  </div>
</div>


<?php endif; ?>
