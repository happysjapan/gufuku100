<?php if ( is_single() ) : ?>
    <div class="row">
      <div class="columns small-12 block-detail--description">
        <h3 id="detail" class="block-detail--description--title">詳細情報</h3>

        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>治療院名</th>
              <td>
                <?php the_title(); ?>
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
              <td><?php the_field("clinic_address"); ?>
                <?php $address = post_custom('clinic_address');
                  if (!empty($address)) {
                    $address2 = urlencode($address);
                    $zoom = 15;
                    $url = "http://maps.google.co.jp/maps?q={$address2}&z={$zoom}";
                    echo "<a href=\"{$url}\" target=\"_blank\">[地図]</a>";
                  }
                  ?>
              </td>
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
            <tr>
              <th>HP2</th>
              <td><a href="<?php the_field("clinic_hp2"); ?>" target="_blank"><?php the_field("clinic_hp2"); ?></a></td>
            </tr>
          </tbody>
        </table>

        <h3 id="stuff" class="block-detail--description--comment_title">編集部からのコメント</h3>
        <p class="block-detail--description--comment"><?php the_field("editor_comment"); ?></p>
    </div>
  </div>


<?php endif; ?>
