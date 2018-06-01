<div class="formcontainer">
    <section>
    <h2>Boek bewerken</h2>
        <form action="<?= URL ?>book/updateBook" method="post">
            <p>Naam<br><input class="input" placeholder="Naam van het boek" type="text" value="<?php echo $books['book_name']?>" name="book_name" required></p>
            <p>Auteur<br><input class="input" placeholder="Auteur van het boek" type="text" value="<?php echo $books['book_author']?>" name="book_author" required></p>
            <p>Mening<br><input class="input" placeholder="Mening van het boek"type="text" value="<?php echo $books['book_comment']?>" name="book_comment" required></p>
            <input type="hidden" name="book_id" value="<?php echo $books['book_id']?>">   
            <input class="button" type="submit" value="Boek aanpassen">
        </form>
    </section>
</div>