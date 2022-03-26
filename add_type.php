<?php include 'header.php'; ?>
<main>
    <h1>Vehicle Type List</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input typ="hidden" name="action" value="add_product">

        <table>
        <tr>
            <th>Name</th>
        </tr>

        <tr>
        <td>SUV</td>
        <td>Truck</td>
        <td>Sedan</td>
        <td>Coupe</td>
        <td>Classic</td>
</tr>

<tr>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
    <td><input type="submit" value="Remove"></td>
</tr>
</table>
    <h1>Add Type List</h1>

    <label>Name:</label>
    <input type="text" name="name">

    <input type="submit" value="Add Type">
</form>

<p>View Full Vehicle List</p>
<p>CLick here to add a vehicle.</p>
<p>View/Edit Vehicle Makes</p>
<p>View/Edit Vehicle Classes</p>
</main>
<?php include 'footer.php'; ?>