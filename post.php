<?php 
    include_once('templates/header.php'); 
    if (isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;
        foreach ($posts as $post) {
            if ($post['id']==$postId) {
                $currentPost = $post;
            }
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-tatle"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius unde eligendi mollitia itaque porro. Deleniti similique soluta quidem, veniam sit corrupti inventore amet? Dolor labore nesciunt nihil consequatur neque impedit!
            Vero sit ipsa, esse inventore eos officia atque eveniet facere blanditiis, nihil soluta, nobis mollitia voluptatum sed. Fugit molestiae cupiditate illo cumque eos numquam quas. Quidem reprehenderit atque repellendus ipsum?
            Pariatur, corporis quisquam obcaecati debitis, commodi dolores amet similique repellat, adipisci sunt eveniet ipsum illum molestiae tempore? Dolore harum quasi laboriosam recusandae neque est tempora consequatur nobis, modi, non vel.
            Blanditiis suscipit iure eligendi reprehenderit sed consequuntur magnam, quae incidunt aspernatur modi dolor voluptates nesciunt odit! Autem accusamus officia aliquid in! Repudiandae, debitis repellat itaque optio dolorum amet nemo veritatis!
            Dicta molestias fugiat suscipit, excepturi aspernatur neque velit placeat veritatis nihil voluptas dolores perspiciatis tenetur. Maxime ducimus alias ullam voluptatem hic nam labore velit deleniti laborum totam. Distinctio, fugit enim?</p>

            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius unde eligendi mollitia itaque porro. Deleniti similique soluta quidem, veniam sit corrupti inventore amet? Dolor labore nesciunt nihil consequatur neque impedit!
            Vero sit ipsa, esse inventore eos officia atque eveniet facere blanditiis, nihil soluta, nobis mollitia voluptatum sed. Fugit molestiae cupiditate illo cumque eos numquam quas. Quidem reprehenderit atque repellendus ipsum?
            Pariatur, corporis quisquam obcaecati debitis, commodi dolores amet similique repellat, adipisci sunt eveniet ipsum illum molestiae tempore? Dolore harum quasi laboriosam recusandae neque est tempora consequatur nobis, modi, non vel.
            Blanditiis suscipit iure eligendi reprehenderit sed consequuntur magnam, quae incidunt aspernatur modi dolor voluptates nesciunt odit! Autem accusamus officia aliquid in! Repudiandae, debitis repellat itaque optio dolorum amet nemo veritatis!
            Dicta molestias fugiat suscipit, excepturi aspernatur neque velit placeat veritatis nihil voluptas dolores perspiciatis tenetur. Maxime ducimus alias ullam voluptatem hic nam labore velit deleniti laborum totam. Distinctio, fugit enim?</p>
        </div>
    </main>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul class="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>    
            <?php endforeach; ?> 
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>    
            <?php endforeach; ?>
            </ul>
        </ul>
    </aside>

<?php include_once('templates/footer.php'); ?>