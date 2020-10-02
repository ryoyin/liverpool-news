<table>
    <tr>
        <td>name</td>
        <td>age</td>
        <td>email</td>
    </tr>
    <?php foreach($customers as $customer): ?>
    <tr>
        <td><?php echo $customer->name; ?></td>
        <td><?php echo $customer->age; ?></td>
        <td><?php echo $customer->email; ?></td>
    </tr>
    <?php endforeach; ?>
    
</table>