  <?php //echo '<pre>';   print_r($records); exit(); ?>
  <section class="clearfix">
    <section class="video-wrpr">
      <img src="<?php echo base_url(); ?>assets/img/video-bg.png">
      <div class="top-video-info">
        <div>
          <div class="top-play-btn"><img src="<?php echo base_url(); ?>assets/img/video-play-btn.png"></div>
          <h2 class="top-video-title text-upppercase">the ubsung heroes</h2>
          <div class="top-video-discrp">
            They practise their sport, day in and day out, without complain, without expectation <br class="hidden-small" />for a country that doesn’t even know they exist. Now, it’s time to show them we <br class="hidden-small"/>care. It’s time to make our voices heard. It’s time to say <span>#Garvhai</span>
          </div>          
        </div>
      </div>      
      <div class="vedio-title-wrpr">
        <div class="vedio-hero-title text-uppercase">Inderjeet Singh</div>
        <div class="vedio-hero-desig">Shot putter</div>
      </div>
      <div class="js--jumper" data-href="#hero-wrpr"><img src="<?php echo base_url(); ?>assets/img/scroll-down.png"></div>
    </section>
    </section>
    <section id="hero-wrpr" class="heros-list">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="row">
              <div class="know-txt">
                Know more about the men and women striving to make India proud.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="row">
              <?php 
              if(isset($records)){
                foreach($records as $playerData) { ?>          
                  <div class="col-xs-4 col-xs-20 overlay-wrpr">
                    <div class="heros-name text-uppercase"><?php echo $playerData['name']; ?></div>
                    <div class="row">
                      <img src="<?php echo base_url(); ?>uploads/<?php echo $playerData['profile_photo']; ?>" class="full-width-img">
                    </div>
                    <div class="hover-overlays"></div>
                    <div class="user-prof-wrpr text-center">
                      <div class="text-uppercase prof-name-wrpr"><?php echo $playerData['name']; ?></div>
                      <div class="profile-btn text-uppercase" data-lr="20%" data-tb="tl" data-playermode="profile" data-playerid="<?php echo $playerData['id']; ?>"><span class="anim-btn-bg"></span><span class="anim-btn-txt">profile</span></div>
                      <div class="profile-btn text-uppercase" data-lr="20%" data-tb="tl" data-playermode="videos" data-playerid="<?php echo $playerData['id']; ?>">videos & images</div>
                      <div class="profile-btn text-uppercase" data-lr="20%" data-tb="tl" data-playermode="media" data-playerid="<?php echo $playerData['id']; ?>">Media</div>
                      <div class="text-uppercase supp-ply-txt">support player</div>
                      <div class="heros-social-links">
                        <ul class="list-inline">
                          <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li>
                          <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <?php } 
              } ?>
              <div class="col-xs-40 col-xs-4 hero-detail-info hidden">
                <div class="hero-detail-inner hero-detail-inner-profile hidden">
                  <div class="hero-detail-top">
                    <div class="hero-detail-top-in">
                      <div class="hero-achive-wrpr">
                        <div class="hero-achive-con">
                          <div class="hero-achive-name text-uppercase">INDERJEET SINGH</div>
                          <div class="hero-achive-event">(Shot Put)</div>
                        </div>
                        <div class="hero-achive-time">
                          28.5
                        </div>
                        <div class="hero-achive-time">
                          22.5 
                        </div>
                        <div class="hero-achive-time">
                          22.1
                        </div>
                      </div>
                      <div class="hero-detail-social-icon text-center">
                        <div>Support Inderjeet</div>
                        <ul class="list-inline">
                          <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li>
                          <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="hero-detail-middle">
                    <div class="hero-detail-middle-name text-uppercase">
                      INDERJEET SINGH
                    </div>
                    <table class="table table-bordered hero-achive-tab">
                      <tr>
                        <td>Qlympic Qualifying Standard</td>
                        <td>Olympic Qualifying throw</td>
                        <td>Personal Best</td>
                        <td>Recent Training </td>
                      </tr>
                      <tr class="bold-row">
                        <td>20.50m</td>
                        <td>20.50m</td>
                        <td>20.50m</td>
                        <td class="recent-traning-txt">Focusing on strength training</td>
                      </tr>
                    </table>
                    <div class="list-title">Major Contest Participated</div>
                    <ul class="achive-list">
                      <li>World Athletics Championship, China – Finished 11th</li>
                      <li>World University Games, South Korea - Gold</li>
                      <li>Asian Grand Prix, Thailand- Gold</li>
                      <li>Asian Athletics Championship, China - Gold</li>
                    </ul>
                    <div class="list-title">Major Contest Participated</div>
                    <ul class="achive-list">
                      <li>South Asian Games, Guwahati and Shillong</li>
                      <li>2016 World Indoor Championship, Portland</li>
                      <li>South Asian Games, Guwahati and Shillong</li>
                      <li>2016 World Indoor Championship, Portland</li>
                    </ul>
                  </div>
                  <div class="hero-detail-bottom">
                    <div class="share-txt-mob">Support</div>
                    <div class="hero-bottom-btn-wrpr">  
                      <div class="back-btn text-uppercase">
                        &lt;&lt; back
                      </div>
                      <div class="media-btn-mob">
                        Media
                      </div>
                      <div class="socil-btn-mob">
                        <a href="#">
                          <img src="img/fb-w.png">
                        </a>
                      </div>
                      <div class="socil-btn-mob">
                        <a href="#">
                          <img src="img/fb-w.png">
                        </a>
                      </div>
                    </div>
                  </div>                  
                </div>
                <div class="hero-detail-inner hero-detail-inner-media hidden">
                  <div class="hero-detail-top">
                    <div class="hero-detail-top-in">
                      <div class="media-title">Media</div>                      
                    </div>
                  </div>
                  <div class="hero-detail-middle">
                    <div class="media-list-wrpr">
                      
                    </div>
                  </div>
                  <div class="hero-detail-bottom">
                    <div class="share-txt-mob share-txt-mob-med">Share</div>
                    <div class="hero-bottom-btn-wrpr">  
                      <div class="back-btn text-uppercase">
                        &lt;&lt; back
                      </div>
                      <div class="media-btn-mob">
                        Media
                      </div>
                      <div class="socil-btn-mob">
                        <a href="#">
                          <img src="img/fb-w.png">
                        </a>
                      </div>
                      <div class="socil-btn-mob">
                        <a href="#">
                          <img src="img/fb-w.png">
                        </a>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>             
            </div>
          </div>
        </div>
      </div>      
    </section>
    <section class="heros-gellary">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 light-box-wrpr-fliter">
            <div class="row">
              <div class="col-xs-12">
                <div class="row">
                  <div class="hero-filter clearfix">
                    <div class="col-xs-12">
                      <div class="filter-title">Catch the athletes in action</div>
                      <div class="custom-label-vid text-uppercase">
                        videos &amp; images
                      </div>
                      <div class="select-style">
                          <select>
                           <?php 
                            if(isset($records)){
                              foreach($records as $playerData) { ?>
                                <option value="<?php echo $playerData['id'];?>"><?php echo $playerData['name'];?></option>
                                <?php }
                            } ?>
                          </select>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="row">              
              <div class="col-xs-4 col-xs-40 light-box-wrpr-fliter">
                <div>
                  <div class="col-xs-12">
                    <div class="hero-filter hero-filter-desk clearfix">
                      <div class="col-xs-12">
                        <div class="filter-title">Catch the athletes in action</div>                     
                      </div>
                        <?php 
                        if(isset($records)){
                          $count = 0;
                          $loopCount = 1;
                          foreach($records as $playerData) { 
                            if($count == 0){
                              echo '<div class="col-sm-6 col-xs-12 hidden-small">
                                      <ul class="cust-inp-wrpr">';
                            }
                            $count=$count+1;
                            ?>
                                  <li>
                                    <input type="radio" id="players_<?php echo $playerData['id'];?>" name="players" value="<?php echo $playerData['id'];?>">
                                      <label class="custom-radio text-uppercase" for="players_<?php echo $playerData['id'];?>">
                                        <?php echo $playerData['name'];?>
                                      </label>
                                  </li>
                          <?php 
                              if($count == 5){
                                echo '</ul>';
                                  if($loopCount == 1){
                                    echo '<div class="btn filter-btn text-uppercase btn-default">
                                      Videos &amp; IMAGES
                                    </div>';
                                  }
                                  echo '</div>';
                                $count = 0;
                                $loopCount = $loopCount+1;
                              }
                            }
                          } ?>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="row">
                          <img src="<?php echo base_url();?>assets/img/trans-bg.png" class="full-width-img">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="row">
                          <img src="<?php echo base_url();?>assets/img/trans-bg.png" class="full-width-img">
                        </div>
                      </div>
                    </div>
                  </div>                                      
                </div>                
              </div>
              <div class="replace-filter-data">
                <?php 
                if(isset($videoRecords)){
                  foreach($videoRecords as $videoData) { ?> 
                    <div class="col-xs-4 col-xs-20 light-box-wrpr">
                      <div class="row">
                        <a href="<?php echo $videoData['link']; ?>" data-toggle="modal" data-target="#myModal" rel="prettyPhoto[gallery1]">
                          <img src="<?php echo base_url(); ?>uploads/player.jpg" class="full-width-img">
                          <div class="light-box-overlay video-overlay"></div>
                        </a>                  
                      </div>                
                    </div>
              <?php }
                } ?>
            </div>
            </div>
          </div>
        </div>
      </div>      
    </section>

<!-- Modal -->
<div class="modal fade modal-light-box" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="modal-body">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="<?php echo base_url(); ?>assets/img/video-bg.png">
              </div>
              <div class="item">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2Y_HcgKrBhI" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <img src="<?php echo base_url(); ?>assets/img/previous.png">              
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <img src="<?php echo base_url(); ?>assets/img/next.png">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      <div class="modal-footer">
        <div class="heros-social-links">
        <ul class="list-inline">
          <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li>
          <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>
   