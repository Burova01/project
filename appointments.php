<?php
// Функции для работы с базой данных SQLite

function connect_db() {
  $db = new SQLite3('db/appointments.db');
  return $db;
}

function add_appointment($doctor, $patient, $date, $time) {
    $db = connect_db();
    $stmt = $db->prepare("INSERT INTO appointments (doctor_name, patient_name, appointment_date, appointment_time) VALUES (:doctor, :patient, :date, :time)");
    $stmt->bindValue(':doctor', $doctor);
    $stmt->bindValue(':patient', $patient);
    $stmt->bindValue(':date', $date);
    $stmt->bindValue(':time', $time);
    $stmt->execute();
    $db->close();
}

function get_appointments() {
    $db = connect_db();
    $result = $db->query("SELECT * FROM appointments");
    $appointments = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $appointments[] = $row;
    }
    $db->close();
    return $appointments;
}

// ... другие функции для редактирования и удаления записей ...
?>

