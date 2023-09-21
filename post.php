<?php include_once("templates/header.php"); ?>

    <?php
        if (isset($_GET["id"])) {
            $postId = $_GET["id"];
            $currentPost;

            foreach($posts as $post){
                if ($post["id"] == $postId) {
                    $currentPost = $post;
                }
            }

        }
    ?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost["title"] ?></h1>
            <p id="post-description"><?= $currentPost["description"] ?></p>
            <div class="img-container">
                <img src="img/<?= $currentPost["img"] ?>" alt="<?= $currentPost["title"] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laudantium, nesciunt laborum id facilis magni fuga animi, delectus iure alias, saepe distinctio inventore veritatis ut. Voluptatibus alias optio quia repellat?
            Culpa consectetur asperiores dolore sequi labore dolor impedit excepturi debitis. Recusandae optio, dolorem accusamus vel voluptates tenetur iste beatae perspiciatis ab necessitatibus doloremque, modi a tempora similique culpa ducimus dolores?
            Reiciendis alias praesentium ratione rerum odit, iusto placeat porro est ad beatae saepe minima eos laudantium dolorem eveniet sit blanditiis modi voluptas molestias aliquam a! Commodi suscipit rerum corrupti tenetur?
            Fugiat officia qui quasi, sunt odio culpa corporis unde similique pariatur laborum dolorem ullam voluptatem voluptatibus tempore perspiciatis, nulla nemo quis exercitationem rerum doloribus, dolores debitis. Omnis ad reiciendis quos?
            Quo similique repudiandae tenetur quod nemo rem quia, perspiciatis facere sint adipisci velit aut porro consectetur amet consequatur nobis quis dolores maxime exercitationem quas? Porro repellat ducimus sapiente. Expedita, excepturi!</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laudantium, nesciunt laborum id facilis magni fuga animi, delectus iure alias, saepe distinctio inventore veritatis ut. Voluptatibus alias optio quia repellat?
            Culpa consectetur asperiores dolore sequi labore dolor impedit excepturi debitis. Recusandae optio, dolorem accusamus vel voluptates tenetur iste beatae perspiciatis ab necessitatibus doloremque, modi a tempora similique culpa ducimus dolores?
            Reiciendis alias praesentium ratione rerum odit, iusto placeat porro est ad beatae saepe minima eos laudantium dolorem eveniet sit blanditiis modi voluptas molestias aliquam a! Commodi suscipit rerum corrupti tenetur?
            Fugiat officia qui quasi, sunt odio culpa corporis unde similique pariatur laborum dolorem ullam voluptatem voluptatibus tempore perspiciatis, nulla nemo quis exercitationem rerum doloribus, dolores debitis. Omnis ad reiciendis quos?
            Quo similique repudiandae tenetur quod nemo rem quia, perspiciatis facere sint adipisci velit aut porro consectetur amet consequatur nobis quis dolores maxime exercitationem quas? Porro repellat ducimus sapiente. Expedita, excepturi!</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost["tags"] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

<?php include_once("templates/footer.php"); ?>