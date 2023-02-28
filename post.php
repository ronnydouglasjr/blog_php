<?php 

include_once('templates/header.php');

if(isset($_GET['id'])){
    $postId = $_GET['id'];
    $currentPost; 

    foreach($posts as $post){

        if ($post['id'] == $postId){
            $currentPost = $post;
        }

    }
}

?>

<main id="post-container">
    <div class="content-container">
        <h1 class="main-title"><?= $currentPost['title']?></h1>
        <p class="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?php echo $BASE_URL?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ducimus non aspernatur qui, minus odit, quibusdam omnis ad perspiciatis quaerat sit ratione sapiente corrupti. Quos quasi earum nihil explicabo non?
        Alias suscipit libero culpa hic impedit inventore, dolore odit sapiente saepe deleniti quidem, atque labore error maiores consectetur omnis laudantium molestias sequi eveniet esse soluta recusandae aperiam, explicabo ea! Architecto.
        Similique sit illo laudantium, quas unde saepe earum? Architecto eligendi placeat minus ab. Eum maiores expedita facere minus dolore neque exercitationem odit omnis, doloribus cum tempora inventore, voluptates ex. Placeat.
        Vitae quibusdam, libero aliquam, architecto dolorum necessitatibus omnis odio numquam maiores quo commodi nam. Soluta, rerum. Voluptates, odit dolorem molestias expedita explicabo cumque corrupti soluta, perferendis cum ratione placeat provident?
        Culpa accusamus facilis cum ad assumenda numquam, veritatis beatae officia, excepturi vitae natus animi ratione repellendus ab. A, fuga dolore, asperiores alias aliquam id ut tempore corrupti, at saepe distinctio.</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-container">Tags</h3>
        <ul class="tags-list"> 
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php include_once('templates/footer.php'); ?>
</body>
</html>
    