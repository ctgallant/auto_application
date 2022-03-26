<?php include 'header.php'; ?>
<main>
    <h1>Add Vehicle</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input typ="hidden" name="action" value="add_product">
        
        <label>Make:</label>
        <select name="View_make">
        <option value="View Make">View All Makes</option>
        <option value="Chevy">Chevy</option>
        <option value="Ford">Ford</option>
        <option value="Cadillac">Cadillac</option>
        <option value="Nissan">Nissan</option>
        <option value="Hyundai">Hyundai</option>
        <option value="Dodge">Dodge</option>
        <option value="Infiniti">Infiniti</option>
        <option value="Buick">Buick</option>
    </select>
    
    <label>Type:</label>
    <select name="View_types">
        <option value="View Types">View All Types</option>
        <option value="SUV">SUV</option>
        <option value="Truck">Truck</option>
        <option value="Sedan">Sedan</option>
        <option value="Coupe">Coupe</option>
    </select>

    <label>Class:</label>
    <select name="View_classes">
        <option value="View Classes">View All Classes</option>
        <option vaule="Utility">Utility</option>
        <option vaule="Economy">Economy</option>
        <option vaule="Luxury">Luxury</option>
        <option vaule="Sports">Sports</option>
    </select>

    <label>Year:</label>
    <input type="text" name="year">

    <label>Model:</label>
    <input type="text" name="model">

    <label>Price:</label>
    <input type="text" name="price">

    <input type="submit" value="Add Vehicle">
</form>

<p>View Full Vehicle List</p>
<p>View/Edit Vehicle Makes</p>
<p>View/Edit Vehicle Types</p>
<p>View/Edit Vehicle Classes</p>
</main>
<?php include 'footer.php'; ?>