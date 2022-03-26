<?php include 'header.php'; ?>
<main>
    <h1>Vehicle Class List</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input typ="hidden" name="action" value="add_product">

        <table>
        <tr>
            <th>Name</th>
        </tr>

        <tr>
        <td>Utility</td>
        <td>Economy</td>
        <td>Luxury</td>
        <td>Sports</td>
        <td>Vintage</td>
</tr>

<tr>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
</tr>

</table>
    <h1>Add Vehicle Class</h1>

    <label>Name:</label>
    <input type="text" name="name">

    <input type="submit" value="Add Class">
</form>

<p>View Full Vehicle List</p>
<p>CLick here to add a vehicle.</p>
<p>View/Edit Vehicle Makes</p>
<p>View/Edit Vehicle Classes</p>
</main>
<?php include 'footer.php'; ?>