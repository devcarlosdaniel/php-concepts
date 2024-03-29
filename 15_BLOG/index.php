<?php
    global $posts, $BASE_URL;

    include_once ("templates/header.php");
?>
    <main>
        <div id="title_container">
            <h1>Blog Dev Roseno</h1>

            <p>O seu blog de progamação</p>
        </div>

        <div id="posts_container">
            <?php foreach ($posts as $post): ?>
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>/assets/images/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">

                    <h2 class="post-title">
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                    </h2>

                    <p class="post-description">
                        <?= $post['description'] ?>
                    </p>

                    <div class="tags-container">
                        <?php foreach ($post['tags'] as $tag): ?>
                            <a href="#"><?= $tag ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
<?php
    include_once("templates/footer.php");
?>