<h5>Contacts déjà ajoutés à la liste de distribution</h5>

<table class="table mt-2">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Courriel</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($contacts as $contact) { ?>
        <tr>
            <td><?php echo $contact->prenom; ?></td>
            <td><?php echo $contact->courriel; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
