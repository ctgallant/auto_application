<?php> 
require('database.php');
?>
<?php include 'header.php';?>
<main>
    <form action="" method="post">
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
    
    <select name="View_types">
        <option value="View Types">View All Types</option>
        <option value="SUV">SUV</option>
        <option value="Truck">Truck</option>
        <option value="Sedan">Sedan</option>
        <option value="Coupe">Coupe</option>
    </select>

    <select name="View_classes">
        <option value="View Classes">View All Classes</option>
        <option vaule="Utility">Utility</option>
        <option vaule="Economy">Economy</option>
        <option vaule="Luxury">Luxury</option>
        <option vaule="Sports">Sports</option>
    </select>
    </form>

    <p>Sort by:
    <input type="radio" name="sort_by" value="price"> Price
    <input type="radio" name="sort_by" value="year"> Year
    <input type="submit" name="button" value="Submit"/>
    </p>

    <table>
        <tr>
            <th>Year</th>
            <th>Make</th>
            <th>Model</th>
            <th>Type</th>
            <th>Class</th>
            <th>Price</th>
        </tr>

        <tr>
            <td><?php echo $vehicles['vehiclesYear']; ?></td>
            <td><?php echo $vehicles['vehiclesMake']; ?></td>
            <td><?php echo $vehicles['vehiclesModel']; ?></td>
            <td><?php echo $vehicles['vehiclesType']; ?></td>
            <td><?php echo $vehicles['vehiclesClass']; ?></td>
            <td><?php echo $vehicles['vehiclesPrice']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</main> 
<?php include 'footer.php'; ?>
