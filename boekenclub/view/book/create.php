<div class="formcontainer">
    <section>
        <h2>Boek toevoegen</h2>
        <form action="<?= URL ?>book/addBook" method="post">
            <p>Boek naam<br><input class="input" placeholder="Naam van het boek" type="text" name="name" required></p>
            <p>Boek auteur<br><input class="input" placeholder="Auteur van het boek" type="text" name="author" required></p>
            <p>Boek mening<br><input class="input" placeholder="Mening van het boek" type="text" name="comment" required></p>
            <input class="button" type="submit" value="Boek toevoegen">
        </form>
    </section>
</div>