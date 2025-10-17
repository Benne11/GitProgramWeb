
<?php foreach ($jokes as $joke): ?>
    <blockquote>
        <p>
            <?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8')?>
        </p>
        
        <?php if (!empty($joke['img'])): ?>
            <div class="joke-image">
                <img src="img/<?=htmlspecialchars($joke['img'], ENT_QUOTES, 'UTF-8')?>" 
                     alt="Joke Image"
                     style="max-width: 300px;">
            </div>
        <?php endif; ?>

        <form action="deletejoke.php" method="post">
            <input type="hidden" name="id" value="<?=htmlspecialchars($joke['id'], ENT_QUOTES, 'UTF-8')?>">
            <input type="submit" value="Delete">
        </form>
    </blockquote>
<?php endforeach; ?>