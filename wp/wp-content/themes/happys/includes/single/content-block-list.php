
<div class="panel panel-primary">
  <div class="panel-heading"><a href="<?php the_permalink(); ?>" target="_blank" style="color:#fff;"><b><?php the_title(); ?></b></a></div>
  <div class="panel-body">
    <div class="row">
      <div class="columns small-4">
        <p><a href="<?php the_permalink(); ?>" target="_blank">
          <?php
            $image = get_field("bengo_image1");
            if ($image["url"] != "") {
              echo '<img class="media-object" src="'.$image["sizes"]["large"].'" width="279px" />';
            } else {
              echo '<img class="media-object" src="'.get_template_directory_uri().'/images/noimage_sq.jpg" width="277px" style="border:1px solid #cdcdcd;">';
            }
          ?>
        </a></p>
        <h4>
          <?php include (TEMPLATEPATH . '/label-categories.php'); ?>
          <?php include (TEMPLATEPATH . '/label-tags.php'); ?>
        </h4>

      </div>
      <div class="col-xs-8">

        <div class="row">
          <div class="columns small-8">
            <p><?php the_field("bengo_comment"); ?></p>
          </div>

          <div class="columns small-4">
            <div class="alert alert-info">
              <b>お見舞金</b> : <?php the_field("bengo_omimai"); ?>円
            </div>

            <div class="pop-list">
              <?php include (TEMPLATEPATH . '/pop.php'); ?>
            </div>

          </div>
        </div>


        <table class="table-default">
          <tr>
            <th>院名</th>
            <td><?php the_title(); ?></td>
          </tr>
          <tr>
            <th>住所</th>
            <td><?php the_field("bengo_address"); ?></td>
          </tr>
          <tr>
            <th>最寄駅</th>
            <td><?php the_field("bengo_station"); ?></td>
          </tr>
          <tr>
            <th>定休日</th>
            <td><?php the_field("bengo_holiday"); ?></td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td><?php the_field("bengo_open"); ?></td>
          </tr>
        </table>

      </div>
    </div>


    <div class="row">
      <div class="col-xs-8">
        <div class="alert alert-warning">
          <div class="row">
            <div class="col-xs-7">
              まずはお電話でお気軽にご相談ください
            </div>
            <div class="col-xs-5">
              <h4 style="margin-bottom:0;"><span class="glyphicon glyphicon-phone-alt"></span> <?php the_field("bengo_tel"); ?></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-4">
        <a href="/contact?clinic=<?php the_field("bengo_name"); ?>" class="btn btn-primary btn-lg" style="width:100%;">予約治療の希望</a>
      </div>
    </div>




  </div>


  <ul class="list-group">
    <li class="list-group-item text-center"><a href="<?php the_permalink(); ?>"><span class="glyphicon glyphicon-play"></span> 治療院詳細ページへ</a></li>
  </ul>

</div>
