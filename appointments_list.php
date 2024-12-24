<?php
include 'includes/header.php';
include 'includes/db_functions.php';

$appointments = get_appointments();
?>

<h1>Расписание врачей</h1>

<table>
    <thead>
        <tr>
            <th>����</th>
            <th>�������</th>
            <th>����</th>
            <th>�����</th>
            <th>������</th>        
	</tr>
    </thead>
    <tbody>
        <?php foreach ($appointments as $appointment): ?>
            <tr>
                <td><?php echo $appointment['doctor_name']; ?></td>
                <td><?php echo $appointment['patient_name']; ?></td>
                <td><?php echo $appointment['appointment_date']; ?></td>
                <td><?php echo $appointment['appointment_time']; ?></td>
                <td><?php echo $appointment['status']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php include 'includes/footer.php'; ?>

