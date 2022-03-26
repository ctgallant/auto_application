<?php include 'header.php'; ?>
<main>
    <h1>Vehicle Make List</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input typ="hidden" name="action" value="add_product">
    <table>
        <tr>
            <th>Name</th>
        </tr>

        <tr>
        <td>Chevy</td>
        <td>Ford</td>
        <td>Cadillac</td>
        <td>Nissan</td>
        <td>Hyundai</td>
        <td>Dodge</td>
        <td>Infiniti</td>
        <td>Buick</td>
        <td>Oldsmobile</td>
</tr>

<tr>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
</tr>
</table>

    <h1>Add Vehicle Make</h1>

    <label>Name:</label>
    <input type="text" name="name">

    <input type="submit" value="Add Make">
</form>

<p>View Full Vehicle List</p>
<p>CLick here to add a vehicle.</p>
<p>View/Edit Vehicle Types</p>
<p>View/Edit Vehicle Classes</p>
</main>
<?php include 'footer.php'; ?>