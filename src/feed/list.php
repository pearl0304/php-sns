<?php
require_once '../../config.php';

$mode= $_GET['mode'] ?? 'list';

$query = 'SELECT * FROM feed WHERE del = "n"';
$ARTICLES = array();

try {
    $result = $db->query($query);

    if ($result) {
        $numRows = $result->rowCount();
        if ($numRows > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $ARTICLES[] = $row;
            }
        } else {
            echo '<div> There are no articles</div>';
        }

    } else {
        echo '<div>⚠️ERROR SQL⚠️</div>';
    }
} catch (PDOException $e) {
    echo "오류: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../public/styles/common.css">
    <link rel="stylesheet" href="../../public/styles/feed.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
            integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

</head>
<body>
<?php include_once "../common/header.php" ?>
<div class="feed-wrap">
    <div class="feed-box">
        <div class="feed-following-list-box">
            <div class="feed-following">
                <a href="#">
                    <div class="following-profile"><img src="/sns/public/images/sample/bunny.png"></div>
                    <div class="following-userid"><span>kylie._.summer</span></div>
                </a>
            </div>
            <div class="feed-following">
                <a href="#">
                    <div class="following-profile"><img src="/sns/public/images/sample/apple.png"></div>
                    <div class="following-userid"><span>apple</span></div>
                </a>
            </div>
            <div class="feed-following">
                <a href="#">
                    <div class="following-profile"><img src="/sns/public/images/icons/user.png"></div>
                    <div class="following-userid"><span>banana</span></div>
                </a>
            </div>
            <div class="feed-following">
                <a href="#">
                    <div class="following-profile"><img src="/sns/public/images/icons/user.png"></div>
                    <div class="following-userid"><span>cute_cat</span></div>
                </a>
            </div>
        </div>
        <div class="feed-contents-box">
            <div class="user_info">
                <div><img src="/sns/public/images/sample/bunny.png"></div>
                <div><span><a href="#">kylie._.summer</a></span></div>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="/sns/public/images/sample/sample1.jpg"></div>
                    <div class="swiper-slide"><img src="/sns/public/images/sample/sample2.jpg"></div>
                    <div class="swiper-slide"><img src="/sns/public/images/sample/sample3.jpg"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <div class="icons">
                <div class="left">
                    <div class="img-box"><img src="/sns/public/images/icons/like.png"></div>
                    <div class="img-box"><img src="/sns/public/images/icons/speech-bubble.png"></div>
                    <div class="img-box"><img src="/sns/public/images/icons/send.png"></div>
                </div>
                <div class="right">
                    <div class="img-box"><img src="/sns/public/images/icons/bookmark_selected.png"></div>
                </div>
            </div>
            <div class="contents-text-box">
                <div class="like-count"><span>1,000</span>likes</div>
                <div class="contents-text">
                    <div class="writer">kylie._.summer</div>
                    <div class="text">Hot Summer😎 <span class="more">...more</span></div>
                </div>
                <div class="comments">view all <span class="comments-count">4</span> comments</div>
            </div>
        </div>
        <div class="feed-contents-box">
            <div class="user_info">
                <div><img src="/sns/public/images/sample/apple.png"></div>
                <div><span><a href="#">apple</a></span></div>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="/sns/public/images/sample/sample1.jpg"></div>
                    <div class="swiper-slide"><img src="/sns/public/images/sample/sample2.jpg"></div>
                    <div class="swiper-slide"><img src="/sns/public/images/sample/sample3.jpg"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <div class="icons">
                <div class="left">
                    <div class="img-box"><img src="/sns/public/images/icons/like_selected.png"></div>
                    <div class="img-box"><img src="/sns/public/images/icons/speech-bubble.png"></div>
                    <div class="img-box"><img src="/sns/public/images/icons/send.png"></div>
                </div>
                <div class="right">
                    <div class="img-box"><img src="/sns/public/images/icons/bookmark.png"></div>
                </div>
            </div>
            <div class="contents-text-box">
                <div class="like-count"><span>1,000</span>likes</div>
                <div class="contents-text">
                    <div class="writer">apple</div>
                    <div class="text">맛있는 사과 <span class="more">...more</span></div>
                </div>
                <div class="comments">view all <span class="comments-count">4</span> comments</div>
            </div>
        </div>
    </div>
</div>
<?php include_once "../common/footer.php" ?>

<script>
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    }
  });
</script>

</body>
</html>