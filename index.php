<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuto Yamashita</title>
    <script src="https://kit.fontawesome.com/bc5866313f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="header">
        <h1 class="header-title">Shuto Yamashita</h1>
    </section>
    
    <section class="about">
            <div class="about-main">
                <div class="portrait">
                    <img src="images/myprofile.JPG" alt="">
                </div>
                <div class="about-right">
                    <div class="about-container">
                        <div class="profile">
                            <p>山下愁人(Shuto Yamashita)</p>
                            <p>1999年7月生まれ。</p>
                            <p>愛知県尾張旭市を拠点にWeb制作をしております。</p>
                        </div>
                    </div>
                    <div class="progress-items">
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width:70%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">HTML & CSS</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:40%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">JavaScript & jQuery</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width:20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">PHP</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="widows: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">WordPress</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="readMore">
                <p>Read More</p>
                <i class="fas fa-chevron-down arrow"></i>
            </div>
            <div class="profile-detail">
                <p>山下愁人(Shuto Yamashita)</p>
                <p>愛知文教大学人文学部人文学科に在学中</p>
                <p>将来の夢はフリーランスエンジニアになってドイツに住むこと</p>
            </div> -->
    </section>

    <section class="services">
        <div class="service-items">
            <div class="service-item coading">
                <div class="service-item-sum">
                    <div class="service-item-sum">
                        <i class="fas fa-pencil-alt"></i>
                        <h2>コーディング</h2>
                    </div>
                </div>
                <p>お客様のご希望通りに<br class="br-1440px"><br class="br-425px">ホームページや<br class="br-1024px"><br class="br-768px">LPの制作を<br class="br-425px">致します。<br class="br-1440px"><br class="br-1024px"><br class="br-768px">レスポンシブ対応も可能です。</p>
            </div>
            <div class="service-item design">
                <div class="service-item-sum">
                    <i class="fas fa-palette"></i>
                    <h2>Webデザイン</h2>
                </div>
                <p>お客様の満足して頂けるような<br class="br-1440px"><br class="br-1024px"><br class="br-768px">ホームページをデザインさせて頂きます。<br class="br-1440px"><br class="br-1024px"><br class="br-768px"><br class="br-425px">なおイメージをお伝え頂ければ<br class="br-1440px"><br class="br-1024px"><br class="br-768px">イメージに沿って作成<br class="br-425px">致します。</p>
            </div>
            <div class="service-item wordpress">
                <div class="service-item-sum">
                    <i class="fab fa-wordpress"></i>
                    <h2>WordPress</h2>
                </div>
                <p>WordPressでのHP制作や<br class="br-1440px"><br class="br-1024px"><br class="br-425px">オリジナルテーマの<br class="br-768px">作成、<br class="br-1440px"><br class="br-425px">既存のサイトのWordPress化も<br class="br-1440px"><br class="br-768px"><br class="br-425px">対応させて頂きます。</p>
            </div>
        </div>
    </section>

    <section class="price">
        <div class="price-items .container">
            <div class="row">
                <div class="col">コーディング1P<br class="br-1024px"><br class="br-768px"><br class="br-425px">(レスポンシブ対応可)</div>
                <div class="col">6000円～</div>
            </div>
            <div class="row">
                <div class="col">Webデザイン1P</div>
                <div class="col">6000円～</div>
            </div>
            <div class="row">
                <div class="col">LP制作</div>
                <div class="col">3万円～</div>
            </div>
            <div class="row">
                <div class="col">HP作成(10ページ以下)</div>
                <div class="col">8万～</div>
            </div>
            <div class="row">
                <div class="col">WordPressでの<br class="br-1024px"><br class="br-768px"><br class="br-425px">ホームぺージ作成</div>
                <div class="col">10万～</div>
            </div>
          </div>
    </section>

    <section class="portfolio">
        <div class="portfolio-slider container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="4000">
                    <img src="/images/New My Portfolio-top.png" class="d-block w-100" alt="...">
                  </div> 
                  <div class="carousel-item" data-interval="4000"> data-interval="10000"
                    <img src="images/satie-top.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-interval="4000">
                    <img src="http://placehold.jp/1920x1080.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="portfolio-btn">
                <button type="button" class="btn btn-outline-light"><a href="https://drive.google.com/drive/folders/1VdTqoYwLjlkXPU-s-09_U_mfjLFhTFw0?usp=sharing">制作実績一覧</a></button>
            </div>
    </section>

    <section class="contact">
        <div class="contact-item">
            <h2>お問い合わせ</h2>
            <div class="form">
                <form action="index.php" method="get">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">氏名</label>
                      <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="山田太郎">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">メールアドレス</label>
                      <input type="email" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">お問い合わせ内容</label>
                      <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                        <input type="submit" class="btn btn-outline-light">Submit
                  </form>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="copylight">
            <p>&copy;Shuto Yamashita</p>
        </div>
    </section>

    <?php
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");
        $to="mountaindown730@gmail.com"
        $name=$_POST['name'];
        $mail=$_POST['mail'];
        $content=$_POST['content'];
        if(mb_send_mail($to,$name,$mail,$content)) {
            echo "メールを送信しました";
        } else {
            echo "メールの送信に失敗しました";
        }

    ?>
    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
    <script src="./script/script.js" type="text/javascript"></script>
</body>
</html>