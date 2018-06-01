<div class="container">
<h1>Boekenclub van tante Roos</h1>
	<table id="t01">
		<tr>
			<th>#</th>
			<th>Naam</th>
			<th>Auteur</th>
			<th>Mening</th>
			<th></th>
		</tr>
		<?php 
		foreach($books as $book){
			echo "<tr>";
			echo "<td>" . $book['book_id'] . "</td>";
			echo "<td>" . $book['book_name'] . "</td>";
			echo "<td>" . $book['book_author'] . "</td>";
			echo "<td>" . $book['book_comment'] . "</td>";
			echo '<td><a href="'. URL .'book/update?id='.$book['book_id'].'"> Bewerken</a> | <a href="'. URL . 'book/delete/'.$book['book_id'].'">Verwijderen</a></td>';
			echo "</tr>";
		}
		?>
	</table>
	<a id="addbook" href="<?=URL?>book/create">Boek toevoegen</a>
</div>